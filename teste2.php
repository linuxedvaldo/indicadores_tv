<?php
 include_once("conexao.php");
//conectando e selecionando o banco de dados
$mysqli = new mysqli('localhost', 'root', '', 'indicadores_tv'); 
// Check erros
if ( $mysqli->connect_errno ) {
  echo $mysqli->connect_errno, ' ', $mysqli->connect_error;
  } 
// SQL query - TOP 1
$sql = 'SELECT * FROM TOP10_TEMPO_CLIENTE4 limit 7,1';
// Printing results - TOP 1
$result = $mysqli->query( $sql ); 
 $row = $result->fetch_assoc() ; 
 ?>
<!--EXIBE OS DADOS DO TOP 1-->
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center" style="border:#FFF" id="TOP1"> <?php echo $row['DESC_Uds'] ;?></font></div>
<div align="center" id="TOP1_CLIENTE"> <?php echo $row['NOME_FANTASIA']; ?></div>
<div align="center" id="TOP1_RECS"> <?php echo number_format($row['TOTAL_REC'], 0, '', '.') ;?></div>

<!--FIM DO TOP 1-->

 
<?php
	function m2h($mins) {
		// Se os minutos estiverem negativos
		if ($mins < 0)
			$min = abs($mins); 
		else
			$min = $mins; 

		// Arredonda a hora
		$h = floor($min / 60); 
		$m = ($min - ($h * 60)) / 100; 
		$horas = $h + $m; 

		// Matemática da quinta série
		// Detalhe: Aqui também pode se usar o abs()
		if ($mins < 0)
			$horas *= -1; 

		// Separa a hora dos minutos
		$sep = explode('.', $horas); 
		$h = $sep[0]; 
		if (empty($sep[1]))
			$sep[1] = 00; 

		$m = $sep[1]; 

		// Aqui um pequeno artifício pra colocar um zero no final
		if (strlen($m) < 2)
			$m = $m . 0; 

		return sprintf('%02d:%02d', $h, $m); 
	} 
	
	print m2h($row['MEDIA_HORA']);
?>