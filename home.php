<?php

    ob_start();
    session_start();

 ?>
<!DOCTYPE html>
<html>
<head>

  <meta http-equiv="Content-Type" content="text/html"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <title>Welcome  <?php echo $_SESSION['stud_name']; ?></title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link rel="stylesheet" href="Assets/css/base.css">
</head>
<body>

	<nav id="home-menu">
    <div class="nav-wrapper">

      <ul id="slide-out" class="side-nav">
          <li><div class="userView">
            <img class="background" src="Assets/img/2.jpg">
            <a href="#"><img class="circle" src="Assets/img/user.png"></a>
            <a href="#"><span  class="black-text name slide-username"> <b><?php echo $_SESSION['stud_name']; ?></b></span></a>
            <a href="#"><span class="black-text email"><?php echo $_SESSION['stud_email']; ?></span></a>
          </div></li>
          <li><a href="#!"><img class="slideicon" src="Assets/img/eye.png"  alt="">View Profile</a></li>
          <li><a href="Core/edit.php"><img class="slideicon" src="Assets/img/editpro.png"  alt="">Edit Profile</a></li>
          <li><a href="logout.php?logout"><img class="slideicon" src="Assets/img/logout.png"  alt="">Log Out</a></li>
          <li><div class="divider"></div></li>
          <li><a href="../default.html"><b> STUDENT COUNCIL</b></a></li>
          <li><a href="../default.html#team-link">Team</a></li>
          <li><a href="../default.html#contact-link">Contact Us</a></li>

      </ul>

      <a href="#" id="user-menu" data-activates="slide-out" class="button-collapse">
      <i class="material-icons">menu</i></a>

      <a href="default.html" class="brand-logo center">Student Council</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="../logout.php?logout">Log out</a></li>
      <li><a href="default.html#team-link">Team</a></li>
      <li><a href="default.html#contact-link">Contact Us</a></li>
      </ul>


    </div>
  </nav>

  <div class="row user-name teal">
    <div class="container">
      <div class="col s12 left1">
        <h1>Hi <?php echo $_SESSION['stud_name'] ?> </h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row user-body">
      <div class="col s12 center">
        <a class="waves-effect waves-light btn-large update-btn" href="core/edit.php">UPDATE PROFILE</a>
      </div>

      <p class="nothnig-to-show gray left"> <span id="main-msg">Sorry..! Right Now there's nothing to show :( </span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere impedit maxime at reiciendis perspiciatis perferendis, consequuntur recusandae voluptatum tempora eaque?</p>
    </div>
  </div>


  <footer class="page-footer white">

    <div class="footer-copyright">
      <div class="container center">
        <p class="black-text"><i class="material-icons">code</i>with<i class="material-icons" style="color: #f44336">favorite</i>by <span class="ftr"><a class="ftr" href="https://github.com/piratedvirus">Saurabh Kulkarni</a> </span>, TE CSE</p>
      </div>
    </div>
  </footer>

    <script src="Assets/js/jquery-1.11.3-jquery.min.js"></script>
    <script src="Assets/js/materialize.js"></script>
    <script src="Assets/js/init.js"></script>

</body>
</html>
<?php ob_end_flush(); ?>
