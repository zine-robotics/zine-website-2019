(function(w){
  var sw = document.body.clientWidth,
    current = 0,
    breakpointSize = window.getComputedStyle(document.body,':after').getPropertyValue('content'),
		multiplier = 1, /*Determines the number of panels*/
		$carousel = $('.c'),
		$cList = $('.c-list'),
		$cContainer = $('.c-list-container'),
		$cWidth = $cContainer.outerWidth(),
    cLeft = $cList.css("left").replace("px",""),
		$li = $cList.find('li'),
		$liLength = $li.size(),
		numPages = $liLength/multiplier,
		$prev = $('.c-nav .prev'),
		$next = $('.c-nav .next');
	
	$(document).ready(function() {
		buildCarousel();
	});
	
	
	$(window).resize(function(){ //On Window Resize
		sw = document.body.clientWidth;
		$cWidth = $cContainer.width();
		breakpointSize = window.getComputedStyle(document.body,':after').getPropertyValue('content');  /* Conditional CSS http://adactio.com/journal/5429/ */
		sizeCarousel();
		posCarousel();
	});
	
	function sizeCarousel() { //Determine the size and number of panels to reveal
		current = 0;
		
		animLimit = $liLength/multiplier-1;
		
		$li.outerWidth($cWidth/multiplier); //Set panel widths
		
	}
	
	
	function buildCarousel() { //Build the Carousel
		sizeCarousel();

		if(Modernizr.touch) {
		   buildSwipe(); 
		}
	}
	
	function posCarousel() { //Animate Carousel. CSS transitions used for the actual animation.
		var pos = -current * $cWidth;
		$cList.addClass('animating').css("left",pos);
    
    setTimeout(function() {
      $cList.removeClass('animating');
      cLeft = $cList.css("left").replace("px","");
    }, 500);  // will work with every browser
	}
	
	$prev.click(function(e){ //Previous Button Click
		e.preventDefault();
		moveRight();
	});
  
	$next.click(function(e){ //Next Button Click
		e.preventDefault();
		moveLeft();
	});

  function moveRight() {
    if(current>0) {
			current--;
		}
		posCarousel();
  }
  
  function moveLeft() {
      if(current<animLimit) {
        current++;
      }
      posCarousel();
  }
  
	function buildSwipe() {
		var threshold = 80,
        origX = 0,
		    finalX = 0,
		    changeX = 0,
		    changeY = 0,
        curPos;
		    
		//Touch Start
		$cContainer.get(0).addEventListener("touchstart", function (event) {
		     origX = event.targetTouches[0].pageX;
        curPos = origX;
		});
		
		//Touch Move
		$cContainer.get(0).addEventListener("touchmove", function (event) {
		    finalX = event.touches[0].pageX,
        diffX = origX - finalX,
        leftPos = cLeft-diffX;
        
        event.preventDefault();
        $cList.css("left",leftPos);
		});
		
		//Touch Move
		$cContainer.get(0).addEventListener("touchend", function (event) {
      var diffX = origX - finalX,
          diffXAbs = Math.abs(diffX);
      
			if (diffX > 0 && diffXAbs > threshold) {
        moveLeft();
			} else if (diffX < 0 && diffXAbs > threshold) {
				moveRight();
      } else {
        posCarousel();
      }
			
      origX = finalX = diffX = 0;
		});
}
  
})(this);