<?php $__env->startSection('isiweb'); ?>

<form  class="m-t" role="form" method="POST" action="<?php echo e(Url('/proses_input_produk')); ?>">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/> <!-- token dipakai saat ada form-->

                <label class="control-label">Type</label>
                <input style="width: 50%;" type="text" autofocus="" name="type" placeholder="Type" class="form-control"/>
                <p style="color: red;"><?php echo e($errors->first('type')); ?></p>

                <label class="control-label">Warna Mobil</label>
                <input style="width: 50%;" type="text" autofocus="" name="warna" placeholder="Type" class="form-control"/>
                <p style="color: red;"><?php echo e($errors->first('type')); ?></p>

               <label class="control-label">Foto</label>
        <input type="file" min="0" name="foto" required="" accept="image/*"/>
        <p style="color: red;"><?php echo e($errors->first('foto')); ?></p>
        <br/>
                        
                <button style="width: 50%;" type="submit" class="btn btn-primary">Input</button>
            </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.tampilanmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>