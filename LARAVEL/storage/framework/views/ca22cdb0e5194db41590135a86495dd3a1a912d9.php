<?php $__env->startSection('content'); ?>
    <h1 style="margin-top:50px; text-align: center; font-size:45px;"> Actores: </h1>
    <h2 style="text-align:center; margin-top:50px">Buscar actores</h2>

    <form id="buscarActor" action="/actores/buscar" name="buscarActor" method="POST">
      <?php echo csrf_field(); ?>
        <div style="text-align:center;">
            <label for="name">Nombre del actor</label>
            <input type="text" name="name" id="name"/>
        </div>
        <div style="text-align:center; margin-top: 20px; margin-bottom: 50px;">
        <input type="submit" value="Buscar Actor" name="submit"/>
      </div>
    </form>
    <div style="padding-top:5px;">
      <ul>
      <?php $__empty_1 = true; $__currentLoopData = $actores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <a href="/actor/<?php echo e($actor->id); ?>" style="margin-right:50px;text-decoration: none; color: crimson;"><li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px; color: crimson;"><?php echo e($actor->getNombreCompleto()); ?></li></a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> <p>No se encontraron coincidencias</p>

      <?php endif; ?>
      </ul>
    </div>
    <div class="ml-5">
      <?php echo e($actores->links()); ?>

    </div>


    <a href="/actores" style="margin-right:50px; text-decoration: none; color: crimson; font-size: 22px; float:right; margin-bottom:20px;">Volver al principio</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SergioRodas\Primer_proyecto_Laravel\resources\views/actores.blade.php ENDPATH**/ ?>