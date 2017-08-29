<?php
	require_once "config.php";
	$dname = sanitizeString($_POST['search']);
	$sql = "SELECT id, name, dosage, diseases, adverse_effect,manufacturer
			FROM drug_table WHERE name = '$dname'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);

	$showResults ="
	<table class = 'resultTable'>
        <tr>
          <th>
            Name
          </th>
          <th>
            Dosage
          </th>
          <th>
            Diseases
          </th>
          <th>
            Adverse Effect
          </th>
          <th>
            Manufacturer
          </th>
        </tr>
        <tr>
          <td>".$row['name']."</td>
          <td>".$row['dosage']."</td>
          <td>".$row['diseases']."</td>
          <td>".$row['adverse_effect']."</td>
          <td>".$row['manufacturer']."</td>
        </tr>   
      </table>
      ";
      $_SESSION['result']=$showResults;
      header("Location: index.php")


?>