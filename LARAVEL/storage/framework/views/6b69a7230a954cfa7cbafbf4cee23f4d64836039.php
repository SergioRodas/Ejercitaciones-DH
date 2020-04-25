<?php $__env->startSection('title','Agregar Pelicula'); ?>
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
        <form id="agregarPelicula" name="agregarPelicula" method="POST">
          <?php echo csrf_field(); ?>
            <div>
                <label for="titulo">Title</label>
                <input type="text" name="title" value="<?php echo e(!$errors->has('title')?old('title'):""); ?>" id="titulo"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="number" name="rating" value="<?php echo e(!$errors->has('rating')?old('rating'):""); ?>" id="rating"/>
            </div>
            <div>
                <label for="premios">Awards</label>
                <input type="number" name="awards" value="<?php echo e(!$errors->has('awards')?old('awards'):""); ?>" id="premios"/>
            </div>
            <div>
                <label for="duracion">Length</label>
                <input type="number" name="length" value="<?php echo e(!$errors->has('awards')?old('awards'):""); ?>" id="duracion"/>
            </div>

            <div>
                <label>Fecha de Estreno</label>
                <select name="day">
                    <option value="">Day</option>
                    <?php for($i=1; $i < 32; $i++): ?>
                      <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                    <?php endfor; ?>

                </select>
                <select name="month">
                    <option value="">Month</option>
                    <?php for($i=1; $i < 13; $i++): ?>
                      <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                    <?php endfor; ?>
                </select>
                <select name="year">
                    <option value="">Year</option>
                    <?php for($i=1900; $i < 2017; $i++): ?>
                      <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                    <?php endfor; ?>
                </select>
            </div>

            <div>
              <label>Género</label>
              <select name="genre">
                <?php $__currentLoopData = $generos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($genero->name); ?>" ><?php echo e($genero->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>

            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SergioRodas\Primer_proyecto_Laravel\resources\views/nuevaPelicula.blade.php ENDPATH**/ ?>