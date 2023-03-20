<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleEditForm extends Component
{
    public $title;
    public $subtitle;
    public $body;

    public $article;

    public function update(Article $article) 
    {
        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);
        return redirect(route('article.index'))->with('articleUpdated', 'Articolo aggiornato correttamente!');
    }

    public function mount()
    {
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->body = $this->article->body;
    }
    public function render()
    {
        return view('livewire.article-edit-form');
    }
}
