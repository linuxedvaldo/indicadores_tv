<?php
 //include_once("conexao.php");
//Connecting, selecting database
$mysqli = new mysqli('localhost', 'root', '', 'indicadores_tv');
 
// Check erros
if ( $mysqli->connect_errno ) {
  echo $mysqli->connect_errno, ' ', $mysqli->connect_error;
}
 
// SQL query
$sql = 'SELECT area, etit, qtd_recs FROM etit45';
 
// Printing results
$result = $mysqli->query( $sql );
 
while ( $row = $result->fetch_assoc() ) {
  echo $row['area'], ' ', $row['etit'], ' ', $row['qtd_recs'], " \\n\\n ";
}
 
// Close Connection
$mysqli->close();
?>