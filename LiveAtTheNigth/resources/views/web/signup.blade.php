@extends('layout.home')

@section('content')
    <div>
        <div>
            <div><h2>Registro</h2></div>
            <div>
            <form action="/signup" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div>
                        <label for="">Nombres</label>
                        <input type="text" name="nombres" id="">
                    </div>
                    <div>
                        <label for="">Apellidos</label>
                        <input type="text" name="apellidos" id="">
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input type="email" name="email" id="">
                    </div>
                    <div>
                        <label for="">Contraseña</label>
                        <input type="password" name="password" id="">
                    </div>
                    <div>
                        <label for="">Foto</label>
                        <input type="file" name="foto">
                    </div>
                    <div><input type="submit" value="Agregar"></div>
                    {{-- <div>
                        <label for="">Foto</label>
                        <input type="text" name="" id="">
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
@endsection