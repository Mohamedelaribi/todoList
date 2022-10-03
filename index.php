<?php   
    include("insert.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <form class="m-5 container" action="insert.php" method="POST">
        <div class="mb-3 container" >
            <label for="task" class="form-label">Add Task</label>
            <input type="text" class="form-control" id="task" name="task">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    <div>


    <table>
        
    </table>
            <?php
            $todo = new Todolist(NULL,NULL,NULL);
            $rows = $todo->selectFromData();
            for($i=0;$i<count($rows);$i++){
                echo "<p>".$rows[$i]["task"]."</p>";
            }
        ?>
    </div>
    

</body>

</html>