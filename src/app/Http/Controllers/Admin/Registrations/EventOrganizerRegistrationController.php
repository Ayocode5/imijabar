<?php

namespace App\Http\Controllers\Admin\Registrations;

use App\Http\Controllers\Controller;
use App\Models\Admin\Registration\EORegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Revolution\Google\Sheets\Facades\Sheets;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

class EventOrganizerRegistrationController extends Controller
{

    private static $spreadsheet_id;

    public function __construct()
    {
        $this->middleware("auth:web");
        self::$spreadsheet_id = app()['config']['google']['config']['event_spreadsheet_id'];
    }

    public function index() {

        if(!Gate::allows('view-registration')) {
            abort(403);
        }

        // $rows = Sheets::spreadsheet(self::$spreadsheet_id)->sheet('Registrasi Event')->get();

        // $header = $rows->pull(0);
        // $values = Sheets::collection($header, $rows);
        // $values = $values->toArray();

        // $spreadsheet_id = self::$spreadsheet_id;

        $registrars = EORegistration::orderBy("created_at", "DESC")->get();

        return view('admin.registrations.event.index', compact("registrars"));
    }

    public function generatePDF(int $id) {

        if (!Gate::allows('view-registration')) { abort(403); }

        // $range = 1 + $index;
        // $range = "A$range:C$range";

        // $values = Sheets::spreadsheet(self::$spreadsheet_id)->sheet('Registrasi Event')->range($range)->get()[0];

        // $data = [
        //     'date' => $values[0],
        //     'name' => $values[1],
        //     'club_name' => $values[2]
        // ];

        $registrar = EORegistration::find($id);

        // dd($registrar);

        $pdf = PDF::loadView('admin.registrations.event.outputforms', compact("registrar"));

        $fileName = "pendaftaran-event-" . $registrar->nama_event . "-" . $registrar->created_at . ".pdf";

        return $pdf->download($fileName);
    }
}
