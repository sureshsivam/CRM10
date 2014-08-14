<?php 

class Oth_sal_xl_rpt{

        public function Export($data){
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".date('dmY')."_Other_sale_report.xls");
        print("<table  border='1' align='left' cellpadding='1' cellspacing='1'  style='border-collapse:collapse;margin-bottom:20px;'>");
       print("<tr bgcolor='#518C9C'>");
       print("<td width='15%' align='center'>Date</td>");
       print("<td width='15%' align='center'>Shift</td>");
       print("<td width='30%' align='center'>Item Name</td>");
       print("<td width='10%' align='center'>Quantity(Ltrs)</td>");
       print("<td width='15%' align='center'>Rate(Rs)</td>");
       print("<td width='15%' align='center'>Amount(Rs)</td>");
       print("</tr>");
 foreach($data as $openrow) {
        	 print("<tr class='small'>");
             print("<td width='15%' align='center'>".date('d/m/y', strtotime($openrow["acct_date"]))."</td>");
             print("<td width='15%' align='center'>".$openrow["shift"]."</td>");
             print("<td width='30%' align='center'>".$openrow["product"]."</td>");
             print("<td width='10%' align='center'>".$openrow["qty"]."</td>");
             print("<td width='15%' align='center'>".$openrow["rate"]."</td>");
             print("<td width='15%' align='center'>".round($openrow["amt"],3)."</td>");  
             print("</tr>");
          }
          print("</table>");
        
        }
}

?>