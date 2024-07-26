<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = 'Larvarel Course from Nguyen Duc Hoang';
        //return view('products.index',compact('title'));
        $name = 'Hoang';
        //return view('products.index') -> with('name' ,$name);
        //send a associtive array
        $myphone = [
            'name' => 'iphone 14',
            'year' => 2022,
            'isFavorited' => true
        ];
        // return view('products.index',compact('myphone'));
        return view('products.index', [
            'myphone' => $myphone
        ]);
    }
    public function about()
    {
        return view('products.about');
    }

    public function detail($id)
    {
        return "product's id = " . $id; 
        // // Controller
        // $phones = [
        //     'iphone 15' => 'iphone 15',
        //     'samsung' => 'samsung'
        // ];
        // return view('products.index', [
        //     'products' => $phones[$productName] ?? 'unknow product'
        // ]);
    }
}
