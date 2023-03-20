<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleList extends Component
{
    public function destroy(Article $article) 
    {
        $article->delete();
        session()->flash('articleDestroyed', 'Articolo eliminato correttamente');
    }

    public function render()
    {
        $articles = Article::all();

        return view('livewire.article-list', compact('articles'));
    }
}
