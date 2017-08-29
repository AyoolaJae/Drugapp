<?php
  include_once 'config.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <style type="text/css">
  	
  	#para2{
  		text-align: center;
      


  		
  		
  	}
  	#para1{
  		background-color: grey;
  		text-align: center;
   		font-family: georgia;
  	}
  	#iconsearch{
  		background-color: grey;
  		 
  	}
    #para3{
      width: 700px;
      height: 30px;
      border-radius: 4px;

    }
    .resultTable th,td {
      text-align: center;
      padding-right: 20px;
      padding-left: 20px;
    }

  
  </style>
    
</head>
<body>
<div class="jumbotron" id="para1">
	<h1>Welcome to Drugs.com!</h1>
	<p>The largest online drug directory</p> 
	<p></p>
</ul>
</div>
<div id="para2">
	<div>
		<div>
      <form name="search_form" action="searchProc.php" method="post">
        <input type="text" name="search" placeholder="Enter your Search here" id="para3"><input type="submit" value = "Search" class="btn btn-default btn-lg" id="iconsearch">
      </form>

		</div>
		<?php
      if ($_SESSION['result']!=NULL) {
        echo $_SESSION['result'];
        $_SESSION['result']=NULL;
      }
    ?><input type="submit" name="showall" value="SeeAll" class="btn btn-default btn-lg"> 
    <?php
      if ($_SHOWALL['result']!=NULL) {
        echo $_SHOWALL['result'];
        $_SHOWALL['result']=NULL;
      }
    ?>
	</div>
</div>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
