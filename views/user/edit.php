<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/UserController.php';
require '../../index.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $userController = new UserController($db);
    $userData = $userController->getUserById($id);

    if ($userData) {
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $level = $_POST['level'];

            $result = $userController->updateUser($id, $nama, $username, $password, $level);

            if ($result) {
                header("location:user");
            } else {
                header("location:editUser");
            }
        }
    } else {
        echo "Mahasiwa tidak ditemukan";
    }
}
?>
  <form action="" method="post">
  <div class="px-3">
    <h3>edit Data User</h3>
    <table class="table">
      <tr>
        <td>Nama</td>
        <td>
          <input type="text" class="form-control" value="<?php echo $userData['nama']?>" name="nama">
        </td>
      </tr>
      <tr>
        <td>Username</td>
        <td>
          <input type="text" class="form-control"value="<?php echo $userData['username']?>" name="username">
        </td>
      </tr>
      <tr>
        <td>Password</td>
        <td>
          <input type="text" class="form-control" value="<?php echo $userData['password']?>"name="password">
        </td>
      </tr>
      <tr>
        <td>Level</td>
        <td>
          <select class="form-control" required="" name="level">
            <option value=""<?php if ($userData['level'] === 'level') echo 'selected'; ?>>-- Level --</option>
            <option value="tamu"<?php if ($userData['level'] === 'tamu') echo 'selected'; ?>>Tamu</option>
            <option value="pegawai"<?php if ($userData['level'] === 'pegawai') echo 'selected'; ?>>Pegawai</option>
          </select>
        </td>
      </tr>
    </table>
    <button type="submit" name="submit" class="btn btn-success" onclick="showAlert()">Simpan</button>
  </div>
</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>