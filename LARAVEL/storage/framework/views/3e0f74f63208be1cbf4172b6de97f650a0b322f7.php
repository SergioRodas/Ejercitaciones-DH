<?php $__env->startSection('content'); ?>
    <h1 style="margin-top:50px; text-align: center; font-size:45px;"> Películas: </h1>
    <div style="padding-top:35px;">
      <ul>
        <?php $__empty_1 = true; $__currentLoopData = $peliculas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelicula): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <a href="/pelicula/<?php echo e($pelicula->id); ?>" style="margin-right:50px;text-decoration: none; color: crimson;"><li style="font-weight: bold; font-size: 32px; margin-left:90px; color: crimson;"><?php echo e($pelicula->title); ?></li></a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>No se encontraron peliculas con ese nombre</p>
      <?php endif; ?>
      </ul>
    </div>
    <a href="/peliculas" style="margin-right:50px; text-decoration: none; color: crimson; font-size: 22px; float:right; margin-bottom:20px; margin-bottom:20px;">Volver al principio</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SergioRodas\Primer_proyecto_Laravel\resources\views/peliculas.blade.php ENDPATH**/ ?>