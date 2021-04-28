<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>CRUD_CREATE_USER</title>

    <style>
        *{
            /* color: #007bff; */
            /* color: red; */
            font-weight: lighter;
        }
        .frm{
           margin-top: 6%;
           border-radius: 20px;
            
        }

        .coled{
            color: red;
        }
        .colblu{
            color: #007bff;
        }
        .brdr{
            border-color: #007bff;
        }

       
    </style>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light text-dark bg-light shadow">
            <img src="<?php echo base_url("/icons/CRUD.svg");?>" height="50px" width="50px" alt="">
    <a class="navbar-brand text-primary ml-2 font-weight-light" href="#">CRUD Application in Codeigniter</a> 
    </nav>


 
    <?php 
    $msg = $this->session->flashdata('success'); 
    if ($msg ) {?>
   <div class="alert alert-success text-center " role="alert">
    <span class="font-weight-bold"><?php echo $msg?> </span>     <a class="btn btn-success py-0" href="<?php echo base_url().''?>">Click Here </a> To View User List 
</div>
<?php }?>

<div class="container">
    

    <div class="row">
        <div class="col-12 col-md-12 frm shadow p-5 ">

            <form method="POST"   action="<?php echo base_url().'index.php/user_crud/create'; ?>" name="createuser">
                <h1 class="text-center text-primary font-weight-light mb-3">Create User</h1> 
                <!-- <hr class="bg-primary"> -->
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="colblu">Name</label> 
                        <input type="text" class="form-control " id="name" placeholder="Enter Name" name="name" value="<?php echo set_value('name');?>">
                       <small class="coled"><?php echo form_error('name'); ?></small> 
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1" class="colblu">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="<?php echo set_value('email');?>">
                         <small class="coled" ><?php echo form_error('email'); ?></small>
                    </div>
                    <div class="text-center pt-3">
                        <button type="submit" class="btn btn-outline-primary shadow w-25">Create</button>
                        <a href="<?php echo base_url().''?>" class="btn btn-outline-danger shadow w-25 ">Cancel</a>
                    </div>
                    
            </form>

        </div>
    </div>
    
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>