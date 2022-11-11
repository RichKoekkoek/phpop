<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>

    <h1>Problem solving for developpers</h1>

    <h3>Problem 1 <h3>
    <?php 
        function fibonacci($n){
            
            $array_fibo = []; 

            $num1 = 0;
            $num2 = 1;
            
            $counter = 0;
            while ($counter < $n){
                echo ' '.$num1;
                array_push($array_fibo, $num1); # https://www.php.net/manual/en/function.array-push
                $num3 = $num2 + $num1;
                $num1 = $num2;
                $num2 = $num3;
                $counter = $counter + 1;
            }

            return $array_fibo; 
        }
        
        fibonacci(12); 

        echo "<h3>Problem 2 : </h3>"; 
        
        function display_table($number){
            echo "<table>";

            for($i = 0 ; $i < $number ; $i += 10){

                echo '<tr>';
                for($j = 0 ; $j <= 9 ; $j++ ){
                    $tmp = $i + $j; 
                    
                    echo "<td>$tmp</td>"; 
                }
                echo '</tr>';
            }

            echo "</table>"; 

        }

        display_table(100); 

        echo "<h3>Problem 3 : </h3>";

        

        function isFibbo($number, $fibo_reeks){

            $r = array_search($number, $fibo_reeks); # https://www.php.net/manual/en/function.array-search.php
            
            # checks if number is numeric 
            $result = is_numeric($r); # https://www.php.net/manual/en/function.is-numeric 
            
            return $result; 
        }


        $fibbo_sequence = Fibonacci(12); 
        echo "<br>";

    
        echo isFibbo(5, $fibbo_sequence);


        echo "<h3>Combine all the functions : </h3>" ; 

        echo "<p> We need to adapt the display function :  </p>"; 

        function display_table_fibbo($number, $fibo_reeks){
            echo "<table>";

            for($i = 0 ; $i < $number ; $i += 10){

                echo '<tr>';
                for($j = 0 ; $j <= 9 ; $j++ ){
                    $tmp = $i + $j; 
                    
                    if(isFibbo($tmp, $fibo_reeks)){

                        echo "<td style = \"background-color : green;\" >$tmp</td>";   
                        
                    }else echo "<td>$tmp</td>"; 
                    
                }
                echo '</tr>';
            }
            echo "</table>"; 
        }

        display_table_fibbo(100, $fibbo_sequence); 

    ?>


</body>
<style>
td {
    height: 30px;
    width: 30px;
    border: 1px black;

}

</style>
</html>