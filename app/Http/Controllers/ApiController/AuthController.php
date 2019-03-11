<?php

namespace App\Http\Controllers\ApiController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;

class AuthController extends Controller
{
    //

    public function doLogin(Request $request){
		$credentials = $request->only('email');

        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'nullable'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error','response_body'=> $validator->errors() ,'error_msg' => 'Validation failed'],422);
        }

        $users = user::where($credentials)->first();

        if(count($users)>0){
        	return response()->json(['status' => 'success','response_body'=> $users ,'message' =>'logged in successfully']);
        }else{
        	 return response()->json(['status' => 'error','response_body'=> '' ,'message' => 'Invalid Email and Password'],422);
        }
        	
    }
}
