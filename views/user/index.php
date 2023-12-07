<?php
//memanggil class model db
include_once '../../config.php';
include_once '../../controllers/UserController.php';
require '../../index.php';
//instansiasi class db
$database=new database;
$db=$database->getKoneksi();

$usercontroller=new UserController($db);
$user=$usercontroller->getAllUser();
?>


  <body> 
    <div class="px-3">
<h3>Data User</h3>
<a href="tambahUser" class="btn btn-primary mb-2 at-2">Tambah User</a> 
<table class="table table-striped">
    <tr>
        <th>no</th>
        <th>nama</th>
        <th>username</th>
        <th>password</th>
        <th>level</th>
        <th>aksi</th>
</tr>
<?php
$no=1;
foreach ($user as $x){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['username'] ?></td>
        <td><?php echo $x['password'] ?></td>
        <td><?php echo $x['level'] ?></td>
        <td>
        <a href="editUser?id=<?php echo $x['id'];?>"class="btn btn-warning">Edit</a>
        <a href="hapusUser?id=<?php echo $x['id'];?>"class="btn btn-danger" onclick="return confirm('apakah yakin akan menghapus..?')">Hapus</a>
        </td>
    </tr>
    <?php
} ?>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
  </div>
</html>
