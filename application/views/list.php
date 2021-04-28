<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>

    <style>
        *{
            font-weight: lighter;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light text-dark bg-light shadow">
            <img src="<?php echo base_url("/icons/CRUD.svg");?>" height="50px" width="50px" alt="">
    <a class="navbar-brand text-primary ml-2 font-weight-light" href="#">CRUD Application in Codeigniter</a> 
    </nav>


   <h1 class="text-center mt-3 font-weight-light text-primary">View Users</h1> 

    

   <div class="container">
       <div class="navbar mb-3">
        <div class=" ml-auto">
            <a href="<?php echo base_url().'index.php/user_crud/create'?>" class="btn shadow btn-primary"> <img src="<?php echo base_url('/icons/create.svg');?>" height="20px" width="20px" alt=""> Create</a>
        </div>
    </div>


<table class="table">
  <thead class="thead bg-primary shadow text-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Edit/Delete</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      
      if(!empty($user)){ 
          foreach($user as $userd){
          ?>
    <tr> 
      <th scope="row"><?php echo $userd['user_id']?></th>
      <td><?php echo $userd['name']?></td>
      <td><?php echo $userd['email']?></td>
      <td>
           <a href="<?php echo base_url().'index.php/user_crud/edit/'.$userd['user_id']?>" class="btn btn-outline-primary"> <img src="<?php echo base_url('/icons/edit.svg');?>" height="20px" width="20px" alt=""> Edit</a>
           <a href="<?php echo base_url().'index.php/user_crud/delete/'.$userd['user_id']?>" class="btn btn-outline-danger"> <img src="<?php echo base_url('/icons/delete.svg');?>" height="20px" width="20px" alt=""> Delete</a>
     </td>
    </tr>


    <?php }}  else { ?>

        <tr>
            <td colspan="5" class="text-center text-danger font-weight-light"> <h3 class="font-weight-light mt-5">No Records found !</h3> </td>
        </tr>
    <?php }?>
   <tr></tr>



  </tbody>
</table>

   </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>