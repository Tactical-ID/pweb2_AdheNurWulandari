<?php
require '../../index.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PWEB2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <form action="proses_tambahKamar? aksi=tambah" method="post">
  <div class="px-3">
  <h3>tambah data kamar</h3>
  <div class="mb-3">
    <label for="no_kmr" class="form-label">no kamar</label>
    <input type="number" class="form-control" name="no_kmr">
  </div>
  <tr>
				<td>tipe</td>
				<td>
		            <select class="form-control" required="" name="tipe">
			            <option value="">tipe : </option>
			            <option value="Superior 1 bed besar (room only)	">Superior 1 bed besar (room only)	</option>
			            <option value="Superior 1 bed besar (with breakfast)">Superior 1 bed besar (with breakfast)</option>></td>
			            <option value="Deluxe 1 bed besar (room only)">Deluxe 1 bed besar (room only)</option>></td>
			            <option value="Deluxe 1 bed besar (with breakfast)">Deluxe 1 bed besar (with breakfast)</option>></td>
			            <option value="Deluxe pool 1 bed besar (room only)">Deluxe pool 1 bed besar (room only)</option>></td>
			            <option value="Deluxe pool 1 bed besar (with breakfast)">Deluxe pool 1 bed besar (with breakfast)</option>></td>
			            <option value="Junior suite 1 bed besar (with breakfast)">Junior suite 1 bed besar (with breakfast)</option>></td>
			            <option value="President 1 bed besar (with breakfast)">President 1 bed besar (with breakfast)</option>></td>
					</select>
            	</td>
			</tr>
  <tr>
				<td>status</td>
				<td>
		            <select class="form-control" required="" name="status">
			            <option value="">status : </option>
			            <option value="Tersedia">Tersedia</option>
			            <option value="Tidak Tersedia">Tidak Tersedia</option>></td>
					</select>
            	</td>
				<div class="mb-3">
    <label for="foto" class="form-label">foto</label>
    <input type="file" class="form-control" name="foto">
  </div>
			</tr>
  <div class="mb-3">
    <label for="harga_kmr" class="form-label">harga kamar</label>
    <input type="text" class="form-control" name="harga_kmr">
  </div>
  
  <button type="submit" name="submit" class="btn btn-success" onclick="showAlert()">Simpan</button>
</form>

<script>
  function showAlert(){
    alert("data user berhasil ditambahkan! ");
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 