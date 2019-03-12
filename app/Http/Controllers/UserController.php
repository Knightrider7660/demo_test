<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\HttP\Requests;
use App\Http\Resources\User as UserResource;

class UserController extends Controller
{
    public function index(){
        $user = User::paginate(15);
        //return UserResource::collection($user);
        return response()->json($user);
    }

    public function single($id){
        $user = User::findOrFail($id);
        return new UserResource($user);
    }
}
