<?php require('partials/head.php'); ?>

<div class="container">

<h3>Users</h3>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>


<form method ="POST" action="/users/delete">

<?php foreach ($users as $user) : ?>
    
     <tr>
        <td><input name="id" value= <?= $user->id;?>></td>
        <td><?= $user->name; ?></td>
        <td><button onclick="return confirm('Are you sure you want to delete?')" class="btn btn-small red darken-3 white-text">Delete</button> </td>
    </tr>

<?php endforeach; ?>

</form>

<form method ="POST" action="/users">

    <input name="name"></input>

    
  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>

</form>

  </tbody>

</table>

</div>

<?php require('partials/footer.php'); ?>
