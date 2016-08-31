<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contecti Decor</title>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php
$pagina = "";

if (isset($_GET["pagina"])) {
    if (empty($_GET['pagina'])) {
        $pagina = "pagina_404";
    } else {

        $pagina = $_GET["pagina"];
    }

} else {
    $pagina = "home";
}
//echo $pagina . '<br>';

$paginas_list = 'home,empresa,produtos,servicos,contato';
$pos = strripos($paginas_list, $pagina);

if ($pos === false) {
    //echo "pagina nao encontrada" . '<br>';
} else {
    //echo "encontramos a ($pagina)" . '<br>';
}
?>

<header id="header-internas">
    <nav id="navigation" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div id="brand" class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand">CONTECTI DECOR</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li <?php if ($pagina == 'home') {
                        echo "class='active'";
                    } ?>><a href="?pagina=home">Home</a></li>
                    <li <?php if ($pagina == 'empresa') {
                        echo "class='active'";
                    } ?>><a href="?pagina=empresa">Empresa</a></li>
                    <li <?php if ($pagina == 'produtos') {
                        echo "class='active'";
                    } ?>><a href="?pagina=produtos">Produtos</a></li>
                    <li <?php if ($pagina == 'servicos') {
                        echo "class='active'";
                    } ?>><a href="?pagina=servicos">Servi&ccedil;os</a></li>
                    <li <?php if ($pagina == 'contato') {
                        echo "class='active'";
                    } ?>><a href="?pagina=contato">Contato</a></li>
                </ul>
            </div>

        </div>
    </nav>
</header>


<section>
    <div class="container">
        <div class="">
            <h1>DECORA&Ccedil;&Atilde;O CORPORATIVA</h1>

            <p>Mussum Ipsum, cacilds vidis litro abertis. Manduma pindureta quium dia nois paga. in elementis m&eacute;
                pra quem &eacute; amistosis quis leo. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet.
                Sed non consequat odio. Detraxit consequat et quo num tendi nada.</p>

            <p>Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Viva Forevis
                aptent taciti sociosqu ad litora torquent Per aumento de cachacis, eu reclamis. Praesent malesuada urna
                nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.</p>

            <p>Em p&eacute; sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose. M&eacute; faiz elementum
                girarzis, nisi eros vermeio. Todo mundo v&ecirc; os porris que eu tomo, mas ningu&eacute;m v&ecirc; os
                tombis que eu levo! Diuretics paradis num copo &eacute; motivis de denguis.&nbsp;</p>

            <p>Mussum Ipsum, cacilds vidis litro abertis. Manduma pindureta quium dia nois paga. in elementis m&eacute;
                pra quem &eacute; amistosis quis leo. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet.
                Sed non consequat odio. Detraxit consequat et quo num tendi nada.</p>

            <p>Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Viva Forevis
                aptent taciti sociosqu ad litora torquent Per aumento de cachacis, eu reclamis. Praesent malesuada urna
                nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.</p>

            <p>Em p&eacute; sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose. M&eacute; faiz elementum
                girarzis, nisi eros vermeio. Todo mundo v&ecirc; os porris que eu tomo, mas ningu&eacute;m v&ecirc; os
                tombis que eu levo! Diuretics paradis num copo &eacute; motivis de denguis.&nbsp;</p>

            <p>
                <a class="btn btn-lg btn-primary" href="?pagina=contato" role="button">CONTATAR AGORA
                    &nbsp;&raquo;</a>
            </p>

            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="assets/img/moveis-corporativos-6.jpg" alt="...">

                        <div class="caption">
                            <h3>Thumbnail label</h3>

                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="assets/img/espac3a7o_zen.jpg" alt="...">

                        <div class="caption">
                            <h3>Thumbnail label</h3>

                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="assets/img/01637_02.jpg" alt="...">

                        <div class="caption">
                            <h3>Thumbnail label</h3>

                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<footer>
    <div class="container footer">
        <div class="row text-center">
            <h2 class="titulo">CONTECTI DECOR</h2>

            <p class="p">Contecti Decor - Decora&ccedil;&otilde;es e montagem de imobiliarios corporativos</p>
            <smal class="smal">Todos os direitos reservados - <?php echo urlEncode(date("Y")); ?></smal>
        </div>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>