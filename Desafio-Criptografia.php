<html>
<h2>Digite a palavra a ser criptografada</h2>

<form method="post">
    Digite aqui: <input type="text" name="palavra" required><br><br>
    <input type="submit">
</form>
<?php
//uma funcao que receba uma palavra e a criptografe substituindo as letras pelo numero correspondente.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palavra = $_POST['palavra'];

    function Criptografia($palavra)
    {

        $Alfabeto = ["", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
        $ArrayAlfabeto = [];
        $palavraSeparada = str_split($palavra);


        for ($i = 0; $i < count($palavraSeparada); $i++) {
            for ($j = 1; $j < count($Alfabeto); $j++) {
                if ($palavraSeparada[$i] == $Alfabeto[$j]) {
                    array_push($ArrayAlfabeto, $j);
                }
            }
        }
        return $ArrayAlfabeto;
    }


    echo "<H3>RESULTADO CRIPTOGRAFADO:</H3>";
    foreach (Criptografia($palavra) as $cripto) {
        echo $cripto;
    }
}
?>

</html>