<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\registroRequest;


class RegistroController extends Controller
{
    
	 public function __construct(){ 
        
        $this->middleware('guest');
    }


	public function create(){

		return view('layouts.usuario.registraUsuario');
	}

	public function store(registroRequest $request){

		$request->persist();
		$userName = Auth::Usuario()->nome;
		session()->flash('Mensagem', ' Seja Bem-Vindo'. ' ' .$userName );
		return redirect()->home();

	}

}
