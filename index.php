<?php 
session_start();
//DB connection and webfixer
include("./assets/files/conn.php");
include("./assets/files/getDomain.php");

//files
include("./assets/files/header/nav.php");
include("./assets/files/footer/footer.php");
include("./assets/files/body/howToUse.php");
include("./assets/files/body/bodyIndex.php");
include("./assets/files/dataGrab/DataIndex.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Unlimited Image Grabber</title>
   <link rel="stylesheet" href="<?php echo rootDomain($conn);?>/tailwind.css"/>
   <link rel="stylesheet" href="<?php echo rootDomain($conn);?>/assets/lib/style.min.css"/>
   <link rel="shortcut icon" href="<?php echo rootDomain($conn);?>/assets//image/logo_fav/fav.svg" type="image/x-icon">
   <script src="<?php echo rootDomain($conn);?>/assets/lib/javascript.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100 transition-all duration-200 dark:bg-gray-900">

<!-- Navbar section started -->
<?php echo navbar($conn)?>
<!-- Navbar section ended -->

<!-- Body section design started -->
<?php echo body($conn);?>
<!-- Body section design ended -->

<!-- Footer section design started -->
<?php echo footer($conn);?>
<!-- Footer section design ended -->

<script src="<?php echo rootDomain($conn);?>/main.js"></script>
</body>
</html>