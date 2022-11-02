<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WorkspaceResource;
use App\Models\Workspace;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $workspaces = Workspace::all();
        return WorkspaceResource::collection($workspaces);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $workspace = Workspace::create($request->all());
        
        return new WorkspaceResource($workspace);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function show(Workspace $workspace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function edit(Workspace $workspace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workspace $workspace)
    {
        //
        $workspace->update($request->all());
        
        return new WorkspaceResource($workspace);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workspace $workspace)
    {
        //
        $workspace->delete();

        return response(null, 204);
    }
}
