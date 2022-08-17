<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicios BD</title>
    <?php include '../funcaoProcuraArquivos.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <style>
        <?php include '../index_css.css'; ?>
    </style>
</head>
    <body>
    <button class="botao" ondblclick="modoEscuro()">Clique Duas Vezes</button>
    </body>
<script>
    var mudaTema = document.body;
    var mudaCorDaFonte = document.getElementById("itens-da-lista");

    function modoEscuro() {
        mudaTema.classList.toggle("dark-mode");
        mudaCorDaFonte.id = "itens-da-lista";
        if(mudaTema.classList != "dark-mode") {
        mudaCorDaFonte.id = "arquivos-light";
        }
    }
</script>

</html>