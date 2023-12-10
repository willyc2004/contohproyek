<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')){
            // $shops = Shop::where('shop_name', 'like', '%'.$request->search.'%')->get();
            // $shops = Shop::where('shop_name', 'like', '%'.$request->search.'%')->paginate(5)->withQueryString();
            $shops = Shop::where('shop_name', 'like', '%'.$request->search.'%')->orWhere('shop_address', 'like', '%'.$request->search.'%')->paginate(5)->withQueryString();
        } else {
            $shops = Shop::paginate(5);
        }


        return view('shop.index', [
            "pagetitle" => "Shop",
            'maintitle' => 'Shop',
            "shops" => $shops
        ]);
    }
}
