<?php include('includes/header.php'); ?>
<?php session_start(); ?>
<p margin-top="10px">
    <h2 style="text-align: center;">DATA MAHASISWA</h2>
</p>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (isset($_SESSION['status']) && $_SESSION['status'] != "") {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
                unset($_SESSION['status']);
            }
            ?>
        </div>
        <div class="col-md-12 mt-3">
            <div class="card">
                <h4>
                    <a href="insert.php" class="btn btn-primary float-right">Tambah</a>
                </h4>
                <hr>
                <div class="card body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Kelas</th>
                                    <th>Program Studi</th>
                                    <th>Ubah Data</th>
                                    <th>Hapus Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('includes/dbconfig.php');
                                $ref = "mahasiswa/";
                                $fetchdata = $database->getReference($ref)->getValue();
                                $i = 0;
                                if ($fetchdata > 0) {


                                    foreach ($fetchdata as $key => $row) {
                                        $i++;
                                ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td><?php echo $row['nim']; ?></td>
                                            <td><?php echo $row['kelas']; ?></td>
                                            <td><?php echo $row['program_studi']; ?></td>
                                            <td>
                                                <a href="edit.php?token=<?php echo $key ?>" class="btn btn-primary">Ubah</a>
                                            </td>
                                            <td>
                                                <form action="code.php" method="POST">
                                                    <input type="hidden" name="delete" value="<?php echo $key; ?>">
                                                    <button type="submit" name="delete_data" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="7">Data Tidak Tersedia</td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


<?php include('includes/footer.php'); ?>