

<?php $__env->startSection('title'); ?>
    Select Examination Class
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Select Examination Class')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(Form::open( array('url' => 'selectexam', 'class' => 'submit') )); ?>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Class</label>
                            <div class="col-md-6">
                                <select name="class" id="" class="form-control" required>
                                    <option value="">--Select--</option>
                                    <?php $__currentLoopData = $employeedetail1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employeedetail1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($employeedetail1->class_allocated); ?>"><?php echo e($employeedetail1->class_allocated); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Stream</label>
                            <div class="col-md-6">
                                <select name="stream" id="" class="form-control" required>
                                    <option value="">--Select--</option>
                                    <?php $__currentLoopData = $employeedetail2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employeedetail2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($employeedetail2->stream_allocated); ?>"><?php echo e($employeedetail2->stream_allocated); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Subject</label>
                            <div class="col-md-6">
                                <select name="subject" id="" class="form-control" required>
                                    <option value="">--Select--</option>
                                    <?php $__currentLoopData = $employeedetail3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employeedetail3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($employeedetail3->subject_allocated); ?>"><?php echo e($employeedetail3->subject_allocated); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    <?php echo e(__('Submit')); ?>

                                </button>
                            </div>
                        </div>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\examinationportal\resources\views/selectexam.blade.php ENDPATH**/ ?>