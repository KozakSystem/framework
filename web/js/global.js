
$(function () {

    var filterList = {

        init: function () {

            // MixItUp plugin
            // http://mixitup.io
            $('#portfoliolist').mixitup({
                targetSelector: '.portfolio',
                filterSelector: '.filter',
                effects: ['fade'],
                easing: 'snap',
                // call the hover effect
                onMixEnd: filterList.hoverEffect()
            });

        },

        hoverEffect: function () {

            // Simple parallax effect
            $('#portfoliolist .portfolio').hover(
                function () {
                    $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                    $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                },
                function () {
                    $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                    $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                }
            );

        }

    };

    // Run the show!
    filterList.init();

});

/**** Add fancyBox main JS and CSS files ****/

$(document).ready(function() {
    $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });

    new UISearch( document.getElementById( 'sb-search' ) );
    /**** the jScrollPane script ****/
    $('#ca-container').contentcarousel();

    $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true   // 100% fit in a container
    });


    /***** CUSTOM *****/
    $(".popup-with-zoom-anim[href='#small-dialog']").click(function(){
        var post_title = $('.text-title',this).text();
        var post_image = $('.portfolio-wrapper img',this).attr('src');
        var post_category = $('.text-category',this).text();
        var post_date = $('.text-date',this).text();
        var post_author = $('.post-author',this).text();
        var post_desc = $('.post-desc',this).text();
        var post_id = $(this).attr('post');
        $("#small-dialog .pop_up h2").text(post_title);
        $("#small-dialog .pop_up img").attr('src',post_image);
        $("#small-dialog .pop_up p").text(post_desc);
        $("#small-dialog .pop_up .btn").attr('href', 'post/' + post_id);

    });
});

$('.post-likes').on('click', '.like',function (e) {
    e.preventDefault();
    $.ajax({
        url: '/post/likes',
        type: 'GET',
        data: {
            id: $(this).attr('data-id')
        },
        success: function(json){
            if(json){
                var data=$.parseJSON(json);
                if(data.plus)
                    $parent.find('.like span').text(data.plus);
                if(data.minus)
                    $parent.find('.dislike span').text(data.minus);
                if(data.message)
                    alert(data.message);
            }
        }
    });
})
