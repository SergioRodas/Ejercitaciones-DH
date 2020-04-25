<?php $__env->startSection('content'); ?>
    <h1 style="margin-top:50px; text-align: center; font-size:45px;"> Géneros: </h1>
    <div style="padding-top:5px;">
      <ul>

      <?php $__empty_1 = true; $__currentLoopData = $generos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <a href="/genre/<?php echo e($genero->id); ?>" style="margin-right:50px;text-decoration: none; color: crimson;"><li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px; color: crimson;"><?php echo e($genero->name); ?></li></a>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> <p>No se encontraron resultados</p>

      <?php endif; ?>
      </ul>
    </div>

    <a href="/genres" style="margin-right:50px; text-decoration: none; color: crimson; font-size: 22px; float:right; margin-bottom:20px;">Volver al principio</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Sergio Rodas\Proyecto-Laravel-Sergio\resources\views/genres.blade.php ENDPATH**/ ?>