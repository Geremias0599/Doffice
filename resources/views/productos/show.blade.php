@extends("../layouts.plantilla")

@section("cabecera")
PRODUCTOS DISPONIBLES&nbsp;&nbsp;metodo show

@endsection

@section("contenido")
<table class = "tablaIndex" border="1">
    <tr>
        <td>Nombre del ariculo</td>
        <td>Precio</td>
        <td>Proveedor</td>
        <td>Pais de origen</td>
        <td>Unidades en existencia</td>
    </tr>
    @foreach($productos as $producto)
    <tr>
    <td>{{$producto->nombreProducto}}</td>
    <td>{{$producto->precioProducto}}</td>
    <td>{{$producto->proveedor}}</td>    
    <td>{{$producto->paisOrigen}}</td>
    <td>{{$producto->unidadesEnExistencia}}</td>
    </tr>
    @endforeach

</table>


@endsection

@section("pie")


@endsection