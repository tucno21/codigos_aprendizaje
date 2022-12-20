<?php

namespace App\Controller;

use System\Controller;
use App\Model\Lenguajes;

class LenguajeController extends Controller
{
    public function __construct()
    {
        //enviar 'auth' si ha creado session sin clave de lo contrario enviar la clave
        //$this->middleware('auth');
        //enviar el nombre de la ruta
        //$this->except(['users', 'users.create'])->middleware('loco');
    }

    public function index()
    {
        $lenguajes = Lenguajes::all();
        if (is_object($lenguajes)) {
            $lenguajes = [$lenguajes];
        }
        return view('lenguajes/index', [
            'titulo' => 'Dashboard roles',
            'lenguajes' => $lenguajes
        ]);
    }

    public function create()
    {
        return view('lenguajes/create', [
            'var' => 'es una variable',
        ]);
    }

    public function store()
    {
        $data = $this->request()->getInput();

        $valid = $this->validate($data, [
            'name' => 'required',
        ]);
        if ($valid !== true) {
            return back()->route('lenguajes.create', [
                'err' =>  $valid,
                'data' => $data,
            ]);
        } else {
            $result = Lenguajes::create($data);
            return redirect()->route('lenguajes.index');
        }
    }

    public function edit()
    {
        $id = $this->request()->getInput();

        if (empty((array)$id)) {
            $rol = null;
        } else {
            $rol = Lenguajes::first($id->id);
        }
        return view('lenguajes.edit', [
            'data' => $rol,
        ]);
    }

    public function update()
    {
        $data = $this->request()->getInput();
        $valid = $this->validate($data, [
            'name' => 'required',
        ]);

        if ($valid !== true) {
            return back()->route('lenguajes.edit', [
                'err' =>  $valid,
                'data' => $data,
            ]);
        } else {
            Lenguajes::update($data->id, $data);
            return redirect()->route('lenguajes.index');
        }
    }

    public function destroy()
    {
        $data = $this->request()->getInput();
        $result = Lenguajes::delete((int)$data->id);
        return redirect()->route('lenguajes.index');
    }

    public function comparar()
    {
        return view('home.compare', [
            'title' => 'Lenguajes de comparación',
        ]);
    }
    public function php()
    {
        return view('home.php', [
            'title' => 'php',
        ]);
    }
    public function js()
    {
        return view('home.js', [
            'title' => 'javascript',
        ]);
    }
    public function laravel()
    {
        return view('home.laravel', [
            'title' => 'Laravel',
        ]);
    }
    public function css()
    {
        return view('home.css', [
            'title' => 'CSS',
        ]);
    }
    public function bootstrap()
    {
        return view('home.bootstrap', [
            'title' => 'Bootstrap',
        ]);
    }

    public function git()
    {
        return view('home.git', [
            'title' => 'Git',
        ]);
    }
}
