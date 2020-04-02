$(".count").each(function(){$(this).prop("Counter",0).animate({Counter:$(this).text()},{duration:7500,easing:"swing",step:function(t){$(this).text(Math.ceil(t))}})});
