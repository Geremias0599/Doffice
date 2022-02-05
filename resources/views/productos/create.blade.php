@extends("../layouts.plantilla")

@section("cabecera")
INSERTAR PRODUCTOS

@endsection

@section("contenido")
    <form class="formCreacion" method="Post" action="/productos">
        <table>
            <tr>
                <td>Nombre : </td>
                <td>
                    <input type="text" name="nombreProducto">
                    {{csrf_field()}}
                </td>
            </tr>        
            <tr>
                <td>Precio : </td>
                <td><input type="text" name="precio"></td>
            </tr>
            <tr>
                <td>Proveedor : </td>
                <td><input type="text" name="proveedor"></td>
            </tr>
            <tr>
                <td>Cantidad : </td>
                <td><input type="text" name="unidadesEnExistencia"></td>
            </tr>
            <tr>
                <td>Pais origen : </td>
                <td><input type="text" name="paisOrigen"></td>
            </tr>

            <tr>
                <td><input type ="submit" name="enviar" value = "Enviar"></td>
                <td><input type ="reset" name = "borra" value = "Borrar"></td>
            </tr>
        </table>        
        
        <p>vista create.blade.php</p>
        
    </form>
@endsection

@section("pie")


@endsection