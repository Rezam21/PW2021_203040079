<!-- Reza Marchyana -->
<!-- 203040079 -->
<!-- IF - C -->
<?php
    function changeStyle($tulisan, $style1, $style2)
    {
        echo "
            <div style='$style1'> 
                <p  style='$style2'> $tulisan </p>
            </div>
        ";
    }
    
    
    echo changeStyle
    ( 
        "Selamat Datang di Praktikum PW", 
        "border: 1px solid; box-shadow: 0px 1px 3px 2px; width: 700px;", 
        "font-family: Arial; font-size:28px; color:#8c782d; font-style:italic; font-weight: bold;"
    );

?>