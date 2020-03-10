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
                    <th>Jabatan</th>
                    <th>Masa Kerja</th>
                    <th>Insentif</th>
                    <th>Bonus</th>
                    <th>Options</th>
                </tr>
                <?php foreach ($aturan as $rules) :?>
                    <tr>
                        <td><?php echo $rules['JABATAN'] ?></td>
                        <td><?php echo $rules['MASA_KERJA'] ?></td>
                        <td><?php echo $rules['INSENTIF'] ?></td>
                        <td><?php echo $rules['BONUS'] ?></td>
                        <td>
                            <button>edit</button>
                            <button>delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <div>
                <form action="/addPosition" method="GET">
                    <input type="submit" value="tambah">
                </form>
            </div>
        </div>
    </section>
</div>
