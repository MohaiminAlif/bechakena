(function($) {
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({ zoomWidth: 700, zoomHeight: 600, title: true, tint: 'black' });



        if (isTouchSupported) {
            //If touch device
            $('.xzoom').each(function() {
                var xzoom = $(this).data('xzoom');
                xzoom.eventunbind();
            });

            $('.xzoom').each(function() {
                var xzoom = $(this).data('xzoom');
                $(this).hammer().on("tap", function(event) {
                    event.pageX = event.gesture.center.pageX;
                    event.pageY = event.gesture.center.pageY;
                    var s = 1,
                        ls;

                    xzoom.eventmove = function(element) {
                        element.hammer().on('drag', function(event) {
                            event.pageX = event.gesture.center.pageX;
                            event.pageY = event.gesture.center.pageY;
                            xzoom.movezoom(event);
                            event.gesture.preventDefault();
                        });
                    }

                    xzoom.eventleave = function(element) {
                        element.hammer().on('tap', function(event) {
                            xzoom.closezoom();
                        });
                    }
                    xzoom.openzoom(event);
                });
            });


        }
    });
})(jQuery);