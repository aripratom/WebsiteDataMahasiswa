<?php include('includes/header.php'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <h3>Tambah Data Mahasiswa</h3>
            <hr>

            <form action="code.php" method="POST">
                <div class="form-group">
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                </div>

                <div class="form-group">
                    <input type="number" name="nim" class="form-control" placeholder="Masukan NIM">
                </div>

                <div class="form-group">
                    <input type="text" name="kelas" class="form-control" placeholder="Masukan Kelas">
                </div>

                <div class="form-group">
                    <input type="text" name="program_studi" class="form-control" placeholder="Masukan Program Studi">
                </div>

                <div class="form-group">
                    <button type="submit" name="save_push_data" class="btn btn-primary btn-block">Simpan</button>
                    <a href="index.php" class="btn btn-danger btn-block">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>