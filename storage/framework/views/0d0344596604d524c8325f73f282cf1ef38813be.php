<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row"><br><br>
	    <div class="col-md-10 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><center><h2> GOLONGAN </h2></center></div>

	            	<div class="panel-body">
					<a href="<?php echo e(url('/golongan/create')); ?>" class="btn btn-success"> Tambah Golongan </a>
					<hr>

					<table class="table table-striped table-bordered table-hover">
						<thead>
						<tr class="bg-info">
							<th> No </th>
							<th> Kode Golongan </th>
							<th> Nama Golongan </th>
							<th> Besaran Uang </th>
							<th colspan="3"><center> Action </center></th>
						</tr>
						</thead>

						<tbody>
							<?php
								$No = 1; 
							?>
							<?php $__currentLoopData = $golong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td> <?php echo e($No++); ?> </td>
								<td> <?php echo e($data->Kode_golongan); ?> </td>
								<td> <?php echo e($data->Nama_golongan); ?> </td>
								<td> Rp. <?php echo e(number_format($data->Besaran_uang, '2', ',', '.')); ?> </td>
								<td> <a href="<?php echo e(route('golongan.edit', $data->id)); ?>" class="btn btn-warning"> Update </a></td>
								<td>
									<?php echo Form::open(['method' => 'DELETE', 'route' => ['golongan.destroy', $data->id]]); ?>

									<?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

									<?php echo Form::close(); ?>

								</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>