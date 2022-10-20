<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
    <div class="container mt-5">
        <form class="form-group custom-form" name="myForm" action="" method="POST">
        <h2 class="text-center display-5">Calculator Using JavaScript</h2>
            <div class="form-group row pt-5">
                <label class="col-sm-4 col-form-label" for="">First Number</label>
                <div class="col-sm-8">
                    <input class="form-control" type="number" id="first" name="firstNumber" placeholder="enter first number">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="">Second Number</label>
                <div class="col-sm-8">
                    <input class="form-control" type="number" id="second" name="secondNumber" placeholder="enter second number">
                </div>
            </div>
            <div class="form-group text-center ml-auto row mt-4 pt-3">
                <input type="submit" onclick="Addition()" value="Add" class="btn btn-sm btn-dark mr-2">
                <input type="submit" onclick="Substract()" value="Substract" class="btn btn-sm btn-dark mr-2">
                <input type="submit" onclick="Multiply()" value="Multiply" class="btn btn-sm btn-dark mr-2">
                <input type="submit" onclick="Divide()" value="Divide" class="btn btn-sm btn-dark mr-2">
                <input type="submit" onclick="Percentage()" value="Percentage" class="btn btn-sm btn-dark mr-2">
                <input type="submit" onclick="reset()" value="Reset" class="btn btn-sm btn-dark mr-2">
            </div>
        </form>
    </div>
    <div class="container border border-dark mt-5" type="hidden" style="width:15vw; height:100px; margin-top:20px;">
        <p class="text-center mt-3 display-4" id="Add"></p>
        <p class="text-center mt-3 display-4" id="Substract"></p>
        <p class="text-center mt-3 display-4" id="Multiply"></p>
        <p class="text-center mt-3 display-4" id="Divide"></p>
        <p class="text-center mt-3 display-4" id="Percentage"></p>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="./Bootstrap/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</body>
</html>