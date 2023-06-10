function addToCart(button) 
{
    var parentDiv = button.parentNode; 
    var name = parentDiv.querySelector('.card-title').innerText; 
    var price = parentDiv.querySelector('.price').innerText; 
    var image = parentDiv.querySelector('img').getAttribute('src');
    var number = document.getElementById('Input').value;
    
    price = parseInt(price);
    if (number != 0) 
    {
        price *= number;
    }
    else if (number == 0)
    {
      number = 1;
    }

    $.ajax({
        url: "../process_data.php",
        type: "POST",
        data: {
          name: name,
          price: price,
          image: image,
          number: number
        },
        success: function(response) 
        {
          console.log("Дані успішно доставлено на сервер");
        },
        error: function(xhr, status, error) 
        {
          console.error("Помилка при відпраці даних на сервер:", error);
        }
      });
  }