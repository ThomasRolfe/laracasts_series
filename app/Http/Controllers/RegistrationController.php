<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationForm;
use App\Http\Controllers\SessionsController;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationForm $form)
    {

        $form->persist();

        session('message', 'here is a default message');
        session()->flash('message', 'thanks so much for signing up');

        return redirect()->home();

    }
}
