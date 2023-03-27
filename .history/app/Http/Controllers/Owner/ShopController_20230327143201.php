<?php

namespace App\Http\Controllers\Owner;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:owners');

        $this->middleware(function ($request, $next) {
            dd($request->route()->parameter('shop')); //文字列
            // dd(Auth::id()); //数字
            return $next($request);
        });
    }

    public function index()
    {
        $ownerId = Auth::id();
        $shops = Shop::where('owner_id', $ownerId)->get();

        return view(
            'owner.shops.index',
            compact('shops')
        );
    }

    public function edit(string $id)
    {
        dd(Shop::findOrFail($id));
    }

    public function update(Request $request, string $id)
    {
    }
}
