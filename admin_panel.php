<?php
 require 'db_connect.php';

$from_date = '';
$to_date = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $from_date = $_POST['from_date'];
  $to_date = $_POST['to_date'];

  $sql = "SELECT * FROM book_appoinment WHERE Registration_Date BETWEEN '$from_date' AND '$to_date' ";
} else {
  $sql = "SELECT * FROM book_appoinment ";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel - Booking List</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <div class="title">
    <h2 class="mb-4">Booking List</h2>
  </div>

  <form method="POST" class="mb-4">
    <div class="row">
      <div class="col-md-4">
        <label for="from_date">From Date</label>
        <input type="date" class="form-control" id="from_date" name="from_date" value="<?php echo $from_date; ?>" required>
      </div>
      <div class="col-md-4">
        <label for="to_date">To Date</label>
        <input type="date" class="form-control" id="to_date" name="to_date" value="<?php echo $to_date; ?>" required>
      </div>
      <div class="col-md-4 align-self-end">
        <button type="submit" class="btn btn-primary">Filter</button>
      </div>
    </div>
  </form>

  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Company Name</th>
          <th>Address</th>
          <th>City</th>
          <th>State</th>
          <th>Postcode</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Registration Date</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
          // Output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['Appoinment_ID'] . "</td>";
            echo "<td>" . $row['First_Name'] . "</td>";
            echo "<td>" . $row['Last_Name'] . "</td>";
            echo "<td>" . $row['Company_Name'] . "</td>";
            echo "<td>" . $row['Address'] . "</td>";
            echo "<td>" . $row['Town_City'] . "</td>";
            echo "<td>" . $row['State_County'] . "</td>";
            echo "<td>" . $row['Postcode'] . "</td>";
            echo "<td>" . $row['Phone_Number'] . "</td>";
            echo "<td>" . $row['Email_Address'] . "</td>";
            echo "<td>" . $row['Registration_Date'] . "</td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='11' class='text-center'>No records found</td></tr>";
        }
        $conn->close();
        ?>
      </tbody>
    </table>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
