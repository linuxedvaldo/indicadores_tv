<meta http-equiv="Page-Enter" content="revealTrans(duration=1, transition=12)"> 
<meta HTTP-EQUIV = "Refresh" CONTENT = "15; URL = #">
<style>

body {
  font: 95%/1.6 "Myriad Pro", Frutiger, "Lucida Grande", "Lucida Sans", "Lucida Sans Unicode", Verdana, sans-serif;
}
table {
  border-collapse: inherit;
  width: 60em;
 }
thead {
  background: #ccc url(https://www.devfuria.com.br/html-css/tabelas/bar.gif) repeat-x left center;
  border-top: 100px solid #09F;
  border-bottom: 100px solid #09F;
}
th {
  font-weight: bold;
  text-align: center;
  padding: 0.1em 1em;
  text-align: center;
  color: #fff;
}
 td {
  padding: 0.1em 1em;
  text-align: center;
  color: #000;
   border: 1px solid #000;
}

</style>
<?php
 include_once("conexao.php");
//conectando e selecionando o banco de dados
$mysqli = new mysqli('localhost', 'root', '', 'indicadores_tv');
 
// Verificando erros
if ( $mysqli->connect_errno ) {
  echo $mysqli->connect_errno, ' ', $mysqli->connect_error;
  } 
  // SQL query
$sql = 'SELECT * FROM etit45_forcast2 where AREA <> "consolidado"'; 



   
 ?>
  
<table id="playlistTable" align="center">
  <caption>Top 15 Playlist</caption>
  <thead>
    <tr bgcolor="#0099FF">
      <th>GERÊNCIA TÉCNICA</th>
      <th>% ETIT</th>
      <th>Qtd. REC's</th>
    </tr>
  </thead>  
<?php 
// Exibindo os resultados na tabela
$result = $mysqli->query( $sql );	

while ( $row = $result->fetch_assoc() ) {
echo "<tbody>
 		<tr>
 			<td>".$row['AREA']."</td>
 			<td><B><font color='".$row['COR']."'>".$row['ETIT']."%</td></font></b>
 			<td>".$row['QTD_RECS']."</td>
 		</tr>";
}
// Fechando a conexao
$mysqli->close();
?>
  