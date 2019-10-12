<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;

use App\Http\Requests\CreateProductRequest;
use App\Product;
use App\Family;
use App\Brand;
use App\Measure;

use App\Exports\ProductsExport;
use App\Imports\ProductsImport;



class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(6);
        return view('products.index', [ 'products' => $products ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $families = Family::all();
        $measures = Measure::all();

        return view('products.create', [
          'product' => new Product,
          'brands' => $brands,
          'families' => $families,
          'measures' => $measures
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        Product::create($request->all());

        return redirect('products/index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
       return view('products.show', [ 'product' => $product ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
          $brands = Brand::all();
          $families = Family::all();
          $measures = Measure::all();

        return view('products.edit', [
          'product' => $product,
          'brands' => $brands,
          'families' => $families,
          'measures' => $measures,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateProductRequest $request, Product $product)
    {

          $product->update($request->all());

          return redirect('products/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function exportpdf()
    {
        $products = Product::all();
        $pdf = PDF::loadView('pdf.products' , ['products' => $products]);

        return $pdf->download('listadoProductos.pdf');
    }

    public function exportexc()
    {
      return Excel::download(new ProductsExport, 'listadoProductos.xlsx');
    }

    public function importExcel(Request $request)
    {
      $file = $request->file('file');
      Excel::import(new ProductsImport, $file);

      return back();
    }
}
