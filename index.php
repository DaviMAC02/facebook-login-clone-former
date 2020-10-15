<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" 
      type="image/png" 
      href="img/icone.png">
    <title>Entrar no Facebook | Facebook</title>
</head>

<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>facebook</h2>
            </div>
            <form method="POST" class="form-login">
                <div class="form-element">
                    <p>E-mail ou telefone</p>
                    <input type="email">
                </div>

                <div class="form-element">
                    <p>Senha:</p>
                    <input type="password">
                </div>

                <div class="form-element">
                    <input type="submit" name="acao" value="Entrar">
                </div>
            </form>
            <div class="clear"></div>
        </div>
    </header>

    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <img src="img/img01.png" alt="">
            </div>

            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
                <h3>É gratuito e sempre será!</h3>

                <form action="" method="POST" class="create-account">
                    <div class="w50">
                        <input type="text" placeholder="Nome">
                    </div>

                    <div class="w50">
                        <input type="text" placeholder="Sobrenome">
                    </div>

                    <div class="w100">
                        <input type="email" placeholder="E-mail">
                    </div>

                    <div class="w100">
                        <input type="password" placeholder="Senha">
                    </div>


                    <div class="w100">
                        <h2>Data de Nascimento</h2>
                        <select class="nascimento" name="nascDia">
                            <?php 
                                for($i = 1; $i <= 31; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i ?></option>
                                <?php }?>
                        </select>

                        <select class="nascimento" name="nascMes">
                            <option value="1">Janeiro</option>
                            <option value="2">Fevereiro</option>
                            <option value="3">Março</option>
                            <option value="4">Abril</option>
                            <option value="5">Maio</option>
                            <option value="6">Junho</option>
                            <option value="7">Julho</option>
                            <option value="8">Agosto</option>
                            <option value="9">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>

                        <select class="nascimento" name="nascDia">
                            <?php 
                                for($i = 1920; $i <= 2020; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i ?></option>
                                <?php }?>
                        </select>
                        <div class="clear"></div>
                    </div>

                    <div class="w100">
                        <div class="input-radio">
                            <h2>Masculino</h2>
                           <input type="radio" name="sexo" value="masculino">
                        </div>

                        <div class="input-radio">
                            <h2>Feminino</h2>
                           <input type="radio" name="sexo" value="feminino">
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastre-se">
                    </div>

                    <div class="clear"></div>
                </form>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <section class="linguas">
        <div class="center">
            <a class="selected-lingua" href="">Português (BR)</a>
            <a href="">English (US)</a>
            <a href="">Español</a>
            <a href="">Français (France)</a>
            <a href="">Italiano</a>
            <a href="">العربية</a>
            <a href="">Deutsch</a>
            <a href="">हिन्दी</a>
            <a href="">中文(简体)</a>
            <a href="">日本語</a>
        </div>

        <div class="center" style="border:0; padding-top:10px;">
            <a href="">Lorem Ipsum</a>
            <a href="">Lorem Ipsum</a>
            <a href="">Lorem Ipsum</a>
            <a href="">Lorem Ipsum</a>
            <a href="">Lorem Ipsum</a>
            <a href="">Lorem Ipsum</a>
            <a href="">Lorem Ipsum</a>
            <a href="">Lorem Ipsum</a>
            <a href="">Lorem Ipsum</a>
            <a href="">Lorem Ipsum</a>
            <a href="">Lorem Ipsum</a>
            <a href="">Lorem Ipsum</a>
            <a href="">Lorem Ipsum</a>
            <a href="">Lorem Ipsum</a>
            <a href="">Lorem Ipsum</a>
            <a href="">Lorem Ipsum</a>
            <a href="">Lorem Ipsum</a>
            <a href="">Lorem Ipsum</a>
            <a href="">Lorem Ipsum</a>
        </div>

        
    </section>
</body>

</html>