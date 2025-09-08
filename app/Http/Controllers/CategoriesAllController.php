<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoriesAllController extends Controller
{
    function index() {
        $categories = Category::all();
                $categories = Category::has('posts' , '>=' , 2)->active()->get();
        $categories_with_posts = $categories->map(function($category){
            $category->posts = $category->posts()->active()->get();
            return $category;
        });
        return view("frontend.category-all-posts", compact("categories_with_posts"));
    }
}
