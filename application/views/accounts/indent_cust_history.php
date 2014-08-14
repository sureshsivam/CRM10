<div  style="height:auto;overflow:hidden;background:#006666;margin:30px;width:1000px;min-height:80px;border:0px solid black ;border-radius:10px;">
<p style="margin-left:80%;padding-top:5px;line-height:0.5em;color:white;">User: <b><?php echo $this->session->userdata('fullname');?></b>&nbsp;&nbsp;<img src="../../images/rightarrow1.png" width="10px" height="10px;"/>&nbsp;&nbsp;&nbsp;<strong>
 <a href="<?php echo site_url("logincheck/logout"); ?>" style="color:white;" onmouseover="this.style.color='blue'" onmouseout="this.style.color='white'">Logout</a></strong></p>
<center style="margin-bottom:20px;font-size:20pt;color:white;position:inline;">Indent Customers Account History</center>
 </div>
<div style="height:auto; background:#CCCCCC;width:1000px;margin:30px;border:1px solid black ;border-radius:10px;">
<table width="100%" border="0" align="left" cellpadding="2" style="height:40px;">
	<tr class="tab_header_bg">
		<td width="5%" align="center" style="border-right:1px solid black;">
		 <img width="25" id='ind_sal_dwnld' height="20" src="<?php echo base_url(); ?>images/xls_download.png" alt="Download to XLS" /> 
		<td width="60%" align="center"	 ><b>Customer Name:</b> <select name='cust_name' id='cust_name' style='width:450px;'>
							<?php foreach($cust_list as $cust){ ?>
							<option value="<?php echo $cust["customer_id"];?>" ><?php echo $cust["customer_name"];?></option>
							<?php } ?>
							
						</select>
		</td> 
		<td width="15%" align="LEFT"><input type='button' value='Get Report' onclick="javascript:cust_acct_history();" style="width:100px;"/> </td>
		
		<td width="10%" align="center" style="border-left:1px solid black;">
		<img  alt="print" id='print_ind_cust_acct_history' src="<?php echo base_url();?>images/printer1.png" title='Print'  width="35" height="35" /> 
		</td>
	</tr>
</table>
<hr width="100%" style="margin-top:40px;">
<div id="contentData" style="height:640px;overflow:scroll;">


</div>

</div>
<script type="text/javascript" src="<?php echo base_url(); ?>js/custom/accounts.js"></script>