<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\ArticleRequest;

use App\Article;

use Session;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    $articles = Article::paginate(10);//->toJson();
    if ($request->ajax()) {
       $view = (String)view('articles.list')
       ->with('articles', $articles)
       ->render();
       return response()->json(['view' => $view]);
   } else {
      return view('articles.index')
      ->with('articles', $articles);
  }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        Article::create($request->all());
        Session::flash("notice", "Article success created");
        return redirect()->route("articles.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        $comments = Article::find($id)->comments->sortBy('Comment.created_at');
        return view('articles.show')
        ->with('article', $article)
        ->with('comments', $comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Article::find($id)->update($request->all());
        Session::flash("notice", "Article success updated");
        return redirect()->route("articles.show", $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Article::destroy($id);
     // Session::flash("notice", "Article success deleted");
       return redirect()->route("articles.index");
   }
}
