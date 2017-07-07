 @if($flash = session('Mensagem'))

        	<div class="alert alert-success" role="alert">
		
               	{{ $flash }}
        	</div>
        
@endif