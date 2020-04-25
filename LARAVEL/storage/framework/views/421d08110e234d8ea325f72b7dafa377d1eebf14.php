<?php $__env->startSection('content'); ?>
    <h1 style="margin-top:50px; text-align: center; font-size:45px;"> Actor: </h1>

    <div style="padding-top:35px;">
      <ul>
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px; color: crimson;">Nombre Completo: <?php echo e($actor->getNombreCompleto()); ?></li>
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px; color: crimson;">Rating: <?php echo e(($actor->rating!= '' ? $actor->rating:"Aún no tiene rating")); ?></li>
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px; color: crimson;">Película favorita: <?php echo e(($actor->getPeliculaFavorita($id)!= '' ? $actor->getPeliculaFavorita($id):"No tiene")); ?></li>
      </ul>
    </div>

    <form id="borrarActor" name="borrarActor" method="POST" action="/actor/<?php echo e($actor->id); ?>">
      <?php echo method_field('delete'); ?>
      <?php echo csrf_field(); ?>
        <div style="text-align:center; margin-top:20px">
        <input type="submit" value="Borrar Actor" name="submit"/>
      </div>
    </form>
    
    <a href="/actores" style="margin-right:50px; text-decoration: none; color: crimson; font-size: 22px; float:right;">←Seleccionar actor</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SergioRodas\Ejercitaciones_Laravel\resources\views/actor.blade.php ENDPATH**/ ?>