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
    <form action="{{route('venta.guardar')}}" method='post'> 
    @csrf
    @method('post')

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Fecha Venta</label>
    <input class="form-control" id="Nombre" name='Nombre' value="{{$ldate = date('Y-m-d')}}">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Codigo Producto</label>
    <input class="form-control" id="Apellido" name='Apellido' readonly value="{{$Producto->CodigoProducto}}"></input>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Nombre Producto</label>
    <input class="form-control" id="Apellido" name='Apellido'value="{{$Producto->Nombre}}"></input>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Precio Producto</label>
    <input class="form-control" id="Apellido" name='Apellido'value="{{$Producto->Precio}}"></input>
    </div>
    
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Cantidad</label>
    <input class="form-control" id="Correo" name='Correo'></input>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Subtotal</label>
    <input class="form-control" id="Password" name='Password' value="{{$Producto->Precio*$Producto->Precio}}"></input>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">ISV</label>
    <input class="form-control" id="Password" name='Password' value=""></input>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Total a Pagar</label>
    <input class="form-control" id="Password" name='Password' value=""></input>
    </div>


    <button class='btn btn-success' typ='submit'>Guardar Registro</button>
    <a class='btn btn-danger' href="">Cancelar</a>
    </form>
    </div>

</body>
</html>