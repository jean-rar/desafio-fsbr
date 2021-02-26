@extends('master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <br/>
        <h3>Editar Registro</h3>
        <br/>
        <form method="post" action="{{ route('cadastro.atualizar/'.$id) }}">
        @csrf
        
            
        </form>
    </div>
</div>

@endsection