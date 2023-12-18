<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            // $shops = Shop::where('shop_name', 'like', '%'.$request->search.'%')->get();
            // $shops = Shop::where('shop_name', 'like', '%'.$request->search.'%')->paginate(5)->withQueryString();
            $shops = Shop::where('shop_name', 'like', '%' . $request->search . '%')->orWhere('shop_address', 'like', '%' . $request->search . '%')->paginate(5)->withQueryString();
        } else {
            $shops = Shop::paginate(5);
        }


        return view('shop.index', [
            "pagetitle" => "Shop",
            'maintitle' => 'Shop',
            "shops" => $shops
        ]);
    }

    public function show(Shop $shop)
    {

        //tanpa route model binding
        // $writer::find(1)->with('books')->get();

        //menggunakan route model binding
        // $writer->load('books');

        return view('shop.show', [
            'pagetitle' => 'Shop Details',
            'maintitle' => 'Shop Details',
            'shop' => $shop
        ]);
    }

    public function create()
    {
        return view('shop.create', [
            "pagetitle" => "Shop",
            'maintitle' => 'Shop'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'shop_name' => 'required|unique:shops|max:255',
            'shop_address' => 'required|max:255',
            'shop_image' => 'image'
        ]);

        // Shop::create([
        //     'shop_name' => $request->shop_name,
        //     'shop_address' => $request->shop_address
        // ]);

        if ($request->file('shop_image')) {
            $validatedData['shop_image'] = $request->file('shop_image')->store('images', ['disk' => 'public']);

            Shop::create([
                'shop_name' => $validatedData['shop_name'],
                'shop_address' => $validatedData['shop_address'],
                'shop_image' => $validatedData['shop_image']
            ]);
        } else {
            Shop::create([
                'shop_name' => $validatedData['shop_name'],
                'shop_address' => $validatedData['shop_address'],
            ]);
        }

        return redirect()->route('admin.shop.index');
    }
    public function edit(Shop $shop)
    {
        $shopEdit = Shop::where('id', $shop->id)->first();

        return view('shop.edit', [
            "pagetitle" => "Shop",
            'maintitle' => 'Shop',
            "shopEdit" => $shopEdit
        ]);
        // return view 'book.edit', compact('bookEdit','publishers');
    }

    public function update(Request $request, Shop $shop)
    {

        $validatedData = $request->validate([
            'shop_name' => 'required|max:255',
            'shop_address' => 'required|max:255',
            'shop_image' => 'image'
        ]);

        if ($request->file('shop_image')) {
            if ($shop->shop_image) {
                Storage::disk('public')->delete($shop->shop_image);
            }

            $validatedData['shop_image'] = $request->file('shop_image')->store('images', ['disk' => 'public']);
            $shop->update([
                'shop_name' => $validatedData['shop_name'],
                'shop_address' => $validatedData['shop_address'],
                'shop_image' => $validatedData['shop_image']
            ]);
        } else {
            $shop->update([
                'shop_name' => $request->shop_name,
                'shop_address' => $request->shop_address
            ]);
        }

        return redirect()->route('admin.shop.index');
    }

    public function destroy(Shop $shop)
    {
        if ($shop->shop_image) {
            if (Storage::disk('public')->exists($shop->shop_image)) {
                Storage::disk('public')->delete($shop->shop_image);
            }
        }

        $shop->delete();

        return redirect()->route('admin.shop.index');
    }
}
