<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
</head>
<body>
    <h1>Lista de ventas realizadas</h1>
    <a class="btn btn-primary" href="{{route('productos.index')}}">Añadir nueva venta</a>
    <br>

    <div>
                <table class="table">
            <thead>
                <tr>
                <th scope="col">Codigo Venta</th>
                <th scope="col">Fecha de Venta</th>
                <th scope="col">Codigo Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Subtotal</th>
                <th scope="col">ISV</th>
                <th scope="col">Total</th>
                </tr>
            </thead>

            @foreach ($Ventas as $item)

            <tbody>
                <tr>
                <th scope="row">{{$item->Codigo}}</th>
                <td>{{$item->FechaVenta}}</td>
                <td>{{$item->CodigoProducto}}</td>
                <td>{{$item->Cantidad}}</td>
                <td>{{$item->Subtotal}}</td>
                <td>{{$item->ISV}}</td>
                <td>{{$item->Total}}</td>
                </tr>
                
            </tbody>
            

            @endforeach


            </table>
    </div>

</body>
</html>