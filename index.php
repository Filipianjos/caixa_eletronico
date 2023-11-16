<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">k
    <title>Document</title>
    <style>
        img {
            height: 50px;
            margin: 4;
        }
    </style>
</head>
<body>
    <main>
        <?php 
        $saque = $_REQUEST['saque'] ?? 0;
        ?>

        <form action="" method="get">
            <label for="Saque">Qual valor, deseja sacar?
            <sup>*</sup></label>
            <input type="number" name="saque" id="saqye" step="5" required value="<?=$saque?>">
            <p style="font-size: 0.7em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10, e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $resto = $saque;

        //saque de R$100
        $tot100 = floor($resto / 100);
        $resto %= 100;

        //saque de R$50
        $tot50 = floor($resto / 50);
        $resto %= 50;

        $tot10 = floor($resto / 10);
        $resto %= 10;

        $tot5 = floor($resto / 5);
        $resto = 5;
    
    ?>
    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ",", ".")?>izado</h2>
        <p>O caixa eletrônico vai te entregar as seguintrs notas:</p>

        <ul>
            <li><img src="notas/100-reais.jpg" alt="Nota de 100"> x<?=$tot100?></li>
            <li><img src="notas/50-reais.jpg" alt="Nota de 50"> x<?=$tot50?></li>
            <li><img src="notas/10-reais.jpg" alt="Nota de 10"> x<?=$tot10?></li>
            <li><img src="notas/5-reais.jpg" alt="Nota de 5"> x<?=$tot5?></li>
        </ul>

    </section>
</body>
</html>