<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> LEMBUR PEGAWAI </h2></div>

	            	<div class="panel-body">
						<?php echo Form::model($lmbpegawai, ['method' => 'PATCH', 'route' => ['lemburpegawai.update', $lmbpegawai->id]]); ?>

						<input type="hidden" class="form-control" value="<?php echo e($lmbpegawai->id); ?>">
						

						<div class="form-group">
						<?php echo Form::label('Nama', 'Nama:'); ?>

						<select class="form-control" name="pegawai_id">
							<option value="<?php echo e($pselect->id); ?>" selected><?php echo e($pselect->User->name); ?> || <?php echo e($pselect->Jabatan->Nama_jabatan); ?> || <?php echo e($pselect->Golongan->Nama_golongan); ?> </option>
							<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($data->id); ?>"> <?php echo e($data->User->name); ?> || <?php echo e($data->Jabatan->Nama_jabatan); ?> || <?php echo e($data->Golongan->Nama_golongan); ?> </option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
						</div>

						<div class="form-group">
							<?php echo Form::label('jam', 'Jumlah Jam:'); ?>

							<input type="text" name="Jumlah_jam" class="form-control" value="<?php echo e($lmbpegawai->Jumlah_jam); ?>" required> 
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