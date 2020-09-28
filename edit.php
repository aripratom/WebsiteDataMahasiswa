<?php include('includes/header.php'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <h3>Ubah Data Mahasiswa</h3>
            <hr>
            <?php
            $token = $_GET['token'];

            include('includes/dbconfig.php');
            $ref = "mahasiswa/";
            $getdata = $database->getReference($ref)->getChild($token)->getValue();
            ?>

            <form action="code.php" method="POST">
                <input type="hidden" name="token" value="<?php echo $token; ?>">
                <div class="form-group">
                    <input type="text" name="nama" class="form-control" value="<?php echo $getdata['nama'] ?>" placeholder="Masukan Nama">
                </div>

                <div class="form-group">
                    <input type="number" name="nim" class="form-control" value="<?php echo $getdata['nim'] ?>" placeholder="Masukan NIM">
                </div>

                <div class="form-group">
                    <input type="text" name="kelas" class="form-control" value="<?php echo $getdata['kelas'] ?>" placeholder="Masukan Kelas">
                </div>

                <div class="form-group">
                    <input type="text" name="program_studi" class="form-control" value="<?php echo $getdata['program_studi'] ?>" placeholder="Masukan Program Studi">
                </div>

                <div class="form-group">
                    <button type="submit" name="update_data" class="btn btn-primary btn-block">Simpan Perubahan</button>
                    <a href="index.php" class="btn btn-danger btn-block">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>