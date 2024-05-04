<?php

namespace App\Http\Livewire\Article;

use App\Models\Article;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Support\Facades\Auth;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ArticleTable extends DataTableComponent
{
    public $viewRoute;
    public $userRoute;
    protected $model = Article::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->hideIf(true),
            Column::make("Titre", "titre")
                ->searchable(),
            Column::make("Description", "description")
                ->searchable(),
            Column::make('Action')
                ->label(
                    fn($row, Column $column) => view('partials.article-table-action')
                        ->with(['viewLink' => route($this->viewRoute['link'], $row)])
                )->html(),
        ];
    }
    public function builder(): EloquentBuilder
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return Article::query();
        } else {
            return Article::query()->where('user_id', $user->id);
        }
    }
}
