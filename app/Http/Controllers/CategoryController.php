<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\CategorySlug;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //return Category::all();
        //$categories =  Category::orderBy('id','desc')->paginate(10);
        $categories =  Category::orderBy('id','desc')->get();
        return view('admin.categories.index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.add');
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
            //'slug'=>'required'

        ]);
        //create category
        $slug = new CategorySlug();
        $category = new Category();
        $category->name = $request->input('name');
        //$category->slug = $request->input('slug');
        $category->slug = $slug->createSlug($category->name);
        $category->save();

        return redirect('/categories')->with('success','Category Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //$category = Category::find($id);
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('admin.categories.details')->with('category',$category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //$category = Category::find($id);
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('admin.categories.edit')->with('category',$category);
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
            'slug'=>'required'

        ]);
        
        //$category = Category::find($id);
        $category = Category::where('slug', $slug)->firstOrFail();
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->save();

        return redirect('/categories')->with('success','Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories')->with('success','Category Deleted');
    }
}
