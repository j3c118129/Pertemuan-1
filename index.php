<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            #badan{
                background-color: #578a99;
            }            
            #navi{
                margin-left: 7%;
                height: max-content;
                width: 10%;
                border-radius: 30px;
                padding: 2% 0;
                font-size: 1.1em;
                background-color: #e3ebed;
            }
            .kotak{
                background-color: #e3ebed;
                min-height: 35%;
                max-width: 60%;
                border-radius: 30px;
                margin: 3% auto;
            }
            .isi{
                padding-top: 1%;             
            }
            /* input[type=text], select{
                width: 60%;
                border-radius: 10px;
                margin-left: 5%;
                height: 13%;
            } */
            .baris, #apa{
                padding-top: 0.5%;
                padding-top: 3%;
           }
           input[type=checkbox], input[type=radio]{
                margin-left: 5%;
           }
        </style>
    </head>
    <body id="badan">
        <div class="w3-sidebar  w3-bar-block" id="navi">
            <a href="" class="w3-bar-item w3-button" style="padding-top: 10%;text-align: center;">Pertemuan 1</a>
            <a href="../Pertemuan 2/01_tampildata.php" class="w3-bar-item w3-button" style="text-align: center;">Pertemuan 2</a>
            <a href="../Pertemuan 3/home.php" class="w3-bar-item w3-button" style="text-align: center;">Pertemuan 3</a>
        </div>
        <div class="kotak">
           
            <div class="isi" style="text-align: center">
                <?php include 'pert1.php' ?>
            </div> 
        </div>
    </body>
</html>