@extends("../layouts.plantilla")

@section("cabecera")
EDITAR PRODUCTO

@endsection

@section("contenido")
    <form class= "formCreacion" method ="POST" action="/productos/{{$producto->id}}">    
    <!--Estas linea " de ABAJO" de codigo es para que redireccione al metodo update de las rutas del ProductosController.php -->
    <!-- por encida de laravel 5.1; si es version anterios usar: {{method_field('PUT')}}-->
    @method('PUT')
        <table>
            <tr>
                <td>Nombre : </td>
                <td>
                    <input type="text" name="nombreProducto" value = "{{$producto->nombreProducto}}">
                    {{csrf_field()}}
                    <!-- comentario de que para que se actualice el producto debe llevar las siguientes instruncciones-->
                    <!--<input type="hidden" name"_method" value="PUT">-->
                </td>
            </tr>        
            <tr>
                <td>Precio : </td>
                <td><input type="text" name="precioProducto" value = "{{$producto->precioProducto}}"></td>
            </tr>
            <tr>
                <td>Proveedor : </td>
                <td><input type="text" name="proveedor" value = "{{$producto->proveedor}}"></td>
            </tr>
            <!--<tr>
                <td>Cantidad : </td>
                <td><input type="text" name="unidadesEnExistencia" value = "{{$producto->unidadesEnExistencia}}"></td>
            </tr>-->
            <tr>
                <td>Pais origen : </td>
                <td><input type="text" name="paisOrigen" value = "{{$producto->paisOrigen}}"></td>
            </tr>

            <tr>
                <td><input type ="submit" name="enviar" value = "Actualizar"></td>
                <td><input type ="reset" name = "borrar" value = "Deshacer cambios"></td>
            </tr>
        </table> 
    </form>
    <form class= "formCreacion" method="post" action="/productos/{{$producto->id}}">
        {{csrf_field()}}
        @method("DELETE")
        <input type="submit" value = "Eliminar registro">

    </form>
    <p>vista edit.blade.php</p>
    
@endsection

@section("pie")


@endsection