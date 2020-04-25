<?php $__env->startSection('content'); ?>
  <h2 style="text-align:center; margin-top:50px">Editar actores</h2>
  <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
      <ul>
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
  <?php endif; ?>
  <form id="agregarActor" name="agregarActor" method="POST" action="/actor/<?php echo e($actor->id); ?>">
    <?php echo method_field('put'); ?>
    <?php echo csrf_field(); ?>
      <div style="text-align:center; margin-top:20px">
          <label for="first_name">Nombre</label>
          <input type="text" name="first_name" value="<?php echo e($actor->first_name); ?>" id="titulo"/>
      </div>
      <div style="text-align:center; margin-top:20px">
          <label for="last_name">Apellido</label>
          <input type="text" name="last_name" value="<?php echo e($actor->last_name); ?>" id="rating"/>
      </div>
      <div style="text-align:center; margin-top:20px">
          <label for="rating">Rating</label>
          <input type="number" name="rating" value="<?php echo e($actor->rating); ?>" id="premios"/>
      </div>
      <div style="text-align:center; margin-top:20px">
      <input type="submit" value="Editar Actor" name="submit"/>
    </div>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SergioRodas\Primer_proyecto_Laravel\resources\views/actor/edit.blade.php ENDPATH**/ ?>