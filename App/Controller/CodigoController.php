<?php

namespace App\Controller;

use App\Model\Codigos;
use System\Controller;
use App\Model\Lenguajes;

class CodigoController extends Controller
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
        $codigos = Codigos::lista();
        if (is_object($codigos)) {
            $codigos = [$codigos];
        }
        return view('codigos/index', [
            'titulo' => 'Dashboard roles',
            'codigos' => $codigos
        ]);
    }

    public function show()
    {
        $id = $_GET['id'];
        $codigo = Codigos::find($id);
        $codigo->codigo = html_entity_decode($codigo->codigo);
        echo json_encode($codigo);
        exit;
    }

    public function create()
    {
        $lenguajes = Lenguajes::all();
        if (is_object($lenguajes)) {
            $lenguajes = [$lenguajes];
        }

        return view('codigos/create', [
            'var' => 'es una variable',
            'lenguajes' => $lenguajes
        ]);
    }

    public function store()
    {
        $data = $this->request()->getInput();

        $valid = $this->validate($data, [
            'titulo' => 'required',
            'descripcion' => 'required',
            'lenguaje_id' => 'required',
            'codigo' => 'required',
        ]);
        if ($valid !== true) {
            return back()->route('codigos.create', [
                'err' =>  $valid,
                'data' => $data,
            ]);
        } else {
            Codigos::create($data);
            return redirect()->route('codigos.index');
        }
    }

    public function edit()
    {
        $lenguajes = Lenguajes::all();
        if (is_object($lenguajes)) {
            $lenguajes = [$lenguajes];
        }
        $id = $this->request()->getInput();

        if (empty((array)$id)) {
            $rol = null;
        } else {
            $rol = Codigos::first($id->id);
        }
        return view('codigos.edit', [
            'data' => $rol,
            'lenguajes' => $lenguajes
        ]);
    }

    public function update()
    {
        $data = $this->request()->getInput();
        $valid = $this->validate($data, [
            'titulo' => 'required',
            'descripcion' => 'required',
            'lenguaje_id' => 'required',
            'codigo' => 'required',
        ]);

        if ($valid !== true) {
            return back()->route('codigos.edit', [
                'err' =>  $valid,
                'data' => $data,
            ]);
        } else {
            Codigos::update($data->id, $data);
            return redirect()->route('codigos.index');
        }
    }

    public function destroy()
    {
        $data = $this->request()->getInput();
        $result = Codigos::delete((int)$data->id);
        return redirect()->route('codigos.index');
    }

    public function lista()
    {
        $codigos = Codigos::lista();
        dd($codigos);
        if (is_object($codigos)) {
            $codigos = [$codigos];
        }

        echo json_encode(['data' => $codigos]);
        exit;
    }

    public function listacomparar()
    {
        $codigos = Codigos::lista('comparar');
        if (is_object($codigos)) {
            $codigos = [$codigos];
        }
        echo json_encode($codigos);
        exit;
    }
    public function listaphp()
    {
        $codigos = Codigos::lista('php');
        if (is_object($codigos)) {
            $codigos = [$codigos];
        }
        echo json_encode($codigos);
        exit;
    }
    public function listajs()
    {
        $codigos = Codigos::lista('javascript');
        if (is_object($codigos)) {
            $codigos = [$codigos];
        }
        echo json_encode($codigos);
        exit;
    }
    public function listalaravel()
    {
        $codigos = Codigos::lista('laravel');
        if (is_object($codigos)) {
            $codigos = [$codigos];
        }
        echo json_encode($codigos);
        exit;
    }

    public function listacss()
    {
        $codigos = Codigos::lista('css');
        if (is_object($codigos)) {
            $codigos = [$codigos];
        }
        echo json_encode($codigos);
        exit;
    }

    public function listabootstrap()
    {
        $codigos = Codigos::lista('bootstrap');
        if (is_object($codigos)) {
            $codigos = [$codigos];
        }
        echo json_encode($codigos);
        exit;
    }
}
