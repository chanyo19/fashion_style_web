<script language="javascript" type="text/javascript">
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
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getSubmenu(menuId) {		
		
		var strURL="findsubmenu.php?menu="+menuId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('submenudiv').innerHTML=req.responseText;
						document.getElementById('menulistdiv').innerHTML=req.responseText;						
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	function getMenulist(menuId,submenuId) {		
		var strURL="findmenulist.php?menu="+menuId+"&submenu="+submenuId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('menulistdiv').innerHTML=req.responseText;						
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
</script>




<?php

include("php/connect.php");

$query="SELECT * FROM menu";
$result=mysql_query($query);
?>




<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<p style="margin-top:15px; font-size:16px">Country <small style="font-size:12px; color:#999;">Required</small> </p>
<select name="country" id="country" onChange="getSubmenu(this.value)" class="form-control">
	<option value="">Select Menu</option>
	<?php while ($row=mysql_fetch_array($result)) { ?>
	<option value=<?php echo $row['id']?>><?php echo $row['menu']?></option>

	<?php } ?>
	
	</select>

<br/>	
<p style="margin-top:15px; font-size:16px">Sub Menu <small style="font-size:12px; color:#999;">Required</small> </p>
<div id="submenudiv"><select name="city" id="city" class="form-control">
	<option>Select Sub Menu</option>
        </select></div>

<br/>		
 <p style="margin-top:15px; font-size:16px">Menu List  </p>
<div id="menulistdiv"><select name="area" id="area" class="form-control">
	<option>Select Menu List</option>
        </select></div>
		<br/>
</div>