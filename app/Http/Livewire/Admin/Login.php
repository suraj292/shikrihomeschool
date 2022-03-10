<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Login extends Component
{
    public $userName, $password;
    public function render()
    {
        return view('livewire.admin.login')->layout('layouts.admin_login');
    }

    public function login()
    {
        $this->validate([
           'userName' => 'required',
           'password' => 'required',
        ]);
        $user = User::find(1);
        if ($user->name == $this->userName && $user->password == $this->password){
            Session::put('admin', $this->userName);
            $this->redirect(route('admin.dashboard'));
        }else{
            Session::flash('wrong_credential', 'Wrong Credential');
        }
    }

}
