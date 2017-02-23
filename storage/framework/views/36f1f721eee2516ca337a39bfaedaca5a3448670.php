` 

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
                     <h3><font face="Maiandra GD" color="white">Penggajian</font></h3>
                        <hr class="star-light">
                         <h4><font face="Maiandra GD" color="white">hai <b><?php echo e(Auth::user()->name); ?></b> , Anda Memilih Penggajian</font></h4></div>
                    </div>
                    <?php endif; ?>

                        
                </div>
            </div>
        </div>
    </header>
<br>
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
	 <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                                      <h2><font face="Maiandra GD" color="black"><center>Data Penggajian</center></font></h2>
                  
                  <div class="x_content">
                   &nbsp;&nbsp;&nbsp;<a href="<?php echo e(url('Penggajians/create')); ?>" class="btn btn-primary">Tambah Data Penggajian&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>
                   <br>
                   <br>

           
                  <hr>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr class="bg-danger">
                          <th><p class="center"><center>No.</center></p></th>
                          <th><p class="center"><center>Pegawai</center></p></th>
                          <th><p class="center"><center>Jumlah Jam Lembur</center></p></th>
                          <th><p class="center"><center>Jumlah Uang Lembur</center></p></p></th>
                          <th><p class="center"><center>Gaji Pokok</center></p></p></th>
                          <th><p class="center"><center>Total Gaji</center></p></p></th>
                          <th><p class="center"><center>Tanggal Pengambilan</center></p></p></th>
                          <th><p class="center"><center>Status Pengambilan</center></p></p></th>
                          <th><p class="center"><center>Petugas Penerima</center></p></p></th>
                          <th colspan="3"><p class="center"><center>Tindakan</center></p></th>
                        </tr>
                      </thead>
                            <?php 
                            $no = 1;
                             ?>
                            <?php $__currentLoopData = $gajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tbody>
                                <tr>
                                    <td><?php echo e($no++); ?></td>
                                    <td><?php echo e($data->Tunjangan_pegawai->Pegawai->User->name); ?></td>
                                    <td><?php echo e($data->Jumlah_jam_lembur); ?> </td>
                                    <td><?php echo e($data->Jumlah_uang_lembur); ?> </td>
                                    <td><?php echo e($data->Gaji_pokok); ?> </td>
                                    <td><?php echo e($data->Total_gaji); ?> </td>
                                    <td><?php echo e($data->updated_at); ?> </td>
                                    
                                    <?php if($data->Status_pengambilan == 0): ?>
                                    
                                        <td>Belum Diambil </td>
                                    
                                    <?php endif; ?>
                                    <?php if($data->Status_pengambilan == 1): ?>
                                    
                                        <td>Sudah Diambil</td>
                                    
                                    <?php endif; ?>
                                  <td><?php echo e($data->Petugas_penerima); ?> </td>
                             
                               </a></th>
                                 <th>
                                   <a data-toggle="modal" href="#delete<?php echo e($data->id); ?>" class="btn btn-danger" title="Delete" >hapus</i></a>
                                  <?php echo $__env->make('modals.del', [
                                    'url' => route('Penggajians.destroy', $data->id),
                                    'model' => $data
                                  ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                 </th>
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
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>