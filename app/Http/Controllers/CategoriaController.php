<?php

namespace APP\Http\Controllers;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = [
            "Comédia",
            "Ação",
            "Romance",
            "Suspense"
        ];

        return view('categoria/index', ['categorias' => $categorias]);
    }

    public function create()
    {
        return view("categoria.create");
    }
}
