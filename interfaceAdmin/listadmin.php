<?php
include "../back-end/client/db_conn.php";


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
    <link rel="stylesheet" href="../interfaceClient/clieStyle/rom.css">
    <link rel="stylesheet" href="../style/indexc.css">
    <title>ROOMS</title>
</head>
<body>

    <nav class="navbar navbar-light justify-content-center title">
    
        </nav>
  <div class="container">
            <div class="text-center ">
                <h3 class="text-center titlex">Our ADMINS</h3>
                <p class="text-muted pra">list of admins</p>
         </div>
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="indexadmin.php " class="btn"><span></span>HOME</a>
    <table class="table table-hover text-center tabelx">
      <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
          <th scope="col">NAME</th>
          <th scope="col">EMAIL</th>
          <th scope="col">PASSWORD</th>
        </tr>
      </thead>
      <tbody class="tabel-content">
        <?php
        $sql = "SELECT * FROM `admins`;";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id_admin"] ?></td>
            <td><?php echo $row["nom"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["passwords"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

  </div>


</body>
</html>