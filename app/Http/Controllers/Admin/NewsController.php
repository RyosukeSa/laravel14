<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    // 以下を追記
    public function add()
    {
        return view('admin.news.create');
    }
    
    public function create(Request $request)
    {
        return redirect('admin/news/create');
    }
}
