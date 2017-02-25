<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> TUNJANGAN PEGAWAI </h2></div>

	            	<div class="panel-body">
						<?php echo Form::open(['url' => 'tpegawai']); ?>

						

						<div class="form-group">
						<?php echo Form::label('kode', 'Kode Tunjangan:'); ?>

						<select class="form-control" name="Kode_tunjangan_id">
							<option>-- Pilih kode --</option>
							<?php $__currentLoopData = $tunjang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($data->id); ?>"> <?php echo e($data->Kode_tunjangan); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
						</div>

						<div class="form-group">
						<?php echo Form::label('pegawai', 'Nama Pegawai:'); ?>

						<select class="form-control" name="pegawai_id">
							<option>-- Pilih Pegawai --</option>
							<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($data->id); ?>"> <?php echo e($data->User->name); ?> || <?php echo e($data->Jabatan->Nama_jabatan); ?> || <?php echo e($data->Golongan->Nama_golongan); ?> </option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
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