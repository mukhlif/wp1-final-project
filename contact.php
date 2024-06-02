<!DOCTYPE html>
<html>
<head>
	<title>Contact Me</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
  <?php
  include('navbar.php');?>
   
    <!-- Contact Section -->
    <section id="contact">
      <h2>Get in Touch</h2>
      <p>Call us: +44 1234 567890</p>
      <p>Email us: [info@likely-story.co.uk](mailto:info@likely-story.co.uk)</p>
      <form>
        <input type="text" placeholder="Your Name">
        <input type="email" placeholder="Your Email">
        <textarea placeholder="Your Message"></textarea>
        <button>Send</button>
      </form>
    </section>
    <?php include('footer.php');?>
</body>
</html>