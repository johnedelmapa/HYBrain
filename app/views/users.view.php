<?php require ('partials/head.php'); ?>

<div class="container">

<h3>List of Users</h3>

  <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn modal-trigger right" href="#modal3"><i class="material-icons prefix">add</i></a>

  <!-- Modal Structure -->
  <div id="modal3" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Add User</h4>
        <form method ="POST" action="/users">
            <div class="input-field">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" id="icon_prefix" name="name" required>   
                <label class="active"  for="icon_prefix">Name</label>
            </div>
            <div class="input-field">
                <i class="material-icons prefix">cake</i>
                <input type="text" class="datepicker" id="icon_prefix" name="birthdate" required>   
                <label class="active"  for="icon_prefix">Birthdate</label>
            </div>
            <div class="input-field">
                <i class="material-icons prefix">phone</i>
                <input type="text" id="icon_telephone" name="telephone" required>   
                <label class="active" for="icon_telephone">Telephone</label>
            </div>
            <div class="input-field">
                <i class="material-icons prefix">today</i>
                <input type="text" id="address" name="address" required>   
                <label class="active" for="address">Address</label>
            </div>
                 
    </div>
    <div class="modal-footer">
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
        </button>
        </form>
    </div>
  </div>
    

<table >
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
                <td>
                <button onclick="return confirm('Are you sure you want to delete?')" class="btn btn-small red darken-3 white-text"><i class="material-icons prefix">delete</i></button>
              
            </form> 

             <form method="POST" action="/update" > 
                <input name="id" value='<?php echo $user->id; ?>'hidden>
                <input name="name" value='<?php echo $user->name; ?>'hidden>
                <input name="birthdate" value='<?php echo $user->birthdate; ?>'hidden>
                <input name="telephone" value='<?php echo $user->telephone; ?>'hidden>
                <input name="address" value='<?php echo $user->address; ?>'hidden>
                <button class="btn btn-small orange darken-3 white-text"><i class="material-icons prefix">update</i></button></td>    
             </form>     
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>

<?php require ('partials/footer.php');?> 