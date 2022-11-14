(function() {
    //    var current = window.location.pathname;
    //    console.log("current",current)
    //   var curpage = current.substr(current.lastIndexOf('/') + 1);
    //   console.log('curpage',curpage)

      
    // $('.menu > .menu-item > .menu-link').each(function() {

    //     var $this = $(this); 
    //        console.log("this page",$this.attr('href'))
    //     // we check comparison between current page and attribute redirection.
    //     if ($this.attr('href') === curpage) {
    //        var ad =  $this.addClass('active');
    //        console.log(ad)

    //     }
    // });
    var cururl = window.location.pathname;
var curpage = cururl.substr(cururl.lastIndexOf('/') + 1);
var hash = window.location.hash.substr(1);
console.log("curpage",curpage)
console.log("hash",hash)
if((curpage == "" || curpage == "/" || curpage == "admin") && hash=="")
{
//$("nav .navbar-nav > li:first-child").addClass("active");
}
else
{
$(".menu  .menu-item  a").each(function()
{
    $(this).removeClass("active");
     $(this).parents('.menu-accordion').removeClass('show')
});
if(hash != "")
{
   $(".menu  .menu-item  a[href*='"+hash+"']").addClass("active");
    $(".menu  .menu-item  a").parents('.menu-accordion').addClass('show')
var p = $(".menu  .menu-item  a[href*='"+hash+"']").parents('.menu-accordion');
console.log('p',p)
}
else
{
   $(".menu  .menu-item  a[href*='"+curpage+"']").addClass("active");
   $(".menu  .menu-item  a[href*='"+curpage+"']").parents('.menu-accordion').addClass('show')
var p = $(".menu  .menu-item  a").parents('.menu-accordion');
console.log('p',p)
}

}
})();