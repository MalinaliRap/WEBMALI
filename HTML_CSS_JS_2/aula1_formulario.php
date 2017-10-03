<?php
	include('componentes/head.php');
	include('componentes/header.php');
	
	
	//vetor - grupo de variaveis
	/*$predio = array(
		'1'=>'Almeida',
		'2'=>'Silva',
		'3'=>'Oliveira',
		'4'=>'Cunha'
	);
	
	echo $predio['3'];*/
	
?>
	
	<form action='' method="post">
		<div class='form-group'>
			Nome: <input type="text" class='required' name="aluno">
		</div>
		<div class='form-group'>
			Senha: <input type="password" class='required' name="senha">
		</div>
		<div class='form-group'>
			Cidade: <select name="cidade">
							<option value="0">Ponta Grossa</option>
							<option value="2">Curitiba</option>
							<option value="3">Carambeí</option>
						</select>
		</div>
		<div class='form-group'>			
			Sexo: <input type="radio" name="sex" value="male" checked> Masculino 
				  <input type="radio" name="sex" value="female"> Feminino <br>
	    </div>
		<div class='form-group'>
			Veículo: <input type="checkbox" name="vehicle1" value="Bike"> Bike 
					 <input type="checkbox" name="vehicle2" value="Car"> Carro
        </div>
		<div class='form-group'>
			Frequência na semana: 
			<input type="number" name="frequencia" min="1" class='required' max="5"> <br>    
        </div>
		<div class='form-group'>
			Nascimento: <input type="date" name="nascimento">
		</div>
		<div class='form-group'>
			Nota: <input type="range" name="nota" min="0" max="10"> <br>
		</div>
		<div class='form-submit'>
			<input type="submit" value="Enviar">
		</div>
	</form>
<?php
	include('componentes/footer.php');
?>