<!DOCTYPE html>
<html lang="en">

  <head>

     <!--Connect to MysqliDB and get country  -->
     

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vacansy Choise</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">

   

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Start Bootstrap</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Vacancy</a>
          </li>
          
          </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Vacancy
            <span class="text-primary">Choise</span>
          </h1>
          <div class="subheading mb-5">TEST YOUR LUCK AND FIND THE BEST 10 PLACE FOR VISIT ·
            <a href="mailto:name@email.com">vokray@mail.com</a>
          </div>
          <div class="subheading mb-5">PUSH THE BUTTON TO CONNECT TO DB AND GET 10 RANDOM COUNTRIES FOR VISIT.</p>
          </div>
          
          
          <?php 
          if(isset($_POST['connect_button']))
    {
        $db = new mysqli 
('localhost', // Имя хоста
'vokray', //Имя пользователь
'', // Пароль
'world_x' // Название базы данных
);

//print_r($db);
if ($db->connect_errno !=0) {
    die("Error in Connection $db->connect_error");
} else {
    printf("Connected to database\n");
    
    $qres = $db->query("SELECT name, code FROM country ORDER BY RAND() LIMIT 0,10;");
    printf("<table>");
    printf("<tr><th>Country Code</th><th>Country Name</th></tr>");
    while ($row = $qres->fetch_assoc()) {
        printf("<tr><td>%s</td><td> %s</td></tr>\n", $row['code'], $row['name']);
    }
}
    }
?>
<form method="POST">
    <input type="submit" name="connect_button" value="Push Me" />
</form>
          

     
      
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

</html>
