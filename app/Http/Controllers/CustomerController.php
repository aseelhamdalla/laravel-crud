<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Rules\FullnameRule;
class CustomerController extends Controller
{
    public function show()
    { return view('register');  }


    public function list()
    { $users = User::all();
        return view ('customertable',['users'=>$users] );  }


    public function insert(Request $request)
    { $request->validate([
            'nationalid'=> 'required|digits:10',
            'fullname'  => ['required',new FullnameRule()],
            'email'     => 'required|email',
            'mobile'    => 'required',
            'address'   => 'required',
            'image'     => 'required',
            'role'        => 'required',

            ]);  
        $user = new User();
        $user->nationalid    = $request->input('nationalid');
        $user->fullname      = $request->input('fullname');
        $user->email         = $request->input('email');
        $user->mobile        = $request->input('mobile');
        $user->address       = $request->input('address');
        $user->role          =$request->input('role');

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

        $user->save();
        return $this->list();    }  

     //edit and update ////////////////////////////////
    public function edit($id)
    { $users = User::find($id);
        return view('edituser',compact('users')); }
       
    

    public function update(Request $request,$id){
       $request-> validate([
            'nationalid'   => 'required|digits:10',
            'fullname'     => ['required',new FullnameRule()],
            'email'        => 'required|email',
            'mobile'       => 'required',
            'address'      => 'required',
            'image'        => 'required',
            'role'        => 'required',

            ]);  
        $user = User::find($id);
        $user->nationalid    = $request->input('nationalid');
        $user->fullname      = $request->input('fullname');
        $user->email         = $request->input('email');
        $user->mobile        = $request->input('mobile');
        $user->address       = $request->input('address');
        $user->role          =$request->input('role');

        if ($request->hasfile('image')){
            $file=$request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename= time(). '.'. $extension;
            $file->move('uploads/photo/',$filename);
            $user->image =$filename;   
        }else{
        //  return $request;
            $user->image='';
        } 
        
        $user->save();

        // $this->list();
        return redirect('/customertable');
    }


/////// delet/////////////////////////////////////
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/table');
    }
////////////////////////////////////////////////////////
           public function show3(){
            $users = User::all();
        //  $users = User::find($id);
            return view ('grid',compact('users'));  
     
         }

         public function trainee($id){   
            $users = User::find($id);
            return view ('single', ['users'=>$users,"id"=>$id]);  
        }

        ////-------------login ****************************************
                public function show2()
               {
                 return view('login');   }
                 


       public function insert2(Request $request){
        $user = new User();
        $user->fullname      = $request->input('fullname');
        $user->email         = $request->input('email');
        $users = User::all();
        foreach($users as $u ){
            if($u->email ==$user->email ){
              if($u->role=="admin"){

            return redirect('customertable'); 

             }else{return redirect('grid');} 

            }
            }
        $check_user = \DB::table('users')
        ->where('fullname', 'LIKE',  $user->fullname ) 
        ->first();
    
        if($check_user) {
        return response('This user already exists', 422);
        }else{
        return redirect('/register');
                                          }
    

}
    

}