@extends('layout.home')

@section('content')
    <div class="cont-signin">
        <div>
            <form action="/signin" method="POST" >
                <div {{ $errors->has('email') ? 'has-error' : ''}}>
                    {{csrf_field()}}
                    <div class="txt-signin"><h2>Inicio de Sesión</h2></div>
                    <div class="input-signin">
                        <div>
                            <input type="text" name="email" placeholder="Usuario">
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div>
                            <input type="password" name="pass" placeholder="Contraseña">
                            {!! $errors->first('pass', '<span class="help-block">:message</span>') !!}
    
                        </div>
                    </div>
                    <div class="btn-signin">
                        <div><input type="submit" value="Iniciar Sesión"></div>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
@endsection