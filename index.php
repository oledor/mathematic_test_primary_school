<!doctype html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <title>Знакомство с PHP</title>
</head>
<body>
   <table border="1" rules="cols" cellpadding="10%">
      <?
      $operators = ['+','-','*',':'];
      
      for ($i=1; $i<35; $i++){
         echo '<tr>';
         for ($j=1; $j<=5; $j++){
            $oper = $operators[rand(0,3)];
            $num1 = rand(1,20);
            $num2 = rand(1, 20);
            
            if($oper == '/' and $num1 % $num2 != 0 or 
               $oper == '-' and $num1 - $num2 <0  or 
               $oper == '*' and $num1 * $num2 > 100){
                --$j;
               continue;
            }
            
/*            if($oper == '/' and $num1%$num2 != 0){
               --$j;
               continue;
            }else if($oper == '-' and ($num1 < $num2) != 0){
               --$j;
               continue;
            }else if($oper == '*' and ($num1 * $num2 > 100) != 0){
               --$j;
               continue;
            }
*/            
            echo "<td align='right'> $num1$oper$num2 = _______</td>";
         }
         echo '</tr>';
      }
      
      
  /*    //дз 
      1. из меньшего большее не вычитать
      2. дель только нацело
      */
      
      
      ?>
   </table>
 
   

   
</body>
</html>
