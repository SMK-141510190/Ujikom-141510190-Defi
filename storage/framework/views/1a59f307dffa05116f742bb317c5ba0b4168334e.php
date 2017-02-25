<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> KATEGORI LEMBUR </h2></div>

	            	<div class="panel-body">
						<?php echo Form::open(['url' => 'kategorilembur']); ?>

						

						<div class="form-group<?php echo e($errors->has('Kode_lembur') ? ' has-error' : ''); ?>">
							<?php echo Form::label('Kode', 'Kode Lembur:'); ?>

							<input type="text" name="Kode_lembur" class="form-control" required>
							<?php if($errors->has('Kode_lembur')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('Kode_lembur')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>

						<div class="form-group">
						<?php echo Form::label('jab', 'Nama Jabatan:'); ?>

						<select class="form-control" name="jabatan_id">
							<option>-- Pilih Jabatan --</option>
							<?php $__currentLoopData = $jab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($data->id); ?>"> <?php echo e($data->Nama_jabatan); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
						</div>

						<div class="form-group">
						<?php echo Form::label('gol', 'Nama Golongan:'); ?>

						<select class="form-control" name="golongan_id">
							<option>-- Pilih Golongan --</option>
							<?php $__currentLoopData = $gol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($data->id); ?>"> <?php echo e($data->Nama_golongan); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
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