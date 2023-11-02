<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion de Producto</title>
</head>
<body>
    <h1>Creacion de Productos</h1>
    <br>

    <div>
    <form action="{{route('producto.guardar')}}" method='POST'> 
    @csrf
    @method('POST')

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Codigo Producto</label>
    <input class="form-control" id="CodigoProducto" name='CodigoProducto' placeholder="FR001">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Nombre</label>
    <input class="form-control" id="Nombre" name='Nombre'placeholder='Manzana Verde'></input>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Precio</label>
    <input class="form-control" id="Precio" name='Precio' placeholder='15'></input>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Stock</label>
    <input class="form-control" id="Stock" name='Stock' placeholder="250"></input>
    </div>
    <button class='btn btn-success' typ='submit'>Guardar Registro</button>
    <a class='btn btn-danger' href="{{route('productos.index')}}">Cancelar</a>
    </form>
    </div>

</body>
</html>