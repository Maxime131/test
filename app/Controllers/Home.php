<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data["title"] = "Home";
	
		$data["content"] = view("frontend/home", $data);
        return view('index', $data);
    }

    public function about()
    {
        $data["title"] = "About Us";
	
		$data["content"] = view("frontend/about", $data);
        return view('page', $data);
    }

    public function services(){
        $data["title"] = "Services";
	
		$data["content"] = view("frontend/service", $data);
        return view('page', $data);
    }

    public function Honey(){
        $data["title"] = "Honey";
	
		$data["content"] = view("frontend/product", $data);
        return view('page', $data);
    }
    public function Bees(){
        $data["title"] = "bees";
	
		$data["content"] = view("frontend/bees", $data);
        return view('page', $data);
    }
    public function Contact(){
        $data["title"] = "contact";
	
		$data["content"] = view("frontend/contact", $data);
        return view('page', $data);
    }
}
