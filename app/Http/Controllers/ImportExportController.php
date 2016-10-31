<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article, App\Comment; 

use Illuminate\Support\Facades\Input;

use DB;

use Excel, Session; 

class ImportExportController extends Controller
{
    public function importExport(){
    	return view('articles.importArticle');
    }

    public function importExcel(Request $request){

    	$file = $request->file('article');
        $excel = Excel::load($file, function($reader) {})->get();
        $article = Article::create(Excel::selectSheets('article')->load($file)->first()->toArray());
        $comments = Excel::selectSheets('comments')->load($file)->toArray();
        foreach ($comments as $comment) {
            Comment::create(array_merge($comment, ["article_id" => $article->id]));
        }
        Session::flash("notice", "Success import data");
    	return redirect()->route("articles.index");
    }

    public function exportExcel(){
    	$article  = Article::get()->toArray();
    	$comments = Comment::get()->toArray();
		return Excel::create('lararticles'. time(), function($excel) use ($article,$comments) {

			$excel->sheet('article', function($sheet) use ($article)
	        {
				$sheet->fromArray($article);
	        });

	        $excel->sheet('comments', function($sheet) use ($comments)
	        {
				$sheet->fromArray($comments);
	        });

		})->download('xlsx');
    }

    public function exportbyId($id){
        $articles  = Article::find($id)->first()->toArray();
        $comments = Comment::where('article_id','=',$id)->get()->toArray();
        // dd($comments);
        return Excel::create('lararticles'. time(), function($excel) use ($articles,$comments) {

            $excel->sheet('articles', function($sheet) use ($articles)
            {
                $sheet->fromArray($articles);
            });

            $excel->sheet('comments', function($sheet) use ($comments)
            {
                $sheet->fromArray($comments);
            });

        })->download('xlsx');
    }
}
