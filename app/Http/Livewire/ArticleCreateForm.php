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

    protected $rules = [
        'title' => 'required|min:5',
        'subtitle' => 'required|min:10',
        'body' => 'required',
    ];

    //ACTION
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store(){
        $this->validate();

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
