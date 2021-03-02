<?php require('header.php')?>
        <?php
        
        //connect to db
        require('connect.php');
        
        //Set up our query
        $sql = "SELECT * FROM song";
        
        //prepare the query
        $statement = $db->prepare($sql);

        //execute the query
        $statement->execute();

        //use fetchAll to set a results
        $records = $statement->fetchAll();

        //eco out top of table
        echo "<table class= 'table-dark table-striped'><tbody>";

        foreach($records as $record) {
            echo"<tr><td>". $record['first_name']. 
            "</td><td>" . $record['last_name'] . "</td><td>" . $record['genre'] . "</td><td>" . $record['location'] . "</td><td>" . $record['age'] . "</td><td>" . $record['email']. "</td><td>" . $record['favsong']."</td></tr>"; 
        }
    
        echo "</tbody></table>"; 
    
        //close the DB connection 
        $statement->closeCursor(); 
    

        ?>
<?php require('footer.php')?>