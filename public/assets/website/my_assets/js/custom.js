$('.blog').click(function(){
    var id = $(this).attr('id');
    $('.blog_details').fadeOut(300);
    $('.blog_details_'+id).fadeIn(300);
});