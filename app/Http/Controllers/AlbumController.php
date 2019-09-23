<?php

namespace App\Http\Controllers;

use App\Album;
use App\Category;
use App\Photo;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function wedding()
    {
        $category = Category::where('slug', 'weddings')->first();
        $albums = Album::where('category_id', $category->id)->get();
        return view('page.album', ['albums' => $albums]);
    }

    public function wedding_images($id = null)
    {
        $photos = Photo::findById($id);
    }

    public function fashion()
    {
        $category = Category::where('slug', 'fashions')->first();
        $albums = Album::where('category_id', $category->id)->get();
        return view('page.album', ['albums' => $albums]);
    }

    public function fashion_images($id = null)
    {

    }

    public function event()
    {
        $category = Category::where('slug', 'events')->first();
        $albums = Album::where('category_id', $category->id)->get();
        return view('page.album', ['albums' => $albums]);
    }

    public function birthday_images($id = null)
    {

    }

    public function birthday()
    {
        $category = Category::where('slug', 'birthdays')->first();
        $albums = Album::where('category_id', $category->id)->get();
        return view('page.album', ['albums' => $albums]);
    }

    public function event_images($id = null)
    {

    }

    public function photobooth()
    {
        $category = Category::where('slug', 'photobooths')->first();
        $albums = Album::where('category_id', $category->id)->get();
        return view('page.album', ['albums' => $albums]);
    }

    public function photobooth_images($id = null)
    {

    }
}
