$(document).ready(function() 
{ 
// Task a: Append content to paragraph and list
$('#appendContent').click(function() {
$('#paragraph').append(' This content has been appended.'); 
$('#list').append('<li>New Item</li>'); 
});
// Task b & c: Animate the div and change its color
$('#animateDiv').click(function() { 
$('#animatedDiv').animate({
width: '200px',
height: '200px'
},1000, function() { 
// This callback is executed after the animation is complete $(this).addClass('animated');
// Change color using CSS class
}); 
}); 
});