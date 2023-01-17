@extends('layouts.app')

@section('contenido')
    <form action="" method="post">
        <div class="form-control">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id=" titulo" value="{{old('titulo')}}">
        </div>
        <div class="form-control">
            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10"  value="{{old('descripcion')}}"></textarea>
           
        </div>


    </form>
@endsection


<style>
.form-control{
    width:75vw;
    margin: auto; 
}
.form-control label{
    font-size: 20px;
    font-weight: bold;
}
.form-control input{
    width: 50vw;
    height: 50px;
    border: none;
    
}
</style>