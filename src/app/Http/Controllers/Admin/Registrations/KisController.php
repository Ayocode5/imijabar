<?php

namespace App\Http\Controllers\Admin\Registrations;

use App\Http\Controllers\Controller;
use App\Models\Admin\Registration\KISRegistration;
use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;
use Illuminate\Support\Facades\Gate;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

class KisController extends Controller
{

    private static $spreadsheet_id;

    public function __construct()
    {
        $this->middleware("auth:web");
        self::$spreadsheet_id = app()['config']['google']['config']['kis_spreadsheet_id'];
    }

    public function index()
    {
        if (!Gate::allows('view-registration')) {
            abort(403);
        }

        // $rows = Sheets::spreadsheet(self::$spreadsheet_id)->sheet('Form Responses KIS')->get();

        // $header = $rows->pull(0);
        // $values = Sheets::collection($header, $rows);
        // $values = $values->toArray();

        // $spreadsheet_id = self::$spreadsheet_id;

        $registrars = KISRegistration::orderBy("created_at", "DESC")->get();

        return view('admin.registrations.kis.index', compact("registrars"));
    }

    public function generatePDF(int $id) {

        if (!Gate::allows('view-registration')) { abort(403); }

        // $range = 1 + $index;
        // $range = "A$range:C$range";

        // $values = Sheets::spreadsheet(self::$spreadsheet_id)->sheet('Form Responses KIS')->range($range)->get()[0];

        // $data = [
        //     'date' => $values[0],
        //     'name' => $values[1],
        //     'age' => $values[2]
        // ];
        
        $registrar = KISRegistration::find($id);

        // dd($registrar);
        // return view('admin.registrations.kis.outputforms', compact("registrar"));

        $pdf = PDF::loadView('admin.registrations.kis.outputforms', $registrar)->setPaper("a4", "portrait");

        $fileName = "pendaftaran-kis-" . $registrar->nama . "-" . $registrar->nomor_kta . ".pdf";

        return $pdf->download($fileName);
    }
}
