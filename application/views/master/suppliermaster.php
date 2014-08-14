<div  style="height:auto;overflow:hidden;background:#006666;margin:30px;width:1000px;min-height:80px;border:0px solid black ;border-radius:10px;">
<p style="margin-left:80%;padding-top:5px;line-height:0.5em;color:white">User: <b><?php echo $this->session->userdata('fullname');?></b>&nbsp;&nbsp;<img src="../../images/rightarrow1.png" width="10px" height="10px;"/>&nbsp;&nbsp;&nbsp;<strong>
 <a href="<?php echo site_url("logincheck/logout"); ?>" style="color:white;" onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'">Logout</a></strong></p>
<center style="margin-bottom:20px;font-size:20pt;position:inline;color:white">Supplier Master</center>
 </div>
 
 <form name="supplierform" id="supplierform" method="post" action="<?php echo site_url("master/supplier_details"); ?>" > 
<div style="width:550px;height:auto;overflow:hidden;min-height:350px; background:#CCCCCC;margin:40px 0px 0px 25%;border:1px solid black ;border-radius:10px;">
<p style="height:40px;padding:20px 0px 0px 20px;" align="center"><span style="font-weight:bolder;font-size:18pt;color:#4c0000">New Supplier Entry </span></p>
<hr width="100%">
<div align="center" style="margin:20px 0px 0px 0px;">
<table style="width:60%" border="0">
	<tr style="height:0%;">
		<td width="40%" ><font class="font_align">Supplier Name</font></td>
		<td ><textarea name="supp_name" id="supp_name" rows="2" cols="50" class="txtarea" onblur="javascript:check_supplier()" ></textarea></td>
		
		<td>	<img id='incorrect' height=16px width=15px style='display: none' src='<?php echo  base_url();?>images/delete.png' /> 
			<img id='correct' height=16px width=15px style='display: none' src='<?php echo  base_url();?>images/accept.png' /></td>	
	</tr>
	
	<tr>
		<td ><font class="font_align">Address&nbsp;&nbsp;</font><span style="font-size:11px;" ></span></td>
		<td ><textarea name="addr" id="addr" rows="4" cols="50"  class="txtarea" ></textarea>	
	</tr>
	<tr>
		<td ><font class="font_align">Phone Number</font></td>
		<td><input name="ph_num" id="ph_num" class="input" type="text" style="width:150px;height:18px;" value="" ></td>		
	</tr>
	<tr>
		<td ><font class="font_align">TIN</font></td>
		<td><input name="tin" id="tin" class="input" type="text" style="width:150px;height:18px;" value="" ></td>		
	</tr>
	<tr>
		<td ><font class="font_align">Supplying Products</font></td>
		<td><textarea name="supp_pdts" id="supp_pdts" rows="2" cols="50"  class="txtarea"></textarea></td>		
	</tr>
	
	<tr>
		<td colspan="2" align="center"><input style="width:100px" class="button" value="Register" id="button" type="button"  onclick="javascript:supplier_form()"></td>
	</tr>
		</table>
</div>
</div>
</form>
<script type="text/javascript" src="<?php echo base_url(); ?>js/custom/master_validation.js"></script>