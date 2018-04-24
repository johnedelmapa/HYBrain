<?php require('partials/head.php'); ?>

<h1>All Users</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

<?php foreach ($users as $user) : ?>
    
     <tr>
        <td> <?= $user->name; ?></td>
        <td><a href="#" data-role="update" data-id="<?php echo $row['id'] ;?>" ><button type='button' class='btn btn-warning btn-sm'>Update</button></a>  
         <td><a href="" class="btn btn-primary">Delete</a></td>
        </td>
    </tr>

<?php endforeach; ?>

<h1>Submit Your Name</h1>

<form method ="POST" action="/delete">

    <input name="name"></input>

    <button type="submit">Submit</button>

</form>

  </tbody>

</table>

<?php require('partials/footer.php'); ?>
