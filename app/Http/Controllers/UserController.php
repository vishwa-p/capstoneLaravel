<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {
    //

    // public function registerForm() {

    //     return view( 'users.register' );

    // }

    // public function add() {

    //     $attributes = request()->validate( [
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required',
    //         'roles' => 'required',
    // ] );

    //     $user = new User();
    //     $user->name = $attributes[ 'name' ];

    //     $user->email = $attributes[ 'email' ];
    //     $user->password = bcrypt( $attributes[ 'password' ] );
    //     $user->role = $attributes[ 'roles' ];

    //     $user->save();

    //     return redirect( '/auth/register' )
    //     ->with( 'message', 'User has been added!!!!' );

    // }

    public function list() {

        return view( 'users.list', [
            'users' => User::all()
        ] );

    }

    public function addForm() {

        return view( 'users.add' );

    }

    public function add() {

        $attributes = request()->validate( [
            'first' => 'required',
            'last' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ] );

        $user = new User();
        $user->first = $attributes[ 'first' ];
        $user->last = $attributes[ 'last' ];
        $user->email = $attributes[ 'email' ];
        $user->password = bcrypt( $attributes[ 'password' ] );
        $user->save();

        return redirect( '/console/users/list' )
        ->with( 'message', 'User has been added!' );

    }

}
