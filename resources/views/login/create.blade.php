@extends('site.layout')
@section('title', 'Profile')
@section('conteudo')

<form action="{{route('user.store')}}" method="POST">
    @csrf
    
    <div class="row container center">
        <br>
        <input type="text" class="center" name="name" placeholder="Nome"> <br>
        <input type="email" class="center" name="email" placeholder="Email"> <br>
        <input type="password" class="center" name="password" placeholder="Password"><br>
        <input type="text" class="center" name="numero" placeholder="Número"> <br>
        <input type="text" class="center" name="cpf" placeholder="CPF"><br>
    </div>
    <div class="row container center">  
        <button type="submit" class="center-align btn red black-text center-aling waves-effect waves-light">Cadastrar</button><br> <br>
        <a href="/login">Já tem uma conta? Entre agora!</a>
    </div>
    

</form>

@endsection