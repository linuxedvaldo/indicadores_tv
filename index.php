<blockquote style="border:thin" style="border-color:#DDDDDD" align="center">
<center><img src="imagens\consulta de Chamados.jpg" align="top" border="0"></center><br>
<head><font face="calibri" size="2">
<blockquote>
  <p align="left" class="style10"><strong><center>1-Para consultar seu(s) chamado(s) pendente(s) informe sua uniorg:</strong>
&nbsp;&nbsp;<p>Para agências: (1)+nº da agência(XXXX)<br>
&nbsp;&nbsp;Exemplo: (1)+ agência República – 0083 – Uniorg: 10083<br><br>

Para Pabs: (1)ou(29)+nº do Pab (XXXX):</strong><br>
&nbsp;&nbsp;Exemplo: (1)+ PAB PUC RIO DE JANEIRO– 4945 – Uniorg: 14845<br>
&nbsp;&nbsp;Exemplo: (29)+ PAB UNIMED GOIANIA GO – 3576 – Uniorg: 293576<br><br>

<strong>2-Para os demais pontos consultar através da REDE ou Regional.</strong><br><br><br><br>

<strong><font color="#FF3333">*Para realizar a pesquisa é necessário informar a Rede ou Regional ou Uniorg e também informar o Nome do arquivo que será Gerado/Exportado.</strong>
</blockquote>
</head>

<form action="busca.php" method="get">  
<script type="text/javascript" src="textsizer.js">
</script>
<script type="text/javascript" src="EmptyField.js"></script>


<link href="jquery.autocomplete.css" type="text/css" rel="stylesheet" />
        <script src="jquery.js" language="javascript"></script>
        <script src="jquery.autocomplete.js" language="javascript"></script>

        <script type="text/javascript" language="javascript">
	$(document).ready(function(){
				//Ao digitar executar essa função
				$("#input").focus().autocomplete("completar.php",{
					minChars: 1 //Número máximo de caracteres para aparecer a lista
				  , matchContains: true //Aparecer somente os que tem relação ao valor digitado
				  , scrollHeight: 220 //Altura da lista dos nomes
				  , selectFirst: true //Vim o primeiro da lista selecionado
				  , delay: 0 //Tempo para aparecer a lista para 0, por padrão vem 200
				  });
				  
				  
			});

		</script>
		
		

										 
</script>
<script type="text/javascript" src="textsizer.js">
</script>
<script type="text/javascript" src="EmptyField.js"></script>


<link href="jquery.autocomplete.css" type="text/css" rel="stylesheet" />
        <script src="jquery.js" language="javascript"></script>
        <script src="jquery.autocomplete.js" language="javascript"></script>

        <script type="text/javascript" language="javascript">
	$(document).ready(function(){
				//Ao digitar executar essa função
				$("#input1").focus().autocomplete("completar1.php",{
					minChars: 1 //Número máximo de caracteres para aparecer a lista
				  , matchContains: true //Aparecer somente os que tem relação ao valor digitado
				  , scrollHeight: 220 //Altura da lista dos nomes
				  , selectFirst: true //Vim o primeiro da lista selecionado
				  , delay: 0 //Tempo para aparecer a lista para 0, por padrão vem 200
				  });
				  
				  
			});

		</script>
		
		

										 
</script>
<body> 

<table width="700" border="1" align="center">
<th><font class="style10" size="2">Nome da Rede</th>
<td><input size='40' onFocus='EmptyField(this.id)' id='input' onKeyup='this.value=this.value.toUpperCase()' name='palavra'></td> 
</tr>
<th><font class="style10" size="2">Nome da Regional</th>
<td><input onFocus='EmptyField(this.id)' id='input1' onKeyup='this.value=this.value.toUpperCase()' size='40' name="palavra2"></td> 
</tr>
<th><font class="style10" size="2">Informe o Nº da Uniorg</th>
<td><input size='10' maxlength="11" onFocus='EmptyField(this.id);' name="palavra1"></td> 
</tr>

<tr>
    <th scope="row"><font class="style10" size="2">Digite o nome do arquivo a ser exportado</th>
    <td><input type="text" size="30" name="nome_arquivo"></td>
  </tr>
</table>

&nbsp;<center><input type="submit" value="Buscar" size="100" />
</form>
</font>
</blockquote><br>
<center><img src="imagens\logo menor.jpg" align="top" border="0"></center><br>
<p align="left" class="style10"><font size="1"><center>Desenvolvido por Edvaldo Albino - Suporte ao Funcionário