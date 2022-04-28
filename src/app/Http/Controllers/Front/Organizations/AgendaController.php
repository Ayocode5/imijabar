<?php

namespace App\Http\Controllers\Front\Organizations;

use App\Http\Controllers\Controller;
use App\Models\Admin\Organizations\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
    }

    public function agenda_data($category = null, Request $request)
    {

        $agendas = Agenda::query()->select([
            'name',
            'date',
            'description',
            'type',
            'created_at'
        ]);

        if (!is_null($category)) {
            $agendas->where('type', $category);
        }


        $agendas = $agendas->orderBy("created_at", "DESC")
            ->paginate($request->perPage ? $request->perPage : 10);

        return response()->json($agendas, 200);
    }
}
