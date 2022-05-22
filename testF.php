<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hello!";
        echo "<br/>";
        #Funksionet e stringjeve
        #strlen gjatesine e stringut
        echo strlen("USA");
        echo "<br/>";
        #str_word_count kthen numrin e fjaleve ne string
        echo str_word_count("United States  of America");
        echo "<br/>";
        #strrev e kthen stringun mbrapsht
        echo strrev("Buka");
        echo "<br/>";
        #strpos(text, word) kthen poziten e karakterit te pare nqs word gjendet brenda text
        echo strpos("Hello world", "world");
        echo "<br/>";
        #str_replace(find, replace, text) zevendeson find me replace ne stringun text.
    ?>
</body>
</html>