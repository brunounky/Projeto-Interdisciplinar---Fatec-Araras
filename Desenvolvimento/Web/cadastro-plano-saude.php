<!DOCTYPE html>
<html lang="pt-br">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--===============================================================================================-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
             
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!--===============================================================================================-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
        <!--===============================================================================================-->
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!--===============================================================================================-->
            <link href="https://fonts.googleapis.com/css2?family=Molengo&display=swap" rel="stylesheet">
        <!--===============================================================================================-->
            <link rel="stylesheet" href="css/slider.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="css/util.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="css/main.css">
 
        <title>SoSCardio</title>
    </head>
    <body>
    <?php

$pdo=new PDO("mysql:host=localhost;dbname=soscardio","root");

if(isset($_POST[$getRecuperaDados[]])){
    $sql = $pdo->prepare("INSERT INTO logininicial VALUES (id,)");
    $sql->execute(array($_POST['nome'], $_POST['email'], $_POST['senha']));

    }

}

?>
        <div class="limiter"> 
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-info">                
                        <h1 id="register">Cadastrar</h1> 
                        <p class="adictional-informations">Informações complementares</p>
                        <p id="health-insurance">Possui Plano de Saude?</p>
                        <div class="contact100-form-checkbox2">
                            <div class="form-check form-check-inline">
                                <div>
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            </div>
                            <div>
                                <label class="form-check-label" for="inlineRadio1">Sim</label>
                            </div>
                        </div>
                            <div class="form-check form-check-inline">
                                <div>

                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                </div>
                                <div>
                                    <label class="form-check-label" for="inlineRadio2">Não</label> 
                                </div>
                                
                            </div>
                            </div>
                            <div class="menu-drop">
                                <button type="button" name="drop">Plano de Saúde</button>
                                <div class="drop-content">
                                    <a href="#">Allianz</a>
                                    <a href="#">Amil</a>
                                    <a href="#">Bradesco Saúde</a><a href="#">Caixa Saúde</a>     
                                    <a href="#">Golden Cross</a>
                                    <a href="#">Quality</a>
                                    <a href="#">Nossa Saúde</a>
                                    <a href="#">NotreDame Intermédica</a>
                                    <a href="#">Porto Seguro</a>
                                    <a href="#">Santa Helena</a>
                                    <a href="#">São Cristóvão</a>
                                    <a href="#">SulAmérica</a>
                                    <a href="#">São Francisco</a>
                                    <a href="#">São Luiz</a>
                                    <a href="#">Unimed</a>
                                </div>
                              </div>
                            <div class="container-login100-form-btn m-t-17">
                                
                                <button class="login100-form-btn">
                                PRÓXIMO
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>