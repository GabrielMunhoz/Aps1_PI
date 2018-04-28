<!DOCTYPE html>

<html>

<head>
<form action="Arquivo_Execucao.php" method="get">
	<meta charset="utf-8">

	<title>Calculo IMC</title>

</head>

<body bgcolor="black" style="color: white" >
    
<h1><center> O indice de Massa corporal(IMC) é conhecido como padrão internacional para avaliar o grau de obesidade O IMC é calculo dividido o peso(em KG) pela alterura ao quadrado(em M).</center></h1>



<table border="0" align="center">

	<tr >

		<td  colspan="2"><center>

			Informa seus dados



		</center>

		</td>

	</tr>



		<tr>

		<td>

			Nome:

		</td>

		<td>

			<form>

			<input type="text" name="Nome">

		</form>

		</td>

	</tr>

		<tr>

		<td>

			Idade:

		</td>

		<td><form>

			<input type="number" name="Idade" min="0" max="140">

		</form>

		</td>

	</tr>

		<tr>

		<td>

			Sexo:

		</td>

		<td>

			<select>

				<option>Mascolino</option>

				<option>Feminio</option>

				<option>Trans</option>

				<option>Indefinido</option>

			</select>

		</td>

	</tr>

</table>



	

		<table align="center" border="2">

			<h3><center>Informa os dados referente a seu IMC</h3>

		<tr>

			<td>

				Peso

			</td>

			<td>

                            <form action="Arquivo_Execucao.php" method="get" >

				<input type="number" name="peso" min="0.0" max="200">
                                
				

			</td>



		</tr>	



		<tr>

			<td>

				Altura

			</td>

			<td>

				

				<input type="number" name="Altura" min="0.1" max="3">

			

			</td>

			

		</tr>



		<tr>

			<td align="center">

				<button type = 'submit'>Calcule</button>

			</td>

			<td align="center"><button>Limpar</button></td>

		</tr>

		<tr >

			<td align="center" colspan="2">

				Resultado

			</td>



		</tr>

		<tr>

			<td>Get valor</td>

			<td>get descrição</td>

		</tr>



		</table>



	<table>

		<tr>

			<td>

				Categoria

			</td>

			<td>

				IMC

			</td>

		</tr>

				<tr>

			<td>

				Abaixo do peso

			</td>

			<td>

				Abaixo de 18,5

			</td>

		</tr>

				<tr>

			<td>

				Peso normal

			</td>

			<td>

				18,5 - 24,9

			</td>

		</tr>

				<tr>

			<td>

				Sobrepeso

			</td>

			<td>

				 25 - 29,9

			</td>

		</tr>

				<tr>

			<td>

				Obesidade I

			</td>

			<td>

				 30 - 34,9

			</td>

		</tr>

				<tr>

			<td>

				Obesidade II

			</td>

			<td>

				 35 - 39,9

			</td>

		</tr>



				<tr>

			<td>

				Obesidade III

			</td>

			<td>

				 Acima de 40

			</td>

		</tr>





	</table>





    <input type="text" id="meu-input" />

    

</form>

</body>

</html>