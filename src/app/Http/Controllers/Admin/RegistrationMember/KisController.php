<?php

namespace App\Http\Controllers\Admin\RegistrationMember;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;
use Illuminate\Support\Facades\Gate;

class KisController extends Controller
{
    public function index()
    {
        
        if (!Gate::allows('view-registration')) {
            abort(403);
        }

        $spreadsheet_id = app()['config']['google']['config']['kis_spreadsheet_id'];

        $rows = Sheets::spreadsheet($spreadsheet_id)->sheet('Form Responses KIS')->get();

        $header = $rows->pull(0);
        $values = Sheets::collection($header, $rows);
        $values = $values->toArray();

        return view('admin.register_member.kis.index', compact('values', 'spreadsheet_id'));
    }
}
