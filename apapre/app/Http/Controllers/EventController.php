<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {

        $events = Event::all();

        return view('home', ['events' => $events]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function doacao()
    {
        return view('events.doacao');
    }
    public function cadastro()
    {
        return view('events.cadastro');
    }
    public function entrar()
    {
        return view('events.entrar');
    }
    public function home()
    {
        return view('events.home');
    }
    public function cadastroevento()
    {
        return view('events.cadastroevento');
    }
}
