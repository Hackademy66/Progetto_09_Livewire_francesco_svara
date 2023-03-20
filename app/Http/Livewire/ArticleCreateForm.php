<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreateForm extends Component
{
    //PROPRIETA'    
    public $title;
    public $subtitle;
    public $body;

    //ACTION
    public function store(){
        $article = Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);

        session()->flash('articleCreated', 'Post successfully updated.');
        $this->cleanForm();
    }

    public function cleanForm(){
        $this->title = "";
        $this->subtitle = "";
        $this->body = "";
    }

    public function render()
    {
        return view('livewire.article-create-form');
    }
}
