<?php
namespace App\Http\Livewire\Article;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormArticle extends Component
{
    use WithFileUploads;

    public $listRoute;
    public $article;
    public $addRoute;
    public $showRoute;
    public $image;
    public $titre;
    public $description;
    public $imagePath;

    public function mount()
    {
        if ($this->article->id) {
            $this->image = $this->article->image ? $this->article->image : '';
            $this->titre = $this->article->titre ? $this->article->titre : '';
            $this->description = $this->article->description ? $this->article->description : '';
        }
    }

    public function render()
    {
        return view('livewire.article.form-article');
    }

    public function onSubmitFormArticle()
    {
        $validatedData = $this->validate([
            'image' => 'required|image',
            'titre' => 'required',
            'description' => 'required',
        ]);

        $this->imagePath = $validatedData['image']->store('public/images');

        $articleId = auth()->id();
        if ($articleId) {
            $validatedData['user_id'] = $articleId;
            $validatedData['image_path'] = $this->imagePath;

            if ($this->article->id) {
                $this->updatedForm($validatedData);
            } else {
                $this->storedForm($validatedData);
            }
        } else {
            return redirect()->back()->with('error', "Impossible de récupérer l'identifiant de l'utilisateur.");
        }
    }

    public function storedForm($dataInput)
    {
        Article::create($dataInput);
        return redirect()->route($this->listRoute['link'])->with('success', "Article enregistrée avec succès !");
    }

    public function updatedForm($dataInput)
    {
        $this->article->update($dataInput);

        try {
            return redirect()->route($this->showRoute['link'], $this->article)
                ->with('success', "L'article a été mise à jour avec succès !");
        } catch (\Throwable $th) {
            return redirect()->route($this->showRoute['link'], $this->article)
                ->with('warning', "La article n'a pas pu être mise à jour : " . $th->getMessage());
        }
    }
}
