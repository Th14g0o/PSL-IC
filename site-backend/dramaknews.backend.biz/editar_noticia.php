<?php
include('context.php');
$find_noticia = "SELECT  titulo, texto FROM noticias WHERE id=" . $_GET['id'];
$resultado = mysqli_query($bd, $find_noticia) or die(mysqli_error($bd));
while ($registro = mysqli_fetch_assoc($resultado))
{
	$texto = $registro['texto'];
	$titulo = $registro['titulo'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Drama K News</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="estilos/modelo.css" />
    <link rel="stylesheet" href="estilos/criarNoticias.css" />
  
</head>
<body>
	<header>
        <h1>Drama K News</h1>
    </header>
	<main>
        <section>
            <h1>EDITAR NOTICIA</h1>

            <div class="container">
                <hr>
                <h2>TITULO DA NOTICIA</h2>
                <form method="post" action="editar_noticia_post.php">
 
<?php
		
					echo "<input name='titulo' type='text' value='". $titulo . "'/><h2 class='afastamento'>CONTEÚDO DA NOTICIA</h2>";
					echo "<textarea name='texto' minlength='10' maxlength='2000'>".$texto."</textarea><br/>";
					echo "<input name='id' hidden value='". $_GET['id'] . "'/>";
					echo "<input name='id_autor' hidden value='". $_GET['id_autor'] . "'/>";
		
?>
                    <hr>
                    <input type="submit" class="BtPadraoAnima" value="Atualizar noticia"/>		    
                </form>
                
            </div>
            <div class="botoes">
               
                <button>
					<?php echo "<a  class='BtPadraoAnima' href='minhas_noticias.php?id=".$_GET['id_autor']."'>Voltar</a>"; ?>
                </button>
            </div>
        </section>
    </main>
	<footer>
        <h3>Drama K News</h3>
    </footer>
</body>
<html>



