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
    <form class="w3-container" id="test" action="/create-logins">
      <p>      
      <label class="w3-text-brown"><b>Email:</b></label>
      <input class="w3-input w3-border w3-sand" name="Email" type="text"></p>
      
      <label class="w3-text-brown"><b>Password:</b></label>
      <input class="w3-input w3-border w3-sand" name="pass" type="password"></p>
      
      <button class="w3-btn w3-brown" type="submit">Submit</button></p>
      <p style="text-align:right;">Don't have an account?<a  href="{{ url('registration') }}"style="color:dodgerblue"> Register Now</a></p>
    </form>
  </div>