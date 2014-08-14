<?php
 print("<table width='100%' border='1' align='left' cellpadding='1' class='alt_row' cellspacing='1' margin='10px' style='border-collapse:collapse;margin-bottom:20px;'>");
       print("<tr bgcolor='#559999' id='hdr_row' style='background-color:#559999;color:white;border-right:1px solid white;'>");
       print("<td width='10%' align='center'><span class='txt1_color'>Acct Date</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Bill No</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Indent No</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Shift</span></td>");
       print("<td width='20%' align='center'><span class='txt1_color'>Party Name</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Vehicle</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Product</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Litres</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Amount(Rs)</span></td>");
       print("</tr>");
       
      	    
            foreach($indent_rpt as $openrow) {
        	 
			$CI =& get_instance();
			$CI->load->model('Reports_model');
			$result = $CI->Reports_model->ind_sal_report_details($openrow["bill_number"]);
			$ctr=1;
			$tot_ltrs=0;
			foreach ($result as $val) {
			if($ctr==1){
			 print("<tr class='small'>");
			 print("<td width='10%' align='center'>".$openrow["bill_date"]."</td>");
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
     		/* $CI =& get_instance();
			$CI->load->model('Reports_model');
			$result1 = $CI->Reports_model->other_ind_sal_report($sdate,$edate,$cust_name);
       		foreach($result1 as $openrow) {
        	$CI =& get_instance();
			$CI->load->model('Reports_model');
			$result2 = $CI->Reports_model->other_ind_sal_report_details($openrow["bill_no"]);
			$ctr=1;
       		foreach ($result2 as $val) {
			if($ctr==1){
			 print("<tr class='td_rows'>");
			 print("<td width='10%' align='center'><input type='text'  readonly='readonly' value='".$openrow["bill_time"]."' size='10' class='plain_txt' /></td>");
             print("<td width='10%' align='center'><input type='text'  readonly='readonly' value='".$openrow["bill_no"]."' size='10' class='plain_txt' /></td>");
             print("<td width='10%' align='center'><input type='text'  readonly='readonly' value='".$openrow["indent_no"]."' size='8' class='plain_txt' /></td>");
             print("<td width='10%' align='center'><input type='text' readonly='True' value='".$openrow["shift"]."' size='5' class='plain_txt'/></td>");
             print("<td width='20%' align='center'><input type='text' readonly='True' value='".$openrow["customer_name"]."' size='20' class='plain_txt' /></td>");
             print("<td width='10%' align='center'><input type='text' readonly='True' value='".$openrow["vehicle_no"]."' size='35' class='plain_txt' /></td>");             
             print("<td width='10%' align='center'><input type='text' readonly='True' value='".$val["product"]."' size='6' class='plain_txt' /></td>");             
             print("<td width='10%' align='center'><input type='text' readonly='readonly' value='".$val["quantity"]."' size='8' class='plain_txt' /></td>");
             print("<td width='10%' align='center'><input type='text' readonly='readonly' value='".$val["value"]."' size='8' class='plain_txt' /></td>");
             print("</tr>");
             $ctr++;
             $tot_ltrs+=$val["quantity"];
			}
			else{
			 print("<tr class='td_rows'>");
			 print("<td width='10%' align='center'><input type='text'  readonly='readonly' value='' size='10' class='plain_txt' /></td>");
             print("<td width='10%' align='center'><input type='text'  readonly='readonly' value='' size='10' class='plain_txt' /></td>");
             print("<td width='10%' align='center'><input type='text'  readonly='readonly' value='' size='8' class='plain_txt' /></td>");
             print("<td width='10%' align='center'><input type='text'  readonly='readonly' value='' size='8' class='plain_txt' /></td>");
             print("<td width='10%' align='center'><input type='text'  readonly='True' value='' size='5' class='plain_txt'/></td>");
             print("<td width='20%' align='center'><input type='text'  readonly='True' value='' size='20' class='plain_txt' /></td>");
             print("<td width='10%' align='center'><input type='text'  readonly='True' value='".$val["product"]."' size='35' class='plain_txt' /></td>");             
             print("<td width='10%' align='center'><input type='text'  readonly='True' value='".$val["quantity"]."' size='6' class='plain_txt' /></td>");             
             print("<td width='10%' align='center'><input type='text'  readonly='readonly' value='".$val["value"]."' size='8' class='plain_txt' /></td>");
             print("</tr>");
             $tot_ltrs+=$val["quantity"];
			}
			}
       		}
       		*/
          print("</table>");
          	if(empty($indent_rpt))
			{
			print("<div style='margin:150px 0px 0px 370px'>");	
			print("<font style='font-size:2em;color:#254117; font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; >Nothing to Display...!</font>");
			print("</div");	
			}
  