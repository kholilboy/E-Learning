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

<?php 
    $no = $this->uri->segment('3') + 1;
    foreach($user as $u){ 
?>
    
<div class="card" style="width: 18rem; display: inline-flex;">
  <div class="card border-left-success shadow h-100 py-2">
  
  <iframe class="embed-responsive-item" src="<?php echo 'https://www.youtube.com/embed/' . $u->upload_video; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> 
  </iframe>
  
  <div class="card-body">
    <h5 class="card-title"><?php echo $u->bab; ?></h5>
    <p class="card-text"><?php echo $u->materi; ?></p>
  </div>
  </div>
</div>
  
  <?php } ?>

  <p style="font-weight: bold; color: black;"><br>Halaman Video :</p>

  <?php
    echo '<p style="font-weight: bold; color: black; width: 50px; height: 20px; display: inline-flex;">' . $this->pagination->create_links();
  ?>

</div>

<!-- </table> -->



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

  <!-- Modallllllllllllll -->

  <script src="<?=base_url();?>static/dashboardTemplates/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url();?>static/dashboardTemplates/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url();?>static/dashboardTemplates/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?=base_url();?>static/dashboardTemplates/js/sandi.js"></script>
  <script src="<?=base_url();?>static/dashboardTemplates/js/sb-admin-2.min.js"></script>

 

</body>
</html>
