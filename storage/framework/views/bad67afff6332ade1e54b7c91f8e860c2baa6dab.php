<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> TUNJANGAN </h2></div>

	            	<div class="panel-body">
						<?php echo Form::model($tunjang, ['method' => 'PATCH', 'route' => ['tunjangan.update', $tunjang->id]]); ?>

						<input type="hidden" class="form-control" value="<?php echo e($tunjang->id); ?>">
						
						<div class="form-group">
							<?php echo Form::label('kode', 'Kode Tunjangan:'); ?>

							<input type="text" name="Kode_tunjangan" class="form-control" value="<?php echo e($tunjang->Kode_tunjangan); ?>" required> 
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
							<?php echo Form::label('Status', 'Status Perkawinan:'); ?>

							<select class="form-control" name="Status">
								<option>Sudah</option>
								<option>Belum</option>
							</select> 
						</div>

						<div class="form-group">
							<?php echo Form::label('anak', 'Jumlah Anak:'); ?>

							<input type="text" name="Jumlah_anak" class="form-control" value="<?php echo e($tunjang->Jumlah_anak); ?>"> 
						</div>

						<div class="form-group">
							<?php echo Form::label('uang', 'Besaran Uang:'); ?>

							<input type="text" name="Besaran_uang" class="form-control" value="<?php echo e($tunjang->Besaran_uang); ?>" required> 
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