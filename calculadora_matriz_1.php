<?php 

// SE RECIVE INFORMACION DEL FORMULARIO HTML POR EL METODO _POST
$m_00=$_POST['m_00'];
  $Arreglo00=(int)$m_00;

$m_01=$_POST['m_01'];
$Arreglo01=(int)$m_01;

$m_02=$_POST['m_02'];
$Arreglo02=(int)$m_02;

$m_10=$_POST['m_10'];
  $Arreglo10=(int)$m_10;

$m_11=$_POST['m_11'];
  $Arreglo11=(int)$m_11;

$m_12=$_POST['m_12'];
$Arreglo12=(int)$m_12;

$m_20=$_POST['m_20'];
 $Arreglo20=(int)$m_20;  

$m_21=$_POST['m_21'];
$Arreglo21=(int)$m_21;

$m_22=$_POST['m_22'];
 $Arreglo22=(int)$m_22; 


$multi=$_POST['multi'];
    $n=(int)$multi;


$potencia=$_POST['potencia'];
    $pot=(int)$potencia;


$opr =$_POST['opr'];


// FUNCION QUE MANEJA LAS VARIABLES  RECIBIDAS 

function calculadora_de_matrices($array00,$array01,$array022,$array10,$array11,$array12,$array20,$array21,$array22,$n1,$p,$oper) {

  switch ($oper) {

	case "determinante":

	//editando funcion para calcular las determinantes
		$resultado_total=0;

		
    echo"MATRIZ A<br>";
               echo"[",$array00,"] [",$array01,"] [",$array022,"]<br>";
               echo"[",$array10,"] [",$array11,"] [",$array12,"]<br>";
               echo"[",$array20,"] [",$array21,"] [",$array22,"]<br><br>";

    $resultado_1=$array00*$array11*$array22 + $array10*$array21*$array022 +$array20*$array01*$array12;
    $resultado_total=$resultado_1+($array022*$array11*$array20)*-1 + ($array12*$array21*$array00)*-1 + ($array22*$array01*$array10)*-1;

   echo " el determinante de la matriz A es: ",$resultado_total;

        break;

    case "inversa":
          
             // OPERACION QUE VERIFICA SI LA MATRIZ TIENE DETERMINANTE QUE NO SEA IGUAL A 0 
           $resultado_1=$array00*$array11*$array22 + $array10*$array21*$array022 +$array20*$array01*$array12;
            $resultado_total=$resultado_1+($array022*$array11*$array20)*-1 + ($array12*$array21*$array00)*-1 + ($array22*$array01*$array10)*-1;
 
    	//si el resultado_total es 0 no tiene determinante NO TIENE MATRIZ INVERSA.
  		if($resultado_total!=0){
			$num1=$array11*$array22-$array21*$array12;


               // MATRIZ ORIGINAL 
       echo"MATRIZ A<br>";
               echo"[",$array00,"] [",$array01,"] [",$array022,"]<br>";
               echo"[",$array10,"] [",$array11,"] [",$array12,"]<br>";
               echo"[",$array20,"] [",$array21,"] [",$array22,"]<br><br>";

     		echo "Resultado MATRIZ A inversa 3x3 <br>";

        //OPERACIONES PARA ENCONTRAR LA MATRIZ INVERSA
     		echo "[ ",$num1/$resultado_total,"]   [",((($array01*$array22-$array21*$array022)*-1)/$resultado_total),"]    [",(($array01*$array12-$array11*$array022)/$resultado_total);

     		echo "]<br></br>";

     		echo "[",((($array10*$array22-$array20*$array12)*-1)/$resultado_total),"]   [",((($array00*$array22-$array20*$array022))/$resultado_total),"]   [",((($array00*$array12-$array10*$array022)*-1)/$resultado_total);

  		  echo "]<br></br>";

  		  echo "[",((($array10*$array21-$array20*$array11))/$resultado_total),"]    [",((($array00*$array21-$array20*$array01)*-1)/$resultado_total),"]    [",(($array00*$array11-$array10*$array01)/$resultado_total),"]<br>";    
		}
		else
		{
		echo "Error el det. da 0 ";  
    		}
    break;

    case  "transpuesta":

                  //SE MUESTRA LA MATRIZ ORIGINAL INGRESADA
               echo"MATRIZ A<br>";
               echo"[",$array00,"] [",$array01,"] [",$array022,"]<br>";
               echo"[",$array10,"] [",$array11,"] [",$array12,"]<br>";
               echo"[",$array20,"] [",$array21,"] [",$array22,"]<br><br>";
              
               echo"T= <br>";
              
              // SE CAMBIAN LAS FILAS POR LAS COLUMNA  PARA GENERAR LA MATRIZ TRANSPUESTA
               echo"[",$array00,"] [",$array10,"] [",$array20,"]<br>";
               echo"[",$array01,"] [",$array11,"] [",$array21,"]<br>";
               echo"[",$array022,"] [",$array12,"] [",$array22,"]<br>";
       break;

    case "multiplicar":
    
       
                 //SE MUESTRA LA MATRIZ ORIGINAL INGRESADA
   	echo"MATRIZ A<br>";
               echo"[",$array00,"] [",$array01,"] [",$array022,"]<br>";
               echo"[",$array10,"] [",$array11,"] [",$array12,"]<br>";
               echo"[",$array20,"] [",$array21,"] [",$array22,"]<br><br>";
              

               // SE MULTIPLICA CADA POSICION DE LA MATRIZ POR EL NUMERO INGRESADO 
    echo" MATRIZ A multiplicada por * $n1 =<br>";
               echo"[",$n1*$array00,"] [",$n1*$array01,"] [",$n1*$array022,"]<br>";
               echo"[",$n1*$array10,"] [",$n1*$array11,"] [",$n1*$array12,"]<br>";
               echo"[",$n1*$array20,"] [",$n1*$array21,"] [",$n1*$array22,"]<br><br>";
              
       	break;

    case "potenciar":
    
       

   	echo"MATRIZ A<br>";
               echo"[",$array00,"] [",$array01,"] [",$array022,"]<br>";
               echo"[",$array10,"] [",$array11,"] [",$array12,"]<br>";
               echo"[",$array20,"] [",$array21,"] [",$array22,"]<br><br>";
              

    echo" MATRIZ A elevada a ^ $p =<br>";

             $v00=pow($array00,$p); $v01=pow($array01,$p); $v02=pow($array022,$p);
             $v10=pow($array10,$p); $v11=pow($array11,$p); $v12=pow($array12,$p);
             $v20=pow($array20,$p); $v21=pow($array21,$p); $v22=pow($array22,$p);

               echo"[",$v00,"] [",$v01,"] [",$v02,"]<br>";

               echo"[",$v10,"] [",$v11,"] [",$v12,"]<br>";

               echo"[",$v20,"] [",$v21,"] [",$v22,"]<br><br>";
              
       	break;
    }
}

   
   // LLAMAADO A LA FUNCION PARA MOSTRAR LOS RESULTADOS DE LAS OPERACIONES
  $mostar=calculadora_de_matrices($Arreglo00,$Arreglo01,$Arreglo02,$Arreglo10,$Arreglo11,$Arreglo12,$Arreglo20,$Arreglo21,$Arreglo22,$n,$pot,$opr );

     echo "$mostar";




 ?>