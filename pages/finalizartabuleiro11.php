<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow" />
    <meta name="author" content="João Vitor" />
    <link rel="stylesheet" href="css/style.css" />

     
		
	    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/all.css" >
		
		<!-- font quicksand -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
		
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
		
	
		
		<!-- animate css -->
	<link rel="stylesheet" href="css/animate.min.css">
		
		<!-- quantidade de produtos -->
		<script type="text/javascript">
			function id(valor_campo)
			{
				return document.getElementById(valor_campo);
			}
			function getValor(valor_campo)
			{
				var valor = document.getElementById(valor_campo).value.replace( ',', '.');
				/*document.write("Valor: " + valor);*/
				return parseFloat( valor ) * 10;

			}

			function soma()
			{
				var total = getValor('preco') * getValor('quantidade');
				id('resultado').value = total/100;
				id('resultado3').value = total/100;
			}
		</script>
		
		
		
			<script type="text/javascript">
				function id(valor_campo)
				{
					return document.getElementById(valor_campo);
				}
				function getValor(valor_campo)
				{
					var valor = document.getElementById(valor_campo).value.replace( ',', '.');
					/*document.write("Valor: " + valor);*/
					return parseFloat( valor ) * 10;

				}

				function dividir()
				{
					var total = getValor('resultado') / getValor('parcelas');
					id('resultado2').value = total/1;
				}
			</script>
		
	<link rel="icon" href="img/icon.png" />
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Finalizando a compra - Mystery Geek</title>
	
	</head>

<body>
	<div class="barra"><font style="text-decoration: none; "> Acesse já nossas redes socias</font>
      <div class="facebook"><a href=#><i class="fab fa-facebook-square" style="padding-right: 5px"></i>Facebook</a><a href=# style="padding-left: 30px"><i class="fab fa-instagram" style="padding-right: 5px"></i>Instagram</a></div></div>
	<header>
		<button class="btn-menu bg-gradient"><i class="fa fa-bars fa-lg"></i></button>
        <div class="logo"><a href="index.html"><img src="img/logo-site.svg" width="200px" height="125px"></a></div>
		<div class="conta"><a href="cesta.html"><i class="fas fa-shopping-bag fa-3x" style="padding-left: 5px"></i><br>CESTA</a></div>
		<div class="conta"><a href="login.php"><i class="far fa-user fa-3x" style="padding-left: 5px"></i><br>CONTA</a></div>
		<div class="conta"><a href="#" class="busca"><i class="fas fa-search fa-3x"></i><br>BUSCAR</a></div>
		<nav class="menu">
               <a class="btn-close"><i class="fa fa-times"></i></a>
               <ul>
                    <li><a href="acessorios.html">ACESSÓRIOS<i class="fas fa-chevron-down" style="padding-left:7px; " ></i></a>
                        <ul>
                            <li><a href="avisosdeporta.html">Avisos de porta </a></li>
                            <li><a href="bottons.html">Bottons</a></li>
                            <li><a href="chaveiros.html">Chaveiros</a></li>
                        </ul>
                    </li>
                    <li><a href="canecas.html">CANECAS</a>
                    </li>   
                    <li><a href="colecionaveis.html">COLECIONÁVEIS<i class="fas fa-chevron-down" style="padding-left:3px; " ></i></a>
                        <ul>
                            <li><a href="actionfigures.html">Action Figures</a></li>
                            <li><a href="funkopop.html">Funko Pop</a></li>
                        </ul>
                    </li>
                    <li><a href="cozinha.html">COZINHA<i class="fas fa-chevron-down" style="padding-left:7px; " ></i></a>
                        <ul>
                            <li><a href="aventais.html">Aventais</a></li>
                            <li><a href="luvas.html">Luvas</a></li>
                            <li><a href="portacopos.html">Porta-copos</a></li>
                    
                        </ul>
                    <li><a href="decoração.html">DECORAÇÃO<i class="fas fa-chevron-down" style="padding-left:7px; " ></i></a>
                         <ul>
                            <li><a href="quadros.html">Quadros</a></li>
                            <li><a href="almofadas.html">Almofadas</a></li>
                            <li><a href="portalivros.html">Porta-livros</a></li>
                            <li><a href="placas.html">Placas</a></li>
                        </ul>
                    <li><a href="escritorio.html">ESCRITÓRIO<i class="fas fa-chevron-down" style="padding-left:7px; " ></i></a>
                         <ul>
                            <li><a href="relogios.html">Relógios</a></li>
                            <li><a href="portatrecos.html">Porta-trecos</a></li>
                            <li><a href="cadernos.html">Cadernos</a></li>
                        </ul>
				   <li><a href="livros.html">LIVROS</a> </li>             
				   <li><a href="tabuleiro.html">JOGOS DE TABULEIRO</a></li>
                         
                        </ul>
                </ul>
           </nav>  
	</header>
<div class="barra_pesquisa">
	<form>
	<select id="sites" class="input_pesquisa">
  		<option value="3620194" selected>O que você procura?</option>
  		<option value="chaveiro1.html">Chaveiro Emborrachado Super-Herói Hulk</option>
		<option value="chaveiro2.html">Chaveiro De Borracha The Flash Herói - Emborrachado</option>
        <option value="chaveiro3.html">Chaveiro Hulk De Metal Mão Punho</option>
        <option value="chaveiro4.html">Chaveiro Darth Vader</option>
        <option value="chaveiro5.html">Chaveiro Deadpool</option>
        <option value="botton1.html">BOTTON JOYSTICK ABYX</option>
        <option value="botton2.html">BOTTON JOYSTICK PS</option>
        <option value="botton3.html">BOTTON GAMER COGUMELO VERDE 1UP</option>
        <option value="botton4.html">BOTTON GEEK SIDE FACES - BB</option>
        <option value="botton5.html">BOTTON PROIBIDO ALIENÍGENAS</option>
        <option value="aviso1.html">AVISO DE PORTA ÁREA RESTRITA</option>
        <option value="aviso2.html">AVISO DE PORTA MESTRE</option>
        <option value="aviso3.html">AVISO DE PORTA REVERSO</option>
        <option value="aviso4.html">AVISO DE PORTA TÔ JOGANDO</option>
        <option value="caneca1.html">Caneca de Chopp Ponei Saltitante</option>
        <option value="caneca2.html">Caneca Game of Thrones Escudo Targaryen 3D</option>
        <option value="caneca3.html">Caneca de Chopp Game of Thrones I Drink I Know Things</option>
        <option value="caneca4.html">Caneca Game Of Thrones Escudo Lannister 3D</option>
        <option value="caneca5.html">Caneca com Brasão – Avengers Logo</option>
        <option value="caneca6.html">Caneca Punisher</option>
        <option value="caneca7.html">Caneca Punisher</option>
        <option value="caneca8.html">Caneca Viking Skull</option>
        <option value="caneca9.html">Caneca de Chopp Caveira</option>
        <option value="caneca10.html">Caneca Mágica Rick e Morty</option>
        <option value="caneca11.html">Caneca Folha de Fichário com Caneta</option>
        <option value="caneca12.html">Caneca Cubo Rubiks</option>
		<option value="actiofigures2.html">Boneco Mohawk: Gremlins 2: A Nova Geração</option>
		<option value="actionfigures3.html">Boneco Kylo Ren (Unmasked):Star Wars (The Black Series)</option>
		<option value="actionfigures4.html">Action Figure Kratos 7":God of War 4 - Boneco Colecionável</option>
		<option value="actionfigures5.html">CAPTAIN AMERICA - CAPITÃO AMÉRICA- AVENGERS: INFINITY WAR</option>
        <option value="actionfigures6.html">Boneco Action Figure SHIKAMARU NARA XTRA FIGURES - NARUTO</option>
        <option value="actionfigures7.html">Action Figure Crash Regular Edition - Crash Bandicoot</option>
        <option value="acitonfigures8.html">Action Figure Orochimaru Dxtra - Xtra Figures</option>
        <option value="funko1.html">Funko Pop Avengers - Thor</option>
        <option value="funko2.html">Funko Pop Avengers Homem de Ferro</option>
        <option value="funko3.html">Funko Pop Avengers - Thanos</option>
        <option value="funko4.html">Funko Pop GOT - Jon Snow</option>
        <option value="funko5.html">Funko Pop Breaking Bad Walter White</option>
        <option value="funko6.html">Funko Pop Piratas do Caribe - Jack Sparrow</option>
        <option value="funko7.html">Funko Pop NARUTO - Naruto</option>
        <option value="funko8.html">Funko Pop NARUTO - Sakura</option>
        <option value="avental1.html">Avental Let’s Cook</option>
        <option value="avental2.html">Avental Corpo Batman</option>
        <option value="avental3.html">Avental Casa Dragão</option>
        <option value="avental4.html">Avental Patrulha da Noite</option>
        <option value="portacopo1.html">PORTA COPOS DISQUETE - FLOPPY DISK</option>
        <option value="portacopo2.html">PORTA COPOS WARS</option>
        <option value="portacopo3.html">PORTA COPOS GAMER BOY COFFEE YES</option>
        <option value="portacopo4.html">PORTA COPOS COGUMELOS E BLOCOS</option>
        <option value="luva1.html">Luva de Cozinha DC I’m Batman</option>
        <option value="luva2.html">Luva de Cozinha Hand of Doom</option>
        <option value="luva3.html">Luva de Forno Iron</option>
        <option value="luva4.html">Luva de Forno Exterminator</option>
        <option value="quadro1.html">Quadro decorativo Homem de Ferro</option>
		<option value="quadro2.html">Quadro decorativo Capitão América</option>
		<option value="quadro3.html">Quadro decorativo Incrível Hulk</option>
		<option value="almofada1.html">Almofada Darth Vader</option>
		<option value="almofada2.html">Almofada Harry Porter</option>
		<option value="almofada3.html">Almofada Mario</option>
		<option value="portalivro1.html">Porta livros Dragão</option>
		<option value="portalivro2.html">Porta livros Samurai</option>
		<option value="portalivro3.html">Porta livros Herói</option>
		<option value="placa1.html">Placa LAG SIM</option>
		<option value="placa2.html">Placa Don't use the force</option>
		<option value="placa3.html">Placa Área Restrita</option>
		<option value="relogio1.html">Relógio Parede DC Batman Logo</option>
		<option value="relogio2.html">Relógio Despertador DC Batman Logo</option>
		<option value="relogio3.html">Relógio Hogwarts</option>
		<option value="portatreco1.html">PORTA TRECOS FORMATO OMG</option>
		<option value="portatreco2.html">PORTA TRECO RUBIK</option>
		<option value="portatreco3.html">PORTA TRECO TROOPER</option>
		<option value="portatreco4.html">PORTA TRECO CABEÇA DE MONSTRO</option>
		<option value="portatreco5.html">PORTA TRECO CAVEIRA MEXICANA</option>
		<option value="caderno1.html">Caderno Universitário Capa Dura 20x1 400 Liga da Justiça</option>
		<option value="caderno2.html">Caderno Univ 12x1 240f Homem de Ferro</option>
		<option value="caderno3.html">Caderno 10 Materias Super Mario Bros 200</option>
		<option value="caderno4.html">Caderno Univ 12x1 240f Harry Potter Jandaia</option>
		<option value="caderno5.html">Caderno Capa Dura Mulher Maravilha 96 Folhas Jandaia</option>
		<option value="livro1.html">Box Harry Potter - Série Completa</option>
		<option value="livro2.html">Livro Dos Sith – Star Wars</option>
		<option value="livro3.html">Livro – Darth Vader e Filho</option>
		<option value="livro4.html">Pokémon Go – Guia para Treinadores</option>
		<option value="livro5.html">Livro Mulher-Maravilha – Amazona, Heroína, Ícone</option>
		<option value="livro6.html">Livro Superman – Os Arquivos Secretos do Homem de Aço</option>
		<option value="livro7.html">Livro Batman – Os Arquivos Secretos do Homem-Morcego</option>
		<option value="livro8.html">Livro The Walking Dead – A Ascensão do Governador</option>
		<option value="livro9.html">Livro O Livro Da Mitologia – Edição Especial</option>
		<option value="livro10.html">Livro Star Wars: O Caminho Jedi</option>
		<option value="livro11.html">Livro 2001: Uma Odisséia no Espaço</option>
		<option value="livro12.html">Livro Sexta-Feira 13 – Crystal Lake</option>
		<option value="tabuleiro1.html">Bloodborne - Card Game</option>
		<option value="tabuleiro2.html">Jogo War Grow</option>
		<option value="tabuleiro3.html">Zombicide</option>
		<option value="tabuleiro4.html">Black Stories Cinema</option>
		<option value="tabuleiro5.html">Dixit</option>
		<option value="tabuleiro6.html">Taverna</option>
		<option value="tabuleiro7.html">Harry Potter: Hogwarts - Salão Principal</option>
		<option value="tabuleiro8.html">Modern Art</option>
		<option value="tabuleiro9.html">Dark City</option>
		<option value="tabuleiro10.html">Claim + (Promo Fantasmas)</option>
		<option value="tabuleiro11.html">Terra - Devir</option>
		<option value="tabuleiro12.html">Last Friday</option>
	</select>
	</form>
	<button class="btn-close2">X</button></div>	
	<div class="contents">
		<div class="principal">
			<div class="comprando">
	<form action="salva_compra.php" method="post">
				
				<b>Finalizando a compra</b><br><img src="img/banner-de-processo1.png"><br><br>
				<table border="1" cellspacing="0" class="quantidade">
				<tr>
					<th>Produto</th>
					<th>Preço</th>
					<th>Quantidade</th>
                    <th>Total</th>
					</tr>
						<tr>
							
					<td><input type="hidden" name="produto" value="Terra - Devir">Terra - Devir<br />
                    <img src="img/tabuleiro-11.jpg" width="200px"; height="200px"
                    </td>
					<td> <input name="preco" type="hidden" id="preco" value="150,00">R$ 149,99</td>
							
	

					<td><b style="font-size: 14px">Selecione a quantidade desejada</b><br><input type="number" min="1" max="5" value="1" name="quantidade" id="quantidade"  onblur="soma()"></td>
							<td>R$ <input type="number" name="resultado" "resultado" readonly id="resultado" min="1" max="10000"></td>
					</tr>
				</table><br />
			
	
				<h2>Parcelamento</h2>
				<div class="alert alert-danger" role="alert">
  						
						O parcelamento está restrito apenas para compras acima de R$ 99,99<br>
					Selecione o número de parcelas para prosseguir (caso seja à vista, selecione o "1")
				</div>
					<h3>Quantidade de parcelas:<input type="number" min="0" max="3" value="0" name="parcelas" id="parcelas"  onblur="dividir()"> </h3><br><h3>Valor de cada parcela: R$ <input name="total" type="number" "resultado2" readonly id="resultado2" min="1" max="10" style="border:none; font-size:18px"></h3><br> 
				
						
			</div><br><br><br>
			<div class="finalizando">
				<b>Identificação</b>
						<br><img src="img/banner-de-processo2.png"><br><br>
        				<h2>Dados Pessoais</h2>
          

		<div class="txtb">
          <input type="email" name="email" required>
          <span data-placeholder="E-mail*"></span>
        </div>

		<div class="txtb">
          <input type="password" required name="senha" maxlength="20">
          <span data-placeholder="Senha*"></span>
        </div>
		
		<div class="txtb">
          <input type="text" required name="endereco">
          <span data-placeholder="Endereço*"></span>
        </div>
		<div class="txtb">
          <input type="number" maxlength="6" required name="numero">
          <span data-placeholder="Número*"></span>
        </div>	
		<div class="txtb">
          <input type="text" name="complemento">
          <span data-placeholder="Complemento"></span>
        </div>
		<div class="txtb">
          <input type="text" name="bairro" required>
          <span data-placeholder="Bairro*"></span>
        </div>
		<div class="txtb">
          <input type="text" maxlength="9" name="cep" required  OnKeyPress="formatar('#####-###', this)">
          <span data-placeholder="CEP*"></span>
        </div>					
		
		<div class="txtb">
          <input type="text" required name="cidade">
          <span data-placeholder="Cidade*"></span>
        </div>
			<select name="estado" style="font-size: 15px; border: none; border-bottom: 2px solid #adadad; width: 100%; margin: 20px 0; color: #333; padding: 5px 0 ">
				<option value="" selected required>Estado*</option>
				<option value="Acre" name="acre">Acre</option>
				<option value="Alagoas" name="alagoas">Alagoas</option>
				<option value="Amapá" name="amapa">Amapá</option>
				<option value="Amazonas" name="amazonas">Amazonas</option>
				<option value="Bahia" name="bahia">Bahia</option>
				<option value="Ceará" name="ceara">Ceará</option>
				<option value="Distrito Federal" name="distrito federal">Distrito Federal</option>
				<option value="Espírito Santo" name="espirito santo">Espírito Santo</option>
				<option value="Goiás" name="goias">Goiás</option>
				<option value="Maranhão" name="maranhao">Maranhão</option>
				<option value="Mato Grosso" name="mato grosso">Mato Grosso</option>
				<option value="Mato Grosso do Sul" name="mato grosso do sul">Mato Grosso do Sul</option>
				<option value="Minas Gerais" name="minas gerais">Minas Gerais</option>
				<option value="Pará" name="para">Pará</option>
				<option value="Paraíba" name="paraiba">Paraíba</option>
				<option value="Paraná" name="parana">Paraná</option>
				<option value="Pernambuco" name="pernambuco">Pernambuco</option>
				<option value="Piauí" name="piaui">Piauí</option>
				<option value="Rio de Janeiro" name="rio de janeiro">Rio de Janeiro</option>
				<option value="Rio Grande do Norte" name="rio grande do norte">Rio Grande do Norte</option>
				<option value="Rio Grande do Sul" name="rio grande do sul">Rio Grande do Sul</option>
				<option value="Rondônia" name="rondonia">Rondônia</option>
				<option value="Roraima" name="roraima">Roraima</option>
				<option value="Santa Catarina" name="santa catarina">Santa Catarina</option>
				<option value="São Paulo" name="sao paulo">São Paulo</option>
				<option value="Sergipe" name="sergipe">Sergipe</option>
				<option value="Tocantins" name="tocantins">Tocantins</option>
			</select><br><br>
							
		
			<b>Forma de pagamento</b>
				<br><img src="img/banner-de-processo3.png"><br><br>
				<h2>Cartão de crédito</h2><br>
          

					<input type="radio" name="formapagamento" value="visa"><img src="img/visa.jpg" >
					<input type="radio" name="formapagamento" value="master"><img src="img/master.png" style="height:35px; width: 35px">
					<input type="radio" name="formapagamento" value="hiper"><img src="img/hiper.jpg">
					<input type="radio" name="formapagamento" value="elo"><img src="img/elo.png" style="height:35px; width: 35px"><br>
					<div class="txtb" style="width: 50%">
          				<input type="text" maxlength="19" name="cartaonumero"  OnKeyPress="formatar('#### #### #### ####', this)" style="width: 50%">
          				<span data-placeholder="Número"></span>
       				 </div>
					<select name="mesvencimento" style="font-size: 15px; border: none; border-bottom: 2px solid #adadad; width: 10%; margin: 20px 0; color: #333; padding: 5px 0 ">
					<option value="01" name="01">01</option>
					<option value="02" name="02">02</option>
					<option value="03" name="03">03</option>
					<option value="04" name="04">04</option>
					<option value="05" name="05">05</option>
					<option value="06" name="06">06</option>
					<option value="07" name="07">07</option>
					<option value="08" name="08">08</option>
					<option value="09" name="09">09</option>
					<option value="10" name="10">10</option>
					<option value="11" name="11">11</option>
					<option value="12" name="12">12</option></select>  
					<select name="anovencimento" style="font-size: 15px; border: none; border-bottom: 2px solid #adadad; width: 10%; margin: 20px 0; color: #333; padding: 5px 0 "><br><br>
					<option value="2019" name="2019">2019</option>
					<option value="2020" name="2020">2020</option>
					<option value="2021" name="2021">2021</option></select><br><br>
							
				<h2>Boleto Bancário</h2><br>
					<input type="radio" name="formapagamento" value="boleto"><img src="img/boleto.png" style="height:50px; width: 50px"><br><br>
					<div class="alert alert-warning" role="alert">
  						Atenção:
						Ao escolher essa opção, o boleto bancário será enviado até 3 dias no endereço de e-mail fornecido.
						
					</div>
							
					<table border="1" cellspacing="0" class="quantidade" style="width: 50%; text-align:left">
				<tr>
					<th>Total no carrinho</th>
					
					</tr>
						<tr>
							
					<td>Total:<input name="total" type="number" "resultado3" readonly id="resultado3" min="1" max="1000" ></td>

					</tr>
				</table><br><br>
							<input type="submit" class="cadbtn" value="Finalizar a compra">
  </form>				
			</div>
		</div>
  	
	<div class="footer">
		<div class="newsletter">
		<div class="texto"><p>RECEBA TODAS AS NOVIDADES DA <br>MYSTERY GEEK EM SEU E-MAIL!</p></div><i class="fas fa-envelope fa-3x" ></i><div class="email"><center>
            <input type="email" name="E-mail" placeholder="Seu email" id="exampleInputEmail1" ><button name="enviar" class="btn-outline-primary">ENVIAR</button></center>
		
		</div>
		<div class="formadepagamento">
			<b>Formas de Pagamento</b><br><br>
			<img src="img/cards.png"><br><br>
		</div>
		<div class="formadepagamento">
		<b>Selos de Qualidade e Segurança</b><br>
			<img src="img/selo-ssl.png" height="80px" width="100"><br><br>
			<img src="img/selo-google.png" height="40px" width="220px">
		</div>
		<div class="formadepagamento">
			<b>Redes Sociais</b><br>
			<a href=# style="padding-left: 7px"><i class="fab fa-facebook-square" style="padding-right: 5px"></i>Facebook</a><br>
			<a href=# style="padding-left: 7px"><i class="fab fa-instagram" style="padding-right: 5px"></i>Instagram</a><br><br>
           	<b>Atendimento</b><br>
			<font style="font-size: 16px">Telefone: (011)2466-9955<br>
			WhatsApp: (011)98148-2322<br>
			E-mail: loja.mysterygeek@gmail.com<br></font>
		</div>
		<div class="formadepagamento">
			<b>Institucional</b><br>
			<a href="quemsomos.html" style="font-size: 16px">Quem Somos</a><br>
			<a href="faleconosco.html" style="font-size: 16px">Fale Conosco</a><br>
            <a href="troca.html" style="font-size: 16px">Troca ou Devolução</a><br><br>
            <b>Produzido por:</b><br><img src="img/creative.png" style="padding-left:40px" />
			</div>
		<div class="barra2"><font style= "">© 2019 - Todos os direitos reservados. Conteúdo licenciado.</font>
      	</div>
    
	
	
	
	<!-- JQUERY --> 
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>
        $
		(".btn-menu").click(function(){
          $(".menu").show();
        });
        $(".btn-close").click(function(){
          $(".menu").hide();
        });
        </script>  
		
			<!-- BARRA DE PESQUISA -->
    	<script>
		$(".busca").click(function() {
   			$(".barra_pesquisa").fadeIn(600);
  		});
  		$(".btn-close2").click(function() {
   			$(".barra_pesquisa").fadeOut(600);
		});
 		</script>
        
     <script> <!-- Colocar na página com o menu antes da tag de fechamento do elemento BODY -->
var menuSelecao = document.getElementById('sites');
  menuSelecao.onchange= function() { 
  var urlSelecionada = menuSelecao.options[menuSelecao.selectedIndex].value;
  self.location = urlSelecionada;	 
}
</script>
	<!-- INPUT EFEITO --> 
		<script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>
			
			<!-- mascara cpf --> 
		<script>
			function formatar(mascara, documento){
			var i = documento.value.length;
  			var saida = mascara.substring(0,1);
  			var texto = mascara.substring(i)
  
  			if (texto.substring(0,1) != saida){
  			          documento.value += texto.substring(0,1);
  			}
				
			}
		</script>

			
	
</body>
</html>


</body>
	
</html>
