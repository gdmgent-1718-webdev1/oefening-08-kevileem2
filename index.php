<?php

function fiftyshades(){
    for($i = 0; $i < 50; ++$i){
        $value = round((255 / 50) * $i);
        echo "<div style='background-color:rgb(${value},${value},${value});width:20px;height:20px'></div>";
    }
}
fiftyshades();