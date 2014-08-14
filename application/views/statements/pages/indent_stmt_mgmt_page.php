<?php 
   $counter=0;
   print("<table width='100%' height='100%' border='1' align='left' cellpadding='1' cellspacing='1' style='margin-bottom:20px'>");
   foreach($indent_stmt as $row) {
   		$counter++;     	
     	$rowid="row".$counter;
     	print("<tr id='$rowid' class='td_rows'>");
        $billno_id="billno".$counter;  
        print("<td width='8%'  ><input type='text'  class='plain_txt' id='$billno_id'  value='".$row->bill_no."' /></td>");
    	print("<td width='8%'><input type='text'  class='plain_txt' readonly='readonly' value='".$row->bill_date."' /></td>");
        $party_id="cust_name".$counter;
        print("<td width='24%'><input type='text' class='plain_txt' readonly='readonly' id='$party_id' value='".$row->customer_name."' /></td>");
        print("<td width='10%'><input type='text'  class='plain_txt' readonly='readonly'  value='".$row->from_date."'/></td>");
   		print("<td width='10%'><input type='text'  class='plain_txt' readonly='readonly'  value='".$row->to_date."'/></td>");
   		print("<td width='10%'><input type='text' class='plain_txt' readonly='readonly'  value='".$row->bill_amount."'/></td>");
   		print("<td width='9%'><input type='text' class='plain_txt' readonly='readonly'  value='".$row->action_user."'/></td>");
		//print("<td width='10%'><input type='text' class='plain_txt' readonly='readonly'  value='".$row->status."'/></td>");
        //print("<td width='10%'><input type='text' class='plain_txt' readonly='readonly'  value='".$row->balance."' /></td>");
 		print("<td width='7%'><a  href='javascript:reprint_indent_bill(\"".$row->bill_no."\",\"".$row->bill_date."\");' id='edit_id'><font color='000000'>Reprint</font></a></td>");
 		print("<td width='7%'><a  href='javascript:show_details(\"".$row->bill_no."\");' id='edit_id'><font color='0033FF'>Details</font></a></td>");
 		print("<td width='7%'><a  href='javascript:cancel_indent_bill(\"".$row->bill_no."\");' id='edit_id'><font color='FF0000'>Cancel</font></a></td>");
		print("</tr>");    	
		 }
print("</table>");  
echo "<input type='hidden' id='hrowcount' value='$counter' />";
if($counter==0)
{
print("<div style='margin:150px 0px 0px 370px'>");	
print("<font style='font-size:2em;color:#254117; font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; >No Statements to Display...!</font>");
print("</div");	
}
?>