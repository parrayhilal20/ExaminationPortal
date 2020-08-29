

<?php $__env->startSection('title'); ?>
    Add Question
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(!empty($successmessage)): ?>
                        <div class="alert alert-success">
                            <?php echo e($successmessage); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(Form::open( array('url' => 'home') )); ?>

                        <div class="form-group row">
                            <input type="hidden" name="id" value="<?php echo e($classdetail->id); ?>"> 
                            <label class="col-md-2 col-form-label text-md-right">Class :</label>
                            <div class="col-md-1">
                                <input type="text" class="form-control" name="class" value="<?php echo e($classdetail->class_allocated); ?>" readonly>
                            </div>
                            <label class="col-md-1 col-form-label text-md-right">Stream :</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="stream" value="<?php echo e($classdetail->stream_allocated); ?>" readonly>
                            </div>
                            <label class="col-md-1 col-form-label text-md-right">Subject :</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="subject" value="<?php echo e($classdetail->subject_allocated); ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Question</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="addquestion" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Option1</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="option1" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Option2</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="option2" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Option3</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="option3" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Option4</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="option4" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Actual Response</label>
                            <div class="col-md-6">
                                 <select name="actual_response" id="" class="form-control" required>
                                    <option value="">--Select--</option>
                                    <option value="option1">option1</option>
                                    <option value="option2">option2</option>
                                    <option value="option3">option3</option>
                                    <option value="option4">option4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    <?php echo e(__('Submit Question')); ?>

                                </button>
                                <button type="submit" class="btn btn-success">
                                    
                                </button>
                                <a href="<?php echo e(url('selectexam')); ?>" class="btn btn-primary">Finalize</a>
                            </div>
                        </div>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\examinationportal\resources\views/addquestionpaper.blade.php ENDPATH**/ ?>