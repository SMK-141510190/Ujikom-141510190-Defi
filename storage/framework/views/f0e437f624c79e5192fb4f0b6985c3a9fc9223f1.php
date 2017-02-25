<?php $__env->startSection('content'); ?>


	<div class="row"><br><br>
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel">
	            <div class="panel-heading"><center><h2> PENGGAJIAN </h2></center></div>

	            	<div class="panel-body">
					<a href="<?php echo e(url('/penggajian/create')); ?>" class="btn btn-success"> Tambah Penggajian </a>
					<hr>

					<table class="table table-striped table-bordered table-hover">
						<thead>
						<tr class="bg-info">
							<th> No </th>
							<th> Nama Pegawai </th>
							<th> Jabatan </th>
							<th> Golongan </th>
							<th> Tunjangan </th>
							<th> Jumlah Jam Lembur </th>
							<th> Jumlah Uang Lembur </th>
							<th> Gaji Pokok </th>
							<th> Total Gaji </th>
							<th> Tanggal Pengambilan </th>
							<th> Status Pengambilan </th>
							<th> Petugas Penerima </th>
							<th colspan="3"><center> Action </center></th>
						</tr>
						</thead>

						<tbody>
							<?php
								$No = 1; 
							?>
							<?php $__currentLoopData = $gajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td> <?php echo e($No++); ?> </td>
								<td> <?php echo e($data->Tunjangan_pegawai->Pegawai->User->name); ?> </td>
								<td> <?php echo e($data->Tunjangan_pegawai->Pegawai->Jabatan->Nama_jabatan); ?> </td>
								<td> <?php echo e($data->Tunjangan_pegawai->Pegawai->Golongan->Nama_golongan); ?> </td>
								<td> <?php echo e(number_format($data->Tunjangan_pegawai->Tunjangans->Besaran_uang, '2', ',', '.')); ?> </td>
								<td> <?php echo e($data->Jumlah_jam_lembur); ?> </td>
								<td> <?php echo e(number_format($data->Jumlah_uang_lembur, '2', ',', '.')); ?> </td>
								<td> <?php echo e(number_format($data->Gaji_pokok, '2', ',', '.')); ?> </td>
								<td> <?php echo e(number_format($data->Total_gaji, '2', ',', '.')); ?> </td>
								<td> <?php echo e($data->updated_at); ?> </td>
                                   
                                   <?php if($data->Status_pengambilan == 0): ?>
                                   
                                       <td>Belum Diambil </td>
                                   
                                   <?php endif; ?>
                                   <?php if($data->Status_pengambilan == 1): ?>
                                   
                                       <td>Sudah Diambil</td>
                                   
                                   <?php endif; ?>
								<td> <?php echo e($data->Petugas_penerima); ?> </td>
								
								<td> <a href="<?php echo e(route('penggajian.edit', $data->id)); ?>" class="btn btn-warning"> Update </a></td>
								<td>
									<?php echo Form::open(['method' => 'DELETE', 'route' => ['penggajian.destroy', $data->id]]); ?>

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