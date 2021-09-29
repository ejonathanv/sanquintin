<!-- Bootstrap core JavaScript
================================================== -->
<script src='../../../../../../cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/menu2.js"></script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<!--bxslider-->
<script src="js/jquery.bxslider.js"></script>
<script>
    $(document).ready(function() {
        var windowsize = $(window).width();
        var containerSize = $('.container').width();
        var maxSlides = 3;
        var slideWidth = containerSize / 3;
        if (windowsize > 991) {
            maxSlides = 3;
            slideWidth = containerSize / 3;
        } else if (windowsize < 991 && windowsize >= 768) {
            maxSlides = 2;
            slideWidth = containerSize / 2;
        } else if (windowsize < 768 && windowsize >= 480) {
            maxSlides = 1;
            slideWidth = containerSize / 1;
        } else if (windowsize < 480) {
            maxSlides = 1;
            slideWidth = containerSize / 1;
        }
        var bx = $('.bxslider').bxSlider({
            pager: true,
            nextText: '',
            prevText: '',
            minSlides: 1,
            maxSlides: maxSlides,
            slideWidth: slideWidth,
            touchEnabled: false,
            auto: true,
            autoControls: true,
            stopAutoOnClick: true,
            moveSlides: 1
        });
        /* On BxSlider resize Code */
        $(window).resize(function() {
            var windowsize = $(window).width();
            var containerSize = $('.container').width();
            var maxSlides = 3;
            var slideWidth = containerSize / 3;
            if (windowsize > 991) {
                maxSlides = 3;
                slideWidth = containerSize / 3;
            } else if (windowsize < 991 && windowsize >= 768) {
                maxSlides = 2;
                slideWidth = containerSize / 2;
            } else if (windowsize < 768 && windowsize >= 480) {
                maxSlides = 1;
                slideWidth = containerSize / 1;
            } else if (windowsize < 480) {
                maxSlides = 1;
                slideWidth = containerSize / 1;
            }
            bx.destroySlider();
            bx = $('.bxslider').bxSlider({
                pager: true,
                nextText: '',
                prevText: '',
                minSlides: 1,
                maxSlides: maxSlides,
                slideWidth: slideWidth,
                touchEnabled: true,
                auto: true,
                autoControls: true,
                stopAutoOnClick: true,
                moveSlides: 1
            });
        });
    });
    if (e.target.setPointerCapture) {
        slider.pointerId = orig.pointerId;
        e.target.setPointerCapture(slider.pointerId);
    }
</script>
<!--isotop - completed projects-->
<script src='../../../../../../unpkg.com/isotope-layout%403.0.6/dist/isotope.pkgd.min.js'></script>
<script>
    var $grid = $('.grid').isotope({
        // options
        itemSelector: '.grid-item',
        layoutMode: 'fitRows',
    });
    // change is-checked class on buttons
    var $buttonGroup = $('.filters');
    $buttonGroup.on('click', 'li', function(event) {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        var $button = $(event.currentTarget);
        $button.addClass('is-checked');
        var filterValue = $button.attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });        
</script>
<!--Counter clock script-->
<script>
    var a = 0;
    $(window).scroll(function() {
        var oTop = $('#counter').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.counter-count').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                        //alert('finished');
                    }
                });
            });
            a = 1;
        }
    });
</script>
<!-- Stickey header -->
<script>
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {
        myFunction()
    };
    // Get the header
    var header = document.getElementById("myHeader");
    // Get the offset position of the navbar
    var sticky = header.offsetTop;
    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>