
<?php $__env->startSection('title'); ?>
    Admin Message
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Admin Message</div>
                    <div class="card-body">
                        <div class="alert alert-success">
                            <?php echo e($message); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\examinationportal\resources\views/adminmessage.blade.php ENDPATH**/ ?>