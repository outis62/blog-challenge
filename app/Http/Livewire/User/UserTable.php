<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class UserTable extends DataTableComponent
{
    public $viewRoute;
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->hideIf(true),
            Column::make("Nom", "nom")
                ->searchable(),
            Column::make("Prenom", "prenom")
                ->searchable(),
            Column::make("Telephone", "telephone")
                ->searchable(),
            Column::make("Email", "email")
                ->searchable(),
            Column::make("Statut", "statut")
                ->format(function ($value) {
                    return $value ?
                    '<span class="badge badge-success">Actif</span>' :
                    '<span class="badge badge-danger">Bloquer</span>';
                })
                ->html(),
            Column::make('Action')
                ->label(
                    fn($row, Column $column) => view('partials.user-table-action')
                        ->with(['viewLink' => route($this->viewRoute['link'], $row)])
                )->html(),

        ];
    }
}
