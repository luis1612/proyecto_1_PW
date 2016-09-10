<?php 
   //-----------------operaciones entre las matrices A-B suma, resta y multilplicacion--------------//

//matriz A
$a11=$_POST['a11'];
$VecA11=(int)$a11;
$a12=$_POST['a12'];
$VecA12=(int)$a12;
$a13=$_POST['a13'];
$VecA13=(int)$a13;
$a21=$_POST['a21'];
$VecA21=(int)$a21;
$a22=$_POST['a22'];
$VecA22=(int)$a22;
$a23=$_POST['a23'];
$VecA23=(int)$a23;
$a31=$_POST['a31'];
$VecA31=(int)$a31;
$a32=$_POST['a32'];
$VecA32=(int)$a32;
$a33=$_POST['a33'];
$VecA33=(int)$a33;


//matriz B
$b11=$_POST['b11'];
$VecB11=(int)$b11;
$b12=$_POST['b12'];
$VecB12=(int)$b12;
$b13=$_POST['b13'];
$VecB13=(int)$b13;
$b21=$_POST['b21'];
$VecB21=(int)$b21;
$b22=$_POST['b22'];
$VecB22=(int)$b22;
$b23=$_POST['b23'];
$VecB23=(int)$b23;
$b31=$_POST['b31'];
$VecB31=(int)$b31;
$b32=$_POST['b32'];
$VecB32=(int)$b32;
$b33=$_POST['b33'];
$VecB33=(int)$b33;


// 
$operador=$_POST['operacion'];


function operaciones_matrices_A_B($PA11,$PA12,$PA13,$PA21,$PA22,$PA23,$PA31,$PA32,$PA33,$PB11,$PB12,$PB13,$PB21,$PB22,$PB23,$PB31,$PB32,$PB33,$cal){



   switch ($cal) {

     case "+":

     echo"<br> La SUMA de la matriz A con la matriz B es:<br>";

      echo"MATRIZ A <br>";
      echo"[",$PA11,"] [",$PA12,"] [",$PA13,"]<br>";
      echo"[",$PA21,"] [",$PA22,"] [",$PA23,"]<br>";
      echo"[",$PA31,"] [",$PA32,"] [",$PA33,"]<br>";

      echo" <br> + <br>";

      echo"MATRIZ B <br>";
      echo"[",$PB11,"] [",$PB12,"] [",$PB13,"]<br>";
      echo"[",$PB21,"] [",$PB22,"] [",$PB23,"]<br>";
      echo"[",$PB31,"] [",$PB32,"] [",$PB33,"]<br>";

      echo" <br> = <br>";


    // suma las posiciones de la PRIMERA fila
      $S11=$PA11+$PB11;
      $S12=$PA12+$PB12;
      $S13=$PA13+$PB13;
     
      echo"[",$S11,"] [",$S12,"] [",$S13,"]<br>";
      
     

    // suma las posiciones de la SEGUNDA fila 
      $S21=$PA21+$PB21;
      $S22=$PA22+$PB22;
      $S23=$PA23+$PB23;
      
      echo"[",$S21,"] [",$S22,"] [",$S23,"]<br>";
     

    // suma las posiciones de la TERCERA fila 
    $S31=$PA31+$PB31;
    $S32=$PA32+$PB32;
    $S33=$PA33+$PB33;
    echo"[",$S31,"] [",$S32,"] [",$S33,"]<br>";
   

      break;

     case "-":

      echo"<br> La RESTA de la matriz A con la matriz B es:<br>";

         echo"MATRIZ A <br>";
         echo"[",$PA11,"] [",$PA12,"] [",$PA13,"]<br>";
         echo"[",$PA21,"] [",$PA22,"] [",$PA23,"]<br>";
         echo"[",$PA31,"] [",$PA32,"] [",$PA33,"]<br>";

         echo" <br> - <br>";

         echo"MATRIZ B <br>";
         echo"[",$PB11,"] [",$PB12,"] [",$PB13,"]<br>";
         echo"[",$PB21,"] [",$PB22,"] [",$PB23,"]<br>";
         echo"[",$PB31,"] [",$PB32,"] [",$PB33,"]<br>";

         echo" <br> = <br>";



      // resta las posiciones de la PRIMERA fila
      $R11=$PA11-$PB11;
      $R12=$PA12-$PB12;
      $R13=$PA13-$PB13;
      echo"[",$R11,"] [",$R12,"] [",$R13,"]<br>";


     //resta las posiciones de la SEGUNDA fila
      $R21=$PA21-$PB21;
      $R22=$PA22-$PB22;
      $R23=$PA23-$PB23;

      echo"[",$R21,"] [",$R22,"] [",$R23,"]<br>";


     //resta las posiciones de la TERCERA fila
      $R31=$PA31-$PB31;
      $R32=$PA32-$PB32;
      $R33=$PA33-$PB33;
      
      echo"[",$R31,"] [",$R32,"] [",$R33,"]<br>";

       break;

  case "*":
         
     echo"<br> La MULTIPLICACION de la matriz A con la matriz B es:<br>";

      echo"MATRIZ A <br>";
      echo"[",$PA11,"] [",$PA12,"] [",$PA13,"]<br>";
      echo"[",$PA21,"] [",$PA22,"] [",$PA23,"]<br>";
      echo"[",$PA31,"] [",$PA32,"] [",$PA33,"]<br>";

      echo" <br> * <br>";

      echo"MATRIZ B <br>";
      echo"[",$PB11,"] [",$PB12,"] [",$PB13,"]<br>";
      echo"[",$PB21,"] [",$PB22,"] [",$PB23,"]<br>";
      echo"[",$PB31,"] [",$PB32,"] [",$PB33,"]<br>";

      echo" <br> = <br>";
/*
    
    // multiplicaion las posiciones de la primera fila
      $M11=$PA11*$PB11;
      $M12=$PA12*$PB12;
      $M13=$PA13*$PB13;
     
      echo"[",$M11,"] [",$M12,"] [",$M13,"]<br>";
      
     

    // multiplicaion las posiciones de la primera fila 
      $M21=$PA21*$PB21;
      $M22=$PA22*$PB22;
      $M23=$PA23*$PB23;
      
      echo"[",$M21,"] [",$M22,"] [",$M23,"]<br>";
     

    // multiplicacion  las posiciones de la primera fila 
    $M31=$PA31*$PB31;
    $M32=$PA32*$PB32;
    $M33=$PA33*$PB33;
    echo"[",$M31,"] [",$M32,"] [",$M33,"]<br>";

*/

 //-------------PRODUCTO DE UN ESCALAR POR MATRIZ--------------------

  $M11 = (($PA11 * $PB11) + ($PA12 * $PB21) + ($PA13 * $PB31));
  $M12 = (($PA11 * $PB12) + ($PA12 * $PB22) + ($PA13 * $PB32));
  $M13 = (($PA11 * $PB13) + ($PA12 * $PB23) + ($PA13 * $PB33));

  $M21 = (($PA21 * $PB11) + ($PA22 * $PB21) + ($PA23 * $PB31));
  $M22 = (($PA21 * $PB12) + ($PA22 * $PB22) + ($PA23 * $PB32));
  $M23 = (($PA21 * $PB13) + ($PA22 * $PB23) + ($PA23 * $PB33));

  $M31 = (($PA31 * $PB11) + ($PA32 * $PB21) + ($PA33 * $PB31));
  $M32 = (($PA31 * $PB12) + ($PA32 * $PB22) + ($PA33 * $PB32));
  $M33 = (($PA31 * $PB13) + ($PA32 * $PB23) + ($PA33 * $PB33));

echo "El resultado de la multiplicacion de la matriz A y la matriz B es:<br><br>"."[".$M11."]"."[".$M12."]"."[".$M13."]"."<br>"."[".$M21."]"."[".$M22."]"."[".$M23."]"."<br>"."[".$M31."]"."[".$M32."]"."[".$M33."]";

         break;  
        
   }
}

  // LLAMAADO A LA FUNCION PARA MOSTRAR LOS RESULTADOS DE LAS OPERACIONES
  $resultado=operaciones_matrices_A_B($VecA11,$VecA12,$VecA13,$VecA21,$VecA22,$VecA23,$VecA31,$VecA32,$VecA33,$VecB11,$VecB12,$VecB13,$VecB21,$VecB22,$VecB23,$VecB31,$VecB32,$VecB33,$operador);

    echo" $resultado";

 ?>