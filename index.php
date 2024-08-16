  <?php
	include_once "Model/connect.php";
	include_once "Model/hanghoa.php";
	//include_once "Model/menu.php"
	//   cách 2
	set_include_path(get_include_path() . PATH_SEPARATOR . 'Model/');
	spl_autoload_extensions('.php');
	spl_autoload_register();
	session_start();
	?>
  <!DOCTYPE html>
  <!--[if IE 9 ]> <html lang="vi" class="ie9 loading-site no-js"> <![endif]-->
  <!--[if IE 8 ]> <html lang="vi" class="ie8 loading-site no-js"> <![endif]-->
  <!--[if (gte IE 9)|!(IE)]><!-->
  <html lang="vi" class="loading-site no-js"> <!--<![endif]-->

  <!-- Mirrored from mixuediemdien.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 08:47:30 GMT -->
  <!-- Added by HTTrack -->
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

  <head>
  	<meta charset="UTF-8" />
  	<link rel="profile" href="http://gmpg.org/xfn/11" />
  	<link rel="pingback" href="xmlrpc.html" />
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

  	<script>
  		(function(html) {
  			html.className = html.className.replace(/\bno-js\b/, 'js')
  		})(document.documentElement);
  	</script>
  	<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  	<!-- This site is optimized with the Yoast SEO plugin v21.8 - https://yoast.com/wordpress/plugins/seo/ -->
  	<title>Mixue Diêm Điền Mới (Khu 1) - Mixue Diêm Điền Mới</title>
  	<link rel="canonical" href="index.html" />
  	<meta property="og:locale" content="vi_VN" />
  	<meta property="og:type" content="website" />
  	<meta property="og:title" content="Mixue Diêm Điền Mới (Khu 1) - Mixue Diêm Điền Mới" />
  	<meta property="og:url" content="https://mixuediemdien.com/" />
  	<meta property="og:site_name" content="Mixue Diêm Điền Mới" />
  	<meta property="article:publisher" content="https://www.facebook.com/MixueDiemDienMoi" />
  	<meta property="article:modified_time" content="2024-01-13T07:45:35+00:00" />
  	<meta property="og:image" content="https://mixuediemdien.com/wp-content/uploads/2016/08/dummy-1.jpg" />
  	<meta property="og:image:width" content="400" />
  	<meta property="og:image:height" content="260" />
  	<meta property="og:image:type" content="image/jpeg" />
  	<meta name="twitter:card" content="summary_large_image" />
  	<script type="application/ld+json" class="yoast-schema-graph">
  		{
  			"@context": "https://schema.org",
  			"@graph": [{
  				"@type": "WebPage",
  				"@id": "https://mixuediemdien.com/",
  				"url": "https://mixuediemdien.com/",
  				"name": "Mixue Diêm Điền Mới (Khu 1) - Mixue Diêm Điền Mới",
  				"isPartOf": {
  					"@id": "https://mixuediemdien.com/#website"
  				},
  				"about": {
  					"@id": "https://mixuediemdien.com/#organization"
  				},
  				"primaryImageOfPage": {
  					"@id": "https://mixuediemdien.com/#primaryimage"
  				},
  				"image": {
  					"@id": "https://mixuediemdien.com/#primaryimage"
  				},
  				"thumbnailUrl": "https://mixuediemdien.com/wp-content/uploads/2016/08/dummy-1.jpg",
  				"datePublished": "2016-02-17T06:38:32+00:00",
  				"dateModified": "2024-01-13T07:45:35+00:00",
  				"breadcrumb": {
  					"@id": "https://mixuediemdien.com/#breadcrumb"
  				},
  				"inLanguage": "vi",
  				"potentialAction": [{
  					"@type": "ReadAction",
  					"target": ["https://mixuediemdien.com/"]
  				}]
  			}, {
  				"@type": "ImageObject",
  				"inLanguage": "vi",
  				"@id": "https://mixuediemdien.com/#primaryimage",
  				"url": "https://mixuediemdien.com/wp-content/uploads/2016/08/dummy-1.jpg",
  				"contentUrl": "https://mixuediemdien.com/wp-content/uploads/2016/08/dummy-1.jpg",
  				"width": 400,
  				"height": 260
  			}, {
  				"@type": "BreadcrumbList",
  				"@id": "https://mixuediemdien.com/#breadcrumb",
  				"itemListElement": [{
  					"@type": "ListItem",
  					"position": 1,
  					"name": "Trang chủ"
  				}]
  			}, {
  				"@type": "WebSite",
  				"@id": "https://mixuediemdien.com/#website",
  				"url": "https://mixuediemdien.com/",
  				"name": "Mixue Diêm Điền Mới",
  				"description": "Mixue Diêm Điền Mới (68 Phạm Ngũ Lão)",
  				"publisher": {
  					"@id": "https://mixuediemdien.com/#organization"
  				},
  				"potentialAction": [{
  					"@type": "SearchAction",
  					"target": {
  						"@type": "EntryPoint",
  						"urlTemplate": "https://mixuediemdien.com/?s={search_term_string}"
  					},
  					"query-input": "required name=search_term_string"
  				}],
  				"inLanguage": "vi"
  			}, {
  				"@type": "Organization",
  				"@id": "https://mixuediemdien.com/#organization",
  				"name": "Mixue Diêm Điền Mới",
  				"url": "https://mixuediemdien.com/",
  				"logo": {
  					"@type": "ImageObject",
  					"inLanguage": "vi",
  					"@id": "https://mixuediemdien.com/#/schema/logo/image/",
  					"url": "https://mixuediemdien.com/wp-content/uploads/2023/07/logo_mixue.webp",
  					"contentUrl": "https://mixuediemdien.com/wp-content/uploads/2023/07/logo_mixue.webp",
  					"width": 392,
  					"height": 129,
  					"caption": "Mixue Diêm Điền Mới"
  				},
  				"image": {
  					"@id": "https://mixuediemdien.com/#/schema/logo/image/"
  				},
  				"sameAs": ["https://www.facebook.com/MixueDiemDienMoi"]
  			}]
  		}
  	</script>
  	<!-- / Yoast SEO plugin. -->


  	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
  	<link rel="alternate" type="application/rss+xml" title="Dòng thông tin Mixue Diêm Điền Mới &raquo;" href="feed/index.html" />
  	<link rel="alternate" type="application/rss+xml" title="Dòng phản hồi Mixue Diêm Điền Mới &raquo;" href="comments/feed/index.html" />
  	<script type="text/javascript">
  		/* <![CDATA[ */
  		window._wpemojiSettings = {
  			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
  			"ext": ".png",
  			"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
  			"svgExt": ".svg",
  			"source": {
  				"concatemoji": "https:\/\/mixuediemdien.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.2"
  			}
  		};
  		/*! This file is auto-generated */
  		! function(i, n) {
  			var o, s, e;

  			function c(e) {
  				try {
  					var t = {
  						supportTests: e,
  						timestamp: (new Date).valueOf()
  					};
  					sessionStorage.setItem(o, JSON.stringify(t))
  				} catch (e) {}
  			}

  			function p(e, t, n) {
  				e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
  				var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
  					r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
  				return t.every(function(e, t) {
  					return e === r[t]
  				})
  			}

  			function u(e, t, n) {
  				switch (t) {
  					case "flag":
  						return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
  					case "emoji":
  						return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
  				}
  				return !1
  			}

  			function f(e, t, n) {
  				var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
  					a = r.getContext("2d", {
  						willReadFrequently: !0
  					}),
  					o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
  				return e.forEach(function(e) {
  					o[e] = t(a, e, n)
  				}), o
  			}

  			function t(e) {
  				var t = i.createElement("script");
  				t.src = e, t.defer = !0, i.head.appendChild(t)
  			}
  			"undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
  				everything: !0,
  				everythingExceptFlag: !0
  			}, e = new Promise(function(e) {
  				i.addEventListener("DOMContentLoaded", e, {
  					once: !0
  				})
  			}), new Promise(function(t) {
  				var n = function() {
  					try {
  						var e = JSON.parse(sessionStorage.getItem(o));
  						if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
  					} catch (e) {}
  					return null
  				}();
  				if (!n) {
  					if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
  						var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
  							r = new Blob([e], {
  								type: "text/javascript"
  							}),
  							a = new Worker(URL.createObjectURL(r), {
  								name: "wpTestEmojiSupports"
  							});
  						return void(a.onmessage = function(e) {
  							c(n = e.data), a.terminate(), t(n)
  						})
  					} catch (e) {}
  					c(n = f(s, u, p))
  				}
  				t(n)
  			}).then(function(e) {
  				for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
  				n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
  					n.DOMReady = !0
  				}
  			}).then(function() {
  				return e
  			}).then(function() {
  				var e;
  				n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
  			}))
  		}((window, document), window._wpemojiSettings);
  		/* ]]> */
  	</script>
  	<style id='wp-emoji-styles-inline-css' type='text/css'>
  		img.wp-smiley,
  		img.emoji {
  			display: inline !important;
  			border: none !important;
  			box-shadow: none !important;
  			height: 1em !important;
  			width: 1em !important;
  			margin: 0 0.07em !important;
  			vertical-align: -0.1em !important;
  			background: none !important;
  			padding: 0 !important;
  		}
  	</style>
  	<link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.min1e39.css?ver=6.4.2' type='text/css' media='all' />
  	<style id='classic-theme-styles-inline-css' type='text/css'>
  		/*! This file is auto-generated */
  		.wp-block-button__link {
  			color: #fff;
  			background-color: #32373c;
  			border-radius: 9999px;
  			box-shadow: none;
  			text-decoration: none;
  			padding: calc(.667em + 2px) calc(1.333em + 2px);
  			font-size: 1.125em
  		}

  		.wp-block-file__button {
  			background: #32373c;
  			color: #fff;
  			text-decoration: none
  		}
		
  	</style>
  	<style id='global-styles-inline-css' type='text/css'>
  		body {
  			--wp--preset--color--black: #000000;
  			--wp--preset--color--cyan-bluish-gray: #abb8c3;
  			--wp--preset--color--white: #ffffff;
  			--wp--preset--color--pale-pink: #f78da7;
  			--wp--preset--color--vivid-red: #cf2e2e;
  			--wp--preset--color--luminous-vivid-orange: #ff6900;
  			--wp--preset--color--luminous-vivid-amber: #fcb900;
  			--wp--preset--color--light-green-cyan: #7bdcb5;
  			--wp--preset--color--vivid-green-cyan: #00d084;
  			--wp--preset--color--pale-cyan-blue: #8ed1fc;
  			--wp--preset--color--vivid-cyan-blue: #0693e3;
  			--wp--preset--color--vivid-purple: #9b51e0;
  			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
  			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
  			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
  			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
  			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
  			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
  			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
  			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
  			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
  			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
  			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
  			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
  			--wp--preset--font-size--small: 13px;
  			--wp--preset--font-size--medium: 20px;
  			--wp--preset--font-size--large: 36px;
  			--wp--preset--font-size--x-large: 42px;
  			--wp--preset--spacing--20: 0.44rem;
  			--wp--preset--spacing--30: 0.67rem;
  			--wp--preset--spacing--40: 1rem;
  			--wp--preset--spacing--50: 1.5rem;
  			--wp--preset--spacing--60: 2.25rem;
  			--wp--preset--spacing--70: 3.38rem;
  			--wp--preset--spacing--80: 5.06rem;
  			--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
  			--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
  			--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
  			--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
  			--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
  		}

  		:where(.is-layout-flex) {
  			gap: 0.5em;
  		}

  		:where(.is-layout-grid) {
  			gap: 0.5em;
  		}

  		body .is-layout-flow>.alignleft {
  			float: left;
  			margin-inline-start: 0;
  			margin-inline-end: 2em;
  		}

  		body .is-layout-flow>.alignright {
  			float: right;
  			margin-inline-start: 2em;
  			margin-inline-end: 0;
  		}

  		body .is-layout-flow>.aligncenter {
  			margin-left: auto !important;
  			margin-right: auto !important;
  		}

  		body .is-layout-constrained>.alignleft {
  			float: left;
  			margin-inline-start: 0;
  			margin-inline-end: 2em;
  		}

  		body .is-layout-constrained>.alignright {
  			float: right;
  			margin-inline-start: 2em;
  			margin-inline-end: 0;
  		}

  		body .is-layout-constrained>.aligncenter {
  			margin-left: auto !important;
  			margin-right: auto !important;
  		}

  		body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
  			max-width: var(--wp--style--global--content-size);
  			margin-left: auto !important;
  			margin-right: auto !important;
  		}

  		body .is-layout-constrained>.alignwide {
  			max-width: var(--wp--style--global--wide-size);
  		}

  		body .is-layout-flex {
  			display: flex;
  		}

  		body .is-layout-flex {
  			flex-wrap: wrap;
  			align-items: center;
  		}

  		body .is-layout-flex>* {
  			margin: 0;
  		}

  		body .is-layout-grid {
  			display: grid;
  		}

  		body .is-layout-grid>* {
  			margin: 0;
  		}

  		:where(.wp-block-columns.is-layout-flex) {
  			gap: 2em;
  		}

  		:where(.wp-block-columns.is-layout-grid) {
  			gap: 2em;
  		}

  		:where(.wp-block-post-template.is-layout-flex) {
  			gap: 1.25em;
  		}

  		:where(.wp-block-post-template.is-layout-grid) {
  			gap: 1.25em;
  		}

  		.has-black-color {
  			color: var(--wp--preset--color--black) !important;
  		}

  		.has-cyan-bluish-gray-color {
  			color: var(--wp--preset--color--cyan-bluish-gray) !important;
  		}

  		.has-white-color {
  			color: var(--wp--preset--color--white) !important;
  		}

  		.has-pale-pink-color {
  			color: var(--wp--preset--color--pale-pink) !important;
  		}

  		.has-vivid-red-color {
  			color: var(--wp--preset--color--vivid-red) !important;
  		}

  		.has-luminous-vivid-orange-color {
  			color: var(--wp--preset--color--luminous-vivid-orange) !important;
  		}

  		.has-luminous-vivid-amber-color {
  			color: var(--wp--preset--color--luminous-vivid-amber) !important;
  		}

  		.has-light-green-cyan-color {
  			color: var(--wp--preset--color--light-green-cyan) !important;
  		}

  		.has-vivid-green-cyan-color {
  			color: var(--wp--preset--color--vivid-green-cyan) !important;
  		}

  		.has-pale-cyan-blue-color {
  			color: var(--wp--preset--color--pale-cyan-blue) !important;
  		}

  		.has-vivid-cyan-blue-color {
  			color: var(--wp--preset--color--vivid-cyan-blue) !important;
  		}

  		.has-vivid-purple-color {
  			color: var(--wp--preset--color--vivid-purple) !important;
  		}

  		.has-black-background-color {
  			background-color: var(--wp--preset--color--black) !important;
  		}

  		.has-cyan-bluish-gray-background-color {
  			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
  		}

  		.has-white-background-color {
  			background-color: var(--wp--preset--color--white) !important;
  		}

  		.has-pale-pink-background-color {
  			background-color: var(--wp--preset--color--pale-pink) !important;
  		}

  		.has-vivid-red-background-color {
  			background-color: var(--wp--preset--color--vivid-red) !important;
  		}

  		.has-luminous-vivid-orange-background-color {
  			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
  		}

  		.has-luminous-vivid-amber-background-color {
  			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
  		}

  		.has-light-green-cyan-background-color {
  			background-color: var(--wp--preset--color--light-green-cyan) !important;
  		}

  		.has-vivid-green-cyan-background-color {
  			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
  		}

  		.has-pale-cyan-blue-background-color {
  			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
  		}

  		.has-vivid-cyan-blue-background-color {
  			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
  		}

  		.has-vivid-purple-background-color {
  			background-color: var(--wp--preset--color--vivid-purple) !important;
  		}

  		.has-black-border-color {
  			border-color: var(--wp--preset--color--black) !important;
  		}

  		.has-cyan-bluish-gray-border-color {
  			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
  		}

  		.has-white-border-color {
  			border-color: var(--wp--preset--color--white) !important;
  		}

  		.has-pale-pink-border-color {
  			border-color: var(--wp--preset--color--pale-pink) !important;
  		}

  		.has-vivid-red-border-color {
  			border-color: var(--wp--preset--color--vivid-red) !important;
  		}

  		.has-luminous-vivid-orange-border-color {
  			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
  		}

  		.has-luminous-vivid-amber-border-color {
  			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
  		}

  		.has-light-green-cyan-border-color {
  			border-color: var(--wp--preset--color--light-green-cyan) !important;
  		}

  		.has-vivid-green-cyan-border-color {
  			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
  		}

  		.has-pale-cyan-blue-border-color {
  			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
  		}

  		.has-vivid-cyan-blue-border-color {
  			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
  		}

  		.has-vivid-purple-border-color {
  			border-color: var(--wp--preset--color--vivid-purple) !important;
  		}

  		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
  			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
  		}

  		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
  			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
  		}

  		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
  			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
  		}

  		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
  			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
  		}

  		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
  			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
  		}

  		.has-cool-to-warm-spectrum-gradient-background {
  			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
  		}

  		.has-blush-light-purple-gradient-background {
  			background: var(--wp--preset--gradient--blush-light-purple) !important;
  		}

  		.has-blush-bordeaux-gradient-background {
  			background: var(--wp--preset--gradient--blush-bordeaux) !important;
  		}

  		.has-luminous-dusk-gradient-background {
  			background: var(--wp--preset--gradient--luminous-dusk) !important;
  		}

  		.has-pale-ocean-gradient-background {
  			background: var(--wp--preset--gradient--pale-ocean) !important;
  		}

  		.has-electric-grass-gradient-background {
  			background: var(--wp--preset--gradient--electric-grass) !important;
  		}

  		.has-midnight-gradient-background {
  			background: var(--wp--preset--gradient--midnight) !important;
  		}

  		.has-small-font-size {
  			font-size: var(--wp--preset--font-size--small) !important;
  		}

  		.has-medium-font-size {
  			font-size: var(--wp--preset--font-size--medium) !important;
  		}

  		.has-large-font-size {
  			font-size: var(--wp--preset--font-size--large) !important;
  		}

  		.has-x-large-font-size {
  			font-size: var(--wp--preset--font-size--x-large) !important;
  		}

  		.wp-block-navigation a:where(:not(.wp-element-button)) {
  			color: inherit;
  		}

  		:where(.wp-block-post-template.is-layout-flex) {
  			gap: 1.25em;
  		}

  		:where(.wp-block-post-template.is-layout-grid) {
  			gap: 1.25em;
  		}

  		:where(.wp-block-columns.is-layout-flex) {
  			gap: 2em;
  		}

  		:where(.wp-block-columns.is-layout-grid) {
  			gap: 2em;
  		}

  		.wp-block-pullquote {
  			font-size: 1.5em;
  			line-height: 1.6;
  		}
  	</style>
  	<link rel='stylesheet' id='contact-form-7-css' href='wp-content/plugins/contact-form-7/includes/css/stylesf2b4.css?ver=5.7.7' type='text/css' media='all' />
  	<style id='woocommerce-inline-inline-css' type='text/css'>
  		.woocommerce form .form-row .required {
  			visibility: visible;
  		}
  	</style>
  	<link rel='stylesheet' id='flatsome-icons-css' href='wp-content/themes/flatsome/assets/css/fl-iconsae34.css?ver=3.12' type='text/css' media='all' />
  	<link rel='stylesheet' id='flatsome-main-css' href='wp-content/themes/flatsome/assets/css/flatsome2916.css?ver=3.13.1' type='text/css' media='all' />
  	<link rel='stylesheet' id='flatsome-shop-css' href='wp-content/themes/flatsome/assets/css/flatsome-shop2916.css?ver=3.13.1' type='text/css' media='all' />
  	<link rel='stylesheet' id='flatsome-style-css' href='wp-content/themes/mixuediemdien2023/style6aec.css?ver=3.0' type='text/css' media='all' />
  	<link rel='stylesheet' id='flatsome-googlefonts-css' href='http://fonts.googleapis.com/css?family=Georgia%2CTimes%2C%22Times+New+Roman%22%2Cserif%3Aregular%2Cregular%2C%7C%3Aregular%2C%2C&amp;display=swap&amp;ver=3.9' type='text/css' media='all' />
  	<script type="text/javascript" src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
  	<script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
  	<script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min87a1.js?ver=2.7.0-wc.8.5.1" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
  	<script type="text/javascript" id="wc-add-to-cart-js-extra">
  		/* <![CDATA[ */
  		var wc_add_to_cart_params = {
  			"ajax_url": "\/wp-admin\/admin-ajax.php",
  			"wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
  			"i18n_view_cart": "Xem gi\u1ecf h\u00e0ng",
  			"cart_url": "https:\/\/mixuediemdien.com\/cart\/",
  			"is_cart": "",
  			"cart_redirect_after_add": "no"
  		};
  		/* ]]> */
  	</script>
  	<script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min2ff6.js?ver=8.5.1" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
  	<script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.mine837.js?ver=2.1.4-wc.8.5.1" id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
  	<script type="text/javascript" id="woocommerce-js-extra">
  		/* <![CDATA[ */
  		var woocommerce_params = {
  			"ajax_url": "\/wp-admin\/admin-ajax.php",
  			"wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
  		};
  		/* ]]> */
  	</script>
  	<script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min2ff6.js?ver=8.5.1" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
  	<link rel="https://api.w.org/" href="wp-json/index.html" />
  	<link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/56.json" />
  	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
  	<meta name="generator" content="WordPress 6.4.2" />
  	<meta name="generator" content="WooCommerce 8.5.1" />
  	<link rel='shortlink' href='index.html' />
  	<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embedaaa8.json?url=https%3A%2F%2Fmixuediemdien.com%2F" />
  	<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed848e?url=https%3A%2F%2Fmixuediemdien.com%2F&amp;format=xml" />
  	<!-- Google site verification - Google Listings & Ads -->
  	<meta name="google-site-verification" content="BKNQXfM2Z99zUqql3faIFBeMPwzsK0mXVtOz1ByWNQI" />
  	<style>
  		.bg {
  			opacity: 0;
  			transition: opacity 1s;
  			-webkit-transition: opacity 1s;
  		}

  		.bg-loaded {
  			opacity: 1;
  		}
  	</style><!--[if IE]><link rel="stylesheet" type="text/css" href="https://mixuediemdien.com/wp-content/themes/flatsome/assets/css/ie-fallback.css"><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script><script>var head = document.getElementsByTagName('head')[0],style = document.createElement('style');style.type = 'text/css';style.styleSheet.cssText = ':before,:after{content:none !important';head.appendChild(style);setTimeout(function(){head.removeChild(style);}, 0);</script><script src="https://mixuediemdien.com/wp-content/themes/flatsome/assets/libs/ie-flexibility.js"></script><![endif]--><!-- Google tag (gtag.js) -->
  	<script async src="https://www.googletagmanager.com/gtag/js?id=G-4QH2KDC15M"></script>
  	<script>
  		window.dataLayer = window.dataLayer || [];

  		function gtag() {
  			dataLayer.push(arguments);
  		}
  		gtag('js', new Date());

  		gtag('config', 'G-4QH2KDC15M');
  	</script>
  	<script async src="../pagead2.googlesyndication.com/pagead/js/f3d3f.txt?client=ca-pub-5082970382633909" crossorigin="anonymous"></script> <noscript>
  		<style>
  			.woocommerce-product-gallery {
  				opacity: 1 !important;
  			}
  		</style>
  	</noscript>
  	<link rel="icon" href="wp-content/uploads/2023/07/cropped-icon_mixue-32x32.png" sizes="32x32" />
  	<link rel="icon" href="wp-content/uploads/2023/07/cropped-icon_mixue-192x192.png" sizes="192x192" />
  	<link rel="apple-touch-icon" href="wp-content/uploads/2023/07/cropped-icon_mixue-180x180.png" />
  	<meta name="msapplication-TileImage" content="https://mixuediemdien.com/wp-content/uploads/2023/07/cropped-icon_mixue-270x270.png" />
  	<style id="custom-css" type="text/css">
  		:root {
  			--primary-color: #dd3333;
  		}

  		.header-main {
  			height: 90px
  		}

  		#logo img {
  			max-height: 90px
  		}

  		#logo {
  			width: 200px;
  		}

  		.header-top {
  			min-height: 30px
  		}

  		.transparent .header-main {
  			height: 90px
  		}

  		.transparent #logo img {
  			max-height: 90px
  		}

  		.has-transparent+.page-title:first-of-type,
  		.has-transparent+#main>.page-title,
  		.has-transparent+#main>div>.page-title,
  		.has-transparent+#main .page-header-wrapper:first-of-type .page-title {
  			padding-top: 120px;
  		}

  		.header.show-on-scroll,
  		.stuck .header-main {
  			height: 70px !important
  		}

  		.stuck #logo img {
  			max-height: 70px !important
  		}

  		.search-form {
  			width: 45%;
  		}

  		.header-bg-color,
  		.header-wrapper {
  			background-color: rgba(255, 255, 255, 0.9)
  		}

  		.header-bottom {
  			background-color: #f1f1f1
  		}

  		.header-main .nav>li>a {
  			line-height: 16px
  		}

  		@media (max-width: 549px) {
  			.header-main {
  				height: 70px
  			}

  			#logo img {
  				max-height: 70px
  			}
  		}

  		/* Color */
  		.accordion-title.active,
  		.has-icon-bg .icon .icon-inner,
  		.logo a,
  		.primary.is-underline,
  		.primary.is-link,
  		.badge-outline .badge-inner,
  		.nav-outline>li.active>a,
  		.nav-outline>li.active>a,
  		.cart-icon strong,
  		[data-color='primary'],
  		.is-outline.primary {
  			color: #dd3333;
  		}

  		/* Color !important */
  		[data-text-color="primary"] {
  			color: #dd3333 !important;
  		}

  		/* Background Color */
  		[data-text-bg="primary"] {
  			background-color: #dd3333;
  		}

  		/* Background */
  		.scroll-to-bullets a,
  		.featured-title,
  		.label-new.menu-item>a:after,
  		.nav-pagination>li>.current,
  		.nav-pagination>li>span:hover,
  		.nav-pagination>li>a:hover,
  		.has-hover:hover .badge-outline .badge-inner,
  		button[type="submit"],
  		.button.wc-forward:not(.checkout):not(.checkout-button),
  		.button.submit-button,
  		.button.primary:not(.is-outline),
  		.featured-table .title,
  		.is-outline:hover,
  		.has-icon:hover .icon-label,
  		.nav-dropdown-bold .nav-column li>a:hover,
  		.nav-dropdown.nav-dropdown-bold>li>a:hover,
  		.nav-dropdown-bold.dark .nav-column li>a:hover,
  		.nav-dropdown.nav-dropdown-bold.dark>li>a:hover,
  		.is-outline:hover,
  		.tagcloud a:hover,
  		.grid-tools a,
  		input[type='submit']:not(.is-form),
  		.box-badge:hover .box-text,
  		input.button.alt,
  		.nav-box>li>a:hover,
  		.nav-box>li.active>a,
  		.nav-pills>li.active>a,
  		.current-dropdown .cart-icon strong,
  		.cart-icon:hover strong,
  		.nav-line-bottom>li>a:before,
  		.nav-line-grow>li>a:before,
  		.nav-line>li>a:before,
  		.banner,
  		.header-top,
  		.slider-nav-circle .flickity-prev-next-button:hover svg,
  		.slider-nav-circle .flickity-prev-next-button:hover .arrow,
  		.primary.is-outline:hover,
  		.button.primary:not(.is-outline),
  		input[type='submit'].primary,
  		input[type='submit'].primary,
  		input[type='reset'].button,
  		input[type='button'].primary,
  		.badge-inner {
  			background-color: #dd3333;
  		}

  		/* Border */
  		.nav-vertical.nav-tabs>li.active>a,
  		.scroll-to-bullets a.active,
  		.nav-pagination>li>.current,
  		.nav-pagination>li>span:hover,
  		.nav-pagination>li>a:hover,
  		.has-hover:hover .badge-outline .badge-inner,
  		.accordion-title.active,
  		.featured-table,
  		.is-outline:hover,
  		.tagcloud a:hover,
  		blockquote,
  		.has-border,
  		.cart-icon strong:after,
  		.cart-icon strong,
  		.blockUI:before,
  		.processing:before,
  		.loading-spin,
  		.slider-nav-circle .flickity-prev-next-button:hover svg,
  		.slider-nav-circle .flickity-prev-next-button:hover .arrow,
  		.primary.is-outline:hover {
  			border-color: #dd3333
  		}

  		.nav-tabs>li.active>a {
  			border-top-color: #dd3333
  		}

  		.widget_shopping_cart_content .blockUI.blockOverlay:before {
  			border-left-color: #dd3333
  		}

  		.woocommerce-checkout-review-order .blockUI.blockOverlay:before {
  			border-left-color: #dd3333
  		}

  		/* Fill */
  		.slider .flickity-prev-next-button:hover svg,
  		.slider .flickity-prev-next-button:hover .arrow {
  			fill: #dd3333;
  		}

  		.alert.is-underline:hover,
  		.alert.is-outline:hover,
  		.alert {
  			background-color: #8224e3
  		}

  		.alert.is-link,
  		.alert.is-outline,
  		.color-alert {
  			color: #8224e3;
  		}

  		/* Color !important */
  		[data-text-color="alert"] {
  			color: #8224e3 !important;
  		}

  		/* Background Color */
  		[data-text-bg="alert"] {
  			background-color: #8224e3;
  		}

  		@media screen and (max-width: 549px) {
  			body {
  				font-size: 100%;
  			}
  		}

  		body {
  			font-family: "Georgia,Times," Times New Roman",serif", sans-serif
  		}

  		h1,
  		h2,
  		h3,
  		h4,
  		h5,
  		h6,
  		.heading-font,
  		.off-canvas-center .nav-sidebar.nav-vertical>li>a {
  			font-family: "Georgia,Times," Times New Roman",serif", sans-serif;
  		}

  		h1,
  		h2,
  		h3,
  		h4,
  		h5,
  		h6,
  		.heading-font,
  		.banner h1,
  		.banner h2 {
  			font-weight: 0;
  		}

  		@media screen and (min-width: 550px) {
  			.products .box-vertical .box-image {
  				min-width: 300px !important;
  				width: 300px !important;
  			}
  		}

  		.footer-2 {
  			background-color: #ff2323
  		}

  		.absolute-footer,
  		html {
  			background-color: #c90000
  		}

  		.label-new.menu-item>a:after {
  			content: "New";
  		}

  		.label-hot.menu-item>a:after {
  			content: "Hot";
  		}

  		.label-sale.menu-item>a:after {
  			content: "Sale";
  		}

  		.label-popular.menu-item>a:after {
  			content: "Popular";
  		}
  	</style>
  	<style id="infinite-scroll-css" type="text/css">
  		.page-load-status,
  		.archive .woocommerce-pagination {
  			display: none;
  		}
  	</style>
  </head>


  <body class="home page-template page-template-page-blank page-template-page-blank-php page page-id-56 theme-flatsome woocommerce-no-js lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border">
  	<?php
		$kn = new connect();
		?>
  	
  	<?php
		if (isset($_SESSION['admin'])) {
			include "View/headder.php";
		}
		?>

  	<!-- header -->
	<?php 
		include_once "View/headder.php"
	?>
  	<!-- hiên thi noi dung -->

  	<!-- hien thi noi dung đây -->
  	<?php
$ctrl = "home";

// Kiểm tra nếu có tham số action được truyền vào
if (isset($_GET['action'])) {
    // Lọc và làm sạch giá trị input
    $ctrl = filter_var($_GET['action'], FILTER_SANITIZE_STRING);
}

// Xây dựng đường dẫn đến file controller
$controllerPath = "Controller/" . $ctrl . ".php";

// Kiểm tra xem file controller có tồn tại không
if (file_exists($controllerPath)) {
    include_once $controllerPath;
} else {
    // Nếu file không tồn tại, chuyển hướng về trang mặc định hoặc trang lỗi
    echo "Controller không tồn tại";
    // Hoặc có thể chuyển hướng về trang chủ:
    // header("Location: index.php");
    // exit();
}
?>

  	<!-- hiên thị footer -->
  	<?php
		include_once "View/footer.php";
		?>
  	<!-- <?php
		include_once 'controllers/cart.php';
		include_once 'controllers/payment.php';

		$action = isset($_GET['action']) ? $_GET['action'] : 'index';

		switch ($action) {
			case 'index':
				$cart = new cart();
				$cartController->index();
				break;
			case 'checkout':
				$checkoutController = new CheckoutController();
				$checkoutController->index();
				break;
			case 'payment':
				// Xử lý trang thanh toán
				// Có thể include trang thanh toán ở đây
				break;
			default:
				echo "404 Not Found";
				break;
		}
		?> -->


  </body>

  </html>
  <script type='text/javascript'>
  	(function() {
  		var c = document.body.className;
  		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
  		document.body.className = c;
  	})();
  </script>
  <script type="text/template" id="tmpl-variation-template">
  	<div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
	<div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
</script>
  <script type="text/template" id="tmpl-unavailable-variation-template">
  	<p>Rất tiếc, sản phẩm này hiện không tồn tại. Hãy chọn một phương thức kết hợp khác.</p>
</script>
  <link rel='stylesheet' id='wc-blocks-style-css' href='wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks8fea.css?ver=11.8.0-dev' type='text/css' media='all' />
  <link rel='stylesheet' id='float-menu-fontawesome-css' href='wp-content/plugins/float-menu/vendors/fontawesome/css/fontawesome-all.min1e39.css?ver=6.4.2' type='text/css' media='all' />
  <link rel='stylesheet' id='float-menu-css' href='wp-content/plugins/float-menu/public/assets/css/style-min3c21.css?ver=5.1.1' type='text/css' media='all' />
  <style id='float-menu-inline-css' type='text/css'>
  	.float-menu-1 {
  		--fm-icon-size: 24px;
  		--fm-label-size: 15px;
  		--fm-border-radius: 50%;
  		--fm-color: #ffffff;
  		--fm-background: #128be0;
  		--fm-z-index: 9999;
  	}

  	.fm-item-1-0 {
  		--fm-color: #ffffff;
  		--fm-background: rgb(18, 139, 224);
  	}

  	.fm-item-1-0:hover {
  		--fm-hover-color: #ffffff;
  		--fm-hover-background: rgb(255, 20, 20);
  	}

  	.fm-item-1-1 {
  		--fm-color: #ffffff;
  		--fm-background: #128be0;
  	}

  	.fm-item-1-1:hover {
  		--fm-hover-color: #ffffff;
  		--fm-hover-background: rgb(255, 20, 20);
  	}

  	.fm-item-1-2 {
  		--fm-color: #ffffff;
  		--fm-background: #128be0;
  	}

  	.fm-item-1-2:hover {
  		--fm-hover-color: #ffffff;
  		--fm-hover-background: rgb(255, 20, 20);
  	}

  	.fm-item-1-3 {
  		--fm-color: #ffffff;
  		--fm-background: #128be0;
  	}

  	.fm-item-1-3:hover {
  		--fm-hover-color: #ffffff;
  		--fm-hover-background: rgb(255, 20, 20);
  	}

  	@media only screen and (max-width: 480px) {
  		.float-menu-1 {
  			display: none;
  		}
  	}
  </style>
  <script type="text/javascript" src="wp-content/plugins/contact-form-7/includes/swv/js/indexf2b4.js?ver=5.7.7" id="swv-js"></script>
  <script type="text/javascript" id="contact-form-7-js-extra">
  	/* <![CDATA[ */
  	var wpcf7 = {
  		"api": {
  			"root": "https:\/\/mixuediemdien.com\/wp-json\/",
  			"namespace": "contact-form-7\/v1"
  		}
  	};
  	/* ]]> */
  </script>
  <script type="text/javascript" src="wp-content/plugins/contact-form-7/includes/js/indexf2b4.js?ver=5.7.7" id="contact-form-7-js"></script>
  <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min2ff6.js?ver=8.5.1" id="sourcebuster-js-js"></script>
  <script type="text/javascript" id="wc-order-attribution-js-extra">
  	/* <![CDATA[ */
  	var wc_order_attribution = {
  		"params": {
  			"lifetime": 1.0e-5,
  			"session": 30,
  			"ajaxurl": "https:\/\/mixuediemdien.com\/wp-admin\/admin-ajax.php",
  			"prefix": "wc_order_attribution_",
  			"allowTracking": "yes"
  		}
  	};
  	/* ]]> */
  </script>
  <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min2ff6.js?ver=8.5.1" id="wc-order-attribution-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/vendor/wp-polyfill-inert.min0226.js?ver=3.1.2" id="wp-polyfill-inert-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/vendor/regenerator-runtime.min6c85.js?ver=0.14.0" id="regenerator-runtime-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0" id="wp-polyfill-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/vendor/react.min7a3b.js?ver=18.2.0" id="react-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/hooks.min2ebd.js?ver=c6aec9a8d4e5a5d543a1" id="wp-hooks-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/deprecated.min664b.js?ver=73ad3591e7bc95f4777a" id="wp-deprecated-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/dom.minbac8.js?ver=49ff2869626fbeaacc23" id="wp-dom-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/vendor/react-dom.min7a3b.js?ver=18.2.0" id="react-dom-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/escape-html.min0311.js?ver=03e27a7b6ae14f7afaa6" id="wp-escape-html-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/element.min0eb1.js?ver=ed1c7604880e8b574b40" id="wp-element-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/is-shallow-equal.mincc0f.js?ver=20c2b06ecf04afb14fee" id="wp-is-shallow-equal-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/i18n.minf92f.js?ver=7701b0c3857f914212ef" id="wp-i18n-js"></script>
  <script type="text/javascript" id="wp-i18n-js-after">
  	/* <![CDATA[ */
  	wp.i18n.setLocaleData({
  		'text direction\u0004ltr': ['ltr']
  	});
  	/* ]]> */
  </script>
  <script type="text/javascript" id="wp-keycodes-js-translations">
  	/* <![CDATA[ */
  	(function(domain, translations) {
  		var localeData = translations.locale_data[domain] || translations.locale_data.messages;
  		localeData[""].domain = domain;
  		wp.i18n.setLocaleData(localeData, domain);
  	})("default", {
  		"translation-revision-date": "2023-07-15 15:30:50+0000",
  		"generator": "GlotPress\/4.0.0-alpha.4",
  		"domain": "messages",
  		"locale_data": {
  			"messages": {
  				"": {
  					"domain": "messages",
  					"plural-forms": "nplurals=1; plural=0;",
  					"lang": "vi_VN"
  				},
  				"Period": ["Giai \u0111o\u1ea1n"],
  				"Comma": ["D\u1ea5u ph\u1ea9y"],
  				"Backtick": ["Backtick"]
  			}
  		},
  		"comment": {
  			"reference": "wp-includes\/js\/dist\/keycodes.js"
  		}
  	});
  	/* ]]> */
  </script>
  <script type="text/javascript" src="wp-includes/js/dist/keycodes.min3d5f.js?ver=3460bd0fac9859d6886c" id="wp-keycodes-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/priority-queue.mind972.js?ver=422e19e9d48b269c5219" id="wp-priority-queue-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/compose.min3e86.js?ver=3189b344ff39fef940b7" id="wp-compose-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/private-apis.min3089.js?ver=11cb2ebaa70a9f1f0ab5" id="wp-private-apis-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/redux-routine.min9528.js?ver=0be1b2a6a79703e28531" id="wp-redux-routine-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/data.min23f6.js?ver=dc5f255634f3da29c8d5" id="wp-data-js"></script>
  <script type="text/javascript" id="wp-data-js-after">
  	/* <![CDATA[ */
  	(function() {
  		var userId = 0;
  		var storageKey = "WP_DATA_USER_" + userId;
  		wp.data
  			.use(wp.data.plugins.persistence, {
  				storageKey: storageKey
  			});
  	})();
  	/* ]]> */
  </script>
  <script type="text/javascript" src="wp-includes/js/dist/vendor/lodash.minf492.js?ver=4.17.19" id="lodash-js"></script>
  <script type="text/javascript" id="lodash-js-after">
  	/* <![CDATA[ */
  	window.lodash = _.noConflict();
  	/* ]]> */
  </script>
  <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks-registry8d1b.js?ver=1c879273bd5c193cad0a" id="wc-blocks-registry-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/url.min7dc0.js?ver=b4979979018b684be209" id="wp-url-js"></script>
  <script type="text/javascript" id="wp-api-fetch-js-translations">
  	/* <![CDATA[ */
  	(function(domain, translations) {
  		var localeData = translations.locale_data[domain] || translations.locale_data.messages;
  		localeData[""].domain = domain;
  		wp.i18n.setLocaleData(localeData, domain);
  	})("default", {
  		"translation-revision-date": "2023-07-15 15:30:50+0000",
  		"generator": "GlotPress\/4.0.0-alpha.4",
  		"domain": "messages",
  		"locale_data": {
  			"messages": {
  				"": {
  					"domain": "messages",
  					"plural-forms": "nplurals=1; plural=0;",
  					"lang": "vi_VN"
  				},
  				"You are probably offline.": ["C\u00f3 th\u1ec3 b\u1ea1n \u0111ang ngo\u1ea1i tuy\u1ebfn."],
  				"Media upload failed. If this is a photo or a large image, please scale it down and try again.": ["T\u1ea3i l\u00ean media kh\u00f4ng th\u00e0nh c\u00f4ng. N\u1ebfu \u0111\u00e2y l\u00e0 h\u00ecnh \u1ea3nh c\u00f3 k\u00edch th\u01b0\u1edbc l\u1edbn, vui l\u00f2ng thu nh\u1ecf n\u00f3 xu\u1ed1ng v\u00e0 th\u1eed l\u1ea1i."],
  				"The response is not a valid JSON response.": ["Ph\u1ea3n h\u1ed3i kh\u00f4ng ph\u1ea3i l\u00e0 m\u1ed9t JSON h\u1ee3p l\u1ec7."],
  				"An unknown error occurred.": ["C\u00f3 l\u1ed7i n\u00e0o \u0111\u00f3 \u0111\u00e3 x\u1ea3y ra."]
  			}
  		},
  		"comment": {
  			"reference": "wp-includes\/js\/dist\/api-fetch.js"
  		}
  	});
  	/* ]]> */
  </script>
  <script type="text/javascript" src="wp-includes/js/dist/api-fetch.min471f.js?ver=0fa4dabf8bf2c7adf21a" id="wp-api-fetch-js"></script>
  <script type="text/javascript" id="wp-api-fetch-js-after">
  	/* <![CDATA[ */
  	wp.apiFetch.use(wp.apiFetch.createRootURLMiddleware("wp-json/index.html"));
  	wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware("908b327d3a");
  	wp.apiFetch.use(wp.apiFetch.nonceMiddleware);
  	wp.apiFetch.use(wp.apiFetch.mediaUploadMiddleware);
  	wp.apiFetch.nonceEndpoint = "wp-admin/admin-ajaxf809.html?action=rest-nonce";
  	/* ]]> */
  </script>
  <script type="text/javascript" id="wc-settings-js-before">
  	/* <![CDATA[ */
  	var wcSettings = wcSettings || JSON.parse(decodeURIComponent('%7B%22shippingCostRequiresAddress%22%3Afalse%2C%22adminUrl%22%3A%22https%3A%5C%2F%5C%2Fmixuediemdien.com%5C%2Fwp-admin%5C%2F%22%2C%22countries%22%3A%7B%22SA%22%3A%22%5Cu1ea2%20R%5Cu1eadp%20Saudi%22%2C%22AF%22%3A%22Afghanistan%22%2C%22EG%22%3A%22Ai%20C%5Cu1eadp%22%2C%22AX%22%3A%22%5Cu00c5land%20Islands%22%2C%22AL%22%3A%22Albania%22%2C%22DZ%22%3A%22Algeria%22%2C%22AS%22%3A%22American%20Samoa%22%2C%22IN%22%3A%22%5Cu1ea4n%20%5Cu0110%5Cu1ed9%22%2C%22AD%22%3A%22Andorra%22%2C%22AO%22%3A%22Angola%22%2C%22AI%22%3A%22Anguilla%22%2C%22GB%22%3A%22Anh%20%28UK%29%22%2C%22AQ%22%3A%22Antarctica%22%2C%22AG%22%3A%22Antigua%20v%5Cu00e0%20Barbuda%22%2C%22AT%22%3A%22%5Cu00c1o%22%2C%22AR%22%3A%22Argentina%22%2C%22AM%22%3A%22Armenia%22%2C%22AW%22%3A%22Aruba%22%2C%22AZ%22%3A%22Azerbaijan%22%2C%22BS%22%3A%22Bahamas%22%2C%22BH%22%3A%22Bahrain%22%2C%22BD%22%3A%22Bangladesh%22%2C%22BB%22%3A%22Barbados%22%2C%22BY%22%3A%22Belarus%22%2C%22PW%22%3A%22Belau%22%2C%22BZ%22%3A%22Belize%22%2C%22BJ%22%3A%22Benin%22%2C%22BM%22%3A%22Bermuda%22%2C%22BT%22%3A%22Bhutan%22%2C%22BE%22%3A%22B%5Cu1ec9%22%2C%22PT%22%3A%22B%5Cu1ed3%20%5Cu0110%5Cu00e0o%20Nha%22%2C%22CI%22%3A%22B%5Cu1edd%20bi%5Cu1ec3n%20Ng%5Cu00e0%22%2C%22BO%22%3A%22Bolivia%22%2C%22BQ%22%3A%22Bonaire%2C%20Saint%20Eustatius%20v%5Cu00e0%20Saba%22%2C%22BA%22%3A%22Bosnia%20v%5Cu00e0%20Herzegovina%22%2C%22BW%22%3A%22Botswana%22%2C%22BR%22%3A%22Brazil%22%2C%22BN%22%3A%22Brunei%22%2C%22BG%22%3A%22Bulgaria%22%2C%22BF%22%3A%22Burkina%20Faso%22%2C%22BI%22%3A%22Burundi%22%2C%22UM%22%3A%22C%5Cu00e1c%20Ti%5Cu1ec3u%20%5Cu0111%5Cu1ea3o%20xa%20c%5Cu1ee7a%20Hoa%20K%5Cu1ef3%20%28US%29%22%2C%22AE%22%3A%22C%5Cu00e1c%20ti%5Cu1ec3u%20v%5Cu01b0%5Cu01a1ng%20qu%5Cu1ed1c%20%5Cu1ea2%20R%5Cu1eadp%22%2C%22CM%22%3A%22Cameroon%22%2C%22KH%22%3A%22Campuchia%22%2C%22CA%22%3A%22Canada%22%2C%22CV%22%3A%22Cape%20Verde%22%2C%22TD%22%3A%22Chad%22%2C%22CL%22%3A%22Chile%22%2C%22CX%22%3A%22Christmas%20Island%22%2C%22CO%22%3A%22Colombia%22%2C%22KM%22%3A%22Comoros%22%2C%22DO%22%3A%22C%5Cu1ed9ng%20h%5Cu00f2a%20Dominica%22%2C%22CZ%22%3A%22C%5Cu1ed9ng%20h%5Cu00f2a%20S%5Cu00e9c%22%2C%22CF%22%3A%22C%5Cu1ed9ng%20h%5Cu00f2a%20Trung%20Phi%22%2C%22CG%22%3A%22Congo%20%28Brazzaville%29%22%2C%22CD%22%3A%22Congo%20%28Kinshasa%29%22%2C%22CR%22%3A%22Costa%20Rica%22%2C%22HR%22%3A%22Croatia%22%2C%22CU%22%3A%22Cuba%22%2C%22CW%22%3A%22Cura%26Ccedil%3Bao%22%2C%22CY%22%3A%22Cyprus%22%2C%22TW%22%3A%22%5Cu0110%5Cu00e0i%20Loan%22%2C%22DK%22%3A%22%5Cu0110an%20M%5Cu1ea1ch%22%2C%22BV%22%3A%22%5Cu0110%5Cu1ea3o%20Bouvet%22%2C%22HM%22%3A%22%5Cu0110%5Cu1ea3o%20Heard%20v%5Cu00e0%20qu%5Cu1ea7n%20%5Cu0111%5Cu1ea3o%20McDonald%22%2C%22IM%22%3A%22%5Cu0110%5Cu1ea3o%20Man%22%2C%22WS%22%3A%22%5Cu0110%5Cu1ea3o%20Samoa%22%2C%22DJ%22%3A%22Djibouti%22%2C%22DM%22%3A%22Dominica%22%2C%22TL%22%3A%22%5Cu0110%5Cu00f4ng%20Timo%22%2C%22DE%22%3A%22%5Cu0110%5Cu1ee9c%22%2C%22EC%22%3A%22Ecuador%22%2C%22SV%22%3A%22El%20Salvador%22%2C%22ER%22%3A%22Eritrea%22%2C%22EE%22%3A%22Estonia%22%2C%22SZ%22%3A%22Eswatini%22%2C%22ET%22%3A%22Ethiopia%22%2C%22FJ%22%3A%22Fiji%22%2C%22GA%22%3A%22Gabon%22%2C%22GM%22%3A%22Gambia%22%2C%22GE%22%3A%22Georgia%22%2C%22GH%22%3A%22Ghana%22%2C%22GI%22%3A%22Gibraltar%22%2C%22GL%22%3A%22Greenland%22%2C%22GD%22%3A%22Grenada%22%2C%22GP%22%3A%22Guadeloupe%22%2C%22GU%22%3A%22Guam%22%2C%22GT%22%3A%22Guatemala%22%2C%22GG%22%3A%22Guernsey%22%2C%22GN%22%3A%22Guinea%22%2C%22GQ%22%3A%22Guinea%20X%5Cu00edch%20%5Cu0111%5Cu1ea1o%22%2C%22GW%22%3A%22Guinea-Bissau%22%2C%22GY%22%3A%22Guyana%22%2C%22GF%22%3A%22Guyane%20thu%5Cu1ed9c%20Ph%5Cu00e1p%22%2C%22NL%22%3A%22H%5Cu00e0%20Lan%22%2C%22HT%22%3A%22Haiti%22%2C%22KR%22%3A%22H%5Cu00e0n%20Qu%5Cu1ed1c%22%2C%22HN%22%3A%22Honduras%22%2C%22HK%22%3A%22H%5Cu1ed3ng%20K%5Cu00f4ng%22%2C%22HU%22%3A%22Hungary%22%2C%22GR%22%3A%22Hy%20L%5Cu1ea1p%22%2C%22IS%22%3A%22Iceland%22%2C%22ID%22%3A%22Indonesia%22%2C%22IR%22%3A%22Iran%22%2C%22IQ%22%3A%22Iraq%22%2C%22IE%22%3A%22Ireland%22%2C%22IL%22%3A%22Israel%22%2C%22JM%22%3A%22Jamaica%22%2C%22JE%22%3A%22Jersey%22%2C%22JO%22%3A%22Jordan%22%2C%22KZ%22%3A%22Kazakhstan%22%2C%22KE%22%3A%22Kenya%22%2C%22KI%22%3A%22Kiribati%22%2C%22KW%22%3A%22Kuwait%22%2C%22KG%22%3A%22Kyrgyzstan%22%2C%22IO%22%3A%22L%5Cu00e3nh%20th%5Cu1ed5%20%5Cu1ea4n%20%5Cu0110%5Cu1ed9%20D%5Cu01b0%5Cu01a1ng%20thu%5Cu1ed9c%20Anh%22%2C%22TF%22%3A%22L%5Cu00e3nh%20th%5Cu1ed5%20mi%5Cu1ec1n%20Nam%20n%5Cu01b0%5Cu1edbc%20Ph%5Cu00e1p%22%2C%22LA%22%3A%22L%5Cu00e0o%22%2C%22LV%22%3A%22Latvia%22%2C%22LB%22%3A%22Lebanon%22%2C%22LS%22%3A%22Lesotho%22%2C%22LR%22%3A%22Liberia%22%2C%22LY%22%3A%22Libya%22%2C%22LI%22%3A%22Liechtenstein%22%2C%22LT%22%3A%22Lithuania%22%2C%22LU%22%3A%22Luxembourg%22%2C%22MO%22%3A%22Ma%20Cao%22%2C%22MG%22%3A%22Madagascar%22%2C%22MW%22%3A%22Malawi%22%2C%22MY%22%3A%22Malaysia%22%2C%22MV%22%3A%22Maldives%22%2C%22ML%22%3A%22Mali%22%2C%22MT%22%3A%22Malta%22%2C%22MQ%22%3A%22Martinique%22%2C%22MR%22%3A%22Mauritania%22%2C%22MU%22%3A%22Mauritius%22%2C%22YT%22%3A%22Mayotte%22%2C%22MX%22%3A%22Mexico%22%2C%22FM%22%3A%22Micronesia%22%2C%22MD%22%3A%22Moldova%22%2C%22MC%22%3A%22Monaco%22%2C%22MN%22%3A%22M%5Cu00f4ng%20C%5Cu1ed5%22%2C%22ME%22%3A%22Montenegro%22%2C%22MS%22%3A%22Montserrat%22%2C%22MA%22%3A%22Morocco%22%2C%22MZ%22%3A%22Mozambique%22%2C%22US%22%3A%22M%5Cu1ef9%20%28US%29%22%2C%22MM%22%3A%22Myanmar%22%2C%22NO%22%3A%22Na%20Uy%22%2C%22GS%22%3A%22Nam%20Georgia%20v%5Cu00e0%20Qu%5Cu1ea7n%20%5Cu0111%5Cu1ea3o%20Nam%20Sandwich%22%2C%22ZA%22%3A%22Nam%20Phi%22%2C%22SS%22%3A%22Nam%20Sudan%22%2C%22NA%22%3A%22Namibia%22%2C%22NR%22%3A%22Nauru%22%2C%22NP%22%3A%22Nepal%22%2C%22NC%22%3A%22New%20Caledonia%22%2C%22NZ%22%3A%22New%20Zealand%22%2C%22RU%22%3A%22Nga%22%2C%22JP%22%3A%22Nh%5Cu1eadt%20B%5Cu1ea3n%22%2C%22NI%22%3A%22Nicaragua%22%2C%22NE%22%3A%22Niger%22%2C%22NG%22%3A%22Nigeria%22%2C%22NU%22%3A%22Niue%22%2C%22NF%22%3A%22Norfolk%20Island%22%2C%22MK%22%3A%22North%20Macedonia%22%2C%22OM%22%3A%22Oman%22%2C%22PK%22%3A%22Pakistan%22%2C%22PS%22%3A%22Palestinian%20Territory%22%2C%22PA%22%3A%22Panama%22%2C%22PG%22%3A%22Papua%20New%20Guinea%22%2C%22PY%22%3A%22Paraguay%22%2C%22PE%22%3A%22Peru%22%2C%22FI%22%3A%22Ph%5Cu1ea7n%20Lan%22%2C%22PL%22%3A%22Ph%5Cu1ea7n%20Lan%22%2C%22FR%22%3A%22Ph%5Cu00e1p%22%2C%22PH%22%3A%22Philippines%22%2C%22PN%22%3A%22Pitcairn%22%2C%22PF%22%3A%22Polynesia%20thu%5Cu1ed9c%20Ph%5Cu00e1p%22%2C%22PR%22%3A%22Puerto%20Rico%22%2C%22QA%22%3A%22Qatar%22%2C%22MP%22%3A%22Qu%5Cu1ea7n%20%5Cu0111%5Cu1ea3o%20B%5Cu1eafc%20Mariana%22%2C%22KY%22%3A%22Qu%5Cu1ea7n%20%5Cu0111%5Cu1ea3o%20Cayman%22%2C%22CC%22%3A%22Qu%5Cu1ea7n%20%5Cu0111%5Cu1ea3o%20Cocos%20%28Keeling%29%22%2C%22CK%22%3A%22Qu%5Cu1ea7n%20%5Cu0111%5Cu1ea3o%20Cook%22%2C%22FK%22%3A%22Qu%5Cu1ea7n%20%5Cu0111%5Cu1ea3o%20Falkland%22%2C%22FO%22%3A%22Qu%5Cu1ea7n%20%5Cu0111%5Cu1ea3o%20Faroe%22%2C%22MH%22%3A%22Qu%5Cu1ea7n%20%5Cu0111%5Cu1ea3o%20Marshall%22%2C%22SB%22%3A%22Qu%5Cu1ea7n%20%5Cu0111%5Cu1ea3o%20Solomon%22%2C%22RE%22%3A%22Reunion%22%2C%22RO%22%3A%22Romania%22%2C%22RW%22%3A%22Rwanda%22%2C%22BL%22%3A%22Saint%20Barth%26eacute%3Blemy%22%2C%22SH%22%3A%22Saint%20Helena%22%2C%22KN%22%3A%22Saint%20Kitts%20v%5Cu00e0%20Nevis%22%2C%22LC%22%3A%22Saint%20Lucia%22%2C%22SX%22%3A%22Saint%20Martin%20%28thu%5Cu1ed9c%20H%5Cu00e0%20Lan%29%22%2C%22PM%22%3A%22Saint%20Pierre%20v%5Cu00e0%20Miquelon%22%2C%22VC%22%3A%22Saint%20Vincent%20v%5Cu00e0%20Grenadines%22%2C%22MF%22%3A%22Saint-Martin%20%28thu%5Cu1ed9c%20Ph%5Cu00e1p%29%22%2C%22SM%22%3A%22San%20Marino%22%2C%22ST%22%3A%22S%26atilde%3Bo%20Tom%26eacute%3B%20v%5Cu00e0%20Pr%26iacute%3Bncipe%22%2C%22SN%22%3A%22Senegal%22%2C%22RS%22%3A%22Serbia%22%2C%22SC%22%3A%22Seychelles%22%2C%22SL%22%3A%22Sierra%20Leone%22%2C%22SG%22%3A%22Singapore%22%2C%22SK%22%3A%22Slovakia%22%2C%22SI%22%3A%22Slovenia%22%2C%22SO%22%3A%22Somalia%22%2C%22LK%22%3A%22Sri%20Lanka%22%2C%22SD%22%3A%22Sudan%22%2C%22SR%22%3A%22Suriname%22%2C%22SJ%22%3A%22Svalbard%20v%5Cu00e0%20Jan%20Mayen%22%2C%22SY%22%3A%22Syria%22%2C%22TJ%22%3A%22Tajikistan%22%2C%22TZ%22%3A%22Tanzania%22%2C%22ES%22%3A%22T%5Cu00e2y%20Ban%20Nha%22%2C%22TH%22%3A%22Th%5Cu00e1i%20Lan%22%2C%22TR%22%3A%22Th%5Cu1ed5%20Nh%5Cu0129%20K%5Cu1ef3%22%2C%22SE%22%3A%22Th%5Cu1ee5y%20%5Cu0110i%5Cu1ec3n%22%2C%22CH%22%3A%22Th%5Cu1ee5y%20S%5Cu0129%22%2C%22TG%22%3A%22Togo%22%2C%22TK%22%3A%22Tokelau%22%2C%22TO%22%3A%22Tonga%22%2C%22KP%22%3A%22Tri%5Cu1ec1u%20Ti%5Cu00ean%22%2C%22TT%22%3A%22Trinidad%20v%5Cu00e0%20Tobago%22%2C%22CN%22%3A%22Trung%20Qu%5Cu1ed1c%22%2C%22TN%22%3A%22Tunisia%22%2C%22TM%22%3A%22Turkmenistan%22%2C%22TC%22%3A%22Turks%20v%5Cu00e0%20qu%5Cu1ea7n%20%5Cu0111%5Cu1ea3o%20Caicos%22%2C%22TV%22%3A%22Tuvalu%22%2C%22AU%22%3A%22%5Cu00dac%22%2C%22UG%22%3A%22Uganda%22%2C%22UA%22%3A%22Ukraine%22%2C%22UY%22%3A%22Uruguay%22%2C%22UZ%22%3A%22Uzbekistan%22%2C%22VU%22%3A%22Vanuatu%22%2C%22VA%22%3A%22Vatican%22%2C%22VE%22%3A%22Venezuela%22%2C%22VN%22%3A%22Vi%5Cu1ec7t%20Nam%22%2C%22VG%22%3A%22Virgin%20Islands%20%28British%29%22%2C%22VI%22%3A%22Virgin%20Islands%20%28M%5Cu1ef9%29%22%2C%22WF%22%3A%22Wallis%20v%5Cu00e0%20Futuna%22%2C%22EH%22%3A%22Western%20Sahara%22%2C%22IT%22%3A%22%5Cu00dd%22%2C%22YE%22%3A%22Yemen%22%2C%22ZM%22%3A%22Zambia%22%2C%22ZW%22%3A%22Zimbabwe%22%7D%2C%22currency%22%3A%7B%22code%22%3A%22VND%22%2C%22precision%22%3A0%2C%22symbol%22%3A%22%5Cu20ab%22%2C%22symbolPosition%22%3A%22right_space%22%2C%22decimalSeparator%22%3A%22%2C%22%2C%22thousandSeparator%22%3A%22.%22%2C%22priceFormat%22%3A%22%252%24s%5Cu00a0%251%24s%22%7D%2C%22currentUserId%22%3A0%2C%22currentUserIsAdmin%22%3Afalse%2C%22dateFormat%22%3A%22j%20F%2C%20Y%22%2C%22homeUrl%22%3A%22https%3A%5C%2F%5C%2Fmixuediemdien.com%5C%2F%22%2C%22locale%22%3A%7B%22siteLocale%22%3A%22vi%22%2C%22userLocale%22%3A%22vi%22%2C%22weekdaysShort%22%3A%5B%22CN%22%2C%22T2%22%2C%22T3%22%2C%22T4%22%2C%22T5%22%2C%22T6%22%2C%22T7%22%5D%7D%2C%22dashboardUrl%22%3A%22https%3A%5C%2F%5C%2Fmixuediemdien.com%5C%2Fmy-account%5C%2F%22%2C%22orderStatuses%22%3A%7B%22pending%22%3A%22Ch%5Cu1edd%20thanh%20to%5Cu00e1n%22%2C%22processing%22%3A%22%5Cu0110ang%20x%5Cu1eed%20l%5Cu00fd%22%2C%22on-hold%22%3A%22T%5Cu1ea1m%20gi%5Cu1eef%22%2C%22completed%22%3A%22%5Cu0110%5Cu00e3%20ho%5Cu00e0n%20th%5Cu00e0nh%22%2C%22cancelled%22%3A%22%5Cu0110%5Cu00e3%20h%5Cu1ee7y%22%2C%22refunded%22%3A%22%5Cu0110%5Cu00e3%20ho%5Cu00e0n%20l%5Cu1ea1i%20ti%5Cu1ec1n%22%2C%22failed%22%3A%22Th%5Cu1ea5t%20b%5Cu1ea1i%22%2C%22checkout-draft%22%3A%22Draft%22%7D%2C%22placeholderImgSrc%22%3A%22https%3A%5C%2F%5C%2Fmixuediemdien.com%5C%2Fwp-content%5C%2Fuploads%5C%2Fwoocommerce-placeholder-300x300.png%22%2C%22productsSettings%22%3A%7B%22cartRedirectAfterAdd%22%3Afalse%7D%2C%22siteTitle%22%3A%22Mixue%20Di%5Cu00eam%20%5Cu0110i%5Cu1ec1n%20M%5Cu1edbi%22%2C%22storePages%22%3A%7B%22myaccount%22%3A%7B%22id%22%3A11%2C%22title%22%3A%22My%20account%22%2C%22permalink%22%3A%22https%3A%5C%2F%5C%2Fmixuediemdien.com%5C%2Fmy-account%5C%2F%22%7D%2C%22shop%22%3A%7B%22id%22%3A8%2C%22title%22%3A%22Menu%22%2C%22permalink%22%3A%22https%3A%5C%2F%5C%2Fmixuediemdien.com%5C%2Fmenu%5C%2F%22%7D%2C%22cart%22%3A%7B%22id%22%3A9%2C%22title%22%3A%22Cart%22%2C%22permalink%22%3A%22https%3A%5C%2F%5C%2Fmixuediemdien.com%5C%2Fcart%5C%2F%22%7D%2C%22checkout%22%3A%7B%22id%22%3A10%2C%22title%22%3A%22Checkout%22%2C%22permalink%22%3A%22https%3A%5C%2F%5C%2Fmixuediemdien.com%5C%2Fcheckout%5C%2F%22%7D%2C%22privacy%22%3A%7B%22id%22%3A3%2C%22title%22%3A%22Ch%5Cu00ednh%20s%5Cu00e1ch%20b%5Cu1ea3o%20m%5Cu1eadt%22%2C%22permalink%22%3A%22https%3A%5C%2F%5C%2Fmixuediemdien.com%5C%2Fprivacy-policy%5C%2F%22%7D%2C%22terms%22%3A%7B%22id%22%3A0%2C%22title%22%3A%22%22%2C%22permalink%22%3Afalse%7D%7D%2C%22wcAssetUrl%22%3A%22https%3A%5C%2F%5C%2Fmixuediemdien.com%5C%2Fwp-content%5C%2Fplugins%5C%2Fwoocommerce%5C%2Fassets%5C%2F%22%2C%22wcVersion%22%3A%228.5.1%22%2C%22wpLoginUrl%22%3A%22https%3A%5C%2F%5C%2Fmixuediemdien.com%5C%2Fwp-login.php%22%2C%22wpVersion%22%3A%226.4.2%22%2C%22collectableMethodIds%22%3A%5B%5D%2C%22admin%22%3A%7B%22wccomHelper%22%3A%7B%22isConnected%22%3Afalse%2C%22connectURL%22%3A%22https%3A%5C%2F%5C%2Fmixuediemdien.com%5C%2Fwp-admin%5C%2Fadmin.php%3Fpage%3Dwc-addons%26section%3Dhelper%26wc-helper-connect%3D1%26wc-helper-nonce%3Db318e69120%22%2C%22userEmail%22%3A%22%22%2C%22userAvatar%22%3A%22https%3A%5C%2F%5C%2Fsecure.gravatar.com%5C%2Favatar%5C%2F%3Fs%3D48%26d%3Didenticon%26r%3Dg%22%2C%22storeCountry%22%3A%22VN%22%2C%22inAppPurchaseURLParams%22%3A%7B%22wccom-site%22%3A%22https%3A%5C%2F%5C%2Fmixuediemdien.com%22%2C%22wccom-back%22%3A%22%252F%22%2C%22wccom-woo-version%22%3A%228.5.1%22%2C%22wccom-connect-nonce%22%3A%22b318e69120%22%7D%7D%2C%22_feature_nonce%22%3A%228f200b205e%22%2C%22alertCount%22%3A%221%22%2C%22visibleTaskListIds%22%3A%5B%22setup%22%2C%22extended%22%5D%7D%7D'));
  	/* ]]> */
  </script>
  <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/client/blocks/wc-settings8edc.js?ver=07c2f0675ddd247d2325" id="wc-settings-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/data-controls.min0740.js?ver=fe4ccc8a1782ea8e2cb1" id="wp-data-controls-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/html-entities.min68f0.js?ver=36a4a255da7dd2e1bf8e" id="wp-html-entities-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/notices.min380b.js?ver=38e88f4b627cf873edd0" id="wp-notices-js"></script>
  <script type="text/javascript" id="wc-blocks-middleware-js-before">
  	/* <![CDATA[ */
  	var wcBlocksMiddlewareConfig = {
  		storeApiNonce: '42959deb2a',
  		wcStoreApiNonceTimestamp: '1705481249'
  	};

  	/* ]]> */
  </script>
  <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks-middlewarece2b.js?ver=ca04183222edaf8a26be" id="wc-blocks-middleware-js"></script>
  <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks-data997f.js?ver=c96aba0171b12e03b8a6" id="wc-blocks-data-store-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/dom-ready.minded6.js?ver=392bdd43726760d1f3ca" id="wp-dom-ready-js"></script>
  <script type="text/javascript" id="wp-a11y-js-translations">
  	/* <![CDATA[ */
  	(function(domain, translations) {
  		var localeData = translations.locale_data[domain] || translations.locale_data.messages;
  		localeData[""].domain = domain;
  		wp.i18n.setLocaleData(localeData, domain);
  	})("default", {
  		"translation-revision-date": "2023-07-15 15:30:50+0000",
  		"generator": "GlotPress\/4.0.0-alpha.4",
  		"domain": "messages",
  		"locale_data": {
  			"messages": {
  				"": {
  					"domain": "messages",
  					"plural-forms": "nplurals=1; plural=0;",
  					"lang": "vi_VN"
  				},
  				"Notifications": ["Th\u00f4ng b\u00e1o"]
  			}
  		},
  		"comment": {
  			"reference": "wp-includes\/js\/dist\/a11y.js"
  		}
  	});
  	/* ]]> */
  </script>
  <script type="text/javascript" src="wp-includes/js/dist/a11y.min866e.js?ver=7032343a947cfccf5608" id="wp-a11y-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/primitives.minfde7.js?ver=6984e6eb5d6157c4fe44" id="wp-primitives-js"></script>
  <script type="text/javascript" src="wp-includes/js/dist/warning.minb0b0.js?ver=122829a085511691f14d" id="wp-warning-js"></script>
  <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/client/blocks/blocks-componentsf69d.js?ver=b165bb2bd213326d7f31" id="wc-blocks-components-js"></script>
  <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/client/blocks/blocks-checkout297b.js?ver=9f469ef17beaf7c51576" id="wc-blocks-checkout-js"></script>
  <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/frontend/order-attribution-blocks.min2ff6.js?ver=8.5.1" id="wc-order-attribution-blocks-js"></script>
  <script type="text/javascript" src="wp-content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-search2916.js?ver=3.13.1" id="flatsome-live-search-js"></script>
  <script type="text/javascript" src="wp-includes/js/hoverIntent.min3e5a.js?ver=1.10.2" id="hoverIntent-js"></script>
  <script type="text/javascript" id="flatsome-js-js-extra">
  	/* <![CDATA[ */
  	var flatsomeVars = {
  		"ajaxurl": "https:\/\/mixuediemdien.com\/wp-admin\/admin-ajax.php",
  		"rtl": "",
  		"sticky_height": "70",
  		"lightbox": {
  			"close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
  			"close_btn_inside": false
  		},
  		"user": {
  			"can_edit_pages": false
  		},
  		"i18n": {
  			"mainMenu": "Main Menu"
  		},
  		"options": {
  			"cookie_notice_version": "1"
  		}
  	};
  	/* ]]> */
  </script>
  <script type="text/javascript" src="wp-content/themes/flatsome/assets/js/flatsome2916.js?ver=3.13.1" id="flatsome-js-js"></script>
  <script type="text/javascript" src="wp-content/themes/flatsome/assets/libs/infinite-scroll.pkgd.min459e.js?ver=3.0.4" id="flatsome-infinite-scroll-js-js"></script>
  <script type="text/javascript" id="flatsome-infinite-scroll-js-extra">
  	/* <![CDATA[ */
  	var flatsome_infinite_scroll = {
  		"scroll_threshold": "400",
  		"fade_in_duration": "300",
  		"type": "spinner",
  		"list_style": "grid",
  		"history": "push"
  	};
  	/* ]]> */
  </script>
  <script type="text/javascript" src="wp-content/themes/flatsome/inc/extensions/flatsome-infinite-scroll/flatsome-infinite-scroll7ef2.js?ver=1.5" id="flatsome-infinite-scroll-js"></script>
  <script type="text/javascript" src="wp-content/themes/flatsome/assets/js/woocommerce2916.js?ver=3.13.1" id="flatsome-theme-woocommerce-js-js"></script>
  <script type="text/javascript" src="wp-includes/js/underscore.mind584.js?ver=1.13.4" id="underscore-js"></script>
  <script type="text/javascript" id="wp-util-js-extra">
  	/* <![CDATA[ */
  	var _wpUtilSettings = {
  		"ajax": {
  			"url": "\/wp-admin\/admin-ajax.php"
  		}
  	};
  	/* ]]> */
  </script>
  <script type="text/javascript" src="wp-includes/js/wp-util.min1e39.js?ver=6.4.2" id="wp-util-js"></script>
  <script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
  	/* <![CDATA[ */
  	var wc_add_to_cart_variation_params = {
  		"wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
  		"i18n_no_matching_variations_text": "R\u1ea5t ti\u1ebfc, kh\u00f4ng c\u00f3 s\u1ea3n ph\u1ea9m n\u00e0o ph\u00f9 h\u1ee3p v\u1edbi l\u1ef1a ch\u1ecdn c\u1ee7a b\u1ea1n. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c.",
  		"i18n_make_a_selection_text": "Ch\u1ecdn c\u00e1c t\u00f9y ch\u1ecdn cho s\u1ea3n ph\u1ea9m tr\u01b0\u1edbc khi cho s\u1ea3n ph\u1ea9m v\u00e0o gi\u1ecf h\u00e0ng c\u1ee7a b\u1ea1n.",
  		"i18n_unavailable_text": "R\u1ea5t ti\u1ebfc, s\u1ea3n ph\u1ea9m n\u00e0y hi\u1ec7n kh\u00f4ng t\u1ed3n t\u1ea1i. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c."
  	};
  	/* ]]> */
  </script>
  <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min2ff6.js?ver=8.5.1" id="wc-add-to-cart-variation-js" defer="defer" data-wp-strategy="defer"></script>
  <script type="text/javascript" src="wp-content/plugins/float-menu/public/assets/js/velocity.min3c21.js?ver=5.1.1" id="velocity-js"></script>
  <script type="text/javascript" id="float-menu-js-before">
  	/* <![CDATA[ */
  	var FloatMenu_1 = {
  		"selector": ".float-menu-1",
  		"position": ["right", "center"],
  		"offset": [0, 0],
  		"shape": "square",
  		"sideSpace": true,
  		"buttonSpace": true,
  		"labelSpace": true,
  		"labelConnected": true,
  		"labelEffect": "fade",
  		"labelAnim": [400, "easeOutQuad"],
  		"color": "default",
  		"overColor": "default",
  		"labelsOn": true,
  		"mobileEnable": true,
  		"mobileScreen": 768
  	}
  	/* ]]> */
  </script>
  <script type="text/javascript" src="wp-content/plugins/float-menu/public/assets/js/floatMenu-min3c21.js?ver=5.1.1" id="float-menu-js"></script>
  <script type="text/javascript" id="zxcvbn-async-js-extra">
  	/* <![CDATA[ */
  	var _zxcvbnSettings = {
  		"src": "https:\/\/mixuediemdien.com\/wp-includes\/js\/zxcvbn.min.js"
  	};
  	/* ]]> */
  </script>
  <script type="text/javascript" src="wp-includes/js/zxcvbn-async.min5152.js?ver=1.0" id="zxcvbn-async-js"></script>
  <script type="text/javascript" id="password-strength-meter-js-extra">
  	/* <![CDATA[ */
  	var pwsL10n = {
  		"unknown": "M\u1eadt kh\u1ea9u m\u1ea1nh kh\u00f4ng x\u00e1c \u0111\u1ecbnh",
  		"short": "R\u1ea5t y\u1ebfu",
  		"bad": "Y\u1ebfu",
  		"good": "Trung b\u00ecnh",
  		"strong": "M\u1ea1nh",
  		"mismatch": "M\u1eadt kh\u1ea9u kh\u00f4ng kh\u1edbp"
  	};
  	/* ]]> */
  </script>
  <script type="text/javascript" id="password-strength-meter-js-translations">
  	/* <![CDATA[ */
  	(function(domain, translations) {
  		var localeData = translations.locale_data[domain] || translations.locale_data.messages;
  		localeData[""].domain = domain;
  		wp.i18n.setLocaleData(localeData, domain);
  	})("default", {
  		"translation-revision-date": "2023-07-15 15:29:09+0000",
  		"generator": "GlotPress\/4.0.0-alpha.4",
  		"domain": "messages",
  		"locale_data": {
  			"messages": {
  				"": {
  					"domain": "messages",
  					"plural-forms": "nplurals=1; plural=0;",
  					"lang": "vi_VN"
  				},
  				"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.": ["%1$s \u0111\u00e3 ng\u1eebng ho\u1ea1t \u0111\u1ed9ng t\u1eeb phi\u00ean b\u1ea3n %2$s! S\u1eed d\u1ee5ng thay th\u1ebf b\u1eb1ng %3$s."]
  			}
  		},
  		"comment": {
  			"reference": "wp-admin\/js\/password-strength-meter.js"
  		}
  	});
  	/* ]]> */
  </script>
  <script type="text/javascript" src="wp-admin/js/password-strength-meter.min1e39.js?ver=6.4.2" id="password-strength-meter-js"></script>
  <script type="text/javascript" id="wc-password-strength-meter-js-extra">
  	/* <![CDATA[ */
  	var wc_password_strength_meter_params = {
  		"min_password_strength": "3",
  		"stop_checkout": "",
  		"i18n_password_error": "Vui l\u00f2ng nh\u1eadp m\u1eadt kh\u1ea9u kh\u00f3 h\u01a1n.",
  		"i18n_password_hint": "G\u1ee3i \u00fd: M\u1eadt kh\u1ea9u ph\u1ea3i c\u00f3 \u00edt nh\u1ea5t 12 k\u00fd t\u1ef1. \u0110\u1ec3 n\u00e2ng cao \u0111\u1ed9 b\u1ea3o m\u1eadt, s\u1eed d\u1ee5ng ch\u1eef in hoa, in th\u01b0\u1eddng, ch\u1eef s\u1ed1 v\u00e0 c\u00e1c k\u00fd t\u1ef1 \u0111\u1eb7c bi\u1ec7t nh\u01b0 ! \" ? $ % ^ & )."
  	};
  	/* ]]> */
  </script>
  <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min2ff6.js?ver=8.5.1" id="wc-password-strength-meter-js" defer="defer" data-wp-strategy="defer"></script>

  </body>

  <!-- Mirrored from mixuediemdien.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 08:48:32 GMT -->

  </html>