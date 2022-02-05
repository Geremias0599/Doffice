@extends("../layouts.plantilla")

@section("cabecera")


@section("contenido")
    <form method="post">
        <input type="text" name="nombreArticulo">
        <p>Estas en el metido de insertar</p>
        <input type ="submit" name="enviar" value = "Enviar">
        
    </form>


@section("pie")