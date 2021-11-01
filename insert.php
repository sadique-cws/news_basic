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
<body class="bg-dark">

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
       <div class="col-8 mx-auto">
           <div class="card">
               <div class="card-header">Insert News Post here</div>
               <div class="card-body">
                   <form action="insert.php" method="post">
                        <div class="mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">author</label>
                            <input type="text" name="author" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">content</label>
                            <textarea rows="10" name="content" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="create" class="btn btn-success w-100">
                        </div>
                   </form>
                   <?php 
                    $con = mysqli_connect('localhost','root','','news');

                    if(isset($_POST['create'])){
                        $title = $_POST['title'];
                        $author = $_POST['author'];
                        $content = $_POST['content'];

                        $query = mysqli_query($con, "insert into posts (title,author,content) value ('$title','$author','$content')");
                        $result = ($query)? "success" : "fail";

                        echo "<script>alert('$result')</script>";
                    }

                    ?>
               </div>
           </div>
       </div>
   </div>
</div>

    
</body>
</html>