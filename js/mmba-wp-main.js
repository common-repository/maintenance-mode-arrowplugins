// For Upload Field Type

jQuery(document).ready(function($){

	mmba_wp_form_submit = function(path){

		$("#maintenance_wp_by_arrow_form_container").submit();
		setTimeout(function(){

		  window.location = path;
		}, 500);
	};

	setTimeout(function(){
		
		var date = new Date();

		var month = date.getMonth()+1;
		var day = date.getDate();

		var today = (month<10 ? '0' : '') + month + '/' + (day<10 ? '0' : '') + day + '/' + date.getFullYear();

		$("#maintenance_wp_by_arrow_advance_progress_bar_start_date").attr("readonly", true);
		$("#maintenance_wp_by_arrow_advance_progress_bar_end_date").attr("readonly", true);
		$("#maintenance_wp_by_arrow_advance_progress_bar_start_time").attr("readonly", true);
		$("#maintenance_wp_by_arrow_advance_progress_bar_end_time").attr("readonly", true);

		$("#maintenance_wp_by_arrow_advance_progress_bar_start_date").datepicker({
			minDate: today,
			onSelect: function(selected) {
	          $("#maintenance_wp_by_arrow_advance_progress_bar_end_date").datepicker("option","minDate", selected)
        	}

		});

		$("#maintenance_wp_by_arrow_advance_progress_bar_end_date").datepicker({

			onSelect: function(selected) {

	           $("#maintenance_wp_by_arrow_advance_progress_bar_start_date").datepicker("option","maxDate", selected)

	        }

		});

		var startMaxTime = "";
		var endMinTime = "";

		$("#maintenance_wp_by_arrow_advance_progress_bar_start_time").datetimepicker({

			format: 'H:i',
	    	datepicker: false,
	    	step: 60,
	    	onSelectTime: function(){
	    		
	    		endMinTime = $("#maintenance_wp_by_arrow_advance_progress_bar_start_time").val()
				$("#maintenance_wp_by_arrow_advance_progress_bar_end_time").datetimepicker('setOptions',{'minTime':endMinTime})	    		

	    	}
		});	

		$("#maintenance_wp_by_arrow_advance_progress_bar_end_time").datetimepicker({

			format: 'H:i',
	    	datepicker: false,
	    	step: 60,
	    	onSelectTime: function(){
	    		
	    		startMaxTime = $("#maintenance_wp_by_arrow_advance_progress_bar_end_time").val()
				$("#maintenance_wp_by_arrow_advance_progress_bar_start_time").datetimepicker('setOptions',{'maxTime':startMaxTime})	    		

	    	}

		});

		$("#maintenance_wp_by_arrow_advance_progress_bar_date_format").on('change', function(){

        	$("#maintenance_wp_by_arrow_advance_progress_bar_start_date").datepicker("option","dateFormat", $(this).val())
        	$("#maintenance_wp_by_arrow_advance_progress_bar_end_date").datepicker("option","dateFormat", $(this).val())

		});

		$("#maintenance_wp_by_arrow_advance_count_down_start_date").attr("readonly", true);
		$("#maintenance_wp_by_arrow_advance_count_down_end_date").attr("readonly", true);
		$("#maintenance_wp_by_arrow_advance_count_down_start_time").attr("readonly", true);
		$("#maintenance_wp_by_arrow_advance_count_down_end_time").attr("readonly", true);

		$("#maintenance_wp_by_arrow_advance_count_down_start_date").datepicker({
			minDate: today,
			onSelect: function(selected) {

	          $("#maintenance_wp_by_arrow_advance_count_down_end_date").datepicker("option","minDate", selected)
        	}
		});

		$("#maintenance_wp_by_arrow_advance_count_down_end_date").datepicker({

			onSelect: function(selected) {

	           $("#maintenance_wp_by_arrow_advance_count_down_start_date").datepicker("option","maxDate", selected)

	        }
		});

		var startMaxTime = "";
		var endMinTime = "";

		$("#maintenance_wp_by_arrow_advance_count_down_start_time").datetimepicker({

			format: 'H:i',
	    	datepicker: false,
	    	step: 60,
	    	onSelectTime: function(){
	    		
	    		endMinTime = $("#maintenance_wp_by_arrow_advance_count_down_start_time").val()
				$("#maintenance_wp_by_arrow_advance_count_down_end_time").datetimepicker('setOptions',{'minTime':endMinTime})	    		

	    	}
		});	

		$("#maintenance_wp_by_arrow_advance_count_down_end_time").datetimepicker({

			format: 'H:i',
	    	datepicker: false,
	    	step: 60,
	    	onSelectTime: function(){
	    		
	    		startMaxTime = $("#maintenance_wp_by_arrow_advance_count_down_end_time").val()
				$("#maintenance_wp_by_arrow_advance_count_down_start_time").datetimepicker('setOptions',{'maxTime':startMaxTime})	    		

	    	}

		});

		$("#maintenance_wp_by_arrow_advance_count_down_date_format").on('change', function(){

        	$("#maintenance_wp_by_arrow_advance_count_down_start_date").datepicker("option","dateFormat", $(this).val())
        	$("#maintenance_wp_by_arrow_advance_count_down_end_date").datepicker("option","dateFormat", $(this).val())

		});

		$("#maintenance_wp_by_arrow_social_link_fb_active").on('click', function(){
			checked_social_links()
		});

		$("#maintenance_wp_by_arrow_social_link_twitter_active").on('click', function(){
			checked_social_links()
		});

		$("#maintenance_wp_by_arrow_social_link_googleplus_active").on('click', function(){
			checked_social_links()
		});

		$("#maintenance_wp_by_arrow_social_link_linkedin_active").on('click', function(){
			checked_social_links()
		});

		checked_social_links();

	}, 500);

	checked_social_links = function(){

		if($("#maintenance_wp_by_arrow_social_link_fb_active").attr("checked") == "checked") 
			$("#maintenance_wp_by_arrow_social_link_fb_page_name").attr("readonly", false);			
		else 
			$("#maintenance_wp_by_arrow_social_link_fb_page_name").attr("readonly", true);

		if($("#maintenance_wp_by_arrow_social_link_twitter_active").attr("checked") == "checked")
			$("#maintenance_wp_by_arrow_social_link_twitter_page_name").attr("readonly", false);			
		else
			$("#maintenance_wp_by_arrow_social_link_twitter_page_name").attr("readonly", true);
		

		if($("#maintenance_wp_by_arrow_social_link_googleplus_active").attr("checked") == "checked")
			$("#maintenance_wp_by_arrow_social_link_googleplus_page_name").attr("readonly", false);			
		else
			$("#maintenance_wp_by_arrow_social_link_googleplus_page_name").attr("readonly", true);
		

		if($("#maintenance_wp_by_arrow_social_link_linkedin_active").attr("checked") == "checked")
			$("#maintenance_wp_by_arrow_social_link_linkedin_page_name").attr("readonly", false);			
		else
			$("#maintenance_wp_by_arrow_social_link_linkedin_page_name").attr("readonly", true);
		
	};
});

