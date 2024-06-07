<script src="{{asset('/')}}front/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="{{asset('/')}}front/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="{{asset('/')}}front/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="{{asset('/')}}front/js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="{{asset('/')}}front/js/jquery.stellar.min.js"></script>
<!-- Carousel -->
<script src="{{asset('/')}}front/js/owl.carousel.min.js"></script>
<!-- Flexslider -->
<script src="{{asset('/')}}front/js/jquery.flexslider-min.js"></script>
<!-- countTo -->
<script src="{{asset('/')}}front/js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="{{asset('/')}}front/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('/')}}front/js/magnific-popup-options.js"></script>
<!-- Count Down -->
<script src="{{asset('/')}}front/js/simplyCountdown.js"></script>
<!-- Main -->
<script src="{{asset('/')}}front/js/main.js"></script>
<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>
