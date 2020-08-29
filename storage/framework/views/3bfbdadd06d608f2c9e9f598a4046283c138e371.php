

<?php $__env->startSection('title'); ?>
    Employee List
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Employee List')); ?></div>

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
                    <div class="form-group row">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Emp No</th>
                                    <th>Designation</th>
                                    <th>Department</th>
                                    <th>Class Alctd</th>
                                    <th>Stream Alctd</th>
                                    <th>Subject Alctd</th>
                                    <th>Status</th>
                                    <th>Photo</th>
                                    <th>Decision</th>
                                </tr>
                                
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>S.No</th>
                                    <th>Emp No</th>
                                    <th>Designation</th>
                                    <th>Department</th>
                                    <th>Class Alctd</th>
                                    <th>Stream Alctd</th>
                                    <th>Subject Alctd</th>
                                    <th>Status</th>
                                    <th>Photo</th>
                                    <th>Update</th>
                                </tr>
                                <tr>
                                    <th colspan="9"><?php echo e($employeelist->links()); ?></th>
                                </tr>
                            </tfoot>

                            <tbody>
                                <?php $__currentLoopData = $employeelist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employeelist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($count ++); ?></td>
                                        <td><?php echo e($employeelist->employee_nnumber); ?></td>
                                        <td><?php echo e($employeelist->employee_designation); ?></td>
                                        <td><?php echo e($employeelist->employee_department); ?></td>
                                        <td><?php echo e($employeelist->class_allocated); ?></td>
                                        <td><?php echo e($employeelist->stream_allocated); ?></td>
                                        <td><?php echo e($employeelist->subject_allocated); ?></td>
                                        <td><?php echo e($employeelist->status); ?></td>
                                        <td>
                                            <img src="<?php echo e(asset('uploads/employee')); ?>/<?php echo e($employeelist->photograph); ?>" alt="Employee Image" class="img-thumbnail rounded mx-auto d-block" style="height:50px; width: 50px;">
                                        </td>
                                        <td>
                                            <?php echo e(Form::open( array( 'url' => 'employeelist/'.$employeelist->id, 'class' => 'apprdisappr', 'method' => 'PUT' ) )); ?>

                                                <?php if($employeelist->status == "NOT APPROVED"): ?>
                                                    <input type="hidden" name="status" value="APPROVED">
                                                    <button type="submit" class="btn btn-success">
                                                        <?php echo e(__('APPROVE')); ?>

                                                    </button>
                                                <?php else: ?>
                                                    <input type="hidden" name="status" value="NOT APPROVED">
                                                    <button type="submit" class="btn btn-danger">
                                                        <?php echo e(__('DISAPPROVE')); ?>

                                                    </button>
                                                <?php endif; ?>
                                            <?php echo e(Form::close()); ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\examinationportal\resources\views/employeelist.blade.php ENDPATH**/ ?>