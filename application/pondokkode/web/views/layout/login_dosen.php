    <header class="sb-page-header" style="padding-top: 60px;padding-bottom: 60px;text-align: left;font-size: 24px;padding: 30px 15px;color: rgba(255,255,255,.8);background-color: #08b06d;margin-bottom: 40px;font-size: 20px;background-image: url('<?php print base_url() ?>assets/media/images/bg.png');position: relative;">
        <div class="container">
            <p style="padding-top:60px;font-size:40px;color:#fff"><i class="fa fa-unlock-alt"></i> Login Dosen</p>
            <p style="margin-left:0px;color:#fff"><i class="icon-book-open"></i> Login Account Dosen</p>
        </div>
    </header>

    <div class="container">
        <div class="row">       
    		<div class="col-md-4">
    		</div>
    		<div class="col-md-4">
            <?php if (isset($error)): ?>
              <div class="alert alert-danger alert-dismissible" role="alert" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <p class="must-txt"><?php echo $error; ?></p>
              </div>
            <?php endif ?>
    		<div class="login" id="login">
            <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
                <div class="panel-heading panel-unwaha" style="color:#fff">
                    <h3 class="panel-title"><i class="icon-book-open"></i> Login Dosen</h3>
                </div>
            <div class="panel-body">     		
	    		<form action="<?php echo base_url() ?>course/dosen/auth/" method="POST">
	    			<input type="text" name="username" class="form-control" placeholder="Enter Username" id="username">
	    			<input type="password" name="password" class="form-control" placeholder="Enter Password" id="password">

	    			<a href="<?php print base_url() ?>course/forgot-password/" style="float:left" class="btn btn-custom"><i class="icon-info"></i> Lost Password </a>

	    			<button type="submit" style="float:right" class="btn btn-custom"><i class="icon-lock"></i> Login</button>

	    		</form>    	    		
    		</div>
    		</div>
    		</div>
    		</div>
    		<div class="col-md-4">
    		</div>
        </div>
    </div>    