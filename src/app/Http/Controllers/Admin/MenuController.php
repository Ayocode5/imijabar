<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $menus = Menu::orderBy('id', 'asc')->get();
        return view('admin.menu.index', compact('menus'));
    }

    public function update(Request $request)
    {

        echo '<pre>';
        print_r(request('menu_id'));
        echo '</pre>';

        echo '<pre>';
        print_r(request('menu_status'));
        echo '</pre>';

        $i=0;
        foreach(request('menu_id') as $value)
        {
            $arr1[$i] = $value;
            $i++;
        }

        $i=0;
        foreach(request('menu_status') as $value)
        {
            $arr2[$i] = $value;
            $i++;
        }

        for($i=0;$i<count($arr1);$i++)
        {
            $data = array();
            $data['menu_status'] = $arr2[$i];
            DB::table('menus')->where('id', $arr1[$i])->update($data);
        }

        return redirect()->route('admin.menu.index')->with('success', 'Menu is updated successfully!');
    }
}
