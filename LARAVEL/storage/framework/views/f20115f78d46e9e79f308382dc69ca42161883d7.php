<?php $__env->startSection('title','Agregar Actor'); ?>
<?php $__env->startSection('content'); ?>

  <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
      <ul>
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
  <?php endif; ?>
        <form id="agregarActor" name="agregarActor" method="POST">
          <?php echo csrf_field(); ?>
            <div>
                <label for="first_name">Nombre</label>
                <input type="text" name="first_name" value="<?php echo e(!$errors->has('first_name')?old('first_name'):""); ?>" id="titulo"/>
            </div>
            <div>
                <label for="last_name">Apellido</label>
                <input type="text" name="last_name" value="<?php echo e(!$errors->has('last_name')?old('last_name'):""); ?>" id="rating"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="number" name="rating" value="<?php echo e(!$errors->has('rating')?old('rating'):""); ?>" id="premios"/>
            </div>
            <div>
            <input type="submit" value="Agregar Actor" name="submit"/>
        </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SergioRodas\Primer_proyecto_Laravel\resources\views/nuevoActor.blade.php ENDPATH**/ ?>