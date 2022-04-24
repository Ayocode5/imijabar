<?php

namespace App\Http\Controllers\Admin\RegistrationMember;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;
use Illuminate\Support\Facades\Gate;
use Barryvdh\DomPDF\Facade\Pdf;

class ClubController extends Controller
{
    private static $spreadsheet_id;

    public function __construct()
    {
        self::$spreadsheet_id = app()['config']['google']['config']['club_spreadsheet_id'];
    }

    public function index() {

        if(!Gate::allows('view-registration')) {
            abort(403);
        }

        $rows = Sheets::spreadsheet(self::$spreadsheet_id)->sheet('Form Responses Club')->get();

        $header = $rows->pull(0);
        $values = Sheets::collection($header, $rows);
        $values = $values->toArray();

        $spreadsheet_id = self::$spreadsheet_id;
        return view('admin.register_member.club.index', compact('values', 'spreadsheet_id'));
    }

    public function generatePDF(int $index) {

        if (!Gate::allows('view-registration')) { abort(403); }

        $range = 1 + $index;
        $range = "A$range:C$range";

        $values = Sheets::spreadsheet(self::$spreadsheet_id)->sheet('Form Responses Club')->range($range)->get()[0];

        $data = [
            'date' => $values[0],
            'club_name' => $values[1],
            'total_member' => $values[2]
        ];

        $pdf = Pdf::loadView('admin.register_member.club.outputforms', $data);
    
        $fileName = "pendaftaran-club-" . $data['club_name'] . "-" . $data['date'] . ".pdf";

        return $pdf->download($fileName);
    }
}
