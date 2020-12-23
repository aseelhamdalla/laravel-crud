<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rules\FullnameRule;
class CustomerController extends Controller
{
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

    public function insert(Request $request)
    {

        $this->validate($request, [
            'nationalid'   => 'required|digits:10',
          'fullname' => ['required',new FullnameRule()],
            'email'    => 'required|email',
            'mobile'    => 'required',
            'address'  => 'required',
            'image'    => 'required',
            'role'     => 'required' ]);  

           
      
        $user = new User();
        $user->nationalid     = $request->input('nationalid');
        $user->fullname      = $request->input('fullname');
        $user->email         = $request->input('email');
        $user->mobile        = $request->input('mobile');
        $user->address       = $request->input('address');
      
        if ($request->hasfile('image')){
            $file=$request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename= time(). '.'. $extension;
            $file->move('uploads/photo/',$filename);
            $user->image =$filename;   
        }else{
            return $request;
            $user->image='';
        }  
        $user->role  = $request->input('role');
        $user->save();
        return $this->list();  //like header location
    }


    public function edit($id)
    {
        $users = User::find($id);
        return view('edituser',compact('users')); 
    }


    public function update(Request $request,$id)
    {
        // $this->validation();
        $this->validate($request, [
            'nationalid'   => 'required|digits:10',
          'fullname' => ['required',new FullnameRule()],
            'email'        => 'required|email',
            'mobile'       => 'required',
            'address'      => 'required',
            'image'        => 'required',
            'role'         => 'required'   ]);

        $user = User::find($id);

        $user->nationalid    = $request->input('nationalid');
        $user->fullname      = $request->input('fullname');
        $user->email         = $request->input('email');
        $user->mobile        = $request->input('mobile');
        $user->address       = $request->input('address');

        if ($request->hasfile('image')){
            $file=$request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename= time(). '.'. $extension;
            $file->move('uploads/photo/',$filename);
            $user->image =$filename;   
        }else{
         return $request;
            $user->image='';
        } 
        
        
        $user->role  = $request->input('role');
        $user->save();

        // $this->list();
        return redirect('/customertable');
    }



    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/table');
    }
////////////////////////////////////////////////////////
    public function show2()
    {
       return view('login');
    }


    public function list2()
    {   $users = User::all();
        return view ('logintable',
                     ['users'=>$users]
        );  
             foreach($users as $key=>$value){
              if($users["role"]=="admin"){

          return redirect('customertable');        
              }else{return redirect('grid');
                                            }    
              }
    }
    


           public function show3(){

            $users = User::all();
        //  $users = User::find($id);
            return view ('grid',compact('users'));  
     
         }
         public function trainee($id){   
            $users = User::find($id);
            return view ('single', ['users'=>$users,"id"=>$id]);  
        }
     
      
    
}
