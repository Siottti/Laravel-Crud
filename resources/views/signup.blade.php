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
        <form action="/create_signups" method="POST">
            @csrf
            Firstname:<input type="text" name="fname" placeholder="Enter First name:"> <br>
            Middlensame:<input type="text" name="mname" placeholder="Enter Middle name:"> <br>
            Lastname:<input type="text" name="lname" placeholder="Enter Last name:"><br>
            Email:<input type="text" name="email" placeholder="Enter Last name:"><br>
            Password:<input type="text" name="pass" placeholder="Enter Last name:"><br>
            Confirm Password:<input type="text" name="cpass" placeholder="Enter Last name:"><br>
            <button type="submit">submit</button>
        </div>
    </div>
    
</body>
</html>
<script>

</script>