<?php
$db = mysqli_connect("127.0.0.1", "root", "", "db_gestionvols");
include "nav.php";
?>

<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">all Your reservation</a>
                </li>
                
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link"> your Profile</a>
                </li>
            </ul>
            <div class="tab-content py-4" id="content">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb" ><?php echo "Welcomm"." ".$_SESSION['user']['username'];?></h5>
     <?php 
            
            $idUser = $_GET['id'];
            $sql = "SELECT * FROM reservation WHERE iduser = '$idUser' ";
            $reservation = mysqli_query($db, $sql);
            $reservation_rows = mysqli_num_rows($reservation);
            if ($reservation_rows > 0) {
            echo '<table class="table">
            <tr>
            <th>Depart</th>
            <th>Destination</th>
            <th>Date reservation</th>
            <th>Prix</th>
            <th>Status</th>
            </tr>';
            while ($reservation_data = mysqli_fetch_array($reservation)) {
            $idclient   = $reservation_data['idClient'];
            $idvol      = $reservation_data['idVol'];
            $date       = $reservation_data['date_reseravtion'];
            $sqlvol     = "SELECT * FROM vols WHERE idVol = '" . $idvol . "'";
            $vol        = mysqli_query($db, $sqlvol);
            $vol_rows   = mysqli_num_rows($vol);
            if ($vol_rows > 0) {
                while ($vol_data = mysqli_fetch_array($vol)) {
                    echo "<tr>";
                    echo "<td>" . $vol_data['depart'] . "</td>";
                    echo "<td>" . $vol_data['destination'] . "</td>";
                    echo "<td>" . $date . "</td>";
                    echo "<td>" . $vol_data['prix'] . " DH</td>";
                    echo "<td>" . $vol_data['status'] . "</td>";
                    echo "<td> <button class='btn btn-info' data-toggle='modal' data-target='#exampleModal' onclick='showClient(" . $idclient . ")'>Info</button> </td>";
                    echo "</tr>";
                }
            }
        }
    }
  ?>
                    <!--/row-->
                
                    <table class="table table-hover table-striped">
                        <tbody>                                    
                         
                        </tbody> 
                    </table>
                </div>

                <?php   
                $sqluser = "SELECT * FROM users WHERE iduser = ' $idUser '";
                $user = mysqli_query($db, $sqluser);
                $user_rows = mysqli_num_rows($user);
                if ($user_rows > 0) {
                while ($user_data =  mysqli_fetch_array($user)) {
                    $userName = $user_data['username'];
                    $userEmail = $user_data['mail'];
                    $userid = $user_data['iduser'];
                ?>
                <div class="tab-pane" id="edit">
                    <form role="form">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
                            <input type="hidden" name="id" value="<?php echo $userid ?>" >
                                <h5 class="h5"> <?php echo  $userName ?> </h5>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-9">
                            <h5 class="h5"><?php echo  $userEmail ?></h5>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                            <div class="col-lg-9">
                            <input name="password" class="form-control" type="password" placeholder="••••••">
                            </div>
                        </div>
                            <?php  }  ?>
                            <?php  }  ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">info des passager</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="demo">
        
      </div>
     
    </div>
  </div>
</div>

<script>
function showClient(str) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "userfunction.php?client=" + str, true);
  xhttp.send();
}
</script>

    
<?php include 'admin/footer.html'; ?>