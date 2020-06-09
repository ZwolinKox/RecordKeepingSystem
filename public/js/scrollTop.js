$(document).scroll(function()
{
    if(($(document).scrollTop()>300) && ($(document).width() <= 768))
    {
        $('.scrollup').fadeIn();
    }
    else
    {
        $('.scrollup').fadeOut();		
    } 
}
);
