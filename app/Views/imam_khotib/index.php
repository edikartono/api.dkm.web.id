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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
        
        

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Imam / Khotib dan Muadzin </h3>
                <a href="<?=base_url()?>/imam-khotib/create"><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Peran</th>
                    <th>Kontak</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($imam_khotib as $ik): ?>
        <tr>
            <td><?= esc($ik['nama']) ?></td>
            <td><?= esc($ik['peran']) === 'Muadzin' ? 'Muadzin' : esc($ik['peran']) ?></td>
            <td><?= esc($ik['kontak']) ?></td>
            <td>
                <a href="<?= base_url('/imam-khotib/edit/').$ik['id'] ?>">Edit</a>
                <a href="<?= base_url('/imam-khotib/delete/').$ik['id'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                <tr>
                    <th>Nama</th>
                    <th>Peran</th>
                    <th>Kontak</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 


<?= $this->endSection() ?>


