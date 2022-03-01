<?php require_once "./Calculator.php";

// If the submit button has been pressed
if (isset($_POST['submit'])) {

    // Check number values
    if (is_numeric($_POST['num_1']) && is_numeric($_POST['num_2'])) {
        $calculator = new \App\Calculator;

        // Calculate total
        if ($_POST['operation'] == 'plus') {
            $total = $calculator->add($_POST['num_1'], $_POST['num_2']);
        } 
        // else if ($_POST['operation'] == 'minus') {
        //     $total = $calculator->subtract($_POST['num_1'], $_POST['num_2']);
        // } else if ($_POST['operation'] == 'times') {
        //     $total = $calculator->multiply($_POST['num_1'], $_POST['num_2']);
        // } else if ($_POST['operation'] == 'divided by') {
        //     $total = $calculator->divide($_POST['num_1'], $_POST['num_2']);
        // }

        // 
        echo "<h1>{$_POST['num_1']} {$_POST['operation']} {$_POST['num_2']} equals {$total}</h1>";

    } else {

        // Print error message to the browser
        echo 'Numeric values are required';
    }
}