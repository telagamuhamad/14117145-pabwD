<html>  
<head>  
<title></title>  
</head>  
<body>  
<form method="post">  
    Masukan Nilai <br/>  
    <br/>
    <input type="number" name="number" >  
   </form>  
<?php   
    if($_POST){  
        $f = 1;   
        $number = $_POST['number'];  
        echo "Factorial <br><br>";  
        for ($i = 1; $i <= $number; $i++){         
            $f = $f * $i;  
            }  
            echo $f . "<br/><br/>";  
    }  
?>  
</body>  
</html>