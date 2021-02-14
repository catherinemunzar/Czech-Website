<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>

  <<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = $email;
  $subject = "Website Message Confirmation";
  $body = "Thank you for contacting me, $name. Your  message was: \n\n";
  $body .= $message "\n";
  $body .= "You may expect a response within one business day!";
  $header = "from: catherine.munzar@pepperdine.edu";
  mail($to,$subject,$body,$header);
   ?>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Intrested in learning more? Please leave a message!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Malibu, CA<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: 925-428-7729<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: catherine.munzar@pepperdine.edu<br>
      </div>
      <div class="w3-col m6">
        <form action="form.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <?php echo $name; ?>
            </div>
            <div class="w3-half">
              <?php echo $email; ?>
            </div>
          </div>
          <?php echo $message; ?>
          <button class="w3-btn w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
