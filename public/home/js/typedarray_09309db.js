!function(e){"use strict";function t(e){switch(typeof e){case"undefined":return"undefined";case"boolean":return"boolean";case"number":return"number";case"string":return"string";default:return null===e?"null":"object"}}function r(e){return Object.prototype.toString.call(e).replace(/^\[object *|\]$/g,"")}function n(e){return"function"==typeof e}function o(e){if(null===e||e===R)throw TypeError();return Object(e)}function i(e){return e>>0}function f(e){return e>>>0}function u(t){function r(e){Object.defineProperty(t,e,{get:function(){return t._getter(e)},set:function(r){t._setter(e,r)},enumerable:!0,configurable:!1})}if(!("TYPED_ARRAY_POLYFILL_NO_ARRAY_ACCESSORS"in e)){if(t.length>B)throw RangeError("Array too large for polyfill");var n;for(n=0;n<t.length;n+=1)r(n)}}function a(e,t){var r=32-t;return e<<r>>r}function s(e,t){var r=32-t;return e<<r>>>r}function h(e){return[255&e]}function y(e){return a(e[0],8)}function l(e){return[255&e]}function p(e){return s(e[0],8)}function c(e){return e=x(Number(e)),[0>e?0:e>255?255:255&e]}function g(e){return[255&e,e>>8&255]}function b(e){return a(e[1]<<8|e[0],16)}function E(e){return[255&e,e>>8&255]}function v(e){return s(e[1]<<8|e[0],16)}function _(e){return[255&e,e>>8&255,e>>16&255,e>>24&255]}function O(e){return a(e[3]<<24|e[2]<<16|e[1]<<8|e[0],32)}function d(e){return[255&e,e>>8&255,e>>16&255,e>>24&255]}function j(e){return s(e[3]<<24|e[2]<<16|e[1]<<8|e[0],32)}function P(e,t,r){function n(e){var t=M(e),r=e-t;return.5>r?t:r>.5?t+1:t%2?t+1:t}var o,i,f,u=(1<<t-1)-1;if(e!==e)i=(1<<t)-1,f=F(2,r-1),o=0;else if(1/0===e||e===-1/0)i=(1<<t)-1,f=0,o=0>e?1:0;else if(0===e)i=0,f=0,o=1/e===-1/0?1:0;else if(o=0>e,e=S(e),e>=F(2,1-u)){i=I(M(U(e)/N),1023);var a=e/F(2,i);1>a&&(i-=1,a*=2),a>=2&&(i+=1,a/=2);var s=F(2,r);f=n(a*s)-s,i+=u,f/s>=1&&(i+=1,f=0),i>2*u&&(i=(1<<t)-1,f=0)}else i=0,f=n(e/F(2,1-u-r));var h,y=[];for(h=r;h;h-=1)y.push(f%2?1:0),f=M(f/2);for(h=t;h;h-=1)y.push(i%2?1:0),i=M(i/2);y.push(o?1:0),y.reverse();for(var l=y.join(""),p=[];l.length;)p.unshift(parseInt(l.substring(0,8),2)),l=l.substring(8);return p}function m(e,t,r){var n,o,i,f,u,a,s,h,y=[];for(n=0;n<e.length;++n)for(i=e[n],o=8;o;o-=1)y.push(i%2?1:0),i>>=1;return y.reverse(),f=y.join(""),u=(1<<t-1)-1,a=parseInt(f.substring(0,1),2)?-1:1,s=parseInt(f.substring(1,1+t),2),h=parseInt(f.substring(1+t),2),s===(1<<t)-1?0!==h?0/0:1/0*a:s>0?a*F(2,s-u)*(1+h/F(2,r)):0!==h?a*F(2,-(u-1))*(h/F(2,r)):0>a?-0:0}function T(e){return m(e,11,52)}function w(e){return P(e,11,52)}function A(e){return m(e,8,23)}function L(e){return P(e,8,23)}var R=void 0,B=1e5,N=Math.LN2,S=Math.abs,M=Math.floor,U=Math.log,Y=Math.max,I=Math.min,F=Math.pow,x=Math.round;!function(){var e=Object.defineProperty,t=!function(){try{return Object.defineProperty({},"x",{})}catch(e){return!1}}();(!e||t)&&(Object.defineProperty=function(t,r,n){if(e)try{return e(t,r,n)}catch(o){}if(t!==Object(t))throw TypeError("Object.defineProperty called on non-object");return Object.prototype.__defineGetter__&&"get"in n&&Object.prototype.__defineGetter__.call(t,r,n.get),Object.prototype.__defineSetter__&&"set"in n&&Object.prototype.__defineSetter__.call(t,r,n.set),"value"in n&&(t[r]=n.value),t})}(),function(){function a(e){if(e=i(e),0>e)throw RangeError("ArrayBuffer size is not a small enough positive integer.");Object.defineProperty(this,"byteLength",{value:e}),Object.defineProperty(this,"_bytes",{value:Array(e)});for(var t=0;e>t;t+=1)this._bytes[t]=0}function s(){if(!arguments.length||"object"!=typeof arguments[0])return function(e){if(e=i(e),0>e)throw RangeError("length is not a small enough positive integer.");Object.defineProperty(this,"length",{value:e}),Object.defineProperty(this,"byteLength",{value:e*this.BYTES_PER_ELEMENT}),Object.defineProperty(this,"buffer",{value:new a(this.byteLength)}),Object.defineProperty(this,"byteOffset",{value:0})}.apply(this,arguments);if(arguments.length>=1&&"object"===t(arguments[0])&&arguments[0]instanceof s)return function(e){if(this.constructor!==e.constructor)throw TypeError();var t=e.length*this.BYTES_PER_ELEMENT;Object.defineProperty(this,"buffer",{value:new a(t)}),Object.defineProperty(this,"byteLength",{value:t}),Object.defineProperty(this,"byteOffset",{value:0}),Object.defineProperty(this,"length",{value:e.length});for(var r=0;r<this.length;r+=1)this._setter(r,e._getter(r))}.apply(this,arguments);if(arguments.length>=1&&"object"===t(arguments[0])&&!(arguments[0]instanceof s)&&!(arguments[0]instanceof a||"ArrayBuffer"===r(arguments[0])))return function(e){var t=e.length*this.BYTES_PER_ELEMENT;Object.defineProperty(this,"buffer",{value:new a(t)}),Object.defineProperty(this,"byteLength",{value:t}),Object.defineProperty(this,"byteOffset",{value:0}),Object.defineProperty(this,"length",{value:e.length});for(var r=0;r<this.length;r+=1){var n=e[r];this._setter(r,Number(n))}}.apply(this,arguments);if(arguments.length>=1&&"object"===t(arguments[0])&&(arguments[0]instanceof a||"ArrayBuffer"===r(arguments[0])))return function(e,t,r){if(t=f(t),t>e.byteLength)throw RangeError("byteOffset out of range");if(t%this.BYTES_PER_ELEMENT)throw RangeError("buffer length minus the byteOffset is not a multiple of the element size.");if(r===R){var n=e.byteLength-t;if(n%this.BYTES_PER_ELEMENT)throw RangeError("length of buffer minus byteOffset not a multiple of the element size");r=n/this.BYTES_PER_ELEMENT}else r=f(r),n=r*this.BYTES_PER_ELEMENT;if(t+n>e.byteLength)throw RangeError("byteOffset and length reference an area beyond the end of the buffer");Object.defineProperty(this,"buffer",{value:e}),Object.defineProperty(this,"byteLength",{value:n}),Object.defineProperty(this,"byteOffset",{value:t}),Object.defineProperty(this,"length",{value:r})}.apply(this,arguments);throw TypeError()}function P(e,t,r){var n=function(){Object.defineProperty(this,"constructor",{value:n}),s.apply(this,arguments),u(this)};"__proto__"in n?n.__proto__=s:(n.from=s.from,n.of=s.of),n.BYTES_PER_ELEMENT=e;var o=function(){};return o.prototype=m,n.prototype=new o,Object.defineProperty(n.prototype,"BYTES_PER_ELEMENT",{value:e}),Object.defineProperty(n.prototype,"_pack",{value:t}),Object.defineProperty(n.prototype,"_unpack",{value:r}),n}e.ArrayBuffer=e.ArrayBuffer||a,Object.defineProperty(s,"from",{value:function(e){return new this(e)}}),Object.defineProperty(s,"of",{value:function(){return new this(arguments)}});var m={};s.prototype=m,Object.defineProperty(s.prototype,"_getter",{value:function(e){if(arguments.length<1)throw SyntaxError("Not enough arguments");if(e=f(e),e>=this.length)return R;var t,r,n=[];for(t=0,r=this.byteOffset+e*this.BYTES_PER_ELEMENT;t<this.BYTES_PER_ELEMENT;t+=1,r+=1)n.push(this.buffer._bytes[r]);return this._unpack(n)}}),Object.defineProperty(s.prototype,"get",{value:s.prototype._getter}),Object.defineProperty(s.prototype,"_setter",{value:function(e,t){if(arguments.length<2)throw SyntaxError("Not enough arguments");if(e=f(e),!(e>=this.length)){var r,n,o=this._pack(t);for(r=0,n=this.byteOffset+e*this.BYTES_PER_ELEMENT;r<this.BYTES_PER_ELEMENT;r+=1,n+=1)this.buffer._bytes[n]=o[r]}}}),Object.defineProperty(s.prototype,"constructor",{value:s}),Object.defineProperty(s.prototype,"copyWithin",{value:function(e,t){var r=arguments[2],n=o(this),u=n.length,a=f(u);a=Y(a,0);var s,h=i(e);s=0>h?Y(a+h,0):I(h,a);var y,l=i(t);y=0>l?Y(a+l,0):I(l,a);var p;p=r===R?a:i(r);var c;c=0>p?Y(a+p,0):I(p,a);var g,b=I(c-y,a-s);for(s>y&&y+b>s?(g=-1,y=y+b-1,s=s+b-1):g=1;b>0;)n._setter(s,n._getter(y)),y+=g,s+=g,b-=1;return n}}),Object.defineProperty(s.prototype,"every",{value:function(e){if(this===R||null===this)throw TypeError();var t=Object(this),r=f(t.length);if(!n(e))throw TypeError();for(var o=arguments[1],i=0;r>i;i++)if(!e.call(o,t._getter(i),i,t))return!1;return!0}}),Object.defineProperty(s.prototype,"fill",{value:function(e){var t=arguments[1],r=arguments[2],n=o(this),u=n.length,a=f(u);a=Y(a,0);var s,h=i(t);s=0>h?Y(a+h,0):I(h,a);var y;y=r===R?a:i(r);var l;for(l=0>y?Y(a+y,0):I(y,a);l>s;)n._setter(s,e),s+=1;return n}}),Object.defineProperty(s.prototype,"filter",{value:function(e){if(this===R||null===this)throw TypeError();var t=Object(this),r=f(t.length);if(!n(e))throw TypeError();for(var o=[],i=arguments[1],u=0;r>u;u++){var a=t._getter(u);e.call(i,a,u,t)&&o.push(a)}return new this.constructor(o)}}),Object.defineProperty(s.prototype,"find",{value:function(e){var t=o(this),r=t.length,i=f(r);if(!n(e))throw TypeError();for(var u=arguments.length>1?arguments[1]:R,a=0;i>a;){var s=t._getter(a),h=e.call(u,s,a,t);if(Boolean(h))return s;++a}return R}}),Object.defineProperty(s.prototype,"findIndex",{value:function(e){var t=o(this),r=t.length,i=f(r);if(!n(e))throw TypeError();for(var u=arguments.length>1?arguments[1]:R,a=0;i>a;){var s=t._getter(a),h=e.call(u,s,a,t);if(Boolean(h))return a;++a}return-1}}),Object.defineProperty(s.prototype,"forEach",{value:function(e){if(this===R||null===this)throw TypeError();var t=Object(this),r=f(t.length);if(!n(e))throw TypeError();for(var o=arguments[1],i=0;r>i;i++)e.call(o,t._getter(i),i,t)}}),Object.defineProperty(s.prototype,"indexOf",{value:function(e){if(this===R||null===this)throw TypeError();var t=Object(this),r=f(t.length);if(0===r)return-1;var n=0;if(arguments.length>0&&(n=Number(arguments[1]),n!==n?n=0:0!==n&&n!==1/0&&n!==-(1/0)&&(n=(n>0||-1)*M(S(n)))),n>=r)return-1;for(var o=n>=0?n:Y(r-S(n),0);r>o;o++)if(t._getter(o)===e)return o;return-1}}),Object.defineProperty(s.prototype,"join",{value:function(e){if(this===R||null===this)throw TypeError();for(var t=Object(this),r=f(t.length),n=Array(r),o=0;r>o;++o)n[o]=t._getter(o);return n.join(e===R?",":e)}}),Object.defineProperty(s.prototype,"lastIndexOf",{value:function(e){if(this===R||null===this)throw TypeError();var t=Object(this),r=f(t.length);if(0===r)return-1;var n=r;arguments.length>1&&(n=Number(arguments[1]),n!==n?n=0:0!==n&&n!==1/0&&n!==-(1/0)&&(n=(n>0||-1)*M(S(n))));for(var o=n>=0?I(n,r-1):r-S(n);o>=0;o--)if(t._getter(o)===e)return o;return-1}}),Object.defineProperty(s.prototype,"map",{value:function(e){if(this===R||null===this)throw TypeError();var t=Object(this),r=f(t.length);if(!n(e))throw TypeError();var o=[];o.length=r;for(var i=arguments[1],u=0;r>u;u++)o[u]=e.call(i,t._getter(u),u,t);return new this.constructor(o)}}),Object.defineProperty(s.prototype,"reduce",{value:function(e){if(this===R||null===this)throw TypeError();var t=Object(this),r=f(t.length);if(!n(e))throw TypeError();if(0===r&&1===arguments.length)throw TypeError();var o,i=0;for(o=arguments.length>=2?arguments[1]:t._getter(i++);r>i;)o=e.call(R,o,t._getter(i),i,t),i++;return o}}),Object.defineProperty(s.prototype,"reduceRight",{value:function(e){if(this===R||null===this)throw TypeError();var t=Object(this),r=f(t.length);if(!n(e))throw TypeError();if(0===r&&1===arguments.length)throw TypeError();var o,i=r-1;for(o=arguments.length>=2?arguments[1]:t._getter(i--);i>=0;)o=e.call(R,o,t._getter(i),i,t),i--;return o}}),Object.defineProperty(s.prototype,"reverse",{value:function(){if(this===R||null===this)throw TypeError();for(var e=Object(this),t=f(e.length),r=M(t/2),n=0,o=t-1;r>n;++n,--o){var i=e._getter(n);e._setter(n,e._getter(o)),e._setter(o,i)}return e}}),Object.defineProperty(s.prototype,"set",{value:function(){if(arguments.length<1)throw SyntaxError("Not enough arguments");var e,t,r,n,o,i,u,a,s,h;if("object"==typeof arguments[0]&&arguments[0].constructor===this.constructor){if(e=arguments[0],r=f(arguments[1]),r+e.length>this.length)throw RangeError("Offset plus length of array is out of range");if(a=this.byteOffset+r*this.BYTES_PER_ELEMENT,s=e.length*this.BYTES_PER_ELEMENT,e.buffer===this.buffer){for(h=[],o=0,i=e.byteOffset;s>o;o+=1,i+=1)h[o]=e.buffer._bytes[i];for(o=0,u=a;s>o;o+=1,u+=1)this.buffer._bytes[u]=h[o]}else for(o=0,i=e.byteOffset,u=a;s>o;o+=1,i+=1,u+=1)this.buffer._bytes[u]=e.buffer._bytes[i]}else{if("object"!=typeof arguments[0]||"undefined"==typeof arguments[0].length)throw TypeError("Unexpected argument type(s)");if(t=arguments[0],n=f(t.length),r=f(arguments[1]),r+n>this.length)throw RangeError("Offset plus length of array is out of range");for(o=0;n>o;o+=1)i=t[o],this._setter(r+o,Number(i))}}}),Object.defineProperty(s.prototype,"slice",{value:function(e,t){for(var r=o(this),n=r.length,u=f(n),a=i(e),s=0>a?Y(u+a,0):I(a,u),h=t===R?u:i(t),y=0>h?Y(u+h,0):I(h,u),l=y-s,p=r.constructor,c=new p(l),g=0;y>s;){var b=r._getter(s);c._setter(g,b),++s,++g}return c}}),Object.defineProperty(s.prototype,"some",{value:function(e){if(this===R||null===this)throw TypeError();var t=Object(this),r=f(t.length);if(!n(e))throw TypeError();for(var o=arguments[1],i=0;r>i;i++)if(e.call(o,t._getter(i),i,t))return!0;return!1}}),Object.defineProperty(s.prototype,"sort",{value:function(e){function t(t,r){return t!==t&&r!==r?0:t!==t?1:r!==r?-1:e!==R?e(t,r):r>t?-1:t>r?1:0}if(this===R||null===this)throw TypeError();for(var r=Object(this),n=f(r.length),o=Array(n),i=0;n>i;++i)o[i]=r._getter(i);for(o.sort(t),i=0;n>i;++i)r._setter(i,o[i]);return r}}),Object.defineProperty(s.prototype,"subarray",{value:function(e,t){function r(e,t,r){return t>e?t:e>r?r:e}e=i(e),t=i(t),arguments.length<1&&(e=0),arguments.length<2&&(t=this.length),0>e&&(e=this.length+e),0>t&&(t=this.length+t),e=r(e,0,this.length),t=r(t,0,this.length);var n=t-e;return 0>n&&(n=0),new this.constructor(this.buffer,this.byteOffset+e*this.BYTES_PER_ELEMENT,n)}});var B=P(1,h,y),N=P(1,l,p),U=P(1,c,p),F=P(2,g,b),x=P(2,E,v),k=P(4,_,O),C=P(4,d,j),z=P(4,L,A),D=P(8,w,T);e.Int8Array=e.Int8Array||B,e.Uint8Array=e.Uint8Array||N,e.Uint8ClampedArray=e.Uint8ClampedArray||U,e.Int16Array=e.Int16Array||F,e.Uint16Array=e.Uint16Array||x,e.Int32Array=e.Int32Array||k,e.Uint32Array=e.Uint32Array||C,e.Float32Array=e.Float32Array||z,e.Float64Array=e.Float64Array||D}(),function(){function t(e,t){return n(e.get)?e.get(t):e[t]}function o(e,t,n){if(!(e instanceof ArrayBuffer||"ArrayBuffer"===r(e)))throw TypeError();if(t=f(t),t>e.byteLength)throw RangeError("byteOffset out of range");if(n=n===R?e.byteLength-t:f(n),t+n>e.byteLength)throw RangeError("byteOffset and length reference an area beyond the end of the buffer");Object.defineProperty(this,"buffer",{value:e}),Object.defineProperty(this,"byteLength",{value:n}),Object.defineProperty(this,"byteOffset",{value:t})}function i(e){return function(r,n){if(r=f(r),r+e.BYTES_PER_ELEMENT>this.byteLength)throw RangeError("Array index out of range");r+=this.byteOffset;for(var o=new Uint8Array(this.buffer,r,e.BYTES_PER_ELEMENT),i=[],u=0;u<e.BYTES_PER_ELEMENT;u+=1)i.push(t(o,u));return Boolean(n)===Boolean(a)&&i.reverse(),t(new e(new Uint8Array(i).buffer),0)}}function u(e){return function(r,n,o){if(r=f(r),r+e.BYTES_PER_ELEMENT>this.byteLength)throw RangeError("Array index out of range");var i,u,s=new e([n]),h=new Uint8Array(s.buffer),y=[];for(i=0;i<e.BYTES_PER_ELEMENT;i+=1)y.push(t(h,i));Boolean(o)===Boolean(a)&&y.reverse(),u=new Uint8Array(this.buffer,r,e.BYTES_PER_ELEMENT),u.set(y)}}var a=function(){var e=new Uint16Array([4660]),r=new Uint8Array(e.buffer);return 18===t(r,0)}();Object.defineProperty(o.prototype,"getUint8",{value:i(Uint8Array)}),Object.defineProperty(o.prototype,"getInt8",{value:i(Int8Array)}),Object.defineProperty(o.prototype,"getUint16",{value:i(Uint16Array)}),Object.defineProperty(o.prototype,"getInt16",{value:i(Int16Array)}),Object.defineProperty(o.prototype,"getUint32",{value:i(Uint32Array)}),Object.defineProperty(o.prototype,"getInt32",{value:i(Int32Array)}),Object.defineProperty(o.prototype,"getFloat32",{value:i(Float32Array)}),Object.defineProperty(o.prototype,"getFloat64",{value:i(Float64Array)}),Object.defineProperty(o.prototype,"setUint8",{value:u(Uint8Array)}),Object.defineProperty(o.prototype,"setInt8",{value:u(Int8Array)}),Object.defineProperty(o.prototype,"setUint16",{value:u(Uint16Array)}),Object.defineProperty(o.prototype,"setInt16",{value:u(Int16Array)}),Object.defineProperty(o.prototype,"setUint32",{value:u(Uint32Array)}),Object.defineProperty(o.prototype,"setInt32",{value:u(Int32Array)}),Object.defineProperty(o.prototype,"setFloat32",{value:u(Float32Array)}),Object.defineProperty(o.prototype,"setFloat64",{value:u(Float64Array)}),e.DataView=e.DataView||o}()}(self);