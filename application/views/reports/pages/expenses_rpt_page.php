<?php
  print("<table  border='1' align='left' cellpadding='1' cellspacing='1'  class='alt_row' style='border-collapse:collapse;'>");
       print("<tr bgcolor='#559999' id='hdr_row' style='background-color:#559999;color:white;border-right:1px solid white; '>");
       print("<td width='10%' align='center'><span class='txt1_color'>Date</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Bill No</span></td>");
       print("<td width='23%' align='center'><span class='txt1_color'>Vendor Name</span></td>");
       print("<td width='22%' align='center'><span class='txt1_color'>Items Purchased</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Amount(Rs)</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Added By</span></td>");
       print("<td width='15%' align='center'><span class='txt1_color'>Added Time</span></td>");
       print("</tr>");
       $total=0;
       foreach($expenses_rpt as $openrow) {
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
			if(empty($expenses_rpt))
			{
			print("<div style='margin:150px 0px 0px 370px'>");	
			print("<font style='font-size:2em;color:#254117; font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; >Nothing to Display...!</font>");
			print("</div");	
			}