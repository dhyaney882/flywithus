<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $flight = User::all();
        return view('admin.users.userview',compact('flight'));
    }
    public function edit($id){
        $user=User::where('id',$id)->first();
        return view('admin.users.edit',compact('user'));
           }
          
    public function updateUser(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'role'=>'required',
            'email' => 'required',
        ]
        );

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->role = $request->role;
        $user->email = $request->email;
        
       
       
        if ($user->save()) {
           
             return redirect('admin/users/')->with('success', 'User Updated Successfully.');
        }

        return redirect('admin/users/edit-user/' . $id)->with('errors', ['Sorry Some Error Occured.Please Try Again']);
    }
    


           public function destroy($id)
    {
        $flight = User::find($id);
        if($flight->delete()){
            return redirect('admin/users')->with('status', 'user deleted successfully');
        }
        else return redirect('admin/users')->with('status', 'There was an error');
        
    }
    public function searchuserForAdmin(Request $request){

        $searched=$request->searched;
        $data= User::orWhere('name','Like',"%$searched%")->orWhere('email','Like',"%$searched%")->get();
        return view('admin.users.searchuser',compact('data','searched'));
    }
    
    
    }

