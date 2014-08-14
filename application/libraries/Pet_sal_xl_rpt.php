<?php 

class Pet_sal_xl_rpt{

        public function Export($data){
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".date('dmY')."_Petrol_Diesel_sales_report.xls");
        print("<table  border='1' align='left' cellpadding='1' cellspacing='1'  style='border-collapse:collapse;margin-bottom:20px;'>");
       print("<tr bgcolor='#518C9C'>");
       print("<td width='12%' align='center'>Date</td>");
       print("<td width='8%' align='center'>Shift</td>");
       print("<td width='8%' align='center'>Pump No</td>");
       print("<td width='16%' align='center'>Close Reading</td>");
       print("<td width='16%' align='center'>Open Reading</td>");
       print("<td width='10%' align='center'>Sale Ltrs</td>");
       print("<td width='10%' align='center'>Test Ltrs</td>");
       print("<td width='10%' align='center'>Rate</td>");
       print("<td width='10%' align='center'>Amount</td>");
       print("</tr>");
 foreach($data as $openrow) {
        	    print("<tr class='small'>");
             print("<td width='12%' align='center'>".$openrow["acct_dates"]."</td>");
             print("<td width='8%' align='center'>".$openrow["shift"]."</td>");
             print("<td width='8%' align='center'>".$openrow["pump_no"]."</td>");
             print("<td width='16%' align='center'>".$openrow["close_reading"]."</td>");
             print("<td width='16%' align='center'>".$openrow["open_reading"]."</td>");
             print("<td width='10%' align='center'>".round($openrow["net_sales"],3)."</td>");             
             print("<td width='10%' align='center'>".round($openrow["test_litres"],3)."</td>");             
             print("<td width='10%' align='center'>".$openrow["rate"]."</td>");             
             print("<td width='10%' align='center'>".round($openrow["amount"],3)."</td>");
             print("</tr>");
          }
          print("</table>");
        
        }
}

?>