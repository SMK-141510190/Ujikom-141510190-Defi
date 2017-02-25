<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Pegawai</div>
                <div class="panel-body">
                    <?php echo Form::model($pegawaii, ['method' => 'PATCH', 'route' => ['pegawai.update', $pegawaii->id], 'enctype' => 'multipart/form-data', 'files' => 'true']); ?>

                        <?php echo e(csrf_field()); ?>



                        <div class="form-group<?php echo e($errors->has('Nip') ? ' has-error' : ''); ?>">
                            <label for="Nip" class="col-md-4 control-label">Nip</label>

                            <div class="col-md-6">
                                <input id="Nip" type="number" class="form-control" name="Nip" value="<?php echo e($pegawaii->Nip); ?>" required autofocus>

                                <?php if($errors->has('Nip')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('Nip')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('jabatan_id') ? ' has-error' : ''); ?>">
                            <label for="jabatan_id" class="col-md-4 control-label">Jabatan</label>

                            <div class="col-md-6">
                                <select class="form-control" name="jabatan_id">
                                    <option value="<?php echo e($jselect->id); ?>" selected><?php echo e($jselect->Nama_jabatan); ?></option>
                                    <?php $__currentLoopData = $jab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"> <?php echo e($data->Nama_jabatan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                <?php if($errors->has('jabatan_id')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('jabatan_id')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('golongan_id') ? ' has-error' : ''); ?>">
                            <label for="golongan_id" class="col-md-4 control-label">Golongan</label>

                            <div class="col-md-6">
                                <select class="form-control" name="golongan_id">
                                    <option value="<?php echo e($gselect->id); ?>" selected><?php echo e($gselect->Nama_golongan); ?></option>
                                    <?php $__currentLoopData = $gol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"> <?php echo e($data->Nama_golongan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                <?php if($errors->has('golongan_id')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('golongan_id')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('Photo') ? ' has-error' : ''); ?>">
                            <label for="Photo" class="col-md-4 control-label">Photo</label>

                            <div class="col-md-6">
                                <input id="Photo" type="file" class="form-control" name="Photo" value="<?php echo e(old('Photo')); ?>" nullable autofocus>

                                <?php if($errors->has('Photo')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('Photo')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>