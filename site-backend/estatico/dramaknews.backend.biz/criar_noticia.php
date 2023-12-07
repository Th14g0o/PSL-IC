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
            <h1>CRIAR NOTICIA</h1>

            <div class="container">
                <hr>
                <h2>TITULO DA NOTICIA</h2>
                <form method="post" action="criar_noticia_post.php">
                    <input type="text"  name="titulo"/>
                
                	<h2 class="afastamento">CONTEÚDO DA NOTICIA</h2>
                	<textarea type="text"  name="texto" minlength="10" maxlength="2000"></textarea><br/>
                    <input name='id_autor' hidden value='1'/>
<?php
					echo "<input name='id_autor' hidden value='". $_GET['id'] . "'/>";
?>
                    <hr>
                    <input type="submit" class="BtPadraoAnima" value="Criar noticia"/>		    
                </form>
                
            </div>
            <div class="botoes">
               
                <button>
					<?php echo "<a  class='BtPadraoAnima' href='minhas_noticias.php?id=".$_GET['id']."'>Voltar</a>"; ?>
                </button>
            </div>
        </section>
    </main>
	<footer>
        <h3>Drama K News</h3>
    </footer>
</body>
<html>



