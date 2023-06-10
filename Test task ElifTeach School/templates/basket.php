<?php 
  require "../connect.php";

  $result = mysqli_query($connect, "SELECT * FROM food");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кошик</title>
    <link rel="stylesheet" href="../static/style_basket.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body >
    <!DOCTYPE html>
<html lang="en">



<body>
<div class="container"> 
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="food-tab" data-toggle="tab" href="#food" role="tab" aria-controls="food" aria-selected="true">Корзина</a>
          </li>
          <li style="margin-left: 770px; margin-top: 10px;">
            <p><a href="../templates/profile.php" class="btn btn-primary btn-sm">Профіль</a></p>   
          </li>
          <li style="margin-left: 970px; margin-top: -47px;">
            <button class="btn btn-primary btn-sm" onclick="submitOrder()">Оформити замовлення</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="food" role="tabpanel" aria-labelledby="food-tab">
                <div class="container">
                        <?php if(mysqli_num_rows($result) > 0):?>
                          <div class="row" style="margin-top: 20px;">
                          <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                <div class="col-md-4">
                                  <div class="card">
                              <div class="card-body">
                                <img src="<?php echo $row['img']; ?>" class="card-img-top" height="190px" alt="Food Image">
                                <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                <input type="number" class="form-control" name="number" value="<?php echo $row['number']; ?>"> 
                                <p class="card-text">Ціна: <?php echo $row['price']; ?>$</p>
                                <button class="btn btn-primary" onclick="deleteData(<?php echo $row['id']; ?>)" data-id="<?php echo $row['id']; ?>" style="margin-top: 10px;" id="basket" type="submit">Видалити замовлення</button>
                              </div>
                              </div>
                          </div>
                    
                            <?php endwhile;?>
                            </div>
                        <?php endif;?>
                </div>
          </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../js/getDataFromBasket.js"></script>                            

</body>
</html>