<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Db;
use Validator;
use Carbon\Carbon;

use App\User;

class UserController extends Controller
{
    public function index(){
        $user_list = User::where('status' ,1);

        $data['user_list'] = $user_list->where('deleted_at' ,null)->orderBy('created_at' ,'DESC')->paginate(10);
        return view('Admin.index' ,$data);

    }

    public function create(){
        return view('Admin.create');

    }

    public function edit($id){
        $data['user_list'] = User::where('id' ,$id)->first();
        return view('Admin.edit' ,$data);
        

    }


    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'email'  => 'required|email:rfc,dns|unique:users,email',
            'mobile'  => 'required|digits:10|unique:users,mobile',
            'role_id'  => 'required',
        ]);

        if(!$validator->passes()){
            return response()->json(['status'=>0 ,'error'=>$validator->errors()->toArray()]);
        }else{
            $values = [
                'first_name' => $request->first_name,
                'last_name'  => $request->last_name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'role_id' => $request->role_id,
                'password' => bcrypt($request->mobile),
            ];

            $query = DB::table('users')->insert($values);

            if($query){
                return response()->json(['status'=>1 ,'msg'=>'User Added']);
            }
        }

    }


    public function update(Request $request , $id){
        $validator = Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'email'  => 'required|email:rfc,dns',
            'mobile'  => 'required|digits:10',
            'role_id'  => 'required',
        ]);

        if(!$validator->passes()){
            return response()->json(['status'=>0 ,'error'=>$validator->errors()->toArray()]);
        }else{
            $values = [
                'first_name' => $request->first_name,
                'last_name'  => $request->last_name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'role_id' => $request->role_id,
            ];

            $query = DB::table('users')->where('id', $id)
            ->update(['first_name' =>$request['first_name'],
            'last_name'=>$request['last_name'],
            'email'=>$request['email'],
            'mobile'=>$request['mobile'],
            'role_id'=>$request['role_id'],
            'password' => bcrypt($request['mobile']),


            ]);

            if($query){
                return response()->json(['status'=>1 ,'msg'=>'User updated']);
            }
        }

    }


    public function delete($id){
        try{
            $v = User::where('id' ,$id)->first();

            $v->deleted_at = Carbon::now();
            $v->update();

            return redirect('/admin')->with('message','User  deleted successfully!');

        }catch(Exception $ex){

        }
    }

}
