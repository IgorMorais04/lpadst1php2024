<?php
   include_once 'C:\xampp\htdocs\lpadst1php2024\DAL\Departamento.php';
   use DAL\Departamento;
   
   $dalDpto = new DAL\Departamento();
   $lstDpto = $dalDpto->Select(); 

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Departamento usando Model</title>
</head>
<body>
    <h1>Listar Departamento</h1>
    <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
        </tr>
        
        <?php foreach($lstDpto as $dpto) { ?>
           <tr>
              <td><?php echo $dpto->getId(); ?></td>
              <td><?php echo $dpto->getDescricao();?></td>
           </tr>
        <?php } ?>

    </table>
</body>
</html>