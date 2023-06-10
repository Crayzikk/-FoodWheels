function deleteData(id) 
  {
    $.ajax({
      url: "../delete_data.php",
      type: "POST",
      data: { id: id },
      success: function(response) 
      {
        console.log("Дані успішно видалено з бази даних");
      },
      error: function(xhr, status, error) 
      {
        console.error("Помилка при видаленні даних з бази даних:", error);
      }
    });
    location.reload();
  }

  function submitOrder() {
   
    var number = document.querySelector('input[name="number"]').value;
    var price = document.querySelector('.card-text').textContent;
    var name = document.querySelector('.card-title').textContent;
    
    
    $.ajax({
      url: "../process_order.php",
      type: "POST",
      data: {
        number: number,
        price: price,
        name: name
      },
      success: function(response) {
        console.log("Дані успішно занесено в базу даних");
        location.reload();
      },
      error: function(xhr, status, error) {
        console.error("Помилка при занесенні даних в базу даних:", error);
      }
    });

    window.location.href = "order.php";
  }
  