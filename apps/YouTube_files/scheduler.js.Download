(function(){/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
'use strict';var f;function aa(a){var b=0;return function(){return b<a.length?{done:!1,value:a[b++]}:{done:!0}}}
function g(){var a=ba,b="undefined"!=typeof Symbol&&Symbol.iterator&&a[Symbol.iterator];return b?b.call(a):{next:aa(a)}}
var ca="function"==typeof Object.create?Object.create:function(a){function b(){}
b.prototype=a;return new b},h;
if("function"==typeof Object.setPrototypeOf)h=Object.setPrototypeOf;else{var k;a:{var da={a:!0},l={};try{l.__proto__=da;k=l.a;break a}catch(a){}k=!1}h=k?function(a,b){a.__proto__=b;if(a.__proto__!==b)throw new TypeError(a+" is not extensible");return a}:null}var m=h,n=this||self;
function p(a){a=a.split(".");for(var b=n,c=0;c<a.length;c++)if(b=b[a[c]],null==b)return null;return b}
function ea(a,b,c){return a.call.apply(a.bind,arguments)}
function fa(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var e=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(e,d);return a.apply(b,e)}}return function(){return a.apply(b,arguments)}}
function q(a,b,c){Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?q=ea:q=fa;return q.apply(null,arguments)}
function r(a,b){a=a.split(".");var c=n;a[0]in c||"undefined"==typeof c.execScript||c.execScript("var "+a[0]);for(var d;a.length&&(d=a.shift());)a.length||void 0===b?c[d]&&c[d]!==Object.prototype[d]?c=c[d]:c=c[d]={}:c[d]=b}
;function t(){this.s=this.s;this.B=this.B}
t.prototype.s=!1;t.prototype.dispose=function(){this.s||(this.s=!0,this.G())};
t.prototype.G=function(){if(this.B)for(;this.B.length;)this.B.shift()()};var u=n.window,v,w,x=(null==u?void 0:null==(v=u.yt)?void 0:v.config_)||(null==u?void 0:null==(w=u.ytcfg)?void 0:w.data_)||{};r("yt.config_",x);function y(a,b){return a in x?x[a]:b}
;function z(a){a=A(a);return"string"===typeof a&&"false"===a?!1:!!a}
function B(a,b){a=A(a);return void 0===a&&void 0!==b?b:Number(a||0)}
function A(a){var b=y("EXPERIMENTS_FORCED_FLAGS",{});return void 0!==b[a]?b[a]:y("EXPERIMENT_FLAGS",{})[a]}
;var ha=B("web_emulated_idle_callback_delay",300),C=1E3/60-3,ba=[8,4,3,2,1,0];
function E(a){a=void 0===a?{}:a;t.call(this);this.g=[];for(var b=g(),c=b.next();!c.done;c=b.next())this.g[c.value]=[];this.j=0;this.N=a.timeout||1;this.i={};this.o=C;this.C=this.h=this.m=0;this.D=this.l=!1;this.u=[];this.H=q(this.R,this);this.M=q(this.T,this);this.J=q(this.O,this);this.K=q(this.P,this);this.L=q(this.S,this);this.A=this.F=!1;this.I=!!window.requestIdleCallback&&!!window.cancelIdleCallback&&!z("disable_scheduler_requestIdleCallback");(this.v=(z("scheduler_use_raf_by_default")?!1!==
a.useRaf:!!a.useRaf)&&!!window.requestAnimationFrame)&&document.addEventListener("visibilitychange",this.H)}
E.prototype=ca(t.prototype);E.prototype.constructor=E;if(m)m(E,t);else for(var F in t)if("prototype"!=F)if(Object.defineProperties){var G=Object.getOwnPropertyDescriptor(t,F);G&&Object.defineProperty(E,F,G)}else E[F]=t[F];function H(a,b){var c=Date.now();I(b);b=Date.now()-c;a.l||(a.o-=b)}
function J(a,b,c,d){++a.C;if(10==c)return H(a,b),a.C;var e=a.C;a.i[e]=b;a.l&&!d?a.u.push({id:e,priority:c}):(a.g[c].push(e),a.D||a.l||(0!=a.h&&K(a)!=a.m&&L(a),a.start()));return e}
function M(a){a.u.length=0;for(var b=4;0<=b;b--)a.g[b].length=0;a.g[8].length=0;a.i={};L(a)}
function K(a){if(a.g[8].length){if(a.A)return 4;if(!document.hidden&&a.v)return 3}for(var b=4;b>=a.j;b--)if(0<a.g[b].length)return 0<b?!document.hidden&&a.v?3:2:1;return 0}
function I(a){try{a()}catch(b){(a=p("yt.logging.errors.log"))&&a(b)}}
function N(a){if(z("scheduler_use_jobpriority_keys_shutoff")){if(a.g[8].length)return!0;for(var b=3;0<=b;b--)if(a.g[b].length)return!0;return!1}b=g();for(var c=b.next();!c.done;c=b.next())if(a.g[c.value].length)return!0;return!1}
f=E.prototype;f.P=function(a){var b=void 0;a&&(b=a.timeRemaining());this.F=!0;O(this,b);this.F=!1};
f.T=function(){O(this)};
f.O=function(){P(this)};
f.S=function(){this.A=!0;var a=K(this);4==a&&a!=this.m&&(L(this),this.start());O(this);this.A=!1};
f.R=function(){document.hidden||P(this);this.h&&(L(this),this.start())};
function P(a){L(a);a.l=!0;for(var b=Date.now(),c=a.g[8];c.length;){var d=c.shift(),e=a.i[d];delete a.i[d];e&&I(e)}Q(a);a.l=!1;N(a)&&a.start();a.o-=Date.now()-b}
function Q(a){for(var b=0,c=a.u.length;b<c;b++){var d=a.u[b];a.g[d.priority].push(d.id)}a.u.length=0}
function O(a,b){a.A&&4==a.m&&a.h||L(a);a.l=!0;b=Date.now()+(b||a.o);for(var c=a.g[4];c.length;){var d=c.shift(),e=a.i[d];delete a.i[d];e&&I(e)}c=a.F?0:1;c=a.j>c?a.j:c;if(!(Date.now()>=b)){do{a:{d=a;e=c;for(var D=3;D>=e;D--)for(var V=d.g[D];V.length;){var W=V.shift(),X=d.i[W];delete d.i[W];if(X){d=X;break a}}d=null}d&&I(d)}while(d&&Date.now()<b)}a.l=!1;Q(a);a.o=C;N(a)&&a.start()}
f.start=function(){this.D=!1;if(0==this.h)switch(this.m=K(this),this.m){case 1:var a=this.K;this.h=this.I?window.requestIdleCallback(a,{timeout:3E3}):window.setTimeout(a,ha);break;case 2:this.h=window.setTimeout(this.M,this.N);break;case 3:this.h=window.requestAnimationFrame(this.L);break;case 4:this.h=window.setTimeout(this.J,0)}};
function L(a){if(a.h){switch(a.m){case 1:var b=a.h;a.I?window.cancelIdleCallback(b):window.clearTimeout(b);break;case 2:case 4:window.clearTimeout(a.h);break;case 3:window.cancelAnimationFrame(a.h)}a.h=0}}
f.G=function(){M(this);L(this);this.v&&document.removeEventListener("visibilitychange",this.H);t.prototype.G.call(this)};var R=p("yt.scheduler.instance.timerIdMap_")||{},S=B("kevlar_tuner_scheduler_soft_state_timer_ms",800),T=0,U=0;function Y(){var a=p("ytglobal.schedulerInstanceInstance_");if(!a||a.s)a=new E(y("scheduler")||{}),r("ytglobal.schedulerInstanceInstance_",a);return a}
function ia(){var a=p("ytglobal.schedulerInstanceInstance_");a&&(a&&"function"==typeof a.dispose&&a.dispose(),r("ytglobal.schedulerInstanceInstance_",null))}
function ja(){M(Y());for(var a in R)delete R[Number(a)]}
function ka(a,b,c){if(0==c||void 0===c)return c=void 0===c,-J(Y(),a,b,c);var d=window.setTimeout(function(){var e=J(Y(),a,b);R[d]=e},c);
return d}
function la(a){var b=Y();H(b,a)}
function ma(a){var b=Y();if(0>a)delete b.i[-a];else{var c=R[a];c?(delete b.i[c],delete R[a]):window.clearTimeout(a)}}
function Z(a){var b=p("ytcsi.tick");b&&b(a)}
function na(){Z("jse");oa()}
function oa(){window.clearTimeout(T);Y().start()}
function pa(){var a=Y();L(a);a.D=!0;window.clearTimeout(T);T=window.setTimeout(na,S)}
function qa(){window.clearTimeout(U);U=window.setTimeout(function(){Z("jset");ra(0)},S)}
function ra(a){qa();var b=Y();b.j=a;b.start()}
function sa(a){qa();var b=Y();b.j>a&&(b.j=a,b.start())}
function ta(){window.clearTimeout(U);var a=Y();a.j=0;a.start()}
;p("yt.scheduler.initialized")||(r("yt.scheduler.instance.dispose",ia),r("yt.scheduler.instance.addJob",ka),r("yt.scheduler.instance.addImmediateJob",la),r("yt.scheduler.instance.cancelJob",ma),r("yt.scheduler.instance.cancelAllJobs",ja),r("yt.scheduler.instance.start",oa),r("yt.scheduler.instance.pause",pa),r("yt.scheduler.instance.setPriorityThreshold",ra),r("yt.scheduler.instance.enablePriorityThreshold",sa),r("yt.scheduler.instance.clearPriorityThreshold",ta),r("yt.scheduler.initialized",!0));}).call(this);
