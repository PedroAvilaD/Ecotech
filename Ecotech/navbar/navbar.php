<style>
        *{
            margin: auto;
            font-family: 'Saira Condensed', sans-serif;
        }

        ul{
            list-style-type: none;
            padding: 0;
            overflow: hidden;
            background-color: rgba(217, 217, 217, 1);
            position: fixed;
            top: 0;
            width: 100%;
        }

        li{
            color: black;
            float: right;
        }

        li a{
            display: block;
            color: black;
            text-align: center;
            padding: 30px;
            text-decoration: none;
        }

        li a:hover:not(.active){ /*Mostrar quando o mouse está em cima do botão e trocar a cor*/
            background-color: #c0c1bf;
        }

        #logo{
            padding-left: 50px;
            padding-top: 5px;
        }

        .sair{
            background-color: #28a745;
            font-weight: bold;
        }

        .sair a:hover:not(.active){
            background-color: #1e6b30;
        }
        </style>
        
<header>
    <div class="menu">
        <nav>
            <ul>
                <img id="logo" src="../Imagens/logo.svg" alt="logo" width=80 height=80>
                <li class="sair"><a href="#">SAIR</a></li>
                <li><a href="#">Configurações</a></li>
                <li><a href="#">Dispositivos</a></li>
                <li><a href="#">Início</a></li>
            </ul>
        </nav>
    ]</div>
    </header>