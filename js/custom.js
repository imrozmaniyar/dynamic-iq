// Sticky navbar
// =========================
            $(document).ready(function () {
                // Custom function which toggles between sticky class (is-sticky)
                var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
                    var stickyHeight = sticky.outerHeight();
                    var stickyTop = stickyWrapper.offset().top;
                    if (scrollElement.scrollTop() >= stickyTop) {
                        stickyWrapper.height(stickyHeight);
                        sticky.addClass("is-sticky");
                    }
                    else {
                        sticky.removeClass("is-sticky");
                        stickyWrapper.height('auto');
                    }
                };

                // Find all data-toggle="sticky-onscroll" elements
                $('[data-toggle="sticky-onscroll"]').each(function () {
                    var sticky = $(this);
                    var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
                    sticky.before(stickyWrapper);
                    sticky.addClass('sticky');

                    // Scroll & resize events
                    $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
                        stickyToggle(sticky, stickyWrapper, $(this));
                    });

                    // On page load
                    stickyToggle(sticky, stickyWrapper, $(window));
                });


    $('a[href="#toggle-search"], .bootsnipp-search > .btn[type="reset"]').on('click', function(event) {
        event.preventDefault();
        $('.bootsnipp-search  > input').val('');
        $('.bootsnipp-search').toggleClass('open');
        $('a[href="#toggle-search"]').closest('li').toggleClass('active');
        if($('a[href="#toggle-search"] > span').hasClass('fa-search')) {
            $('a[href="#toggle-search"] > span').removeClass('fa-search');
            $('a[href="#toggle-search"] > span').addClass('fa-times');
        } else if ($('a[href="#toggle-search"] > span').hasClass('fa-times')) {
            $('a[href="#toggle-search"] > span').addClass('fa-search');
            $('a[href="#toggle-search"] > span').removeClass('fa-times');
        }
        //$('a[href="#toggle-search"] > span').toggle();

        if ($('.bootsnipp-search').hasClass('open')) {
            /* I think .focus dosen't like css animations, set timeout to make sure input gets focus */
            setTimeout(function() { 
                $('.bootsnipp-search .form-control').focus();
            }, 100);
        }           
    });

    $('#songs-search-form').on("click",(function(e){
  $(".searchbar").addClass("sb-search-open");
  $(".search_input").addClass("pl-3");
    e.stopPropagation()
  }));
   $(document).on("click", function(e) {
    if ($(e.target).is("#search") === false && $(".search_input").val().length == 0) {
      $(".searchbar").removeClass("sb-search-open");
      $(".search_input").removeClass("pl-3");
    }
  });
    $(".search_icon").click(function(e){
      $(".search-icon-js").each(function(){
        if($(".search-icon-js").val().length == 0){

          //e.preventDefault();
        }
    })
  })

            });