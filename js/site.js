$(document).ready(function(){
	var selected;
	var i;
	i=1;
	// get selected item on fly
	selected = $(".imgHoverable.selected").attr("id");

   // Change the image of hoverable links
   $(".imgHoverable").hover( function() {

	   //store img id on a var and get hover image
	   imgh = '#' + $(this).attr("id") + '_img';
       var hoverImg = HoverImgOf($(imgh).attr("src"));
       $(imgh).attr("src", hoverImg).stop(true,true).hide().fadeIn();
       


       //deselect selected item
	   	 $('.' + selected).removeClass('selected');
	   	 $('#' + selected).removeClass('selected');

	   	img = '#' + $("#" + selected).attr("id") + '_img';
	   	var normalImg = NormalImgOf($(img).attr("src"));
	   	$(img).attr("src", normalImg);
     }, function() {
    	 //store img id on a var and get hover image
    	 var normalImg = NormalImgOf($(imgh).attr("src"));
         $(imgh).attr("src", normalImg).stop(true,true).hide().fadeIn();

     }
   );
   $("#menu_head").hover( function() {
	   i=1;
return;
     }, function() {
         //re-select selected
	  	 $('.' + selected).addClass('selected');
		 $('#' + selected).addClass('selected');
		 img = '#' + $("#" + selected).attr("id") + '_img';
		 var hoverImg = HoverImgOf($(img).attr("src"));
		 $(img).attr("src", hoverImg).stop(true,true).hide().fadeIn();

	     }
   );
   //onclick load page
   $(".imgHoverable").click( function(e) {
	   e.preventDefault();
	   $('#' + selected).removeClass('selected');
	   $('.' + selected).removeClass('selected');
	   //load page in main div
	   $("#main").html("<div style='margin-right:auto;margin-left:auto;width:100%;text-align:center;'><br/><img src='/img/loading.gif' alt='Loading' /></div>");
	   link = $(this).attr('href')+ '';
	   $(this).addClass('selected');
	   // store selectd item
	   selected = $(this).attr('id');
	   $('.' + selected).addClass('selected');

	   $('#main').load(link + ' #main');
	   return false;
   }
   );
   $(".link").click( function(e) {
	   e.preventDefault();
	   link = $(this).attr('href')+ '';
	   $("#main_in").html("<div style='margin-right:auto;margin-left:auto;width:100%;text-align:center;'><br/><img src='/img/loading.gif' alt='Loading' /></div>");
	   $('#main_in').load(link + ' #main_in');
	   return false;
   }
   );
   $(".link_blog").click( function(e) {
	   e.preventDefault();
	   link = $(this).attr('href')+ '';
	   $("#main").html("<div style='margin-right:auto;margin-left:auto;width:100%;text-align:center;'><br/><img src='/img/loading.gif' alt='Loading' /></div>");
	   $('#main').load(link + ' #main');
	   return false;
   }
   );
});

function HoverImgOf(filename)
{
   var re = new RegExp("(.+)\\.(gif|png|jpg)", "g");
   return filename.replace(re, "$1_h.$2");
}
function NormalImgOf(filename)
{
   var re = new RegExp("(.+)_h\\.(gif|png|jpg)", "g");
   return filename.replace(re, "$1.$2");
}