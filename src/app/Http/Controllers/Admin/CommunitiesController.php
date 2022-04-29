<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Communities\CommunityStoreRequest;
use App\Http\Requests\Communities\CommunityUpdateRequest;
use App\Models\Admin\Community;
use App\Repository\Communities\CommunityRepository;

class CommunitiesController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:web");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $communities = Community::orderBy("created_at", "DESC")->get();
        return view("admin.communities.index", compact("communities"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.communities.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommunityStoreRequest $request, CommunityRepository $communityRepository)
    {
        if($communityRepository->storeData($request)) {
            return redirect()->route("admin.communities.index")->with("success", "New Club Created Successfuly");
        };

        return redirect()->back()->withErrors("Failed to Add New Club");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $community = Community::find($id);
        return view("admin.communities.edit", compact("community"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CommunityUpdateRequest $request, $id, CommunityRepository $communityRepository)
    {
        if($communityRepository->updateData($request, $id)) {
            return redirect()->route("admin.communities.index")->with("success", "Club Updated Successfuly");
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, CommunityRepository $communityRepository)
    {   
        if($communityRepository->deleteData($id)) {
            return redirect()->route("admin.communities.index")->with("success", "Club Has Deleted Successfully");
        }
    }
}
