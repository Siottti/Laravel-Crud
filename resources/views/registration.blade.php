<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="w3-card-4">
  <div class="w3-container w3-brown">
    <h2>Registration Form</h2>
  </div>
  <form action='/store' id="test" method="POST" class="w3-container">
    @csrf
    <p>      
    <label class="w3-text-brown"><b>Full Name:</b></label>
    <input class="w3-input w3-border w3-sand" name="fname" type="text"></p>
    <p>      
    <label class="w3-text-brown"><b>Email:</b></label>
    <input class="w3-input w3-border w3-sand" name="email" type="email"></p>
    <p>      
    <label class="w3-text-brown"><b>Birthdate:</b></label>
    <input class="w3-input w3-border w3-sand" name="date" type="date"></p>
    <p>      
    <label class="w3-text-brown"><b>Password:</b></label>
    <input class="w3-input w3-border w3-sand" name="password" type="password"></p>
    <p>      
        <label class="w3-text-brown"><b>Confirm Password:</b></label>
        <input class="w3-input w3-border w3-sand" name="password_confirmation" type="password"></p>
    <p>
    
<button type="submit" class="w3-btn w3-brown">submit</button>
    <p style="text-align:right;">Already have an account?<a href="{{ url('/login') }}" style="color:dodgerblue"> Login Now</a></p>
  </form>
</div>

</body>
</html> 
<script>

</script>