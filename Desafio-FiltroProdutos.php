<html>
<h2>Digite os valores maximos e minimos a serem buscados</h2>

<form method="post">
    Valor Máximo: <input type="number" name="max" required><br><br>
    Valor Mínimo: <input type="number" name="min" required><br><br>
    <input type="submit">
</form>
<?php
//crie uma funcao que filtre uma lista de produtos. Inputs: array de produtos, valor maximo, valor minimo. deve retornar uma array de produtos que estejam dentro desse intervalo de preco
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $maximo = $_POST['max'];
    $minimo = $_POST['min'];
    $ProdList = array("leite" => 10, "maizena"=>40, "caviar"=>100, "kinder ovo"=>45);
     

    function ListaDeProdutos($ProdList, $maximo, $minimo)
    {
        $ProdutosFiltrados = [];
        foreach($ProdList as $produto => $preco){
            if($preco <= $maximo &&  $preco >= $minimo){
                array_push($ProdutosFiltrados, $produto);
            }
        }
        return $ProdutosFiltrados;
    }


    echo "<h3>Produtos filtrados:</h3>";
    foreach (ListaDeProdutos($ProdList, $maximo, $minimo) as $lista) {
        echo $lista." - ";
    }
}
?>
</html>