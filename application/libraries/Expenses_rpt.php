<?php 

class Expenses_rpt{

        public function Export($data){
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".date('dmY')."_Expenses_report.xls");
        print("<table  border='1' align='left' cellpadding='1' cellspacing='1'  style='border-collapse:collapse;margin-bottom:20px;'>");
       print("<tr bgcolor='#518C9C'>");
       print("<td width='10%' align='center'>Date</td>");
       print("<td width='10%' align='center'>Bill No</td>");
       print("<td width='23%' align='center'>Vendor Name</td>");
       print("<td width='22%' align='center'>Items Purchased</td>");
       print("<td width='10%' align='center'>Amount(Rs)</td>");
       print("<td width='10%' align='center'>Added By</td>");
       print("<td width='15%' align='center'>Added Time</td>");
       print("</tr>");
       $total=0;
	   foreach($data as $openrow) {
        	    print("<tr class='small'>");
             print("<td width='10%' align='center'>".$openrow["exp_date"]."</td>");
             print("<td width='10%' align='center'>".$openrow["bill_no"]."</td>");
             print("<td width='23%' align='center'>".$openrow["vendor_name"]."</td>");
             print("<td width='22%' align='center'>".$openrow["items"]."</td>");
             print("<td width='10%' align='center'>".$openrow["amount"]."</td>");
             $total+=$openrow["amount"];
             print("<td width='10%' align='center'>".$openrow["added_by"]."</td>");
             print("<td width='15%' align='center'>".$openrow["added_time"]."</td>");             
             print("</tr>");
          }
          print("<tr><td colspan='4' align='right'>Total</td><td colspan='3'>".$total."</td></tr>");
          print("</table>");
        
        }
}

?>