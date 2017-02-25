<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> JABATAN </h2></div>

	            	<div class="panel-body">
						<?php echo Form::open(['url' => 'jabatan']); ?>

						

						<div class="form-group<?php echo e($errors->has('Kode_jabatan') ? ' has-error' : ''); ?>">
							<?php echo Form::label('Kode', 'Kode Jabatan:'); ?>

							<input type="text" name="Kode_jabatan" class="form-control" required>

							<?php if($errors->has('Kode_jabatan')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('Kode_jabatan')); ?></strong>
                                </span>
                            <?php endif; ?> 
						</div>

						<div class="form-group<?php echo e($errors->has('Nama_jabatan') ? ' has-error' : ''); ?>">
							<?php echo Form::label('Nama', 'Nama Jabatan:'); ?>

							<input type="text" name="Nama_jabatan" class="form-control" required>

							<?php if($errors->has('Nama_jabatan')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('Nama_jabatan')); ?></strong>
                                </span>
                            <?php endif; ?> 
						</div>

						<div class="form-group">
							<?php echo Form::label('uang', 'Besaran Uang:'); ?>

							<input type="text" name="Besaran_uang" class="form-control" required> 
						</div>
						<div class="form-group">
							<?php echo Form::submit('Save', ['class' => 'btn btn-danger']); ?>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>