<?php
include('context.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Drama K News</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="estilos/modelo.css" />
    <link rel="stylesheet" href="estilos/minhasNoticias.css" />
</head>
<body>
	<header>
        <h1>Drama K News</h1>
    </header>
<?php
$comando = "SELECT * FROM noticias";
$resultado =  mysqli_query($bd, $comando) or die(mysqli_error($bd));
?>
	<main>
        <section>
    
			<h1>NOTICIAS</h1>
			<a href='http://dramaknews.backend.biz' class="BtPadraoAnima">Logar</a>
			<?php
			while ($registro = mysqli_fetch_assoc($resultado) )
			{
				$autor_find = "SELECT nome FROM autores where id = " . $registro['id_autor']; 
				$autor_nome = mysqli_query ($bd, $autor_find) or die(mysqli_error($bd));
				while ($nome = mysqli_fetch_assoc($autor_nome)){$autor = $nome['nome'];}
				
				echo "<div class='Noticias'><a href='ver_noticia.php?id=" . $registro['id'] . "'>";
					echo "<h2>" . $registro['titulo'] . "</h2>";
					echo "<p>Por: " . $autor . "</p>";
				echo "</div></a><hr />";
				
			}
			?>

        </section>
    </main>
	<footer>
        <h3>Drama K News</h3>
    </footer>

</body>
<html>



