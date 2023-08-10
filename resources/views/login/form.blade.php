@extends('site.layout')
@section('title', 'Profile')
@section('conteudo')

<form action="{{route('login.store')}}" method="POST">
    @csrf
    
    <div class="row container center">
        <br>
        <input type="email" class="center" name="email" placeholder="Email"> <br>
        <input type="password" class="center" name="password" placeholder="Password">
    </div>
    <div class="row container center">  
        <button type="submit" class="center-align btn red black-text center-aling waves-effect waves-light">Entrar</button> <br> <br>
        <a href="/register">Não tem uma conta? Registre agora!</a>
    </div>
    

</form>

@endsection