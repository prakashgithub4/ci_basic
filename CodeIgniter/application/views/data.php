<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>

      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Dept</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($all as $data){?>
      <tr>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['phone']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['gender']; ?></td>
        <td><?php echo $data['Dept']; ?></td>
        <td><a href="<?php echo  base_url(); ?>index.php/example/delete/<?php echo $data['id'];  ?>" class="btn btn-danger">Delete</a><a href="<?php echo  base_url(); ?>index.php/Example/index/<?php echo $data['id'];  ?>" class="btn btn-info">Edit</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
