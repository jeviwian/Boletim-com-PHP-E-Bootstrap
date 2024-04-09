<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container-fluid bg-secondary text-white">
        <?php

        // método POST , não aparecem dados na URL

        $nomeAluno = $_POST['nomeAluno'];
        $b1 = $_POST['b1'];
        $b2 = $_POST['b2'];
        $b3 = $_POST['b3'];
        $b4 = $_POST['b4'];

        // float = função declaração do tipo da variavel
        $media = (float)($b1 + $b2 + $b3 + $b4) / 4;


        echo " A media do aluno(a) $nomeAluno , é $media";

        // Se  média for igual ou maior que 6 , Aprovado!
        // Se  menor que 6 , Reprovado !

        if ($media >= 6) {
            echo " Aluno Aprovado ✅";
        } elseif ($media < 6) {
            echo " Aluno Repovado ❌";
        }



        ?>

 <br>

   <!-- Botão para voltar para página anterior -->
   <!-- Classe bootstrap btn btn-primary = botão azul //  btn-sm  = botão pequeno -->
    <button class="btn btn-primary btn-sm" onclick="goBack()">Voltar</button>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>







    </div>

  



















     <!-- Link para bootstrap -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>