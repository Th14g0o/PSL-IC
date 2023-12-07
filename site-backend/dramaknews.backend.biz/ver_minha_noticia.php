<?php
include('context.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Drama K News</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="estilos/modelo.css" />
    <link rel="stylesheet" href="estilos/visualizar.css" />
</head>
<body>
	<header>
        <h1>Drama K News</h1>
    </header>
    <h1>CRIAR NOTICIA</h1>
	<main>
        <section>
<?php
$find_noticia = "SELECT * FROM noticias WHERE id = " . $_GET['id'];
$noticia = mysqli_query($bd, $find_noticia) or die(mysqli_error($bd));$find_autor = "SELECT * FROM autores WHERE id =" . $_GET['id'];
?>
<?php 
while($registro = mysqli_fetch_assoc($noticia))
{
	$find_autor = "SELECT nome, email FROM autores WHERE id = " . $registro['id_autor'];
	$autor = mysqli_query($bd, $find_autor) or die(mysqli_error($bd));
	while($nome_email = mysqli_fetch_assoc($autor))
	{ $nome = $nome_email['nome']; $email = $nome_email['email'];}
	
	echo "<div class='titulo'><h1>" . $registro['titulo'] . "</h1>";
	echo "<div class='contato'><span>Autor: " . $nome . "</span><br/><span>Email: " . $email . "</span></div></div>";
	echo "<div class='bloco'><hr/><p>" . $registro['texto'] . "</p><hr/><div class='bot'>";
	echo "<button><a class='BtPadraoAnima' href='editar_noticia.php?id=".$registro['id']."&id_autor=".$registro['id_autor']."'>Editar</a></button><button><a class='BtPadraoAnima' href='apagar_noticia.php?id=".$registro['id']."&id_autor=".$registro['id_autor']."'>Excluir</a></button><button><a   class='BtPadraoAnima' href='minhas_noticias.php?id=".$registro['id_autor']."'>Voltar</a></button></div></div>";
	
} 
?>
	   </section>
    </main>
	<footer>
        <h3>Drama K News</h3> 
    </footer>
</body>
<html>

