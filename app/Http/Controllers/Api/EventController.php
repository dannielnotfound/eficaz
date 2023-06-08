<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Event;

class EventController extends Controller
{

    public function __construct(protected Event $model)
    {}
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $events = $this->model->all();

        return response()->json($events);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateRequest $request)
    {
        $event = $this->model->create($request->all());

        return response()->json($event);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        if(!$event = $this->model->find($id)){
            return response()->json([
                "error" => "Not found",
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json($event);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateRequest $request, string $id)
    {
        if(!$event = $this->model->find($id)){
            return response()->json([
                "error" => "Not found",
            ], Response::HTTP_NOT_FOUND);
        }

        $event->update($request->all());

        return response()->json($event);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!$event = $this->model->find($id)){
            return response()->json([
                "error" => "Not found"
            ], Response::HTTP_NOT_FOUND);
        }

        $event->delete($id);

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
