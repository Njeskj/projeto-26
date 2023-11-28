<?php 
include('includes/header.php');
include('includes/nav.php');
?>




<nav class="navbar navbar-expand-lg">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#1">Parte 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#2">Parte 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#3">Parte 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#4">Parte 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#5">Parte 5</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#6">Parte 6</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#final">Conclusão</a>
                </li>
            </ul>
        </div>
    </nav>




<div class="container mt-5">

    <h2 class="doc-titulo">
        <div id="1">Parte 1: Configuração do Ambiente</div>
    </h2>
    <h4 class="doc-sub">Servidor Web:</h4>
    <li class="doc-li">Configure um servidor web (por exemplo, Apache) e instale o PHP e o MySQL.</li>

    <h4 class="doc-sub">Banco de Dados:</h4>
    <li class="doc-li">Crie um banco de dados MySQL para armazenar dados do jogo, como usuários, aldeias, recursos, etc.</li>

    <h2 class="doc-titulo">
        <div id="2">Parte 2: Sistema de Autenticação
        </div>
    </h2>
    <h4 class="doc-sub">Página de Registro:</h4>
    <li class="doc-li">Crie uma página de registro que permita aos usuários criar uma conta no jogo.</li>
    <li class="doc-li">Armazene as informações do usuário no banco de dados.</li>

    <h4 class="doc-sub">Página de Login:</h4>
    <li class="doc-li">Implemente uma página de login para autenticar os usuários.</li>
    <li class="doc-li">Use sessões para manter os usuários autenticados.</li>

    <h2 class="doc-titulo">
        <div id="3">Parte 3: Perfil (Dashboard)</div></h2>
    <h4 class="doc-sub">Dashboard do Jogador:</h4>
    <li class="doc-li">Desenvolva uma página de perfil (dashboard) que exiba informações sobre a aldeia do jogador, recursos, unidades, etc.</li>
    <li class="doc-li">Permita que os jogadores realizem ações básicas a partir do dashboard.</li>

    <h2 class="doc-titulo">
        <div id="4">Parte 4: Lógica do Jogo</div></h2>
    <h4 class="doc-sub">Mapa do Mundo:</h4>
    <li class="doc-li">Crie um mapa do mundo que exiba várias aldeias.</li>
    <li class="doc-li">Implemente a lógica para atualizar e exibir o estado atual das aldeias.</li>
    
    <h4 class="doc-sub">Recursos e Edificações:</h4>
    <li class="doc-li">Defina tipos de recursos (madeira, pedra, etc.) e edificações (quartel, fazenda, etc.).</li>
    <li class="doc-li">Implemente a lógica para coleta de recursos e construção de edificações.</li>

    <h4 class="doc-sub">Unidades e Exércitos:</h4>
    <li class="doc-li">Desenvolva unidades e exércitos que os jogadores podem treinar e enviar para outras aldeias.</li>

    <h2 class="doc-titulo">
        <div id="5">Parte 5: Interação Multijogador</div></h2>
    <h4 class="doc-sub">Sistema de Trocas:</h4>
    <li class="doc-li">Permita que os jogadores troquem recursos entre si.</li>

    <h4 class="doc-sub">Combates e Conquistas:</h4>
    <li class="doc-li">Implemente a lógica para batalhas entre jogadores.</li>
    <li class="doc-li">Permita a conquista de aldeias inimigas.</li>
    
    <h2 class="doc-titulo">
        <div id="6">Parte 6: Tempo Real</div></h2>
    <h4 class="doc-sub">Tempo Real:</h4>
    <li class="doc-li">Utilize AJAX ou WebSockets para atualizar dinamicamente o estado do jogo sem a necessidade de recarregar a página.</li>

    <h2 class="doc-titulo">
        <div id="final">Considerações Finais</div></h2>
    <h4 class="doc-sub">Segurança:</h4>
    <li class="doc-li">Certifique-se de implementar medidas de segurança, como validação de entrada, para evitar ataques comuns.</li>

    <h4 class="doc-sub">Testes:</h4>
    <li class="doc-li">Realize testes rigorosos em diferentes navegadores para garantir a compatibilidade.</li>

    <h4 class="doc-sub">Documentação:</h4>
    <li class="doc-li">Documente seu código adequadamente para facilitar a manutenção futura.</li>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php include('includes/footer.php'); ?>
