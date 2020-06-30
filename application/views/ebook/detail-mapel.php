<!-- hEADER -->

<!-- ======= SIDEBAR ======   -->

<!-- Top Bar -->
  
        <!-- Begin Page Content -->
        <div class="container-fluid">
          
        <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
            <div class="card-body"><center>
                <h4 class="m-0 font-weight-bold text-primary">E-Book <?= $detail->bab;?> <?= $detail->materi; ?></h4><br>
                
            
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="<?= base_url('uploads/'. $detail->upload_ebook.'');?>"></iframe>
            </div>



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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Mau keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        
        <div class="modal-body">Pilih "keluar" jika ingin keluar.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
          <a class="btn btn-primary" href="<?= base_url();?>">Keluar</a>
        </div>
      
      </div>
    </div>
  </div>

  <div class="modal fade" id="lihat_profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Profil Siswa</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

      <form action="<?= base_url().'ubah_password_siswa/ubah_password'?>" method="POST">
        <div class="modal-body">
<!--           NPM<br><input readonly type="text" value="#" name="id"><br><br> -->
          Nama<br><input type="text" class="form-control" readonly value="<?= $nama_siswa ?>" name="nama">
          
         <!--  Surel<br><input type="email" readonly name="email" value="#"><br><br> -->
          Sandi lama<br><input id="Sandi_Admin" class="form-control" readonly type="password" value="<?= $password ?>">
          <input type="checkbox" onclick="Lihat_Sandi()"> Lihat sandi<br><br>
          
          Sandi baru<br><input id="sandi_baru" class="form-control" type="password" name="sandi" required>
          Ulangi sandi baru<br><input id="sandi_baru_2" class="form-control" type="password" name="sandi" required>

        </div>
      
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
      </form>
      
      </div>
    </div>
  </div>

  <script src="<?=base_url();?>static/dashboardTemplates/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url();?>static/dashboardTemplates/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url();?>static/dashboardTemplates/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?=base_url();?>static/dashboardTemplates/js/sandi.js"></script>
  <script src="<?=base_url();?>static/dashboardTemplates/js/sb-admin-2.min.js"></script>

 

</body>
</html>
