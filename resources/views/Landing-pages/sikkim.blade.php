
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
  
      
      <!--- Hreflang tags --->
    <link rel="alternate" hreflang="en-IN" href="https://www.onlinemanipal.com/institution/smu" />
    <link rel="alternate" hreflang="en-CA" href="https://www.onlinemanipal.com/us-ca/institution/smu" />
    <link rel="alternate" hreflang="en-US" href="https://www.onlinemanipal.com/us-ca/institution/smu" />
    <link rel="alternate" hreflang="en-AE" href="https://www.onlinemanipal.com/ae/institution/smu" />
    <link rel="alternate" hreflang="en-BH" href="https://www.onlinemanipal.com/ae/institution/smu" />
    <link rel="alternate" hreflang="en-KW" href="https://www.onlinemanipal.com/ae/institution/smu" />
    <link rel="alternate" hreflang="en-OM" href="https://www.onlinemanipal.com/ae/institution/smu" />
    <link rel="alternate" hreflang="en-SA" href="https://www.onlinemanipal.com/ae/institution/smu" />
    <link rel="alternate" hreflang="en-QA" href="https://www.onlinemanipal.com/ae/institution/smu" />
    <link rel="alternate" hreflang="en-NP" href="https://www.onlinemanipal.com/np/institution/smu" />
    <link rel="alternate" hreflang="en-ID" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-PH" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-YE" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-VN" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-SY" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-MM" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-LA" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-IQ" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-KH" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-GB" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-SG" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-DE" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-MY" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-PK" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-AU" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-TH" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-CN" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-JP" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-HK" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-FR" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-MV" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-AF" href="https://www.onlinemanipal.com/global/institution/smu" />
    <link rel="alternate" hreflang="en-MW" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-NG" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-ET" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-EG" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-CD" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-TZ" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-ZA" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-KE" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-UG" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-SD" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-DZ" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-MA" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-AO" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-GH" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-MZ" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-MG" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-CI" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-CM" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-NE" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-ML" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-BF" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-MW" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-ZM" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-TD" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-SO" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-SN" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-ZW" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-GN" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-RW" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-BJ" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-BI" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-TN" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-SS" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-TG" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-SL" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-LY" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-CG" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-CF" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-LR" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-MR" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-ER" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-GM" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-BW" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-NA" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-GA" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-LS" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-GW" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-GQ" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-MU" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-SZ" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-DJ" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-CV" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-ST" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-EH" href="https://www.onlinemanipal.com/af/institution/smu" />
    <link rel="alternate" hreflang="en-SC" href="https://www.onlinemanipal.com/af/institution/smu" />
  
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
	<style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
	
	<!-- This site is optimized with the Yoast SEO plugin v25.5 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Sikkim Manipal University (SMU) | Online Degree Programs</title>
<link crossorigin data-rocket-preconnect href="https://hspx.hotstar.com" rel="preconnect">
<link crossorigin data-rocket-preconnect href="https://bat.bing.com" rel="preconnect">
<link crossorigin data-rocket-preconnect href="https://snap.licdn.com" rel="preconnect">
<link crossorigin data-rocket-preconnect href="https://a.quora.com" rel="preconnect">
<link crossorigin data-rocket-preconnect href="https://www.google-analytics.com" rel="preconnect">
<link crossorigin data-rocket-preconnect href="https://www.googletagmanager.com" rel="preconnect">
<link crossorigin data-rocket-preconnect href="https://connect.facebook.net" rel="preconnect">
<link crossorigin data-rocket-preconnect href="https://dev.visualwebsiteoptimizer.com" rel="preconnect">
<link crossorigin data-rocket-preconnect href="https://app.engati.com" rel="preconnect">
<link crossorigin data-rocket-preload as="font" href="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/fonts/HelveticaNowDisplay-Regular.woff2" rel="preload">
<link crossorigin data-rocket-preload as="font" href="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/fonts/Queens-Medium.woff2" rel="preload"><link rel="preload" data-rocket-preload as="image" href="https://www.onlinemanipal.com/wp-content/uploads/2023/06/SMU-1-1.webp" fetchpriority="high">
	<meta name="description" content="SMU now provides online degree &amp; certification courses. Embrace online education offered by SMU at Online Manipal &amp; experience a world-class learning environment." />
	<link rel="canonical" href="https://www.onlinemanipal.com/institution/smu" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Sikkim Manipal University (SMU) | Online Degree Programs" />
	<meta property="og:description" content="SMU now provides online degree &amp; certification courses. Embrace online education offered by SMU at Online Manipal &amp; experience a world-class learning environment." />
	<meta property="og:url" content="https://www.onlinemanipal.com/institution/smu" />
	<meta property="og:site_name" content="Online Manipal" />
	<meta property="article:publisher" content="https://www.facebook.com/onlinemanipal" />
	<meta property="article:modified_time" content="2025-06-04T06:50:37+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://www.onlinemanipal.com/institution/smu","url":"https://www.onlinemanipal.com/institution/smu","name":"Sikkim Manipal University (SMU) | Online Degree Programs","isPartOf":{"@id":"https://www.onlinemanipal.com/#website"},"datePublished":"2023-06-23T04:35:26+00:00","dateModified":"2025-06-04T06:50:37+00:00","description":"SMU now provides online degree & certification courses. Embrace online education offered by SMU at Online Manipal & experience a world-class learning environment.","breadcrumb":{"@id":"https://www.onlinemanipal.com/institution/smu#breadcrumb"},"inLanguage":"en-GB","potentialAction":[{"@type":"ReadAction","target":["https://www.onlinemanipal.com/institution/smu"]}]},{"@type":"BreadcrumbList","@id":"https://www.onlinemanipal.com/institution/smu#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://www.onlinemanipal.com/"},{"@type":"ListItem","position":2,"name":"Sikkim Manipal University"}]},{"@type":"WebSite","@id":"https://www.onlinemanipal.com/#website","url":"https://www.onlinemanipal.com/","name":"Online Manipal","description":"Online Manipal","publisher":{"@id":"https://www.onlinemanipal.com/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://www.onlinemanipal.com/?s={search_term_string}"},"query-input":{"@type":"PropertyValueSpecification","valueRequired":true,"valueName":"search_term_string"}}],"inLanguage":"en-GB"},{"@type":"Organization","@id":"https://www.onlinemanipal.com/#organization","name":"Online Manipal","url":"https://www.onlinemanipal.com/","logo":{"@type":"ImageObject","inLanguage":"en-GB","@id":"https://www.onlinemanipal.com/#/schema/logo/image/","url":"https://www.onlinemanipal.com/wp-content/uploads/2022/07/MicrosoftTeams-image-9.png","contentUrl":"https://www.onlinemanipal.com/wp-content/uploads/2022/07/MicrosoftTeams-image-9.png","width":1000,"height":1000,"caption":"Online Manipal"},"image":{"@id":"https://www.onlinemanipal.com/#/schema/logo/image/"},"sameAs":["https://www.facebook.com/onlinemanipal","https://www.instagram.com/onlinemanipal/","https://www.youtube.com/channel/UC6EgEsVbor7Tpz3xARIhLzQ"]}]}</script>
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
var pysOptions = {"staticEvents":{"facebook":{"init_event":[{"delay":0,"type":"static","ajaxFire":false,"name":"PageView","pixelIds":["374798657217929"],"eventID":"14230911-7cad-4d7f-9442-7798886b867b","params":{"page_title":"Sikkim Manipal University","post_type":"page","post_id":678794,"plugin":"PixelYourSite","user_role":"guest","event_url":"www.onlinemanipal.com\/institution\/smu"},"e_id":"init_event","ids":[],"hasTimeWindow":false,"timeWindow":0,"woo_order":"","edd_order":""}]}},"dynamicEvents":[],"triggerEvents":[],"triggerEventTypes":[],"facebook":{"pixelIds":["374798657217929"],"advancedMatching":[],"advancedMatchingEnabled":true,"removeMetadata":false,"wooVariableAsSimple":false,"serverApiEnabled":true,"wooCRSendFromServer":false,"send_external_id":null,"enabled_medical":false,"do_not_track_medical_param":["event_url","post_title","page_title","landing_page","content_name","categories","category_name","tags"],"meta_ldu":false},"debug":"","siteUrl":"https:\/\/www.onlinemanipal.com","ajaxUrl":"https:\/\/www.onlinemanipal.com\/wp-admin\/admin-ajax.php","ajax_event":"5bcb466029","enable_remove_download_url_param":"1","cookie_duration":"7","last_visit_duration":"60","enable_success_send_form":"","ajaxForServerEvent":"1","ajaxForServerStaticEvent":"1","send_external_id":"1","external_id_expire":"180","track_cookie_for_subdomains":"1","google_consent_mode":"1","gdpr":{"ajax_enabled":false,"all_disabled_by_api":false,"facebook_disabled_by_api":false,"analytics_disabled_by_api":false,"google_ads_disabled_by_api":false,"pinterest_disabled_by_api":false,"bing_disabled_by_api":false,"externalID_disabled_by_api":false,"facebook_prior_consent_enabled":true,"analytics_prior_consent_enabled":true,"google_ads_prior_consent_enabled":null,"pinterest_prior_consent_enabled":true,"bing_prior_consent_enabled":true,"cookiebot_integration_enabled":false,"cookiebot_facebook_consent_category":"marketing","cookiebot_analytics_consent_category":"statistics","cookiebot_tiktok_consent_category":"marketing","cookiebot_google_ads_consent_category":"marketing","cookiebot_pinterest_consent_category":"marketing","cookiebot_bing_consent_category":"marketing","consent_magic_integration_enabled":false,"real_cookie_banner_integration_enabled":false,"cookie_notice_integration_enabled":false,"cookie_law_info_integration_enabled":false,"analytics_storage":{"enabled":true,"value":"granted","filter":false},"ad_storage":{"enabled":true,"value":"granted","filter":false},"ad_user_data":{"enabled":true,"value":"granted","filter":false},"ad_personalization":{"enabled":true,"value":"granted","filter":false}},"cookie":{"disabled_all_cookie":false,"disabled_start_session_cookie":false,"disabled_advanced_form_data_cookie":false,"disabled_landing_page_cookie":false,"disabled_first_visit_cookie":false,"disabled_trafficsource_cookie":false,"disabled_utmTerms_cookie":false,"disabled_utmId_cookie":false},"tracking_analytics":{"TrafficSource":"direct","TrafficLanding":"https:\/\/www.onlinemanipal.com\/master-of-arts-english","TrafficUtms":[],"TrafficUtmsId":[]},"GATags":{"ga_datalayer_type":"default","ga_datalayer_name":"dataLayerPYS"},"woo":{"enabled":false},"edd":{"enabled":false},"cache_bypass":"1753689313"};
</script>
<script data-minify="1" src="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/plugins/pixelyoursite/dist/scripts/public.js?ver=1753685604" id="pys-js" data-rocket-defer defer></script>
<link rel="https://api.w.org/" href="https://www.onlinemanipal.com/wp-json/" /><link rel="alternate" title="JSON" type="application/json" href="https://www.onlinemanipal.com/wp-json/wp/v2/pages/678794" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.onlinemanipal.com/xmlrpc.php?rsd" />

<link rel='shortlink' href='https://www.onlinemanipal.com/?p=678794' />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://www.onlinemanipal.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.onlinemanipal.com%2Finstitution%2Fsmu" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://www.onlinemanipal.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.onlinemanipal.com%2Finstitution%2Fsmu&#038;format=xml" />
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
<style id="rocket-lazyrender-inline-css">[data-wpr-lazyrender] {content-visibility: auto;}</style><meta name="generator" content="WP Rocket 3.19.2.1" data-wpr-features="wpr_delay_js wpr_defer_js wpr_minify_js wpr_lazyload_images wpr_lazyload_iframes wpr_preconnect_external_domains wpr_auto_preload_fonts wpr_automatic_lazy_rendering wpr_oci wpr_minify_css wpr_preload_links wpr_desktop" /></head>

<body class="wp-singular page-template page-template-templates page-template-institution page-template-templatesinstitution-php page page-id-678794 wp-theme-flamingo">

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
  
<!----- CSS Files ----->
<link data-minify="1" rel="stylesheet" type="text/css" href="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/css/institution.css?ver=1753685618">
<link data-minify="1" rel="stylesheet" type="text/css" href="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/css/ranking-acc.css?ver=1753685607">
<link data-minify="1" rel="stylesheet" type="text/css" href="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/css/campus-immersions.css?ver=1753685605">
<link data-minify="1" rel="stylesheet" type="text/css" href="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/css/swiper-bundle.min.css?ver=1753685605" />
<link data-minify="1" rel="stylesheet" type="text/css" href="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/css/faculty.css?ver=1753685607">

<main >

  <section  class="institution-banner section-mb doodle-section SMU pageTopSpace">
    <div  class="institution-banner-sec SMU">
            <svg xmlns="http://www.w3.org/2000/svg" width="1923" height="786" class="doodle" viewBox="0 0 1923 786" fill="none">
        <path d="M-210 273C519.5 1111 1887.63 454.688 1751 117.5C1658.07 -111.856 1206 278.88 1206 556.5C1206 916.457 1855.07 643.997 2225.5 556.5" stroke="#D4F2F1" stroke-width="95" />
      </svg>
      
  <div  class="container">
    <div class="breadcrumb">
      <span class="bcrumb-title"><a class="breadcrumb_title" href=/>Home</a></span><span class='separator'><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/breadcrumb-arrow.svg" width="4" height="8" alt="breadcrumb arrow"></span><span class="breadcrumb_title">Sikkim Manipal University</span>    </div>
    <img class="banner-star" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/institution/banner-star.png" alt="course" width="44" height="44">
    <div class="logos">
      <img class="mahe-logo" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/SMU_HP_Logo.png" alt="SMU University" height="46" width="184">
      <span class="staging-line first"></span>
      <div class="ranking-logos">
        <div class="nacc-logo smu">
          <div class=""></div>
          <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/institution/smu-star.png" alt="SMU University" height="28" width="28"><span>Top-Ranked Private University In North East</span>
        </div>
              </div>
    </div>
    <div class="banner-details">
      <h1 class="section-title">Sikkim Manipal University</h1>
              <div class="description desktop-des" id="read-more-less"><div id="read-more-less" class="description desktop-des">
<p>Sikkim Manipal University (SMU), established in 1995, is an NAAC A+ accredited institution offering UGC-entitled degrees. With a strong legacy of academic excellence, SMU leverages state-of-the-art technology to deliver accessible, industry-relevant programs, ensuring students gain quality education.</p>
<p>SMU’s distance education arm, founded in 2001, has educated over 500,000 students, becoming a top provider of professional programs in India. Recognized for its excellence, including the ‘Most Preferred Distance Education University Among Students’ award, SMU now delivers affordable online degree programs, further extending its commitment to accessible education.</p>
</div>
</div>
            <button data-showpopup="downloadForm_popup" id="downloadButton" class="brochure-btn banner-btn show-popup small btn-position" data-position="Banner Brochure Button" data-form="downloadForm">Download Brochure</button>
      <img class="banner-star-second" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/institution/banner-star.png" alt="Download Brochure" width="44" height="44">
    </div>
  </div>
      <img fetchpriority="high" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/SMU-1-1.webp" alt="Sikkim Manipal University" class="univercity-img">
  </div>  </section>

      <section  class="ranking-accredition  section-mb">
      <div  class="top-ranking-section">
  <div class="ranking-wrapper container">
          <div class="ranking-section-top">
                  <h2 class="section-title">Rankings & Accreditations</h2>
              </div>
      <div class="rank-card-container">
              
              
                <div class="rank-line-item">

                  <div class="rank-badge">
                                          <!-- <div class="accr"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2021%2021'%3E%3C/svg%3E" alt="Accredation" width="21" height="21" data-lazy-src="/assets/images/ranking-new/acc-icon.svg" /><noscript><img src="/assets/images/ranking-new/acc-icon.svg" alt="Accredation" width="21" height="21" /></noscript></div> -->
                                      </div>
                  <div class="rank-card-img">
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Accredited in A+ grade by National Assessment and Accreditation Council" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/03/NAAC-A-2.jpg" /><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2023/03/NAAC-A-2.jpg" alt="Accredited in A+ grade by National Assessment and Accreditation Council" /></noscript>
                  </div>
                  <div class="rank-card-title">
                    Accredited in A+ grade by National Assessment and Accreditation Council                  </div>
                </div>
                      
              
                <div class="rank-line-item">

                  <div class="rank-badge">
                                          <!-- <div class="accr"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2021%2021'%3E%3C/svg%3E" alt="Accredation" width="21" height="21" data-lazy-src="/assets/images/ranking-new/acc-icon.svg" /><noscript><img src="/assets/images/ranking-new/acc-icon.svg" alt="Accredation" width="21" height="21" /></noscript></div> -->
                                      </div>
                  <div class="rank-card-img">
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="UGC-entitled Online Degrees Equivalent to Campus Degree" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/03/UGC-2.jpg" /><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2023/03/UGC-2.jpg" alt="UGC-entitled Online Degrees Equivalent to Campus Degree" /></noscript>
                  </div>
                  <div class="rank-card-title">
                    UGC-entitled Online Degrees Equivalent to Campus Degree                  </div>
                </div>
                      
              
                <div class="rank-line-item">

                  <div class="rank-badge">
                                          <div class="rank-top">
                        <span>
                          Ranked 151-200                        </span>
                      </div>
                                      </div>
                  <div class="rank-card-img">
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Amongst India’s Top #151-200 Universities in 2024" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/03/NIRF-1.jpg" /><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2023/03/NIRF-1.jpg" alt="Amongst India’s Top #151-200 Universities in 2024" /></noscript>
                  </div>
                  <div class="rank-card-title">
                    Amongst India’s Top #151-200 Universities in 2024                  </div>
                </div>
                      
              
                <div class="rank-line-item">

                  <div class="rank-badge">
                                          <!-- <div class="accr"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2021%2021'%3E%3C/svg%3E" alt="Accredation" width="21" height="21" data-lazy-src="/assets/images/ranking-new/acc-icon.svg" /><noscript><img src="/assets/images/ranking-new/acc-icon.svg" alt="Accredation" width="21" height="21" /></noscript></div> -->
                                      </div>
                  <div class="rank-card-img">
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="AICTE Norms Compliant" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/AICTE-3-1.jpg" /><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/AICTE-3-1.jpg" alt="AICTE Norms Compliant" /></noscript>
                  </div>
                  <div class="rank-card-title">
                    AICTE Norms Compliant                  </div>
                </div>
                      
              
                <div class="rank-line-item">

                  <div class="rank-badge">
                                          <div class="rank-top">
                        <span>
                          Rank 1                        </span>
                      </div>
                                      </div>
                  <div class="rank-card-img">
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Top Private University in North East" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/iirf-1.png" /><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/iirf-1.png" alt="Top Private University in North East" /></noscript>
                  </div>
                  <div class="rank-card-title">
                    Top Private University in North East                  </div>
                </div>
                      
              
                <div class="rank-line-item">

                  <div class="rank-badge">
                                          <div class="rank-top">
                        <span>
                          Rank 15                        </span>
                      </div>
                                      </div>
                  <div class="rank-card-img">
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Among Top Leading Universities Showcasing Entrepreneurial Spirit" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/WURI.jpg" /><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/WURI.jpg" alt="Among Top Leading Universities Showcasing Entrepreneurial Spirit" /></noscript>
                  </div>
                  <div class="rank-card-title">
                    Among Top Leading Universities Showcasing Entrepreneurial Spirit                  </div>
                </div>
                      
              
                <div class="rank-line-item">

                  <div class="rank-badge">
                                          <div class="rank-top">
                        <span>
                          Rank 6                        </span>
                      </div>
                                      </div>
                  <div class="rank-card-img">
                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Amongst Top 10 Multidisciplinary Universities in East Zone" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/SMU_Rankings_The-Week.jpg" /><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/SMU_Rankings_The-Week.jpg" alt="Amongst Top 10 Multidisciplinary Universities in East Zone" /></noscript>
                  </div>
                  <div class="rank-card-title">
                    Amongst Top 10 Multidisciplinary Universities in East Zone                  </div>
                </div>
                              </div>
      </div>
  </div>    </section>
  
  <section  class="top-online-course section-mb">
    
<div  class="top-online-course-section">
  <div class="wrapper-course container">
    <div class="top-section">
      <h2 class="section-title">Top Online Courses</h2>
              <a href="https://www.onlinemanipal.com/all-courses" class="view-all-btn">View All Courses</a>
          </div>
    <div class="top-course-slider">
      
          <div class="line-item border-smu">
            <a href="/online-mba-sikkim-manipal-university" class="courses-link">
              <div class="course-img">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Master of Business Administration" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/MBA-SMU.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/MBA-SMU.png" alt="Master of Business Administration"></noscript>
              </div>
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

      
          <div class="line-item border-smu">
            <a href="/master-of-computer-applications-smu" class="courses-link">
              <div class="course-img">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Master of Computer Applications" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/09/Masters-of-Computer-Applications-.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2023/09/Masters-of-Computer-Applications-.png" alt="Master of Computer Applications"></noscript>
              </div>
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
            <a href="/master-of-arts-english" class="courses-link">
              <div class="course-img">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Online MA in English" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Masters-of-Arts-English.jpg"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Masters-of-Arts-English.jpg" alt="Online MA in English"></noscript>
              </div>
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

      
          <div class="line-item border-smu">
            <a href="/bachelor-of-arts" class="courses-link">
              <div class="course-img">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Bachelor of Arts" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/SMU-BA.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/SMU-BA.png" alt="Bachelor of Arts"></noscript>
              </div>
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
            <a href="/master-of-arts-political-science" class="courses-link">
              <div class="course-img">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Online MA in Political Science" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/MA-Political-sci-SMU.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/MA-Political-sci-SMU.png" alt="Online MA in Political Science"></noscript>
              </div>
              <div class="course-wrapper">
                <div class="course-deatil">
                  <div class="course-name">Online MA in Political Science</div>
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

      
          <div class="line-item border-smu">
            <a href="/master-of-arts-sociology" class="courses-link">
              <div class="course-img">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Online MA in Sociology" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/MA-Sociology-SMU.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/MA-Sociology-SMU.png" alt="Online MA in Sociology"></noscript>
              </div>
              <div class="course-wrapper">
                <div class="course-deatil">
                  <div class="course-name">Online MA in Sociology</div>
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
                    <span>INR 75,000</span>
                  </div>
                </div>
              </div>
            </a>
          </div>

      
          <div class="line-item border-smu">
            <a href="/master-of-commerce-smu" class="courses-link">
              <div class="course-img">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Master of Commerce" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/image-493.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/image-493.png" alt="Master of Commerce"></noscript>
              </div>
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
                    <span>INR 75,000</span>
                  </div>
                </div>
              </div>
            </a>
          </div>

      
          <div class="line-item border-smu">
            <a href="/bachelor-of-commerce-smu" class="courses-link">
              <div class="course-img">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Bachelor of Commerce" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/BCOM-SMU.png"><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/BCOM-SMU.png" alt="Bachelor of Commerce"></noscript>
              </div>
              <div class="course-wrapper">
                <div class="course-deatil">
                  <div class="course-name">Bachelor of Commerce</div>
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

      
    </div>
      </div>
</div>  </section>

      <section  class="institution-message bottomMargin preMessage section-mb">
      
  <img class="star-image" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2016%2022'%3E%3C/svg%3E" alt="Star Image" width="16" height="22" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/institution/star.png" /><noscript><img class="star-image" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/institution/star.png" alt="Star Image" width="16" height="22" /></noscript>
<div  class="container">
      <h2 class="section-title">Message from our <span>leaders</span></h2>
        <div class="messageBlockSlider">
      <div class="line-items institution-message-slider">
        <div class="messageBlock">
          <div class="left institution-message-smu">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20386%20267'%3E%3C/svg%3E" alt="Dr GK Prabhu" class="tapmimg" width="386" height="267" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/om-institute-page.png" /><noscript><img src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/om-institute-page.png" alt="Dr GK Prabhu" class="tapmimg" width="386" height="267" /></noscript>
          </div>
          <div class="right">
                        <p class="content">Sikkim Manipal University has always believed that access to quality education can transform lives. Online learning today is more than
              <span class="dots">...</span>
              <span class="more"> a convenient mode — it is a strategic and empowering force. At SMU, our online degree programs are carefully curated to be industry-relevant, academically rigorous, and truly learner-centric - ensuring that every student is equipped with the skills and knowledge needed to succeed in a fast-changing world.</span>
              <span class="toggleText"> Read more</span>
            </p>
            <div class="designation-sec">
              <span class="name sub-heading">Dr GK Prabhu</span>
              <span class="designation mobilefontsize">Vice Chancellor, Sikkim Manipal University</span>
            </div>
          </div>
        </div>
        <div class="messageBlock">
          <div class="left muj-message">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20386%20267'%3E%3C/svg%3E" alt="Dr. Sourav Dhar" width="386" height="267" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/institution/dr-sourav-dhar.png" /><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/institution/dr-sourav-dhar.png" alt="Dr. Sourav Dhar" width="386" height="267" /></noscript>
          </div>
          <div class="right">
            <p class="content">Building on Sikkim Manipal University's legacy in education for last three decades, we have now expanded into the online learning
              <span class="dots">...</span>
              <span class="more">space to make quality higher education more accessible, innovative and inclusive than ever. Our online programs are designed to equip learners with industry-relevant skills, bridging the gap between ambition and opportunity. With a strong foundation in academic excellence, we are empowering tomorrow's global learners to achieve their career aspirations with confidence.</span>
              <span class="toggleText"> Read more</span>
            </p>
            <div class="designation-sec">
              <span class="name sub-heading">Prof (Dr) Sourav Dhar</span>
              <span class="designation mobilefontsize">Director, Centre for Distance & Online Education</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    </section>
  
  <section  class="leading-with-result doodle-section bottomMargin section-mb">
         <svg class="doodle" width="1920" height="659" viewBox="0 0 1920 659" fill="none" xmlns="http://www.w3.org/2000/svg">
     <path opacity="0.2" d="M1922 282.273C1794.01 341.777 1414.42 662.516 1161.37 559.515C962.85 478.708 1062.96 -27.2306 1230.78 46.3462C1411.15 125.425 990.913 589.933 763.966 615.91C395.125 658.129 0.987747 263.823 -45 150.535" stroke="#A9D8FF" stroke-width="78" />
   </svg>
  <div  class="leading-top-section container">
   <div class="leading-sec-title">
     <h2 class="section-title">Leading with <span class="circle-word">results</span></h2>
     <!-- <img class="result-img" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="course" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/leading-result.png"><noscript><img class="result-img" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/leading-result.png" alt="course"></noscript> -->
     <img class="diffe-img" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="course" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/make-difference.svg"><noscript><img class="diffe-img" src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/make-difference.svg" alt="course"></noscript>
   </div>
   <div class="leading-cards">
            <div class="leading-card-item">
         <p class="lead-count" data-number="30+"></p>
         <p class="lead-title">Years of quality education</p>
       </div>

            <div class="leading-card-item">
         <p class="lead-count" data-number="530+"></p>
         <p class="lead-title">Faculty &amp; staff</p>
       </div>

            <div class="leading-card-item">
         <p class="lead-count" data-number="6 Lakh+"></p>
         <p class="lead-title">Alumni</p>
       </div>

            <div class="leading-card-item">
         <p class="lead-count" data-number="2500+"></p>
         <p class="lead-title">Learner footprint across towns &amp; cities of India</p>
       </div>

        </div>
 </div>  </section>

      <section data-wpr-lazyrender="1" class="faculty-sec section-mb">
        <h2 class="section-title">Meet your expert faculty</h2>
<div  class="faculty-main">
                  <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-1 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Sourav Dhar " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-sourav-dhar.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-sourav-dhar.png" alt="Dr. Sourav Dhar " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Dr. Sourav Dhar </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Dr. Sourav Dhar " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Dr. Sourav Dhar "></noscript>Professor &amp; Director </p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-1" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Sourav Dhar " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-sourav-dhar.png"><noscript><img class="faculty-ing back-img  color-1" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-sourav-dhar.png" alt="Dr. Sourav Dhar " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Dr. Sourav Dhar is an engineer and academician by profession. He received PhD (Engineering) in 2013.  Since 2003, he has been associated with the Sikkim Manipal Institute of Technology, India, and executed different academic and administrative responsibilities. He was a Professor and Head of the ECE Department, SMIT from 2019 to 2023. As Professor and Director, he has taken the responsibilities of the Centre for Distance and Online Education (CDOE), Sikkim Manipal University since September 2023. His current research interests include 6G communication, cloud computing, IoT, WSN, remote sensing, and microwave filter design. He is a senior member of the Institute of Electrical and Electronics Engineers (IEEE) (IEEE-GRSS society) and a life member of the Institution of Engineers (India)(IEI). He has published more than 60 research papers in several SCI/Scopus-indexed international journals and conference proceedings and guided several PhD scholars. Currently, four research scholars are working under his supervision at SMU.  He has completed a sponsored project on microwave filter design as Principal Investigator. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-2 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Ishwer Shivakoti " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/IShwer-Shivakoti.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/IShwer-Shivakoti.png" alt="Dr. Ishwer Shivakoti " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Dr. Ishwer Shivakoti </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Dr. Ishwer Shivakoti " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Dr. Ishwer Shivakoti "></noscript>Assistant Professor (SG) &amp; Assistant Director </p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-2" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Ishwer Shivakoti " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/IShwer-Shivakoti.png"><noscript><img class="faculty-ing back-img  color-2" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/IShwer-Shivakoti.png" alt="Dr. Ishwer Shivakoti " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Dr. Ishwer Shivakoti holds a B.Tech in Mechanical Engineering and an M.Tech in Production Engineering from Sikkim Manipal Institute of Technology and earned his Ph.D. from Sikkim Manipal University. He began his academic career in 2012 as an Assistant Professor in the Department of Mechanical Engineering at SMIT and has since taken on several significant academic and administrative roles such as Assistant Registrar (Academics), Assistant Professor (Research), Deputy Registrar (Academics &amp; Skill Development), and he currently serves as Assistant Director and Assistant Professor (Selection Grade) at the Centre for Distance and Online Education (CDOE), Sikkim Manipal University. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-3 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Kushal Pokhrel " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-kushal-pokhrel.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-kushal-pokhrel.png" alt="Dr. Kushal Pokhrel " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Dr. Kushal Pokhrel </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Dr. Kushal Pokhrel " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Dr. Kushal Pokhrel "></noscript>Associate Professor &amp; Deputy Director </p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-3" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Kushal Pokhrel " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-kushal-pokhrel.png"><noscript><img class="faculty-ing back-img  color-3" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-kushal-pokhrel.png" alt="Dr. Kushal Pokhrel " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Dr. Kushal Pokhrel graduated with his Bachelor of Engineering in Electronics and Telecommunication from the University of Mumbai in 2003, and an MTech in Digital Electronics and Advanced Communication from SMU in 2005. He was awarded PhD from the Department of Computer Science and Engineering, SMU in 2021. He has a teaching experience of over 19 years alongside academic administration. Born in Gangtok, Sikkim he has an avid interest in computer networking and electronic devices. He has been teaching in the Department of Electronics and Communication Engineering, Sikkim Manipal Institute of Technology, SMU as an Associate Professor and is currently posted as Associate Professor and Deputy Director at CDOE, SMU. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-4 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Madan Chettri " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-madan-chetri.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-madan-chetri.png" alt="Dr. Madan Chettri " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Dr. Madan Chettri </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Dr. Madan Chettri " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Dr. Madan Chettri "></noscript>Associate Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-4" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Madan Chettri " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-madan-chetri.png"><noscript><img class="faculty-ing back-img  color-4" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-madan-chetri.png" alt="Dr. Madan Chettri " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Dr. Madan is currently working as an Associate Professor at Sikkim Manipal University, India. He is a dedicated, resourceful, and goal-driven professional educator with 27 years of experience in the field of teaching at various colleges and universities. He has authored two books and has in his credit numerous publications in UGC CARE listed/SCOPOUS journals. His areas of interest include Finance, Banking, and Research Methodology among others. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-5 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Arun Chaudhary " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/arun-chaudhary.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/arun-chaudhary.png" alt="Mr. Arun Chaudhary " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Arun Chaudhary </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Arun Chaudhary " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Arun Chaudhary "></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-5" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Arun Chaudhary " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/arun-chaudhary.png"><noscript><img class="faculty-ing back-img  color-5" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/arun-chaudhary.png" alt="Mr. Arun Chaudhary " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr. Arun Chaudhary is currently working as an Assistant Professor at SMU-CDOE, Sikkim, India. He has completed Masters in Information Technology with specialization in Wireless Communication and Computing from IIIT, Allahabad. He did his graduation in Electrical and Electronics Engineering with specialization in Communication. He has a 13 years teaching experience in Open and distance education and 6 years in regular mode of education. His areas of research and interest includes - deep learning and causal reasoning. He enjoys exploring and using various tools applied for Data Science.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-6 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Anupam Kumar Pandey " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/anupam-kumar-pandey.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/anupam-kumar-pandey.png" alt="Dr. Anupam Kumar Pandey " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Dr. Anupam Kumar Pandey </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Dr. Anupam Kumar Pandey " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Dr. Anupam Kumar Pandey "></noscript>Associate Professor/ Assistant Professor (SG) </p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-6" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Anupam Kumar Pandey " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/anupam-kumar-pandey.png"><noscript><img class="faculty-ing back-img  color-6" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/anupam-kumar-pandey.png" alt="Dr. Anupam Kumar Pandey " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Dr. Anupam Kumar Pandey is currently working as an Associate/Assistant Professor (SG) at Sikkim Manipal University. He has completed his Ph.D. from Banaras Hindu University on Disinvestment in Public Sector Enterprises in India- A Case Study, graduation and post-graduation from Devi Ahilya University, Indore (M.P.). He specializes in income tax, corporate accounting, business regulatory framework, and business finance. Dr. Pandey has over ten years of teaching experience. He has presented multiple research papers at National and International Conferences and has been credited with many research publications in reputed journals. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-7 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Aditya Rai " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/aditya-rai.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/aditya-rai.png" alt="Dr. Aditya Rai " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Dr. Aditya Rai </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Dr. Aditya Rai " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Dr. Aditya Rai "></noscript>Associate Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-7" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Aditya Rai " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/aditya-rai.png"><noscript><img class="faculty-ing back-img  color-7" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/aditya-rai.png" alt="Dr. Aditya Rai " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Dr. Aditya Rai is working as an Associate Professor at Sikkim Manipal University. Previously he worked at ICFAI University, Sikkim as an Assistant Professor from 2014 to 2016 and was also the guest faculty at various universities like ICFAI Sikkim, Vinayak Missions Sikkim University, RIM (Annamalai University), and SRM University. Apart from teaching he was the trainer for local entrepreneurs of Sikkim in SBIRSETI. He has worked in the Industry as an Authorized Person in Peerless Securities and as a Certified Financial Consultant in HDFC Life. He completed his bachelor’s degree in B.com Accounts Hons from St Joseph’s College North Point Darjeeling in the year 2009 and an MBA in Finance from SMU in 2011. Com from IGNOU. He has NET in both Management and Commerce and has completed his PhD from Sikkim Central University. He has authored two books, contributed book chapters, and written articles in Listed and peer-reviewed journals.   </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-1 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Ruchita Sharma " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-ruchitha-sharma.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-ruchitha-sharma.png" alt="Dr. Ruchita Sharma " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Dr. Ruchita Sharma </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Dr. Ruchita Sharma " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Dr. Ruchita Sharma "></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-1" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Ruchita Sharma " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-ruchitha-sharma.png"><noscript><img class="faculty-ing back-img  color-1" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-ruchitha-sharma.png" alt="Dr. Ruchita Sharma " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Dr. Ruchita Sharma is currently working as an Assistant Professor at Sikkim Manipal University. She has pursued her Ph.D. from Sikkim University. She is a gold medalist in M. Com (Accounting &amp; Finance) with over 3 years of experience in teaching and her area of research interest is mainly in finance, banking, and microfinance. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-2 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Kapil Tamang " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/kapil-tamang.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/kapil-tamang.png" alt="Dr. Kapil Tamang " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Dr. Kapil Tamang </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Dr. Kapil Tamang " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Dr. Kapil Tamang "></noscript>Assistant Professor </p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-2" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Kapil Tamang " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/kapil-tamang.png"><noscript><img class="faculty-ing back-img  color-2" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/kapil-tamang.png" alt="Dr. Kapil Tamang " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Dr. Kapil Tamang is currently working as an Assistant Professor at Sikkim Manipal University. He has been a Research Fellow (UGC JRF/SRF) at the Department of Sociology, University of Hyderabad, and has recently submitted his Doctoral Thesis. His areas of research interest are Political Economy, Trade, Labour and Tea Plantations, Gender Studies, Himalayan Studies, among others. He has 5+ years of experience in empirical research, academic writing, and data analysis. He has also been a part of several national and international conferences and workshops organized by institutions such as Dublin City University, V. V. Giri National Labour Institute, CRG, Rosa Luxemburg Stiftung, Indian Sociological Association, and many more.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-3 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Sachin Limbu" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-sachin-limbu.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-sachin-limbu.png" alt="Dr. Sachin Limbu" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Dr. Sachin Limbu</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Dr. Sachin Limbu" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Dr. Sachin Limbu"></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-3" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Sachin Limbu" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-sachin-limbu.png"><noscript><img class="faculty-ing back-img  color-3" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-sachin-limbu.png" alt="Dr. Sachin Limbu" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Dr. Sachin Limbu works as an Assistant Professor at Sikkim Manipal University. He has completed his M. Phil and Ph. D from the School of International Studies, Jawaharlal University, New Delhi, and has cleared both NET and SLET in an applied field. His area of interest includes international politics, foreign policy, Russia, neo-Eurasianism, and political and cultural aspects of the Eastern Himalayas. He has research and teaching experience of 8 years. Over the years he has published research papers, attended seminars and workshops, and delivered several talks on All India Radio.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-4 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Poornima Ravindra Vijaya" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/poornima-indra-vijaya.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/poornima-indra-vijaya.png" alt="Dr. Poornima Ravindra Vijaya" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Dr. Poornima Ravindra Vijaya</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Dr. Poornima Ravindra Vijaya" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Dr. Poornima Ravindra Vijaya"></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-4" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Poornima Ravindra Vijaya" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/poornima-indra-vijaya.png"><noscript><img class="faculty-ing back-img  color-4" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/poornima-indra-vijaya.png" alt="Dr. Poornima Ravindra Vijaya" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Dr. Poornima Ravindra Vijaya is currently an Assistant Professor of Political Science at Sikkim Manipal University (SMU). She has completed her Ph.D. in International Relations from the Jindal School of International Affairs (JSIA) at O.P. Jindal Global University. She is a Research Associate at Nehghinpao Kipgen’s Centre of Southeast Asian Studies and has worked on independent research projects on ASEAN for the Economic Research Institute for ASEAN and East Asia (ERIA), Indonesia. She has assisted in teaching several courses on Indo-Pacific at JSIA. At SMU, she teaches Indian Foreign Policy, Modern Indian Political Thought, Comparative Politics, and Democratic Awareness to MA and BA students. Her research specialization includes Southeast Asia, Indo-Pacific Affairs, middle power geopolitics, and Global IR perspectives. She has many publications including journal articles and book chapters in top-tier international journals and publishers. She is also a member of the International Studies Association (ISA) and European International Studies Association (EISA) and regularly participates in conferences. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-5 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Manoj Rai " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/manoj-rai.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/manoj-rai.png" alt="Mr. Manoj Rai " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Manoj Rai </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Manoj Rai " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Manoj Rai "></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-5" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Manoj Rai " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/manoj-rai.png"><noscript><img class="faculty-ing back-img  color-5" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/manoj-rai.png" alt="Mr. Manoj Rai " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr. Manoj Rai is currently working as an Assistant Professor at Sikkim Manipal University, India and has been part of other institutions such as Sikkim Alpine University, Namchi. He has completed his Master of Commerce with specialisation in Accounting and Finance from the Sikkim Manipal University and Bachelor of Commerce from Nar Bahadur Bhandari Govt. college Tadong, Sikkim. His research interest includes finance and microeconomics.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-6 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Nilanjana Sinha " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/niranjana-sinha.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/niranjana-sinha.png" alt="Ms. Nilanjana Sinha " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Nilanjana Sinha </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Nilanjana Sinha " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Nilanjana Sinha "></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-6" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Nilanjana Sinha " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/niranjana-sinha.png"><noscript><img class="faculty-ing back-img  color-6" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/niranjana-sinha.png" alt="Ms. Nilanjana Sinha " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Ms. Nilanjana Sinha is currently working as an Assistant Professor at Sikkim Manipal University, India. She has completed her Masters in English from the University of North Bengal and has been the department topper in graduation from North Bengal St. Xavier’s College. Her research interest spans across identity, culture and ethnicity. Being an avid reader of stories and poems, she enjoys writing her own and has independently organized numerous events on spoken word poetry in her hometown, Kalimpong. She is also the community editor of The Pomelo, an e-magazine aimed at exploring Himalayan voices helmed by young women researchers of India and Nepal. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-7 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Deepa Sharma " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/deepa-sharma.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/deepa-sharma.png" alt="Ms. Deepa Sharma " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Deepa Sharma </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Deepa Sharma " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Deepa Sharma "></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-7" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Deepa Sharma " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/deepa-sharma.png"><noscript><img class="faculty-ing back-img  color-7" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/deepa-sharma.png" alt="Ms. Deepa Sharma " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Ms. Deepa Sharma is currently working as an Assistant Professor at Sikkim Manipal University. Before joining Sikkim Manipal University, she held the position as a Lecturer at Gyan Jyoti College, affiliated to the University of North Bengal. She is currently pursuing PhD in Corporate Social Responsibility at the Department of Commerce, Manipal Academy of Higher Education.  She has presented multiple research papers at national and international conferences and published papers in journals of international repute. She is also collaborating on a research project as part of the Manipal Research Board with faculty from Manipal University, Jaipur.  She completed her bachelor's degree in B. Com (Hons) from Siliguri College of Commerce, Siliguri in 2009. Subsequently, she pursued her M. Com in Accountancy &amp; Finance from the University of North Bengal in 2012. She has also completed her MBA in Finance from Sikkim Manipal University- Directorate of Distance Education. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-1 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Pema Gyalchen Tamang" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/pema-gyalchen-tamang.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/pema-gyalchen-tamang.png" alt="Mr. Pema Gyalchen Tamang" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Pema Gyalchen Tamang</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Pema Gyalchen Tamang" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Pema Gyalchen Tamang"></noscript>Adjunct Faculty</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-1" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Pema Gyalchen Tamang" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/pema-gyalchen-tamang.png"><noscript><img class="faculty-ing back-img  color-1" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/pema-gyalchen-tamang.png" alt="Mr. Pema Gyalchen Tamang" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr. Pema Gyalchen Tamang is currently working as an Adjunct Faculty at Sikkim Manipal University, India. He completed his Master of Arts in English from Jadavpur University, Kolkata. He has previously worked as a full-time faculty at Bhawanipur Education Society College, Kolkata, India, and Salesian College, Siliguri. His research interests include Conflict and Borders, Early Modern European Literature, Queer Studies, Himalayan Studies, and Translation studies. His articles and book chapters have been published in reputed and indexed journals like Himalaya, Postcolonial Interventions, and so one, and in edited volumes published by Routledge, Cambridge Scholars, and so on. He has also been actively involved in translation projects on literature written in South Asian languages. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-2 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Tshering Ganden Bhutia " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/tshering-ganden-bhutia.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/tshering-ganden-bhutia.png" alt="Ms. Tshering Ganden Bhutia " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Tshering Ganden Bhutia </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Tshering Ganden Bhutia " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Tshering Ganden Bhutia "></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-2" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Tshering Ganden Bhutia " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/tshering-ganden-bhutia.png"><noscript><img class="faculty-ing back-img  color-2" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/tshering-ganden-bhutia.png" alt="Ms. Tshering Ganden Bhutia " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Ms. Tshering Ganden Bhutia is currently working as an Assistant Professor at Sikkim Manipal University, India. She has completed her master’s in commerce (M.Com) from the University of Delhi with major in Marketing Management and minor in International Business, she completed her bachelor’s in commerce (B.Com) from University of Delhi. Her research interest spans Consumer Behaviour, Marketing Mix and Business Environment. She has worked as an intern in NGOs like Feeding India where she worked under the Talent Management Team. She loves reading and crocheting during her leisure time.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-3 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Tirupati Bhattacharya " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/tirupati-bhattacharya.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/tirupati-bhattacharya.png" alt="Mr. Tirupati Bhattacharya " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Tirupati Bhattacharya </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Tirupati Bhattacharya " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Tirupati Bhattacharya "></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-3" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Tirupati Bhattacharya " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/tirupati-bhattacharya.png"><noscript><img class="faculty-ing back-img  color-3" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/tirupati-bhattacharya.png" alt="Mr. Tirupati Bhattacharya " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr. Tirupati Bhattacharya is currently working as an Assistant Professor at Sikkim Manipal University. He has completed his Master of Technology (MTech), and PG Diploma in Remote Sensing &amp; GIS from Jadavpur University, Kolkata followed by an MCA and BCA from Sikkim Manipal University. Previously he worked as a Group ‘B’ in the Central Government Research Organisation in the domain of (ICT)Information Communication Technology System Management. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-4 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Shubham Sah " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/subham-sah.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/subham-sah.png" alt="Mr. Shubham Sah " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Shubham Sah </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Shubham Sah " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Shubham Sah "></noscript>Assistant Professor </p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-4" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Shubham Sah " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/subham-sah.png"><noscript><img class="faculty-ing back-img  color-4" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/subham-sah.png" alt="Mr. Shubham Sah " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr. Shubham Sah is currently working as Assistant Professor of Commerce, at Sikkim Manipal University. He is pursuing his Ph.D. from the Department of Commerce at the Cooch Behar Panchanan Barma University, West Bengal. He is a Gold-medallist in the Master of Commerce in Finance &amp; Accounting and was also appointed as a Reviewer of the Journal of Finance and Accounting (JFA). His current research focuses on the application of econometrics in finance, new trends in international markets, and time series analysis. He has published a couple of research articles in National and UGC Care Listed Journals. Also, he has participated in several National and International conferences and has a couple of times Best Paper Awards. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-5 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Anushka Chhetri" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/anushka-chhetri.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/anushka-chhetri.png" alt="Ms. Anushka Chhetri" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Anushka Chhetri</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Anushka Chhetri" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Anushka Chhetri"></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-5" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Anushka Chhetri" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/anushka-chhetri.png"><noscript><img class="faculty-ing back-img  color-5" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/anushka-chhetri.png" alt="Ms. Anushka Chhetri" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Ms. Anushka Chhetri is currently working as an Assistant Professor at Sikkim Manipal University, India. She has completed her graduation from St Joseph’s College, Darjeeling, and her master's degree in political science from the University of North Bengal. She has a major in Public Administration, and her research interest includes Indian Politics and State and Sub-state Politics in India. She is a silver medalist in her graduation.  </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-6 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Pawan Rai " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/pawan-pai.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/pawan-pai.png" alt="Mr. Pawan Rai " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Pawan Rai </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Pawan Rai " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Pawan Rai "></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-6" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Pawan Rai " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/pawan-pai.png"><noscript><img class="faculty-ing back-img  color-6" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/pawan-pai.png" alt="Mr. Pawan Rai " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr. Pawan Rai is currently working as an Assistant Professor at Sikkim Manipal University, India. He has cleared NET, SET examination and is pursuing a PhD. Mr. Rai has obtained a degree in Tourism and Travelling Management (Advanced Diploma). He has more than seven years of teaching experience in various colleges in Darjeeling Hills. He specializes in Political Theory and the Theories of International Relations. He is inspired by thinkers such as Hegel, Marx, Frankfurt School, Foucault and Zizek.  </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-7 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Royal Moktan " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/royal-moktan.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/royal-moktan.png" alt="Mr. Royal Moktan " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Royal Moktan </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Royal Moktan " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Royal Moktan "></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-7" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Royal Moktan " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/royal-moktan.png"><noscript><img class="faculty-ing back-img  color-7" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/royal-moktan.png" alt="Mr. Royal Moktan " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr. Royal Tamang (Moktan) is currently working as an Assistant Professor at Sikkim Manipal University. He is pursuing a Ph.D. from Sikkim Skill University in the Management Department. He specializes in marketing and finance specialization. Mr. Royal Tamang has more than 9 years of teaching (offline and online) and corporate experience combined. He has qualified for UGC-NET twice and holds an array of workshops, training, seminars, and symposiums under him. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-1 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Pema Gyamptso Bhutia " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/pema-gyamptso-bhutia-1.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/pema-gyamptso-bhutia-1.png" alt="Mr. Pema Gyamptso Bhutia " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Pema Gyamptso Bhutia </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Pema Gyamptso Bhutia " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Pema Gyamptso Bhutia "></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-1" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Pema Gyamptso Bhutia " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/pema-gyamptso-bhutia-1.png"><noscript><img class="faculty-ing back-img  color-1" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/pema-gyamptso-bhutia-1.png" alt="Mr. Pema Gyamptso Bhutia " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr Pema Gyamptso Bhutia is working as an Assistant Professor specializing in sociology, currently serving in Sikkim Manipal University, India. He holds a Master's degree (M.A.) in Sociology and has successfully cleared UGC-NET (National Eligibility Test). Pema is committed to fostering an inclusive and engaging learning environment for students. Utilizing innovative and interactive teaching methods, He ensures students' comprehensive understanding of sociological concepts while nurturing their critical thinking and analytical skills. Pema Gyamptso Bhutia actively contributes to the academic community through dedicated mentorship, research initiatives, and a keen interest in the evolving landscape of online education, thereby enhancing the educational experience at Sikkim Manipal University. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-2 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Shabana Mansoor" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-shabana-mansoor.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-shabana-mansoor.png" alt="Dr. Shabana Mansoor" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Dr. Shabana Mansoor</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Dr. Shabana Mansoor" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Dr. Shabana Mansoor"></noscript>Adjunct Faculty</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-2" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Shabana Mansoor" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-shabana-mansoor.png"><noscript><img class="faculty-ing back-img  color-2" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-shabana-mansoor.png" alt="Dr. Shabana Mansoor" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Shabana Mansoor is an Adjunct faculty at Sikkim Manipal University. She holds an MA in communication and journalism degree. She has over 20 years of experience as an academician and media professional in various reputed educational institutions and organizations in India.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-3 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Niraj Sapkota " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/niraj-sapkota.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/niraj-sapkota.png" alt="Mr. Niraj Sapkota " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Niraj Sapkota </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Niraj Sapkota " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Niraj Sapkota "></noscript>Adjunct Faculty</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-3" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Niraj Sapkota " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/niraj-sapkota.png"><noscript><img class="faculty-ing back-img  color-3" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/niraj-sapkota.png" alt="Mr. Niraj Sapkota " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr. Niraj Sapkota is an Adjunct Faculty at the Sikkim Manipal University. He holds a B.Sc. and M.Sc. in Mathematics and is currently pursuing his Ph.D. at Sikkim Manipal Institute of Technology, Sikkim Manipal University, India. Mr. Sapkota has authored numerous research papers published in reputable international journals and conference proceedings. He has actively participated in various national and international conferences, presenting his research findings. Additionally, he has mentored several Mathematical Summer Camps, including MTTS and INMOTC, for both college and school students. Mr. Sapkota is a dedicated member of the Sikkim Mathematical Society, where he has organized and facilitated numerous workshops. He frequently serves as a resource person in workshops and camps, delivering lectures in many Invited Talks. Mr. Sapkota is also proficient in LaTeX, Python, and C++, showcasing his enthusiasm for computer programming. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-4 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Arkapriya Gangopadhyay" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/arkapran-gangopadhay.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/arkapran-gangopadhay.png" alt="Ms. Arkapriya Gangopadhyay" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Arkapriya Gangopadhyay</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Arkapriya Gangopadhyay" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Arkapriya Gangopadhyay"></noscript>Adjunct Faculty</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-4" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Arkapriya Gangopadhyay" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/arkapran-gangopadhay.png"><noscript><img class="faculty-ing back-img  color-4" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/arkapran-gangopadhay.png" alt="Ms. Arkapriya Gangopadhyay" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Arkapriya is an Adjunct faculty at Sikkim Manipal University. She has done master's in sociology and has achieved the prestigious First Class First (Gold Medalist) distinction. She is a highly regarded educator with extensive expertise in education and a broad background across various academic disciplinesHer contributions include shaping the STEM curriculum at Deeksha STEM Schools in Bengaluru, in adherence to the guidelines of the National Education Policy 2020, and providing training to educators. Prior to this, Arkapriya held positions as an assistant teacher in sociology at an esteemed ISC affiliated School in Kolkata, as well as a lecturer at the College of Nursing, Medical College &amp; Hospital in Kolkata, and Jogamaya Devi College under the University of Calcutta. Utilizing various platforms and technologies, Arkapriya seamlessly integrates theoretical and practical aspects of sociology. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-5 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Lakshmi Priya K.S" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/lakshmi-priya.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/lakshmi-priya.png" alt="Ms. Lakshmi Priya K.S" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Lakshmi Priya K.S</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Lakshmi Priya K.S" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Lakshmi Priya K.S"></noscript>Adjunct Faculty</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-5" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Lakshmi Priya K.S" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/lakshmi-priya.png"><noscript><img class="faculty-ing back-img  color-5" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/lakshmi-priya.png" alt="Ms. Lakshmi Priya K.S" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Lakshmi Priya KS is an Adjunct faculty at Sikkim Manipal University. She holds a master's degree and MPhil in political science from the University of Hyderabad. She is a seasoned academician and researcher with over 5 years of experience in education and research and has academic expertise in Gender Studies, Indian Political Process, Public Policy, and International Relations. Previously, she worked as a faculty member at prestigious universities like Maharani Lakshmi Ammani College, Bangalore and University College Mangalore. She has also worked on research projects with reputed institutes like the Tata Institute of Social Sciences and Indian Institute of Technology Madras. Her areas of expertise include Political Theory, International Relations, Public Administration, and Gender Studies.
</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-6 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Aranya Ghosh" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/aranya-ghosh.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/aranya-ghosh.png" alt="Mr. Aranya Ghosh" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Aranya Ghosh</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Aranya Ghosh" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Aranya Ghosh"></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-6" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Aranya Ghosh" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/aranya-ghosh.png"><noscript><img class="faculty-ing back-img  color-6" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/aranya-ghosh.png" alt="Mr. Aranya Ghosh" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Aranya Ghosh is currently working as an Assistant Professor at Sikkim Manipal University. He has completed his MBA in dual specialization in Human Resource and Marketing from Sikkim Manipal Institute of Technology. He has an industry experience of above 2.4 years, where he worked on marketing strategies, gaining an understanding of the client's requirement, the core objective of considering the course, and delivering customized solutions, formulating a business strategy to achieve targets in terms of lead generation and admission, acquiring new customers by educating them about the courses and services offered by the University, while retaining existing customers, assisting in promotional activities including market visits, campaigns, digital &amp; print media displays, and customer engagement, etc.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-7 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Sudeshna Dutta" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-sudheshna-dutta.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-sudheshna-dutta.png" alt="Dr. Sudeshna Dutta" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Dr. Sudeshna Dutta</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Dr. Sudeshna Dutta" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Dr. Sudeshna Dutta"></noscript>Assistant Professor </p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-7" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Sudeshna Dutta" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-sudheshna-dutta.png"><noscript><img class="faculty-ing back-img  color-7" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-sudheshna-dutta.png" alt="Dr. Sudeshna Dutta" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Dr. Sudesha Dutta did her graduation, post-graduation, and PhD from the Comparative Literature of Jadavpur University. She was awarded with JU-SYLFF PhD fellowship. As a visiting fellow at the Indigenous Politics Programme of the University of Manoa (Hawai’i) she worked closely with the activists and scholars invested in Kānaka Māoli causes. Her research interests include indigenous culture, oral history, pedagogy, aesthetics, ecology, gender, identity and ethics. PhD Jadavpur University, M.A (Gold Medal) Jadavpur University.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-1 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Partha Debnath " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/partha-debnath.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/partha-debnath.png" alt="Mr. Partha Debnath " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Partha Debnath </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Partha Debnath " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Partha Debnath "></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-1" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Partha Debnath " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/partha-debnath.png"><noscript><img class="faculty-ing back-img  color-1" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/partha-debnath.png" alt="Mr. Partha Debnath " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr. Partha Debnath is currently working as an Assistant Professor of English at Sikkim Manipal University, India. He is pursuing his Ph.D. and cleared UGC NET in 2020 and 2022. He has completed his M.A. in English from Kalyani University, West Bengal, and his B.A. in English from Kanchrapara College, West Bengal. He is involved in several translation projects. He has published several journal articles and book chapters and presented papers in multiple national and international seminars and conferences. He is a member of the Comparative Literature Association of India (CLAI), the South Asian Literary Association (SALA), and the Indian Network for Memory Studies (INMS). His areas of interest include Feminism, Deconstruction, and Trauma theory.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-2 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Rinzing Ongmu Sherpa" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-rinzing-ongmu-sherpa.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-rinzing-ongmu-sherpa.png" alt="Dr. Rinzing Ongmu Sherpa" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Dr. Rinzing Ongmu Sherpa</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Dr. Rinzing Ongmu Sherpa" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Dr. Rinzing Ongmu Sherpa"></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-2" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Rinzing Ongmu Sherpa" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-rinzing-ongmu-sherpa.png"><noscript><img class="faculty-ing back-img  color-2" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/dr-rinzing-ongmu-sherpa.png" alt="Dr. Rinzing Ongmu Sherpa" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Dr. Rinzing Ongmu Sherpa is an Assistant Professor of Sociology at CDOE, Sikkim Manipal University. She received her PhD degree in Sociology from Jawaharlal Nehru University, New Delhi in 2023. She was awarded the UGC-NET&amp;JRF scholarship, in Sociology. Her areas of interest include ethnicity and identity politics, community studies, gender studies, Himalayan studies, and ethnography. Over the years, she has been a part of several national and international academic conferences, seminars, talks, and workshops. In 2019, her M.Phil. research paper was funded by the Ireland India Institute, Dublin City University for their Annual International Conference on South Asia. Additionally, she has presented her works at the University of Toronto, Social Science Baha, Kathmandu, Jawaharlal Nehru University, and Ambedkar University Delhi, among others. Further, she has published in academic journals and edited volumes while also contributing regularly to online articles and op-eds for local newspapers. Ms. Rinzing has seven years of research experience and specializes in ethnographic research. Her teaching philosophy is anchored in the creation of an inclusive and safe learning space for her students. She is dedicated to fostering interdisciplinary learning experiences, aiming for a nuanced understanding of complex social phenomena beyond traditional classroom boundaries.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-3 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Bijetri Pathak" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/bijetri-pathak.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/bijetri-pathak.png" alt="Ms. Bijetri Pathak" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Bijetri Pathak</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Bijetri Pathak" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Bijetri Pathak"></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-3" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Bijetri Pathak" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/bijetri-pathak.png"><noscript><img class="faculty-ing back-img  color-3" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/bijetri-pathak.png" alt="Ms. Bijetri Pathak" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Ms. Bijetri Pathak is currently working as an Assistant Professor at Sikkim Manipal University, India. She had completed her graduation and Master of Arts in Politics with International Relations from Jadavpur University. She was a part-time lecturer at Loreto College, Kolkata, and is pursuing her Ph.D from the University of Kalyani. She has a profound interest in gender studies, Indian politics, and Indo-Pacific studies. With a keen eye for societal dynamics and political landscapes, she navigates the intricate realms of academia with a passion for research and critical discourse. Her papers were published in various national and international journals.
</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-4 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Sayantani Ghosh" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/sayantani-ghosh.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/sayantani-ghosh.png" alt="Ms. Sayantani Ghosh" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Sayantani Ghosh</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Sayantani Ghosh" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Sayantani Ghosh"></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-4" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Sayantani Ghosh" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/sayantani-ghosh.png"><noscript><img class="faculty-ing back-img  color-4" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/sayantani-ghosh.png" alt="Ms. Sayantani Ghosh" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Ms. Sayantani Ghosh is currently serving as Assistant Professor/Course Coordinator of Sociology at Sikkim Manipal University, India. She holds a Master’s degree (M.A.) in Sociology, with the distinction of ranking first in her cohort at the University of Calcutta. In addition to her academic achievements, she has successfully qualified for the UGC-NET (National Eligibility Test), affirming her expertise and commitment to teaching and research. With a passion for exploring sociological theories and their implications on modern society, Ms. Ghosh brings a dynamic approach to her teaching and mentorship. Her interests encompass a wide range of sociological topics, where she aims to inspire students and foster critical thinking and analytical skills. Her work contributes to a deepened understanding of societal structures, cultural dynamics, and social change. Her research interests include gender and sexuality, cultural studies, and religion. As a dedicated educator, Ms. Ghosh is committed to inspiring her students to critically engage with social issues and contribute meaningfully to the field of sociology.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-5 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Arpan Gautam" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/arpan-gautam.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/arpan-gautam.png" alt="Mr. Arpan Gautam" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Arpan Gautam</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Arpan Gautam" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Arpan Gautam"></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-5" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Arpan Gautam" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/arpan-gautam.png"><noscript><img class="faculty-ing back-img  color-5" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/arpan-gautam.png" alt="Mr. Arpan Gautam" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr. Arpan Gautam currently serves as an Assistant Professor in the Department of Master of Computer Applications (MCA) at Sikkim Manipal University. Mr. Gautam earned his B. Tech in 2020, followed by an M. Tech in Computer Science and Engineering in 2022 from Sikkim Manipal Institute of Technology. His research interests are anchored in machine learning and predictive analytics, demonstrated by his M. Tech major project on Heart Rate Variability Analysis for Epileptic Seizure Prediction, which employed advanced machine learning techniques to explore predictive insights in health analytics. During his B. Tech studies, Mr. Gautam gained experience in a range of projects, notably in wireless sensor networks and Named Data Networking (NDN). He published a research paper titled, A Review on Forwarding Strategies in NDN-based Vehicular Networks in the EMITTER International Journal of Engineering Technology, reflecting his dedication to contributing to scholarly knowledge. Additionally, he completed an internship in Android Application Development with EI Systems in collaboration with IIT BHU. Before fully transitioning into academia, Mr. Gautam accrued industry experience as an IT Engineer at the National Highway and Infrastructure Development Corporation Limited (NHIDCL) in Gangtok. He later began his academic career as a guest lecturer at ICFAI University, Gangtok, and subsequently served as a lecturer at SRM University, Gangtok. Beyond his professional commitments, Mr. Gautam enjoys a diverse range of activities, including watching documentaries and science fiction films, staying active with regular physical workouts, and indulging in novels. He is also deeply interested in expanding his research profile and continuously exploring new horizons in computer science.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-6 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Raju Chettri" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/raju-chettri.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/raju-chettri.png" alt="Mr. Raju Chettri" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Raju Chettri</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Raju Chettri" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Raju Chettri"></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-6" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Raju Chettri" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/raju-chettri.png"><noscript><img class="faculty-ing back-img  color-6" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/raju-chettri.png" alt="Mr. Raju Chettri" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr. Raju Chettri is currently working as an Assistant Professor at Sikkim Manipal University, India and he holds an experience of 13 years in both academics and industry. He has completed his Master of Commerce from IGNOU and Bachelor of Commerce (Honours) from St. Anthony’s College affiliated with North-Eastern Hill University. His research interest includes Behavioral Finance. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-7 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mrs. Suruchi Sharma" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/suruchi-sharma.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/suruchi-sharma.png" alt="Mrs. Suruchi Sharma" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mrs. Suruchi Sharma</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mrs. Suruchi Sharma" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mrs. Suruchi Sharma"></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-7" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mrs. Suruchi Sharma" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/suruchi-sharma.png"><noscript><img class="faculty-ing back-img  color-7" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/suruchi-sharma.png" alt="Mrs. Suruchi Sharma" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mrs. Suruchi Sharma works as an Assistant Professor at Sikkim Manipal University. She has completed her Graduation in Political Science from SSSIHL Andhra Pradesh and consecutively her Master's in International Relations from Sikkim University, Gangtok. She qualified for UGC-NET, WB SET, and CTET in 2023. Her research interest spans women's studies in the field of Geopolitics from an international perspective.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-1 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Ambika Rai" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/ambika-rai.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/ambika-rai.png" alt="Ms. Ambika Rai" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Ambika Rai</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Ambika Rai" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Ambika Rai"></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-1" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Ambika Rai" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/ambika-rai.png"><noscript><img class="faculty-ing back-img  color-1" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/ambika-rai.png" alt="Ms. Ambika Rai" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Ms. Ambika Rai is an Assistant Professor of Sociology at the Centre for Distance and Online Education, Sikkim Manipal Institute of Technology, Majitar, Rangpo, East Sikkim. She is currently pursuing a PhD at the Centre for Himalayan Studies (CHS), University of North Bengal (NBU). Ms. Rai completed her M.Phil. from CHS, NBU, in 2017, and her postgraduate degree in Sociology from the Department of Sociology, NBU, in 2015. She qualified for the UGC-NET in Sociology in 2017 and was awarded the Junior as well as Senior Research Fellowship by the University of North Bengal (State Fellowship).</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-2 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Anshu Chhetri" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/anshu-chhetri.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/anshu-chhetri.png" alt="Ms. Anshu Chhetri" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Anshu Chhetri</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Anshu Chhetri" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Anshu Chhetri"></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-2" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Anshu Chhetri" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/anshu-chhetri.png"><noscript><img class="faculty-ing back-img  color-2" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/anshu-chhetri.png" alt="Ms. Anshu Chhetri" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Anshu Chhetri is currently working as an Assistant Professor at Sikkim Manipal University. She has completed her M. Phil in English Literature from the University of North Bengal. She is UGC NET and WBSET qualified. She is also involved in a project with Zubaan Projects, a project wing of Zubaan Publishers. Besides that, she has written for LiveWire, Sikkim Projects, Plato’s Cave Online, and other creative journals. She was also one of the fifty writers selected by Terribly Tiny Tales in collaboration with Penguin India. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-3 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Mrinalini Subba" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/mrinalini-subba.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/mrinalini-subba.png" alt="Ms. Mrinalini Subba" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Mrinalini Subba</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Mrinalini Subba" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Mrinalini Subba"></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-3" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Mrinalini Subba" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/mrinalini-subba.png"><noscript><img class="faculty-ing back-img  color-3" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/mrinalini-subba.png" alt="Ms. Mrinalini Subba" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mrinalini Subba is currently working as an assistant professor of sociology at Sikkim Manipal University. She is pursuing her PhD at the Centre for Studies in Social Sciences, Calcutta. She completed her M.A. in Sociology at Jadavpur University in 2017 and was awarded with UGC NET- JRF/SRF in Sociology. Her research areas include criminal justice, border studies, gender studies, and migration. She has 5+ years of experience in research, academic writing, and data analysis. She was also a recipient of the ICSSR International Travel Grant in the year 2023. She has published her work in peer-reviewed journals. She has presented her work at several national and international conferences organized by institutes like the University of Hyderabad, University of Cambridge, Virginia Tech, Roxa Luxemburg Stiftung, Dublin City University, Indian Sociological Society, German Academic Exchange Service (DAAD), and so on.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-4 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Usmita Baraily" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/usmita-bareilly.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/usmita-bareilly.png" alt="Ms. Usmita Baraily" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Usmita Baraily</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Usmita Baraily" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Usmita Baraily"></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-4" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Usmita Baraily" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/usmita-bareilly.png"><noscript><img class="faculty-ing back-img  color-4" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/usmita-bareilly.png" alt="Ms. Usmita Baraily" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Ms. Usmita Baraily is a dedicated scholar, with a strong passion for research and intellectual exploration, particularly in the areas of commerce and technology. She is currently pursuing a Ph.D. in Business Management at Sikkim Manipal Institute of Technology, with a research focus on the role of Artificial Intelligence in retail e-commerce and its impact on consumer behavior. She pursued her undergraduate studies at Sri Sathya Sai Institute of Higher Learning, Andhra Pradesh, earning a B. Com (Honors), and subsequently pursued an M. Com degree in Accounting and Finance at Sikkim Manipal University. In 2023, she qualified for the UGC NET (Commerce). Throughout her academic career, she has been actively involved in research and has presented several research papers at national conferences. Some of her works include studies on “The impact of oil shocks on India's macroeconomic performance”; “The role of homestays in promoting rural tourism”; and “A bibliometric review of corporate social responsibility (CSR) in firms”. One of her research papers was also published in the proceedings of a national conference. Her research experience is further enriched by her involvement in a funded project under the TMA Pai University Research Fund, titled “Community Perceptions and Expectations of Corporate Social Responsibility Activities of Select Pharmaceutical Companies in Sikkim”. This project highlights her ability to conduct community-based research and engage with important socio-economic issues. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-5 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Vivek Pandey" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/vivek-pandey.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/vivek-pandey.png" alt="Mr. Vivek Pandey" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Vivek Pandey</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Vivek Pandey" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Vivek Pandey"></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-5" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Vivek Pandey" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/vivek-pandey.png"><noscript><img class="faculty-ing back-img  color-5" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/vivek-pandey.png" alt="Mr. Vivek Pandey" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr. Vivek Pandey works as an Assistant Professor at Sikkim Manipal University. He is pursuing a Ph.D. in Marketing at Sikkim Manipal Institute of Technology, focusing on the impact of online patient support groups on patient empowerment, with a deep enthusiasm for research and intellectual inquiry. He completed his undergraduate (BBA in Human Resources) and postgraduate (MBA in Marketing and Finance) degrees at Lovely Professional University, Punjab. Throughout his academic journey, he has actively researched, presenting numerous papers at national and international conferences and publishing extensively in reputed journals. His notable works include studies such as “Impact of Homophily on Patient Empowerment: A Study of Online Patient Support Groups,” “Content Analysis of Online Patient Support Groups: A Netnographic Approach,” and “Bibliometric Study of Online Patient Support Groups Using PubMed.” Additionally, his research papers have been featured in the proceedings of an international conference.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-6 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mrs. Joyashri Basak" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/joyashri-basak.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/joyashri-basak.png" alt="Mrs. Joyashri Basak" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mrs. Joyashri Basak</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mrs. Joyashri Basak" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mrs. Joyashri Basak"></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-6" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mrs. Joyashri Basak" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/joyashri-basak.png"><noscript><img class="faculty-ing back-img  color-6" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/joyashri-basak.png" alt="Mrs. Joyashri Basak" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mrs. Joyashri Basak works as an Assistant Professor at Sikkim Manipal University. She is a distinguished professional with a rich blend of academic and industry experience in the field of Information Technology. She completed her BTech in Information Technology in 2008 from Maulana Abul Kalam Azad University of Technology (formerly known as WBUT) and pursued her MTech in Computer Science &amp; Engineering from Sikkim Manipal Institute of Technology.
With extensive expertise in web and software development, she has worked with technologies such as .NET, PHP, ASP.NET, VB.NET, SQL, C, C++, and Java across various industries. Her academic contributions include publishing several research papers in the fields of image processing and data analysis.
Mrs. Basak has served as a faculty member in the Department of Computer Science at multiple academic institutions. Her profound knowledge in software analysis and her dedication to the advancement of technology make her an esteemed professional in her field.
</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-7 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Rajdeep Dey" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/rajdeep-dey.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/rajdeep-dey.png" alt="Mr. Rajdeep Dey" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Rajdeep Dey</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Rajdeep Dey" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Rajdeep Dey"></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-7" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Rajdeep Dey" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/rajdeep-dey.png"><noscript><img class="faculty-ing back-img  color-7" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/rajdeep-dey.png" alt="Mr. Rajdeep Dey" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr. Rajdeep Dey is currently working as an Assistant Professor at Sikkim Manipal University. He has over 12 years of industry experience in government and private firms. He is a dynamic and result-oriented HR professional with over 7 years of experience in employee engagement, talent management, and strategic HR initiatives. Rajdeep Dey has completed his MBA (specialization in Human Resources) and B.Tech in Electrical and Electronics Engineering and has a proven track record of developing and implementing HR strategies aligned with business objectives.
</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-1 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Abhimanyu Sharma" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Abhimanyu-Sharma.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Abhimanyu-Sharma.png" alt="Mr. Abhimanyu Sharma" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Abhimanyu Sharma</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Abhimanyu Sharma" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Abhimanyu Sharma"></noscript>Assistant Professor </p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-1" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Abhimanyu Sharma" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Abhimanyu-Sharma.png"><noscript><img class="faculty-ing back-img  color-1" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Abhimanyu-Sharma.png" alt="Mr. Abhimanyu Sharma" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr. Abhimanyu Sharma is currently serving as an Assistant Professor at Sikkim Manipal University, India. He holds a Diploma in Computer Engineering from CCCT Chisopani, and completed both his B.Tech and M.Tech in Computer Science and Engineering from the Sikkim Manipal Institute of Technology (SMIT). He is presently pursuing his Ph.D. in the Department of Information Technology at SMIT. Prior to joining SMU, Mr. Sharma served at SRM University, Sikkim for 3.5 years, where he played a multifaceted role beyond academics. He was actively involved in student affairs and held key responsibilities as the NCC Coordinator, Sports Coordinator, and Placement Coordinator for the School of IT. Additionally, he contributed significantly to curriculum development by designing the syllabus for the BCA and B.Sc. Computer Science programs at SRM. His areas of specialization include the Internet of Things (IoT) and Web Design &amp; Development.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-2 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Ajaykumar N" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/AJAY_Ajaykumar-N.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/AJAY_Ajaykumar-N.png" alt="Mr. Ajaykumar N" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Ajaykumar N</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Ajaykumar N" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Ajaykumar N"></noscript>Assistant Professor </p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-2" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Ajaykumar N" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/AJAY_Ajaykumar-N.png"><noscript><img class="faculty-ing back-img  color-2" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/AJAY_Ajaykumar-N.png" alt="Mr. Ajaykumar N" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr. Ajaykumar N is currently serving as an Assistant Professor at Sikkim Manipal University, India. He holds a B.A. from the Central University of Karnataka, and has completed both his M.A. and M.Phil. from Sikkim University. He is presently pursuing his Ph.D. at Sikkim University. His academic interests lie in the fields of Cultural Studies and Film Studies, with a focus on exploring the intersections of culture, media, and society. Before joining SMU, Mr. Ajaykumar served as a Guest Faculty at Government Arts and Science College, Chelakkara, and Mar Dionysius College, Pazhanji. During his tenure, he taught both undergraduate and postgraduate students, actively engaged in academic discussions, and contributed meaningfully to various institutional activities.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-3 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Urgen Mangar" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/urgen-manger.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/urgen-manger.png" alt="Dr. Urgen Mangar" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Dr. Urgen Mangar</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Dr. Urgen Mangar" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Dr. Urgen Mangar"></noscript>Assistant Professor </p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-3" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Urgen Mangar" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/urgen-manger.png"><noscript><img class="faculty-ing back-img  color-3" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/urgen-manger.png" alt="Dr. Urgen Mangar" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Dr. Urgen Mangar is currently serving as an Assistant Professor at Sikkim Manipal University, India. He holds both an MBA and a Ph.D. from the Department of Management and Commerce at Shri Ramasamy Memorial (SRM) University, Sikkim. His primary research interests are in the areas of Consumer Behaviour and Tourism Management. Dr. Mangar has actively contributed to academia through his participation in numerous workshops, and has published research articles in reputed journals. He has also presented his work at various national and international seminars and conferences.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-4 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Wangden Lama" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/IMAGE-1.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/IMAGE-1.png" alt="Mr. Wangden Lama" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Wangden Lama</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Wangden Lama" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Wangden Lama"></noscript>Adjunct Faculty</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-4" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Wangden Lama" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/IMAGE-1.png"><noscript><img class="faculty-ing back-img  color-4" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/IMAGE-1.png" alt="Mr. Wangden Lama" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr. Wangden Lama is currently serving as an Adjunct Faculty at the Centre for Distance and Online Education (CDOE), Sikkim Manipal University, India. He completed his Master’s degree in Sociology from the University of Calcutta in 2023. In the same year, he successfully qualified both the West Bengal State Eligibility Test (WB SET) and the UGC-NET for Assistant Professor. In 2024, he was also awarded the prestigious Junior Research Fellowship (JRF) through UGC-NET. Mr. Lama has actively participated in the academic community by presenting research papers at various national and international seminars, showcasing his commitment to research and scholarly engagement in the field of Sociology</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-5 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Sraddha Khawas" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Sraddha-Khawas.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Sraddha-Khawas.png" alt="Ms. Sraddha Khawas" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Sraddha Khawas</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Sraddha Khawas" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Sraddha Khawas"></noscript>Adjunct Faculty</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-5" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Sraddha Khawas" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Sraddha-Khawas.png"><noscript><img class="faculty-ing back-img  color-5" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Sraddha-Khawas.png" alt="Ms. Sraddha Khawas" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Ms. Sraddha Khawas is currently serving as an Adjunct Faculty at Centre for Distance and Online Education (CDOE), Sikkim Manipal University, India. She completed her Master’s degree in Sociology from the University of Calcutta in 2023 and is dedicated to advancing her academic career, with plans to pursue a Ph.D. in the near future. She successfully qualified the UGC-NET in 2024 and the West Bengal State Eligibility Test (WB SET) in 2025. As a passionate educator, she is a strong advocate of inclusive education, believing in equal access and opportunities for all learners. Her academic interests include the Sociology of Media and Culture and the Sociology of Ageing, reflecting her commitment to exploring the evolving dynamics of society through diverse and critical lenses.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-6 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Md Ruhul Islam" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Ruhul-Islam.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Ruhul-Islam.png" alt="Dr. Md Ruhul Islam" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Dr. Md Ruhul Islam</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Dr. Md Ruhul Islam" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Dr. Md Ruhul Islam"></noscript>Adjunct Faculty</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-6" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Md Ruhul Islam" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Ruhul-Islam.png"><noscript><img class="faculty-ing back-img  color-6" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Ruhul-Islam.png" alt="Dr. Md Ruhul Islam" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Dr. Md. Ruhul Islam is currently serving as an Adjunct Faculty at the Centre for Distance and Online Education (CDOE), Sikkim Manipal University (SMU). He brings with him a wealth of academic and industry experience across various roles in the field of Information Technology and Computer Science. He previously served as an IT Consultant (Band A) at Cloud Shine Global LLP, Guwahati, Assam, and worked as a Quality Assurance Lead at Radiant Medical System. He also held the position of Senior Software Developer-I at Covalense Digital. In academia, Dr. Islam served as an Associate Professor in the Department of Computer Science &amp; Engineering at the Sikkim Manipal Institute of Technology (SMIT). Additionally, he contributed as a Technical Advisor for Untapd, a startup incubated under AIC-SMUTBI. He holds a B.E. in Computer Science and Engineering from VTU, Belgaum, an M.Tech in Information Technology from SMIT, and earned his Ph.D. in Computer Science and Engineering from Sharda University (SNU), India. Dr. Islam has published over forty research papers in reputed international journals and has presented at numerous national and international conferences. His primary research interests include Cloud Computing, Wireless Networks, 4G Security, Mobile Ad Hoc Networking, and Pattern Recognition.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-7 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Pemsang Dolmo Rumba" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Pemsang-Dolmo-Rumba.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Pemsang-Dolmo-Rumba.png" alt="Mr. Pemsang Dolmo Rumba" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Pemsang Dolmo Rumba</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Pemsang Dolmo Rumba" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Pemsang Dolmo Rumba"></noscript>Adjunct Faculty</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-7" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Pemsang Dolmo Rumba" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Pemsang-Dolmo-Rumba.png"><noscript><img class="faculty-ing back-img  color-7" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Pemsang-Dolmo-Rumba.png" alt="Mr. Pemsang Dolmo Rumba" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Ms. Pemsang Dolmo Rumba is currently serving as an Adjunct Faculty at the Centre for Distance and Online Education (CDOE), Sikkim Manipal University, India. Prior to this, she was associated with Southfield College, Darjeeling. She is passionate about creating an engaging and inclusive learning environment, mentoring students, and actively contributing to academic research. Her areas of expertise include Thinkers of Sociology and Social Development, where she continues to explore critical perspectives and contemporary issues within the discipline.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-1 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Leeyoungmit Lepcha" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Leeyoungmit-Lepcha.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Leeyoungmit-Lepcha.png" alt="Ms. Leeyoungmit Lepcha" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Leeyoungmit Lepcha</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Leeyoungmit Lepcha" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Leeyoungmit Lepcha"></noscript>Adjunct Faculty </p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-1" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Leeyoungmit Lepcha" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Leeyoungmit-Lepcha.png"><noscript><img class="faculty-ing back-img  color-1" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Leeyoungmit-Lepcha.png" alt="Ms. Leeyoungmit Lepcha" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Ms. Leeyoungmit Lepcha is currently serving as an Adjunct Faculty at the Centre for Distance and Online Education (CDOE), Sikkim Manipal University, India. She completed her Bachelor’s degree from Nar Bahadur Bhandari Degree College, and earned her Master’s in Sociology from Sikkim University. She successfully qualified the UGC-NET in Sociology. Her academic interests lie in the areas of development, migration, inclusivity, tribal studies, gender, and territorial studies. She is deeply committed to exploring these themes through a critical and intersectional lens, with a focus on promoting inclusive education and research.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-2 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Heeral Mehta" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Heeral-Mehta.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Heeral-Mehta.png" alt="Ms. Heeral Mehta" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Heeral Mehta</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Heeral Mehta" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Heeral Mehta"></noscript>Adjunct Faculty</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-2" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Heeral Mehta" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Heeral-Mehta.png"><noscript><img class="faculty-ing back-img  color-2" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Heeral-Mehta.png" alt="Ms. Heeral Mehta" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Ms. Heeral Mehta is currently serving as an Adjunct Faculty at the Centre for Distance and Online Education (CDOE), Sikkim Manipal University, India. She holds a Bachelor of Arts (B.A.) from Banasthali University, and an MBA from Mody Institute, Sikar, Rajasthan (2012). Additionally, she has completed a Master’s in English (M.A.) and a Bachelor of Education (B.Ed.). She successfully qualified the Central Teacher Eligibility Test (CTET), underscoring her proficiency and dedication to the field of education. Ms. Mehta brings a diverse academic background and a passion for teaching to her role, with a strong focus on learner engagement and academic excellence.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-3 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Aaloklina Chakraborti" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Aloklina-Chakraborty.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Aloklina-Chakraborty.png" alt="Ms. Aaloklina Chakraborti" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Aaloklina Chakraborti</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Aaloklina Chakraborti" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Aaloklina Chakraborti"></noscript>Adjunct Faculty</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-3" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Aaloklina Chakraborti" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Aloklina-Chakraborty.png"><noscript><img class="faculty-ing back-img  color-3" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Aloklina-Chakraborty.png" alt="Ms. Aaloklina Chakraborti" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Ms. Aaloklina Chakraborti is currently serving as an Adjunct Faculty at the Centre for Distance and Online Education (CDOE), Sikkim Manipal University, India. She completed her B.A. from Maulana Azad College, under Calcutta University, in 2019, and earned her M.A. in Sociology from Pondicherry University in 2021. She successfully qualified the National Eligibility Test (UGC-NET) in Sociology. Her academic interests include Gender Studies, Queer Studies, Culture, and Social Movements. With a strong passion for critical inquiry and social change, she aspires to build a meaningful career in teaching and research.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-4 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Anil Pradhan" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Anil-Pradhan.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Anil-Pradhan.png" alt="Mr. Anil Pradhan" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Anil Pradhan</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Anil Pradhan" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Anil Pradhan"></noscript>Adjunct Faculty</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-4" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Anil Pradhan" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Anil-Pradhan.png"><noscript><img class="faculty-ing back-img  color-4" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Anil-Pradhan.png" alt="Mr. Anil Pradhan" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr. Anil Pradhan is currently working as Adjunct Faculty at Centre for Distance and Online Education (CDOE), Sikkim Manipal University, India. He also holds the position of Guest Lecturer at the Department of English (Postgraduate Section), Basanti Devi College, Kolkata. He is pursuing PhD and former UGC Senior Research Fellow at the Department of English, Jadavpur University, Kolkata, he also holds MPhil and MA in English from Jadavpur University, and a BA in English from Presidency University, Kolkata. His research interests lie primarily in queer literatures and cultures, with a particular focus on India and its diaspora. His scholarly writings have appeared in reputed journals such as Young, Rupkatha, SCL/ÉLC, Runas, CINEJ, HyperCultura, and JCLA, among others. He has contributed chapters and entries to several significant academic volumes, including The Queer and the Vernacular Languages in India (Routledge, 2023), The Routledge Encyclopedia of Indian Writing in English (2023), Literature and the War on Terror (Routledge, 2023), and Queering Nutrition and Dietetics (Routledge, 2022). In addition to his academic pursuits, Mr. Pradhan is also a published poet. His collection of poems, flitting oddments (2020), was brought out by Writers Workshop, Kolkata.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-5 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Moazzam Ali" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Moazzam-Ali-1.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Moazzam-Ali-1.png" alt="Dr. Moazzam Ali" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Dr. Moazzam Ali</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Dr. Moazzam Ali" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Dr. Moazzam Ali"></noscript>Adjunct Faculty</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-5" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Moazzam Ali" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Moazzam-Ali-1.png"><noscript><img class="faculty-ing back-img  color-5" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Moazzam-Ali-1.png" alt="Dr. Moazzam Ali" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Dr. Moazzam Ali is currently working as Adjunct Faculty at Centre for Distance and Online Education (CDOE), Sikkim Manipal University, India. His research interest lies in the field of surfactant aggregation and drug-surfactant interaction. The primary focus is on synthesizing environmentally friendly amino acid-based surfactants and studying their physicochemical properties, particularly in interaction with beta-blockers and phenothiazine drugs using techniques such as surface tension measurements, spectroscopy (UV, FTIR), voltammetry, and DFT analysis to explore mixed micelle formation and molecular interactions.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-6 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Pema Tenzing Bhutia" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Pema-Tenzing-Bhutia.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Pema-Tenzing-Bhutia.png" alt="Mr. Pema Tenzing Bhutia" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Mr. Pema Tenzing Bhutia</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Mr. Pema Tenzing Bhutia" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Mr. Pema Tenzing Bhutia"></noscript>Adjunct Faculty</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-6" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Mr. Pema Tenzing Bhutia" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Pema-Tenzing-Bhutia.png"><noscript><img class="faculty-ing back-img  color-6" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Pema-Tenzing-Bhutia.png" alt="Mr. Pema Tenzing Bhutia" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr. Pema Tenzing Bhutia is currently working as an Adjunct Faculty at Centre for Distance and Online Education (CDOE), Sikkim Manipal University, India. A dedicated academician and project management professional with over 7 years of experience in higher education and one year in consultancy, specializing in finance, marketing, and institutional development. He previously served as Assistant Professor and Head of Department at Sikkim Alpine University and also served Sikkim Manipal University for 5 years, contributing to curriculum development and academic leadership. Additionally, he worked as an Assistant Manager at SIBIN Consultancy, where he played a key role in educational infrastructure projects, including setting up a major college under the RUSA fund and managing online admissions for government institutions.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-7 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Ramesh Sharma" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Ramesh-Sharma.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Ramesh-Sharma.png" alt="Dr. Ramesh Sharma" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Dr. Ramesh Sharma</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Dr. Ramesh Sharma" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Dr. Ramesh Sharma"></noscript>Adjunct Faculty</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-7" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Dr. Ramesh Sharma" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Ramesh-Sharma.png"><noscript><img class="faculty-ing back-img  color-7" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Ramesh-Sharma.png" alt="Dr. Ramesh Sharma" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Dr. Ramesh Sharma is currently working as an Adjunct Faculty at Centre for Distance and Online Education (CDOE), Sikkim Manipal University, India. He also holds the position of Associate Professor in the Department of Chemistry at Sikkim Manipal Institute of Technology (SMIT). With over 20 years of academic and research experience, Dr. Sharma brings a wealth of expertise to his roles. His areas of specialization include Inorganic Chemistry and Polyelectrolytes, with a strong focus on both teaching and research in these domains.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-1 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Salwa Lachungpa" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Salwa-Lachungpa.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Salwa-Lachungpa.png" alt="Ms. Salwa Lachungpa" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Salwa Lachungpa</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Salwa Lachungpa" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Salwa Lachungpa"></noscript>Adjunct Faculty</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-1" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Salwa Lachungpa" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Salwa-Lachungpa.png"><noscript><img class="faculty-ing back-img  color-1" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Salwa-Lachungpa.png" alt="Ms. Salwa Lachungpa" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Ms. Salwa Lachungpa is currently working as an Adjunct Faculty at Centre for Distance and Online Education (CDOE), Sikkim Manipal University, India. She is an articulate and confident educator who thrives on challenges and excels under pressure. Passionate about teaching and committed to academic excellence, Ms. Lachungpa is dedicated to fostering a positive and inclusive learning environment. She actively promotes student engagement through innovative and learner-centric teaching methods. Her core strengths include effective communication, problem-solving, team collaboration, and adaptability.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-2 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Uttam Kumar Upadhyaya" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Uttam-Kumar-Upadhyaya.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Uttam-Kumar-Upadhyaya.png" alt="Uttam Kumar Upadhyaya" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Uttam Kumar Upadhyaya</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Uttam Kumar Upadhyaya" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Uttam Kumar Upadhyaya"></noscript>Adjunct Faculty</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-2" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Uttam Kumar Upadhyaya" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Uttam-Kumar-Upadhyaya.png"><noscript><img class="faculty-ing back-img  color-2" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Uttam-Kumar-Upadhyaya.png" alt="Uttam Kumar Upadhyaya" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Mr. Uttam Kumar Upadhyaya is currently working as an Adjunct Faculty at Centre for Distance and Online Education (CDOE), Sikkim Manipal University, India. He is an enthusiastic and dedicated Assistant Professor in English with a passion for literature, linguistics, and pedagogy. With a master’s degree in English literature, he has cultivated a deep understanding of both classical and contemporary literary works. His academic interests include postcolonial literature, modernism, ethnicity and cultural studies. Having taught a wide array of undergraduate and postgraduate courses, he strives to create an interactive and inclusive classroom environment that encourages open discussions, critical analysis, and the development of writing skills. He also integrates modern pedagogical tools and technologies to enhance learning outcomes and engage students in innovative ways.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-3 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Sushmita Prasad" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Sushmita_Sushmita-Prasad.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Sushmita_Sushmita-Prasad.png" alt="Ms. Sushmita Prasad" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Sushmita Prasad</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Sushmita Prasad" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Sushmita Prasad"></noscript>Assistant Professor </p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-3" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Sushmita Prasad" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Sushmita_Sushmita-Prasad.png"><noscript><img class="faculty-ing back-img  color-3" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Sushmita_Sushmita-Prasad.png" alt="Ms. Sushmita Prasad" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Ms. Sushmita Prasad is currently serving as an Assistant Professor at Sikkim Manipal University, India. She holds a Bachelor of Commerce degree from North Bengal University and an MBA from the Sikkim Manipal Institute of Technology. She is presently pursuing her Ph.D. in the Department of Management Studies at Sikkim Manipal University. Ms. Prasad brings over eight years of blended experience across academia, research, industry, and startup incubation. Her expertise includes student and startup mentoring, organising academic conferences, and contributing to scholarly publications. She is proficient in quantitative research, financial modelling, and data analysis, with practical experience in tools such as SPSS, Stata, and Microsoft Office. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-4 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Samikcha Rai " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Samikcha-Rai.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Samikcha-Rai.png" alt="Ms. Samikcha Rai " width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Samikcha Rai </span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Samikcha Rai " data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Samikcha Rai "></noscript>Adjunct Faculty </p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-4" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Samikcha Rai " width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Samikcha-Rai.png"><noscript><img class="faculty-ing back-img  color-4" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Samikcha-Rai.png" alt="Ms. Samikcha Rai " width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Ms. Samikcha Rai is currently serving as an Adjunct Faculty at Centre for Distance and Online Education, Sikkim Manipal University. She has completed her undergraduate studies at St. Joseph's College, Darjeeling, and obtained a master’s degree in International Relations from Sikkim University, Gangtok. She also holds a Bachelor of Education (B.Ed) from Loyola College of Education, Namchi, and is currently pursuing a second master’s degree in Education from Indira Gandhi National Open University (IGNOU). Her research interests includes International Relations, Women and Environment, and Gender Politics. </span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-5 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Tenzin Nyima Bhutia" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Tenzin.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Tenzin.png" alt="Ms. Tenzin Nyima Bhutia" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Tenzin Nyima Bhutia</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Tenzin Nyima Bhutia" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Tenzin Nyima Bhutia"></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-5" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Tenzin Nyima Bhutia" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Tenzin.png"><noscript><img class="faculty-ing back-img  color-5" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Tenzin.png" alt="Ms. Tenzin Nyima Bhutia" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Tenzin Nyima Bhutia is an Assistant Professor at Centre for Distance and Online Education,  Sikkim Manipal University and a Ph.D. scholar at Sikkim University, where her research focuses on folk beliefs and iconography within Tibetan Buddhist traditions in Sikkim. She is also pursuing a diploma in Applied Buddhist Iconography from Nalanda University. Tenzin holds a BA, MA, and M.Phil from Jadavpur University, Kolkata, and has qualified the UGC NET in English. Her academic interests include folklore, oral narratives, Buddhist iconography, translation studies, and indigenous knowledge systems. With over five years of research experience, she has contributed as a book reviewer for international organizations, translated Bhutia folklores, and published her work in peer-reviewed journals and CARE Group I listed publications. She actively participates in national and international conferences and workshops, and is dedicated to preserving the cultural heritage of India’s Eastern Himalayan region by revitalizing indigenous knowledge and oral traditions.</span>
              </div>
            </div>
                  </div>
      </div>
                      <div class="faculty-slider">
        <div class="faculty-wrapper">
          <div class="faculty-details front color-6 faculty-first-block">
            <img class="faculty-ing" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Samu Kharel" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Image-2.png"><noscript><img class="faculty-ing" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Image-2.png" alt="Ms. Samu Kharel" width="294" height="486"></noscript>
                        <div class="faculty-desc">
              <span class="faculty-name">Ms. Samu Kharel</span>
              <p class="faculty-designation"></p>
              <p class="faculty-experience"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2014%2014'%3E%3C/svg%3E" width="14" height="14" alt="Ms. Samu Kharel" data-lazy-src="/wp-content/themes/flamingo/assets/images/icons/start-1.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/icons/start-1.png" width="14" height="14" alt="Ms. Samu Kharel"></noscript>Assistant Professor</p>
            </div>
          </div>
                      <div class="faculty-details back">
              <img class="faculty-ing back-img  color-6" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20294%20486'%3E%3C/svg%3E" alt="Ms. Samu Kharel" width="294" height="486" data-lazy-src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Image-2.png"><noscript><img class="faculty-ing back-img  color-6" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/Image-2.png" alt="Ms. Samu Kharel" width="294" height="486"></noscript>
              <div class="faculty-desc">
                <span>Ms. Samu Kharel is an Assistant Professor at Centre for Distance and Online Education, Sikkim Manipal University and a dedicated research scholar currently pursuing her Ph.D. Her research explores volatility in the Indian stock market, with a focus on market sentiment, behavioral finance, geopolitical risks, economic policy uncertainty, and broader macroeconomic indicators. A gold medalist in MBA (Finance and Marketing) from Sikkim Manipal University, she also holds a Bachelor's degree in Business Administration from St. Joseph’s College, Darjeeling. Her diverse professional background includes experience as an accountant, providing a strong practical foundation in finance, and as a radio journalist, enhancing her ability to communicate complex concepts with clarity. Ms. Kharel is actively engaged in curriculum development, academic research, and student mentoring, and is committed to fostering an innovative and learner-centric academic environment.</span>
              </div>
            </div>
                  </div>
      </div>
        </div>    </section>
    
  
  
  <section data-wpr-lazyrender="1" class="explore-other-manipal-institutions section-mb">
    <div class="container">
  <h2 class="section-title">Explore other Manipal institutions</h2>
  <div class="universities-details" id="university" data-args="SMU">
    <div class="mahe-card institution-card">
      <div class="badge">
        <p>Ranks 4th <span>amongst all universities</span></p>
      </div>
      <div class="box-wrap">
        <svg width="744" height="298" class="doodle" viewBox="0 0 744 298" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M696 304C676.5 182.667 473 -7 317.5 60.5C216.988 104.131 238.5 206 153 206C44.3434 206 13 38.5 -21 -61" stroke="#94CFFF" stroke-width="96" />
        </svg>
        <a href="/institution/mahe">
          <div class="uni-card">
            <div class="smu-text section-title">
              Manipal Academy of <span>Higher Education</span>
            </div>
            <div class="smu-img uni-img">
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20783%20583'%3E%3C/svg%3E" alt="MAHE" width="783" height="583" data-lazy-src="/wp-content/themes/flamingo/assets/images/institution/mahe-university.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/institution/mahe-university.png" alt="MAHE" width="783" height="583"></noscript>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="smu-card institution-card">
      <div class="box-wrap">
        <svg width="848" height="299" class="doodle" viewBox="0 0 848 299" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M853 173.47C748.02 222.452 514.5 418.5 416 128.5C296.427 -223.543 463.822 -270 540 -62.0002C597.5 94.9998 391.183 207.889 260 203C155.053 199.089 36.2194 73.7554 -1.5 -19.5002" stroke="#A3F9F8" stroke-width="96" />
        </svg>
        <a href="/institution/smu">
          <div class="uni-card">
            <div class="smu-text section-title">
              Sikkim Manipal <span>University</span>
            </div>
            <div class="smu-img uni-img">
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20783%20583'%3E%3C/svg%3E" alt="SMU" width="783" height="583" data-lazy-src="/wp-content/themes/flamingo/assets/images/institution/smu-university.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/institution/smu-university.png" alt="SMU" width="783" height="583"></noscript>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="muj-card institution-card">
      <div class="box-wrap">
        <svg width="772" height="298" class="doodle" viewBox="0 0 772 298" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M726.203 403.279C615.014 75.4392 570.079 7.72825 508.804 23.7777C447.529 39.8271 476.608 151.859 499.092 239.212C516.753 307.825 454.191 347.048 366.391 269.613C234.09 152.931 161.257 -31.6367 217.653 -59.8972C343.58 -123 396.51 259.403 296.721 287.14C143.039 329.857 -28.1081 33.4212 -137.623 -300" stroke="#C2B5FF" stroke-width="96" />
        </svg>
        <a href="/institution/muj">
          <div class="uni-card">
            <div class="smu-text section-title">
              Manipal University <span>Jaipur</span>
            </div>
            <div class="smu-img uni-img">
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20783%20583'%3E%3C/svg%3E" alt="MUJ" width="783" height="583" data-lazy-src="/wp-content/themes/flamingo/assets/images/institution/muj.png"><noscript><img src="/wp-content/themes/flamingo/assets/images/institution/muj.png" alt="MUJ" width="783" height="583"></noscript>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>  </section>

</main>

<!------ Popup Lead Form ------>
<div  id="overlay" class="overlay"></div>
<div  id="leadForm_popup" class="popup hidden">
  <button id="closePopup" class="close-btn"></button>
  <div  class="formBlock">
  <form class="enroll-now-form" id="leadForm" action="" method="POST">
    <div class="form-details-block">
      <h5>Take the Next Step Toward Achieving Your Academic And Career Goals. </h5>
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
              <option value="MCA">Master of Computer Applications</option>
              <option value="BA">Bachelor of Arts</option>
              <option value="B.Com">Bachelor of Commerce</option>
              <option value="M.Com">Master of Commerce</option>
              <option value="MA in English">MA in English</option>
              <option value="MA in Sociology">MA in Sociology</option>
              <option value="MA in Political Science">MA in Political Science</option>
                      </select>
          <span class="error" id="course_nameError"></span>
        </div>
        <div class="form-group terms-condition">
          <input type="checkbox" checked="" id="javascript2"><label for="javascript2">I authorize Online Manipal and its associates to contact me with updates notifications via email, SMS, WhatsApp, and voice call. This consent will override any registration for DNC / NDNC.</label>
        </div>
        <div  class="hidden">
          <input value="SMU" type="hidden" name="institution">
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
          <input value="https://www.onlinemanipal.com/institution/smu" type="hidden" name="leadsquared-Website">
          <input value="49.204.68.222" type="hidden" name="leadsquared-mx_Website_IP_Address">
          <input value="https://www.onlinemanipal.com/master-of-arts-english" type="hidden" name="referer_url">
          <input value="" type="hidden" name="otp_token">
          <input value="" type="hidden" name="sub_token">
          <input value="" type="hidden" name="leadsquared-mx_Location">
          <input value="" type="hidden" name="userCountry">
          <input value="" type="hidden" name="leadsquared-mx_mobile">
          <input value="Institution Enroll Form" type="hidden" name="LeadFormName">
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

<!----- Download Form ------>
<div  id="downloadForm_popup" class="popup hidden">
  <button id="closePopup" class="close-btn"></button>
  <div  class="formBlock downloadForm">
  <form class="enroll-now-form" id="downloadForm" action="" method="POST">
    <div class="form-details-block">
      <h5>Please share your details to download the brochure</h5>
      <div class="messageBlock">
        <div id="successMessage" class="alert alert-success hidden"></div>
        <div id="errorMessage" class="alert alert-danger hidden"></div>
      </div>
      <div class="fields">
        <div class="field-list">
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
        </div>
        <div class="hidden">
          <input type="hidden" name="course_name" value="MBA">
          <input type="hidden" name="institution" value="SMU">
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
          <input value="https://www.onlinemanipal.com/institution/smu" type="hidden" name="leadsquared-Website">
          <input value="49.204.68.222" type="hidden" name="leadsquared-mx_Website_IP_Address">
          <input value="https://www.onlinemanipal.com/master-of-arts-english" type="hidden" name="referer_url">
          <input value="" type="hidden" name="otp_token">
          <input value="" type="hidden" name="sub_token">
          <input value="" type="hidden" name="leadsquared-mx_Location">
          <input value="" type="hidden" name="userCountry">
          <input value="" type="hidden" name="leadsquared-mx_mobile">
          <input value="Download Enroll Form" type="hidden" name="LeadFormName">
          <input value="" type="hidden" name="honeypot">
        </div>
      </div>
      <div class="form-group terms-condition">
        <input type="checkbox" checked="" id="javascript2"><label for="javascript2">I authorize Online Manipal and its associates to contact me with updates notifications via email, SMS, WhatsApp, and voice call. This consent will override any registration for DNC / NDNC.</label>
      </div>
      <div class="form-group">
        <button class="lead-submit" type="submit">Download Now</button>
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
      <div class="form-group">
        <button class="lsq-submit" type="submit">Verify</button>
      </div>
    </div>
  </form>
</div></div>

<!---- Mobile bottom widget ----->
<footer data-wpr-lazyrender="1" class="">
  <div  class="footer-container">
    <div  class="footer-get-in-touch container">
              
  <div class="get-in-touch doodle-section footerv2">
    <svg class="doodle" xmlns="http://www.w3.org/2000/svg" width="1920" height="832" viewBox="0 0 1920 832" fill="none">
      <path d="M-668 152C-639.667 417.167 -288.1 487.78 839.5 -42.6199C2249 -705.62 86.5 655 798.5 703.5C930.267 712.476 1025.5 691.995 1147.5 648.5M1147.5 648.5C1779 601.683 2062.04 -114.691 1608.5 13C1089.5 159.12 1032.5 760.683 1147.5 648.5ZM1147.5 648.5C1368.5 836.021 1885.8 936.98 2289 -42.6199" stroke="#E8E8B7" stroke-width="120" />
    </svg>
          <div class="left">
        <h2 class="question-text section-title">Take the next step in your <span>educational journey</span></h2>
                  <p class="description">Explore courses tailored to your ambitions and interests!</p>
                <a href="/all-courses" class="primaryBtn">View All Courses</a>      </div>
        <div class="right">
      <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Explore courses" fetchpriority="low" decoding="async" data-lazy-src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/footer/footer-boy.webp"><noscript><img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/footer/footer-boy.webp" alt="Explore courses" loading="lazy" fetchpriority="low" decoding="async"></noscript>
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
                              <div class="company ">
                  <div class="title-text">Quick Links</div>
                  <div class="resources-wrapper course-detail expand-data-4">
                                          <a href="https://smu.onlinemanipal.com/mandatory-disclosure/" target="_blank">Mandatory Disclosure</a>
                      <a href="https://smu.onlinemanipal.com/privacy-policy" target="_blank">Privacy Policy</a>
                      <a href="https://smu.onlinemanipal.com/terms-conditions" target="_blank">Terms &amp; Conditions</a>
                      <a href="https://smu.onlinemanipal.com/refund-policy" target="_blank">Refund Policy</a>
                      <a class="campuslink" href="https://smu.edu.in/smu.html" target="_blank">Campus programs</a>
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
  <div  class="contact-details container">
    <div  class="copy-right-text">© 2025 Online Manipal. ALL RIGHTS RESERVED.</div>
  </div>
  </div>
</footer>
<div  class="floating-Widget">
        <span class="call-block call-btn" data-att='tel:+917996799900'>
      <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/grey-call-icon.png" width="24" height="24" alt="Call">
      <div class="call-no-strip">
        <div class="triangle-arrow"></div>
        <div class="phone-no"></div>
      </div>
    </span>
  <div  class="whatsup-block">
  <a class="whatsapp-btn" href="https://wa.me/917996799900?text=I am looking for online degrees from SMU" target="_blank">
    <span>Chat</span>
    <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/whatsup-icon.png" width="24" height="24" alt="Whatsup">
  </a>
</div></div>

<!----- Search filter popup ----->
<div  id="searchFilter_popup" class="popup hidden search-filter">
  <div  class="search-bar">
      <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/search.svg" width="70" alt="search">
    <button id="closePopup" class="close-btn filter-close-btn"></button>
  <input type="text" placeholder="Search here" class="search-input" id="header-search" />
</div>
<div  class="search-container">
  <div  class="search-wrapper">
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
  <span class="source-ip-address">49.204.68.222</span>
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
<noscript><img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=374798657217929&ev=PageView&noscript=1&cd%5Bpage_title%5D=Sikkim+Manipal+University&cd%5Bpost_type%5D=page&cd%5Bpost_id%5D=678794&cd%5Bplugin%5D=PixelYourSite&cd%5Buser_role%5D=guest&cd%5Bevent_url%5D=www.onlinemanipal.com%2Finstitution%2Fsmu" alt=""></noscript>
<script id="rocket-browser-checker-js-after">
"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
</script>
<script id="rocket-preload-links-js-extra">
var RocketPreloadLinksConfig = {"excludeUris":"\/payment-verification|\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/","usesTrailingSlash":"","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm","siteUrl":"https:\/\/www.onlinemanipal.com","onHoverDelay":"100","rateThrottle":"3"};
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
<script data-minify="1" type='text/javascript' src="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/js/institution.js?ver=1753685618" data-rocket-defer defer></script>
<script type='text/javascript' src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/js/swiper-bundle.min.js" data-rocket-defer defer></script>
<script data-minify="1" type='text/javascript' src="https://www.onlinemanipal.com/wp-content/cache/min/1/wp-content/themes/flamingo/assets/js/campus-immersions.js?ver=1753685604" data-rocket-defer defer></script>

<!------ Hideen Fields ----->
<div class="hidden">
  <span class="download-url">https://www.onlinemanipal.com/wp-content/uploads/2024/06/SMU-Combined-Domestic-Brochure.pdf</span>
</div>
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me -->