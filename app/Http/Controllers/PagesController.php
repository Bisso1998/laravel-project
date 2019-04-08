<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function addItem()
    {
        # code...
      return view('addItem'); 

    }
  
    public function store () {
    

        request()->validate([
            'itemName' => ['required', 'min:3'],
            'itemPrice' => 'required'
        ]);
        // dd(request('itemPrice'));
        $Item = new \App\Item();

        $Item->itemName = request('itemName');
        $Item->itemPrice = request('itemPrice');
        $Item->itemImage = request('itemImage');
        $Item->itemType = request('itemType');
        $Item->itemDescription = request('itemDescription');
        $Item->save();
        return redirect('/shop');
        // return view('create'); 
    }

    public function index() {
        $Items = \App\Item::all();

        // $Items = \App\Item::all()->where('itemType', '=' , "Dog");
        return view('shop', compact('Items')); 

    }
    public function indexDog() {
        // $Items = \App\Item::all();

        $Items = \App\Item::all()->where('itemType', '=' , "Dog");
        return view('shop', compact('Items')); 

    }

    public function indexCat() {
        // $Items = \App\Item::all();

        $Items = \App\Item::all()->where('itemType', '=' , "Cat");
        return view('shop', compact('Items')); 

    }

    public function indexCart() {

        $Items = \App\Item::all();


        return view('cart', compact('Items')); 

    }


    public function update($itemId) {
        $Item =  \App\Item::find($itemId);

        $Item->isSelected = 1;
        $Item->save();
        return redirect('/shop');
    }


    public function updateCart($itemId) {
        $Item =  \App\Item::find($itemId);

        $Item->isSelected = 0;
        $Item->save();

        return redirect('/cart');
    }
}
