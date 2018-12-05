<?php

$PDO = new PDO("pgsql:user=natallia;dbname=sistema;password=nmp123;host=localhost");

	$sql = $PDO->prepare("SELECT * FROM clientes");
	$sql->execute();
	$equipamentos = $sql->fetchAll(); // Capturo os dados do sql
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
    
	<body>
				<table width="100%" border="1">
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Tipo Equipamento</th>
					<th>Tempo de Uso</th>
					<th>Garantia</th>
					<th>Data Início Garantica</th>
					<th>Data Fim Garantia</th>
					<th>Status</th>
				</tr>
				<?php
					foreach ($equipamentos as $equi)
					{
						?>
						<tr>
							<td><?=$equi["id"]?></td>
							<td><?=$equi["nome"]?></td>
							<td><?=$equi["marca"]?></td>
							<td><?=$equi["modelo"]?></td>
							<td><?=$equi["tipo_equipamento"]?></td>
							<td><?=$equi["tempo_uso"]?></td>
							<td><?=$cli["garantia"]?></td>
							<td><?=$cli["data_inicio_garantia"]?></td>
							<td><?=$cli["data_fim_garantia"]?></td>
							<td><?=$cli["status"]?></td>
						</tr>
						<?php						
					}
				?>				
				</table>
	</body>
</html>