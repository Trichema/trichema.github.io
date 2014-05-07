$(document).ready(function() {

// TOGGLES
	$('.toggle-view li').click(function () {
	    var text = $(this).children('.toggle');
	    
	    if (text.is(':hidden')) {
	        text.slideDown('fast');
	        $(this).children('.toggle-title').addClass('tactive');      
	    } else {
	        text.slideUp('fast');
	        $(this).children('.toggle-title').removeClass('tactive');       
	    }       
	});
	
	
		
//TABS
	var tabContents = $(".tab_content").hide(), 
	    tabs = $("ul.tabs li");
	
	tabs.first().addClass("active").show();
	tabContents.first().show();
	
	tabs.click(function() {
	    var $this = $(this), 
	        activeTab = $this.find('a').attr('href');
	    
	    if(!$this.hasClass('active')){
	        $this.addClass('active').siblings().removeClass('active');
	        tabContents.hide().filter(activeTab).fadeIn();
	    }
	    return false;
	});	
	
	
	
// OPACITY
	$(".zoom").css({"opacity":0});
	$(".zoom").hover(
		function(){$(this).stop().animate({ "opacity": 0.9 }, 'slow');
		$(this).siblings('img').stop().animate({ "opacity": 0.7 }, 'fast');},
		
		function(){$(this).stop().animate({ "opacity": 0 }, 'fast');
		$(this).siblings('img').stop().animate({ "opacity": 1 }, 'fast');});

	
// CONTACT form validation 	
	if (jQuery().validate) {
	    	$("#contact_form").validate();
	}



// END
});