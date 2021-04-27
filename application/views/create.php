<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>CRUD_CREATE_USER</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-primary text-light bg-primary shadow">
    <a class="navbar-brand text-light" href="#">CRUD Application in Codeigniter</a>
    

</nav>



   


<div class="container mx-md-5">
    

    <div class="row mx-md-5">
        <div class="col-12 col-md-12 mx-md-5">

            <form method="POST" action="<?php echo base_url().'index.php/user_crud/create'; ?>" name="createuser">
                <h1 class="text-center  text-primary mt-5">Create User</h1> 
                <hr class="bg-primary">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name</label> 
                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo set_value('name');?>">
                        <?php echo form_error('name'); ?>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="<?php echo set_value('email');?>">
                        <?php echo form_error('email'); ?>
                    </div>
                    
                
                    <button type="submit" class="btn btn-primary">Create</button>
                    <button type="button" class="btn btn-danger">Cancel</button>
            </form>

        </div>
    </div>
    
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>