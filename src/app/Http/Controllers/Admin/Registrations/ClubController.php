<?php

namespace App\Http\Controllers\Admin\Registrations;

use App\Http\Controllers\Controller;
use App\Models\Admin\Registration\ClubRegistration;
use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;
use Illuminate\Support\Facades\Gate;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

class ClubController extends Controller
{
    private static $spreadsheet_id;

    public function __construct()
    {
        $this->middleware("auth:web");
        self::$spreadsheet_id = app()['config']['google']['config']['club_spreadsheet_id'];
    }

    public function index() {

        if(!Gate::allows('view-registration')) {
            abort(403);
        }

        // $rows = Sheets::spreadsheet(self::$spreadsheet_id)->sheet('Form Responses Club')->get();

        // $header = $rows->pull(0);
        // $values = Sheets::collection($header, $rows);
        // $values = $values->toArray();

        // $spreadsheet_id = self::$spreadsheet_id;
        // return view('admin.registrations.club.index', compact('values', 'spreadsheet_id'));

        $registrars = ClubRegistration::orderBy("created_at", 'DESC')->get();
        return view('admin.registrations.club.index', compact('registrars'));

    }

    public function generatePDF(int $id) {

        if (!Gate::allows('view-registration')) { abort(403); }

        // $range = 1 + $index;
        // $range = "A$range:C$range";

        // $values = Sheets::spreadsheet(self::$spreadsheet_id)->sheet('Form Responses Club')->range($range)->get()[0];

        // $data = [
        //     'date' => $values[0],
        //     'club_name' => $values[1],
        //     'total_member' => $values[2]
        // ];

//        return view("admin.registrations.club.outputforms");


        $registrar = ClubRegistration::find($id);

        $pdf = PDF::loadView('admin.registrations.club.outputforms', $registrar)->setPaper("A4", "portrait");
        $fileName = "pendaftaran-club-" . $registrar->nama_klub . "-" . $registrar->created_at . ".pdf";

        return $pdf->download($fileName);
    }
}
