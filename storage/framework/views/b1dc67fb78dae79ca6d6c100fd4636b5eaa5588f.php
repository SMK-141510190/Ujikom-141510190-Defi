<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row"><br><br>
        <div class="col-md-9 col-md-offset-0">
            <div class="panel panel-info">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>