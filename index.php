<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css"> 
        <title>Projeto Final PHP Poo</title>
    </head>
    <body>
        <div id = "interface">
            <header id ="cabecalho">
            	<hgroup>
                    <h1>Site Projeto Final</h1>
                        <h2>POO em PHP</h2>
		</hgroup>						
            </header>
            <pre>
            <?php
                //Programa principal
                require_once 'Video.php';
                require_once 'Usuario.php';
                require_once 'Visualizacao.php';
                
                $v[0] = new Video("PHP");
                $v[1] = new Video("POO");
                $v[2] = new Video("HTML5");
                $u[0] = new Usuario("jubileu123", "Jubileu", 20, "m");
                $u[1] = new Usuario("jani_xxx", "Janice", 19, "f");
                $vl[0] = new Visualizacao($u[0],$v[0]);
                $vl[1] = new Visualizacao($u[1],$v[2]);
                $vl[2] = new Visualizacao($u[0],$v[2]);
                
                $vl[0]->avaliarLike();
                $vl[1]->avaliarNota(10);
                $vl[2]->avaliarPorc(50);
                
                
                for($x=0;$x< count($u);$x++){
                    $u[$x]->status();
                }
                
                for($x=0;$x< count($v);$x++){
                    $v[$x]->status();
                }
                
                
                
                
                
                
                
            ?>
            </pre>
            <footer id= "rodape">
			<p>2020 - by Leandro Marson Ribeiro<br>
            </footer> 
        </div>    
    </body>
</html>