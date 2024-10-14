<html>
<h2>Digite um número para que retorne a quantidade de letras até a desse número</h2>
    
    <form method="post">
        Número do alfabeto: <input type="number" max="26" name="NumAlfabeto" required><br><br>
        <input type="submit">
    </form>
<?php 
//uma funcao que receba um numero de 1 a 26 e retorne uma array com as letras do alfabeto. Ex.: Selecionou 2, retorne "a,b"
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $NumAlfabeto = $_POST['NumAlfabeto'];
   
    $Alfabeto = ["","A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];

   function CalculoAlfabeto($NumAlfabeto, $Alfabeto){
    $ArrayAlfabeto = [];
    for($i = 1; $i <= $NumAlfabeto; $i++){
       array_push($ArrayAlfabeto, $Alfabeto[$i]);
    }
    return $ArrayAlfabeto;
   }

   echo "<H3>RESULTADO:</H3>";
   foreach(CalculoAlfabeto($NumAlfabeto, $Alfabeto) as $letras){
    echo $letras . ", ";
   }
   

}
?>

</html>