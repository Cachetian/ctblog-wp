this.wp=this.wp||{},this.wp.deprecated=function(t){var e={};function n(o){if(e[o])return e[o].exports;var c=e[o]={i:o,l:!1,exports:{}};return t[o].call(c.exports,c,c.exports,n),c.l=!0,c.exports}return n.m=t,n.c=e,n.d=function(t,e,o){n.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:o})},n.r=function(t){Object.defineProperty(t,"__esModule",{value:!0})},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=246)}({246:function(t,e,n){"use strict";n.r(e),n.d(e,"logged",function(){return c}),n.d(e,"default",function(){return r});var o=n(26),c=Object.create(null);function r(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},n=e.version,r=e.alternative,a=e.plugin,i=e.link,u=e.hint,l=a?" from ".concat(a):"",d=n?"".concat(l," in ").concat(n):"",s=r?" Please use ".concat(r," instead."):"",f=i?" See: ".concat(i):"",p=u?" Note: ".concat(u):"",v="".concat(t," is deprecated and will be removed").concat(d,".").concat(s).concat(f).concat(p);v in c||(Object(o.doAction)("deprecated",t,e,v),console.warn(v),c[v]=!0)}},26:function(t,e){!function(){t.exports=this.wp.hooks}()}}).default;