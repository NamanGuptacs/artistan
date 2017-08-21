
// JavaScript Document
$(document).ready(function()
	{
		$("#artist").click(function(event)
				{
					var artist = $("#artist").val();
					
					$.post("field.php",
						   {
							   "artist":artist
						   },
						   function(data)
						   {
							   $("#field").html(data);
						   }
						   );
				});
	});
						   
						 