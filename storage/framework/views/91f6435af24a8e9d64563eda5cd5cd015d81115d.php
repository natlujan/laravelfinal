<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <title>CRUD con Laravel EJ. PARCIAL</title>
  </head>
  <body>
    <div class="container">
    <h1 class="bg-primary text-white text-center mb-3">CRUD con Laravel EJ. PARCIAL</h1>


    <div class="container">
        
        <a href="<?php echo e(route('productos.create')); ?>" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Código</th>
      <th scope="col">Descripción</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
  <?php if(count($productos) > 0 ): ?>
  <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($producto->id); ?></td>
        <td><?php echo e($producto->codigo); ?></td>
        <td><?php echo e($producto->descripcion); ?></td>
        <td><?php echo e($producto->cantidad); ?></td>
        <td><?php echo e($producto->precio); ?></td>
        <td>
          <a href="<?php echo e(route('productos.edit',  ['id' => $producto->id])); ?>" class="btn btn-info">Editar</a>         
          <form action="<?php echo e(route('productos.destroy',  ['id' => $producto->id])); ?>" method="POST">
                                <?php echo method_field("delete"); ?>
                                <?php echo csrf_field(); ?>     
            <button type="submit" class="btn btn-danger">Delete</button>
         </form>          
        </td>        
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    <?php endif; ?>
  </tbody>
</table>

    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>
    -->
  </body>
</html><?php /**PATH C:\xampp\htdocs\CRUD\resources\views/productos/index.blade.php ENDPATH**/ ?>