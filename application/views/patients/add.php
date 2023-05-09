
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Ajax - Add Patients</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>" >
</head>
<body>
   <!--  <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Crud Application</a>
        </div>
    </div> -->
    <div class="container pt-3">
        <!-- <h3>Create user</h3>
        <hr> -->
        <div class="modal-body">
        <form method="post" action="<?php echo site_url().'/view-patients'; ?>">
      <div class="mb-3 col-6 offset-3">
        <label for="name" class="form-label">Name</label>
        <input  type="text" class="form-control" id="name" name="name">

        <label for="gender" class="form-label">Gender</label>
        <input  type="text" class="form-control" id="gender" name="gender">

        <label for="age" class="form-label">Age</label>
        <input  type="text" class="form-control" id="age" name="age">

        <label for="contact" class="form-label">Contact</label>
        <input  type="text" class="form-control" id="contact" name="contact">

        <label for="city" class="form-label">City</label>
        <input  type="text" class="form-control" id="city" name="city">

        <label for="address" class="form-label">Address</label>
        <textarea class="form-control" placeholder="Write Address here" id="address" name="address"></textarea>
 

        <label for="date_added" class="form-label">Date Added</label>
        <input  type="text" class="form-control" id="date_added" name="date_added">

        <label for="reason" class="form-label">Reason</label>
          <textarea class="form-control" placeholder="Leave a Reason here" id="reason" name="reason"></textarea>
 
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
      </div>
    </form>
    </div>
</body>
</html>