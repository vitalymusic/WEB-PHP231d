<div class="container">
    <h1><?=$title?></h1>
<?php echo form_open('checkUser');?>
<div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="usernname" name="username">
</div>
<div class="mb-3">
        <label for="exampleFormControlInput2" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="Password"
            name="password">
</div>
<div class="col-auto">
        <button type="submit" class="btn btn-secondary">Login</button>
</div>

<?php if($errors):?>
    <div class="container ">
        <?=$errors?>
</div>   
<?php endif ?>


<?php echo form_close();?>

</div>