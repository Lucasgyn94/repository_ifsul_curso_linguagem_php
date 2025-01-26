<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php 
        $cores = array("preto", "azul", "verde");
        $cores[] = "branco";

        echo $cores[0] . ' - ' . $cores[1] . ' - ' . $cores[2] . ' - ' . $cores[3] . '<br/>';
        print_r($cores);

    ?>
</body>
</html>