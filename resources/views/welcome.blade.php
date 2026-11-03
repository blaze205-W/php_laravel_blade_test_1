<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>majaslapa par visu</h1>

    <?php

        $name_list = ["Leo","Teo","Mateo", "John Marston", "Dave"];

        echo "<h2> mūs atbalsta</h2>";

        echo "<ul>";
            foreach ($name_list as $name){
                echo "<li>" . $name;
            }
         echo "</ul>";
    ?>



    <form action="/form_receive" method="get">
        <div>
            <label for="text"> Name: </label>
            <input type="text" name="name">
            
        </div>
        <div>
            <label for="text"> Your opinion: </label>
            <textarea name="text" id=""></textarea>
        </div>
        <div>
            <button type="submit"> Send </button>
        </div>
    </form>


    
</body>
</html>