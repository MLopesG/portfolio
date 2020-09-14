<?php
    include 'php/index.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Portfólio | Marcos Lopes Gonçalves</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
</head>
<body>
    <main>
        <header class="header-port" id="home">
            <div class="container">
                <div class="titulo-port">
                    <h1>M<b class="titulo-port-main">Lopes</b></h1>
                </div>
            </div>        
        </header>

        <section class="banner" id="banner">
            <div  class="banner-port">
                <div class="banner-titulo-port">
                    <h1 id="digitar"></h1>

                    <div class="btn-faleconosco padding-top-btn-faleconosco">
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=67998343255&text=Ol%C3%A1!%20visualizei%20seu%20portf%C3%B3lio."><img src="https://imagepng.org/wp-content/uploads/2017/08/WhatsApp-icone-3.png" /> Entre em contato</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="banner-menu" id="banner-menu">
            <div  class="menu-mobile" id="menu-mobile">
                <div class="titulo-port">
                    <h1>M<b class="titulo-port-main">Lopes</b></h1>
                </div>
                <div id="menu-click">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
            <div class="menu-port">
                <nav>
                    <ul id="abrir-menu-mobile">
                        <a href="#home" id="abrir-home">
                            <li>
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span>Home</span>
                            </li>
                        </a>
                        <a href="#sobre">
                            <li>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span>Sobre</span>
                            </li>
                        </a>
                        <a href="#servicos">
                            <li>
                                <i class="fa fa-wrench" aria-hidden="true"></i>
                                <span>Serviços</span>
                            </li>
                        </a>
                        <a href="#projetos">
                            <li>
                                <i class="fa fa-code" aria-hidden="true"></i>
                                <span>Projetos</span>
                            </li>
                        </a>
                        <a href="#contato">
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>Contato</span>
                            </li>
                        </a>
                    </ul>
                </nav>
            </div>
        </section>

        <section class="container-section">
            <div class="sobre body padding-bottom"  id="sobre">
                <div class="container">
                    <div class="body-titulo">
                        <h1>Sobre</h1>
                    </div>
                    <div class="sobre-texto">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas cum delectus, a similique aut natus ad officiis at laborum assumenda voluptate ut iusto iure voluptatibus excepturi accusamus aliquid placeat praesentium.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore officiis expedita aspernatur blanditiis, provident velit culpa vitae ex, ipsam natus cumque. Neque doloremque beatae dolorum earum magni maiores excepturi dolores.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ad quod repellendus beatae ex velit non commodi. Tempora totam molestias eveniet optio, blanditiis alias placeat tenetur distinctio officia veritatis error.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas cum delectus, a similique aut natus ad officiis at laborum assumenda voluptate ut iusto iure voluptatibus excepturi accusamus aliquid placeat praesentium.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore officiis expedita aspernatur blanditiis, provident velit culpa vitae ex, ipsam natus cumque. Neque doloremque beatae dolorum earum magni maiores excepturi dolores.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ad quod repellendus beatae ex velit non commodi. Tempora totam molestias eveniet optio, blanditiis alias placeat tenetur distinctio officia veritatis error.
                        </p>
                    </div>
                </div>
            </div>  
            <div class="servicos body padding-bottom">
                <div class="container" id="servicos">
                    <div class="body-titulo">
                        <h1>Serviços</h1>
                    </div>
                    <div class="servicos-items">
                       <?php foreach(servicos() as $servico) : ?>
                            <div class="item">
                                <div class="icon">
                                    <i class="<?=$servico['icon']?>"></i>
                                </div>
                                <div class="text">
                                    <h1><?=$servico['sobre']?></h1>
                                </div>
                            </div>
                       <?php endforeach;?>
                    </div>
                </div>
            </div>  

            <div class="projetos body padding-bottom">
                <div class="container" id="projetos">
                    <div class="body-titulo">
                        <h1>Projetos</h1>
                    </div>
                    <div class="projetos">
                        <?php foreach(projetos() as $projeto) :?>
                            <div class="projeto-item">
                                <div class="projeto-item-imagem">
                                    <img src="<?=$projeto['foto']?>" alt="<?=$projeto['foto']?>">
                                </div>
                                <div class="projeto-body">
                                    <div class="projeto-body-titulo">
                                        <h1><?=$projeto['foto']?></h1>
                                    </div>
                                    <div class="projeto-body-text">
                                        <p>
                                            <?=$projeto['titulo']?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>  

            <div class="contato body padding-bottom">
                <div class="container" id="contato">
                    <div class="body-titulo">   
                        <h1>Contato</h1>
                    </div>
                    <div class="container-contato">
                        <div class="informacoes">
                            <div>
                                <p>Entre em contato pelas redes sociais</p>
                            </div>
                            <div class="redes-sociais">
                                <a href="https://github.com/MLopesG" target="_blank"><img src="https://image.flaticon.com/icons/png/512/25/25231.png" alt="github.com/MLopesG"></a>
                                <a href="https://www.linkedin.com/in/marcos-lopes-ba592b194/" target="_blank"><img src="https://image.flaticon.com/icons/png/512/174/174857.png" alt=""></a>
                            </div>
                        </div>
                        <div class="formulario">
                            <form action="">
                                <div class="column">
                                    <label for="nome">Nome:</label>
                                    <input type="text" id="nome" require>
                                </div>
                                <div class="column">
                                    <label for="email">Email:</label>
                                    <input type="text" id="email" require>
                                </div>
                                <div class="column">
                                    <label for="assunto">Assunto:</label>
                                    <input type="text" id="assunto" require>
                                </div>
                                <div class="column">
                                    <label for="msg">Mensagem:</label>
                                    <textarea name="msg" id="msg" cols="30" rows="10" require></textarea>
                                </div>
                                <div class="btn">
                                    <input type="submit" value="Enviar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>  
    </main>
    <footer>
        <div class="footer-body">
            <span>&copy; Todos Direitos Reservados - <b class="desenvolvimento">Desenvolvido por Marcos Lopes.</b></span>
        </div>
    </footer>
</body>
<script src="js/index.js"></script>
</html>