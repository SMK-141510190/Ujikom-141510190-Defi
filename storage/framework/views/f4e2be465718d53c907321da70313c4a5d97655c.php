<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> KATEGORI LEMBUR </h2></div>

	            	<div class="panel-body">
						<?php echo Form::model($lembur, ['method' => 'PATCH', 'route' => ['kategorilembur.update', $lembur->id]]); ?>

						<input type="hidden" class="form-control" value="<?php echo e($lembur->id); ?>">

						<div class="form-group">
							<?php echo Form::label('Kode', 'Kode lembur'); ?>

							<input type="text" name="Kode_lembur" class="form-control" value="<?php echo e($lembur->Kode_lembur); ?>" required>
						</div>

						<div class="form-group">
						<?php echo Form::label('jab', 'Nama Jabatan:'); ?>

						<select class="form-control" name="jabatan_id">
							<option value="<?php echo e($jselect->id); ?>" selected><?php echo e($jselect->Nama_jabatan); ?></option>
							<?php $__currentLoopData = $jab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($data->id); ?>"> <?php echo e($data->Nama_jabatan); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
						</div>

						<div class="form-group">
						<?php echo Form::label('gol', 'Nama Golongan:'); ?>

						<select class="form-control" name="golongan_id">
							<option value="<?php echo e($gselect->id); ?>" selected><?php echo e($gselect->Nama_golongan); ?></option>
							<?php $__currentLoopData = $gol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($data->id); ?>"> <?php echo e($data->Nama_golongan); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
						</div>
						
						<div class="form-group">
							<?php echo Form::label('uang', 'Besaran Uang'); ?>

							<input type="text" name="Besaran_uang" class="form-control" value="<?php echo e($lembur->Besaran_uang); ?>" required>
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