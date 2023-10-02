<?php
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Formulaire</title>
  </head>
  <body>
    <form  action="thanks.php"  method="post">
        <div>
          <label  for="nom">Nom :</label>
          <input  type="text"  id="nom"  name="user_name">
        </div>
        <div>
          <label  for="firstname">Firstname :</label>
          <input  type="text"  id="nom"  name="user_firstname">
        </div>
        <div>
          <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>
        <div>
          <label  for="telephone">Téléphone :</label>
            <input type="int"     id="phone"  name="user_phone">
        </div>
        <div>
          <label  for="subject">Choose a subject :</label>
          <select id="subject" name="subject">
            <option value="food">Food</option>
            <option value="work">Work</option>
            <option value="holidays">Holidays</otpions>
          </select>
        </div>
        <div>
          <label  for="message">Message :</label>
          <textarea  id="message"  name="user_message"></textarea>
        </div>
        <div  class="button">
          <button  type="submit">Send your message !</button>
        </div>
    </form>
  </body>
</html>


