<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('Blogs.index', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('Blogs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $categories = Category::all();
        $blog->name = $request->name;
        $blog->contents = $request->contents;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->category_id = $_POST['category_id'];
        $blog->save();
        return view('Blogs.create', compact('categories'));
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        return view('Blogs/delete', compact('blog'));
    }

    public function destroy(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('blogs.index');

    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        $categories = Category::all();
        $categoryId = $blog->category_id;
        for ($index = 0; $index < count($categories); $index++) {
            $change = $categories[0];
            if ($categoryId == $categories[$index]['id']) {
                $categories[0] = $categories[$index];
                $categories[$index] = $change;

            }
        }
        return view('Blogs.update', compact('blog', 'categories'));

    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $categories = Category::all();
        $blog->name = $request->name;
        $blog->contents = $request->contents;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->category_id = $_POST['category_id'];
        $blog->save();
        return redirect()->route('blogs.edit', compact('$categories', 'id'));

    }

    public function show($id)
    {
        $blog = Blog::find($id);
        $categoryId = $blog->category_id;
        $category = Category::where('id',$categoryId)->first();

        return view('Blogs.show',compact('blog', 'category'));
    }
}
