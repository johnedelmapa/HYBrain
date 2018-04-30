<?php require('partials/head.php'); ?>


    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5545.663993871166!2d122.97685764039264!3d10.627821858919132!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aece0fc9c23ad5%3A0xfcd65cf61577b01b!2s4th+St%2C+Bacolod%2C+6100+Negros+Occidental!5e0!3m2!1sen!2sph!4v1524058869145" 
    width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    <div class="container"> <br>  
        
      <h5>Contact Us</h5>
       <!-- FORMS -->
       <form>
         <div class="input-field">
           <input type="text" id="name">
           <label class="active" for="name">Name</label>
         </div>
         <div class="input-field">
           <input type="email" id="email" class="validate">
           <label class="active" for="email">Email</label>
         </div>
         <div class="input-field">
           <textarea type="email" id="textarea" class="materialize-textarea"></textarea>
           <label class="active" for="textarea">Message</label>
         </div>

         <button class="btn waves-effect waves-light" type="submit" name="action">Submit
         <i class="material-icons right">send</i>
         </button>
       </form>
    </div>

<?php require('partials/footer.php'); ?>
