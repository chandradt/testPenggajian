<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <table border="1px solid black">
                <tr>
                    <th>Kode</th>
                    <th>Jabatan</th>
                    <th>Standar Gaji</th>
                    <th>Keterangan</th>
                    <th>Options</th>
                </tr>
                <?php foreach ($jabatan as $position) :?>
                    <tr>
                        <td><?php echo $position['KODE'] ?></td>
                        <td><?php echo $position['JABATAN'] ?></td>
                        <td><?php echo $position['STANDAR_GAJI'] ?></td>
                        <td><?php echo $position['KETERANGAN'] ?></td>
                        <td>
                            <button>edit</button>
                            <button>delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <div>
                <form action="/addPosition">
                    <input type="submit" value="tambah">
                </form>
            </div>
        </div>
    </section>
</div>
