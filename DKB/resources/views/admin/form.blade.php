
<html>

<head>

<style>

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password], textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.SendButton{
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.SendButton:hover {
  opacity:1;
}

</style>

</head>

<body>


<form action="action_page.php">
  <div class="container">
    <h1>Contact us</h1>
    <p>Please fill in the form details below.</p>
    <hr>

    <label for="FullName"><b>Full Name</b></label>
    <input type="text" placeholder="Enter your Full Name" name="FullName" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="subject"><b>Subject</b></label>
     <input type="text" placeholder="Subject" name="subject" required>

 <label for="message"><b>Message</b></label>
     <textarea id="message" name="message" rows="10" cols="10" placeholder="Write your message with details here..."></textarea>
   
    <hr>

    <button type="submit" class="SendButton">Send</button>
  </div>

  
</form> 






</body>

</html>