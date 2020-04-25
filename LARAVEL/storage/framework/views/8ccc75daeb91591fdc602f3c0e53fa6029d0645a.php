<?php $__env->startSection('title','Subir imagen'); ?>
<?php $__env->startSection('content'); ?>

              <h1 class="text-center mb-5 mt-3" style="color:crimson;">Subir una imagen</h1>
        <form style="text-align: -webkit-center;" id="subirImagen" name="subirImagen" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>

          <div class="col-lg-5 col-md-8 mt-5 mb-4 pt-2 pb-1 text-center border border-danger">

            <label for="">Imagen:</label>
            <input type="file" name="imagen" value="">

          </div>

          <div class="text-center">

            <input class="btn rounded text-white bg-danger" type="submit" value="Subir Imagen" name="submit"/>

          </div>
        </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Sergio Rodas\Proyecto-Laravel-Sergio\resources\views/imagen.blade.php ENDPATH**/ ?>