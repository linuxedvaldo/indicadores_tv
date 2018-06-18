<meta http-equiv="Page-Enter" content="revealTrans(duration=1, transition=12)"> 

<html>
<head>
<meta HTTP-EQUIV = "Refresh" CONTENT = "20; URL = SOC_EFEC_CONSOLIDADO.php">
<style type="text/css"> 
body {
	scrollbar-3dlight-color:#000000; 
	scrollbar-arrow-color:#000000; 
	scrollbar-base-color:#000000; 
	scrollbar-darkshadow-color:#000000; 
	scrollbar-face-color:#000000; 
	scrollbar-highlight-color:#000000; 
	scrollbar-shadow-color:#000000;
	background-image: url(imagens/TelaoPRF.png);
	background-repeat: no-repeat;
	background-color: #000000;
	font-family: Tahoma, Geneva, sans-serif ;
	
	color: #333333;
	font-weight: bold;
}
#PRF {
	position: absolute;
	width: 211px;
	height: 85px;
	z-index: 1;
	left: 380px;
	top: 755px;
	font-size: 72px;
}
#QRA {
	position: absolute;
	width: 215px;
	height: 85px;
	z-index: 2;
	left: 660px;
	top: 753px;
	font-size: 72px;
}
#QR {
	position: absolute;
	width: 216px;
	height: 85px;
	z-index: 3;
	left: 1000px;
	top: 754px;
	font-size: 72px;
}
#Layer1 {
	position:absolute;
	width:300px;
	height:22px;
	z-index:5;
	left: 72px;
	top: 980px;
	font-size: 20px;
	color:#FFF;
	font-family: arial;
}
#RECS_FALTA {
	position: absolute;
	width: 190px;
	height: 87px;
	z-index: 4;
	left: 1060px;
	top: 757px;
	font-size: 72px;
	
	
}
#PRF_SOC_SP {
	position: absolute;
	width: 213px;
	height: 85px;
	z-index: 1;
	left: 380px;
	top: 206px;
	font-size: 72px;
}	

#QRA_SOC_SP {
	position: absolute;
	width: 213px;
	height: 85px;
	z-index: 1;
	left: 660px;
	top: 207px;
	font-size: 72px;
}
#QR_SOC_SP {
	position: absolute;
	width: 213px;
	height: 85px;
	z-index: 1;
	left: 1000px;
	top: 207px;
	font-size: 72px;
}

/* CSS BHE */

#PRF_SOC_BHE {
	position: absolute;
	width: 220px;
	height: 85px;
	z-index: 1;
	left: 380px;
	top: 375;
	font-size: 72px;
}	

#QRA_SOC_BHE {
	position: absolute;
	width: 213px;
	height: 85px;
	z-index: 1;
	left: 660px;
	top: 375;
	font-size: 72px;
}
#QR_SOC_BHE {
	position: absolute;
	width: 213px;
	height: 85px;
	z-index: 1;
	left: 1000px;
	top: 375;
	font-size: 72px;
}


/* CSS BSOD */
#PRF_SOC_BSOD {
	position: absolute;
	width: 213px;
	height: 85px;
	z-index: 1;
	left: 380px;
	top: 515;
	font-size: 72px;
}
#QRA_SOC_BSOD {
	position: absolute;
	width: 213px;
	height: 85px;
	z-index: 1;
	left: 660px;
	top: 515;
	font-size: 72px;
}


#QR_SOC_BSOD {
	position: absolute;
	width: 217px;
	height: 85px;
	z-index: 1;
	left: 1000px;
	top: 515;
	font-size: 72px;
}	



/* CSS INTERNACIONAL */
#PRF_SOC_INT {
	position: absolute;
	width: 213px;
	height: 85px;
	z-index: 1;
	left: 380px;
	top: 665;
	font-size: 72px;
}
#QRA_SOC_INT {
	position: absolute;
	width: 213px;
	height: 85px;
	z-index: 1;
	left: 660px;
	top: 664px;
	font-size: 72px;
}


#QR_SOC_INT {
	position: absolute;
	width: 217px;
	height: 85px;
	z-index: 1;
	left: 1000px;
	top: 665;
	font-size: 72px;
}	


/* CSS MES ANTERIOR */

#PRF_MESANTERIOR {
	position: absolute;
	width: 211px;
	height: 60px;
	z-index: 1;
	left: 380px;
	top: 856px;
	font-size: 48px;
}
#QRA_SOC_MESANTERIOR {
	position: absolute;
	width: 213px;
	height: 53px;
	z-index: 1;
	left: 660px;
	top: 858px;
	font-size: 48px;
}
#QR_SOC_MESANTERIOR {
	position: absolute;
	width: 213px;
	height: 55px;
	z-index: 1;
	left: 1000px;
	top: 857px;
	font-size: 48px;
}


</style>
<title>SOC - PRF</title>
</head>
<?php
 include_once("conexao.php");
//conectando e selecionando o banco de dados
$mysqli = new mysqli('localhost', 'root', '', 'indicadores_tv');
 
// Check erros
if ( $mysqli->connect_errno ) {
  echo $mysqli->connect_errno, ' ', $mysqli->connect_error;
  } 
// SQL query - CONSOLIDADO
$sql = 'SELECT * FROM PRF2 where DESC_UD  = "consolidado"'; 
// SQL query - SOC SP
$sql2 = 'SELECT * FROM PRF2 where DESC_UD  = "SOC SPO"';
// SQL query - SOC BHE
$sql3 = 'SELECT * FROM PRF2 where DESC_UD  = "SOC BHE"';
// SQL query - SOC BSOD
$sql4 = 'SELECT * FROM PRF2 where DESC_UD  = "SOC BSOD"'; 
// SQL query - SOC INTERNACIONAL
$sql5 = 'SELECT * FROM PRF2 where DESC_UD  = "SOC INT"';
// SQL query - MES ANTERIOR
$sql6 = 'SELECT * FROM PRF2 where DESC_UD  = "MES_ANTERIOR"';    

// SQL query - ATUALIZACAO
$sql7 = 'SELECT * FROM atualizacao'; 


// Printing results - CONSOLIDADO
$result = $mysqli->query( $sql ); 
 $row = $result->fetch_assoc() ;	
 
 // Printing results - SOC SP
$result2 = $mysqli->query( $sql2 ); 
 $row2 = $result2->fetch_assoc() ;
 
  // Printing results - SOC BHE
$result3 = $mysqli->query( $sql3 ); 
 $row3 = $result3->fetch_assoc() ;
 
  // Printing results - SOC BSOD
$result4 = $mysqli->query( $sql4 ); 
 $row4 = $result4->fetch_assoc() ; 
 
   // Printing results - SOC INTERNACIONAL
$result5 = $mysqli->query( $sql5 ); 
 $row5 = $result5->fetch_assoc() ; 
 
    // Printing results - SOC MES_ANTERIOR
$result6 = $mysqli->query( $sql6 ); 
 $row6 = $result6->fetch_assoc() ; 
 
    // Printing results - ATUALIZACAO
$result7 = $mysqli->query( $sql7 ); 
 $row7 = $result7->fetch_assoc() ; 
 
 
// Close Connection
$mysqli->close();

?>
<!--EXIBE OS DADOS DO CONSOLIDADO-->
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center" id="PRF"> <font color='<?php echo $row['COR'] ;?>'><?php echo $row['PRF'] ;?>%</font></div>
<div align="center" id="QRA"> <?php echo number_format($row['QRA'], 0, '', '.') ;?></div>
<div align="center" id="QR"> <?php echo number_format($row['QR'], 0, '', '.') ;?></div>
<!--FIM DO CONSOLIDADO-->

<!--EXIBE OS DADOS DO SOC SP-->
<div align="center" id="PRF_SOC_SP"> <font color='<?php echo $row2['COR']; ?>'><?php echo $row2['PRF'] ;?>%</font></div>
<div align="center" id="QRA_SOC_SP"> <?php echo number_format($row2['QRA'], 0, '', '.') ;?></div>
<div align="center" id="QR_SOC_SP"> <?php echo number_format($row2['QR'], 0, '', '.') ;?></div>
<!--FIM DO SOC SP-->

<!--EXIBE OS DADOS DO SOC BHE-->
<div align="center" id="PRF_SOC_BHE"><font color='<?php echo $row3['COR'] ;?>'><?php echo $row3['PRF'] ;?>%</font></div>
<div align="center" id="QRA_SOC_BHE"> <?php echo number_format($row3['QRA'], 0, '', '.'); ?></div>
<div align="center" id="QR_SOC_BHE"> <?php echo number_format($row3['QR'], 0, '', '.'); ?></div>
<!--FIM DO SOC BHE-->

<!--EXIBE OS DADOS DO SOC BSOD-->
</FONT><div align="center" id="PRF_SOC_BSOD"> <font color='<?php echo $row4['COR'] ;?>'><?php echo $row4['PRF'] ;?>%</font></div>
<div align="center" id="QRA_SOC_BSOD"> <?php echo number_format($row4['QRA'], 0, '', '.'); ?></div>
<div align="center" id="QR_SOC_BSOD"> <?php echo number_format($row4['QR'], 0, '', '.'); ?></div>
<!--FIM DO SOC BSOD-->

<!--EXIBE OS DADOS DO SOC INTERNACIONAL-->
</FONT><div align="center" id="PRF_SOC_INT"> <font color='<?php echo $row5['COR'] ;?>'><?php echo $row5['PRF'] ;?>%</font></div>
<div align="center" id="QRA_SOC_INT"> <?php echo number_format($row5['QRA'], 0, '', '.'); ?></div>
<div align="center" id="QR_SOC_INT"> <?php echo number_format($row5['QR'], 0, '', '.'); ?></div>
<!--FIM DO SOC INTERNACIONAL-->

<!--EXIBE OS DADOS DO MES ANTERIOR-->
</FONT><div align="center" id="PRF_MESANTERIOR"> <font color='<?php echo $row6['COR'] ;?>'><?php echo $row6['PRF'] ;?>%</font></div>
<div align="center" id="QRA_SOC_MESANTERIOR"> <?php echo number_format($row6['QRA'], 0, '', '.'); ?></div>
<div align="center" id="QR_SOC_MESANTERIOR"> <?php echo number_format($row6['QR'], 0, '', '.'); ?></div>
<!--FIM DO DO MES ANTERIOR-->

<div id="Layer1">Dados até &nbsp;<?php echo $row7['data'] ;?></font></div>
</body>
</html>