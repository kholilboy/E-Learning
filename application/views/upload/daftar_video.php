<!-- hEADER -->

<!-- ======= SIDEBAR ======   -->

<!-- Top Bar -->
  
        <!-- Begin Page Content -->
        <div class="container-fluid">
          
        <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
            <div class="card-body"><center>
                <h4 class="m-0 font-weight-bold text-primary">Video Pembelajaran - Kelas VI Semester 2</h4><br>
                

<!-- tabel start -->
<div class="card-body" style="padding:10px; overflow:auto; width:100%; height:450px;">                           
  <table class="table table-bordered table-striped" id="mydata">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Bab</th>
      <th scope="col">Materi</th>
      <th scope="col">Kelas</th>
      <th scope="col">Link Video</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $no = 1;
    if ($fetch_data->num_rows() > 0) 
    {
        foreach ($fetch_data->result() as $u)
        {
    ?>  
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $u->bab ?></td>
      <td><?php echo $u->materi ?></td>
      <td><?php echo $u->kelas ?></td>
      <td><?php echo $u->upload_video ?></td>
      <td style="display: inline-flex;"><button title="Edit" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_edit<?php echo $u->id;?>"><i class="fa fa-edit" style="color: white"></i></button>&nbsp;

        <form action="<?php echo base_url('operasi/delete_video') ?>" method="post">
          <button title="Hapus" class="btn btn-sm btn-danger" type="sumbit" name="hapus" value="<?php echo $u->id ?>"><i class="fa fa-trash" style="color: white"></i>
          </button>
        </form>

      </td>
    </tr>
    <?php 
        } 
    }
    else
    {
    ?>
      <tr>
        <td colspan="6">Belum Ada Video</td>
      </tr>
    <?php  
    }
    ?>



  </tbody>
</table>
</div>

<!-- table end -->

            </div>
            </div>
        </div>
        </div>


        </div>

      </div>
      <!-- End of Main Content -->

    <!-- ============ MODAL EDIT ebook =============== -->
        <?php 
        foreach ($fetch_data->result_array() as $u):
                          $id=$u['id'];
                          $bab=$u['bab'];
                          $materi=$u['materi'];
                          $kelas=$u['kelas'];
                          $upload_video=$u['upload_video'];

         ?>

          <!-- Modal -->
            <div class="modal fade" id="modal_edit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">

                  <h5 class="modal-title" id="exampleModalLabel">Edit</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url().'operasi/edit_video'?>">
                    <div class="modal-body">

                      <div class="form-group">
                            <label class="control-label col-xs-3" >ID Ebook</label>
                            <div class="col-xs-8">
                                <input name="id" value="<?php echo $id ?>" class="form-control" type="text" placeholder="" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Bab</label>
                            <div class="col-xs-8">
                                <input name="bab" value="<?php echo $bab ?>" class="form-control" type="text" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Materi</label>
                            <div class="col-xs-8">
                                <input name="materi" value="<?php echo $materi ?>" class="form-control" type="text" placeholder="" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-xs-3" >Kelas</label>
                            <div class="col-xs-8">
                                <input name="kelas" value="<?php echo $kelas ?>" class="form-control" type="text" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Link Video</label>
                            <div class="col-xs-8">
                                <input name="upload_video" value="<?php echo $upload_video ?>" class="form-control" type="text" placeholder="" required>
                            </div>
                        </div>



                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button class="btn btn-info">Update</button>
                    </div>
                </form>
                </div>
                </div>
            </div>

        <?php endforeach;?>
    <!-- ============ MODAL EDIT ebook =============== -->


<!-- Fooooooooterrr -->
  
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <script src="<?=base_url();?>static/dashboardTemplates/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url();?>static/dashboardTemplates/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url();?>static/dashboardTemplates/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?=base_url();?>static/dashboardTemplates/js/sandi.js"></script>
  <script src="<?=base_url();?>static/dashboardTemplates/js/sb-admin-2.min.js"></script>

 

</body>
</html>
