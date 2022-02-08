<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $menus = Menu::orderBy('id', 'asc')->get();
        return view('admin.menu.index', compact('menus'));
    }

    public function update(Request $request)
    {

        $i=0;
        foreach($request->menu_id as $value)
        {
            $arr1[$i] = $value;
            $i++;
        }

        $i=0;
        foreach($request->status as $value)
        {
            $arr2[$i] = $value;
            $i++;
        }

        for($i=0;$i<count($arr1);$i++)
        {
            $data = array();
            $data['status'] = $arr2[$i];
            DB::table('menus')->where('id', $arr1[$i])->update($data);
        }

        return redirect()->route('admin.menu.index')->with('success', 'Menu is updated successfully!');
    }
}
