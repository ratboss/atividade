
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mostrar.php" method="POST">
        <table border=1>
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome"></td>
            </tr>
            <tr>
                <td>Produto</td>
                <td><input type="radio" name="radio" value="headset">Headset HyperX R$299,90 <br>
                    <input type="radio" name="radio" value="ssd">SSD Kingston 480GB R$458,71<br>
                    <input type="radio" name="radio" value="teclado">Teclado Mecanico R$235,18
                </td>
            </tr>
            <tr>
                <td>Forma Pagamento</td>
                <td>
                    <select name="pagamento">
                        <option name="vista" value="vista">A vista</option>
                        <option name="debito" value="debito">Debito</option>
                        <option name="credito" value="credito">Credito</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Detalhes</td>
                <td>
                    <input type="checkbox" name="presente" value="presente">Para Presente <br>
                    <input type="checkbox" name="garantia" value="garantia">Com garantia estendida <br>
                    <input type="checkbox" name="seguro" value="seguro">Com seguro
                </td>
            </tr>
            <tr>
                <td>Endereco</td>
                <td><input type="text" name="endereco"></td>
            </tr>
        </table>
        <input type="submit" value="enviar" name="enviar">
        <input type="submit" value="limpar" name="limpar">
    </form>
    <?php
$valor_final;
$botao_enviar = $_POST['enviar'];
$botao_limpar = $_POST['limpar'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco']; 
$produto = $_POST['radio'];
$vista = $_POST['vista'];
$debito = $_POST['debito'];
$credito = $_POST['credito'];
$presente = $_POST['presente'];
$garantia = $_POST['garantia'];
$seguro = $_POST['seguro'];

if($botao_enviar == 'enviar'){
    switch($produto){
        case 'headset':
            $valor_final = $valor_final + 299.90;
                if(isset($_POST['vista'])){
                    $valor_final = $valor_final - ($valor_final * 0.05);
                }
                if(isset($_POST['debito'])){
                    $valor_final = $valor_final - ($valor_final * 0.1);
                }
                if(isset($_POST['credito'])){
                    $valor_final = $valor_final + ($valor_final * 0.03);
                }
                    if (isset($_POST['presente'])) {
                        $valor_final = $valor_final + 10;
                    }
                    if (isset($_POST['garantia'])) {
                        $valor_final = $valor_final + 50;
                    }
                    if (isset($_POST['seguro'])) {
                        $valor_final = $valor_final + 100;
                    }
        break;
        case 'ssd':
            $valor_final = $valor_final + 458.71;
            if(isset($_POST['vista'])){
                $valor_final = $valor_final - ($valor_final * 0.05);
            }
            if(isset($_POST['debito'])){
                $valor_final = $valor_final - ($valor_final * 0.1);
            }
            if(isset($_POST['credito'])){
                $valor_final = $valor_final + ($valor_final * 0.03);
            }
                if (isset($_POST['presente'])) {
                    $valor_final = $valor_final + 10;
                }
                if (isset($_POST['garantia'])) {
                    $valor_final = $valor_final + 50;
                }
                if (isset($_POST['seguro'])) {
                    $valor_final = $valor_final + 100;
                }
        break;
        case 'teclado':
            $valor_final = $valor_final + 235.18;
            if(isset($_POST['vista'])){
                $valor_final = $valor_final - ($valor_final * 0.05);
            }
            if(isset($_POST['debito'])){
                $valor_final = $valor_final - ($valor_final * 0.1);
            }
            if(isset($_POST['credito'])){
                $valor_final = $valor_final + ($valor_final * 0.03);
            }
                if (isset($_POST['presente'])) {
                    $valor_final = $valor_final + 10;
                }
                if (isset($_POST['garantia'])) {
                    $valor_final = $valor_final + 50;
                }
                if (isset($_POST['seguro'])) {
                    $valor_final = $valor_final + 100;
                }
    break;
}
}



?>
</body>
</html>