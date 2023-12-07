<?php
//memanggil class model db
include_once '../../config.php';
include_once '../../controllers/KamarController.php';
require '../../index.php';
//instansiasi class db
$database=new database;
$db=$database->getKoneksi();

$kamarcontroller=new KamarController($db);
$kamar=$kamarcontroller->getAllKamar();
?>


  <body> 
    <div class="px-3">
<h3>Data Kamar</h3>
<a href="tambahKamar" class="btn btn-primary mb-2 at-2">Tambah Kamar</a> 
<table class="table table-striped">
    <tr>
        <th>no</th>
        <th>No kamar</th>
        <th>tipe</th>
        <th>status</th>
        <th>Foto</th>
        <th>harga kamar</th>
        <th>aksi</th>
</tr>
<?php
$no=1;
foreach ($kamar as $x){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['no_kmr'] ?></td>
        <td><?php echo $x['tipe'] ?></td>
        <td><?php echo $x['status'] ?></td>
        <td><img src="foto-kategori/<?php echo $x['foto'] ?>" width="175px"></td>
        <td><?php echo $x['harga_kmr'] ?></td>
        <td>
        <a href="editKamar?id_kmr=<?php echo $x['id_kmr'];?>"class="btn btn-warning">Edit</a>
        <a href="hapusKamar?id_kmr=<?php echo $x['id_kmr'];?>"class="btn btn-danger" onclick="return confirm('apakah yakin akan menghapus..?')">Hapus</a>
        </td>
    </tr>
    <?php
} ?>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
  </div>
</html>
