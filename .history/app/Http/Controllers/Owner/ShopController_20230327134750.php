<?php

namespace App\Http\Controllers\Owner;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Request;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:owners');
    }

    public function index()
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
}
}
