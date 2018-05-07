//Show sub menu when you hover on menu but hide when no longer hovering.
(function($) {
  $(document).ready(function() {

    $(".menu-item").hover(
      function() {
         $(this).children(".sub-menu").show();
       },
       function() {
         $(this).children(".sub-menu").hide();
       }
     );
   })
})(jQuery);
//Add Arrow to Menu links with Sub Menus.
(function($) {
  $(document).ready(function() {
    $("#sparkLineContainer")
   .append('<span class="arrow">&#9660;</span>')
   })
})(jQuery);

//Add Weather widget to page:

    var _plm = _plm || [];
    _plm.push(['_btn', 79100]);
    _plm.push(['_loc','caon0696']);
    _plm.push(['location', document.location.host ]);
     (function(d,e,i) {
    if (d.getElementById(i)) return;
    var px = d.createElement(e);
    px.type = 'text/javascript';
    px.async = true;
    px.id = i;
    px.src = ('https:' == d.location.protocol ? 'https:' : 'http:') + '//widget.twnmm.com/js/btn/pelm.js?orig=en_ca';
    var s = d.getElementsByTagName('script')[0];

    var py = d.createElement('link');
    py.rel = 'stylesheet'
    py.href = ('https:' == d.location.protocol ? 'https:' : 'http:') + '//widget.twnmm.com/styles/btn/styles.css'

    s.parentNode.insertBefore(px, s);
    s.parentNode.insertBefore(py, s);
    })(document, 'script', 'plmxbtn');
