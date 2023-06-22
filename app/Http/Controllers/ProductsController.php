<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        //cách truyền data xuống cvi
        $title = "laravel course from lbl";
        $x =1;
        $y=2;
        // return view('products.index',compact('title','x','y'));
        //c2
        $name = 'Hoang';
        // return view('products.index')->with('name', $name);
        //'with' method can only send 1 parameter
        //send an associative array
        $myphone = [
            'name' => 'iphone 14',
            'year' => 2022,
            'isFavorited' => true,
        ];
        
        // return view('products.index', compact('myphone'));
        //send directly        
        // return view('products.index', [
        //     'myphone' => $myphone
        // ]);
       
    }
    public function about(){
        return 'this about view';
    }
    public function detail($productName, $id) {
        return "product's name = ".$productName.
                " ,product's id = ".$id ; // dấu chấm dùng đẻ nối xâu
        
        // $phones = [
        //     'iphone 15' => 'iphone 15',
        //     'samsung' => 'samsung'
        // ];
        // return view('products.index', [
        //     'product' => $phones[$productName] ?? 'unknown product',
        // ]);
    }
}
