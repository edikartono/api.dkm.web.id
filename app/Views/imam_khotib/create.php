<?= $this->extend('layout') ?>
<?= $this->section('content') ?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DKM Al-FITHRAH </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    
<form action="<?= base_url('/imam-khotib/store') ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h2 class="card-title">Tambah Imam/Khotib</h2>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                        <label>Nama Imam/Khotib</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama Imam/Khotib" name="nama" required>
                      </div>
                   <div class="form-group">
                    <label>Kontak</label>
                    <input type="text" class="form-control" placeholder="Masukkan Kontak" name="kontak" required>
                  </div>
                <div class="form-group">
                  <label>Peran</label>
                  <select class="form-control select2" style="width: 100%;" name="peran" required>
                    <option value = "Khotib"  selected="selected">Imam/Khotib</option>
                    <option value = "Muadzin">Muadzin</option>
                    
                  </select>
                </div>
                
                <div class="form-group">
                  <label>Masjid</label>
                  <select class="form-control select2" style="width: 100%;" name="masjid" required>
                    <option value = "Al-Battar" selected="selected">Al-Battar</option>
                    <option value = "Al-Fithrah">Al-Fithrah</option>
                    <option value = "An-Nuur">An-Nuur</option>
                    <option value = "Baiturrahman">Baiturrahman</option>
                    <option value = "Al-Baasith">Al-Baasith</option>
                    <option value = "Al-Adiyat">Al-Adiyat</option>
                    
                  </select>
                </div>
               
              </div>
              <!-- /.col -->
             
              <!-- /.col -->
            </div>
            <!-- /.row -->

         
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
           <button class="btn btn-primary" onclick="stepper.next()">Simpan</button>
          </div>
        </div>
        <!-- /.card -->

       

      
      
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
</form>
</div>




<?= $this->endSection() ?>




