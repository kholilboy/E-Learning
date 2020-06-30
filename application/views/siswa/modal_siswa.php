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
          Nama<br><input type="text" class="form-control" readonly value="<?= $nama ?>" name="nama">
          
         <!--  Surel<br><input type="email" readonly name="email" value="#"><br><br> -->
          Sandi lama<br><input id="Sandi_Admin" class="form-control" readonly type="password" name="password" value="<?= $password ?>">
          <input type="checkbox" onclick="Lihat_Sandi()"> Lihat sandi<br><br>
          
          Sandi baru<br><input id="sandi_baru" class="form-control" type="password" name="sandi" required><br><p style="color: red; font-size: 10pt">*Anda Akan di Redirect Ke Halaman Masuk</p>

        </div>
      
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
      </form>


      </div>
    </div>
  </div>