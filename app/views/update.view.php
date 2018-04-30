<?php require ('partials/head.php'); ?>

<div class="container">

<table class="highlight">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <th><?php $_POST['id']?></th>
            <formmethod="POST" action="/users/update"  > 
                <td><?= $user->name; ?></td>
            </form> 
        </tr>
    </tbody>
</table>
</div>

<?php require ('partials/footer.php');?> 