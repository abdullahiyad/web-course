<?php
// Define the employee array with salary information
$employees = array('ahmed' => 10000, 'khaled' => 2500, 'rawan' => 6000, 'abeer' => 2000);

// Initialize the total salary variable
$total_salary = 0;
?>

<!DOCTYPE html>
<html>
<head>
<title>Employee Salaries</title>
</head>
<body>
<table border="1">
  <thead>
    <tr>
      <th>Employee Name</th>
      <th>Salary</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($employees as $name => $salary) {
      echo "<tr>";
      echo "<td>$name</td>";
      echo "<td>$salary</td>";
      echo "</tr>";

      // Calculate the total salary
      $total_salary += $salary;
    }
    ?>
  </tbody>
  <tfoot>
    <tr>
      <th colspan="2">Total Salary: <?php echo $total_salary; ?></th>
    </tr>
  </tfoot>
</table>
</body>
</html>