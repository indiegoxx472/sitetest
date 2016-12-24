$('.maps').click(function () {
    $('.maps iframe').css("pointer-events", "auto");
});

$( ".maps" ).mouseleave(function() {
  $('.maps iframe').css("pointer-events", "none"); 
});
$("#contact-x").hide();
function leavemsg()
{
    $("#contact-x").show(100);
    document.getElementById("msg-x").innerHTML='<a href="javascript:leavemsgc();" class="head-xr">Cancel Message</a>'
}
function leavemsgc()
{
    $("#contact-x").hide(100);
    document.getElementById("msg-x").innerHTML='<a href="javascript:leavemsg();" class="head-x">Leave a message</a>'
}
$(document).ready(function()
{
    $(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
    var options = [
    {selector: '#myelement1', offset: 200, callback: '$(this).addClass("animated")' },
];
  $('.slider').slider({full_width: true});
});
$.fn.moveIt = function(){
  var $window = $(window);
  var instances = [];
  
  $(this).each(function(){
    instances.push(new moveItItem($(this)));
  });
  window.onscroll = function(){
    var scrollTop = $window.scrollTop();
    instances.forEach(function(inst){
      inst.update(scrollTop);
    });
  }
}
var moveItItem = function(el){
  this.el = $(el);
  this.speed = parseInt(this.el.attr('data-scroll-speed'));
};
moveItItem.prototype.update = function(scrollTop){
  var pos = scrollTop / this.speed;
  this.el.css('transform', 'translateY(' + -pos + 'px)');
};
$(function(){
  $('[data-scroll-speed]').moveIt();
});







































