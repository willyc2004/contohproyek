<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $shop = Shop::all();
        return view('shop.index', [
            "pagetitle" => "Shop",
            'maintitle' => 'Shop',
            "sales" => $shop
        ]);
    }
}
