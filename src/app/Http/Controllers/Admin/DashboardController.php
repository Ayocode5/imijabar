<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {

        // $preview = Image::make(Storage::disk('public')->get('hasil-tes-pramusim-motogp-2022-hari-pertama-sesi-1-marc-marquez-melempem-aleix-espargaro-menggila-iMt04weg3u.jpg'));

        // return $preview->response();

        $total_news = DB::table('blogs')->count();
        $total_events = DB::table('events')->where('deleted_at', null)->count();
        $total_sports = DB::table('sports')->count();
        $total_team_members = DB::table('team_members')->count();
        $total_photos = DB::table('photos')->count();
        $total_videos = DB::table('videos')->count();
        // $total_completed_orders = DB::table('orders')->where('payment_status','Completed')->count();
        // $total_pending_orders = DB::table('orders')->where('payment_status','Pending')->count();

        return view('admin.home', compact([
            'total_news',
            'total_events',
            'total_sports',
            'total_team_members',
            'total_photos',
            'total_videos',
        ]));
    }
}