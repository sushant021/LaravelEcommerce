<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\ProductSlug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::orderBy('id','asc')->get(); 
        $products = Product::orderBy('id','desc')->get();
        return view('admin.products.index')->with('categories',$categories)->with('products',$products);
        //return view('admin.products.index')->with('products',$products)->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::orderBy('id','asc')->get();
        return view('admin.products.add')->with('categories',$categories);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[

            'name'=>'required',
            //'slug'=>'required',
            'price'=>'required|integer',
            'calories'=>'nullable|integer',
            'category_id'=>'required',
            'product_image'=>'image|nullable|max:1999'

        ]);
        //handle file upload 

        if ($request->hasFile('product_image')){
            //Get filename with extension
            $filenameWithExt = $request->file('product_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('product_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image 
            $path = $request->file('product_image')->storeAs('public/product_images',$fileNameToStore);

        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }
        //create category
        $slug = new ProductSlug();
        $product = new Product();
        $product->name = $request->input('name');
        //$product->slug = $request->input('slug');
        $product->slug = $slug->createSlug($product->name);
        $product->price = $request->input('price');
        $product->calories = $request->input('calories');
        $product->tax = $request->input('tax');
        $product->description = $request->input('description');
        $product->category_id = $request->input('category_id');
        $product->product_image=$fileNameToStore;
        $product->save();

        return redirect('/products')->with('success','Product Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function show($id)
    {
        //
        $product = Product::find($id);
        return view('admin.products.details')->with('product',$product);
    }*/
    public function show($slug)
    {
        //
        
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('admin.products.details')->with('product',$product);
        //return $product->name;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
    public function edit($id)
    {
        //
        $product = Product::find($id);
        $categories = Category::orderBy('id','asc')->get();
        return view('admin.products.edit')->with('product',$product)->with('categories',$categories);
    }*/
    public function edit($slug)
    {
        //
        $product = Product::where('slug', $slug)->firstOrFail();
        $categories = Category::orderBy('id','asc')->get();
        return view('admin.products.edit')->with('product',$product)->with('categories',$categories);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        //
        $this->validate($request,[

            'name'=>'required',
            'slug'=>'required',
            'price'=>'required|integer',
            'calories'=>'nullable|integer',
            'category_id'=>'required',
            'product_image'=>'image|nullable|max:1999'

        ]);
        //handle file upload 

        if ($request->hasFile('product_image')){
            //Get filename with extension
            $filenameWithExt = $request->file('product_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('product_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image 
            $path = $request->file('product_image')->storeAs('public/product_images',$fileNameToStore);

        }
       
        //create category
        //$product =Product::find($id);
        $product = Product::where('slug', $slug)->firstOrFail();
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->price = $request->input('price');
        $product->calories = $request->input('calories');
        $product->tax = $request->input('tax');
        $product->description = $request->input('description');
        $product->category_id = $request->input('category_id');

        if ($request->hasFile('product_image')){
            $product->product_image=$fileNameToStore;
        }
        $product->save();

        return redirect('/products')->with('success','Product Updated');
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
        $product = Product::find($id);
        //if you want to delete the product image when the product is deleted
        
        if ($product->product_image != 'noimage.jpg'){
            Storage::delete('public/product_images/'.$product->product_image);
        }
        $product->delete();
        return redirect('/products')->with('success','Product Deleted');
    }
}
