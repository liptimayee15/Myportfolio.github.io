
<?php 

require_once("config.php");
include("include/header.php");

?>
<div class="header-part">
<h1>Contact Me</h1>
</div>


<section class="contact" id="contact" style="display:flex;;">
<div class="mapouter">
    <div class="gmap_canvas">
        <iframe class="gmap_iframe"  src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Bhubaneswar&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">

        </iframe>
        <a href="https://connectionsgame.org/">Connections Puzzle</a>
        </div>
</div>
<div>
    <form action="action.php" method="POST">
        
        <div class="input-box">
            <input type="text" name="name" id="" placeholder="Full Name">
            <input type="email" name="email" id="" placeholder="Email Address">
        </div>
        <div class="input-box">
            <input type="text" name="mobile" id="" placeholder="Mobile Number">
            <input type="text" name="subject" id="" placeholder="Email Subject">
        </div>
        <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <input type="submit" name="save" id="" value="Send Message" class="btn">
    
    </form>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <?php 
  if(isset($_SESSION['status']) && $_SESSION['status']!=''){

    ?>
<script>
    Swal.fire(
  '<?php echo $_SESSION['status'] ?>',
  'Please clicked the button!',
  '<?php echo $_SESSION['status_code'] ?>'
)
  </script>
<?php
  unset($_SESSION['status']);
  }
  
  ?>
  

<?php 
  
  include("include/footer.php");

  ?>