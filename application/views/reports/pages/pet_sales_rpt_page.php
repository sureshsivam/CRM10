<?php
  print("<table  border='1' align='left' cellpadding='1' cellspacing='1'  class='alt_row' style='border-collapse:collapse;'>");
       print("<tr bgcolor='#559999' id='hdr_row' style='background-color:#559999;color:white;border-right:1px solid white; '>");
       print("<td width='12%' align='center'><span class='txt1_color'>Date</span></td>");
       print("<td width='8%' align='center'><span class='txt1_color'>Shift</span></td>");
       print("<td width='8%' align='center'><span class='txt1_color'>Pump No</span></td>");
       print("<td width='16%' align='center'><span class='txt1_color'>Close Reading</span></td>");
       print("<td width='16%' align='center'><span class='txt1_color'>Open Reading</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Sale Ltrs(Ltrs)</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Test Ltrs(Ltrs)</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Rate(Rs)</span></td>");
       print("<td width='10%' align='center'><span class='txt1_color'>Amount(Rs)</span></td>");
       print("</tr>");
       foreach($sale_rpt as $openrow) {
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
			if(empty($sale_rpt))
			{
			print("<div style='margin:150px 0px 0px 370px'>");	
			print("<font style='font-size:2em;color:#254117; font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; >Nothing to Display...!</font>");
			print("</div");	
			}