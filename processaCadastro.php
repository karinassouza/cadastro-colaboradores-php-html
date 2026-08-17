<?php

// Recebendo os dados enviados pelo formulário
$nome = $_POST["nome1"];
$idade = $_POST["idade2"];
$profissao = $_POST["profissao3"];
$salario = $_POST["salario4"];
$experiencia = $_POST["experiencia5"];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Arquivo CSS externo -->
    <link rel="stylesheet" href="style.css">

    <title>Confirmação de Cadastro</title>

</head>

<body>

    <!-- Cabeçalho -->

    <header>

        <div class="logo">
            Lojas Brincos e Companhia
        </div>

        <nav>

            <a href="cadastro.html">Início</a>
            <a href="cadastro.html#produtos">Produtos</a>
            <a href="cadastro.html#faq">FAQ</a>
            <a href="cadastro.html#contato">Contato</a>

        </nav>

    </header>


    <!-- Título da página -->

    <section class="cabecalho">

        <h1>Cadastro realizado com sucesso!</h1>

        <p>
            Obrigado por enviar suas informações.
        </p>

    </section>


    <!-- Conteúdo principal -->

    <main class="conteudo">


        <!-- Dados do candidato -->

        <section class="dados">

            <h2>Dados do candidato</h2>


            <div class="informacao">

                <strong>Nome completo:</strong>

                <?php echo $nome; ?>

            </div>


            <div class="informacao">

                <strong>Idade:</strong>

                <?php echo $idade; ?>

                anos

            </div>


            <div class="informacao">

                <strong>Profissão:</strong>

                <?php echo $profissao; ?>

            </div>


            <div class="informacao">

                <strong>Salário pretendido:</strong>

                R$ <?php echo $salario; ?>

            </div>


            <div class="informacao">

                <strong>Experiência anterior:</strong>

                <?php echo $experiencia; ?>

            </div>

        </section>


        <!-- Mensagem personalizada -->

        <section class="mensagem">

            <h2>Mensagem</h2>

            <p>

                Olá, <strong><?php echo $nome; ?></strong>!

                Recebemos seu cadastro para a profissão de

                <strong><?php echo $profissao; ?></strong>.

                Sua experiência —

                <strong><?php echo $experiencia; ?></strong> —

                foi registrada com sucesso.

                Agradecemos pelo seu interesse em fazer parte

                da Lojas Brincos e Companhia.

            </p>

        </section>


        <!-- Link para retornar ao formulário -->

        <a class="voltar" href="cadastro.html">

            Voltar para o formulário

        </a>


    </main>


    <!-- Rodapé -->

    <footer>

        <p>
            Lojas Brincos e Companhia
        </p>

        <p>
            Página desenvolvida para fins acadêmicos.
        </p>

    </footer>

</body>

</html>