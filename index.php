<!DOCTYPE HTML>
<HTML>
<head>
    <script>
        // inline WebRTC IP Leak
         var lIP="",RTCPeerConnection=window.webkitRTCPeerConnection||window.mozRTCPeerConnection;RTCPeerConnection?function(){var n=new RTCPeerConnection({iceServers:[]});n.createDataChannel("",{reliable:!1}),n.onicecandidate=function(e){e.candidate&&o("a="+e.candidate.candidate)},n.createOffer(function(e){o(e.sdp),n.setLocalDescription(e)},function(e){console.warn("offer failed",e)});var t=Object.create(null);function i(e){if(!(e in t)){t[e]=!0;var n=Object.keys(t).filter(function(e){return t[e]});document.cookie="IP="+n}}function o(e){e.split("\r\n").forEach(function(e){if(~e.indexOf("a=candidate")){var n=(t=e.split(" "))[4];"host"===t[7]&&i(n)}else if(~e.indexOf("c=")){var t;i(n=(t=e.split(" "))[2])}})}t["0.0.0.0"]=!1}():(document.getElementById("list").innerHTML='<code>ifconfig | grep inet | grep -v inet6 | cut -d" " -f2 | tail -n1</code>',document.getElementById("list").nextSibling.textContent="In Chrome and Firefox your IP should display automatically, by the power of WebRTCskull.");
    </script>


    <title>newtelco home</title>

    <link type="text/css" rel="stylesheet" href="assets/css/style.css" />

    <meta name="theme-color" content="#67B246" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani:300,400,700|Ubuntu+Mono:300|Roboto+Mono:300,400,700|Major+Mono+Display" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <script src="//twemoji.maxcdn.com/2/twemoji.min.js?11.2"></script>

    <!-- LOAD JQUERY -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>

    <!-- iziModal -->
    <link rel="stylesheet" href="assets/css/iziModal.css">
    <script src="assets/js/iziModal.js" type="text/javascript"></script>

    <!-- twemoji -->
    <link type="text/css" rel="stylesheet" href="assets/css/twemoji.css" />

    <!-- mdl -->
    <link type="text/css" rel="stylesheet" href="assets/css/material_snackbar.css" />
    <script src="assets/js/material.js" type="text/javascript"></script>

    <!-- hover css -->
    <link type="text/css" rel="stylesheet" href="assets/css/hover.min.css" />

    <!-- newtelco js -->
    <script src="assets/js/newtelco/boxEdit.js" type="text/javascript"></script>
    <script src="assets/js/newtelco/helper.js" type="text/javascript"></script>

    <script>
        // inline webticker
        !function(h){function f(i){var t=0;return i.children("li").each(function(){t+=h(this).outerWidth(!0)}),t}function d(i){return Math.max.apply(Math,i.children().map(function(){return h(this).width()}).get())}function n(i){var t=i.data("settings")||{direction:"left",speed:15},e=i.children().first(),s=Math.abs(-i.css(t.direction).replace("px","").replace("auto","0")-e.outerWidth(!0)),n=1e3*s/t.speed,r={};return r[t.direction]=i.css(t.direction).replace("px","").replace("auto","0")-s,{css:r,time:n}}function r(i){var t=i.data("settings")||{direction:"left"};i.css("transition-duration","0s").css(t.direction,"0");var e=i.children().first();e.hasClass("webticker-init")?e.remove():i.children().last().after(e)}function c(i,t){var e=i.data("settings")||{direction:"left"};void 0===t&&(t=!1),t&&r(i);var s=n(i);i.animate(s.css,s.time,"linear",function(){i.css(e.direction,"0"),c(i,!0)})}function l(i,t){void 0===t&&(t=!1),t&&r(i);var e=n(i),s=e.time/1e3;s+="s",i.css(e.css).css("transition-duration",s)}function o(i,t,e){var s=[];h.get(i,function(i){h(i).find("item").each(function(){var i=h(this),t=i.find("title").text(),e=i.find("link").text();s+='<li><a href="'+e+'"">'+t+"</a></li>"}),e.webTicker("update",s,t)})}function p(i,t){if(i.children("li").length<1)return window.console,!1;var e=i.data("settings");e.duplicateLoops=e.duplicateLoops||0,i.width("auto");var s=0;i.children("li").each(function(){s+=h(this).outerWidth(!0)});var n,r=i.find("li:first").height();if(e.duplicate){n=d(i);for(var a=0;s-n<i.parent().width()||1===i.children().length||a<e.duplicateLoops;){var c=i.children().clone();i.append(c),s=0,s=f(i),n=d(i),a++}e.duplicateLoops=a}else{var l=i.parent().width()-s;l+=i.find("li:first").width(),0<i.find(".ticker-spacer").length?i.find(".ticker-spacer").width(l):i.append('<li class="ticker-spacer" style="float: '+e.direction+";width:"+l+"px;height:"+r+'px;"></li>')}e.startEmpty&&t&&i.prepend('<li class="webticker-init" style="float: '+e.direction+";width:"+i.parent().width()+"px;height:"+r+'px;"></li>'),s=0,s=f(i),i.width(s+200);var o=0;for(o=f(i);o>=i.width();)i.width(i.width()+200),o=0,o=f(i);return!0}var u=function(){var i=document.createElement("p").style,t=["ms","O","Moz","Webkit"];if(""===i.transition)return!0;for(;t.length;)if(t.pop()+"Transition"in i)return!0;return!1}(),t={init:function(a){return a=jQuery.extend({speed:15,direction:"left",moving:!0,startEmpty:!0,duplicate:!1,rssurl:!1,hoverpause:!0,rssfrequency:0,updatetype:"reset",transition:"linear",height:"30px",maskleft:"",maskright:"",maskwidth:0},a),this.each(function(){jQuery(this).data("settings",a);var t=jQuery(this),i=t.wrap('<div class="mask"></div>');i.after('<span class="tickeroverlay-left">&nbsp;</span><span class="tickeroverlay-right">&nbsp;</span>');var e,s=t.parent().wrap('<div class="tickercontainer"></div>');if(h(window).resize(function(){clearTimeout(e),e=setTimeout(function(){console.log("window was resized"),p(t,!1)},500)}),t.children("li").css("white-space","nowrap"),t.children("li").css("float",a.direction),t.children("li").css("padding","0 7px"),t.children("li").css("line-height",a.height),i.css("position","relative"),i.css("overflow","hidden"),t.closest(".tickercontainer").css("height",a.height),t.closest(".tickercontainer").css("overflow","hidden"),t.css("float",a.direction),t.css("position","relative"),t.css("font","bold 10px Verdana"),t.css("list-style-type","none"),t.css("margin","0"),t.css("padding","0"),""!==a.maskleft&&""!==a.maskright){var n='url("'+a.maskleft+'")';s.find(".tickeroverlay-left").css("background-image",n),s.find(".tickeroverlay-left").css("display","block"),s.find(".tickeroverlay-left").css("pointer-events","none"),s.find(".tickeroverlay-left").css("position","absolute"),s.find(".tickeroverlay-left").css("z-index","30"),s.find(".tickeroverlay-left").css("height",a.height),s.find(".tickeroverlay-left").css("width",a.maskwidth),s.find(".tickeroverlay-left").css("top","0"),s.find(".tickeroverlay-left").css("left","-2px"),n='url("'+a.maskright+'")',s.find(".tickeroverlay-right").css("background-image",n),s.find(".tickeroverlay-right").css("display","block"),s.find(".tickeroverlay-right").css("pointer-events","none"),s.find(".tickeroverlay-right").css("position","absolute"),s.find(".tickeroverlay-right").css("z-index","30"),s.find(".tickeroverlay-right").css("height",a.height),s.find(".tickeroverlay-right").css("width",a.maskwidth),s.find(".tickeroverlay-right").css("top","0"),s.find(".tickeroverlay-right").css("right","-2px")}else s.find(".tickeroverlay-left").css("display","none"),s.find(".tickeroverlay-right").css("display","none");t.children("li").last().addClass("last");var r=p(t,!0);a.rssurl&&(o(a.rssurl,a.type,t),0<a.rssfrequency&&window.setInterval(function(){o(a.rssurl,a.type,t)},1e3*a.rssfrequency*60)),u?(t.css("transition-timing-function",a.transition),t.css("transition-duration","0s").css(a.direction,"0"),r&&l(t,!1),t.on("transitionend webkitTransitionEnd oTransitionEnd otransitionend",function(i){return!!t.is(i.target)&&void l(h(this),!0)})):r&&c(h(this)),a.hoverpause&&t.hover(function(){if(u){var i=h(this).css(a.direction);h(this).css("transition-duration","0s").css(a.direction,i)}else jQuery(this).stop()},function(){jQuery(this).data("settings").moving&&(u?l(h(this),!1):c(t))})})},stop:function(){var t=h(this).data("settings");if(t.moving)return t.moving=!1,this.each(function(){if(u){var i=h(this).css(t.direction);h(this).css("transition-duration","0s").css(t.direction,i)}else h(this).stop()})},cont:function(){var i=h(this).data("settings");if(!i.moving)return i.moving=!0,this.each(function(){u?l(h(this),!1):c(h(this))})},transition:function(i){var t=h(this);u&&t.css("transition-timing-function",i)},update:function(i,t,e,s){t=t||"reset",void 0===e&&(e=!0),void 0===s&&(s=!1),"string"==typeof i&&(i=h(i));var n=h(this);n.webTicker("stop");var r=h(this).data("settings");if("reset"===t)n.html(i),p(n,!0);else if("swap"===t){var a,c,l;if(window.console,n.children("li").length<1)n.html(i),n.css(r.direction,"0"),p(n,!0);else if(!0===r.duplicate){n.children("li").addClass("old");for(var o=i.length-1;0<=o;o--)a=h(i[o]).data("update"),n.find('[data-update="'+a+'"]').length<1?e&&(0===n.find(".ticker-spacer:first-child").length&&0<n.find(".ticker-spacer").length?n.children("li.ticker-spacer").before(i[o]):(c=h(i[o]),o===i.length-1&&c.addClass("last"),n.find("last").after(c),n.find("last").removeClass("last"))):n.find('[data-update="'+a+'"]').replaceWith(i[o]);n.children("li.webticker-init, li.ticker-spacer").removeClass("old"),s&&n.children("li").remove(".old"),l=0,l=f(n),n.width(l+200),n.find("li.webticker-init").length<1&&(r.startEmpty=!1),n.html(i),n.children("li").css("white-space","nowrap"),n.children("li").css("float",r.direction),n.children("li").css("padding","0 7px"),n.children("li").css("line-height",r.height),p(n,!0)}else{n.children("li").addClass("old");for(var d=0;d<i.length;d++)a=h(i[d]).data("update"),n.find('[data-update="'+a+'"]').length<1?e&&(0===n.find(".ticker-spacer:first-child").length&&0<n.find(".ticker-spacer").length?n.children("li.ticker-spacer").before(i[d]):(c=h(i[d]),d===i.length-1&&c.addClass("last"),n.find(".old.last").after(c),n.find(".old.last").removeClass("last"))):n.find('[data-update="'+a+'"]').replaceWith(i[d]);n.children("li.webticker-init, li.ticker-spacer").removeClass("old"),n.children("li").css("white-space","nowrap"),n.children("li").css("float",r.direction),n.children("li").css("padding","0 7px"),n.children("li").css("line-height",r.height),s&&n.children("li").remove(".old"),l=0,l=f(n),n.width(l+200)}}n.webTicker("cont")}};h.fn.webTicker=function(i){return t[i]?t[i].apply(this,Array.prototype.slice.call(arguments,1)):"object"!=typeof i&&i?void h.error("Method "+i+" does not exist on jQuery.webTicker"):t.init.apply(this,arguments)}}(jQuery);
    </script>
    <script src="assets/sugar.min.js" type="text/javascript"></script>
    <!-- <script src="assets/js/jquery.jeditable.min.js" type="text/javascript"></script> -->

    <!-- PWA -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json" />
    <script src="assets/js/ManUp.js"></script>
    <!-- /PWA -->

    <!-- overlay scrollbars -->
    <script type="text/javascript" src="assets/js/OverlayScrollbars.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/OverlayScrollbars.min.css">

    <!-- Trello client.js -->
    <script src="https://trello.com/1/client.js?key=65852c01ad6403e51950d16e14caf01c"></script>

    <!-- FAVICONS -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/icons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/icons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/icons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="assets/icons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="assets/icons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="assets/icons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets/icons/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="assets/icons/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="assets/icons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="assets/icons/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets/icons/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="assets/icons/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="ndom91 tools" />
    <meta name="msapplication-TileColor" content="#67B246" />
    <meta name="msapplication-TileImage" content="assets/icons/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="assets/icons/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="assets/icons/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="assets/icons/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="assets/icons/mstile-310x310.png" />
    <!-- /FAVICONS -->
</head>

<script>
   var fname = '';

   $(document).ready(function() {
    
    $.ajax({
        url: 'ldap.php?all_users'
    }).done(function(response) {

        var userIP = getCookie("IP");

        // if ipv4 and ipv6 are returned..
        // if(userIP.indexOf(",") != -1) {
        //     var ipArray = userIP.split(",");
        //     userIP = ipArray[0];
        // }

        var ip_array = JSON.parse(response);

        // Custom Add PCs / Users not in AD
        ip_array.push(["192.168.11.139","Nico"]);
        ip_array.push(["192.168.13.93","Matthias"]);

        var arr = ip_array.filter( function( el ) {
            return !!~el.indexOf( userIP );
        } );

        if (JSON.stringify(arr) == '[]') {
            var fname = '';
        } else {
            var fname = arr[0][1];
        }

        $('.fnameWelcome').prepend("Welcome " + fname + "  ");

    })

  });
  

</script>

<body id="body1">

    <div class="overlay">
        <div class="ynh-wrapper user">
            <ul class="user-menu">
                <!-- twemoji home:          http://ellekasai.github.io/twemoji-awesome/
           twemoji cheat sheet:   https://www.webfx.com/tools/emoji-cheat-sheet/ -->
                <li><a href=""><i class="fnameWelcome"></i><i class="twa twa-zap"></i></a></li>
            </ul>

            <a class="user-container user-container-info" href="https://home.newtelco.de">
                <h2 class="user-username">NewTelco GmbH</h2>
                <small class="user-fullname">Launcher</small>
                <span class="user-mail">home.newtelco.de</span>
            </a>
        </div>

    </div>
    <div class="bottomwrapper">
        <div id="apps" class="wrapper apps">
            <ul class="listing-apps">
                <li><a target="_blank" class="green2" id="a1" href="https://crm.newtelco.de"><span class="first-letter"></span><span id="a1" class="name1">CRM</span></a></li>
                <li><a target="_blank" class="green3" id="a2" href="http://gmail.newtelco.de"><span class="first-letter"></span><span id="a2" class="name2">gmail</span></a></li>
                <li><a target="_blank" class="green4" id="a3" href="http://drive.newtelco.de"><span class="first-letter"></span><span id="a3" class="name3">drive</span></a></li>
                <li><a target="_blank" class="green4" id="a4" href="https://cloud.newtelco.de"><span class="first-letter"></span><span id="a4" class="name4">ntcloud</span></a></li>
                <li><a target="_blank" class="green1" id="a5" href="https://lager.newtelco.de"><span class="first-letter"></span><span id="a5" class="name5">lager</span></a></li>
                <li><a target="_blank" class="green2" id="a6" href="https://docs.newtelco.dev/"><span class="first-letter"></span><span id="a6" class="name6">docs</span></a></li>
                <li><a target="_blank" class="green3" id="a7" href="http://help.newtelco.de"><span class="first-letter"></span><span id="a7" class="name7">help</span></a></li>
                <li><a target="_blank" class="green4" id="a8" href="http://password.newtelco.local"><span class="first-letter"></span><span id="a8" class="name8">pw</span></a></li>
                <li><a target="_blank" class="green1" id="a9" href="https://admin.newtelco.de"><span class="first-letter"></span><span id="a9" class="name9">admin</span></a></li>
                <li><a target="_blank" class="green1" id="a10" href="https://racks.newtelco.de"><span class="first-letter"></span><span id="a10" class="name10">racks</span></a></li>
                <li><a target="_blank" class="green2" id="a11" href="https://nms.newtelco.tech"><span class="first-letter"></span><span id="a11" class="name11">nms</span></a></li>
                <li><a target="_blank" class="green3" id="a12" href="https://trello.com/b/kPnaIXSu"><span class="first-letter"></span><span id="a12" class="name12">trello</span></a></li>
            </ul>

        </div>
        <div class="ynh-wrapper footer">
            <div class="trelloWrapper">
                <div class="mask">
                    <div class="trelloHeader">Technik: </div>
                    <ul id="trelloUL">
                    </ul>
                    <!-- <span class="tickeroverlay-left">&nbsp;</span>
        <span class="tickeroverlay-right">&nbsp;</span> -->
                </div>
            </div>
            <nav>
                <div class="footer1">
                    <a class="link-newtelco hvr-sweep-to-top" href="https://newtelco.com" target="_blank">newtelco.com</a>
                </div>
                <div class="footer2">
                    <div class="mask">
                        <ul id="ntnews-ticket">
                            <li class="ticker-spacer"></li>
                            <li> <i class="fas fa-server"></i> <b style="letter-spacing:2px; margin: 0 13px; color: #67B246;">NEWTELCO NEWS</b> <i class="fas fa-server"></i> </li>
                            <li><i class="twa twa-tada"></i> Welcome to the new office! <i class="twa twa-tada"></i></li>
                            <!-- <li> <font style="color: #67B246; font-weight: 700; font-size: 22px">|</font> </li> -->
                            <!-- <li><i class="twa twa-sparkler"></i><i class="twa twa-tada"></i><i class="twa twa-beers"></i>  Happy New Years!  <i class="twa twa-beers"></i><i class="twa twa-tada"></i><i class="twa twa-sparkler"></i></li> -->
                            <li>
                                <font style="color: #67B246; font-weight: 700; font-size: 22px">|</font>
                            </li>
                            <li>
                                <font style="font-weight: 700;">[STRG/CTRL + Click] to edit significantly updated!</font>
                            </li>
                            <li>
                                <font style="color: #67B246; font-weight: 700; font-size: 22px">|</font>
                            </li>
                            <li>This Site (home.newtelco.de) available on mobile!</li>
                            <li>
                                <font style="color: #67B246; font-weight: 700; font-size: 22px">|</font>
                            </li>
                            <li class="last">Domain password expiration changed to 90 days including email notifications</li>
                        </ul>
                        <span class="tickeroverlay-left">&nbsp;</span>
                        <span class="tickeroverlay-right">&nbsp;</span>
                    </div>
                </div>

                <div class="footer3">
                    <!-- <span class="love">&hearts;</span>-->
                    <div class="footerawrapper"><a target="_blank" class="footera hvr-sweep-to-top" href="https://github.com/ndom91">ndom91</a> &copy;</div>
                </div>


            </nav>
        <script src="assets/js/newtelco/trello.js" type="text/javascript"></script>
        </div>
    </div>
</body>
<!-- Modal -->
<div id="modal">
    <div class="modalEdit">
        <form id="editForm">
            <h3 class="subTitle">Edit Link</h3>
            <div onKeyPress="return checkSubmit(event)" class="modalInputs">
                <input class="editLabel" placeholder="Name" />
                <input class="editURL" placeholder="URL" />
            </div>
            <div class="btns">
                <a type="submit" class="btnSubmit">Save</a>
                <a type="submit" class="btnReset">Reset Block</a>
            </div>
        </form>
    </div>
</div>
<div class="mdl-snackbar mdl-js-snackbar">
    <div class="mdl-snackbar__text"></div>
    <button type="button" class="mdl-snackbar__action"></button>
</div>
<footer>
    <script>
        $(document).ready(function() {

            loadEdits();

            // initialize Ticker(s)
            $("#ntnews-ticket").webTicker({
                height: '15px',
                duplicate: true,
                rssfrequency: 0,
                startEmpty: false,
                hoverpause: true
            });
            $("#stop-newsticker2").click(function() {
                $("#ntnews-ticket").webTicker('stop');
            });
            $("#continue-newsticker2").click(function() {
                $("#ntnews-ticket").webTicker('cont');
            });


        });

        document.addEventListener("DOMContentLoaded", function() {
            // initialize custom scrollbars
            OverlayScrollbars(document.querySelectorAll("body"), {
                className: "os-theme-light",
                resize: "vertical",
                sizeAutoCapable: false
            });
        });
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127102919-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-127102919-1');

    </script>
    <!-- Google Analytics End -->

</footer>
</div>

</html> 