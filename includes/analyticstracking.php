<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-84655347-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-84655347-1');
  gtag('config', 'AW-1070647363');
</script>

<!-- Event snippet for Solicitud de información conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
  function gtag_report_conversion(url) {
    var callback = function() {
      if (typeof(url) != 'undefined') {
        window.location = url;
      }
    };
    gtag('event', 'conversion', {
      'send_to': 'AW-1070647363/a8SbCPWFy5IBEMOQw_4D',
      'event_callback': callback
    });
    return false;
  }
</script>

<!-- Facebook Pixel Code -->
<script>
  ! function(f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function() {
      n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
  }(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2095108190743254');
  fbq('track', 'PageView');
</script>
<noscript>
  <img height="1" width="1" src="https://www.facebook.com/tr?id=2095108190743254&ev=PageView
&noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->