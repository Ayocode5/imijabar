<?php

namespace App\Http\Controllers\Admin\Registrations;

use App\Http\Controllers\Controller;
use App\Models\Admin\Registration\ClubRegistration;
use Illuminate\Support\Facades\Gate;

class ClubController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth:web");
    }

    public function index() {

        if(!Gate::allows('view-registration')) {
            abort(403);
        }

        $registrars = ClubRegistration::orderBy("created_at", 'DESC')->get();
        return view('admin.registrations.club.index', compact('registrars'));

    }

    public function generatePDF(int $id) {

        if (!Gate::allows('view-registration')) { abort(403); }

        $registrar = ClubRegistration::find($id);

        // dd($registrar);

        return response()->view('admin.registrations.club.outputforms', compact("registrar"));
        
    }
}
