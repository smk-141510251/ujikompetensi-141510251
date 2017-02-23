<?php $__env->startSection('content'); ?>
<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
              <div class="intro-text">
                      
                               <?php if(Auth::guest()): ?>
                   
                    <div class="intro-text">
               
                        <hr class="star-light">
                        <h2><font face="Maiandra GD" color="white">Anda Tidak Meiliki Hak Akses , Anda Harus Login/Registrasi Terlebih Dahulu!</font></h2>
                    </div>
                    <?php else: ?>
                
                    <div class="intro-text">
                     <h3><font face="Maiandra GD" color="white">Pegawai</font></h3>
                        <hr class="star-light">
                         <h4><font face="Maiandra GD" color="white">hai <b><?php echo e(Auth::user()->name); ?></b> , Anda Memilih Pegawai</font></h4></div>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </header>
<br>
<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
	 <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
 
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   <h2><font face="Maiandra GD" color="black"><center> Daftar Pegawai</center></font></h2>
                    <ul class="nav navbar-right panel_toolbox">
                     
                    </ul>
                    <div class="clearfix"></div>
                    
                  </div>
                 
                  <div class="x_content">
                  &nbsp;&nbsp;&nbsp;<a href="<?php echo e(url('Pegawai/create')); ?>" class="btn btn-primary">Tambah Data Pegawai&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>
                  <br>
                  <br>

                    <table id="datatable" class="table table-bordered table-striped">
                      <thead>
                        <tr class="bg-danger">
                          <th><p class="center"><center>No.</center></p></th>
                          <th><p class="center"><center>NIP</center></p></th>
                          <th><p class="center"><center>Nama</center></p></th>
                          <th><p class="center"><center>Jabatan</center></p></p></th>
                          <th><p class="center"><center>Golongan</center></p></p></th>
                          <th><p class="center"><center>Photo</center></p></p></th>
                          <th colspan="3"><p class="center"><center>Tindakan</center></p></th>
                        </tr>
                      </thead>


                      <tbody>
                         <?php $no=1; ?>
                         <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr>
                                 <th><center><?php echo e($no++); ?></center></th>
                                 <th><center><?php echo e($data->Nip); ?></center></th>
                                 <th><center><?php echo e($data->User->name); ?></center></th>
                                 <th><center><?php echo e($data->Jabatan->Nama_jabatan); ?></center></th>
                                 <th><center><?php echo e($data->Golongan->Nama_golongan); ?></center></th>
                                 <th><center><img src="<?php echo e(asset('/image/'.$data->Photo)); ?>" height="120px" width="100px"></center></th>
                                <td><center><a href="<?php echo e(url('Pegawai', $data->id)); ?>" class="btn btn-primary">Lihat</a></center></td>
            <td><center><a href="<?php echo e(route('Pegawai.edit', $data->id)); ?>" class="btn btn-warning">Ubah</a></center></td>
                                 <th>
                                   <a data-toggle="modal" href="#delete<?php echo e($data->id); ?>" class="btn btn-danger" title="Delete" >hapus</i></a>
                                  <?php echo $__env->make('modals.del', [
                                    'url' => route('Pegawai.destroy', $data->id),
                                    'model' => $data
                                  ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                 </th>
                             </tr>
                        <div class="panel-body">
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
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>