<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
 <div class="class" id="test">
     <h1>Logins Form</h1>
        <form action="/appointment" method="POST">
            @csrf
            Fullname:<input type="text" name="fname" placeholder="Enter  Fullname:"> <br>
            Email:<input type="text" name="email" placeholder="Enter Email:"> <br>
            Reason:<input type="text" name="rson" placeholder=" Reason For Appointment:"><br>
            Time:<input type="time" name="time" placeholder="Enter Last name:"><br>
            date:<input type="date" name="date" placeholder="Enter Last name:"><br>
       
            <button type="submit">submit</button>
        </div>
    </div>
    
</body>
</html>
<script>

</script>