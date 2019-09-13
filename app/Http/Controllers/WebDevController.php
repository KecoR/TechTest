<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use App\User;

class WebDevController extends Controller
{
    public function saveData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|regex:/^[a-zA-Z\s]+$/u|min:1|max:50',
            'email' => 'required|unique:users,email',
            'profile_image' => 'required',
            'status' => 'required',
        ])->validate();

        $user = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->status = $request->get('status');

        $avatar = $request->file('profile_image');
        $allowed_extension = ['png','jpg','jpeg','bmp'];
        if(!empty($avatar) && in_array(strtolower($avatar->getClientOriginalExtension()),$allowed_extension)){
            $file_name = Str::slug($request->get('name'),'-').'.'.$avatar->getClientOriginalExtension();
            // $avatar->move(public_path().'/image/users/',$file_name); 

            $request->file('profile_image')->storeAs('public/profile_images', $file_name);
 
            if(!file_exists(public_path('image/users/crop'))) {
                mkdir(public_path('image/users/crop'), 0755);
            }

            $img = \Image::make($avatar);
            $img->save(public_path('image/users'.$file_name));
            $croppath = public_path('image/users/crop/'.$file_name);
    
            $img->crop($request->input('w'), $request->input('h'), $request->input('x1'), $request->input('y1'));
            $img->save($croppath);
            $user->image = $file_name;
        }

        $user->save();

        return redirect()->route('webdev')->with('status', 'Data Berhasil Ditambah');
    }
}
