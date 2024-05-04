<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Show extends Component
{
    public $userIdToDelete;
    public $listRoute;
    public $addRoute;
    public $editRoute;
    public $viewRoute;
    public $user;
    public $users;
    public $detailRoute;
    public $userConnected;

    public function mount()
    {
        $userConnected = Auth::user();
        if (isset($userConnected->id) && $userConnected->id) {
            $this->userConnected = $userConnected;
        } else {
            $userConnected = new User();
        }
    }
    public function render()
    {
        return view('livewire.user.show');
    }
    public function deleteUser($userId)
    {
        User::destroy($userId);

        return redirect()->route($this->listRoute['link'])->with('error', "L'utilisateur à été supprimer avec succès !");
    }
}
