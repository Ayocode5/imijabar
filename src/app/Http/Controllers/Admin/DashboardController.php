<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $total_news = DB::table('blogs')->count();
        $total_projects = DB::table('projects')->count();
        $total_services = DB::table('services')->count();
        $total_team_members = DB::table('team_members')->count();
        $total_photos = DB::table('photos')->count();
        $total_videos = DB::table('videos')->count();
        $total_completed_orders = DB::table('orders')->where('payment_status','Completed')->count();
        $total_pending_orders = DB::table('orders')->where('payment_status','Pending')->count();

        return view('admin.home', compact([
            'total_news',
            'total_projects',
            'total_services',
            'total_team_members',
            'total_photos',
            'total_videos',
            'total_completed_orders',
            'total_pending_orders',
        ]));
    }
}