<?php require ('partials/head.php'); ?>

<div class="container">

<h3>List of Users</h3>

<form method ="POST" action="/users">
     <div class="input-field">
           <input type="text" id="name" name="name">
           <label class="active" for="name">Add Name</label>
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
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <?php  foreach ($users as $user) : ?>
        <tr>
            <form method="POST" action="/users/delete" > 
                <td><input name="id" value='<?php echo $user->id; ?>' readonly style="border: none;"></td>
                <td><?= $user->name; ?></td>
                <td><button onclick="return confirm('Are you sure you want to delete?')" class="btn btn-small red darken-3 white-text">Delete</button>
                <a href="/update" class="btn btn-small orange darken-3 white-text">Update<a/></td>
            </form> 
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>

<?php require ('partials/footer.php');?> 