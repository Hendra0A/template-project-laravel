<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Admin\Product;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::latest()->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('aksi', function ($data) {
                return view('components.components-ajax-yajradatatables.component_action')->with('data', $data);
            })
            ->make(true);
    }

    public function create()
    {
        return view('pages.admin.products.components-table.modal', ['product' => new Product()]);
    }

    public function store(ProductRequest $request)
    {
        $data = [
            'product_name' => $request->product_name,
            'product_img' => 'admin/product_img/mywebsite.png',
            'product_description' => $request->product_description,
        ];

        Product::create($data);

        return response()->json(['success' => 'Berhasil menambah produk']);
    }

    public function edit(Product $product)
    {
        return view('pages.admin.products.components-table.modal', compact('product'));
    }

    public function update(ProductRequest $request, $id)
    {
        $data = [
            'product_name' => $request->product_name,
            'product_img' => 'admin/product_img/mywebsite.png',
            'product_description' => $request->product_description,
        ];

        Product::find($id)->update($data);

        return response()->json(['success' => 'Berhasil mengubah data produk']);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['success' => 'Berhasil menghapus data produk']);
    }
}
