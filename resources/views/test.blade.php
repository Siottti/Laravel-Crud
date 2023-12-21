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
     <h1>Login Form</h1>
        <form action="/create-profile" method="POST">
            @csrf
            Firstname:<input type="text" name="fname" placeholder="Enter First name:"> <br>
            Middlename:<input type="text" name="mname" placeholder="Enter Middle name:"> <br>
            Lastname:<input type="text" name="lname" placeholder="Enter Last name:">
            <button type="submit">submit</button>
        </div>
    </div>
    
</body>
</html>
<script>

</script>