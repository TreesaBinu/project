function formValidation()
{
	var cname=/^[a-zA-Z]+$/;
	var n = document.form1.name.value;
	if(name.length<=3)
	{
		alert("Enter atleast three characters for name.");
		form1.name.focus();
		return false;
	}
	if(name.match(cname))
	{
		return true;
	}
	else 
	{
		alert("Enter valid Name.");
		form1.name.focus();
		return false;
	}
}

/*
function check(form)
{
 if(form.name.value =="username" && form.pwd.value == "password")
  {
    window.open('book.php')
  }
 else
 {
   alert("Error Password or Username")
  }
}





function formValidation()
	{
		var n=document.form1.name.value;
		var p=document.form1.pwd.value;
		var cp=document.form1.cpwd.value;
		if (name.value==null || name.value==""&&name.value.length <= 3)
		{  
		alert("Enter atleast three characters."); 
		n.focus();
		return false;  
		}
		else if(p.length<6)
		{  
			alert("Password must be at least 6 characters long.");  
			return false;  
		}
		if(!isNaN(n))
		{
			alert("Please Enter Only Characters");
			n.focus();
			return false;
		}
		else if(p!=cp)
		{  
			return false;  
		}  
		else
		{  
			alert("password must be same!");  
		return false;  
		}
	}