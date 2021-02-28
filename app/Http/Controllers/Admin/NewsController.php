<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
    //以下を追記
    public function add()
    {
        return view('admin.news.create');
    }
    
    // 以下を追記
  public function create(Request $request)
  {
      //dd($request->all());
      $news = new News;
      $news->title=$request->title;
      $news->body= $request->body;
      $news->save();
      // admin/news/createにリダイレクトする
      return redirect('admin/news/create');
  }  
}
