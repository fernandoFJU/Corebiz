<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Corebiz</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js" type="text/javascript"></script>
        <script src="js/jquery.js" type="text/javascript"></script>

        <script type="text/javascript">
            /*Infelizmente não consegui desenvolver um método de enviar o formulario para a API;
            embora o front-end tenha ficado identico ao .psd
            */
        </script>
    </head>
    <body>
        <div class="resultado">

        </div>

        <!-- Cabeçalho -->
        <header>
            <div class="usuarioPode">
                <div class="buscar">
                    <form action="#" method="get">
                        <input type="text" id="busca" name="pesquisa" placeholder="Buscar">
                        <input type="submit" name="btnPesquisar" value="" class="btnPesquisa">
                    </form>
                </div>
                <div class="acessar">
                    <img src="imagens/user.ico" alt="" class="icones"> Minha conta <img src="imagens/entrar.ico" alt="" class="icones"> Entrar <img src="imagens/carrinho.ico" alt="" class="icones"> Carrinho: 0 itens
                </div>
            </div>
            <div class="logo">
                <img src="imagens/logo.jpg" id="logo" alt="Logo" title="Logotipo">
            </div>
        </header>
        <!-- Menu -->
        <nav>
            <ul class="menu">
                <li><a href="#">CAMISAS</a></li>
                <li><a href="#">CAMISETAS</a></li>
                <li><a href="#">BLUSAS</a></li>
                <li><a href="#">BERMUDAS</a></li>
                <li><a href="#">CALÇAS</a></li>
                <li><a href="#">ACESSÓRIOS</a></li>
                <li><a href="#">SALES</a></li>
            </ul>
        </nav>
        <!-- Conteúdo -->
        <section class="content">
            <div class="conteinerInformacoes">
                <div class="informacoes">
                    <p>&#128666;</p>
                    <p>FRETE GRÁTIS P/ TODO O BRASIL <br>
                    nas compras acima de R$ 200,00</p>
                </div>
                <div class="informacoes">
                    <p>&#128197;</p>
                    <p>30 DIAS DE TROCA GRÁTIS <br>
                    Você tem até 30 dias para trocar</p>
                </div>
                <div class="informacoes">
                    <p>&#128176;</p>
                    <p>PAGUE EM ATÉ 12X S/ JUROS <br>
                    Parcela mínima de R$50,00</p>
                </div>
                <div class="informacoes">
                    <p>&#9742;</p>
                    <p>TELEVENDAS: (11) 4063-3682 <br>
                    Atendimento 24 horas por dia</p>
                </div>
            </div>
            <!-- Slider -->
            <div class="conteinerSlider">
                <input type="radio" name="botaoSlider" id="id1" checked=""/>
                <label for="id1">
    		        <img src="imagens/imagem1edit.png" class="imagemSecundaria"/>
    	        </label>
    	        <img src="imagens/imagem1edit.png" alt="" class="imagemEmFoco"/>

                <input type="radio" name="botaoSlider" id="id2"/>
                <label for="id2">
    		        <img src="imagens/imagem2edit.jpg" class="imagemSecundaria"/>
    	        </label>
    	        <img src="imagens/imagem2edit.jpg" alt="" class="imagemEmFoco"/>

                <input type="radio" name="botaoSlider" id="id3"/>
                <label for="id3">
    		        <img src="imagens/imagem3edit.jpg" class="imagemSecundaria"/>
    	        </label>
    	        <img src="imagens/imagem3edit.jpg" alt="" class="imagemEmFoco"/>

                <input type="radio" name="botaoSlider" id="id4"/>
                <label for="id4" id="last">
    		        <img src="imagens/imagem4edit.jpg" class="imagemSecundaria"/>
    	        </label>
    	        <img src="imagens/imagem4edit.jpg" alt="" class="imagemEmFoco"/>
            </div>
        </section>
        <article class="destaques">
            <fieldset>
                <legend>DESTAQUES</legend>
            </fieldset>
            <!-- Carrossel -->
            <div class="conteinerProdutos">
                <div class="produto">
                    <div class="imgProduto">
                        <img src="imagens/carrossel1.jpg" alt="">
                    </div>
                    <div class="descProduto">
                        <p class="nome">Calça legging vinho</p><br>
                        <p class="preco">
                            <span>R$ 60,00</span>
                            <br>
                            3x de R$ 20,00
                        </p>
                    </div>
                </div>
                <div class="produto">
                    <div class="imgProduto">
                        <img src="imagens/carrossel3.jpg" alt="">
                    </div>
                    <div class="descProduto">
                        <p class="nome">Calça jeans</p><br>
                        <p class="preco">
                            <span id="antigo">R$70,00</span>
                            <span> R$ 60,00</span>
                            <br>
                            3x de R$ 20,00
                        </p>
                    </div>
                </div>
                <div class="produto">
                    <div class="imgProduto">
                        <img src="imagens/carrossel2.jpg" alt="">
                        <figcaption>INDISPONÍVEL</figcaption>
                    </div>
                    <div class="descProduto">
                        <p class="nome">Calça legging marrom</p><br>
                        <p class="preco">
                            <span>R$ 60,00</span>
                            <br>
                            3x de R$ 20,00
                        </p>
                    </div>
                </div>
                <div class="produto">
                    <div class="imgProduto">
                        <img src="imagens/carrossel3.jpg" alt="">
                    </div>
                    <div class="descProduto">
                        <p class="nome">Calça jeans</p><br>
                        <p class="preco">
                            <span>R$70,00 </span>
                            <span>R$ 60,00</span>
                            <br>
                            3x de R$ 20,00
                        </p>
                    </div>
                </div>
            </div>
        </article>
        <!-- Formulário -->
        <div class="conteinerForm">
            <form class="form_post" action="" method="post" name="form_post">
                <label for="nome">Nome:</label><br>
                <input type="text" name="name" id="nome" class="dados" maxlength="50" required=""><br>

                <label for="email">E-mail:</label><br>
                <input type="email" name="email" id="email" class="dados" maxlength="50" required=""><br>

                <label for="celular">Celular:</label><br>
                <input type="text" name="phone" id="celular" class="dados" maxlength="15" required=""><br>

                <label for="mensagem" id="labelMensagem">Mensagem:</label><br>
                <textarea name="notice" id="mensagem" placeholder="Digite sua mensagem aqui" maxlength="200" required=""></textarea>

                <input type="submit" name="btnEnviar" onclick="acao()" value="ENVIAR" class="enviar">


            </form>
        </div>
        <!-- Rodapé -->
        <footer>
            <div class="instrucoes">
                <div class="instrucao">
                    <p>INSTITUCIONAL</p><br>
                    <ul>
                        <li><a href="#">&#8594; Quem Somos</a></li>
                        <li><a href="#">&#8594; Contato</a></li>
                    </ul>
                </div>
                <div class="instrucao">
                    <p>AJUDA & SUPORTE</p><br>
                    <ul>
                        <li><a href="#">&#8594; Como comprar</a></li>
                        <li><a href="#">&#8594; Termos e condições</a></li>
                    </ul>
                </div>
            </div>
            <div class="formasDePagamento">
                <div class="forma"><img src="imagens/forma1.png" alt=""></div>
                <div class="forma"><img src="imagens/forma2.png" alt=""></div>
                <div class="forma"><img src="imagens/forma3.png" alt=""></div>
                <div class="forma"><img src="imagens/forma4.png" alt=""></div>
                <div class="forma"><img src="imagens/forma5.ico" alt=""></div>
                <div class="forma"><img src="imagens/forma6.jpg" alt=""></div>
                <div class="forma"><img src="imagens/forma7.png" alt=""></div>
                <div class="forma"><img src="imagens/forma8.png" alt=""></div>
                <div class="forma"><img src="imagens/forma9.png" alt=""></div>
                <div class="forma"><img src="imagens/forma10.png" alt=""></div>
                <div class="forma"><img src="imagens/forma11.png" alt=""></div>
            </div>
            <div class="direitos">
                <p>© 2017 Loja Virtual. Todos os direitos resevados</p>
            </div>
        </footer>
    </body>
</html>
