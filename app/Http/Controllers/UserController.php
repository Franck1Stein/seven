<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
        if($request->hasFile('image')) { //if image is available grab it n perform necessary action

          User::uploadAvatar($request->image);

          // helper session
          $request->session()->flash('message', 'Image Uploaded.');

          // $filename = $request->image->getClientOriginalName();
          //
          // $this->deleteOldImage();
          //
          // $request->image->storeAs('images', '$filename', 'public');

          // User::find(1)->update(['avatar' => $filename]);
          // auth()->user()->update(['avatar' => $filename]);

          return redirect()->back(); // success message

        }

        // $request->session()->flash('error', 'Image not updated.');
        return redirect()->back()->with('error', 'Image not updated.'); //error message
    }


    public function index() {

      $data = [
        'name' => 'Elon',
        'email'=> 'elorm@MasterNodes.com',
        'password' => 'password',
      ];

       // User::create($data);

      // $user = new User(); Think about Facades like u don't have to
      // inialize the $user

       // var_dump() dd()
       // $user = User::all();
       // dd($user);

       // User::where('id', 1)->delete();

      /**
       *    DB::insert('
       *              INSERT INTO users(name,email,password) values (?,?,?)
       *            ',
       *             [
       *             'Stein','Kom@gmail.com','password'
       *            ]
       *    );
       */

       //$user = new User();

       //$user->name = 'kehops';
       //$user->email = 'iges@gmail.com';
       //$user->password = bcrypt('password');

       // User::where('id', 1)->update(['name' => 'Frank1Stein']);

       $user = User::all();
       return $user;

      return view('home');

    }
}
