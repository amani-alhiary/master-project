<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $usedcart = array();
        $usedbooks = array();
        $usedids = array();
        $cart = array();
        $books = array();
        $ids = array();

        if (session()->has('cart.books')) {
            $quantity = array();
            $ids = array();
            foreach (session()->get('cart.books') as $key => $value) {
                array_push($ids,$key);
                array_push($quantity,$value);
    
            }
            $books = DB::table('books')
                ->whereIn('id', $ids)
                ->get();
    
    
            $cart= session('cart.books');
        }
        if (session()->has('cart.usedbooks')) {
            $usedquantity = array();
            $usedids = array();
            
            foreach (session()->get('cart.usedbooks') as $key => $value) {
                array_push($usedids,$key);
                array_push($usedquantity,$value);
    
            }
            $usedbooks = DB::table('user_books')
                ->whereIn('id', $usedids)
                ->get();
    
    
            $usedcart= session('cart.usedbooks');
            // dd($usedcart);
           

        }
        // dd(session('cart'));
        return view('pages.cart', compact('usedcart','usedbooks','usedids','cart','books','ids'));





    }
}
