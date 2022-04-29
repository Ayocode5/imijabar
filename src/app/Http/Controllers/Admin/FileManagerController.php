<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class FileManagerController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth:web");
    }

    public function __invoke()
    {
    
        if(!Gate::allows('view-file-manager')) {
            abort(403, "This Action is Unauthorized");
        }

        return view('admin.file_manager.index');
    }
}
