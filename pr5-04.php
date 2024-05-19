<!DOCTYPE html>
<html>

<head>
    <title>Practical 5-04</title>
</head>

<body>
    <h2>Morse Code Encoder</h2>
    <form method="post">
        <label for="message">Enter message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>
        <input type="submit" name="submit" value="Encode">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $message = strtoupper($_POST['message']);

        $morseCode = array(
            'A' => '.-',
            'B' => '-...',
            'C' => '-.-.',
            'D' => '-..',
            'E' => '.',
            'F' => '..-.',
            'G' => '--.',
            'H' => '....',
            'I' => '..',
            'J' => '.---',
            'K' => '-.-',
            'L' => '.-..',
            'M' => '--',
            'N' => '-.',
            'O' => '---',
            'P' => '.--.',
            'Q' => '--.-',
            'R' => '.-.',
            'S' => '...',
            'T' => '-',
            'U' => '..-',
            'V' => '...-',
            'W' => '.--',
            'X' => '-..-',
            'Y' => '-.--',
            'Z' => '--..',
            '0' => '-----',
            '1' => '.----',
            '2' => '..---',
            '3' => '...--',
            '4' => '....-',
            '5' => '.....',
            '6' => '-....',
            '7' => '--...',
            '8' => '---..',
            '9' => '----.',
            ' ' => '/'
        );

        $encodedMessage = '';
        $words = explode(' ', $message);
        foreach ($words as $word) {
            $chars = str_split($word);
            foreach ($chars as $char) {
                if (isset($morseCode[$char])) {
                    $encodedMessage .= $morseCode[$char] . ' ';
                }
            }
            $encodedMessage .= '/ ';
        }

        echo "<h3>Encoded Message:</h3>";
        echo "<p>$encodedMessage</p>";
    }
    ?>
</body>

</html>