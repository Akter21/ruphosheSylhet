// JavaScript Document


	
	function validateLogin(frmn, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:<br>";
		msg="";
		
		if(frm.elements["user"].value=="")  msg=msg+" - User field is blank<br>";
		if(frm.elements["pass"].value=="")  msg=msg+" - Password field is blank<br>";

			if(msg){
			//alert(msg_pref+msg);
			document.getElementById('alert').innerHTML=msg_pref+msg;
			$('.alertModal').modal('show');
			return false;
		}else{
			formsubmit(frmn,'');
		}
	}
		function validatecLogin(frmn, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:<br>";
		msg="";
		
		if(frm.elements["cuser"].value=="")  msg=msg+" - User field is blank<br>";
		if(frm.elements["cpass"].value=="")  msg=msg+" - Password field is blank<br>";

				if(msg){
			//alert(msg_pref+msg);
			document.getElementById('alert').innerHTML=msg_pref+msg;
			$('.alertModal').modal('show');
			return false;
		}else{
			formsubmit(frmn,'');
		}
	}
	function validateAdminRegister(frmn,id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:<br>";
		msg="";
		
		if(frm.elements["admname"].value=="")  msg=msg+" - Admin Name field is blank<br>";
		if(frm.elements["admpass"].value=="")  msg=msg+" - Password field is blank<br>";
        if(frm.elements["admadd"].value=="")  msg=msg+" - Address field is blank<br>";
			if(msg){
			//alert(msg_pref+msg);
			document.getElementById('alert').innerHTML=msg_pref+msg;
			$('.alertModal').modal('show');
			return false;
		}else{
			processObject(frmn,id,fnc);
		}
	}

		function validatecustomerRegister(frmn,id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:<br>";
		msg="";
		
		if(frm.elements["cusname"].value=="")  msg=msg+" - Name field is blank<br>";
		if(frm.elements["cuspass"].value=="")  msg=msg+" - Password field is blank<br>";
		else if (!validatepass(frm.elements["cuspass"].value)) msg=msg+" - Password Must be six character<br>";
        if(frm.elements["cusaddress"].value=="")  msg=msg+" - Address field is blank<br>";
		if(frm.elements["cusphone"].value=="")  msg=msg+" - Phone field is blank<br>";
		else if (!validatephone(frm.elements["cusphone"].value)) msg=msg+" - Invalid Phone Number<br>";

		if(frm.elements["cusemail"].value=="")  msg=msg+" - Email field is blank<br>";
		else if (!validate(frm.elements["cusemail"].value)) msg=msg+" - Invalid Email Address<br>";
		if(msg){
			//alert(msg_pref+msg);
			document.getElementById('alert').innerHTML=msg_pref+msg;
			$('.alertModal').modal('show');
			return false;
		}else{
			processObject(frmn,id,fnc);
		}
	}
		function validateMessage(frmn,id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:<br>";
		msg="";
		
		if(frm.elements["name"].value=="")  msg=msg+" - Name field is blank<br>";
		if(frm.elements["email"].value=="")  msg=msg+" - Email field is blank<br>";
		else if (!validate(frm.elements["email"].value)) msg=msg+" - Invalid Email Address<br>";
		if(frm.elements["message"].value=="")  msg=msg+" - Message field is blank<br>";
		if(msg){
			//alert(msg_pref+msg);
			document.getElementById('alert').innerHTML=msg_pref+msg;
			$('.alertModal').modal('show');
			return false;
		}else{
			processObject(frmn,id,fnc);
		}
	}
		function validatetransaction(frmn,id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:<br>";
		msg="";
		
		if(frm.elements["transid"].value=="")  msg=msg+" - Transaction Id is blank<br>";
		if(frm.elements["transamount"].value=="")  msg=msg+" - Amount field is blank<br>";
		else if (!validateamount(frm.elements["transamount"].value)) msg=msg+" - Invalid Amount<br>";
		if(msg){
			//alert(msg_pref+msg);
			document.getElementById('alert').innerHTML=msg_pref+msg;
			$('.alertModal').modal('show');
			return false;
		}else{
			processObject(frmn,id,fnc);
		}
	}


	function validateBooking(frmn,id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:<br>";
		msg="";
		
		
		if(frm.elements["cadult"].value=="") msg=msg+" - Adult field is blank<br>";
		if(frm.elements["cchild"].value=="") msg=msg+" - Child field is blank<br>";

		
	

			if(msg){
			//alert(msg_pref+msg);
			document.getElementById('alert').innerHTML=msg_pref+msg;
			$('.alertModal').modal('show');
			return false;
		}else{
			processObject(frmn,id,fnc);
		}
	} 
		function validateBkashPayment(frmn,id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:<br>";
		msg="";
		
		
		if(frm.elements["bkash"].value=="") msg=msg+" - Transaction Id field is blank<br>";

		
	

			if(msg){
			//alert(msg_pref+msg);
			document.getElementById('alert').innerHTML=msg_pref+msg;
			$('.alertModal').modal('show');
			return false;
		}else{
			processObject(frmn,id,fnc);
		}
	} 
			function validateCardPayment(frmn,id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:<br>";
		msg="";
		
		
		if(frm.elements["cardname"].value=="") msg=msg+" - Name field is blank<br>";

		
	

			if(msg){
			//alert(msg_pref+msg);
			document.getElementById('alert').innerHTML=msg_pref+msg;
			$('.alertModal').modal('show');
			return false;
		}else{
			processObject(frmn,id,fnc);
		}
	}
			function validateRocketPayment(frmn,id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:<br>";
		msg="";
		
		
		if(frm.elements["rocket"].value=="") msg=msg+" - Transaction Id field is blank<br>";

		
	

			if(msg){
			//alert(msg_pref+msg);
			document.getElementById('alert').innerHTML=msg_pref+msg;
			$('.alertModal').modal('show');
			return false;
		}else{
			processObject(frmn,id,fnc);
		}
	}










	function validatecBooking(frmn,nums, fnc){
		var numsArr=nums.split("_");
		var id = numsArr[0];
		var max= numsArr[1];
		var booked=numsArr[2];

		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:<br>";
		msg="";
		console.log(frmn);

		var totPers = Number(frm.elements["cadult"].value)+Number(frm.elements["cchild"].value);
		console.log(totPers);
		console.log(max);
		console.log(booked);
		
		if(Number(max)<Number(totPers+Number(booked))) msg=msg+" - Maximum limit over<br>";
		

		if(frm.elements["cadult"].value=="") msg=msg+" - Adult field is blank<br>";
		else if (!validateadult(frm.elements["cadult"].value)) msg=msg+" - Adult Field Must be a positive number<br>";
		if(frm.elements["cchild"].value=="") msg=msg+" - Child field is blank<br>";
		else if (!validatechild(frm.elements["cchild"].value)) msg=msg+" - child Field Must be a positive number<br>";
		
	
			if(msg){
			//alert(msg_pref+msg);
			document.getElementById('alert').innerHTML=msg_pref+msg;
			$('.alertModal').modal('show');
			return false;
		}else{
			processObject(frmn,id,fnc);
		}
	}
	function validatePakage(frmn,id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:<br>";
		msg="";
		
		if(frm.elements["pname"].value=="")  msg=msg+" - Pakage Name field is blank<br>";
		if(frm.elements["pcost"].value=="")  msg=msg+" - Pakage Cost field is blank<br>";
		if(frm.elements["pdesc"].value=="")  msg=msg+" - Pakage Description field is blank<br>";
		if(frm.elements["chkINdate"].value=="")  msg=msg+" - Pakage Check In field is blank<br>";
		if(frm.elements["chkOutdate"].value=="")  msg=msg+" - Pakage Check Out field is blank<br>";
		if(frm.elements["totalperson"].value=="")  msg=msg+" - Pakage Total Person field is blank<br>";


		if(msg){
			//alert(msg_pref+msg);
			document.getElementById('alert').innerHTML=msg_pref+msg;
			$('.alertModal').modal('show');
			return false;
		}else{
			processObject(frmn,id,fnc);
		}
	}


		function validateaddTeamMembers(frmn,id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:<br>";
		msg="";

		if(frm.elements["teamMemName"].value=="") msg=msg+" - Team Member Field is blank\n";
	

		
		if(msg){
			//alert(msg_pref+msg);
			document.getElementById('alert').innerHTML=msg_pref+msg;
			$('.alertModal').modal('show');
			return false;
		}else{
			processObject(frmn,id,fnc);
		}
	}

			function validateaddGallery(frmn,id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:<br>";
		msg="";

		if(frm.elements["galleryimages"].value=="") msg=msg+" - Image Field is blank\n";
	

		
			if(msg){
			//alert(msg_pref+msg);
			document.getElementById('alert').innerHTML=msg_pref+msg;
			$('.alertModal').modal('show');
			return false;
		}else{
			processObject(frmn,id,fnc);
		}
	}

			function validateaboutus(frmn,id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:<br>";
		msg="";

		if(frm.elements["aboutUsdes"].value=="") msg=msg+" - Description Field is blank\n";
	

		
			if(msg){
			//alert(msg_pref+msg);
			document.getElementById('alert').innerHTML=msg_pref+msg;
			$('.alertModal').modal('show');
			return false;
		}else{
			processObject(frmn,id,fnc);
		}
	}
	function validatepass(pass) {
		 
		   var reg = /^([A-Za-z0-9_\-\.]{6}$)/;
//		   var address = document.forms[form_id].elements[email].value;
		   if(reg.test(pass) == false) {
		 
		    //  alert('Invalid Email Address');
		      return false;
		   }else{
			   return true;
		   }
	}
	function validate(email) {
		 
		   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
//		   var address = document.forms[form_id].elements[email].value;
		   if(reg.test(email) == false) {
		 
		    //  alert('Invalid Email Address');
		      return false;
		   }else{
			   return true;
		   }
	}	

	function validatephone(phone) {
		 
		   var reg = /^([0-9])/;
//		   var address = document.forms[form_id].elements[email].value;
		   if(reg.test(phone) == false) {
		 
		    //  alert('Invalid Email Address');
		      return false;
		   }else{
			   return true;
		   }
	}	
	function validateamount(amount) {
		 
		   var reg = /^([0-9])/;
//		   var address = document.forms[form_id].elements[email].value;
		   if(reg.test(amount) == false) {
		 
		    //  alert('Invalid Email Address');
		      return false;
		   }else{
			   return true;
		   }
	}
	function validatechild(child) {
		 
		   var reg = /^([0-9])/;
//		   var address = document.forms[form_id].elements[email].value;
		   if(reg.test(child) == false) {
		 
		    //  alert('Invalid Email Address');
		      return false;
		   }else{
			   return true;
		   }
	}
	function validateadult(adult) {
		 
		   var reg = /^([0-9])/;
//		   var address = document.forms[form_id].elements[email].value;
		   if(reg.test(adult) == false) {
		 
		    //  alert('Invalid Email Address');
		      return false;
		   }else{
			   return true;
		   }
	}



	function deleteObj(frm, id, fnc){
		if(confirm('Are you sure you want to delete?')){
			processObject(frm, id, fnc);
			return true;
		}else{
			return false;
		} 
	}
	
	function gotoUrl(url){
		window.location=url;
	}
	
	function processObject(frm, id, fnc){		
		var frm=document.getElementById(frm);
		frm.hidEx1.value=id;
		frm.action=frm.action+"/"+fnc;
		
		frm.submit();
	}
	
	
	function formsubmit(frmn,actn){
	
		var frm=document.getElementById(frmn);
	
		frm.action=frm.action+"/"+actn;
	//	alert(frm.action);
		frm.submit();
	}























































































































































































































































































































































































































































	function validateStore(frmn, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";
		
		if(frm.elements["storeName"].value=="")  msg=msg+" - Store Name field is blank\n";
		if(frm.elements["storeAddress"].value=="")  msg=msg+" - Store Address field is blank\n";
		if(frm.elements["storePhone"].value=="")  msg=msg+" - Store Phone field is blank\n";
	
		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn,0,fnc);
		}
	}

	function validateStoreTrnasfer(frmn,id, fnc	){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";
		
		val = document.getElementById("sechProduct").options[document.getElementById("sechProduct").selectedIndex].value;
		if(val=="")  msg=msg+" - Choose a product\n";
		if(frm.elements["strAmount"].value=="")  msg=msg+" - Amount field is blank\n";
	
		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn,id,fnc);
		}

	}

	function checkSupplierReport(frmn, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";
		if(frm.elements["selSup"].value=="") msg=msg+" - Choose a Supplier type\n";
		if(frm.elements["dateinput"].value=="") msg=msg+" - From Date field is blank\n";
		if(frm.elements["dateinput2"].value=="") msg=msg+" - To Date field is blank\n";

		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn, 0, fnc);
		}	

	}
	
	function validateStaffType(frmn, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";
		
		if(frm.elements["typName"].value=="")  msg=msg+" - Type Name field is blank\n";
	
		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn,0,fnc);
		}

	}
	function validateSalary(frmn, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";
		
		if(frm.elements["hidStaffId"].value=="")  msg=msg+" - Staff ID field is blank\n";
		if(frm.elements["basic"].value=="")  msg=msg+" - Basic Salary field is blank\n";
	
		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn,0,fnc);
		}
	}

	function validateLoan(frmn, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";

		if(frm.elements["hidStaffId"].value=="")  msg=msg+" - You did not select a staff\n";		
		if(frm.elements["dateinput"].value=="")  msg=msg+" - Loan Takden Date field is blank\n";
		if(frm.elements["dateinput2"].value=="")  msg=msg+" - Loan Start Month field is blank\n";
		if(frm.elements["loanAmount"].value=="")  msg=msg+" - Loan Amount field is blank\n";
		if(frm.elements["instalment"].value=="")  msg=msg+" - instalment Amount field is blank\n";
	
		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn,0,fnc);
		}

	}

	function validateAdvance(frmn, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";
		if(frm.elements["searchStaff2"].value=="")  msg=msg+" - You did not select a staff\n";		
		if(frm.elements["dateinput3"].value=="")  msg=msg+" - Advance Salary month field is blank\n";

		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn,0,fnc);
		}
	}

	function validateDaylyEntryType(frmn,id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";
		if(frm.elements["entryType"].value=="")  msg=msg+" - Entry Type field is blank\n";		
		if(frm.elements["trans"].value=="")  msg=msg+" - Choose a transaction type\n";

		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn,id,fnc);
		}
	}

	function validateDailySale(frmn, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";
		if(frm.elements["dateinput"].value=="")  msg=msg+" - Date field is blank\n";		
		if(frm.elements["saleType"].value=="")  msg=msg+" - Choose Sale type\n";
		if(frm.elements["saleAmount"].value=="")  msg=msg+" - Sale Amount field is blank\n";

		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn,0,fnc);
		}

	}
	function validateOtherDailySale(frmn, tblName){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";

		val = document.getElementById("othEntryType").options[document.getElementById("othEntryType").selectedIndex].value;

		if(val=="")  msg=msg+" - Choose Entry Type\n";
		if(frm.elements["otrDAmount"].value=="")  msg=msg+" - Other Amount field is blank\n";


		if(msg){
			alert(msg_pref+msg);
			document.getElementById("othEntryType").focus();
			return false;
		}else{
			addTableRow(frmn,tblName);
			frm.elements["entryDesc"].value="";
			frm.elements["otrDAmount"].value="";
			document.getElementById("othEntryType").selectedIndex = "0";
			document.getElementById("othEntryType").focus();


		}

	}	
	function validateSearch(frmn,fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";
		if(frm.elements["dateinput2"].value=="")  msg=msg+" - Date from field is blank\n";		
		if(frm.elements["dateinput3"].value=="")  msg=msg+" - Date to field is blank\n";

		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn,0,fnc);
		}
	}

	function addTableRow(frmn,tblName){
		frm = document.getElementById(frmn);
	    var table = document.getElementById(tblName);

	    rows=parseInt(document.getElementById("hidRows").value)+1;

	    var row = table.insertRow(1);
	    var cell1 = row.insertCell(0);
	    var cell2 = row.insertCell(1);
	    var cell3 = row.insertCell(2);
	    
	    type 	=document.getElementById("othEntryType").options[document.getElementById("othEntryType").selectedIndex].value;
	    typeName=document.getElementById("othEntryType").options[document.getElementById("othEntryType").selectedIndex].innerHTML;
	    amt 	=frm.elements["otrDAmount"].value;
	    desc 	=frm.elements["entryDesc"].value;

	    cell1.innerHTML =  typeName+"<input type='hidden' name='oSale_"+rows+"' id='oSale_"+rows+"' value='"+type+"'>";
	    cell2.innerHTML = desc+"<input type='hidden' name='oDesc_"+rows+"' id='oDesc_"+rows+"' value='"+desc+"'>";
	    cell3.innerHTML = amt+"<input type='hidden' name='oAmount_"+rows+"' id='oAmount_"+rows+"' value='"+amt+"'>";

	    document.getElementById("hidRows").value=rows;

	}


	function validateExpenceName(frmn, id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";
		if(frm.elements["expenceName"].value=="")  msg=msg+" - Expence Name field is blank\n";		

		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn,id,fnc);
		}

	}	
	function validateExpence(frmn, id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";
		if(frm.elements["dateinput"].value=="")  msg=msg+" - Date field is blank\n";		
		val = document.getElementById("entryType").options[document.getElementById("entryType").selectedIndex].value;
		if(val=="")	msg=msg+" - Select Entry Type\n";

		if(frm.elements["entryAmount"].value=="")  msg=msg+" - Amount field is blank\n";		

		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn,id,fnc);
		}

	}	



	
	
	
	//onkeypress="return isNumberKey(event, this)"
   	function isNumberKey(evt, tagId) { 
         var charCode = (evt.charCode) ? evt.which : event.keyCode


         if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 46) 
             return false; 
         else { 
         	var input = document.getElementById(tagId).value;
            var len = document.getElementById(tagId).value.length; 
            var index = document.getElementById(tagId).value.indexOf('.'); 

			if (index > 0 && charCode == 46) { 
				return false; 
			} 
			if (index >0 || index==0) { 
				var CharAfterdot = (len + 1) - index; 
				if (CharAfterdot > 3) { 			
					return false; 
				} 			
        	}

    		if (charCode == 46 && input.split('.').length >1) {
        		return false;
        	}
		} 
        return true; 
 	} 	 
	function calculateSalaryTotal(frmn){
		frm   	= document.getElementById(frmn);
		
		basic	= parseFloat(frm.elements["basic"].value);
		house  	= parseFloat(frm.elements["houseRent"].value);
		mobile	= parseFloat(frm.elements["mobileBill"].value);
		transp	= parseFloat(frm.elements["transport"].value);
		
		
		basicP	= (isNaN(basic))?0:basic;
		houseP	= (isNaN(house))?0:house;
		mobileP	= (isNaN(mobile))?0:mobile;
		transpP	= (isNaN(transp))?0:transp;
		
		//frm.elements["paying"].value= (tot-dis);
		frm.elements["total"].value=(basicP+houseP+mobileP+transpP);
	}

	function validateSalary(frmn, id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";
		
		if(frm.elements["payMonth"].value=="") msg=msg+" - Payment Date field is blank\n";
		val = document.getElementById("bonus").options[document.getElementById("bonus").selectedIndex].value;
		if(val!=''){
			if(frm.elements["bonusAmount"].value=="") msg=msg+" - Bonus Amount field is blank\n";
		}
		

		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn, id, fnc);
		}
	}

	function calculateGoogsAmount(frmn){
		frm   	= document.getElementById(frmn);
		
		quantity	= parseFloat(frm.elements["quantity"].value);
		rate 	 	= parseFloat(frm.elements["rate"].value);
		
		
		quantityP= (isNaN(quantity))?0:quantity;
		rateP	= (isNaN(rate))?0:rate;
		
		//frm.elements["paying"].value= (tot-dis);
		frm.elements["amount"].value=(quantityP*rateP);
	}

	function validateItem(frmn, id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";
		if(frm.elements["description"].value=="") msg=msg+" - Product Description field is blank\n";
		if(frm.elements["quantity"].value=="") msg=msg+" - Quantity field is blank\n";
		if(frm.elements["rate"].value=="") msg=msg+" - Rate field is blank\n";
		if(frm.elements["per"].value=="") msg=msg+" - Per (Type) field is blank\n";

		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn, id, fnc);
		}

	}

	function validateCommit(frmn, id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";

		val = document.getElementById("selSupplier").options[document.getElementById("selSupplier").selectedIndex].value;
		if(val=="")	msg=msg+" - Select Supplier\n";

		if(frm.elements["dateinput"].value=="") msg=msg+" - Date field is blank\n";
		if(frm.elements["invoice"].value=="") msg=msg+" - Invoice field is blank\n";

		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn, id, fnc);
		}

	}

	function validateConsignmentSearch(frmn, id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";

		if(frm.elements["dateinput1"].value=="") msg=msg+" - From Date field is blank\n";
		if(frm.elements["dateinput2"].value=="") msg=msg+" - To Date field is blank\n";
		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn, id, fnc);
		}
	}

	function validateProductType(frmn, id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";


		if(frm.elements["headname"].value=="") msg=msg+" - Type Name field is blank\n";
		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn, id, fnc);
		}
	}
	function validateProductName(frmn, id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";


		if(frm.elements["productname"].value=="") msg=msg+" - Product Name field is blank\n";

		val = document.getElementById("pheadname").options[document.getElementById("pheadname").selectedIndex].value;
		if(val=="")	msg=msg+" - Select Product Type\n";

		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn, id, fnc);
		}
	}

	function validateProduct(frmn, id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";


		if(frm.elements["pId"].value=="") msg=msg+" - Product Name field is blank or did not search one\n";
		if(frm.elements["sourceId"].value=="") msg=msg+" - Supplier field is blank or did not search one\n";

		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn, id, fnc);
		}
	}

	function validateProductPrice(frmn, id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";
		if(frm.elements["prcDesc"].value=="") msg=msg+" - Price Details field is blank\n";
		val = document.getElementById("unitName").options[document.getElementById("unitName").selectedIndex].value;
		if(val=="")	msg=msg+" - Select Unit Type\n";
		if(frm.elements["upc"].value=="") msg=msg+" - UPC (Barcode) field is blank\n";
		if(frm.elements["unitPrice"].value=="") msg=msg+" - Unit Price field is blank\n";
		if(frm.elements["sellingPrice"].value=="") msg=msg+" - Selling Price field is blank\n";
		if(frm.elements["threshold"].value=="") msg=msg+" - UPC (Barcode) field is blank\n";

		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn, id, fnc);
		}
	}
	function validateCustomerForm(frmn, id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";

		if(frm.elements["cutomerName"].value=="") msg=msg+" - Customer Name field is blank\n";
		val = document.getElementById("selCusType").options[document.getElementById("selCusType").selectedIndex].value;
		if(val=="")	msg=msg+" - Select Customer Type\n";
		if(frm.elements["cutomerPhone"].value=="") msg=msg+" - Customer Phone field is blank\n";

		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn, id, fnc);
		}
	}

	function searchCustomer(frmn, id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";
		if(frm.elements["hidCustomerId"].value=="") msg=msg+" - Please search a customer\n";

		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn, id, fnc);
		}
	}
	function validateAddProductList(frmn, id, fnc){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";
		val = document.getElementById("sechProduct").options[document.getElementById("sechProduct").selectedIndex].value;
		if(val=="")	msg=msg+" - Select a product\n";

		if(frm.elements["times"].value=="") msg=msg+" - Unit field is blank\n";

		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			processObject(frmn, id, fnc);
		}
	}

	function adjustVATNDis(frmn){
		frm = document.getElementById(frmn);
		
		vatPer 	= parseFloat(frm.elements["vat"].value);
		tot 	= parseFloat(frm.elements["hidSub"].value);		
		dis 	= parseFloat(frm.elements["discount"].value);
		afterpaid= parseFloat(frm.elements["hidTotal"].value);


		vatTot	= parseFloat((tot-dis)*(vatPer/100)).toFixed(2);
	
	
		frm.elements["vatAmount"].value= vatTot;
		document.getElementById("spanVat").innerHTML = vatTot;
		document.getElementById("spanDis").innerHTML = dis;
		document.getElementById("spanGrand").innerHTML = parseFloat(parseFloat(tot)+parseFloat(vatTot)-parseFloat(dis)).toFixed(2);
		document.getElementById("spanDue").innerHTML = parseFloat(parseFloat(afterpaid)+parseFloat(vatTot)-parseFloat(dis)).toFixed(2);


		frm.elements["cahAmount"].value= parseFloat(parseFloat(afterpaid)+parseFloat(vatTot)-parseFloat(dis)).toFixed(2);
		frm.elements["ccAmount"].value= parseFloat(parseFloat(afterpaid)+parseFloat(vatTot)-parseFloat(dis)).toFixed(2);
		frm.elements["gldAmount"].value= parseFloat(parseFloat(afterpaid)+parseFloat(vatTot)-parseFloat(dis)).toFixed(2);
		frm.elements["chkamount"].value= parseFloat(parseFloat(afterpaid)+parseFloat(vatTot)-parseFloat(dis)).toFixed(2);
	}
	function setUnknown(frmn, id, fnc){
		frm = document.getElementById(frmn);
		frm.elements["hidCustomerId"].value=id;
		processObject(frmn, id, fnc);
	}

	function validateOrder(frmn){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";
		if(frm.elements["vat"].value=="") msg=msg+" - VAT field is blank (VAT Default value is 0)\n";
		if(frm.elements["discount"].value=="") msg=msg+" - Discount field is blank (Discount Default value is 0)\n";
		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			return true;
		}

	} 

	function validateCreditCard(frmn){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";
		if(frm.elements["ccNo"].value=="") msg=msg+" - Card Number field is blank\n";
		if(frm.elements["ccType"].value=="") msg=msg+" - Card Type field is blank\n";
		if(frm.elements["ccAmount"].value=="") msg=msg+" - Amount field is blank\n";

		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			return true;
		}

	}
	function validateChequePay(frmn){
		frm = document.getElementById(frmn);
		msg_pref="Please Complete the fields below:\n";
		msg="";
		if(frm.elements["chkAcName"].value=="") msg=msg+" - AC Name field is blank\n";
		if(frm.elements["chkAcNumber"].value=="") msg=msg+" - AC Number field is blank\n";
		if(frm.elements["chkNumber"].value=="") msg=msg+" - Cheque Number field is blank\n";
		if(frm.elements["chkBankName"].value=="") msg=msg+" - Bank Name field is blank\n";
		if(frm.elements["chkBranch"].value=="") msg=msg+" - Bank Branch field is blank\n";
		if(frm.elements["paydate"].value=="") msg=msg+" - Cheque Date field is blank\n";
		if(frm.elements["chkamount"].value=="") msg=msg+" - Amount field is blank\n";

		if(msg){
			alert(msg_pref+msg);
			return false;
		}else{
			return true;
		}

	}	
	function checkUncheckClient(){
		
		totRow=document.getElementById('totClntRow').value;
		if(document.getElementById('clientChk').checked){
			for (var i = 0; i <= totRow; i++ ){
				document.getElementById('chkClnt_'+i).checked=true;
			}
		}else{
			for (var i = 0; i <= totRow; i++ ){
				document.getElementById('chkClnt_'+i).checked=false;
			}			
		}
	}

	function checkUncheckBill(){
		
		totRow=document.getElementById('totBillRow').value;
		if(document.getElementById('BillChk').checked){
			for (var i = 0; i <= totRow; i++ ){
				document.getElementById('chkBill_'+i).checked=true;
			}
		}else{
			for (var i = 0; i <= totRow; i++ ){
				document.getElementById('chkBill_'+i).checked=false;
			}			
		}
	}