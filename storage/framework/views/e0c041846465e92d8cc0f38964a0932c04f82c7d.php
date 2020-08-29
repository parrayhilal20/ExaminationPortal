

<?php $__env->startSection('title'); ?>
    Student Exam Details
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Student Exam Details')); ?></div>

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
                    
                    <?php if(count($errors) > 0): ?>
                        <div class="row">
                            <label class="col-md-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                <div class="alert alert-danger">
                                    Upload Verification <br><br>
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <?php echo e(Form::open( array( 'url' => 'import',  'class' => 'import', 'enctype' => 'multipart/form-data' ) )); ?>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Import Excel File</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" name="studentfile">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success">
                                    <?php echo e(__('Import')); ?>

                                </button>
                            </div>
                        </div>
                    <?php echo e(Form::close()); ?>


                    <?php echo e(Form::open( array( 'url' => 'studentdetails', 'files' => true, 'class' => 'submit' ) )); ?>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Registration No.</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="registrationnumber" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Roll No.</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="rollnumber" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Class</label>
                            <div class="col-md-6">
                                <select name="class" id="" class="form-control" required>
                                    <option value="">--Select--</option>
                                    <option value="10TH">10TH</option>
                                    <option value="12TH">12TH</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Stream</label>
                            <div class="col-md-6">
                                <select name="stream" id="" class="form-control" required>
                                    <option value="">--Select--</option>
                                    <option value="GENERAL">GENERAL(10TH)</option>
                                    <option value="MEDICAL">MEDICAL</option>
                                    <option value="NON-MEDICAL">NON-MEDICAL</option>
                                    <option value="COMMERCE">COMMERCE</option>
                                    <option value="ARTS">ARTS</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Subject</label>
                            <div class="col-md-6">
                                <select name="subject" id="" class="form-control" required>
                                    <option value="">--Select--</option>
                                    <option value="SCIENCE">SCIENCE</option>
                                    <option value="MATHEMATICS">MATHEMATICS</option>
                                    <option value="ENGLISH">ENGLISH</option>
                                    <option value="SOCIAL STUDIES">SOCIAL STUDIES</option>
                                    <option value="URDU">URDU</option>
                                    <option value="BOTANY">BOTANY</option>
                                    <option value="ZOOLOGY">ZOOLOGY</option>
                                    <option value="CHEMISTRY">CHEMISTRY</option>
                                    <option value="PHYSICS">PHYSICS</option>
                                    <option value="ENVIRONMENT SCIENCE">ENVIRONMENT SCIENCE</option>
                                    <option value="ACCOUNTING">ACCOUNTING</option>
                                    <option value="ECONOMICS">ECONOMICS</option>
                                    <option value="EDUCATION">EDUCATION</option>
                                    <option value="POLITICAL SCIENCE">POLITICAL SCIENCE</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Student Code</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="studentcode" value="<?php echo e($studentcode); ?>" required readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Photograph</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" name="photograph" required>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\examinationportal\resources\views/studentdetails.blade.php ENDPATH**/ ?>