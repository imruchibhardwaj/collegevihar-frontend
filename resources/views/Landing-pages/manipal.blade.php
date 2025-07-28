
<!doctype html>
<html lang="en-GB">

<head><meta charset="UTF-8"><script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script>(()=>{class RocketLazyLoadScripts{constructor(){this.v="2.0.3",this.userEvents=["keydown","keyup","mousedown","mouseup","mousemove","mouseover","mouseenter","mouseout","mouseleave","touchmove","touchstart","touchend","touchcancel","wheel","click","dblclick","input","visibilitychange"],this.attributeEvents=["onblur","onclick","oncontextmenu","ondblclick","onfocus","onmousedown","onmouseenter","onmouseleave","onmousemove","onmouseout","onmouseover","onmouseup","onmousewheel","onscroll","onsubmit"]}async t(){this.i(),this.o(),/iP(ad|hone)/.test(navigator.userAgent)&&this.h(),this.u(),this.l(this),this.m(),this.k(this),this.p(this),this._(),await Promise.all([this.R(),this.L()]),this.lastBreath=Date.now(),this.S(this),this.P(),this.D(),this.O(),this.M(),await this.C(this.delayedScripts.normal),await this.C(this.delayedScripts.defer),await this.C(this.delayedScripts.async),this.F("domReady"),await this.T(),await this.j(),await this.I(),this.F("windowLoad"),await this.A(),window.dispatchEvent(new Event("rocket-allScriptsLoaded")),this.everythingLoaded=!0,this.lastTouchEnd&&await new Promise((t=>setTimeout(t,500-Date.now()+this.lastTouchEnd))),this.H(),this.F("all"),this.U(),this.W()}i(){this.CSPIssue=sessionStorage.getItem("rocketCSPIssue"),document.addEventListener("securitypolicyviolation",(t=>{this.CSPIssue||"script-src-elem"!==t.violatedDirective||"data"!==t.blockedURI||(this.CSPIssue=!0,sessionStorage.setItem("rocketCSPIssue",!0))}),{isRocket:!0})}o(){window.addEventListener("pageshow",(t=>{this.persisted=t.persisted,this.realWindowLoadedFired=!0}),{isRocket:!0}),window.addEventListener("pagehide",(()=>{this.onFirstUserAction=null}),{isRocket:!0})}h(){let t;function e(e){t=e}window.addEventListener("touchstart",e,{isRocket:!0}),window.addEventListener("touchend",(function i(o){Math.abs(o.changedTouches[0].pageX-t.changedTouches[0].pageX)<10&&Math.abs(o.changedTouches[0].pageY-t.changedTouches[0].pageY)<10&&o.timeStamp-t.timeStamp<200&&(o.target.dispatchEvent(new PointerEvent("click",{target:o.target,bubbles:!0,cancelable:!0,detail:1})),event.preventDefault(),window.removeEventListener("touchstart",e,{isRocket:!0}),window.removeEventListener("touchend",i,{isRocket:!0}))}),{isRocket:!0})}q(t){this.userActionTriggered||("mousemove"!==t.type||this.firstMousemoveIgnored?"keyup"===t.type||"mouseover"===t.type||"mouseout"===t.type||(this.userActionTriggered=!0,this.onFirstUserAction&&this.onFirstUserAction()):this.firstMousemoveIgnored=!0),"click"===t.type&&t.preventDefault(),this.savedUserEvents.length>0&&(t.stopPropagation(),t.stopImmediatePropagation()),"touchstart"===this.lastEvent&&"touchend"===t.type&&(this.lastTouchEnd=Date.now()),"click"===t.type&&(this.lastTouchEnd=0),this.lastEvent=t.type,this.savedUserEvents.push(t)}u(){this.savedUserEvents=[],this.userEventHandler=this.q.bind(this),this.userEvents.forEach((t=>window.addEventListener(t,this.userEventHandler,{passive:!1,isRocket:!0})))}U(){this.userEvents.forEach((t=>window.removeEventListener(t,this.userEventHandler,{passive:!1,isRocket:!0}))),this.savedUserEvents.forEach((t=>{t.target.dispatchEvent(new window[t.constructor.name](t.type,t))}))}m(){this.eventsMutationObserver=new MutationObserver((t=>{const e="return false";for(const i of t){if("attributes"===i.type){const t=i.target.getAttribute(i.attributeName);t&&t!==e&&(i.target.setAttribute("data-rocket-"+i.attributeName,t),i.target["rocket"+i.attributeName]=new Function("event",t),i.target.setAttribute(i.attributeName,e))}"childList"===i.type&&i.addedNodes.forEach((t=>{if(t.nodeType===Node.ELEMENT_NODE)for(const i of t.attributes)this.attributeEvents.includes(i.name)&&i.value&&""!==i.value&&(t.setAttribute("data-rocket-"+i.name,i.value),t["rocket"+i.name]=new Function("event",i.value),t.setAttribute(i.name,e))}))}})),this.eventsMutationObserver.observe(document,{subtree:!0,childList:!0,attributeFilter:this.attributeEvents})}H(){this.eventsMutationObserver.disconnect(),this.attributeEvents.forEach((t=>{document.querySelectorAll("[data-rocket-"+t+"]").forEach((e=>{e.setAttribute(t,e.getAttribute("data-rocket-"+t)),e.removeAttribute("data-rocket-"+t)}))}))}k(t){Object.defineProperty(HTMLElement.prototype,"onclick",{get(){return this.rocketonclick||null},set(e){this.rocketonclick=e,this.setAttribute(t.everythingLoaded?"onclick":"data-rocket-onclick","this.rocketonclick(event)")}})}S(t){function e(e,i){let o=e[i];e[i]=null,Object.defineProperty(e,i,{get:()=>o,set(s){t.everythingLoaded?o=s:e["rocket"+i]=o=s}})}e(document,"onreadystatechange"),e(window,"onload"),e(window,"onpageshow");try{Object.defineProperty(document,"readyState",{get:()=>t.rocketReadyState,set(e){t.rocketReadyState=e},configurable:!0}),document.readyState="loading"}catch(t){console.log("WPRocket DJE readyState conflict, bypassing")}}l(t){this.originalAddEventListener=EventTarget.prototype.addEventListener,this.originalRemoveEventListener=EventTarget.prototype.removeEventListener,this.savedEventListeners=[],EventTarget.prototype.addEventListener=function(e,i,o){o&&o.isRocket||!t.B(e,this)&&!t.userEvents.includes(e)||t.B(e,this)&&!t.userActionTriggered||e.startsWith("rocket-")||t.everythingLoaded?t.originalAddEventListener.call(this,e,i,o):t.savedEventListeners.push({target:this,remove:!1,type:e,func:i,options:o})},EventTarget.prototype.removeEventListener=function(e,i,o){o&&o.isRocket||!t.B(e,this)&&!t.userEvents.includes(e)||t.B(e,this)&&!t.userActionTriggered||e.startsWith("rocket-")||t.everythingLoaded?t.originalRemoveEventListener.call(this,e,i,o):t.savedEventListeners.push({target:this,remove:!0,type:e,func:i,options:o})}}F(t){"all"===t&&(EventTarget.prototype.addEventListener=this.originalAddEventListener,EventTarget.prototype.removeEventListener=this.originalRemoveEventListener),this.savedEventListeners=this.savedEventListeners.filter((e=>{let i=e.type,o=e.target||window;return"domReady"===t&&"DOMContentLoaded"!==i&&"readystatechange"!==i||("windowLoad"===t&&"load"!==i&&"readystatechange"!==i&&"pageshow"!==i||(this.B(i,o)&&(i="rocket-"+i),e.remove?o.removeEventListener(i,e.func,e.options):o.addEventListener(i,e.func,e.options),!1))}))}p(t){let e;function i(e){return t.everythingLoaded?e:e.split(" ").map((t=>"load"===t||t.startsWith("load.")?"rocket-jquery-load":t)).join(" ")}function o(o){function s(e){const s=o.fn[e];o.fn[e]=o.fn.init.prototype[e]=function(){return this[0]===window&&t.userActionTriggered&&("string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=i(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{const e=arguments[0][t];delete arguments[0][t],arguments[0][i(t)]=e}))),s.apply(this,arguments),this}}if(o&&o.fn&&!t.allJQueries.includes(o)){const e={DOMContentLoaded:[],"rocket-DOMContentLoaded":[]};for(const t in e)document.addEventListener(t,(()=>{e[t].forEach((t=>t()))}),{isRocket:!0});o.fn.ready=o.fn.init.prototype.ready=function(i){function s(){parseInt(o.fn.jquery)>2?setTimeout((()=>i.bind(document)(o))):i.bind(document)(o)}return t.realDomReadyFired?!t.userActionTriggered||t.fauxDomReadyFired?s():e["rocket-DOMContentLoaded"].push(s):e.DOMContentLoaded.push(s),o([])},s("on"),s("one"),s("off"),t.allJQueries.push(o)}e=o}t.allJQueries=[],o(window.jQuery),Object.defineProperty(window,"jQuery",{get:()=>e,set(t){o(t)}})}P(){const t=new Map;document.write=document.writeln=function(e){const i=document.currentScript,o=document.createRange(),s=i.parentElement;let n=t.get(i);void 0===n&&(n=i.nextSibling,t.set(i,n));const c=document.createDocumentFragment();o.setStart(c,0),c.appendChild(o.createContextualFragment(e)),s.insertBefore(c,n)}}async R(){return new Promise((t=>{this.userActionTriggered?t():this.onFirstUserAction=t}))}async L(){return new Promise((t=>{document.addEventListener("DOMContentLoaded",(()=>{this.realDomReadyFired=!0,t()}),{isRocket:!0})}))}async I(){return this.realWindowLoadedFired?Promise.resolve():new Promise((t=>{window.addEventListener("load",t,{isRocket:!0})}))}M(){this.pendingScripts=[];this.scriptsMutationObserver=new MutationObserver((t=>{for(const e of t)e.addedNodes.forEach((t=>{"SCRIPT"!==t.tagName||t.noModule||t.isWPRocket||this.pendingScripts.push({script:t,promise:new Promise((e=>{const i=()=>{const i=this.pendingScripts.findIndex((e=>e.script===t));i>=0&&this.pendingScripts.splice(i,1),e()};t.addEventListener("load",i,{isRocket:!0}),t.addEventListener("error",i,{isRocket:!0}),setTimeout(i,1e3)}))})}))})),this.scriptsMutationObserver.observe(document,{childList:!0,subtree:!0})}async j(){await this.J(),this.pendingScripts.length?(await this.pendingScripts[0].promise,await this.j()):this.scriptsMutationObserver.disconnect()}D(){this.delayedScripts={normal:[],async:[],defer:[]},document.querySelectorAll("script[type$=rocketlazyloadscript]").forEach((t=>{t.hasAttribute("data-rocket-src")?t.hasAttribute("async")&&!1!==t.async?this.delayedScripts.async.push(t):t.hasAttribute("defer")&&!1!==t.defer||"module"===t.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(t):this.delayedScripts.normal.push(t):this.delayedScripts.normal.push(t)}))}async _(){await this.L();let t=[];document.querySelectorAll("script[type$=rocketlazyloadscript][data-rocket-src]").forEach((e=>{let i=e.getAttribute("data-rocket-src");if(i&&!i.startsWith("data:")){i.startsWith("//")&&(i=location.protocol+i);try{const o=new URL(i).origin;o!==location.origin&&t.push({src:o,crossOrigin:e.crossOrigin||"module"===e.getAttribute("data-rocket-type")})}catch(t){}}})),t=[...new Map(t.map((t=>[JSON.stringify(t),t]))).values()],this.N(t,"preconnect")}async $(t){if(await this.G(),!0!==t.noModule||!("noModule"in HTMLScriptElement.prototype))return new Promise((e=>{let i;function o(){(i||t).setAttribute("data-rocket-status","executed"),e()}try{if(navigator.userAgent.includes("Firefox/")||""===navigator.vendor||this.CSPIssue)i=document.createElement("script"),[...t.attributes].forEach((t=>{let e=t.nodeName;"type"!==e&&("data-rocket-type"===e&&(e="type"),"data-rocket-src"===e&&(e="src"),i.setAttribute(e,t.nodeValue))})),t.text&&(i.text=t.text),t.nonce&&(i.nonce=t.nonce),i.hasAttribute("src")?(i.addEventListener("load",o,{isRocket:!0}),i.addEventListener("error",(()=>{i.setAttribute("data-rocket-status","failed-network"),e()}),{isRocket:!0}),setTimeout((()=>{i.isConnected||e()}),1)):(i.text=t.text,o()),i.isWPRocket=!0,t.parentNode.replaceChild(i,t);else{const i=t.getAttribute("data-rocket-type"),s=t.getAttribute("data-rocket-src");i?(t.type=i,t.removeAttribute("data-rocket-type")):t.removeAttribute("type"),t.addEventListener("load",o,{isRocket:!0}),t.addEventListener("error",(i=>{this.CSPIssue&&i.target.src.startsWith("data:")?(console.log("WPRocket: CSP fallback activated"),t.removeAttribute("src"),this.$(t).then(e)):(t.setAttribute("data-rocket-status","failed-network"),e())}),{isRocket:!0}),s?(t.fetchPriority="high",t.removeAttribute("data-rocket-src"),t.src=s):t.src="data:text/javascript;base64,"+window.btoa(unescape(encodeURIComponent(t.text)))}}catch(i){t.setAttribute("data-rocket-status","failed-transform"),e()}}));t.setAttribute("data-rocket-status","skipped")}async C(t){const e=t.shift();return e?(e.isConnected&&await this.$(e),this.C(t)):Promise.resolve()}O(){this.N([...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async],"preload")}N(t,e){this.trash=this.trash||[];let i=!0;var o=document.createDocumentFragment();t.forEach((t=>{const s=t.getAttribute&&t.getAttribute("data-rocket-src")||t.src;if(s&&!s.startsWith("data:")){const n=document.createElement("link");n.href=s,n.rel=e,"preconnect"!==e&&(n.as="script",n.fetchPriority=i?"high":"low"),t.getAttribute&&"module"===t.getAttribute("data-rocket-type")&&(n.crossOrigin=!0),t.crossOrigin&&(n.crossOrigin=t.crossOrigin),t.integrity&&(n.integrity=t.integrity),t.nonce&&(n.nonce=t.nonce),o.appendChild(n),this.trash.push(n),i=!1}})),document.head.appendChild(o)}W(){this.trash.forEach((t=>t.remove()))}async T(){try{document.readyState="interactive"}catch(t){}this.fauxDomReadyFired=!0;try{await this.G(),document.dispatchEvent(new Event("rocket-readystatechange")),await this.G(),document.rocketonreadystatechange&&document.rocketonreadystatechange(),await this.G(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this.G(),window.dispatchEvent(new Event("rocket-DOMContentLoaded"))}catch(t){console.error(t)}}async A(){try{document.readyState="complete"}catch(t){}try{await this.G(),document.dispatchEvent(new Event("rocket-readystatechange")),await this.G(),document.rocketonreadystatechange&&document.rocketonreadystatechange(),await this.G(),window.dispatchEvent(new Event("rocket-load")),await this.G(),window.rocketonload&&window.rocketonload(),await this.G(),this.allJQueries.forEach((t=>t(window).trigger("rocket-jquery-load"))),await this.G();const t=new Event("rocket-pageshow");t.persisted=this.persisted,window.dispatchEvent(t),await this.G(),window.rocketonpageshow&&window.rocketonpageshow({persisted:this.persisted})}catch(t){console.error(t)}}async G(){Date.now()-this.lastBreath>45&&(await this.J(),this.lastBreath=Date.now())}async J(){return document.hidden?new Promise((t=>setTimeout(t))):new Promise((t=>requestAnimationFrame(t)))}B(t,e){return e===document&&"readystatechange"===t||(e===document&&"DOMContentLoaded"===t||(e===window&&"DOMContentLoaded"===t||(e===window&&"load"===t||e===window&&"pageshow"===t)))}static run(){(new RocketLazyLoadScripts).t()}}RocketLazyLoadScripts.run()})();</script>
  <meta name="referrer" content="no-referrer-when-downgrade">
  
  <meta name="MobileOptimized" content="320">
  <meta http-equiv="X-UA-Compatible" content="IE=9">
  <meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5' name='viewport' />
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <!-- VWO Async SmartCode -->
  <script type='text/javascript' id='vwoCode'>window.addEventListener('DOMContentLoaded', function() {
   window._vwo_code = window._vwo_code || (function() {
     var account_id = 556532,
       version = 1.5,
       settings_tolerance = 2000,
       library_tolerance = 2500,
       use_existing_jquery = false,
       is_spa = 1,
       hide_element = 'body',
       hide_element_style = 'opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important',
       /* DO NOT EDIT BELOW THIS LINE */
       f = false,
       d = document,
       vwoCodeEl = d.querySelector('#vwoCode'),
       code = {
         use_existing_jquery: function() {
           return use_existing_jquery
         },
         library_tolerance: function() {
           return library_tolerance
         },
         hide_element_style: function() {
           return '{' + hide_element_style + '}'
         },
         finish: function() {
           if (!f) {
             f = true;
             var e = d.getElementById('_vis_opt_path_hides');
             if (e) e.parentNode.removeChild(e)
           }
         },
         finished: function() {
           return f
         },
         load: function(e) {
           var t = d.createElement('script');
           t.fetchPriority = 'high';
           t.src = e;
           t.type = 'text/javascript';
           t.innerText;
           t.onerror = function() {
             _vwo_code.finish()
           };
           d.getElementsByTagName('head')[0].appendChild(t)
         },
         getVersion: function() {
           return version
         },
         getMatchedCookies: function(e) {
           var t = [];
           if (document.cookie) {
             t = document.cookie.match(e) || []
           }
           return t
         },
         getCombinationCookie: function() {
           var e = code.getMatchedCookies(/(?:^|;)\s?(_vis_opt_exp_\d+_combi=[^;$]*)/gi);
           e = e.map(function(e) {
             try {
               var t = decodeURIComponent(e);
               if (!/_vis_opt_exp_\d+_combi=(?:\d+,?)+\s*$/.test(t)) {
                 return ''
               }
               return t
             } catch (e) {
               return ''
             }
           });
           var i = [];
           e.forEach(function(e) {
             var t = e.match(/([\d,]+)/g);
             t && i.push(t.join('-'))
           });
           return i.join('|')
         },
         init: function() {
           if (d.URL.indexOf('__vwo_disable__') > -1) return;
           window.settings_timer = setTimeout(function() {
             _vwo_code.finish()
           }, settings_tolerance);
           var e = d.createElement('style'),
             t = hide_element ? hide_element + '{' + hide_element_style + '}' : '',
             i = d.getElementsByTagName('head')[0];
           e.setAttribute('id', '_vis_opt_path_hides');
           vwoCodeEl && e.setAttribute('nonce', vwoCodeEl.nonce);
           e.setAttribute('type', 'text/css');
           if (e.styleSheet) e.styleSheet.cssText = t;
           else e.appendChild(d.createTextNode(t));
           i.appendChild(e);
           var n = this.getCombinationCookie();
           this.load('https://dev.visualwebsiteoptimizer.com/j.php?a=' + account_id + '&u=' + encodeURIComponent(d.URL) + '&f=' + +is_spa + '&vn=' + version + (n ? '&c=' + n : ''));
           return settings_timer
         }
       };
     window._vwo_settings_timer = code.init();
     return code;
   }());
});</script>
  <!----- Google Analytics ----->
  <script type="rocketlazyloadscript" data-rocket-type='text/javascript'>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-N6G2VZZ');
  </script>
  <!----- CSS ----->
  <link data-minify="1" rel="stylesheet" type="text/css" href="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/css/style.css?ver=1753685605">

  <meta name="msvalidate.01" content="80A0910CFF625FE76587C8FBC1328BC3" />
  <meta name="google-site-verification" content="vrgrDxc1LQ3oXtWOvcRyAbI7i5K9bcpvaBkLYO9YMIo" />

  <!----- Page Shcema ----->
  
      <link rel="preload" as="image" href="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/homepage-banner/home-banner.webp" fetchpriority="high" type="image/webp">
      
      <!--- Hreflang tags --->
    <link rel="alternate" hreflang="en-IN" href="https://www.onlinemanipal.com" />
    <link rel="alternate" hreflang="en-CA" href="https://www.onlinemanipal.com/us-ca" />
    <link rel="alternate" hreflang="en-US" href="https://www.onlinemanipal.com/us-ca" />
    <link rel="alternate" hreflang="en-AE" href="https://www.onlinemanipal.com/ae" />
    <link rel="alternate" hreflang="en-BH" href="https://www.onlinemanipal.com/ae" />
    <link rel="alternate" hreflang="en-KW" href="https://www.onlinemanipal.com/ae" />
    <link rel="alternate" hreflang="en-OM" href="https://www.onlinemanipal.com/ae" />
    <link rel="alternate" hreflang="en-SA" href="https://www.onlinemanipal.com/ae" />
    <link rel="alternate" hreflang="en-QA" href="https://www.onlinemanipal.com/ae" />
    <link rel="alternate" hreflang="en-NP" href="https://www.onlinemanipal.com/np" />
    <link rel="alternate" hreflang="en-ID" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-PH" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-YE" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-VN" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-SY" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-MM" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-LA" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-IQ" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-KH" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-GB" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-SG" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-DE" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-MY" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-PK" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-AU" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-TH" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-CN" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-JP" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-HK" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-FR" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-MV" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-AF" href="https://www.onlinemanipal.com/global" />
    <link rel="alternate" hreflang="en-MW" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-NG" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-ET" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-EG" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-CD" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-TZ" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-ZA" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-KE" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-UG" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-SD" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-DZ" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-MA" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-AO" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-GH" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-MZ" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-MG" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-CI" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-CM" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-NE" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-ML" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-BF" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-MW" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-ZM" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-TD" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-SO" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-SN" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-ZW" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-GN" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-RW" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-BJ" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-BI" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-TN" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-SS" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-TG" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-SL" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-LY" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-CG" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-CF" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-LR" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-MR" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-ER" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-GM" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-BW" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-NA" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-GA" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-LS" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-GW" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-GQ" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-MU" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-SZ" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-DJ" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-CV" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-ST" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-EH" href="https://www.onlinemanipal.com/af" />
    <link rel="alternate" hreflang="en-SC" href="https://www.onlinemanipal.com/af" />
  
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
	<style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
	
	<!-- This site is optimized with the Yoast SEO plugin v25.5 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Online Degree Programs | UGC Entitled Programs | Online Manipal</title>
<link crossorigin data-rocket-preconnect href="https://www.googletagmanager.com" rel="preconnect">
<link crossorigin data-rocket-preconnect href="https://hspx.hotstar.com" rel="preconnect">
<link crossorigin data-rocket-preconnect href="https://bat.bing.com" rel="preconnect">
<link crossorigin data-rocket-preconnect href="https://snap.licdn.com" rel="preconnect">
<link crossorigin data-rocket-preconnect href="https://a.quora.com" rel="preconnect">
<link crossorigin data-rocket-preconnect href="https://www.google-analytics.com" rel="preconnect">
<link crossorigin data-rocket-preconnect href="https://connect.facebook.net" rel="preconnect">
<link crossorigin data-rocket-preconnect href="https://dev.visualwebsiteoptimizer.com" rel="preconnect">
<link crossorigin data-rocket-preconnect href="https://app.engati.com" rel="preconnect">
<link crossorigin data-rocket-preload as="font" href="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/fonts/HelveticaNowDisplay-Regular.woff2" rel="preload">
<link crossorigin data-rocket-preload as="font" href="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/fonts/Queens-Medium.woff2" rel="preload"><link rel="preload" data-rocket-preload as="image" href="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/homepage-banner/Grids.png" fetchpriority="high">
	<meta name="description" content="Boost your career with UGC-entitled online UG/PG degree &amp; certificate programs in India with Online Manipal. Get degree from India&#039;s top universities: MUJ, MAHE, SMU." />
	<link rel="canonical" href="https://www.onlinemanipal.com/" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Online Degree Programs | UGC Entitled Programs | Online Manipal" />
	<meta property="og:description" content="Boost your career with UGC-entitled online UG/PG degree &amp; certificate programs in India with Online Manipal. Get degree from India&#039;s top universities: MUJ, MAHE, SMU." />
	<meta property="og:url" content="https://www.onlinemanipal.com/" />
	<meta property="og:site_name" content="Online Manipal" />
	<meta property="article:publisher" content="https://www.facebook.com/onlinemanipal" />
	<meta property="article:modified_time" content="2025-07-22T09:01:00+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://www.onlinemanipal.com/","url":"https://www.onlinemanipal.com/","name":"Online Degree Programs | UGC Entitled Programs | Online Manipal","isPartOf":{"@id":"https://www.onlinemanipal.com/#website"},"about":{"@id":"https://www.onlinemanipal.com/#organization"},"datePublished":"2021-02-12T08:26:55+00:00","dateModified":"2025-07-22T09:01:00+00:00","description":"Boost your career with UGC-entitled online UG/PG degree & certificate programs in India with Online Manipal. Get degree from India's top universities: MUJ, MAHE, SMU.","breadcrumb":{"@id":"https://www.onlinemanipal.com/#breadcrumb"},"inLanguage":"en-GB","potentialAction":[{"@type":"ReadAction","target":["https://www.onlinemanipal.com/"]}]},{"@type":"WebSite","@id":"https://www.onlinemanipal.com/#website","url":"https://www.onlinemanipal.com/","name":"Online Manipal","description":"Online Manipal","publisher":{"@id":"https://www.onlinemanipal.com/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://www.onlinemanipal.com/?s={search_term_string}"},"query-input":{"@type":"PropertyValueSpecification","valueRequired":true,"valueName":"search_term_string"}}],"inLanguage":"en-GB"},{"@type":"Organization","@id":"https://www.onlinemanipal.com/#organization","name":"Online Manipal","url":"https://www.onlinemanipal.com/","logo":{"@type":"ImageObject","inLanguage":"en-GB","@id":"https://www.onlinemanipal.com/#/schema/logo/image/","url":"https://www.onlinemanipal.com/wp-content/uploads/2022/07/MicrosoftTeams-image-9.png","contentUrl":"https://www.onlinemanipal.com/wp-content/uploads/2022/07/MicrosoftTeams-image-9.png","width":1000,"height":1000,"caption":"Online Manipal"},"image":{"@id":"https://www.onlinemanipal.com/#/schema/logo/image/"},"sameAs":["https://www.facebook.com/onlinemanipal","https://www.instagram.com/onlinemanipal/","https://www.youtube.com/channel/UC6EgEsVbor7Tpz3xARIhLzQ"]}]}</script>
	<meta name="msvalidate.01" content="A8A0C0CBF1D324B33E62920BD32A81F2" />
	<meta name="p:domain_verify" content="4f5af9b223777aa6614736b3fd254bbf" />
	<!-- / Yoast SEO plugin. -->


<script type="rocketlazyloadscript" data-rocket-type='application/javascript'  id='pys-version-script'>console.log('PixelYourSite Free version 11.0.1.2');</script>
<link rel="alternate" type="application/rss+xml" title="Online Manipal &raquo; Feed" href="https://www.onlinemanipal.com/feed" />
<link rel="alternate" type="application/rss+xml" title="Online Manipal &raquo; Comments Feed" href="https://www.onlinemanipal.com/comments/feed" />
<style id='wp-emoji-styles-inline-css'>

	img.wp-smiley, img.emoji {
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
<style id='classic-theme-styles-inline-css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css'>
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<script src="https://www.onlinemanipal.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js" data-rocket-defer defer></script>
<script src="https://www.onlinemanipal.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js" data-rocket-defer defer></script>
<script src="https://www.onlinemanipal.com/wp-content/plugins/pixelyoursite/dist/scripts/jquery.bind-first-0.2.3.min.js?ver=9c5d29" id="jquery-bind-first-js" data-rocket-defer defer></script>
<script src="https://www.onlinemanipal.com/wp-content/plugins/pixelyoursite/dist/scripts/js.cookie-2.1.3.min.js?ver=2.1.3" id="js-cookie-pys-js" data-rocket-defer defer></script>
<script src="https://www.onlinemanipal.com/wp-content/plugins/pixelyoursite/dist/scripts/tld.min.js?ver=2.3.1" id="js-tld-js" data-rocket-defer defer></script>
<script id="pys-js-extra">
var pysOptions = {"staticEvents":{"facebook":{"init_event":[{"delay":0,"type":"static","ajaxFire":false,"name":"PageView","pixelIds":["374798657217929"],"eventID":"277d7045-4abb-44ae-a4fb-ece544b41d80","params":{"page_title":"Homepage","post_type":"page","post_id":7,"plugin":"PixelYourSite","user_role":"guest","event_url":"www.onlinemanipal.com\/"},"e_id":"init_event","ids":[],"hasTimeWindow":false,"timeWindow":0,"woo_order":"","edd_order":""}]}},"dynamicEvents":[],"triggerEvents":[],"triggerEventTypes":[],"facebook":{"pixelIds":["374798657217929"],"advancedMatching":[],"advancedMatchingEnabled":true,"removeMetadata":false,"wooVariableAsSimple":false,"serverApiEnabled":true,"wooCRSendFromServer":false,"send_external_id":null,"enabled_medical":false,"do_not_track_medical_param":["event_url","post_title","page_title","landing_page","content_name","categories","category_name","tags"],"meta_ldu":false},"debug":"","siteUrl":"https:\/\/www.onlinemanipal.com","ajaxUrl":"https:\/\/www.onlinemanipal.com\/wp-admin\/admin-ajax.php","ajax_event":"5bcb466029","enable_remove_download_url_param":"1","cookie_duration":"7","last_visit_duration":"60","enable_success_send_form":"","ajaxForServerEvent":"1","ajaxForServerStaticEvent":"1","send_external_id":"1","external_id_expire":"180","track_cookie_for_subdomains":"1","google_consent_mode":"1","gdpr":{"ajax_enabled":false,"all_disabled_by_api":false,"facebook_disabled_by_api":false,"analytics_disabled_by_api":false,"google_ads_disabled_by_api":false,"pinterest_disabled_by_api":false,"bing_disabled_by_api":false,"externalID_disabled_by_api":false,"facebook_prior_consent_enabled":true,"analytics_prior_consent_enabled":true,"google_ads_prior_consent_enabled":null,"pinterest_prior_consent_enabled":true,"bing_prior_consent_enabled":true,"cookiebot_integration_enabled":false,"cookiebot_facebook_consent_category":"marketing","cookiebot_analytics_consent_category":"statistics","cookiebot_tiktok_consent_category":"marketing","cookiebot_google_ads_consent_category":"marketing","cookiebot_pinterest_consent_category":"marketing","cookiebot_bing_consent_category":"marketing","consent_magic_integration_enabled":false,"real_cookie_banner_integration_enabled":false,"cookie_notice_integration_enabled":false,"cookie_law_info_integration_enabled":false,"analytics_storage":{"enabled":true,"value":"granted","filter":false},"ad_storage":{"enabled":true,"value":"granted","filter":false},"ad_user_data":{"enabled":true,"value":"granted","filter":false},"ad_personalization":{"enabled":true,"value":"granted","filter":false}},"cookie":{"disabled_all_cookie":false,"disabled_start_session_cookie":false,"disabled_advanced_form_data_cookie":false,"disabled_landing_page_cookie":false,"disabled_first_visit_cookie":false,"disabled_trafficsource_cookie":false,"disabled_utmTerms_cookie":false,"disabled_utmId_cookie":false},"tracking_analytics":{"TrafficSource":"direct","TrafficLanding":"https:\/\/www.onlinemanipal.com\/muj-online-degree-courses","TrafficUtms":{"utm_source":"Google","utm_medium":"CPC","utm_campaign":"GGL_SRCH_1_Brand_Manipal_Generic_Exact","utm_content":"Generic_Manipal_Online_Exact_v2"},"TrafficUtmsId":[]},"GATags":{"ga_datalayer_type":"default","ga_datalayer_name":"dataLayerPYS"},"woo":{"enabled":false},"edd":{"enabled":false},"cache_bypass":"1753685714"};
</script>
<script data-minify="1" src="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/plugins/pixelyoursite/dist/scripts/public.js?ver=1753685604" id="pys-js" data-rocket-defer defer></script>
<link rel="https://api.w.org/" href="https://www.onlinemanipal.com/wp-json/" /><link rel="alternate" title="JSON" type="application/json" href="https://www.onlinemanipal.com/wp-json/wp/v2/pages/7" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.onlinemanipal.com/xmlrpc.php?rsd" />

<link rel='shortlink' href='https://www.onlinemanipal.com/' />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://www.onlinemanipal.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.onlinemanipal.com%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://www.onlinemanipal.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.onlinemanipal.com%2F&#038;format=xml" />
  <!-- Meta Pixel Code -->
  <script type="rocketlazyloadscript">
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
    fbq('init', '865323014656584');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src=https://www.facebook.com/tr?id=865323014656584&ev=PageView&noscript=1 /></noscript>
  <!-- End Meta Pixel Code -->
<link rel="icon" href="https://www.onlinemanipal.com/wp-content/uploads/2025/06/fav-icon.png">
<style>.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript>
  <!----- Konverse Chatbot ----->
  <script type="rocketlazyloadscript">!function(e,t,a){var c=e.head||e.getElementsByTagName("head")[0],n=e.createElement("script");n.async=!0,n.defer=!0, n.type="text/javascript",n.src=t+"/static/js/widget.js?config="+JSON.stringify(a),c.appendChild(n)}(document,"https://app.engati.com",{bot_key:"5ba80326179a4df3",welcome_msg:true,branding_key:"default",server:"https://app.engati.com",e:"p" });</script>
<meta name="generator" content="WP Rocket 3.19.2.1" data-wpr-features="wpr_delay_js wpr_defer_js wpr_minify_js wpr_lazyload_images wpr_lazyload_iframes wpr_preconnect_external_domains wpr_auto_preload_fonts wpr_oci wpr_minify_css wpr_preload_links wpr_desktop" /></head>

<body class="home wp-singular page-template page-template-templates page-template-home page-template-templateshome-php page page-id-7 wp-theme-flamingo">

  <!----- Google Tag Manager (noscript) ----->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6G2VZZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  
      <header  class="header">
      <div  class="container header-wrapper">
        <a href="/" class="logo">
          <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/OM_Logo.svg" alt="Online Manipal" width="266">
        </a>
        
<nav class="main-nav">
  <div class="menu">
    <div class="menu-item has-submenu courses">
      <div class="menu-text">
                  <div class="blinkdot-container">
            <div class="background-circle"></div>
            <div class="pulse-effect"></div>
            <div class="solid-dot"></div>
          </div>
                Courses <span><img class="arrow" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/chevron-down-arrow.svg" width="14" alt="Icon"></span>
      </div>
      <!-- Mega Menu -->
      <div class="submenu megamenu">
        <div class="tabs">
          <div class="vertical-tabs">
            <div class="tab-group tab-buttons by-degree" id="by-degrees">
              <p class="category">By Degree</p>
              <button class="tab-btn active" data-tab="section1-master">Masters</button>
              <button class="tab-btn" data-tab="section1-bachelor">Bachelors</button>
              <button class="tab-btn" data-tab="section1-certification">Certifications</button>
            </div>
            <div class="tab-group tab-buttons by-institution" id="by-institution">
              <p class="category">By Institution</p>
              <button class="tab-btn" data-tab="section2-mahe">Manipal Academy of Higher Education</button>
              <button class="tab-btn" data-tab="section2-muj">Manipal University Jaipur</button>
              <button class="tab-btn" data-tab="section2-smu">Sikkim Manipal University</button>
            </div>
          </div>
          <div class="content-area tab-content" id="contentArea">
            <!-- master -->
            <div id="section1-master" class="tab-panel active">
              <div class="wrapper">
                      <a class="course-card  mahe" href="/online-mba-manipal-academy-of-higher-education">
        <div class="course-details">
                      <span class="tag">Top Ranked</span>
                                <p class="uni-name">Manipal Academy of Higher Education</p>
                    <p class="title">
            <span class="course-name">
              Master of Business Administration            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MBA</span>
        </div>
      </a>
      <a class="course-card  muj" href="/master-of-computer-applications">
        <div class="course-details">
                      <span class="tag">Trending</span>
                                <p class="uni-name">Manipal University Jaipur</p>
                    <p class="title">
            <span class="course-name">
              Master of Computer Applications            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MCA</span>
        </div>
      </a>
      <a class="course-card  muj" href="/master-of-business-administration">
        <div class="course-details">
                      <span class="tag">Most Popular</span>
                                <p class="uni-name">Manipal University Jaipur</p>
                    <p class="title">
            <span class="course-name">
              Master of Business Administration            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MBA</span>
        </div>
      </a>
      <a class="course-card  smu" href="/master-of-arts-english">
        <div class="course-details">
                                <p class="uni-name">Sikkim Manipal University</p>
                    <p class="title">
            <span class="course-name">
              Master of Arts in English            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MA</span>
        </div>
      </a>
      <a class="course-card  smu" href="/master-of-computer-applications-smu">
        <div class="course-details">
                      <span class="tag">Most Popular</span>
                                <p class="uni-name">Sikkim Manipal University</p>
                    <p class="title">
            <span class="course-name">
              Master of Computer Applications            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MCA</span>
        </div>
      </a>
      <a class="course-card  mahe" href="/msc-in-data-science">
        <div class="course-details">
                      <span class="tag">Top Ranked</span>
                                <p class="uni-name">Manipal Academy of Higher Education</p>
                    <p class="title">
            <span class="course-name">
              Master of Science in Data Science            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MSc-DS</span>
        </div>
      </a>
      <a class="course-card  smu" href="/master-of-commerce-smu">
        <div class="course-details">
                                <p class="uni-name">Sikkim Manipal University</p>
                    <p class="title">
            <span class="course-name">
              Master of Commerce            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MCOM</span>
        </div>
      </a>
      <a class="course-card  smu" href="/online-mba-sikkim-manipal-university">
        <div class="course-details">
                      <span class="tag">Trending</span>
                                <p class="uni-name">Sikkim Manipal University</p>
                    <p class="title">
            <span class="course-name">
              Master of Business Administration            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MBA</span>
        </div>
      </a>
      <a class="course-card  mahe" href="/master-of-computer-applications-mahe">
        <div class="course-details">
                      <span class="tag">Top Ranked</span>
                                <p class="uni-name">Manipal Academy of Higher Education</p>
                    <p class="title">
            <span class="course-name">
              Master of Computer Applications            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MCA</span>
        </div>
      </a>
              </div>
            </div>
            <!-- bachelor -->
            <div id="section1-bachelor" class="tab-panel">
              <div class="wrapper">
                      <a class="course-card  mahe" href="/online-bba-honors-mahe">
        <div class="course-details">
                      <span class="tag">Trending</span>
                                <p class="uni-name">Manipal Academy of Higher Education</p>
                    <p class="title">
            <span class="course-name">
              Bachelor of Business Administration (Honors)            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            36/48 months           </p>
          <span class="short-name">Online BBA</span>
        </div>
      </a>
      <a class="course-card  muj" href="/bachelor-of-business-administration">
        <div class="course-details">
                      <span class="tag">Most Popular</span>
                                <p class="uni-name">Manipal University Jaipur</p>
                    <p class="title">
            <span class="course-name">
              Bachelor of Business Administration            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            36 months          </p>
          <span class="short-name">Online BBA</span>
        </div>
      </a>
      <a class="course-card  muj" href="/bachelor-of-computer-applications">
        <div class="course-details">
                      <span class="tag">Most Popular</span>
                                <p class="uni-name">Manipal University Jaipur</p>
                    <p class="title">
            <span class="course-name">
              Bachelor of Computer Applications            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            36 months          </p>
          <span class="short-name">Online BCA</span>
        </div>
      </a>
      <a class="course-card  smu" href="/bachelor-of-commerce-smu">
        <div class="course-details">
                                <p class="uni-name">Sikkim Manipal University</p>
                    <p class="title">
            <span class="course-name">
              Bachelor of Commerce            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            36 months          </p>
          <span class="short-name">Online BCOM</span>
        </div>
      </a>
      <a class="course-card  smu" href="/bachelor-of-arts">
        <div class="course-details">
                                <p class="uni-name">Sikkim Manipal University</p>
                    <p class="title">
            <span class="course-name">
              Bachelor of Arts            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            36 months          </p>
          <span class="short-name">Online BA</span>
        </div>
      </a>
      <a class="course-card  muj" href="/bachelor-of-commerce">
        <div class="course-details">
                                <p class="uni-name">Manipal University Jaipur</p>
                    <p class="title">
            <span class="course-name">
              Bachelor of Commerce            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            36 months          </p>
          <span class="short-name">Online BCOM</span>
        </div>
      </a>
              </div>
            </div>
            <!-- certification -->
            <div id="section1-certification" class="tab-panel">
              <div class="wrapper">
                      <a class="course-card  mahe" href="/pgcp-in-entrepreneurship-and-innovation">
        <div class="course-details">
                                <p class="uni-name">Manipal Academy of Higher Education</p>
                    <p class="title">
            <span class="course-name">
              PGCP in Entrepreneurship &amp; Innovation            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            12 months          </p>
          <span class="short-name">Online PGCP E&amp;I</span>
        </div>
      </a>
      <a class="course-card  mahe" href="/pgcp-in-business-analytics">
        <div class="course-details">
                                <p class="uni-name">Manipal Academy of Higher Education</p>
                    <p class="title">
            <span class="course-name">
              PGCP in Business Analytics            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            12 months          </p>
          <span class="short-name">Online PGCP-BA</span>
        </div>
      </a>
      <a class="course-card  mahe" href="/pgcp-logistics-and-supply-chain-management">
        <div class="course-details">
                                <p class="uni-name">Manipal Academy of Higher Education</p>
                    <p class="title">
            <span class="course-name">
              PGCP in Logistics and Supply Chain Management            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            12 months          </p>
          <span class="short-name">Online PGCP-LSCM</span>
        </div>
      </a>
      <a class="course-card  mahe" href="/pgcp-in-data-science">
        <div class="course-details">
                      <span class="tag">Trending</span>
                                <p class="uni-name">Manipal Academy of Higher Education</p>
                    <p class="title">
            <span class="course-name">
              PGCP in Data Science            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            12 months          </p>
          <span class="short-name">Online PGCP-DS</span>
        </div>
      </a>
              </div>
            </div>
            <!-- mahe courses -->
            <div id="section2-mahe" class="tab-panel ">
              <div class="wrapper">
                      <a class="course-card  mahe" href="/online-mba-manipal-academy-of-higher-education">
        <div class="course-details">
                      <span class="tag">Top Ranked</span>
                              <p class="title">
            <span class="course-name">
              Master of Business Administration            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MBA</span>
        </div>
      </a>
      <a class="course-card  mahe" href="/online-bba-honors-mahe">
        <div class="course-details">
                      <span class="tag">Trending</span>
                              <p class="title">
            <span class="course-name">
              Bachelor of Business Administration (Honors)            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            36/48 months           </p>
          <span class="short-name">Online BBA</span>
        </div>
      </a>
      <a class="course-card  mahe" href="/master-of-computer-applications-mahe">
        <div class="course-details">
                      <span class="tag">Top Ranked</span>
                              <p class="title">
            <span class="course-name">
              Master of Computer Applications            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MCA</span>
        </div>
      </a>
      <a class="course-card  mahe" href="/msc-in-data-science">
        <div class="course-details">
                      <span class="tag">Top Ranked</span>
                              <p class="title">
            <span class="course-name">
              Master of Science in Data Science            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MSc-DS</span>
        </div>
      </a>
      <a class="course-card  mahe" href="/msc-in-business-analytics">
        <div class="course-details">
                              <p class="title">
            <span class="course-name">
              Master of Science in Business Analytics            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MSC-BA</span>
        </div>
      </a>
      <a class="course-card  mahe" href="/pgcp-in-entrepreneurship-and-innovation">
        <div class="course-details">
                              <p class="title">
            <span class="course-name">
              PGCP in Entrepreneurship &amp; Innovation            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            12 months          </p>
          <span class="short-name">Online PGCP E&amp;I</span>
        </div>
      </a>
      <a class="course-card  mahe" href="/pgcp-in-business-analytics">
        <div class="course-details">
                              <p class="title">
            <span class="course-name">
              PGCP in Business Analytics            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            12 months          </p>
          <span class="short-name">Online PGCP-BA</span>
        </div>
      </a>
      <a class="course-card  mahe" href="/pgcp-logistics-and-supply-chain-management">
        <div class="course-details">
                              <p class="title">
            <span class="course-name">
              PGCP in Logistics and Supply Chain Management            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            12 months          </p>
          <span class="short-name">Online PGCP-LSCM</span>
        </div>
      </a>
      <a class="course-card  mahe" href="/pgcp-in-data-science">
        <div class="course-details">
                      <span class="tag">Trending</span>
                              <p class="title">
            <span class="course-name">
              PGCP in Data Science            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            12 months          </p>
          <span class="short-name">Online PGCP-DS</span>
        </div>
      </a>
              </div>
            </div>
            <!-- muj courses -->
            <div id="section2-muj" class="tab-panel">
              <div class="wrapper">

                      <a class="course-card  muj" href="/master-of-business-administration">
        <div class="course-details">
                      <span class="tag">Most Popular</span>
                              <p class="title">
            <span class="course-name">
              Master of Business Administration            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MBA</span>
        </div>
      </a>
      <a class="course-card  muj" href="/bachelor-of-business-administration">
        <div class="course-details">
                      <span class="tag">Most Popular</span>
                              <p class="title">
            <span class="course-name">
              Bachelor of Business Administration            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            36 months          </p>
          <span class="short-name">Online BBA</span>
        </div>
      </a>
      <a class="course-card  muj" href="/bachelor-of-computer-applications">
        <div class="course-details">
                      <span class="tag">Most Popular</span>
                              <p class="title">
            <span class="course-name">
              Bachelor of Computer Applications            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            36 months          </p>
          <span class="short-name">Online BCA</span>
        </div>
      </a>
      <a class="course-card  muj" href="/master-of-computer-applications">
        <div class="course-details">
                      <span class="tag">Trending</span>
                              <p class="title">
            <span class="course-name">
              Master of Computer Applications            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MCA</span>
        </div>
      </a>
      <a class="course-card  muj" href="/bachelor-of-commerce">
        <div class="course-details">
                              <p class="title">
            <span class="course-name">
              Bachelor of Commerce            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            36 months          </p>
          <span class="short-name">Online BCOM</span>
        </div>
      </a>
      <a class="course-card  muj" href="/master-of-arts-economics">
        <div class="course-details">
                              <p class="title">
            <span class="course-name">
              Master of Arts in Economics            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MA</span>
        </div>
      </a>
      <a class="course-card  muj" href="/master-of-commerce">
        <div class="course-details">
                      <span class="tag">Most Popular</span>
                              <p class="title">
            <span class="course-name">
              Master of Commerce            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MCOM</span>
        </div>
      </a>
      <a class="course-card  muj" href="/master-of-arts-in-journalism-mass-communication">
        <div class="course-details">
                              <p class="title">
            <span class="course-name">
              Master Arts in Journalism &amp; Mass Communication            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MA JMC</span>
        </div>
      </a>
              </div>
            </div>
            <!-- smu courses -->
            <div id="section2-smu" class="tab-panel">
              <div class="wrapper">
                      <a class="course-card  smu" href="/online-mba-sikkim-manipal-university">
        <div class="course-details">
                      <span class="tag">Trending</span>
                              <p class="title">
            <span class="course-name">
              Master of Business Administration            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MBA</span>
        </div>
      </a>
      <a class="course-card  smu" href="/master-of-computer-applications-smu">
        <div class="course-details">
                      <span class="tag">Most Popular</span>
                              <p class="title">
            <span class="course-name">
              Master of Computer Applications            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MCA</span>
        </div>
      </a>
      <a class="course-card  smu" href="/bachelor-of-arts">
        <div class="course-details">
                              <p class="title">
            <span class="course-name">
              Bachelor of Arts            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            36 months          </p>
          <span class="short-name">Online BA</span>
        </div>
      </a>
      <a class="course-card  smu" href="/bachelor-of-commerce-smu">
        <div class="course-details">
                              <p class="title">
            <span class="course-name">
              Bachelor of Commerce            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            36 months          </p>
          <span class="short-name">Online BCOM</span>
        </div>
      </a>
      <a class="course-card  smu" href="/master-of-arts-english">
        <div class="course-details">
                              <p class="title">
            <span class="course-name">
              Master of Arts in English            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MA</span>
        </div>
      </a>
      <a class="course-card  smu" href="/master-of-arts-sociology">
        <div class="course-details">
                              <p class="title">
            <span class="course-name">
              Master Arts in Sociology            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MA</span>
        </div>
      </a>
      <a class="course-card  smu" href="/master-of-arts-political-science">
        <div class="course-details">
                              <p class="title">
            <span class="course-name">
              Master Arts in Political Science            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MA</span>
        </div>
      </a>
      <a class="course-card  smu" href="/master-of-commerce-smu">
        <div class="course-details">
                              <p class="title">
            <span class="course-name">
              Master of Commerce            </span>
          </p>
        </div>
        <div class="duration-container">
          <p class="duration">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" width="16" height="16" alt="Course Duration" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration-small.svg" width="16" height="16" alt="Course Duration"></noscript>
            24 months          </p>
          <span class="short-name">Online MCOM</span>
        </div>
      </a>
              </div>
            </div>
            <a class="primaryBtn view-all" href="/all-courses">View all courses</a>
          </div>
        </div>

      </div>
    </div>
    <div class="menu-item has-submenu institution">
      <div class="menu-text" href="#">Institutions <span><img class="arrow" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/chevron-down-arrow.svg" width="14" alt="Icon"></span></div>
      <div class="submenu">
        <ul>
          <li><a href="/institution/muj">Manipal University Jaipur</a></li>
          <li><a href="/institution/mahe">Manipal Academy of Higher Education</a></li>
          <li><a href="/institution/smu">Sikkim Manipal University</a></li>
                      <li><a href="/institutions">View All</a></li>
                  </ul>
      </div>
    </div>
    <div class="menu-item"><a class="menu-text om-adv" href="/the-manipal-advantage">The Manipal Advantage</a></div>
    <div class="menu-item top-enroll"><button data-showpopup="leadForm_popup" class="header-btn applynow show-popup small btn-position" data-position="Header Apply Now" data-form="leadForm">Apply Now</button></div>
    <div class="menu-item search-menu"><img data-showpopup="searchFilter_popup" class="show-popup" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/search.svg" width="70" height="70" alt="search">
    </div>
    <div class="menu-item has-submenu ham-menu">
      <div class="menu-text" href="#">
        <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/ham-menu.svg" width="70" alt="Quick Links">
      </div>
      <div class="submenu">
        <ul>
          <li><a href="/about-us">About Us</a></li>
          <li><a href="https://www.onlinemanipal.com/placements">Placements</a></li>
          <li><a href="https://www.onlinemanipal.com/blogs">Blogs</a></li>
          <li><a href="/help-center">Help Center</a></li>
          <li><a href="https://www.onlinemanipal.com/faq">FAQs</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>      </div>
    </header>
  
<!------ CSS Files ------>
<link data-minify="1" rel="stylesheet" href="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/css/banner.css?ver=1753685605">
<link data-minify="1" rel="stylesheet" type="text/css" href="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/css/home.css?ver=1753685605">
<main>

  <section class="home-banner section-mb">
    <svg class="doodle mobile" width="480" height="767" viewBox="0 0 480 767" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M521.341 762.101C462.822 393.539 440.895 347.326 398.308 368.875C355.722 390.424 364.519 488.085 375.246 586.665C383.672 664.095 352.284 703.103 283.247 628.356C173.045 509.039 111.126 291.976 144.258 262.3C279.435 141.223 304.302 615.114 234.864 652.034C127.926 708.894 26.9112 379.347 -30.174 4.32244" stroke="#9DDAF0" stroke-opacity="0.3" stroke-width="56" />
</svg>

<svg class="doodle desktop" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  width="1048.319px" height="910px" viewBox="871.757 0 1048.319 910" style="enable-background:new 871.757 0 1048.319 910;"
  xml:space="preserve">
  <g>
    <defs>
      <rect id="SVGID_1_" x="0" y="0" width="1920" height="910" />
    </defs>
    <clipPath id="SVGID_2_">
      <use xlink:href="#SVGID_1_" style="overflow:visible;" />
    </clipPath>
    <g style="clip-path:url(#SVGID_2_);">
      <path style="fill:none;stroke:rgba(157, 218, 240, 0.3);stroke-width:80;" d="M1999.5,993.502c-134-527.5-190.45-635.668-271.28-607.478
        c-80.83,28.192-46.71,208.77-20.37,349.576c20.7,110.598-62.63,176.401-174.891,53.991
        c-169.14-184.452-242.739-454.515-183.119-528.875c116.119-144.807,222.939,511.255,91.25,559.761
        c-202.811,74.701-416.46-399.763-548.067-936.37" />
    </g>
  </g>
</svg>

<div class="container banner-wrapper">
  <div class="banner-content">
    <div class="ugc-entitled"><img src="/wp-content/uploads/2023/07/UGC-Logo.svg" alt="UGC-Entitled" /> UGC-Entitled</div>
    <h1 class="bannerTitle">Education That <span class="nextLine">Powers Your <span class="circle-word">Ambition</span></span></h1>
    <p class="details-text">Online degrees & courses from&nbsp;<span class="univ-highlight">Manipal Universities</span>.</p>
    <button data-showpopup="leadForm_popup" class="banner-btn applynow show-popup btn-position" data-position="Banner Apply Now" data-form="leadForm">Apply Now</button>
  </div>
  <div class="banner-cards homepage-banner-slider">
    <a href="/all-courses?domain=Business Analytics" class="banner-card">
      <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/homepage-banner/Business-Analytics.webp" alt="Business Analytics Courses" width="222" height="124" >
      <div class="card-text">Business Analytics</div>
    </a>
    <a href="/all-courses?domain=Management" class="banner-card">
      <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/homepage-banner/Management.webp" alt="Management Courses" width="222" height="124">
      <div class="card-text">Management</div>
    </a>
    <a href="/all-courses?domain=Information Technology" class="banner-card">
      <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/homepage-banner/artificial-intelligence.webp" alt="Artificial Intelligence Courses" width="222" height="124">
      <div class="card-text">Artificial Intelligence</div>
    </a>
    <a href="/all-courses?domain=Data Science" class="banner-card">
      <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/homepage-banner/Data-science.webp" alt="Data Science Courses" width="222" height="124">
      <div class="card-text">Data Science</div>
    </a>
    <a href="/all-courses?domain=Media and Journalism" class="banner-card">
      <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/homepage-banner/Media-&-Journalism.webp" alt="Media & Journalism Courses" width="222" height="124" >
      <div class="card-text">Media & Journalism</div>
    </a>
    <a href="/all-courses?domain=Arts" class="banner-card">
      <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20222%20124'%3E%3C/svg%3E" alt="Arts Courses" width="222" height="124" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/homepage-banner/Arts.webp" ><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/homepage-banner/Arts.webp" alt="Arts Courses" width="222" height="124" ></noscript>
      <div class="card-text">Arts</div>
    </a>
  </div>
  <div class="girl-image">
    <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/homepage-banner/Filledstar.svg" class="star-image-left" alt="Filled Star Image" width="28" height="28">
    <!-- <img src="/assets/images/homepage-banner/threeline.svg" class="three-line-image" alt="Three Line Image" width="50" height="50"> -->
    <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/homepage-banner/abd-banner.png" class="banner-img" alt="Banner Image" width="480" height="">
    <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/homepage-banner/Filledstar.svg" class="star-image" alt="Filled Star" width="28" height="28">
    <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/homepage-banner/abd-sign.png" class="abdsign-image" alt="AB de Villiers Sign" width="147" height="89">
    <div class="abd-name">AB de Villiers</div>
    <!-- <img src="/assets/images/homepage-banner/onwards&upwards.svg" class="upanddownwards-image" alt="upwards Image" width="168" height="168"> -->
    <a href="https://www.youtube.com/watch?v=4VJnVL3MxZw" data-lity><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/homepage-banner/abd-360-success.png" class="abd-360" alt="360 degree success" width="186" height="200"></a>
  </div>
</div>  </section>

  <div class="top-action-bar hidden ">
    <div class="container">
      <div class="note">You’re currently viewing personalized results. For the full website experience, exit the personalized view.</div>
      <div class="action-column">
        <button class="edit show-popup " data-showpopup="personalizationForm_popup">Edit</button>
        <button class="exit ">Exit &times;</button>
      </div>
    </div>
  </div>

  <section class="top-online-course section-mb">
    
<div class="top-online-course-section">
  <div class="wrapper-course container">
    <div class="top-section">
      <h2 class="section-title">Top online courses</h2>
      <a href="/all-courses" class="view-all-btn hidden ">View All Courses</a>
      <button data-showpopup="personalizationForm_popup" class="personalization-btn show-popup common-popup">
        <div class="icon-wrap show-popup common-popup" data-showpopup="personalizationForm_popup">
          <div class="personalisation-image show-popup common-popup" data-showpopup="personalizationForm_popup">
            <div class="green show-popup" data-showpopup="personalizationForm_popup">
              <img class="show-popup" data-showpopup="personalizationForm_popup" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2050%2050'%3E%3C/svg%3E" alt="green gear" width="50" height="50" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/green-bg.webp" /><noscript><img class="show-popup" data-showpopup="personalizationForm_popup" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/green-bg.webp" alt="green gear" width="50" height="50" /></noscript>
            </div>
            <div class="white show-popup" data-showpopup="personalizationForm_popup">
              <img class="show-popup" data-showpopup="personalizationForm_popup" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2025%2025'%3E%3C/svg%3E" alt="white diamond" width="25" height="25" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/white-diamond.png" /><noscript><img class="show-popup" data-showpopup="personalizationForm_popup" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/white-diamond.png" alt="white diamond" width="25" height="25" /></noscript>
            </div>
          </div>
        </div>
        <div data-showpopup="personalizationForm_popup" class="heading show-popup common-popup ">
          <div class="personalise-title show-popup" data-showpopup="personalizationForm_popup">Personalise Your <span data-showpopup="personalizationForm_popup" class="show-popup">Experience <img data-showpopup="personalizationForm_popup" class="right-arrow show-popup common-popup" alt="Personalise" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2011'%3E%3C/svg%3E" width="14" height="11" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/right-arrow.svg"><noscript><img data-showpopup="personalizationForm_popup" class="right-arrow show-popup common-popup" alt="Personalise" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/right-arrow.svg" width="14" height="11"></noscript></span>
          </div>
        </div>
      </button>
    </div>
    <div class="top-course-slider courses-slider">
              <div class="line-item border-mahe">
          <a href="/online-bba-honors-mahe" class="courses-link">
            <div class="course-enroll">
                              <div class="top-ranked">Trending</div>
                                            <div class="student-enroll">
                  <p class="enroll-text">5 in-demand specializations</p>
                </div>
                          </div>
            <div class="course-img">
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20375%20317'%3E%3C/svg%3E" alt="Bachelor of Business Administration (Honors)" width="375" height="317" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2024/03/BBA@2x.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2024/03/BBA@2x.webp" alt="Bachelor of Business Administration (Honors)" width="375" height="317"></noscript>
            </div>
            <div class="institute-name mahe-bg">Manipal Academy of Higher Education</div>
            <div class="course-wrapper">
              <div class="course-deatil">
                <div class="course-name">Bachelor of Business Administration (Honors)</div>
                                  <div class="rating">
                    <p class="rating-number">4.7</p>
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" alt="rating-star" width="14" height="14" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg" alt="rating-star" width="14" height="14"></noscript>
                  </div>
                              </div>
              <div class="duration-pricing">
                <div class="duration">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" alt="course" width="20" height="20"></noscript>
                  <span>36/48 months </span>
                </div>
                <div class="dot"></div>
                <div class="pricing">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg" alt="course" width="20" height="20"></noscript>
                  <span>INR 1,80,000</span>
                </div>
              </div>
            </div>
          </a>
        </div>
              <div class="line-item border-mahe">
          <a href="/online-mba-manipal-academy-of-higher-education" class="courses-link">
            <div class="course-enroll">
                              <div class="top-ranked">Top Ranked</div>
                                            <div class="student-enroll">
                  <p class="enroll-text">For Working Professionals</p>
                </div>
                          </div>
            <div class="course-img">
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20375%20317'%3E%3C/svg%3E" alt="Master of Business Administration" width="375" height="317" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2022/11/MBA.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2022/11/MBA.webp" alt="Master of Business Administration" width="375" height="317"></noscript>
            </div>
            <div class="institute-name mahe-bg">Manipal Academy of Higher Education</div>
            <div class="course-wrapper">
              <div class="course-deatil">
                <div class="course-name">Master of Business Administration</div>
                                  <div class="rating">
                    <p class="rating-number">4.9</p>
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" alt="rating-star" width="14" height="14" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg" alt="rating-star" width="14" height="14"></noscript>
                  </div>
                              </div>
              <div class="duration-pricing">
                <div class="duration">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" alt="course" width="20" height="20"></noscript>
                  <span>24 months</span>
                </div>
                <div class="dot"></div>
                <div class="pricing">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg" alt="course" width="20" height="20"></noscript>
                  <span>INR 2,92,000</span>
                </div>
              </div>
            </div>
          </a>
        </div>
              <div class="line-item border-muj">
          <a href="/master-of-business-administration" class="courses-link">
            <div class="course-enroll">
                              <div class="top-ranked">Most Popular</div>
                                            <div class="student-enroll">
                  <p class="enroll-text">Super/Dual Specialization</p>
                </div>
                          </div>
            <div class="course-img">
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20375%20317'%3E%3C/svg%3E" alt="Master of Business Administration" width="375" height="317" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2022/11/MBA-MUJ.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2022/11/MBA-MUJ.webp" alt="Master of Business Administration" width="375" height="317"></noscript>
            </div>
            <div class="institute-name muj-bg">Manipal University Jaipur</div>
            <div class="course-wrapper">
              <div class="course-deatil">
                <div class="course-name">Master of Business Administration</div>
                                  <div class="rating">
                    <p class="rating-number">4.9</p>
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" alt="rating-star" width="14" height="14" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg" alt="rating-star" width="14" height="14"></noscript>
                  </div>
                              </div>
              <div class="duration-pricing">
                <div class="duration">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" alt="course" width="20" height="20"></noscript>
                  <span>24 months</span>
                </div>
                <div class="dot"></div>
                <div class="pricing">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg" alt="course" width="20" height="20"></noscript>
                  <span>INR 1,75,000</span>
                </div>
              </div>
            </div>
          </a>
        </div>
              <div class="line-item border-muj">
          <a href="/bachelor-of-computer-applications" class="courses-link">
            <div class="course-enroll">
                              <div class="top-ranked">Most Popular</div>
                                            <div class="student-enroll">
                  <p class="enroll-text">In-Demand Specializations</p>
                </div>
                          </div>
            <div class="course-img">
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20375%20317'%3E%3C/svg%3E" alt="Bachelor of Computer Applications" width="375" height="317" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2022/11/BCA.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2022/11/BCA.webp" alt="Bachelor of Computer Applications" width="375" height="317"></noscript>
            </div>
            <div class="institute-name muj-bg">Manipal University Jaipur</div>
            <div class="course-wrapper">
              <div class="course-deatil">
                <div class="course-name">Bachelor of Computer Applications</div>
                                  <div class="rating">
                    <p class="rating-number">4.8</p>
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" alt="rating-star" width="14" height="14" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg" alt="rating-star" width="14" height="14"></noscript>
                  </div>
                              </div>
              <div class="duration-pricing">
                <div class="duration">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" alt="course" width="20" height="20"></noscript>
                  <span>36 months</span>
                </div>
                <div class="dot"></div>
                <div class="pricing">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg" alt="course" width="20" height="20"></noscript>
                  <span>INR 1,35,000</span>
                </div>
              </div>
            </div>
          </a>
        </div>
              <div class="line-item border-muj">
          <a href="/master-of-computer-applications" class="courses-link">
            <div class="course-enroll">
                              <div class="top-ranked">Trending</div>
                                            <div class="student-enroll">
                  <p class="enroll-text">In-Demand Specializations</p>
                </div>
                          </div>
            <div class="course-img">
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20375%20317'%3E%3C/svg%3E" alt="Master of Computer Applications" width="375" height="317" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2022/11/MCA-MUJ.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2022/11/MCA-MUJ.webp" alt="Master of Computer Applications" width="375" height="317"></noscript>
            </div>
            <div class="institute-name muj-bg">Manipal University Jaipur</div>
            <div class="course-wrapper">
              <div class="course-deatil">
                <div class="course-name">Master of Computer Applications</div>
                                  <div class="rating">
                    <p class="rating-number">4.8</p>
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" alt="rating-star" width="14" height="14" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg" alt="rating-star" width="14" height="14"></noscript>
                  </div>
                              </div>
              <div class="duration-pricing">
                <div class="duration">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" alt="course" width="20" height="20"></noscript>
                  <span>24 months</span>
                </div>
                <div class="dot"></div>
                <div class="pricing">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg" alt="course" width="20" height="20"></noscript>
                  <span>INR 1,58,000</span>
                </div>
              </div>
            </div>
          </a>
        </div>
              <div class="line-item border-mahe">
          <a href="/master-of-computer-applications-mahe" class="courses-link">
            <div class="course-enroll">
                              <div class="top-ranked">Top Ranked</div>
                                            <div class="student-enroll">
                  <p class="enroll-text">For Working Professionals</p>
                </div>
                          </div>
            <div class="course-img">
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20375%20317'%3E%3C/svg%3E" alt="Master of Computer Applications" width="375" height="317" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2024/03/MCA.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2024/03/MCA.png" alt="Master of Computer Applications" width="375" height="317"></noscript>
            </div>
            <div class="institute-name mahe-bg">Manipal Academy of Higher Education</div>
            <div class="course-wrapper">
              <div class="course-deatil">
                <div class="course-name">Master of Computer Applications</div>
                                  <div class="rating">
                    <p class="rating-number">4.7</p>
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" alt="rating-star" width="14" height="14" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg" alt="rating-star" width="14" height="14"></noscript>
                  </div>
                              </div>
              <div class="duration-pricing">
                <div class="duration">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" alt="course" width="20" height="20"></noscript>
                  <span>24 months</span>
                </div>
                <div class="dot"></div>
                <div class="pricing">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg" alt="course" width="20" height="20"></noscript>
                  <span>INR 2,20,000</span>
                </div>
              </div>
            </div>
          </a>
        </div>
              <div class="line-item border-muj">
          <a href="/bachelor-of-business-administration" class="courses-link">
            <div class="course-enroll">
                              <div class="top-ranked">Most Popular</div>
                                            <div class="student-enroll">
                  <p class="enroll-text">Limited Seats</p>
                </div>
                          </div>
            <div class="course-img">
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20375%20317'%3E%3C/svg%3E" alt="Bachelor of Business Administration" width="375" height="317" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/BBA-MUJ.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/BBA-MUJ.png" alt="Bachelor of Business Administration" width="375" height="317"></noscript>
            </div>
            <div class="institute-name muj-bg">Manipal University Jaipur</div>
            <div class="course-wrapper">
              <div class="course-deatil">
                <div class="course-name">Bachelor of Business Administration</div>
                                  <div class="rating">
                    <p class="rating-number">4.7</p>
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" alt="rating-star" width="14" height="14" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg" alt="rating-star" width="14" height="14"></noscript>
                  </div>
                              </div>
              <div class="duration-pricing">
                <div class="duration">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" alt="course" width="20" height="20"></noscript>
                  <span>36 months</span>
                </div>
                <div class="dot"></div>
                <div class="pricing">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg" alt="course" width="20" height="20"></noscript>
                  <span>INR 1,35,000</span>
                </div>
              </div>
            </div>
          </a>
        </div>
              <div class="line-item border-smu">
          <a href="/bachelor-of-arts" class="courses-link">
            <div class="course-enroll">
                                        </div>
            <div class="course-img">
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20375%20317'%3E%3C/svg%3E" alt="Bachelor of Arts" width="375" height="317" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/SMU-BA.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/SMU-BA.png" alt="Bachelor of Arts" width="375" height="317"></noscript>
            </div>
            <div class="institute-name smu-bg">Sikkim Manipal University</div>
            <div class="course-wrapper">
              <div class="course-deatil">
                <div class="course-name">Bachelor of Arts</div>
                                  <div class="rating">
                    <p class="rating-number">4.5</p>
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" alt="rating-star" width="14" height="14" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg" alt="rating-star" width="14" height="14"></noscript>
                  </div>
                              </div>
              <div class="duration-pricing">
                <div class="duration">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" alt="course" width="20" height="20"></noscript>
                  <span>36 months</span>
                </div>
                <div class="dot"></div>
                <div class="pricing">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg" alt="course" width="20" height="20"></noscript>
                  <span>INR 75,000</span>
                </div>
              </div>
            </div>
          </a>
        </div>
              <div class="line-item border-smu">
          <a href="/master-of-computer-applications-smu" class="courses-link">
            <div class="course-enroll">
                              <div class="top-ranked">Most Popular</div>
                                            <div class="student-enroll">
                  <p class="enroll-text">Scholarships Available</p>
                </div>
                          </div>
            <div class="course-img">
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20375%20317'%3E%3C/svg%3E" alt="Master of Computer Applications" width="375" height="317" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/09/Masters-of-Computer-Applications-.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2023/09/Masters-of-Computer-Applications-.png" alt="Master of Computer Applications" width="375" height="317"></noscript>
            </div>
            <div class="institute-name smu-bg">Sikkim Manipal University</div>
            <div class="course-wrapper">
              <div class="course-deatil">
                <div class="course-name">Master of Computer Applications</div>
                                  <div class="rating">
                    <p class="rating-number">4.6</p>
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" alt="rating-star" width="14" height="14" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg" alt="rating-star" width="14" height="14"></noscript>
                  </div>
                              </div>
              <div class="duration-pricing">
                <div class="duration">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" alt="course" width="20" height="20"></noscript>
                  <span>24 months</span>
                </div>
                <div class="dot"></div>
                <div class="pricing">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg" alt="course" width="20" height="20"></noscript>
                  <span>INR 98,000</span>
                </div>
              </div>
            </div>
          </a>
        </div>
              <div class="line-item border-smu">
          <a href="/online-mba-sikkim-manipal-university" class="courses-link">
            <div class="course-enroll">
                              <div class="top-ranked">Trending</div>
                                            <div class="student-enroll">
                  <p class="enroll-text">Dual Specialization</p>
                </div>
                          </div>
            <div class="course-img">
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20375%20317'%3E%3C/svg%3E" alt="Master of Business Administration" width="375" height="317" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/MBA-SMU.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/MBA-SMU.png" alt="Master of Business Administration" width="375" height="317"></noscript>
            </div>
            <div class="institute-name smu-bg">Sikkim Manipal University</div>
            <div class="course-wrapper">
              <div class="course-deatil">
                <div class="course-name">Master of Business Administration</div>
                                  <div class="rating">
                    <p class="rating-number">4.5</p>
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" alt="rating-star" width="14" height="14" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg" alt="rating-star" width="14" height="14"></noscript>
                  </div>
                              </div>
              <div class="duration-pricing">
                <div class="duration">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" alt="course" width="20" height="20"></noscript>
                  <span>24 months</span>
                </div>
                <div class="dot"></div>
                <div class="pricing">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg" alt="course" width="20" height="20"></noscript>
                  <span>INR 1,10,000</span>
                </div>
              </div>
            </div>
          </a>
        </div>
              <div class="line-item border-mahe">
          <a href="/msc-in-data-science" class="courses-link">
            <div class="course-enroll">
                              <div class="top-ranked">Top Ranked</div>
                                        </div>
            <div class="course-img">
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20375%20317'%3E%3C/svg%3E" alt="Online MSc in Data Science" width="375" height="317" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2022/11/MSC-DS.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2022/11/MSC-DS.png" alt="Online MSc in Data Science" width="375" height="317"></noscript>
            </div>
            <div class="institute-name mahe-bg">Manipal Academy of Higher Education</div>
            <div class="course-wrapper">
              <div class="course-deatil">
                <div class="course-name">Online MSc in Data Science</div>
                                  <div class="rating">
                    <p class="rating-number">4.8</p>
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" alt="rating-star" width="14" height="14" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg" alt="rating-star" width="14" height="14"></noscript>
                  </div>
                              </div>
              <div class="duration-pricing">
                <div class="duration">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" alt="course" width="20" height="20"></noscript>
                  <span>24 months</span>
                </div>
                <div class="dot"></div>
                <div class="pricing">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg" alt="course" width="20" height="20"></noscript>
                  <span>INR 2,80,000</span>
                </div>
              </div>
            </div>
          </a>
        </div>
              <div class="line-item border-smu">
          <a href="/master-of-arts-english" class="courses-link">
            <div class="course-enroll">
                                        </div>
            <div class="course-img">
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20375%20317'%3E%3C/svg%3E" alt="Online MA in English" width="375" height="317" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Masters-of-Arts-English.jpg"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Masters-of-Arts-English.jpg" alt="Online MA in English" width="375" height="317"></noscript>
            </div>
            <div class="institute-name smu-bg">Sikkim Manipal University</div>
            <div class="course-wrapper">
              <div class="course-deatil">
                <div class="course-name">Online MA in English</div>
                                  <div class="rating">
                    <p class="rating-number">4.4</p>
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" alt="rating-star" width="14" height="14" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg" alt="rating-star" width="14" height="14"></noscript>
                  </div>
                              </div>
              <div class="duration-pricing">
                <div class="duration">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" alt="course" width="20" height="20"></noscript>
                  <span>24 months</span>
                </div>
                <div class="dot"></div>
                <div class="pricing">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg" alt="course" width="20" height="20"></noscript>
                  <span>INR 75,000</span>
                </div>
              </div>
            </div>
          </a>
        </div>
              <div class="line-item border-muj">
          <a href="/master-of-commerce" class="courses-link">
            <div class="course-enroll">
                              <div class="top-ranked">Most Popular</div>
                                        </div>
            <div class="course-img">
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20375%20317'%3E%3C/svg%3E" alt="Master of Commerce" width="375" height="317" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/MCOM-MUJ.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/MCOM-MUJ.png" alt="Master of Commerce" width="375" height="317"></noscript>
            </div>
            <div class="institute-name muj-bg">Manipal University Jaipur</div>
            <div class="course-wrapper">
              <div class="course-deatil">
                <div class="course-name">Master of Commerce</div>
                                  <div class="rating">
                    <p class="rating-number">4.2</p>
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" alt="rating-star" width="14" height="14" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg" alt="rating-star" width="14" height="14"></noscript>
                  </div>
                              </div>
              <div class="duration-pricing">
                <div class="duration">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" alt="course" width="20" height="20"></noscript>
                  <span>24 months</span>
                </div>
                <div class="dot"></div>
                <div class="pricing">
                  <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg" alt="course" width="20" height="20"></noscript>
                  <span>INR 1,08,000</span>
                </div>
              </div>
            </div>
          </a>
        </div>
          </div>
  </div>
</div>
<div class="find-right-course container">
  <div class="left">
    <img class="quiz-img shake" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="quiz" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/stickers/take-quiz-icon.svg"><noscript><img class="quiz-img shake" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/stickers/take-quiz-icon.svg" alt="quiz"></noscript>
  </div>
  <div class="right">
    <p class="right-text">Find the right course for you</p>
    <span class="quiz-link show-popup common-popup" data-showpopup="find_courses_popup">Take a Quiz <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2012%2010'%3E%3C/svg%3E" alt="quiz" class="arrow-img" width="12" height="10" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/right-arrow-icon.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/right-arrow-icon.svg" alt="quiz" class="arrow-img" width="12" height="10"></noscript></span>
  </div>
  <a href="/all-courses" class="view-all-btn">View All Courses</a>
</div>  </section>

  <section class="demand-specialization section-mb">
    <div class="container">
  <h2 class="section-title">In-Demand Specializations</h2>
  <div class="specialization-slider">
    <div class="secialization-desc">
      <div class="spec-details">
        <div class="left first">
          <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="64" height="64" rx="32" fill="white" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M47.3334 37.8975V21.3847C47.3334 20.4462 46.9606 19.5462 46.297 18.8826C45.6334 18.219 44.7334 17.8462 43.795 17.8462H20.2052C19.2668 17.8462 18.3667 18.219 17.7031 18.8826C17.0395 19.5462 16.6667 20.4462 16.6667 21.3847V37.8975C16.6667 38.8359 17.0395 39.736 17.7031 40.3995C18.3667 41.0631 19.2668 41.4359 20.2052 41.4359H43.795C44.7334 41.4359 45.6334 41.0631 46.297 40.3995C46.9606 39.736 47.3334 38.8359 47.3334 37.8975ZM27.2821 43.7949H36.718C37.0308 43.7949 37.3309 43.9192 37.5521 44.1404C37.7733 44.3616 37.8975 44.6616 37.8975 44.9744C37.8975 45.2872 37.7733 45.5872 37.5521 45.8084C37.3309 46.0296 37.0308 46.1539 36.718 46.1539H27.2821C26.9693 46.1539 26.6693 46.0296 26.4481 45.8084C26.2269 45.5872 26.1026 45.2872 26.1026 44.9744C26.1026 44.6616 26.2269 44.3616 26.4481 44.1404C26.6693 43.9192 26.9693 43.7949 27.2821 43.7949ZM34.4858 26.0243H37.2944C38.1594 26.0168 38.9946 26.3405 39.6285 26.9291C40.2625 27.5177 40.6472 28.3266 40.7038 29.1898C40.7604 30.053 40.4845 30.9052 39.9329 31.5715C39.3812 32.2378 38.5955 32.6678 37.7368 32.7733L36.9063 35.9036C36.8614 36.0784 36.7754 36.2398 36.6553 36.3744C36.5352 36.509 36.3847 36.6129 36.2162 36.6774C36.0477 36.7419 35.8663 36.7651 35.687 36.745C35.5077 36.7249 35.3359 36.6622 35.1859 36.562L34.4096 36.0448C34.2549 35.9415 34.128 35.8016 34.0404 35.6375C33.9527 35.4734 33.907 35.2902 33.9072 35.1041V32.8657C32.728 33.045 29.9597 33.6857 27.2944 35.9213C27.1298 36.0595 26.9291 36.1479 26.716 36.176C26.5029 36.2042 26.2862 36.1709 26.0914 36.0801C25.8965 35.9893 25.7317 35.8448 25.6161 35.6635C25.5006 35.4823 25.4392 35.2718 25.4392 35.0568V23.7662C25.4393 23.5513 25.5008 23.3409 25.6164 23.1597C25.732 22.9786 25.8969 22.8342 26.0917 22.7435C26.2865 22.6528 26.5032 22.6195 26.7162 22.6477C26.9292 22.6759 27.1298 22.7642 27.2944 22.9024C30.7021 25.7604 34.2805 26.0123 34.4858 26.0243ZM35.8125 35.6214V35.6136L36.5605 32.7987H35.0363V35.1041L35.8125 35.6214ZM35.0363 31.6696H37.2944C37.8933 31.6696 38.4677 31.4317 38.8911 31.0082C39.3146 30.5848 39.5525 30.0104 39.5525 29.4115C39.5525 28.8126 39.3146 28.2382 38.8911 27.8148C38.4677 27.3913 37.8933 27.1534 37.2944 27.1534H35.0363V31.6696Z" fill="#151419" />
          </svg>
        </div>
        <div class="right">
          <h3 class="specialization-txt">Digital Marketing</h3>
          <ul>
            <li>BBA</li>
            <li>MBA</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="secialization-desc">
      <div class="spec-details">
        <div class="left second">
          <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="64" height="64" rx="32" fill="white" />
            <path d="M29.5628 21.9386C29.5628 21.6543 29.6471 21.3764 29.8051 21.14C29.963 20.9036 30.1875 20.7194 30.4502 20.6106C30.7129 20.5018 31.0019 20.4733 31.2807 20.5288C31.5596 20.5842 31.8157 20.7211 32.0168 20.9222C32.2178 21.1232 32.3547 21.3794 32.4102 21.6582C32.4656 21.9371 32.4372 22.2261 32.3284 22.4888C32.2196 22.7514 32.0353 22.9759 31.7989 23.1339C31.5625 23.2918 31.2846 23.3761 31.0003 23.3761C30.6191 23.3761 30.2534 23.2247 29.9838 22.9551C29.7143 22.6855 29.5628 22.3199 29.5628 21.9386ZM33.8753 33.4386C33.8753 33.723 33.9596 34.0009 34.1176 34.2373C34.2755 34.4737 34.5 34.6579 34.7627 34.7667C35.0254 34.8755 35.3144 34.904 35.5932 34.8485C35.8721 34.7931 36.1282 34.6562 36.3293 34.4551C36.5303 34.2541 36.6672 33.9979 36.7227 33.7191C36.7781 33.4402 36.7497 33.1512 36.6409 32.8885C36.5321 32.6259 36.3478 32.4014 36.1114 32.2434C35.875 32.0855 35.5971 32.0011 35.3128 32.0011C34.9316 32.0011 34.5659 32.1526 34.2963 32.4222C34.0267 32.6918 33.8753 33.0574 33.8753 33.4386ZM42.5901 39.8122C44.4091 38.2846 45.862 36.3682 46.8416 34.2043C47.8212 32.0404 48.3026 29.6842 48.2503 27.3095C48.2503 27.1777 48.2449 27.0466 48.2341 26.916C48.2227 26.7333 48.1419 26.5618 48.0084 26.4366C47.8748 26.3113 47.6985 26.2418 47.5154 26.2422H43.1741L39.018 31.2285C39.5371 32.1034 39.7302 33.1337 39.5632 34.1372C39.3961 35.1407 38.8797 36.0529 38.1051 36.7125C37.3305 37.372 36.3477 37.7365 35.3304 37.7415C34.3131 37.7466 33.3268 37.3917 32.5457 36.7398C31.7647 36.0879 31.2393 35.1809 31.0624 34.1791C30.8855 33.1772 31.0684 32.1451 31.5789 31.2651C32.0894 30.3851 32.8946 29.714 33.8521 29.3702C34.8096 29.0265 35.8578 29.0323 36.8114 29.3867L41.3952 23.8847C41.531 23.7243 41.7004 23.5956 41.8913 23.5077C42.0823 23.4199 42.2901 23.375 42.5003 23.3761H46.6583C46.7736 23.3763 46.8873 23.3487 46.9897 23.2956C47.0921 23.2426 47.1802 23.1657 47.2466 23.0714C47.3131 22.9771 47.3558 22.8683 47.3713 22.754C47.3868 22.6397 47.3746 22.5234 47.3357 22.4148C45.2441 16.548 39.7798 12.2355 33.2895 11.8905H33.1835C33.0869 11.8869 32.9905 11.9028 32.9002 11.9373C32.8098 11.9718 32.7274 12.0242 32.6578 12.0913C32.5881 12.1584 32.5328 12.2388 32.495 12.3278C32.4572 12.4169 32.4377 12.5126 32.4378 12.6093V17.8651C33.3969 18.2042 34.2053 18.8715 34.72 19.7489C35.2348 20.6264 35.4227 21.6576 35.2507 22.6602C35.0787 23.6629 34.5577 24.5725 33.7799 25.2282C33.0022 25.8839 32.0176 26.2435 31.0003 26.2435C29.983 26.2435 28.9985 25.8839 28.2207 25.2282C27.4429 24.5725 26.9219 23.6629 26.7499 22.6602C26.5779 21.6576 26.7658 20.6264 27.2806 19.7489C27.7953 18.8715 28.6037 18.2042 29.5628 17.8651V13.0136C29.5631 12.9054 29.539 12.7986 29.4922 12.7011C29.4455 12.6036 29.3774 12.5179 29.2929 12.4504C29.2085 12.3828 29.1099 12.3352 29.0044 12.3111C28.899 12.287 28.7896 12.2869 28.6841 12.311C25.3031 13.1413 22.2899 15.0623 20.1101 17.777C17.9304 20.4916 16.7057 23.8487 16.6253 27.3293L12.5913 35.081L12.5518 35.1618C12.2578 35.8367 12.2338 36.5987 12.4849 37.2907C12.7359 37.9827 13.2429 38.552 13.9012 38.8814L13.9462 38.9029L18.0628 40.7879V46.3582C18.0628 47.1207 18.3657 47.8519 18.9049 48.3911C19.444 48.9303 20.1753 49.2332 20.9378 49.2332H28.1253V50.6707C28.1253 51.0519 28.2768 51.4176 28.5463 51.6871C28.8159 51.9567 29.1816 52.1082 29.5628 52.1082H42.459C42.7134 52.1106 42.9643 52.0488 43.1885 51.9285C43.4415 51.7905 43.6472 51.5797 43.7789 51.3233C43.9106 51.067 43.9622 50.777 43.927 50.491L42.5901 39.8122Z" fill="#151419" />
          </svg>

        </div>
        <div class="right">
          <h3 class="specialization-txt">Artificial Intelligence</h3>
          <ul>
            <li>MCA</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="secialization-desc">
      <div class="spec-details">
        <div class="left third">
          <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="64" height="64" rx="32" fill="white" />
            <path d="M31 13.8125C21.3274 13.8125 13.75 18.2328 13.75 23.875V41.125C13.75 46.7672 21.3274 51.1875 31 51.1875C40.6726 51.1875 48.25 46.7672 48.25 41.125V23.875C48.25 18.2328 40.6726 13.8125 31 13.8125ZM45.375 32.5C45.375 34.2286 43.9591 35.9913 41.492 37.3372C38.714 38.852 34.9873 39.6875 31 39.6875C27.0127 39.6875 23.286 38.852 20.508 37.3372C18.0409 35.9913 16.625 34.2286 16.625 32.5V29.51C19.6905 32.2053 24.932 33.9375 31 33.9375C37.068 33.9375 42.3095 32.1981 45.375 29.51V32.5ZM41.492 45.9622C38.714 47.477 34.9873 48.3125 31 48.3125C27.0127 48.3125 23.286 47.477 20.508 45.9622C18.0409 44.6163 16.625 42.8536 16.625 41.125V38.135C19.6905 40.8303 24.932 42.5625 31 42.5625C37.068 42.5625 42.3095 40.8231 45.375 38.135V41.125C45.375 42.8536 43.9591 44.6163 41.492 45.9622Z" fill="#151419" />
          </svg>

        </div>
        <div class="right">
          <h3 class="specialization-txt">Data Science</h3>
          <ul>
            <li>BCA</li>
            <li>MSC</li>
            <li>MBA</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="secialization-desc">
      <div class="spec-details">
        <div class="left fourth">
          <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="64" height="64" rx="32" fill="white" />
            <path d="M52.5625 46.8759C52.5625 47.2572 52.4111 47.6228 52.1415 47.8924C51.8719 48.162 51.5062 48.3134 51.125 48.3134H10.875C10.4938 48.3134 10.1281 48.162 9.85853 47.8924C9.58895 47.6228 9.4375 47.2572 9.4375 46.8759C9.4375 46.4947 9.58895 46.129 9.85853 45.8594C10.1281 45.5899 10.4938 45.4384 10.875 45.4384H51.125C51.5062 45.4384 51.8719 45.5899 52.1415 45.8594C52.4111 46.129 52.5625 46.4947 52.5625 46.8759ZM10.9289 27.1426C10.8434 26.8412 10.8588 26.52 10.9726 26.2281C11.0865 25.9362 11.2926 25.6894 11.5596 25.5254L30.2471 14.0254C30.4736 13.8862 30.7342 13.8125 31 13.8125C31.2658 13.8125 31.5264 13.8862 31.7529 14.0254L50.4404 25.5254C50.7075 25.6892 50.9138 25.9358 51.0278 26.2276C51.1419 26.5194 51.1575 26.8405 51.0722 27.142C50.987 27.4435 50.8056 27.7089 50.5556 27.8978C50.3057 28.0867 50.0008 28.1887 49.6875 28.1884H45.375V39.6884H48.25C48.6312 39.6884 48.9969 39.8399 49.2665 40.1094C49.5361 40.379 49.6875 40.7447 49.6875 41.1259C49.6875 41.5072 49.5361 41.8728 49.2665 42.1424C48.9969 42.412 48.6312 42.5634 48.25 42.5634H13.75C13.3688 42.5634 13.0031 42.412 12.7335 42.1424C12.464 41.8728 12.3125 41.5072 12.3125 41.1259C12.3125 40.7447 12.464 40.379 12.7335 40.1094C13.0031 39.8399 13.3688 39.6884 13.75 39.6884H16.625V28.1884H12.3125C11.9995 28.1885 11.6949 28.0864 11.4452 27.8977C11.1955 27.7089 11.0142 27.4438 10.9289 27.1426ZM33.875 38.2509C33.875 38.6322 34.0264 38.9978 34.296 39.2674C34.5656 39.537 34.9313 39.6884 35.3125 39.6884C35.6937 39.6884 36.0594 39.537 36.329 39.2674C36.5986 38.9978 36.75 38.6322 36.75 38.2509V29.6259C36.75 29.2447 36.5986 28.879 36.329 28.6094C36.0594 28.3399 35.6937 28.1884 35.3125 28.1884C34.9313 28.1884 34.5656 28.3399 34.296 28.6094C34.0264 28.879 33.875 29.2447 33.875 29.6259V38.2509ZM25.25 38.2509C25.25 38.6322 25.4015 38.9978 25.671 39.2674C25.9406 39.537 26.3063 39.6884 26.6875 39.6884C27.0687 39.6884 27.4344 39.537 27.704 39.2674C27.9735 38.9978 28.125 38.6322 28.125 38.2509V29.6259C28.125 29.2447 27.9735 28.879 27.704 28.6094C27.4344 28.3399 27.0687 28.1884 26.6875 28.1884C26.3063 28.1884 25.9406 28.3399 25.671 28.6094C25.4015 28.879 25.25 29.2447 25.25 29.6259V38.2509Z" fill="#151419" />
          </svg>
        </div>
        <div class="right">
          <h3 class="specialization-txt">BFSI</h3>
          <ul>
            <li>MBA</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="secialization-desc">
      <div class="spec-details">
        <div class="left five">
          <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="64" height="64" rx="32" fill="white" />
            <path d="M46.8125 16.6875H32.4375V13.8125C32.4375 13.4313 32.2861 13.0656 32.0165 12.796C31.7469 12.5265 31.3812 12.375 31 12.375C30.6188 12.375 30.2531 12.5265 29.9835 12.796C29.714 13.0656 29.5625 13.4313 29.5625 13.8125V16.6875H15.1875C14.425 16.6875 13.6937 16.9904 13.1546 17.5296C12.6154 18.0687 12.3125 18.8 12.3125 19.5625V41.125C12.3125 41.8875 12.6154 42.6188 13.1546 43.1579C13.6937 43.6971 14.425 44 15.1875 44H22.26L18.377 48.8516C18.1387 49.1494 18.0285 49.5297 18.0706 49.9088C18.1127 50.2879 18.3037 50.6348 18.6016 50.8731C18.8994 51.1113 19.2797 51.2215 19.6588 51.1794C20.0379 51.1373 20.3848 50.9463 20.623 50.6484L25.94 44H36.06L41.377 50.6484C41.4949 50.7959 41.6408 50.9187 41.8063 51.0098C41.9717 51.1009 42.1535 51.1586 42.3412 51.1794C42.5289 51.2003 42.7189 51.1839 42.9003 51.1314C43.0817 51.0788 43.251 50.991 43.3984 50.8731C43.5459 50.7551 43.6687 50.6092 43.7598 50.4437C43.8509 50.2783 43.9085 50.0965 43.9294 49.9088C43.9503 49.7211 43.9339 49.5311 43.8814 49.3497C43.8288 49.1683 43.741 48.999 43.623 48.8516L39.74 44H46.8125C47.575 44 48.3063 43.6971 48.8454 43.1579C49.3846 42.6188 49.6875 41.8875 49.6875 41.125V19.5625C49.6875 18.8 49.3846 18.0687 48.8454 17.5296C48.3063 16.9904 47.575 16.6875 46.8125 16.6875ZM26.6875 35.375C26.6875 35.7563 26.536 36.1219 26.2665 36.3915C25.9969 36.6611 25.6312 36.8125 25.25 36.8125C24.8688 36.8125 24.5031 36.6611 24.2335 36.3915C23.964 36.1219 23.8125 35.7563 23.8125 35.375V31.0625C23.8125 30.6813 23.964 30.3156 24.2335 30.046C24.5031 29.7765 24.8688 29.625 25.25 29.625C25.6312 29.625 25.9969 29.7765 26.2665 30.046C26.536 30.3156 26.6875 30.6813 26.6875 31.0625V35.375ZM32.4375 35.375C32.4375 35.7563 32.2861 36.1219 32.0165 36.3915C31.7469 36.6611 31.3812 36.8125 31 36.8125C30.6188 36.8125 30.2531 36.6611 29.9835 36.3915C29.714 36.1219 29.5625 35.7563 29.5625 35.375V28.1875C29.5625 27.8063 29.714 27.4406 29.9835 27.171C30.2531 26.9015 30.6188 26.75 31 26.75C31.3812 26.75 31.7469 26.9015 32.0165 27.171C32.2861 27.4406 32.4375 27.8063 32.4375 28.1875V35.375ZM38.1875 35.375C38.1875 35.7563 38.0361 36.1219 37.7665 36.3915C37.4969 36.6611 37.1312 36.8125 36.75 36.8125C36.3688 36.8125 36.0031 36.6611 35.7335 36.3915C35.4639 36.1219 35.3125 35.7563 35.3125 35.375V25.3125C35.3125 24.9313 35.4639 24.5656 35.7335 24.296C36.0031 24.0265 36.3688 23.875 36.75 23.875C37.1312 23.875 37.4969 24.0265 37.7665 24.296C38.0361 24.5656 38.1875 24.9313 38.1875 25.3125V35.375Z" fill="#151419" />
          </svg>

        </div>
        <div class="right">
          <h3 class="specialization-txt">Business Analytics</h3>
          <ul>
            <li>MBA</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="secialization-desc">
      <div class="spec-details">
        <div class="left sixth">
          <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="64" height="64" rx="32" fill="white" />
            <path d="M49.3084 22.4849C49.0458 22.0264 48.6615 21.6495 48.1979 21.396L32.38 12.7368C31.9572 12.5043 31.4825 12.3824 31 12.3824C30.5175 12.3824 30.0428 12.5043 29.62 12.7368L13.8075 21.3942C13.3439 21.6477 12.9596 22.0246 12.697 22.4831C12.4467 22.917 12.3142 23.4088 12.3125 23.9098V41.0951C12.3137 41.6098 12.453 42.1148 12.716 42.5573C12.979 42.9999 13.3559 43.3636 13.8075 43.6107L29.62 52.2663C30.0425 52.4997 30.5173 52.6222 31 52.6222C31.4827 52.6222 31.9575 52.4997 32.38 52.2663L48.1925 43.6107C48.6441 43.3636 49.021 42.9999 49.284 42.5573C49.547 42.1148 49.6863 41.6098 49.6875 41.0951V23.9098C49.6871 23.4099 49.5565 22.9188 49.3084 22.4849ZM29.5625 48.9636L23.8125 45.8155V36.8149C23.8119 36.5576 23.7422 36.3051 23.6108 36.0838C23.4793 35.8626 23.2908 35.6807 23.065 35.5571L15.1875 31.2446V25.4946L29.5625 33.3649V48.9636ZM31 30.8637L16.7436 23.0581L22.9392 19.6674L30.3064 23.7013C30.518 23.8171 30.7552 23.8778 30.9964 23.8778C31.2376 23.8778 31.4748 23.8171 31.6864 23.7013L39.0536 19.6674L45.2492 23.0581L31 30.8637ZM46.8125 31.241L38.935 35.5535C38.7092 35.6771 38.5207 35.859 38.3892 36.0802C38.2578 36.3015 38.1881 36.554 38.1875 36.8113V45.8119L32.4375 48.96V33.3542L46.8125 25.4838V31.241Z" fill="#151419" />
          </svg>
        </div>
        <div class="right">
          <h3 class="specialization-txt">IT & Fintech</h3>
          <ul>
            <li>MBA</li>
          </ul>
        </div>
      </div>
    </div>
  </div>  </section>

  <section class="universities-section section-mb">
    <div class="container">
  <h2 class="section-title">Shape Your Future With Our Top-Ranked Universities</h2>
  <div class="universities-details">
    <div class="first-block university-block">
      <div class="box-wrap">
        <a class="university-wrapper first-wrapper" href="/institution/muj">
          <div class="university-desc">
            <p class="title">Manipal University <span>Jaipur</span></p>
            <div class="view-courses">
              <span href="/institution/muj">View all Courses</span>
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="right arrow" width="20" height="20" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/rightarrow.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/rightarrow.png" alt="right arrow" width="20" height="20"></noscript>
            </div>
          </div>
          <div class="university-img">
                          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20783%20583'%3E%3C/svg%3E" alt="Manipal University Jaipur" width="783" height="583" data-lazy-src="/wp-content/themes/flamingo/assets/images/muj-university.webp"><noscript><img src="/wp-content/themes/flamingo/assets/images/muj-university.webp" alt="Manipal University Jaipur" width="783" height="583"></noscript>
                      </div>
        </a>
        <svg class="doodle" width="848" height="536" viewBox="0 0 848 536" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M822.201 520.279C711.012 192.439 666.077 124.728 604.802 140.778C543.527 156.827 572.606 268.859 595.091 356.212C612.751 424.825 550.189 464.048 462.389 386.613C330.088 269.931 257.255 85.3633 313.651 57.1028C439.578 -6.00013 492.508 376.403 392.719 404.14C239.037 446.857 67.8902 150.421 -41.6245 -183" stroke="#C2B5FF" stroke-width="96" />
        </svg>
      </div>
    </div>
    <div class="second-block">
      <div class="mahe-block university-block">
        <div class="badge">
          <p>Ranks 4th <span>amongst all universities</span></p>
        </div>
        <div class="box-wrap">
          <a class="university-wrapper" href="/institution/mahe">
            <p class="title">Manipal Academy of <span>Higher Education</span></p>
            <div class="view-courses">
              <span href="/institution/muj">View all Courses</span>
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="right arrow" width="20" height="20" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/rightarrow.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/rightarrow.png" alt="right arrow" width="20" height="20"></noscript>
            </div>
            <div class="university-img">
                              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20783%20583'%3E%3C/svg%3E" alt="Manipal Academy of Higher Education" width="783" height="583" data-lazy-src="/wp-content/themes/flamingo/assets/images/mahe-university.webp"><noscript><img src="/wp-content/themes/flamingo/assets/images/mahe-university.webp" alt="Manipal Academy of Higher Education" width="783" height="583"></noscript>
                          </div>
          </a>
          <svg class="doodle" width="744" height="298" viewBox="0 0 744 298" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M696 304C676.5 182.667 473 -7 317.5 60.5C216.988 104.131 238.5 206 153 206C44.3434 206 13 38.5 -21 -61" stroke="#94CFFF" stroke-width="96" />
          </svg>
        </div>
      </div>
      <div class="smu-block university-block">
        <div class="box-wrap">
          <a class="university-wrapper" href="/institution/smu">
            <p class="title">Sikkim Manipal <span>University</span></p>
            <div class="view-courses">
              <span href="/institution/muj">View all Courses</span>
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="right arrow" width="20" height="20" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/rightarrow.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/rightarrow.png" alt="right arrow" width="20" height="20"></noscript>
            </div>
            <div class="university-img">
                              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20783%20583'%3E%3C/svg%3E" alt="Sikkim Manipal University" width="783" height="583" data-lazy-src="/wp-content/themes/flamingo/assets/images/smu-university.webp"><noscript><img src="/wp-content/themes/flamingo/assets/images/smu-university.webp" alt="Sikkim Manipal University" width="783" height="583"></noscript>
                          </div>
            <svg width="848" class="doodle" height="299" viewBox="0 0 848 299" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M853 173.471C748.02 222.453 514.5 418.5 416 128.5C296.427 -223.543 463.822 -270 540 -61.9997C597.5 95.0003 391.183 207.889 260 203C155.053 199.089 36.2194 73.7559 -1.5 -19.4997" stroke="#A3F9F8" stroke-width="96" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
  </section>

  <section class="choose-course section-mb doodle-section">
    <div class="choose-course-section">
  <div class="container">
    <div class="image-content-wrapper">
      <div class="background-image-wrapper">
                  <div class="find-course desktop">
          </div>
                <div class="content-wrapper">
          <div>
            <h2 class="heading-one section-title">Unsure which course <span class="heading-course"> is <span class="heading-right"> right for you?</span></span></h2>
          </div>
          <div class="quick-answer">Answer a few quick questions and we’ll guide you to the perfect course!</div>
          <button data-showpopup="find_courses_popup" class="btn-find-course show-popup common-popup">Find My Course</button>
        </div>
      </div>
    </div>
  </div>
</div>  </section>

  <section class="our-impact section-mb">
    <div class="container">
      <div class="impact-wrapper">
  <div class="impact-row">
    <h2 class="section-title">Our impact</h2>
    <div class="flex-container">
      <div class="flex-item">
        <div class="number">60+</div>
        <p class="description">Countries and 2000+ towns & cities- our students span the globe</p>
      </div>
      <div class="flex-item">
        <div class="number">100k+</div>
        <p class="description">Learners have been empowered through Online Manipal</p>
      </div>
      <div class="flex-item">
        <div class="number">93%</div>
        <p class="description">Of students say their online degree has a positive ROI</p>
      </div>
      <div class="flex-item">
        <div class="number">81%</div>
        <p class="description">Of students find online is better than or equal to on-campus learning</p>
      </div>
    </div>
  </div>
  <div class="impact-animation-row doodle-section">
    <svg class="doodle" xmlns="http://www.w3.org/2000/svg" width="1920" height="1172" viewBox="0 0 1920 1172" fill="none">
      <path d="M1954 -80.0586C1829.45 0.426338 620.628 1922.51 495.322 740.251C440.122 219.441 856.387 -126.44 929.5 219.441C981.5 465.441 481.905 810.764 326.5 822.441C153.5 835.441 -7.74971 606.675 -52.5 453.441" stroke="#2D2B34" stroke-opacity="0.8" stroke-width="96" />
    </svg>
  </div>
  <div class="why-student-row">
    <div class="section-title">Why students choose us</div>
    <div class="relative-container">
      <div class="scroller-container">
        <div class="sticky-container swiper why-choose">
          <div class="swiper-wrapper why-choose-slider">
            <div class="swiper-slide flex-item">
              <div class="feature-wrap">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2064%2064'%3E%3C/svg%3E" width="64" height="64" alt="Degree from top ranked Manipal universities" fetchpriority="low" decoding="async" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/top-ranked.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/top-ranked.svg" width="64" height="64" alt="Degree from top ranked Manipal universities" loading="lazy" fetchpriority="low" decoding="async"></noscript>
                <div class="feature-title">Degree from top ranked Manipal universities</div>
                <div class="feature-description">Graduate with UGC-entitled & AICTE approved online degrees which are at par with on-campus degree programs.</div>
              </div>
            </div>
            <div class="swiper-slide flex-item">
              <div class="feature-wrap">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2064%2064'%3E%3C/svg%3E" width="64" height="64" alt="Exclusive Coursera access" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/coursera.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/coursera.svg" width="64" height="64" alt="Exclusive Coursera access"></noscript>
                <div class="feature-title">Exclusive Coursera access</div>
                <div class="feature-description">Free access to 10K+ courses & professional certifications from top global universities.</div>
              </div>
            </div>
            <div class="swiper-slide flex-item">
              <div class="feature-wrap">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2064%2064'%3E%3C/svg%3E" width="64" height="64" alt="Scholarships up to 30%" fetchpriority="low" decoding="async" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/scholarship.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/scholarship.svg" width="64" height="64" alt="Scholarships up to 30%" loading="lazy" fetchpriority="low" decoding="async"></noscript>
                <div class="feature-title">Scholarships up to 30%</div>
                <div class="feature-description">Avail scholarship benefits under merit, defense, Divyaang, alumni, and other categories.</div>
              </div>
            </div>
            <div class="swiper-slide flex-item">
              <div class="feature-wrap">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2064%2064'%3E%3C/svg%3E" width="64" height="64" alt="Easy financing options" fetchpriority="low" decoding="async" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/easy-finance.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/easy-finance.svg" width="64" height="64" alt="Easy financing options" loading="lazy" fetchpriority="low" decoding="async"></noscript>
                <div class="feature-title">Easy financing options</div>
                <div class="feature-description">Improved affordability with flexible financing and no-cost EMI options.</div>
              </div>
            </div>
            <div class="swiper-slide flex-item">
              <div class="feature-wrap">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2064%2064'%3E%3C/svg%3E" width="64" height="64" alt="Manipal alumni status" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/alumni.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/alumni.svg" width="64" height="64" alt="Manipal alumni status"></noscript>
                <div class="feature-title">Manipal alumni status</div>
                <div class="feature-description">Become a part of a 2,00,000+ global Manipal alumni network.</div>
              </div>
            </div>
            <div class="swiper-slide flex-item">
              <div class="feature-wrap">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2064%2064'%3E%3C/svg%3E" width="64" height="64" alt="Weekly webinars with industry leaders" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/webinar.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/webinar.svg" width="64" height="64" alt="Weekly webinars with industry leaders"></noscript>
                <div class="feature-title">Weekly webinars with industry leaders</div>
                <div class="feature-description">Stay updated on key industry trends through our weekly webinars by industry experts.</div>
              </div>
            </div>
                          <div class="swiper-slide flex-item">
                <div class="feature-wrap">
                  <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="64" height="64" rx="32" fill="#9ddaf0" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M45.5899 35.7884H43.8061C43.505 34.0948 42.0315 32.8597 40.3104 32.8597C38.5908 32.8597 37.1173 34.0947 36.8162 35.7884H36.1635C36.1864 35.6096 36.1986 35.4292 36.1986 35.2488C36.1298 32.9759 34.2666 31.1707 31.9937 31.1707C29.7208 31.1707 27.8592 32.9759 27.7887 35.2488C27.7887 35.4292 27.801 35.6096 27.8239 35.7884H27.1712C26.8701 34.0948 25.3965 32.8597 23.677 32.8597C21.9558 32.8597 20.4838 34.0947 20.1827 35.7884H18.4097C17.9954 35.7884 17.6591 35.4521 17.6591 35.0363V17.8663H46.3421L46.3406 35.0363C46.3406 35.2366 46.2626 35.4276 46.1205 35.5683C45.9798 35.7089 45.7886 35.7884 45.5899 35.7884ZM32 31.9457C30.6625 31.9457 29.4565 32.7512 28.9444 33.9878C28.4339 35.2244 28.7167 36.6459 29.6628 37.5921C30.609 38.5367 32.032 38.8195 33.2686 38.3059C34.5036 37.7923 35.3076 36.5863 35.3061 35.2488C35.3061 34.3714 34.9576 33.5308 34.337 32.9117C33.718 32.2926 32.8758 31.9441 32 31.9457ZM40.3199 33.7539C39.2468 33.7493 38.2762 34.3913 37.8635 35.3818C37.4493 36.3723 37.674 37.5126 38.4321 38.2738C39.1887 39.0335 40.3306 39.2612 41.321 38.8501C42.3131 38.4389 42.9581 37.4713 42.9566 36.3983C42.955 34.937 41.7689 33.754 40.3076 33.754L40.3199 33.7539ZM23.6848 33.7539C22.6132 33.7524 21.6457 34.3974 21.2345 35.3864C20.8233 36.3769 21.0496 37.5172 21.8077 38.2753C22.5658 39.0335 23.7062 39.2597 24.6966 38.8501C25.6871 38.4389 26.3322 37.4713 26.3306 36.3983C26.3276 34.9386 25.1445 33.7555 23.6848 33.7539ZM32 50.1413C29.4794 50.1444 27.0613 49.1371 25.2899 47.3441C25.053 47.1194 24.9307 46.8 24.9567 46.4744C25.2226 42.7295 27.8914 39.8222 32.0001 39.8222C36.1088 39.8222 38.7701 42.7494 39.0436 46.4744C39.0711 46.7969 38.9534 47.1164 38.7226 47.3441C36.948 49.1386 34.525 50.1475 32 50.1413ZM40.3199 48.3331C42.2978 48.3361 44.1993 47.5627 45.613 46.1779C45.8591 45.944 45.9829 45.6108 45.9462 45.273C45.6956 42.3153 43.551 40.0498 40.3107 40.0498C39.2591 40.033 38.2212 40.3036 37.3102 40.8325C38.8784 42.2739 39.8185 44.2732 39.9285 46.4007C39.9729 46.9815 39.7589 47.5547 39.3446 47.9659C39.259 48.0561 39.1688 48.1386 39.0817 48.2242H39.0832C39.4883 48.2884 39.8995 48.3205 40.3106 48.3221L40.3199 48.3331ZM23.6848 48.3331C24.0959 48.3331 24.5071 48.2994 24.9137 48.2352C24.8235 48.1497 24.7379 48.0671 24.6508 47.9769C24.2365 47.5673 24.0225 46.9941 24.0684 46.4117C24.1784 44.2855 25.117 42.2862 26.6822 40.8435C25.7727 40.3146 24.7363 40.044 23.6847 40.0609C20.4366 40.0502 18.3043 42.3154 18.0507 45.273C18.014 45.6108 18.1363 45.944 18.3824 46.1779C19.7963 47.5628 21.6978 48.3362 23.6772 48.3331L23.6848 48.3331ZM17.3261 14.1414H46.6738C47.4534 14.1414 48.0862 14.7742 48.0862 15.5537C48.0862 16.3348 47.4534 16.9661 46.6738 16.9661H17.3261C16.5465 16.9661 15.9137 16.3348 15.9137 15.5537C15.9137 14.7742 16.5465 14.1414 17.3261 14.1414ZM28.5087 26.9687H41.9735C42.2227 26.9687 42.4244 26.7669 42.4244 26.5178C42.4244 26.2702 42.2226 26.0684 41.9735 26.0684H28.5087C28.2611 26.0684 28.0594 26.2702 28.0594 26.5178C28.0594 26.7669 28.2611 26.9687 28.5087 26.9687ZM28.5087 23.8612H41.9735C42.2227 23.8612 42.4244 23.6594 42.4244 23.4118C42.4244 23.1627 42.2226 22.9609 41.9735 22.9609H28.5087C28.2611 22.9609 28.0594 23.1627 28.0594 23.4118C28.0594 23.6594 28.2611 23.8612 28.5087 23.8612ZM28.5087 20.7506H41.9735C42.2227 20.7506 42.4244 20.5489 42.4244 20.2997C42.4244 20.0521 42.2226 19.8504 41.9735 19.8504H28.5087C28.2611 19.8504 28.0594 20.0521 28.0594 20.2997C28.0594 20.5489 28.2611 20.7506 28.5087 20.7506ZM22.0264 30.0793H41.9829C42.2305 30.0793 42.4323 29.8775 42.4323 29.6284C42.4323 29.3808 42.2305 29.179 41.9829 29.179H22.0264C21.7773 29.179 21.5755 29.3808 21.5755 29.6284C21.5755 29.8776 21.7773 30.0793 22.0264 30.0793ZM22.4177 20.2967C22.2007 20.2967 22.0264 20.471 22.0264 20.688V26.1663C22.0264 26.2702 22.0677 26.3696 22.141 26.4429C22.2144 26.5163 22.3138 26.5576 22.4177 26.5576H26.0021C26.1045 26.5576 26.2054 26.5163 26.2788 26.4429C26.3522 26.3696 26.3934 26.2702 26.3934 26.1663V20.688C26.3934 20.5841 26.3522 20.4847 26.2788 20.4114C26.2054 20.338 26.1045 20.2967 26.0021 20.2967H22.4177Z" fill="#151419" />
                  </svg>
                  <div class="feature-title">100% placement assistance</div>
                  <div class="feature-description">Boost your employability quotient by acquiring job-ready skills & preparing for interviews to perform well in placement drives.</div>
                </div>
              </div>
                        <div class="swiper-slide flex-item">
              <div class="feature-wrap">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="64" height="64" rx="32" fill="#f6b1c6" />
                  <path d="M29.9844 38.5888L32.1977 36.377C32.3981 36.1767 32.6141 35.9998 32.8442 35.8464C33.8022 35.2093 34.9903 34.9839 36.1314 35.2453L40.2295 36.1892C40.2843 36.2018 40.3454 36.208 40.4033 36.208H41.3581V44.3571L35.8859 38.8848C35.8859 38.8848 32.9399 41.8214 32.8617 41.8809C32.4829 42.1705 32.018 42.3286 31.5374 42.3286C30.9551 42.3286 30.3978 42.0969 29.9877 41.6868C29.5776 41.2766 29.3428 40.7178 29.3428 40.1371C29.3428 39.5548 29.5745 38.9975 29.9846 38.5874L29.9844 38.5888ZM20.2248 34.0338C20.6819 34.0338 21.1186 34.2154 21.4426 34.5379C21.7667 34.8603 21.9467 35.2986 21.9467 35.7557V47.026C21.9467 47.483 21.7651 47.9198 21.4426 48.2438C21.1186 48.5663 20.6819 48.7478 20.2248 48.7478H17.7219C17.2648 48.7478 16.8281 48.5663 16.504 48.2438C16.1816 47.9198 16 47.4831 16 47.026V35.7557C16 35.2986 16.1816 34.8603 16.504 34.5379C16.828 34.2154 17.2648 34.0338 17.7219 34.0338H20.2248ZM44.0192 34.0338H46.5222C46.9793 34.0338 47.416 34.2154 47.74 34.5379C48.064 34.8603 48.2441 35.2986 48.2441 35.7557V47.026C48.2441 47.483 48.0625 47.9198 47.74 48.2438C47.416 48.5663 46.9793 48.7478 46.5222 48.7478H44.0192C43.5622 48.7478 43.1254 48.5663 42.8014 48.2438C42.479 47.9198 42.2974 47.4831 42.2974 47.026V35.7557C42.2974 35.2986 42.479 34.8603 42.8014 34.5379C43.1254 34.2154 43.5621 34.0338 44.0192 34.0338ZM28.5382 46.8209C28.4505 46.9085 28.4004 47.0259 28.4004 47.1496C28.4004 47.2717 28.4505 47.3906 28.5382 47.4767L28.9217 47.8618C29.1565 48.0966 29.2895 48.4143 29.2895 48.7477C29.2895 49.0796 29.1549 49.3989 28.9217 49.6337C28.4333 50.1221 27.6413 50.1221 27.1513 49.6337L24.8534 47.3358C24.5435 47.0243 24.1365 46.8333 23.6966 46.7926C23.5886 46.7911 23.4806 46.7864 23.371 46.7864H22.8874V36.2081H23.8422C23.9001 36.2081 23.9612 36.2019 24.016 36.1893L28.1125 35.2454C29.2537 34.9825 30.4417 35.2094 31.3997 35.8465L29.3225 37.9253C28.7339 38.5122 28.4052 39.309 28.4052 40.1386C28.4052 40.9682 28.7339 41.765 29.3225 42.352C29.9095 42.9389 30.7062 43.2692 31.5374 43.2692C32.223 43.2692 32.8883 43.0423 33.4315 42.6306L36.5292 45.7252C36.764 45.96 36.8955 46.2778 36.8955 46.6112C36.8955 46.943 36.764 47.2608 36.5292 47.4956H36.5261C36.0377 47.984 35.2457 47.984 34.7557 47.4956L32.1025 44.8439C31.9241 44.6639 31.6313 44.6639 31.4529 44.8439L31.4404 44.8564C31.3543 44.9425 31.3058 45.0599 31.3058 45.182C31.3058 45.3041 31.3527 45.4215 31.4404 45.5076L32.7271 46.7927C33.2155 47.2811 33.2155 48.0732 32.7271 48.5616C32.2387 49.0515 31.4435 49.0515 30.9551 48.5616L29.2035 46.81C29.0219 46.6284 28.7308 46.6284 28.5492 46.81L28.5382 46.8209ZM34.1154 41.9857L35.8842 40.2138L39.8711 44.2007C40.3595 44.6891 40.3595 45.4811 39.8711 45.9695V45.971C39.3811 46.4594 38.5875 46.4594 38.0991 45.971L34.1154 41.9857ZM37.545 32.0975C33.7194 34.6193 28.5148 34.1982 25.1475 30.8328C21.2999 26.9852 21.2999 20.735 25.1475 16.8857C28.9982 13.0381 35.2453 13.0381 39.0962 16.8857C42.4616 20.2511 42.8827 25.4543 40.361 29.2816L41.3362 32.4889C41.3863 32.6549 41.3409 32.8349 41.2203 32.957C41.0967 33.0791 40.9151 33.1245 40.7492 33.0744L37.5434 32.0976L37.545 32.0975ZM32.1229 31.2163C36.1834 31.2163 39.4813 27.9197 39.4813 23.8594C39.4813 19.7989 36.1832 16.5026 32.1229 16.5026C28.0626 16.5026 24.766 19.8007 24.766 23.8594C24.766 27.9199 28.0626 31.2163 32.1229 31.2163ZM26.0355 21.8242H28.6606C28.5713 22.4691 28.5228 23.1531 28.5228 23.8591C28.5228 24.5666 28.5698 25.2491 28.6606 25.894H26.0355C25.8226 25.2553 25.7068 24.5697 25.7068 23.8591C25.7068 23.1484 25.8226 22.4628 26.0355 21.8242ZM26.4362 26.8332H28.8218C29.0581 27.9633 29.426 28.937 29.8768 29.6648C29.9378 29.7588 29.9973 29.8496 30.0584 29.9372C28.4915 29.405 27.197 28.2811 26.4378 26.8347L26.4362 26.8332ZM34.191 29.9356C34.252 29.848 34.3131 29.7572 34.3726 29.6633C34.8218 28.937 35.1897 27.9618 35.4276 26.8316H37.8131C37.0524 28.278 35.7594 29.4019 34.191 29.9341L34.191 29.9356ZM30.0571 17.781C29.9961 17.8686 29.9366 17.9594 29.8756 18.0533C29.4263 18.7796 29.0585 19.7533 28.8206 20.8834H26.435C27.1942 19.4371 28.4887 18.3132 30.0556 17.7794L30.0571 17.781ZM38.2126 25.894H35.5907C35.6768 25.2491 35.7253 24.5666 35.7253 23.8591C35.7253 23.1516 35.6784 22.469 35.5907 21.8242H38.2126C38.4255 22.4644 38.5413 23.1484 38.5413 23.8591C38.5413 24.5697 38.4255 25.2553 38.2126 25.894ZM37.8135 20.885H35.4279C35.1916 19.7548 34.8237 18.7812 34.3729 18.0549C34.3134 17.9594 34.2524 17.8686 34.1913 17.7825C35.7598 18.3163 37.0527 19.4386 37.8135 20.8865L37.8135 20.885ZM34.4715 20.885H29.7803C29.99 19.9583 30.2984 19.1584 30.6772 18.5495C31.0936 17.8795 31.571 17.4413 32.1267 17.4413C32.6808 17.4413 33.1598 17.8796 33.5762 18.5495C33.955 19.1584 34.2634 19.9599 34.4731 20.885H34.4715ZM29.6064 21.8242H34.6451C34.7374 22.466 34.7875 23.15 34.7875 23.8591C34.7875 24.5697 34.7374 25.2522 34.6451 25.894H29.6064C29.514 25.2522 29.4639 24.5697 29.4639 23.8591C29.4639 23.15 29.514 22.4644 29.6064 21.8242ZM29.7801 26.8332H34.4714C34.2616 27.7599 33.9532 28.5597 33.5744 29.1686C33.1596 29.8386 32.6806 30.2769 32.125 30.2769C31.5708 30.2769 31.0919 29.8386 30.6755 29.1686C30.2967 28.5597 29.9899 27.7583 29.7785 26.8332H29.7801Z" fill="#151419" />
                </svg>
                <div class="feature-title">Campus immersion</div>
                <div class="feature-description">Participate in exclusive in-person meetups at campus with your batchmates and faculty.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
  </section>

      <section class="placement-section container section-mb doodle-section">
      <div class="placement-main-block">
  <div class="first-block">
    <div class="img-block">
      <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="ai-star" class="ai-star-fir" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/ai-star-fir.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/ai-star-fir.svg" alt="ai-star" class="ai-star-fir"></noscript>
      <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="thriving-mindset" class="thriving-mindset-img" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/thriving-mindset.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/thriving-mindset.svg" alt="thriving-mindset" class="thriving-mindset-img"></noscript>
      <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Placement Boy" class="placement-boy-img" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/placement-boy-new.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/placement-boy-new.webp" alt="Placement Boy" class="placement-boy-img"></noscript>
      <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="ai-star" class="ai-star-sec" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/ai-star-sec.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/ai-star-sec.png" alt="ai-star" class="ai-star-sec"></noscript>
    </div>
    <div class="leading-reqruiters-block">
      <p class="leading-reqruiters-title">Leading Recruiters</p>
      <div class="placement-section-logo-slider-new">
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/amazon-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/amazon-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/capgemini-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/capgemini-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/target-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/target-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/deloitte-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/deloitte-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/ey-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/ey-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/genpact-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/genpact-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/adani-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/adani-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/jio-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/jio-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/jsw-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/jsw-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/kpmg-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/kpmg-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/no-broker-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/no-broker-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/paypal-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/paypal-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/pepsico-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/pepsico-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/tata-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/tata-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/tech-mahindra-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/tech-mahindra-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/volvo-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/volvo-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/spinny-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/spinny-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/delhivery-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/delhivery-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/insurance-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/insurance-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/muthoot-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/muthoot-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
        <div class="logo-img-placement">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2074'%3E%3C/svg%3E" alt="leading reqruiters" width="160" height="74" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/fincare-logo.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/placement-new/our-reputed-hiring-partners/fincare-logo.png" alt="leading reqruiters" width="160" height="74"></noscript>
        </div>
      </div>
    </div>
  </div>
  <div class="second-block">
    <svg class="doodle" width="1920" height="1172" viewBox="0 0 1920 1172" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1954 -80.0586C1829.45 0.426338 620.628 1922.51 495.322 740.251C440.122 219.441 856.387 -126.44 929.5 219.441C981.5 465.441 481.905 810.764 326.5 822.441C153.5 835.441 -7.74971 606.675 -52.5 453.441" stroke="#ffffff" stroke-opacity="0.5" stroke-width="96" />
    </svg>
    <div class="text-main-div">
      <h2 class="experience-placement-title">Experience <span class="percent-tag">100%</span> Placement </br>Support For Your Career Success</h2>
      <p class="sub-title">Unlock your career potential with job-ready skills and expert placement support.</p>
      <div>
        <a class="learn-more-link" aria-label="Learn more about placements" href="/placements">Learn More
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" class="learn-more-arrow" alt="right arrow" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/right-arrow-icon.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/right-arrow-icon.svg" class="learn-more-arrow" alt="right arrow"></noscript>
        </a>
      </div>
    </div>
    <div class="placement-count-main-block">
      <div class="placement-count-block desk-count-block">
        <h3 class="counter-value">10,000 +</h3>
        <p class="counter-text">Learners offered placement assistance</p>
      </div>

      <div class="placement-count-block desk-count-block">
        <h3 class="counter-value">20,000 +</h3>
        <p class="counter-text">Opportunities </br>created</p>
      </div>

      <div class="placement-count-block desk-count-block">
        <h3 class="counter-value">500 +</h3>
        <p class="counter-text">Hiring </br>partners</p>
      </div>

      <div class="placement-count-block desk-count-block">
        <h3 class="counter-value">1,000 +</h3>
        <p class="counter-text">Industry-readiness programs</p>
      </div>

      <div class="placement-count-block mobile-count-block">
        <h3 class="counter-value">10,000 +</h3>
        <p class="counter-text">Learners offered</br>placement assistance</p>
      </div>

      <div class="placement-count-block mobile-count-block">
        <h3 class="counter-value">20,000 +</h3>
        <p class="counter-text">Opportunities </br>created</p>
      </div>

      <div class="placement-count-block mobile-count-block">
        <h3 class="counter-value">500 +</h3>
        <p class="counter-text hiring-partners-label">Hiring </br>partners</p>
      </div>

      <div class="placement-count-block mobile-count-block">
        <h3 class="counter-value">1,000 +</h3>
        <p class="counter-text">Industry-readiness programs</p>
      </div>
    </div>
  </div>
</div>    </section>
  
  <section class="campus-immersions section-mb">
    <div class="event-wrapper text-center">
  <img class="star" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2027%200'%3E%3C/svg%3E" width="27" alt="Star" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star-outline.svg"><noscript><img class="star" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star-outline.svg" width="27" alt="Star"></noscript>
  <img class="arrow" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2080%200'%3E%3C/svg%3E" width="80" alt="arrow" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/arrow-down-curve.svg"><noscript><img class="arrow" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/arrow-down-curve.svg" width="80" alt="arrow"></noscript>
  <img class="sticker" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20118%200'%3E%3C/svg%3E" width="118" alt="Star" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/stickers/golden-days.svg"><noscript><img class="sticker" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/stickers/golden-days.svg" width="118" alt="Star"></noscript>
  <img class="golden-day-mobile" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20118%200'%3E%3C/svg%3E" width="118" alt="Star" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/stickers/golden-day-mobile.svg"><noscript><img class="golden-day-mobile" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/stickers/golden-day-mobile.svg" width="118" alt="Star"></noscript>
  <h2 class="section-title">Campus Immersions</h2>
      <p class="event-text">Step into student life with our exclusive campus immersion experiences.</p>
  </div>
<div class="campus-swiper">
  <div class="swiper-wrapper">
            <div class="swiper-slide flex-item">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/EKAM/1-ekam_2024.png.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/EKAM/1-ekam_2024.png.webp" alt="Campus Immersion Images" loading="lazy"></noscript>
        </div>
                  <div class="swiper-slide flex-item">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/EKAM/2.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/EKAM/2.webp" alt="Campus Immersion Images" loading="lazy"></noscript>
        </div>
                  <div class="swiper-slide flex-item">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/EKAM/3.png.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/EKAM/3.png.webp" alt="Campus Immersion Images" loading="lazy"></noscript>
        </div>
                  <div class="swiper-slide flex-item">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/EKAM/4.png.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/EKAM/4.png.webp" alt="Campus Immersion Images" loading="lazy"></noscript>
        </div>
                  <div class="swiper-slide flex-item">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/EKAM/5.png.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/EKAM/5.png.webp" alt="Campus Immersion Images" loading="lazy"></noscript>
        </div>
                  <div class="swiper-slide flex-item">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/EKAM/6.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/EKAM/6.webp" alt="Campus Immersion Images" loading="lazy"></noscript>
        </div>
                  <div class="swiper-slide flex-item">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/EKAM/7.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/EKAM/7.webp" alt="Campus Immersion Images" loading="lazy"></noscript>
        </div>
                  <div class="swiper-slide flex-item">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/EKAM/8.png.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/EKAM/8.png.webp" alt="Campus Immersion Images" loading="lazy"></noscript>
        </div>
                  <div class="swiper-slide flex-item">
          <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/EKAM/9.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/EKAM/9.webp" alt="Campus Immersion Images" loading="lazy"></noscript>
        </div>
            </div>
</div>

<div class="panorama-swiper category-swiper">
  <div class="swiper-wrapper">
            <div class="swiper-slide flex-item">
          <a data-lity="" href="https://www.youtube.com/watch?v=8uRS7QZvuB4" class="video-slide">
            <div class="play-ic">
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2069%2069'%3E%3C/svg%3E" width="69" height="69" alt="video icon" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/play-video-white.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/play-video-white.png" width="69" height="69" alt="video icon"></noscript>
            </div>
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/1-Panorama_2025.jpg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/1-Panorama_2025.jpg" alt="Campus Immersion Images" loading="lazy"></noscript>
          </a>
        </div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/1-Panorama_2025.jpg.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/1-Panorama_2025.jpg.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/10-panorama.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/10-panorama.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/2-panorama.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/2-panorama.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/3-panorama.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/3-panorama.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/5-panorama.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/5-panorama.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/6-panorama.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/6-panorama.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/7-panorama.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/7-panorama.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/8-panorama.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/8-panorama.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/9-panorama.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/Panorama/9-panorama.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
            </div>
</div>

<div class="convocation-muj-swiper category-swiper">
  <div class="swiper-wrapper">
            <div class="swiper-slide flex-item">
          <a data-lity="" href="https://www.youtube.com/watch?v=HTcKdU9IET4" class="video-slide">
            <div class="play-ic">
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2069%2069'%3E%3C/svg%3E" width="69" height="69" alt="video icon" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/play-video-white.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/play-video-white.png" width="69" height="69" alt="video icon"></noscript>
            </div>
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/1-muj_Convocation_3.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/1-muj_Convocation_3.webp" alt="Campus Immersion Images" loading="lazy"></noscript>
          </a>
        </div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/10.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/10.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/12.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/12.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/13.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/13.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/14-muj_Convocation_2.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/14-muj_Convocation_2.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/15.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/15.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/16.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/16.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/17.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/17.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/18.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/18.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/19.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/19.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/2.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/2.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/20.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/20.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/21.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/21.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/22.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/22.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/23.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/23.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/24.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/24.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/25.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/25.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/3.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/3.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/4.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/4.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/5-muj_Convocation_1.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/5-muj_Convocation_1.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/6.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/6.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/7.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/7.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/8.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/8.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/9.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MUJ/9.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
            </div>
</div>

<div class="convocation-mahe-swiper category-swiper">
  <div class="swiper-wrapper">
            <div class="swiper-slide flex-item">
          <a data-lity="" href="https://www.youtube.com/watch?v=4_X9mSIf6ck" class="video-slide">
            <div class="play-ic">
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2069%2069'%3E%3C/svg%3E" width="69" height="69" alt="video icon" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/play-video-white.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/play-video-white.png" width="69" height="69" alt="video icon"></noscript>
            </div>
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MAHE/1-mahe-convocation.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MAHE/1-mahe-convocation.webp" alt="Campus Immersion Images" loading="lazy"></noscript>
          </a>
        </div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MAHE/2.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MAHE/2.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MAHE/3.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MAHE/3.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MAHE/4.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MAHE/4.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MAHE/5.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MAHE/5.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MAHE/6.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MAHE/6.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MAHE/7.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MAHE/7.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MAHE/8.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MAHE/8.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MAHE/9.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/MAHE/9.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
            </div>
</div>

<div class="convocation-launchpad-swiper category-swiper">
  <div class="swiper-wrapper">
            <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/LAUNCPAD/Resize Image-01.jpg.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/LAUNCPAD/Resize Image-01.jpg.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/LAUNCPAD/Resize Image-02.jpg.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/LAUNCPAD/Resize Image-02.jpg.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/LAUNCPAD/Resize Image-03.jpg.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/LAUNCPAD/Resize Image-03.jpg.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/LAUNCPAD/Resize Image-04.jpg.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/LAUNCPAD/Resize Image-04.jpg.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/LAUNCPAD/Resize Image-05.jpg.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/LAUNCPAD/Resize Image-05.jpg.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/LAUNCPAD/Resize Image-06.jpg.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/LAUNCPAD/Resize Image-06.jpg.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/LAUNCPAD/Resize Image-07.jpg.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/LAUNCPAD/Resize Image-07.jpg.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/LAUNCPAD/Resize Image-08.jpg.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/LAUNCPAD/Resize Image-08.jpg.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
                  <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Campus Immersion Images" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/LAUNCPAD/Resize Image-09.jpg.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/LAUNCPAD/Resize Image-09.jpg.webp" alt="Campus Immersion Images" loading="lazy"></noscript></div>
            </div>
</div>

<div class="convocation-smu-swiper category-swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="On Campus Event" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/8.jpg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/8.jpg" alt="On Campus Event"></noscript></div>
    <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="On Campus Event" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/9.jpg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/9.jpg" alt="On Campus Event"></noscript></div>
    <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="On Campus Event" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/4.jpg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/4.jpg" alt="On Campus Event"></noscript></div>
    <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="On Campus Event" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/5.jpg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/5.jpg" alt="On Campus Event"></noscript></div>
    <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="On Campus Event" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/10.jpg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/10.jpg" alt="On Campus Event"></noscript></div>
    <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="On Campus Event" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/11.jpg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/11.jpg" alt="On Campus Event"></noscript></div>
    <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="On Campus Event" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/3.jpg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/3.jpg" alt="On Campus Event"></noscript></div>
    <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="On Campus Event" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/6.jpg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/6.jpg" alt="On Campus Event"></noscript></div>
    <div class="swiper-slide flex-item"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="On Campus Event" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/7.jpg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/on-campus/7.jpg" alt="On Campus Event"></noscript></div>
  </div>
</div>

  <div class="view-all-link-block">
    <a href="/the-manipal-advantage#campus-immersion" class="view-all-link">View All
      <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="view all events" class="right-arrow-img" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/right-arrow-icon.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/right-arrow-icon.svg" alt="view all events" class="right-arrow-img"></noscript>
    </a>
  </div>
  </section>

      <section class="testimonial section-mb">
        <div class="container">
          <h2 class="section-title">Real stories, Real <span class="title">impact</span></h2>
      
    
    <div class="testimonial-section">
                                <div>
            <div class="testi-wrap">
              <div class="img-wrap">
                <img class="testimonial-img" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20364%20247'%3E%3C/svg%3E" width="364" height="247" alt="testimonial" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2025/01/testimonial-2.jpg"><noscript><img class="testimonial-img" src="https://www.onlinemanipal.com/wp-content/uploads/2025/01/testimonial-2.jpg" width="364" height="247" alt="testimonial"></noscript>
              </div>
              <div class="content-wrap">
                <p class="testimonial-desc full-des">My true passion lies in modelling. So I chose an online degree to balance my modelling career and my academics. This degree is very convenient for me, in terms of time and studies. Also, the reason I chose BBA is because I come from a business family and I also plan to be an entrepreneur in future.
</p>
                                  <p class="testimonial-desc default short-des">
                    My true passion lies in modelling. So I chose an online degree to balance my modelling career and my academics. This degree is very convenient for me, in terms of time and studies. Also, the reason I chose BBA is because I come from a business family and I also plan to be an entrepreneur in future.
                  </p>
                
                <div class="course-wrap">
                  <div class="name-course">
                    <div class="name-wrapper">
                      <div class="name">Strela Thounaojam Luwang</div>
                                          </div>
                    <div class="location"></div>
                    <!-- <div class="course"></div> -->
                    <div class="course">
                      BBA                      <span class='bullet'>&#8226;</span>
                      MUJ                                          </div>
                                          <div class="batch">Batch 2</div>
                                      </div>
                  <!--<span class="transBtn testi-read">Read More</span>-->
                </div>

                
              </div>
            </div>
          </div>
                                        <div>
            <div class="testi-wrap video-testi">
              <a href="https://youtu.be/M4rSZVANsc8" data-lity class="img-wrap">
                <img class="video-img" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20364%20490'%3E%3C/svg%3E" width="364" height="490" alt="testimonial" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/Shaun-Testimonial-scaled.jpg"><noscript><img class="video-img" src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/Shaun-Testimonial-scaled.jpg" width="364" height="490" alt="testimonial"></noscript>
                <div class="play-ic" aria-hidden="true"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2069%2069'%3E%3C/svg%3E" width="69" height="69" alt="testimonial video" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/play-video-white.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/play-video-white.png" width="69" height="69" alt="testimonial video"></noscript></div>
              </a>
              <div class="content-wrap">

                <div class="course-wrap">
                  <div class="name-course">
                    <div class="name-wrapper">
                      <div class="name">Shaun Sibichin</div>
                                          </div>
                    <div class="location"></div>
                    <div class="course">
                      MSc Business Analytics                      <span class='bullet'>&#8226;</span>
                      MAHE                    </div>
                                      </div>
                </div>

                
              </div>
            </div>
          </div>
                                        <div>
            <div class="testi-wrap">
              <div class="img-wrap">
                <img class="testimonial-img" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20364%20247'%3E%3C/svg%3E" width="364" height="247" alt="testimonial" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2025/05/Syeda-Hijab-Fatima.png"><noscript><img class="testimonial-img" src="https://www.onlinemanipal.com/wp-content/uploads/2025/05/Syeda-Hijab-Fatima.png" width="364" height="247" alt="testimonial"></noscript>
              </div>
              <div class="content-wrap">
                <p class="testimonial-desc full-des">Choosing to pursue my MBA in Online Manipal at MUJ was an easy choice for me because I had also completed my BBA from here. I recall an incident, 4 years ago when I started BBA, I was really nervous and had a notion that online education is boring and monotonous. But during the orientation, the faculty interaction, the course structure, and the energy in the air, was so lovely, all my doubts vanished. I respect the quality of education Online Manipal provides – it helps me build my skill sets at my own pace and provides me with campus experience through yearly events. The weekend classes and recorded sessions help me manage both my personal life and education in one-go.
</p>
                                  <p class="testimonial-desc default short-des">
                    Choosing to pursue my MBA in Online Manipal at MUJ was an easy choice for me because I had also completed my BBA from here. I recall an incident, 4 years ago when I started BBA, I was really nervous and had a notion that online education is boring and monotonous. But during the orientation, the faculty interaction, the'<span> ...</span><button data-showpopup='readMore_popup' class='show-popup testi-read-more' id='readMoreBtn'>Read More</button>                  </p>
                
                <div class="course-wrap">
                  <div class="name-course">
                    <div class="name-wrapper">
                      <div class="name">Syeda Hijab Fatima</div>
                                          </div>
                    <div class="location"></div>
                    <!-- <div class="course"></div> -->
                    <div class="course">
                      MBA                      <span class='bullet'>&#8226;</span>
                      MUJ                                          </div>
                                          <div class="batch">Batch 9</div>
                                      </div>
                  <!--<span class="transBtn testi-read">Read More</span>-->
                </div>

                
              </div>
            </div>
          </div>
                                        <div>
            <div class="testi-wrap">
              <div class="img-wrap">
                <img class="testimonial-img" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20364%20247'%3E%3C/svg%3E" width="364" height="247" alt="testimonial" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2025/04/Sarina-M.png"><noscript><img class="testimonial-img" src="https://www.onlinemanipal.com/wp-content/uploads/2025/04/Sarina-M.png" width="364" height="247" alt="testimonial"></noscript>
              </div>
              <div class="content-wrap">
                <p class="testimonial-desc full-des">With extensive experience in the hospitality industry, I needed a flexible degree that fit my schedule without requiring to go to campus. Choosing an online MBA program from Manipal University Jaipur was one of my best decisions. The program is well-structured, and the video recordings allowed me to learn at my own pace. Earning my master’s from a reputed university has been a game-changer for my career.
</p>
                                  <p class="testimonial-desc default short-des">
                    With extensive experience in the hospitality industry, I needed a flexible degree that fit my schedule without requiring to go to campus. Choosing an online MBA program from Manipal University Jaipur was one of my best decisions. The program is well-structured, and the video recordings allowed me to learn at my own pac'<span> ...</span><button data-showpopup='readMore_popup' class='show-popup testi-read-more' id='readMoreBtn'>Read More</button>                  </p>
                
                <div class="course-wrap">
                  <div class="name-course">
                    <div class="name-wrapper">
                      <div class="name">Sarina Menzes</div>
                                          </div>
                    <div class="location"></div>
                    <!-- <div class="course"></div> -->
                    <div class="course">
                      MBA                      <span class='bullet'>&#8226;</span>
                      MUJ                                          </div>
                                      </div>
                  <!--<span class="transBtn testi-read">Read More</span>-->
                </div>

                
              </div>
            </div>
          </div>
                                        <div>
            <div class="testi-wrap video-testi">
              <a href="https://www.youtube.com/watch?v=xsjSSpbhua8&amp;list=PLQYn61BCELDToZrhMPuxbqyoAlKifl5It&amp;index=4" data-lity class="img-wrap">
                <img class="video-img" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20364%20490'%3E%3C/svg%3E" width="364" height="490" alt="testimonial" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2025/06/Shimona-Aithala.jpg"><noscript><img class="video-img" src="https://www.onlinemanipal.com/wp-content/uploads/2025/06/Shimona-Aithala.jpg" width="364" height="490" alt="testimonial"></noscript>
                <div class="play-ic" aria-hidden="true"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2069%2069'%3E%3C/svg%3E" width="69" height="69" alt="testimonial video" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/play-video-white.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/play-video-white.png" width="69" height="69" alt="testimonial video"></noscript></div>
              </a>
              <div class="content-wrap">

                <div class="course-wrap">
                  <div class="name-course">
                    <div class="name-wrapper">
                      <div class="name">Shimona Aithala</div>
                                          </div>
                    <div class="location"></div>
                    <div class="course">
                      MBA                      <span class='bullet'>&#8226;</span>
                      MAHE                    </div>
                                          <div class="batch">Batch 4</div>
                                      </div>
                </div>

                
              </div>
            </div>
          </div>
                                        <div>
            <div class="testi-wrap">
              <div class="img-wrap">
                <img class="testimonial-img" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20364%20247'%3E%3C/svg%3E" width="364" height="247" alt="testimonial" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/12/Nishank-1.png"><noscript><img class="testimonial-img" src="https://www.onlinemanipal.com/wp-content/uploads/2023/12/Nishank-1.png" width="364" height="247" alt="testimonial"></noscript>
              </div>
              <div class="content-wrap">
                <p class="testimonial-desc full-des">After 6 years of monkhood, I returned to the materialistic life and wanted to build my own career. When I started working, I realized I was losing out on opportunities because I didn&#8217;t have a degree. I chose to pursue an online BBA from MUJ, which is helping me in my current job role. I have received great career advise from faculty members and I&#8217;m able to learn at my own convenience.
</p>
                                  <p class="testimonial-desc default short-des">
                    After 6 years of monkhood, I returned to the materialistic life and wanted to build my own career. When I started working, I realized I was losing out on opportunities because I didn&#8217;t have a degree. I chose to pursue an online BBA from MUJ, which is helping me in my current job role. I have received great career'<span> ...</span><button data-showpopup='readMore_popup' class='show-popup testi-read-more' id='readMoreBtn'>Read More</button>                  </p>
                
                <div class="course-wrap">
                  <div class="name-course">
                    <div class="name-wrapper">
                      <div class="name">Nishank Govil</div>
                                          </div>
                    <div class="location"></div>
                    <!-- <div class="course"></div> -->
                    <div class="course">
                      BBA                      <span class='bullet'>&#8226;</span>
                      MUJ                                          </div>
                                          <div class="batch">Batch 1</div>
                                      </div>
                  <!--<span class="transBtn testi-read">Read More</span>-->
                </div>

                
              </div>
            </div>
          </div>
                                        <div>
            <div class="testi-wrap video-testi">
              <a href="https://www.youtube.com/watch?v=LlJMiddtRt8" data-lity class="img-wrap">
                <img class="video-img" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20364%20490'%3E%3C/svg%3E" width="364" height="490" alt="testimonial" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2024/01/Img-2@2x-100.jpg"><noscript><img class="video-img" src="https://www.onlinemanipal.com/wp-content/uploads/2024/01/Img-2@2x-100.jpg" width="364" height="490" alt="testimonial"></noscript>
                <div class="play-ic" aria-hidden="true"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2069%2069'%3E%3C/svg%3E" width="69" height="69" alt="testimonial video" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/play-video-white.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/play-video-white.png" width="69" height="69" alt="testimonial video"></noscript></div>
              </a>
              <div class="content-wrap">

                <div class="course-wrap">
                  <div class="name-course">
                    <div class="name-wrapper">
                      <div class="name">Sakshi Chaudhary</div>
                                          </div>
                    <div class="location"></div>
                    <div class="course">
                      MBA                      <span class='bullet'>&#8226;</span>
                      MUJ                    </div>
                                          <div class="batch">Batch 1</div>
                                      </div>
                </div>

                
              </div>
            </div>
          </div>
                                        <div>
            <div class="testi-wrap">
              <div class="img-wrap">
                <img class="testimonial-img" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20364%20247'%3E%3C/svg%3E" width="364" height="247" alt="testimonial" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/12/Rajat-Kumar.jpg"><noscript><img class="testimonial-img" src="https://www.onlinemanipal.com/wp-content/uploads/2023/12/Rajat-Kumar.jpg" width="364" height="247" alt="testimonial"></noscript>
              </div>
              <div class="content-wrap">
                <p class="testimonial-desc full-des">Currently employed with the Aditya Birla Group, after a break of 10 years from academics, I chose to pursue an online MBA to acquire practical skills that will help contribute to my current job role. By interacting with peers from diverse professional backgrounds, this program has not only equipped me with valuable skills but has also expanded my professional network.  
</p>
                                  <p class="testimonial-desc default short-des">
                    Currently employed with the Aditya Birla Group, after a break of 10 years from academics, I chose to pursue an online MBA to acquire practical skills that will help contribute to my current job role. By interacting with peers from diverse professional backgrounds, this program has not only equipped me with valuable ski'<span> ...</span><button data-showpopup='readMore_popup' class='show-popup testi-read-more' id='readMoreBtn'>Read More</button>                  </p>
                
                <div class="course-wrap">
                  <div class="name-course">
                    <div class="name-wrapper">
                      <div class="name">Rajat Kumar</div>
                                          </div>
                    <div class="location"></div>
                    <!-- <div class="course"></div> -->
                    <div class="course">
                      MBA                      <span class='bullet'>&#8226;</span>
                      MUJ                                          </div>
                                          <div class="batch">Batch 1</div>
                                      </div>
                  <!--<span class="transBtn testi-read">Read More</span>-->
                </div>

                
              </div>
            </div>
          </div>
                                        <div>
            <div class="testi-wrap video-testi">
              <a href="https://youtu.be/v-gRGe7NF_g" data-lity class="img-wrap">
                <img class="video-img" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20364%20490'%3E%3C/svg%3E" width="364" height="490" alt="testimonial" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2025/05/Edween_11zon-scaled.jpg"><noscript><img class="video-img" src="https://www.onlinemanipal.com/wp-content/uploads/2025/05/Edween_11zon-scaled.jpg" width="364" height="490" alt="testimonial"></noscript>
                <div class="play-ic" aria-hidden="true"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2069%2069'%3E%3C/svg%3E" width="69" height="69" alt="testimonial video" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/play-video-white.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/play-video-white.png" width="69" height="69" alt="testimonial video"></noscript></div>
              </a>
              <div class="content-wrap">

                <div class="course-wrap">
                  <div class="name-course">
                    <div class="name-wrapper">
                      <div class="name">Edwin Masereka</div>
                                          </div>
                    <div class="location"></div>
                    <div class="course">
                      MSc Data Science                      <span class='bullet'>&#8226;</span>
                      MAHE                    </div>
                                      </div>
                </div>

                
              </div>
            </div>
          </div>
                                        <div>
            <div class="testi-wrap">
              <div class="img-wrap">
                <img class="testimonial-img" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20364%20247'%3E%3C/svg%3E" width="364" height="247" alt="testimonial" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/12/Learner-insight-2.jpg"><noscript><img class="testimonial-img" src="https://www.onlinemanipal.com/wp-content/uploads/2023/12/Learner-insight-2.jpg" width="364" height="247" alt="testimonial"></noscript>
              </div>
              <div class="content-wrap">
                <p class="testimonial-desc full-des">This program has been instrumental in equipping me with knowledge in programming languages such as Python and SQL, providing valuable skills for my upcoming job search. The unique virtual lab experience added an extra layer to my learning. I extend a special thanks to my mentor, whose continuous support was invaluable throughout my educational journey. In retrospect, I am convinced that choosing to pursue an online degree from MUJ was the perfect decision. 
</p>
                                  <p class="testimonial-desc default short-des">
                    This program has been instrumental in equipping me with knowledge in programming languages such as Python and SQL, providing valuable skills for my upcoming job search. The unique virtual lab experience added an extra layer to my learning. I extend a special thanks to my mentor, whose continuous support was invaluable '<span> ...</span><button data-showpopup='readMore_popup' class='show-popup testi-read-more' id='readMoreBtn'>Read More</button>                  </p>
                
                <div class="course-wrap">
                  <div class="name-course">
                    <div class="name-wrapper">
                      <div class="name">Vinita Chandalia</div>
                                          </div>
                    <div class="location"></div>
                    <!-- <div class="course"></div> -->
                    <div class="course">
                      MCA                      <span class='bullet'>&#8226;</span>
                      MUJ                                          </div>
                                          <div class="batch">Batch 1</div>
                                      </div>
                  <!--<span class="transBtn testi-read">Read More</span>-->
                </div>

                
              </div>
            </div>
          </div>
                                        <div>
            <div class="testi-wrap">
              <div class="img-wrap">
                <img class="testimonial-img" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20364%20247'%3E%3C/svg%3E" width="364" height="247" alt="testimonial" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2025/05/Irfan-Ansar-1.png"><noscript><img class="testimonial-img" src="https://www.onlinemanipal.com/wp-content/uploads/2025/05/Irfan-Ansar-1.png" width="364" height="247" alt="testimonial"></noscript>
              </div>
              <div class="content-wrap">
                <p class="testimonial-desc full-des">As an international student enrolled in an Indian college, I had always been curious to experience what Online Manipal had to offer. Even though the time zones are different, Online Manipal has made it easy for me to learn and grow at my own pace without any difficulties. In EKAM 2025, I also got first-hand experience of Indian college life in terms of campus tour, the warm faculty, and lifelong connections.
</p>
                                  <p class="testimonial-desc default short-des">
                    As an international student enrolled in an Indian college, I had always been curious to experience what Online Manipal had to offer. Even though the time zones are different, Online Manipal has made it easy for me to learn and grow at my own pace without any difficulties. In EKAM 2025, I also got first-hand experience '<span> ...</span><button data-showpopup='readMore_popup' class='show-popup testi-read-more' id='readMoreBtn'>Read More</button>                  </p>
                
                <div class="course-wrap">
                  <div class="name-course">
                    <div class="name-wrapper">
                      <div class="name">Irfan Ansar</div>
                                          </div>
                    <div class="location"></div>
                    <!-- <div class="course"></div> -->
                    <div class="course">
                      BBA                      <span class='bullet'>&#8226;</span>
                      MUJ                                          </div>
                                          <div class="batch">Batch 8</div>
                                      </div>
                  <!--<span class="transBtn testi-read">Read More</span>-->
                </div>

                
              </div>
            </div>
          </div>
                                        <div>
            <div class="testi-wrap">
              <div class="img-wrap">
                <img class="testimonial-img" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20364%20247'%3E%3C/svg%3E" width="364" height="247" alt="testimonial" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2024/02/Prajna.png"><noscript><img class="testimonial-img" src="https://www.onlinemanipal.com/wp-content/uploads/2024/02/Prajna.png" width="364" height="247" alt="testimonial"></noscript>
              </div>
              <div class="content-wrap">
                <p class="testimonial-desc full-des">Having worked in enterprise resource planning for the past three years, I made the decision to transition my career into the thriving field of data science. However, I was determined to do so without leaving my current job, and Online Manipal happened to be the best choice. The study materials provided proved were excellent, and the faculty members were very helpful.
</p>
                                  <p class="testimonial-desc default short-des">
                    Having worked in enterprise resource planning for the past three years, I made the decision to transition my career into the thriving field of data science. However, I was determined to do so without leaving my current job, and Online Manipal happened to be the best choice. The study materials provided proved were exce'<span> ...</span><button data-showpopup='readMore_popup' class='show-popup testi-read-more' id='readMoreBtn'>Read More</button>                  </p>
                
                <div class="course-wrap">
                  <div class="name-course">
                    <div class="name-wrapper">
                      <div class="name">Prajna Paramita</div>
                                          </div>
                    <div class="location"></div>
                    <!-- <div class="course"></div> -->
                    <div class="course">
                      MSc Data Science                      <span class='bullet'>&#8226;</span>
                      MAHE                                          </div>
                                      </div>
                  <!--<span class="transBtn testi-read">Read More</span>-->
                </div>

                
              </div>
            </div>
          </div>
                  </div>
  </div>


<div id="overlay" class="overlay"></div>
<div id="readMore_popup" class="popup hidden">
  <button id="closePopup" class="close-btn"></button>
  <div class="popup-content">
    <div class="image-wrapper">
      <img class="popup-image" src="" alt="testimonial">
      <div class="info">
        <p class="popup-name"></p>
        <p class="popup-location"></p>
        <p class="popup-coursename"></p>
        <p class="popup-batch"></p>
      </div>
    </div>
    <p class="popup-desc"></p>
  </div>
</div>    
</section>
  <section class="read-blog-section section-mb">
      <div class="read-blog-section">
  <div class="blog-wrapper container">
    <div class="section-top">
              <h2 class="section-title">Read Our Blogs</h2>
            <a class="view-button" href="/blogs">View All</a>
    </div>
    <div class="top-read-blog-slider">
                      <a href="https://www.onlinemanipal.com/blogs/why-is-environmental-studies-included-in-the-ug-curriculum">
          <div class="blog-item">
            <div class="blog-img">
              <div class="read-blog-course-enroll">
                                                                            <div class="blog-top-ranked" title="Bachelor&#039;s Degree">
                        Bachelor&#039;s Degree                      </div>
                                          <div class="blog-top-ranked" title="Online Learning">
                        Online Learning                      </div>
                                                                    </div>
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Why is Environmental Studies Included in the UG Curriculum?" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2025/02/Online-Learning-MBA.jpg"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2025/02/Online-Learning-MBA.jpg" alt="Why is Environmental Studies Included in the UG Curriculum?"></noscript>
            </div>
            <div class="blog-duration">
              <div class="blog-date">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" alt="calender" width="16" height="16" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/Vector.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/Vector.svg" alt="calender" width="16" height="16"></noscript>
                <span>25 Jul 2025</span>
              </div>
              <div class="dot-blog"></div>
              <div class="blog-time">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" alt="course" width="20" height="20"></noscript>
                <span>11 mins</span>
              </div>
            </div>
            <div class="read-blog-wrapper">
              <div class="blog-deatil">
                <div class="blog-name">Why is Environmental Studies Included in the UG Curriculum?</div>
              </div>
            </div>
          </div>
        </a>
                      <a href="https://www.onlinemanipal.com/blogs/from-nuclear-physics-to-sustainable-fashion-the-multifaceted-journey-of-badigeri-emaniel-sree-harsha">
          <div class="blog-item">
            <div class="blog-img">
              <div class="read-blog-course-enroll">
                                                                            <div class="blog-top-ranked" title="Student Spotlight">
                        Student Spotlight                      </div>
                                                                    </div>
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="From Nuclear Physics to Sustainable Fashion: The Multifaceted Journey of Badigeri Emaniel Sree Harsha " data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2025/07/Badigeri-Emaniel-Sree-Harsha-2.jpg"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2025/07/Badigeri-Emaniel-Sree-Harsha-2.jpg" alt="From Nuclear Physics to Sustainable Fashion: The Multifaceted Journey of Badigeri Emaniel Sree Harsha "></noscript>
            </div>
            <div class="blog-duration">
              <div class="blog-date">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" alt="calender" width="16" height="16" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/Vector.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/Vector.svg" alt="calender" width="16" height="16"></noscript>
                <span>25 Jul 2025</span>
              </div>
              <div class="dot-blog"></div>
              <div class="blog-time">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" alt="course" width="20" height="20"></noscript>
                <span>4 mins</span>
              </div>
            </div>
            <div class="read-blog-wrapper">
              <div class="blog-deatil">
                <div class="blog-name">From Nuclear Physics to Sustainable Fashion: The Multifaceted Journey of Badigeri Emaniel Sree Harsha </div>
              </div>
            </div>
          </div>
        </a>
                      <a href="https://www.onlinemanipal.com/blogs/bba-hons-projects-help-in-phd-transition">
          <div class="blog-item">
            <div class="blog-img">
              <div class="read-blog-course-enroll">
                                                                            <div class="blog-top-ranked" title="Bachelor&#039;s Degree">
                        Bachelor&#039;s Degree                      </div>
                                          <div class="blog-top-ranked" title="Online Learning">
                        Online Learning                      </div>
                                                                    </div>
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="How Research Projects in BBA (Hons) Help You Transition Smoothly to PhD Programs " data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2025/07/How-Research-Projects-in-BBA-Hons-Help-You-Transition-Smoothly-to-PhD-Programs-.jpg"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2025/07/How-Research-Projects-in-BBA-Hons-Help-You-Transition-Smoothly-to-PhD-Programs-.jpg" alt="How Research Projects in BBA (Hons) Help You Transition Smoothly to PhD Programs "></noscript>
            </div>
            <div class="blog-duration">
              <div class="blog-date">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" alt="calender" width="16" height="16" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/Vector.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/Vector.svg" alt="calender" width="16" height="16"></noscript>
                <span>25 Jul 2025</span>
              </div>
              <div class="dot-blog"></div>
              <div class="blog-time">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" alt="course" width="20" height="20"></noscript>
                <span>8 mins</span>
              </div>
            </div>
            <div class="read-blog-wrapper">
              <div class="blog-deatil">
                <div class="blog-name">How Research Projects in BBA (Hons) Help You Transition Smoothly to PhD Programs </div>
              </div>
            </div>
          </div>
        </a>
                      <a href="https://www.onlinemanipal.com/blogs/vijaya-ghosh-upskilling">
          <div class="blog-item">
            <div class="blog-img">
              <div class="read-blog-course-enroll">
                                                                            <div class="blog-top-ranked" title="EdTalk">
                        EdTalk                      </div>
                                                                    </div>
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Upskilling: The Future of Work" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2025/07/Vijaya-Ghosh.jpg"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2025/07/Vijaya-Ghosh.jpg" alt="Upskilling: The Future of Work"></noscript>
            </div>
            <div class="blog-duration">
              <div class="blog-date">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2016'%3E%3C/svg%3E" alt="calender" width="16" height="16" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/Vector.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/Vector.svg" alt="calender" width="16" height="16"></noscript>
                <span>24 Jul 2025</span>
              </div>
              <div class="dot-blog"></div>
              <div class="blog-time">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" alt="course" width="20" height="20" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" alt="course" width="20" height="20"></noscript>
                <span>6 mins</span>
              </div>
            </div>
            <div class="read-blog-wrapper">
              <div class="blog-deatil">
                <div class="blog-name">Upskilling: The Future of Work</div>
              </div>
            </div>
          </div>
        </a>
          </div>
  </div>    </section>
  
</main>

<!------ Popup form ------>
<div id="overlay" class="overlay"></div>
<div id="leadForm_popup" class="popup hidden">
  <button id="closePopup" class="close-btn"></button>
  <div class="formBlock">
  <form class="enroll-now-form" id="leadForm" action="" method="POST">
    <div class="form-details-block">
      <h2 class="section-title">Take the Next Step Toward Achieving Your Academic And Career Goals</h2>
      <div class="messageBlock">
        <div id="successMessage" class="alert alert-success hidden"></div>
        <div id="errorMessage" class="alert alert-danger hidden"></div>
      </div>
      <div class="fields">
        <div class="form-group">
          <label for="name">Full name <span class="required">*</span></label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
        </div>
        <div class="form-group">
          <label for="email">Email address <span class="required">*</span></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group mobileBlock">
          <label for="mobile">Mobile number <span class="required">*</span></label>
          <input type="tel" class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter your mobile number" required>
        </div>
                              <div class="form-group courseName">
              <label for="course">Course <span class="required">*</span></label>
              <select class="courseName" name="course_name" data-placeholder="Select course*" data-search="true" required>
                <option value=""></option>
                <option value="MBA">Master of Business Administration</option>
                <option value="BBA">Bachelor of Business Administration</option>
                <option value="BCA">Bachelor of Computer Applications</option>
                <option value="B.Com">Bachelor of Commerce</option>
                <option value="MCA">Master of Computer Applications</option>
                <option value="M.Com">Master of Commerce</option>
                <option value="MA.JMC">Master of Arts in Journalism &amp; Mass Communication</option>
                <option value="MA in Economics">MA in Economics</option>
                <option value="MSc Data Science">MSc Data Science</option>
                <option value="MSc Business Analytics">MSc Business Analytics</option>
                <option value="PGCP Business Analytics">PGCP Business Analytics</option>
                <option value="PGCP Logistics and Supply Chain">PGCP Logistics and Supply Chain</option>
                                  <option value="PGCP Entrepreneurship and Innovation">PGCP in Entrepreneurship and Innovation</option>
                                <option value="PGCP Data Science">PGCP in Data Science</option>
                <option value="BA">Bachelor of Arts</option>
                <option value="MA in English">MA in English</option>
                <option value="MA in Sociology">MA in Sociology</option>
                <option value="MA in Political Science">MA in Political Science</option>
              </select>
              <span class="error" id="course_nameError"></span>
            </div>
                                <div class="form-group institutionName">
              <label for="institution">Institution <span class="required">*</span></label>
              <select class="universityName" name="institution" data-placeholder="Select institution*" required>
                <option value=""></option>
                <option value="Manipal University Jaipur">Manipal University Jaipur</option>
                                  <option value="Manipal Academy of Higher Education">Manipal Academy of Higher Education</option>
                                <option value="Sikkim Manipal University">Sikkim Manipal University</option>
              </select>
              <span class="error" id="institutionError"></span>
            </div>
                          <div class="form-group terms-condition">
          <input type="checkbox" checked="" id="javascript2"><label for="javascript2">I authorize Online Manipal and its associates to contact me with updates notifications via email, SMS, WhatsApp, and voice call. This consent will override any registration for DNC / NDNC.</label>
        </div>
        <div class="hidden">
          <input value="" type="hidden" name="leadsquared-Source">
          <input value="" type="hidden" name="leadsquared-SourceCampaign">
          <input value="" type="hidden" name="leadsquared-SourceContent">
          <input value="" type="hidden" name="leadsquared-SourceMedium">
          <input value="" type="hidden" name="leadsquared-mx_UTM_Keyword">
          <input value="" type="hidden" name="leadsquared-mx_Marketing_Ad_Set">
          <input value="" type="hidden" name="leadsquared-Adset_id">
          <input value="" type="hidden" name="leadsquared-mx_UTM_Matchtype">
          <input value="" type="hidden" name="leadsquared-mx_UTM_Placement">
          <input value="" type="hidden" name="leadsquared-mx_UTM_Position">
          <input value="" type="hidden" name="leadsquared-mx_Lead_Medium">
          <input value="" type="hidden" name="leadsquared-mx_gclid">
          <input value="Desktop" type="hidden" name="leadsquared-mx_Device">
          <input value="https://www.onlinemanipal.com/" type="hidden" name="leadsquared-Website">
          <input value="122.161.48.84" type="hidden" name="leadsquared-mx_Website_IP_Address">
          <input value="" type="hidden" name="referer_url">
          <input value="" type="hidden" name="otp_token">
          <input value="" type="hidden" name="sub_token">
          <input value="" type="hidden" name="leadsquared-mx_Location">
          <input value="" type="hidden" name="userCountry">
          <input value="" type="hidden" name="leadsquared-mx_mobile">
          <input value="Header Enroll Form" type="hidden" name="LeadFormName">
          <input value="" type="hidden" name="honeypot">
        </div>
        <div class="form-group">
          <button class="lead-submit" type="submit">Submit</button>
        </div>
      </div>
    </div>
    <div class="otp-verification-block hidden">
      <h5>Verify OTP</h5>
      <div class="otp-info-block">
        <p>Enter the 4 digit OTP recevied on <span class="otpNumber"></span></p>
        <span class="editLink">Edit</span>
      </div>
      <div class="form-group mb-3" id="otpSection">
        <div class="otp-field">
          <div class="d-flex flex-column otp-wrap">
            <input type="number" maxlength="1" class="otp-input form-control" name="otp1" id="otp1" />
          </div>
          <div class="d-flex flex-column otp-wrap">
            <input type="number" maxlength="1" class="otp-input form-control" name="otp2" id="otp2" />
          </div>
          <div class="d-flex flex-column otp-wrap">
            <input type="number" maxlength="1" class="otp-input form-control" name="otp3" id="otp3" />
          </div>
          <div class="d-flex flex-column otp-wrap">
            <input type="number" maxlength="1" class="otp-input form-control" name="otp4" id="otp4" />
          </div>
        </div>
        <div class="resendOTPBlock">
          <button type="button" id="resendOtpBtn" class="btn btn-primary w-50 resend-otp">Resend OTP</button>
          <span>00:<span class='countdown'>30</span>s</span>
        </div>
      </div>
      <p>Once verified, you will be redirected to the university application portal to complete the application process.</p>
      <div class="form-group">
        <button class="lsq-submit" type="submit">Verify</button>
      </div>
    </div>
  </form>
</div></div>

<!-- Personalization Popup -->
<div id="personalizationForm_popup" class="popup hidden">
  <button id="closePopup" class="close-btn"></button>
  <button id="prevStep" class="back-btn hidden common-popup"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="back-icon" class="common-popup" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/back-arrow.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/back-arrow.svg" alt="back-icon" class="common-popup"></noscript></button>
  <div class="personalization-form common-popup" id="personalizationForm" action="" method="POST">
  <div class="form-details-block">
    <div class="messageBlock">
      <div id="successMessage" class="alert alert-success hidden"></div>
      <div id="errorMessage" class="alert alert-danger hidden"></div>
    </div>
    <div id="getStarted" class="formBlock">
      <svg class="doodle animate" xmlns="http://www.w3.org/2000/svg" width="1138" height="623" viewBox="0 0 1138 623" fill="none">
        <path d="M1349 34.0001C1297.67 67.1654 473.5 901.5 337.79 448.524C275.854 241.791 486.607 91.3878 516.742 233.915C538.174 335.284 341.031 471.5 218.5 471.5C-93.7088 471.5 -113.556 211.143 -132 148" stroke="#EFEFD0" stroke-width="80"/>
      </svg>
      <div class="layout-container">
        <div class="left">
          <div class="step-title heading">
            Tell us a bit about yourself to 
            <span class="circle-word">
              personalize
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="172" height="46" viewBox="0 0 172 46" fill="none">
                  <path d="M136.738 4.41817C104.569 -1.1853 39.113 -2.18171 8.65636 19.4877C-29.4145 46.5745 84.637 47.2916 128.054 43.1018C154.031 40.595 171 34.4614 171 25.5874C171 17.9476 147.175 1.34304 93.8462 3.51346" stroke="#F26722" stroke-linecap="round"/>
                </svg> -->
            </span> 
            your experience. 
          </div>
          <p class="description">Your inputs will shape a personalized website experience, offering tailored recommendations and curated content just for you. </p>
          <button class="get-started move-forward common-popup">Get Started</button>
        </div>
        <div class="right">
          <img class="girl-image" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="personalization" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/popups/personalize2.png"><noscript><img class="girl-image" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/popups/personalize2.png" alt="personalization"></noscript>
        </div>
      </div>
    </div>
    <form id="education" class="formBlock pb-40 equal-blocks hidden">
      <div class="step-title heading mb-0">What’s your highest level of education ?</div>
      <div class="flex-container form-section">
        <label for="highSchool" class="flex-item">
          <input type="radio" value="High School Graduate" name="education" id="highSchool" checked>
          <div class="right">
            <div class="field-label heading">High School Graduate</div>
            <div class="field-description">Completed 10+2 or equivalent</div>
          </div>
        </label>
        <label for="bachelor" class="flex-item">
          <input type="radio" value="Bachelor Degree" name="education" id="bachelor">
          <div class="right">
            <div class="field-label heading">Bachelor’s Degree</div>
            <div class="field-description">Eg., BA, BBA, BCA, BSc, BCom</div>
          </div>
        </label>
        <label for="master" class="flex-item">
          <input type="radio" value="Master Degree" name="education" id="master">
          <div class="right">
            <div class="field-label heading">Master’s Degree</div>
            <div class="field-description">Eg., MA, MS, MCom, MBA, MSc</div>
          </div>
        </label>
      </div>
      <div class="flex-container action-section">
        <button class="move-forward common-popup">Next</button>
        <!-- <a href="javascript:void(0)" class="skip-link move-forward">Skip</a> -->
      </div>
    </form>
    <form id="interestedField" class="formBlock pb-40 equal-blocks hidden">
      <div class="step-title heading mb-0">Which field are you most interested in ?</div>
      <div class="flex-container form-section">
        <label for="Management" class="flex-item">
          <input type="checkbox" value="Management" name="interested" id="Management" checked>
          <div class="right">
            <div class="field-label heading">Management</div>
            <div class="field-description managment-sub">BBA</div>
          </div>
        </label>
        <label for="informationTechnology" class="flex-item">
          <input type="checkbox" value="Information Technology" name="interested" id="informationTechnology">
          <div class="right">
            <div class="field-label heading">Information Technology</div>
            <div class="field-description information-sub">BCA</div>
          </div>
        </label>
        <label for="commerce" class="flex-item">
          <input type="checkbox"value="Commerce" name="interested" id="commerce">
          <div class="right">
            <div class="field-label heading">Commerce</div>
            <div class="field-description commerce-sub">B.Com</div>
          </div>
        </label>
        <label for="arts" class="flex-item">
          <input type="checkbox"value="Arts" name="interested" id="arts">
          <div class="right">
            <div class="field-label heading">Arts</div>
            <div class="field-description arts-sub">English, Political Science, Sociology</div>
          </div>
        </label>
        <label for="dataScience" class="flex-item master-card">
          <input type="checkbox"value="Data Science" name="interested" id="dataScience">
          <div class="right">
            <div class="field-label heading">Data Science</div>
            <div class="field-description">MSc, Post Graduate Certificate</div>
          </div>
        </label>
        <label for="businessAnalytics" class="flex-item master-card">
          <input type="checkbox"value="Business Analytics" name="interested" id="businessAnalytics">
          <div class="right">
            <div class="field-label heading">Business Analytics</div>
            <div class="field-description">MSc, Post Graduate Certificate</div>
          </div>
        </label>
        <label for="supplyChain" class="flex-item master-card">
          <input type="checkbox"value="Supply Chain" name="interested" id="supplyChain">
          <div class="right">
            <div class="field-label heading">Supply Chain</div>
            <div class="field-description">Post Graduate Certificate</div>
          </div>
        </label>
        <label for="mediaAndJournalism" class="flex-item master-card">
          <input type="checkbox"value="Media and Journalism" name="interested" id="mediaAndJournalism">
          <div class="right">
            <div class="field-label heading">Media & Journalism</div>
            <div class="field-description">MA</div>
          </div>
        </label>
      </div>
      <div class="flex-container action-section">
        <button class="move-forward common-popup">Next</button>
        <!-- <a href="javascript:void(0)" class="skip-link move-forward">Skip</a> -->
      </div>
    </form>
    <!-- <form id="specialization" class="formBlock pb-40 odd-blocks hidden">
      <div class="step-title heading mb-0">Would you like to get a specialization to advance ahead in your career?</div>
      <div class="flex-container form-section">
        <label for="digitalMarketing" class="flex-item">
          <input type="checkbox" value="Digital Marketing" name="specialization" id="digitalMarketing" checked>
          <div class="right">
            <div class="field-label heading">Digital Marketing</div>
          </div>
        </label>
        <label for="Finance" class="flex-item">
          <input type="checkbox" value="Finance" name="specialization" id="Finance">
          <div class="right">
            <div class="field-label heading">Finance</div>
          </div>
        </label>
        <label for="Marketing" class="flex-item">
          <input type="checkbox" value="Marketing" name="specialization" id="Marketing">
          <div class="right">
            <div class="field-label heading">Marketing</div>
          </div>
        </label>
        <label for="projectManagement" class="flex-item">
          <input type="checkbox" value="Project Management" name="specialization" id="projectManagement">
          <div class="right">
            <div class="field-label heading">Project Management</div>
          </div>
        </label>
        <label for="HRManagement" class="flex-item">
          <input type="checkbox" value="Human Resource Management" name="specialization" id="HRManagement">
          <div class="right">
            <div class="field-label heading">Human Resource Management</div>
          </div>
        </label>
        <label for="dataScience" class="flex-item">
          <input type="checkbox" value="Analytics & Data Science" name="specialization" id="dataScience">
          <div class="right">
            <div class="field-label heading">Analytics & Data Science</div>
          </div>
        </label>
        <label for="bfsi" class="flex-item">
          <input type="checkbox" value="BFSI" name="bfsi" id="bfsi">
          <div class="right">
            <div class="field-label heading">BFSI</div>
          </div>
        </label>
        <label for="itFintech" class="flex-item">
          <input type="checkbox" value="It & Fintech" name="itFintech" id="itFintech">
          <div class="right">
            <div class="field-label heading">It & Fintech</div>
          </div>
        </label>
        <label for="operationsManagement" class="flex-item">
          <input type="checkbox" value="Operations Management" name="operationsManagement" id="operationsManagement">
          <div class="right">
            <div class="field-label heading">Operations Management</div>
          </div>
        </label>
        <label for="internationalBusiness" class="flex-item">
          <input type="checkbox" value="International Business" name="internationalBusiness" id="internationalBusiness">
          <div class="right">
            <div class="field-label heading">International Business</div>
          </div>
        </label>
        <label for="retailManagement" class="flex-item">
          <input type="checkbox" value="Retail Management" name="retailManagement" id="retailManagement">
          <div class="right">
            <div class="field-label heading">Retail Management</div>
          </div>
        </label>
        <label for="informantionSystemManagement" class="flex-item">
          <input type="checkbox" value="Information System Management" name="informantionSystemManagement" id="informantionSystemManagement">
          <div class="right">
            <div class="field-label heading">Information System Management</div>
          </div>
        </label>
        <label for="supplyChainManagement" class="flex-item">
          <input type="checkbox" value="Supply Chain Management" name="supplyChainManagement" id="supplyChainManagement">
          <div class="right">
            <div class="field-label heading">Supply Chain Management</div>
          </div>
        </label>
      </div>
      <div class="flex-container action-section">
        <button class="move-forward">Next</button>
         <a href="javascript:void(0)" class="skip-link move-forward">Skip</a>
      </div>
    </form> -->
    <form id="blogCategory" class="formBlock pb-40 odd-blocks hidden blogCategoriesSec">
      <div class="step-title heading mb-0">What kind of content would you like to explore more about ?</div>
      <div class="flex-container form-section">
                    <label for="learnersSpeak" class="flex-item">
                <input type="checkbox" value="Learners Speak" name="categories[]" id="learnersSpeak" checked>
                <div class="right">
                    <div class="field-label heading">Learners Speak</div>
                </div>
            </label>
                    <label for="accounting" class="flex-item">
                <input type="checkbox" value="Accounting" name="categories[]" id="accounting" >
                <div class="right">
                    <div class="field-label heading">Accounting</div>
                </div>
            </label>
                    <label for="entrepreneurship" class="flex-item">
                <input type="checkbox" value="Entrepreneurship" name="categories[]" id="entrepreneurship" >
                <div class="right">
                    <div class="field-label heading">Entrepreneurship</div>
                </div>
            </label>
                    <label for="onlineLearning" class="flex-item">
                <input type="checkbox" value="Online Learning" name="categories[]" id="onlineLearning" >
                <div class="right">
                    <div class="field-label heading">Online Learning</div>
                </div>
            </label>
                    <label for="studentSpotlight" class="flex-item">
                <input type="checkbox" value="student-spotlight" name="categories[]" id="studentSpotlight" >
                <div class="right">
                    <div class="field-label heading">Student Spotlight</div>
                </div>
            </label>
                    <label for="careerGrowth" class="flex-item">
                <input type="checkbox" value="Career Growth" name="categories[]" id="careerGrowth" >
                <div class="right">
                    <div class="field-label heading">Career Growth</div>
                </div>
            </label>
                    <label for="artificialIntelligence" class="flex-item">
                <input type="checkbox" value="Artificial Intelligence" name="categories[]" id="artificialIntelligence" >
                <div class="right">
                    <div class="field-label heading">Artificial Intelligence</div>
                </div>
            </label>
                    <label for="placementAssistance" class="flex-item">
                <input type="checkbox" value="Placement Assistance" name="categories[]" id="placementAssistance" >
                <div class="right">
                    <div class="field-label heading">Placement Assistance</div>
                </div>
            </label>
                    <label for="bfsi" class="flex-item">
                <input type="checkbox" value="BFSI" name="categories[]" id="bfsi" >
                <div class="right">
                    <div class="field-label heading">BFSI</div>
                </div>
            </label>
                    <label for="machineLearning" class="flex-item">
                <input type="checkbox" value="Machine Learning" name="categories[]" id="machineLearning" >
                <div class="right">
                    <div class="field-label heading">Machine Learning</div>
                </div>
            </label>
                    <label for="cybersecurity " class="flex-item">
                <input type="checkbox" value="Cybersecurity " name="categories[]" id="cybersecurity " >
                <div class="right">
                    <div class="field-label heading">Cybersecurity </div>
                </div>
            </label>
                    <label for="digitalMarketing" class="flex-item">
                <input type="checkbox" value="Digital Marketing" name="categories[]" id="digitalMarketing" >
                <div class="right">
                    <div class="field-label heading">Digital Marketing</div>
                </div>
            </label>
                <!-- <label for="careerGrowth" class="flex-item">
          <input type="checkbox" value="career" name="categories[]" id="careerGrowth" checked>
          <div class="right">
            <div class="field-label heading">Career Growth</div>
          </div>
        </label>
        <label for="studentSpotlight" class="flex-item">
          <input type="checkbox" value="student-spotlight" name="categories[]" id="studentSpotlight">
          <div class="right">
            <div class="field-label heading">Student Spotlight</div>
          </div>
        </label>
        <label for="onlineLearning" class="flex-item">
          <input type="checkbox" value="online-learning" name="categories[]" id="onlineLearning">
          <div class="right">
            <div class="field-label heading">Online Learning</div>
          </div>
        </label>
        <label for="careerOptions" class="flex-item">
          <input type="checkbox" value="careers" name="categories[]" id="careerOptions">
          <div class="right">
            <div class="field-label heading">Career Options</div>
          </div>
        </label>
        <label for="learnersSpeak" class="flex-item">
          <input type="checkbox" value="learners-speak" name="categories[]" id="learnersSpeak">
          <div class="right">
            <div class="field-label heading">Learners Speak</div>
          </div>
        </label>
        <label for="management" class="flex-item">
          <input type="checkbox" value="management" name="categories[]" id="management">
          <div class="right">
            <div class="field-label heading">Management</div>
          </div>
        </label>
        <label for="manipalInstitutions" class="flex-item">
          <input type="checkbox" value="manipal-institutions" name="categories[]" id="manipalInstitutions">
          <div class="right">
            <div class="field-label heading">Manipal Institutions</div>
          </div>
        </label>
        <label for="commerce" class="flex-item">
          <input type="checkbox" value="commerce" name="categories[]" id="commerce">
          <div class="right">
            <div class="field-label heading">Commerce</div>
          </div>
        </label>
        <label for="informationTechnology" class="flex-item">
          <input type="checkbox" value="information-technology" name="categories[]" id="informationTechnology">
          <div class="right">
            <div class="field-label heading">Information Technology</div>
          </div>
        </label>
        <label for="businessAnalytics" class="flex-item">
          <input type="checkbox" value="business-analytics" name="categories[]" id="businessAnalytics">
          <div class="right">
            <div class="field-label heading">Business Analytics</div>
          </div>
        </label>
        <label for="dataScience" class="flex-item">
          <input type="checkbox" value="data-science" name="categories[]" id="dataScience">
          <div class="right">
            <div class="field-label heading">Data Science</div>
          </div>
        </label>
        <label for="media&Journalism" class="flex-item">
          <input type="checkbox" value="media-journalism" name="categories[]" id="media&Journalism">
          <div class="right">
            <div class="field-label heading">Media & Journalism</div>
          </div>
        </label>
        <label for="supplyChain" class="flex-item">
          <input type="checkbox" value="supply-chain" name="categories[]" id="supplyChain">
          <div class="right">
            <div class="field-label heading">Supply Chain</div>
          </div>
        </label>
        <label for="cloudComputing" class="flex-item">
          <input type="checkbox" value="cloud-computing" name="categories[]" id="cloudComputing">
          <div class="right">
            <div class="field-label heading">Cloud Computing</div>
          </div>
        </label>
        <label for="campusEvents" class="flex-item">
          <input type="checkbox" value="campus-events" name="categories[]" id="campusEvents">
          <div class="right">
            <div class="field-label heading">Campus Events</div>
          </div>
        </label> -->
      </div>
      <div class="flex-container action-section">
        <button class="final-submit common-popup">Submit</button>
      </div>
    </form>
    <div id="loading-screen" class="formBlock hidden">
      <div class="step-title heading mb-0 text-center">Personalizing your experience...</div>
      <img class="loader" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="loader" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/popups/loader-img.png"><noscript><img class="loader" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/popups/loader-img.png" alt="loader"></noscript>
    </div>
    <div class="progress-bar hidden">
      <span class="moving-bar">1/3</span>
    </div>
  </div>  
</div></div>

<!----- Find my course popup ------>
<div id="find_courses_popup" class="popup hidden common-open-popup">
  <button id="closePopup" class="close-btn common-close-popup"></button>
  <div class="find-popup">
  <div class="find-desc">
    <div class="right-arrow-content" onclick="prevSection()">
      <img class="right-arrow" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2018%2014'%3E%3C/svg%3E" alt="right arrow" width="18" height="14" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/back-arrow.svg"><noscript><img class="right-arrow" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/back-arrow.svg" alt="right arrow" width="18" height="14"></noscript>    </div>
    <h5 class="find-course-text">Find My Course</h5>
    <p class="find-text">Answer a few quick questions and we’ll guide you to the perfect course!</p>
  </div>

  <form id="courseForm">
    <div class="form-section loading-content active" id="section1">
      <div class="loading-image">
        <img class="loader" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2018%2014'%3E%3C/svg%3E" alt="loader" width="18" height="14" onclick="prevSection()" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/loader.png"><noscript><img class="loader" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/loader.png" alt="loader" width="18" height="14" onclick="prevSection()"></noscript>
      </div>
      <div class="course-form">
        <div class="form-group experience-field">
          <label for="institutions">What is your highest level of education?</label>
          <select class="institutions" name="institutions" id="institution_field" data-placeholder="Select your highest level of education">
            <option value=""></option>
            <option value="12th">12th completed</option>
            <option value="graduate">Graduate</option>
            <option value="post-graduate">Post Graduate</option>
          </select>
        </div>
        <div class="form-group duration-field">
          <label for="duration">What are you looking to achieve with your studies?</label>
          <select class="duration" id="duration" name="duration" data-placeholder="Select your goal" required>
            <option value=""></option>
            <option value="career">Career growth</option>
            <option value="skill">Pursue higher education</option>
            <option value="corporate">Profession switch</option>
            <option value="achievement">Personal growth</option>
          </select>
        </div>
      </div>
      <div class="course-form">
        <div class="form-group domain-field al-ml">
          <label for="domain">Which domain would you like to study in?</label>
          <select class="domain" id="domain" name="domain" data-placeholder="Select domain" data-search="true" required>
            <option value=""></option>
            <option value="Management">Management</option>
            <option value="Data Science">Data Science</option>
            <option value="Information Technology">Information Technology</option>
            <option value="Arts">Arts</option>
            <option value="Commerce">Commerce</option>
            <option value="AI & ML">AI & ML</option>
            <option value="Healthcare">Healthcare</option>
            <option value="Entrepreneurship">Entrepreneurship</option>
            <option value="Business Analytics">Business Analytics</option>
          </select>
        </div>
        <div class="form-group domain-field al-ml-with">
          <label for="domain">Which domain would you like to study in?</label>
          <select class="domain" id="domain1" name="domain" data-placeholder="Select domain" data-search="true" required>
            <option value=""></option>
            <option value="Management">Management</option>
            <option value="Data Science">Data Science</option>
            <option value="Information Technology">Information Technology</option>
            <option value="Arts">Arts</option>
            <option value="Commerce">Commerce</option>
            <option value="Entrepreneurship">Entrepreneurship</option>
            <option value="Business Analytics">Business Analytics</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <button class="find-course" id="find-course" type="button" disabled>Submit</button>
      </div>
    </div>
    <div class="form-section courseResultNew top-online-course section-mb" id="section2">
    </div>
  </form>
</div></div>

<!----- CSS Files ----->
<link data-minify="1" rel="stylesheet" href="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/css/swiper-bundle.min.css?ver=1753685605" />
<link data-minify="1" rel="stylesheet" href="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/css/our-impact.css?ver=1753685605" />
<link data-minify="1" rel="stylesheet" href="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/css/choosecourses.css?ver=1753685605">
<link data-minify="1" rel="stylesheet" href="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/css/campus-immersions.css?ver=1753685605">
<link data-minify="1" rel="stylesheet" type="text/css" href="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/css/testimonials.css?ver=1753685605">

<!---- Mobile bottom widget ----->
<footer class="">
  <div class="footer-container">
    <div class="footer-get-in-touch container">
              
  <div class="get-in-touch doodle-section ">
    <svg class="doodle" xmlns="http://www.w3.org/2000/svg" width="1920" height="832" viewBox="0 0 1920 832" fill="none">
      <path d="M-668 152C-639.667 417.167 -288.1 487.78 839.5 -42.6199C2249 -705.62 86.5 655 798.5 703.5C930.267 712.476 1025.5 691.995 1147.5 648.5M1147.5 648.5C1779 601.683 2062.04 -114.691 1608.5 13C1089.5 159.12 1032.5 760.683 1147.5 648.5ZM1147.5 648.5C1368.5 836.021 1885.8 936.98 2289 -42.6199" stroke="#E8E8B7" stroke-width="120" />
    </svg>
          <div class="left">
        <h2 class="question-text section-title">Have questions? <span>Connect with our counsellor</span></h2>
                  <p class="description">Fill in your information, and our team will connect with you shortly.</p>
                <button class="primaryBtn footer-btn applynow show-popup btn-position" data-position="Footer Form" data-form="leadForm" data-showpopup="leadForm_popup">Apply Now</button>      </div>
        <div class="right">
      <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Explore courses" fetchpriority="low" decoding="async" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/footer/footer-lady-1.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/footer/footer-lady-1.webp" alt="Explore courses" loading="lazy" fetchpriority="low" decoding="async"></noscript>
    </div>
  </div>
            <div class="footer-wrapper ">
        <div class="university-wrapper">
          <div class="left ">
            <div class="university-details mahe">
              <div class="footer-logo">
                <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/logos/MAHE-logo.webp" alt="mahe-logo" width="250" height="268" >
              </div>
              <p class="uni-address">Manipal – Karnataka</p>
            </div>
            <div class="university-details MUJ">
              <div class="footer-logo">
                <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/logos/MUJ-logo.webp" width="250" height="274" alt="muj-logo" >
              </div>
              <p class="uni-address">Jaipur – Rajasthan</p>
            </div>
            <div class="university-details SMU">
              <div class="footer-logo">
                <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/logos/SMU-logo.webp" width="312" height="273" alt="smu-logo" >
              </div>
              <p class="uni-address">Gangtok – Sikkim</p>
            </div>
          </div>
          <div class="right">
            <div class="social-media">
              <ul>
                <li>
                  <a href="https://www.facebook.com/onlinemanipal" target="_blank"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2048%2048'%3E%3C/svg%3E" alt="facebook" height="48" width="48" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/facebook.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/facebook.svg" alt="facebook" height="48" width="48"></noscript>
                  </a>
                </li>
                <li>
                  <a href="https://in.linkedin.com/company/onlinemanipal" target="_blank"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2048%2048'%3E%3C/svg%3E" alt="linkedin" height="48" width="48" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/linkedin-icon.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/linkedin-icon.svg" alt="linkedin" height="48" width="48"></noscript></a>
                </li>
                <li>
                  <a href="https://www.youtube.com/channel/UC6EgEsVbor7Tpz3xARIhLzQ" target="_blank"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2048%2048'%3E%3C/svg%3E" alt="youtube" height="48" width="48" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/Youtube.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/Youtube.svg" alt="youtube" height="48" width="48"></noscript></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/onlinemanipal/" target="_blank"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2048%2048'%3E%3C/svg%3E" alt="instagram" height="48" width="48" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/Instagram.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/Instagram.svg" alt="instagram" height="48" width="48"></noscript></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
                  <div class="toggle-arrow-icon">
            <div class="grey-line footer-accordian-1 footer-down-arrow"></div>
            <div class="desktop-up-icon"></div>
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="arrow-icon" class="footer-toggle-arrow up-arrow" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/footer-up-arrow.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/footer-up-arrow.png" alt="arrow-icon" class="footer-toggle-arrow up-arrow"></noscript>
          </div>
                <div class="course-wrapper">
          <div class="courses-row-1">
            <div class="company ">
              <div class="title-text footer-accordian-1 footer-down-arrow " onclick="expandCourses('1')">Company</div>

              <div class="company-wrapper course-detail expand-data-1">
                                  <a href="/about-us">About Us</a>
                                  <a href="/the-manipal-advantage">The Manipal Advantage</a>
                                  <a href="/help-center">Help Center</a>
                              </div>
            </div>
                          <div class="company institutions">
                <div class="title-text" onclick="expandCourses('2')">Institutions</div>
                <div class="Institutions-wrapper course-detail expand-data-2">
                                      <a href="/institution/mahe">Manipal Academy of Higher Education</a>
                                      <a href="/institution/muj">Manipal University Jaipur</a>
                                      <a href="/institution/smu">Sikkim Manipal University</a>
                                  </div>
              </div>
              <div class="company ">
                <div class="title-text" onclick="expandCourses('3')">Resources</div>
                <div class="resources-wrapper course-detail expand-data-3">
                                      <a href="https://www.onlinemanipal.com/blogs">Blogs</a>
                                      <a href="https://www.onlinemanipal.com/placements">Placements</a>
                                      <a href="https://www.onlinemanipal.com/faq">FAQs</a>
                                  </div>
              </div>
                                    </div>

          <div class="courses-row-2">
            <div class="course-left">
                              <div class="course-heading title-text footer-accordian-4 footer-down-arrow">Courses</div>
                            <a href="/all-courses" class="expand-data-4 course-detail all-course">All Courses</a>
                                <div class="company course-detail expand-data-4">
                    <div class="course-heading title-text">Management</div>
                                                                  <a href="/online-bba-honors-mahe">Bachelor of Business Administration (BBA Honors)</a>
                                                                                        <a href="/bachelor-of-business-administration">Bachelor of Business Administration (BBA)</a>
                                                                                        <a href="/online-mba-courses">Online MBA Courses</a>
                                                                                        <a href="/online-mba-manipal-academy-of-higher-education">Master of Business Administration (MBA for working professionals)</a>
                                                                                        <a href="/online-mba-manipal-university-jaipur">Master of Business Administration (MBA)</a>
                                                                                        <a href="/online-mba-sikkim-manipal-university">Master of Business Administration (MBA with Dual Specialization)</a>
                                                                                        <a href="/pgcp-in-entrepreneurship-and-innovation">PGCP in Entrepreneurship & Innovation (PGCP E&I)</a>
                                                            </div>
                                <div class="company course-detail expand-data-4">
                    <div class="course-heading title-text">Information Technology</div>
                                                                  <a href="/master-of-computer-applications-mahe">Master of Computer Applications (MCA) from Manipal Academy of Higher Education</a>
                                                                                        <a href="/master-of-computer-applications-smu">Master of Computer Applications (MCA) from Sikkim Manipal University</a>
                                                                                        <a href="/master-of-computer-applications">Master of Computer Applications (MCA) from Manipal University Jaipur</a>
                                                                                        <a href="/bachelor-of-computer-applications">Bachelor of Computer Applications (BCA) from Manipal University Jaipur</a>
                                                            </div>
                                <div class="company course-detail expand-data-4">
                    <div class="course-heading title-text">Commerce</div>
                                                                  <a href="/master-of-commerce-smu">Master of Commerce (MCOM) from Sikkim Manipal University</a>
                                                                                        <a href="/master-of-commerce">Master of Commerce (MCOM) from Manipal University Jaipur</a>
                                                                                        <a href="/bachelor-of-commerce-smu">Bachelor of Commerce (BCOM) from Sikkim Manipal University</a>
                                                                                        <a href="/bachelor-of-commerce">Bachelor of Commerce (BCOM) from Manipal University Jaipur</a>
                                                            </div>
                          </div>
            <div class="course-right">
                                <div class="company course-detail expand-data-4">
                    <div class="course-heading title-text">Arts</div>
                                          <a href="/master-of-arts-english">Master of Arts in English (MA-English)</a>
                                          <a href="/master-of-arts-sociology">Master of Arts in Sociology (MA-Sociology)</a>
                                          <a href="/master-of-arts-political-science">Master of Arts in Political Science (MA-Political Science)</a>
                                          <a href="/master-of-arts-economics">Master of Arts in Economics (MA-Economics)</a>
                                          <a href="/master-of-arts">Master of Arts (MA)</a>
                                          <a href="/bachelor-of-arts">Bachelor of Arts (BA)</a>
                                      </div>
                                <div class="company course-detail expand-data-4">
                    <div class="course-heading title-text">Data Science</div>
                                          <a href="/msc-in-data-science">MSc in Data Science (MSC-DS)</a>
                                          <a href="/pgcp-in-data-science">PGCP in Data Science (PGCP-DS)</a>
                                      </div>
                                <div class="company course-detail expand-data-4">
                    <div class="course-heading title-text">Business Analytics</div>
                                          <a href="/msc-in-business-analytics">MSc in Business Analytics (MSC-BA)</a>
                                          <a href="/pgcp-in-business-analytics">PGCP in Business Analytics (PGCP BA)</a>
                                      </div>
                                <div class="company course-detail expand-data-4">
                    <div class="course-heading title-text">Media and Journalism</div>
                                          <a href="/master-of-arts-in-journalism-mass-communication">Master of Arts in Journalism & Mass Communication (MA JMC)</a>
                                      </div>
                                <div class="company course-detail expand-data-4">
                    <div class="course-heading title-text">Supply Chain</div>
                                          <a href="/pgcp-logistics-and-supply-chain-management">PGCP in Logistics and Supply Chain (PGCP LSC)</a>
                                      </div>
                                        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="contact-details container">
    <div class="copy-right-text">© 2025 Online Manipal. ALL RIGHTS RESERVED.</div>
  </div>
  </div>
</footer>
<div class="floating-Widget">
        <span class="call-block call-btn" data-att='tel:+917304000444'>
      <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2024%2024'%3E%3C/svg%3E" width="24" height="24" alt="Call" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/grey-call-icon.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/grey-call-icon.png" width="24" height="24" alt="Call"></noscript>
      <div class="call-no-strip">
        <div class="triangle-arrow"></div>
        <div class="phone-no"></div>
      </div>
    </span>
  <div class="whatsup-block">
  <a class="whatsapp-btn" href="https://wa.me/917353882233?text=Hi" target="_blank">
    <span>Chat</span>
    <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/whatsup-icon.png" width="24" height="24" alt="Whatsup">
  </a>
</div></div>

<!----- Search filter popup ----->
<div id="searchFilter_popup" class="popup hidden search-filter">
  <div class="search-bar">
      <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/search.svg" width="70" alt="search">
    <button id="closePopup" class="close-btn filter-close-btn"></button>
  <input type="text" placeholder="Search here" class="search-input" id="header-search" />
</div>
<div class="search-container">
  <div class="search-wrapper">
    <div class="tags" id="coursesTag">
      <a href="/online-mba-courses" class="course-tag">Popular MBA courses</a>
      <a href="/msc-in-data-science" class="course-tag">Best degree for data science</a>
      <a href="/online-mba-manipal-university-jaipur" class="course-tag">Masters in Business administration</a>
      <a href="/master-of-computer-applications" class="course-tag">Best MCA courses</a>
    </div>

    <div class="popular-courses">
      <div class="section-heading">
        <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2048%2048'%3E%3C/svg%3E" alt="popular courses" height="48" width="48" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/popular-courses.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/popular-courses.svg" alt="popular courses" height="48" width="48"></noscript>
        <h3 class="section-title">Popular Courses</h3>
      </div>
      <ul id="popularCourses">
        <!-- <li><a href="" target="_blank">Masters of Business Administration - Manipal Academy of Higher Education</a></li>
          <li><a href="" target="_blank">Masters of Computer Applications - Sikkim Manipal University</a></li>
          <li><a href="" target="_blank">Bachelor’s of Computer Applications - Manipal University Jaipur</a></li>
          <li><a href="" target="_blank">Post Graduate programme in Business Analytics & Supply Chain - Sikkim Manipal University</a></li> -->
      </ul>
    </div>

    <div class="popular-courses">
      <div class="section-heading">
        <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2048%2048'%3E%3C/svg%3E" alt="Institutions" height="48" width="48" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/institutions-img.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/institutions-img.svg" alt="Institutions" height="48" width="48"></noscript>
        <h3 class="section-title">Institutions</h3>
      </div>
      <ul id="institutions">

      </ul>
    </div>

    <!-- <div class="popular-courses">
      <div class="section-heading">
        <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2048%2048'%3E%3C/svg%3E" alt="popular courses" height="48" width="48" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/popular-courses.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/popular-courses.svg" alt="popular courses" height="48" width="48"></noscript>
        <h3 class="section-title">Resources</h3>
      </div>
      <ul id="resources">
      </ul>
    </div> -->

    <div class="top-specialisations">
      <div class="section-heading">
        <h3 class="section-title specialization-headeing">Top Specialisations</h3>
      </div>
      <div class="specialisation-wrapper specialisation-slider-header" id="Specialisations">
      </div>
    </div>

    <!-- <div class="faq">
      <div class="section-heading">
        <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2048%2048'%3E%3C/svg%3E" alt="faq" height="48" width="48" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/faq.svg"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/faq.svg" alt="faq" height="48" width="48"></noscript>
        <h3 class="section-title">FAQ’s</h3>
      </div>
      <div class="faq-wrapper" id="faq">
      </div>
    </div> -->
  </div>
</div></div>

<div class="hidden">
  <span class="source-location"></span>
  <span class="source-ip-address">122.161.48.84</span>
  <span class="pageType">Domestic</span>
  <span class="country-code">in</span>
</div>

<!------ CSS Files ------->
<link href="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/css/select2.min.css" rel="stylesheet" />
<link data-minify="1" href="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/slick/slick.css?ver=1753685605" rel="stylesheet">
<link data-minify="1" href="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/slick/slick-theme.css?ver=1753685605" rel="stylesheet">
<link data-minify="1" href="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/css/lity.css?ver=1753685605" rel="stylesheet">
<link data-minify="1" href="https://www.onlinemanipal.com/wp-content/cache/min/1/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css?ver=1753685605" rel="stylesheet" />

<!------ JS Files ------->
<script type="text/javascript" src='https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/js/jquery-3.7.1.min.js' data-rocket-defer defer></script>
<script data-minify="1" type="text/javascript" src="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/js/jquery.validate.js?ver=1753685604" data-rocket-defer defer></script>
<script data-minify="1" type="text/javascript" src="https://www.onlinemanipal.com/wp-content/cache/min/1/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js?ver=1753685604" data-rocket-defer defer></script>
<script type="text/javascript" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/js/select2.min.js" data-rocket-defer defer></script>
<script data-minify="1" type="text/javascript" src="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/js/script.js?ver=1753685604" data-rocket-defer defer></script>
<script data-minify="1" type="text/javascript" src="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/js/form.js?ver=1753685604" data-rocket-defer defer></script>
<script data-minify="1" type="text/javascript" src="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/js/header-search.js?ver=1753685604" data-rocket-defer defer></script>
<script type="text/javascript" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/slick/slick.min.js" data-rocket-defer defer></script>
<script data-minify="1" type="text/javascript" src="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/js/slider.js?ver=1753685604" data-rocket-defer defer></script>
<script data-minify="1" type="text/javascript" src="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/js/lity.js?ver=1753685604" data-rocket-defer defer></script>

<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/flamingo\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
<noscript><img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=374798657217929&ev=PageView&noscript=1&cd%5Bpage_title%5D=Homepage&cd%5Bpost_type%5D=page&cd%5Bpost_id%5D=7&cd%5Bplugin%5D=PixelYourSite&cd%5Buser_role%5D=guest&cd%5Bevent_url%5D=www.onlinemanipal.com%2F" alt=""></noscript>
<script id="rocket-browser-checker-js-after">
"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
</script>
<script id="rocket-preload-links-js-extra">
var RocketPreloadLinksConfig = {"excludeUris":"\/payment-verification|\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/","usesTrailingSlash":"1","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm","siteUrl":"https:\/\/www.onlinemanipal.com","onHoverDelay":"100","rateThrottle":"3"};
</script>
<script id="rocket-preload-links-js-after">
(function() {
"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
}());
</script>
<script data-minify="1" src="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/js/navigation.js?ver=1753685604" id="onlinemanipal-navigation-js" data-rocket-defer defer></script>
<script>window.lazyLoadOptions=[{elements_selector:"img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}},{elements_selector:".rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,}];window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script><script data-no-minify="1" async src="https://www.onlinemanipal.com/wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script>
</body>

</html>
<!------ JS Files ------>
<script data-minify="1" defer type='text/javascript' src="https://www.onlinemanipal.com/wp-content/cache/min/1/api/player.js?ver=1753685604"></script>
<script data-minify="1" type='text/javascript' src='https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/js/home.js?ver=1753685604' data-rocket-defer defer></script>
<script type='text/javascript' src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/js/swiper-bundle.min.js" data-rocket-defer defer></script>
<script data-minify="1" type='text/javascript' src="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/js/campus-immersions.js?ver=1753685604" data-rocket-defer defer></script>
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me -->