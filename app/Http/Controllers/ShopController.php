<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::get()->toTree();
        return view('shop.index')->with('shops', $shops);
    }
}
