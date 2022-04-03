<?php
	$server = "talias2.sg-host.com";
    $userid = "uwggwgijazowf";
    $pw = "9wr2p5brddtg";
    $db = "dblsb9jeuotbq6";

    //Create connection
	$conn = new mysqli($server, $userid, $pw );

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
	}

	//select the database
    $conn->select_db($db);

    //run a query
    $sql = "SELECT * FROM Products";
    $result = $conn->query($sql);

    //get results
    if ($result->num_rows > 0) {
    	echo "[";
        $count = 0;
        while($row = $result->fetch_assoc()) {
        	echo json_encode($row);
            $count++;
            if ($count < 5) {
                echo ";";
            } else {
				echo "]"; 
			}
		} 
	} else 
		 echo "no results";

	//close the connection
    $conn->close();
?>

