<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> PENGGAJIAN </h2></div>

	            	<div class="panel-body">
						<?php echo Form::open(['url' => 'penggajian']); ?>



						<div class="form-group">
						<?php echo Form::label('pegawai', 'Nama Pegawai'); ?>

						<span class="required">*</span>
							<select class="form-control" name="tunjangan_pegawai_id">
								<option>-- Pilih Pegawai --</option>
								<?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($data->id); ?>"><?php echo e($data->Pegawai->Nip); ?>&nbsp;|&nbsp;<?php echo e($data->Pegawai->User->name); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>

						<div class="form-group">
							<?php echo Form::label('Statusambil', 'Status Pengambilan'); ?>

							<span class="required">*</span>
							<select class="form-control" name="Status_pengambilan">
								<option value="0">Sudah</option>
								<option value="1">Belum</option>
							</select> 
						</div>


						<div class="col-md-6 col-sm-6 col-xs-12">
					     <span class="help-block">
					           <?php echo e($errors->first('tunjangan_pegawai_id')); ?>

					     </span>
					             <div>
					                 <?php if(isset($error)): ?>
					                       Check Lagi Gaji Sudah Ada
					                 <?php endif; ?>
					             </div>
					    </div>

						<div class="form-group">
							<?php echo Form::submit('Save', ['class' => 'btn btn-danger']); ?>

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