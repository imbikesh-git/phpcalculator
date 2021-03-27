<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="main-conatainer">
        <div class="title">
            <h2>PHP CALCULATOR</h2>
        </div>
        <div class="number">
            <form action="" method="get">
                <label for="number-one">Enter the number:</label>
                <input type="text" class=form-control name=number-one placeholder="Enter your first number">
                <label for="number-two">Enter the number:</label>
                <input type="text" class=form-control name=number-two placeholder="Enter your second number"><br>
                <select name="operator" class="form-select" id="option">
                        <option>Add</option>
                        <option>Substract</option>
                        <option>Multiply</option>
                        <option>Divide</option>
                </select><br><br> 
                <input type="submit" class="btn btn-success" name="submit">
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>


<div class="submit-style">
    <?php 
    if(isset($_GET['submit'])){
        $num1 = $_GET['number-one'];
        $num2 = $_GET['number-two'];
        $operator = $_GET['operator'];

        switch($operator){
            case "Add":
                echo "The sum of two number is: ";
                echo $num1 + $num2;

            break;

            case "Substract":
                echo "The substract of two number is: ";
                echo $num1 - $num2;
            break;

            case "Multiply":
                echo "The multiply of two number is: ";
                echo $num1 * $num2;
            break;

            case "Divide":
                echo "The divide of two number is: ";
                echo $num1 / $num2;
            break;
        }
    }
    ?>
</div>
