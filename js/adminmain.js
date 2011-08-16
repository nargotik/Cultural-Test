function wrt_uploadify_image(imgname,upload_hidden,upload_div,id_link) {
	if (imgname=='1') return;
	$(upload_hidden).html("<input type='hidden' name='image' id='image' value='" + imgname + "' />");
	$(upload_hidden).append("<a href='/media/users/" + imgname + "' class='group'>View Image</a>");
	$(upload_hidden).append(" | <a href='javascript:' id='" + id_link + "'>Delete Image</a>");
	$(upload_div).css('display', 'none');
	$("#"+id_link).click(function () { 
      wrt_uploadify_image_del(upload_hidden,upload_div);
    });
    $("a.group").fancybox({
		'hideOnContentClick': false
	});

}
function wrt_uploadify_image_del(upload_hidden,upload_div) {
	$(upload_hidden).html("<input type='hidden' name='image' id='image' value='' />");
	$(upload_div).css('display', 'block');
}
