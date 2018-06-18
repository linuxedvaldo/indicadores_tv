<meta http-equiv="Page-Enter" content="revealTrans(duration=1, transition=12)"> 

<html>
<head>
<meta HTTP-EQUIV = "Refresh" CONTENT = "30; URL = top10_rec_clientes.php">
<style type="text/css"> 
body {
	scrollbar-3dlight-color:#000000; 
	scrollbar-arrow-color:#000000; 
	scrollbar-base-color:#000000; 
	scrollbar-darkshadow-color:#000000; 
	scrollbar-face-color:#000000; 
	scrollbar-highlight-color:#000000; 
	scrollbar-shadow-color:#000000;
	background-image: url(imagens/TelaoSOC_INT2.png);
	background-repeat: no-repeat;
	background-color: #000000;
	font-family: Tahoma, Geneva, sans-serif ;
	
	color: #333333;
	font-weight: bold;
}
#TOTAL_RECS_ABERTAS {
	position: absolute;
	width: 158px;
	height: 85px;
	z-index: 1;
	left: 350px;
	top: 200px;
	font-size: 90px;
}

#MINUTOS {
	position: absolute;
	width: 180px;
	height: 85px;
	z-index: 1;
	left: 15px;
	top: 928px;
	font-size: 75px;
	
	
}
#ATEUMAHORA {
	position: absolute;
	width: 200px;
	height: 85px;
	z-index: 1;
	left: 203px;
	top: 928px;
	font-size: 75px;
	
}

#ATEDUASHORAS {
	position: absolute;
	width: 183px;
	height: 85px;
	z-index: 1;
	left: 410px;
	top: 928px;
	font-size: 75px;
	
}

#ATETRESHORAS {
	position: absolute;
	width: 195px;
	height: 85px;
	z-index: 1;
	left: 600px;
	top: 928px;
	font-size: 75px;
	
}

#ATEQUATROHORAS {
	position: absolute;
	width: 194px;
	height: 85px;
	z-index: 1;
	left: 802px;
	top: 928px;
	font-size: 75px;
	
}


#MAISQUATROHORAS {
	position: absolute;
	width: 198px;
	height: 85px;
	z-index: 1;
	left: 1003px;
	top: 928px;
	font-size: 75px;
	
}
#RESP_EXEC {
	position: absolute;
	width: 203px;
	height: 85px;
	z-index: 2;
	left: 790px;
	top: 200px;
	font-size: 90px;
}
#TOTAL_RALS {
	position: absolute;
	width: 216px;
	height: 85px;
	z-index: 3;
	left: 300px;
	top: 604px;
	font-size: 90px;
}
#TOTAL_REINC {
	position: absolute;
	width: 203px;
	height: 85px;
	z-index: 4;
	left: 775px;
	top: 604px;
	font-size: 90px;

}
#Layer1 {
	position:absolute;
	width:312px;
	height:22px;
	z-index:5;
	left: 498px;
	top: 832px;
	font-size: 20px;
	color:#FFF;
	font-family: arial;
	background:#000;

}
.blink_me {
  animation: blinker 2s linear infinite;
 }

@keyframes blinker {
  2% {
    opacity: 0;
	
  }

</style>
<title>SOC -BSOD</title>
</head>
<?php
 include_once("conexao.php");
//conectando e selecionando o banco de dados
$mysqli = new mysqli('localhost', 'root', '', 'indicadores_tv');
 
// Check erros
if ( $mysqli->connect_errno ) {
  echo $mysqli->connect_errno, ' ', $mysqli->connect_error;
  } 
// SQL query - INT
$sql = 'SELECT * FROM recs_abertas where DESC_UD  = "SOC INT"'; 

// SQL query - SOC INT
$sq2 = 'SELECT * FROM rec_online_histograma_final where DESC_UD  = "SOC INT"'; 
   

// SQL query - ATUALIZACAO
$sql7 = 'SELECT * FROM atualizacao_rec_online'; 


// Printing results - SOC INT
$result = $mysqli->query( $sql ); 
 $row = $result->fetch_assoc() ;	
 
 
  // Printing results - REC_ONLINE_HISTOGRAMA_FINAL
$result2 = $mysqli->query( $sq2 ); 
 $row2 = $result2->fetch_assoc() ;
 
  
    // Printing results - ATUALIZACAO
$result7 = $mysqli->query( $sql7 ); 
 $row7 = $result7->fetch_assoc() ; 
 
 
// Close Connection
$mysqli->close();

?>
<!--EXIBE OS DADOS DO SOC SPO-->
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center" id="TOTAL_RECS_ABERTAS"> <?php echo number_format($row['total_recs_abertas'],0,'','.') ;?></font></div>
<div align="center" id="RESP_EXEC"> <?php echo number_format($row['resp_exec'], 0, '', '.') ;?></div>
<div align="center" id="TOTAL_RALS"> <?php echo number_format($row['total_rals'], 0, '', '.') ;?></div>
<div align="center" id="TOTAL_REINC"><font color='<?php if ($row['total_reinc']>0) echo 'RED';?>'> <?php echo number_format($row['total_reinc'], 0, '', '.') ;?></font></div>
<div align="center" id="MINUTOS" style='background:<?php if($row2['ATE45MINUTOS'] >0)echo'#0C0';'#CCC';?>'><font color="white"><?php echo number_format($row2['ATE45MINUTOS'], 0, '', '.') ;?></font></div>
<div align="center" id="ATEUMAHORA" style='background:<?php if($row2['ATE1HORA'] >0)echo'#FC0';'#CCC';?>'><font color="white"><?php echo number_format($row2['ATE1HORA'], 0, '', '.') ;?></font></div>
<div align="center" id="ATEDUASHORAS" style='background:<?php if($row2['ATE2HORAS'] >0)echo'#FC0';'#CCC';?>'><font color="white"><?php echo number_format($row2['ATE2HORAS'], 0, '', '.') ;?></font></div>
<div align="center" id="ATETRESHORAS" style='background:<?php if($row2['ATE3HORAS'] >0)echo'#FFA500';'#CCC';?>'><font color="white"><?php echo number_format($row2['ATE3HORAS'], 0, '', '.') ;?></font></div>
<div align="center" id="ATEQUATROHORAS" style='background:<?php if($row2['ATE4HORAS'] >0)echo'#FF8C00';'#CCC';?>'><font color="white"><?php echo number_format($row2['ATE4HORAS'], 0, '', '.') ;?></font></div>
<div align="center" id="MAISQUATROHORAS" class='<?php if ($row2['MAIS4HORAS'] >0)echo'blink_me';?>' style='background:<?php if ($row2['MAIS4HORAS'] >0)echo'#F30';'#CCC';?>'><font color="white"><?php echo number_format($row2['MAIS4HORAS'], 0, '', '.') ;?></font></div>

<!--FIM DO SOC SPO-->

<div id="Layer1">Atualizado &nbsp;<?php echo $row7['data_atualizacao'] ;?></font></div>
</body>
</html>