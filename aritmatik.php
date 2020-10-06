<!DOCTYPE html>

<form method= "GET" action= "index.php">    
<input type="text" name="a"
    <?php
    if (isset($_GET["a"]))
        echo 'value="'.$_GET["a"].'"';
    ?>
>
<select name="opr">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">x</option>
    <option value="/">/</option>
</select>
<input type="text" name="b"
    <?php
        if (isset($_GET["b"]))
            echo 'value="'.$_GET["b"].'"';
        ?>
>
<input type="submit" value="=">
<?php
//isset utk mengecek
if (isset($_GET["a"]) && strlen($_GET["a"])){
    switch($_GET["opr"]){
        case "+" :
            {$result = $_GET["a"] + $_GET["b"]; break;}
        case "-" :
            {$result = $_GET["a"] - $_GET["b"]; break;}
        case "*" :
            {$result = $_GET["a"] * $_GET["b"]; break;}
        case "/" :
            {$result = $_GET["a"] / $_GET["b"]; break;}
    } 
    echo $result; 
}
?>
</form>