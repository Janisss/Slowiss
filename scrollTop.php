<!DOCTYPE html>
<style type="text/css">
	#myBtn {
	width: 38px;
	height: 38px;	
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 0px; /* Place the button at the bottom of the page */
    right: 330px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: #9d0b0f; /* Set a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
	padding: 9px;
	font-size: 15px;
    border-radius: 1px; /* Rounded corners */
	-webkit-transition: width 1s, height 1s, font-size 1s, -webkit-transform 1s; /* Safari */
    transition: width 1s, height 1s, font-size 1s, transform 1s;
}

	#myBtn:hover{
	width: 55px;
	height: 55px;
	font-size: 20px;
	-webkit-transform: rotate(360deg); /* Safari */
    transform: rotate(360deg);
	content: "top";
	}
</style>

<script type="text/javascript">
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
	        document.getElementById("myBtn").style.display = "block";
	    } else {
	        document.getElementById("myBtn").style.display = "none";
	    }
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
	    document.documentElement.scrollTop = 0; // For IE and Firefox
	}
</script>
<div style="text-align: center;">
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i>
</button>
</div>
