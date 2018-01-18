<?php $__env->startSection('isiweb'); ?>

<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>List kendaraan</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo e(Url('/beranda')); ?>">Beranda</a> <!-- link ke proses tampilan inputan database-->
                        </li>
                        <li>
                            <a href="<?php echo e(Url('/order')); ?>">Order</a>
                        </li>
                        <li class="active">
                            <strong>List Kendaraan</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Daftar Produk</h5>
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

                        <a class="btn btn-primary" href="<?php echo e(Url('/input_produk')); ?>">Tambah Produk</a>

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                         <th>Type</th>
                        <th>Warna</th>
                        <th>Foto</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    	<?php $__currentLoopData = $listproduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baris): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="gradeX">
                        <td><?php echo e($baris->type); ?></td>
                        <td><?php echo e($baris->warna); ?></td>
                        <td class="center"><?php echo e($baris->foto); ?>

                        </td>
                    
                     <td>
                        
                        <form method="post" action="<?php echo e(Url('/hapus_produk')); ?>">
                              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                              <input type="hidden" name="id" value="<?php echo e($baris->id); ?>"/>
                        <button type="submit" class="btn btn-danger">Hapus</button>

                        <a data-toggle="modal" href="#modal-form-<?php echo e($baris->id); ?>" class="btn btn-info"> Update</a>
                        
                        </form>

                         <div id="modal-form-<?php echo e($baris->id); ?>" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12 b-r"><h3 class="m-t-none m-b">Update Produk</h3>
                            <!-- form update produk-->
                            <form enctype="multipart/form-data" role="form" method="post" action="<?php echo e(Url('/proses_update_produk')); ?>" class="form-horizontal">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                                        <input type="hidden" name="id" value="<?php echo e($baris->id); ?>"/>
                                   
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="control-label">Type</label>
                                        </div>
                                            <div class="col-md-10">
                                                 <input value="<?php echo e($baris->jumlah); ?>" style="width:50%" type="number" min="0" name="jumlah" required="" class="form-control number"/>
                                              </div></div>
                                             <br/> 
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label class="control-label">Warna</label>
                                                </div>
                                                    <div class="col-md-10">
                                                        <input value="<?php echo e($baris->jumlah); ?>" style="width:50%" type="number" min="0" name="jumlah" required="" class="form-control number"/>
                                                    </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label class="control-label">Foto</label>
                                                </div>
                                                    <div class="col-md-10">
                                                        <input value="<?php echo e($baris->OK); ?>" style="width:50%" type="number" min="0" name="ok" required="" class="form-control number"/>
                                                    </div>
                                            </div>
                                            <button style="width: 80%;" type="submit" class="btn btn-primary">Update</button>
                               </form>

                     </td>
                      </tr>
                      
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    

                    </tbody>
                    <tfoot>
                    <tr>
                         <th>Type</th>
                        <th>Warna</th>
                        <th>Foto</th>
                        <th>Edit</th>
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