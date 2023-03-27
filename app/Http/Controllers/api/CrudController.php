<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    public function index(){
        
        $users = User::all();
        if($users->count() > 0){

            return response()->json([
                'status' => 200,
                'User' => $users,
            ], 200);
        }else{

            return response()->json([
                'status' => 404,
                'message' => 'No Records Found',
            ], 404);
        }
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'firstName'  =>  'required|string|max:191',
            'lastName'   =>  'required|string|max:191',
            'middleName' =>  'required|string|max:191',
            'username'   =>  'required|string|max:191',
            'password' =>    'required|string|max:191',
        ]);

        if($validator->fails()){

            return response()->json([
                'status'  => 422,
                'message' => $validator->messages()
            ],422);
        }else{

            $users = User::create([
                'firstName'  =>  $request->firstName,
                'lastName'   =>  $request->lastName,
                'middleName' =>  $request->middleName,
                'username'   =>  $request->username,
                'password'   =>  $request->password,
            ]);

            if($users){

                return response()->json([
                    'status'  => 200,
                    'message' => 'Account Successfully Created'
                ], 200);

            }else{

                return response()->json([
                    'status'  => 500,
                    'message' => 'Something went Wrong!'
                ], 500);
            }
            
        }
    }
}
