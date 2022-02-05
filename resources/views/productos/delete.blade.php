@extends("../layouts.plantilla")

@section("cabecera")


@section("contenido")
    <form method="post">
        <input type="text" name="nombreProducto">

        <input type ="submit" name="enviar" value = "Enviar">
        
    </form>


@section("pie")