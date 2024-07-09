<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check which button was clicked
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        if ($action === 'create') {
            // Show create form
            echo "<h2>Create New Data</h2>";
            echo "<form action='create.php' method='post'>";
            echo "   <label for='new_data'>New Data:</label>";
            echo "   <input type='text' id='new_data' name='new_data'>";
            echo "   <button type='submit'>Submit</button>";
            echo "</form>";
        } elseif ($action === 'update') {
            // Show dropdown for update
            echo "<h2>Update Existing Data</h2>";
            echo "<form action='update.php' method='post'>";
            echo "   <label for='existing_data'>Select Data to Update:</label>";
            echo "   <select id='existing_data' name='existing_data'>";
            echo "       <option value='data1'>Data 1</option>";
            echo "       <option value='data2'>Data 2</option>";
            echo "       <option value='data3'>Data 3</option>";
            echo "   </select>";
            echo "   <button type='submit'>Submit</button>";
            echo "</form>";
        } else {
            echo "Invalid action.";
        }
    } else {
        echo "Action not specified.";
    }
}

?>
