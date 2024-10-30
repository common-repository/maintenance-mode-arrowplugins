
<!DOCTYPE html>
<html class="mmba-wp-arrow" lang="en">
	
	<head>
		
		<style type="text/css">

			#maintenance_wp_by_arrow_count_down {
			  margin: 0 auto;
			  text-align: center;
			  font-weight: 100;
			}

			.maintenance_wp_by_arrow_counter_div {
			  display: inline-block;
			  line-height: 1;
			  padding: 5px;
			}

			#maintenance_wp_by_arrow_days {
			  font-size: 30px;
			  color: #db4844;
			}
			#maintenance_wp_by_arrow_hours {
			  font-size: 30px;
			  color: #f07c22;
			}
			#maintenance_wp_by_arrow_minutes {
			  font-size: 30px;
			  color: #f6da74;
			}
			#maintenance_wp_by_arrow_seconds {
			  font-size: 15px;
			  color: #abcd58;
			}

		</style>

		<script type="text/javascript">

			function makeTimer() {

				var selectedTemplate = document.getElementById("maintenance_wp_by_arrow_template_selected_id").value;

				endTime = new Date(endDateTime); 
				endTime = (Date.parse(endTime) / 1000);

				var now = new Date();

				now = (Date.parse(now) / 1000);

				var timeLeft = endTime - now;

				var days = Math.floor(timeLeft / 86400); 
				var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
				var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
				var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

				if (hours < "10") { hours = "0" + hours; }
				if (minutes < "10") { minutes = "0" + minutes; }
				if (seconds < "10") { seconds = "0" + seconds; }

				if(endingDateTime >= currentDateTime){

					var css = "";

					if(selectedTemplate == 6) css = "display: block; color: #fd3267; font-size: 14px; margin-bottom: 0;";
					else css = "display: block; font-size: 10px; color: white;";

					document.getElementById("maintenance_wp_by_arrow_days").innerHTML = days + "<span style='" + css + "'>DAYS</span>";
					document.getElementById("maintenance_wp_by_arrow_hours").innerHTML = hours + "<span style='" + css + "'>HOURS</span>";
					document.getElementById("maintenance_wp_by_arrow_minutes").innerHTML = minutes + "<span style='" + css + "'>MINUTES</span>";
					document.getElementById("maintenance_wp_by_arrow_seconds").innerHTML = seconds + "<span style='" + css + "'>SECONDS</span>";
				}

			}

			var startDateTime = "";
			var startingDateTime = "";
			var endDateTime = "";
			var endingDateTime = "";
			var currentDateTime = "";

			setInterval(function() { 
	
				if(document.getElementById("maintenance_wp_by_arrow_start_date_time").value.length>0)
					startDateTime = document.getElementById("maintenance_wp_by_arrow_start_date_time").value;

				if(document.getElementById("maintenance_wp_by_arrow_end_date_time").value.length>0)
					endDateTime = document.getElementById("maintenance_wp_by_arrow_end_date_time").value;


				startingDateTime = new Date(startDateTime).getTime();
				currentDateTime = new Date().getTime();
				endingDateTime = new Date(endDateTime).getTime();

				if(currentDateTime>=startingDateTime && endingDateTime>=currentDateTime) makeTimer();
				else {

					document.getElementById("maintenance_wp_by_arrow_days").innerHTML = "";
					document.getElementById("maintenance_wp_by_arrow_hours").innerHTML = "";
					document.getElementById("maintenance_wp_by_arrow_minutes").innerHTML = "";
					document.getElementById("maintenance_wp_by_arrow_seconds").innerHTML = "";
				}

			}, 1000);

			function maintenance_wp_by_arrow_notification_alert()
			{

				alert(emailValidation($("#maintenance_wp_by_arrow_notification_alert").val()))
/*				$.ajax({
					type: "POST",
					dataType: "html",
					url: "wp-content/plugins/wp-maintenance-by-arrow/themes/default/mmba-wp-notification-alert-by-arrow.php", 
					data: {
						"email" : $("#maintenance_wp_by_arrow_notification_alert").val()
					},
					success: function(data) {
						alert(data.trim())
					}

				});
*/
			}

			function emailValidation(email)
			{
			    var regx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			    return regx.test(String(email).toLowerCase());
			}

		</script>

<style>

  /* The only rule that matters */
  #maintenance_wp_by_arrow_background_video {
  /*  making the video fullscreen  */
    position: fixed !important ;
    right: 0 !important ;
    bottom: 0 !important ;
    min-width: 100% !important ;
    min-height: 100% !important ;
    width: auto !important ;
    height: auto !important ;
    z-index: -100 !important ;
  }
</style>
		<meta charset="utf-8">
		<title>{Title}</title>
		<script type="text/javascript" src="wp-content/plugins/wp-maintenance-by-arrow/js/mmba-wp-jquery-1.12.4.min.js"></script>
		{MetaDescription}
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		{Favicon}
		{Head}
		{CustomCSS}
	</head>
	
	<body>

		<div style="opacity: 0.9;" id="maintenance_wp_by_arrow_default_page">
			<div id="maintenance_wp_by_arrow_content">
				{Logo}
				{Headline}
				{MsgDescription}
				{Notify}
			</div>
			<div id="maintenance_wp_by_arrow_count_down">
				{Countdown}
			</div>
			<div>
				{ProgressBar}
			</div>
			{Credit}
			{Footer}
			{SocialLink}
			{SocialPost}
		</div>
	</body>
</html>


