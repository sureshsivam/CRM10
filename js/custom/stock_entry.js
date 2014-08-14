/**
 * 
 */
$("#acct_date").datepicker({
	dateFormat: 'yy-mm-dd',	maxDate: '+0d',	
	defaultDate: new Date()	
});
$('#acct_date').datepicker().datepicker('setDate',new Date());

function get_product(tank_no)
{
	if(tank_no != ""){
	$.get(site_url + "/stock/get_product/"+tank_no,function(data) {
		document.getElementById("product").value=data;
	
	}); 
	var acct_date=document.getElementById("acct_date").value;
	
	
	$.get(site_url + "/stock/check_tank",{act_date:acct_date,tank:tank_no},function(result) {
		if(result != 0){
			alert("Stock Entry already updated for this tank. do u want to continue");
			document.getElementById("count").value=result;
		}else{
		document.getElementById("count").value=result;
		}
		//alert(result);
	}); 
	}
	else
		{
		document.getElementById("product").value='';
		}
}
	function tank_details_validation()
	{
		var tank_no=document.getElementById("tank_no").value;
		var acct_date=document.getElementById("acct_date").value;
		var product=document.getElementById("product").value;
		var volume=document.getElementById("volume").value;
		
		if(tank_no=="")
			{
				alert("Please Select tank number");
			}
			else if(product=="")
			{
				alert("No product");
			}
			else if(acct_date=="")
			{
				alert("Please Select a Date");
			}
			else if(volume=="")
		    {
				alert("Please Enter Volume");
		    }
		    else
			{
				document.forms['tank_stock_form'].submit();
				alert("Volume has updated for the tank "+ tank_no);
			}
		
	}