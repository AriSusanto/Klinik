<?php $__env->startSection('isiweb'); ?>

<!-- List Tabel Pasien-->


        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <a class="fa fa-chevron-left btn btn-primary" href="<?php echo e(Url('/pasien')); ?>"> Daftar Pasien</a>
                        <a class="fa fa-user btn btn-primary" href="<?php echo e(Url('/dokter')); ?>"> Ke Dokter</a>
                    </div>
                    <div class="ibox-title">
                        <h5>Detail Info Pasien Apotek 24 Jam</h5>
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
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Action</th>
                    </tr>
                    </thead>
            <tbody>
                        <?php $i = 1;?>
                        <?php $__currentLoopData = $list_pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baris): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="gradeX">
                        <td><?php echo e($i); ?></td>
                        <td><?php echo e($baris->nama_pas); ?></td>
                        <td><?php echo e($baris->jenis_kelamin); ?></td>
                        <td class="center"><?php echo e($baris->umur); ?></td>
                        <?php $i++ ?>
                        <td>
                            <div class="col-md-6">
                            <a data-toggle="modal" class="btn btn-info btn-sm demo4" href="#modal-form-<?php echo e($baris->id); ?>">Info Pasien</a>
                            </div>

                                                             <!-- pop up update,form update-->
                            <div id="modal-form-<?php echo e($baris->id); ?>" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12 b-r"><h3 class="m-t-none m-b">Riwayat Pasien</h3>

                                                   

                                                <form enctype="multipart/form-data" role="form" method="post" action="<?php echo e(Url('/proses_update_riwayat')); ?>" class="form-horizontal">
                                                         <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                                                         <input type="hidden" name="id" value="<?php echo e($baris->id); ?>"/>

                                                        <div class="row">
                                                            <div class="col-md-2">
                                                            <label class="control-label">Nama : </label>
                                                            </div>
                                                            <div class="col-md-2">
                                                              <label class="control-label"><?php echo e($baris->nama_pas); ?></label>
                                                            </div>

                                                             <div class="col-md-2">
                                                            <label class="control-label">Umur : </label>
                                                            </div>
                                                            <div class="col-md-2">
                                                              <label class="control-label"><?php echo e($baris->umur); ?></label>
                                                            </div>

                                                             <div class="col-md-3">
                                                            <label class="control-label">Jenis Kelamin : </label>
                                                            </div>
                                                            <div class="col-md-1">
                                                              <label class="control-label"><?php echo e($baris->jenis_kelamin); ?></label>
                                                            </div>
                                                        </div>
                                                   
                                                    <br/>
                                                    <!--Tabel dalam Modal Form-->
                                                    <div class="row">
                                                    <div class="wrapper wrapper-content animated fadeInRight">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="ibox float-e-margins">
                                                                    <div class="ibox-title">
                                                                        <h5>Daftar Riwayat Penyakit Pasien</h5>

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

                                                                        <table class="footable table table-stripped toggle-arrow-tiny">
                                                                            <thead>
                                                                            <tr>

                                                                                <th >Tanggal</th>
                                                                                <th>Diagnosis</th>
                                                                                <th>Tindakan</th>
                                                                                <th>Obat</th>
                                                                                <th>Dokter</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                               
                                                                            <tr>
                                                                                <td><?php echo e($baris->tanggal); ?></td>
                                                                                <td><?php echo e($baris->diag); ?></td>
                                                                                <td><?php echo e($baris->tindakan); ?></td>
                                                                                <td><?php echo e($baris->obat); ?></td>
                                                                                <td><?php echo e($baris->dokter); ?></td>
                                                                            </tr>
                                                                          
                                                                            </tbody>
                                                                            <tfoot>
                                                                            <tr>
                                                                                <td colspan="5">
                                                                                    <ul class="pagination pull-right"></ul>
                                                                                </td>
                                                                            </tr>
                                                                            </tfoot>
                                                                        </table>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
           
                                                    </div>

                                                     <div class="row">
                                                            <div class="col-md-2">
                                                            <label class="control-label">Nama</label>
                                                            </div>
                                                            <div class="col-md-10">
                                                        <input value="<?php echo e($baris->nama_pas); ?>" style="width:50%" type="text" name="nama_pas" required="" class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                            <div class="col-md-2">
                                                            <label class="control-label">Umur</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                        <input value="<?php echo e($baris->umur); ?>" style="width:40%" type="number" name="umur" required="" class="form-control"/>
                                                        </div>
                <label class="col-md-2 control-label">Jenis Kelamin</label>
                <div class="col-md-4">
                <div class="i-checks"><label>
                <input type="radio" required="" value="L" name="jenis_kelamin"><i></i>Laki-laki</label>
                </div>

                <div class="i-checks"><label>
                <input type="radio" required="" value="P" name="jenis_kelamin"> <i></i>Perempuan</label>
                </div>

                                                    </div>
                                                </div>
                                                    <br/>
                                                    <div class="row">
                                                            <div class="col-md-2">
                                                            <label class="control-label">Dokter</label>
                                                            </div>
                                                            <div class="col-md-10">
                                                        <input value="<?php echo e($baris->dokter); ?>" style="width:50%" type="text" name="dokter" required="" class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                            <div class="col-md-2">
                                                            <label class="control-label">Tanggal</label>
                                                            </div>
                                                            <div class="col-md-10">
                                                        <input value="<?php echo e($baris->tanggal); ?>" style="width:50%" type="text" name="tanggal" required="" class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                     <div class="row">
                                                            <div class="col-md-2">
                                                            <label class="control-label">Diagnosis</label>
                                                            </div>
                                                            <div class="col-md-10">
                                                        <input value="<?php echo e($baris->diag); ?>" style="width:50%" type="text" name="diag" required="" class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                     <div class="row">
                                                            <div class="col-md-2">
                                                            <label class="control-label">Tindakan</label>
                                                            </div>
                                                            <div class="col-md-10">
                                                        <input value="<?php echo e($baris->tindakan); ?>" style="width:50%" type="text" name="tindakan" required="" class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                            <div class="col-md-2">
                                                            <label class="control-label">Obat</label>
                                                            </div>
                                                            <div class="col-md-10">
                                                        <input value="<?php echo e($baris->obat); ?>" style="width:50%" type="text" name="obat" required="" class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                         <?php if(Auth()->user()->akses == 'user'): ?>
                                                        <div> 
                                                            <button style="width: 100%" class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Save</strong></button>
                                                        </div>
                                                        <?php endif; ?>

                                                </form>
                                                
                                                </div>
                                                
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>

                        </td>
                    </tr>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
</div>
</div>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('template.tampilanmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>