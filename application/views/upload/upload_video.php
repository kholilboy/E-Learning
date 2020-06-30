<!-- hEADER -->

<!-- ======= SIDEBAR ======   -->

<!-- Top Bar -->
  
        <!-- Begin Page Content -->
        <div class="container-fluid">
          
        <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
            <div class="card-body">

<?php echo form_open_multipart('uploadController/add_video');?>
<form>
  <div class="form-group">
    <label style="color: black; font-weight: bold">Nama Bab </label>
    <input type="text" class="form-control" placeholder="Contoh : Tema 1" name="nama_bab" required="">
  </div>
  <div class="form-group">
    <label style="color: black; font-weight: bold">Judul Materi</label>
    <input type="text" class="form-control" placeholder="Contoh : Menuju New Normal" name="judul" required="">
  </div>
  <div class="form-group">
    <label style="color: black; font-weight: bold">Kelas</label>
    <select class="form-control" name="kelas" required="">
      <option>VI</option>
    </select>
  </div>
 <div class="form-group">
    <label style="color: black; font-weight: bold">Link Video Youtube</label>
    <input type="text" class="form-control" placeholder="Contoh : 5jQH0k9D2hY -> Ini Diambil dari https://www.youtube.com/watch?v=5jQH0k9D2hY" name="upload_video" required="">
 </div>
  <p style="color: red">*Pastikan Format Link Video Benar</p>

<div class="form-group">
  <button type="submit" class="btn btn-primary mb-2">Upload Confirm</button>
</div>

</form>




            </div>
            </div>
        </div>
        </div>


        </div>

      </div>
      <!-- End of Main Content -->

  <!-- Fooooooooterrr -->

  <!-- End of Page Wrapper -->
  
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
