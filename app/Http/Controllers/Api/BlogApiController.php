<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Creds;
use App\Models\Section;
use App\Models\User;
use Illuminate\Http\Request;


class BlogApiController extends Controller
{


    public $imageLink = 'https://localhost/oxford-pro/public/storage/';
    public function home(Request $req)
    {
        // $dt = Blog::get();
        // foreach ($dt as $item) {
        //     $forUp['slug'] = str_replace(" ", "-", $item->title);
        //     Blog::where('id', $item->id)->update($forUp);
        // }

        $dataTo = [];
        $dataTo['intro'] = Section::where('id', 1)->first();
        $dataTo['intro']->image =  $this->imageLink . $dataTo['intro']->img;
        $dataTo['blogs'] = Blog::get();
        foreach ($dataTo['blogs'] as $item) {
            $item->image = $this->imageLink . $item->img;
        }





        return response()->json([
            "data" => $dataTo
        ]);
    }
    public function blog(Request $req, $slug)
    {
        $data = Blog::leftJoin('categories', 'categories.id', '=', 'tblblog.category_id')
            ->where('slug', $slug)
            ->first(['tblblog.*', 'categories.name as category_name']);
        $data->image = $this->imageLink . $data->img;

        return response()->json([
            "suceess" => true,
            "data" => $data
        ]);
    }
    public function iterate(Request $req)
    {

        $dt = Blog::get();
        foreach ($dt as $item) {
            $forUp['slug'] = str_replace(" ", "-", $item->title);
            Blog::where('id', $item->id)->update($forUp);
        }
    }
}
