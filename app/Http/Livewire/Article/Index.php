<?php

namespace App\Http\Livewire\Article;

use Livewire\Component;

class Index extends Component
{
    public $addRoute;
    public $userRoute;
    public $viewRoute;
    public function render()
    {
        return view('livewire.article.index');
    }
}
