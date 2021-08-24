<?php
    $nilai = 81;
    echo "Nilai Siswa Adalah : "; 
    if($nilai>90){
        echo "A+";
    }
    elseif($nilai>80){
        echo "A";
    }
    elseif($nilai>70){
        echo "B+";
    }
    elseif($nilai>60){
        echo "B";
    }
    elseif($nilai>50){
        echo "C+";
    }
    elseif($nilai>40){
        echo "C";
    }
    else{
        echo "F";
    }
?>