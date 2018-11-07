(function(f,g){"undefined"!==typeof module&&module.exports?module.exports=g():"function"===typeof define&&define.amd?define(g):f.Placeholder=g.call(f)})(this,function(){function f(a,b){return a.currentStyle?a.currentStyle[b]:l.getComputedStyle(a,null)[b]}function g(a,b,d){"undefined"===typeof d&&(d=!0);for(var c in b)if("Object"===Object.prototype.toString.call(b[c]))g(a,b[c]);else if(!a[c]||d)a[c]=b[c];return a}var l=window,m=new Abstract({setPlaceholder:function(){},show:function(){},hide:function(){},
initPage:function(){},onchange:function(){}}),h=new Clazz(m,{config:{carrier:null,control:{unifieddisplay:!1,emMethod:"focus"},style:{color:"#BBB"}},inherit:Component},function(a){this.setConfig(a);this._.support="placeholder"in document.createElement("input");this._.placeholder=null;return this.__init()});h.initPage=function(a){var b=[],d;if(document.querySelectorAll){var c=document.querySelectorAll("input[placeholder]");var e=0;for(d=c.length;e<d;e++)b.push(c[e]);c=document.querySelectorAll("textarea[placeholder]");
e=0;for(d=c.length;e<d;e++)b.push(c[e])}else{c=document.getElementsByTagName("input");e=0;for(d=c.length;e<d;e++)c[e].placeholder&&b.push(c[e]);c=document.getElementsByTagName("textarea");e=0;for(d=c.length;e<d;e++)c[e].placeholder&&b.push(c[e])}if(b.length)return new h(g({carrier:b},a,!1))};h.extend({__init:function(){var a=this.config.carrier;if("[object Array]"===Object.prototype.toString.call(a)){var b=[],d,c;var e=0;for(d=a.length;e<d;e++)(c=a[e])&&1===c.nodeType&&b.push(new h(g({carrier:c},
this.config,!1)));return b}try{if(!a)throw"Placeholder init error:carrier must not be null.";if(!a.placeholder&&!a.getAttributeNode("placeholder").nodeValue)throw"element not has placeholder attribute.";}catch(p){p&&l.console&&l.console.log(p)}this._reRenderColor();this.elems.carrier=a;this._.placeholder=a.placeholder||a.getAttributeNode("placeholder").nodeValue;this._.name=a.name||"";this._.id="p_"+(new Date).getTime();this.config.control.unifieddisplay&&(a.removeAttribute("placeholder"),this._.support=
!1);this._.support||(a.id?this._.id=a.id:a.id=this._.id,this.elems.label=this._createLabel(a),""===a.value&&(this.elems.label.innerHTML=this._.placeholder),a.parentNode.insertBefore(this.elems.label,a),this.__events())},_createLabel:function(a){var b=document.createElement("label"),d=f(a,"padding"),c=f(a,"margin"),e=f(a,"fontSize"),g=this.__formatNumber(f(a,"paddingLeft")),h=this.__formatNumber(f(a,"paddingRight")),l=this.__formatNumber(f(a,"borderTopWidth")),m=this.__formatNumber(f(a,"borderLeftWidth")),
q=this.__formatNumber(f(a,"marginTop"));b.htmlFor=this._.id;c||(c=getComputedStyle(a,null).marginTop+" 0");d||(d=f(a,"paddingTop")+" "+h+"px "+f(a,"paddingBottom")+" "+g+"px");if(this.config.style){var n="";for(k in this.config.style)n+=k+":"+this.config.style[k]+";";if("input"===a.nodeName.toLowerCase()){var k=f(a,"width");if("auto"===k||"100%"===k)k=a.offsetWidth-g-h;n+="white-space:nowrap;overflow:hidden;width:"+(parseInt(k)-2)+"px;"}}b.style.cssText="position:absolute; cursor:text; padding:"+
d+"; padding-left:"+(g+m)+"px; margin:"+c+"; margin-top:"+(q+l+1)+"px; font-size:"+e+";"+n;return b},__formatNumber:function(a){return isNaN(parseInt(a))?0:parseInt(a,10)},__events:function(){var a=this,b=this.elems.carrier;b.onblur=function(){a._blur()};"input"===this.config.control.emMethod?b.onpropertychange=b.oninput=function(){a._blur()}:b.onfocus=function(){a._focus()}},_focus:function(){this.elems.label.innerHTML="";this.elems.label.style.display="none"},_blur:function(){var a=this.elems.label;
""===this.elems.carrier.value?(a.innerHTML=this._.placeholder,this.elems.label.style.display=""):a.innerHTML=""},_reRenderColor:function(){if(!document.getElementById("placeholderFixed")){var a=document.getElementsByTagName("head")[0];var b=this.config.style.color;var d=":-moz-placeholder{color:"+b+"; }"+("::-moz-placeholder{color:"+b+";}")+("::-webkit-input-placeholder{color:"+b+";}")+(":-ms-input-placeholder{color:"+b+"!important;}");b=document.createElement("style");b.type="text/css";b.id="placeholderFixed";
a.appendChild(b);b.styleSheet?b.styleSheet.cssText=d:document.getBoxObjectFor?b.innerHTML+=d:b.appendChild(document.createTextNode(d))}},setPlaceholder:function(a){var b=a!==this._.placeholder;this._.placeholder=a;this.config.control.unifieddisplay||this.elems.carrier.setAttribute("placeholder",a);!this._.support&&""===this.elems.carrier.value&&(this.elems.label.innerHTML=a);b&&this.fire("change")},show:function(){this.elems.label&&(this.elems.label.style.display="",this._blur());this.elems.carrier.style.display=
""},hide:function(){this.elems.label&&(this.elems.label.style.display="none");this.elems.carrier.style.display="none"},onchange:function(a){if(a)this.on("change",a)}});return h});