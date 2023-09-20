<?php
    require_once( 'loja.php');
    date_default_timezone_set('America/Sao_Paulo');
    $d = date('H:i:s',time());
    $h = date('d/m/y',time());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border=1>
            <tr>
                <td>Data</td>
                <td><?php
                    echo $h;
                ?></td>
            </tr>
            <tr>
                <td>Hora</td>
                <td><?php
                    echo $d;
                ?></td>
            </tr>
            <tr>
                <td>Nome do Cliente</td>
                <td><?php
                    echo $nome; 
                ?></td>
            </tr>
            <tr>
                <td>Endereco</td>
                <td><?php
                    echo $endereco;
                ?></td>
            </tr>
            <tr>
                <td>Produto Escolhido</td>
                <td><?php
                    switch($produto){
                        case 'headset':
                            echo 'Headset HyperX';
                            break;
                        case 'ssd':
                            echo 'SSD Kingston 480GB';
                            break;
                        case 'teclado':
                            echo 'Teclado Mecanico';
                            break;

                    }

                ?>
                </td>
            </tr>
            <tr>
                <td>Forma Pagamento</td>
                <td>
                    <?php
                        if(isset($_POST['pagamento'])){
                            $vista = $_POST['pagamento'];
                            switch($vista){
                                case 'vista':
                                    echo 'Vista';
                                break;
                                case 'debito':
                                    echo 'Debito';
                                break;
                                case 'credito':
                                    echo 'Credito';
                                break;
                            }
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td height=100px>Imagem</td>
                <td><?php
                        switch($produto){
                            case 'headset':
                                $p = 'headset.jpg';
                                echo '<img src="' . $p . '" alt="Minha Imagem" widht="50" height="100">';
                            break;
                            case 'ssd':
                                $p = 'ssd.jpg';
                                echo '<img src="' . $p . '" alt="Minha Imagem" widht="50" height="100">';
                            break;
                            case 'teclado':
                                $p = 'teclado.webp';
                                echo '<img src="' . $p . '" alt="Minha Imagem" widht="50" height="100">';
                            break;
                        }
                ?></td>
            </tr>
            <tr>
                <td>Detalhes da compra</td>
                <td>
                    <?php
                        if (isset($_POST['presente'])) {
                            echo 'Pra presente'.'<br>';
                        }
                        else {
                            echo 'Sem presente.<br>';
                        }
                        if (isset($_POST['garantia'])) {
                            echo 'Com garantia.<br>';
                        }
                        else {
                            echo 'Sem garantia.<br>';
                        }
                        if (isset($_POST['seguro'])) {
                            echo 'Com seguro'.'<br>';
                        }
                        else {
                            echo 'Sem seguro';
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Valor da compra</td>
                <td><?php
                    echo $valor_final;
                ?></td>
            </tr>
        </table>
</body>
</html>