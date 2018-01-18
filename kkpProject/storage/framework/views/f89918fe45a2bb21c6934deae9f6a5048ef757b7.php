<?php $__env->startSection('isiweb'); ?>

<form  class="m-t" role="form" method="POST" action="<?php echo e(Url('/proses_simpan_pasien')); ?>">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/> <!-- token dipakai saat ada form-->

                <div class="ibox-title">
                <h5>Form Pendaftaran Pasien Dokter Umum</h5>
                </div>
                <br/>

   				<label class="col-md-2 control-label">Nama</label>
                <input style="width: 50%;" type="text" autofocus="" required="" name="nama_pasien" placeholder="" class="form-control"/>
                <p style="color: red;"><?php echo e($errors->first('type')); ?></p>

                <label class="col-md-2 control-label">Jenis Kelamin</label>
                <div class="col-md-10">
                <div class="i-checks"><label>
                <input type="radio" required="" value="L" name="jenis_kelamin"><i></i>Laki-laki</label>
            	</div>

                <div class="i-checks"><label>
                <input type="radio" required="" value="P" name="jenis_kelamin"> <i></i>Perempuan</label>
            	</div>
            	<p style="color: red;"><?php echo e($errors->first('type')); ?></p>
            	</div>
                

                <label class="col-md-2 control-label">Umur</label>
                <input style="width: 5%;" class="form-control" type="number" required="" name="umur"/>
        		<br/>

                <label class="col-md-2 control-label">Alamat</label>
                <textarea style="width: 50%;" class="form-control" required="" name="alamat_pasien"></textarea>
                <p style="color: red;"><?php echo e($errors->first('type')); ?></p>

                <label class="col-md-2 control-label">Telp.</label>
                <input style="width: 50%;" type="text" autofocus="" name="telepon" placeholder="" class="form-control"/>
                <br/>

                <div class="form-group">
                 <div class="col-sm-4 col-sm-offset-2">
                <button style="width: 25%;" type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>

               
</form>
<br/>
<!-- List Tabel Pasien-->


        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <a class="fa fa-chevron-right btn btn-primary" href="<?php echo e(Url('/info_pasien')); ?>"> Info Pasien</a>

                    </div>
                    <div class="ibox-title">
                        <h5>Daftar Pasien Apotek 24 Jam</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example nomor" >
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Telp.</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <!-- Untuk Nomor Urut-->
                         <?php $i = 1;?> 
                    	<?php $__currentLoopData = $list_pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baris): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="gradeX">
                        <td><?php echo e($i); ?></td>
                        <td><?php echo e($baris->nama_pasien); ?></td>
                        <td class="center"><?php echo e($baris->jenis_kelamin); ?></td>
                        <td class="center"><?php echo e($baris->umur); ?></td>
                        <td ><?php echo e($baris->alamat_pasien); ?></td>
                        <td><?php echo e($baris->telepon); ?></td> 
                        <?php $i++ ?>
                        <td>
                             <form method="post" action="<?php echo e(Url('/hapus_pasien')); ?>">
                              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                              <input type="hidden" name="id" value="<?php echo e($baris->id); ?>"/>
                                  <?php if(Auth()->user()->akses == 'admin'): ?>
                                <button class="btn btn-danger btn-sm demo4"  onclick ="return confirm('Apakan anda ingin menghapus <?php echo e($baris->nama_pasien); ?>')" >Delete</button>
                           
                           
                            <div class="col-md-6">
                            <a data-toggle="modal" class="btn btn-info btn-sm demo4" href="#modal-form-<?php echo e($baris->id); ?>">Update</a>
                            </div>
                             </form>

                                                         <!-- pop up update,form update-->
                            <div id="modal-form-<?php echo e($baris->id); ?>" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12 b-r"><h3 class="m-t-none m-b">Data Pasien</h3>

                                                   

                                                <form enctype="multipart/form-data" role="form" method="post" action="<?php echo e(Url('/proses_update_pasien')); ?>" class="form-horizontal">
                                                         <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                                                         <input type="hidden" name="id" value="<?php echo e($baris->id); ?>"/>

                                                        <div class="row">
                                                            <div class="col-md-2">
                                                            <label class="control-label">Nama</label>
                                                            </div>
                                                            <div class="col-md-10">
                                                        <input value="<?php echo e($baris->nama_pasien); ?>" style="width:100%" type="text" name="nama_pasien" required="" class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                            <label class="col-md-2 control-label">Jenis Kelamin</label>
                                                            <div class="col-md-10">
                                                            <div class="i-checks"><label>
                                                            <input type="radio" required="" value="<?php echo e($baris->jenis_kelamin); ?>" name="jenis_kelamin"><i></i>Laki-laki</label>
                                                            </div>

                                                            <div class="i-checks"><label>
                                                            <input type="radio" required="" value="<?php echo e($baris->jenis_kelamin); ?>" name="jenis_kelamin"> <i></i>Perempuan</label>
                                                            </div>
                                                            <p style="color: red;"><?php echo e($errors->first('type')); ?></p>
                                                            </div>
                                                            
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                            <div class="col-md-2">
                                                            <label class="control-label">Umur</label>
                                                            </div>
                                                            <div class="col-md-10">
                                                        <input value="<?php echo e($baris->umur); ?>" style="width:20%" type="number" name="umur" required="" class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                            <div class="col-md-2">
                                                            <label class="control-label">Alamat</label>
                                                            </div>
                                                            <div class="col-md-10">
                                                      <input value="<?php echo e($baris->alamat_pasien); ?>" style="width:100%" type="text" name="alamat_pasien" required="" class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                     <div class="row">
                                                            <div class="col-md-2">
                                                            <label class="control-label">Telp.</label>
                                                            </div>
                                                            <div class="col-md-10">
                                                        <input value="<?php echo e($baris->telepon); ?>" style="width:100%" type="number" name="telepon" required="" class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <br/>

                                                        <div> 
                                                            <button style="width: 100%" class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Update</strong></button>
                                                        </div>
                                                </form>
                                                
                                                </div>
                                                
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
                    <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Telp.</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>

                        


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.tampilanmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>