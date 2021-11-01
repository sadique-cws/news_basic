<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>news</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#27ae60">
    <div class="container">
        <a href="index.php" class="navbar-brand">News</a>

        <form action="" class="d-flex mx-auto">
            <input type="search" class="form-control" placeholder="enter news title" size="60">
            <input type="submit" class="btn btn-dark">
        </form>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="insert.php" class="nav-link">Insert</a></li>
        </ul>
    </div>
</nav>


<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-9">
           <?php 
           $con = mysqli_connect('localhost','root','',"news");
            $query = mysqli_query($con,"select * from posts");
           while($row = mysqli_fetch_array($query)){
            ?>
             <div class="card mb-3">
                <div class="card-body">
                    <h4><?php echo $row['title'];?></h4>
                    <div class="row">
                        <div class="col-3 fw-bold"><?php echo $row['author'];?></div>
                        <div class="col"><?php 
                                    $raw = $row['date_of_creation'];
                                    echo $date = date("l d-M-Y", strtotime($raw));
                        
                        ?></div>
                    </div>
                    <p class="small"><?php echo $row['content'];?></p>
                    <a href="" class="btn btn-success float-end">Read More</a>
                </div>
            </div>

           <?php } ?>
       </div>
    </div>
</div>

    
</body>
</html>