<?php

namespace App\Http\Controllers;

use App\Album;
use App\Category;
use App\Photo;
use Illuminate\Http\Request;
use TCG\Voyager\Voyager;

class AlbumController extends Controller
{
    public function wedding()
    {
        $category = Category::where('slug', 'weddings')->first();
        $albums = Album::where('category_id', $category->id)->get();
        return view('albums.index', ['albums' => $albums]);
    }

    public function wedding_images($id = null)
    {
        $photos = Photo::findById($id);
        return view('albums.show', ['photos' => $photos]);
    }

    public function fashion()
    {
        $category = Category::where('slug', 'fashions')->first();
        $albums = Album::where('category_id', $category->id)->get();
        return view('albums.index', ['albums' => $albums]);
    }

    public function fashion_images($id = null)
    {
        $photos = Photo::findById($id);
        return view('albums.show', ['photos' => $photos]);
    }

    public function event()
    {
        $category = Category::where('slug', 'events')->first();
        $albums = Album::where('category_id', $category->id)->get();
        return view('albums.index', ['albums' => $albums]);
    }

    public function birthday_images($id = null)
    {
        $photos = Photo::findById($id);
        return view('albums.show', ['photos' => $photos]);
    }

    public function birthday()
    {
        $category = Category::where('slug', 'birthdays')->first();
        $albums = Album::where('category_id', $category->id)->get();
        return view('albums.index', ['albums' => $albums]);
    }

    public function event_images($id = null)
    {
        $photos = Photo::findById($id);
        return view('albums.show', ['photos' => $photos]);
    }

    public function photobooth()
    {
        $category = Category::where('slug', 'photobooths')->first();
        $albums = Album::where('category_id', $category->id)->get();
        return view('albums.index', ['albums' => $albums]);
    }

    public function photobooth_images($id = null)
    {
        $photos = Photo::findById($id);
        return view('albums.show', ['photos' => $photos]);
    }

    public function downloads($id = null)
    {
        $photos = Photo::findById($id);
        $zipname = strtolower($photos->album['name']).'.zip';
        $zip = new \ZipArchive;
        $zip->open($zipname, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);
        $images = json_decode($photos->image);
        $path = storage_path(dirname($images[0]));
        foreach ($images as $image) {
            $zip->addFile('storage/'.$image);
        }
        $zip->close();
        return response()->download($zipname);
    }
}
