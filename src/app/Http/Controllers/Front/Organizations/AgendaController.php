<?php

namespace App\Http\Controllers\Front\Organizations;

use App\Http\Controllers\Controller;
use App\Models\Admin\Organizations\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index() {

    }

    public function agenda_data($category, Request $request) {

       $agendas = Agenda::where("type", $category)->orderBy("created_at", "DESC")->paginate($request->perPage ? $request->perPage : 10);

       return response()->json($agendas, 200);

    }
}
