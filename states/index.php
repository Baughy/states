
<? include 'functions.php'; ?>
<!DOCTYPE html>
<html>
<head>

  <style>

  body {
      background-color: #e1e7f2;
  }

  h1 {
      text-align: center;
  }

  td {
      text-align: center;
  }
  </style>


</head>
<body>
<h1>United States</h1>
<table style="width:100%">
  <tr>
<?


$x= 1;

foreach($states as $state) {
$statename= $state;
$state= preg_replace('/\s+/', '_', $state);
$imagelink= myimg($state);
$state= statetolower($state);

echo '<td>';
echo '<a href="pages/'.$state.'">';
echo $imagelink;
echo '<br>';
echo $statename;
echo '</a>';
echo '</td>';

$x++;
if($x == 6) {
  echo '</tr><tr>';
  $x = 1;
}  // end of if
} // end of foreach


?>
</tr>
</table>
</body>

</html>
