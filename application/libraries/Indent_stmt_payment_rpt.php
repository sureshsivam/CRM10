<?php 

class Indent_stmt_payment_rpt{

        public function Export($data,$start_date,$end_date){
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".date('dmY')."_Indent_stmt_Payments.xls");
        print("<table  border='1' align='left' cellpadding='1' cellspacing='1' width='100%' style='border-collapse:collapse;margin-bottom:20px;'>");
        print("<tr bgcolor='#518C9C' style='color:white;border-right:1px solid white; '>");
        print("<td width='5%' align='center' colspan='9'>Indent Statements Payment Report from ".date('d-m-Y', strtotime($start_date))." to ".date('d-m-Y', strtotime($end_date))."</td>");
        print("</tr>");
      	print("<tr bgcolor='#518C9C'>");
       	 print("<td width='10%' align='center'>Bill No</td>");
       print("<td width='20%' align='center'>Customer Name</td>");
       print("<td width='10%' align='center'>Ref No</td>");
       print("<td width='8%' align='center'>Payment Mode</td>");
       print("<td width='9%' align='center'>Amount</td>");
       print("<td width='8%' align='center'>Payment Date</td>");
       print("<td width='9%' align='center'>Cheque No</td>");
       print("<td width='9%' align='center'>Cheque Date</td>");
       print("<td width='15%' align='center'>Bank Name</td>");
       print("<td width='12%' align='center'>Clearance Date</td>");
		print("</tr>");
 		print("</table>");
   
   print("<table width='100%' border='1' align='left' >");
   foreach($data as $openrow) {
   		print("<tr class='td_rows'>");
        print("<td width='10%' align='center'>".$openrow["bill_no"]."</td>");
        print("<td width='20%' align='center'>".$openrow["customer_name"]."</td>");
        print("<td width='10%' align='center'>".$openrow["tin"]."</td>");
        print("<td width='8%' align='center'>".$openrow["payment_mode"]."</td>");
        print("<td width='9%' align='center'>".$openrow["amount"]."</td>");
        print("<td width='8%' align='center'>".$openrow["payment_date"]."</td>");
        print("<td width='9%' align='center'>".$openrow["cheque_no"]."</td>");             
        print("<td width='9%' align='center'>".$openrow["cheque_date"]."</td>");             
        print("<td width='15%' align='center'>".$openrow["bank_name"]."</td>");
        print("<td width='12%' align='center'>".$openrow["clearance_date"]."</td>");
       	print("</tr>");    	

   }
print("</table>");  

 }
}
?>