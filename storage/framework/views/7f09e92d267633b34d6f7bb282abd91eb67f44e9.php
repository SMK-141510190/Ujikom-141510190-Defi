<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> GOLONGAN </h2></div>

	            	<div class="panel-body">
						<?php echo Form::model($golong, ['method' => 'PATCH', 'route' => ['golongan.update', $golong->id]]); ?>

						<input type="hidden" class="form-control" value="<?php echo e($golong->id); ?>">

						<div class="form-group<?php echo e($errors->has('Kode_golongan') ? ' has-error' : ''); ?>">
							<?php echo Form::label('Kode', 'Kode golongan'); ?>

							<input id="Kode_golongan" type="text" class="form-control" name="Kode_golongan" value="<?php echo e($golong->Kode_golongan); ?>" required autofocus readonly>

							<?php if($errors->has('Kode_golongan')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('Kode_golongan')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>

						<div class="form-group">
							<?php echo Form::label('Nama', 'Nama golongan'); ?>

							<input type="text" name="Nama_golongan" class="form-control" value="<?php echo e($golong->Nama_golongan); ?>" required>
						</div>
						<div class="form-group">
							<?php echo Form::label('uang', 'Besaran Uang'); ?>

							<input type="text" name="Besaran_uang" class="form-control" value="<?php echo e($golong->Besaran_uang); ?>" required>
						</div>
						<div class="form-group">
							<?php echo Form::submit('Update', ['class' => 'btn btn-danger']); ?>

						</div>
						<?php echo Form::close(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>