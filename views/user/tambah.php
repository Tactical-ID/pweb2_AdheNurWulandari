<?php
include_once '../../index.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PWEB2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <form action="proses_tambahUser?aksi=tambah" method="post">
  <div class="px-3">
    <h3>Tambah Data User</h3>
    <table class="table">
      <tr>
        <td>Nama</td>
        <td>
          <input type="text" class="form-control" name="nama">
        </td>
      </tr>
      <tr>
        <td>Username</td>
        <td>
          <input type="text" class="form-control" name="username">
        </td>
      </tr>
      <tr>
        <td>Password</td>
        <td>
          <input type="text" class="form-control" name="password">
        </td>
      </tr>
      <tr>
        <td>Level</td>
        <td>
          <select class="form-control" required="" name="level">
            <option value="">-- Level --</option>
            <option value="tamu">Tamu</option>
            <option value="pegawai">Pegawai</option>
          </select>
        </td>
      </tr>
    </table>
    <button type="submit" name="submit" class="btn btn-success" onclick="showAlert()">Simpan</button>
  </div>
</form>

<script>
  function showAlert(){
    alert("data user berhasil ditambahkan! ");
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 