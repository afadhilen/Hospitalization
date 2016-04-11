<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<title>Doctors Data</title>
	</head>
	<body>
		<br>
		 <div class ='container'>
            <div class='col-lg-8 col-lg-offset-2'>
                <div class ='row top-buffer'>
                    <div class ="col-lg-10 col-lg-offset-1">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url() . 'c_admin/adminlist' ?>">List</a></li>
                        <li class="active">Add List</a></li>
                    </ol>
                        <form action ='<?php echo base_url() . 'c_admin/adminadd'; ?>' method='post'>
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3>Add Hospital Data: </h3></div>
                                <div class="panel-body">
                                    <table class ='table table-bordered'>
                                    	<td>
                                    		<div class='form-group <?php echo form_error('hospitalname') !== "" ? 'has-error' : ''; ?>'>
                                    			<label for='hospitalname'>Name:</label>
                                    			<?php echo form_error('hospitalname', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                                    			<div class ="input-group">
                                    				<div class ="input-group-addon"> <span class ="glyphicon glyphicon-home"> </span> </div>
                                    				<input type = "text" name = "hospitalname" placeholder = "Hospital Name" class ="form-control" />			
                                    			</div>
                                    		</div></br>

                                    		<div class='form-group <?php echo form_error('address') !== "" ? 'has-error' : ''; ?>'>
                                    			<label for='address'>Address:</label>
                                    			<?php echo form_error('address', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                                    			<div class ="input-group">
                                    				<div class ="input-group-addon"> <span class ="glyphicon glyphicon-road"> </span> </div>
                                    				<input type = "text" name = "address" placeholder = "Address" class ="form-control" />			
                                    			</div>
                                    		</div></br>

                                    		<div class='form-group <?php echo form_error('phone') !== "" ? 'has-error' : ''; ?>'>
                                    			<label for='phone'>Phone:</label>
                                    			<?php echo form_error('phone', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                                    			<div class ="input-group">
                                    				<div class ="input-group-addon"> <span class ="glyphicon glyphicon-phone-alt"> </span> </div>
                                    				<input type = "text" name = "phone" placeholder = "Phone Number" class ="form-control"/>
                                    			</div>
                                    		</div></br>

                                    		<div class='form-group <?php echo form_error('email') !== "" ? 'has-error' : ''; ?>'>
                                    			<label for='email'>Email:</label>
                                    			<?php echo form_error('email', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                                    			<div class ="input-group">
                                    				<div class ="input-group-addon"><span class="glyphicon glyphicon-pencil"></span> </div>
                                    				<input type = "text" name = "email" placeholder = "Email" class ="form-control"/>
                                    			</div>
                                    		</div></br>

                                    		<div class='form-group <?php echo form_error('website') !== "" ? 'has-error' : ''; ?>'>
                                    			<label for='website'>Website:</label>
                                    			<?php echo form_error('website', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                                    			<div class ="input-group">
                                    				<div class ="input-group-addon"> <span class="glyphicon glyphicon-globe"></span>   https://www.</div>
                                    				<input type = "text" name = "website" placeholder = "Website" class ="form-control" />
                                    			</div>
                                    		</div></br>
                                            <input type ="submit" class ='btn btn-primary' name = "submit" value="Store"/>
                                    </table>
                                    <a href = "<?php echo base_url() . 'c_admin/adminlist'; ?>" class="btn btn-default btn-sm"><<</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
		
</html>