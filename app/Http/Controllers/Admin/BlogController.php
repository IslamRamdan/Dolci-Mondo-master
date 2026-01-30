<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = BlogPost::with('category')->latest()->get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.blog.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id'      => 'required|exists:categories,id',
            'title_ar'         => 'required|string|max:255',
            'title_en'         => 'required|string|max:255',
            'wholesale_price'  => 'required',
            'sale_price'       => 'required',
            'image'            => 'required|image',
        ]);

        $image = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('blogs', 'public');
        }

        BlogPost::create([
            'category_id'     => $request->category_id,
            'title_ar'        => $request->title_ar,
            'title_en'        => $request->title_en,
            'wholesale_price' => $request->wholesale_price,
            'sale_price'      => $request->sale_price,
            'image'           => $image,
        ]);

        return redirect()->route('admin.blog.index')
            ->with('success', 'تم الإضافة بنجاح');
    }

    public function edit($id)
    {
        $blog = BlogPost::findOrFail($id);
        $categories = Category::all();

        return view('admin.blog.edit', compact('blog', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $blog = BlogPost::findOrFail($id);

        $request->validate([
            'category_id'      => 'required|exists:categories,id',
            'title_ar'         => 'required|string|max:255',
            'title_en'         => 'required|string|max:255',
            'wholesale_price'  => 'required',
            'sale_price'       => 'required',
            'image'            => 'nullable|image',
        ]);

        $image = $blog->image;
        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $image = $request->file('image')->store('blogs', 'public');
        }

        $blog->update([
            'category_id'     => $request->category_id,
            'title_ar'        => $request->title_ar,
            'title_en'        => $request->title_en,
            'wholesale_price' => $request->wholesale_price,
            'sale_price'      => $request->sale_price,
            'image'           => $image,
        ]);

        return redirect()->route('admin.blog.index')
            ->with('success', 'تم التحديث بنجاح');
    }

    public function destroy($id)
    {
        $blog = BlogPost::findOrFail($id);

        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();

        return redirect()->route('admin.blog.index')
            ->with('success', 'تم الحذف بنجاح');
    }

    // pagination (لو محتاجها)
    public function indexp()
    {
        $blogs = BlogPost::with('category')->latest()->paginate(10);
        return view('admin.blog.blogs', compact('blogs'));
    }

    public function show($id)
    {
        $blog = BlogPost::with('category')->findOrFail($id);

        $latestBlogs = BlogPost::where('id', '!=', $blog->id)
            ->latest()
            ->take(3)
            ->get();

        return view('admin.blog.show', compact('blog', 'latestBlogs'));
    }
}
