<!-- hEADER -->

<!-- ======= SIDEBAR ======   -->

<!-- Top Bar -->
  
        <!-- Begin Page Content -->
        <div class="container-fluid">
          
        <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
            <div class="card-body"><center>
                <h4 class="m-0 font-weight-bold text-primary">E-Book Pembelajaran - Kelas VI Semester 2</h4><br>
                

<!-- tabel start -->
<div class="card-body" style="padding:10px; overflow:auto; width:100%; height:450px;">                           
  <table class="table table-bordered table-striped" id="mydata">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Bab</th>
      <th scope="col">Materi</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $no = 1;
    foreach($fetch_data as $u){ 
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $u->bab ?></td>
      <td><?php echo $u->materi ?></td>
      <td><?php echo $u->kelas ?></td>
      <td><?php echo anchor('core/detailEbook/'.$u->id,'<center><div class="btn btn-danger btn-sm">Lihat <i class="fa fa-eye"></i></div></center>'); ?></td>
    </tr>

    <?php } ?>



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

<!-- Fooooooooterrr -->
  
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->


  <script src="<?=base_url();?>static/dashboardTemplates/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url();?>static/dashboardTemplates/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url();?>static/dashboardTemplates/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?=base_url();?>static/dashboardTemplates/js/sandi.js"></script>
  <script src="<?=base_url();?>static/dashboardTemplates/js/sb-admin-2.min.js"></script>

 

</body>
</html>
