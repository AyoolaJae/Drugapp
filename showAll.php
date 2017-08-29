<?php
	require_once "config.php";
	$dname = sanitizeString($_POST['showall']);
	$sql = "SELECT * FROM drug_table WHERE name = '$dname'";
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
      $_SHOWALL['result']=$showResults;
      echo $_SHOWALL['result'];
      // header("Location: index.php")



?>