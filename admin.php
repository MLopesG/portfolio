<?php
    include 'php/index.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Portfólio | Marcos Lopes Gonçalves</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/admin.css">
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

            <?php if(isset($_SESSION['mensagem'])):?>
                <section class="container">
                    <div class="mensagem">
                        <p><?=$_SESSION['mensagem']?></p>     
                    </div>
                </section>
            <?php endif;?>

            <section class="admin container" id="admin">
                <div class="menu-admin box">
                    <nav>
                        <p class="menu-header">Menu Principal</p>
                        <ul>
                            <a href="">
                                <li>Novo Serviço</li>
                            </a>
                            <a href="">
                                <li>Novo Projeto</li>
                            </a>
                                <li>Nova Empresa</li>
                            </a>
                        </ul>
                    </nav>
                </div>
                <div class="tables">
                    <div class="servico">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Sobre</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach(servicos() as $servico) : ?>
                                    <tr>
                                        <td><?=$servico['id']?></td>
                                        <td><i class="<?=$servico['icon']?>"></i> <?=$servico['sobre']?></td>
                                        <td class="action">
                                            <a href="php/index.php?m=servicos&q=d&id=<?=$servico['id']?>"><i class="fa fa-trash delete"></i></a>
                                            <a href="php/index.php?m=servicos&q=e&id=<?=$servico['id']?>"><i class="fa fa-edit edit"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <div class="projeto">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titulo</th>
                                    <th>Sobre</th>
                                    <th>Empresa</th>
                                </tr>
                            </thead>
                            <tbody>
                                    
                            </tbody>
                        </table>
                    </div>
                    <div class="empresa">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Ramo</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>  
            </section>

            <section>
            <div class="dialog">
                <div class="dialog-title">Use Windows location service?</div>
                <div class="dialog-content">
                    Bassus abactors ducunt ad triticum.
                    A fraternal form of manifestation is the bliss.
                </div>
                <div class="dialog-actions">
                    <button class="button">Disagree</button>
                    <button class="button primary">Agree</button>
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
</html>