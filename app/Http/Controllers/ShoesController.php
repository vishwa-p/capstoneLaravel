<?php

namespace App\Http\Controllers;

use App\Models\Shoes;
use Illuminate\Http\Request;

class ShoesController extends Controller {
    public function list() {
        return view( 'shoes.list', [
            'shoesList' => Shoes::all()
        ] );
    }

    public function addForm() {
        return view( 'shoes.add' );
    }

    public function add() {

        $attributes = request()->validate( [
            'name' => 'required',
            'description' => 'required',
            'type' => 'required',
            'brand' => 'required',
            'price' => 'required'
        ] );

        $shoes = new Shoes();
        $shoes->name = $attributes[ 'name' ];
        $shoes->description = $attributes[ 'description' ];
        $shoes->type = $attributes[ 'type' ];
        $shoes->brand = $attributes[ 'brand' ];
        $shoes->price = $attributes[ 'price' ];

        $shoes->save();

        return redirect( '/shoes/list' )
        ->with( 'message', 'Shoe has been added!' );
    }

    public function editForm( Shoes $shoes ) {
        return view( 'shoes.edit', [
            'shoe' => $shoes
        ] );
    }

    public function edit( Shoes $shoes ) {

        $attributes = request()->validate( [
            'name' => 'required',
            'description' => 'required',
            'type' => 'required',
            'brand' => 'required',
            'price' => 'required'
        ] );

        $shoes->name = $attributes[ 'name' ];
        $shoes->description = $attributes[ 'description' ];
        $shoes->type = $attributes[ 'type' ];
        $shoes->brand = $attributes[ 'brand' ];
        $shoes->price = $attributes[ 'price' ];
        $shoes->save();

        return redirect( '/shoes/list' )
        ->with( 'message', 'Shoe has been edited!' );
    }

    public function delete( Shoes $shoes ) {
        $shoes->delete();

        return redirect( '/shoes/list' )
        ->with( 'message', 'shoe has been deleted!' );

    }

    public function imageForm( Shoes $shoes ) {
        return view( 'shoes.image', [
            'shoes' => $shoes,
        ] );
    }

    public function image( Shoes $shoes ) {

        $attributes = request()->validate( [
            'photo' => 'required|url',
        ] );

        // Storage::delete( $project->image );

        // $path = request()->file( 'image' )->store( 'projects' );

        $shoes->photo = $attributes[ 'photo' ];
        $shoes->save();

        return redirect( '/shoes/list' )
        ->with( 'message', 'Shoes image has been edited!' );
    }

}
