<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Luciano Xerox | A maior Loja de Fotocópias da Paraíba</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/icomoon-fonts.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="css/zerogrid.css">
    <link rel="stylesheet" type="text/css" href="css/jPushMenu.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:100,200,300,400%7COpen+Sans:400,300' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/onepage.css">
    <link rel="stylesheet" type="text/css" href="css/one-color.css">

    <link rel="stylesheet" type="text/css" href="css/loader-colorful.css">
    <link rel="stylesheet" type="text/css" href="css/sweetalert2-6.1.0.min.css">
    <link rel="stylesheet" type="text/css" href="css/dropzone.service.css">
    <link rel="stylesheet" type="text/css" href="css/style-dropzone.css">
    <link rel="shortcut icon" href="images/favicon.png">


</head>

<body id="page-top" data-spy="scroll" data-target="#fixed-collapse-navbar" data-offset="120">

<div class="loader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>


<!-- Main-Navigation -->
<header id="main-navigation">
    <div id="navigation" data-spy="affix" data-offset-top="20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="top-right text-right">
                        <li><a href="http://www.facebook.com/lojalucianoxerox" class="facebook"><i
                                        class="fa fa-facebook"></i></a></li>
                        <li><a href="http://twitter.com/lxerox" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="http://www.instagram.com/lucianoxerox" class="instagram"><i
                                        class="icon-instagram"></i></a></li>
                    </ul>

                    <nav class="navbar navbar-default">
                        <div class="navbar-header page-scroll">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#fixed-collapse-navbar" aria-expanded="true">
                                <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span
                                        class="icon-bar bottom-bar"></span>
                            </button>
                            <a class="navbar-brand logo" href="#."><img src="images/logo-white.png" alt="logo"
                                                                        class="img-responsive"></a>
                        </div>


                        <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li class="hidden">
                                    <a class="page-scroll" href="#page-top"></a>
                                </li>
                                <li class="active">
                                    <a href="#main-slider" class="page-scroll">Início</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#bg-paralax">Quem Somos</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#thinkers">Filiais</a>
                                </li>
                                <li>
                                    <a href="#about" class="page-scroll">Serviços</a>
                                </li>
                                <li>
                                    <a href="#findus" class="page-scroll">Encontre-nos</a>
                                </li>
                                <a href="#file-email" class="btn-common btn-navy-blue bounce-yellow page-scroll">Envie
                                    um
                                    arquivo</a>
                            </ul>


                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>


<section id="main-slider">

    <div class="tp-banner-container">
        <div class="fullscreenbanner tp-banner">
            <ul>  <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="6" data-delay="10000">
                    <!-- MAIN IMAGE -->
                    <img src="images/lx-main-banner1.jpg" alt="slidebg1" data-bgfit="cover"
                         data-bgposition="center center">


                    <h2 class="tp-caption sft tp-resizeme text-center"
                        data-x="center"
                        data-y="230"
                        data-speed="500"
                        data-start="1500"
                        data-easing="Power3.easeInOut"
                        data-elementdelay="0.05"
                        data-endelementdelay="0.1"
                        style="z-index: 9;">
                        A maior loja de fotocópias <br> da Paraíba</h2>
                </li>
            </ul>
        </div>
    </div>
</section>


<!-- Área de envio de arquivo -->
<section class="section-padding section-padding-bottom info-section light" id="file-email">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center wow fadeIn">
                <h2 id="try-it-out" class="heading">Envie seu arquivo para Impressão</h2>

                <div id="dropzone">

                    <div id="demo-upload" class="dropzone needsclick">
                        {!! Form::hidden('route', route('upload-files'), ['id'=>'route_upload']) !!}
                        {{ csrf_field() }}

                        <div class="dz-message needsclick">
                            Arraste e solte arquivos nesta área ou clique para carregar.<br/>
                            <span class="note needsclick">(Tamanho máximo <strong>20MB</strong>.)</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="">

                    <div class="form-inline">
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                            <textarea placeholder="Mensagem..." class="form-control-area .info-file" name="message"
                                      id="message"
                                      required></textarea>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <input type="text" class="form-control-area .info-file"
                                       placeholder="Telefone / E-mail / Facebook"
                                       name="contact" id="contact" required>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <button href="javascript:;" class="btn-black btn-navy-blue bounce-yellow" id="send">
                                    Enviar
                                    Mensagem
                                </button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


    </div>
</section>


<!--What We Offer-->
<section class="section-padding" id="about">t
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
                <!-- <p class="title">Nossos serviços de valor</p> -->
                <h2 class="heading">Nossos Serviços</h2>
            </div>

            <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms"
                 data-wow-delay="300ms">
                <span class="text-center"><i class="icon-copy color7"></i></span>
                <h4 class="color7">Xerox</h4>
                <p>Xerografia Mono e Colorida</p>
            </div>
            <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms"
                 data-wow-delay="500ms">
                <span class="text-center"><i class="icon2-print color8"></i></span>
                <h4 class="color8">Impressão a Laser</h4>
                <p>Impressões Mono e Colorida</p>
            </div>
            <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms"
                 data-wow-delay="700ms">
                <span class="text-center"><i class="icon2-line-image color7"></i></span>
                <h4 class="color7">Plotagem</h4>
                <p>Impressão de desenhos em largas escalas</p>
            </div>
            <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms"
                 data-wow-delay="900ms">
                <span class="text-center"><i class="icon2-line-map  color8"></i></span>
                <h4 class="color8">Cópias de Projetos</h4>
                <p>Cópias de projetos de engenharia, arquitetura e mecânica</p>
            </div>
            <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms"
                 data-wow-delay="1100ms">
                <span class="text-center"><i class="icon2-line-maximize color7"></i></span>
                <h4 class="color7">Digitalização em Grandes Formatos</h4>
                <p>Trabalhamos com os mais diversos formatos</p>
            </div>
            <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms"
                 data-wow-delay="1200ms">
                <span class="text-center"><i class="icon2-line-layers color8"></i></span>
                <h4 class="color8">Plastificação</h4>
                <p>Plastificação de documentos; Plastificação de cardápios</p>
            </div>
            <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms"
                 data-wow-delay="1200ms">
                <span class="text-center"><i class="icon2-line2-notebook color7"></i></span>
                <!-- <span class="text-center"><i class="icon-book color6"></i></span> -->
                <h4 class="color7">Encadernação Espiral e Capa Dura</h4>
                <p>Encadernação de Livros; Cadernões para Colégio</p>
            </div>
            <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms"
                 data-wow-delay="1200ms">
                <span class="text-center"><i class="icon-book color8"></i></span>
                <h4 class="color8">Papelaria</h4>
                <p>Materiais Escolares em geral</p>
            </div>
            <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms"
                 data-wow-delay="1200ms">
                <span class="text-center"><i class="icon2-email3 color7"></i></span>
                <h4 class="color7">Serviços em Informática</h4>
                <p>Digitalização de Processos;
                    Envio e recebimento de e-mail;
                    Impressões via Internet</p>
            </div>

        </div>
    </div>
</section>


<!-- Paralax Effect Section -->
<div style="position:relative;" class="top-padding">
    <section id="bg-paralax">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <!-- <p>Unleash your creative potential with BizOne</p> -->
                    <h2 class="magin30">Quem Somos</h2>

                    <!-- <a class="btn-green btn-common bounce-top page-scroll" href="#letstalk">Let's Talk</a> -->
                    <p>
                        Em maio de 1995, há pouco mais de vinte anos, começando a viver uma grande revolução na educação
                        superior e secundarista, com o aumento dos cursos universitários e abertura de novos colégios,
                        Cajazeiras recebia um empreendimento no ramo de fotocópias pelas mãos de <strong>Luciano
                            Oliveira</strong> e sua esposa, <strong>Ana Beatriz</strong>. Nascia naquele mês a empresa
                        Luciano Xerox, com um número reduzido de máquinas, mas que pouco depois ganhou o slogan de
                        <strong>“A Maior Loja de Fotocópias da Paraíba”</strong> por conta dos investimentos constantes
                        em equipamentos e tecnologia, sempre oferecendo o melhor para a clientela cada vez mais
                        crescente.
                    </p>
                    <p>
                        Instalada desde o início nas proximidades do DETRAN, à Rua Sebastião Bandeira de Melo, no centro
                        da cidade, para atender ao grande fluxo de usuários daquele órgão. Luciano Xerox tem pontos de
                        atendimento no Campus da Universidade Federal de Campina Grande (UFCG), na Faculdade de
                        Filosofia, Ciências e Letras de Cajazeiras (FAFIC) e na Faculdade São Francisco da Paraíba
                        (FASP), mantendo a mesma filosofia de trabalho, sempre com a melhor qualidade em fotocópias e
                        impressões em grande formato e no atendimento qualificado por parte das funcionárias.
                    </p>
                    <p>
                        Na celebração de 20 anos, Luciano Oliveira disse: “Celebramos esses vinte anos com cada cliente
                        que nos acompanha desde o nascimento da empresa e aos que vamos conquistando no dia a dia, sem
                        nunca esquecer que somos prestadores de serviço e, por isso, temos sempre que atender às
                        necessidades a quem nos procura, seja para uma simples fotocópia de documento para trabalhos
                        maiores e mais complexos”.

                    </p>
                    <p>
                        Ana Beatriz, por sua vez, ressalta o fato de que o segredo do crescimento da empresa, hoje com
                        três filiais, está em atender bem aos clientes, com responsabilidade e pontualidade,
                        solucionando os serviços no tempo mais rápido possível.
                    </p>
                    <p>

                    </p>


                </div>
            </div>
        </div>
    </section>

</div>


<!-- Responsive image with left -->
<section id="responsive" class="top-padding">
    <div class="container-fluid">
        <div class="row responsive-pic">
            <div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="600ms">
                <img src="images/equipe.jpg" alt="fully responsive" class="img-responsive">
            </div>
            <div class="container wow fadeInRight" data-wow-duration="500ms" data-wow-delay="900ms">
                <div class="row">
                    <div class="col-md-6 col-sm-6 r-test">
                        <h3 class="magin30">Nossa Equipe</h3>
                        <p>Temos uma equipe diferenciada, formada integralmente por mulheres altamente qualificadas para
                            receber o seu serviço e executá-lo com excelência</p>
                        <h4>Nossas qualidades</h4>
                        <ul class="r-feature">
                            <li>Pontualidade</li>
                            <li>Responsabilidade</li>
                            <li>Agilidade</li>
                            <li>Eficiência</li>


                        </ul>
                        <!-- <div class="screens"> <i class="icon-laptop2"></i> <i class="icon-tablet2"></i> <i class="icon-icons202"></i> </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- What We Do Section -->
<section class="we-do bg-grey padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn">
                <!-- <p class="title">Para Nossos Clientes</p> -->
                <h2 class="heading">Nosso diferencial</h2>
            </div>

            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                <div class="do-wrap text-center">
                    <div class="dark_gray top"></div>
                    <span class="dark_gray"><i class="icon2-news"></i></span>
                    <h4>Xerografia de Grande Porte</h4>
                    <p>Trabalhamos com os mais diversos tamanhos</p>
                    <a href="#." class="readmore"></a></div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
                <div class="do-wrap text-center">
                    <div class="blue top"></div>
                    <span class="blue"><i class="icon2-star2"></i></span>
                    <h4>Qualidade Profissional</h4>
                    <p>Faz sua cópia ficar melhor que a original</p>
                    <a href="#." class="readmore"></a></div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="900ms">
                <div class="do-wrap text-center">
                    <div class="dark_gray top"></div>
                    <span class="dark_gray"> <i class="icon2-line-cloud-upload"></i></span>
                    <h4>Impressão Via Internet</h4>
                    <p>Solicitação de impressões para a sua comodidade</p>
                    <a href="#." class="readmore"></a></div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="1200ms">
                <div class="do-wrap text-center">
                    <div class="blue top"></div>
                    <span class="blue"><i class="icon2-wifi-full"></i></span>
                    <h4>Wi-fi grátis</h4>
                    <p>Basta fazer um Check In em Nosso Facebook</p>
                    <a href="#." class="readmore"></a></div>
            </div>

        </div>
    </div>
</section>


<!-- Creative Thinker -->
<section id="thinkers" class="section-padding padding-botom">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 wow fadeIn">
                <!-- <p class="title">Passionate about perfection</p> -->
                <h2 class="heading">Nossas Filiais</h2>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInUp zoomIn" data-wow-duration="500ms" data-wow-delay="300ms">
                <div class="thinker-wrap">
                    <div class="thinker-image">
                        <img src="images/thinker-fafic.jpg" alt="Filial FAFIC" class="img-responsive">
                        <div class="overlay">
                            <div class="overlay-inner">
                                <ul class="social-link">
                                    <li>
                                        <a href="http://www.facebook.com/pages/Luciano-Xerox-Filial-FAFIC/1596612280656167"
                                           class="text-center"><i class="fa fa-facebook"></i><span></span></a></li>
                                    <!--  <li><a href="#." class="text-center"><i class="fa fa-twitter"></i><span></span></a></li>
                                    <li><a href="#." class="text-center"><i class="icon-instagram"></i><span></span></a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h3>FAFIC</h3>
                    <small>Filial</small>
                    <p>Rua Pe. Ibiapina, S/N - Centro, Cajazeiras - PB, 58900-000 </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 wow fadeInUp zoomIn" data-wow-duration="500ms" data-wow-delay="600ms">
                <div class="thinker-wrap">
                    <div class="thinker-image">
                        <img src="images/thinker-ufcg.jpg" alt="Filial UFCG" class="img-responsive">
                        <div class="overlay yellow">
                            <div class="overlay-inner">
                                <ul class="social-link">
                                    <li>
                                        <a href="http://www.facebook.com/pages/Luciano-Xerox-Filial-UFCG/226501451047210"
                                           class="text-center"><i class="fa fa-facebook"></i><span></span></a></li>
                                    <!-- <li><a href="#." class="text-center"><i class="fa fa-twitter"></i><span></span></a></li>
                                    <li><a href="#." class="text-center"><i class="icon-instagram"></i><span></span></a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h3>UFCG</h3>
                    <small>Filial</small>
                    <p>Rua Sérgio Moreira de Figueirêdo, S/N - Casas Populares, Cajazeiras - PB, 58900-000 </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 wow fadeInUp zoomIn" data-wow-duration="500ms" data-wow-delay="900ms">
                <div class="thinker-wrap">
                    <div class="thinker-image">
                        <img src="images/thinker-fasp.jpg" alt="FILIAL FASP" class="img-responsive">
                        <div class="overlay">
                            <div class="overlay-inner">
                                <ul class="social-link">
                                    <li>
                                        <a href="http://www.facebook.com/pages/Luciano-Xerox-Filial-FASP/607822786042776"
                                           class="text-center"><i class="fa fa-facebook"></i><span></span></a></li>
                                    <!-- <li><a href="#." class="text-center"><i class="fa fa-twitter"></i><span></span></a></li>
                                    <li><a href="#." class="text-center"><i class="icon-instagram"></i><span></span></a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h3>FASP</h3>
                    <small>Filial</small>
                    <p>Av. Cajazeiras, 393 - Distrito Industrial, Cajazeiras - PB, 58900-000</p>
                </div>
            </div>


        </div>
    </div>
</section>


<!-- Testinomials -->
<div style="position:relative;">
    <section id="testinomial" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <!-- <p class="title">Pessoas que Amam o Nosso Trabalho</p> -->
                    <p class="title">Visite nossa página do facebook e deixe-nos uma avaliação</p>
                    <h2 class="heading">Nossos Clientes Felizes</h2>
                    <div id="testinomial-slider" class="owl-carousel">

                        @foreach($data_ratings as $rating)
                            @if ($rating["has_review"] && $rating["has_rating"])
                            <div class="item">
                                <p>{{$rating["review_text"]}}</p>
                                <h5>{{$rating["reviewer"]["name"]}}</h5>
                                <div class="rating-list">
                                    <div class="rl-star">
                                        @for($cont = 1; $cont <= 5; $cont++)
                                            <i class="zmdi icon2-star3 {{$cont<=$rating["rating"]?"active": ""}}"></i>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<!-- Find Us -->
<section class="info-section" id="findus">
    <div class="row">
        <div class="col-md-6 block text-center wow fadeInLeftBig" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="center">
                <!-- <p class="title">Open for you</p> -->
                <h2>Estamos Aqui</h2>
                <!-- <p class="margen">Keep away from people who try to belittle your ambitions Small people always do that but the really great Friendly.</p> -->
                <p><strong>Endereço:</strong> Rua Sebastião Bandeira de Melo, 242 - Centro, Cajazeiras-PB 58900-000</p>
                <p><strong>Telefone:</strong> (83) 3531-6496</p>
                <p><strong>E-mail:</strong> <a href="#."> llxerox@yahoo.com.br </a></p>
                <ul class="social-link">
                    <li><a href="http://www.facebook.com/lojalucianoxerox" class="text-center"><i
                                    class="fa fa-facebook"></i><span></span></a></li>
                    <li><a href="http://twitter.com/lxerox" class="text-center"><i
                                    class="fa fa-twitter"></i><span></span></a></li>
                    <!-- <li><a href="#." class="text-center"><i class="fa fa-dribbble"></i><span></span></a></li> -->
                    <!-- <li><a href="#." class="text-center"><i class="fa fa-flickr"></i><span></span></a></li> -->
                    <li><a href="http://www.instagram.com/lucianoxerox" class="text-center"><i
                                    class="fa fa-instagram"></i><span></span></a></li>

                </ul>
            </div>
        </div>
        <div class="col-md-6 block light text-center wow fadeInRightBig" data-wow-duration="500ms"
             data-wow-delay="300ms">

            <div class="center">
                <!-- <p class="title">With propositions</p> -->
                <h2>Encontre-nos</h2>

                <!-- <div class="block"> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15844.016249225757!2d-38.5599607!3d-6.8901156!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb9e963735f6bf88a!2sLuciano+Xerox!5e0!3m2!1spt-BR!2sbr!4v1436529508647"
                        width=100% height=100% frameborder="0" style="border:0" allowfullscreen></iframe>
                <!-- </div> -->

            </div>

        </div>

    </div>
</section>

<!-- Footer-->
<footer class=" wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="breadcrumb">
                    <!-- <li><a href="#." class="page-scroll">Home</a></li> -->
                    <li><a href="#bg-paralax" class="page-scroll">Quem Somos</a></li>
                    <li><a href="#thinkers" class="page-scroll">Filiais</a></li>
                    <li><a href="#about" class="page-scroll">Serviços</a></li>
                    <li><a href="#findus" class="page-scroll">Contate-nos</a></li>
                    <li><a href="#file-email" class="page-scroll">Envie um arquivo</a></li>
                </ul>
                <p>Copyright &copy; 2016 Luciano Xerox. Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer>


<a href="#." class="go-top text-center"><i class="fa fa-angle-double-up"></i></a>

<script src="js/lx.js"></script>


</body>
</html>
