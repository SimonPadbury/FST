#FST

**FST is a [ZURB Foundation](http://foundation.zurb.com) Starter Theme for WordPress.**

_Version 1.3_

FST is capable of being used as a WordPress theme as-is. But it is intended as a _starter_ theme for you to develop.
---

###Features

* Incorporating [ZURB Foundation](http://foundation.zurb.com) (v.5.4.7)
* Responsive website design with an [off-canvas](http://foundation.zurb.com/docs/components/offcanvas.html) sidebar menu for small-screen devices
* Based originally on [Underscores](http://underscores.me) - but here the PHP files are reorganised in folders
* Wysywyg editor styled by the same app.css through @import
* Enqueued scripts (JS) and stylesheets (CSS)
* Optional: enqueue Google CDN hosted jQuery or use WordPress's onboard jQuery
* [SCSS](http://sass-lang.com) included and ready to use.
* [MIT (open source) licence](http://opensource.org/licenses/MIT) - same as Foundation

---

###Note on SCSS

If you are compiling css/app.css from scss/app.scss, go to functions/enqueues.php and **comment out the register and enque for 'foundation-stylesheet' - because app.scss contains @import "foundation"
