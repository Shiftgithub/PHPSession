<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

# First Example
print <<<END
This uses the "here document" syntax to output
multiple lines with $variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon no extra whitespace!
END;

print "<br>";
# Second Example
print "This spans
multiple lines. The newlines will be
output as well<br><br>";
?>
<hr>

<?php
if (3 == 2 + 1)
print("Good - I haven't totally lost my mind.<br>");

if (3 == 2 + 1) {
print("Good - I haven't totally");
print("lost my mind.<br>");
}
?>

</body>
</html>
