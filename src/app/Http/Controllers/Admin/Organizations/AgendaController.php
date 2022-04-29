<?php

namespace App\Http\Controllers\Admin\Organizations;

use App\Http\Controllers\Controller;
use App\Http\Requests\Organizations\Agenda\AgendaStoreRequest;
use App\Models\Admin\Organizations\Agenda;
use Illuminate\Support\Carbon;

class AgendaController extends Controller
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

        $agendas = Agenda::orderBy("created_at", "DESC")->where("type", "activity")->get();
        return view("admin.organizations.agenda.index", compact("agendas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Agenda::class);

        return view("admin.organizations.agenda.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgendaStoreRequest $request)
    {
        // dd($request);
        $this->authorize('create', Agenda::class);

        if(Agenda::create([
            "type" => "activity",
            "name" => $request->name,
            "date" => Carbon::parse($request->date),
            "description" => $request->description
        ])) {
            return redirect()->route("admin.organizations.agenda.index")->with("success", "New Agenda Created Successfully");
        }

        return redirect()->route("admin.organizations.agenda.index")->withErrors("Failed To Create Agenda");

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

        $agenda = Agenda::find($id);
        return view("admin.organizations.agenda.edit", compact("agenda"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AgendaStoreRequest $request, $id)
    {
        $this->authorize('update', Agenda::class);

        $agenda = Agenda::find($id);

        // dd(Carbon::parse($request->date));

        $agenda->update([
            "type" => "activity",
            "name" => $request->name,
            "date" => Carbon::parse($request->date),
            "description" => $request->description
        ]);

        return redirect()->route("admin.organizations.agenda.index")->with("success", "Agenda is Updated Successfully");

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

        return redirect()->route("admin.organizations.agenda.index")->with("success", "Agenda is Deleted Successfully");

    }
}
