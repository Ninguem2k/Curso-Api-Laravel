<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResouce;
use App\Models\Product;
use App\Repository\ProductRepository;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    public function index(Request $request)
    {
        $products = $this->product;
        $productRepository = new ProductRepository($products);
        if ($request->has('coditions')) {
            $productRepository->selectCoditions($request->get('coditions'));
        }

        if ($request->has('fields')) {
            $productRepository->selectFilter($request->get('fields'));
        }

        // return response()->json($products);
        return new ProductCollection($productRepository->getResult()->paginate(2));
    }

    public function show($id)
    {
        $product = $this->product->find($id);
        // return response()->json($products);
        return new ProductResouce($product);
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
