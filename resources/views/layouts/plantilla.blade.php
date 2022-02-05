<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{asset('css\bootstrap.css')}}" rel="stylesheet">

    <style>
        .imagenCabecera{
            float: right;
            padding-right: 25px;
            width: 200px;        
        }

        .cabecera{
            text-align: center;            
            font-size : x-large;
            font-family : tahoma, arial,sans-serif;
        }

        .formCreacion{
            width: 400px;
            margin: 0 auto;
        }
        
        .tablaIndex{
            width: 900px;
            margin: 0 auto;
            margin-bottom:15px;
            border: black solid 5px;
        }

        .pie{
            /*background-color: #00aae4;*/
            width: 100%;
            font-size :0.7em;
            margin-bottom: 50px;
        }
        .imagenPie{
            width: 150px;
            height: 150px;            
        }
        .contenido{
            background-color:aquamarine;
            margin-bottom: 0px;
            padding-top:10px;
        }
        .cabecera li{        
            border: 5px outset blue;
        }            
    </style>

</head>

<body>
    
    <div class="cabecera p-1 bg-secondary text-white">  
                        
        @yield("cabecera")                     
            <img src = "/images/medium_doc-logo.jpg" class="imagenCabecera"/>
            @include('layouts.barnav')
    </div>
    
    <div class ="contenido p-3">
        @yield("contenido")

    </div>

    <div class = "pie p-3 mb-2 bg-success text-black bg-opacity-75">
        @yield("pie")
        <img src="/images/black.png" class="imagenPie"/>
        <p>Información</p>
        <p>Tel: +(503) 2264-8640</p>
        <p>Email: info@doffice.com.sv</p>
        <p>Horarios: 8:30am-5pm</p>

    </div>
</body>
</html>