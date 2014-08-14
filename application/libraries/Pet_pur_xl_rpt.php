<?php 

class Pet_pur_xl_rpt{

        public function Export($data,$pdt_type){
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".date('dmY')."_Petrol_Diesel_Purchase_report.xls");
        print("<table  border='1' align='left' cellpadding='1' cellspacing='1'  style='border-collapse:collapse;margin-bottom:20px;'>");
       print("<tr bgcolor='#518C9C'>");
        print("<td width='10%' align='center'>Voucher No</td>");
       print("<td width='10%' align='center'>Acct Date</td>");
       print("<td width='10%' align='center'>Invoice No</td>");
       print("<td width='20%' align='center'>Invoice Date</td>");
       print("<td width='20%' align='center'>Party Name</td>");
       print("<td width='10%' align='center'>Product Type</td>");
       print("<td width='10%' align='center'>Litres</td>");
       print("<td width='10%' align='center'>Amount(Rs)</td>");
       print("</tr>");
 		foreach($data as $openrow) {
 			$CI =& get_instance();
			$CI->load->model('Reports_model');
			
			$result = $CI->Reports_model->get_pur_report_details($openrow["voucher_no"],$pdt_type);
			$ctr=1;
			$tot_ltrs=0;
			foreach ($result as $val) {
				//echo $val["voucher_no"];
				
			if($ctr==1){
			 print("<tr class='small'>");
			 print("<td width='10%' align='center'>".$openrow["voucher_no"]."</td>");
             print("<td width='10%' align='center'>".$openrow["account_date"]."</td>");
             print("<td width='10%' align='center'>".$openrow["invoice_no"]."</td>");
             print("<td width='20%' align='center'>".$openrow["invoice_date"]."</td>");
             print("<td width='20%' align='center'>".$openrow["party_name"]."</td>");
             print("<td width='10%' align='center'>".$val["item_name"]."</td>");             
             print("<td width='10%' align='center'>".$val["quantity"]."</td>");             
             print("<td width='10%' align='center'>".$val["amount"]."</td>");
             print("</tr>");
             $ctr++;
             $tot_ltrs+=$val["quantity"];
			}
			else{
			 print("<tr class='small'>");
			 print("<td width='10%' align='center'></td>");
             print("<td width='10%' align='center'></td>");
             print("<td width='10%' align='center'></td>");
             print("<td width='20%' align='center'></td>");
             print("<td width='20%' align='center'></td>");
             print("<td width='10%' align='center'>".$val["item_name"]."</td>");             
             print("<td width='10%' align='center'>".$val["quantity"]."</td>");             
             print("<td width='10%' align='center'>".$val["amount"]."</td>");
             print("</tr>");
             $tot_ltrs+=$val["quantity"];
			}
			}
			if($pdt_type=='both'){
            print("<tr class='small'>");
            print("<td width='10%' align='right' colspan='6' >Total</td>");
            print("<td width='10%' align='center'>".$tot_ltrs."</td>");
            print("<td width='10%' align='center'>".$openrow["total"]."</td>");
            print("</tr>");
			}
          }
          
          print("</table>");
        
        }
}

?>