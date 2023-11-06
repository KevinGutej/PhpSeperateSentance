<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="sentence">Enter a sentence: </label>
        <input type="text" name="sentence" id="sentence">
        <input type="submit" value="Finish">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sentence = $_POST["sentence"];

        $letters = $numbers = $symbols = '';

        for ($i = 0; $i < strlen($sentence); $i++) {
            $char = $sentence[$i];
            if (is_numeric($char)) {
                $numbers .= $char;
            } elseif (ctype_alpha($char)) {
                $letters .= $char;
            } else {
                $symbols .= $char;
            }
        }
    }

    echo "<p>letters: $letters</p>";
    echo "<p>numbers: $numbers</p>";
    echo "<p>symbols: $symbols</p>";

    ?>
    
</body>
</html>
