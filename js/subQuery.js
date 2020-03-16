function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				req = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	
function getVal() {
		fname=document.feedform.fname.value;
		lname=document.feedform.lname.value;
		CompanyName=document.feedform.CompanyName.value;
		Industry=document.feedform.Industry.value;
		city=document.feedform.city.value;
		state=document.feedform.state.value;
		telephone=document.feedform.telephone.value;
		email=document.feedform.email.value;
		projectname=document.feedform.projectname.value;
		pr_location=document.feedform.pr_location.value;
		comment=document.feedform.comment.value;
		
		var strURL="/submit-query-next.asp?fname="+fname+"&lname="+lname+"&CompanyName="+CompanyName+"&Industry="+Industry+"&city="+city+"&state="+state+"&telephone="+telephone+"&email="+email+"&projectname="+projectname+"&pr_location="+pr_location+"&comment="+comment;	
	
		var req = getXMLHTTP();
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('divfeedback').innerHTML=req.responseText;
						document.getElementById('divfeedback1').innerHTML="";
						
					} else {
						alert("There was a problem in selection");
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	