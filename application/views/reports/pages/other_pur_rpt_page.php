<?php
 print("<table width='100%' border='1' align='left' cellpadding='1' cellspacing='1' margin='10px' style='border-collapse:collapse;margin-bottom:20px;'>");
       print("<tr bgcolor='#559999' id='hdr_row' style='color:Black;border-right:1px solid Black;'>");
       print("<td width='10%' align='center'><span class='txt1_color'>Voucher No</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Delivery Date</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Bill No</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Bill Date</span></td>");
       print("<td width='20%' align='center'><span class='txt1_color'>Party Name</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Payment Mode</span></td>");        
       print("<td width='10%' align='center'><span class='txt1_color'>Amount(Rs)</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Vat tax</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Grand Total(Rs)</span></td>");
       print("</tr>");
       
      	    
            foreach($other_purchase as $openrow) {
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
			

      /* 	foreach($purchase_rpt as $openrow) {
       		print("<tr class='td_rows'>");
			 print("<td width='10%' align='center'><input type='text'  readonly='readonly' value='".$openrow["voucher_no"]."' size='10' class='plain_txt' /></td>");
             print("<td width='10%' align='center'><input type='text'  readonly='readonly' value='".$openrow["account_date"]."' size='10' class='plain_txt' /></td>");
             print("<td width='10%' align='center'><input type='text'  readonly='readonly' value='".$openrow["invoice_no"]."' size='8' class='plain_txt' /></td>");
             print("<td width='20%' align='center'><input type='text' readonly='True' value='".$openrow["invoice_date"]."' size='5' class='plain_txt'/></td>");
             print("<td width='20%' align='center'><input type='text' readonly='True' value='".$openrow["party_name"]."' size='20' class='plain_txt' /></td>");
             print("<td width='10%' align='center'><input type='text' readonly='True' value='' size='35' class='plain_txt' /></td>");             
             print("<td width='10%' align='center'><input type='text' readonly='True' value='' size='6' class='plain_txt' /></td>");             
             print("<td width='10%' align='center'><input type='text' readonly='readonly' value='' size='8' class='plain_txt' /></td>");
             print("</tr>");
       	}*/

          print("</table>");
  			if(empty($other_purchase))
			{
			print("<div style='margin:150px 0px 0px 370px'>");	
			print("<font style='font-size:2em;color:#254117; font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; >Nothing to Display...!</font>");
			print("</div");	
			}
          
          
          