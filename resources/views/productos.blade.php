<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Lista de Prodctos</h1>
    <a class="btn btn-primary" href="{{route('producto.crear')}}">Añadir nuevo producto</a>
    <br>
        
    <div>
                <table class="table">
            <thead>
                <tr>
                <th scope="col">Codigo Producto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Cantidad</th>
                </tr>
            </thead>

            @foreach ($Producto as $item)
            <tbody>
                <tr>
                <th scope="row">{{$item->CodigoProducto}}</th>
                <td>{{$item->Nombre}}</td>
                <td>{{$item->Precio}}</td>
                <td>{{$item->Stock}}</td>
                <td>
                    <a class='btn btn-primary' href="{{route('producto.comprar', $item->CodigoProducto)}}">Comprar Producto</a> 
                </td>
                <td>
                    <a class='btn btn-success' >Editar Producto</a> 
                </td>
                <td>
                    <a class='btn btn-danger' >Eliminar Producto</a>
                </td>
                </tr>
            </tbody>
            @endforeach


            </table>
    </div>


    

</body>
</html>