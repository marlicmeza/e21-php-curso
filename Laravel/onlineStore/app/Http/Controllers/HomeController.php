<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Turismo e Padaria";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "Tudo sbore SC";
        $viewData["subtitle"] =  "Sobre nós";
        $viewData["description"] =  "Pagina sobre nós...";
        $viewData["author"] = "Desenvolvido por: Marli Meza";
        return view('home.about')->with("viewData", $viewData);
    }
}
