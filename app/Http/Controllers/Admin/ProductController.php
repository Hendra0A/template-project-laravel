<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::latest()->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('aksi', function ($data) {
                return view('pages.admin.products.components-table.button')->with('data', $data);
            })
            ->make(true);
    }

    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'product_name' => 'required',
            'product_description' => 'required'
        ], [
            'product_name.required' => 'Nama produk wajib diisi',
            'product_description.required' => 'Deskripsi produk wajib diisi',
        ]);

        if ($validasi->fails()) {
            return response()->json(['errors' => $validasi->errors()]);
        } else {
            $data = [
                'product_name' => $request->product_name,
                'product_img' => 'admin/product_img/mywebsite.png',
                'product_description' => $request->product_description,
            ];

            Product::create($data);

            return response()->json(['success' => 'Berhasil menambah produk']);
        }
    }

    public function edit($id)
    {
        $data = Product::find($id);

        return response()->json(['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $validasi = Validator::make($request->all(), [
            'product_name' => 'required',
            'product_description' => 'required'
        ], [
            'product_name.required' => 'Nama produk wajib diisi',
            'product_description.required' => 'Deskripsi produk wajib diisi',
        ]);

        if ($validasi->fails()) {
            return response()->json(['errors' => $validasi->errors()]);
        } else {
            $data = [
                'product_name' => $request->product_name,
                'product_img' => 'admin/product_img/mywebsite.png',
                'product_description' => $request->product_description,
            ];

            Product::find($id)->update($data);

            return response()->json(['success' => 'Berhasil mengubah data produk']);
        }
    }
}
