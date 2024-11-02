<?php

function showCategories($product){
    foreach ($product as $category){
        changeBtnColor($category);
    }
}


function changeBtnColor($category){
    if($category === "Javascript"){
        echo "<span class='btn btn-warning text-white rounded-3 fw-semibold' style='font-size:14px;'>Javascript</span> ";
    } else if ($category === "Nodejs"){
        echo "<span class='btn btn-success text-white rounded-3 fw-semibold' style='font-size:14px;'>Nodejs</span> ";
    } else if ($category === "React"){
        echo "<span class='btn btn-info text-white rounded-3 fw-semibold' style='font-size:14px;'>React</span> ";
    } else if ($category === "PHP"){
        echo "<span class='btn btn-primary text-white rounded-3 fw-semibold' style='font-size:14px;'>PHP</span> ";
    } else if ($category === "Laravel"){
        echo "<span class='btn btn-danger text-white rounded-3 fw-semibold' style='font-size:14px;'>Laravel</span> ";
    } else if ($category === "Server"){
        echo "<span class='btn btn-success text-white rounded-3 fw-semibold' style='font-size:14px;'>Server</span> ";
    } else {
        echo "<span class='btn btn-secondary text-white rounded-3 fw-semibold' style='font-size:14px;'>" . $category . "</span> ";
    }
}

?>