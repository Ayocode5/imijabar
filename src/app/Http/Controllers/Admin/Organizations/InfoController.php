<?php

namespace App\Http\Controllers\Admin\Organizations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Organizations\Agenda;

class InfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Agenda::class);

        $informations = Agenda::orderBy("created_at", "DESC")->where("type", "info")->get();
        return view("admin.organizations.info.index", compact("informations"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Agenda::class);

        return view("admin.organizations.info.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Agenda::class);

        if(Agenda::create([
            "type" => "info",
            "name" => $request->name,
            // "date" => $request->date,
            "description" => $request->description
        ])) {
            return redirect()->route("admin.organizations.info.index")->with("success", "New Info Created Successfully");
        }

        return redirect()->back()->withErrors("Failed To Create Info");
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
        $this->authorize('update', Agenda::class);

        $info = Agenda::find($id);
        return view("admin.organizations.info.edit", compact("info"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('update', Agenda::class);

        $agenda = Agenda::find($id);

        $agenda->update([
            "type" => "info",
            "name" => $request->name,
            // "date" => $request->date,
            "description" => $request->description
        ]);

        return redirect()->route("admin.organizations.info.index")->with("success", "Info is Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', Agenda::class);

        $agenda = Agenda::find($id);
        $agenda->delete();

        return redirect()->route("admin.organizations.info.index")->with("success", "Info is Deleted Successfully");
    }
}
