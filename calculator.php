<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input equation from the form
    $equation = $_POST['equation'];

    // Remove spaces from the input for easier processing
    $equation = str_replace(' ', '', $equation);

    // Use a regular expression to match and process the basic math operations
    if (preg_match('/^(\d+)([+\-*\/])(\d+)$/', $equation, $matches)) {
        $num1 = $matches[1];
        $operation = $matches[2];
        $num2 = $matches[3];

        // Perform the operation based on the operator
        if ($operation == '+') {
            $result = $num1 + $num2;
        } elseif ($operation == '-') {
            $result = $num1 - $num2;
        } elseif ($operation == '*') {
            $result = $num1 * $num2;
        } elseif ($operation == '/') {
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero!";
            }
        }
    } else {
        $result = "Invalid format! Please use numbers and an operator (e.g., 5 + 3).";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Calculator</title>
    <style>
        /* Center the form and result in the middle of the page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
        }
        
        .calculator {
            text-align: center;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        button:hover {
            background-color: #45a049;
        }

        h3 {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h2>Boloy Calculator</h2>
    <form method="POST">
        <input type="text" name="equation" placeholder="e.g., 5 + 3" required>
        <button type="submit">Calculate</button>
    </form>

    <?php if (isset($result)): ?>
        <h3>Result: <?php echo $result; ?></h3>
    <?php endif; ?>
</div>

</body>
</html>
