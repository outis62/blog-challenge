<?php

namespace App\Http\Livewire\Article;

use App\Models\Article;
use Livewire\Component;

class Show extends Component
{
    public $articleIdToDelete;
    public $listRoute;
    public $addRoute;
    public $editRoute;
    public $viewRoute;
    public $article;
    public $articles;
    public $detailRoute;

    public function render()
    {
        return view('livewire.article.show');
    }

    public function deleteArticle($articleId)
    {
        Article::destroy($articleId);

        return redirect()->route($this->listRoute['link'])->with('error', "L'article à été supprimer avec succès !");
    }
}
