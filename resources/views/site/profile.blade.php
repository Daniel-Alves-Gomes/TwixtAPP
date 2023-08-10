@extends('site.layout')
@section('title', 'Profile')
@section('conteudo')

    <div class="hello center">
        <h4>Olá, {{auth()->user()->name}}</h4>
    </div>

    <div class="row container">
        <div class="col s12 m4">
            <div class="card">
                <div class="card-content center">
                    <span class="card-title"><i class="material-icons">contact_mail</i> EMAIL</span>
                    <p>{{auth()->user()->email}}</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-content center">
                    <span class="card-title"><i class="material-icons">group</i> NOME</span>
                    <p>{{auth()->user()->name}}</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-content center">
                    <span class="card-title"><i class="material-icons">phone</i> NÚMERO</span>
                    <p>{{auth()->user()->numero}}</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-content center">
                    <span class="card-title"><i class="material-icons">contact_mail</i> CPF</span>
                    <p>{{auth()->user()->cpf}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="selectors center">
        <a href="/post" class="btn light-blue darken-2">Postagem</a>
    </div>

@endsection
