<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wnameth=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Product</title>
</head>
<body>
    <div>
            <form  id="form" method="POST">
                @csrf
            <div>
                <label for="Product name">Product Name:</label>
                <input type="text" name="Pname" id="Pname" placeholder="Product name">
            </div>

            <div>
                <label for="Product Description">Product Description:</label>
                <input type="text" name="description" id="description" placeholder="Product Description">
            </div>

            <div>
                <label for="Product Price">Product Price:</label>
                <input type="text" name="price" id="price" placeholder="Product Price">
            </div>
             
            <div>
                <input type="submit" value="submit">
            </div>
        </form>
   </div>
</div>

  <script>
    $(document).ready(function(){
        $("form").submit(function(event){
            event.preventDefault()

            var Pname = document.getElementById("Pname").value
            var description = document.getElementById("description").value
            var price =  document.getElementById("price").value
                                            
            $.ajax({
            type:"POST",
            url: "/Product",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{Pname: Pname, description:description, price:price},
            dataType: "json",
            success: function(response){
              
                },
            error: function(data) {
                
              }
        });
       
           
        })
    })
  </script>





