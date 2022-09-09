<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static $products = [
        ["id"=>"1", "name"=>"Cheesecake", "description"=>"Torta Cheescake", "image" => "b1.png", "price"=>"22.00"],
        ["id"=>"2", "name"=>"Morango", "description"=>"Torta Morango", "image" => "b2.png", "price"=>"20.00"],
        ["id"=>"3", "name"=>"Rocambole", "description"=>"Rocambole", "image" => "b3.png", "price"=>"18.00"],
        ["id"=>"4", "name"=>"Bolo", "description"=>"Bolo Fatia", "image" => "b4.png", "price"=>"17.00"]
    ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Turismo e Padaria";
        $viewData["subtitle"] =  "Lista de produtos";
        $viewData["products"] = ProductController::$products;
        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $product = ProductController::$products[$id-1];
        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] =  $product["name"]." - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
}
