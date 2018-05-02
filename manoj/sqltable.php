<?php
$link = mysqli_connect("127.0.0.1", "root", "admin", "phpcourse");

if ($result = mysqli_query($link, "select * from health")) {
    while($row = mysqli_fetch_assoc($result)){
        array_push($students,$row);
    }
    mysqli_free_result($result);
}
mysqli_close($link);
?>


<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">#</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="#">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Age</label>
            <input type="text" class="form-control" placeholder="City" name="Age">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">gender</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="gender">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Hospital</label>
            <input type="text" class="form-control" placeholder="City" name="Hospital">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">doctor Name</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="doctor Name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">disease</label>
            <input type="text" class="form-control" placeholder="City" name="disease">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">previous doctor diagonisis</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="previous doctor diagonisisname">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">infected date</label>
            <input type="text" class="form-control" placeholder="City" name="infected date">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">cure date</label>
            <input type="text" class="form-control" placeholder="City" name="cure date">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="my-5"</div>
    <?php
    
    ?>
    <div class="my-5"</div>
    <table class="table table-bordered table-dark">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">age</th>
        <th scope="col">gender</th>
        <th scope="col">hospital</th>
        <th scope="col">doctor name</th>
        <th scope="col">disease</th>
        <th scope="col">previous doctor diagonisis</th>
        <th scope="col">infected date</th>
        <th scope="col">cure date</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach($health as $health){
            ?>
            <tr>
                <th scope="row"><?php echo $health['id']; ?></th>
                <td><?php echo $health['#']; ?></td>
                <td><?php echo $health['Name']; ?></td>
                <td><?php echo $health['age']; ?></td>
                <td><?php echo $health['gender']; ?></td>
                <td><?php echo $health['hospital']; ?></td>
                <td><?php echo $health['doctor name']; ?></td>
                <td><?php echo $health['disease']; ?></td>
                <td><?php echo $health['previous doctor diagonisis']; ?></td>
                <td><?php echo $health['infected date']; ?></td>
                <td><?php echo $health['cure date']; ?></td>
            </tr>
            <?php
        }
    ?>
    </tbody>
    </table>
</div>
</body>
</html>
