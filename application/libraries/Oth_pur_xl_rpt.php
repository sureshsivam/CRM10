<?php 

class Oth_pur_xl_rpt{

        public function Export($data,$details){
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".date('dmY')."_Other_Products_Purchase_report.xls");
        print("<table  border='1' align='left' cellpadding='1' cellspacing='1'  style='border-collapse:collapse;margin-bottom:20px;'>");
       print("<tr bgcolor='#518C9C'>");
       print("<td width='10%' align='center'>Voucher No</td>");
       print("<td width='10%' align='center'>Acct Date</td>");
       print("<td width='10%' align='center'>Bill No</td>");
       print("<td width='10%' align='center'>Bill Date</td>");
       print("<td width='20%' align='center'>Party Name</td>");
       print("<td width='10%' align='center'>Payment Mode</td>");        
       print("<td width='10%' align='center'>Amount(Rs)</td>");
       print("<td width='10%' align='center'>Vat tax</td>");
       print("<td width='10%' align='center'>Grand Total(Rs)</td>");
       print("</tr>");
 foreach($data as $openrow) {
  print("<tr class='small'>");
			 print("<td width='10%' align='center'>".$openrow["voucher_no"]."</td>");
             print("<td width='10%' align='center'>".$openrow["account_date"]."</td>");
             print("<td width='10%' align='center'>".$openrow["bill_no"]."</td>");
             print("<td width='10%' align='center'>".$openrow["bill_date"]."</td>");
             print("<td width='20%' align='center'>".$openrow["party_name"]."</td>");
             print("<td width='10%' align='center'>".$openrow["payment_mode"]."</td>");             
             print("<td width='10%' align='center'>".$openrow["total"]."</td>");
             print("<td width='10%' align='center'>".$openrow["vat_tax"]."</td>");             
             print("<td width='10%' align='center'>".$openrow["grand_total"]."</td>");
             print("</tr>");
             if($details=='yes'){
	            $CI =& get_instance();
				$CI->load->model('Reports_model');
				$result = $CI->Reports_model->other_pur_report_details($openrow["voucher_no"]);
				print("<tr class='small'>");
				print("<td width='10%' align='center'></td>");
             	print("<td width='10%' align='center'></td>");
             	print("<td width='50%' align='center' colspan='4'>Item Name</td>");
             	print("<td width='10%' align='center'>Qty</td>");
             	print("<td width='10%' align='center'>Rate</td>");
             	print("<td width='10%' align='center'>Amount</td>");
             	print("</tr>");
				foreach ($result as $val) {
				print("<tr class='small'>");
				print("<td width='10%' align='center'></td>");
             	print("<td width='10%' align='center'></td>");
             	print("<td width='50%' align='center' colspan='4'>".$val["item_name"]."</td>");
             	print("<td width='10%' align='center'>".$val["quantity"]."</td>");
             	print("<td width='10%' align='center'>".$val["rate"]."</td>");
             	print("<td width='10%' align='center'>".$val["amount"]."</td>");
             	print("</tr>");
          }
				print("<tr class='small'>");
				print("<td width='10%' align='center'></td>");
             	print("<td width='10%' align='center'></td>");
             	print("<td width='50%' align='center' colspan='4'></td>");
             	print("<td width='20%' align='center' colspan='2'>Total</td>");
             	print("<td width='10%' align='center' >".$openrow["total"]."</td>");
             	print("</tr>");
             	print("<tr class='small'>");
				print("<td width='10%' align='center'></td>");
             	print("<td width='10%' align='center'></td>");
             	print("<td width='50%' align='center' colspan='4'></td>");
             	print("<td width='20%' align='center' colspan='2'>Discount</td>");
             	print("<td width='10%' align='center' >".$openrow["cash_discount"]."</td>");
             	print("</tr>");
             	print("<tr class='small'>");
				print("<td width='10%' align='center'></td>");
             	print("<td width='10%' align='center'></td>");
             	print("<td width='50%' align='center' colspan='4'></td>");
             	print("<td width='20%' align='center' colspan='2'>Tax</td>");
             	print("<td width='10%' align='center' >".$openrow["vat_tax"]."</td>");
             	print("</tr>");
             	print("<tr class='small'>");
				print("<td width='10%' align='center'></td>");
             	print("<td width='10%' align='center'></td>");
             	print("<td width='50%' align='center' colspan='4'></td>");
             	print("<td width='20%' align='center' colspan='2'>Others</td>");
             	print("<td width='10%' align='center' >".$openrow["others"]."</td>");
             	print("</tr>");
             	print("<tr class='small'>");
				print("<td width='10%' align='center'></td>");
             	print("<td width='10%' align='center'></td>");
             	print("<td width='50%' align='center' colspan='4'></td>");
             	print("<td width='20%' align='center' colspan='2'>Grand Total</td>");
             	print("<td width='10%' align='center' >".$openrow["grand_total"]."</td>");
             	print("</tr>");
             }
            }
          
          print("</table>");
        
        }
}

?>