<?php $__env->startSection('judul'); ?>
    Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('isiweb'); ?>

            <?php if(Session::has("status")): ?>
                <div class="alert alert-danger">
                <?php echo e(Lang::get("login.notifikasi")); ?> <a class="alert-link" href="#"></a>
                </div>
            <?php endif; ?>

           
            <form class="m-t" role="form" method="POST" action="<?php echo e(Url('/proses_login')); ?>">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/> <!-- token dipakai saat ada form-->

                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" 
                href="<?php echo e(Url ('/register')); ?>">Create an account</a><!--untuk kembali ke form register-->
            </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.halaman', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>