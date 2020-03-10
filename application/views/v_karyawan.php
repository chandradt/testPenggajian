<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Karyawan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Karyawan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        
        <div class="container-fluid">
            <div style="margin:10px">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus" style="padding-right:10px"></i>Tambah Karyawan</button>
            </div>
            <div style="margin:10px">
            <table class="table">
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Telpon</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Masa Kerja</th>
                    <th>Options</th>
                </tr>
                <?php foreach ($karyawan as $employee) :?>
                    <tr>
                        <td><?php echo $employee['NIP'] ?></td>
                        <td><?php echo $employee['NAMA'] ?></td>
                        <td><?php echo $employee['JENIS_KELAMIN'] ?></td>
                        <td><?php echo $employee['TANGGAL_LAHIR'] ?></td>
                        <td><?php echo $employee['TELPON'] ?></td>
                        <td><?php echo $employee['EMAIL'] ?></td>
                        <td><?php echo $employee['ALAMAT'] ?></td>
                        <td><?php echo $employee['MASA_KERJA'] ?></td>
                        <td>
                            
                            <button type="button" class="btn btn-primary"><i class="fa fa-edit" style="padding-right:10px"></i>Ubah</button>
                            <?php echo anchor('c_payroll/hapusKaryawan/'.$employee['NIP'], '<button type="button" class="btn btn-danger"><i class="fa fa-trash" style="padding-right:10px"></i>Hapus</button>')?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            </div>
        </div>
    </section>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Form Tambah Karyawan</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url().'c_payroll/tambahKaryawan' ?>">
                        <div class="form-group">
                            <label for="">NIP</label>
                            <input type="number" name="nip" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <div class="">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jeniskelamin" id="inlineRadio1" value="Laki-laki">
                                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jeniskelamin" id="inlineRadio2" value="Perempuan">
                                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tanggallahir" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Telpon</label>
                            <input type="text" name="telpon" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Masa Kerja</label>
                            <input type="number" name="masakerja" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
