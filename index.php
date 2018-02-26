<?php
	//if(!empty($_POST["submit"])) {
	//	$conn = mysql_connect("localhost","root","");
	//	mysql_select_db("phppot_examples",$db);
		
	/*	$itemCount = count($_POST["item_name"]);
		$itemValues=0;
		$query = "INSERT INTO skills (item_name) VALUES";
		$queryValue = "";
		for($i=0;$i<$itemCount;$i++) {
			if(!empty($_POST["item_name"][$i])) {
				$itemValues++;
				if($queryValue!="") {
					$queryValue .= ",";
				}
				$queryValue .= "('" . $_POST["item_name"][$i] . "')";
			}
		}
		$sql = $query.$queryValue;
		if($itemValues!=0) {
			$result = mysql_query($sql);
			if(!empty($result)) $message = "Added Successfully.";
		}
//	}*/
?>
<HTML>
<HEAD>
<TITLE>PHP jQuery Dynamic Textbox</TITLE>
<LINK href="style.css" rel="stylesheet" type="text/css" />
<SCRIPT src="http://code.jquery.com/jquery-2.1.1.js"></SCRIPT>
<SCRIPT>
function addMore() {
	$("<DIV>").load("input.php", function() {
			$("#product").append($(this).html());
	});	
}
function deleteRow() {
	$('DIV.product-item').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}
</SCRIPT>
</HEAD>
<BODY>
<DIV id="outer">
<DIV id="header">

</DIV>
<DIV id="product">
<?php require_once("input.php") ?>
</DIV>
<DIV class="btn-action float-clear">
<input type="button" name="add_item" value="Add" onClick="addMore();" />
<input type="button" name="del_item" value="Delete" onClick="deleteRow();" />

</DIV>

</DIV>
</form>
</BODY>
</HTML>