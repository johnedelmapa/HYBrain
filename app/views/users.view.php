<?php require ('partials/head.php'); ?>

<div class="container">

<h3>List of Users</h3>

<form method ="POST" action="/users">
     <div class="input-field">
      <i class="material-icons prefix">account_circle</i>
           <input type="text" id="icon_prefix" name="name">   
           <label class="active"  for="icon_prefix">Name</label>
     </div>
     <div class="input-field">
      <i class="material-icons prefix">cake</i>
           <input type="text" class="datepicker" id="icon_prefix" name="birthdate">   
           <label class="active"  for="icon_prefix">Birthdate</label>
     </div>
     <div class="input-field">
        <i class="material-icons prefix">phone</i>
           <input type="text" id="icon_telephone" name="telephone">   
           <label class="active" for="icon_telephone">Telephone</label>
     </div>
     
    
     <div class="input-field">
        <i class="material-icons prefix">today</i>
           <input type="text" id="address" name="address" required>   
           <label class="active" for="address">Address</label>
     </div>
    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
    </button>
</form>
		
<table class="highlight">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Birthdate</th>
            <th>Telephone</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <?php  foreach ($users as $user) : ?>
        <tr>
            <form method="POST" action="/users/delete" > 
                <td><input name="id" value='<?php echo $user->id; ?>' readonly style="border: none;"></td>
                <td><?= $user->name; ?></td>
                <td><?= $user->birthdate; ?></td>
                <td><?= $user->telephone; ?></td>
                <td><?= $user->address; ?></td>
                <td><button onclick="return confirm('Are you sure you want to delete?')" class="btn btn-small red darken-3 white-text">Delete</button>
                <a href="/update" class="btn btn-small orange darken-3 white-text">Update<a/></td>
            </form> 
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>

<?php require ('partials/footer.php');?> 