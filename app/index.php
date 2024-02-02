<?php
include("Connection.php");
?>
<!doctype html>
<html lang="en">

<head>
    <title>To Do LIst</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main class="container">
        </br>
        <div class="card">
            <div class="card-header">To Do list</div>
            <div class="card-body">


                <div class="mb-3">
                    <form action="" method="post">
                        <label for="tarea" class="form-label">Task:</label>
                        <input type="text" class="form-control" name="task" id="task" aria-describedby="helpId" placeholder="Write here your task" />
                        </br>
                        <input name="addTask" id="addTask" class="btn btn-primary" type="submit" value="Add Task" />

                </div>


                </form>
            </div>

            <ul class="list-group">


<?php 

foreach($records as $record){ ?>

<li class="list-group-item">
                    <div class="form-check">

                        <input class="form-check-input float-start" type="checkbox" value="" id="" checked />
                       &nbsp; <span class="float-start">&nbsp; <?php echo $record['task'];?></span>
                    <h6 class="float-start">
                    &nbsp; <a href="?id_task=<?php echo $record['id_task'];?>"><span class="badge bg-danger">x</span></a>
                    </h6> 
                </li>

<?php } ?>

            </ul>


            <div class="card-footer text-muted"></div>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>