<?php
    include('conexao.php');
    $consulta = $con->prepare("CALL EXIBIR_DADOS_USUARIO();");
    $consulta->execute();         
?>
<html>
    <head></head>
    <body>
        <div style="display:flex; justify-content:center; font-size: 30px;">
            <a href="index.php" style="color: black; text-decoration: none;">Responder novamente</a>
        </div>
        <?php
            foreach($consulta as $postagem){
            ?>
        <div class="card" style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; border: black 1px solid;">
            <div class="profile" style="display: flex; flex-direction: column;">
                <img src="<?php echo $postagem['foto_perfil']; ?>" alt="">
                <b style="font: 10px; text-align:center">
                    <?php 
                        echo $postagem['nome'];
                    ?>
                </b>
            </div>
            <div class="content" style="padding-left: 5px;">
            <div class="card-body">
                respostas
                <div class="q1">
                    Quais pessoas você admira e quais competências ela tem? <br>
                    <?php
                        echo $postagem['quest1'];   
                    ?>
                </div>
                <div class="q2">
                    Práticas que recarregam a energia e te fazem bem <br>
                    <?php
                        echo $postagem['quest2'];   
                    ?>
                </div>
                <div class="q3">
                    Potências <br>
                    <?php
                        echo $postagem['quest3'];   
                    ?>
                </div>
                <div class="q4">
                    Habilidades e Competências <br>
                    <?php
                        echo $postagem['quest4'];   
                    ?>
                </div>
                <div class="q5">
                    "Caminhos de futuro"? <br>
                    <?php
                        echo $postagem['quest5'];   
                    ?>
                </div>
                <div class="q6">
                    Qual a sua causa? <br>
                    <?php
                        echo $postagem['quest6'];   
                    ?>
                </div>
                <div class="q7">
                    Qual é o seu território? <br>
                    <?php
                        echo $postagem['quest7'];   
                    ?>
                </div>
            </div>
            
            </div>
            
        </div>
        <?php
                }
                ?>
    </body>
</html>