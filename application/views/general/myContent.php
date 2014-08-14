<div>
<img src="<?php echo base_url(); ?>/images/pri4.gif" width="1100px" height="280px;"/>
</div>
<div id="login-form" style="height:200px;width:350px;border:3px solid black ;border-color:#006666;border-radius:20px;margin-top:30px;margin-left:360px;">
<p style="color:#000000;text-align:center;font-size:18pt;font-weight:bolder;">Login Form</p>
<?php echo form_open('logincheck/login'); ?>
		<table id="login_form" style="font-weight:bolder;font-size:12pt;">
        	<tr style="color:#003300"><td>Username:</td><td><input type="text" name="email" id="email" style="width:150px;color:#4c0000;padding:0 0 0 5px;"/></td></tr>
            <tr style="color:#003300"><td>Password:</td><td><input type="password" name="pwd" id="pwd" style='width:150px;color:#4c0000;'/></td></tr>
       		<tr style=""><td colspan="2" align="center"><?php if(isset($err)) { echo $err; } ?>
        	<input type="submit" name="submit" id="submit" value="Login" class="btn_log" /> 
        	</td></tr>
    </table>
	<?php echo "</form>"; ?>

</div>
