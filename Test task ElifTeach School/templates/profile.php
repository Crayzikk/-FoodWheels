<?php 
    session_start();

    if (!$_SESSION['users'])
    {
        header("Location: http://localhost/Test%20task%20ElifTeach%20School/templates/register.php");
    }
     
  
    require "../connect.php";
    $result = mysqli_query($connect, "SELECT * FROM history");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ваш профіль!</title>
    <link rel="stylesheet" href="../static/style_profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</head>
<body>

<div class="profile">
    <h1 class="prof">Ваш профіль</h1>
    <div class="profile-data">
      <h1><?= $_SESSION['users']['name'] ?></h1>
      <h2><?= $_SESSION['users']['email'] ?></h2>
    </div>
    <div class="profile-button">
            <a href="../templates/main.php" class="btn btn-success btn-lg">Головна</a>
            <a href="../templates/buy.html" class="btn btn-success btn-lg">Замовити</a>
            <a href="../templates/basket.php" class="btn btn-success btn-lg">Кошик</a>
            <a href="../templates/logout.php" class="btn btn-success btn-lg">Вийти</a>
    </div>
</div>

<div class="container" style="background-color: white; margin-top: 20px; border-radius: 10px;">
    <h1>ІСТОРІЯ</h1>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="name" role="tabpanel" aria-labelledby="name-tab">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Назва товару</th>
              <th scope="col">Кількість</th>
              <th scope="col">Ціна</th>
              <th scope="col">Дата</th>
            </tr>
          </thead>
          <tbody>
            <?php if(mysqli_num_rows($result) > 0):?>
            <tr>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['number'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo $row['date'];?></td>
                <?php endwhile?>
            </tr>
            <?php endif ?>
          </tbody>
        </table>
      </div>
  </div>
</body>
</html>