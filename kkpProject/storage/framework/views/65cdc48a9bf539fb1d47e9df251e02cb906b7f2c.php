<?php $__env->startSection('isiweb'); ?>

<form  class="m-t" role="form" method="POST" action="<?php echo e(Url('/simpan_obat')); ?>">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/> <!-- token dipakai saat ada form-->

                <div class="ibox-title">
                <h5>Form input Obat</h5>
                </div>
                <br/>

                <label class="col-md-2 control-label">Kode</label>
                <input style="width: 50%;" type="text" autofocus="" required="" name="kode_obat" placeholder="" class="form-control"/>
                <p style="color: red;"><?php echo e($errors->first('type')); ?></p>
                
                <label class="col-md-2 control-label">Nama</label>
                <input style="width: 50%;" type="text" autofocus="" required="" name="nama_obat" placeholder="" class="form-control"/>
                <p style="color: red;"><?php echo e($errors->first('type')); ?></p>


                <label  class="col-md-2 control-label">Jenis</label>
                <select style="width: 50%;" name="jenis_obat" class="form-control">
                    <option value="Parasetamol"> Parasetamol </option>
                    <option value="salep"      > Salep       </option>
                    <option value="antibakteri"> Anti Bakteri</option>
                    <option value="dll">Dll</option>
                    <p style="color: red;"><?php echo e($errors->first('type')); ?></p>
                </select>
                <br/>

                <label class="col-md-2 control-label">Harga</label>
                <input style="width: 50%;" type="number" autofocus="" required="" name="harga" placeholder="" class="form-control"/>
                <p style="color: red;"><?php echo e($errors->first('type')); ?></p>
                <br/>

                <div class="form-group">
                 <div class="col-sm-4 col-sm-offset-2">
                <button style="width: 150%;" type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>

               
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.tampilanmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>