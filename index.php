<!DOCTYPE html>
<html lang=en>
<head>
    <link type='text/css' rel='stylesheet' href='style.css'/>
    <title>PHP!</title>
</head>
<body>
<div class="header"><h1>
        <?php
        $welcome = "Let's get started with PHP!";
        echo $welcome;
        ?>
    </h1></div>
<p><strong>Generate a list:</strong>
    <?php
    for ($number = 1; $number <= 10; $number++) {
        if ($number <= 9) {
            echo $number . ", ";
        } else {
            echo $number . "!";
        }
    }; ?>
</p>
<p><strong>Things you can do:</strong>
    <?php
    $langs = array("Talk to databases",
        "Send cookies", "Evaluate form data",
        "Build dynamic webpages");
    foreach ($langs as $lang) {
        echo "<li>$lang</li>";
    }

    unset($lang);
    ?>
</p>
<p><strong>This jumbled sentence will change every time you click Submit!<strong></p>
<p>
    <?php
    $words = array("the ", "quick ", "brown ", "fox ",
        "jumped ", "over ", "the ", "lazy ", "dog ");
    shuffle($words);
    foreach ($words as $word) {
        echo $word;
    };

    unset($word);
    ?>
</p>
</body>
</html>
