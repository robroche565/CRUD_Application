<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Data</title>
</head>
<body>
    <?php 
        include_once("../dbConnection/db_connect.php");

        if (isset($_POST['Submit'])) {
            $code = $_POST['code'];
            $name = $_POST['name'];

            if(empty($code) || empty($name)) {
                if(empty($code)) {
                    echo "Subject Code Field is empty";
                }
                if(empty($name)) {
                    echo "Subject Name Field is empty";
                }
                echo "<br/><a href =' javascript:self.history.back();'> Go Back</a>";
            }
            else {
                $result = mysqli_query ($link, "INSERT INTO tblsubjects(Subject_Code,Subject_Name) VALUES ('$code','$name')");
                echo "Data Added successfully";
                echo "<br/><a href = '../index.php'>View Result</a>";
            }
        }
    
    ?>
    
</body>
</html>