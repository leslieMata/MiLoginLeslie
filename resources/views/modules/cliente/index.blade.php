@extends('layouts/main')
@section('contenido')
<div class="container">
    <div class="row">
        <h3 class="text-center">Hola que tal autodidacta</h3>
        <div class="col">
            <a href="{{ route('logout') }}"> salir del sistema</a>
        </div>
    </div>
</div>
@endsection