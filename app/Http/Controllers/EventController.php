<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Requests\StoreUpdateRequest;
class EventController extends Controller
{
    public function __construct(
        protected Event $model
    ){}

    public function index(Request $request)
    {   
        $filter = $request->filter;

        if($filter)
        {
            $events =   $this->model
                            ->where(function ($query) use ($filter) {
                                if($filter){
                                $query->where('name', 'like', "%{$filter}%"); 
                                $query->orWhere('city', 'like',  "%{$filter}%"); 
                                }
                            })
                            ->get();    
        }
        else
        {
            $events = $this->model->all();
        }


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

    public function create()
    {
        return view('site.create');
    }

    public function store(StoreUpdateRequest $request)
    {

        $this->model->create($request->all());
        return redirect()->route('events.index');
    }

    public function edit($id)
    {
        $event = $this->model->find($id);

        if(!$event){
            return redirect()->back();
        }

        return view('site.edit', compact('event'));
    }

    public function update(StoreUpdateRequest $request, $id)
    {
        $event = $this->model->find($id);
        if(!$event){
            return redirect()->back();
        }

        $event->update($request->all());

        return redirect()->route('events.index');

    }

    public function delete($id)
    {
        $event = $this->model->find($id);
        if(!$event){
            return redirect()->back();
        }

        return view('site.delete', compact('event'));
    }

    public function destroy($id)
    {
        $event = $this->model->find($id);
        if(!$event){
            return redirect()->route('events.index');
        }

        $event->delete();

        return redirect()->route('events.index');
    }
}
