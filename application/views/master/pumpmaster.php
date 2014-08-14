<div  style="height:auto;overflow:hidden;background:#006666;margin:30px;width:1000px;min-height:80px;border:0px solid black ;border-radius:10px;">

<p style="margin-left:80%;padding-top:5px;color:white;line-height:0.5em;">User: <b><?php echo $this->session->userdata('fullname');?></b>&nbsp;&nbsp;<img src="../../images/rightarrow1.png" width="10px" height="10px;"/>&nbsp;&nbsp;&nbsp;<strong>
 <a href="<?php echo site_url("logincheck/logout"); ?>" style="color:white;" onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'">Logout</a></strong></p>
<center style="margin-bottom:20px;color:white;font-size:20pt;position:inline;">Pump Master</center>
 </div>
 
 <form name="pumpform" id="pumpform" method="post" action="<?php echo site_url("master/pump_details"); ?>" > 
<div style="width:600px;height:auto;overflow:hidden;min-height:400px; background:#CCCCCC;margin:40px 0px 0px 25%;border:1px solid black ;border-radius:10px;">

<p style="height:40px;padding:20px 0px 0px 20px;" align="center"><span style="font-weight:bolder;font-size:18pt;color:#4c0000">New Pump Entry </span></p>
<hr width="100%">
<div align="center" style="margin:20px 0px 0px 10px;">
<table style="width:60%" border="0">
	<tr>
		<td width="150px"><font class="font_align">Pump Name</font></td>
		<td><input name="pump_no" class="input" id="pump_no" type="text" style="width:75px;height:18px; value="" onblur="javascript:check_pump()">
			<img id='incorrect' height=16px width=15px style='display: none' src='<?php echo  base_url();?>images/delete.png' /> 
			<img id='correct' height=16px width=15px style='display: none' src='<?php echo  base_url();?>images/accept.png' /></td>	
	</tr>
	
	<tr>
		<td width=""><font class="font_align">Tank Name</font></td>
		<td><label class="custom-select" ><select name="tank_no" id="tank_no"  onchange="tank_product(this.value)">
	<option value="">Select</option>	
	<?php foreach($tank as $tank_list){?>
			<option value="<?php echo $tank_list->TANK_NO; ?>"><?php echo $tank_list->TANK_NO; ?></option>
			
			<?php  }?>
			</select></label></td>			
	</tr>
	<tr>
		<td><font class="font_align">Status</font></td>
		<td><select name="status" id="status"  style="width:78px;height:24px;">
			<option value="">Select</option>
			<option value="1">Active</option>
			<option value="0">Inactive</option></select></td>			
	</tr>
	<tr>
		<td><font class="font_align">Counter Number</font></td>
		<td><select name="count_no"  id="count_no"  style="width:75px;height:24px;">
			<option value="">Select</option>
			<option value="One">One</option>
			<option value="Two">Two</option>
			<option value="Three">Three</option></select></td>	
	</tr>
	
	<tr>
		<td><font class="font_align">Product Name</font></td>
		<td><input name="prod_name" class="input" id="prod_name" type="text" style="width:125px;height:18px; value="" onblur=""></td>
	</tr>
	<tr>
		<td colspan="2" width="" align="center"><input style="width:100px;" class="button" value="Register" id="button" type="button"  onclick="javascript:pump_form()" ></td></tr>
</table>
</div>
</div>
</form>
<script type="text/javascript" src="<?php echo base_url(); ?>js/custom/master_validation.js"></script>
