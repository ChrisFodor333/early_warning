<!-- Footer -->
<footer class="footer ">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="flat-before-footer">
            <aside id="custom_html-1" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><div class="custom-info">
<div><div class="icon"><i class="fa fa-envelope"></i></div>support@themesflat.com</div>
<div><div class="icon"><i class="fa fa-phone"></i></div>+61 3 8376 6284</div>
<div><div class="icon"><i class="fa fa-map-marker"></i></div>PO Box 16122 Collins Street West
Victoria 8007 Australia</div>
</div></div></aside>
            </div><!-- /.flat-before-footer -->
        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->

    <div class="row">
        <div class="footer-widgets">

                           <div class="col-md-4">
            <div id="text-3" class="widget widget_text">			<div class="textwidget"><div class="textwidget">
<p class="desc">
Lorem ipsum dolor sit consectetur adipiscing elit<br />
sed do eiusmod tempor incididunt ut labore et<br />
dolore magna veniam aliqua.Ut enim ad minim veniam</p>
<p class="desc">
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate </p>
</div>
</div>
</div>                    </div><!-- /.col-md- -->

                            <div class="col-md-4">
            <div id="nav_menu-1" class="widget widget_nav_menu"><div class="menu-footer-container"><ul id="menu-footer" class="menu"><li id="menu-item-1210" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1210"><a href="#">About Us</a></li>
<li id="menu-item-1211" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1211"><a href="#">Home</a></li>
<li id="menu-item-1212" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1212"><a href="#">Advertise</a></li>
<li id="menu-item-1213" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1213"><a href="#">Testimonials</a></li>
<li id="menu-item-1214" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1214"><a href="#">Terms &#038; Conditions</a></li>
<li id="menu-item-1215" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1215"><a href="#">News</a></li>
<li id="menu-item-1216" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1216"><a href="#">Privacy Policy</a></li>
<li id="menu-item-1217" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1217"><a href="#">Services</a></li>
<li id="menu-item-1218" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1218"><a href="#">Careers</a></li>
<li id="menu-item-1219" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1219"><a href="#">Corporate Client</a></li>
<li id="menu-item-1220" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1220"><a href="#">Shop</a></li>
</ul></div></div>                    </div><!-- /.col-md- -->

                            <div class="col-md-4">
            <div id="text-4" class="widget widget_text">			<div class="textwidget"><div class="mf-form-shortcode">
<div
id="metform-wrap-222-222"
class="mf-form-wrapper"
data-form-id="222"
data-action="/early_warning/wp-json/metform/v1/entries/insert/222"
data-wp-nonce="32d47e4fb4"
data-form-nonce="9d4375ef3e"
data-stop-vertical-effect=""
></div>


<!-----------------------------
* controls_data : find the the props passed indie of data attribute
* parent.submit_response_message : contains the markup of error or success message
* https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Template_literals
--------------------------- -->

<script type="text" class="mf-template">

function controls_data (value){
let currentWrapper = "mf-response-props-id-222";
let currentEl = document.getElementById(currentWrapper);

return currentEl ? currentEl.dataset[value] : false
}


let is_edit_mode = '' ? true : false;
let message_position = controls_data('messageposition') || 'top';


let message_successIcon = controls_data('successicon') || '';
let message_errorIcon = controls_data('erroricon') || '';
let message_editSwitch = controls_data('editswitchopen') === 'yes' ? true : false;
let message_proClass = controls_data('editswitchopen') === 'yes' ? 'mf_pro_activated' : '';

let is_dummy_markup = is_edit_mode && message_editSwitch ? true : false;


return html`
<form
className="metform-form-content"
onSubmit=${ validation.handleSubmit( parent.handleFormSubmit ) }

>

${ is_dummy_markup ? message_position === 'top' ? parent.dummy_markup(message_successIcon, message_proClass) : '' : ''}
${is_dummy_markup ? ' ' :  message_position === 'top' ? parent.submit_response_message`${parent}${state}${message_successIcon}${message_errorIcon}${message_proClass}` : ''}

${!state.formHide ? html`
    <div data-elementor-type="wp-post" data-elementor-id="222" className="elementor elementor-222" data-elementor-settings="[]">
  <div className="elementor-section-wrap">
  <section className="elementor-section elementor-top-section elementor-element elementor-element-b71ff8d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b71ff8d" data-element_type="section">
<div className="elementor-container elementor-column-gap-default">
<div className="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3efd623" data-id="3efd623" data-element_type="column">
<div className="elementor-widget-wrap elementor-element-populated">
    <div className="elementor-element elementor-element-e07088d elementor-widget elementor-widget-mf-email" data-id="e07088d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
<div className="elementor-widget-container">

<div className="mf-input-wrapper">
  <label className="mf-input-label" htmlFor="mf-input-email-e07088d">
${ parent.decodeEntities(`Email address:`) } 					<span className="mf-input-required-indicator"></span>
</label>

<input type="email"  defaultValue="" className="mf-input " id="mf-input-email-e07088d" name="mf-email" placeholder="${ parent.decodeEntities(`Your email address`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['mf-email'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","emailMessage":"Please enter a valid Email address","minLength":1,"maxLength":"","type":"none","required":false,"expression":"null"}, el)}
/>

<${validation.ErrorMessage} errors=${validation.errors} name="mf-email" as=${html`<span className="mf-error-message"></span>`}
/>

</div>

</div>
</div>
<div className="elementor-element elementor-element-636141d mf-btn--left elementor-widget elementor-widget-mf-button" data-id="636141d" data-element_type="widget" data-widget_type="mf-button.default">
<div className="elementor-widget-container">
<div className="mf-btn-wraper " data-mf-form-conditional-logic-requirement="">
  <button type="submit" className="metform-btn metform-submit-btn " id="">
<span>${ parent.decodeEntities(`SUBMIT`) } </span>
</button>
  </div>
</div>
</div>
</div>
</div>
  </div>
</section>
</div>
</div>
  ` : ''}
${is_dummy_markup ? message_position === 'bottom' ? parent.dummy_markup(message_successIcon, message_proClass) : '' : ''}
${is_dummy_markup ? ' ' : message_position === 'bottom' ? parent.submit_response_message`${parent}${state}${message_successIcon}${message_errorIcon}${message_proClass}` : ''}

</form>
`
</script>

</div>
</div>
</div>                    </div><!-- /.col-md- -->


        </div><!-- /.footer-widgets -->
    </div><!-- /.row -->
</div><!-- /.container -->
</footer>

<!-- Bottom -->
<div class="bottom">
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="copyright">
            <p>Copyright 2017 Finance. Theme by Themesflat.</p>                    </div>

                            <div class="widget widget-custom-menu">
            <ul id="menu-bottom" class="menu"><li id="menu-item-1221" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1221"><a href="#">Home</a></li>
<li id="menu-item-1222" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1222"><a href="#">My Blog</a></li>
<li id="menu-item-1223" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1223"><a href="#">My Home</a></li>
</ul>
        </div>


                                <!-- Go Top -->
            <a class="go-top show">
                <i class="fa fa-chevron-up"></i>
            </a>

    </div><!-- /.col-md-12 -->
</div><!-- /.row -->
</div><!-- /.container -->
</div>
</div><!-- /#boxed -->

<script type="text/javascript">
window.RS_MODULES = window.RS_MODULES || {};
window.RS_MODULES.modules = window.RS_MODULES.modules || {};
window.RS_MODULES.defered = false;
window.RS_MODULES.waiting = ["main","parallax","video","slideanims","actions","layeranimation","navigation","carousel","panzoom"];
window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
window.RS_MODULES.type = 'compiled';
</script>
<link rel="preload" as="font" id="rs-icon-set-revicon-woff" href="/early_warning/assets/content/plugins/revslider/public/assets/fonts/revicons/revicons.woff?5510888" type="font/woff" crossorigin="anonymous" media="all" />
<link href="https://fonts.googleapis.com/css?family=Poppins:600%2C400%2C700%7CRoboto:400" rel="stylesheet" property="stylesheet" media="all" type="text/css" >

<script type="text/javascript">
if(typeof revslider_showDoubleJqueryError === "undefined") {function revslider_showDoubleJqueryError(sliderID) {console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");console.log("To fix this, you can:");console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");console.log("2. Find the double jQuery.js inclusion and remove it");return "Double Included jQuery Library";}}
</script>
<link rel='stylesheet' id='elementor-post-137-css'  href='/early_warning/assets/content/uploads/elementor/css/post-137.css?ver=1624468839' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-222-css'  href='/early_warning/assets/content/uploads/elementor/css/post-222.css?ver=1624468839' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='/early_warning/assets/content/plugins/revslider/public/assets/css/rs6.css?ver=6.5.2' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
.custom.tparrows{background:transparent; border:2px solid #fff; background:rgba(0,0,0,0) !important}
#rev_slider_1_1_wrapper .custom.tparrows{cursor:pointer;background:#000;background:rgba(0,0,0,0.5);width:40px;height:40px;position:absolute;display:block;z-index:1000}#rev_slider_1_1_wrapper .custom.tparrows.rs-touchhover{background:#000}#rev_slider_1_1_wrapper .custom.tparrows:before{font-family:'revicons';font-size:15px;color:#fff;display:block;line-height:40px;text-align:center}#rev_slider_1_1_wrapper .custom.tparrows.tp-leftarrow:before{content:'\e824'}#rev_slider_1_1_wrapper .custom.tparrows.tp-rightarrow:before{content:'\e825'}
</style>
<script type='text/javascript' src='/early_warning/assets/content/plugins/themesflat-addons-elementor/assets/js/owl.carousel.min.js?ver=5.7.2' id='owl-carousel-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/plugins/themesflat-addons-elementor/assets/js/imagesloaded.pkgd.min.js?ver=5.7.2' id='imagesloaded-pkgd-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/plugins/themesflat-addons-elementor/assets/js/jquery.isotope.min.js?ver=5.7.2' id='jquery-isotope-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/plugins/themesflat-addons-elementor/assets/js/tf-main.js?ver=5.7.2' id='tf-main-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.5.2' id='tp-tools-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.5.2' id='revmin-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/plugins/metform/public/assets/js/htm.js?ver=1.4.9' id='htm-js'></script>
<script type='text/javascript' src='/early_warning/assets/inc/js/dist/vendor/lodash.min.js?ver=4.17.19' id='lodash-js'></script>
<script type='text/javascript' id='lodash-js-after'>
window.lodash = _.noConflict();
</script>
<script type='text/javascript' src='/early_warning/assets/inc/js/dist/vendor/wp-polyfill.min.js?ver=7.4.4' id='wp-polyfill-js'></script>
<script type='text/javascript' id='wp-polyfill-js-after'>
( 'fetch' in window ) || document.write( '<script src="/early_warning/assets/inc/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="/early_warning/assets/inc/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="/early_warning/assets/inc/js/dist/vendor/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="/early_warning/assets/inc/js/dist/vendor/wp-polyfill-url.min.js?ver=3.6.4"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="/early_warning/assets/inc/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="/early_warning/assets/inc/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' + 'ipt>' );( 'objectFit' in document.documentElement.style ) || document.write( '<script src="/early_warning/assets/inc/js/dist/vendor/wp-polyfill-object-fit.min.js?ver=2.3.4"></scr' + 'ipt>' );
</script>
<script type='text/javascript' src='/early_warning/assets/inc/js/dist/vendor/react.min.js?ver=16.13.1' id='react-js'></script>
<script type='text/javascript' src='/early_warning/assets/inc/js/dist/vendor/react-dom.min.js?ver=16.13.1' id='react-dom-js'></script>
<script type='text/javascript' src='/early_warning/assets/inc/js/dist/escape-html.min.js?ver=318abfb97a58ba13225ff74699ad73d4' id='wp-escape-html-js'></script>
<script type='text/javascript' src='/early_warning/assets/inc/js/dist/element.min.js?ver=ade78933fc78fc95c1988dda7ccc9fb3' id='wp-element-js'></script>
<script type='text/javascript' id='metform-app-js-extra'>
/* <![CDATA[ */
var mf = {"postType":"page","restURI":"http:\/\/early_warning\/wp-json\/metform\/v1\/forms\/views\/"};
/* ]]> */
</script>
<script type='text/javascript' src='/early_warning/assets/content/plugins/metform/public/assets/js/app.js?ver=1.4.9' id='metform-app-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/themes/finance/js/jquery.flexslider-min.js?ver=2.5.0' id='themesflat-flexslider-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/themes/finance/js/html5shiv.js?ver=1.3.0' id='html5-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/themes/finance/js/respond.min.js?ver=1.3.0' id='respond-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/themes/finance/js/jquery.easing.js?ver=1.3' id='easing-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/themes/finance/js/jquery-waypoints.js?ver=1.3' id='waypoints-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/themes/finance/js/matchMedia.js?ver=1.2' id='match-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/themes/finance/js/jquery.fitvids.js?ver=1.1' id='fitvids-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/themes/finance/js/jquery.magnific-popup.min.js?ver=1.1' id='popup-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/themes/finance/js/owl.carousel.js?ver=2.0.0' id='carousel-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/themes/finance/js/main.js?ver=2.0.4' id='themesflat-main-js'></script>
<script type='text/javascript' src='/early_warning/assets/inc/js/wp-embed.min.js?ver=5.7.2' id='wp-embed-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.2.5' id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.2.5' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script type='text/javascript' src='/early_warning/assets/inc/js/jquery/ui/core.min.js?ver=1.12.1' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6' id='swiper-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.2.5' id='share-link-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1' id='elementor-dialog-js'></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1365,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1620,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"direction":"min","is_enabled":false}}},"version":"3.2.5","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"a11y_improvements":true,"landing-pages":true},"urls":{"assets":"http:\/\/early_warning\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":1141,"title":"test%20%E2%80%93%20Len%20%C4%8Fal%C5%A1ia%20WordPress%20str%C3%A1nka","excerpt":"","featuredImage":false}};
</script>
<script type='text/javascript' src='/early_warning/assets/content/plugins/elementor/assets/js/frontend.min.js?ver=3.2.5' id='elementor-frontend-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.2.5' id='preloaded-modules-js'></script>
<script type='text/javascript' src='/early_warning/assets/content/plugins/metform/controls/assets/js/form-picker-editor.js?ver=1.4.9' id='metform-js-formpicker-control-editor-js'></script>
<script type="text/javascript">
var	tpj = jQuery;

var	revapi1;

if(window.RS_MODULES === undefined) window.RS_MODULES = {};
if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider11"] = {init:function() {
revapi1 = jQuery("#rev_slider_1_1");
if(revapi1==undefined || revapi1.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_1_1"); return;}
revapi1.revolutionInit({
DPR:"dpr",
visibilityLevels:"1240,1024,778,480",
gridwidth:1170,
gridheight:700,
lazyType:"smart",
spinner:"spinner0",
perspective:600,
perspectiveType:"local",
editorheight:"700,768,960,720",
responsiveLevels:"1240,1024,778,480",
progressBar:{disableProgressBar:true},
navigation: {
mouseScrollNavigation:false,
wheelCallDelay:1000,
onHoverStop:false,
arrows: {
  enable:true,
  style:"custom",
  hide_onleave:true,
  left: {

  },
  right: {

  }
}
},
viewPort: {
global:true,
globalDist:"-200px",
enable:false,
visible_area:"20%"
},
fallbacks: {
allowHTML5AutoPlayOnAndroid:true
},
});

}} // End of RevInitScript

if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
</script>
</body>
</html>
