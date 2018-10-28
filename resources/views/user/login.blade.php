<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login | Investindo</title>
        <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    </head>
    <body>
        <div class="backgroud">
            
        </div>
        <section id="conteudo-view" class="Login">
           <h1>Investindo</h1>
           <h3>Nosso gerenciador de investinento</h3>


            {!! Form::open(['rou0te'=>'user.login','method'=>'post']) !!} 
                <label for="">
                    {!!Form::text('username',null,['class'=>'input','placeholder'=>'Usuário']) !!}
                </label>
                <label for="">
                    {!!Form::password('password',['class'=>'input','placeholder'=>'Senha']) !!}
                </label>
                {!! Form::Submit('Entrar') !!}
            {!! Form::close() !!} 
           
        </section>        
    </body>
</html>