<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Number Factorial, with JavaScript">
    <meta name="keywords" content="Immaculata, ICD2O">
    <meta name="author" content="Isaaq Simon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io (24)/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io (24)/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io (24)/favicon-16x16.png">
    <link rel="manifest" href="./favicon_io (24)/site.webmanifest">
    <title>Number Factorial</title>
    <link rel="stylesheet" href="./css/style.css"/>
  </head>
<body>

  <h1>Factorial Calculator</h1>

  <form method="POST">
    <label for="userNumber">Enter a positive integer:</label>
    <input type="text" name="userNumber" id="userNumber" required>
    <button type="submit">Calculate</button>
  </form>

  <div class="output">
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["userNumber"];

        // Check if input is a valid integer and non-negative
        if (filter_var($input, FILTER_VALIDATE_INT) === false || $input < 0) {
          echo "Invalid input";
        } else {
          $number = (int)$input;
          $result = 1;
          $i = $number;

          // Use a do..while loop to calculate factorial
          do {
            if ($i === 0) break;
            $result *= $i;
            $i--;
          } while ($i > 0);

          echo "The factorial of $number is: $result";
        }
      }
    ?>
  </div>

</body>
</html>