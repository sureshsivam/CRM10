<?php 

class Ind_sal_xl_rpt{

        public function Export($data,$param){
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".date('dmY')."_Indent_sales_report.xls");
        print("<table  border='1' align='left' cellpadding='1' cellspacing='1'  style='border-collapse:collapse;margin-bottom:20px;'>");
       print("<tr bgcolor='#518C9C'>");
       print("<td width='10%' align='center'>Acct Date</td>");
       print("<td width='10%' align='center'>Bill No</td>");
       print("<td width='10%' align='center'>Indent No</td>");
       print("<td width='10%' align='center'>Shift</td>");
       print("<td width='20%' align='center'>Party Name</td>");
       print("<td width='10%' align='center'>Vehicle</td>");
       print("<td width='10%' align='center'>Product</td>");
       print("<td width='10%' align='center'>Litres</td>");
       print("<td width='10%' align='center'>Amount(Rs)</td>");
       print("</tr>");
 foreach($data as $openrow) {
 	$CI =& get_instance();
			$CI->load->model('Reports_model');
			$result = $CI->Reports_model->ind_sal_report_details($openrow["bill_number"]);
			$ctr=1;
			$tot_ltrs=0;
 		foreach ($result as $val) {
			if($ctr==1){
			 print("<tr class='small'>");
			 print("<td width='10%' align='center'>".date('d/m/y', strtotime($openrow["bill_date"]))."</td>");
             print("<td width='10%' align='center'>".$openrow["bill_number"]."</td>");
             print("<td width='10%' align='center'>".$openrow["indent_no"]."</td>");
             print("<td width='10%' align='center'>".$openrow["shift"]."</td>");
             print("<td width='20%' align='center'>".$openrow["customer_name"]."</td>");
             print("<td width='10%' align='center'>".$openrow["vehicle_number"]."</td>");             
             print("<td width='10%' align='center'>".$val["product"]."</td>");             
             print("<td width='10%' align='center'>".$val["quantity"]."</td>");
             print("<td width='10%' align='center'>".$val["value"]."</td>");
             print("</tr>");
             $ctr++;
             $tot_ltrs+=$val["quantity"];
			}
			else{
			 print("<tr class='small'>");
			 print("<td width='10%' align='center'></td>");
             print("<td width='10%' align='center'></td>");
             print("<td width='10%' align='center'></td>");
             print("<td width='10%' align='center'></td>");
             print("<td width='10%' align='center'></td>");
             print("<td width='20%' align='center'></td>");
             print("<td width='10%' align='center'>".$val["product"]."</td>");             
             print("<td width='10%' align='center'>".$val["quantity"]."</td>");             
             print("<td width='10%' align='center'>".$val["value"]."</td>");
             print("</tr>");
             $tot_ltrs+=$val["quantity"];
			}
          }
 }
          print("</table>");
        
        }
}

?>