<?php require ('partials/head.php'); ?>

<div class="container">

    <h4>Update User</h4><br>
    <form method ="POST" action="/users/update">
            <input name="id" value='<?= $_POST['id']?>'hidden>
            <div class="input-field">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" id="icon_prefix" name="name" value='<?= $_POST['name']?>'>   
                
            </div>
            <div class="input-field">
                <i class="material-icons prefix">cake</i>
                <input type="text" class="datepicker" id="icon_prefix" name="birthdate" value='<?= $_POST['birthdate']?>'>   
    
            </div>
            <div class="input-field">
                <i class="material-icons prefix">phone</i>
                <input type="text" id="icon_telephone" name="telephone" value='<?= $_POST['telephone']?>' >   
              
            </div>
            <div class="input-field">
                <i class="material-icons prefix">today</i>
                <input type="text" id="address" name="address" value='<?= $_POST['address']?>'>   
             
            </div>
            

            <button class="btn waves-effect waves-light" type="submit" name="action">Update
            <i class="material-icons right">send</i>
            </button>
            </form>

</div>

<?php require ('partials/footer.php');?> 