<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 6/17/2019
 * Time: 2:18 PM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/my.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<body>
<form action="second.php" method="post" id="form" onsubmit="return validate()" >
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Customer ID</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="id" placeholder="customerID" name="cid"><span id="idloc"></span>
        </div>
    </div>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Customer Name</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="name" placeholder="customerName" name="name"><span id="nameloc"></span>
        </div>
    </div>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Customer Address</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="address" placeholder="customerAddress" name="address"><span id="addloc"></span>
        </div>
    </div>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Customer TP</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="tp" placeholder="customerTP" name="tp"><span id="numloc"></span>
        </div>
    </div>
    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">Customer Salary</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="salary" placeholder="customerSalary"name="salary"><span id="salloc"></span>
        </div>
    </div>
    <button type="submit" class="btn btn-success" value="add" form="form" id="btnadd">ADD</button>
</form>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/my.js"></script>
</body>
</html>
