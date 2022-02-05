@extends("../layouts.plantilla")

@section("cabecera")
Agregar mas productos existentes&nbsp;&nbsp;

@endsection

@section("contenido")
<table class = "tablaIndex" border="1">
    <tr>
        <td>Nombre del ariculo</td>
        <td>Precio</td>
        <td>Proveedor</td>
        <td>Pais de origen</td>
        <td>Unidades en existencia</td>
        <td>Agragar</td>
        <td>Vender</td>
    </tr>
    @foreach($productos as $producto)
    <tr>
    <td>{{$producto->nombreProducto}}</td>
    <td>{{$producto->precioProducto}}</td>
    <td>{{$producto->proveedor}}</td>    
    <td>{{$producto->paisOrigen}}</td>
    <td>{{$producto->unidadesEnExistencia}}</td>
    <td><a href = "{{route('addCantidad',$producto->id)}}" name="Add" >Add</a></td>
    <td><a href = "{{route('restarCantidad',$producto->id)}}" name="Vender" >Vender</a></td>
    </tr>
    @endforeach

</table>

@endsection

@section("pie")


@endsection