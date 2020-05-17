<?php
include 'action.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maroc airlines</title>
    <link rel="stylesheet" href="Style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

    <div class=" header-container">
        <div class="inner-container">
            <div id="logo">
                <h1 id='fixed'><a href="#">Moroco AirLines</a></h1>
            </div>
            <div id="search">
                <input type="text" placeholder="Search for you flite ">
            </div>
            <div id="menu">
                <ul id="fixed-ul">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about_us.php">About us</a></li>
                </ul>
            </div>
        </div>
        <div class="entry-title">
            <h3>Why Morocco AirLines</h3>
            <p><a href="about_us.php">Discover more</a></p>
            <br>
            <?php echo $messageSession; ?>
        </div>
    </div>

    <div id="up"><a href="#top"><i class="fa fa-chevron-circle-up"></i></a></div>
    <br><br><br><br><br>
    <div class="col-md-10  reservation_table" style="margin: auto;">
        <h4 class="text-center ">Today's flights </h4>
        <table class="table mr-4">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Flying FROM</th>
                <th>Flying To</th>
                <th>Departing date</th>
                <th>returning date</th>
                <th>Seats</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="T_table">
        <?php if(isset($row)>0):?>
        <?php while($vol=affiche($req)): ?>
            <tr>
                <td><?php echo $vol['id'];  ?></td>
                <td ><?php  echo $vol['flyingFrom'];  ?></td>
                <td ><?php  echo $vol['flyingTo'];   ?></td>
                <td ><?php  echo $vol['departingDate'];  ?></td>
                <td ><?php  echo $vol['returningDate'];  ?></td>
                <td ><?php  echo $vol['seats'];  ?></td>
                <td>
                <a href="reserver.php?reserver=<?php echo $vol['id'];  ?>" class="badge badge-primary p-3" id="reserver">RESERVER</a>
                </td>
            </tr>
            <?php endwhile; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>
    <div class="footer-div">
               <div class="footer-item">
                    <div id="icon">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-linkedin"></i>
                        <i class="fa fa-instagram"></i>
                    </div>
                    <br>
                    <p>all right reseverd from youcode</p>
              </div>
              <div class="footer-item">
                  <input type="text"  placeholder="Enter your name" id="feedback-sender"><br><br>
                  <textarea name="" id="feedback-area" placeholder="enter your feedback"></textarea><br>
                  <div id="feedback-error"><p></p></div><br>
                  <button type="submit" id="btn-feedback">submit feedback</button>
              </div>
    </div>


 <!-- jquery link -->
  <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script src="main.js"></script>
</body>
</html>