<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;


class News extends Controller
{
    public function index()
    {

        return view('news', ['news' => DB::table('news')->paginate(5)]);

    }

    public function view($id)
    {
        $news = DB::select('select * from news where id = :id', ['id' => $id]);
            return view('view', ['news'=>$news]);
    }
}



