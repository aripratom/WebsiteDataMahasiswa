<?php
session_start();
include('includes/dbconfig.php');

if (isset($_POST['save_push_data'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $program_studi = $_POST['program_studi'];

    $data = [
        'nama' => $nama,
        'nim' => $nim,
        'kelas' => $kelas,
        'program_studi' => $program_studi
    ];

    $ref = "mahasiswa/";
    $postdata = $database->getReference($ref)->push($data);

    if ($postdata) {
        $_SESSION['status'] = "Data berhasil disimpan";
        header("Location: index.php");
    } else {
        $_SESSION['status'] = "Data gagal disimpan";
        header("Location: index.php");
    }
}

if (isset($_POST['update_data'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $program_studi = $_POST['program_studi'];
    $token = $_POST['token'];

    $data = [
        'nama' => $nama,
        'nim' => $nim,
        'kelas' => $kelas,
        'program_studi' => $program_studi
    ];

    $ref = "mahasiswa/" . $token;
    $postdata = $database->getReference($ref)->update($data);

    if ($postdata) {
        $_SESSION['status'] = "Data berhasil diperbarui";
        header("Location: index.php");
    } else {
        $_SESSION['status'] = "Data gagal diperbarui";
        header("Location: index.php");
    }
}

if (isset($_POST['delete_data'])) {
    $token = $_POST['delete'];
    $ref = "mahasiswa/" . $token;
    $deleteData = $database->getReference($ref)->remove();

    if ($deleteData) {
        $_SESSION['status'] = "Data berhasil dihapus";
        header("Location: index.php");
    } else {
        $_SESSION['status'] = "Data gagal dihapus";
        header("Location: index.php");
    }
}
