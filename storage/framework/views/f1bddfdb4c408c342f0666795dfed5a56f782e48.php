<?php $__env->startSection('content'); ?>
<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                 <?php if(Auth::guest()): ?>
                   
                    <div class="intro-text">
               
                        <hr class="star-light">
                        <h2><font face="Maiandra GD" color="white">Anda Tidak Meiliki Hak Akses , Anda Harus Login/Registrasi Terlebih Dahulu!</font></h2>
                    </div>
                    <?php else: ?>
                
                    <div class="intro-text">
                     <h3><font face="Maiandra GD" color="white">Tunjangan</font></h3>
                        <hr class="star-light">
                         <h4><font face="Maiandra GD" color="white">hai <b><?php echo e(Auth::user()->name); ?></b> , Anda Memilih Tunjangan</font></h4></div>
                    </div>
                    <?php endif; ?>
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
                    <center><h2>Daftar Tunjangan</h2></center>
                    <ul class="nav navbar-right panel_toolbox">
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                 
                  <div class="x_content">
                  &nbsp;&nbsp;&nbsp;<a href="<?php echo e(url('Tunjangan/create')); ?>" class="btn btn-primary">Tambah Data Tunjangan&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>
                  <br>
                  <br>

                    <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                        <tr class="bg bg-danger">
                          <th><p class="center"><center>No.</center></p></th>
                          <th><p class="center"><center>Kode Tunjangan</center></p></th>
                          <th><p class="center"><center>Nama Jabatan</center></p></p></th>
                          <th><p class="center"><center>Nama Golongan</center></p></p></th>
                          <th><p class="center"><center>Status</center></p></p></th>
                          <th><p class="center"><center>Jumlah Anak</center></p></p></th>
                          <th><p class="center"><center>Besaran Uang</center></p></p></th>
                          <th colspan="3"><p class="center"><center>Tindakan</center></p></th>
                        </tr>
                      </thead>


                      <tbody>
                         <?php $no=1; ?>
                         <?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr>
                                 <th><center><?php echo e($no++); ?></center></th>
                                 <th><center><?php echo e($data->Kode_tunjangan); ?></center></th>
                                 <th><center><?php echo e($data->Jabatan->Nama_jabatan); ?></center></th>
                                 <th><center><?php echo e($data->Golongan->Nama_golongan); ?></center></th>
                                 <th><center><?php echo e($data->Status); ?></center></th>
                                 <th><center><?php echo e($data->Jumlah_anak); ?></center></th>
                                 <th><center><?php echo 'Rp.'. number_format($data->Besaran_uang, 2,",","."); ?></center></th>





                                 <th><a href="<?php echo e(url('Tunjangan',$data->id)); ?>" class="btn btn-primary">lihat</i></a></th>
                                 <th><a title="Edit" href="<?php echo e(route('Tunjangan.edit',$data->id)); ?>" class="btn btn-warning">ubah</i></a></th>
                                 <th>
                                   <a data-toggle="modal" href="#delete<?php echo e($data->id); ?>" class="btn btn-danger" title="Delete" >hapus<i class="fa fa-trash"></i></a>
                                  <?php echo $__env->make('modals.del', [
                                    'url' => route('Tunjangan.destroy', $data->id),
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