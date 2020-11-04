<?php

namespace App\Http\Controllers;

use App\Http\Resources\Topicality as ResourcesTopicality;
use App\Models\Topicality;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class TopicalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ResourcesTopicality::collection(Topicality::orderByDesc('created_at')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Topicality::create($request->all())) {
            return Response()->json([
                'success' => 'Topicality created'
            ], 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Topicality  $topicality
     * @return \Illuminate\Http\Response
     */
    public function show(Topicality $topicality)
    {
        return new ResourcesTopicality($topicality);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Topicality  $topicality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topicality $topicality)
    {
        if($topicality->update($request->all())) {
            return Response()->json([
                'success' => 'Topicality updated'
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topicality  $topicality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topicality $topicality)
    {
        if($topicality->delete()) {
            return Response()->json([
                'success' => 'Topicality deleted'
            ], 200);
        }
    }
}
