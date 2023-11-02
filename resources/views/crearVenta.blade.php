<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Venta</title>
</head>
<body>
    <h1>Nueva Venta</h1>

    <div>
    <form action="{{route('venta.guardar', $Producto->CodigoProducto)}}" method='post'> 
    @csrf
    @method('post')

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Fecha Venta</label>
    <input class="form-control"  name='Fecha' id="Fecha" readonly value="{{$ldate = date('Y-m-d')}}">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Codigo Producto</label>
    <input class="form-control"  name='CodigoProducto' readonly id="CodigoProducto" readonly value="{{$Producto->CodigoProducto}}"></input>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Nombre Producto</label>
    <input class="form-control"  name='Nombre' id="Nombre" readonly value="{{$Producto->Nombre}}"></input>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Precio Producto</label>
    <input class="form-control"  name='Precio' id="Precio" readonly value="{{$Producto->Precio}}"></input>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Cantidad</label>
    <input class="form-control"  name='Cantidad' id="Cantidad" ></input>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Subtotal</label>
    <input class="form-control"  name='Subtotal' readonly id="Subtotal" ></input>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">ISV</label>
    <input class="form-control"  name='ISV' readonly id="ISV" ></input>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Total a Pagar</label>
    <input class="form-control" name='Total' readonly id="Total"></input>
    </div>

    <button class="btn btn-primary" type="submit">Salvar</button>
    <a class='btn btn-success' href="{{route('venta.guardar', $Producto->CodigoProducto)}}">Guardar Registro</a>
    <a class='btn btn-danger' href="{{route('productos.index')}}">Cancelar</a>
    </form>
    </div>

</body>
</html>