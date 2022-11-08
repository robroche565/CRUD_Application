<?php 
    include_once("dbConnection/db_connect.php");
    include_once("functions/fetch.php");

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sample CRUD</title>
    </head>
    <body>
        <h1>My Subjects</h1>
        <a href="forms/addform.php">Add Subject</a>
        <table>
            <tr>
                <td>ID</td>
                <td>Subject Code</td>
                <td>Subject Name</td>
                <td>Action</td>
            </tr>
            <?php 
                while($res = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$res['Subject_ID']."</td>";
                    echo "<td>".$res['Subject_Code']."</td>";
                    echo "<td>".$res['Subject_Name']."</td>";
                    echo "<td><a href=\"forms/editform.php?id=$res[Subject_ID]\">Edit</a>  |
                            <a href=\"functions/delete.php?id=$res[Subject_ID]\"
                            onClick=\"return confirm('Are you sure you want to delete this?');\">Delete</a></td>";
                }
            
            ?>
            
        </table>
    </body>
</html>