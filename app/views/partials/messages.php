<?php if(count($errors) > 0) : ?>
    <?php foreach($errors->all() as $error) : ?>
        <div class="alert alert-danger">
            {{$error}}
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<?php if(session('success')) : ?>
        <div class="alert alert-success">
            {{session('success')}}
        </div>
<?php endif; ?>

<?php if(session('error')) : ?>
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
<?php endif; ?>