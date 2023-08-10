@if($mensagem = Session::get('normal'))
    <div class="card grey">
        <div class="card-content white-text">
            <span> <i class="material-icons">insert_emoticon</i> {{$mensagem}}</span>
        </div>
    </div>
@endif

@if($mensagem = Session::get('sucesso'))
    <div class="card green">
        <div class="card-content white-text">
            <span> <i class="material-icons">insert_emoticon</i> {{$mensagem}}</span>
        </div>
    </div>
@endif

@if($mensagem = Session::get('erro'))
    <div class="card red">
        <div class="card-content white-text">
            <span> <i class="material-icons">do_not_disturb_on</i> {{$mensagem}}</span>
        </div>
    </div>
@endif

@if($mensagem = Session::get('aviso'))
    <div class="card amber accent-4">
        <div class="card-content white-text">
            <span> <i class="material-icons">do_not_disturb_on</i> {{$mensagem}}</span>
        </div>
    </div>
@endif

@if($mensagem = Session::get('fatal'))
    <div class="card red accent-4">
        <div class="card-content white-text">
            <span> <i class="material-icons">mood_bad</i> {{$mensagem}}</span>
        </div>
    </div>
@endif