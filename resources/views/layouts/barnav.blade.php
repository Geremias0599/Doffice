<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">DOFFICE</a>
            <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>-->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('productos-show') }}">Inicio</a>
                        
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('productos-create') }}">Nuevo Producto</a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('productos-AddCantidad') }}">Agregar a inventario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('productos-edit') }}">Editar Producto</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>