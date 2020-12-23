<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\People;
use App\User;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('register');
    }


    public function list()
    {
        $users = User::all();
        return view ('customertable',
                     ['users'=>$users]

        );           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        $this->validate($request,[
            'nationalid'   => 'required|digits:10',
                'fullname' => 'required|digits:5',
                'email'    => 'required|email',
                'address'  => 'required',
                'image'    => 'required',
                'role'     => 'required'   
                ]);
    
    //   $this->create($request);
      $user = new User();
        
      $user->fullname      = $request->input('fullname');
      $user->email         = $request->input('email');
      $user->mobile        = $request->input('mobile');
      $user->address       = $request->input('address');
      $user->image         = $request->input('image');

      $user->role  = $request->input('role');

      $user->save();
                    //  dd($users);
      return redirect('/table');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $users = User::find($id);
    //     return view('edituser',compact('users'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $this->validate($request,[
    //         'nationalid' => 'required|digits:10',
    //             'fullname' => 'required|digits:5',
    //             'email' => 'required|email',
    //             'address' => 'required',
    //             'image' => 'required',   
    //             'role' => 'required'   

    //             ]);
    //     // $this->create($request);
    //     $user = User::find($id);


    //     $user->fullname      = $request->input('fullname');
    //   $user->email     = $request->input('email');
    //   $user->mobile     = $request->input('mobile');
    //   $user->address  = $request->input('address');     
    //   $user->image  = $request->input('image');
    //       $user->address  = $request->input('role');


    //     $user->save();
    //     //dd($user)
    //     return redirect('/table');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function delete($id)
    // {
    //     $user = User::find($id);
    //     $user->delete();
    //     return redirect('/table');
    // }
}
