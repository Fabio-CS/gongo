<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="description" content="texto de descri&ccedil;&atilde;o do site">
        <!-- ===================== metatags ===================== -->
        <meta charset="utf-8">
        <meta http-equiv="cache-control" content="no-cache">
        <meta http-equiv="pragma" content="no-cache">
        <!-- ===================== css ===================== -->
        <link rel="stylesheet" href="css/layout.css" type="text/css">
        <!-- ===================== scripts ===================== -->
        <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
        <!-- ===================== favicon ===================== -->
        <link href=img/favicon.ico rel="shortcut icon" />
        <!-- ===================== Head ===================== -->
        <title>Gongo</title>
        <script type="text/javascript">
        </script>
    </head>
    <body>
        <div id="header">
            <div id="div_logo">
                <div>
                    <img src="img/logo.png" alt="Logotipo Gongo">
                </div>
            </div>    
        </div>
        <div id="div_menu">
            <ul>
                <li class="first"><a href="#header">Home</a></li>
                <li><a href="#portfolio">Portf&oacute;lio</a></li>
                <li><a href="#servicos">Servi&ccedil;os</a></li>
                <li><a href="#combos">Combos</a></li>
                <li><a href="#quem_somos">Quem Somos</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </div>
        <div id="div_home">
            <h5>A Gongo</h5>
            <p>
                A Gongo Design e Comunicação é uma agência que alia planejamento, marketing estratégico e ações criativas de desenvolvimento para assim formar grandes marcas,
                de forma estruturada e objetiva. Nossos projetos são desenvolvidos por uma equipe multidisciplinar que trabalha para resolver a necessidade de design e comunicação
                visual dos clientes de forma criativa e inteligente, proporcionando experiências envolventes e criando conexões para comunicar e engajar o público-alvo.
            </p>
        </div>
        <?php include 'portfolio.php' ?>
        <?php include 'servicos.php' ?>
        <?php include 'quem_somos.php' ?>
        <?php include 'cabe_bolso.php' ?>
        <?php include 'combo.php' ?>
    </body>
</html>