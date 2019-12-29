<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jira aplikacija</title>
	<meta charset="utf-8">
	<meta name="description" content="Pinokio">
	<meta name="keywords" content="HTML,CSS,Bootstrap">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
   
</head>
<body>
<div id="result"></div>    
<div id="wrapper">
    <h1>Create Issue</h1>
    <form id="create-form" action="" method="post">
        Summary: <input type="text" name="summary" id="summary" value=""/>
        Description: <input type="text" name="description" id="description" value="" />
        Date: <input type="date" name="date"  />
        Priority: <select name="priority">
        <option value="Low">Low</option>
        <option value="Medium">Medium</option>
        <option value="High">High</option>
        </select>
    </form>
    <button id="button">Create issue</button>
</div>

    
    
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>

<script>
$('#button').click(function() {
     $.ajax({
       type: "POST",
       url: "jira-create-issue.php",
       data: $('#create-form').serialize(),
       success: function(data){
          $("#result").html(data);
       },
       dataType: "html"
    });
});
</script>
</body>
</html>