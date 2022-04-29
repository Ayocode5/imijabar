<?php

namespace App\Http\Controllers\Admin\Registrations;

use App\Http\Controllers\Controller;
use App\Models\Admin\Registration\KISRegistration;
use Illuminate\Support\Facades\Gate;

class KisController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:web");
    }

    public function index()
    {
        if (!Gate::allows('view-registration')) {
            abort(403);
        }

        $registrars = KISRegistration::orderBy("created_at", "DESC")->get();

        return view('admin.registrations.kis.index', compact("registrars"));
    }

    public function generatePDF(int $id) {

        if (!Gate::allows('view-registration')) { abort(403); }
        
        $registrar = KISRegistration::find($id);

        return response()->view('admin.registrations.kis.outputforms', compact("registrar"));

    }
}
