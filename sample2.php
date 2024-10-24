<?php
    function display($name,$age,$sex,$nationality){
        $temp = "";
        $n = count($name);
        for($a = 0; $a < $n;$a++){
            for($b = $a+1; $b < $n; $b++){
                if($name[$a]>$name[$b]){
                    $temp = $name[$a];
                    $name[$a]=$name[$b]; 
                    $name[$b]=$temp;
                    $temp = $age[$a];
                    $age[$a]=$age[$b]; 
                    $age[$b]=$temp;
                    $temp = $sex[$a];
                    $sex[$a]=$sex[$b]; 
                    $sex[$b]=$temp;
                    $temp = $nationality[$a];
                    $nationality[$a]=$nationality[$b]; 
                    $nationality[$b]=$temp;
                }
            }
        }
        for($c=0; $c<$n; $c++){
            echo "Name : $name[$c]<br>
            Age : $age[$c]<br>
            Sex : $sex[$c]<br>
            Nationality : $nationality[$c]<br><br>";
        }
}
$name = array("Cedric", "Don", "Brian", "Luke", "Jane", "Rose", "Maria", "Anastasia", "Eiichiro", "Mario");
$age = array(20, 21, 19, 15, 18, 22, 25, 12, 30, 22);
$sex = array('M', 'M', 'M', 'M', 'F', 'F', 'F', 'F', 'M', 'M');
$nationality = array("American", "Thai", "Korean", "Canadian", "Filipino", "Swedish", "Mexican", "British", "Japanese", "Italian");       
display($name, $age, $sex, $nationality);

?>
