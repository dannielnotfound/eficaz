<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Http\Requests\StoreUpdateRequest;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function __construct(
        protected Event $model
    ){}

    public function index()
    {
        $events = $this->model->all();

        return view('site.index', compact('events'));
    }

    public function show($id)
    {
        $event = $this->model->find($id);

        if(!$event){
            return redirect()->back();
        }

        return view('site.show', compact('event'));
    }

    public function show_user_events()
    {   
        $user_id = auth()->id();

        $user = User::findOrFail($user_id);
    
        if (!$user) {
            return redirect()->back();
        }
    
        $user_events = $this->model->where('user_id', $user_id)->get();
    
        return view('site.show_user_events', compact('user_events'));
    }


    public function create()
    {
        return view('site.create');
    }

    public function store(StoreUpdateRequest $request)
    {

        // Obtém o usuário autenticado
        $user = Auth::user();

        $data = $request->validated();
        $data['user_id'] = $user->id;
        $this->model->fill($data);
        $this->model->save();

        return redirect()->route('events.index');
    }

    public function edit($id)
    {
        $event = $this->model->find($id);
        $user_id = auth()->id();
        
        if(!$event || $event->user->id != $user_id){
            return redirect()->back();
        }

        return view('site.edit', compact('event'));
    }

    public function update(StoreUpdateRequest $request, $id)
    {
        $event = $this->model->find($id);
        $user_id = auth()->id();

        if(!$event){
            return redirect()->back();
        }

        if($event->user->id === $user_id)
        {
            $event->update($request->all());
        }


        return redirect()->route('events.index');

    }

    public function destroy($id)
    {
        $event = $this->model->find($id);
        $user_id = auth()->id();

        if(!$event){
            return redirect()->route('events.index');
        }

        if($event->user->id === $user_id)
        {
            $event->delete();
        }


        return redirect()->route('events.index');
    }
}
