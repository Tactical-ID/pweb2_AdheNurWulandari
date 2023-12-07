<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/KamarController.php';
require '../../index.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();


if (isset($_GET['id_kmr'])) {
    $id_kmr = $_GET['id_kmr'];

    $kamarController = new KamarController($db);
    $kamarData = $kamarController->getKamarById($id_kmr);

    if ($kamarData) {
        if (isset($_POST['submit'])) {
            $no_kmr = $_POST['no_kmr'];
            $tipe = $_POST['tipe'];
            $status = $_POST['status'];
            $foto = $_POST['foto'];
            $harga_kmr = $_POST['harga_kmr'];

            $result = $kamarController->updateKamar($id_kmr, $no_kmr, $tipe, $status,$foto, $harga_kmr);

            if ($result) {
                header("location:kamar");
            } else {
                header("location:editKamar");
            }
        }
    } else {
        echo "kamar tidak ditemukan";
    }
}
?>
<form action="" method="post">
  <div class="px-3">
  <h3>edit data kamar</h3>
  <div class="mb-3">
  <tr>
        <td>No Kamar</td>
        <td>
          <input type="number" class="form-control" value="<?php echo $kamarData['no_kmr']?>"name="no_kmr">
        </td>
      </tr>
  <tr>
				<td>tipe</td>
				<td>
		            <select class="form-control" required="" name="tipe">
			            <option value=""<?php if ($kamarData['tipe'] === 'tipe') echo 'selected'; ?>>tipe : </option>
			            <option value="Superior 1 bed besar (room only)	"<?php if ($kamarData['tipe'] === 'Superior 1 bed besar (room only)') echo 'selected'; ?>>Superior 1 bed besar (room only)	</option>
			            <option value="Superior 1 bed besar (with breakfast)"<?php if ($kamarData['tipe'] === 'Superior 1 bed besar (with breakfast)') echo 'selected'; ?>>Superior 1 bed besar (with breakfast)</option>></td>
			            <option value="Deluxe 1 bed besar (room only)"<?php if ($kamarData['tipe'] === 'Deluxe 1 bed besar (room only)') echo 'selected'; ?>>Deluxe 1 bed besar (room only)</option>></td>
			            <option value="Deluxe 1 bed besar (with breakfast)"<?php if ($kamarData['tipe'] === 'Deluxe 1 bed besar (with breakfast)') echo 'selected'; ?>>Deluxe 1 bed besar (with breakfast)</option>></td>
			            <option value="Deluxe pool 1 bed besar (room only)"<?php if ($kamarData['tipe'] === 'Deluxe pool 1 bed besar (room only)') echo 'selected'; ?>>Deluxe pool 1 bed besar (room only)</option>></td>
			            <option value="Deluxe pool 1 bed besar (with breakfast)"<?php if ($kamarData['tipe'] === 'Deluxe pool 1 bed besar (with breakfast)') echo 'selected'; ?>>Deluxe pool 1 bed besar (with breakfast)</option>></td>
			            <option value="Junior suite 1 bed besar (with breakfast)"<?php if ($kamarData['tipe'] === 'Junior suite 1 bed besar (with breakfast)') echo 'selected'; ?>>Junior suite 1 bed besar (with breakfast)</option>></td>
			            <option value="President 1 bed besar (with breakfast)"<?php if ($kamarData['tipe'] === 'President 1 bed besar (with breakfast)') echo 'selected'; ?>>President 1 bed besar (with breakfast)</option>></td>
					</select>
            	</td>
			</tr>
            
  <tr>
				<td>status</td>
				<td>
		            <select class="form-control" required="" name="status">
			            <option value=""<?php if ($kamarData['status'] === 'status') echo 'selected'; ?>>status : </option>
			            <option value="Tersedia"<?php if ($kamarData['status'] === 'Tersedia') echo 'selected'; ?>>Tersedia</option>
			            <option value="Tidak Tersedia"<?php if ($kamarData['status'] === 'Tidak Tersedia') echo 'selected'; ?>>Tidak Tersedia</option>></td>
					</select>
            	</td>
                <tr>
        <td>Foto</td>
        <td>
          <input type="file" class="form-control" value="<?php echo $kamarData['foto']?>"name="foto">
        </td>
    <tr>
        <td>harga</td>
        <td>
          <input type="text" class="form-control" value="<?php echo $kamarData['harga_kmr']?>"name="harga_kmr">
        </td>
      </tr>
  
  <button type="submit" name="submit" class="btn btn-success" onclick="showAlert()">Simpan</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>