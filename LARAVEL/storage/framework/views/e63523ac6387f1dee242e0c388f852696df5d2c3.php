<?php $__env->startSection('content'); ?>
    <h1 style="margin-top:50px; text-align: center; font-size:45px;"> Película: <?php echo e($pelicula->title); ?> </h1>
    <div style="padding-top:35px;">
      <ul class="text-primary">
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px;">Nombre: <?php echo e($pelicula->title); ?></li>
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px;">Rating: <?php echo e(($pelicula->rating!= '' ? $pelicula->rating:"Aún no tiene rating")); ?></li>
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px;">Premios: <?php echo e($pelicula->awards); ?></li>
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px;">Género: <?php echo e(($pelicula->genre!= '' ? $pelicula->genre->name:"No tiene")); ?></li>
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px;">Duración: <?php echo e($pelicula->length!='' ? $pelicula->length:"No especificada"); ?></li>

      </ul>
          <details style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px; color: crimson;">
            <summary>↓ Actores que participan ↓</summary>
              <?php $__empty_1 = true; $__currentLoopData = $actores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                
              
              <p class="text-danger font-italic pt-2 ml-5"><?php echo e($actor->getNombreCompleto()); ?><p>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> <p>Esta película no tiene actores asociados</p>
            <?php endif; ?>
          </details>
    </div>
    <a href="/peliculas" style="margin-right:50px; text-decoration: none; color: crimson; font-size: 22px; float:right; margin-bottom:20px; margin-bottom:20px;">←Listado de películas</a>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SergioRodas\Ejercitaciones_Laravel\resources\views/Pelicula.blade.php ENDPATH**/ ?>