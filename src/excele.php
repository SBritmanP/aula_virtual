<?php


include("../src/db.php");

$query=mysqli_query($con,"SELECT * FROM estudiante");
$docu = "estudiantes.xls";
header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename='.$docu);
header('Pragma: no-cache');
header('Expires: 0');
echo '<table border=1>';
echo '<tr>';
echo '<th colspan=6>LISTA DE ESTUDIANTES REGISTRADOS</th>';
echo '<tr> ';
echo '<tr><th>DNI</th><th>CODIGO</th><th>NOMBRE</th><th>DIRECCION</th><th>NOTAS</th><th>SEMESTRE</th></tr>';
while($row=mysqli_fetch_array($query)){
  echo '<tr>';
  echo '<td>'.$row['dnie'].'</td>';
  echo '<td>'.$row['codigoe'].'</td>';
  echo '<td>'.$row['nombree'].'</td>';
  echo '<td>'.$row['direcione'].'</td>';
  echo '<td>'.$row['notas'].'</td>';
  echo '<td>'.$row['semestre'].'</td>';
}
echo'</table>';
?>