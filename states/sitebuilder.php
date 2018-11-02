<? include 'functions.php'; ?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<a href="sitebuilder.php?run=yes">Build Website</a><br>

<?

if (isset($_GET['run'])) {





foreach($states as $state) {
$statename= $state;
$state= preg_replace('/\s+/', '_', $state);
$state2 = $state;
$imagelink= myimg($state);
$state= strtolower($state);


$myfile = fopen("pages/$state.html", "w") or die("Unable to open file!");

$mystring = <<<EOT
<!DOCTYPE html>
<head>
<title>$statename</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="">United States</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">index</a>
      </li>
</ul>

</nav>


<div class="container">
<div class="row">
  <div class="col-lg-12">
  <div class="row">
<div class="col-lg-4"></div>

<div class="col-lg-4 class="center">
<h1>$statename</h1>
$imagelink
</div>
<div class="col-lg-4"></div>
</div>
<iframe
src="https://en.wikipedia.org/wiki/$state2"
width="100%" height="10000"
frameborder="0"></iframe>

</div>
</div>
</div>
</body>
</html>
EOT;

fwrite($myfile, $mystring);
fclose($myfile);
echo '  <a href="pages/'.$state.'.html">'.$state.'.html</a><br>';
} }
    ?>



</body>

</html>
