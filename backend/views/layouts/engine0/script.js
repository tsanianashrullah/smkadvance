// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.2
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery.extend(jQuery.easing,{easeOutBack2:function(f,g,e,j,i){var h=(g/=i)*g;var a=h*g;return e+j*(5*a*h+-15*h*h+19*a+-14*h+6*g)},easeOutCubic:function(e,f,a,h,g){return h*((f=f/g-1)*f*f+1)+a},easeInCubic:function(e,f,a,h,g){return h*(f/=g)*f*f+a}});function ws_tv(m,i,b){var d=jQuery;var g=d(this);var k=m.noCanvas||!document.createElement("canvas").getContext;var j=m.width,e=m.height;var f=d("<div>").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).addClass("ws_effect ws_tv").appendTo(b);if(!k){var c=d("<canvas>").css({position:"absolute",left:0,top:0,width:"100%",height:"100%"}).appendTo(f);var l=c.get(0).getContext("2d")}function a(n,h,o){return n+(h-n)*o}this.go=function(h,o){if(k){b.find(".ws_list").css("transform","translate3d(0,0,0)").stop(true).animate({left:(h?-h+"00%":(/Safari/.test(navigator.userAgent)?"0%":0))},m.duration,"easeInOutExpo",function(){g.trigger("effectEnd")})}else{j=b.width();e=b.height();c.attr({width:j,height:e});var n=d(i.get(h)).clone().css({opacity:0,zIndex:2,maxHeight:"none"}).appendTo(f);wowAnimate(function(p){l.clearRect(0,0,j,e);var r=j;if(p>=0.95){r*=1-(p-0.95)/(1-0.95)}l.fillStyle="#111";l.fillRect(0,0,j,e);var q=l.createLinearGradient(0,p*e/2,0,e-p*e/2);q.addColorStop(0,"#111");q.addColorStop(a(0,0.5,p),"#fff");q.addColorStop(0.5,"#fff");q.addColorStop(a(1,0.5,p),"#fff");q.addColorStop(1,"#111");l.fillStyle=q;l.fillRect((j-r)/2,p*e/2,r,e*(1-p))},0,1,m.duration*0.3,"easeOutCubic",function(){wowAnimate(n,{scale:[0.9,0],opacity:0.5},{scale:[1,1],opacity:1},m.duration*0.3,m.duration*0.4,"easeOutBack2",function(){b.find(".ws_list").css({left:(h?-h+"00%":(/Safari/.test(navigator.userAgent)?"0%":0))});g.trigger("effectEnd");setTimeout(function(){l.fillStyle="#111";l.clearRect(0,0,j,e);n.remove()},1)})})}}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.2
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_blinds(m,l,a){var g=jQuery;var k=g(this);var c=m.parts||3;var j=g(".ws_list",a);var h=g("<div>").addClass("ws_effect ws_blinds").css({position:"absolute",width:"100%",height:"100%",left:0,top:0,"z-index":8}).hide().appendTo(a);var d=g("<div>").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).appendTo(h);var e=[];var b=document.addEventListener;for(var f=0;f<c;f++){e[f]=g("<div>").css({position:b?"relative":"absolute",display:b?"inline-block":"block",height:"100%",width:(100/c+0.001).toFixed(3)+"%",border:"none",margin:0,overflow:"hidden",top:0,left:b?0:((100*f/c).toFixed(3)+"%")}).appendTo(h)}this.go=function(r,p,o){if(o==undefined){o=p>r?1:0}h.find("img").stop(true,true);h.show();var s=g(l[p]);var t={width:s.width()||m.width,height:s.height()||m.height};var u=s.clone().css(t).appendTo(d);u.from={left:0};u.to={left:(!o?1:-1)*u.width()*0.5};if(m.support.transform){u.from={translate:[u.from.left,0,0]};u.to={translate:[u.to.left,0,0]}}j.hide();wowAnimate(u,u.from,u.to,m.duration,m.duration*0.1,"swing");for(var q=0;q<e.length;q++){var n=e[q];var v=g(l[r]).clone().css({position:"absolute",top:0}).css(t).appendTo(n);v.from={left:(!o?-1:1)*v.width()-n.position().left};v.to={left:-n.position().left};if(m.support.transform){v.from={translate:[v.from.left,0,0]};v.to={translate:[v.to.left,0,0]}}wowAnimate(v,v.from,v.to,(m.duration/(e.length+1))*(o?(e.length-q+1):(q+2)),"swing",((!o&&q==e.length-1||o&&!q)?function(){k.trigger("effectEnd");h.hide().find("img").remove();u.remove()}:false))}}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.2
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery("#wowslider-container0").wowSlider({effect:"tv,blinds",prev:"",next:"",duration:20*100,delay:17*100,width:640,height:360,autoPlay:true,autoPlayVideo:false,playPause:true,stopOnHover:true,loop:false,bullets:1,caption:true,captionEffect:"parallax",controls:true,controlsThumb:false,responsive:2,fullScreen:false,gestures:2,onBeforeStep:0,images:0});