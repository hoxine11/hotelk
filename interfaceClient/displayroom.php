<?php
include "../back-end/client/db_conn.php";

$id_client = $_GET["id_client"];

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
    <link rel="stylesheet" href="clieStyle/rom.css">
    <link rel="stylesheet" href="../style/indexc.css">
    <title>ROOMS</title>
</head>
<body>

    <nav class="navbar navbar-light justify-content-center title">
    
        </nav>
  <div class="container">
            <div class="text-center ">
                <h3 class="text-center titlex">Our available Rooms</h3>
                <p class="text-muted pra">Complete the form below to add a new Room</p>
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
    <a href="indexclient.php?id_client=<?php echo $id_client ?> " class="btn"><span></span>HOME</a>
    <table class="table table-hover text-center tabelx">
      <thead class="table-dark">
        <tr>
          <th scope="col">ROOM NAME</th>
          <th scope="col">TYPE</th>
          <th scope="col">PRICE /day</th>
          <th scope="col">ETAT</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody class="tabel-content">
        <?php
        $sql = "SELECT * FROM `Chambre` WHERE `Etat`= 'disponible'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["Numero"] ?></td>
            <td><?php echo $row["Typ"] ?></td>
            <td><?php echo $row["Prix"]." $" ?></td>
            <td><?php echo $row["Etat"] ?></td>
            <td>
            <a href="../back-end/booked/boking.php?id_client=<?php echo $id_client ?> && id_chambre=<?php echo $row['ID_Chambre']?>" class="link btn2"><span></span> BOOK NOW</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

  </div>


</body>
</html>