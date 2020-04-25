<?php $__env->startSection('title','Subir imagen'); ?>
<?php $__env->startSection('content'); ?>

              <h1 class="text-center mb-5 mt-3" style="color:crimson;">Imagen subida:</h1>
              <div style="text-align: -webkit-center;" class="mb-5">

                <div class="col-8">

                  <img class="img-fluid border border-danger" src="/storage/<?php echo e($nombreArchivo); ?>" alt="">

                </div>

              </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Sergio Rodas\Proyecto-Laravel-Sergio\resources\views/imagenSubida.blade.php ENDPATH**/ ?>