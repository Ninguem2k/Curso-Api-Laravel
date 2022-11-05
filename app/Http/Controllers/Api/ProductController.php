<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    public function index()
    {
        $products = $this->product->all();
        return response()->json(
            $products
        );
    }

    public function show($id)
    {
        $products = $this->product->find($id);
        return response()->json(
            $products
        );
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $products = $this->product->create($data['product']);
        return response()->json(
            $products
        );
    }
    public function update(Request $request)
    {
        $data = $request->all();
        $products = $this->product->find($data['product']['id']);
        $products->update($data);

        return response()->json(
            $products
        );
    }
    public function delete($id)
    {
        $products = $this->product->find($id);
        $products->delete();
        return response()->json(
            ['data' => ['msg' => 'Produto deletado com sucesso!']]
        );
    }
}
