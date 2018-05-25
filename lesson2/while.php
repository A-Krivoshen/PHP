 <?php 
  
   $x = rand(0,100);
    $first_var = 1;			
    $second_var = 1;	
   echo "Наше Число ".$x, PHP_EOL;
   while(true){
	if($first_var > $x){
	    echo 'Задуманное число НЕ входит в числовой ряд!';break;
	} else {
	    if($first_var === $x){
		echo "Задуманное число ВХОДИТ в числовой ряд!";break;
	    } else {
		$third_var = $first_var;
                 $first_var += $second_var; 
		$second_var = $third_var;
	    }
	};
    };
?>