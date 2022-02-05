@extends("../layouts.plantilla")

@section("cabecera")
ESTA REALIZANDO INGRESO DE PRODUCTO A INVENTARIO

@endsection

@section("contenido")
    <form class= "formCreacion" method ="POST" action="/addFinalsuma/{{$producto->id}}">    
    <!--Estas linea " de ABAJO" de codigo es para que redireccione al metodo update de las rutas del ProductosController.php -->
    <!-- por enci       da de laravel 5.1; si es version anterios usar: {{method_field('PUT')}}-->
    @method('PUT')
        <table>
            <tr>
                <td>Nombre : </td>
                <td>
                    <input type="text" name="nombreProducto" value = "{{$producto->nombreProducto}}" readonly>
                    {{csrf_field()}}
                    <!-- comentario de que para que se actualice el producto debe llevar las siguientes instruncciones-->
                    <!--<input type="hidden" name"_method" value="PUT">-->
                </td>
            </tr>        
            <tr>
                <td>Precio : </td>
                <td><input type="text" name="precioProducto" value = "{{$producto->precioProducto}}" readonly/></td>
            </tr>
            <tr>
                <td>Proveedor : </td>
                <td><input type="text" name="proveedor" value = "{{$producto->proveedor}}" readonly/></td>
            </tr>
            <tr>
                <td>Cantidad : </td>
                <td><input type="text" name="unidadesEnExistencia"  ></td>
            </tr>
            <tr>
                <td>Pais origen : </td>
                <td><input type="text" name="paisOrigen" value = "{{$producto->paisOrigen}}" readonly></td>
            </tr>
            <tr>
                <td>Fecha del movimiento : </td>
                <td><input type="date" name="fechaMovimiento" ></td>
            </tr>
            <tr>
                <td>justificacion : </td>
                <td><input type="text" name="justificacion" ></td>
            </tr>
            <tr>
                <td><input type ="submit" name="enviar" value = "Aceptar"></td>
                <td><input type ="reset" name = "borrar" value = "Deshacer cambios"></td>
            </tr>
        </table> 
    </form>
    
    <p>vista edit.blade.php</p>
    
@endsection

@section("pie")


@endsection