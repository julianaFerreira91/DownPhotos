@extends('layouts.master')

@section('title')
| Registro
@endsection

@section('content') 


<!-- registration -->
	<div class="main-1">
	<h1>Área de Cadastro</h1>
		<div class="container">
			<div class="register">
				<div class="clearfix"> </div>
				<div class="register-but">
				   <form method="POST" action="/registro">

						   			 {{ csrf_field() }}
						 <div class="register-top-grid">
							<h3>Informações Pessoais</h3>
								<div class="wow fadeInLeft">
								<span>Nome<label>*</label></span>
								<input name="nome" type="text" required> 
								</div>

								<div class="wow fadeInRight">
								<span>Sobrenome<label>*</label></span>
								<input name="sobrenome" type="text" required> 
								</div>	


								<div class="wow fadeInLeft">
								 <span>Email<label>*</label></span>
								 <input name="email" type="text" required> 
								</div>

							 <div class="clearfix"> </div>
							 </div>
							  <div class="clearfix"> </div>
						     <div class="register-bottom-grid">
								    <h3>Informações de Login</h3>

								    	<div class="wow fadeInLeft">
										<span>Senha<label>*</label></span>
										<input name="senha" type="password" required>
										</div>

								<div class="wow fadeInRight">
								<span>Confirme a Senha<label>*</label></span>
								<input name="senha_confirmation" type="password" required>
								</div>

					 </div>
					   <input type="submit" value="Cadastrar">
					   <div class="clearfix"> </div>
					   @include('layouts.includes.erros')
				   </form>
				</div>
		   </div>
		 </div>
	</div>



@endsection  