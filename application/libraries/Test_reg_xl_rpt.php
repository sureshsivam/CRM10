<?php 

class Test_reg_xl_rpt{

        public function Export($data){
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".date('dmY')."_Testing_Register_report.xls");
        print("<table  border='1' align='left' cellpadding='1' cellspacing='1'  style='border-collapse:collapse;margin-bottom:20px;'>");
       print("<tr bgcolor='#518C9C'>");
       print("<td width='15%' align='center'>Date</td>");
       print("<td width='10%' align='center'>Shift</td>");
       print("<td width='15%' align='center'>Pump No</td>");
       print("<td width='15%' align='center'>Testing Litres</td>");
       print("<td width='15%' align='center'>Purpose</td>");
       print("<td width='15%' align='center'>Entered By</td>");
       print("<td width='15%' align='center'>Entered Time</td>");
       print("</tr>");
 foreach($data as $openrow) {
        	 print("<tr class='small'>");
             print("<td width='15%' align='center'>".$openrow["account_date"]."</td>");
             print("<td width='10%' align='center'>".$openrow["shift"]."</td>");
             print("<td width='15%' align='center'>".$openrow["pump_no"]."</td>");
             print("<td width='15%' align='center'>".round($openrow["test_qty"],3)."</td>");
             print("<td width='15%' align='center'>".$openrow["purpose"]."</td>");
             print("<td width='15%' align='center'>".$openrow["added_by"]."</td>");
             print("<td width='15%' align='center'>".$openrow["added_time"]."</td>");
             print("</tr>");
          }
          print("</table>");
        
        }
}

?>