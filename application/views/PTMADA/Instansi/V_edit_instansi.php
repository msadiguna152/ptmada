  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Instansi
        <!-- <small>Rekanan</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Ptmada/') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Data Instansi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">FORM DATA INSTANSI</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">

                <form method="POST" action="<?php echo base_url('Ptmada/proses_edit_instansi') ?>" enctype="multipart/form-data">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Instansi</label>
                      <input type="hidden" class="form-control" name="id_instansi" placeholder="Nama Instansi" required=" " value="<?php echo $data['id_instansi'] ?>" autofocus autocomplete="off">
                      <input type="text" class="form-control" name="nama" placeholder="Nama Instansi" required=" " value="<?php echo $data['instansi'] ?>" autofocus autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Pemilik Proyek</label>
                      <textarea name="pemilik_proyek" class="form-control" placeholder="Pemilik Proyek" autocomplete="off"><?php echo $data['pemilik_proyek'] ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Alamat Instansi</label>
                      <textarea name="alamat" class="form-control" placeholder="Alamat Instansi" autocomplete="off"><?php echo $data['alamat_instansi'] ?></textarea>
                    </div>

                  </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" style="margin-right: 20px;">Submit</button>
              <a href="<?php echo base_url('Ptmada/lihat_instansi/') ?>"><button type="button" class="btn btn-danger">Cancel</button></a>
            </div>

            </form>
          </div>
        </div>
        <!-- /.box -->

        <!-- Form Element sizes -->

        <!-- /.box -->


        <!-- /.box -->


        <!-- /.box -->

      </div>
      <!--/.col (left) -->
      <!-- right column -->

      <!--/.col (right) -->
  </div>
  <!-- /.row -->
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->