<?php        

        include_once 'sem1finalwebsite.html'; //add template
        require_once 'login.php';  //add login credentials
        $conn = mysqli_connect($host, $user, $pass, $db, $port); 
        if($conn->connect_error) die($conn->connect_error);       

        $option = isset($_POST['imgName']) ? $_POST['imgName'] : false;
        if ($option){
            $request = $_POST['imgName'];
            $query = " select imgName from imgTable where name = '$request'"                                  . $request . "';"; // create the query
            $result = mysqli_query($conn, $query); //post the query
            while ($row = mysqli_fetch_assoc($result)) { 
                echo "<img src = '" . $row['imgName']. "' alt=".$row[imgName]                                                                  echo "some label html" . $row['myField2'];
            }
        }
        $result->close();
        $conn->close();
   ?>