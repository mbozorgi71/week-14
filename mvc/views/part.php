<?php





?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</head>

<body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<div class="m-5 text-primary">

    <h1>enter hospital part information </h1>

    <form action="" method="post">



        <div class="mb-3">
            <label   class="form-label">part name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="enter name" >

        </div>

        <label   class="form-label"> Type of Activity </label>
        <div class="form-floating mb-3">

            <textarea class="form-control" placeholder=" enter your Type of Activity" id="description"></textarea>

        </div>

        <button type="submit" name="addPart" class="btn btn-primary">add part</button>
        <button type="submit" name="changePart" class="btn btn-primary">change part</button>
        <button type="submit" name="deletePart" class="btn btn-primary">delete part</button>
    </form>

</div>
</body>
</html>
