<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <title>Luciano Cópias | Excelência em Resultados</title>
        <link rel="shortcut icon" href="images/favicon.png">
        <link href='https://fonts.googleapis.com/css?family=Raleway:100,200,300,400%7COpen+Sans:400,300' rel='stylesheet'
              type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/lcep.css">


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
                                <li><a href="http://www.facebook.com/lucianocopiasepapelaria" class="facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="http://twitter.com/lucianocopias" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="http://www.instagram.com/lucianocopias" class="instagram"><i
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
                                            <a class="page-scroll" href="#bg-paralax">A Marca</a>
                                        </li>                                       
                                        <li>
                                            <a href="#about" class="page-scroll">Serviços</a>
                                        </li>
                                        <li>
                                            <a href="#findus" class="page-scroll">Encontre-nos</a>
                                        </li>
                                        <a href="#file-email" class="btn-common btn-navy-dark-red bounce-red page-scroll">Envie
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
                        <li  data-transition="fade" data-slotamount="6" data-delay="10000">
                            <!-- MAIN IMAGE -->


                            <img src="images/lc-main-banner-portrait.png" alt="Logo Luciano Cópias" data-bgfit="cover"
                                 data-bgposition="center center">

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
                                        <button href="javascript:;" class="btn-black btn-navy-dark-red bounce-red" id="send">
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
                        <span class="text-center"><i class="icon-copy color10"></i></span>
                        <h4 class="color10">Fotocópia</h4>
                        <p>Fotocópia Mono e Colorida</p>
                    </div>
                    <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms"
                         data-wow-delay="500ms">
                        <span class="text-center"><i class="icon2-print color9"></i></span>
                        <h4 class="color9">Impressão a Laser</h4>
                        <p>Impressões Mono e Colorida</p>
                    </div>
                    <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms"
                         data-wow-delay="700ms">
                        <span class="text-center"><i class="icon2-line-image color10"></i></span>
                        <h4 class="color10">Plotagem</h4>
                        <p>Impressão de desenhos em largas escalas</p>
                    </div>
                    <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms"
                         data-wow-delay="900ms">
                        <span class="text-center"><i class="icon2-line-map  color9"></i></span>
                        <h4 class="color9">Cópias de Projetos</h4>
                        <p>Cópias de projetos de engenharia, arquitetura e mecânica</p>
                    </div>
                    <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms"
                         data-wow-delay="1100ms">
                        <span class="text-center"><i class="icon2-line-maximize color10"></i></span>
                        <h4 class="color10">Digitalização em Grandes Formatos</h4>
                        <p>Trabalhamos com os mais diversos formatos</p>
                    </div>
                    <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms"
                         data-wow-delay="1200ms">
                        <span class="text-center"><i class="icon2-line-layers color9"></i></span>
                        <h4 class="color9">Plastificação</h4>
                        <p>Plastificação de documentos; Plastificação de cardápios</p>
                    </div>
                    <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms"
                         data-wow-delay="1200ms">
                        <span class="text-center"><i class="icon2-line2-notebook color10"></i></span>
                        <!-- <span class="text-center"><i class="icon-book color6"></i></span> -->
                        <h4 class="color10">Encadernação Espiral e Capa Dura</h4>
                        <p>Encadernação de Livros; Cadernões para Colégio</p>
                    </div>
                    <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms"
                         data-wow-delay="1200ms">
                        <span class="text-center"><i class="icon-book color9"></i></span>
                        <h4 class="color9">Papelaria</h4>
                        <p>Materiais Escolares em geral</p>
                    </div>
                    <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms"
                         data-wow-delay="1200ms">
                        <span class="text-center"><i class="icon2-email3 color10"></i></span>
                        <h4 class="color10">Serviços em Informática</h4>
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
                            <h2 class="magin30">Uma Nova Imagem, a Mesma Marca</h2>
                            <p>
                                Nossa empresa vivencia mais um momento histórico. Dentro da proposta de reposicionamento da nossa comunicação, apresentamos um novo logo.
                            </p>
                            <p>
                                Esta nova proposta de comunicação visual chega em um momento especial, no qual Luciano Cópias e Papelaria passa por uma renovação completa.
                            </p>
                            <p>
                                Trata-se de uma nova imagem, mas a marca de tradição, respeito, credibilidade, eficiência, tecnologia, qualidade, inovação, permanecem vivas e em constante evolução.

                            </p>
                            <p>
                                A nova marca poderá ser vista na empresa, nas viaturas, nas fachadas, nas comunicações, nas mídias eletrônicas e redes sociais e de comunicação da nossa empresa.
                            </p>
                            <p>
                                A logo Luciano Cópias e Papelaria é reconhecida por um (L) grafado na cor branco em fundo vermelho fechado, em volta de um quadrado. O ícone da inicial branco ganha vida em fundo vermelho. Compondo um visual mais alinhado à imagem e tecnologia da empresa. Tipologia do título e subtítulo em caixa baixa, tornando mais leve, suave, delineada, na cor grafite símbolo de tecnologia e inovação.
                            </p>
                            <p>
                                O símbolo tem característica ótica agradável, leve, atraente, memorável, inovador, personalizado, original, contemporâneo, porém consistente, sério, de fácil memorização (pregnância) e globalizado. 
                            </p>
                            <p>
                                A cromoterapia – Cores: Cor de energia. O Vermelho escuro ou fechado representando todo o legado dos serviços.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

        </div>


        <!-- What We Do Section -->
        <section class="we-do bg-grey padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center wow fadeIn">
                        <h2 class="heading">Nosso diferencial</h2>
                    </div>

                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="do-wrap text-center">
                            <div class="dark_gray top"></div>
                            <span class="dark_gray"><i class="icon2-news"></i></span>
                            <h4>Fotocópia de Grande Porte</h4>
                            <p>Trabalhamos com os mais diversos tamanhos</p>
                            <a href="#." class="readmore"></a></div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="do-wrap text-center">
                            <div class="dark_red top"></div>
                            <span class="dark_red"><i class="icon2-star2"></i></span>
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
                            <div class="dark_red top"></div>
                            <span class="dark_red"><i class="icon2-wifi-full"></i></span>
                            <h4>Wi-fi grátis</h4>
                            <p>Basta fazer um Check In em Nosso Facebook</p>
                            <a href="#." class="readmore"></a></div>
                    </div>

                </div>
            </div>
        </section>


        <!-- Find Us -->
        <section class="info-section" id="findus">
            <div class="row">
                <div class="col-md-6 block text-center wow fadeInLeftBig" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="center">
                        <h2>Estamos Aqui</h2>
                        <p><strong>Endereço:</strong> Rua Sebastião Bandeira de Melo, 242 - Centro, Cajazeiras-PB 58900-000</p>
                        <p><strong>Telefone:</strong> (83) 3531-6496</p>
                        <p><strong>E-mail:</strong> <a href="#."> lucianocopias@yahoo.com </a></p>
                        <ul class="social-link">
                            <li><a href="http://www.facebook.com/lucianocopiasepapelaria" class="text-center"><i
                                        class="fa fa-facebook"></i><span></span></a></li>
                            <li><a href="http://twitter.com/lucianocopias" class="text-center"><i
                                        class="fa fa-twitter"></i><span></span></a></li>
                            <li><a href="http://www.instagram.com/lucianocopias" class="text-center"><i
                                        class="fa fa-instagram"></i><span></span></a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-6 block light text-center wow fadeInRightBig" data-wow-duration="500ms"
                     data-wow-delay="300ms">

                    <div class="center">
                        <h2>Encontre-nos</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63376.001986615796!2d-38.559835!3d-6.890587!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb9e963735f6bf88a!2sLUCIANO%20C%C3%93PIAS!5e0!3m2!1spt-BR!2sbr!4v1567840715126!5m2!1spt-BR!2sbr"
                                width=100% height=100% frameborder="0" style="border:0" allowfullscreen></iframe>
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
                            <li><a href="#bg-paralax" class="page-scroll">A Marca</a></li>                            
                            <li><a href="#about" class="page-scroll">Serviços</a></li>
                            <li><a href="#findus" class="page-scroll">Contate-nos</a></li>
                            <li><a href="#file-email" class="page-scroll">Envie um arquivo</a></li>
                        </ul>
                        <p>Copyright &copy; 2019 Luciano Cópias e Papelaria. Todos os direitos reservados.</p>
                    </div>
                </div>
            </div>
        </footer>


        <ul class="social-link whatsapp-button">
            <li><a href="https://wa.me/5583991233370" Style="position:fixed;bottom:70px;right:25px;z-index:1000;" class="text-center" target="_blank"><i
                        class="fa fa-whatsapp"></i><span></span></a></li>
        </ul>




        <a href="#." class="go-top text-center"><i class="fa fa-angle-double-up"></i></a>

        <script src="js/lx.min.js"></script>

    </body>
</html>
