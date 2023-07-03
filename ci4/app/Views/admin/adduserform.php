<?php 
    echo form_open('saveUser');
?>
<h1 class="text-center mb-3">Register User</h1>
<div class="container">

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="usernname" name="username">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput2" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="Password"
            name="password">
    </div>
    <div class="mb-3">
        <label for="user_bio" class="form-label">User Bio</label>
        <textarea class="form-control" id="user_bio" rows="3" name="user_bio"></textarea>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-default">Register User</button>
    </div>
</div>


<?php 
    echo form_close();

?>



    <!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>



<script>
    $(document).ready(function() {
    $('#user_bio').summernote();
    });
</script>