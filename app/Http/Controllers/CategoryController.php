<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function AddCategory(Request $request)
    {
    	if($request->isMethod('post'))
    	{
    		$this->validate($request,
    		[
    			'category_title' => 'required|unique:categories,title|min:3|max:100',
    			'description' => 'required',
    			'url' => 'required',
                'images' => 'required|image'
    		],
    		[
    			'category_title.required' => 'Please enter Category title',
    			'category_title.unique' => 'This Category name already exists !',
    			'category_title.min' => 'This Category Name have 3 minimum characters',
    			'category_title.max' => 'This Category Name have 100 maximum characters',
    			'description.required' => 'Please enter description of Category',
    			'url.required' => 'Please choose your link',
                'images.required' => 'Please choose your Images',
                'images.image' => 'This is not a image file !!!'
    		]);
        $file_image = $request->file('images')->getClientOriginalName();
    	$category = new CategoryModel;
    	$category->title = $request->category_title;
        $category->parent_id = $request->category_parent;
    	$category->slug = changeTitle($request->category_title);
    	//echo changeTitle($request->category_title);
        $category->thumbnail = $file_image;
        $request->file('images')->move('upload/',$file_image);
        $category->position = 1;
        $category->status = $request->AnHien;
        $category->link = $request->url;
        $category->create_user = 1;
        $category->update_user = 1;
        $category->delete_user = 1;
    	$category->description = $request->description;
    	$category->link = $request->url;
    	$category->save();

    	return redirect('admin/category/list-category')->with('flash_message','You added Category Successfully !!!');
    	}

        $parent = CategoryModel::select('id','title','parent_id')->get();
    	
    	return view('admin.categories.add',compact('parent'));
    }
    public function ListCategory()
    {
    	$categories = CategoryModel::get();
    	return view('admin.categories.list')->with(compact('categories'));
    }
    public function GetEditCategory($id)
    {
    	$category = CategoryModel::find($id);
    	return view('admin.categories.edit')->with(compact('category'));
    }
    public function PostEditCategory(Request $request,$id)
    {
    	$this->validate($request,
    		[
    			'category_title' => 'required|unique:categories,title|min:3|max:100',
    			'description' => 'required',
    			'url' => 'required'
    		],
    		[
    			'category_title.required' => 'Please enter Category title',
    			'category_title.unique' => 'This Category name already exists !',
    			'category_title.min' => 'This Category Name have 3 minimum characters',
    			'category_title.max' => 'This Category Name have 100 maximum characters',
    			'description.required' => 'Please enter description of Category',
    			'url.required' => 'Please enter url'
    		]);
    	$cate = CategoryModel::find($id);
    	$cate->title = $request->category_title;
    	$cate->slug = changeTitle($request->category_title);
    	$cate->description = $request->description;
    	$cate->link = $request->url;
    	$cate->save();

    	return redirect('admin/category/list-category')->with('flash_message','You edited Category Successfully !!!');
    }
    public function GetDeleteCategory($id)
    {
    	$category = CategoryModel::find($id);
    	$category->delete($id);

    	return redirect('admin/category/list-category')->with('flash_message','you deleted Successfully !!!');
    }
}
