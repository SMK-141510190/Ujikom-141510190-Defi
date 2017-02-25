<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> JABATAN </h2></div>

	            	<div class="panel-body">
						<?php echo Form::model($jabat, ['method' => 'PATCH', 'route' => ['jabatan.update', $jabat->id]]); ?>

						<input type="hidden" class="form-control" value="<?php echo e($jabat->id); ?>">
						

						<div class="form-group">
							<?php echo Form::label('Kode', 'Kode Jabatan'); ?>

							<input type="text" name="Kode_jabatan" class="form-control" value="<?php echo e($jabat->Kode_jabatan); ?>" required readonly>
						</div>
						<div class="form-group">
							<?php echo Form::label('Nama', 'Nama Jabatan'); ?>

							<input type="text" name="Nama_jabatan" class="form-control" value="<?php echo e($jabat->Nama_jabatan); ?>" required>
						</div>
						<div class="form-group">
							<?php echo Form::label('uang', 'Besaran Uang'); ?>

							<input type="text" name="Besaran_uang" class="form-control" value="<?php echo e($jabat->Besaran_uang); ?>" required>
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