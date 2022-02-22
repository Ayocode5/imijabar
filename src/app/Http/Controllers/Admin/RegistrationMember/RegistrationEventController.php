<?php

namespace App\Http\Controllers\Admin\RegistrationMember;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Revolution\Google\Sheets\Facades\Sheets;

class RegistrationEventController extends Controller
{
    public function index() {

        if(!Gate::allows('view-registration')) {
            abort(403);
        }

        $spreadsheet_id = app()['config']['google']['config']['event_spreadsheet_id'];

        $rows = Sheets::spreadsheet($spreadsheet_id)->sheet('Sheet1')->get();

        $header = $rows->pull(0);
        $values = Sheets::collection($header, $rows);
        $values = $values->toArray();

        return view('admin.register_member.event.index', compact('values', 'spreadsheet_id'));
    }
}
