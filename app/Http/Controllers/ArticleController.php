<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }


    public function create(): View
    {
        return view('articles.create');
    }

    public function store(Request $request): RedirectResponse
    {
        Article::create($request->all());

        return redirect()->route('articles.index')->with('success', 'Article created successfully');
//        return view('')->with('', $gdg);
    }


    public function edit(Article $article): View
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article): RedirectResponse
    {
        $article->update($request->all());
        return redirect()->route('articles.index')->with('success', 'Редиректнуло');
    }

    public function destroy(Article $article): RedirectResponse
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Articles deleted successfully');
    }


}
