<?php

namespace App\Http\Controllers\ChangePassword;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('Controllers.ChangePassword.changepassword');
    }

    public function changepasswordPost(Request $request)
    {
        $data = User::where('email', auth()->user()->email)->first();
        $password = $request->password;
        $new_password = $request->new_password;

        $request->validate([
            'password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);

        if ($data) {
            if (Hash::check($password, $data->password)) {
                User::where('email', auth()->user()->email)
                    ->update([
                        'password' => bcrypt($new_password)
                    ]);
                return redirect()->back()->with('success', 'menggantikan');
            } else {
                return redirect()->back();
            }
        }
    }
}
