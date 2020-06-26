

<div class="container">
  <h2>Horizontal form</h2>
  <div class="form_error">
          <?php echo validation_errors(); ?>
        </div>
  <form id="form" class="form-horizontal" action="<?php echo base_url(); ?>index.php/Example/create" method="post">
  	 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo @$data[0]['name']; ?>" >
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Phone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone" value="<?php echo @$data[0]['phone']; ?>">
      </div>
    </div>

    
     
    
       <div class="form-group">        
      <div class="col-sm-10">
         <label class="control-label col-sm-3" for="email">Gender</label>
        <div class="checkbox ol-sm-3">
          <label class="control-label col-sm-3"><input type="radio" name="gender" id="gender" <?php echo @($data[0]['gender'] =='male')?'checked':''; ?> value="male"> Male</label>
          <label class="control-label col-sm-3"><input type="radio" name="gender" id="gender" <?php echo @($data[0]['gender'] =='female')?'checked':''; ?> value="female"> Female</label>
        </div>
      </div>
    </div>
    <input type="hidden" name ="id" value="<?php echo @$data[0]['id']; ?>"/>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"  value="<?php echo @$data[0]['email']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password"  value="<?php echo @$data[0]['password']; ?>">
      </div>
    </div>
    <div class="form-group"> 
    <label class="control-label col-sm-2" for="pwd">Dept:</label>       
       <div class="col-sm-10">          
       <select class="form-control" name="dept" id="dept">
        <option  <?php echo @($data[0]['Dept']=='MCA')?'selected':''; ?> value='MCA'>MCA</option>
        <option  <?php echo @($data[0]['Dept'] =='MBA')?'selected':''; ?> value='MBA'>MBA</option>
       </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" id="button" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

