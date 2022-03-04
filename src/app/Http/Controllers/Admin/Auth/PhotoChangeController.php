<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class PhotoChangeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $admin_data = User::where('id', auth()->user()->id)->first();
        return view('admin.auth.photo_change', compact('admin_data'));
    }

    public function update(Request $request)
    {
        $fileName = '';

        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Unlink old photo
        if ($request->current_photo) {
            if (file_exists(public_path('uploads/' . $request->current_photo))) {
                unlink(public_path('uploads/' . $request->current_photo));
            }
            preg_match('/(user-)(.*).(jpg|png|jpeg|gif)/', $request->current_photo, $user_photo_split);
            $fileName = $user_photo_split[1] . $user_photo_split[2] . '.' . $request->file('photo')->getClientOriginalExtension();
        } else {
            $fileName = 'user-' . Uuid::uuid4() . '.' . $request->file('photo')->getClientOriginalExtension();
        }

        // Uploading new photo

        $request->file('photo')->move(public_path('uploads/'), $fileName);

        $data['photo'] = $fileName;

        User::where('id', auth()->user()->id)->update($data);

        return redirect()->back()->with('success', 'Photo is updated successfully!');
    }
}
