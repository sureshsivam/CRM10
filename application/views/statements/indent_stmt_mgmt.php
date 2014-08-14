<div  style="height:auto;overflow:hidden;background:#006666;margin:30px;width:1000px;min-height:80px;border:0px solid black ;border-radius:10px;">
<p style="margin-left:80%;padding-top:5px;line-height:0.5em;color:white;">User: <b><?php echo $this->session->userdata('fullname');?></b>&nbsp;&nbsp;<img src="../../images/rightarrow1.png" width="10px" height="10px;"/>&nbsp;&nbsp;&nbsp;<strong>
 <a href="<?php echo site_url("logincheck/logout"); ?>" style="color:white;" onmouseover="this.style.color='blue'" onmouseout="this.style.color='white'">Logout</a></strong></p>
<center style="margin-bottom:20px;font-size:20pt;color:white;position:inline;">Indent Sales Statements Details</center>
 </div>
  <div style="height:auto;overflow:hidden; background:#CCCCCC;margin:30px;width:1000px;border:1px solid black ;border-radius:10px;">
 
	
	<div style="margin:20px 0px 0px 30px;font-weight:bold">	
	<p style="margin-left: 30px;font-size:15px;display:inline;;">Statements From</p>
	<input type="text" id="start_date"  class="datefld_txt" style="width:100px;height:20px;margin-left:20px"/>
	<p style="margin-left: 50px;font-size:15px;display:inline;;">To</p>
	<input type="text" id="end_date"  class="datefld_txt" style="width:100px;height:20px;margin-left:20px" />
	<input type="button" id="" class="" style="width:100px;height:20px;margin-left:50px" value="Get Details"  onclick="javascript:indent_stmt_details()"/>
	</div>
	
<div style="margin-left: 25px;margin-top:20px;margin-bottom:20px;font-weight:bold">
<font size="2px" style="margin-left:40px;">Search by  Customer Name</font>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" class="input" name="customer" id="customer"  style="width:125px;height:18px;" onkeyup="javascript:searchbycustomername()" >
</div>
<hr width="100%">
			<div style="margin-left:0px;margin-bottom:10px;margin-right:0px;margin-top:10px;height:640px;overflow:scroll;">
			<table border="0" width="100%">
			<tr bgcolor="#559999">
			<td align="center" width="8%" style="border-right:1px solid white;"><span class='txt1_color'>Bill No</span></td>
			<td align="center" width="8%" style="border-right:1px solid white;"><span class='txt1_color'>Bill Date</span></td>
			<td align="center" width="24%" style="border-right:1px solid white;"><span class='txt1_color'>Customer Name</span></td>
			<td align="center" width="10%" style="border-right:1px solid white;"><span class='txt1_color'>Sales from</span></td>
			<td align="center" width="10%" style="border-right:1px solid white;"><span class='txt1_color'>upto</span></td>
			<td align="center" width="10%" style="border-right:1px solid white;"><span class='txt1_color'>Amount</span></td>
			<!-- <td align="center" width="10%" style="border-right:1px solid white;"><span class='txt1_color'>Status</span></td>
			<td align="center" width="10%" style="border-right:1px solid white;"><span class='txt1_color'>Balance</span></td> -->
			<td align="center" width="9%" style="border-right:1px solid white;"><span class='txt1_color'>Made By</span></td>
			<td align="center" width="7%" style="border-right:1px solid white;"><span class='txt1_color'>Reprint</span></td>
			<td align="center" width="7%" style="border-right:1px solid white;"><span class='txt1_color'>Details</span></td>
			<td align="center" width="7%"><span class='txt1_color'>Cancel</span></td>
			</tr>
			</table>
			
<div id="contentData" style=''>
</div>

 
</div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>js/custom/statements.js"></script> 