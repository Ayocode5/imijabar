<?php

namespace App\Http\Controllers\Admin\RegistrationMember;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Revolution\Google\Sheets\Facades\Sheets;
use Barryvdh\DomPDF\Facade\Pdf;

class RegistrationEventController extends Controller
{

    private static $spreadsheet_id;

    public function __construct()
    {
        self::$spreadsheet_id = app()['config']['google']['config']['event_spreadsheet_id'];    
    }

    public function index() {

        if(!Gate::allows('view-registration')) {
            abort(403);
        }

        $rows = Sheets::spreadsheet(self::$spreadsheet_id)->sheet('Registrasi Event')->get();

        $header = $rows->pull(0);
        $values = Sheets::collection($header, $rows);
        $values = $values->toArray();

        $spreadsheet_id = self::$spreadsheet_id;
        return view('admin.register_member.event.index', compact('values', 'spreadsheet_id'));
    }

    public function generatePDF(int $index) {

        if (!Gate::allows('view-registration')) { abort(403); }

        $range = 1 + $index;
        $range = "A$range:C$range";

        $values = Sheets::spreadsheet(self::$spreadsheet_id)->sheet('Registrasi Event')->range($range)->get()[0];

        $data = [
            'date' => $values[0],
            'name' => $values[1],
            'club_name' => $values[2]
        ];

        $pdf = Pdf::loadView('admin.register_member.event.outputforms', $data);
    
        $fileName = "pendaftaran-event-" . $data['club_name'] . "-" . $data['date'] . ".pdf";

        return $pdf->download($fileName);
    }
}
