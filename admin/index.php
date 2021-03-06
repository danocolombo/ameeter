<?php
    // admin/index.php
    
	try {	
		require "../../configs/config.php";
		require "../common.php";

		$connection = new PDO($dsn, $username, $password, $options);

		//$sql = "SELECT * FROM tasks";
		#sql = "SELECT ID, ChurchName, ChurchCity, ChurchPostalCode, ChurchState FROM Host";

		$statement = $connection->prepare($sql);
		$statement->execute();

        $result = $statement->fetchAll();	

	} catch(PDOException $error) {
		echo $sql . "<br>" . $error->getMessage();
	}
?>


<?php require("../templates/header.php"); ?>

    <div class="container">
      <?php 
         require("../templates/nav.php");
         if (!$result && $statement->rowCount() == 0) { ?>
          <h4> No tasks to display. Add one above.</h4>
         <?php } 
         else 
         { 
            foreach ($result as $Host) { 
              require("../templates/showhost.php");
             } // <!-- foreach --> 
          } ?> <!-- else -->
      
    </div> <!-- container -->

    <?php require("../templates/footer.php"); ?>