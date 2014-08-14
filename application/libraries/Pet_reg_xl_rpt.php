<?php 

class Pet_reg_xl_rpt{

        public function Export($data){
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".date('dmY')."_Petrol_Diesel_Bill_register.xls");
        print("<table  border='1' align='left' cellpadding='1' cellspacing='1'  style='border-collapse:collapse;margin-bottom:20px;'>");
       print("<tr bgcolor='#518C9C'>");
       print("<td width='8%' align='center'>Bill No</td>");
       print("<td width='8%' align='center'>Acct Date</td>");
       print("<td width='15%' align='center'>Customer Name</td>");
       print("<td width='9%' align='center'>Vehicle No</td>");
       print("<td width='5%' align='center'>Counter</td>");
       print("<td width='5%' align='center'>Shift</td>");
       print("<td width='5%' align='center'>Pump</td>");
       print("<td width='15%' align='center'>Sale mode</td>");
       print("<td width='10%' align='center'>Product Type</td>");
       print("<td width='10%' align='center'>Litres</td>");
       print("<td width='10%' align='center'>Amount(Rs)</td>");
       print("</tr>");
 		foreach($data as $openrow) {
 			$CI =& get_instance();
			$CI->load->model('Reports_model');
			
			$result = $CI->Reports_model->get_pet_bill_details($openrow["bill_number"]);
			$ctr=1;
			$tot_ltrs=0;
			foreach ($result as $val) {
				//echo $val["voucher_no"];
				
			if($ctr==1){
			 print("<tr class='small'>");
			 print("<td width='8%' align='center'>".$openrow["bill_number"]."</td>");
             print("<td width='8%' align='center'>".$openrow["acct_date"]."</td>");
             print("<td width='15%' align='center'>".$openrow["customer_name"]."</td>");
             print("<td width='9%' align='center'>".$openrow["vehicle_number"]."</td>");
              print("<td width='5%' align='center'>".$openrow["counter"]."</td>");
      		 print("<td width='5%' align='center'>".$openrow["shift"]."</td>");
       		print("<td width='5%' align='center'>".$openrow["pump_number"]."</td>");
      		print("<td width='15%' align='center'>".$openrow["sale_mode"]."</td>");
             
             print("<td width='10%' align='center'>".$val["product"]."</td>");             
             print("<td width='10%' align='center'>".$val["quantity"]."</td>");             
             print("<td width='10%' align='center'>".$val["value"]."</td>");
             print("</tr>");
             $ctr++;
             $tot_ltrs+=$val["quantity"];
			}
			else{
			 print("<tr class='small'>");
			 print("<td width='8%' align='center'></td>");
             print("<td width='8%' align='center'></td>");
             print("<td width='15%' align='center'></td>");
             print("<td width='9%' align='center'></td>");
              print("<td width='5%' align='center'>");
              print("<td width='5%' align='center'>");
              print("<td width='5%' align='center'>");
              print("<td width='15%' align='center'></td>");
             
             print("<td width='10%' align='center'>".$val["product"]."</td>");             
             print("<td width='10%' align='center'>".$val["quantity"]."</td>");             
             print("<td width='10%' align='center'>".$val["value"]."</td>");
             print("</tr>");
             $tot_ltrs+=$val["quantity"];
			}
			}
			
            print("<tr class='small'>");
            print("<td width='10%' align='right' colspan='9' >Total</td>");
            print("<td width='10%' align='center'>".$tot_ltrs."</td>");
            print("<td width='10%' align='center'>".$openrow["total_amount"]."</td>");
            print("</tr>");
 		}
          print("</table>");
        
        }
}

?>