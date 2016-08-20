<?php

/* @css/jquery.jqplot/jquery.js */
class __TwigTemplate_c39b6234aa334e1a3f5220f8680c2c4a546d2d7dc61c7749b35f1fc29715b9d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb77abd1be004cf1689f13933c60e85c1910b3baacca4c1125fe4447941cf141 = $this->env->getExtension("native_profiler");
        $__internal_cb77abd1be004cf1689f13933c60e85c1910b3baacca4c1125fe4447941cf141->enter($__internal_cb77abd1be004cf1689f13933c60e85c1910b3baacca4c1125fe4447941cf141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/jquery.jqplot/jquery.js"));

        // line 1
        echo "/*!
 * jQuery JavaScript Library v1.9.1
 * http://jquery.com/
 *
 * Includes Sizzle.js
 * http://sizzlejs.com/
 *
 * Copyright 2005, 2012 jQuery Foundation, Inc. and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2013-2-4
 */
(function( window, undefined ) {

// Can't do this because several apps including ASP.NET trace
// the stack via arguments.caller.callee and Firefox dies if
// you try to trace through \"use strict\" call chains. (#13335)
// Support: Firefox 18+
//\"use strict\";
var
\t// The deferred used on DOM ready
\treadyList,

\t// A central reference to the root jQuery(document)
\trootjQuery,

\t// Support: IE<9
\t// For `typeof node.method` instead of `node.method !== undefined`
\tcore_strundefined = typeof undefined,

\t// Use the correct document accordingly with window argument (sandbox)
\tdocument = window.document,
\tlocation = window.location,

\t// Map over jQuery in case of overwrite
\t_jQuery = window.jQuery,

\t// Map over the \$ in case of overwrite
\t_\$ = window.\$,

\t// [[Class]] -> type pairs
\tclass2type = {},

\t// List of deleted data cache ids, so we can reuse them
\tcore_deletedIds = [],

\tcore_version = \"1.9.1\",

\t// Save a reference to some core methods
\tcore_concat = core_deletedIds.concat,
\tcore_push = core_deletedIds.push,
\tcore_slice = core_deletedIds.slice,
\tcore_indexOf = core_deletedIds.indexOf,
\tcore_toString = class2type.toString,
\tcore_hasOwn = class2type.hasOwnProperty,
\tcore_trim = core_version.trim,

\t// Define a local copy of jQuery
\tjQuery = function( selector, context ) {
\t\t// The jQuery object is actually just the init constructor 'enhanced'
\t\treturn new jQuery.fn.init( selector, context, rootjQuery );
\t},

\t// Used for matching numbers
\tcore_pnum = /[+-]?(?:\\d*\\.|)\\d+(?:[eE][+-]?\\d+|)/.source,

\t// Used for splitting on whitespace
\tcore_rnotwhite = /\\S+/g,

\t// Make sure we trim BOM and NBSP (here's looking at you, Safari 5.0 and IE)
\trtrim = /^[\\s\\uFEFF\\xA0]+|[\\s\\uFEFF\\xA0]+\$/g,

\t// A simple way to check for HTML strings
\t// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
\t// Strict HTML recognition (#11290: must start with <)
\trquickExpr = /^(?:(<[\\w\\W]+>)[^>]*|#([\\w-]*))\$/,

\t// Match a standalone tag
\trsingleTag = /^<(\\w+)\\s*\\/?>(?:<\\/\\1>|)\$/,

\t// JSON RegExp
\trvalidchars = /^[\\],:{}\\s]*\$/,
\trvalidbraces = /(?:^|:|,)(?:\\s*\\[)+/g,
\trvalidescape = /\\\\(?:[\"\\\\\\/bfnrt]|u[\\da-fA-F]{4})/g,
\trvalidtokens = /\"[^\"\\\\\\r\\n]*\"|true|false|null|-?(?:\\d+\\.|)\\d+(?:[eE][+-]?\\d+|)/g,

\t// Matches dashed string for camelizing
\trmsPrefix = /^-ms-/,
\trdashAlpha = /-([\\da-z])/gi,

\t// Used by jQuery.camelCase as callback to replace()
\tfcamelCase = function( all, letter ) {
\t\treturn letter.toUpperCase();
\t},

\t// The ready event handler
\tcompleted = function( event ) {

\t\t// readyState === \"complete\" is good enough for us to call the dom ready in oldIE
\t\tif ( document.addEventListener || event.type === \"load\" || document.readyState === \"complete\" ) {
\t\t\tdetach();
\t\t\tjQuery.ready();
\t\t}
\t},
\t// Clean-up method for dom ready events
\tdetach = function() {
\t\tif ( document.addEventListener ) {
\t\t\tdocument.removeEventListener( \"DOMContentLoaded\", completed, false );
\t\t\twindow.removeEventListener( \"load\", completed, false );

\t\t} else {
\t\t\tdocument.detachEvent( \"onreadystatechange\", completed );
\t\t\twindow.detachEvent( \"onload\", completed );
\t\t}
\t};

jQuery.fn = jQuery.prototype = {
\t// The current version of jQuery being used
\tjquery: core_version,

\tconstructor: jQuery,
\tinit: function( selector, context, rootjQuery ) {
\t\tvar match, elem;

\t\t// HANDLE: \$(\"\"), \$(null), \$(undefined), \$(false)
\t\tif ( !selector ) {
\t\t\treturn this;
\t\t}

\t\t// Handle HTML strings
\t\tif ( typeof selector === \"string\" ) {
\t\t\tif ( selector.charAt(0) === \"<\" && selector.charAt( selector.length - 1 ) === \">\" && selector.length >= 3 ) {
\t\t\t\t// Assume that strings that start and end with <> are HTML and skip the regex check
\t\t\t\tmatch = [ null, selector, null ];

\t\t\t} else {
\t\t\t\tmatch = rquickExpr.exec( selector );
\t\t\t}

\t\t\t// Match html or make sure no context is specified for #id
\t\t\tif ( match && (match[1] || !context) ) {

\t\t\t\t// HANDLE: \$(html) -> \$(array)
\t\t\t\tif ( match[1] ) {
\t\t\t\t\tcontext = context instanceof jQuery ? context[0] : context;

\t\t\t\t\t// scripts is true for back-compat
\t\t\t\t\tjQuery.merge( this, jQuery.parseHTML(
\t\t\t\t\t\tmatch[1],
\t\t\t\t\t\tcontext && context.nodeType ? context.ownerDocument || context : document,
\t\t\t\t\t\ttrue
\t\t\t\t\t) );

\t\t\t\t\t// HANDLE: \$(html, props)
\t\t\t\t\tif ( rsingleTag.test( match[1] ) && jQuery.isPlainObject( context ) ) {
\t\t\t\t\t\tfor ( match in context ) {
\t\t\t\t\t\t\t// Properties of context are called as methods if possible
\t\t\t\t\t\t\tif ( jQuery.isFunction( this[ match ] ) ) {
\t\t\t\t\t\t\t\tthis[ match ]( context[ match ] );

\t\t\t\t\t\t\t// ...and otherwise set as attributes
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tthis.attr( match, context[ match ] );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\treturn this;

\t\t\t\t// HANDLE: \$(#id)
\t\t\t\t} else {
\t\t\t\t\telem = document.getElementById( match[2] );

\t\t\t\t\t// Check parentNode to catch when Blackberry 4.6 returns
\t\t\t\t\t// nodes that are no longer in the document #6963
\t\t\t\t\tif ( elem && elem.parentNode ) {
\t\t\t\t\t\t// Handle the case where IE and Opera return items
\t\t\t\t\t\t// by name instead of ID
\t\t\t\t\t\tif ( elem.id !== match[2] ) {
\t\t\t\t\t\t\treturn rootjQuery.find( selector );
\t\t\t\t\t\t}

\t\t\t\t\t\t// Otherwise, we inject the element directly into the jQuery object
\t\t\t\t\t\tthis.length = 1;
\t\t\t\t\t\tthis[0] = elem;
\t\t\t\t\t}

\t\t\t\t\tthis.context = document;
\t\t\t\t\tthis.selector = selector;
\t\t\t\t\treturn this;
\t\t\t\t}

\t\t\t// HANDLE: \$(expr, \$(...))
\t\t\t} else if ( !context || context.jquery ) {
\t\t\t\treturn ( context || rootjQuery ).find( selector );

\t\t\t// HANDLE: \$(expr, context)
\t\t\t// (which is just equivalent to: \$(context).find(expr)
\t\t\t} else {
\t\t\t\treturn this.constructor( context ).find( selector );
\t\t\t}

\t\t// HANDLE: \$(DOMElement)
\t\t} else if ( selector.nodeType ) {
\t\t\tthis.context = this[0] = selector;
\t\t\tthis.length = 1;
\t\t\treturn this;

\t\t// HANDLE: \$(function)
\t\t// Shortcut for document ready
\t\t} else if ( jQuery.isFunction( selector ) ) {
\t\t\treturn rootjQuery.ready( selector );
\t\t}

\t\tif ( selector.selector !== undefined ) {
\t\t\tthis.selector = selector.selector;
\t\t\tthis.context = selector.context;
\t\t}

\t\treturn jQuery.makeArray( selector, this );
\t},

\t// Start with an empty selector
\tselector: \"\",

\t// The default length of a jQuery object is 0
\tlength: 0,

\t// The number of elements contained in the matched element set
\tsize: function() {
\t\treturn this.length;
\t},

\ttoArray: function() {
\t\treturn core_slice.call( this );
\t},

\t// Get the Nth element in the matched element set OR
\t// Get the whole matched element set as a clean array
\tget: function( num ) {
\t\treturn num == null ?

\t\t\t// Return a 'clean' array
\t\t\tthis.toArray() :

\t\t\t// Return just the object
\t\t\t( num < 0 ? this[ this.length + num ] : this[ num ] );
\t},

\t// Take an array of elements and push it onto the stack
\t// (returning the new matched element set)
\tpushStack: function( elems ) {

\t\t// Build a new jQuery matched element set
\t\tvar ret = jQuery.merge( this.constructor(), elems );

\t\t// Add the old object onto the stack (as a reference)
\t\tret.prevObject = this;
\t\tret.context = this.context;

\t\t// Return the newly-formed element set
\t\treturn ret;
\t},

\t// Execute a callback for every element in the matched set.
\t// (You can seed the arguments with an array of args, but this is
\t// only used internally.)
\teach: function( callback, args ) {
\t\treturn jQuery.each( this, callback, args );
\t},

\tready: function( fn ) {
\t\t// Add the callback
\t\tjQuery.ready.promise().done( fn );

\t\treturn this;
\t},

\tslice: function() {
\t\treturn this.pushStack( core_slice.apply( this, arguments ) );
\t},

\tfirst: function() {
\t\treturn this.eq( 0 );
\t},

\tlast: function() {
\t\treturn this.eq( -1 );
\t},

\teq: function( i ) {
\t\tvar len = this.length,
\t\t\tj = +i + ( i < 0 ? len : 0 );
\t\treturn this.pushStack( j >= 0 && j < len ? [ this[j] ] : [] );
\t},

\tmap: function( callback ) {
\t\treturn this.pushStack( jQuery.map(this, function( elem, i ) {
\t\t\treturn callback.call( elem, i, elem );
\t\t}));
\t},

\tend: function() {
\t\treturn this.prevObject || this.constructor(null);
\t},

\t// For internal use only.
\t// Behaves like an Array's method, not like a jQuery method.
\tpush: core_push,
\tsort: [].sort,
\tsplice: [].splice
};

// Give the init function the jQuery prototype for later instantiation
jQuery.fn.init.prototype = jQuery.fn;

jQuery.extend = jQuery.fn.extend = function() {
\tvar src, copyIsArray, copy, name, options, clone,
\t\ttarget = arguments[0] || {},
\t\ti = 1,
\t\tlength = arguments.length,
\t\tdeep = false;

\t// Handle a deep copy situation
\tif ( typeof target === \"boolean\" ) {
\t\tdeep = target;
\t\ttarget = arguments[1] || {};
\t\t// skip the boolean and the target
\t\ti = 2;
\t}

\t// Handle case when target is a string or something (possible in deep copy)
\tif ( typeof target !== \"object\" && !jQuery.isFunction(target) ) {
\t\ttarget = {};
\t}

\t// extend jQuery itself if only one argument is passed
\tif ( length === i ) {
\t\ttarget = this;
\t\t--i;
\t}

\tfor ( ; i < length; i++ ) {
\t\t// Only deal with non-null/undefined values
\t\tif ( (options = arguments[ i ]) != null ) {
\t\t\t// Extend the base object
\t\t\tfor ( name in options ) {
\t\t\t\tsrc = target[ name ];
\t\t\t\tcopy = options[ name ];

\t\t\t\t// Prevent never-ending loop
\t\t\t\tif ( target === copy ) {
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\t// Recurse if we're merging plain objects or arrays
\t\t\t\tif ( deep && copy && ( jQuery.isPlainObject(copy) || (copyIsArray = jQuery.isArray(copy)) ) ) {
\t\t\t\t\tif ( copyIsArray ) {
\t\t\t\t\t\tcopyIsArray = false;
\t\t\t\t\t\tclone = src && jQuery.isArray(src) ? src : [];

\t\t\t\t\t} else {
\t\t\t\t\t\tclone = src && jQuery.isPlainObject(src) ? src : {};
\t\t\t\t\t}

\t\t\t\t\t// Never move original objects, clone them
\t\t\t\t\ttarget[ name ] = jQuery.extend( deep, clone, copy );

\t\t\t\t// Don't bring in undefined values
\t\t\t\t} else if ( copy !== undefined ) {
\t\t\t\t\ttarget[ name ] = copy;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// Return the modified object
\treturn target;
};

jQuery.extend({
\tnoConflict: function( deep ) {
\t\tif ( window.\$ === jQuery ) {
\t\t\twindow.\$ = _\$;
\t\t}

\t\tif ( deep && window.jQuery === jQuery ) {
\t\t\twindow.jQuery = _jQuery;
\t\t}

\t\treturn jQuery;
\t},

\t// Is the DOM ready to be used? Set to true once it occurs.
\tisReady: false,

\t// A counter to track how many items to wait for before
\t// the ready event fires. See #6781
\treadyWait: 1,

\t// Hold (or release) the ready event
\tholdReady: function( hold ) {
\t\tif ( hold ) {
\t\t\tjQuery.readyWait++;
\t\t} else {
\t\t\tjQuery.ready( true );
\t\t}
\t},

\t// Handle when the DOM is ready
\tready: function( wait ) {

\t\t// Abort if there are pending holds or we're already ready
\t\tif ( wait === true ? --jQuery.readyWait : jQuery.isReady ) {
\t\t\treturn;
\t\t}

\t\t// Make sure body exists, at least, in case IE gets a little overzealous (ticket #5443).
\t\tif ( !document.body ) {
\t\t\treturn setTimeout( jQuery.ready );
\t\t}

\t\t// Remember that the DOM is ready
\t\tjQuery.isReady = true;

\t\t// If a normal DOM Ready event fired, decrement, and wait if need be
\t\tif ( wait !== true && --jQuery.readyWait > 0 ) {
\t\t\treturn;
\t\t}

\t\t// If there are functions bound, to execute
\t\treadyList.resolveWith( document, [ jQuery ] );

\t\t// Trigger any bound ready events
\t\tif ( jQuery.fn.trigger ) {
\t\t\tjQuery( document ).trigger(\"ready\").off(\"ready\");
\t\t}
\t},

\t// See test/unit/core.js for details concerning isFunction.
\t// Since version 1.3, DOM methods and functions like alert
\t// aren't supported. They return false on IE (#2968).
\tisFunction: function( obj ) {
\t\treturn jQuery.type(obj) === \"function\";
\t},

\tisArray: Array.isArray || function( obj ) {
\t\treturn jQuery.type(obj) === \"array\";
\t},

\tisWindow: function( obj ) {
\t\treturn obj != null && obj == obj.window;
\t},

\tisNumeric: function( obj ) {
\t\treturn !isNaN( parseFloat(obj) ) && isFinite( obj );
\t},

\ttype: function( obj ) {
\t\tif ( obj == null ) {
\t\t\treturn String( obj );
\t\t}
\t\treturn typeof obj === \"object\" || typeof obj === \"function\" ?
\t\t\tclass2type[ core_toString.call(obj) ] || \"object\" :
\t\t\ttypeof obj;
\t},

\tisPlainObject: function( obj ) {
\t\t// Must be an Object.
\t\t// Because of IE, we also have to check the presence of the constructor property.
\t\t// Make sure that DOM nodes and window objects don't pass through, as well
\t\tif ( !obj || jQuery.type(obj) !== \"object\" || obj.nodeType || jQuery.isWindow( obj ) ) {
\t\t\treturn false;
\t\t}

\t\ttry {
\t\t\t// Not own constructor property must be Object
\t\t\tif ( obj.constructor &&
\t\t\t\t!core_hasOwn.call(obj, \"constructor\") &&
\t\t\t\t!core_hasOwn.call(obj.constructor.prototype, \"isPrototypeOf\") ) {
\t\t\t\treturn false;
\t\t\t}
\t\t} catch ( e ) {
\t\t\t// IE8,9 Will throw exceptions on certain host objects #9897
\t\t\treturn false;
\t\t}

\t\t// Own properties are enumerated firstly, so to speed up,
\t\t// if last one is own, then all properties are own.

\t\tvar key;
\t\tfor ( key in obj ) {}

\t\treturn key === undefined || core_hasOwn.call( obj, key );
\t},

\tisEmptyObject: function( obj ) {
\t\tvar name;
\t\tfor ( name in obj ) {
\t\t\treturn false;
\t\t}
\t\treturn true;
\t},

\terror: function( msg ) {
\t\tthrow new Error( msg );
\t},

\t// data: string of html
\t// context (optional): If specified, the fragment will be created in this context, defaults to document
\t// keepScripts (optional): If true, will include scripts passed in the html string
\tparseHTML: function( data, context, keepScripts ) {
\t\tif ( !data || typeof data !== \"string\" ) {
\t\t\treturn null;
\t\t}
\t\tif ( typeof context === \"boolean\" ) {
\t\t\tkeepScripts = context;
\t\t\tcontext = false;
\t\t}
\t\tcontext = context || document;

\t\tvar parsed = rsingleTag.exec( data ),
\t\t\tscripts = !keepScripts && [];

\t\t// Single tag
\t\tif ( parsed ) {
\t\t\treturn [ context.createElement( parsed[1] ) ];
\t\t}

\t\tparsed = jQuery.buildFragment( [ data ], context, scripts );
\t\tif ( scripts ) {
\t\t\tjQuery( scripts ).remove();
\t\t}
\t\treturn jQuery.merge( [], parsed.childNodes );
\t},

\tparseJSON: function( data ) {
\t\t// Attempt to parse using the native JSON parser first
\t\tif ( window.JSON && window.JSON.parse ) {
\t\t\treturn window.JSON.parse( data );
\t\t}

\t\tif ( data === null ) {
\t\t\treturn data;
\t\t}

\t\tif ( typeof data === \"string\" ) {

\t\t\t// Make sure leading/trailing whitespace is removed (IE can't handle it)
\t\t\tdata = jQuery.trim( data );

\t\t\tif ( data ) {
\t\t\t\t// Make sure the incoming data is actual JSON
\t\t\t\t// Logic borrowed from http://json.org/json2.js
\t\t\t\tif ( rvalidchars.test( data.replace( rvalidescape, \"@\" )
\t\t\t\t\t.replace( rvalidtokens, \"]\" )
\t\t\t\t\t.replace( rvalidbraces, \"\")) ) {

\t\t\t\t\treturn ( new Function( \"return \" + data ) )();
\t\t\t\t}
\t\t\t}
\t\t}

\t\tjQuery.error( \"Invalid JSON: \" + data );
\t},

\t// Cross-browser xml parsing
\tparseXML: function( data ) {
\t\tvar xml, tmp;
\t\tif ( !data || typeof data !== \"string\" ) {
\t\t\treturn null;
\t\t}
\t\ttry {
\t\t\tif ( window.DOMParser ) { // Standard
\t\t\t\ttmp = new DOMParser();
\t\t\t\txml = tmp.parseFromString( data , \"text/xml\" );
\t\t\t} else { // IE
\t\t\t\txml = new ActiveXObject( \"Microsoft.XMLDOM\" );
\t\t\t\txml.async = \"false\";
\t\t\t\txml.loadXML( data );
\t\t\t}
\t\t} catch( e ) {
\t\t\txml = undefined;
\t\t}
\t\tif ( !xml || !xml.documentElement || xml.getElementsByTagName( \"parsererror\" ).length ) {
\t\t\tjQuery.error( \"Invalid XML: \" + data );
\t\t}
\t\treturn xml;
\t},

\tnoop: function() {},

\t// Evaluates a script in a global context
\t// Workarounds based on findings by Jim Driscoll
\t// http://weblogs.java.net/blog/driscoll/archive/2009/09/08/eval-javascript-global-context
\tglobalEval: function( data ) {
\t\tif ( data && jQuery.trim( data ) ) {
\t\t\t// We use execScript on Internet Explorer
\t\t\t// We use an anonymous function so that context is window
\t\t\t// rather than jQuery in Firefox
\t\t\t( window.execScript || function( data ) {
\t\t\t\twindow[ \"eval\" ].call( window, data );
\t\t\t} )( data );
\t\t}
\t},

\t// Convert dashed to camelCase; used by the css and data modules
\t// Microsoft forgot to hump their vendor prefix (#9572)
\tcamelCase: function( string ) {
\t\treturn string.replace( rmsPrefix, \"ms-\" ).replace( rdashAlpha, fcamelCase );
\t},

\tnodeName: function( elem, name ) {
\t\treturn elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase();
\t},

\t// args is for internal usage only
\teach: function( obj, callback, args ) {
\t\tvar value,
\t\t\ti = 0,
\t\t\tlength = obj.length,
\t\t\tisArray = isArraylike( obj );

\t\tif ( args ) {
\t\t\tif ( isArray ) {
\t\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\t\tvalue = callback.apply( obj[ i ], args );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor ( i in obj ) {
\t\t\t\t\tvalue = callback.apply( obj[ i ], args );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t// A special, fast, case for the most common use of each
\t\t} else {
\t\t\tif ( isArray ) {
\t\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\t\tvalue = callback.call( obj[ i ], i, obj[ i ] );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor ( i in obj ) {
\t\t\t\t\tvalue = callback.call( obj[ i ], i, obj[ i ] );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn obj;
\t},

\t// Use native String.trim function wherever possible
\ttrim: core_trim && !core_trim.call(\"\\uFEFF\\xA0\") ?
\t\tfunction( text ) {
\t\t\treturn text == null ?
\t\t\t\t\"\" :
\t\t\t\tcore_trim.call( text );
\t\t} :

\t\t// Otherwise use our own trimming functionality
\t\tfunction( text ) {
\t\t\treturn text == null ?
\t\t\t\t\"\" :
\t\t\t\t( text + \"\" ).replace( rtrim, \"\" );
\t\t},

\t// results is for internal usage only
\tmakeArray: function( arr, results ) {
\t\tvar ret = results || [];

\t\tif ( arr != null ) {
\t\t\tif ( isArraylike( Object(arr) ) ) {
\t\t\t\tjQuery.merge( ret,
\t\t\t\t\ttypeof arr === \"string\" ?
\t\t\t\t\t[ arr ] : arr
\t\t\t\t);
\t\t\t} else {
\t\t\t\tcore_push.call( ret, arr );
\t\t\t}
\t\t}

\t\treturn ret;
\t},

\tinArray: function( elem, arr, i ) {
\t\tvar len;

\t\tif ( arr ) {
\t\t\tif ( core_indexOf ) {
\t\t\t\treturn core_indexOf.call( arr, elem, i );
\t\t\t}

\t\t\tlen = arr.length;
\t\t\ti = i ? i < 0 ? Math.max( 0, len + i ) : i : 0;

\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\t// Skip accessing in sparse arrays
\t\t\t\tif ( i in arr && arr[ i ] === elem ) {
\t\t\t\t\treturn i;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn -1;
\t},

\tmerge: function( first, second ) {
\t\tvar l = second.length,
\t\t\ti = first.length,
\t\t\tj = 0;

\t\tif ( typeof l === \"number\" ) {
\t\t\tfor ( ; j < l; j++ ) {
\t\t\t\tfirst[ i++ ] = second[ j ];
\t\t\t}
\t\t} else {
\t\t\twhile ( second[j] !== undefined ) {
\t\t\t\tfirst[ i++ ] = second[ j++ ];
\t\t\t}
\t\t}

\t\tfirst.length = i;

\t\treturn first;
\t},

\tgrep: function( elems, callback, inv ) {
\t\tvar retVal,
\t\t\tret = [],
\t\t\ti = 0,
\t\t\tlength = elems.length;
\t\tinv = !!inv;

\t\t// Go through the array, only saving the items
\t\t// that pass the validator function
\t\tfor ( ; i < length; i++ ) {
\t\t\tretVal = !!callback( elems[ i ], i );
\t\t\tif ( inv !== retVal ) {
\t\t\t\tret.push( elems[ i ] );
\t\t\t}
\t\t}

\t\treturn ret;
\t},

\t// arg is for internal usage only
\tmap: function( elems, callback, arg ) {
\t\tvar value,
\t\t\ti = 0,
\t\t\tlength = elems.length,
\t\t\tisArray = isArraylike( elems ),
\t\t\tret = [];

\t\t// Go through the array, translating each of the items to their
\t\tif ( isArray ) {
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tvalue = callback( elems[ i ], i, arg );

\t\t\t\tif ( value != null ) {
\t\t\t\t\tret[ ret.length ] = value;
\t\t\t\t}
\t\t\t}

\t\t// Go through every key on the object,
\t\t} else {
\t\t\tfor ( i in elems ) {
\t\t\t\tvalue = callback( elems[ i ], i, arg );

\t\t\t\tif ( value != null ) {
\t\t\t\t\tret[ ret.length ] = value;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Flatten any nested arrays
\t\treturn core_concat.apply( [], ret );
\t},

\t// A global GUID counter for objects
\tguid: 1,

\t// Bind a function to a context, optionally partially applying any
\t// arguments.
\tproxy: function( fn, context ) {
\t\tvar args, proxy, tmp;

\t\tif ( typeof context === \"string\" ) {
\t\t\ttmp = fn[ context ];
\t\t\tcontext = fn;
\t\t\tfn = tmp;
\t\t}

\t\t// Quick check to determine if target is callable, in the spec
\t\t// this throws a TypeError, but we will just return undefined.
\t\tif ( !jQuery.isFunction( fn ) ) {
\t\t\treturn undefined;
\t\t}

\t\t// Simulated bind
\t\targs = core_slice.call( arguments, 2 );
\t\tproxy = function() {
\t\t\treturn fn.apply( context || this, args.concat( core_slice.call( arguments ) ) );
\t\t};

\t\t// Set the guid of unique handler to the same of original handler, so it can be removed
\t\tproxy.guid = fn.guid = fn.guid || jQuery.guid++;

\t\treturn proxy;
\t},

\t// Multifunctional method to get and set values of a collection
\t// The value/s can optionally be executed if it's a function
\taccess: function( elems, fn, key, value, chainable, emptyGet, raw ) {
\t\tvar i = 0,
\t\t\tlength = elems.length,
\t\t\tbulk = key == null;

\t\t// Sets many values
\t\tif ( jQuery.type( key ) === \"object\" ) {
\t\t\tchainable = true;
\t\t\tfor ( i in key ) {
\t\t\t\tjQuery.access( elems, fn, i, key[i], true, emptyGet, raw );
\t\t\t}

\t\t// Sets one value
\t\t} else if ( value !== undefined ) {
\t\t\tchainable = true;

\t\t\tif ( !jQuery.isFunction( value ) ) {
\t\t\t\traw = true;
\t\t\t}

\t\t\tif ( bulk ) {
\t\t\t\t// Bulk operations run against the entire set
\t\t\t\tif ( raw ) {
\t\t\t\t\tfn.call( elems, value );
\t\t\t\t\tfn = null;

\t\t\t\t// ...except when executing function values
\t\t\t\t} else {
\t\t\t\t\tbulk = fn;
\t\t\t\t\tfn = function( elem, key, value ) {
\t\t\t\t\t\treturn bulk.call( jQuery( elem ), value );
\t\t\t\t\t};
\t\t\t\t}
\t\t\t}

\t\t\tif ( fn ) {
\t\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\t\tfn( elems[i], key, raw ? value : value.call( elems[i], i, fn( elems[i], key ) ) );
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn chainable ?
\t\t\telems :

\t\t\t// Gets
\t\t\tbulk ?
\t\t\t\tfn.call( elems ) :
\t\t\t\tlength ? fn( elems[0], key ) : emptyGet;
\t},

\tnow: function() {
\t\treturn ( new Date() ).getTime();
\t}
});

jQuery.ready.promise = function( obj ) {
\tif ( !readyList ) {

\t\treadyList = jQuery.Deferred();

\t\t// Catch cases where \$(document).ready() is called after the browser event has already occurred.
\t\t// we once tried to use readyState \"interactive\" here, but it caused issues like the one
\t\t// discovered by ChrisS here: http://bugs.jquery.com/ticket/12282#comment:15
\t\tif ( document.readyState === \"complete\" ) {
\t\t\t// Handle it asynchronously to allow scripts the opportunity to delay ready
\t\t\tsetTimeout( jQuery.ready );

\t\t// Standards-based browsers support DOMContentLoaded
\t\t} else if ( document.addEventListener ) {
\t\t\t// Use the handy event callback
\t\t\tdocument.addEventListener( \"DOMContentLoaded\", completed, false );

\t\t\t// A fallback to window.onload, that will always work
\t\t\twindow.addEventListener( \"load\", completed, false );

\t\t// If IE event model is used
\t\t} else {
\t\t\t// Ensure firing before onload, maybe late but safe also for iframes
\t\t\tdocument.attachEvent( \"onreadystatechange\", completed );

\t\t\t// A fallback to window.onload, that will always work
\t\t\twindow.attachEvent( \"onload\", completed );

\t\t\t// If IE and not a frame
\t\t\t// continually check to see if the document is ready
\t\t\tvar top = false;

\t\t\ttry {
\t\t\t\ttop = window.frameElement == null && document.documentElement;
\t\t\t} catch(e) {}

\t\t\tif ( top && top.doScroll ) {
\t\t\t\t(function doScrollCheck() {
\t\t\t\t\tif ( !jQuery.isReady ) {

\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t// Use the trick by Diego Perini
\t\t\t\t\t\t\t// http://javascript.nwbox.com/IEContentLoaded/
\t\t\t\t\t\t\ttop.doScroll(\"left\");
\t\t\t\t\t\t} catch(e) {
\t\t\t\t\t\t\treturn setTimeout( doScrollCheck, 50 );
\t\t\t\t\t\t}

\t\t\t\t\t\t// detach all dom ready events
\t\t\t\t\t\tdetach();

\t\t\t\t\t\t// and execute any waiting functions
\t\t\t\t\t\tjQuery.ready();
\t\t\t\t\t}
\t\t\t\t})();
\t\t\t}
\t\t}
\t}
\treturn readyList.promise( obj );
};

// Populate the class2type map
jQuery.each(\"Boolean Number String Function Array Date RegExp Object Error\".split(\" \"), function(i, name) {
\tclass2type[ \"[object \" + name + \"]\" ] = name.toLowerCase();
});

function isArraylike( obj ) {
\tvar length = obj.length,
\t\ttype = jQuery.type( obj );

\tif ( jQuery.isWindow( obj ) ) {
\t\treturn false;
\t}

\tif ( obj.nodeType === 1 && length ) {
\t\treturn true;
\t}

\treturn type === \"array\" || type !== \"function\" &&
\t\t( length === 0 ||
\t\ttypeof length === \"number\" && length > 0 && ( length - 1 ) in obj );
}

// All jQuery objects should point back to these
rootjQuery = jQuery(document);
// String to Object options format cache
var optionsCache = {};

// Convert String-formatted options into Object-formatted ones and store in cache
function createOptions( options ) {
\tvar object = optionsCache[ options ] = {};
\tjQuery.each( options.match( core_rnotwhite ) || [], function( _, flag ) {
\t\tobject[ flag ] = true;
\t});
\treturn object;
}

/*
 * Create a callback list using the following parameters:
 *
 *\toptions: an optional list of space-separated options that will change how
 *\t\t\tthe callback list behaves or a more traditional option object
 *
 * By default a callback list will act like an event callback list and can be
 * \"fired\" multiple times.
 *
 * Possible options:
 *
 *\tonce:\t\t\twill ensure the callback list can only be fired once (like a Deferred)
 *
 *\tmemory:\t\t\twill keep track of previous values and will call any callback added
 *\t\t\t\t\tafter the list has been fired right away with the latest \"memorized\"
 *\t\t\t\t\tvalues (like a Deferred)
 *
 *\tunique:\t\t\twill ensure a callback can only be added once (no duplicate in the list)
 *
 *\tstopOnFalse:\tinterrupt callings when a callback returns false
 *
 */
jQuery.Callbacks = function( options ) {

\t// Convert options from String-formatted to Object-formatted if needed
\t// (we check in cache first)
\toptions = typeof options === \"string\" ?
\t\t( optionsCache[ options ] || createOptions( options ) ) :
\t\tjQuery.extend( {}, options );

\tvar // Flag to know if list is currently firing
\t\tfiring,
\t\t// Last fire value (for non-forgettable lists)
\t\tmemory,
\t\t// Flag to know if list was already fired
\t\tfired,
\t\t// End of the loop when firing
\t\tfiringLength,
\t\t// Index of currently firing callback (modified by remove if needed)
\t\tfiringIndex,
\t\t// First callback to fire (used internally by add and fireWith)
\t\tfiringStart,
\t\t// Actual callback list
\t\tlist = [],
\t\t// Stack of fire calls for repeatable lists
\t\tstack = !options.once && [],
\t\t// Fire callbacks
\t\tfire = function( data ) {
\t\t\tmemory = options.memory && data;
\t\t\tfired = true;
\t\t\tfiringIndex = firingStart || 0;
\t\t\tfiringStart = 0;
\t\t\tfiringLength = list.length;
\t\t\tfiring = true;
\t\t\tfor ( ; list && firingIndex < firingLength; firingIndex++ ) {
\t\t\t\tif ( list[ firingIndex ].apply( data[ 0 ], data[ 1 ] ) === false && options.stopOnFalse ) {
\t\t\t\t\tmemory = false; // To prevent further calls using add
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\tfiring = false;
\t\t\tif ( list ) {
\t\t\t\tif ( stack ) {
\t\t\t\t\tif ( stack.length ) {
\t\t\t\t\t\tfire( stack.shift() );
\t\t\t\t\t}
\t\t\t\t} else if ( memory ) {
\t\t\t\t\tlist = [];
\t\t\t\t} else {
\t\t\t\t\tself.disable();
\t\t\t\t}
\t\t\t}
\t\t},
\t\t// Actual Callbacks object
\t\tself = {
\t\t\t// Add a callback or a collection of callbacks to the list
\t\t\tadd: function() {
\t\t\t\tif ( list ) {
\t\t\t\t\t// First, we save the current length
\t\t\t\t\tvar start = list.length;
\t\t\t\t\t(function add( args ) {
\t\t\t\t\t\tjQuery.each( args, function( _, arg ) {
\t\t\t\t\t\t\tvar type = jQuery.type( arg );
\t\t\t\t\t\t\tif ( type === \"function\" ) {
\t\t\t\t\t\t\t\tif ( !options.unique || !self.has( arg ) ) {
\t\t\t\t\t\t\t\t\tlist.push( arg );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else if ( arg && arg.length && type !== \"string\" ) {
\t\t\t\t\t\t\t\t// Inspect recursively
\t\t\t\t\t\t\t\tadd( arg );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t})( arguments );
\t\t\t\t\t// Do we need to add the callbacks to the
\t\t\t\t\t// current firing batch?
\t\t\t\t\tif ( firing ) {
\t\t\t\t\t\tfiringLength = list.length;
\t\t\t\t\t// With memory, if we're not firing then
\t\t\t\t\t// we should call right away
\t\t\t\t\t} else if ( memory ) {
\t\t\t\t\t\tfiringStart = start;
\t\t\t\t\t\tfire( memory );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Remove a callback from the list
\t\t\tremove: function() {
\t\t\t\tif ( list ) {
\t\t\t\t\tjQuery.each( arguments, function( _, arg ) {
\t\t\t\t\t\tvar index;
\t\t\t\t\t\twhile( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {
\t\t\t\t\t\t\tlist.splice( index, 1 );
\t\t\t\t\t\t\t// Handle firing indexes
\t\t\t\t\t\t\tif ( firing ) {
\t\t\t\t\t\t\t\tif ( index <= firingLength ) {
\t\t\t\t\t\t\t\t\tfiringLength--;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif ( index <= firingIndex ) {
\t\t\t\t\t\t\t\t\tfiringIndex--;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Check if a given callback is in the list.
\t\t\t// If no argument is given, return whether or not list has callbacks attached.
\t\t\thas: function( fn ) {
\t\t\t\treturn fn ? jQuery.inArray( fn, list ) > -1 : !!( list && list.length );
\t\t\t},
\t\t\t// Remove all callbacks from the list
\t\t\tempty: function() {
\t\t\t\tlist = [];
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Have the list do nothing anymore
\t\t\tdisable: function() {
\t\t\t\tlist = stack = memory = undefined;
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Is it disabled?
\t\t\tdisabled: function() {
\t\t\t\treturn !list;
\t\t\t},
\t\t\t// Lock the list in its current state
\t\t\tlock: function() {
\t\t\t\tstack = undefined;
\t\t\t\tif ( !memory ) {
\t\t\t\t\tself.disable();
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Is it locked?
\t\t\tlocked: function() {
\t\t\t\treturn !stack;
\t\t\t},
\t\t\t// Call all callbacks with the given context and arguments
\t\t\tfireWith: function( context, args ) {
\t\t\t\targs = args || [];
\t\t\t\targs = [ context, args.slice ? args.slice() : args ];
\t\t\t\tif ( list && ( !fired || stack ) ) {
\t\t\t\t\tif ( firing ) {
\t\t\t\t\t\tstack.push( args );
\t\t\t\t\t} else {
\t\t\t\t\t\tfire( args );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Call all the callbacks with the given arguments
\t\t\tfire: function() {
\t\t\t\tself.fireWith( this, arguments );
\t\t\t\treturn this;
\t\t\t},
\t\t\t// To know if the callbacks have already been called at least once
\t\t\tfired: function() {
\t\t\t\treturn !!fired;
\t\t\t}
\t\t};

\treturn self;
};
jQuery.extend({

\tDeferred: function( func ) {
\t\tvar tuples = [
\t\t\t\t// action, add listener, listener list, final state
\t\t\t\t[ \"resolve\", \"done\", jQuery.Callbacks(\"once memory\"), \"resolved\" ],
\t\t\t\t[ \"reject\", \"fail\", jQuery.Callbacks(\"once memory\"), \"rejected\" ],
\t\t\t\t[ \"notify\", \"progress\", jQuery.Callbacks(\"memory\") ]
\t\t\t],
\t\t\tstate = \"pending\",
\t\t\tpromise = {
\t\t\t\tstate: function() {
\t\t\t\t\treturn state;
\t\t\t\t},
\t\t\t\talways: function() {
\t\t\t\t\tdeferred.done( arguments ).fail( arguments );
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tthen: function( /* fnDone, fnFail, fnProgress */ ) {
\t\t\t\t\tvar fns = arguments;
\t\t\t\t\treturn jQuery.Deferred(function( newDefer ) {
\t\t\t\t\t\tjQuery.each( tuples, function( i, tuple ) {
\t\t\t\t\t\t\tvar action = tuple[ 0 ],
\t\t\t\t\t\t\t\tfn = jQuery.isFunction( fns[ i ] ) && fns[ i ];
\t\t\t\t\t\t\t// deferred[ done | fail | progress ] for forwarding actions to newDefer
\t\t\t\t\t\t\tdeferred[ tuple[1] ](function() {
\t\t\t\t\t\t\t\tvar returned = fn && fn.apply( this, arguments );
\t\t\t\t\t\t\t\tif ( returned && jQuery.isFunction( returned.promise ) ) {
\t\t\t\t\t\t\t\t\treturned.promise()
\t\t\t\t\t\t\t\t\t\t.done( newDefer.resolve )
\t\t\t\t\t\t\t\t\t\t.fail( newDefer.reject )
\t\t\t\t\t\t\t\t\t\t.progress( newDefer.notify );
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tnewDefer[ action + \"With\" ]( this === promise ? newDefer.promise() : this, fn ? [ returned ] : arguments );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t\tfns = null;
\t\t\t\t\t}).promise();
\t\t\t\t},
\t\t\t\t// Get a promise for this deferred
\t\t\t\t// If obj is provided, the promise aspect is added to the object
\t\t\t\tpromise: function( obj ) {
\t\t\t\t\treturn obj != null ? jQuery.extend( obj, promise ) : promise;
\t\t\t\t}
\t\t\t},
\t\t\tdeferred = {};

\t\t// Keep pipe for back-compat
\t\tpromise.pipe = promise.then;

\t\t// Add list-specific methods
\t\tjQuery.each( tuples, function( i, tuple ) {
\t\t\tvar list = tuple[ 2 ],
\t\t\t\tstateString = tuple[ 3 ];

\t\t\t// promise[ done | fail | progress ] = list.add
\t\t\tpromise[ tuple[1] ] = list.add;

\t\t\t// Handle state
\t\t\tif ( stateString ) {
\t\t\t\tlist.add(function() {
\t\t\t\t\t// state = [ resolved | rejected ]
\t\t\t\t\tstate = stateString;

\t\t\t\t// [ reject_list | resolve_list ].disable; progress_list.lock
\t\t\t\t}, tuples[ i ^ 1 ][ 2 ].disable, tuples[ 2 ][ 2 ].lock );
\t\t\t}

\t\t\t// deferred[ resolve | reject | notify ]
\t\t\tdeferred[ tuple[0] ] = function() {
\t\t\t\tdeferred[ tuple[0] + \"With\" ]( this === deferred ? promise : this, arguments );
\t\t\t\treturn this;
\t\t\t};
\t\t\tdeferred[ tuple[0] + \"With\" ] = list.fireWith;
\t\t});

\t\t// Make the deferred a promise
\t\tpromise.promise( deferred );

\t\t// Call given func if any
\t\tif ( func ) {
\t\t\tfunc.call( deferred, deferred );
\t\t}

\t\t// All done!
\t\treturn deferred;
\t},

\t// Deferred helper
\twhen: function( subordinate /* , ..., subordinateN */ ) {
\t\tvar i = 0,
\t\t\tresolveValues = core_slice.call( arguments ),
\t\t\tlength = resolveValues.length,

\t\t\t// the count of uncompleted subordinates
\t\t\tremaining = length !== 1 || ( subordinate && jQuery.isFunction( subordinate.promise ) ) ? length : 0,

\t\t\t// the master Deferred. If resolveValues consist of only a single Deferred, just use that.
\t\t\tdeferred = remaining === 1 ? subordinate : jQuery.Deferred(),

\t\t\t// Update function for both resolve and progress values
\t\t\tupdateFunc = function( i, contexts, values ) {
\t\t\t\treturn function( value ) {
\t\t\t\t\tcontexts[ i ] = this;
\t\t\t\t\tvalues[ i ] = arguments.length > 1 ? core_slice.call( arguments ) : value;
\t\t\t\t\tif( values === progressValues ) {
\t\t\t\t\t\tdeferred.notifyWith( contexts, values );
\t\t\t\t\t} else if ( !( --remaining ) ) {
\t\t\t\t\t\tdeferred.resolveWith( contexts, values );
\t\t\t\t\t}
\t\t\t\t};
\t\t\t},

\t\t\tprogressValues, progressContexts, resolveContexts;

\t\t// add listeners to Deferred subordinates; treat others as resolved
\t\tif ( length > 1 ) {
\t\t\tprogressValues = new Array( length );
\t\t\tprogressContexts = new Array( length );
\t\t\tresolveContexts = new Array( length );
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tif ( resolveValues[ i ] && jQuery.isFunction( resolveValues[ i ].promise ) ) {
\t\t\t\t\tresolveValues[ i ].promise()
\t\t\t\t\t\t.done( updateFunc( i, resolveContexts, resolveValues ) )
\t\t\t\t\t\t.fail( deferred.reject )
\t\t\t\t\t\t.progress( updateFunc( i, progressContexts, progressValues ) );
\t\t\t\t} else {
\t\t\t\t\t--remaining;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// if we're not waiting on anything, resolve the master
\t\tif ( !remaining ) {
\t\t\tdeferred.resolveWith( resolveContexts, resolveValues );
\t\t}

\t\treturn deferred.promise();
\t}
});
jQuery.support = (function() {

\tvar support, all, a,
\t\tinput, select, fragment,
\t\topt, eventName, isSupported, i,
\t\tdiv = document.createElement(\"div\");

\t// Setup
\tdiv.setAttribute( \"className\", \"t\" );
\tdiv.innerHTML = \"  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>\";

\t// Support tests won't run in some limited or non-browser environments
\tall = div.getElementsByTagName(\"*\");
\ta = div.getElementsByTagName(\"a\")[ 0 ];
\tif ( !all || !a || !all.length ) {
\t\treturn {};
\t}

\t// First batch of tests
\tselect = document.createElement(\"select\");
\topt = select.appendChild( document.createElement(\"option\") );
\tinput = div.getElementsByTagName(\"input\")[ 0 ];

\ta.style.cssText = \"top:1px;float:left;opacity:.5\";
\tsupport = {
\t\t// Test setAttribute on camelCase class. If it works, we need attrFixes when doing get/setAttribute (ie6/7)
\t\tgetSetAttribute: div.className !== \"t\",

\t\t// IE strips leading whitespace when .innerHTML is used
\t\tleadingWhitespace: div.firstChild.nodeType === 3,

\t\t// Make sure that tbody elements aren't automatically inserted
\t\t// IE will insert them into empty tables
\t\ttbody: !div.getElementsByTagName(\"tbody\").length,

\t\t// Make sure that link elements get serialized correctly by innerHTML
\t\t// This requires a wrapper element in IE
\t\thtmlSerialize: !!div.getElementsByTagName(\"link\").length,

\t\t// Get the style information from getAttribute
\t\t// (IE uses .cssText instead)
\t\tstyle: /top/.test( a.getAttribute(\"style\") ),

\t\t// Make sure that URLs aren't manipulated
\t\t// (IE normalizes it by default)
\t\threfNormalized: a.getAttribute(\"href\") === \"/a\",

\t\t// Make sure that element opacity exists
\t\t// (IE uses filter instead)
\t\t// Use a regex to work around a WebKit issue. See #5145
\t\topacity: /^0.5/.test( a.style.opacity ),

\t\t// Verify style float existence
\t\t// (IE uses styleFloat instead of cssFloat)
\t\tcssFloat: !!a.style.cssFloat,

\t\t// Check the default checkbox/radio value (\"\" on WebKit; \"on\" elsewhere)
\t\tcheckOn: !!input.value,

\t\t// Make sure that a selected-by-default option has a working selected property.
\t\t// (WebKit defaults to false instead of true, IE too, if it's in an optgroup)
\t\toptSelected: opt.selected,

\t\t// Tests for enctype support on a form (#6743)
\t\tenctype: !!document.createElement(\"form\").enctype,

\t\t// Makes sure cloning an html5 element does not cause problems
\t\t// Where outerHTML is undefined, this still works
\t\thtml5Clone: document.createElement(\"nav\").cloneNode( true ).outerHTML !== \"<:nav></:nav>\",

\t\t// jQuery.support.boxModel DEPRECATED in 1.8 since we don't support Quirks Mode
\t\tboxModel: document.compatMode === \"CSS1Compat\",

\t\t// Will be defined later
\t\tdeleteExpando: true,
\t\tnoCloneEvent: true,
\t\tinlineBlockNeedsLayout: false,
\t\tshrinkWrapBlocks: false,
\t\treliableMarginRight: true,
\t\tboxSizingReliable: true,
\t\tpixelPosition: false
\t};

\t// Make sure checked status is properly cloned
\tinput.checked = true;
\tsupport.noCloneChecked = input.cloneNode( true ).checked;

\t// Make sure that the options inside disabled selects aren't marked as disabled
\t// (WebKit marks them as disabled)
\tselect.disabled = true;
\tsupport.optDisabled = !opt.disabled;

\t// Support: IE<9
\ttry {
\t\tdelete div.test;
\t} catch( e ) {
\t\tsupport.deleteExpando = false;
\t}

\t// Check if we can trust getAttribute(\"value\")
\tinput = document.createElement(\"input\");
\tinput.setAttribute( \"value\", \"\" );
\tsupport.input = input.getAttribute( \"value\" ) === \"\";

\t// Check if an input maintains its value after becoming a radio
\tinput.value = \"t\";
\tinput.setAttribute( \"type\", \"radio\" );
\tsupport.radioValue = input.value === \"t\";

\t// #11217 - WebKit loses check when the name is after the checked attribute
\tinput.setAttribute( \"checked\", \"t\" );
\tinput.setAttribute( \"name\", \"t\" );

\tfragment = document.createDocumentFragment();
\tfragment.appendChild( input );

\t// Check if a disconnected checkbox will retain its checked
\t// value of true after appended to the DOM (IE6/7)
\tsupport.appendChecked = input.checked;

\t// WebKit doesn't clone checked state correctly in fragments
\tsupport.checkClone = fragment.cloneNode( true ).cloneNode( true ).lastChild.checked;

\t// Support: IE<9
\t// Opera does not clone events (and typeof div.attachEvent === undefined).
\t// IE9-10 clones events bound via attachEvent, but they don't trigger with .click()
\tif ( div.attachEvent ) {
\t\tdiv.attachEvent( \"onclick\", function() {
\t\t\tsupport.noCloneEvent = false;
\t\t});

\t\tdiv.cloneNode( true ).click();
\t}

\t// Support: IE<9 (lack submit/change bubble), Firefox 17+ (lack focusin event)
\t// Beware of CSP restrictions (https://developer.mozilla.org/en/Security/CSP), test/csp.php
\tfor ( i in { submit: true, change: true, focusin: true }) {
\t\tdiv.setAttribute( eventName = \"on\" + i, \"t\" );

\t\tsupport[ i + \"Bubbles\" ] = eventName in window || div.attributes[ eventName ].expando === false;
\t}

\tdiv.style.backgroundClip = \"content-box\";
\tdiv.cloneNode( true ).style.backgroundClip = \"\";
\tsupport.clearCloneStyle = div.style.backgroundClip === \"content-box\";

\t// Run tests that need a body at doc ready
\tjQuery(function() {
\t\tvar container, marginDiv, tds,
\t\t\tdivReset = \"padding:0;margin:0;border:0;display:block;box-sizing:content-box;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;\",
\t\t\tbody = document.getElementsByTagName(\"body\")[0];

\t\tif ( !body ) {
\t\t\t// Return for frameset docs that don't have a body
\t\t\treturn;
\t\t}

\t\tcontainer = document.createElement(\"div\");
\t\tcontainer.style.cssText = \"border:0;width:0;height:0;position:absolute;top:0;left:-9999px;margin-top:1px\";

\t\tbody.appendChild( container ).appendChild( div );

\t\t// Support: IE8
\t\t// Check if table cells still have offsetWidth/Height when they are set
\t\t// to display:none and there are still other visible table cells in a
\t\t// table row; if so, offsetWidth/Height are not reliable for use when
\t\t// determining if an element has been hidden directly using
\t\t// display:none (it is still safe to use offsets if a parent element is
\t\t// hidden; don safety goggles and see bug #4512 for more information).
\t\tdiv.innerHTML = \"<table><tr><td></td><td>t</td></tr></table>\";
\t\ttds = div.getElementsByTagName(\"td\");
\t\ttds[ 0 ].style.cssText = \"padding:0;margin:0;border:0;display:none\";
\t\tisSupported = ( tds[ 0 ].offsetHeight === 0 );

\t\ttds[ 0 ].style.display = \"\";
\t\ttds[ 1 ].style.display = \"none\";

\t\t// Support: IE8
\t\t// Check if empty table cells still have offsetWidth/Height
\t\tsupport.reliableHiddenOffsets = isSupported && ( tds[ 0 ].offsetHeight === 0 );

\t\t// Check box-sizing and margin behavior
\t\tdiv.innerHTML = \"\";
\t\tdiv.style.cssText = \"box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding:1px;border:1px;display:block;width:4px;margin-top:1%;position:absolute;top:1%;\";
\t\tsupport.boxSizing = ( div.offsetWidth === 4 );
\t\tsupport.doesNotIncludeMarginInBodyOffset = ( body.offsetTop !== 1 );

\t\t// Use window.getComputedStyle because jsdom on node.js will break without it.
\t\tif ( window.getComputedStyle ) {
\t\t\tsupport.pixelPosition = ( window.getComputedStyle( div, null ) || {} ).top !== \"1%\";
\t\t\tsupport.boxSizingReliable = ( window.getComputedStyle( div, null ) || { width: \"4px\" } ).width === \"4px\";

\t\t\t// Check if div with explicit width and no margin-right incorrectly
\t\t\t// gets computed margin-right based on width of container. (#3333)
\t\t\t// Fails in WebKit before Feb 2011 nightlies
\t\t\t// WebKit Bug 13343 - getComputedStyle returns wrong value for margin-right
\t\t\tmarginDiv = div.appendChild( document.createElement(\"div\") );
\t\t\tmarginDiv.style.cssText = div.style.cssText = divReset;
\t\t\tmarginDiv.style.marginRight = marginDiv.style.width = \"0\";
\t\t\tdiv.style.width = \"1px\";

\t\t\tsupport.reliableMarginRight =
\t\t\t\t!parseFloat( ( window.getComputedStyle( marginDiv, null ) || {} ).marginRight );
\t\t}

\t\tif ( typeof div.style.zoom !== core_strundefined ) {
\t\t\t// Support: IE<8
\t\t\t// Check if natively block-level elements act like inline-block
\t\t\t// elements when setting their display to 'inline' and giving
\t\t\t// them layout
\t\t\tdiv.innerHTML = \"\";
\t\t\tdiv.style.cssText = divReset + \"width:1px;padding:1px;display:inline;zoom:1\";
\t\t\tsupport.inlineBlockNeedsLayout = ( div.offsetWidth === 3 );

\t\t\t// Support: IE6
\t\t\t// Check if elements with layout shrink-wrap their children
\t\t\tdiv.style.display = \"block\";
\t\t\tdiv.innerHTML = \"<div></div>\";
\t\t\tdiv.firstChild.style.width = \"5px\";
\t\t\tsupport.shrinkWrapBlocks = ( div.offsetWidth !== 3 );

\t\t\tif ( support.inlineBlockNeedsLayout ) {
\t\t\t\t// Prevent IE 6 from affecting layout for positioned elements #11048
\t\t\t\t// Prevent IE from shrinking the body in IE 7 mode #12869
\t\t\t\t// Support: IE<8
\t\t\t\tbody.style.zoom = 1;
\t\t\t}
\t\t}

\t\tbody.removeChild( container );

\t\t// Null elements to avoid leaks in IE
\t\tcontainer = div = tds = marginDiv = null;
\t});

\t// Null elements to avoid leaks in IE
\tall = select = fragment = opt = a = input = null;

\treturn support;
})();

var rbrace = /(?:\\{[\\s\\S]*\\}|\\[[\\s\\S]*\\])\$/,
\trmultiDash = /([A-Z])/g;

function internalData( elem, name, data, pvt /* Internal Use Only */ ){
\tif ( !jQuery.acceptData( elem ) ) {
\t\treturn;
\t}

\tvar thisCache, ret,
\t\tinternalKey = jQuery.expando,
\t\tgetByName = typeof name === \"string\",

\t\t// We have to handle DOM nodes and JS objects differently because IE6-7
\t\t// can't GC object references properly across the DOM-JS boundary
\t\tisNode = elem.nodeType,

\t\t// Only DOM nodes need the global jQuery cache; JS object data is
\t\t// attached directly to the object so GC can occur automatically
\t\tcache = isNode ? jQuery.cache : elem,

\t\t// Only defining an ID for JS objects if its cache already exists allows
\t\t// the code to shortcut on the same path as a DOM node with no cache
\t\tid = isNode ? elem[ internalKey ] : elem[ internalKey ] && internalKey;

\t// Avoid doing any more work than we need to when trying to get data on an
\t// object that has no data at all
\tif ( (!id || !cache[id] || (!pvt && !cache[id].data)) && getByName && data === undefined ) {
\t\treturn;
\t}

\tif ( !id ) {
\t\t// Only DOM nodes need a new unique ID for each element since their data
\t\t// ends up in the global cache
\t\tif ( isNode ) {
\t\t\telem[ internalKey ] = id = core_deletedIds.pop() || jQuery.guid++;
\t\t} else {
\t\t\tid = internalKey;
\t\t}
\t}

\tif ( !cache[ id ] ) {
\t\tcache[ id ] = {};

\t\t// Avoids exposing jQuery metadata on plain JS objects when the object
\t\t// is serialized using JSON.stringify
\t\tif ( !isNode ) {
\t\t\tcache[ id ].toJSON = jQuery.noop;
\t\t}
\t}

\t// An object can be passed to jQuery.data instead of a key/value pair; this gets
\t// shallow copied over onto the existing cache
\tif ( typeof name === \"object\" || typeof name === \"function\" ) {
\t\tif ( pvt ) {
\t\t\tcache[ id ] = jQuery.extend( cache[ id ], name );
\t\t} else {
\t\t\tcache[ id ].data = jQuery.extend( cache[ id ].data, name );
\t\t}
\t}

\tthisCache = cache[ id ];

\t// jQuery data() is stored in a separate object inside the object's internal data
\t// cache in order to avoid key collisions between internal data and user-defined
\t// data.
\tif ( !pvt ) {
\t\tif ( !thisCache.data ) {
\t\t\tthisCache.data = {};
\t\t}

\t\tthisCache = thisCache.data;
\t}

\tif ( data !== undefined ) {
\t\tthisCache[ jQuery.camelCase( name ) ] = data;
\t}

\t// Check for both converted-to-camel and non-converted data property names
\t// If a data property was specified
\tif ( getByName ) {

\t\t// First Try to find as-is property data
\t\tret = thisCache[ name ];

\t\t// Test for null|undefined property data
\t\tif ( ret == null ) {

\t\t\t// Try to find the camelCased property
\t\t\tret = thisCache[ jQuery.camelCase( name ) ];
\t\t}
\t} else {
\t\tret = thisCache;
\t}

\treturn ret;
}

function internalRemoveData( elem, name, pvt ) {
\tif ( !jQuery.acceptData( elem ) ) {
\t\treturn;
\t}

\tvar i, l, thisCache,
\t\tisNode = elem.nodeType,

\t\t// See jQuery.data for more information
\t\tcache = isNode ? jQuery.cache : elem,
\t\tid = isNode ? elem[ jQuery.expando ] : jQuery.expando;

\t// If there is already no cache entry for this object, there is no
\t// purpose in continuing
\tif ( !cache[ id ] ) {
\t\treturn;
\t}

\tif ( name ) {

\t\tthisCache = pvt ? cache[ id ] : cache[ id ].data;

\t\tif ( thisCache ) {

\t\t\t// Support array or space separated string names for data keys
\t\t\tif ( !jQuery.isArray( name ) ) {

\t\t\t\t// try the string as a key before any manipulation
\t\t\t\tif ( name in thisCache ) {
\t\t\t\t\tname = [ name ];
\t\t\t\t} else {

\t\t\t\t\t// split the camel cased version by spaces unless a key with the spaces exists
\t\t\t\t\tname = jQuery.camelCase( name );
\t\t\t\t\tif ( name in thisCache ) {
\t\t\t\t\t\tname = [ name ];
\t\t\t\t\t} else {
\t\t\t\t\t\tname = name.split(\" \");
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\t// If \"name\" is an array of keys...
\t\t\t\t// When data is initially created, via (\"key\", \"val\") signature,
\t\t\t\t// keys will be converted to camelCase.
\t\t\t\t// Since there is no way to tell _how_ a key was added, remove
\t\t\t\t// both plain key and camelCase key. #12786
\t\t\t\t// This will only penalize the array argument path.
\t\t\t\tname = name.concat( jQuery.map( name, jQuery.camelCase ) );
\t\t\t}

\t\t\tfor ( i = 0, l = name.length; i < l; i++ ) {
\t\t\t\tdelete thisCache[ name[i] ];
\t\t\t}

\t\t\t// If there is no data left in the cache, we want to continue
\t\t\t// and let the cache object itself get destroyed
\t\t\tif ( !( pvt ? isEmptyDataObject : jQuery.isEmptyObject )( thisCache ) ) {
\t\t\t\treturn;
\t\t\t}
\t\t}
\t}

\t// See jQuery.data for more information
\tif ( !pvt ) {
\t\tdelete cache[ id ].data;

\t\t// Don't destroy the parent cache unless the internal data object
\t\t// had been the only thing left in it
\t\tif ( !isEmptyDataObject( cache[ id ] ) ) {
\t\t\treturn;
\t\t}
\t}

\t// Destroy the cache
\tif ( isNode ) {
\t\tjQuery.cleanData( [ elem ], true );

\t// Use delete when supported for expandos or `cache` is not a window per isWindow (#10080)
\t} else if ( jQuery.support.deleteExpando || cache != cache.window ) {
\t\tdelete cache[ id ];

\t// When all else fails, null
\t} else {
\t\tcache[ id ] = null;
\t}
}

jQuery.extend({
\tcache: {},

\t// Unique for each copy of jQuery on the page
\t// Non-digits removed to match rinlinejQuery
\texpando: \"jQuery\" + ( core_version + Math.random() ).replace( /\\D/g, \"\" ),

\t// The following elements throw uncatchable exceptions if you
\t// attempt to add expando properties to them.
\tnoData: {
\t\t\"embed\": true,
\t\t// Ban all objects except for Flash (which handle expandos)
\t\t\"object\": \"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\",
\t\t\"applet\": true
\t},

\thasData: function( elem ) {
\t\telem = elem.nodeType ? jQuery.cache[ elem[jQuery.expando] ] : elem[ jQuery.expando ];
\t\treturn !!elem && !isEmptyDataObject( elem );
\t},

\tdata: function( elem, name, data ) {
\t\treturn internalData( elem, name, data );
\t},

\tremoveData: function( elem, name ) {
\t\treturn internalRemoveData( elem, name );
\t},

\t// For internal use only.
\t_data: function( elem, name, data ) {
\t\treturn internalData( elem, name, data, true );
\t},

\t_removeData: function( elem, name ) {
\t\treturn internalRemoveData( elem, name, true );
\t},

\t// A method for determining if a DOM node can handle the data expando
\tacceptData: function( elem ) {
\t\t// Do not set data on non-element because it will not be cleared (#8335).
\t\tif ( elem.nodeType && elem.nodeType !== 1 && elem.nodeType !== 9 ) {
\t\t\treturn false;
\t\t}

\t\tvar noData = elem.nodeName && jQuery.noData[ elem.nodeName.toLowerCase() ];

\t\t// nodes accept data unless otherwise specified; rejection can be conditional
\t\treturn !noData || noData !== true && elem.getAttribute(\"classid\") === noData;
\t}
});

jQuery.fn.extend({
\tdata: function( key, value ) {
\t\tvar attrs, name,
\t\t\telem = this[0],
\t\t\ti = 0,
\t\t\tdata = null;

\t\t// Gets all values
\t\tif ( key === undefined ) {
\t\t\tif ( this.length ) {
\t\t\t\tdata = jQuery.data( elem );

\t\t\t\tif ( elem.nodeType === 1 && !jQuery._data( elem, \"parsedAttrs\" ) ) {
\t\t\t\t\tattrs = elem.attributes;
\t\t\t\t\tfor ( ; i < attrs.length; i++ ) {
\t\t\t\t\t\tname = attrs[i].name;

\t\t\t\t\t\tif ( !name.indexOf( \"data-\" ) ) {
\t\t\t\t\t\t\tname = jQuery.camelCase( name.slice(5) );

\t\t\t\t\t\t\tdataAttr( elem, name, data[ name ] );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tjQuery._data( elem, \"parsedAttrs\", true );
\t\t\t\t}
\t\t\t}

\t\t\treturn data;
\t\t}

\t\t// Sets multiple values
\t\tif ( typeof key === \"object\" ) {
\t\t\treturn this.each(function() {
\t\t\t\tjQuery.data( this, key );
\t\t\t});
\t\t}

\t\treturn jQuery.access( this, function( value ) {

\t\t\tif ( value === undefined ) {
\t\t\t\t// Try to fetch any internally stored data first
\t\t\t\treturn elem ? dataAttr( elem, key, jQuery.data( elem, key ) ) : null;
\t\t\t}

\t\t\tthis.each(function() {
\t\t\t\tjQuery.data( this, key, value );
\t\t\t});
\t\t}, null, value, arguments.length > 1, null, true );
\t},

\tremoveData: function( key ) {
\t\treturn this.each(function() {
\t\t\tjQuery.removeData( this, key );
\t\t});
\t}
});

function dataAttr( elem, key, data ) {
\t// If nothing was found internally, try to fetch any
\t// data from the HTML5 data-* attribute
\tif ( data === undefined && elem.nodeType === 1 ) {

\t\tvar name = \"data-\" + key.replace( rmultiDash, \"-\$1\" ).toLowerCase();

\t\tdata = elem.getAttribute( name );

\t\tif ( typeof data === \"string\" ) {
\t\t\ttry {
\t\t\t\tdata = data === \"true\" ? true :
\t\t\t\t\tdata === \"false\" ? false :
\t\t\t\t\tdata === \"null\" ? null :
\t\t\t\t\t// Only convert to a number if it doesn't change the string
\t\t\t\t\t+data + \"\" === data ? +data :
\t\t\t\t\trbrace.test( data ) ? jQuery.parseJSON( data ) :
\t\t\t\t\t\tdata;
\t\t\t} catch( e ) {}

\t\t\t// Make sure we set the data so it isn't changed later
\t\t\tjQuery.data( elem, key, data );

\t\t} else {
\t\t\tdata = undefined;
\t\t}
\t}

\treturn data;
}

// checks a cache object for emptiness
function isEmptyDataObject( obj ) {
\tvar name;
\tfor ( name in obj ) {

\t\t// if the public data object is empty, the private is still empty
\t\tif ( name === \"data\" && jQuery.isEmptyObject( obj[name] ) ) {
\t\t\tcontinue;
\t\t}
\t\tif ( name !== \"toJSON\" ) {
\t\t\treturn false;
\t\t}
\t}

\treturn true;
}
jQuery.extend({
\tqueue: function( elem, type, data ) {
\t\tvar queue;

\t\tif ( elem ) {
\t\t\ttype = ( type || \"fx\" ) + \"queue\";
\t\t\tqueue = jQuery._data( elem, type );

\t\t\t// Speed up dequeue by getting out quickly if this is just a lookup
\t\t\tif ( data ) {
\t\t\t\tif ( !queue || jQuery.isArray(data) ) {
\t\t\t\t\tqueue = jQuery._data( elem, type, jQuery.makeArray(data) );
\t\t\t\t} else {
\t\t\t\t\tqueue.push( data );
\t\t\t\t}
\t\t\t}
\t\t\treturn queue || [];
\t\t}
\t},

\tdequeue: function( elem, type ) {
\t\ttype = type || \"fx\";

\t\tvar queue = jQuery.queue( elem, type ),
\t\t\tstartLength = queue.length,
\t\t\tfn = queue.shift(),
\t\t\thooks = jQuery._queueHooks( elem, type ),
\t\t\tnext = function() {
\t\t\t\tjQuery.dequeue( elem, type );
\t\t\t};

\t\t// If the fx queue is dequeued, always remove the progress sentinel
\t\tif ( fn === \"inprogress\" ) {
\t\t\tfn = queue.shift();
\t\t\tstartLength--;
\t\t}

\t\thooks.cur = fn;
\t\tif ( fn ) {

\t\t\t// Add a progress sentinel to prevent the fx queue from being
\t\t\t// automatically dequeued
\t\t\tif ( type === \"fx\" ) {
\t\t\t\tqueue.unshift( \"inprogress\" );
\t\t\t}

\t\t\t// clear up the last queue stop function
\t\t\tdelete hooks.stop;
\t\t\tfn.call( elem, next, hooks );
\t\t}

\t\tif ( !startLength && hooks ) {
\t\t\thooks.empty.fire();
\t\t}
\t},

\t// not intended for public consumption - generates a queueHooks object, or returns the current one
\t_queueHooks: function( elem, type ) {
\t\tvar key = type + \"queueHooks\";
\t\treturn jQuery._data( elem, key ) || jQuery._data( elem, key, {
\t\t\tempty: jQuery.Callbacks(\"once memory\").add(function() {
\t\t\t\tjQuery._removeData( elem, type + \"queue\" );
\t\t\t\tjQuery._removeData( elem, key );
\t\t\t})
\t\t});
\t}
});

jQuery.fn.extend({
\tqueue: function( type, data ) {
\t\tvar setter = 2;

\t\tif ( typeof type !== \"string\" ) {
\t\t\tdata = type;
\t\t\ttype = \"fx\";
\t\t\tsetter--;
\t\t}

\t\tif ( arguments.length < setter ) {
\t\t\treturn jQuery.queue( this[0], type );
\t\t}

\t\treturn data === undefined ?
\t\t\tthis :
\t\t\tthis.each(function() {
\t\t\t\tvar queue = jQuery.queue( this, type, data );

\t\t\t\t// ensure a hooks for this queue
\t\t\t\tjQuery._queueHooks( this, type );

\t\t\t\tif ( type === \"fx\" && queue[0] !== \"inprogress\" ) {
\t\t\t\t\tjQuery.dequeue( this, type );
\t\t\t\t}
\t\t\t});
\t},
\tdequeue: function( type ) {
\t\treturn this.each(function() {
\t\t\tjQuery.dequeue( this, type );
\t\t});
\t},
\t// Based off of the plugin by Clint Helfers, with permission.
\t// http://blindsignals.com/index.php/2009/07/jquery-delay/
\tdelay: function( time, type ) {
\t\ttime = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
\t\ttype = type || \"fx\";

\t\treturn this.queue( type, function( next, hooks ) {
\t\t\tvar timeout = setTimeout( next, time );
\t\t\thooks.stop = function() {
\t\t\t\tclearTimeout( timeout );
\t\t\t};
\t\t});
\t},
\tclearQueue: function( type ) {
\t\treturn this.queue( type || \"fx\", [] );
\t},
\t// Get a promise resolved when queues of a certain type
\t// are emptied (fx is the type by default)
\tpromise: function( type, obj ) {
\t\tvar tmp,
\t\t\tcount = 1,
\t\t\tdefer = jQuery.Deferred(),
\t\t\telements = this,
\t\t\ti = this.length,
\t\t\tresolve = function() {
\t\t\t\tif ( !( --count ) ) {
\t\t\t\t\tdefer.resolveWith( elements, [ elements ] );
\t\t\t\t}
\t\t\t};

\t\tif ( typeof type !== \"string\" ) {
\t\t\tobj = type;
\t\t\ttype = undefined;
\t\t}
\t\ttype = type || \"fx\";

\t\twhile( i-- ) {
\t\t\ttmp = jQuery._data( elements[ i ], type + \"queueHooks\" );
\t\t\tif ( tmp && tmp.empty ) {
\t\t\t\tcount++;
\t\t\t\ttmp.empty.add( resolve );
\t\t\t}
\t\t}
\t\tresolve();
\t\treturn defer.promise( obj );
\t}
});
var nodeHook, boolHook,
\trclass = /[\\t\\r\\n]/g,
\trreturn = /\\r/g,
\trfocusable = /^(?:input|select|textarea|button|object)\$/i,
\trclickable = /^(?:a|area)\$/i,
\trboolean = /^(?:checked|selected|autofocus|autoplay|async|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped)\$/i,
\truseDefault = /^(?:checked|selected)\$/i,
\tgetSetAttribute = jQuery.support.getSetAttribute,
\tgetSetInput = jQuery.support.input;

jQuery.fn.extend({
\tattr: function( name, value ) {
\t\treturn jQuery.access( this, jQuery.attr, name, value, arguments.length > 1 );
\t},

\tremoveAttr: function( name ) {
\t\treturn this.each(function() {
\t\t\tjQuery.removeAttr( this, name );
\t\t});
\t},

\tprop: function( name, value ) {
\t\treturn jQuery.access( this, jQuery.prop, name, value, arguments.length > 1 );
\t},

\tremoveProp: function( name ) {
\t\tname = jQuery.propFix[ name ] || name;
\t\treturn this.each(function() {
\t\t\t// try/catch handles cases where IE balks (such as removing a property on window)
\t\t\ttry {
\t\t\t\tthis[ name ] = undefined;
\t\t\t\tdelete this[ name ];
\t\t\t} catch( e ) {}
\t\t});
\t},

\taddClass: function( value ) {
\t\tvar classes, elem, cur, clazz, j,
\t\t\ti = 0,
\t\t\tlen = this.length,
\t\t\tproceed = typeof value === \"string\" && value;

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each(function( j ) {
\t\t\t\tjQuery( this ).addClass( value.call( this, j, this.className ) );
\t\t\t});
\t\t}

\t\tif ( proceed ) {
\t\t\t// The disjunction here is for better compressibility (see removeClass)
\t\t\tclasses = ( value || \"\" ).match( core_rnotwhite ) || [];

\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\telem = this[ i ];
\t\t\t\tcur = elem.nodeType === 1 && ( elem.className ?
\t\t\t\t\t( \" \" + elem.className + \" \" ).replace( rclass, \" \" ) :
\t\t\t\t\t\" \"
\t\t\t\t);

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( (clazz = classes[j++]) ) {
\t\t\t\t\t\tif ( cur.indexOf( \" \" + clazz + \" \" ) < 0 ) {
\t\t\t\t\t\t\tcur += clazz + \" \";
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\telem.className = jQuery.trim( cur );

\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tremoveClass: function( value ) {
\t\tvar classes, elem, cur, clazz, j,
\t\t\ti = 0,
\t\t\tlen = this.length,
\t\t\tproceed = arguments.length === 0 || typeof value === \"string\" && value;

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each(function( j ) {
\t\t\t\tjQuery( this ).removeClass( value.call( this, j, this.className ) );
\t\t\t});
\t\t}
\t\tif ( proceed ) {
\t\t\tclasses = ( value || \"\" ).match( core_rnotwhite ) || [];

\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\telem = this[ i ];
\t\t\t\t// This expression is here for better compressibility (see addClass)
\t\t\t\tcur = elem.nodeType === 1 && ( elem.className ?
\t\t\t\t\t( \" \" + elem.className + \" \" ).replace( rclass, \" \" ) :
\t\t\t\t\t\"\"
\t\t\t\t);

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( (clazz = classes[j++]) ) {
\t\t\t\t\t\t// Remove *all* instances
\t\t\t\t\t\twhile ( cur.indexOf( \" \" + clazz + \" \" ) >= 0 ) {
\t\t\t\t\t\t\tcur = cur.replace( \" \" + clazz + \" \", \" \" );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\telem.className = value ? jQuery.trim( cur ) : \"\";
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\ttoggleClass: function( value, stateVal ) {
\t\tvar type = typeof value,
\t\t\tisBool = typeof stateVal === \"boolean\";

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each(function( i ) {
\t\t\t\tjQuery( this ).toggleClass( value.call(this, i, this.className, stateVal), stateVal );
\t\t\t});
\t\t}

\t\treturn this.each(function() {
\t\t\tif ( type === \"string\" ) {
\t\t\t\t// toggle individual class names
\t\t\t\tvar className,
\t\t\t\t\ti = 0,
\t\t\t\t\tself = jQuery( this ),
\t\t\t\t\tstate = stateVal,
\t\t\t\t\tclassNames = value.match( core_rnotwhite ) || [];

\t\t\t\twhile ( (className = classNames[ i++ ]) ) {
\t\t\t\t\t// check each className given, space separated list
\t\t\t\t\tstate = isBool ? state : !self.hasClass( className );
\t\t\t\t\tself[ state ? \"addClass\" : \"removeClass\" ]( className );
\t\t\t\t}

\t\t\t// Toggle whole class name
\t\t\t} else if ( type === core_strundefined || type === \"boolean\" ) {
\t\t\t\tif ( this.className ) {
\t\t\t\t\t// store className if set
\t\t\t\t\tjQuery._data( this, \"__className__\", this.className );
\t\t\t\t}

\t\t\t\t// If the element has a class name or if we're passed \"false\",
\t\t\t\t// then remove the whole classname (if there was one, the above saved it).
\t\t\t\t// Otherwise bring back whatever was previously saved (if anything),
\t\t\t\t// falling back to the empty string if nothing was stored.
\t\t\t\tthis.className = this.className || value === false ? \"\" : jQuery._data( this, \"__className__\" ) || \"\";
\t\t\t}
\t\t});
\t},

\thasClass: function( selector ) {
\t\tvar className = \" \" + selector + \" \",
\t\t\ti = 0,
\t\t\tl = this.length;
\t\tfor ( ; i < l; i++ ) {
\t\t\tif ( this[i].nodeType === 1 && (\" \" + this[i].className + \" \").replace(rclass, \" \").indexOf( className ) >= 0 ) {
\t\t\t\treturn true;
\t\t\t}
\t\t}

\t\treturn false;
\t},

\tval: function( value ) {
\t\tvar ret, hooks, isFunction,
\t\t\telem = this[0];

\t\tif ( !arguments.length ) {
\t\t\tif ( elem ) {
\t\t\t\thooks = jQuery.valHooks[ elem.type ] || jQuery.valHooks[ elem.nodeName.toLowerCase() ];

\t\t\t\tif ( hooks && \"get\" in hooks && (ret = hooks.get( elem, \"value\" )) !== undefined ) {
\t\t\t\t\treturn ret;
\t\t\t\t}

\t\t\t\tret = elem.value;

\t\t\t\treturn typeof ret === \"string\" ?
\t\t\t\t\t// handle most common string cases
\t\t\t\t\tret.replace(rreturn, \"\") :
\t\t\t\t\t// handle cases where value is null/undef or number
\t\t\t\t\tret == null ? \"\" : ret;
\t\t\t}

\t\t\treturn;
\t\t}

\t\tisFunction = jQuery.isFunction( value );

\t\treturn this.each(function( i ) {
\t\t\tvar val,
\t\t\t\tself = jQuery(this);

\t\t\tif ( this.nodeType !== 1 ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( isFunction ) {
\t\t\t\tval = value.call( this, i, self.val() );
\t\t\t} else {
\t\t\t\tval = value;
\t\t\t}

\t\t\t// Treat null/undefined as \"\"; convert numbers to string
\t\t\tif ( val == null ) {
\t\t\t\tval = \"\";
\t\t\t} else if ( typeof val === \"number\" ) {
\t\t\t\tval += \"\";
\t\t\t} else if ( jQuery.isArray( val ) ) {
\t\t\t\tval = jQuery.map(val, function ( value ) {
\t\t\t\t\treturn value == null ? \"\" : value + \"\";
\t\t\t\t});
\t\t\t}

\t\t\thooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

\t\t\t// If set returns undefined, fall back to normal setting
\t\t\tif ( !hooks || !(\"set\" in hooks) || hooks.set( this, val, \"value\" ) === undefined ) {
\t\t\t\tthis.value = val;
\t\t\t}
\t\t});
\t}
});

jQuery.extend({
\tvalHooks: {
\t\toption: {
\t\t\tget: function( elem ) {
\t\t\t\t// attributes.value is undefined in Blackberry 4.7 but
\t\t\t\t// uses .value. See #6932
\t\t\t\tvar val = elem.attributes.value;
\t\t\t\treturn !val || val.specified ? elem.value : elem.text;
\t\t\t}
\t\t},
\t\tselect: {
\t\t\tget: function( elem ) {
\t\t\t\tvar value, option,
\t\t\t\t\toptions = elem.options,
\t\t\t\t\tindex = elem.selectedIndex,
\t\t\t\t\tone = elem.type === \"select-one\" || index < 0,
\t\t\t\t\tvalues = one ? null : [],
\t\t\t\t\tmax = one ? index + 1 : options.length,
\t\t\t\t\ti = index < 0 ?
\t\t\t\t\t\tmax :
\t\t\t\t\t\tone ? index : 0;

\t\t\t\t// Loop through all the selected options
\t\t\t\tfor ( ; i < max; i++ ) {
\t\t\t\t\toption = options[ i ];

\t\t\t\t\t// oldIE doesn't update selected after form reset (#2551)
\t\t\t\t\tif ( ( option.selected || i === index ) &&
\t\t\t\t\t\t\t// Don't return options that are disabled or in a disabled optgroup
\t\t\t\t\t\t\t( jQuery.support.optDisabled ? !option.disabled : option.getAttribute(\"disabled\") === null ) &&
\t\t\t\t\t\t\t( !option.parentNode.disabled || !jQuery.nodeName( option.parentNode, \"optgroup\" ) ) ) {

\t\t\t\t\t\t// Get the specific value for the option
\t\t\t\t\t\tvalue = jQuery( option ).val();

\t\t\t\t\t\t// We don't need an array for one selects
\t\t\t\t\t\tif ( one ) {
\t\t\t\t\t\t\treturn value;
\t\t\t\t\t\t}

\t\t\t\t\t\t// Multi-Selects return an array
\t\t\t\t\t\tvalues.push( value );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn values;
\t\t\t},

\t\t\tset: function( elem, value ) {
\t\t\t\tvar values = jQuery.makeArray( value );

\t\t\t\tjQuery(elem).find(\"option\").each(function() {
\t\t\t\t\tthis.selected = jQuery.inArray( jQuery(this).val(), values ) >= 0;
\t\t\t\t});

\t\t\t\tif ( !values.length ) {
\t\t\t\t\telem.selectedIndex = -1;
\t\t\t\t}
\t\t\t\treturn values;
\t\t\t}
\t\t}
\t},

\tattr: function( elem, name, value ) {
\t\tvar hooks, notxml, ret,
\t\t\tnType = elem.nodeType;

\t\t// don't get/set attributes on text, comment and attribute nodes
\t\tif ( !elem || nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\t// Fallback to prop when attributes are not supported
\t\tif ( typeof elem.getAttribute === core_strundefined ) {
\t\t\treturn jQuery.prop( elem, name, value );
\t\t}

\t\tnotxml = nType !== 1 || !jQuery.isXMLDoc( elem );

\t\t// All attributes are lowercase
\t\t// Grab necessary hook if one is defined
\t\tif ( notxml ) {
\t\t\tname = name.toLowerCase();
\t\t\thooks = jQuery.attrHooks[ name ] || ( rboolean.test( name ) ? boolHook : nodeHook );
\t\t}

\t\tif ( value !== undefined ) {

\t\t\tif ( value === null ) {
\t\t\t\tjQuery.removeAttr( elem, name );

\t\t\t} else if ( hooks && notxml && \"set\" in hooks && (ret = hooks.set( elem, value, name )) !== undefined ) {
\t\t\t\treturn ret;

\t\t\t} else {
\t\t\t\telem.setAttribute( name, value + \"\" );
\t\t\t\treturn value;
\t\t\t}

\t\t} else if ( hooks && notxml && \"get\" in hooks && (ret = hooks.get( elem, name )) !== null ) {
\t\t\treturn ret;

\t\t} else {

\t\t\t// In IE9+, Flash objects don't have .getAttribute (#12945)
\t\t\t// Support: IE9+
\t\t\tif ( typeof elem.getAttribute !== core_strundefined ) {
\t\t\t\tret =  elem.getAttribute( name );
\t\t\t}

\t\t\t// Non-existent attributes return null, we normalize to undefined
\t\t\treturn ret == null ?
\t\t\t\tundefined :
\t\t\t\tret;
\t\t}
\t},

\tremoveAttr: function( elem, value ) {
\t\tvar name, propName,
\t\t\ti = 0,
\t\t\tattrNames = value && value.match( core_rnotwhite );

\t\tif ( attrNames && elem.nodeType === 1 ) {
\t\t\twhile ( (name = attrNames[i++]) ) {
\t\t\t\tpropName = jQuery.propFix[ name ] || name;

\t\t\t\t// Boolean attributes get special treatment (#10870)
\t\t\t\tif ( rboolean.test( name ) ) {
\t\t\t\t\t// Set corresponding property to false for boolean attributes
\t\t\t\t\t// Also clear defaultChecked/defaultSelected (if appropriate) for IE<8
\t\t\t\t\tif ( !getSetAttribute && ruseDefault.test( name ) ) {
\t\t\t\t\t\telem[ jQuery.camelCase( \"default-\" + name ) ] =
\t\t\t\t\t\t\telem[ propName ] = false;
\t\t\t\t\t} else {
\t\t\t\t\t\telem[ propName ] = false;
\t\t\t\t\t}

\t\t\t\t// See #9699 for explanation of this approach (setting first, then removal)
\t\t\t\t} else {
\t\t\t\t\tjQuery.attr( elem, name, \"\" );
\t\t\t\t}

\t\t\t\telem.removeAttribute( getSetAttribute ? name : propName );
\t\t\t}
\t\t}
\t},

\tattrHooks: {
\t\ttype: {
\t\t\tset: function( elem, value ) {
\t\t\t\tif ( !jQuery.support.radioValue && value === \"radio\" && jQuery.nodeName(elem, \"input\") ) {
\t\t\t\t\t// Setting the type on a radio button after the value resets the value in IE6-9
\t\t\t\t\t// Reset value to default in case type is set after value during creation
\t\t\t\t\tvar val = elem.value;
\t\t\t\t\telem.setAttribute( \"type\", value );
\t\t\t\t\tif ( val ) {
\t\t\t\t\t\telem.value = val;
\t\t\t\t\t}
\t\t\t\t\treturn value;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\tpropFix: {
\t\ttabindex: \"tabIndex\",
\t\treadonly: \"readOnly\",
\t\t\"for\": \"htmlFor\",
\t\t\"class\": \"className\",
\t\tmaxlength: \"maxLength\",
\t\tcellspacing: \"cellSpacing\",
\t\tcellpadding: \"cellPadding\",
\t\trowspan: \"rowSpan\",
\t\tcolspan: \"colSpan\",
\t\tusemap: \"useMap\",
\t\tframeborder: \"frameBorder\",
\t\tcontenteditable: \"contentEditable\"
\t},

\tprop: function( elem, name, value ) {
\t\tvar ret, hooks, notxml,
\t\t\tnType = elem.nodeType;

\t\t// don't get/set properties on text, comment and attribute nodes
\t\tif ( !elem || nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\tnotxml = nType !== 1 || !jQuery.isXMLDoc( elem );

\t\tif ( notxml ) {
\t\t\t// Fix name and attach hooks
\t\t\tname = jQuery.propFix[ name ] || name;
\t\t\thooks = jQuery.propHooks[ name ];
\t\t}

\t\tif ( value !== undefined ) {
\t\t\tif ( hooks && \"set\" in hooks && (ret = hooks.set( elem, value, name )) !== undefined ) {
\t\t\t\treturn ret;

\t\t\t} else {
\t\t\t\treturn ( elem[ name ] = value );
\t\t\t}

\t\t} else {
\t\t\tif ( hooks && \"get\" in hooks && (ret = hooks.get( elem, name )) !== null ) {
\t\t\t\treturn ret;

\t\t\t} else {
\t\t\t\treturn elem[ name ];
\t\t\t}
\t\t}
\t},

\tpropHooks: {
\t\ttabIndex: {
\t\t\tget: function( elem ) {
\t\t\t\t// elem.tabIndex doesn't always return the correct value when it hasn't been explicitly set
\t\t\t\t// http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/
\t\t\t\tvar attributeNode = elem.getAttributeNode(\"tabindex\");

\t\t\t\treturn attributeNode && attributeNode.specified ?
\t\t\t\t\tparseInt( attributeNode.value, 10 ) :
\t\t\t\t\trfocusable.test( elem.nodeName ) || rclickable.test( elem.nodeName ) && elem.href ?
\t\t\t\t\t\t0 :
\t\t\t\t\t\tundefined;
\t\t\t}
\t\t}
\t}
});

// Hook for boolean attributes
boolHook = {
\tget: function( elem, name ) {
\t\tvar
\t\t\t// Use .prop to determine if this attribute is understood as boolean
\t\t\tprop = jQuery.prop( elem, name ),

\t\t\t// Fetch it accordingly
\t\t\tattr = typeof prop === \"boolean\" && elem.getAttribute( name ),
\t\t\tdetail = typeof prop === \"boolean\" ?

\t\t\t\tgetSetInput && getSetAttribute ?
\t\t\t\t\tattr != null :
\t\t\t\t\t// oldIE fabricates an empty string for missing boolean attributes
\t\t\t\t\t// and conflates checked/selected into attroperties
\t\t\t\t\truseDefault.test( name ) ?
\t\t\t\t\t\telem[ jQuery.camelCase( \"default-\" + name ) ] :
\t\t\t\t\t\t!!attr :

\t\t\t\t// fetch an attribute node for properties not recognized as boolean
\t\t\t\telem.getAttributeNode( name );

\t\treturn detail && detail.value !== false ?
\t\t\tname.toLowerCase() :
\t\t\tundefined;
\t},
\tset: function( elem, value, name ) {
\t\tif ( value === false ) {
\t\t\t// Remove boolean attributes when set to false
\t\t\tjQuery.removeAttr( elem, name );
\t\t} else if ( getSetInput && getSetAttribute || !ruseDefault.test( name ) ) {
\t\t\t// IE<8 needs the *property* name
\t\t\telem.setAttribute( !getSetAttribute && jQuery.propFix[ name ] || name, name );

\t\t// Use defaultChecked and defaultSelected for oldIE
\t\t} else {
\t\t\telem[ jQuery.camelCase( \"default-\" + name ) ] = elem[ name ] = true;
\t\t}

\t\treturn name;
\t}
};

// fix oldIE value attroperty
if ( !getSetInput || !getSetAttribute ) {
\tjQuery.attrHooks.value = {
\t\tget: function( elem, name ) {
\t\t\tvar ret = elem.getAttributeNode( name );
\t\t\treturn jQuery.nodeName( elem, \"input\" ) ?

\t\t\t\t// Ignore the value *property* by using defaultValue
\t\t\t\telem.defaultValue :

\t\t\t\tret && ret.specified ? ret.value : undefined;
\t\t},
\t\tset: function( elem, value, name ) {
\t\t\tif ( jQuery.nodeName( elem, \"input\" ) ) {
\t\t\t\t// Does not return so that setAttribute is also used
\t\t\t\telem.defaultValue = value;
\t\t\t} else {
\t\t\t\t// Use nodeHook if defined (#1954); otherwise setAttribute is fine
\t\t\t\treturn nodeHook && nodeHook.set( elem, value, name );
\t\t\t}
\t\t}
\t};
}

// IE6/7 do not support getting/setting some attributes with get/setAttribute
if ( !getSetAttribute ) {

\t// Use this for any attribute in IE6/7
\t// This fixes almost every IE6/7 issue
\tnodeHook = jQuery.valHooks.button = {
\t\tget: function( elem, name ) {
\t\t\tvar ret = elem.getAttributeNode( name );
\t\t\treturn ret && ( name === \"id\" || name === \"name\" || name === \"coords\" ? ret.value !== \"\" : ret.specified ) ?
\t\t\t\tret.value :
\t\t\t\tundefined;
\t\t},
\t\tset: function( elem, value, name ) {
\t\t\t// Set the existing or create a new attribute node
\t\t\tvar ret = elem.getAttributeNode( name );
\t\t\tif ( !ret ) {
\t\t\t\telem.setAttributeNode(
\t\t\t\t\t(ret = elem.ownerDocument.createAttribute( name ))
\t\t\t\t);
\t\t\t}

\t\t\tret.value = value += \"\";

\t\t\t// Break association with cloned elements by also using setAttribute (#9646)
\t\t\treturn name === \"value\" || value === elem.getAttribute( name ) ?
\t\t\t\tvalue :
\t\t\t\tundefined;
\t\t}
\t};

\t// Set contenteditable to false on removals(#10429)
\t// Setting to empty string throws an error as an invalid value
\tjQuery.attrHooks.contenteditable = {
\t\tget: nodeHook.get,
\t\tset: function( elem, value, name ) {
\t\t\tnodeHook.set( elem, value === \"\" ? false : value, name );
\t\t}
\t};

\t// Set width and height to auto instead of 0 on empty string( Bug #8150 )
\t// This is for removals
\tjQuery.each([ \"width\", \"height\" ], function( i, name ) {
\t\tjQuery.attrHooks[ name ] = jQuery.extend( jQuery.attrHooks[ name ], {
\t\t\tset: function( elem, value ) {
\t\t\t\tif ( value === \"\" ) {
\t\t\t\t\telem.setAttribute( name, \"auto\" );
\t\t\t\t\treturn value;
\t\t\t\t}
\t\t\t}
\t\t});
\t});
}


// Some attributes require a special call on IE
// http://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx
if ( !jQuery.support.hrefNormalized ) {
\tjQuery.each([ \"href\", \"src\", \"width\", \"height\" ], function( i, name ) {
\t\tjQuery.attrHooks[ name ] = jQuery.extend( jQuery.attrHooks[ name ], {
\t\t\tget: function( elem ) {
\t\t\t\tvar ret = elem.getAttribute( name, 2 );
\t\t\t\treturn ret == null ? undefined : ret;
\t\t\t}
\t\t});
\t});

\t// href/src property should get the full normalized URL (#10299/#12915)
\tjQuery.each([ \"href\", \"src\" ], function( i, name ) {
\t\tjQuery.propHooks[ name ] = {
\t\t\tget: function( elem ) {
\t\t\t\treturn elem.getAttribute( name, 4 );
\t\t\t}
\t\t};
\t});
}

if ( !jQuery.support.style ) {
\tjQuery.attrHooks.style = {
\t\tget: function( elem ) {
\t\t\t// Return undefined in the case of empty string
\t\t\t// Note: IE uppercases css property names, but if we were to .toLowerCase()
\t\t\t// .cssText, that would destroy case senstitivity in URL's, like in \"background\"
\t\t\treturn elem.style.cssText || undefined;
\t\t},
\t\tset: function( elem, value ) {
\t\t\treturn ( elem.style.cssText = value + \"\" );
\t\t}
\t};
}

// Safari mis-reports the default selected property of an option
// Accessing the parent's selectedIndex property fixes it
if ( !jQuery.support.optSelected ) {
\tjQuery.propHooks.selected = jQuery.extend( jQuery.propHooks.selected, {
\t\tget: function( elem ) {
\t\t\tvar parent = elem.parentNode;

\t\t\tif ( parent ) {
\t\t\t\tparent.selectedIndex;

\t\t\t\t// Make sure that it also works with optgroups, see #5701
\t\t\t\tif ( parent.parentNode ) {
\t\t\t\t\tparent.parentNode.selectedIndex;
\t\t\t\t}
\t\t\t}
\t\t\treturn null;
\t\t}
\t});
}

// IE6/7 call enctype encoding
if ( !jQuery.support.enctype ) {
\tjQuery.propFix.enctype = \"encoding\";
}

// Radios and checkboxes getter/setter
if ( !jQuery.support.checkOn ) {
\tjQuery.each([ \"radio\", \"checkbox\" ], function() {
\t\tjQuery.valHooks[ this ] = {
\t\t\tget: function( elem ) {
\t\t\t\t// Handle the case where in Webkit \"\" is returned instead of \"on\" if a value isn't specified
\t\t\t\treturn elem.getAttribute(\"value\") === null ? \"on\" : elem.value;
\t\t\t}
\t\t};
\t});
}
jQuery.each([ \"radio\", \"checkbox\" ], function() {
\tjQuery.valHooks[ this ] = jQuery.extend( jQuery.valHooks[ this ], {
\t\tset: function( elem, value ) {
\t\t\tif ( jQuery.isArray( value ) ) {
\t\t\t\treturn ( elem.checked = jQuery.inArray( jQuery(elem).val(), value ) >= 0 );
\t\t\t}
\t\t}
\t});
});
var rformElems = /^(?:input|select|textarea)\$/i,
\trkeyEvent = /^key/,
\trmouseEvent = /^(?:mouse|contextmenu)|click/,
\trfocusMorph = /^(?:focusinfocus|focusoutblur)\$/,
\trtypenamespace = /^([^.]*)(?:\\.(.+)|)\$/;

function returnTrue() {
\treturn true;
}

function returnFalse() {
\treturn false;
}

/*
 * Helper functions for managing events -- not part of the public interface.
 * Props to Dean Edwards' addEvent library for many of the ideas.
 */
jQuery.event = {

\tglobal: {},

\tadd: function( elem, types, handler, data, selector ) {
\t\tvar tmp, events, t, handleObjIn,
\t\t\tspecial, eventHandle, handleObj,
\t\t\thandlers, type, namespaces, origType,
\t\t\telemData = jQuery._data( elem );

\t\t// Don't attach events to noData or text/comment nodes (but allow plain objects)
\t\tif ( !elemData ) {
\t\t\treturn;
\t\t}

\t\t// Caller can pass in an object of custom data in lieu of the handler
\t\tif ( handler.handler ) {
\t\t\thandleObjIn = handler;
\t\t\thandler = handleObjIn.handler;
\t\t\tselector = handleObjIn.selector;
\t\t}

\t\t// Make sure that the handler has a unique ID, used to find/remove it later
\t\tif ( !handler.guid ) {
\t\t\thandler.guid = jQuery.guid++;
\t\t}

\t\t// Init the element's event structure and main handler, if this is the first
\t\tif ( !(events = elemData.events) ) {
\t\t\tevents = elemData.events = {};
\t\t}
\t\tif ( !(eventHandle = elemData.handle) ) {
\t\t\teventHandle = elemData.handle = function( e ) {
\t\t\t\t// Discard the second event of a jQuery.event.trigger() and
\t\t\t\t// when an event is called after a page has unloaded
\t\t\t\treturn typeof jQuery !== core_strundefined && (!e || jQuery.event.triggered !== e.type) ?
\t\t\t\t\tjQuery.event.dispatch.apply( eventHandle.elem, arguments ) :
\t\t\t\t\tundefined;
\t\t\t};
\t\t\t// Add elem as a property of the handle fn to prevent a memory leak with IE non-native events
\t\t\teventHandle.elem = elem;
\t\t}

\t\t// Handle multiple events separated by a space
\t\t// jQuery(...).bind(\"mouseover mouseout\", fn);
\t\ttypes = ( types || \"\" ).match( core_rnotwhite ) || [\"\"];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[t] ) || [];
\t\t\ttype = origType = tmp[1];
\t\t\tnamespaces = ( tmp[2] || \"\" ).split( \".\" ).sort();

\t\t\t// If event changes its type, use the special event handlers for the changed type
\t\t\tspecial = jQuery.event.special[ type ] || {};

\t\t\t// If selector defined, determine special event api type, otherwise given type
\t\t\ttype = ( selector ? special.delegateType : special.bindType ) || type;

\t\t\t// Update special based on newly reset type
\t\t\tspecial = jQuery.event.special[ type ] || {};

\t\t\t// handleObj is passed to all event handlers
\t\t\thandleObj = jQuery.extend({
\t\t\t\ttype: type,
\t\t\t\torigType: origType,
\t\t\t\tdata: data,
\t\t\t\thandler: handler,
\t\t\t\tguid: handler.guid,
\t\t\t\tselector: selector,
\t\t\t\tneedsContext: selector && jQuery.expr.match.needsContext.test( selector ),
\t\t\t\tnamespace: namespaces.join(\".\")
\t\t\t}, handleObjIn );

\t\t\t// Init the event handler queue if we're the first
\t\t\tif ( !(handlers = events[ type ]) ) {
\t\t\t\thandlers = events[ type ] = [];
\t\t\t\thandlers.delegateCount = 0;

\t\t\t\t// Only use addEventListener/attachEvent if the special events handler returns false
\t\t\t\tif ( !special.setup || special.setup.call( elem, data, namespaces, eventHandle ) === false ) {
\t\t\t\t\t// Bind the global event handler to the element
\t\t\t\t\tif ( elem.addEventListener ) {
\t\t\t\t\t\telem.addEventListener( type, eventHandle, false );

\t\t\t\t\t} else if ( elem.attachEvent ) {
\t\t\t\t\t\telem.attachEvent( \"on\" + type, eventHandle );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tif ( special.add ) {
\t\t\t\tspecial.add.call( elem, handleObj );

\t\t\t\tif ( !handleObj.handler.guid ) {
\t\t\t\t\thandleObj.handler.guid = handler.guid;
\t\t\t\t}
\t\t\t}

\t\t\t// Add to the element's handler list, delegates in front
\t\t\tif ( selector ) {
\t\t\t\thandlers.splice( handlers.delegateCount++, 0, handleObj );
\t\t\t} else {
\t\t\t\thandlers.push( handleObj );
\t\t\t}

\t\t\t// Keep track of which events have ever been used, for event optimization
\t\t\tjQuery.event.global[ type ] = true;
\t\t}

\t\t// Nullify elem to prevent memory leaks in IE
\t\telem = null;
\t},

\t// Detach an event or set of events from an element
\tremove: function( elem, types, handler, selector, mappedTypes ) {
\t\tvar j, handleObj, tmp,
\t\t\torigCount, t, events,
\t\t\tspecial, handlers, type,
\t\t\tnamespaces, origType,
\t\t\telemData = jQuery.hasData( elem ) && jQuery._data( elem );

\t\tif ( !elemData || !(events = elemData.events) ) {
\t\t\treturn;
\t\t}

\t\t// Once for each type.namespace in types; type may be omitted
\t\ttypes = ( types || \"\" ).match( core_rnotwhite ) || [\"\"];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[t] ) || [];
\t\t\ttype = origType = tmp[1];
\t\t\tnamespaces = ( tmp[2] || \"\" ).split( \".\" ).sort();

\t\t\t// Unbind all events (on this namespace, if provided) for the element
\t\t\tif ( !type ) {
\t\t\t\tfor ( type in events ) {
\t\t\t\t\tjQuery.event.remove( elem, type + types[ t ], handler, selector, true );
\t\t\t\t}
\t\t\t\tcontinue;
\t\t\t}

\t\t\tspecial = jQuery.event.special[ type ] || {};
\t\t\ttype = ( selector ? special.delegateType : special.bindType ) || type;
\t\t\thandlers = events[ type ] || [];
\t\t\ttmp = tmp[2] && new RegExp( \"(^|\\\\.)\" + namespaces.join(\"\\\\.(?:.*\\\\.|)\") + \"(\\\\.|\$)\" );

\t\t\t// Remove matching events
\t\t\torigCount = j = handlers.length;
\t\t\twhile ( j-- ) {
\t\t\t\thandleObj = handlers[ j ];

\t\t\t\tif ( ( mappedTypes || origType === handleObj.origType ) &&
\t\t\t\t\t( !handler || handler.guid === handleObj.guid ) &&
\t\t\t\t\t( !tmp || tmp.test( handleObj.namespace ) ) &&
\t\t\t\t\t( !selector || selector === handleObj.selector || selector === \"**\" && handleObj.selector ) ) {
\t\t\t\t\thandlers.splice( j, 1 );

\t\t\t\t\tif ( handleObj.selector ) {
\t\t\t\t\t\thandlers.delegateCount--;
\t\t\t\t\t}
\t\t\t\t\tif ( special.remove ) {
\t\t\t\t\t\tspecial.remove.call( elem, handleObj );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Remove generic event handler if we removed something and no more handlers exist
\t\t\t// (avoids potential for endless recursion during removal of special event handlers)
\t\t\tif ( origCount && !handlers.length ) {
\t\t\t\tif ( !special.teardown || special.teardown.call( elem, namespaces, elemData.handle ) === false ) {
\t\t\t\t\tjQuery.removeEvent( elem, type, elemData.handle );
\t\t\t\t}

\t\t\t\tdelete events[ type ];
\t\t\t}
\t\t}

\t\t// Remove the expando if it's no longer used
\t\tif ( jQuery.isEmptyObject( events ) ) {
\t\t\tdelete elemData.handle;

\t\t\t// removeData also checks for emptiness and clears the expando if empty
\t\t\t// so use it instead of delete
\t\t\tjQuery._removeData( elem, \"events\" );
\t\t}
\t},

\ttrigger: function( event, data, elem, onlyHandlers ) {
\t\tvar handle, ontype, cur,
\t\t\tbubbleType, special, tmp, i,
\t\t\teventPath = [ elem || document ],
\t\t\ttype = core_hasOwn.call( event, \"type\" ) ? event.type : event,
\t\t\tnamespaces = core_hasOwn.call( event, \"namespace\" ) ? event.namespace.split(\".\") : [];

\t\tcur = tmp = elem = elem || document;

\t\t// Don't do events on text and comment nodes
\t\tif ( elem.nodeType === 3 || elem.nodeType === 8 ) {
\t\t\treturn;
\t\t}

\t\t// focus/blur morphs to focusin/out; ensure we're not firing them right now
\t\tif ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
\t\t\treturn;
\t\t}

\t\tif ( type.indexOf(\".\") >= 0 ) {
\t\t\t// Namespaced trigger; create a regexp to match event type in handle()
\t\t\tnamespaces = type.split(\".\");
\t\t\ttype = namespaces.shift();
\t\t\tnamespaces.sort();
\t\t}
\t\tontype = type.indexOf(\":\") < 0 && \"on\" + type;

\t\t// Caller can pass in a jQuery.Event object, Object, or just an event type string
\t\tevent = event[ jQuery.expando ] ?
\t\t\tevent :
\t\t\tnew jQuery.Event( type, typeof event === \"object\" && event );

\t\tevent.isTrigger = true;
\t\tevent.namespace = namespaces.join(\".\");
\t\tevent.namespace_re = event.namespace ?
\t\t\tnew RegExp( \"(^|\\\\.)\" + namespaces.join(\"\\\\.(?:.*\\\\.|)\") + \"(\\\\.|\$)\" ) :
\t\t\tnull;

\t\t// Clean up the event in case it is being reused
\t\tevent.result = undefined;
\t\tif ( !event.target ) {
\t\t\tevent.target = elem;
\t\t}

\t\t// Clone any incoming data and prepend the event, creating the handler arg list
\t\tdata = data == null ?
\t\t\t[ event ] :
\t\t\tjQuery.makeArray( data, [ event ] );

\t\t// Allow special events to draw outside the lines
\t\tspecial = jQuery.event.special[ type ] || {};
\t\tif ( !onlyHandlers && special.trigger && special.trigger.apply( elem, data ) === false ) {
\t\t\treturn;
\t\t}

\t\t// Determine event propagation path in advance, per W3C events spec (#9951)
\t\t// Bubble up to document, then to window; watch for a global ownerDocument var (#9724)
\t\tif ( !onlyHandlers && !special.noBubble && !jQuery.isWindow( elem ) ) {

\t\t\tbubbleType = special.delegateType || type;
\t\t\tif ( !rfocusMorph.test( bubbleType + type ) ) {
\t\t\t\tcur = cur.parentNode;
\t\t\t}
\t\t\tfor ( ; cur; cur = cur.parentNode ) {
\t\t\t\teventPath.push( cur );
\t\t\t\ttmp = cur;
\t\t\t}

\t\t\t// Only add window if we got to document (e.g., not plain obj or detached DOM)
\t\t\tif ( tmp === (elem.ownerDocument || document) ) {
\t\t\t\teventPath.push( tmp.defaultView || tmp.parentWindow || window );
\t\t\t}
\t\t}

\t\t// Fire handlers on the event path
\t\ti = 0;
\t\twhile ( (cur = eventPath[i++]) && !event.isPropagationStopped() ) {

\t\t\tevent.type = i > 1 ?
\t\t\t\tbubbleType :
\t\t\t\tspecial.bindType || type;

\t\t\t// jQuery handler
\t\t\thandle = ( jQuery._data( cur, \"events\" ) || {} )[ event.type ] && jQuery._data( cur, \"handle\" );
\t\t\tif ( handle ) {
\t\t\t\thandle.apply( cur, data );
\t\t\t}

\t\t\t// Native handler
\t\t\thandle = ontype && cur[ ontype ];
\t\t\tif ( handle && jQuery.acceptData( cur ) && handle.apply && handle.apply( cur, data ) === false ) {
\t\t\t\tevent.preventDefault();
\t\t\t}
\t\t}
\t\tevent.type = type;

\t\t// If nobody prevented the default action, do it now
\t\tif ( !onlyHandlers && !event.isDefaultPrevented() ) {

\t\t\tif ( (!special._default || special._default.apply( elem.ownerDocument, data ) === false) &&
\t\t\t\t!(type === \"click\" && jQuery.nodeName( elem, \"a\" )) && jQuery.acceptData( elem ) ) {

\t\t\t\t// Call a native DOM method on the target with the same name name as the event.
\t\t\t\t// Can't use an .isFunction() check here because IE6/7 fails that test.
\t\t\t\t// Don't do default actions on window, that's where global variables be (#6170)
\t\t\t\tif ( ontype && elem[ type ] && !jQuery.isWindow( elem ) ) {

\t\t\t\t\t// Don't re-trigger an onFOO event when we call its FOO() method
\t\t\t\t\ttmp = elem[ ontype ];

\t\t\t\t\tif ( tmp ) {
\t\t\t\t\t\telem[ ontype ] = null;
\t\t\t\t\t}

\t\t\t\t\t// Prevent re-triggering of the same event, since we already bubbled it above
\t\t\t\t\tjQuery.event.triggered = type;
\t\t\t\t\ttry {
\t\t\t\t\t\telem[ type ]();
\t\t\t\t\t} catch ( e ) {
\t\t\t\t\t\t// IE<9 dies on focus/blur to hidden element (#1486,#12518)
\t\t\t\t\t\t// only reproducible on winXP IE8 native, not IE9 in IE8 mode
\t\t\t\t\t}
\t\t\t\t\tjQuery.event.triggered = undefined;

\t\t\t\t\tif ( tmp ) {
\t\t\t\t\t\telem[ ontype ] = tmp;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn event.result;
\t},

\tdispatch: function( event ) {

\t\t// Make a writable jQuery.Event from the native event object
\t\tevent = jQuery.event.fix( event );

\t\tvar i, ret, handleObj, matched, j,
\t\t\thandlerQueue = [],
\t\t\targs = core_slice.call( arguments ),
\t\t\thandlers = ( jQuery._data( this, \"events\" ) || {} )[ event.type ] || [],
\t\t\tspecial = jQuery.event.special[ event.type ] || {};

\t\t// Use the fix-ed jQuery.Event rather than the (read-only) native event
\t\targs[0] = event;
\t\tevent.delegateTarget = this;

\t\t// Call the preDispatch hook for the mapped type, and let it bail if desired
\t\tif ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
\t\t\treturn;
\t\t}

\t\t// Determine handlers
\t\thandlerQueue = jQuery.event.handlers.call( this, event, handlers );

\t\t// Run delegates first; they may want to stop propagation beneath us
\t\ti = 0;
\t\twhile ( (matched = handlerQueue[ i++ ]) && !event.isPropagationStopped() ) {
\t\t\tevent.currentTarget = matched.elem;

\t\t\tj = 0;
\t\t\twhile ( (handleObj = matched.handlers[ j++ ]) && !event.isImmediatePropagationStopped() ) {

\t\t\t\t// Triggered event must either 1) have no namespace, or
\t\t\t\t// 2) have namespace(s) a subset or equal to those in the bound event (both can have no namespace).
\t\t\t\tif ( !event.namespace_re || event.namespace_re.test( handleObj.namespace ) ) {

\t\t\t\t\tevent.handleObj = handleObj;
\t\t\t\t\tevent.data = handleObj.data;

\t\t\t\t\tret = ( (jQuery.event.special[ handleObj.origType ] || {}).handle || handleObj.handler )
\t\t\t\t\t\t\t.apply( matched.elem, args );

\t\t\t\t\tif ( ret !== undefined ) {
\t\t\t\t\t\tif ( (event.result = ret) === false ) {
\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\tevent.stopPropagation();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Call the postDispatch hook for the mapped type
\t\tif ( special.postDispatch ) {
\t\t\tspecial.postDispatch.call( this, event );
\t\t}

\t\treturn event.result;
\t},

\thandlers: function( event, handlers ) {
\t\tvar sel, handleObj, matches, i,
\t\t\thandlerQueue = [],
\t\t\tdelegateCount = handlers.delegateCount,
\t\t\tcur = event.target;

\t\t// Find delegate handlers
\t\t// Black-hole SVG <use> instance trees (#13180)
\t\t// Avoid non-left-click bubbling in Firefox (#3861)
\t\tif ( delegateCount && cur.nodeType && (!event.button || event.type !== \"click\") ) {

\t\t\tfor ( ; cur != this; cur = cur.parentNode || this ) {

\t\t\t\t// Don't check non-elements (#13208)
\t\t\t\t// Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)
\t\t\t\tif ( cur.nodeType === 1 && (cur.disabled !== true || event.type !== \"click\") ) {
\t\t\t\t\tmatches = [];
\t\t\t\t\tfor ( i = 0; i < delegateCount; i++ ) {
\t\t\t\t\t\thandleObj = handlers[ i ];

\t\t\t\t\t\t// Don't conflict with Object.prototype properties (#13203)
\t\t\t\t\t\tsel = handleObj.selector + \" \";

\t\t\t\t\t\tif ( matches[ sel ] === undefined ) {
\t\t\t\t\t\t\tmatches[ sel ] = handleObj.needsContext ?
\t\t\t\t\t\t\t\tjQuery( sel, this ).index( cur ) >= 0 :
\t\t\t\t\t\t\t\tjQuery.find( sel, this, null, [ cur ] ).length;
\t\t\t\t\t\t}
\t\t\t\t\t\tif ( matches[ sel ] ) {
\t\t\t\t\t\t\tmatches.push( handleObj );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( matches.length ) {
\t\t\t\t\t\thandlerQueue.push({ elem: cur, handlers: matches });
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Add the remaining (directly-bound) handlers
\t\tif ( delegateCount < handlers.length ) {
\t\t\thandlerQueue.push({ elem: this, handlers: handlers.slice( delegateCount ) });
\t\t}

\t\treturn handlerQueue;
\t},

\tfix: function( event ) {
\t\tif ( event[ jQuery.expando ] ) {
\t\t\treturn event;
\t\t}

\t\t// Create a writable copy of the event object and normalize some properties
\t\tvar i, prop, copy,
\t\t\ttype = event.type,
\t\t\toriginalEvent = event,
\t\t\tfixHook = this.fixHooks[ type ];

\t\tif ( !fixHook ) {
\t\t\tthis.fixHooks[ type ] = fixHook =
\t\t\t\trmouseEvent.test( type ) ? this.mouseHooks :
\t\t\t\trkeyEvent.test( type ) ? this.keyHooks :
\t\t\t\t{};
\t\t}
\t\tcopy = fixHook.props ? this.props.concat( fixHook.props ) : this.props;

\t\tevent = new jQuery.Event( originalEvent );

\t\ti = copy.length;
\t\twhile ( i-- ) {
\t\t\tprop = copy[ i ];
\t\t\tevent[ prop ] = originalEvent[ prop ];
\t\t}

\t\t// Support: IE<9
\t\t// Fix target property (#1925)
\t\tif ( !event.target ) {
\t\t\tevent.target = originalEvent.srcElement || document;
\t\t}

\t\t// Support: Chrome 23+, Safari?
\t\t// Target should not be a text node (#504, #13143)
\t\tif ( event.target.nodeType === 3 ) {
\t\t\tevent.target = event.target.parentNode;
\t\t}

\t\t// Support: IE<9
\t\t// For mouse/key events, metaKey==false if it's undefined (#3368, #11328)
\t\tevent.metaKey = !!event.metaKey;

\t\treturn fixHook.filter ? fixHook.filter( event, originalEvent ) : event;
\t},

\t// Includes some event props shared by KeyEvent and MouseEvent
\tprops: \"altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which\".split(\" \"),

\tfixHooks: {},

\tkeyHooks: {
\t\tprops: \"char charCode key keyCode\".split(\" \"),
\t\tfilter: function( event, original ) {

\t\t\t// Add which for key events
\t\t\tif ( event.which == null ) {
\t\t\t\tevent.which = original.charCode != null ? original.charCode : original.keyCode;
\t\t\t}

\t\t\treturn event;
\t\t}
\t},

\tmouseHooks: {
\t\tprops: \"button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement\".split(\" \"),
\t\tfilter: function( event, original ) {
\t\t\tvar body, eventDoc, doc,
\t\t\t\tbutton = original.button,
\t\t\t\tfromElement = original.fromElement;

\t\t\t// Calculate pageX/Y if missing and clientX/Y available
\t\t\tif ( event.pageX == null && original.clientX != null ) {
\t\t\t\teventDoc = event.target.ownerDocument || document;
\t\t\t\tdoc = eventDoc.documentElement;
\t\t\t\tbody = eventDoc.body;

\t\t\t\tevent.pageX = original.clientX + ( doc && doc.scrollLeft || body && body.scrollLeft || 0 ) - ( doc && doc.clientLeft || body && body.clientLeft || 0 );
\t\t\t\tevent.pageY = original.clientY + ( doc && doc.scrollTop  || body && body.scrollTop  || 0 ) - ( doc && doc.clientTop  || body && body.clientTop  || 0 );
\t\t\t}

\t\t\t// Add relatedTarget, if necessary
\t\t\tif ( !event.relatedTarget && fromElement ) {
\t\t\t\tevent.relatedTarget = fromElement === event.target ? original.toElement : fromElement;
\t\t\t}

\t\t\t// Add which for click: 1 === left; 2 === middle; 3 === right
\t\t\t// Note: button is not normalized, so don't use it
\t\t\tif ( !event.which && button !== undefined ) {
\t\t\t\tevent.which = ( button & 1 ? 1 : ( button & 2 ? 3 : ( button & 4 ? 2 : 0 ) ) );
\t\t\t}

\t\t\treturn event;
\t\t}
\t},

\tspecial: {
\t\tload: {
\t\t\t// Prevent triggered image.load events from bubbling to window.load
\t\t\tnoBubble: true
\t\t},
\t\tclick: {
\t\t\t// For checkbox, fire native event so checked state will be right
\t\t\ttrigger: function() {
\t\t\t\tif ( jQuery.nodeName( this, \"input\" ) && this.type === \"checkbox\" && this.click ) {
\t\t\t\t\tthis.click();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t},
\t\tfocus: {
\t\t\t// Fire native event if possible so blur/focus sequence is correct
\t\t\ttrigger: function() {
\t\t\t\tif ( this !== document.activeElement && this.focus ) {
\t\t\t\t\ttry {
\t\t\t\t\t\tthis.focus();
\t\t\t\t\t\treturn false;
\t\t\t\t\t} catch ( e ) {
\t\t\t\t\t\t// Support: IE<9
\t\t\t\t\t\t// If we error on focus to hidden element (#1486, #12518),
\t\t\t\t\t\t// let .trigger() run the handlers
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\tdelegateType: \"focusin\"
\t\t},
\t\tblur: {
\t\t\ttrigger: function() {
\t\t\t\tif ( this === document.activeElement && this.blur ) {
\t\t\t\t\tthis.blur();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t},
\t\t\tdelegateType: \"focusout\"
\t\t},

\t\tbeforeunload: {
\t\t\tpostDispatch: function( event ) {

\t\t\t\t// Even when returnValue equals to undefined Firefox will still show alert
\t\t\t\tif ( event.result !== undefined ) {
\t\t\t\t\tevent.originalEvent.returnValue = event.result;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\tsimulate: function( type, elem, event, bubble ) {
\t\t// Piggyback on a donor event to simulate a different one.
\t\t// Fake originalEvent to avoid donor's stopPropagation, but if the
\t\t// simulated event prevents default then we do the same on the donor.
\t\tvar e = jQuery.extend(
\t\t\tnew jQuery.Event(),
\t\t\tevent,
\t\t\t{ type: type,
\t\t\t\tisSimulated: true,
\t\t\t\toriginalEvent: {}
\t\t\t}
\t\t);
\t\tif ( bubble ) {
\t\t\tjQuery.event.trigger( e, null, elem );
\t\t} else {
\t\t\tjQuery.event.dispatch.call( elem, e );
\t\t}
\t\tif ( e.isDefaultPrevented() ) {
\t\t\tevent.preventDefault();
\t\t}
\t}
};

jQuery.removeEvent = document.removeEventListener ?
\tfunction( elem, type, handle ) {
\t\tif ( elem.removeEventListener ) {
\t\t\telem.removeEventListener( type, handle, false );
\t\t}
\t} :
\tfunction( elem, type, handle ) {
\t\tvar name = \"on\" + type;

\t\tif ( elem.detachEvent ) {

\t\t\t// #8545, #7054, preventing memory leaks for custom events in IE6-8
\t\t\t// detachEvent needed property on element, by name of that event, to properly expose it to GC
\t\t\tif ( typeof elem[ name ] === core_strundefined ) {
\t\t\t\telem[ name ] = null;
\t\t\t}

\t\t\telem.detachEvent( name, handle );
\t\t}
\t};

jQuery.Event = function( src, props ) {
\t// Allow instantiation without the 'new' keyword
\tif ( !(this instanceof jQuery.Event) ) {
\t\treturn new jQuery.Event( src, props );
\t}

\t// Event object
\tif ( src && src.type ) {
\t\tthis.originalEvent = src;
\t\tthis.type = src.type;

\t\t// Events bubbling up the document may have been marked as prevented
\t\t// by a handler lower down the tree; reflect the correct value.
\t\tthis.isDefaultPrevented = ( src.defaultPrevented || src.returnValue === false ||
\t\t\tsrc.getPreventDefault && src.getPreventDefault() ) ? returnTrue : returnFalse;

\t// Event type
\t} else {
\t\tthis.type = src;
\t}

\t// Put explicitly provided properties onto the event object
\tif ( props ) {
\t\tjQuery.extend( this, props );
\t}

\t// Create a timestamp if incoming event doesn't have one
\tthis.timeStamp = src && src.timeStamp || jQuery.now();

\t// Mark it as fixed
\tthis[ jQuery.expando ] = true;
};

// jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding
// http://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
jQuery.Event.prototype = {
\tisDefaultPrevented: returnFalse,
\tisPropagationStopped: returnFalse,
\tisImmediatePropagationStopped: returnFalse,

\tpreventDefault: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isDefaultPrevented = returnTrue;
\t\tif ( !e ) {
\t\t\treturn;
\t\t}

\t\t// If preventDefault exists, run it on the original event
\t\tif ( e.preventDefault ) {
\t\t\te.preventDefault();

\t\t// Support: IE
\t\t// Otherwise set the returnValue property of the original event to false
\t\t} else {
\t\t\te.returnValue = false;
\t\t}
\t},
\tstopPropagation: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isPropagationStopped = returnTrue;
\t\tif ( !e ) {
\t\t\treturn;
\t\t}
\t\t// If stopPropagation exists, run it on the original event
\t\tif ( e.stopPropagation ) {
\t\t\te.stopPropagation();
\t\t}

\t\t// Support: IE
\t\t// Set the cancelBubble property of the original event to true
\t\te.cancelBubble = true;
\t},
\tstopImmediatePropagation: function() {
\t\tthis.isImmediatePropagationStopped = returnTrue;
\t\tthis.stopPropagation();
\t}
};

// Create mouseenter/leave events using mouseover/out and event-time checks
jQuery.each({
\tmouseenter: \"mouseover\",
\tmouseleave: \"mouseout\"
}, function( orig, fix ) {
\tjQuery.event.special[ orig ] = {
\t\tdelegateType: fix,
\t\tbindType: fix,

\t\thandle: function( event ) {
\t\t\tvar ret,
\t\t\t\ttarget = this,
\t\t\t\trelated = event.relatedTarget,
\t\t\t\thandleObj = event.handleObj;

\t\t\t// For mousenter/leave call the handler if related is outside the target.
\t\t\t// NB: No relatedTarget if the mouse left/entered the browser window
\t\t\tif ( !related || (related !== target && !jQuery.contains( target, related )) ) {
\t\t\t\tevent.type = handleObj.origType;
\t\t\t\tret = handleObj.handler.apply( this, arguments );
\t\t\t\tevent.type = fix;
\t\t\t}
\t\t\treturn ret;
\t\t}
\t};
});

// IE submit delegation
if ( !jQuery.support.submitBubbles ) {

\tjQuery.event.special.submit = {
\t\tsetup: function() {
\t\t\t// Only need this for delegated form submit events
\t\t\tif ( jQuery.nodeName( this, \"form\" ) ) {
\t\t\t\treturn false;
\t\t\t}

\t\t\t// Lazy-add a submit handler when a descendant form may potentially be submitted
\t\t\tjQuery.event.add( this, \"click._submit keypress._submit\", function( e ) {
\t\t\t\t// Node name check avoids a VML-related crash in IE (#9807)
\t\t\t\tvar elem = e.target,
\t\t\t\t\tform = jQuery.nodeName( elem, \"input\" ) || jQuery.nodeName( elem, \"button\" ) ? elem.form : undefined;
\t\t\t\tif ( form && !jQuery._data( form, \"submitBubbles\" ) ) {
\t\t\t\t\tjQuery.event.add( form, \"submit._submit\", function( event ) {
\t\t\t\t\t\tevent._submit_bubble = true;
\t\t\t\t\t});
\t\t\t\t\tjQuery._data( form, \"submitBubbles\", true );
\t\t\t\t}
\t\t\t});
\t\t\t// return undefined since we don't need an event listener
\t\t},

\t\tpostDispatch: function( event ) {
\t\t\t// If form was submitted by the user, bubble the event up the tree
\t\t\tif ( event._submit_bubble ) {
\t\t\t\tdelete event._submit_bubble;
\t\t\t\tif ( this.parentNode && !event.isTrigger ) {
\t\t\t\t\tjQuery.event.simulate( \"submit\", this.parentNode, event, true );
\t\t\t\t}
\t\t\t}
\t\t},

\t\tteardown: function() {
\t\t\t// Only need this for delegated form submit events
\t\t\tif ( jQuery.nodeName( this, \"form\" ) ) {
\t\t\t\treturn false;
\t\t\t}

\t\t\t// Remove delegated handlers; cleanData eventually reaps submit handlers attached above
\t\t\tjQuery.event.remove( this, \"._submit\" );
\t\t}
\t};
}

// IE change delegation and checkbox/radio fix
if ( !jQuery.support.changeBubbles ) {

\tjQuery.event.special.change = {

\t\tsetup: function() {

\t\t\tif ( rformElems.test( this.nodeName ) ) {
\t\t\t\t// IE doesn't fire change on a check/radio until blur; trigger it on click
\t\t\t\t// after a propertychange. Eat the blur-change in special.change.handle.
\t\t\t\t// This still fires onchange a second time for check/radio after blur.
\t\t\t\tif ( this.type === \"checkbox\" || this.type === \"radio\" ) {
\t\t\t\t\tjQuery.event.add( this, \"propertychange._change\", function( event ) {
\t\t\t\t\t\tif ( event.originalEvent.propertyName === \"checked\" ) {
\t\t\t\t\t\t\tthis._just_changed = true;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tjQuery.event.add( this, \"click._change\", function( event ) {
\t\t\t\t\t\tif ( this._just_changed && !event.isTrigger ) {
\t\t\t\t\t\t\tthis._just_changed = false;
\t\t\t\t\t\t}
\t\t\t\t\t\t// Allow triggered, simulated change events (#11500)
\t\t\t\t\t\tjQuery.event.simulate( \"change\", this, event, true );
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t}
\t\t\t// Delegated event; lazy-add a change handler on descendant inputs
\t\t\tjQuery.event.add( this, \"beforeactivate._change\", function( e ) {
\t\t\t\tvar elem = e.target;

\t\t\t\tif ( rformElems.test( elem.nodeName ) && !jQuery._data( elem, \"changeBubbles\" ) ) {
\t\t\t\t\tjQuery.event.add( elem, \"change._change\", function( event ) {
\t\t\t\t\t\tif ( this.parentNode && !event.isSimulated && !event.isTrigger ) {
\t\t\t\t\t\t\tjQuery.event.simulate( \"change\", this.parentNode, event, true );
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tjQuery._data( elem, \"changeBubbles\", true );
\t\t\t\t}
\t\t\t});
\t\t},

\t\thandle: function( event ) {
\t\t\tvar elem = event.target;

\t\t\t// Swallow native change events from checkbox/radio, we already triggered them above
\t\t\tif ( this !== elem || event.isSimulated || event.isTrigger || (elem.type !== \"radio\" && elem.type !== \"checkbox\") ) {
\t\t\t\treturn event.handleObj.handler.apply( this, arguments );
\t\t\t}
\t\t},

\t\tteardown: function() {
\t\t\tjQuery.event.remove( this, \"._change\" );

\t\t\treturn !rformElems.test( this.nodeName );
\t\t}
\t};
}

// Create \"bubbling\" focus and blur events
if ( !jQuery.support.focusinBubbles ) {
\tjQuery.each({ focus: \"focusin\", blur: \"focusout\" }, function( orig, fix ) {

\t\t// Attach a single capturing handler while someone wants focusin/focusout
\t\tvar attaches = 0,
\t\t\thandler = function( event ) {
\t\t\t\tjQuery.event.simulate( fix, event.target, jQuery.event.fix( event ), true );
\t\t\t};

\t\tjQuery.event.special[ fix ] = {
\t\t\tsetup: function() {
\t\t\t\tif ( attaches++ === 0 ) {
\t\t\t\t\tdocument.addEventListener( orig, handler, true );
\t\t\t\t}
\t\t\t},
\t\t\tteardown: function() {
\t\t\t\tif ( --attaches === 0 ) {
\t\t\t\t\tdocument.removeEventListener( orig, handler, true );
\t\t\t\t}
\t\t\t}
\t\t};
\t});
}

jQuery.fn.extend({

\ton: function( types, selector, data, fn, /*INTERNAL*/ one ) {
\t\tvar type, origFn;

\t\t// Types can be a map of types/handlers
\t\tif ( typeof types === \"object\" ) {
\t\t\t// ( types-Object, selector, data )
\t\t\tif ( typeof selector !== \"string\" ) {
\t\t\t\t// ( types-Object, data )
\t\t\t\tdata = data || selector;
\t\t\t\tselector = undefined;
\t\t\t}
\t\t\tfor ( type in types ) {
\t\t\t\tthis.on( type, selector, data, types[ type ], one );
\t\t\t}
\t\t\treturn this;
\t\t}

\t\tif ( data == null && fn == null ) {
\t\t\t// ( types, fn )
\t\t\tfn = selector;
\t\t\tdata = selector = undefined;
\t\t} else if ( fn == null ) {
\t\t\tif ( typeof selector === \"string\" ) {
\t\t\t\t// ( types, selector, fn )
\t\t\t\tfn = data;
\t\t\t\tdata = undefined;
\t\t\t} else {
\t\t\t\t// ( types, data, fn )
\t\t\t\tfn = data;
\t\t\t\tdata = selector;
\t\t\t\tselector = undefined;
\t\t\t}
\t\t}
\t\tif ( fn === false ) {
\t\t\tfn = returnFalse;
\t\t} else if ( !fn ) {
\t\t\treturn this;
\t\t}

\t\tif ( one === 1 ) {
\t\t\torigFn = fn;
\t\t\tfn = function( event ) {
\t\t\t\t// Can use an empty set, since event contains the info
\t\t\t\tjQuery().off( event );
\t\t\t\treturn origFn.apply( this, arguments );
\t\t\t};
\t\t\t// Use same guid so caller can remove using origFn
\t\t\tfn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
\t\t}
\t\treturn this.each( function() {
\t\t\tjQuery.event.add( this, types, fn, data, selector );
\t\t});
\t},
\tone: function( types, selector, data, fn ) {
\t\treturn this.on( types, selector, data, fn, 1 );
\t},
\toff: function( types, selector, fn ) {
\t\tvar handleObj, type;
\t\tif ( types && types.preventDefault && types.handleObj ) {
\t\t\t// ( event )  dispatched jQuery.Event
\t\t\thandleObj = types.handleObj;
\t\t\tjQuery( types.delegateTarget ).off(
\t\t\t\thandleObj.namespace ? handleObj.origType + \".\" + handleObj.namespace : handleObj.origType,
\t\t\t\thandleObj.selector,
\t\t\t\thandleObj.handler
\t\t\t);
\t\t\treturn this;
\t\t}
\t\tif ( typeof types === \"object\" ) {
\t\t\t// ( types-object [, selector] )
\t\t\tfor ( type in types ) {
\t\t\t\tthis.off( type, selector, types[ type ] );
\t\t\t}
\t\t\treturn this;
\t\t}
\t\tif ( selector === false || typeof selector === \"function\" ) {
\t\t\t// ( types [, fn] )
\t\t\tfn = selector;
\t\t\tselector = undefined;
\t\t}
\t\tif ( fn === false ) {
\t\t\tfn = returnFalse;
\t\t}
\t\treturn this.each(function() {
\t\t\tjQuery.event.remove( this, types, fn, selector );
\t\t});
\t},

\tbind: function( types, data, fn ) {
\t\treturn this.on( types, null, data, fn );
\t},
\tunbind: function( types, fn ) {
\t\treturn this.off( types, null, fn );
\t},

\tdelegate: function( selector, types, data, fn ) {
\t\treturn this.on( types, selector, data, fn );
\t},
\tundelegate: function( selector, types, fn ) {
\t\t// ( namespace ) or ( selector, types [, fn] )
\t\treturn arguments.length === 1 ? this.off( selector, \"**\" ) : this.off( types, selector || \"**\", fn );
\t},

\ttrigger: function( type, data ) {
\t\treturn this.each(function() {
\t\t\tjQuery.event.trigger( type, data, this );
\t\t});
\t},
\ttriggerHandler: function( type, data ) {
\t\tvar elem = this[0];
\t\tif ( elem ) {
\t\t\treturn jQuery.event.trigger( type, data, elem, true );
\t\t}
\t}
});
/*!
 * Sizzle CSS Selector Engine
 * Copyright 2012 jQuery Foundation and other contributors
 * Released under the MIT license
 * http://sizzlejs.com/
 */
(function( window, undefined ) {

var i,
\tcachedruns,
\tExpr,
\tgetText,
\tisXML,
\tcompile,
\thasDuplicate,
\toutermostContext,

\t// Local document vars
\tsetDocument,
\tdocument,
\tdocElem,
\tdocumentIsXML,
\trbuggyQSA,
\trbuggyMatches,
\tmatches,
\tcontains,
\tsortOrder,

\t// Instance-specific data
\texpando = \"sizzle\" + -(new Date()),
\tpreferredDoc = window.document,
\tsupport = {},
\tdirruns = 0,
\tdone = 0,
\tclassCache = createCache(),
\ttokenCache = createCache(),
\tcompilerCache = createCache(),

\t// General-purpose constants
\tstrundefined = typeof undefined,
\tMAX_NEGATIVE = 1 << 31,

\t// Array methods
\tarr = [],
\tpop = arr.pop,
\tpush = arr.push,
\tslice = arr.slice,
\t// Use a stripped-down indexOf if we can't use a native one
\tindexOf = arr.indexOf || function( elem ) {
\t\tvar i = 0,
\t\t\tlen = this.length;
\t\tfor ( ; i < len; i++ ) {
\t\t\tif ( this[i] === elem ) {
\t\t\t\treturn i;
\t\t\t}
\t\t}
\t\treturn -1;
\t},


\t// Regular expressions

\t// Whitespace characters http://www.w3.org/TR/css3-selectors/#whitespace
\twhitespace = \"[\\\\x20\\\\t\\\\r\\\\n\\\\f]\",
\t// http://www.w3.org/TR/css3-syntax/#characters
\tcharacterEncoding = \"(?:\\\\\\\\.|[\\\\w-]|[^\\\\x00-\\\\xa0])+\",

\t// Loosely modeled on CSS identifier characters
\t// An unquoted value should be a CSS identifier http://www.w3.org/TR/css3-selectors/#attribute-selectors
\t// Proper syntax: http://www.w3.org/TR/CSS21/syndata.html#value-def-identifier
\tidentifier = characterEncoding.replace( \"w\", \"w#\" ),

\t// Acceptable operators http://www.w3.org/TR/selectors/#attribute-selectors
\toperators = \"([*^\$|!~]?=)\",
\tattributes = \"\\\\[\" + whitespace + \"*(\" + characterEncoding + \")\" + whitespace +
\t\t\"*(?:\" + operators + whitespace + \"*(?:(['\\\"])((?:\\\\\\\\.|[^\\\\\\\\])*?)\\\\3|(\" + identifier + \")|)|)\" + whitespace + \"*\\\\]\",

\t// Prefer arguments quoted,
\t//   then not containing pseudos/brackets,
\t//   then attribute selectors/non-parenthetical expressions,
\t//   then anything else
\t// These preferences are here to reduce the number of selectors
\t//   needing tokenize in the PSEUDO preFilter
\tpseudos = \":(\" + characterEncoding + \")(?:\\\\(((['\\\"])((?:\\\\\\\\.|[^\\\\\\\\])*?)\\\\3|((?:\\\\\\\\.|[^\\\\\\\\()[\\\\]]|\" + attributes.replace( 3, 8 ) + \")*)|.*)\\\\)|)\",

\t// Leading and non-escaped trailing whitespace, capturing some non-whitespace characters preceding the latter
\trtrim = new RegExp( \"^\" + whitespace + \"+|((?:^|[^\\\\\\\\])(?:\\\\\\\\.)*)\" + whitespace + \"+\$\", \"g\" ),

\trcomma = new RegExp( \"^\" + whitespace + \"*,\" + whitespace + \"*\" ),
\trcombinators = new RegExp( \"^\" + whitespace + \"*([\\\\x20\\\\t\\\\r\\\\n\\\\f>+~])\" + whitespace + \"*\" ),
\trpseudo = new RegExp( pseudos ),
\tridentifier = new RegExp( \"^\" + identifier + \"\$\" ),

\tmatchExpr = {
\t\t\"ID\": new RegExp( \"^#(\" + characterEncoding + \")\" ),
\t\t\"CLASS\": new RegExp( \"^\\\\.(\" + characterEncoding + \")\" ),
\t\t\"NAME\": new RegExp( \"^\\\\[name=['\\\"]?(\" + characterEncoding + \")['\\\"]?\\\\]\" ),
\t\t\"TAG\": new RegExp( \"^(\" + characterEncoding.replace( \"w\", \"w*\" ) + \")\" ),
\t\t\"ATTR\": new RegExp( \"^\" + attributes ),
\t\t\"PSEUDO\": new RegExp( \"^\" + pseudos ),
\t\t\"CHILD\": new RegExp( \"^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\\\(\" + whitespace +
\t\t\t\"*(even|odd|(([+-]|)(\\\\d*)n|)\" + whitespace + \"*(?:([+-]|)\" + whitespace +
\t\t\t\"*(\\\\d+)|))\" + whitespace + \"*\\\\)|)\", \"i\" ),
\t\t// For use in libraries implementing .is()
\t\t// We use this for POS matching in `select`
\t\t\"needsContext\": new RegExp( \"^\" + whitespace + \"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\\\(\" +
\t\t\twhitespace + \"*((?:-\\\\d)?\\\\d*)\" + whitespace + \"*\\\\)|)(?=[^-]|\$)\", \"i\" )
\t},

\trsibling = /[\\x20\\t\\r\\n\\f]*[+~]/,

\trnative = /^[^{]+\\{\\s*\\[native code/,

\t// Easily-parseable/retrievable ID or TAG or CLASS selectors
\trquickExpr = /^(?:#([\\w-]+)|(\\w+)|\\.([\\w-]+))\$/,

\trinputs = /^(?:input|select|textarea|button)\$/i,
\trheader = /^h\\d\$/i,

\trescape = /'|\\\\/g,
\trattributeQuotes = /\\=[\\x20\\t\\r\\n\\f]*([^'\"\\]]*)[\\x20\\t\\r\\n\\f]*\\]/g,

\t// CSS escapes http://www.w3.org/TR/CSS21/syndata.html#escaped-characters
\trunescape = /\\\\([\\da-fA-F]{1,6}[\\x20\\t\\r\\n\\f]?|.)/g,
\tfunescape = function( _, escaped ) {
\t\tvar high = \"0x\" + escaped - 0x10000;
\t\t// NaN means non-codepoint
\t\treturn high !== high ?
\t\t\tescaped :
\t\t\t// BMP codepoint
\t\t\thigh < 0 ?
\t\t\t\tString.fromCharCode( high + 0x10000 ) :
\t\t\t\t// Supplemental Plane codepoint (surrogate pair)
\t\t\t\tString.fromCharCode( high >> 10 | 0xD800, high & 0x3FF | 0xDC00 );
\t};

// Use a stripped-down slice if we can't use a native one
try {
\tslice.call( preferredDoc.documentElement.childNodes, 0 )[0].nodeType;
} catch ( e ) {
\tslice = function( i ) {
\t\tvar elem,
\t\t\tresults = [];
\t\twhile ( (elem = this[i++]) ) {
\t\t\tresults.push( elem );
\t\t}
\t\treturn results;
\t};
}

/**
 * For feature detection
 * @param {Function} fn The function to test for native support
 */
function isNative( fn ) {
\treturn rnative.test( fn + \"\" );
}

/**
 * Create key-value caches of limited size
 * @returns {Function(string, Object)} Returns the Object data after storing it on itself with
 *\tproperty name the (space-suffixed) string and (if the cache is larger than Expr.cacheLength)
 *\tdeleting the oldest entry
 */
function createCache() {
\tvar cache,
\t\tkeys = [];

\treturn (cache = function( key, value ) {
\t\t// Use (key + \" \") to avoid collision with native prototype properties (see Issue #157)
\t\tif ( keys.push( key += \" \" ) > Expr.cacheLength ) {
\t\t\t// Only keep the most recent entries
\t\t\tdelete cache[ keys.shift() ];
\t\t}
\t\treturn (cache[ key ] = value);
\t});
}

/**
 * Mark a function for special use by Sizzle
 * @param {Function} fn The function to mark
 */
function markFunction( fn ) {
\tfn[ expando ] = true;
\treturn fn;
}

/**
 * Support testing using an element
 * @param {Function} fn Passed the created div and expects a boolean result
 */
function assert( fn ) {
\tvar div = document.createElement(\"div\");

\ttry {
\t\treturn fn( div );
\t} catch (e) {
\t\treturn false;
\t} finally {
\t\t// release memory in IE
\t\tdiv = null;
\t}
}

function Sizzle( selector, context, results, seed ) {
\tvar match, elem, m, nodeType,
\t\t// QSA vars
\t\ti, groups, old, nid, newContext, newSelector;

\tif ( ( context ? context.ownerDocument || context : preferredDoc ) !== document ) {
\t\tsetDocument( context );
\t}

\tcontext = context || document;
\tresults = results || [];

\tif ( !selector || typeof selector !== \"string\" ) {
\t\treturn results;
\t}

\tif ( (nodeType = context.nodeType) !== 1 && nodeType !== 9 ) {
\t\treturn [];
\t}

\tif ( !documentIsXML && !seed ) {

\t\t// Shortcuts
\t\tif ( (match = rquickExpr.exec( selector )) ) {
\t\t\t// Speed-up: Sizzle(\"#ID\")
\t\t\tif ( (m = match[1]) ) {
\t\t\t\tif ( nodeType === 9 ) {
\t\t\t\t\telem = context.getElementById( m );
\t\t\t\t\t// Check parentNode to catch when Blackberry 4.6 returns
\t\t\t\t\t// nodes that are no longer in the document #6963
\t\t\t\t\tif ( elem && elem.parentNode ) {
\t\t\t\t\t\t// Handle the case where IE, Opera, and Webkit return items
\t\t\t\t\t\t// by name instead of ID
\t\t\t\t\t\tif ( elem.id === m ) {
\t\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\t\treturn results;
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\treturn results;
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t// Context is not a document
\t\t\t\t\tif ( context.ownerDocument && (elem = context.ownerDocument.getElementById( m )) &&
\t\t\t\t\t\tcontains( context, elem ) && elem.id === m ) {
\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\treturn results;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t// Speed-up: Sizzle(\"TAG\")
\t\t\t} else if ( match[2] ) {
\t\t\t\tpush.apply( results, slice.call(context.getElementsByTagName( selector ), 0) );
\t\t\t\treturn results;

\t\t\t// Speed-up: Sizzle(\".CLASS\")
\t\t\t} else if ( (m = match[3]) && support.getByClassName && context.getElementsByClassName ) {
\t\t\t\tpush.apply( results, slice.call(context.getElementsByClassName( m ), 0) );
\t\t\t\treturn results;
\t\t\t}
\t\t}

\t\t// QSA path
\t\tif ( support.qsa && !rbuggyQSA.test(selector) ) {
\t\t\told = true;
\t\t\tnid = expando;
\t\t\tnewContext = context;
\t\t\tnewSelector = nodeType === 9 && selector;

\t\t\t// qSA works strangely on Element-rooted queries
\t\t\t// We can work around this by specifying an extra ID on the root
\t\t\t// and working up from there (Thanks to Andrew Dupont for the technique)
\t\t\t// IE 8 doesn't work on object elements
\t\t\tif ( nodeType === 1 && context.nodeName.toLowerCase() !== \"object\" ) {
\t\t\t\tgroups = tokenize( selector );

\t\t\t\tif ( (old = context.getAttribute(\"id\")) ) {
\t\t\t\t\tnid = old.replace( rescape, \"\\\\\$&\" );
\t\t\t\t} else {
\t\t\t\t\tcontext.setAttribute( \"id\", nid );
\t\t\t\t}
\t\t\t\tnid = \"[id='\" + nid + \"'] \";

\t\t\t\ti = groups.length;
\t\t\t\twhile ( i-- ) {
\t\t\t\t\tgroups[i] = nid + toSelector( groups[i] );
\t\t\t\t}
\t\t\t\tnewContext = rsibling.test( selector ) && context.parentNode || context;
\t\t\t\tnewSelector = groups.join(\",\");
\t\t\t}

\t\t\tif ( newSelector ) {
\t\t\t\ttry {
\t\t\t\t\tpush.apply( results, slice.call( newContext.querySelectorAll(
\t\t\t\t\t\tnewSelector
\t\t\t\t\t), 0 ) );
\t\t\t\t\treturn results;
\t\t\t\t} catch(qsaError) {
\t\t\t\t} finally {
\t\t\t\t\tif ( !old ) {
\t\t\t\t\t\tcontext.removeAttribute(\"id\");
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// All others
\treturn select( selector.replace( rtrim, \"\$1\" ), context, results, seed );
}

/**
 * Detect xml
 * @param {Element|Object} elem An element or a document
 */
isXML = Sizzle.isXML = function( elem ) {
\t// documentElement is verified for cases where it doesn't yet exist
\t// (such as loading iframes in IE - #4833)
\tvar documentElement = elem && (elem.ownerDocument || elem).documentElement;
\treturn documentElement ? documentElement.nodeName !== \"HTML\" : false;
};

/**
 * Sets document-related variables once based on the current document
 * @param {Element|Object} [doc] An element or document object to use to set the document
 * @returns {Object} Returns the current document
 */
setDocument = Sizzle.setDocument = function( node ) {
\tvar doc = node ? node.ownerDocument || node : preferredDoc;

\t// If no document and documentElement is available, return
\tif ( doc === document || doc.nodeType !== 9 || !doc.documentElement ) {
\t\treturn document;
\t}

\t// Set our document
\tdocument = doc;
\tdocElem = doc.documentElement;

\t// Support tests
\tdocumentIsXML = isXML( doc );

\t// Check if getElementsByTagName(\"*\") returns only elements
\tsupport.tagNameNoComments = assert(function( div ) {
\t\tdiv.appendChild( doc.createComment(\"\") );
\t\treturn !div.getElementsByTagName(\"*\").length;
\t});

\t// Check if attributes should be retrieved by attribute nodes
\tsupport.attributes = assert(function( div ) {
\t\tdiv.innerHTML = \"<select></select>\";
\t\tvar type = typeof div.lastChild.getAttribute(\"multiple\");
\t\t// IE8 returns a string for some attributes even when not present
\t\treturn type !== \"boolean\" && type !== \"string\";
\t});

\t// Check if getElementsByClassName can be trusted
\tsupport.getByClassName = assert(function( div ) {
\t\t// Opera can't find a second classname (in 9.6)
\t\tdiv.innerHTML = \"<div class='hidden e'></div><div class='hidden'></div>\";
\t\tif ( !div.getElementsByClassName || !div.getElementsByClassName(\"e\").length ) {
\t\t\treturn false;
\t\t}

\t\t// Safari 3.2 caches class attributes and doesn't catch changes
\t\tdiv.lastChild.className = \"e\";
\t\treturn div.getElementsByClassName(\"e\").length === 2;
\t});

\t// Check if getElementById returns elements by name
\t// Check if getElementsByName privileges form controls or returns elements by ID
\tsupport.getByName = assert(function( div ) {
\t\t// Inject content
\t\tdiv.id = expando + 0;
\t\tdiv.innerHTML = \"<a name='\" + expando + \"'></a><div name='\" + expando + \"'></div>\";
\t\tdocElem.insertBefore( div, docElem.firstChild );

\t\t// Test
\t\tvar pass = doc.getElementsByName &&
\t\t\t// buggy browsers will return fewer than the correct 2
\t\t\tdoc.getElementsByName( expando ).length === 2 +
\t\t\t// buggy browsers will return more than the correct 0
\t\t\tdoc.getElementsByName( expando + 0 ).length;
\t\tsupport.getIdNotName = !doc.getElementById( expando );

\t\t// Cleanup
\t\tdocElem.removeChild( div );

\t\treturn pass;
\t});

\t// IE6/7 return modified attributes
\tExpr.attrHandle = assert(function( div ) {
\t\tdiv.innerHTML = \"<a href='#'></a>\";
\t\treturn div.firstChild && typeof div.firstChild.getAttribute !== strundefined &&
\t\t\tdiv.firstChild.getAttribute(\"href\") === \"#\";
\t}) ?
\t\t{} :
\t\t{
\t\t\t\"href\": function( elem ) {
\t\t\t\treturn elem.getAttribute( \"href\", 2 );
\t\t\t},
\t\t\t\"type\": function( elem ) {
\t\t\t\treturn elem.getAttribute(\"type\");
\t\t\t}
\t\t};

\t// ID find and filter
\tif ( support.getIdNotName ) {
\t\tExpr.find[\"ID\"] = function( id, context ) {
\t\t\tif ( typeof context.getElementById !== strundefined && !documentIsXML ) {
\t\t\t\tvar m = context.getElementById( id );
\t\t\t\t// Check parentNode to catch when Blackberry 4.6 returns
\t\t\t\t// nodes that are no longer in the document #6963
\t\t\t\treturn m && m.parentNode ? [m] : [];
\t\t\t}
\t\t};
\t\tExpr.filter[\"ID\"] = function( id ) {
\t\t\tvar attrId = id.replace( runescape, funescape );
\t\t\treturn function( elem ) {
\t\t\t\treturn elem.getAttribute(\"id\") === attrId;
\t\t\t};
\t\t};
\t} else {
\t\tExpr.find[\"ID\"] = function( id, context ) {
\t\t\tif ( typeof context.getElementById !== strundefined && !documentIsXML ) {
\t\t\t\tvar m = context.getElementById( id );

\t\t\t\treturn m ?
\t\t\t\t\tm.id === id || typeof m.getAttributeNode !== strundefined && m.getAttributeNode(\"id\").value === id ?
\t\t\t\t\t\t[m] :
\t\t\t\t\t\tundefined :
\t\t\t\t\t[];
\t\t\t}
\t\t};
\t\tExpr.filter[\"ID\"] =  function( id ) {
\t\t\tvar attrId = id.replace( runescape, funescape );
\t\t\treturn function( elem ) {
\t\t\t\tvar node = typeof elem.getAttributeNode !== strundefined && elem.getAttributeNode(\"id\");
\t\t\t\treturn node && node.value === attrId;
\t\t\t};
\t\t};
\t}

\t// Tag
\tExpr.find[\"TAG\"] = support.tagNameNoComments ?
\t\tfunction( tag, context ) {
\t\t\tif ( typeof context.getElementsByTagName !== strundefined ) {
\t\t\t\treturn context.getElementsByTagName( tag );
\t\t\t}
\t\t} :
\t\tfunction( tag, context ) {
\t\t\tvar elem,
\t\t\t\ttmp = [],
\t\t\t\ti = 0,
\t\t\t\tresults = context.getElementsByTagName( tag );

\t\t\t// Filter out possible comments
\t\t\tif ( tag === \"*\" ) {
\t\t\t\twhile ( (elem = results[i++]) ) {
\t\t\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\t\t\ttmp.push( elem );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn tmp;
\t\t\t}
\t\t\treturn results;
\t\t};

\t// Name
\tExpr.find[\"NAME\"] = support.getByName && function( tag, context ) {
\t\tif ( typeof context.getElementsByName !== strundefined ) {
\t\t\treturn context.getElementsByName( name );
\t\t}
\t};

\t// Class
\tExpr.find[\"CLASS\"] = support.getByClassName && function( className, context ) {
\t\tif ( typeof context.getElementsByClassName !== strundefined && !documentIsXML ) {
\t\t\treturn context.getElementsByClassName( className );
\t\t}
\t};

\t// QSA and matchesSelector support

\t// matchesSelector(:active) reports false when true (IE9/Opera 11.5)
\trbuggyMatches = [];

\t// qSa(:focus) reports false when true (Chrome 21),
\t// no need to also add to buggyMatches since matches checks buggyQSA
\t// A support test would require too much code (would include document ready)
\trbuggyQSA = [ \":focus\" ];

\tif ( (support.qsa = isNative(doc.querySelectorAll)) ) {
\t\t// Build QSA regex
\t\t// Regex strategy adopted from Diego Perini
\t\tassert(function( div ) {
\t\t\t// Select is set to empty string on purpose
\t\t\t// This is to test IE's treatment of not explictly
\t\t\t// setting a boolean content attribute,
\t\t\t// since its presence should be enough
\t\t\t// http://bugs.jquery.com/ticket/12359
\t\t\tdiv.innerHTML = \"<select><option selected=''></option></select>\";

\t\t\t// IE8 - Some boolean attributes are not treated correctly
\t\t\tif ( !div.querySelectorAll(\"[selected]\").length ) {
\t\t\t\trbuggyQSA.push( \"\\\\[\" + whitespace + \"*(?:checked|disabled|ismap|multiple|readonly|selected|value)\" );
\t\t\t}

\t\t\t// Webkit/Opera - :checked should return selected option elements
\t\t\t// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
\t\t\t// IE8 throws error here and will not see later tests
\t\t\tif ( !div.querySelectorAll(\":checked\").length ) {
\t\t\t\trbuggyQSA.push(\":checked\");
\t\t\t}
\t\t});

\t\tassert(function( div ) {

\t\t\t// Opera 10-12/IE8 - ^= \$= *= and empty values
\t\t\t// Should not select anything
\t\t\tdiv.innerHTML = \"<input type='hidden' i=''/>\";
\t\t\tif ( div.querySelectorAll(\"[i^='']\").length ) {
\t\t\t\trbuggyQSA.push( \"[*^\$]=\" + whitespace + \"*(?:\\\"\\\"|'')\" );
\t\t\t}

\t\t\t// FF 3.5 - :enabled/:disabled and hidden elements (hidden elements are still enabled)
\t\t\t// IE8 throws error here and will not see later tests
\t\t\tif ( !div.querySelectorAll(\":enabled\").length ) {
\t\t\t\trbuggyQSA.push( \":enabled\", \":disabled\" );
\t\t\t}

\t\t\t// Opera 10-11 does not throw on post-comma invalid pseudos
\t\t\tdiv.querySelectorAll(\"*,:x\");
\t\t\trbuggyQSA.push(\",.*:\");
\t\t});
\t}

\tif ( (support.matchesSelector = isNative( (matches = docElem.matchesSelector ||
\t\tdocElem.mozMatchesSelector ||
\t\tdocElem.webkitMatchesSelector ||
\t\tdocElem.oMatchesSelector ||
\t\tdocElem.msMatchesSelector) )) ) {

\t\tassert(function( div ) {
\t\t\t// Check to see if it's possible to do matchesSelector
\t\t\t// on a disconnected node (IE 9)
\t\t\tsupport.disconnectedMatch = matches.call( div, \"div\" );

\t\t\t// This should fail with an exception
\t\t\t// Gecko does not error, returns false instead
\t\t\tmatches.call( div, \"[s!='']:x\" );
\t\t\trbuggyMatches.push( \"!=\", pseudos );
\t\t});
\t}

\trbuggyQSA = new RegExp( rbuggyQSA.join(\"|\") );
\trbuggyMatches = new RegExp( rbuggyMatches.join(\"|\") );

\t// Element contains another
\t// Purposefully does not implement inclusive descendent
\t// As in, an element does not contain itself
\tcontains = isNative(docElem.contains) || docElem.compareDocumentPosition ?
\t\tfunction( a, b ) {
\t\t\tvar adown = a.nodeType === 9 ? a.documentElement : a,
\t\t\t\tbup = b && b.parentNode;
\t\t\treturn a === bup || !!( bup && bup.nodeType === 1 && (
\t\t\t\tadown.contains ?
\t\t\t\t\tadown.contains( bup ) :
\t\t\t\t\ta.compareDocumentPosition && a.compareDocumentPosition( bup ) & 16
\t\t\t));
\t\t} :
\t\tfunction( a, b ) {
\t\t\tif ( b ) {
\t\t\t\twhile ( (b = b.parentNode) ) {
\t\t\t\t\tif ( b === a ) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\treturn false;
\t\t};

\t// Document order sorting
\tsortOrder = docElem.compareDocumentPosition ?
\tfunction( a, b ) {
\t\tvar compare;

\t\tif ( a === b ) {
\t\t\thasDuplicate = true;
\t\t\treturn 0;
\t\t}

\t\tif ( (compare = b.compareDocumentPosition && a.compareDocumentPosition && a.compareDocumentPosition( b )) ) {
\t\t\tif ( compare & 1 || a.parentNode && a.parentNode.nodeType === 11 ) {
\t\t\t\tif ( a === doc || contains( preferredDoc, a ) ) {
\t\t\t\t\treturn -1;
\t\t\t\t}
\t\t\t\tif ( b === doc || contains( preferredDoc, b ) ) {
\t\t\t\t\treturn 1;
\t\t\t\t}
\t\t\t\treturn 0;
\t\t\t}
\t\t\treturn compare & 4 ? -1 : 1;
\t\t}

\t\treturn a.compareDocumentPosition ? -1 : 1;
\t} :
\tfunction( a, b ) {
\t\tvar cur,
\t\t\ti = 0,
\t\t\taup = a.parentNode,
\t\t\tbup = b.parentNode,
\t\t\tap = [ a ],
\t\t\tbp = [ b ];

\t\t// Exit early if the nodes are identical
\t\tif ( a === b ) {
\t\t\thasDuplicate = true;
\t\t\treturn 0;

\t\t// Parentless nodes are either documents or disconnected
\t\t} else if ( !aup || !bup ) {
\t\t\treturn a === doc ? -1 :
\t\t\t\tb === doc ? 1 :
\t\t\t\taup ? -1 :
\t\t\t\tbup ? 1 :
\t\t\t\t0;

\t\t// If the nodes are siblings, we can do a quick check
\t\t} else if ( aup === bup ) {
\t\t\treturn siblingCheck( a, b );
\t\t}

\t\t// Otherwise we need full lists of their ancestors for comparison
\t\tcur = a;
\t\twhile ( (cur = cur.parentNode) ) {
\t\t\tap.unshift( cur );
\t\t}
\t\tcur = b;
\t\twhile ( (cur = cur.parentNode) ) {
\t\t\tbp.unshift( cur );
\t\t}

\t\t// Walk down the tree looking for a discrepancy
\t\twhile ( ap[i] === bp[i] ) {
\t\t\ti++;
\t\t}

\t\treturn i ?
\t\t\t// Do a sibling check if the nodes have a common ancestor
\t\t\tsiblingCheck( ap[i], bp[i] ) :

\t\t\t// Otherwise nodes in our document sort first
\t\t\tap[i] === preferredDoc ? -1 :
\t\t\tbp[i] === preferredDoc ? 1 :
\t\t\t0;
\t};

\t// Always assume the presence of duplicates if sort doesn't
\t// pass them to our comparison function (as in Google Chrome).
\thasDuplicate = false;
\t[0, 0].sort( sortOrder );
\tsupport.detectDuplicates = hasDuplicate;

\treturn document;
};

Sizzle.matches = function( expr, elements ) {
\treturn Sizzle( expr, null, null, elements );
};

Sizzle.matchesSelector = function( elem, expr ) {
\t// Set document vars if needed
\tif ( ( elem.ownerDocument || elem ) !== document ) {
\t\tsetDocument( elem );
\t}

\t// Make sure that attribute selectors are quoted
\texpr = expr.replace( rattributeQuotes, \"='\$1']\" );

\t// rbuggyQSA always contains :focus, so no need for an existence check
\tif ( support.matchesSelector && !documentIsXML && (!rbuggyMatches || !rbuggyMatches.test(expr)) && !rbuggyQSA.test(expr) ) {
\t\ttry {
\t\t\tvar ret = matches.call( elem, expr );

\t\t\t// IE 9's matchesSelector returns false on disconnected nodes
\t\t\tif ( ret || support.disconnectedMatch ||
\t\t\t\t\t// As well, disconnected nodes are said to be in a document
\t\t\t\t\t// fragment in IE 9
\t\t\t\t\telem.document && elem.document.nodeType !== 11 ) {
\t\t\t\treturn ret;
\t\t\t}
\t\t} catch(e) {}
\t}

\treturn Sizzle( expr, document, null, [elem] ).length > 0;
};

Sizzle.contains = function( context, elem ) {
\t// Set document vars if needed
\tif ( ( context.ownerDocument || context ) !== document ) {
\t\tsetDocument( context );
\t}
\treturn contains( context, elem );
};

Sizzle.attr = function( elem, name ) {
\tvar val;

\t// Set document vars if needed
\tif ( ( elem.ownerDocument || elem ) !== document ) {
\t\tsetDocument( elem );
\t}

\tif ( !documentIsXML ) {
\t\tname = name.toLowerCase();
\t}
\tif ( (val = Expr.attrHandle[ name ]) ) {
\t\treturn val( elem );
\t}
\tif ( documentIsXML || support.attributes ) {
\t\treturn elem.getAttribute( name );
\t}
\treturn ( (val = elem.getAttributeNode( name )) || elem.getAttribute( name ) ) && elem[ name ] === true ?
\t\tname :
\t\tval && val.specified ? val.value : null;
};

Sizzle.error = function( msg ) {
\tthrow new Error( \"Syntax error, unrecognized expression: \" + msg );
};

// Document sorting and removing duplicates
Sizzle.uniqueSort = function( results ) {
\tvar elem,
\t\tduplicates = [],
\t\ti = 1,
\t\tj = 0;

\t// Unless we *know* we can detect duplicates, assume their presence
\thasDuplicate = !support.detectDuplicates;
\tresults.sort( sortOrder );

\tif ( hasDuplicate ) {
\t\tfor ( ; (elem = results[i]); i++ ) {
\t\t\tif ( elem === results[ i - 1 ] ) {
\t\t\t\tj = duplicates.push( i );
\t\t\t}
\t\t}
\t\twhile ( j-- ) {
\t\t\tresults.splice( duplicates[ j ], 1 );
\t\t}
\t}

\treturn results;
};

function siblingCheck( a, b ) {
\tvar cur = b && a,
\t\tdiff = cur && ( ~b.sourceIndex || MAX_NEGATIVE ) - ( ~a.sourceIndex || MAX_NEGATIVE );

\t// Use IE sourceIndex if available on both nodes
\tif ( diff ) {
\t\treturn diff;
\t}

\t// Check if b follows a
\tif ( cur ) {
\t\twhile ( (cur = cur.nextSibling) ) {
\t\t\tif ( cur === b ) {
\t\t\t\treturn -1;
\t\t\t}
\t\t}
\t}

\treturn a ? 1 : -1;
}

// Returns a function to use in pseudos for input types
function createInputPseudo( type ) {
\treturn function( elem ) {
\t\tvar name = elem.nodeName.toLowerCase();
\t\treturn name === \"input\" && elem.type === type;
\t};
}

// Returns a function to use in pseudos for buttons
function createButtonPseudo( type ) {
\treturn function( elem ) {
\t\tvar name = elem.nodeName.toLowerCase();
\t\treturn (name === \"input\" || name === \"button\") && elem.type === type;
\t};
}

// Returns a function to use in pseudos for positionals
function createPositionalPseudo( fn ) {
\treturn markFunction(function( argument ) {
\t\targument = +argument;
\t\treturn markFunction(function( seed, matches ) {
\t\t\tvar j,
\t\t\t\tmatchIndexes = fn( [], seed.length, argument ),
\t\t\t\ti = matchIndexes.length;

\t\t\t// Match elements found at the specified indexes
\t\t\twhile ( i-- ) {
\t\t\t\tif ( seed[ (j = matchIndexes[i]) ] ) {
\t\t\t\t\tseed[j] = !(matches[j] = seed[j]);
\t\t\t\t}
\t\t\t}
\t\t});
\t});
}

/**
 * Utility function for retrieving the text value of an array of DOM nodes
 * @param {Array|Element} elem
 */
getText = Sizzle.getText = function( elem ) {
\tvar node,
\t\tret = \"\",
\t\ti = 0,
\t\tnodeType = elem.nodeType;

\tif ( !nodeType ) {
\t\t// If no nodeType, this is expected to be an array
\t\tfor ( ; (node = elem[i]); i++ ) {
\t\t\t// Do not traverse comment nodes
\t\t\tret += getText( node );
\t\t}
\t} else if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {
\t\t// Use textContent for elements
\t\t// innerText usage removed for consistency of new lines (see #11153)
\t\tif ( typeof elem.textContent === \"string\" ) {
\t\t\treturn elem.textContent;
\t\t} else {
\t\t\t// Traverse its children
\t\t\tfor ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
\t\t\t\tret += getText( elem );
\t\t\t}
\t\t}
\t} else if ( nodeType === 3 || nodeType === 4 ) {
\t\treturn elem.nodeValue;
\t}
\t// Do not include comment or processing instruction nodes

\treturn ret;
};

Expr = Sizzle.selectors = {

\t// Can be adjusted by the user
\tcacheLength: 50,

\tcreatePseudo: markFunction,

\tmatch: matchExpr,

\tfind: {},

\trelative: {
\t\t\">\": { dir: \"parentNode\", first: true },
\t\t\" \": { dir: \"parentNode\" },
\t\t\"+\": { dir: \"previousSibling\", first: true },
\t\t\"~\": { dir: \"previousSibling\" }
\t},

\tpreFilter: {
\t\t\"ATTR\": function( match ) {
\t\t\tmatch[1] = match[1].replace( runescape, funescape );

\t\t\t// Move the given value to match[3] whether quoted or unquoted
\t\t\tmatch[3] = ( match[4] || match[5] || \"\" ).replace( runescape, funescape );

\t\t\tif ( match[2] === \"~=\" ) {
\t\t\t\tmatch[3] = \" \" + match[3] + \" \";
\t\t\t}

\t\t\treturn match.slice( 0, 4 );
\t\t},

\t\t\"CHILD\": function( match ) {
\t\t\t/* matches from matchExpr[\"CHILD\"]
\t\t\t\t1 type (only|nth|...)
\t\t\t\t2 what (child|of-type)
\t\t\t\t3 argument (even|odd|\\d*|\\d*n([+-]\\d+)?|...)
\t\t\t\t4 xn-component of xn+y argument ([+-]?\\d*n|)
\t\t\t\t5 sign of xn-component
\t\t\t\t6 x of xn-component
\t\t\t\t7 sign of y-component
\t\t\t\t8 y of y-component
\t\t\t*/
\t\t\tmatch[1] = match[1].toLowerCase();

\t\t\tif ( match[1].slice( 0, 3 ) === \"nth\" ) {
\t\t\t\t// nth-* requires argument
\t\t\t\tif ( !match[3] ) {
\t\t\t\t\tSizzle.error( match[0] );
\t\t\t\t}

\t\t\t\t// numeric x and y parameters for Expr.filter.CHILD
\t\t\t\t// remember that false/true cast respectively to 0/1
\t\t\t\tmatch[4] = +( match[4] ? match[5] + (match[6] || 1) : 2 * ( match[3] === \"even\" || match[3] === \"odd\" ) );
\t\t\t\tmatch[5] = +( ( match[7] + match[8] ) || match[3] === \"odd\" );

\t\t\t// other types prohibit arguments
\t\t\t} else if ( match[3] ) {
\t\t\t\tSizzle.error( match[0] );
\t\t\t}

\t\t\treturn match;
\t\t},

\t\t\"PSEUDO\": function( match ) {
\t\t\tvar excess,
\t\t\t\tunquoted = !match[5] && match[2];

\t\t\tif ( matchExpr[\"CHILD\"].test( match[0] ) ) {
\t\t\t\treturn null;
\t\t\t}

\t\t\t// Accept quoted arguments as-is
\t\t\tif ( match[4] ) {
\t\t\t\tmatch[2] = match[4];

\t\t\t// Strip excess characters from unquoted arguments
\t\t\t} else if ( unquoted && rpseudo.test( unquoted ) &&
\t\t\t\t// Get excess from tokenize (recursively)
\t\t\t\t(excess = tokenize( unquoted, true )) &&
\t\t\t\t// advance to the next closing parenthesis
\t\t\t\t(excess = unquoted.indexOf( \")\", unquoted.length - excess ) - unquoted.length) ) {

\t\t\t\t// excess is a negative index
\t\t\t\tmatch[0] = match[0].slice( 0, excess );
\t\t\t\tmatch[2] = unquoted.slice( 0, excess );
\t\t\t}

\t\t\t// Return only captures needed by the pseudo filter method (type and argument)
\t\t\treturn match.slice( 0, 3 );
\t\t}
\t},

\tfilter: {

\t\t\"TAG\": function( nodeName ) {
\t\t\tif ( nodeName === \"*\" ) {
\t\t\t\treturn function() { return true; };
\t\t\t}

\t\t\tnodeName = nodeName.replace( runescape, funescape ).toLowerCase();
\t\t\treturn function( elem ) {
\t\t\t\treturn elem.nodeName && elem.nodeName.toLowerCase() === nodeName;
\t\t\t};
\t\t},

\t\t\"CLASS\": function( className ) {
\t\t\tvar pattern = classCache[ className + \" \" ];

\t\t\treturn pattern ||
\t\t\t\t(pattern = new RegExp( \"(^|\" + whitespace + \")\" + className + \"(\" + whitespace + \"|\$)\" )) &&
\t\t\t\tclassCache( className, function( elem ) {
\t\t\t\t\treturn pattern.test( elem.className || (typeof elem.getAttribute !== strundefined && elem.getAttribute(\"class\")) || \"\" );
\t\t\t\t});
\t\t},

\t\t\"ATTR\": function( name, operator, check ) {
\t\t\treturn function( elem ) {
\t\t\t\tvar result = Sizzle.attr( elem, name );

\t\t\t\tif ( result == null ) {
\t\t\t\t\treturn operator === \"!=\";
\t\t\t\t}
\t\t\t\tif ( !operator ) {
\t\t\t\t\treturn true;
\t\t\t\t}

\t\t\t\tresult += \"\";

\t\t\t\treturn operator === \"=\" ? result === check :
\t\t\t\t\toperator === \"!=\" ? result !== check :
\t\t\t\t\toperator === \"^=\" ? check && result.indexOf( check ) === 0 :
\t\t\t\t\toperator === \"*=\" ? check && result.indexOf( check ) > -1 :
\t\t\t\t\toperator === \"\$=\" ? check && result.slice( -check.length ) === check :
\t\t\t\t\toperator === \"~=\" ? ( \" \" + result + \" \" ).indexOf( check ) > -1 :
\t\t\t\t\toperator === \"|=\" ? result === check || result.slice( 0, check.length + 1 ) === check + \"-\" :
\t\t\t\t\tfalse;
\t\t\t};
\t\t},

\t\t\"CHILD\": function( type, what, argument, first, last ) {
\t\t\tvar simple = type.slice( 0, 3 ) !== \"nth\",
\t\t\t\tforward = type.slice( -4 ) !== \"last\",
\t\t\t\tofType = what === \"of-type\";

\t\t\treturn first === 1 && last === 0 ?

\t\t\t\t// Shortcut for :nth-*(n)
\t\t\t\tfunction( elem ) {
\t\t\t\t\treturn !!elem.parentNode;
\t\t\t\t} :

\t\t\t\tfunction( elem, context, xml ) {
\t\t\t\t\tvar cache, outerCache, node, diff, nodeIndex, start,
\t\t\t\t\t\tdir = simple !== forward ? \"nextSibling\" : \"previousSibling\",
\t\t\t\t\t\tparent = elem.parentNode,
\t\t\t\t\t\tname = ofType && elem.nodeName.toLowerCase(),
\t\t\t\t\t\tuseCache = !xml && !ofType;

\t\t\t\t\tif ( parent ) {

\t\t\t\t\t\t// :(first|last|only)-(child|of-type)
\t\t\t\t\t\tif ( simple ) {
\t\t\t\t\t\t\twhile ( dir ) {
\t\t\t\t\t\t\t\tnode = elem;
\t\t\t\t\t\t\t\twhile ( (node = node[ dir ]) ) {
\t\t\t\t\t\t\t\t\tif ( ofType ? node.nodeName.toLowerCase() === name : node.nodeType === 1 ) {
\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t// Reverse direction for :only-* (if we haven't yet done so)
\t\t\t\t\t\t\t\tstart = dir = type === \"only\" && !start && \"nextSibling\";
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}

\t\t\t\t\t\tstart = [ forward ? parent.firstChild : parent.lastChild ];

\t\t\t\t\t\t// non-xml :nth-child(...) stores cache data on `parent`
\t\t\t\t\t\tif ( forward && useCache ) {
\t\t\t\t\t\t\t// Seek `elem` from a previously-cached index
\t\t\t\t\t\t\touterCache = parent[ expando ] || (parent[ expando ] = {});
\t\t\t\t\t\t\tcache = outerCache[ type ] || [];
\t\t\t\t\t\t\tnodeIndex = cache[0] === dirruns && cache[1];
\t\t\t\t\t\t\tdiff = cache[0] === dirruns && cache[2];
\t\t\t\t\t\t\tnode = nodeIndex && parent.childNodes[ nodeIndex ];

\t\t\t\t\t\t\twhile ( (node = ++nodeIndex && node && node[ dir ] ||

\t\t\t\t\t\t\t\t// Fallback to seeking `elem` from the start
\t\t\t\t\t\t\t\t(diff = nodeIndex = 0) || start.pop()) ) {

\t\t\t\t\t\t\t\t// When found, cache indexes on `parent` and break
\t\t\t\t\t\t\t\tif ( node.nodeType === 1 && ++diff && node === elem ) {
\t\t\t\t\t\t\t\t\touterCache[ type ] = [ dirruns, nodeIndex, diff ];
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t// Use previously-cached element index if available
\t\t\t\t\t\t} else if ( useCache && (cache = (elem[ expando ] || (elem[ expando ] = {}))[ type ]) && cache[0] === dirruns ) {
\t\t\t\t\t\t\tdiff = cache[1];

\t\t\t\t\t\t// xml :nth-child(...) or :nth-last-child(...) or :nth(-last)?-of-type(...)
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// Use the same loop as above to seek `elem` from the start
\t\t\t\t\t\t\twhile ( (node = ++nodeIndex && node && node[ dir ] ||
\t\t\t\t\t\t\t\t(diff = nodeIndex = 0) || start.pop()) ) {

\t\t\t\t\t\t\t\tif ( ( ofType ? node.nodeName.toLowerCase() === name : node.nodeType === 1 ) && ++diff ) {
\t\t\t\t\t\t\t\t\t// Cache the index of each encountered element
\t\t\t\t\t\t\t\t\tif ( useCache ) {
\t\t\t\t\t\t\t\t\t\t(node[ expando ] || (node[ expando ] = {}))[ type ] = [ dirruns, diff ];
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\tif ( node === elem ) {
\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t// Incorporate the offset, then check against cycle size
\t\t\t\t\t\tdiff -= last;
\t\t\t\t\t\treturn diff === first || ( diff % first === 0 && diff / first >= 0 );
\t\t\t\t\t}
\t\t\t\t};
\t\t},

\t\t\"PSEUDO\": function( pseudo, argument ) {
\t\t\t// pseudo-class names are case-insensitive
\t\t\t// http://www.w3.org/TR/selectors/#pseudo-classes
\t\t\t// Prioritize by case sensitivity in case custom pseudos are added with uppercase letters
\t\t\t// Remember that setFilters inherits from pseudos
\t\t\tvar args,
\t\t\t\tfn = Expr.pseudos[ pseudo ] || Expr.setFilters[ pseudo.toLowerCase() ] ||
\t\t\t\t\tSizzle.error( \"unsupported pseudo: \" + pseudo );

\t\t\t// The user may use createPseudo to indicate that
\t\t\t// arguments are needed to create the filter function
\t\t\t// just as Sizzle does
\t\t\tif ( fn[ expando ] ) {
\t\t\t\treturn fn( argument );
\t\t\t}

\t\t\t// But maintain support for old signatures
\t\t\tif ( fn.length > 1 ) {
\t\t\t\targs = [ pseudo, pseudo, \"\", argument ];
\t\t\t\treturn Expr.setFilters.hasOwnProperty( pseudo.toLowerCase() ) ?
\t\t\t\t\tmarkFunction(function( seed, matches ) {
\t\t\t\t\t\tvar idx,
\t\t\t\t\t\t\tmatched = fn( seed, argument ),
\t\t\t\t\t\t\ti = matched.length;
\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\tidx = indexOf.call( seed, matched[i] );
\t\t\t\t\t\t\tseed[ idx ] = !( matches[ idx ] = matched[i] );
\t\t\t\t\t\t}
\t\t\t\t\t}) :
\t\t\t\t\tfunction( elem ) {
\t\t\t\t\t\treturn fn( elem, 0, args );
\t\t\t\t\t};
\t\t\t}

\t\t\treturn fn;
\t\t}
\t},

\tpseudos: {
\t\t// Potentially complex pseudos
\t\t\"not\": markFunction(function( selector ) {
\t\t\t// Trim the selector passed to compile
\t\t\t// to avoid treating leading and trailing
\t\t\t// spaces as combinators
\t\t\tvar input = [],
\t\t\t\tresults = [],
\t\t\t\tmatcher = compile( selector.replace( rtrim, \"\$1\" ) );

\t\t\treturn matcher[ expando ] ?
\t\t\t\tmarkFunction(function( seed, matches, context, xml ) {
\t\t\t\t\tvar elem,
\t\t\t\t\t\tunmatched = matcher( seed, null, xml, [] ),
\t\t\t\t\t\ti = seed.length;

\t\t\t\t\t// Match elements unmatched by `matcher`
\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\tif ( (elem = unmatched[i]) ) {
\t\t\t\t\t\t\tseed[i] = !(matches[i] = elem);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}) :
\t\t\t\tfunction( elem, context, xml ) {
\t\t\t\t\tinput[0] = elem;
\t\t\t\t\tmatcher( input, null, xml, results );
\t\t\t\t\treturn !results.pop();
\t\t\t\t};
\t\t}),

\t\t\"has\": markFunction(function( selector ) {
\t\t\treturn function( elem ) {
\t\t\t\treturn Sizzle( selector, elem ).length > 0;
\t\t\t};
\t\t}),

\t\t\"contains\": markFunction(function( text ) {
\t\t\treturn function( elem ) {
\t\t\t\treturn ( elem.textContent || elem.innerText || getText( elem ) ).indexOf( text ) > -1;
\t\t\t};
\t\t}),

\t\t// \"Whether an element is represented by a :lang() selector
\t\t// is based solely on the element's language value
\t\t// being equal to the identifier C,
\t\t// or beginning with the identifier C immediately followed by \"-\".
\t\t// The matching of C against the element's language value is performed case-insensitively.
\t\t// The identifier C does not have to be a valid language name.\"
\t\t// http://www.w3.org/TR/selectors/#lang-pseudo
\t\t\"lang\": markFunction( function( lang ) {
\t\t\t// lang value must be a valid identifider
\t\t\tif ( !ridentifier.test(lang || \"\") ) {
\t\t\t\tSizzle.error( \"unsupported lang: \" + lang );
\t\t\t}
\t\t\tlang = lang.replace( runescape, funescape ).toLowerCase();
\t\t\treturn function( elem ) {
\t\t\t\tvar elemLang;
\t\t\t\tdo {
\t\t\t\t\tif ( (elemLang = documentIsXML ?
\t\t\t\t\t\telem.getAttribute(\"xml:lang\") || elem.getAttribute(\"lang\") :
\t\t\t\t\t\telem.lang) ) {

\t\t\t\t\t\telemLang = elemLang.toLowerCase();
\t\t\t\t\t\treturn elemLang === lang || elemLang.indexOf( lang + \"-\" ) === 0;
\t\t\t\t\t}
\t\t\t\t} while ( (elem = elem.parentNode) && elem.nodeType === 1 );
\t\t\t\treturn false;
\t\t\t};
\t\t}),

\t\t// Miscellaneous
\t\t\"target\": function( elem ) {
\t\t\tvar hash = window.location && window.location.hash;
\t\t\treturn hash && hash.slice( 1 ) === elem.id;
\t\t},

\t\t\"root\": function( elem ) {
\t\t\treturn elem === docElem;
\t\t},

\t\t\"focus\": function( elem ) {
\t\t\treturn elem === document.activeElement && (!document.hasFocus || document.hasFocus()) && !!(elem.type || elem.href || ~elem.tabIndex);
\t\t},

\t\t// Boolean properties
\t\t\"enabled\": function( elem ) {
\t\t\treturn elem.disabled === false;
\t\t},

\t\t\"disabled\": function( elem ) {
\t\t\treturn elem.disabled === true;
\t\t},

\t\t\"checked\": function( elem ) {
\t\t\t// In CSS3, :checked should return both checked and selected elements
\t\t\t// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
\t\t\tvar nodeName = elem.nodeName.toLowerCase();
\t\t\treturn (nodeName === \"input\" && !!elem.checked) || (nodeName === \"option\" && !!elem.selected);
\t\t},

\t\t\"selected\": function( elem ) {
\t\t\t// Accessing this property makes selected-by-default
\t\t\t// options in Safari work properly
\t\t\tif ( elem.parentNode ) {
\t\t\t\telem.parentNode.selectedIndex;
\t\t\t}

\t\t\treturn elem.selected === true;
\t\t},

\t\t// Contents
\t\t\"empty\": function( elem ) {
\t\t\t// http://www.w3.org/TR/selectors/#empty-pseudo
\t\t\t// :empty is only affected by element nodes and content nodes(including text(3), cdata(4)),
\t\t\t//   not comment, processing instructions, or others
\t\t\t// Thanks to Diego Perini for the nodeName shortcut
\t\t\t//   Greater than \"@\" means alpha characters (specifically not starting with \"#\" or \"?\")
\t\t\tfor ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
\t\t\t\tif ( elem.nodeName > \"@\" || elem.nodeType === 3 || elem.nodeType === 4 ) {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\treturn true;
\t\t},

\t\t\"parent\": function( elem ) {
\t\t\treturn !Expr.pseudos[\"empty\"]( elem );
\t\t},

\t\t// Element/input types
\t\t\"header\": function( elem ) {
\t\t\treturn rheader.test( elem.nodeName );
\t\t},

\t\t\"input\": function( elem ) {
\t\t\treturn rinputs.test( elem.nodeName );
\t\t},

\t\t\"button\": function( elem ) {
\t\t\tvar name = elem.nodeName.toLowerCase();
\t\t\treturn name === \"input\" && elem.type === \"button\" || name === \"button\";
\t\t},

\t\t\"text\": function( elem ) {
\t\t\tvar attr;
\t\t\t// IE6 and 7 will map elem.type to 'text' for new HTML5 types (search, etc)
\t\t\t// use getAttribute instead to test this case
\t\t\treturn elem.nodeName.toLowerCase() === \"input\" &&
\t\t\t\telem.type === \"text\" &&
\t\t\t\t( (attr = elem.getAttribute(\"type\")) == null || attr.toLowerCase() === elem.type );
\t\t},

\t\t// Position-in-collection
\t\t\"first\": createPositionalPseudo(function() {
\t\t\treturn [ 0 ];
\t\t}),

\t\t\"last\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\treturn [ length - 1 ];
\t\t}),

\t\t\"eq\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\treturn [ argument < 0 ? argument + length : argument ];
\t\t}),

\t\t\"even\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\tvar i = 0;
\t\t\tfor ( ; i < length; i += 2 ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t}),

\t\t\"odd\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\tvar i = 1;
\t\t\tfor ( ; i < length; i += 2 ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t}),

\t\t\"lt\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\tvar i = argument < 0 ? argument + length : argument;
\t\t\tfor ( ; --i >= 0; ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t}),

\t\t\"gt\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\tvar i = argument < 0 ? argument + length : argument;
\t\t\tfor ( ; ++i < length; ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t})
\t}
};

// Add button/input type pseudos
for ( i in { radio: true, checkbox: true, file: true, password: true, image: true } ) {
\tExpr.pseudos[ i ] = createInputPseudo( i );
}
for ( i in { submit: true, reset: true } ) {
\tExpr.pseudos[ i ] = createButtonPseudo( i );
}

function tokenize( selector, parseOnly ) {
\tvar matched, match, tokens, type,
\t\tsoFar, groups, preFilters,
\t\tcached = tokenCache[ selector + \" \" ];

\tif ( cached ) {
\t\treturn parseOnly ? 0 : cached.slice( 0 );
\t}

\tsoFar = selector;
\tgroups = [];
\tpreFilters = Expr.preFilter;

\twhile ( soFar ) {

\t\t// Comma and first run
\t\tif ( !matched || (match = rcomma.exec( soFar )) ) {
\t\t\tif ( match ) {
\t\t\t\t// Don't consume trailing commas as valid
\t\t\t\tsoFar = soFar.slice( match[0].length ) || soFar;
\t\t\t}
\t\t\tgroups.push( tokens = [] );
\t\t}

\t\tmatched = false;

\t\t// Combinators
\t\tif ( (match = rcombinators.exec( soFar )) ) {
\t\t\tmatched = match.shift();
\t\t\ttokens.push( {
\t\t\t\tvalue: matched,
\t\t\t\t// Cast descendant combinators to space
\t\t\t\ttype: match[0].replace( rtrim, \" \" )
\t\t\t} );
\t\t\tsoFar = soFar.slice( matched.length );
\t\t}

\t\t// Filters
\t\tfor ( type in Expr.filter ) {
\t\t\tif ( (match = matchExpr[ type ].exec( soFar )) && (!preFilters[ type ] ||
\t\t\t\t(match = preFilters[ type ]( match ))) ) {
\t\t\t\tmatched = match.shift();
\t\t\t\ttokens.push( {
\t\t\t\t\tvalue: matched,
\t\t\t\t\ttype: type,
\t\t\t\t\tmatches: match
\t\t\t\t} );
\t\t\t\tsoFar = soFar.slice( matched.length );
\t\t\t}
\t\t}

\t\tif ( !matched ) {
\t\t\tbreak;
\t\t}
\t}

\t// Return the length of the invalid excess
\t// if we're just parsing
\t// Otherwise, throw an error or return tokens
\treturn parseOnly ?
\t\tsoFar.length :
\t\tsoFar ?
\t\t\tSizzle.error( selector ) :
\t\t\t// Cache the tokens
\t\t\ttokenCache( selector, groups ).slice( 0 );
}

function toSelector( tokens ) {
\tvar i = 0,
\t\tlen = tokens.length,
\t\tselector = \"\";
\tfor ( ; i < len; i++ ) {
\t\tselector += tokens[i].value;
\t}
\treturn selector;
}

function addCombinator( matcher, combinator, base ) {
\tvar dir = combinator.dir,
\t\tcheckNonElements = base && dir === \"parentNode\",
\t\tdoneName = done++;

\treturn combinator.first ?
\t\t// Check against closest ancestor/preceding element
\t\tfunction( elem, context, xml ) {
\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\treturn matcher( elem, context, xml );
\t\t\t\t}
\t\t\t}
\t\t} :

\t\t// Check against all ancestor/preceding elements
\t\tfunction( elem, context, xml ) {
\t\t\tvar data, cache, outerCache,
\t\t\t\tdirkey = dirruns + \" \" + doneName;

\t\t\t// We can't set arbitrary data on XML nodes, so they don't benefit from dir caching
\t\t\tif ( xml ) {
\t\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\t\tif ( matcher( elem, context, xml ) ) {
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\t\touterCache = elem[ expando ] || (elem[ expando ] = {});
\t\t\t\t\t\tif ( (cache = outerCache[ dir ]) && cache[0] === dirkey ) {
\t\t\t\t\t\t\tif ( (data = cache[1]) === true || data === cachedruns ) {
\t\t\t\t\t\t\t\treturn data === true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tcache = outerCache[ dir ] = [ dirkey ];
\t\t\t\t\t\t\tcache[1] = matcher( elem, context, xml ) || cachedruns;
\t\t\t\t\t\t\tif ( cache[1] === true ) {
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t};
}

function elementMatcher( matchers ) {
\treturn matchers.length > 1 ?
\t\tfunction( elem, context, xml ) {
\t\t\tvar i = matchers.length;
\t\t\twhile ( i-- ) {
\t\t\t\tif ( !matchers[i]( elem, context, xml ) ) {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\treturn true;
\t\t} :
\t\tmatchers[0];
}

function condense( unmatched, map, filter, context, xml ) {
\tvar elem,
\t\tnewUnmatched = [],
\t\ti = 0,
\t\tlen = unmatched.length,
\t\tmapped = map != null;

\tfor ( ; i < len; i++ ) {
\t\tif ( (elem = unmatched[i]) ) {
\t\t\tif ( !filter || filter( elem, context, xml ) ) {
\t\t\t\tnewUnmatched.push( elem );
\t\t\t\tif ( mapped ) {
\t\t\t\t\tmap.push( i );
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn newUnmatched;
}

function setMatcher( preFilter, selector, matcher, postFilter, postFinder, postSelector ) {
\tif ( postFilter && !postFilter[ expando ] ) {
\t\tpostFilter = setMatcher( postFilter );
\t}
\tif ( postFinder && !postFinder[ expando ] ) {
\t\tpostFinder = setMatcher( postFinder, postSelector );
\t}
\treturn markFunction(function( seed, results, context, xml ) {
\t\tvar temp, i, elem,
\t\t\tpreMap = [],
\t\t\tpostMap = [],
\t\t\tpreexisting = results.length,

\t\t\t// Get initial elements from seed or context
\t\t\telems = seed || multipleContexts( selector || \"*\", context.nodeType ? [ context ] : context, [] ),

\t\t\t// Prefilter to get matcher input, preserving a map for seed-results synchronization
\t\t\tmatcherIn = preFilter && ( seed || !selector ) ?
\t\t\t\tcondense( elems, preMap, preFilter, context, xml ) :
\t\t\t\telems,

\t\t\tmatcherOut = matcher ?
\t\t\t\t// If we have a postFinder, or filtered seed, or non-seed postFilter or preexisting results,
\t\t\t\tpostFinder || ( seed ? preFilter : preexisting || postFilter ) ?

\t\t\t\t\t// ...intermediate processing is necessary
\t\t\t\t\t[] :

\t\t\t\t\t// ...otherwise use results directly
\t\t\t\t\tresults :
\t\t\t\tmatcherIn;

\t\t// Find primary matches
\t\tif ( matcher ) {
\t\t\tmatcher( matcherIn, matcherOut, context, xml );
\t\t}

\t\t// Apply postFilter
\t\tif ( postFilter ) {
\t\t\ttemp = condense( matcherOut, postMap );
\t\t\tpostFilter( temp, [], context, xml );

\t\t\t// Un-match failing elements by moving them back to matcherIn
\t\t\ti = temp.length;
\t\t\twhile ( i-- ) {
\t\t\t\tif ( (elem = temp[i]) ) {
\t\t\t\t\tmatcherOut[ postMap[i] ] = !(matcherIn[ postMap[i] ] = elem);
\t\t\t\t}
\t\t\t}
\t\t}

\t\tif ( seed ) {
\t\t\tif ( postFinder || preFilter ) {
\t\t\t\tif ( postFinder ) {
\t\t\t\t\t// Get the final matcherOut by condensing this intermediate into postFinder contexts
\t\t\t\t\ttemp = [];
\t\t\t\t\ti = matcherOut.length;
\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\tif ( (elem = matcherOut[i]) ) {
\t\t\t\t\t\t\t// Restore matcherIn since elem is not yet a final match
\t\t\t\t\t\t\ttemp.push( (matcherIn[i] = elem) );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tpostFinder( null, (matcherOut = []), temp, xml );
\t\t\t\t}

\t\t\t\t// Move matched elements from seed to results to keep them synchronized
\t\t\t\ti = matcherOut.length;
\t\t\t\twhile ( i-- ) {
\t\t\t\t\tif ( (elem = matcherOut[i]) &&
\t\t\t\t\t\t(temp = postFinder ? indexOf.call( seed, elem ) : preMap[i]) > -1 ) {

\t\t\t\t\t\tseed[temp] = !(results[temp] = elem);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t// Add elements to results, through postFinder if defined
\t\t} else {
\t\t\tmatcherOut = condense(
\t\t\t\tmatcherOut === results ?
\t\t\t\t\tmatcherOut.splice( preexisting, matcherOut.length ) :
\t\t\t\t\tmatcherOut
\t\t\t);
\t\t\tif ( postFinder ) {
\t\t\t\tpostFinder( null, results, matcherOut, xml );
\t\t\t} else {
\t\t\t\tpush.apply( results, matcherOut );
\t\t\t}
\t\t}
\t});
}

function matcherFromTokens( tokens ) {
\tvar checkContext, matcher, j,
\t\tlen = tokens.length,
\t\tleadingRelative = Expr.relative[ tokens[0].type ],
\t\timplicitRelative = leadingRelative || Expr.relative[\" \"],
\t\ti = leadingRelative ? 1 : 0,

\t\t// The foundational matcher ensures that elements are reachable from top-level context(s)
\t\tmatchContext = addCombinator( function( elem ) {
\t\t\treturn elem === checkContext;
\t\t}, implicitRelative, true ),
\t\tmatchAnyContext = addCombinator( function( elem ) {
\t\t\treturn indexOf.call( checkContext, elem ) > -1;
\t\t}, implicitRelative, true ),
\t\tmatchers = [ function( elem, context, xml ) {
\t\t\treturn ( !leadingRelative && ( xml || context !== outermostContext ) ) || (
\t\t\t\t(checkContext = context).nodeType ?
\t\t\t\t\tmatchContext( elem, context, xml ) :
\t\t\t\t\tmatchAnyContext( elem, context, xml ) );
\t\t} ];

\tfor ( ; i < len; i++ ) {
\t\tif ( (matcher = Expr.relative[ tokens[i].type ]) ) {
\t\t\tmatchers = [ addCombinator(elementMatcher( matchers ), matcher) ];
\t\t} else {
\t\t\tmatcher = Expr.filter[ tokens[i].type ].apply( null, tokens[i].matches );

\t\t\t// Return special upon seeing a positional matcher
\t\t\tif ( matcher[ expando ] ) {
\t\t\t\t// Find the next relative operator (if any) for proper handling
\t\t\t\tj = ++i;
\t\t\t\tfor ( ; j < len; j++ ) {
\t\t\t\t\tif ( Expr.relative[ tokens[j].type ] ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn setMatcher(
\t\t\t\t\ti > 1 && elementMatcher( matchers ),
\t\t\t\t\ti > 1 && toSelector( tokens.slice( 0, i - 1 ) ).replace( rtrim, \"\$1\" ),
\t\t\t\t\tmatcher,
\t\t\t\t\ti < j && matcherFromTokens( tokens.slice( i, j ) ),
\t\t\t\t\tj < len && matcherFromTokens( (tokens = tokens.slice( j )) ),
\t\t\t\t\tj < len && toSelector( tokens )
\t\t\t\t);
\t\t\t}
\t\t\tmatchers.push( matcher );
\t\t}
\t}

\treturn elementMatcher( matchers );
}

function matcherFromGroupMatchers( elementMatchers, setMatchers ) {
\t// A counter to specify which element is currently being matched
\tvar matcherCachedRuns = 0,
\t\tbySet = setMatchers.length > 0,
\t\tbyElement = elementMatchers.length > 0,
\t\tsuperMatcher = function( seed, context, xml, results, expandContext ) {
\t\t\tvar elem, j, matcher,
\t\t\t\tsetMatched = [],
\t\t\t\tmatchedCount = 0,
\t\t\t\ti = \"0\",
\t\t\t\tunmatched = seed && [],
\t\t\t\toutermost = expandContext != null,
\t\t\t\tcontextBackup = outermostContext,
\t\t\t\t// We must always have either seed elements or context
\t\t\t\telems = seed || byElement && Expr.find[\"TAG\"]( \"*\", expandContext && context.parentNode || context ),
\t\t\t\t// Use integer dirruns iff this is the outermost matcher
\t\t\t\tdirrunsUnique = (dirruns += contextBackup == null ? 1 : Math.random() || 0.1);

\t\t\tif ( outermost ) {
\t\t\t\toutermostContext = context !== document && context;
\t\t\t\tcachedruns = matcherCachedRuns;
\t\t\t}

\t\t\t// Add elements passing elementMatchers directly to results
\t\t\t// Keep `i` a string if there are no elements so `matchedCount` will be \"00\" below
\t\t\tfor ( ; (elem = elems[i]) != null; i++ ) {
\t\t\t\tif ( byElement && elem ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( (matcher = elementMatchers[j++]) ) {
\t\t\t\t\t\tif ( matcher( elem, context, xml ) ) {
\t\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( outermost ) {
\t\t\t\t\t\tdirruns = dirrunsUnique;
\t\t\t\t\t\tcachedruns = ++matcherCachedRuns;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Track unmatched elements for set filters
\t\t\t\tif ( bySet ) {
\t\t\t\t\t// They will have gone through all possible matchers
\t\t\t\t\tif ( (elem = !matcher && elem) ) {
\t\t\t\t\t\tmatchedCount--;
\t\t\t\t\t}

\t\t\t\t\t// Lengthen the array for every element, matched or not
\t\t\t\t\tif ( seed ) {
\t\t\t\t\t\tunmatched.push( elem );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Apply set filters to unmatched elements
\t\t\tmatchedCount += i;
\t\t\tif ( bySet && i !== matchedCount ) {
\t\t\t\tj = 0;
\t\t\t\twhile ( (matcher = setMatchers[j++]) ) {
\t\t\t\t\tmatcher( unmatched, setMatched, context, xml );
\t\t\t\t}

\t\t\t\tif ( seed ) {
\t\t\t\t\t// Reintegrate element matches to eliminate the need for sorting
\t\t\t\t\tif ( matchedCount > 0 ) {
\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\tif ( !(unmatched[i] || setMatched[i]) ) {
\t\t\t\t\t\t\t\tsetMatched[i] = pop.call( results );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Discard index placeholder values to get only actual matches
\t\t\t\t\tsetMatched = condense( setMatched );
\t\t\t\t}

\t\t\t\t// Add matches to results
\t\t\t\tpush.apply( results, setMatched );

\t\t\t\t// Seedless set matches succeeding multiple successful matchers stipulate sorting
\t\t\t\tif ( outermost && !seed && setMatched.length > 0 &&
\t\t\t\t\t( matchedCount + setMatchers.length ) > 1 ) {

\t\t\t\t\tSizzle.uniqueSort( results );
\t\t\t\t}
\t\t\t}

\t\t\t// Override manipulation of globals by nested matchers
\t\t\tif ( outermost ) {
\t\t\t\tdirruns = dirrunsUnique;
\t\t\t\toutermostContext = contextBackup;
\t\t\t}

\t\t\treturn unmatched;
\t\t};

\treturn bySet ?
\t\tmarkFunction( superMatcher ) :
\t\tsuperMatcher;
}

compile = Sizzle.compile = function( selector, group /* Internal Use Only */ ) {
\tvar i,
\t\tsetMatchers = [],
\t\telementMatchers = [],
\t\tcached = compilerCache[ selector + \" \" ];

\tif ( !cached ) {
\t\t// Generate a function of recursive functions that can be used to check each element
\t\tif ( !group ) {
\t\t\tgroup = tokenize( selector );
\t\t}
\t\ti = group.length;
\t\twhile ( i-- ) {
\t\t\tcached = matcherFromTokens( group[i] );
\t\t\tif ( cached[ expando ] ) {
\t\t\t\tsetMatchers.push( cached );
\t\t\t} else {
\t\t\t\telementMatchers.push( cached );
\t\t\t}
\t\t}

\t\t// Cache the compiled function
\t\tcached = compilerCache( selector, matcherFromGroupMatchers( elementMatchers, setMatchers ) );
\t}
\treturn cached;
};

function multipleContexts( selector, contexts, results ) {
\tvar i = 0,
\t\tlen = contexts.length;
\tfor ( ; i < len; i++ ) {
\t\tSizzle( selector, contexts[i], results );
\t}
\treturn results;
}

function select( selector, context, results, seed ) {
\tvar i, tokens, token, type, find,
\t\tmatch = tokenize( selector );

\tif ( !seed ) {
\t\t// Try to minimize operations if there is only one group
\t\tif ( match.length === 1 ) {

\t\t\t// Take a shortcut and set the context if the root selector is an ID
\t\t\ttokens = match[0] = match[0].slice( 0 );
\t\t\tif ( tokens.length > 2 && (token = tokens[0]).type === \"ID\" &&
\t\t\t\t\tcontext.nodeType === 9 && !documentIsXML &&
\t\t\t\t\tExpr.relative[ tokens[1].type ] ) {

\t\t\t\tcontext = Expr.find[\"ID\"]( token.matches[0].replace( runescape, funescape ), context )[0];
\t\t\t\tif ( !context ) {
\t\t\t\t\treturn results;
\t\t\t\t}

\t\t\t\tselector = selector.slice( tokens.shift().value.length );
\t\t\t}

\t\t\t// Fetch a seed set for right-to-left matching
\t\t\ti = matchExpr[\"needsContext\"].test( selector ) ? 0 : tokens.length;
\t\t\twhile ( i-- ) {
\t\t\t\ttoken = tokens[i];

\t\t\t\t// Abort if we hit a combinator
\t\t\t\tif ( Expr.relative[ (type = token.type) ] ) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tif ( (find = Expr.find[ type ]) ) {
\t\t\t\t\t// Search, expanding context for leading sibling combinators
\t\t\t\t\tif ( (seed = find(
\t\t\t\t\t\ttoken.matches[0].replace( runescape, funescape ),
\t\t\t\t\t\trsibling.test( tokens[0].type ) && context.parentNode || context
\t\t\t\t\t)) ) {

\t\t\t\t\t\t// If seed is empty or no tokens remain, we can return early
\t\t\t\t\t\ttokens.splice( i, 1 );
\t\t\t\t\t\tselector = seed.length && toSelector( tokens );
\t\t\t\t\t\tif ( !selector ) {
\t\t\t\t\t\t\tpush.apply( results, slice.call( seed, 0 ) );
\t\t\t\t\t\t\treturn results;
\t\t\t\t\t\t}

\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// Compile and execute a filtering function
\t// Provide `match` to avoid retokenization if we modified the selector above
\tcompile( selector, match )(
\t\tseed,
\t\tcontext,
\t\tdocumentIsXML,
\t\tresults,
\t\trsibling.test( selector )
\t);
\treturn results;
}

// Deprecated
Expr.pseudos[\"nth\"] = Expr.pseudos[\"eq\"];

// Easy API for creating new setFilters
function setFilters() {}
Expr.filters = setFilters.prototype = Expr.pseudos;
Expr.setFilters = new setFilters();

// Initialize with the default document
setDocument();

// Override sizzle attribute retrieval
Sizzle.attr = jQuery.attr;
jQuery.find = Sizzle;
jQuery.expr = Sizzle.selectors;
jQuery.expr[\":\"] = jQuery.expr.pseudos;
jQuery.unique = Sizzle.uniqueSort;
jQuery.text = Sizzle.getText;
jQuery.isXMLDoc = Sizzle.isXML;
jQuery.contains = Sizzle.contains;


})( window );
var runtil = /Until\$/,
\trparentsprev = /^(?:parents|prev(?:Until|All))/,
\tisSimple = /^.[^:#\\[\\.,]*\$/,
\trneedsContext = jQuery.expr.match.needsContext,
\t// methods guaranteed to produce a unique set when starting from a unique set
\tguaranteedUnique = {
\t\tchildren: true,
\t\tcontents: true,
\t\tnext: true,
\t\tprev: true
\t};

jQuery.fn.extend({
\tfind: function( selector ) {
\t\tvar i, ret, self,
\t\t\tlen = this.length;

\t\tif ( typeof selector !== \"string\" ) {
\t\t\tself = this;
\t\t\treturn this.pushStack( jQuery( selector ).filter(function() {
\t\t\t\tfor ( i = 0; i < len; i++ ) {
\t\t\t\t\tif ( jQuery.contains( self[ i ], this ) ) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}) );
\t\t}

\t\tret = [];
\t\tfor ( i = 0; i < len; i++ ) {
\t\t\tjQuery.find( selector, this[ i ], ret );
\t\t}

\t\t// Needed because \$( selector, context ) becomes \$( context ).find( selector )
\t\tret = this.pushStack( len > 1 ? jQuery.unique( ret ) : ret );
\t\tret.selector = ( this.selector ? this.selector + \" \" : \"\" ) + selector;
\t\treturn ret;
\t},

\thas: function( target ) {
\t\tvar i,
\t\t\ttargets = jQuery( target, this ),
\t\t\tlen = targets.length;

\t\treturn this.filter(function() {
\t\t\tfor ( i = 0; i < len; i++ ) {
\t\t\t\tif ( jQuery.contains( this, targets[i] ) ) {
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t});
\t},

\tnot: function( selector ) {
\t\treturn this.pushStack( winnow(this, selector, false) );
\t},

\tfilter: function( selector ) {
\t\treturn this.pushStack( winnow(this, selector, true) );
\t},

\tis: function( selector ) {
\t\treturn !!selector && (
\t\t\ttypeof selector === \"string\" ?
\t\t\t\t// If this is a positional/relative selector, check membership in the returned set
\t\t\t\t// so \$(\"p:first\").is(\"p:last\") won't return true for a doc with two \"p\".
\t\t\t\trneedsContext.test( selector ) ?
\t\t\t\t\tjQuery( selector, this.context ).index( this[0] ) >= 0 :
\t\t\t\t\tjQuery.filter( selector, this ).length > 0 :
\t\t\t\tthis.filter( selector ).length > 0 );
\t},

\tclosest: function( selectors, context ) {
\t\tvar cur,
\t\t\ti = 0,
\t\t\tl = this.length,
\t\t\tret = [],
\t\t\tpos = rneedsContext.test( selectors ) || typeof selectors !== \"string\" ?
\t\t\t\tjQuery( selectors, context || this.context ) :
\t\t\t\t0;

\t\tfor ( ; i < l; i++ ) {
\t\t\tcur = this[i];

\t\t\twhile ( cur && cur.ownerDocument && cur !== context && cur.nodeType !== 11 ) {
\t\t\t\tif ( pos ? pos.index(cur) > -1 : jQuery.find.matchesSelector(cur, selectors) ) {
\t\t\t\t\tret.push( cur );
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tcur = cur.parentNode;
\t\t\t}
\t\t}

\t\treturn this.pushStack( ret.length > 1 ? jQuery.unique( ret ) : ret );
\t},

\t// Determine the position of an element within
\t// the matched set of elements
\tindex: function( elem ) {

\t\t// No argument, return index in parent
\t\tif ( !elem ) {
\t\t\treturn ( this[0] && this[0].parentNode ) ? this.first().prevAll().length : -1;
\t\t}

\t\t// index in selector
\t\tif ( typeof elem === \"string\" ) {
\t\t\treturn jQuery.inArray( this[0], jQuery( elem ) );
\t\t}

\t\t// Locate the position of the desired element
\t\treturn jQuery.inArray(
\t\t\t// If it receives a jQuery object, the first element is used
\t\t\telem.jquery ? elem[0] : elem, this );
\t},

\tadd: function( selector, context ) {
\t\tvar set = typeof selector === \"string\" ?
\t\t\t\tjQuery( selector, context ) :
\t\t\t\tjQuery.makeArray( selector && selector.nodeType ? [ selector ] : selector ),
\t\t\tall = jQuery.merge( this.get(), set );

\t\treturn this.pushStack( jQuery.unique(all) );
\t},

\taddBack: function( selector ) {
\t\treturn this.add( selector == null ?
\t\t\tthis.prevObject : this.prevObject.filter(selector)
\t\t);
\t}
});

jQuery.fn.andSelf = jQuery.fn.addBack;

function sibling( cur, dir ) {
\tdo {
\t\tcur = cur[ dir ];
\t} while ( cur && cur.nodeType !== 1 );

\treturn cur;
}

jQuery.each({
\tparent: function( elem ) {
\t\tvar parent = elem.parentNode;
\t\treturn parent && parent.nodeType !== 11 ? parent : null;
\t},
\tparents: function( elem ) {
\t\treturn jQuery.dir( elem, \"parentNode\" );
\t},
\tparentsUntil: function( elem, i, until ) {
\t\treturn jQuery.dir( elem, \"parentNode\", until );
\t},
\tnext: function( elem ) {
\t\treturn sibling( elem, \"nextSibling\" );
\t},
\tprev: function( elem ) {
\t\treturn sibling( elem, \"previousSibling\" );
\t},
\tnextAll: function( elem ) {
\t\treturn jQuery.dir( elem, \"nextSibling\" );
\t},
\tprevAll: function( elem ) {
\t\treturn jQuery.dir( elem, \"previousSibling\" );
\t},
\tnextUntil: function( elem, i, until ) {
\t\treturn jQuery.dir( elem, \"nextSibling\", until );
\t},
\tprevUntil: function( elem, i, until ) {
\t\treturn jQuery.dir( elem, \"previousSibling\", until );
\t},
\tsiblings: function( elem ) {
\t\treturn jQuery.sibling( ( elem.parentNode || {} ).firstChild, elem );
\t},
\tchildren: function( elem ) {
\t\treturn jQuery.sibling( elem.firstChild );
\t},
\tcontents: function( elem ) {
\t\treturn jQuery.nodeName( elem, \"iframe\" ) ?
\t\t\telem.contentDocument || elem.contentWindow.document :
\t\t\tjQuery.merge( [], elem.childNodes );
\t}
}, function( name, fn ) {
\tjQuery.fn[ name ] = function( until, selector ) {
\t\tvar ret = jQuery.map( this, fn, until );

\t\tif ( !runtil.test( name ) ) {
\t\t\tselector = until;
\t\t}

\t\tif ( selector && typeof selector === \"string\" ) {
\t\t\tret = jQuery.filter( selector, ret );
\t\t}

\t\tret = this.length > 1 && !guaranteedUnique[ name ] ? jQuery.unique( ret ) : ret;

\t\tif ( this.length > 1 && rparentsprev.test( name ) ) {
\t\t\tret = ret.reverse();
\t\t}

\t\treturn this.pushStack( ret );
\t};
});

jQuery.extend({
\tfilter: function( expr, elems, not ) {
\t\tif ( not ) {
\t\t\texpr = \":not(\" + expr + \")\";
\t\t}

\t\treturn elems.length === 1 ?
\t\t\tjQuery.find.matchesSelector(elems[0], expr) ? [ elems[0] ] : [] :
\t\t\tjQuery.find.matches(expr, elems);
\t},

\tdir: function( elem, dir, until ) {
\t\tvar matched = [],
\t\t\tcur = elem[ dir ];

\t\twhile ( cur && cur.nodeType !== 9 && (until === undefined || cur.nodeType !== 1 || !jQuery( cur ).is( until )) ) {
\t\t\tif ( cur.nodeType === 1 ) {
\t\t\t\tmatched.push( cur );
\t\t\t}
\t\t\tcur = cur[dir];
\t\t}
\t\treturn matched;
\t},

\tsibling: function( n, elem ) {
\t\tvar r = [];

\t\tfor ( ; n; n = n.nextSibling ) {
\t\t\tif ( n.nodeType === 1 && n !== elem ) {
\t\t\t\tr.push( n );
\t\t\t}
\t\t}

\t\treturn r;
\t}
});

// Implement the identical functionality for filter and not
function winnow( elements, qualifier, keep ) {

\t// Can't pass null or undefined to indexOf in Firefox 4
\t// Set to 0 to skip string check
\tqualifier = qualifier || 0;

\tif ( jQuery.isFunction( qualifier ) ) {
\t\treturn jQuery.grep(elements, function( elem, i ) {
\t\t\tvar retVal = !!qualifier.call( elem, i, elem );
\t\t\treturn retVal === keep;
\t\t});

\t} else if ( qualifier.nodeType ) {
\t\treturn jQuery.grep(elements, function( elem ) {
\t\t\treturn ( elem === qualifier ) === keep;
\t\t});

\t} else if ( typeof qualifier === \"string\" ) {
\t\tvar filtered = jQuery.grep(elements, function( elem ) {
\t\t\treturn elem.nodeType === 1;
\t\t});

\t\tif ( isSimple.test( qualifier ) ) {
\t\t\treturn jQuery.filter(qualifier, filtered, !keep);
\t\t} else {
\t\t\tqualifier = jQuery.filter( qualifier, filtered );
\t\t}
\t}

\treturn jQuery.grep(elements, function( elem ) {
\t\treturn ( jQuery.inArray( elem, qualifier ) >= 0 ) === keep;
\t});
}
function createSafeFragment( document ) {
\tvar list = nodeNames.split( \"|\" ),
\t\tsafeFrag = document.createDocumentFragment();

\tif ( safeFrag.createElement ) {
\t\twhile ( list.length ) {
\t\t\tsafeFrag.createElement(
\t\t\t\tlist.pop()
\t\t\t);
\t\t}
\t}
\treturn safeFrag;
}

var nodeNames = \"abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|\" +
\t\t\"header|hgroup|mark|meter|nav|output|progress|section|summary|time|video\",
\trinlinejQuery = / jQuery\\d+=\"(?:null|\\d+)\"/g,
\trnoshimcache = new RegExp(\"<(?:\" + nodeNames + \")[\\\\s/>]\", \"i\"),
\trleadingWhitespace = /^\\s+/,
\trxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\\w:]+)[^>]*)\\/>/gi,
\trtagName = /<([\\w:]+)/,
\trtbody = /<tbody/i,
\trhtml = /<|&#?\\w+;/,
\trnoInnerhtml = /<(?:script|style|link)/i,
\tmanipulation_rcheckableType = /^(?:checkbox|radio)\$/i,
\t// checked=\"checked\" or checked
\trchecked = /checked\\s*(?:[^=]|=\\s*.checked.)/i,
\trscriptType = /^\$|\\/(?:java|ecma)script/i,
\trscriptTypeMasked = /^true\\/(.*)/,
\trcleanScript = /^\\s*<!(?:\\[CDATA\\[|--)|(?:\\]\\]|--)>\\s*\$/g,

\t// We have to close these tags to support XHTML (#13200)
\twrapMap = {
\t\toption: [ 1, \"<select multiple='multiple'>\", \"</select>\" ],
\t\tlegend: [ 1, \"<fieldset>\", \"</fieldset>\" ],
\t\tarea: [ 1, \"<map>\", \"</map>\" ],
\t\tparam: [ 1, \"<object>\", \"</object>\" ],
\t\tthead: [ 1, \"<table>\", \"</table>\" ],
\t\ttr: [ 2, \"<table><tbody>\", \"</tbody></table>\" ],
\t\tcol: [ 2, \"<table><tbody></tbody><colgroup>\", \"</colgroup></table>\" ],
\t\ttd: [ 3, \"<table><tbody><tr>\", \"</tr></tbody></table>\" ],

\t\t// IE6-8 can't serialize link, script, style, or any html5 (NoScope) tags,
\t\t// unless wrapped in a div with non-breaking characters in front of it.
\t\t_default: jQuery.support.htmlSerialize ? [ 0, \"\", \"\" ] : [ 1, \"X<div>\", \"</div>\"  ]
\t},
\tsafeFragment = createSafeFragment( document ),
\tfragmentDiv = safeFragment.appendChild( document.createElement(\"div\") );

wrapMap.optgroup = wrapMap.option;
wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
wrapMap.th = wrapMap.td;

jQuery.fn.extend({
\ttext: function( value ) {
\t\treturn jQuery.access( this, function( value ) {
\t\t\treturn value === undefined ?
\t\t\t\tjQuery.text( this ) :
\t\t\t\tthis.empty().append( ( this[0] && this[0].ownerDocument || document ).createTextNode( value ) );
\t\t}, null, value, arguments.length );
\t},

\twrapAll: function( html ) {
\t\tif ( jQuery.isFunction( html ) ) {
\t\t\treturn this.each(function(i) {
\t\t\t\tjQuery(this).wrapAll( html.call(this, i) );
\t\t\t});
\t\t}

\t\tif ( this[0] ) {
\t\t\t// The elements to wrap the target around
\t\t\tvar wrap = jQuery( html, this[0].ownerDocument ).eq(0).clone(true);

\t\t\tif ( this[0].parentNode ) {
\t\t\t\twrap.insertBefore( this[0] );
\t\t\t}

\t\t\twrap.map(function() {
\t\t\t\tvar elem = this;

\t\t\t\twhile ( elem.firstChild && elem.firstChild.nodeType === 1 ) {
\t\t\t\t\telem = elem.firstChild;
\t\t\t\t}

\t\t\t\treturn elem;
\t\t\t}).append( this );
\t\t}

\t\treturn this;
\t},

\twrapInner: function( html ) {
\t\tif ( jQuery.isFunction( html ) ) {
\t\t\treturn this.each(function(i) {
\t\t\t\tjQuery(this).wrapInner( html.call(this, i) );
\t\t\t});
\t\t}

\t\treturn this.each(function() {
\t\t\tvar self = jQuery( this ),
\t\t\t\tcontents = self.contents();

\t\t\tif ( contents.length ) {
\t\t\t\tcontents.wrapAll( html );

\t\t\t} else {
\t\t\t\tself.append( html );
\t\t\t}
\t\t});
\t},

\twrap: function( html ) {
\t\tvar isFunction = jQuery.isFunction( html );

\t\treturn this.each(function(i) {
\t\t\tjQuery( this ).wrapAll( isFunction ? html.call(this, i) : html );
\t\t});
\t},

\tunwrap: function() {
\t\treturn this.parent().each(function() {
\t\t\tif ( !jQuery.nodeName( this, \"body\" ) ) {
\t\t\t\tjQuery( this ).replaceWith( this.childNodes );
\t\t\t}
\t\t}).end();
\t},

\tappend: function() {
\t\treturn this.domManip(arguments, true, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tthis.appendChild( elem );
\t\t\t}
\t\t});
\t},

\tprepend: function() {
\t\treturn this.domManip(arguments, true, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tthis.insertBefore( elem, this.firstChild );
\t\t\t}
\t\t});
\t},

\tbefore: function() {
\t\treturn this.domManip( arguments, false, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this );
\t\t\t}
\t\t});
\t},

\tafter: function() {
\t\treturn this.domManip( arguments, false, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this.nextSibling );
\t\t\t}
\t\t});
\t},

\t// keepData is for internal use only--do not document
\tremove: function( selector, keepData ) {
\t\tvar elem,
\t\t\ti = 0;

\t\tfor ( ; (elem = this[i]) != null; i++ ) {
\t\t\tif ( !selector || jQuery.filter( selector, [ elem ] ).length > 0 ) {
\t\t\t\tif ( !keepData && elem.nodeType === 1 ) {
\t\t\t\t\tjQuery.cleanData( getAll( elem ) );
\t\t\t\t}

\t\t\t\tif ( elem.parentNode ) {
\t\t\t\t\tif ( keepData && jQuery.contains( elem.ownerDocument, elem ) ) {
\t\t\t\t\t\tsetGlobalEval( getAll( elem, \"script\" ) );
\t\t\t\t\t}
\t\t\t\t\telem.parentNode.removeChild( elem );
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tempty: function() {
\t\tvar elem,
\t\t\ti = 0;

\t\tfor ( ; (elem = this[i]) != null; i++ ) {
\t\t\t// Remove element nodes and prevent memory leaks
\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\tjQuery.cleanData( getAll( elem, false ) );
\t\t\t}

\t\t\t// Remove any remaining nodes
\t\t\twhile ( elem.firstChild ) {
\t\t\t\telem.removeChild( elem.firstChild );
\t\t\t}

\t\t\t// If this is a select, ensure that it displays empty (#12336)
\t\t\t// Support: IE<9
\t\t\tif ( elem.options && jQuery.nodeName( elem, \"select\" ) ) {
\t\t\t\telem.options.length = 0;
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tclone: function( dataAndEvents, deepDataAndEvents ) {
\t\tdataAndEvents = dataAndEvents == null ? false : dataAndEvents;
\t\tdeepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;

\t\treturn this.map( function () {
\t\t\treturn jQuery.clone( this, dataAndEvents, deepDataAndEvents );
\t\t});
\t},

\thtml: function( value ) {
\t\treturn jQuery.access( this, function( value ) {
\t\t\tvar elem = this[0] || {},
\t\t\t\ti = 0,
\t\t\t\tl = this.length;

\t\t\tif ( value === undefined ) {
\t\t\t\treturn elem.nodeType === 1 ?
\t\t\t\t\telem.innerHTML.replace( rinlinejQuery, \"\" ) :
\t\t\t\t\tundefined;
\t\t\t}

\t\t\t// See if we can take a shortcut and just use innerHTML
\t\t\tif ( typeof value === \"string\" && !rnoInnerhtml.test( value ) &&
\t\t\t\t( jQuery.support.htmlSerialize || !rnoshimcache.test( value )  ) &&
\t\t\t\t( jQuery.support.leadingWhitespace || !rleadingWhitespace.test( value ) ) &&
\t\t\t\t!wrapMap[ ( rtagName.exec( value ) || [\"\", \"\"] )[1].toLowerCase() ] ) {

\t\t\t\tvalue = value.replace( rxhtmlTag, \"<\$1></\$2>\" );

\t\t\t\ttry {
\t\t\t\t\tfor (; i < l; i++ ) {
\t\t\t\t\t\t// Remove element nodes and prevent memory leaks
\t\t\t\t\t\telem = this[i] || {};
\t\t\t\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\t\t\t\tjQuery.cleanData( getAll( elem, false ) );
\t\t\t\t\t\t\telem.innerHTML = value;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\telem = 0;

\t\t\t\t// If using innerHTML throws an exception, use the fallback method
\t\t\t\t} catch(e) {}
\t\t\t}

\t\t\tif ( elem ) {
\t\t\t\tthis.empty().append( value );
\t\t\t}
\t\t}, null, value, arguments.length );
\t},

\treplaceWith: function( value ) {
\t\tvar isFunc = jQuery.isFunction( value );

\t\t// Make sure that the elements are removed from the DOM before they are inserted
\t\t// this can help fix replacing a parent with child elements
\t\tif ( !isFunc && typeof value !== \"string\" ) {
\t\t\tvalue = jQuery( value ).not( this ).detach();
\t\t}

\t\treturn this.domManip( [ value ], true, function( elem ) {
\t\t\tvar next = this.nextSibling,
\t\t\t\tparent = this.parentNode;

\t\t\tif ( parent ) {
\t\t\t\tjQuery( this ).remove();
\t\t\t\tparent.insertBefore( elem, next );
\t\t\t}
\t\t});
\t},

\tdetach: function( selector ) {
\t\treturn this.remove( selector, true );
\t},

\tdomManip: function( args, table, callback ) {

\t\t// Flatten any nested arrays
\t\targs = core_concat.apply( [], args );

\t\tvar first, node, hasScripts,
\t\t\tscripts, doc, fragment,
\t\t\ti = 0,
\t\t\tl = this.length,
\t\t\tset = this,
\t\t\tiNoClone = l - 1,
\t\t\tvalue = args[0],
\t\t\tisFunction = jQuery.isFunction( value );

\t\t// We can't cloneNode fragments that contain checked, in WebKit
\t\tif ( isFunction || !( l <= 1 || typeof value !== \"string\" || jQuery.support.checkClone || !rchecked.test( value ) ) ) {
\t\t\treturn this.each(function( index ) {
\t\t\t\tvar self = set.eq( index );
\t\t\t\tif ( isFunction ) {
\t\t\t\t\targs[0] = value.call( this, index, table ? self.html() : undefined );
\t\t\t\t}
\t\t\t\tself.domManip( args, table, callback );
\t\t\t});
\t\t}

\t\tif ( l ) {
\t\t\tfragment = jQuery.buildFragment( args, this[ 0 ].ownerDocument, false, this );
\t\t\tfirst = fragment.firstChild;

\t\t\tif ( fragment.childNodes.length === 1 ) {
\t\t\t\tfragment = first;
\t\t\t}

\t\t\tif ( first ) {
\t\t\t\ttable = table && jQuery.nodeName( first, \"tr\" );
\t\t\t\tscripts = jQuery.map( getAll( fragment, \"script\" ), disableScript );
\t\t\t\thasScripts = scripts.length;

\t\t\t\t// Use the original fragment for the last item instead of the first because it can end up
\t\t\t\t// being emptied incorrectly in certain situations (#8070).
\t\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\t\tnode = fragment;

\t\t\t\t\tif ( i !== iNoClone ) {
\t\t\t\t\t\tnode = jQuery.clone( node, true, true );

\t\t\t\t\t\t// Keep references to cloned scripts for later restoration
\t\t\t\t\t\tif ( hasScripts ) {
\t\t\t\t\t\t\tjQuery.merge( scripts, getAll( node, \"script\" ) );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tcallback.call(
\t\t\t\t\t\ttable && jQuery.nodeName( this[i], \"table\" ) ?
\t\t\t\t\t\t\tfindOrAppend( this[i], \"tbody\" ) :
\t\t\t\t\t\t\tthis[i],
\t\t\t\t\t\tnode,
\t\t\t\t\t\ti
\t\t\t\t\t);
\t\t\t\t}

\t\t\t\tif ( hasScripts ) {
\t\t\t\t\tdoc = scripts[ scripts.length - 1 ].ownerDocument;

\t\t\t\t\t// Reenable scripts
\t\t\t\t\tjQuery.map( scripts, restoreScript );

\t\t\t\t\t// Evaluate executable scripts on first document insertion
\t\t\t\t\tfor ( i = 0; i < hasScripts; i++ ) {
\t\t\t\t\t\tnode = scripts[ i ];
\t\t\t\t\t\tif ( rscriptType.test( node.type || \"\" ) &&
\t\t\t\t\t\t\t!jQuery._data( node, \"globalEval\" ) && jQuery.contains( doc, node ) ) {

\t\t\t\t\t\t\tif ( node.src ) {
\t\t\t\t\t\t\t\t// Hope ajax is available...
\t\t\t\t\t\t\t\tjQuery.ajax({
\t\t\t\t\t\t\t\t\turl: node.src,
\t\t\t\t\t\t\t\t\ttype: \"GET\",
\t\t\t\t\t\t\t\t\tdataType: \"script\",
\t\t\t\t\t\t\t\t\tasync: false,
\t\t\t\t\t\t\t\t\tglobal: false,
\t\t\t\t\t\t\t\t\t\"throws\": true
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tjQuery.globalEval( ( node.text || node.textContent || node.innerHTML || \"\" ).replace( rcleanScript, \"\" ) );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Fix #11809: Avoid leaking memory
\t\t\t\tfragment = first = null;
\t\t\t}
\t\t}

\t\treturn this;
\t}
});

function findOrAppend( elem, tag ) {
\treturn elem.getElementsByTagName( tag )[0] || elem.appendChild( elem.ownerDocument.createElement( tag ) );
}

// Replace/restore the type attribute of script elements for safe DOM manipulation
function disableScript( elem ) {
\tvar attr = elem.getAttributeNode(\"type\");
\telem.type = ( attr && attr.specified ) + \"/\" + elem.type;
\treturn elem;
}
function restoreScript( elem ) {
\tvar match = rscriptTypeMasked.exec( elem.type );
\tif ( match ) {
\t\telem.type = match[1];
\t} else {
\t\telem.removeAttribute(\"type\");
\t}
\treturn elem;
}

// Mark scripts as having already been evaluated
function setGlobalEval( elems, refElements ) {
\tvar elem,
\t\ti = 0;
\tfor ( ; (elem = elems[i]) != null; i++ ) {
\t\tjQuery._data( elem, \"globalEval\", !refElements || jQuery._data( refElements[i], \"globalEval\" ) );
\t}
}

function cloneCopyEvent( src, dest ) {

\tif ( dest.nodeType !== 1 || !jQuery.hasData( src ) ) {
\t\treturn;
\t}

\tvar type, i, l,
\t\toldData = jQuery._data( src ),
\t\tcurData = jQuery._data( dest, oldData ),
\t\tevents = oldData.events;

\tif ( events ) {
\t\tdelete curData.handle;
\t\tcurData.events = {};

\t\tfor ( type in events ) {
\t\t\tfor ( i = 0, l = events[ type ].length; i < l; i++ ) {
\t\t\t\tjQuery.event.add( dest, type, events[ type ][ i ] );
\t\t\t}
\t\t}
\t}

\t// make the cloned public data object a copy from the original
\tif ( curData.data ) {
\t\tcurData.data = jQuery.extend( {}, curData.data );
\t}
}

function fixCloneNodeIssues( src, dest ) {
\tvar nodeName, e, data;

\t// We do not need to do anything for non-Elements
\tif ( dest.nodeType !== 1 ) {
\t\treturn;
\t}

\tnodeName = dest.nodeName.toLowerCase();

\t// IE6-8 copies events bound via attachEvent when using cloneNode.
\tif ( !jQuery.support.noCloneEvent && dest[ jQuery.expando ] ) {
\t\tdata = jQuery._data( dest );

\t\tfor ( e in data.events ) {
\t\t\tjQuery.removeEvent( dest, e, data.handle );
\t\t}

\t\t// Event data gets referenced instead of copied if the expando gets copied too
\t\tdest.removeAttribute( jQuery.expando );
\t}

\t// IE blanks contents when cloning scripts, and tries to evaluate newly-set text
\tif ( nodeName === \"script\" && dest.text !== src.text ) {
\t\tdisableScript( dest ).text = src.text;
\t\trestoreScript( dest );

\t// IE6-10 improperly clones children of object elements using classid.
\t// IE10 throws NoModificationAllowedError if parent is null, #12132.
\t} else if ( nodeName === \"object\" ) {
\t\tif ( dest.parentNode ) {
\t\t\tdest.outerHTML = src.outerHTML;
\t\t}

\t\t// This path appears unavoidable for IE9. When cloning an object
\t\t// element in IE9, the outerHTML strategy above is not sufficient.
\t\t// If the src has innerHTML and the destination does not,
\t\t// copy the src.innerHTML into the dest.innerHTML. #10324
\t\tif ( jQuery.support.html5Clone && ( src.innerHTML && !jQuery.trim(dest.innerHTML) ) ) {
\t\t\tdest.innerHTML = src.innerHTML;
\t\t}

\t} else if ( nodeName === \"input\" && manipulation_rcheckableType.test( src.type ) ) {
\t\t// IE6-8 fails to persist the checked state of a cloned checkbox
\t\t// or radio button. Worse, IE6-7 fail to give the cloned element
\t\t// a checked appearance if the defaultChecked value isn't also set

\t\tdest.defaultChecked = dest.checked = src.checked;

\t\t// IE6-7 get confused and end up setting the value of a cloned
\t\t// checkbox/radio button to an empty string instead of \"on\"
\t\tif ( dest.value !== src.value ) {
\t\t\tdest.value = src.value;
\t\t}

\t// IE6-8 fails to return the selected option to the default selected
\t// state when cloning options
\t} else if ( nodeName === \"option\" ) {
\t\tdest.defaultSelected = dest.selected = src.defaultSelected;

\t// IE6-8 fails to set the defaultValue to the correct value when
\t// cloning other types of input fields
\t} else if ( nodeName === \"input\" || nodeName === \"textarea\" ) {
\t\tdest.defaultValue = src.defaultValue;
\t}
}

jQuery.each({
\tappendTo: \"append\",
\tprependTo: \"prepend\",
\tinsertBefore: \"before\",
\tinsertAfter: \"after\",
\treplaceAll: \"replaceWith\"
}, function( name, original ) {
\tjQuery.fn[ name ] = function( selector ) {
\t\tvar elems,
\t\t\ti = 0,
\t\t\tret = [],
\t\t\tinsert = jQuery( selector ),
\t\t\tlast = insert.length - 1;

\t\tfor ( ; i <= last; i++ ) {
\t\t\telems = i === last ? this : this.clone(true);
\t\t\tjQuery( insert[i] )[ original ]( elems );

\t\t\t// Modern browsers can apply jQuery collections as arrays, but oldIE needs a .get()
\t\t\tcore_push.apply( ret, elems.get() );
\t\t}

\t\treturn this.pushStack( ret );
\t};
});

function getAll( context, tag ) {
\tvar elems, elem,
\t\ti = 0,
\t\tfound = typeof context.getElementsByTagName !== core_strundefined ? context.getElementsByTagName( tag || \"*\" ) :
\t\t\ttypeof context.querySelectorAll !== core_strundefined ? context.querySelectorAll( tag || \"*\" ) :
\t\t\tundefined;

\tif ( !found ) {
\t\tfor ( found = [], elems = context.childNodes || context; (elem = elems[i]) != null; i++ ) {
\t\t\tif ( !tag || jQuery.nodeName( elem, tag ) ) {
\t\t\t\tfound.push( elem );
\t\t\t} else {
\t\t\t\tjQuery.merge( found, getAll( elem, tag ) );
\t\t\t}
\t\t}
\t}

\treturn tag === undefined || tag && jQuery.nodeName( context, tag ) ?
\t\tjQuery.merge( [ context ], found ) :
\t\tfound;
}

// Used in buildFragment, fixes the defaultChecked property
function fixDefaultChecked( elem ) {
\tif ( manipulation_rcheckableType.test( elem.type ) ) {
\t\telem.defaultChecked = elem.checked;
\t}
}

jQuery.extend({
\tclone: function( elem, dataAndEvents, deepDataAndEvents ) {
\t\tvar destElements, node, clone, i, srcElements,
\t\t\tinPage = jQuery.contains( elem.ownerDocument, elem );

\t\tif ( jQuery.support.html5Clone || jQuery.isXMLDoc(elem) || !rnoshimcache.test( \"<\" + elem.nodeName + \">\" ) ) {
\t\t\tclone = elem.cloneNode( true );

\t\t// IE<=8 does not properly clone detached, unknown element nodes
\t\t} else {
\t\t\tfragmentDiv.innerHTML = elem.outerHTML;
\t\t\tfragmentDiv.removeChild( clone = fragmentDiv.firstChild );
\t\t}

\t\tif ( (!jQuery.support.noCloneEvent || !jQuery.support.noCloneChecked) &&
\t\t\t\t(elem.nodeType === 1 || elem.nodeType === 11) && !jQuery.isXMLDoc(elem) ) {

\t\t\t// We eschew Sizzle here for performance reasons: http://jsperf.com/getall-vs-sizzle/2
\t\t\tdestElements = getAll( clone );
\t\t\tsrcElements = getAll( elem );

\t\t\t// Fix all IE cloning issues
\t\t\tfor ( i = 0; (node = srcElements[i]) != null; ++i ) {
\t\t\t\t// Ensure that the destination node is not null; Fixes #9587
\t\t\t\tif ( destElements[i] ) {
\t\t\t\t\tfixCloneNodeIssues( node, destElements[i] );
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Copy the events from the original to the clone
\t\tif ( dataAndEvents ) {
\t\t\tif ( deepDataAndEvents ) {
\t\t\t\tsrcElements = srcElements || getAll( elem );
\t\t\t\tdestElements = destElements || getAll( clone );

\t\t\t\tfor ( i = 0; (node = srcElements[i]) != null; i++ ) {
\t\t\t\t\tcloneCopyEvent( node, destElements[i] );
\t\t\t\t}
\t\t\t} else {
\t\t\t\tcloneCopyEvent( elem, clone );
\t\t\t}
\t\t}

\t\t// Preserve script evaluation history
\t\tdestElements = getAll( clone, \"script\" );
\t\tif ( destElements.length > 0 ) {
\t\t\tsetGlobalEval( destElements, !inPage && getAll( elem, \"script\" ) );
\t\t}

\t\tdestElements = srcElements = node = null;

\t\t// Return the cloned set
\t\treturn clone;
\t},

\tbuildFragment: function( elems, context, scripts, selection ) {
\t\tvar j, elem, contains,
\t\t\ttmp, tag, tbody, wrap,
\t\t\tl = elems.length,

\t\t\t// Ensure a safe fragment
\t\t\tsafe = createSafeFragment( context ),

\t\t\tnodes = [],
\t\t\ti = 0;

\t\tfor ( ; i < l; i++ ) {
\t\t\telem = elems[ i ];

\t\t\tif ( elem || elem === 0 ) {

\t\t\t\t// Add nodes directly
\t\t\t\tif ( jQuery.type( elem ) === \"object\" ) {
\t\t\t\t\tjQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );

\t\t\t\t// Convert non-html into a text node
\t\t\t\t} else if ( !rhtml.test( elem ) ) {
\t\t\t\t\tnodes.push( context.createTextNode( elem ) );

\t\t\t\t// Convert html into DOM nodes
\t\t\t\t} else {
\t\t\t\t\ttmp = tmp || safe.appendChild( context.createElement(\"div\") );

\t\t\t\t\t// Deserialize a standard representation
\t\t\t\t\ttag = ( rtagName.exec( elem ) || [\"\", \"\"] )[1].toLowerCase();
\t\t\t\t\twrap = wrapMap[ tag ] || wrapMap._default;

\t\t\t\t\ttmp.innerHTML = wrap[1] + elem.replace( rxhtmlTag, \"<\$1></\$2>\" ) + wrap[2];

\t\t\t\t\t// Descend through wrappers to the right content
\t\t\t\t\tj = wrap[0];
\t\t\t\t\twhile ( j-- ) {
\t\t\t\t\t\ttmp = tmp.lastChild;
\t\t\t\t\t}

\t\t\t\t\t// Manually add leading whitespace removed by IE
\t\t\t\t\tif ( !jQuery.support.leadingWhitespace && rleadingWhitespace.test( elem ) ) {
\t\t\t\t\t\tnodes.push( context.createTextNode( rleadingWhitespace.exec( elem )[0] ) );
\t\t\t\t\t}

\t\t\t\t\t// Remove IE's autoinserted <tbody> from table fragments
\t\t\t\t\tif ( !jQuery.support.tbody ) {

\t\t\t\t\t\t// String was a <table>, *may* have spurious <tbody>
\t\t\t\t\t\telem = tag === \"table\" && !rtbody.test( elem ) ?
\t\t\t\t\t\t\ttmp.firstChild :

\t\t\t\t\t\t\t// String was a bare <thead> or <tfoot>
\t\t\t\t\t\t\twrap[1] === \"<table>\" && !rtbody.test( elem ) ?
\t\t\t\t\t\t\t\ttmp :
\t\t\t\t\t\t\t\t0;

\t\t\t\t\t\tj = elem && elem.childNodes.length;
\t\t\t\t\t\twhile ( j-- ) {
\t\t\t\t\t\t\tif ( jQuery.nodeName( (tbody = elem.childNodes[j]), \"tbody\" ) && !tbody.childNodes.length ) {
\t\t\t\t\t\t\t\telem.removeChild( tbody );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tjQuery.merge( nodes, tmp.childNodes );

\t\t\t\t\t// Fix #12392 for WebKit and IE > 9
\t\t\t\t\ttmp.textContent = \"\";

\t\t\t\t\t// Fix #12392 for oldIE
\t\t\t\t\twhile ( tmp.firstChild ) {
\t\t\t\t\t\ttmp.removeChild( tmp.firstChild );
\t\t\t\t\t}

\t\t\t\t\t// Remember the top-level container for proper cleanup
\t\t\t\t\ttmp = safe.lastChild;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Fix #11356: Clear elements from fragment
\t\tif ( tmp ) {
\t\t\tsafe.removeChild( tmp );
\t\t}

\t\t// Reset defaultChecked for any radios and checkboxes
\t\t// about to be appended to the DOM in IE 6/7 (#8060)
\t\tif ( !jQuery.support.appendChecked ) {
\t\t\tjQuery.grep( getAll( nodes, \"input\" ), fixDefaultChecked );
\t\t}

\t\ti = 0;
\t\twhile ( (elem = nodes[ i++ ]) ) {

\t\t\t// #4087 - If origin and destination elements are the same, and this is
\t\t\t// that element, do not do anything
\t\t\tif ( selection && jQuery.inArray( elem, selection ) !== -1 ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\tcontains = jQuery.contains( elem.ownerDocument, elem );

\t\t\t// Append to fragment
\t\t\ttmp = getAll( safe.appendChild( elem ), \"script\" );

\t\t\t// Preserve script evaluation history
\t\t\tif ( contains ) {
\t\t\t\tsetGlobalEval( tmp );
\t\t\t}

\t\t\t// Capture executables
\t\t\tif ( scripts ) {
\t\t\t\tj = 0;
\t\t\t\twhile ( (elem = tmp[ j++ ]) ) {
\t\t\t\t\tif ( rscriptType.test( elem.type || \"\" ) ) {
\t\t\t\t\t\tscripts.push( elem );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\ttmp = null;

\t\treturn safe;
\t},

\tcleanData: function( elems, /* internal */ acceptData ) {
\t\tvar elem, type, id, data,
\t\t\ti = 0,
\t\t\tinternalKey = jQuery.expando,
\t\t\tcache = jQuery.cache,
\t\t\tdeleteExpando = jQuery.support.deleteExpando,
\t\t\tspecial = jQuery.event.special;

\t\tfor ( ; (elem = elems[i]) != null; i++ ) {

\t\t\tif ( acceptData || jQuery.acceptData( elem ) ) {

\t\t\t\tid = elem[ internalKey ];
\t\t\t\tdata = id && cache[ id ];

\t\t\t\tif ( data ) {
\t\t\t\t\tif ( data.events ) {
\t\t\t\t\t\tfor ( type in data.events ) {
\t\t\t\t\t\t\tif ( special[ type ] ) {
\t\t\t\t\t\t\t\tjQuery.event.remove( elem, type );

\t\t\t\t\t\t\t// This is a shortcut to avoid jQuery.event.remove's overhead
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tjQuery.removeEvent( elem, type, data.handle );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Remove cache only if it was not already removed by jQuery.event.remove
\t\t\t\t\tif ( cache[ id ] ) {

\t\t\t\t\t\tdelete cache[ id ];

\t\t\t\t\t\t// IE does not allow us to delete expando properties from nodes,
\t\t\t\t\t\t// nor does it have a removeAttribute function on Document nodes;
\t\t\t\t\t\t// we must handle all of these cases
\t\t\t\t\t\tif ( deleteExpando ) {
\t\t\t\t\t\t\tdelete elem[ internalKey ];

\t\t\t\t\t\t} else if ( typeof elem.removeAttribute !== core_strundefined ) {
\t\t\t\t\t\t\telem.removeAttribute( internalKey );

\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telem[ internalKey ] = null;
\t\t\t\t\t\t}

\t\t\t\t\t\tcore_deletedIds.push( id );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}
});
var iframe, getStyles, curCSS,
\tralpha = /alpha\\([^)]*\\)/i,
\tropacity = /opacity\\s*=\\s*([^)]*)/,
\trposition = /^(top|right|bottom|left)\$/,
\t// swappable if display is none or starts with table except \"table\", \"table-cell\", or \"table-caption\"
\t// see here for display values: https://developer.mozilla.org/en-US/docs/CSS/display
\trdisplayswap = /^(none|table(?!-c[ea]).+)/,
\trmargin = /^margin/,
\trnumsplit = new RegExp( \"^(\" + core_pnum + \")(.*)\$\", \"i\" ),
\trnumnonpx = new RegExp( \"^(\" + core_pnum + \")(?!px)[a-z%]+\$\", \"i\" ),
\trrelNum = new RegExp( \"^([+-])=(\" + core_pnum + \")\", \"i\" ),
\telemdisplay = { BODY: \"block\" },

\tcssShow = { position: \"absolute\", visibility: \"hidden\", display: \"block\" },
\tcssNormalTransform = {
\t\tletterSpacing: 0,
\t\tfontWeight: 400
\t},

\tcssExpand = [ \"Top\", \"Right\", \"Bottom\", \"Left\" ],
\tcssPrefixes = [ \"Webkit\", \"O\", \"Moz\", \"ms\" ];

// return a css property mapped to a potentially vendor prefixed property
function vendorPropName( style, name ) {

\t// shortcut for names that are not vendor prefixed
\tif ( name in style ) {
\t\treturn name;
\t}

\t// check for vendor prefixed names
\tvar capName = name.charAt(0).toUpperCase() + name.slice(1),
\t\torigName = name,
\t\ti = cssPrefixes.length;

\twhile ( i-- ) {
\t\tname = cssPrefixes[ i ] + capName;
\t\tif ( name in style ) {
\t\t\treturn name;
\t\t}
\t}

\treturn origName;
}

function isHidden( elem, el ) {
\t// isHidden might be called from jQuery#filter function;
\t// in that case, element will be second argument
\telem = el || elem;
\treturn jQuery.css( elem, \"display\" ) === \"none\" || !jQuery.contains( elem.ownerDocument, elem );
}

function showHide( elements, show ) {
\tvar display, elem, hidden,
\t\tvalues = [],
\t\tindex = 0,
\t\tlength = elements.length;

\tfor ( ; index < length; index++ ) {
\t\telem = elements[ index ];
\t\tif ( !elem.style ) {
\t\t\tcontinue;
\t\t}

\t\tvalues[ index ] = jQuery._data( elem, \"olddisplay\" );
\t\tdisplay = elem.style.display;
\t\tif ( show ) {
\t\t\t// Reset the inline display of this element to learn if it is
\t\t\t// being hidden by cascaded rules or not
\t\t\tif ( !values[ index ] && display === \"none\" ) {
\t\t\t\telem.style.display = \"\";
\t\t\t}

\t\t\t// Set elements which have been overridden with display: none
\t\t\t// in a stylesheet to whatever the default browser style is
\t\t\t// for such an element
\t\t\tif ( elem.style.display === \"\" && isHidden( elem ) ) {
\t\t\t\tvalues[ index ] = jQuery._data( elem, \"olddisplay\", css_defaultDisplay(elem.nodeName) );
\t\t\t}
\t\t} else {

\t\t\tif ( !values[ index ] ) {
\t\t\t\thidden = isHidden( elem );

\t\t\t\tif ( display && display !== \"none\" || !hidden ) {
\t\t\t\t\tjQuery._data( elem, \"olddisplay\", hidden ? display : jQuery.css( elem, \"display\" ) );
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// Set the display of most of the elements in a second loop
\t// to avoid the constant reflow
\tfor ( index = 0; index < length; index++ ) {
\t\telem = elements[ index ];
\t\tif ( !elem.style ) {
\t\t\tcontinue;
\t\t}
\t\tif ( !show || elem.style.display === \"none\" || elem.style.display === \"\" ) {
\t\t\telem.style.display = show ? values[ index ] || \"\" : \"none\";
\t\t}
\t}

\treturn elements;
}

jQuery.fn.extend({
\tcss: function( name, value ) {
\t\treturn jQuery.access( this, function( elem, name, value ) {
\t\t\tvar len, styles,
\t\t\t\tmap = {},
\t\t\t\ti = 0;

\t\t\tif ( jQuery.isArray( name ) ) {
\t\t\t\tstyles = getStyles( elem );
\t\t\t\tlen = name.length;

\t\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\t\tmap[ name[ i ] ] = jQuery.css( elem, name[ i ], false, styles );
\t\t\t\t}

\t\t\t\treturn map;
\t\t\t}

\t\t\treturn value !== undefined ?
\t\t\t\tjQuery.style( elem, name, value ) :
\t\t\t\tjQuery.css( elem, name );
\t\t}, name, value, arguments.length > 1 );
\t},
\tshow: function() {
\t\treturn showHide( this, true );
\t},
\thide: function() {
\t\treturn showHide( this );
\t},
\ttoggle: function( state ) {
\t\tvar bool = typeof state === \"boolean\";

\t\treturn this.each(function() {
\t\t\tif ( bool ? state : isHidden( this ) ) {
\t\t\t\tjQuery( this ).show();
\t\t\t} else {
\t\t\t\tjQuery( this ).hide();
\t\t\t}
\t\t});
\t}
});

jQuery.extend({
\t// Add in style property hooks for overriding the default
\t// behavior of getting and setting a style property
\tcssHooks: {
\t\topacity: {
\t\t\tget: function( elem, computed ) {
\t\t\t\tif ( computed ) {
\t\t\t\t\t// We should always get a number back from opacity
\t\t\t\t\tvar ret = curCSS( elem, \"opacity\" );
\t\t\t\t\treturn ret === \"\" ? \"1\" : ret;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\t// Exclude the following css properties to add px
\tcssNumber: {
\t\t\"columnCount\": true,
\t\t\"fillOpacity\": true,
\t\t\"fontWeight\": true,
\t\t\"lineHeight\": true,
\t\t\"opacity\": true,
\t\t\"orphans\": true,
\t\t\"widows\": true,
\t\t\"zIndex\": true,
\t\t\"zoom\": true
\t},

\t// Add in properties whose names you wish to fix before
\t// setting or getting the value
\tcssProps: {
\t\t// normalize float css property
\t\t\"float\": jQuery.support.cssFloat ? \"cssFloat\" : \"styleFloat\"
\t},

\t// Get and set the style property on a DOM Node
\tstyle: function( elem, name, value, extra ) {
\t\t// Don't set styles on text and comment nodes
\t\tif ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {
\t\t\treturn;
\t\t}

\t\t// Make sure that we're working with the right name
\t\tvar ret, type, hooks,
\t\t\torigName = jQuery.camelCase( name ),
\t\t\tstyle = elem.style;

\t\tname = jQuery.cssProps[ origName ] || ( jQuery.cssProps[ origName ] = vendorPropName( style, origName ) );

\t\t// gets hook for the prefixed version
\t\t// followed by the unprefixed version
\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t// Check if we're setting a value
\t\tif ( value !== undefined ) {
\t\t\ttype = typeof value;

\t\t\t// convert relative number strings (+= or -=) to relative numbers. #7345
\t\t\tif ( type === \"string\" && (ret = rrelNum.exec( value )) ) {
\t\t\t\tvalue = ( ret[1] + 1 ) * ret[2] + parseFloat( jQuery.css( elem, name ) );
\t\t\t\t// Fixes bug #9237
\t\t\t\ttype = \"number\";
\t\t\t}

\t\t\t// Make sure that NaN and null values aren't set. See: #7116
\t\t\tif ( value == null || type === \"number\" && isNaN( value ) ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// If a number was passed in, add 'px' to the (except for certain CSS properties)
\t\t\tif ( type === \"number\" && !jQuery.cssNumber[ origName ] ) {
\t\t\t\tvalue += \"px\";
\t\t\t}

\t\t\t// Fixes #8908, it can be done more correctly by specifing setters in cssHooks,
\t\t\t// but it would mean to define eight (for every problematic property) identical functions
\t\t\tif ( !jQuery.support.clearCloneStyle && value === \"\" && name.indexOf(\"background\") === 0 ) {
\t\t\t\tstyle[ name ] = \"inherit\";
\t\t\t}

\t\t\t// If a hook was provided, use that value, otherwise just set the specified value
\t\t\tif ( !hooks || !(\"set\" in hooks) || (value = hooks.set( elem, value, extra )) !== undefined ) {

\t\t\t\t// Wrapped to prevent IE from throwing errors when 'invalid' values are provided
\t\t\t\t// Fixes bug #5509
\t\t\t\ttry {
\t\t\t\t\tstyle[ name ] = value;
\t\t\t\t} catch(e) {}
\t\t\t}

\t\t} else {
\t\t\t// If a hook was provided get the non-computed value from there
\t\t\tif ( hooks && \"get\" in hooks && (ret = hooks.get( elem, false, extra )) !== undefined ) {
\t\t\t\treturn ret;
\t\t\t}

\t\t\t// Otherwise just get the value from the style object
\t\t\treturn style[ name ];
\t\t}
\t},

\tcss: function( elem, name, extra, styles ) {
\t\tvar num, val, hooks,
\t\t\torigName = jQuery.camelCase( name );

\t\t// Make sure that we're working with the right name
\t\tname = jQuery.cssProps[ origName ] || ( jQuery.cssProps[ origName ] = vendorPropName( elem.style, origName ) );

\t\t// gets hook for the prefixed version
\t\t// followed by the unprefixed version
\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t// If a hook was provided get the computed value from there
\t\tif ( hooks && \"get\" in hooks ) {
\t\t\tval = hooks.get( elem, true, extra );
\t\t}

\t\t// Otherwise, if a way to get the computed value exists, use that
\t\tif ( val === undefined ) {
\t\t\tval = curCSS( elem, name, styles );
\t\t}

\t\t//convert \"normal\" to computed value
\t\tif ( val === \"normal\" && name in cssNormalTransform ) {
\t\t\tval = cssNormalTransform[ name ];
\t\t}

\t\t// Return, converting to number if forced or a qualifier was provided and val looks numeric
\t\tif ( extra === \"\" || extra ) {
\t\t\tnum = parseFloat( val );
\t\t\treturn extra === true || jQuery.isNumeric( num ) ? num || 0 : val;
\t\t}
\t\treturn val;
\t},

\t// A method for quickly swapping in/out CSS properties to get correct calculations
\tswap: function( elem, options, callback, args ) {
\t\tvar ret, name,
\t\t\told = {};

\t\t// Remember the old values, and insert the new ones
\t\tfor ( name in options ) {
\t\t\told[ name ] = elem.style[ name ];
\t\t\telem.style[ name ] = options[ name ];
\t\t}

\t\tret = callback.apply( elem, args || [] );

\t\t// Revert the old values
\t\tfor ( name in options ) {
\t\t\telem.style[ name ] = old[ name ];
\t\t}

\t\treturn ret;
\t}
});

// NOTE: we've included the \"window\" in window.getComputedStyle
// because jsdom on node.js will break without it.
if ( window.getComputedStyle ) {
\tgetStyles = function( elem ) {
\t\treturn window.getComputedStyle( elem, null );
\t};

\tcurCSS = function( elem, name, _computed ) {
\t\tvar width, minWidth, maxWidth,
\t\t\tcomputed = _computed || getStyles( elem ),

\t\t\t// getPropertyValue is only needed for .css('filter') in IE9, see #12537
\t\t\tret = computed ? computed.getPropertyValue( name ) || computed[ name ] : undefined,
\t\t\tstyle = elem.style;

\t\tif ( computed ) {

\t\t\tif ( ret === \"\" && !jQuery.contains( elem.ownerDocument, elem ) ) {
\t\t\t\tret = jQuery.style( elem, name );
\t\t\t}

\t\t\t// A tribute to the \"awesome hack by Dean Edwards\"
\t\t\t// Chrome < 17 and Safari 5.0 uses \"computed value\" instead of \"used value\" for margin-right
\t\t\t// Safari 5.1.7 (at least) returns percentage for a larger set of values, but width seems to be reliably pixels
\t\t\t// this is against the CSSOM draft spec: http://dev.w3.org/csswg/cssom/#resolved-values
\t\t\tif ( rnumnonpx.test( ret ) && rmargin.test( name ) ) {

\t\t\t\t// Remember the original values
\t\t\t\twidth = style.width;
\t\t\t\tminWidth = style.minWidth;
\t\t\t\tmaxWidth = style.maxWidth;

\t\t\t\t// Put in the new values to get a computed value out
\t\t\t\tstyle.minWidth = style.maxWidth = style.width = ret;
\t\t\t\tret = computed.width;

\t\t\t\t// Revert the changed values
\t\t\t\tstyle.width = width;
\t\t\t\tstyle.minWidth = minWidth;
\t\t\t\tstyle.maxWidth = maxWidth;
\t\t\t}
\t\t}

\t\treturn ret;
\t};
} else if ( document.documentElement.currentStyle ) {
\tgetStyles = function( elem ) {
\t\treturn elem.currentStyle;
\t};

\tcurCSS = function( elem, name, _computed ) {
\t\tvar left, rs, rsLeft,
\t\t\tcomputed = _computed || getStyles( elem ),
\t\t\tret = computed ? computed[ name ] : undefined,
\t\t\tstyle = elem.style;

\t\t// Avoid setting ret to empty string here
\t\t// so we don't default to auto
\t\tif ( ret == null && style && style[ name ] ) {
\t\t\tret = style[ name ];
\t\t}

\t\t// From the awesome hack by Dean Edwards
\t\t// http://erik.eae.net/archives/2007/07/27/18.54.15/#comment-102291

\t\t// If we're not dealing with a regular pixel number
\t\t// but a number that has a weird ending, we need to convert it to pixels
\t\t// but not position css attributes, as those are proportional to the parent element instead
\t\t// and we can't measure the parent instead because it might trigger a \"stacking dolls\" problem
\t\tif ( rnumnonpx.test( ret ) && !rposition.test( name ) ) {

\t\t\t// Remember the original values
\t\t\tleft = style.left;
\t\t\trs = elem.runtimeStyle;
\t\t\trsLeft = rs && rs.left;

\t\t\t// Put in the new values to get a computed value out
\t\t\tif ( rsLeft ) {
\t\t\t\trs.left = elem.currentStyle.left;
\t\t\t}
\t\t\tstyle.left = name === \"fontSize\" ? \"1em\" : ret;
\t\t\tret = style.pixelLeft + \"px\";

\t\t\t// Revert the changed values
\t\t\tstyle.left = left;
\t\t\tif ( rsLeft ) {
\t\t\t\trs.left = rsLeft;
\t\t\t}
\t\t}

\t\treturn ret === \"\" ? \"auto\" : ret;
\t};
}

function setPositiveNumber( elem, value, subtract ) {
\tvar matches = rnumsplit.exec( value );
\treturn matches ?
\t\t// Guard against undefined \"subtract\", e.g., when used as in cssHooks
\t\tMath.max( 0, matches[ 1 ] - ( subtract || 0 ) ) + ( matches[ 2 ] || \"px\" ) :
\t\tvalue;
}

function augmentWidthOrHeight( elem, name, extra, isBorderBox, styles ) {
\tvar i = extra === ( isBorderBox ? \"border\" : \"content\" ) ?
\t\t// If we already have the right measurement, avoid augmentation
\t\t4 :
\t\t// Otherwise initialize for horizontal or vertical properties
\t\tname === \"width\" ? 1 : 0,

\t\tval = 0;

\tfor ( ; i < 4; i += 2 ) {
\t\t// both box models exclude margin, so add it if we want it
\t\tif ( extra === \"margin\" ) {
\t\t\tval += jQuery.css( elem, extra + cssExpand[ i ], true, styles );
\t\t}

\t\tif ( isBorderBox ) {
\t\t\t// border-box includes padding, so remove it if we want content
\t\t\tif ( extra === \"content\" ) {
\t\t\t\tval -= jQuery.css( elem, \"padding\" + cssExpand[ i ], true, styles );
\t\t\t}

\t\t\t// at this point, extra isn't border nor margin, so remove border
\t\t\tif ( extra !== \"margin\" ) {
\t\t\t\tval -= jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );
\t\t\t}
\t\t} else {
\t\t\t// at this point, extra isn't content, so add padding
\t\t\tval += jQuery.css( elem, \"padding\" + cssExpand[ i ], true, styles );

\t\t\t// at this point, extra isn't content nor padding, so add border
\t\t\tif ( extra !== \"padding\" ) {
\t\t\t\tval += jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );
\t\t\t}
\t\t}
\t}

\treturn val;
}

function getWidthOrHeight( elem, name, extra ) {

\t// Start with offset property, which is equivalent to the border-box value
\tvar valueIsBorderBox = true,
\t\tval = name === \"width\" ? elem.offsetWidth : elem.offsetHeight,
\t\tstyles = getStyles( elem ),
\t\tisBorderBox = jQuery.support.boxSizing && jQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\";

\t// some non-html elements return undefined for offsetWidth, so check for null/undefined
\t// svg - https://bugzilla.mozilla.org/show_bug.cgi?id=649285
\t// MathML - https://bugzilla.mozilla.org/show_bug.cgi?id=491668
\tif ( val <= 0 || val == null ) {
\t\t// Fall back to computed then uncomputed css if necessary
\t\tval = curCSS( elem, name, styles );
\t\tif ( val < 0 || val == null ) {
\t\t\tval = elem.style[ name ];
\t\t}

\t\t// Computed unit is not pixels. Stop here and return.
\t\tif ( rnumnonpx.test(val) ) {
\t\t\treturn val;
\t\t}

\t\t// we need the check for style in case a browser which returns unreliable values
\t\t// for getComputedStyle silently falls back to the reliable elem.style
\t\tvalueIsBorderBox = isBorderBox && ( jQuery.support.boxSizingReliable || val === elem.style[ name ] );

\t\t// Normalize \"\", auto, and prepare for extra
\t\tval = parseFloat( val ) || 0;
\t}

\t// use the active box-sizing model to add/subtract irrelevant styles
\treturn ( val +
\t\taugmentWidthOrHeight(
\t\t\telem,
\t\t\tname,
\t\t\textra || ( isBorderBox ? \"border\" : \"content\" ),
\t\t\tvalueIsBorderBox,
\t\t\tstyles
\t\t)
\t) + \"px\";
}

// Try to determine the default display value of an element
function css_defaultDisplay( nodeName ) {
\tvar doc = document,
\t\tdisplay = elemdisplay[ nodeName ];

\tif ( !display ) {
\t\tdisplay = actualDisplay( nodeName, doc );

\t\t// If the simple way fails, read from inside an iframe
\t\tif ( display === \"none\" || !display ) {
\t\t\t// Use the already-created iframe if possible
\t\t\tiframe = ( iframe ||
\t\t\t\tjQuery(\"<iframe frameborder='0' width='0' height='0'/>\")
\t\t\t\t.css( \"cssText\", \"display:block !important\" )
\t\t\t).appendTo( doc.documentElement );

\t\t\t// Always write a new HTML skeleton so Webkit and Firefox don't choke on reuse
\t\t\tdoc = ( iframe[0].contentWindow || iframe[0].contentDocument ).document;
\t\t\tdoc.write(\"<!doctype html><html><body>\");
\t\t\tdoc.close();

\t\t\tdisplay = actualDisplay( nodeName, doc );
\t\t\tiframe.detach();
\t\t}

\t\t// Store the correct default display
\t\telemdisplay[ nodeName ] = display;
\t}

\treturn display;
}

// Called ONLY from within css_defaultDisplay
function actualDisplay( name, doc ) {
\tvar elem = jQuery( doc.createElement( name ) ).appendTo( doc.body ),
\t\tdisplay = jQuery.css( elem[0], \"display\" );
\telem.remove();
\treturn display;
}

jQuery.each([ \"height\", \"width\" ], function( i, name ) {
\tjQuery.cssHooks[ name ] = {
\t\tget: function( elem, computed, extra ) {
\t\t\tif ( computed ) {
\t\t\t\t// certain elements can have dimension info if we invisibly show them
\t\t\t\t// however, it must have a current display style that would benefit from this
\t\t\t\treturn elem.offsetWidth === 0 && rdisplayswap.test( jQuery.css( elem, \"display\" ) ) ?
\t\t\t\t\tjQuery.swap( elem, cssShow, function() {
\t\t\t\t\t\treturn getWidthOrHeight( elem, name, extra );
\t\t\t\t\t}) :
\t\t\t\t\tgetWidthOrHeight( elem, name, extra );
\t\t\t}
\t\t},

\t\tset: function( elem, value, extra ) {
\t\t\tvar styles = extra && getStyles( elem );
\t\t\treturn setPositiveNumber( elem, value, extra ?
\t\t\t\taugmentWidthOrHeight(
\t\t\t\t\telem,
\t\t\t\t\tname,
\t\t\t\t\textra,
\t\t\t\t\tjQuery.support.boxSizing && jQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\",
\t\t\t\t\tstyles
\t\t\t\t) : 0
\t\t\t);
\t\t}
\t};
});

if ( !jQuery.support.opacity ) {
\tjQuery.cssHooks.opacity = {
\t\tget: function( elem, computed ) {
\t\t\t// IE uses filters for opacity
\t\t\treturn ropacity.test( (computed && elem.currentStyle ? elem.currentStyle.filter : elem.style.filter) || \"\" ) ?
\t\t\t\t( 0.01 * parseFloat( RegExp.\$1 ) ) + \"\" :
\t\t\t\tcomputed ? \"1\" : \"\";
\t\t},

\t\tset: function( elem, value ) {
\t\t\tvar style = elem.style,
\t\t\t\tcurrentStyle = elem.currentStyle,
\t\t\t\topacity = jQuery.isNumeric( value ) ? \"alpha(opacity=\" + value * 100 + \")\" : \"\",
\t\t\t\tfilter = currentStyle && currentStyle.filter || style.filter || \"\";

\t\t\t// IE has trouble with opacity if it does not have layout
\t\t\t// Force it by setting the zoom level
\t\t\tstyle.zoom = 1;

\t\t\t// if setting opacity to 1, and no other filters exist - attempt to remove filter attribute #6652
\t\t\t// if value === \"\", then remove inline opacity #12685
\t\t\tif ( ( value >= 1 || value === \"\" ) &&
\t\t\t\t\tjQuery.trim( filter.replace( ralpha, \"\" ) ) === \"\" &&
\t\t\t\t\tstyle.removeAttribute ) {

\t\t\t\t// Setting style.filter to null, \"\" & \" \" still leave \"filter:\" in the cssText
\t\t\t\t// if \"filter:\" is present at all, clearType is disabled, we want to avoid this
\t\t\t\t// style.removeAttribute is IE Only, but so apparently is this code path...
\t\t\t\tstyle.removeAttribute( \"filter\" );

\t\t\t\t// if there is no filter style applied in a css rule or unset inline opacity, we are done
\t\t\t\tif ( value === \"\" || currentStyle && !currentStyle.filter ) {
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t}

\t\t\t// otherwise, set new filter values
\t\t\tstyle.filter = ralpha.test( filter ) ?
\t\t\t\tfilter.replace( ralpha, opacity ) :
\t\t\t\tfilter + \" \" + opacity;
\t\t}
\t};
}

// These hooks cannot be added until DOM ready because the support test
// for it is not run until after DOM ready
jQuery(function() {
\tif ( !jQuery.support.reliableMarginRight ) {
\t\tjQuery.cssHooks.marginRight = {
\t\t\tget: function( elem, computed ) {
\t\t\t\tif ( computed ) {
\t\t\t\t\t// WebKit Bug 13343 - getComputedStyle returns wrong value for margin-right
\t\t\t\t\t// Work around by temporarily setting element display to inline-block
\t\t\t\t\treturn jQuery.swap( elem, { \"display\": \"inline-block\" },
\t\t\t\t\t\tcurCSS, [ elem, \"marginRight\" ] );
\t\t\t\t}
\t\t\t}
\t\t};
\t}

\t// Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084
\t// getComputedStyle returns percent when specified for top/left/bottom/right
\t// rather than make the css module depend on the offset module, we just check for it here
\tif ( !jQuery.support.pixelPosition && jQuery.fn.position ) {
\t\tjQuery.each( [ \"top\", \"left\" ], function( i, prop ) {
\t\t\tjQuery.cssHooks[ prop ] = {
\t\t\t\tget: function( elem, computed ) {
\t\t\t\t\tif ( computed ) {
\t\t\t\t\t\tcomputed = curCSS( elem, prop );
\t\t\t\t\t\t// if curCSS returns percentage, fallback to offset
\t\t\t\t\t\treturn rnumnonpx.test( computed ) ?
\t\t\t\t\t\t\tjQuery( elem ).position()[ prop ] + \"px\" :
\t\t\t\t\t\t\tcomputed;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t};
\t\t});
\t}

});

if ( jQuery.expr && jQuery.expr.filters ) {
\tjQuery.expr.filters.hidden = function( elem ) {
\t\t// Support: Opera <= 12.12
\t\t// Opera reports offsetWidths and offsetHeights less than zero on some elements
\t\treturn elem.offsetWidth <= 0 && elem.offsetHeight <= 0 ||
\t\t\t(!jQuery.support.reliableHiddenOffsets && ((elem.style && elem.style.display) || jQuery.css( elem, \"display\" )) === \"none\");
\t};

\tjQuery.expr.filters.visible = function( elem ) {
\t\treturn !jQuery.expr.filters.hidden( elem );
\t};
}

// These hooks are used by animate to expand properties
jQuery.each({
\tmargin: \"\",
\tpadding: \"\",
\tborder: \"Width\"
}, function( prefix, suffix ) {
\tjQuery.cssHooks[ prefix + suffix ] = {
\t\texpand: function( value ) {
\t\t\tvar i = 0,
\t\t\t\texpanded = {},

\t\t\t\t// assumes a single number if not a string
\t\t\t\tparts = typeof value === \"string\" ? value.split(\" \") : [ value ];

\t\t\tfor ( ; i < 4; i++ ) {
\t\t\t\texpanded[ prefix + cssExpand[ i ] + suffix ] =
\t\t\t\t\tparts[ i ] || parts[ i - 2 ] || parts[ 0 ];
\t\t\t}

\t\t\treturn expanded;
\t\t}
\t};

\tif ( !rmargin.test( prefix ) ) {
\t\tjQuery.cssHooks[ prefix + suffix ].set = setPositiveNumber;
\t}
});
var r20 = /%20/g,
\trbracket = /\\[\\]\$/,
\trCRLF = /\\r?\\n/g,
\trsubmitterTypes = /^(?:submit|button|image|reset|file)\$/i,
\trsubmittable = /^(?:input|select|textarea|keygen)/i;

jQuery.fn.extend({
\tserialize: function() {
\t\treturn jQuery.param( this.serializeArray() );
\t},
\tserializeArray: function() {
\t\treturn this.map(function(){
\t\t\t// Can add propHook for \"elements\" to filter or add form elements
\t\t\tvar elements = jQuery.prop( this, \"elements\" );
\t\t\treturn elements ? jQuery.makeArray( elements ) : this;
\t\t})
\t\t.filter(function(){
\t\t\tvar type = this.type;
\t\t\t// Use .is(\":disabled\") so that fieldset[disabled] works
\t\t\treturn this.name && !jQuery( this ).is( \":disabled\" ) &&
\t\t\t\trsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&
\t\t\t\t( this.checked || !manipulation_rcheckableType.test( type ) );
\t\t})
\t\t.map(function( i, elem ){
\t\t\tvar val = jQuery( this ).val();

\t\t\treturn val == null ?
\t\t\t\tnull :
\t\t\t\tjQuery.isArray( val ) ?
\t\t\t\t\tjQuery.map( val, function( val ){
\t\t\t\t\t\treturn { name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t\t\t\t}) :
\t\t\t\t\t{ name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t}).get();
\t}
});

//Serialize an array of form elements or a set of
//key/values into a query string
jQuery.param = function( a, traditional ) {
\tvar prefix,
\t\ts = [],
\t\tadd = function( key, value ) {
\t\t\t// If value is a function, invoke it and return its value
\t\t\tvalue = jQuery.isFunction( value ) ? value() : ( value == null ? \"\" : value );
\t\t\ts[ s.length ] = encodeURIComponent( key ) + \"=\" + encodeURIComponent( value );
\t\t};

\t// Set traditional to true for jQuery <= 1.3.2 behavior.
\tif ( traditional === undefined ) {
\t\ttraditional = jQuery.ajaxSettings && jQuery.ajaxSettings.traditional;
\t}

\t// If an array was passed in, assume that it is an array of form elements.
\tif ( jQuery.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {
\t\t// Serialize the form elements
\t\tjQuery.each( a, function() {
\t\t\tadd( this.name, this.value );
\t\t});

\t} else {
\t\t// If traditional, encode the \"old\" way (the way 1.3.2 or older
\t\t// did it), otherwise encode params recursively.
\t\tfor ( prefix in a ) {
\t\t\tbuildParams( prefix, a[ prefix ], traditional, add );
\t\t}
\t}

\t// Return the resulting serialization
\treturn s.join( \"&\" ).replace( r20, \"+\" );
};

function buildParams( prefix, obj, traditional, add ) {
\tvar name;

\tif ( jQuery.isArray( obj ) ) {
\t\t// Serialize array item.
\t\tjQuery.each( obj, function( i, v ) {
\t\t\tif ( traditional || rbracket.test( prefix ) ) {
\t\t\t\t// Treat each array item as a scalar.
\t\t\t\tadd( prefix, v );

\t\t\t} else {
\t\t\t\t// Item is non-scalar (array or object), encode its numeric index.
\t\t\t\tbuildParams( prefix + \"[\" + ( typeof v === \"object\" ? i : \"\" ) + \"]\", v, traditional, add );
\t\t\t}
\t\t});

\t} else if ( !traditional && jQuery.type( obj ) === \"object\" ) {
\t\t// Serialize object item.
\t\tfor ( name in obj ) {
\t\t\tbuildParams( prefix + \"[\" + name + \"]\", obj[ name ], traditional, add );
\t\t}

\t} else {
\t\t// Serialize scalar item.
\t\tadd( prefix, obj );
\t}
}
jQuery.each( (\"blur focus focusin focusout load resize scroll unload click dblclick \" +
\t\"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave \" +
\t\"change select submit keydown keypress keyup error contextmenu\").split(\" \"), function( i, name ) {

\t// Handle event binding
\tjQuery.fn[ name ] = function( data, fn ) {
\t\treturn arguments.length > 0 ?
\t\t\tthis.on( name, null, data, fn ) :
\t\t\tthis.trigger( name );
\t};
});

jQuery.fn.hover = function( fnOver, fnOut ) {
\treturn this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
};
var
\t// Document location
\tajaxLocParts,
\tajaxLocation,
\tajax_nonce = jQuery.now(),

\tajax_rquery = /\\?/,
\trhash = /#.*\$/,
\trts = /([?&])_=[^&]*/,
\trheaders = /^(.*?):[ \\t]*([^\\r\\n]*)\\r?\$/mg, // IE leaves an \\r character at EOL
\t// #7653, #8125, #8152: local protocol detection
\trlocalProtocol = /^(?:about|app|app-storage|.+-extension|file|res|widget):\$/,
\trnoContent = /^(?:GET|HEAD)\$/,
\trprotocol = /^\\/\\//,
\trurl = /^([\\w.+-]+:)(?:\\/\\/([^\\/?#:]*)(?::(\\d+)|)|)/,

\t// Keep a copy of the old load method
\t_load = jQuery.fn.load,

\t/* Prefilters
\t * 1) They are useful to introduce custom dataTypes (see ajax/jsonp.js for an example)
\t * 2) These are called:
\t *    - BEFORE asking for a transport
\t *    - AFTER param serialization (s.data is a string if s.processData is true)
\t * 3) key is the dataType
\t * 4) the catchall symbol \"*\" can be used
\t * 5) execution will start with transport dataType and THEN continue down to \"*\" if needed
\t */
\tprefilters = {},

\t/* Transports bindings
\t * 1) key is the dataType
\t * 2) the catchall symbol \"*\" can be used
\t * 3) selection will start with transport dataType and THEN go to \"*\" if needed
\t */
\ttransports = {},

\t// Avoid comment-prolog char sequence (#10098); must appease lint and evade compression
\tallTypes = \"*/\".concat(\"*\");

// #8138, IE may throw an exception when accessing
// a field from window.location if document.domain has been set
try {
\tajaxLocation = location.href;
} catch( e ) {
\t// Use the href attribute of an A element
\t// since IE will modify it given document.location
\tajaxLocation = document.createElement( \"a\" );
\tajaxLocation.href = \"\";
\tajaxLocation = ajaxLocation.href;
}

// Segment location into parts
ajaxLocParts = rurl.exec( ajaxLocation.toLowerCase() ) || [];

// Base \"constructor\" for jQuery.ajaxPrefilter and jQuery.ajaxTransport
function addToPrefiltersOrTransports( structure ) {

\t// dataTypeExpression is optional and defaults to \"*\"
\treturn function( dataTypeExpression, func ) {

\t\tif ( typeof dataTypeExpression !== \"string\" ) {
\t\t\tfunc = dataTypeExpression;
\t\t\tdataTypeExpression = \"*\";
\t\t}

\t\tvar dataType,
\t\t\ti = 0,
\t\t\tdataTypes = dataTypeExpression.toLowerCase().match( core_rnotwhite ) || [];

\t\tif ( jQuery.isFunction( func ) ) {
\t\t\t// For each dataType in the dataTypeExpression
\t\t\twhile ( (dataType = dataTypes[i++]) ) {
\t\t\t\t// Prepend if requested
\t\t\t\tif ( dataType[0] === \"+\" ) {
\t\t\t\t\tdataType = dataType.slice( 1 ) || \"*\";
\t\t\t\t\t(structure[ dataType ] = structure[ dataType ] || []).unshift( func );

\t\t\t\t// Otherwise append
\t\t\t\t} else {
\t\t\t\t\t(structure[ dataType ] = structure[ dataType ] || []).push( func );
\t\t\t\t}
\t\t\t}
\t\t}
\t};
}

// Base inspection function for prefilters and transports
function inspectPrefiltersOrTransports( structure, options, originalOptions, jqXHR ) {

\tvar inspected = {},
\t\tseekingTransport = ( structure === transports );

\tfunction inspect( dataType ) {
\t\tvar selected;
\t\tinspected[ dataType ] = true;
\t\tjQuery.each( structure[ dataType ] || [], function( _, prefilterOrFactory ) {
\t\t\tvar dataTypeOrTransport = prefilterOrFactory( options, originalOptions, jqXHR );
\t\t\tif( typeof dataTypeOrTransport === \"string\" && !seekingTransport && !inspected[ dataTypeOrTransport ] ) {
\t\t\t\toptions.dataTypes.unshift( dataTypeOrTransport );
\t\t\t\tinspect( dataTypeOrTransport );
\t\t\t\treturn false;
\t\t\t} else if ( seekingTransport ) {
\t\t\t\treturn !( selected = dataTypeOrTransport );
\t\t\t}
\t\t});
\t\treturn selected;
\t}

\treturn inspect( options.dataTypes[ 0 ] ) || !inspected[ \"*\" ] && inspect( \"*\" );
}

// A special extend for ajax options
// that takes \"flat\" options (not to be deep extended)
// Fixes #9887
function ajaxExtend( target, src ) {
\tvar deep, key,
\t\tflatOptions = jQuery.ajaxSettings.flatOptions || {};

\tfor ( key in src ) {
\t\tif ( src[ key ] !== undefined ) {
\t\t\t( flatOptions[ key ] ? target : ( deep || (deep = {}) ) )[ key ] = src[ key ];
\t\t}
\t}
\tif ( deep ) {
\t\tjQuery.extend( true, target, deep );
\t}

\treturn target;
}

jQuery.fn.load = function( url, params, callback ) {
\tif ( typeof url !== \"string\" && _load ) {
\t\treturn _load.apply( this, arguments );
\t}

\tvar selector, response, type,
\t\tself = this,
\t\toff = url.indexOf(\" \");

\tif ( off >= 0 ) {
\t\tselector = url.slice( off, url.length );
\t\turl = url.slice( 0, off );
\t}

\t// If it's a function
\tif ( jQuery.isFunction( params ) ) {

\t\t// We assume that it's the callback
\t\tcallback = params;
\t\tparams = undefined;

\t// Otherwise, build a param string
\t} else if ( params && typeof params === \"object\" ) {
\t\ttype = \"POST\";
\t}

\t// If we have elements to modify, make the request
\tif ( self.length > 0 ) {
\t\tjQuery.ajax({
\t\t\turl: url,

\t\t\t// if \"type\" variable is undefined, then \"GET\" method will be used
\t\t\ttype: type,
\t\t\tdataType: \"html\",
\t\t\tdata: params
\t\t}).done(function( responseText ) {

\t\t\t// Save response for use in complete callback
\t\t\tresponse = arguments;

\t\t\tself.html( selector ?

\t\t\t\t// If a selector was specified, locate the right elements in a dummy div
\t\t\t\t// Exclude scripts to avoid IE 'Permission Denied' errors
\t\t\t\tjQuery(\"<div>\").append( jQuery.parseHTML( responseText ) ).find( selector ) :

\t\t\t\t// Otherwise use the full result
\t\t\t\tresponseText );

\t\t}).complete( callback && function( jqXHR, status ) {
\t\t\tself.each( callback, response || [ jqXHR.responseText, status, jqXHR ] );
\t\t});
\t}

\treturn this;
};

// Attach a bunch of functions for handling common AJAX events
jQuery.each( [ \"ajaxStart\", \"ajaxStop\", \"ajaxComplete\", \"ajaxError\", \"ajaxSuccess\", \"ajaxSend\" ], function( i, type ){
\tjQuery.fn[ type ] = function( fn ){
\t\treturn this.on( type, fn );
\t};
});

jQuery.each( [ \"get\", \"post\" ], function( i, method ) {
\tjQuery[ method ] = function( url, data, callback, type ) {
\t\t// shift arguments if data argument was omitted
\t\tif ( jQuery.isFunction( data ) ) {
\t\t\ttype = type || callback;
\t\t\tcallback = data;
\t\t\tdata = undefined;
\t\t}

\t\treturn jQuery.ajax({
\t\t\turl: url,
\t\t\ttype: method,
\t\t\tdataType: type,
\t\t\tdata: data,
\t\t\tsuccess: callback
\t\t});
\t};
});

jQuery.extend({

\t// Counter for holding the number of active queries
\tactive: 0,

\t// Last-Modified header cache for next request
\tlastModified: {},
\tetag: {},

\tajaxSettings: {
\t\turl: ajaxLocation,
\t\ttype: \"GET\",
\t\tisLocal: rlocalProtocol.test( ajaxLocParts[ 1 ] ),
\t\tglobal: true,
\t\tprocessData: true,
\t\tasync: true,
\t\tcontentType: \"application/x-www-form-urlencoded; charset=UTF-8\",
\t\t/*
\t\ttimeout: 0,
\t\tdata: null,
\t\tdataType: null,
\t\tusername: null,
\t\tpassword: null,
\t\tcache: null,
\t\tthrows: false,
\t\ttraditional: false,
\t\theaders: {},
\t\t*/

\t\taccepts: {
\t\t\t\"*\": allTypes,
\t\t\ttext: \"text/plain\",
\t\t\thtml: \"text/html\",
\t\t\txml: \"application/xml, text/xml\",
\t\t\tjson: \"application/json, text/javascript\"
\t\t},

\t\tcontents: {
\t\t\txml: /xml/,
\t\t\thtml: /html/,
\t\t\tjson: /json/
\t\t},

\t\tresponseFields: {
\t\t\txml: \"responseXML\",
\t\t\ttext: \"responseText\"
\t\t},

\t\t// Data converters
\t\t// Keys separate source (or catchall \"*\") and destination types with a single space
\t\tconverters: {

\t\t\t// Convert anything to text
\t\t\t\"* text\": window.String,

\t\t\t// Text to html (true = no transformation)
\t\t\t\"text html\": true,

\t\t\t// Evaluate text as a json expression
\t\t\t\"text json\": jQuery.parseJSON,

\t\t\t// Parse text as xml
\t\t\t\"text xml\": jQuery.parseXML
\t\t},

\t\t// For options that shouldn't be deep extended:
\t\t// you can add your own custom options here if
\t\t// and when you create one that shouldn't be
\t\t// deep extended (see ajaxExtend)
\t\tflatOptions: {
\t\t\turl: true,
\t\t\tcontext: true
\t\t}
\t},

\t// Creates a full fledged settings object into target
\t// with both ajaxSettings and settings fields.
\t// If target is omitted, writes into ajaxSettings.
\tajaxSetup: function( target, settings ) {
\t\treturn settings ?

\t\t\t// Building a settings object
\t\t\tajaxExtend( ajaxExtend( target, jQuery.ajaxSettings ), settings ) :

\t\t\t// Extending ajaxSettings
\t\t\tajaxExtend( jQuery.ajaxSettings, target );
\t},

\tajaxPrefilter: addToPrefiltersOrTransports( prefilters ),
\tajaxTransport: addToPrefiltersOrTransports( transports ),

\t// Main method
\tajax: function( url, options ) {

\t\t// If url is an object, simulate pre-1.5 signature
\t\tif ( typeof url === \"object\" ) {
\t\t\toptions = url;
\t\t\turl = undefined;
\t\t}

\t\t// Force options to be an object
\t\toptions = options || {};

\t\tvar // Cross-domain detection vars
\t\t\tparts,
\t\t\t// Loop variable
\t\t\ti,
\t\t\t// URL without anti-cache param
\t\t\tcacheURL,
\t\t\t// Response headers as string
\t\t\tresponseHeadersString,
\t\t\t// timeout handle
\t\t\ttimeoutTimer,

\t\t\t// To know if global events are to be dispatched
\t\t\tfireGlobals,

\t\t\ttransport,
\t\t\t// Response headers
\t\t\tresponseHeaders,
\t\t\t// Create the final options object
\t\t\ts = jQuery.ajaxSetup( {}, options ),
\t\t\t// Callbacks context
\t\t\tcallbackContext = s.context || s,
\t\t\t// Context for global events is callbackContext if it is a DOM node or jQuery collection
\t\t\tglobalEventContext = s.context && ( callbackContext.nodeType || callbackContext.jquery ) ?
\t\t\t\tjQuery( callbackContext ) :
\t\t\t\tjQuery.event,
\t\t\t// Deferreds
\t\t\tdeferred = jQuery.Deferred(),
\t\t\tcompleteDeferred = jQuery.Callbacks(\"once memory\"),
\t\t\t// Status-dependent callbacks
\t\t\tstatusCode = s.statusCode || {},
\t\t\t// Headers (they are sent all at once)
\t\t\trequestHeaders = {},
\t\t\trequestHeadersNames = {},
\t\t\t// The jqXHR state
\t\t\tstate = 0,
\t\t\t// Default abort message
\t\t\tstrAbort = \"canceled\",
\t\t\t// Fake xhr
\t\t\tjqXHR = {
\t\t\t\treadyState: 0,

\t\t\t\t// Builds headers hashtable if needed
\t\t\t\tgetResponseHeader: function( key ) {
\t\t\t\t\tvar match;
\t\t\t\t\tif ( state === 2 ) {
\t\t\t\t\t\tif ( !responseHeaders ) {
\t\t\t\t\t\t\tresponseHeaders = {};
\t\t\t\t\t\t\twhile ( (match = rheaders.exec( responseHeadersString )) ) {
\t\t\t\t\t\t\t\tresponseHeaders[ match[1].toLowerCase() ] = match[ 2 ];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tmatch = responseHeaders[ key.toLowerCase() ];
\t\t\t\t\t}
\t\t\t\t\treturn match == null ? null : match;
\t\t\t\t},

\t\t\t\t// Raw string
\t\t\t\tgetAllResponseHeaders: function() {
\t\t\t\t\treturn state === 2 ? responseHeadersString : null;
\t\t\t\t},

\t\t\t\t// Caches the header
\t\t\t\tsetRequestHeader: function( name, value ) {
\t\t\t\t\tvar lname = name.toLowerCase();
\t\t\t\t\tif ( !state ) {
\t\t\t\t\t\tname = requestHeadersNames[ lname ] = requestHeadersNames[ lname ] || name;
\t\t\t\t\t\trequestHeaders[ name ] = value;
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Overrides response content-type header
\t\t\t\toverrideMimeType: function( type ) {
\t\t\t\t\tif ( !state ) {
\t\t\t\t\t\ts.mimeType = type;
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Status-dependent callbacks
\t\t\t\tstatusCode: function( map ) {
\t\t\t\t\tvar code;
\t\t\t\t\tif ( map ) {
\t\t\t\t\t\tif ( state < 2 ) {
\t\t\t\t\t\t\tfor ( code in map ) {
\t\t\t\t\t\t\t\t// Lazy-add the new callback in a way that preserves old ones
\t\t\t\t\t\t\t\tstatusCode[ code ] = [ statusCode[ code ], map[ code ] ];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// Execute the appropriate callbacks
\t\t\t\t\t\t\tjqXHR.always( map[ jqXHR.status ] );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Cancel the request
\t\t\t\tabort: function( statusText ) {
\t\t\t\t\tvar finalText = statusText || strAbort;
\t\t\t\t\tif ( transport ) {
\t\t\t\t\t\ttransport.abort( finalText );
\t\t\t\t\t}
\t\t\t\t\tdone( 0, finalText );
\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t};

\t\t// Attach deferreds
\t\tdeferred.promise( jqXHR ).complete = completeDeferred.add;
\t\tjqXHR.success = jqXHR.done;
\t\tjqXHR.error = jqXHR.fail;

\t\t// Remove hash character (#7531: and string promotion)
\t\t// Add protocol if not provided (#5866: IE7 issue with protocol-less urls)
\t\t// Handle falsy url in the settings object (#10093: consistency with old signature)
\t\t// We also use the url parameter if available
\t\ts.url = ( ( url || s.url || ajaxLocation ) + \"\" ).replace( rhash, \"\" ).replace( rprotocol, ajaxLocParts[ 1 ] + \"//\" );

\t\t// Alias method option to type as per ticket #12004
\t\ts.type = options.method || options.type || s.method || s.type;

\t\t// Extract dataTypes list
\t\ts.dataTypes = jQuery.trim( s.dataType || \"*\" ).toLowerCase().match( core_rnotwhite ) || [\"\"];

\t\t// A cross-domain request is in order when we have a protocol:host:port mismatch
\t\tif ( s.crossDomain == null ) {
\t\t\tparts = rurl.exec( s.url.toLowerCase() );
\t\t\ts.crossDomain = !!( parts &&
\t\t\t\t( parts[ 1 ] !== ajaxLocParts[ 1 ] || parts[ 2 ] !== ajaxLocParts[ 2 ] ||
\t\t\t\t\t( parts[ 3 ] || ( parts[ 1 ] === \"http:\" ? 80 : 443 ) ) !=
\t\t\t\t\t\t( ajaxLocParts[ 3 ] || ( ajaxLocParts[ 1 ] === \"http:\" ? 80 : 443 ) ) )
\t\t\t);
\t\t}

\t\t// Convert data if not already a string
\t\tif ( s.data && s.processData && typeof s.data !== \"string\" ) {
\t\t\ts.data = jQuery.param( s.data, s.traditional );
\t\t}

\t\t// Apply prefilters
\t\tinspectPrefiltersOrTransports( prefilters, s, options, jqXHR );

\t\t// If request was aborted inside a prefilter, stop there
\t\tif ( state === 2 ) {
\t\t\treturn jqXHR;
\t\t}

\t\t// We can fire global events as of now if asked to
\t\tfireGlobals = s.global;

\t\t// Watch for a new set of requests
\t\tif ( fireGlobals && jQuery.active++ === 0 ) {
\t\t\tjQuery.event.trigger(\"ajaxStart\");
\t\t}

\t\t// Uppercase the type
\t\ts.type = s.type.toUpperCase();

\t\t// Determine if request has content
\t\ts.hasContent = !rnoContent.test( s.type );

\t\t// Save the URL in case we're toying with the If-Modified-Since
\t\t// and/or If-None-Match header later on
\t\tcacheURL = s.url;

\t\t// More options handling for requests with no content
\t\tif ( !s.hasContent ) {

\t\t\t// If data is available, append data to url
\t\t\tif ( s.data ) {
\t\t\t\tcacheURL = ( s.url += ( ajax_rquery.test( cacheURL ) ? \"&\" : \"?\" ) + s.data );
\t\t\t\t// #9682: remove data so that it's not used in an eventual retry
\t\t\t\tdelete s.data;
\t\t\t}

\t\t\t// Add anti-cache in url if needed
\t\t\tif ( s.cache === false ) {
\t\t\t\ts.url = rts.test( cacheURL ) ?

\t\t\t\t\t// If there is already a '_' parameter, set its value
\t\t\t\t\tcacheURL.replace( rts, \"\$1_=\" + ajax_nonce++ ) :

\t\t\t\t\t// Otherwise add one to the end
\t\t\t\t\tcacheURL + ( ajax_rquery.test( cacheURL ) ? \"&\" : \"?\" ) + \"_=\" + ajax_nonce++;
\t\t\t}
\t\t}

\t\t// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
\t\tif ( s.ifModified ) {
\t\t\tif ( jQuery.lastModified[ cacheURL ] ) {
\t\t\t\tjqXHR.setRequestHeader( \"If-Modified-Since\", jQuery.lastModified[ cacheURL ] );
\t\t\t}
\t\t\tif ( jQuery.etag[ cacheURL ] ) {
\t\t\t\tjqXHR.setRequestHeader( \"If-None-Match\", jQuery.etag[ cacheURL ] );
\t\t\t}
\t\t}

\t\t// Set the correct header, if data is being sent
\t\tif ( s.data && s.hasContent && s.contentType !== false || options.contentType ) {
\t\t\tjqXHR.setRequestHeader( \"Content-Type\", s.contentType );
\t\t}

\t\t// Set the Accepts header for the server, depending on the dataType
\t\tjqXHR.setRequestHeader(
\t\t\t\"Accept\",
\t\t\ts.dataTypes[ 0 ] && s.accepts[ s.dataTypes[0] ] ?
\t\t\t\ts.accepts[ s.dataTypes[0] ] + ( s.dataTypes[ 0 ] !== \"*\" ? \", \" + allTypes + \"; q=0.01\" : \"\" ) :
\t\t\t\ts.accepts[ \"*\" ]
\t\t);

\t\t// Check for headers option
\t\tfor ( i in s.headers ) {
\t\t\tjqXHR.setRequestHeader( i, s.headers[ i ] );
\t\t}

\t\t// Allow custom headers/mimetypes and early abort
\t\tif ( s.beforeSend && ( s.beforeSend.call( callbackContext, jqXHR, s ) === false || state === 2 ) ) {
\t\t\t// Abort if not done already and return
\t\t\treturn jqXHR.abort();
\t\t}

\t\t// aborting is no longer a cancellation
\t\tstrAbort = \"abort\";

\t\t// Install callbacks on deferreds
\t\tfor ( i in { success: 1, error: 1, complete: 1 } ) {
\t\t\tjqXHR[ i ]( s[ i ] );
\t\t}

\t\t// Get transport
\t\ttransport = inspectPrefiltersOrTransports( transports, s, options, jqXHR );

\t\t// If no transport, we auto-abort
\t\tif ( !transport ) {
\t\t\tdone( -1, \"No Transport\" );
\t\t} else {
\t\t\tjqXHR.readyState = 1;

\t\t\t// Send global event
\t\t\tif ( fireGlobals ) {
\t\t\t\tglobalEventContext.trigger( \"ajaxSend\", [ jqXHR, s ] );
\t\t\t}
\t\t\t// Timeout
\t\t\tif ( s.async && s.timeout > 0 ) {
\t\t\t\ttimeoutTimer = setTimeout(function() {
\t\t\t\t\tjqXHR.abort(\"timeout\");
\t\t\t\t}, s.timeout );
\t\t\t}

\t\t\ttry {
\t\t\t\tstate = 1;
\t\t\t\ttransport.send( requestHeaders, done );
\t\t\t} catch ( e ) {
\t\t\t\t// Propagate exception as error if not done
\t\t\t\tif ( state < 2 ) {
\t\t\t\t\tdone( -1, e );
\t\t\t\t// Simply rethrow otherwise
\t\t\t\t} else {
\t\t\t\t\tthrow e;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Callback for when everything is done
\t\tfunction done( status, nativeStatusText, responses, headers ) {
\t\t\tvar isSuccess, success, error, response, modified,
\t\t\t\tstatusText = nativeStatusText;

\t\t\t// Called once
\t\t\tif ( state === 2 ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// State is \"done\" now
\t\t\tstate = 2;

\t\t\t// Clear timeout if it exists
\t\t\tif ( timeoutTimer ) {
\t\t\t\tclearTimeout( timeoutTimer );
\t\t\t}

\t\t\t// Dereference transport for early garbage collection
\t\t\t// (no matter how long the jqXHR object will be used)
\t\t\ttransport = undefined;

\t\t\t// Cache response headers
\t\t\tresponseHeadersString = headers || \"\";

\t\t\t// Set readyState
\t\t\tjqXHR.readyState = status > 0 ? 4 : 0;

\t\t\t// Get response data
\t\t\tif ( responses ) {
\t\t\t\tresponse = ajaxHandleResponses( s, jqXHR, responses );
\t\t\t}

\t\t\t// If successful, handle type chaining
\t\t\tif ( status >= 200 && status < 300 || status === 304 ) {

\t\t\t\t// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
\t\t\t\tif ( s.ifModified ) {
\t\t\t\t\tmodified = jqXHR.getResponseHeader(\"Last-Modified\");
\t\t\t\t\tif ( modified ) {
\t\t\t\t\t\tjQuery.lastModified[ cacheURL ] = modified;
\t\t\t\t\t}
\t\t\t\t\tmodified = jqXHR.getResponseHeader(\"etag\");
\t\t\t\t\tif ( modified ) {
\t\t\t\t\t\tjQuery.etag[ cacheURL ] = modified;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// if no content
\t\t\t\tif ( status === 204 ) {
\t\t\t\t\tisSuccess = true;
\t\t\t\t\tstatusText = \"nocontent\";

\t\t\t\t// if not modified
\t\t\t\t} else if ( status === 304 ) {
\t\t\t\t\tisSuccess = true;
\t\t\t\t\tstatusText = \"notmodified\";

\t\t\t\t// If we have data, let's convert it
\t\t\t\t} else {
\t\t\t\t\tisSuccess = ajaxConvert( s, response );
\t\t\t\t\tstatusText = isSuccess.state;
\t\t\t\t\tsuccess = isSuccess.data;
\t\t\t\t\terror = isSuccess.error;
\t\t\t\t\tisSuccess = !error;
\t\t\t\t}
\t\t\t} else {
\t\t\t\t// We extract error from statusText
\t\t\t\t// then normalize statusText and status for non-aborts
\t\t\t\terror = statusText;
\t\t\t\tif ( status || !statusText ) {
\t\t\t\t\tstatusText = \"error\";
\t\t\t\t\tif ( status < 0 ) {
\t\t\t\t\t\tstatus = 0;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Set data for the fake xhr object
\t\t\tjqXHR.status = status;
\t\t\tjqXHR.statusText = ( nativeStatusText || statusText ) + \"\";

\t\t\t// Success/Error
\t\t\tif ( isSuccess ) {
\t\t\t\tdeferred.resolveWith( callbackContext, [ success, statusText, jqXHR ] );
\t\t\t} else {
\t\t\t\tdeferred.rejectWith( callbackContext, [ jqXHR, statusText, error ] );
\t\t\t}

\t\t\t// Status-dependent callbacks
\t\t\tjqXHR.statusCode( statusCode );
\t\t\tstatusCode = undefined;

\t\t\tif ( fireGlobals ) {
\t\t\t\tglobalEventContext.trigger( isSuccess ? \"ajaxSuccess\" : \"ajaxError\",
\t\t\t\t\t[ jqXHR, s, isSuccess ? success : error ] );
\t\t\t}

\t\t\t// Complete
\t\t\tcompleteDeferred.fireWith( callbackContext, [ jqXHR, statusText ] );

\t\t\tif ( fireGlobals ) {
\t\t\t\tglobalEventContext.trigger( \"ajaxComplete\", [ jqXHR, s ] );
\t\t\t\t// Handle the global AJAX counter
\t\t\t\tif ( !( --jQuery.active ) ) {
\t\t\t\t\tjQuery.event.trigger(\"ajaxStop\");
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn jqXHR;
\t},

\tgetScript: function( url, callback ) {
\t\treturn jQuery.get( url, undefined, callback, \"script\" );
\t},

\tgetJSON: function( url, data, callback ) {
\t\treturn jQuery.get( url, data, callback, \"json\" );
\t}
});

/* Handles responses to an ajax request:
 * - sets all responseXXX fields accordingly
 * - finds the right dataType (mediates between content-type and expected dataType)
 * - returns the corresponding response
 */
function ajaxHandleResponses( s, jqXHR, responses ) {
\tvar firstDataType, ct, finalDataType, type,
\t\tcontents = s.contents,
\t\tdataTypes = s.dataTypes,
\t\tresponseFields = s.responseFields;

\t// Fill responseXXX fields
\tfor ( type in responseFields ) {
\t\tif ( type in responses ) {
\t\t\tjqXHR[ responseFields[type] ] = responses[ type ];
\t\t}
\t}

\t// Remove auto dataType and get content-type in the process
\twhile( dataTypes[ 0 ] === \"*\" ) {
\t\tdataTypes.shift();
\t\tif ( ct === undefined ) {
\t\t\tct = s.mimeType || jqXHR.getResponseHeader(\"Content-Type\");
\t\t}
\t}

\t// Check if we're dealing with a known content-type
\tif ( ct ) {
\t\tfor ( type in contents ) {
\t\t\tif ( contents[ type ] && contents[ type ].test( ct ) ) {
\t\t\t\tdataTypes.unshift( type );
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t}

\t// Check to see if we have a response for the expected dataType
\tif ( dataTypes[ 0 ] in responses ) {
\t\tfinalDataType = dataTypes[ 0 ];
\t} else {
\t\t// Try convertible dataTypes
\t\tfor ( type in responses ) {
\t\t\tif ( !dataTypes[ 0 ] || s.converters[ type + \" \" + dataTypes[0] ] ) {
\t\t\t\tfinalDataType = type;
\t\t\t\tbreak;
\t\t\t}
\t\t\tif ( !firstDataType ) {
\t\t\t\tfirstDataType = type;
\t\t\t}
\t\t}
\t\t// Or just use first one
\t\tfinalDataType = finalDataType || firstDataType;
\t}

\t// If we found a dataType
\t// We add the dataType to the list if needed
\t// and return the corresponding response
\tif ( finalDataType ) {
\t\tif ( finalDataType !== dataTypes[ 0 ] ) {
\t\t\tdataTypes.unshift( finalDataType );
\t\t}
\t\treturn responses[ finalDataType ];
\t}
}

// Chain conversions given the request and the original response
function ajaxConvert( s, response ) {
\tvar conv2, current, conv, tmp,
\t\tconverters = {},
\t\ti = 0,
\t\t// Work with a copy of dataTypes in case we need to modify it for conversion
\t\tdataTypes = s.dataTypes.slice(),
\t\tprev = dataTypes[ 0 ];

\t// Apply the dataFilter if provided
\tif ( s.dataFilter ) {
\t\tresponse = s.dataFilter( response, s.dataType );
\t}

\t// Create converters map with lowercased keys
\tif ( dataTypes[ 1 ] ) {
\t\tfor ( conv in s.converters ) {
\t\t\tconverters[ conv.toLowerCase() ] = s.converters[ conv ];
\t\t}
\t}

\t// Convert to each sequential dataType, tolerating list modification
\tfor ( ; (current = dataTypes[++i]); ) {

\t\t// There's only work to do if current dataType is non-auto
\t\tif ( current !== \"*\" ) {

\t\t\t// Convert response if prev dataType is non-auto and differs from current
\t\t\tif ( prev !== \"*\" && prev !== current ) {

\t\t\t\t// Seek a direct converter
\t\t\t\tconv = converters[ prev + \" \" + current ] || converters[ \"* \" + current ];

\t\t\t\t// If none found, seek a pair
\t\t\t\tif ( !conv ) {
\t\t\t\t\tfor ( conv2 in converters ) {

\t\t\t\t\t\t// If conv2 outputs current
\t\t\t\t\t\ttmp = conv2.split(\" \");
\t\t\t\t\t\tif ( tmp[ 1 ] === current ) {

\t\t\t\t\t\t\t// If prev can be converted to accepted input
\t\t\t\t\t\t\tconv = converters[ prev + \" \" + tmp[ 0 ] ] ||
\t\t\t\t\t\t\t\tconverters[ \"* \" + tmp[ 0 ] ];
\t\t\t\t\t\t\tif ( conv ) {
\t\t\t\t\t\t\t\t// Condense equivalence converters
\t\t\t\t\t\t\t\tif ( conv === true ) {
\t\t\t\t\t\t\t\t\tconv = converters[ conv2 ];

\t\t\t\t\t\t\t\t// Otherwise, insert the intermediate dataType
\t\t\t\t\t\t\t\t} else if ( converters[ conv2 ] !== true ) {
\t\t\t\t\t\t\t\t\tcurrent = tmp[ 0 ];
\t\t\t\t\t\t\t\t\tdataTypes.splice( i--, 0, current );
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Apply converter (if not an equivalence)
\t\t\t\tif ( conv !== true ) {

\t\t\t\t\t// Unless errors are allowed to bubble, catch and return them
\t\t\t\t\tif ( conv && s[\"throws\"] ) {
\t\t\t\t\t\tresponse = conv( response );
\t\t\t\t\t} else {
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\tresponse = conv( response );
\t\t\t\t\t\t} catch ( e ) {
\t\t\t\t\t\t\treturn { state: \"parsererror\", error: conv ? e : \"No conversion from \" + prev + \" to \" + current };
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Update prev for next iteration
\t\t\tprev = current;
\t\t}
\t}

\treturn { state: \"success\", data: response };
}
// Install script dataType
jQuery.ajaxSetup({
\taccepts: {
\t\tscript: \"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript\"
\t},
\tcontents: {
\t\tscript: /(?:java|ecma)script/
\t},
\tconverters: {
\t\t\"text script\": function( text ) {
\t\t\tjQuery.globalEval( text );
\t\t\treturn text;
\t\t}
\t}
});

// Handle cache's special case and global
jQuery.ajaxPrefilter( \"script\", function( s ) {
\tif ( s.cache === undefined ) {
\t\ts.cache = false;
\t}
\tif ( s.crossDomain ) {
\t\ts.type = \"GET\";
\t\ts.global = false;
\t}
});

// Bind script tag hack transport
jQuery.ajaxTransport( \"script\", function(s) {

\t// This transport only deals with cross domain requests
\tif ( s.crossDomain ) {

\t\tvar script,
\t\t\thead = document.head || jQuery(\"head\")[0] || document.documentElement;

\t\treturn {

\t\t\tsend: function( _, callback ) {

\t\t\t\tscript = document.createElement(\"script\");

\t\t\t\tscript.async = true;

\t\t\t\tif ( s.scriptCharset ) {
\t\t\t\t\tscript.charset = s.scriptCharset;
\t\t\t\t}

\t\t\t\tscript.src = s.url;

\t\t\t\t// Attach handlers for all browsers
\t\t\t\tscript.onload = script.onreadystatechange = function( _, isAbort ) {

\t\t\t\t\tif ( isAbort || !script.readyState || /loaded|complete/.test( script.readyState ) ) {

\t\t\t\t\t\t// Handle memory leak in IE
\t\t\t\t\t\tscript.onload = script.onreadystatechange = null;

\t\t\t\t\t\t// Remove the script
\t\t\t\t\t\tif ( script.parentNode ) {
\t\t\t\t\t\t\tscript.parentNode.removeChild( script );
\t\t\t\t\t\t}

\t\t\t\t\t\t// Dereference the script
\t\t\t\t\t\tscript = null;

\t\t\t\t\t\t// Callback if not abort
\t\t\t\t\t\tif ( !isAbort ) {
\t\t\t\t\t\t\tcallback( 200, \"success\" );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t};

\t\t\t\t// Circumvent IE6 bugs with base elements (#2709 and #4378) by prepending
\t\t\t\t// Use native DOM manipulation to avoid our domManip AJAX trickery
\t\t\t\thead.insertBefore( script, head.firstChild );
\t\t\t},

\t\t\tabort: function() {
\t\t\t\tif ( script ) {
\t\t\t\t\tscript.onload( undefined, true );
\t\t\t\t}
\t\t\t}
\t\t};
\t}
});
var oldCallbacks = [],
\trjsonp = /(=)\\?(?=&|\$)|\\?\\?/;

// Default jsonp settings
jQuery.ajaxSetup({
\tjsonp: \"callback\",
\tjsonpCallback: function() {
\t\tvar callback = oldCallbacks.pop() || ( jQuery.expando + \"_\" + ( ajax_nonce++ ) );
\t\tthis[ callback ] = true;
\t\treturn callback;
\t}
});

// Detect, normalize options and install callbacks for jsonp requests
jQuery.ajaxPrefilter( \"json jsonp\", function( s, originalSettings, jqXHR ) {

\tvar callbackName, overwritten, responseContainer,
\t\tjsonProp = s.jsonp !== false && ( rjsonp.test( s.url ) ?
\t\t\t\"url\" :
\t\t\ttypeof s.data === \"string\" && !( s.contentType || \"\" ).indexOf(\"application/x-www-form-urlencoded\") && rjsonp.test( s.data ) && \"data\"
\t\t);

\t// Handle iff the expected data type is \"jsonp\" or we have a parameter to set
\tif ( jsonProp || s.dataTypes[ 0 ] === \"jsonp\" ) {

\t\t// Get callback name, remembering preexisting value associated with it
\t\tcallbackName = s.jsonpCallback = jQuery.isFunction( s.jsonpCallback ) ?
\t\t\ts.jsonpCallback() :
\t\t\ts.jsonpCallback;

\t\t// Insert callback into url or form data
\t\tif ( jsonProp ) {
\t\t\ts[ jsonProp ] = s[ jsonProp ].replace( rjsonp, \"\$1\" + callbackName );
\t\t} else if ( s.jsonp !== false ) {
\t\t\ts.url += ( ajax_rquery.test( s.url ) ? \"&\" : \"?\" ) + s.jsonp + \"=\" + callbackName;
\t\t}

\t\t// Use data converter to retrieve json after script execution
\t\ts.converters[\"script json\"] = function() {
\t\t\tif ( !responseContainer ) {
\t\t\t\tjQuery.error( callbackName + \" was not called\" );
\t\t\t}
\t\t\treturn responseContainer[ 0 ];
\t\t};

\t\t// force json dataType
\t\ts.dataTypes[ 0 ] = \"json\";

\t\t// Install callback
\t\toverwritten = window[ callbackName ];
\t\twindow[ callbackName ] = function() {
\t\t\tresponseContainer = arguments;
\t\t};

\t\t// Clean-up function (fires after converters)
\t\tjqXHR.always(function() {
\t\t\t// Restore preexisting value
\t\t\twindow[ callbackName ] = overwritten;

\t\t\t// Save back as free
\t\t\tif ( s[ callbackName ] ) {
\t\t\t\t// make sure that re-using the options doesn't screw things around
\t\t\t\ts.jsonpCallback = originalSettings.jsonpCallback;

\t\t\t\t// save the callback name for future use
\t\t\t\toldCallbacks.push( callbackName );
\t\t\t}

\t\t\t// Call if it was a function and we have a response
\t\t\tif ( responseContainer && jQuery.isFunction( overwritten ) ) {
\t\t\t\toverwritten( responseContainer[ 0 ] );
\t\t\t}

\t\t\tresponseContainer = overwritten = undefined;
\t\t});

\t\t// Delegate to script
\t\treturn \"script\";
\t}
});
var xhrCallbacks, xhrSupported,
\txhrId = 0,
\t// #5280: Internet Explorer will keep connections alive if we don't abort on unload
\txhrOnUnloadAbort = window.ActiveXObject && function() {
\t\t// Abort all pending requests
\t\tvar key;
\t\tfor ( key in xhrCallbacks ) {
\t\t\txhrCallbacks[ key ]( undefined, true );
\t\t}
\t};

// Functions to create xhrs
function createStandardXHR() {
\ttry {
\t\treturn new window.XMLHttpRequest();
\t} catch( e ) {}
}

function createActiveXHR() {
\ttry {
\t\treturn new window.ActiveXObject(\"Microsoft.XMLHTTP\");
\t} catch( e ) {}
}

// Create the request object
// (This is still attached to ajaxSettings for backward compatibility)
jQuery.ajaxSettings.xhr = window.ActiveXObject ?
\t/* Microsoft failed to properly
\t * implement the XMLHttpRequest in IE7 (can't request local files),
\t * so we use the ActiveXObject when it is available
\t * Additionally XMLHttpRequest can be disabled in IE7/IE8 so
\t * we need a fallback.
\t */
\tfunction() {
\t\treturn !this.isLocal && createStandardXHR() || createActiveXHR();
\t} :
\t// For all other browsers, use the standard XMLHttpRequest object
\tcreateStandardXHR;

// Determine support properties
xhrSupported = jQuery.ajaxSettings.xhr();
jQuery.support.cors = !!xhrSupported && ( \"withCredentials\" in xhrSupported );
xhrSupported = jQuery.support.ajax = !!xhrSupported;

// Create transport if the browser can provide an xhr
if ( xhrSupported ) {

\tjQuery.ajaxTransport(function( s ) {
\t\t// Cross domain only allowed if supported through XMLHttpRequest
\t\tif ( !s.crossDomain || jQuery.support.cors ) {

\t\t\tvar callback;

\t\t\treturn {
\t\t\t\tsend: function( headers, complete ) {

\t\t\t\t\t// Get a new xhr
\t\t\t\t\tvar handle, i,
\t\t\t\t\t\txhr = s.xhr();

\t\t\t\t\t// Open the socket
\t\t\t\t\t// Passing null username, generates a login popup on Opera (#2865)
\t\t\t\t\tif ( s.username ) {
\t\t\t\t\t\txhr.open( s.type, s.url, s.async, s.username, s.password );
\t\t\t\t\t} else {
\t\t\t\t\t\txhr.open( s.type, s.url, s.async );
\t\t\t\t\t}

\t\t\t\t\t// Apply custom fields if provided
\t\t\t\t\tif ( s.xhrFields ) {
\t\t\t\t\t\tfor ( i in s.xhrFields ) {
\t\t\t\t\t\t\txhr[ i ] = s.xhrFields[ i ];
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Override mime type if needed
\t\t\t\t\tif ( s.mimeType && xhr.overrideMimeType ) {
\t\t\t\t\t\txhr.overrideMimeType( s.mimeType );
\t\t\t\t\t}

\t\t\t\t\t// X-Requested-With header
\t\t\t\t\t// For cross-domain requests, seeing as conditions for a preflight are
\t\t\t\t\t// akin to a jigsaw puzzle, we simply never set it to be sure.
\t\t\t\t\t// (it can always be set on a per-request basis or even using ajaxSetup)
\t\t\t\t\t// For same-domain requests, won't change header if already provided.
\t\t\t\t\tif ( !s.crossDomain && !headers[\"X-Requested-With\"] ) {
\t\t\t\t\t\theaders[\"X-Requested-With\"] = \"XMLHttpRequest\";
\t\t\t\t\t}

\t\t\t\t\t// Need an extra try/catch for cross domain requests in Firefox 3
\t\t\t\t\ttry {
\t\t\t\t\t\tfor ( i in headers ) {
\t\t\t\t\t\t\txhr.setRequestHeader( i, headers[ i ] );
\t\t\t\t\t\t}
\t\t\t\t\t} catch( err ) {}

\t\t\t\t\t// Do send the request
\t\t\t\t\t// This may raise an exception which is actually
\t\t\t\t\t// handled in jQuery.ajax (so no try/catch here)
\t\t\t\t\txhr.send( ( s.hasContent && s.data ) || null );

\t\t\t\t\t// Listener
\t\t\t\t\tcallback = function( _, isAbort ) {
\t\t\t\t\t\tvar status, responseHeaders, statusText, responses;

\t\t\t\t\t\t// Firefox throws exceptions when accessing properties
\t\t\t\t\t\t// of an xhr when a network error occurred
\t\t\t\t\t\t// http://helpful.knobs-dials.com/index.php/Component_returned_failure_code:_0x80040111_(NS_ERROR_NOT_AVAILABLE)
\t\t\t\t\t\ttry {

\t\t\t\t\t\t\t// Was never called and is aborted or complete
\t\t\t\t\t\t\tif ( callback && ( isAbort || xhr.readyState === 4 ) ) {

\t\t\t\t\t\t\t\t// Only called once
\t\t\t\t\t\t\t\tcallback = undefined;

\t\t\t\t\t\t\t\t// Do not keep as active anymore
\t\t\t\t\t\t\t\tif ( handle ) {
\t\t\t\t\t\t\t\t\txhr.onreadystatechange = jQuery.noop;
\t\t\t\t\t\t\t\t\tif ( xhrOnUnloadAbort ) {
\t\t\t\t\t\t\t\t\t\tdelete xhrCallbacks[ handle ];
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t// If it's an abort
\t\t\t\t\t\t\t\tif ( isAbort ) {
\t\t\t\t\t\t\t\t\t// Abort it manually if needed
\t\t\t\t\t\t\t\t\tif ( xhr.readyState !== 4 ) {
\t\t\t\t\t\t\t\t\t\txhr.abort();
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tresponses = {};
\t\t\t\t\t\t\t\t\tstatus = xhr.status;
\t\t\t\t\t\t\t\t\tresponseHeaders = xhr.getAllResponseHeaders();

\t\t\t\t\t\t\t\t\t// When requesting binary data, IE6-9 will throw an exception
\t\t\t\t\t\t\t\t\t// on any attempt to access responseText (#11426)
\t\t\t\t\t\t\t\t\tif ( typeof xhr.responseText === \"string\" ) {
\t\t\t\t\t\t\t\t\t\tresponses.text = xhr.responseText;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t// Firefox throws an exception when accessing
\t\t\t\t\t\t\t\t\t// statusText for faulty cross-domain requests
\t\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t\t\tstatusText = xhr.statusText;
\t\t\t\t\t\t\t\t\t} catch( e ) {
\t\t\t\t\t\t\t\t\t\t// We normalize with Webkit giving an empty statusText
\t\t\t\t\t\t\t\t\t\tstatusText = \"\";
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t// Filter status for non standard behaviors

\t\t\t\t\t\t\t\t\t// If the request is local and we have data: assume a success
\t\t\t\t\t\t\t\t\t// (success with no data won't get notified, that's the best we
\t\t\t\t\t\t\t\t\t// can do given current implementations)
\t\t\t\t\t\t\t\t\tif ( !status && s.isLocal && !s.crossDomain ) {
\t\t\t\t\t\t\t\t\t\tstatus = responses.text ? 200 : 404;
\t\t\t\t\t\t\t\t\t// IE - #1450: sometimes returns 1223 when it should be 204
\t\t\t\t\t\t\t\t\t} else if ( status === 1223 ) {
\t\t\t\t\t\t\t\t\t\tstatus = 204;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} catch( firefoxAccessException ) {
\t\t\t\t\t\t\tif ( !isAbort ) {
\t\t\t\t\t\t\t\tcomplete( -1, firefoxAccessException );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t// Call complete if needed
\t\t\t\t\t\tif ( responses ) {
\t\t\t\t\t\t\tcomplete( status, statusText, responses, responseHeaders );
\t\t\t\t\t\t}
\t\t\t\t\t};

\t\t\t\t\tif ( !s.async ) {
\t\t\t\t\t\t// if we're in sync mode we fire the callback
\t\t\t\t\t\tcallback();
\t\t\t\t\t} else if ( xhr.readyState === 4 ) {
\t\t\t\t\t\t// (IE6 & IE7) if it's in cache and has been
\t\t\t\t\t\t// retrieved directly we need to fire the callback
\t\t\t\t\t\tsetTimeout( callback );
\t\t\t\t\t} else {
\t\t\t\t\t\thandle = ++xhrId;
\t\t\t\t\t\tif ( xhrOnUnloadAbort ) {
\t\t\t\t\t\t\t// Create the active xhrs callbacks list if needed
\t\t\t\t\t\t\t// and attach the unload handler
\t\t\t\t\t\t\tif ( !xhrCallbacks ) {
\t\t\t\t\t\t\t\txhrCallbacks = {};
\t\t\t\t\t\t\t\tjQuery( window ).unload( xhrOnUnloadAbort );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t// Add to list of active xhrs callbacks
\t\t\t\t\t\t\txhrCallbacks[ handle ] = callback;
\t\t\t\t\t\t}
\t\t\t\t\t\txhr.onreadystatechange = callback;
\t\t\t\t\t}
\t\t\t\t},

\t\t\t\tabort: function() {
\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\tcallback( undefined, true );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t};
\t\t}
\t});
}
var fxNow, timerId,
\trfxtypes = /^(?:toggle|show|hide)\$/,
\trfxnum = new RegExp( \"^(?:([+-])=|)(\" + core_pnum + \")([a-z%]*)\$\", \"i\" ),
\trrun = /queueHooks\$/,
\tanimationPrefilters = [ defaultPrefilter ],
\ttweeners = {
\t\t\"*\": [function( prop, value ) {
\t\t\tvar end, unit,
\t\t\t\ttween = this.createTween( prop, value ),
\t\t\t\tparts = rfxnum.exec( value ),
\t\t\t\ttarget = tween.cur(),
\t\t\t\tstart = +target || 0,
\t\t\t\tscale = 1,
\t\t\t\tmaxIterations = 20;

\t\t\tif ( parts ) {
\t\t\t\tend = +parts[2];
\t\t\t\tunit = parts[3] || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" );

\t\t\t\t// We need to compute starting value
\t\t\t\tif ( unit !== \"px\" && start ) {
\t\t\t\t\t// Iteratively approximate from a nonzero starting point
\t\t\t\t\t// Prefer the current property, because this process will be trivial if it uses the same units
\t\t\t\t\t// Fallback to end or a simple constant
\t\t\t\t\tstart = jQuery.css( tween.elem, prop, true ) || end || 1;

\t\t\t\t\tdo {
\t\t\t\t\t\t// If previous iteration zeroed out, double until we get *something*
\t\t\t\t\t\t// Use a string for doubling factor so we don't accidentally see scale as unchanged below
\t\t\t\t\t\tscale = scale || \".5\";

\t\t\t\t\t\t// Adjust and apply
\t\t\t\t\t\tstart = start / scale;
\t\t\t\t\t\tjQuery.style( tween.elem, prop, start + unit );

\t\t\t\t\t// Update scale, tolerating zero or NaN from tween.cur()
\t\t\t\t\t// And breaking the loop if scale is unchanged or perfect, or if we've just had enough
\t\t\t\t\t} while ( scale !== (scale = tween.cur() / target) && scale !== 1 && --maxIterations );
\t\t\t\t}

\t\t\t\ttween.unit = unit;
\t\t\t\ttween.start = start;
\t\t\t\t// If a +=/-= token was provided, we're doing a relative animation
\t\t\t\ttween.end = parts[1] ? start + ( parts[1] + 1 ) * end : end;
\t\t\t}
\t\t\treturn tween;
\t\t}]
\t};

// Animations created synchronously will run synchronously
function createFxNow() {
\tsetTimeout(function() {
\t\tfxNow = undefined;
\t});
\treturn ( fxNow = jQuery.now() );
}

function createTweens( animation, props ) {
\tjQuery.each( props, function( prop, value ) {
\t\tvar collection = ( tweeners[ prop ] || [] ).concat( tweeners[ \"*\" ] ),
\t\t\tindex = 0,
\t\t\tlength = collection.length;
\t\tfor ( ; index < length; index++ ) {
\t\t\tif ( collection[ index ].call( animation, prop, value ) ) {

\t\t\t\t// we're done with this property
\t\t\t\treturn;
\t\t\t}
\t\t}
\t});
}

function Animation( elem, properties, options ) {
\tvar result,
\t\tstopped,
\t\tindex = 0,
\t\tlength = animationPrefilters.length,
\t\tdeferred = jQuery.Deferred().always( function() {
\t\t\t// don't match elem in the :animated selector
\t\t\tdelete tick.elem;
\t\t}),
\t\ttick = function() {
\t\t\tif ( stopped ) {
\t\t\t\treturn false;
\t\t\t}
\t\t\tvar currentTime = fxNow || createFxNow(),
\t\t\t\tremaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),
\t\t\t\t// archaic crash bug won't allow us to use 1 - ( 0.5 || 0 ) (#12497)
\t\t\t\ttemp = remaining / animation.duration || 0,
\t\t\t\tpercent = 1 - temp,
\t\t\t\tindex = 0,
\t\t\t\tlength = animation.tweens.length;

\t\t\tfor ( ; index < length ; index++ ) {
\t\t\t\tanimation.tweens[ index ].run( percent );
\t\t\t}

\t\t\tdeferred.notifyWith( elem, [ animation, percent, remaining ]);

\t\t\tif ( percent < 1 && length ) {
\t\t\t\treturn remaining;
\t\t\t} else {
\t\t\t\tdeferred.resolveWith( elem, [ animation ] );
\t\t\t\treturn false;
\t\t\t}
\t\t},
\t\tanimation = deferred.promise({
\t\t\telem: elem,
\t\t\tprops: jQuery.extend( {}, properties ),
\t\t\topts: jQuery.extend( true, { specialEasing: {} }, options ),
\t\t\toriginalProperties: properties,
\t\t\toriginalOptions: options,
\t\t\tstartTime: fxNow || createFxNow(),
\t\t\tduration: options.duration,
\t\t\ttweens: [],
\t\t\tcreateTween: function( prop, end ) {
\t\t\t\tvar tween = jQuery.Tween( elem, animation.opts, prop, end,
\t\t\t\t\t\tanimation.opts.specialEasing[ prop ] || animation.opts.easing );
\t\t\t\tanimation.tweens.push( tween );
\t\t\t\treturn tween;
\t\t\t},
\t\t\tstop: function( gotoEnd ) {
\t\t\t\tvar index = 0,
\t\t\t\t\t// if we are going to the end, we want to run all the tweens
\t\t\t\t\t// otherwise we skip this part
\t\t\t\t\tlength = gotoEnd ? animation.tweens.length : 0;
\t\t\t\tif ( stopped ) {
\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t\tstopped = true;
\t\t\t\tfor ( ; index < length ; index++ ) {
\t\t\t\t\tanimation.tweens[ index ].run( 1 );
\t\t\t\t}

\t\t\t\t// resolve when we played the last frame
\t\t\t\t// otherwise, reject
\t\t\t\tif ( gotoEnd ) {
\t\t\t\t\tdeferred.resolveWith( elem, [ animation, gotoEnd ] );
\t\t\t\t} else {
\t\t\t\t\tdeferred.rejectWith( elem, [ animation, gotoEnd ] );
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t}
\t\t}),
\t\tprops = animation.props;

\tpropFilter( props, animation.opts.specialEasing );

\tfor ( ; index < length ; index++ ) {
\t\tresult = animationPrefilters[ index ].call( animation, elem, props, animation.opts );
\t\tif ( result ) {
\t\t\treturn result;
\t\t}
\t}

\tcreateTweens( animation, props );

\tif ( jQuery.isFunction( animation.opts.start ) ) {
\t\tanimation.opts.start.call( elem, animation );
\t}

\tjQuery.fx.timer(
\t\tjQuery.extend( tick, {
\t\t\telem: elem,
\t\t\tanim: animation,
\t\t\tqueue: animation.opts.queue
\t\t})
\t);

\t// attach callbacks from options
\treturn animation.progress( animation.opts.progress )
\t\t.done( animation.opts.done, animation.opts.complete )
\t\t.fail( animation.opts.fail )
\t\t.always( animation.opts.always );
}

function propFilter( props, specialEasing ) {
\tvar value, name, index, easing, hooks;

\t// camelCase, specialEasing and expand cssHook pass
\tfor ( index in props ) {
\t\tname = jQuery.camelCase( index );
\t\teasing = specialEasing[ name ];
\t\tvalue = props[ index ];
\t\tif ( jQuery.isArray( value ) ) {
\t\t\teasing = value[ 1 ];
\t\t\tvalue = props[ index ] = value[ 0 ];
\t\t}

\t\tif ( index !== name ) {
\t\t\tprops[ name ] = value;
\t\t\tdelete props[ index ];
\t\t}

\t\thooks = jQuery.cssHooks[ name ];
\t\tif ( hooks && \"expand\" in hooks ) {
\t\t\tvalue = hooks.expand( value );
\t\t\tdelete props[ name ];

\t\t\t// not quite \$.extend, this wont overwrite keys already present.
\t\t\t// also - reusing 'index' from above because we have the correct \"name\"
\t\t\tfor ( index in value ) {
\t\t\t\tif ( !( index in props ) ) {
\t\t\t\t\tprops[ index ] = value[ index ];
\t\t\t\t\tspecialEasing[ index ] = easing;
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\tspecialEasing[ name ] = easing;
\t\t}
\t}
}

jQuery.Animation = jQuery.extend( Animation, {

\ttweener: function( props, callback ) {
\t\tif ( jQuery.isFunction( props ) ) {
\t\t\tcallback = props;
\t\t\tprops = [ \"*\" ];
\t\t} else {
\t\t\tprops = props.split(\" \");
\t\t}

\t\tvar prop,
\t\t\tindex = 0,
\t\t\tlength = props.length;

\t\tfor ( ; index < length ; index++ ) {
\t\t\tprop = props[ index ];
\t\t\ttweeners[ prop ] = tweeners[ prop ] || [];
\t\t\ttweeners[ prop ].unshift( callback );
\t\t}
\t},

\tprefilter: function( callback, prepend ) {
\t\tif ( prepend ) {
\t\t\tanimationPrefilters.unshift( callback );
\t\t} else {
\t\t\tanimationPrefilters.push( callback );
\t\t}
\t}
});

function defaultPrefilter( elem, props, opts ) {
\t/*jshint validthis:true */
\tvar prop, index, length,
\t\tvalue, dataShow, toggle,
\t\ttween, hooks, oldfire,
\t\tanim = this,
\t\tstyle = elem.style,
\t\torig = {},
\t\thandled = [],
\t\thidden = elem.nodeType && isHidden( elem );

\t// handle queue: false promises
\tif ( !opts.queue ) {
\t\thooks = jQuery._queueHooks( elem, \"fx\" );
\t\tif ( hooks.unqueued == null ) {
\t\t\thooks.unqueued = 0;
\t\t\toldfire = hooks.empty.fire;
\t\t\thooks.empty.fire = function() {
\t\t\t\tif ( !hooks.unqueued ) {
\t\t\t\t\toldfire();
\t\t\t\t}
\t\t\t};
\t\t}
\t\thooks.unqueued++;

\t\tanim.always(function() {
\t\t\t// doing this makes sure that the complete handler will be called
\t\t\t// before this completes
\t\t\tanim.always(function() {
\t\t\t\thooks.unqueued--;
\t\t\t\tif ( !jQuery.queue( elem, \"fx\" ).length ) {
\t\t\t\t\thooks.empty.fire();
\t\t\t\t}
\t\t\t});
\t\t});
\t}

\t// height/width overflow pass
\tif ( elem.nodeType === 1 && ( \"height\" in props || \"width\" in props ) ) {
\t\t// Make sure that nothing sneaks out
\t\t// Record all 3 overflow attributes because IE does not
\t\t// change the overflow attribute when overflowX and
\t\t// overflowY are set to the same value
\t\topts.overflow = [ style.overflow, style.overflowX, style.overflowY ];

\t\t// Set display property to inline-block for height/width
\t\t// animations on inline elements that are having width/height animated
\t\tif ( jQuery.css( elem, \"display\" ) === \"inline\" &&
\t\t\t\tjQuery.css( elem, \"float\" ) === \"none\" ) {

\t\t\t// inline-level elements accept inline-block;
\t\t\t// block-level elements need to be inline with layout
\t\t\tif ( !jQuery.support.inlineBlockNeedsLayout || css_defaultDisplay( elem.nodeName ) === \"inline\" ) {
\t\t\t\tstyle.display = \"inline-block\";

\t\t\t} else {
\t\t\t\tstyle.zoom = 1;
\t\t\t}
\t\t}
\t}

\tif ( opts.overflow ) {
\t\tstyle.overflow = \"hidden\";
\t\tif ( !jQuery.support.shrinkWrapBlocks ) {
\t\t\tanim.always(function() {
\t\t\t\tstyle.overflow = opts.overflow[ 0 ];
\t\t\t\tstyle.overflowX = opts.overflow[ 1 ];
\t\t\t\tstyle.overflowY = opts.overflow[ 2 ];
\t\t\t});
\t\t}
\t}


\t// show/hide pass
\tfor ( index in props ) {
\t\tvalue = props[ index ];
\t\tif ( rfxtypes.exec( value ) ) {
\t\t\tdelete props[ index ];
\t\t\ttoggle = toggle || value === \"toggle\";
\t\t\tif ( value === ( hidden ? \"hide\" : \"show\" ) ) {
\t\t\t\tcontinue;
\t\t\t}
\t\t\thandled.push( index );
\t\t}
\t}

\tlength = handled.length;
\tif ( length ) {
\t\tdataShow = jQuery._data( elem, \"fxshow\" ) || jQuery._data( elem, \"fxshow\", {} );
\t\tif ( \"hidden\" in dataShow ) {
\t\t\thidden = dataShow.hidden;
\t\t}

\t\t// store state if its toggle - enables .stop().toggle() to \"reverse\"
\t\tif ( toggle ) {
\t\t\tdataShow.hidden = !hidden;
\t\t}
\t\tif ( hidden ) {
\t\t\tjQuery( elem ).show();
\t\t} else {
\t\t\tanim.done(function() {
\t\t\t\tjQuery( elem ).hide();
\t\t\t});
\t\t}
\t\tanim.done(function() {
\t\t\tvar prop;
\t\t\tjQuery._removeData( elem, \"fxshow\" );
\t\t\tfor ( prop in orig ) {
\t\t\t\tjQuery.style( elem, prop, orig[ prop ] );
\t\t\t}
\t\t});
\t\tfor ( index = 0 ; index < length ; index++ ) {
\t\t\tprop = handled[ index ];
\t\t\ttween = anim.createTween( prop, hidden ? dataShow[ prop ] : 0 );
\t\t\torig[ prop ] = dataShow[ prop ] || jQuery.style( elem, prop );

\t\t\tif ( !( prop in dataShow ) ) {
\t\t\t\tdataShow[ prop ] = tween.start;
\t\t\t\tif ( hidden ) {
\t\t\t\t\ttween.end = tween.start;
\t\t\t\t\ttween.start = prop === \"width\" || prop === \"height\" ? 1 : 0;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
}

function Tween( elem, options, prop, end, easing ) {
\treturn new Tween.prototype.init( elem, options, prop, end, easing );
}
jQuery.Tween = Tween;

Tween.prototype = {
\tconstructor: Tween,
\tinit: function( elem, options, prop, end, easing, unit ) {
\t\tthis.elem = elem;
\t\tthis.prop = prop;
\t\tthis.easing = easing || \"swing\";
\t\tthis.options = options;
\t\tthis.start = this.now = this.cur();
\t\tthis.end = end;
\t\tthis.unit = unit || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" );
\t},
\tcur: function() {
\t\tvar hooks = Tween.propHooks[ this.prop ];

\t\treturn hooks && hooks.get ?
\t\t\thooks.get( this ) :
\t\t\tTween.propHooks._default.get( this );
\t},
\trun: function( percent ) {
\t\tvar eased,
\t\t\thooks = Tween.propHooks[ this.prop ];

\t\tif ( this.options.duration ) {
\t\t\tthis.pos = eased = jQuery.easing[ this.easing ](
\t\t\t\tpercent, this.options.duration * percent, 0, 1, this.options.duration
\t\t\t);
\t\t} else {
\t\t\tthis.pos = eased = percent;
\t\t}
\t\tthis.now = ( this.end - this.start ) * eased + this.start;

\t\tif ( this.options.step ) {
\t\t\tthis.options.step.call( this.elem, this.now, this );
\t\t}

\t\tif ( hooks && hooks.set ) {
\t\t\thooks.set( this );
\t\t} else {
\t\t\tTween.propHooks._default.set( this );
\t\t}
\t\treturn this;
\t}
};

Tween.prototype.init.prototype = Tween.prototype;

Tween.propHooks = {
\t_default: {
\t\tget: function( tween ) {
\t\t\tvar result;

\t\t\tif ( tween.elem[ tween.prop ] != null &&
\t\t\t\t(!tween.elem.style || tween.elem.style[ tween.prop ] == null) ) {
\t\t\t\treturn tween.elem[ tween.prop ];
\t\t\t}

\t\t\t// passing an empty string as a 3rd parameter to .css will automatically
\t\t\t// attempt a parseFloat and fallback to a string if the parse fails
\t\t\t// so, simple values such as \"10px\" are parsed to Float.
\t\t\t// complex values such as \"rotate(1rad)\" are returned as is.
\t\t\tresult = jQuery.css( tween.elem, tween.prop, \"\" );
\t\t\t// Empty strings, null, undefined and \"auto\" are converted to 0.
\t\t\treturn !result || result === \"auto\" ? 0 : result;
\t\t},
\t\tset: function( tween ) {
\t\t\t// use step hook for back compat - use cssHook if its there - use .style if its
\t\t\t// available and use plain properties where available
\t\t\tif ( jQuery.fx.step[ tween.prop ] ) {
\t\t\t\tjQuery.fx.step[ tween.prop ]( tween );
\t\t\t} else if ( tween.elem.style && ( tween.elem.style[ jQuery.cssProps[ tween.prop ] ] != null || jQuery.cssHooks[ tween.prop ] ) ) {
\t\t\t\tjQuery.style( tween.elem, tween.prop, tween.now + tween.unit );
\t\t\t} else {
\t\t\t\ttween.elem[ tween.prop ] = tween.now;
\t\t\t}
\t\t}
\t}
};

// Remove in 2.0 - this supports IE8's panic based approach
// to setting things on disconnected nodes

Tween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {
\tset: function( tween ) {
\t\tif ( tween.elem.nodeType && tween.elem.parentNode ) {
\t\t\ttween.elem[ tween.prop ] = tween.now;
\t\t}
\t}
};

jQuery.each([ \"toggle\", \"show\", \"hide\" ], function( i, name ) {
\tvar cssFn = jQuery.fn[ name ];
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn speed == null || typeof speed === \"boolean\" ?
\t\t\tcssFn.apply( this, arguments ) :
\t\t\tthis.animate( genFx( name, true ), speed, easing, callback );
\t};
});

jQuery.fn.extend({
\tfadeTo: function( speed, to, easing, callback ) {

\t\t// show any hidden elements after setting opacity to 0
\t\treturn this.filter( isHidden ).css( \"opacity\", 0 ).show()

\t\t\t// animate to the value specified
\t\t\t.end().animate({ opacity: to }, speed, easing, callback );
\t},
\tanimate: function( prop, speed, easing, callback ) {
\t\tvar empty = jQuery.isEmptyObject( prop ),
\t\t\toptall = jQuery.speed( speed, easing, callback ),
\t\t\tdoAnimation = function() {
\t\t\t\t// Operate on a copy of prop so per-property easing won't be lost
\t\t\t\tvar anim = Animation( this, jQuery.extend( {}, prop ), optall );
\t\t\t\tdoAnimation.finish = function() {
\t\t\t\t\tanim.stop( true );
\t\t\t\t};
\t\t\t\t// Empty animations, or finishing resolves immediately
\t\t\t\tif ( empty || jQuery._data( this, \"finish\" ) ) {
\t\t\t\t\tanim.stop( true );
\t\t\t\t}
\t\t\t};
\t\t\tdoAnimation.finish = doAnimation;

\t\treturn empty || optall.queue === false ?
\t\t\tthis.each( doAnimation ) :
\t\t\tthis.queue( optall.queue, doAnimation );
\t},
\tstop: function( type, clearQueue, gotoEnd ) {
\t\tvar stopQueue = function( hooks ) {
\t\t\tvar stop = hooks.stop;
\t\t\tdelete hooks.stop;
\t\t\tstop( gotoEnd );
\t\t};

\t\tif ( typeof type !== \"string\" ) {
\t\t\tgotoEnd = clearQueue;
\t\t\tclearQueue = type;
\t\t\ttype = undefined;
\t\t}
\t\tif ( clearQueue && type !== false ) {
\t\t\tthis.queue( type || \"fx\", [] );
\t\t}

\t\treturn this.each(function() {
\t\t\tvar dequeue = true,
\t\t\t\tindex = type != null && type + \"queueHooks\",
\t\t\t\ttimers = jQuery.timers,
\t\t\t\tdata = jQuery._data( this );

\t\t\tif ( index ) {
\t\t\t\tif ( data[ index ] && data[ index ].stop ) {
\t\t\t\t\tstopQueue( data[ index ] );
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor ( index in data ) {
\t\t\t\t\tif ( data[ index ] && data[ index ].stop && rrun.test( index ) ) {
\t\t\t\t\t\tstopQueue( data[ index ] );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tfor ( index = timers.length; index--; ) {
\t\t\t\tif ( timers[ index ].elem === this && (type == null || timers[ index ].queue === type) ) {
\t\t\t\t\ttimers[ index ].anim.stop( gotoEnd );
\t\t\t\t\tdequeue = false;
\t\t\t\t\ttimers.splice( index, 1 );
\t\t\t\t}
\t\t\t}

\t\t\t// start the next in the queue if the last step wasn't forced
\t\t\t// timers currently will call their complete callbacks, which will dequeue
\t\t\t// but only if they were gotoEnd
\t\t\tif ( dequeue || !gotoEnd ) {
\t\t\t\tjQuery.dequeue( this, type );
\t\t\t}
\t\t});
\t},
\tfinish: function( type ) {
\t\tif ( type !== false ) {
\t\t\ttype = type || \"fx\";
\t\t}
\t\treturn this.each(function() {
\t\t\tvar index,
\t\t\t\tdata = jQuery._data( this ),
\t\t\t\tqueue = data[ type + \"queue\" ],
\t\t\t\thooks = data[ type + \"queueHooks\" ],
\t\t\t\ttimers = jQuery.timers,
\t\t\t\tlength = queue ? queue.length : 0;

\t\t\t// enable finishing flag on private data
\t\t\tdata.finish = true;

\t\t\t// empty the queue first
\t\t\tjQuery.queue( this, type, [] );

\t\t\tif ( hooks && hooks.cur && hooks.cur.finish ) {
\t\t\t\thooks.cur.finish.call( this );
\t\t\t}

\t\t\t// look for any active animations, and finish them
\t\t\tfor ( index = timers.length; index--; ) {
\t\t\t\tif ( timers[ index ].elem === this && timers[ index ].queue === type ) {
\t\t\t\t\ttimers[ index ].anim.stop( true );
\t\t\t\t\ttimers.splice( index, 1 );
\t\t\t\t}
\t\t\t}

\t\t\t// look for any animations in the old queue and finish them
\t\t\tfor ( index = 0; index < length; index++ ) {
\t\t\t\tif ( queue[ index ] && queue[ index ].finish ) {
\t\t\t\t\tqueue[ index ].finish.call( this );
\t\t\t\t}
\t\t\t}

\t\t\t// turn off finishing flag
\t\t\tdelete data.finish;
\t\t});
\t}
});

// Generate parameters to create a standard animation
function genFx( type, includeWidth ) {
\tvar which,
\t\tattrs = { height: type },
\t\ti = 0;

\t// if we include width, step value is 1 to do all cssExpand values,
\t// if we don't include width, step value is 2 to skip over Left and Right
\tincludeWidth = includeWidth? 1 : 0;
\tfor( ; i < 4 ; i += 2 - includeWidth ) {
\t\twhich = cssExpand[ i ];
\t\tattrs[ \"margin\" + which ] = attrs[ \"padding\" + which ] = type;
\t}

\tif ( includeWidth ) {
\t\tattrs.opacity = attrs.width = type;
\t}

\treturn attrs;
}

// Generate shortcuts for custom animations
jQuery.each({
\tslideDown: genFx(\"show\"),
\tslideUp: genFx(\"hide\"),
\tslideToggle: genFx(\"toggle\"),
\tfadeIn: { opacity: \"show\" },
\tfadeOut: { opacity: \"hide\" },
\tfadeToggle: { opacity: \"toggle\" }
}, function( name, props ) {
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn this.animate( props, speed, easing, callback );
\t};
});

jQuery.speed = function( speed, easing, fn ) {
\tvar opt = speed && typeof speed === \"object\" ? jQuery.extend( {}, speed ) : {
\t\tcomplete: fn || !fn && easing ||
\t\t\tjQuery.isFunction( speed ) && speed,
\t\tduration: speed,
\t\teasing: fn && easing || easing && !jQuery.isFunction( easing ) && easing
\t};

\topt.duration = jQuery.fx.off ? 0 : typeof opt.duration === \"number\" ? opt.duration :
\t\topt.duration in jQuery.fx.speeds ? jQuery.fx.speeds[ opt.duration ] : jQuery.fx.speeds._default;

\t// normalize opt.queue - true/undefined/null -> \"fx\"
\tif ( opt.queue == null || opt.queue === true ) {
\t\topt.queue = \"fx\";
\t}

\t// Queueing
\topt.old = opt.complete;

\topt.complete = function() {
\t\tif ( jQuery.isFunction( opt.old ) ) {
\t\t\topt.old.call( this );
\t\t}

\t\tif ( opt.queue ) {
\t\t\tjQuery.dequeue( this, opt.queue );
\t\t}
\t};

\treturn opt;
};

jQuery.easing = {
\tlinear: function( p ) {
\t\treturn p;
\t},
\tswing: function( p ) {
\t\treturn 0.5 - Math.cos( p*Math.PI ) / 2;
\t}
};

jQuery.timers = [];
jQuery.fx = Tween.prototype.init;
jQuery.fx.tick = function() {
\tvar timer,
\t\ttimers = jQuery.timers,
\t\ti = 0;

\tfxNow = jQuery.now();

\tfor ( ; i < timers.length; i++ ) {
\t\ttimer = timers[ i ];
\t\t// Checks the timer has not already been removed
\t\tif ( !timer() && timers[ i ] === timer ) {
\t\t\ttimers.splice( i--, 1 );
\t\t}
\t}

\tif ( !timers.length ) {
\t\tjQuery.fx.stop();
\t}
\tfxNow = undefined;
};

jQuery.fx.timer = function( timer ) {
\tif ( timer() && jQuery.timers.push( timer ) ) {
\t\tjQuery.fx.start();
\t}
};

jQuery.fx.interval = 13;

jQuery.fx.start = function() {
\tif ( !timerId ) {
\t\ttimerId = setInterval( jQuery.fx.tick, jQuery.fx.interval );
\t}
};

jQuery.fx.stop = function() {
\tclearInterval( timerId );
\ttimerId = null;
};

jQuery.fx.speeds = {
\tslow: 600,
\tfast: 200,
\t// Default speed
\t_default: 400
};

// Back Compat <1.8 extension point
jQuery.fx.step = {};

if ( jQuery.expr && jQuery.expr.filters ) {
\tjQuery.expr.filters.animated = function( elem ) {
\t\treturn jQuery.grep(jQuery.timers, function( fn ) {
\t\t\treturn elem === fn.elem;
\t\t}).length;
\t};
}
jQuery.fn.offset = function( options ) {
\tif ( arguments.length ) {
\t\treturn options === undefined ?
\t\t\tthis :
\t\t\tthis.each(function( i ) {
\t\t\t\tjQuery.offset.setOffset( this, options, i );
\t\t\t});
\t}

\tvar docElem, win,
\t\tbox = { top: 0, left: 0 },
\t\telem = this[ 0 ],
\t\tdoc = elem && elem.ownerDocument;

\tif ( !doc ) {
\t\treturn;
\t}

\tdocElem = doc.documentElement;

\t// Make sure it's not a disconnected DOM node
\tif ( !jQuery.contains( docElem, elem ) ) {
\t\treturn box;
\t}

\t// If we don't have gBCR, just use 0,0 rather than error
\t// BlackBerry 5, iOS 3 (original iPhone)
\tif ( typeof elem.getBoundingClientRect !== core_strundefined ) {
\t\tbox = elem.getBoundingClientRect();
\t}
\twin = getWindow( doc );
\treturn {
\t\ttop: box.top  + ( win.pageYOffset || docElem.scrollTop )  - ( docElem.clientTop  || 0 ),
\t\tleft: box.left + ( win.pageXOffset || docElem.scrollLeft ) - ( docElem.clientLeft || 0 )
\t};
};

jQuery.offset = {

\tsetOffset: function( elem, options, i ) {
\t\tvar position = jQuery.css( elem, \"position\" );

\t\t// set position first, in-case top/left are set even on static elem
\t\tif ( position === \"static\" ) {
\t\t\telem.style.position = \"relative\";
\t\t}

\t\tvar curElem = jQuery( elem ),
\t\t\tcurOffset = curElem.offset(),
\t\t\tcurCSSTop = jQuery.css( elem, \"top\" ),
\t\t\tcurCSSLeft = jQuery.css( elem, \"left\" ),
\t\t\tcalculatePosition = ( position === \"absolute\" || position === \"fixed\" ) && jQuery.inArray(\"auto\", [curCSSTop, curCSSLeft]) > -1,
\t\t\tprops = {}, curPosition = {}, curTop, curLeft;

\t\t// need to be able to calculate position if either top or left is auto and position is either absolute or fixed
\t\tif ( calculatePosition ) {
\t\t\tcurPosition = curElem.position();
\t\t\tcurTop = curPosition.top;
\t\t\tcurLeft = curPosition.left;
\t\t} else {
\t\t\tcurTop = parseFloat( curCSSTop ) || 0;
\t\t\tcurLeft = parseFloat( curCSSLeft ) || 0;
\t\t}

\t\tif ( jQuery.isFunction( options ) ) {
\t\t\toptions = options.call( elem, i, curOffset );
\t\t}

\t\tif ( options.top != null ) {
\t\t\tprops.top = ( options.top - curOffset.top ) + curTop;
\t\t}
\t\tif ( options.left != null ) {
\t\t\tprops.left = ( options.left - curOffset.left ) + curLeft;
\t\t}

\t\tif ( \"using\" in options ) {
\t\t\toptions.using.call( elem, props );
\t\t} else {
\t\t\tcurElem.css( props );
\t\t}
\t}
};


jQuery.fn.extend({

\tposition: function() {
\t\tif ( !this[ 0 ] ) {
\t\t\treturn;
\t\t}

\t\tvar offsetParent, offset,
\t\t\tparentOffset = { top: 0, left: 0 },
\t\t\telem = this[ 0 ];

\t\t// fixed elements are offset from window (parentOffset = {top:0, left: 0}, because it is it's only offset parent
\t\tif ( jQuery.css( elem, \"position\" ) === \"fixed\" ) {
\t\t\t// we assume that getBoundingClientRect is available when computed position is fixed
\t\t\toffset = elem.getBoundingClientRect();
\t\t} else {
\t\t\t// Get *real* offsetParent
\t\t\toffsetParent = this.offsetParent();

\t\t\t// Get correct offsets
\t\t\toffset = this.offset();
\t\t\tif ( !jQuery.nodeName( offsetParent[ 0 ], \"html\" ) ) {
\t\t\t\tparentOffset = offsetParent.offset();
\t\t\t}

\t\t\t// Add offsetParent borders
\t\t\tparentOffset.top  += jQuery.css( offsetParent[ 0 ], \"borderTopWidth\", true );
\t\t\tparentOffset.left += jQuery.css( offsetParent[ 0 ], \"borderLeftWidth\", true );
\t\t}

\t\t// Subtract parent offsets and element margins
\t\t// note: when an element has margin: auto the offsetLeft and marginLeft
\t\t// are the same in Safari causing offset.left to incorrectly be 0
\t\treturn {
\t\t\ttop:  offset.top  - parentOffset.top - jQuery.css( elem, \"marginTop\", true ),
\t\t\tleft: offset.left - parentOffset.left - jQuery.css( elem, \"marginLeft\", true)
\t\t};
\t},

\toffsetParent: function() {
\t\treturn this.map(function() {
\t\t\tvar offsetParent = this.offsetParent || document.documentElement;
\t\t\twhile ( offsetParent && ( !jQuery.nodeName( offsetParent, \"html\" ) && jQuery.css( offsetParent, \"position\") === \"static\" ) ) {
\t\t\t\toffsetParent = offsetParent.offsetParent;
\t\t\t}
\t\t\treturn offsetParent || document.documentElement;
\t\t});
\t}
});


// Create scrollLeft and scrollTop methods
jQuery.each( {scrollLeft: \"pageXOffset\", scrollTop: \"pageYOffset\"}, function( method, prop ) {
\tvar top = /Y/.test( prop );

\tjQuery.fn[ method ] = function( val ) {
\t\treturn jQuery.access( this, function( elem, method, val ) {
\t\t\tvar win = getWindow( elem );

\t\t\tif ( val === undefined ) {
\t\t\t\treturn win ? (prop in win) ? win[ prop ] :
\t\t\t\t\twin.document.documentElement[ method ] :
\t\t\t\t\telem[ method ];
\t\t\t}

\t\t\tif ( win ) {
\t\t\t\twin.scrollTo(
\t\t\t\t\t!top ? val : jQuery( win ).scrollLeft(),
\t\t\t\t\ttop ? val : jQuery( win ).scrollTop()
\t\t\t\t);

\t\t\t} else {
\t\t\t\telem[ method ] = val;
\t\t\t}
\t\t}, method, val, arguments.length, null );
\t};
});

function getWindow( elem ) {
\treturn jQuery.isWindow( elem ) ?
\t\telem :
\t\telem.nodeType === 9 ?
\t\t\telem.defaultView || elem.parentWindow :
\t\t\tfalse;
}
// Create innerHeight, innerWidth, height, width, outerHeight and outerWidth methods
jQuery.each( { Height: \"height\", Width: \"width\" }, function( name, type ) {
\tjQuery.each( { padding: \"inner\" + name, content: type, \"\": \"outer\" + name }, function( defaultExtra, funcName ) {
\t\t// margin is only for outerHeight, outerWidth
\t\tjQuery.fn[ funcName ] = function( margin, value ) {
\t\t\tvar chainable = arguments.length && ( defaultExtra || typeof margin !== \"boolean\" ),
\t\t\t\textra = defaultExtra || ( margin === true || value === true ? \"margin\" : \"border\" );

\t\t\treturn jQuery.access( this, function( elem, type, value ) {
\t\t\t\tvar doc;

\t\t\t\tif ( jQuery.isWindow( elem ) ) {
\t\t\t\t\t// As of 5/8/2012 this will yield incorrect results for Mobile Safari, but there
\t\t\t\t\t// isn't a whole lot we can do. See pull request at this URL for discussion:
\t\t\t\t\t// https://github.com/jquery/jquery/pull/764
\t\t\t\t\treturn elem.document.documentElement[ \"client\" + name ];
\t\t\t\t}

\t\t\t\t// Get document width or height
\t\t\t\tif ( elem.nodeType === 9 ) {
\t\t\t\t\tdoc = elem.documentElement;

\t\t\t\t\t// Either scroll[Width/Height] or offset[Width/Height] or client[Width/Height], whichever is greatest
\t\t\t\t\t// unfortunately, this causes bug #3838 in IE6/8 only, but there is currently no good, small way to fix it.
\t\t\t\t\treturn Math.max(
\t\t\t\t\t\telem.body[ \"scroll\" + name ], doc[ \"scroll\" + name ],
\t\t\t\t\t\telem.body[ \"offset\" + name ], doc[ \"offset\" + name ],
\t\t\t\t\t\tdoc[ \"client\" + name ]
\t\t\t\t\t);
\t\t\t\t}

\t\t\t\treturn value === undefined ?
\t\t\t\t\t// Get width or height on the element, requesting but not forcing parseFloat
\t\t\t\t\tjQuery.css( elem, type, extra ) :

\t\t\t\t\t// Set width or height on the element
\t\t\t\t\tjQuery.style( elem, type, value, extra );
\t\t\t}, type, chainable ? margin : undefined, chainable, null );
\t\t};
\t});
});
// Limit scope pollution from any deprecated API
// (function() {

// })();
// Expose jQuery to the global object
window.jQuery = window.\$ = jQuery;

// Expose jQuery as an AMD module, but only for AMD loaders that
// understand the issues with loading multiple versions of jQuery
// in a page that all might call define(). The loader will indicate
// they have special allowances for multiple jQuery versions by
// specifying define.amd.jQuery = true. Register as a named module,
// since jQuery can be concatenated with other files that may use define,
// but not use a proper concatenation script that understands anonymous
// AMD modules. A named AMD is safest and most robust way to register.
// Lowercase jquery is used because AMD module names are derived from
// file names, and jQuery is normally delivered in a lowercase file name.
// Do this after creating the global so that if an AMD module wants to call
// noConflict to hide this version of jQuery, it will work.
if ( typeof define === \"function\" && define.amd && define.amd.jQuery ) {
\tdefine( \"jquery\", [], function () { return jQuery; } );
}

})( window );
";
        
        $__internal_cb77abd1be004cf1689f13933c60e85c1910b3baacca4c1125fe4447941cf141->leave($__internal_cb77abd1be004cf1689f13933c60e85c1910b3baacca4c1125fe4447941cf141_prof);

    }

    public function getTemplateName()
    {
        return "@css/jquery.jqplot/jquery.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /*!*/
/*  * jQuery JavaScript Library v1.9.1*/
/*  * http://jquery.com/*/
/*  **/
/*  * Includes Sizzle.js*/
/*  * http://sizzlejs.com/*/
/*  **/
/*  * Copyright 2005, 2012 jQuery Foundation, Inc. and other contributors*/
/*  * Released under the MIT license*/
/*  * http://jquery.org/license*/
/*  **/
/*  * Date: 2013-2-4*/
/*  *//* */
/* (function( window, undefined ) {*/
/* */
/* // Can't do this because several apps including ASP.NET trace*/
/* // the stack via arguments.caller.callee and Firefox dies if*/
/* // you try to trace through "use strict" call chains. (#13335)*/
/* // Support: Firefox 18+*/
/* //"use strict";*/
/* var*/
/* 	// The deferred used on DOM ready*/
/* 	readyList,*/
/* */
/* 	// A central reference to the root jQuery(document)*/
/* 	rootjQuery,*/
/* */
/* 	// Support: IE<9*/
/* 	// For `typeof node.method` instead of `node.method !== undefined`*/
/* 	core_strundefined = typeof undefined,*/
/* */
/* 	// Use the correct document accordingly with window argument (sandbox)*/
/* 	document = window.document,*/
/* 	location = window.location,*/
/* */
/* 	// Map over jQuery in case of overwrite*/
/* 	_jQuery = window.jQuery,*/
/* */
/* 	// Map over the $ in case of overwrite*/
/* 	_$ = window.$,*/
/* */
/* 	// [[Class]] -> type pairs*/
/* 	class2type = {},*/
/* */
/* 	// List of deleted data cache ids, so we can reuse them*/
/* 	core_deletedIds = [],*/
/* */
/* 	core_version = "1.9.1",*/
/* */
/* 	// Save a reference to some core methods*/
/* 	core_concat = core_deletedIds.concat,*/
/* 	core_push = core_deletedIds.push,*/
/* 	core_slice = core_deletedIds.slice,*/
/* 	core_indexOf = core_deletedIds.indexOf,*/
/* 	core_toString = class2type.toString,*/
/* 	core_hasOwn = class2type.hasOwnProperty,*/
/* 	core_trim = core_version.trim,*/
/* */
/* 	// Define a local copy of jQuery*/
/* 	jQuery = function( selector, context ) {*/
/* 		// The jQuery object is actually just the init constructor 'enhanced'*/
/* 		return new jQuery.fn.init( selector, context, rootjQuery );*/
/* 	},*/
/* */
/* 	// Used for matching numbers*/
/* 	core_pnum = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,*/
/* */
/* 	// Used for splitting on whitespace*/
/* 	core_rnotwhite = /\S+/g,*/
/* */
/* 	// Make sure we trim BOM and NBSP (here's looking at you, Safari 5.0 and IE)*/
/* 	rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,*/
/* */
/* 	// A simple way to check for HTML strings*/
/* 	// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)*/
/* 	// Strict HTML recognition (#11290: must start with <)*/
/* 	rquickExpr = /^(?:(<[\w\W]+>)[^>]*|#([\w-]*))$/,*/
/* */
/* 	// Match a standalone tag*/
/* 	rsingleTag = /^<(\w+)\s*\/?>(?:<\/\1>|)$/,*/
/* */
/* 	// JSON RegExp*/
/* 	rvalidchars = /^[\],:{}\s]*$/,*/
/* 	rvalidbraces = /(?:^|:|,)(?:\s*\[)+/g,*/
/* 	rvalidescape = /\\(?:["\\\/bfnrt]|u[\da-fA-F]{4})/g,*/
/* 	rvalidtokens = /"[^"\\\r\n]*"|true|false|null|-?(?:\d+\.|)\d+(?:[eE][+-]?\d+|)/g,*/
/* */
/* 	// Matches dashed string for camelizing*/
/* 	rmsPrefix = /^-ms-/,*/
/* 	rdashAlpha = /-([\da-z])/gi,*/
/* */
/* 	// Used by jQuery.camelCase as callback to replace()*/
/* 	fcamelCase = function( all, letter ) {*/
/* 		return letter.toUpperCase();*/
/* 	},*/
/* */
/* 	// The ready event handler*/
/* 	completed = function( event ) {*/
/* */
/* 		// readyState === "complete" is good enough for us to call the dom ready in oldIE*/
/* 		if ( document.addEventListener || event.type === "load" || document.readyState === "complete" ) {*/
/* 			detach();*/
/* 			jQuery.ready();*/
/* 		}*/
/* 	},*/
/* 	// Clean-up method for dom ready events*/
/* 	detach = function() {*/
/* 		if ( document.addEventListener ) {*/
/* 			document.removeEventListener( "DOMContentLoaded", completed, false );*/
/* 			window.removeEventListener( "load", completed, false );*/
/* */
/* 		} else {*/
/* 			document.detachEvent( "onreadystatechange", completed );*/
/* 			window.detachEvent( "onload", completed );*/
/* 		}*/
/* 	};*/
/* */
/* jQuery.fn = jQuery.prototype = {*/
/* 	// The current version of jQuery being used*/
/* 	jquery: core_version,*/
/* */
/* 	constructor: jQuery,*/
/* 	init: function( selector, context, rootjQuery ) {*/
/* 		var match, elem;*/
/* */
/* 		// HANDLE: $(""), $(null), $(undefined), $(false)*/
/* 		if ( !selector ) {*/
/* 			return this;*/
/* 		}*/
/* */
/* 		// Handle HTML strings*/
/* 		if ( typeof selector === "string" ) {*/
/* 			if ( selector.charAt(0) === "<" && selector.charAt( selector.length - 1 ) === ">" && selector.length >= 3 ) {*/
/* 				// Assume that strings that start and end with <> are HTML and skip the regex check*/
/* 				match = [ null, selector, null ];*/
/* */
/* 			} else {*/
/* 				match = rquickExpr.exec( selector );*/
/* 			}*/
/* */
/* 			// Match html or make sure no context is specified for #id*/
/* 			if ( match && (match[1] || !context) ) {*/
/* */
/* 				// HANDLE: $(html) -> $(array)*/
/* 				if ( match[1] ) {*/
/* 					context = context instanceof jQuery ? context[0] : context;*/
/* */
/* 					// scripts is true for back-compat*/
/* 					jQuery.merge( this, jQuery.parseHTML(*/
/* 						match[1],*/
/* 						context && context.nodeType ? context.ownerDocument || context : document,*/
/* 						true*/
/* 					) );*/
/* */
/* 					// HANDLE: $(html, props)*/
/* 					if ( rsingleTag.test( match[1] ) && jQuery.isPlainObject( context ) ) {*/
/* 						for ( match in context ) {*/
/* 							// Properties of context are called as methods if possible*/
/* 							if ( jQuery.isFunction( this[ match ] ) ) {*/
/* 								this[ match ]( context[ match ] );*/
/* */
/* 							// ...and otherwise set as attributes*/
/* 							} else {*/
/* 								this.attr( match, context[ match ] );*/
/* 							}*/
/* 						}*/
/* 					}*/
/* */
/* 					return this;*/
/* */
/* 				// HANDLE: $(#id)*/
/* 				} else {*/
/* 					elem = document.getElementById( match[2] );*/
/* */
/* 					// Check parentNode to catch when Blackberry 4.6 returns*/
/* 					// nodes that are no longer in the document #6963*/
/* 					if ( elem && elem.parentNode ) {*/
/* 						// Handle the case where IE and Opera return items*/
/* 						// by name instead of ID*/
/* 						if ( elem.id !== match[2] ) {*/
/* 							return rootjQuery.find( selector );*/
/* 						}*/
/* */
/* 						// Otherwise, we inject the element directly into the jQuery object*/
/* 						this.length = 1;*/
/* 						this[0] = elem;*/
/* 					}*/
/* */
/* 					this.context = document;*/
/* 					this.selector = selector;*/
/* 					return this;*/
/* 				}*/
/* */
/* 			// HANDLE: $(expr, $(...))*/
/* 			} else if ( !context || context.jquery ) {*/
/* 				return ( context || rootjQuery ).find( selector );*/
/* */
/* 			// HANDLE: $(expr, context)*/
/* 			// (which is just equivalent to: $(context).find(expr)*/
/* 			} else {*/
/* 				return this.constructor( context ).find( selector );*/
/* 			}*/
/* */
/* 		// HANDLE: $(DOMElement)*/
/* 		} else if ( selector.nodeType ) {*/
/* 			this.context = this[0] = selector;*/
/* 			this.length = 1;*/
/* 			return this;*/
/* */
/* 		// HANDLE: $(function)*/
/* 		// Shortcut for document ready*/
/* 		} else if ( jQuery.isFunction( selector ) ) {*/
/* 			return rootjQuery.ready( selector );*/
/* 		}*/
/* */
/* 		if ( selector.selector !== undefined ) {*/
/* 			this.selector = selector.selector;*/
/* 			this.context = selector.context;*/
/* 		}*/
/* */
/* 		return jQuery.makeArray( selector, this );*/
/* 	},*/
/* */
/* 	// Start with an empty selector*/
/* 	selector: "",*/
/* */
/* 	// The default length of a jQuery object is 0*/
/* 	length: 0,*/
/* */
/* 	// The number of elements contained in the matched element set*/
/* 	size: function() {*/
/* 		return this.length;*/
/* 	},*/
/* */
/* 	toArray: function() {*/
/* 		return core_slice.call( this );*/
/* 	},*/
/* */
/* 	// Get the Nth element in the matched element set OR*/
/* 	// Get the whole matched element set as a clean array*/
/* 	get: function( num ) {*/
/* 		return num == null ?*/
/* */
/* 			// Return a 'clean' array*/
/* 			this.toArray() :*/
/* */
/* 			// Return just the object*/
/* 			( num < 0 ? this[ this.length + num ] : this[ num ] );*/
/* 	},*/
/* */
/* 	// Take an array of elements and push it onto the stack*/
/* 	// (returning the new matched element set)*/
/* 	pushStack: function( elems ) {*/
/* */
/* 		// Build a new jQuery matched element set*/
/* 		var ret = jQuery.merge( this.constructor(), elems );*/
/* */
/* 		// Add the old object onto the stack (as a reference)*/
/* 		ret.prevObject = this;*/
/* 		ret.context = this.context;*/
/* */
/* 		// Return the newly-formed element set*/
/* 		return ret;*/
/* 	},*/
/* */
/* 	// Execute a callback for every element in the matched set.*/
/* 	// (You can seed the arguments with an array of args, but this is*/
/* 	// only used internally.)*/
/* 	each: function( callback, args ) {*/
/* 		return jQuery.each( this, callback, args );*/
/* 	},*/
/* */
/* 	ready: function( fn ) {*/
/* 		// Add the callback*/
/* 		jQuery.ready.promise().done( fn );*/
/* */
/* 		return this;*/
/* 	},*/
/* */
/* 	slice: function() {*/
/* 		return this.pushStack( core_slice.apply( this, arguments ) );*/
/* 	},*/
/* */
/* 	first: function() {*/
/* 		return this.eq( 0 );*/
/* 	},*/
/* */
/* 	last: function() {*/
/* 		return this.eq( -1 );*/
/* 	},*/
/* */
/* 	eq: function( i ) {*/
/* 		var len = this.length,*/
/* 			j = +i + ( i < 0 ? len : 0 );*/
/* 		return this.pushStack( j >= 0 && j < len ? [ this[j] ] : [] );*/
/* 	},*/
/* */
/* 	map: function( callback ) {*/
/* 		return this.pushStack( jQuery.map(this, function( elem, i ) {*/
/* 			return callback.call( elem, i, elem );*/
/* 		}));*/
/* 	},*/
/* */
/* 	end: function() {*/
/* 		return this.prevObject || this.constructor(null);*/
/* 	},*/
/* */
/* 	// For internal use only.*/
/* 	// Behaves like an Array's method, not like a jQuery method.*/
/* 	push: core_push,*/
/* 	sort: [].sort,*/
/* 	splice: [].splice*/
/* };*/
/* */
/* // Give the init function the jQuery prototype for later instantiation*/
/* jQuery.fn.init.prototype = jQuery.fn;*/
/* */
/* jQuery.extend = jQuery.fn.extend = function() {*/
/* 	var src, copyIsArray, copy, name, options, clone,*/
/* 		target = arguments[0] || {},*/
/* 		i = 1,*/
/* 		length = arguments.length,*/
/* 		deep = false;*/
/* */
/* 	// Handle a deep copy situation*/
/* 	if ( typeof target === "boolean" ) {*/
/* 		deep = target;*/
/* 		target = arguments[1] || {};*/
/* 		// skip the boolean and the target*/
/* 		i = 2;*/
/* 	}*/
/* */
/* 	// Handle case when target is a string or something (possible in deep copy)*/
/* 	if ( typeof target !== "object" && !jQuery.isFunction(target) ) {*/
/* 		target = {};*/
/* 	}*/
/* */
/* 	// extend jQuery itself if only one argument is passed*/
/* 	if ( length === i ) {*/
/* 		target = this;*/
/* 		--i;*/
/* 	}*/
/* */
/* 	for ( ; i < length; i++ ) {*/
/* 		// Only deal with non-null/undefined values*/
/* 		if ( (options = arguments[ i ]) != null ) {*/
/* 			// Extend the base object*/
/* 			for ( name in options ) {*/
/* 				src = target[ name ];*/
/* 				copy = options[ name ];*/
/* */
/* 				// Prevent never-ending loop*/
/* 				if ( target === copy ) {*/
/* 					continue;*/
/* 				}*/
/* */
/* 				// Recurse if we're merging plain objects or arrays*/
/* 				if ( deep && copy && ( jQuery.isPlainObject(copy) || (copyIsArray = jQuery.isArray(copy)) ) ) {*/
/* 					if ( copyIsArray ) {*/
/* 						copyIsArray = false;*/
/* 						clone = src && jQuery.isArray(src) ? src : [];*/
/* */
/* 					} else {*/
/* 						clone = src && jQuery.isPlainObject(src) ? src : {};*/
/* 					}*/
/* */
/* 					// Never move original objects, clone them*/
/* 					target[ name ] = jQuery.extend( deep, clone, copy );*/
/* */
/* 				// Don't bring in undefined values*/
/* 				} else if ( copy !== undefined ) {*/
/* 					target[ name ] = copy;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	// Return the modified object*/
/* 	return target;*/
/* };*/
/* */
/* jQuery.extend({*/
/* 	noConflict: function( deep ) {*/
/* 		if ( window.$ === jQuery ) {*/
/* 			window.$ = _$;*/
/* 		}*/
/* */
/* 		if ( deep && window.jQuery === jQuery ) {*/
/* 			window.jQuery = _jQuery;*/
/* 		}*/
/* */
/* 		return jQuery;*/
/* 	},*/
/* */
/* 	// Is the DOM ready to be used? Set to true once it occurs.*/
/* 	isReady: false,*/
/* */
/* 	// A counter to track how many items to wait for before*/
/* 	// the ready event fires. See #6781*/
/* 	readyWait: 1,*/
/* */
/* 	// Hold (or release) the ready event*/
/* 	holdReady: function( hold ) {*/
/* 		if ( hold ) {*/
/* 			jQuery.readyWait++;*/
/* 		} else {*/
/* 			jQuery.ready( true );*/
/* 		}*/
/* 	},*/
/* */
/* 	// Handle when the DOM is ready*/
/* 	ready: function( wait ) {*/
/* */
/* 		// Abort if there are pending holds or we're already ready*/
/* 		if ( wait === true ? --jQuery.readyWait : jQuery.isReady ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// Make sure body exists, at least, in case IE gets a little overzealous (ticket #5443).*/
/* 		if ( !document.body ) {*/
/* 			return setTimeout( jQuery.ready );*/
/* 		}*/
/* */
/* 		// Remember that the DOM is ready*/
/* 		jQuery.isReady = true;*/
/* */
/* 		// If a normal DOM Ready event fired, decrement, and wait if need be*/
/* 		if ( wait !== true && --jQuery.readyWait > 0 ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// If there are functions bound, to execute*/
/* 		readyList.resolveWith( document, [ jQuery ] );*/
/* */
/* 		// Trigger any bound ready events*/
/* 		if ( jQuery.fn.trigger ) {*/
/* 			jQuery( document ).trigger("ready").off("ready");*/
/* 		}*/
/* 	},*/
/* */
/* 	// See test/unit/core.js for details concerning isFunction.*/
/* 	// Since version 1.3, DOM methods and functions like alert*/
/* 	// aren't supported. They return false on IE (#2968).*/
/* 	isFunction: function( obj ) {*/
/* 		return jQuery.type(obj) === "function";*/
/* 	},*/
/* */
/* 	isArray: Array.isArray || function( obj ) {*/
/* 		return jQuery.type(obj) === "array";*/
/* 	},*/
/* */
/* 	isWindow: function( obj ) {*/
/* 		return obj != null && obj == obj.window;*/
/* 	},*/
/* */
/* 	isNumeric: function( obj ) {*/
/* 		return !isNaN( parseFloat(obj) ) && isFinite( obj );*/
/* 	},*/
/* */
/* 	type: function( obj ) {*/
/* 		if ( obj == null ) {*/
/* 			return String( obj );*/
/* 		}*/
/* 		return typeof obj === "object" || typeof obj === "function" ?*/
/* 			class2type[ core_toString.call(obj) ] || "object" :*/
/* 			typeof obj;*/
/* 	},*/
/* */
/* 	isPlainObject: function( obj ) {*/
/* 		// Must be an Object.*/
/* 		// Because of IE, we also have to check the presence of the constructor property.*/
/* 		// Make sure that DOM nodes and window objects don't pass through, as well*/
/* 		if ( !obj || jQuery.type(obj) !== "object" || obj.nodeType || jQuery.isWindow( obj ) ) {*/
/* 			return false;*/
/* 		}*/
/* */
/* 		try {*/
/* 			// Not own constructor property must be Object*/
/* 			if ( obj.constructor &&*/
/* 				!core_hasOwn.call(obj, "constructor") &&*/
/* 				!core_hasOwn.call(obj.constructor.prototype, "isPrototypeOf") ) {*/
/* 				return false;*/
/* 			}*/
/* 		} catch ( e ) {*/
/* 			// IE8,9 Will throw exceptions on certain host objects #9897*/
/* 			return false;*/
/* 		}*/
/* */
/* 		// Own properties are enumerated firstly, so to speed up,*/
/* 		// if last one is own, then all properties are own.*/
/* */
/* 		var key;*/
/* 		for ( key in obj ) {}*/
/* */
/* 		return key === undefined || core_hasOwn.call( obj, key );*/
/* 	},*/
/* */
/* 	isEmptyObject: function( obj ) {*/
/* 		var name;*/
/* 		for ( name in obj ) {*/
/* 			return false;*/
/* 		}*/
/* 		return true;*/
/* 	},*/
/* */
/* 	error: function( msg ) {*/
/* 		throw new Error( msg );*/
/* 	},*/
/* */
/* 	// data: string of html*/
/* 	// context (optional): If specified, the fragment will be created in this context, defaults to document*/
/* 	// keepScripts (optional): If true, will include scripts passed in the html string*/
/* 	parseHTML: function( data, context, keepScripts ) {*/
/* 		if ( !data || typeof data !== "string" ) {*/
/* 			return null;*/
/* 		}*/
/* 		if ( typeof context === "boolean" ) {*/
/* 			keepScripts = context;*/
/* 			context = false;*/
/* 		}*/
/* 		context = context || document;*/
/* */
/* 		var parsed = rsingleTag.exec( data ),*/
/* 			scripts = !keepScripts && [];*/
/* */
/* 		// Single tag*/
/* 		if ( parsed ) {*/
/* 			return [ context.createElement( parsed[1] ) ];*/
/* 		}*/
/* */
/* 		parsed = jQuery.buildFragment( [ data ], context, scripts );*/
/* 		if ( scripts ) {*/
/* 			jQuery( scripts ).remove();*/
/* 		}*/
/* 		return jQuery.merge( [], parsed.childNodes );*/
/* 	},*/
/* */
/* 	parseJSON: function( data ) {*/
/* 		// Attempt to parse using the native JSON parser first*/
/* 		if ( window.JSON && window.JSON.parse ) {*/
/* 			return window.JSON.parse( data );*/
/* 		}*/
/* */
/* 		if ( data === null ) {*/
/* 			return data;*/
/* 		}*/
/* */
/* 		if ( typeof data === "string" ) {*/
/* */
/* 			// Make sure leading/trailing whitespace is removed (IE can't handle it)*/
/* 			data = jQuery.trim( data );*/
/* */
/* 			if ( data ) {*/
/* 				// Make sure the incoming data is actual JSON*/
/* 				// Logic borrowed from http://json.org/json2.js*/
/* 				if ( rvalidchars.test( data.replace( rvalidescape, "@" )*/
/* 					.replace( rvalidtokens, "]" )*/
/* 					.replace( rvalidbraces, "")) ) {*/
/* */
/* 					return ( new Function( "return " + data ) )();*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		jQuery.error( "Invalid JSON: " + data );*/
/* 	},*/
/* */
/* 	// Cross-browser xml parsing*/
/* 	parseXML: function( data ) {*/
/* 		var xml, tmp;*/
/* 		if ( !data || typeof data !== "string" ) {*/
/* 			return null;*/
/* 		}*/
/* 		try {*/
/* 			if ( window.DOMParser ) { // Standard*/
/* 				tmp = new DOMParser();*/
/* 				xml = tmp.parseFromString( data , "text/xml" );*/
/* 			} else { // IE*/
/* 				xml = new ActiveXObject( "Microsoft.XMLDOM" );*/
/* 				xml.async = "false";*/
/* 				xml.loadXML( data );*/
/* 			}*/
/* 		} catch( e ) {*/
/* 			xml = undefined;*/
/* 		}*/
/* 		if ( !xml || !xml.documentElement || xml.getElementsByTagName( "parsererror" ).length ) {*/
/* 			jQuery.error( "Invalid XML: " + data );*/
/* 		}*/
/* 		return xml;*/
/* 	},*/
/* */
/* 	noop: function() {},*/
/* */
/* 	// Evaluates a script in a global context*/
/* 	// Workarounds based on findings by Jim Driscoll*/
/* 	// http://weblogs.java.net/blog/driscoll/archive/2009/09/08/eval-javascript-global-context*/
/* 	globalEval: function( data ) {*/
/* 		if ( data && jQuery.trim( data ) ) {*/
/* 			// We use execScript on Internet Explorer*/
/* 			// We use an anonymous function so that context is window*/
/* 			// rather than jQuery in Firefox*/
/* 			( window.execScript || function( data ) {*/
/* 				window[ "eval" ].call( window, data );*/
/* 			} )( data );*/
/* 		}*/
/* 	},*/
/* */
/* 	// Convert dashed to camelCase; used by the css and data modules*/
/* 	// Microsoft forgot to hump their vendor prefix (#9572)*/
/* 	camelCase: function( string ) {*/
/* 		return string.replace( rmsPrefix, "ms-" ).replace( rdashAlpha, fcamelCase );*/
/* 	},*/
/* */
/* 	nodeName: function( elem, name ) {*/
/* 		return elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase();*/
/* 	},*/
/* */
/* 	// args is for internal usage only*/
/* 	each: function( obj, callback, args ) {*/
/* 		var value,*/
/* 			i = 0,*/
/* 			length = obj.length,*/
/* 			isArray = isArraylike( obj );*/
/* */
/* 		if ( args ) {*/
/* 			if ( isArray ) {*/
/* 				for ( ; i < length; i++ ) {*/
/* 					value = callback.apply( obj[ i ], args );*/
/* */
/* 					if ( value === false ) {*/
/* 						break;*/
/* 					}*/
/* 				}*/
/* 			} else {*/
/* 				for ( i in obj ) {*/
/* 					value = callback.apply( obj[ i ], args );*/
/* */
/* 					if ( value === false ) {*/
/* 						break;*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 		// A special, fast, case for the most common use of each*/
/* 		} else {*/
/* 			if ( isArray ) {*/
/* 				for ( ; i < length; i++ ) {*/
/* 					value = callback.call( obj[ i ], i, obj[ i ] );*/
/* */
/* 					if ( value === false ) {*/
/* 						break;*/
/* 					}*/
/* 				}*/
/* 			} else {*/
/* 				for ( i in obj ) {*/
/* 					value = callback.call( obj[ i ], i, obj[ i ] );*/
/* */
/* 					if ( value === false ) {*/
/* 						break;*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		return obj;*/
/* 	},*/
/* */
/* 	// Use native String.trim function wherever possible*/
/* 	trim: core_trim && !core_trim.call("\uFEFF\xA0") ?*/
/* 		function( text ) {*/
/* 			return text == null ?*/
/* 				"" :*/
/* 				core_trim.call( text );*/
/* 		} :*/
/* */
/* 		// Otherwise use our own trimming functionality*/
/* 		function( text ) {*/
/* 			return text == null ?*/
/* 				"" :*/
/* 				( text + "" ).replace( rtrim, "" );*/
/* 		},*/
/* */
/* 	// results is for internal usage only*/
/* 	makeArray: function( arr, results ) {*/
/* 		var ret = results || [];*/
/* */
/* 		if ( arr != null ) {*/
/* 			if ( isArraylike( Object(arr) ) ) {*/
/* 				jQuery.merge( ret,*/
/* 					typeof arr === "string" ?*/
/* 					[ arr ] : arr*/
/* 				);*/
/* 			} else {*/
/* 				core_push.call( ret, arr );*/
/* 			}*/
/* 		}*/
/* */
/* 		return ret;*/
/* 	},*/
/* */
/* 	inArray: function( elem, arr, i ) {*/
/* 		var len;*/
/* */
/* 		if ( arr ) {*/
/* 			if ( core_indexOf ) {*/
/* 				return core_indexOf.call( arr, elem, i );*/
/* 			}*/
/* */
/* 			len = arr.length;*/
/* 			i = i ? i < 0 ? Math.max( 0, len + i ) : i : 0;*/
/* */
/* 			for ( ; i < len; i++ ) {*/
/* 				// Skip accessing in sparse arrays*/
/* 				if ( i in arr && arr[ i ] === elem ) {*/
/* 					return i;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		return -1;*/
/* 	},*/
/* */
/* 	merge: function( first, second ) {*/
/* 		var l = second.length,*/
/* 			i = first.length,*/
/* 			j = 0;*/
/* */
/* 		if ( typeof l === "number" ) {*/
/* 			for ( ; j < l; j++ ) {*/
/* 				first[ i++ ] = second[ j ];*/
/* 			}*/
/* 		} else {*/
/* 			while ( second[j] !== undefined ) {*/
/* 				first[ i++ ] = second[ j++ ];*/
/* 			}*/
/* 		}*/
/* */
/* 		first.length = i;*/
/* */
/* 		return first;*/
/* 	},*/
/* */
/* 	grep: function( elems, callback, inv ) {*/
/* 		var retVal,*/
/* 			ret = [],*/
/* 			i = 0,*/
/* 			length = elems.length;*/
/* 		inv = !!inv;*/
/* */
/* 		// Go through the array, only saving the items*/
/* 		// that pass the validator function*/
/* 		for ( ; i < length; i++ ) {*/
/* 			retVal = !!callback( elems[ i ], i );*/
/* 			if ( inv !== retVal ) {*/
/* 				ret.push( elems[ i ] );*/
/* 			}*/
/* 		}*/
/* */
/* 		return ret;*/
/* 	},*/
/* */
/* 	// arg is for internal usage only*/
/* 	map: function( elems, callback, arg ) {*/
/* 		var value,*/
/* 			i = 0,*/
/* 			length = elems.length,*/
/* 			isArray = isArraylike( elems ),*/
/* 			ret = [];*/
/* */
/* 		// Go through the array, translating each of the items to their*/
/* 		if ( isArray ) {*/
/* 			for ( ; i < length; i++ ) {*/
/* 				value = callback( elems[ i ], i, arg );*/
/* */
/* 				if ( value != null ) {*/
/* 					ret[ ret.length ] = value;*/
/* 				}*/
/* 			}*/
/* */
/* 		// Go through every key on the object,*/
/* 		} else {*/
/* 			for ( i in elems ) {*/
/* 				value = callback( elems[ i ], i, arg );*/
/* */
/* 				if ( value != null ) {*/
/* 					ret[ ret.length ] = value;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		// Flatten any nested arrays*/
/* 		return core_concat.apply( [], ret );*/
/* 	},*/
/* */
/* 	// A global GUID counter for objects*/
/* 	guid: 1,*/
/* */
/* 	// Bind a function to a context, optionally partially applying any*/
/* 	// arguments.*/
/* 	proxy: function( fn, context ) {*/
/* 		var args, proxy, tmp;*/
/* */
/* 		if ( typeof context === "string" ) {*/
/* 			tmp = fn[ context ];*/
/* 			context = fn;*/
/* 			fn = tmp;*/
/* 		}*/
/* */
/* 		// Quick check to determine if target is callable, in the spec*/
/* 		// this throws a TypeError, but we will just return undefined.*/
/* 		if ( !jQuery.isFunction( fn ) ) {*/
/* 			return undefined;*/
/* 		}*/
/* */
/* 		// Simulated bind*/
/* 		args = core_slice.call( arguments, 2 );*/
/* 		proxy = function() {*/
/* 			return fn.apply( context || this, args.concat( core_slice.call( arguments ) ) );*/
/* 		};*/
/* */
/* 		// Set the guid of unique handler to the same of original handler, so it can be removed*/
/* 		proxy.guid = fn.guid = fn.guid || jQuery.guid++;*/
/* */
/* 		return proxy;*/
/* 	},*/
/* */
/* 	// Multifunctional method to get and set values of a collection*/
/* 	// The value/s can optionally be executed if it's a function*/
/* 	access: function( elems, fn, key, value, chainable, emptyGet, raw ) {*/
/* 		var i = 0,*/
/* 			length = elems.length,*/
/* 			bulk = key == null;*/
/* */
/* 		// Sets many values*/
/* 		if ( jQuery.type( key ) === "object" ) {*/
/* 			chainable = true;*/
/* 			for ( i in key ) {*/
/* 				jQuery.access( elems, fn, i, key[i], true, emptyGet, raw );*/
/* 			}*/
/* */
/* 		// Sets one value*/
/* 		} else if ( value !== undefined ) {*/
/* 			chainable = true;*/
/* */
/* 			if ( !jQuery.isFunction( value ) ) {*/
/* 				raw = true;*/
/* 			}*/
/* */
/* 			if ( bulk ) {*/
/* 				// Bulk operations run against the entire set*/
/* 				if ( raw ) {*/
/* 					fn.call( elems, value );*/
/* 					fn = null;*/
/* */
/* 				// ...except when executing function values*/
/* 				} else {*/
/* 					bulk = fn;*/
/* 					fn = function( elem, key, value ) {*/
/* 						return bulk.call( jQuery( elem ), value );*/
/* 					};*/
/* 				}*/
/* 			}*/
/* */
/* 			if ( fn ) {*/
/* 				for ( ; i < length; i++ ) {*/
/* 					fn( elems[i], key, raw ? value : value.call( elems[i], i, fn( elems[i], key ) ) );*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		return chainable ?*/
/* 			elems :*/
/* */
/* 			// Gets*/
/* 			bulk ?*/
/* 				fn.call( elems ) :*/
/* 				length ? fn( elems[0], key ) : emptyGet;*/
/* 	},*/
/* */
/* 	now: function() {*/
/* 		return ( new Date() ).getTime();*/
/* 	}*/
/* });*/
/* */
/* jQuery.ready.promise = function( obj ) {*/
/* 	if ( !readyList ) {*/
/* */
/* 		readyList = jQuery.Deferred();*/
/* */
/* 		// Catch cases where $(document).ready() is called after the browser event has already occurred.*/
/* 		// we once tried to use readyState "interactive" here, but it caused issues like the one*/
/* 		// discovered by ChrisS here: http://bugs.jquery.com/ticket/12282#comment:15*/
/* 		if ( document.readyState === "complete" ) {*/
/* 			// Handle it asynchronously to allow scripts the opportunity to delay ready*/
/* 			setTimeout( jQuery.ready );*/
/* */
/* 		// Standards-based browsers support DOMContentLoaded*/
/* 		} else if ( document.addEventListener ) {*/
/* 			// Use the handy event callback*/
/* 			document.addEventListener( "DOMContentLoaded", completed, false );*/
/* */
/* 			// A fallback to window.onload, that will always work*/
/* 			window.addEventListener( "load", completed, false );*/
/* */
/* 		// If IE event model is used*/
/* 		} else {*/
/* 			// Ensure firing before onload, maybe late but safe also for iframes*/
/* 			document.attachEvent( "onreadystatechange", completed );*/
/* */
/* 			// A fallback to window.onload, that will always work*/
/* 			window.attachEvent( "onload", completed );*/
/* */
/* 			// If IE and not a frame*/
/* 			// continually check to see if the document is ready*/
/* 			var top = false;*/
/* */
/* 			try {*/
/* 				top = window.frameElement == null && document.documentElement;*/
/* 			} catch(e) {}*/
/* */
/* 			if ( top && top.doScroll ) {*/
/* 				(function doScrollCheck() {*/
/* 					if ( !jQuery.isReady ) {*/
/* */
/* 						try {*/
/* 							// Use the trick by Diego Perini*/
/* 							// http://javascript.nwbox.com/IEContentLoaded/*/
/* 							top.doScroll("left");*/
/* 						} catch(e) {*/
/* 							return setTimeout( doScrollCheck, 50 );*/
/* 						}*/
/* */
/* 						// detach all dom ready events*/
/* 						detach();*/
/* */
/* 						// and execute any waiting functions*/
/* 						jQuery.ready();*/
/* 					}*/
/* 				})();*/
/* 			}*/
/* 		}*/
/* 	}*/
/* 	return readyList.promise( obj );*/
/* };*/
/* */
/* // Populate the class2type map*/
/* jQuery.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function(i, name) {*/
/* 	class2type[ "[object " + name + "]" ] = name.toLowerCase();*/
/* });*/
/* */
/* function isArraylike( obj ) {*/
/* 	var length = obj.length,*/
/* 		type = jQuery.type( obj );*/
/* */
/* 	if ( jQuery.isWindow( obj ) ) {*/
/* 		return false;*/
/* 	}*/
/* */
/* 	if ( obj.nodeType === 1 && length ) {*/
/* 		return true;*/
/* 	}*/
/* */
/* 	return type === "array" || type !== "function" &&*/
/* 		( length === 0 ||*/
/* 		typeof length === "number" && length > 0 && ( length - 1 ) in obj );*/
/* }*/
/* */
/* // All jQuery objects should point back to these*/
/* rootjQuery = jQuery(document);*/
/* // String to Object options format cache*/
/* var optionsCache = {};*/
/* */
/* // Convert String-formatted options into Object-formatted ones and store in cache*/
/* function createOptions( options ) {*/
/* 	var object = optionsCache[ options ] = {};*/
/* 	jQuery.each( options.match( core_rnotwhite ) || [], function( _, flag ) {*/
/* 		object[ flag ] = true;*/
/* 	});*/
/* 	return object;*/
/* }*/
/* */
/* /**/
/*  * Create a callback list using the following parameters:*/
/*  **/
/*  *	options: an optional list of space-separated options that will change how*/
/*  *			the callback list behaves or a more traditional option object*/
/*  **/
/*  * By default a callback list will act like an event callback list and can be*/
/*  * "fired" multiple times.*/
/*  **/
/*  * Possible options:*/
/*  **/
/*  *	once:			will ensure the callback list can only be fired once (like a Deferred)*/
/*  **/
/*  *	memory:			will keep track of previous values and will call any callback added*/
/*  *					after the list has been fired right away with the latest "memorized"*/
/*  *					values (like a Deferred)*/
/*  **/
/*  *	unique:			will ensure a callback can only be added once (no duplicate in the list)*/
/*  **/
/*  *	stopOnFalse:	interrupt callings when a callback returns false*/
/*  **/
/*  *//* */
/* jQuery.Callbacks = function( options ) {*/
/* */
/* 	// Convert options from String-formatted to Object-formatted if needed*/
/* 	// (we check in cache first)*/
/* 	options = typeof options === "string" ?*/
/* 		( optionsCache[ options ] || createOptions( options ) ) :*/
/* 		jQuery.extend( {}, options );*/
/* */
/* 	var // Flag to know if list is currently firing*/
/* 		firing,*/
/* 		// Last fire value (for non-forgettable lists)*/
/* 		memory,*/
/* 		// Flag to know if list was already fired*/
/* 		fired,*/
/* 		// End of the loop when firing*/
/* 		firingLength,*/
/* 		// Index of currently firing callback (modified by remove if needed)*/
/* 		firingIndex,*/
/* 		// First callback to fire (used internally by add and fireWith)*/
/* 		firingStart,*/
/* 		// Actual callback list*/
/* 		list = [],*/
/* 		// Stack of fire calls for repeatable lists*/
/* 		stack = !options.once && [],*/
/* 		// Fire callbacks*/
/* 		fire = function( data ) {*/
/* 			memory = options.memory && data;*/
/* 			fired = true;*/
/* 			firingIndex = firingStart || 0;*/
/* 			firingStart = 0;*/
/* 			firingLength = list.length;*/
/* 			firing = true;*/
/* 			for ( ; list && firingIndex < firingLength; firingIndex++ ) {*/
/* 				if ( list[ firingIndex ].apply( data[ 0 ], data[ 1 ] ) === false && options.stopOnFalse ) {*/
/* 					memory = false; // To prevent further calls using add*/
/* 					break;*/
/* 				}*/
/* 			}*/
/* 			firing = false;*/
/* 			if ( list ) {*/
/* 				if ( stack ) {*/
/* 					if ( stack.length ) {*/
/* 						fire( stack.shift() );*/
/* 					}*/
/* 				} else if ( memory ) {*/
/* 					list = [];*/
/* 				} else {*/
/* 					self.disable();*/
/* 				}*/
/* 			}*/
/* 		},*/
/* 		// Actual Callbacks object*/
/* 		self = {*/
/* 			// Add a callback or a collection of callbacks to the list*/
/* 			add: function() {*/
/* 				if ( list ) {*/
/* 					// First, we save the current length*/
/* 					var start = list.length;*/
/* 					(function add( args ) {*/
/* 						jQuery.each( args, function( _, arg ) {*/
/* 							var type = jQuery.type( arg );*/
/* 							if ( type === "function" ) {*/
/* 								if ( !options.unique || !self.has( arg ) ) {*/
/* 									list.push( arg );*/
/* 								}*/
/* 							} else if ( arg && arg.length && type !== "string" ) {*/
/* 								// Inspect recursively*/
/* 								add( arg );*/
/* 							}*/
/* 						});*/
/* 					})( arguments );*/
/* 					// Do we need to add the callbacks to the*/
/* 					// current firing batch?*/
/* 					if ( firing ) {*/
/* 						firingLength = list.length;*/
/* 					// With memory, if we're not firing then*/
/* 					// we should call right away*/
/* 					} else if ( memory ) {*/
/* 						firingStart = start;*/
/* 						fire( memory );*/
/* 					}*/
/* 				}*/
/* 				return this;*/
/* 			},*/
/* 			// Remove a callback from the list*/
/* 			remove: function() {*/
/* 				if ( list ) {*/
/* 					jQuery.each( arguments, function( _, arg ) {*/
/* 						var index;*/
/* 						while( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {*/
/* 							list.splice( index, 1 );*/
/* 							// Handle firing indexes*/
/* 							if ( firing ) {*/
/* 								if ( index <= firingLength ) {*/
/* 									firingLength--;*/
/* 								}*/
/* 								if ( index <= firingIndex ) {*/
/* 									firingIndex--;*/
/* 								}*/
/* 							}*/
/* 						}*/
/* 					});*/
/* 				}*/
/* 				return this;*/
/* 			},*/
/* 			// Check if a given callback is in the list.*/
/* 			// If no argument is given, return whether or not list has callbacks attached.*/
/* 			has: function( fn ) {*/
/* 				return fn ? jQuery.inArray( fn, list ) > -1 : !!( list && list.length );*/
/* 			},*/
/* 			// Remove all callbacks from the list*/
/* 			empty: function() {*/
/* 				list = [];*/
/* 				return this;*/
/* 			},*/
/* 			// Have the list do nothing anymore*/
/* 			disable: function() {*/
/* 				list = stack = memory = undefined;*/
/* 				return this;*/
/* 			},*/
/* 			// Is it disabled?*/
/* 			disabled: function() {*/
/* 				return !list;*/
/* 			},*/
/* 			// Lock the list in its current state*/
/* 			lock: function() {*/
/* 				stack = undefined;*/
/* 				if ( !memory ) {*/
/* 					self.disable();*/
/* 				}*/
/* 				return this;*/
/* 			},*/
/* 			// Is it locked?*/
/* 			locked: function() {*/
/* 				return !stack;*/
/* 			},*/
/* 			// Call all callbacks with the given context and arguments*/
/* 			fireWith: function( context, args ) {*/
/* 				args = args || [];*/
/* 				args = [ context, args.slice ? args.slice() : args ];*/
/* 				if ( list && ( !fired || stack ) ) {*/
/* 					if ( firing ) {*/
/* 						stack.push( args );*/
/* 					} else {*/
/* 						fire( args );*/
/* 					}*/
/* 				}*/
/* 				return this;*/
/* 			},*/
/* 			// Call all the callbacks with the given arguments*/
/* 			fire: function() {*/
/* 				self.fireWith( this, arguments );*/
/* 				return this;*/
/* 			},*/
/* 			// To know if the callbacks have already been called at least once*/
/* 			fired: function() {*/
/* 				return !!fired;*/
/* 			}*/
/* 		};*/
/* */
/* 	return self;*/
/* };*/
/* jQuery.extend({*/
/* */
/* 	Deferred: function( func ) {*/
/* 		var tuples = [*/
/* 				// action, add listener, listener list, final state*/
/* 				[ "resolve", "done", jQuery.Callbacks("once memory"), "resolved" ],*/
/* 				[ "reject", "fail", jQuery.Callbacks("once memory"), "rejected" ],*/
/* 				[ "notify", "progress", jQuery.Callbacks("memory") ]*/
/* 			],*/
/* 			state = "pending",*/
/* 			promise = {*/
/* 				state: function() {*/
/* 					return state;*/
/* 				},*/
/* 				always: function() {*/
/* 					deferred.done( arguments ).fail( arguments );*/
/* 					return this;*/
/* 				},*/
/* 				then: function( /* fnDone, fnFail, fnProgress *//*  ) {*/
/* 					var fns = arguments;*/
/* 					return jQuery.Deferred(function( newDefer ) {*/
/* 						jQuery.each( tuples, function( i, tuple ) {*/
/* 							var action = tuple[ 0 ],*/
/* 								fn = jQuery.isFunction( fns[ i ] ) && fns[ i ];*/
/* 							// deferred[ done | fail | progress ] for forwarding actions to newDefer*/
/* 							deferred[ tuple[1] ](function() {*/
/* 								var returned = fn && fn.apply( this, arguments );*/
/* 								if ( returned && jQuery.isFunction( returned.promise ) ) {*/
/* 									returned.promise()*/
/* 										.done( newDefer.resolve )*/
/* 										.fail( newDefer.reject )*/
/* 										.progress( newDefer.notify );*/
/* 								} else {*/
/* 									newDefer[ action + "With" ]( this === promise ? newDefer.promise() : this, fn ? [ returned ] : arguments );*/
/* 								}*/
/* 							});*/
/* 						});*/
/* 						fns = null;*/
/* 					}).promise();*/
/* 				},*/
/* 				// Get a promise for this deferred*/
/* 				// If obj is provided, the promise aspect is added to the object*/
/* 				promise: function( obj ) {*/
/* 					return obj != null ? jQuery.extend( obj, promise ) : promise;*/
/* 				}*/
/* 			},*/
/* 			deferred = {};*/
/* */
/* 		// Keep pipe for back-compat*/
/* 		promise.pipe = promise.then;*/
/* */
/* 		// Add list-specific methods*/
/* 		jQuery.each( tuples, function( i, tuple ) {*/
/* 			var list = tuple[ 2 ],*/
/* 				stateString = tuple[ 3 ];*/
/* */
/* 			// promise[ done | fail | progress ] = list.add*/
/* 			promise[ tuple[1] ] = list.add;*/
/* */
/* 			// Handle state*/
/* 			if ( stateString ) {*/
/* 				list.add(function() {*/
/* 					// state = [ resolved | rejected ]*/
/* 					state = stateString;*/
/* */
/* 				// [ reject_list | resolve_list ].disable; progress_list.lock*/
/* 				}, tuples[ i ^ 1 ][ 2 ].disable, tuples[ 2 ][ 2 ].lock );*/
/* 			}*/
/* */
/* 			// deferred[ resolve | reject | notify ]*/
/* 			deferred[ tuple[0] ] = function() {*/
/* 				deferred[ tuple[0] + "With" ]( this === deferred ? promise : this, arguments );*/
/* 				return this;*/
/* 			};*/
/* 			deferred[ tuple[0] + "With" ] = list.fireWith;*/
/* 		});*/
/* */
/* 		// Make the deferred a promise*/
/* 		promise.promise( deferred );*/
/* */
/* 		// Call given func if any*/
/* 		if ( func ) {*/
/* 			func.call( deferred, deferred );*/
/* 		}*/
/* */
/* 		// All done!*/
/* 		return deferred;*/
/* 	},*/
/* */
/* 	// Deferred helper*/
/* 	when: function( subordinate /* , ..., subordinateN *//*  ) {*/
/* 		var i = 0,*/
/* 			resolveValues = core_slice.call( arguments ),*/
/* 			length = resolveValues.length,*/
/* */
/* 			// the count of uncompleted subordinates*/
/* 			remaining = length !== 1 || ( subordinate && jQuery.isFunction( subordinate.promise ) ) ? length : 0,*/
/* */
/* 			// the master Deferred. If resolveValues consist of only a single Deferred, just use that.*/
/* 			deferred = remaining === 1 ? subordinate : jQuery.Deferred(),*/
/* */
/* 			// Update function for both resolve and progress values*/
/* 			updateFunc = function( i, contexts, values ) {*/
/* 				return function( value ) {*/
/* 					contexts[ i ] = this;*/
/* 					values[ i ] = arguments.length > 1 ? core_slice.call( arguments ) : value;*/
/* 					if( values === progressValues ) {*/
/* 						deferred.notifyWith( contexts, values );*/
/* 					} else if ( !( --remaining ) ) {*/
/* 						deferred.resolveWith( contexts, values );*/
/* 					}*/
/* 				};*/
/* 			},*/
/* */
/* 			progressValues, progressContexts, resolveContexts;*/
/* */
/* 		// add listeners to Deferred subordinates; treat others as resolved*/
/* 		if ( length > 1 ) {*/
/* 			progressValues = new Array( length );*/
/* 			progressContexts = new Array( length );*/
/* 			resolveContexts = new Array( length );*/
/* 			for ( ; i < length; i++ ) {*/
/* 				if ( resolveValues[ i ] && jQuery.isFunction( resolveValues[ i ].promise ) ) {*/
/* 					resolveValues[ i ].promise()*/
/* 						.done( updateFunc( i, resolveContexts, resolveValues ) )*/
/* 						.fail( deferred.reject )*/
/* 						.progress( updateFunc( i, progressContexts, progressValues ) );*/
/* 				} else {*/
/* 					--remaining;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		// if we're not waiting on anything, resolve the master*/
/* 		if ( !remaining ) {*/
/* 			deferred.resolveWith( resolveContexts, resolveValues );*/
/* 		}*/
/* */
/* 		return deferred.promise();*/
/* 	}*/
/* });*/
/* jQuery.support = (function() {*/
/* */
/* 	var support, all, a,*/
/* 		input, select, fragment,*/
/* 		opt, eventName, isSupported, i,*/
/* 		div = document.createElement("div");*/
/* */
/* 	// Setup*/
/* 	div.setAttribute( "className", "t" );*/
/* 	div.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>";*/
/* */
/* 	// Support tests won't run in some limited or non-browser environments*/
/* 	all = div.getElementsByTagName("*");*/
/* 	a = div.getElementsByTagName("a")[ 0 ];*/
/* 	if ( !all || !a || !all.length ) {*/
/* 		return {};*/
/* 	}*/
/* */
/* 	// First batch of tests*/
/* 	select = document.createElement("select");*/
/* 	opt = select.appendChild( document.createElement("option") );*/
/* 	input = div.getElementsByTagName("input")[ 0 ];*/
/* */
/* 	a.style.cssText = "top:1px;float:left;opacity:.5";*/
/* 	support = {*/
/* 		// Test setAttribute on camelCase class. If it works, we need attrFixes when doing get/setAttribute (ie6/7)*/
/* 		getSetAttribute: div.className !== "t",*/
/* */
/* 		// IE strips leading whitespace when .innerHTML is used*/
/* 		leadingWhitespace: div.firstChild.nodeType === 3,*/
/* */
/* 		// Make sure that tbody elements aren't automatically inserted*/
/* 		// IE will insert them into empty tables*/
/* 		tbody: !div.getElementsByTagName("tbody").length,*/
/* */
/* 		// Make sure that link elements get serialized correctly by innerHTML*/
/* 		// This requires a wrapper element in IE*/
/* 		htmlSerialize: !!div.getElementsByTagName("link").length,*/
/* */
/* 		// Get the style information from getAttribute*/
/* 		// (IE uses .cssText instead)*/
/* 		style: /top/.test( a.getAttribute("style") ),*/
/* */
/* 		// Make sure that URLs aren't manipulated*/
/* 		// (IE normalizes it by default)*/
/* 		hrefNormalized: a.getAttribute("href") === "/a",*/
/* */
/* 		// Make sure that element opacity exists*/
/* 		// (IE uses filter instead)*/
/* 		// Use a regex to work around a WebKit issue. See #5145*/
/* 		opacity: /^0.5/.test( a.style.opacity ),*/
/* */
/* 		// Verify style float existence*/
/* 		// (IE uses styleFloat instead of cssFloat)*/
/* 		cssFloat: !!a.style.cssFloat,*/
/* */
/* 		// Check the default checkbox/radio value ("" on WebKit; "on" elsewhere)*/
/* 		checkOn: !!input.value,*/
/* */
/* 		// Make sure that a selected-by-default option has a working selected property.*/
/* 		// (WebKit defaults to false instead of true, IE too, if it's in an optgroup)*/
/* 		optSelected: opt.selected,*/
/* */
/* 		// Tests for enctype support on a form (#6743)*/
/* 		enctype: !!document.createElement("form").enctype,*/
/* */
/* 		// Makes sure cloning an html5 element does not cause problems*/
/* 		// Where outerHTML is undefined, this still works*/
/* 		html5Clone: document.createElement("nav").cloneNode( true ).outerHTML !== "<:nav></:nav>",*/
/* */
/* 		// jQuery.support.boxModel DEPRECATED in 1.8 since we don't support Quirks Mode*/
/* 		boxModel: document.compatMode === "CSS1Compat",*/
/* */
/* 		// Will be defined later*/
/* 		deleteExpando: true,*/
/* 		noCloneEvent: true,*/
/* 		inlineBlockNeedsLayout: false,*/
/* 		shrinkWrapBlocks: false,*/
/* 		reliableMarginRight: true,*/
/* 		boxSizingReliable: true,*/
/* 		pixelPosition: false*/
/* 	};*/
/* */
/* 	// Make sure checked status is properly cloned*/
/* 	input.checked = true;*/
/* 	support.noCloneChecked = input.cloneNode( true ).checked;*/
/* */
/* 	// Make sure that the options inside disabled selects aren't marked as disabled*/
/* 	// (WebKit marks them as disabled)*/
/* 	select.disabled = true;*/
/* 	support.optDisabled = !opt.disabled;*/
/* */
/* 	// Support: IE<9*/
/* 	try {*/
/* 		delete div.test;*/
/* 	} catch( e ) {*/
/* 		support.deleteExpando = false;*/
/* 	}*/
/* */
/* 	// Check if we can trust getAttribute("value")*/
/* 	input = document.createElement("input");*/
/* 	input.setAttribute( "value", "" );*/
/* 	support.input = input.getAttribute( "value" ) === "";*/
/* */
/* 	// Check if an input maintains its value after becoming a radio*/
/* 	input.value = "t";*/
/* 	input.setAttribute( "type", "radio" );*/
/* 	support.radioValue = input.value === "t";*/
/* */
/* 	// #11217 - WebKit loses check when the name is after the checked attribute*/
/* 	input.setAttribute( "checked", "t" );*/
/* 	input.setAttribute( "name", "t" );*/
/* */
/* 	fragment = document.createDocumentFragment();*/
/* 	fragment.appendChild( input );*/
/* */
/* 	// Check if a disconnected checkbox will retain its checked*/
/* 	// value of true after appended to the DOM (IE6/7)*/
/* 	support.appendChecked = input.checked;*/
/* */
/* 	// WebKit doesn't clone checked state correctly in fragments*/
/* 	support.checkClone = fragment.cloneNode( true ).cloneNode( true ).lastChild.checked;*/
/* */
/* 	// Support: IE<9*/
/* 	// Opera does not clone events (and typeof div.attachEvent === undefined).*/
/* 	// IE9-10 clones events bound via attachEvent, but they don't trigger with .click()*/
/* 	if ( div.attachEvent ) {*/
/* 		div.attachEvent( "onclick", function() {*/
/* 			support.noCloneEvent = false;*/
/* 		});*/
/* */
/* 		div.cloneNode( true ).click();*/
/* 	}*/
/* */
/* 	// Support: IE<9 (lack submit/change bubble), Firefox 17+ (lack focusin event)*/
/* 	// Beware of CSP restrictions (https://developer.mozilla.org/en/Security/CSP), test/csp.php*/
/* 	for ( i in { submit: true, change: true, focusin: true }) {*/
/* 		div.setAttribute( eventName = "on" + i, "t" );*/
/* */
/* 		support[ i + "Bubbles" ] = eventName in window || div.attributes[ eventName ].expando === false;*/
/* 	}*/
/* */
/* 	div.style.backgroundClip = "content-box";*/
/* 	div.cloneNode( true ).style.backgroundClip = "";*/
/* 	support.clearCloneStyle = div.style.backgroundClip === "content-box";*/
/* */
/* 	// Run tests that need a body at doc ready*/
/* 	jQuery(function() {*/
/* 		var container, marginDiv, tds,*/
/* 			divReset = "padding:0;margin:0;border:0;display:block;box-sizing:content-box;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;",*/
/* 			body = document.getElementsByTagName("body")[0];*/
/* */
/* 		if ( !body ) {*/
/* 			// Return for frameset docs that don't have a body*/
/* 			return;*/
/* 		}*/
/* */
/* 		container = document.createElement("div");*/
/* 		container.style.cssText = "border:0;width:0;height:0;position:absolute;top:0;left:-9999px;margin-top:1px";*/
/* */
/* 		body.appendChild( container ).appendChild( div );*/
/* */
/* 		// Support: IE8*/
/* 		// Check if table cells still have offsetWidth/Height when they are set*/
/* 		// to display:none and there are still other visible table cells in a*/
/* 		// table row; if so, offsetWidth/Height are not reliable for use when*/
/* 		// determining if an element has been hidden directly using*/
/* 		// display:none (it is still safe to use offsets if a parent element is*/
/* 		// hidden; don safety goggles and see bug #4512 for more information).*/
/* 		div.innerHTML = "<table><tr><td></td><td>t</td></tr></table>";*/
/* 		tds = div.getElementsByTagName("td");*/
/* 		tds[ 0 ].style.cssText = "padding:0;margin:0;border:0;display:none";*/
/* 		isSupported = ( tds[ 0 ].offsetHeight === 0 );*/
/* */
/* 		tds[ 0 ].style.display = "";*/
/* 		tds[ 1 ].style.display = "none";*/
/* */
/* 		// Support: IE8*/
/* 		// Check if empty table cells still have offsetWidth/Height*/
/* 		support.reliableHiddenOffsets = isSupported && ( tds[ 0 ].offsetHeight === 0 );*/
/* */
/* 		// Check box-sizing and margin behavior*/
/* 		div.innerHTML = "";*/
/* 		div.style.cssText = "box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding:1px;border:1px;display:block;width:4px;margin-top:1%;position:absolute;top:1%;";*/
/* 		support.boxSizing = ( div.offsetWidth === 4 );*/
/* 		support.doesNotIncludeMarginInBodyOffset = ( body.offsetTop !== 1 );*/
/* */
/* 		// Use window.getComputedStyle because jsdom on node.js will break without it.*/
/* 		if ( window.getComputedStyle ) {*/
/* 			support.pixelPosition = ( window.getComputedStyle( div, null ) || {} ).top !== "1%";*/
/* 			support.boxSizingReliable = ( window.getComputedStyle( div, null ) || { width: "4px" } ).width === "4px";*/
/* */
/* 			// Check if div with explicit width and no margin-right incorrectly*/
/* 			// gets computed margin-right based on width of container. (#3333)*/
/* 			// Fails in WebKit before Feb 2011 nightlies*/
/* 			// WebKit Bug 13343 - getComputedStyle returns wrong value for margin-right*/
/* 			marginDiv = div.appendChild( document.createElement("div") );*/
/* 			marginDiv.style.cssText = div.style.cssText = divReset;*/
/* 			marginDiv.style.marginRight = marginDiv.style.width = "0";*/
/* 			div.style.width = "1px";*/
/* */
/* 			support.reliableMarginRight =*/
/* 				!parseFloat( ( window.getComputedStyle( marginDiv, null ) || {} ).marginRight );*/
/* 		}*/
/* */
/* 		if ( typeof div.style.zoom !== core_strundefined ) {*/
/* 			// Support: IE<8*/
/* 			// Check if natively block-level elements act like inline-block*/
/* 			// elements when setting their display to 'inline' and giving*/
/* 			// them layout*/
/* 			div.innerHTML = "";*/
/* 			div.style.cssText = divReset + "width:1px;padding:1px;display:inline;zoom:1";*/
/* 			support.inlineBlockNeedsLayout = ( div.offsetWidth === 3 );*/
/* */
/* 			// Support: IE6*/
/* 			// Check if elements with layout shrink-wrap their children*/
/* 			div.style.display = "block";*/
/* 			div.innerHTML = "<div></div>";*/
/* 			div.firstChild.style.width = "5px";*/
/* 			support.shrinkWrapBlocks = ( div.offsetWidth !== 3 );*/
/* */
/* 			if ( support.inlineBlockNeedsLayout ) {*/
/* 				// Prevent IE 6 from affecting layout for positioned elements #11048*/
/* 				// Prevent IE from shrinking the body in IE 7 mode #12869*/
/* 				// Support: IE<8*/
/* 				body.style.zoom = 1;*/
/* 			}*/
/* 		}*/
/* */
/* 		body.removeChild( container );*/
/* */
/* 		// Null elements to avoid leaks in IE*/
/* 		container = div = tds = marginDiv = null;*/
/* 	});*/
/* */
/* 	// Null elements to avoid leaks in IE*/
/* 	all = select = fragment = opt = a = input = null;*/
/* */
/* 	return support;*/
/* })();*/
/* */
/* var rbrace = /(?:\{[\s\S]*\}|\[[\s\S]*\])$/,*/
/* 	rmultiDash = /([A-Z])/g;*/
/* */
/* function internalData( elem, name, data, pvt /* Internal Use Only *//*  ){*/
/* 	if ( !jQuery.acceptData( elem ) ) {*/
/* 		return;*/
/* 	}*/
/* */
/* 	var thisCache, ret,*/
/* 		internalKey = jQuery.expando,*/
/* 		getByName = typeof name === "string",*/
/* */
/* 		// We have to handle DOM nodes and JS objects differently because IE6-7*/
/* 		// can't GC object references properly across the DOM-JS boundary*/
/* 		isNode = elem.nodeType,*/
/* */
/* 		// Only DOM nodes need the global jQuery cache; JS object data is*/
/* 		// attached directly to the object so GC can occur automatically*/
/* 		cache = isNode ? jQuery.cache : elem,*/
/* */
/* 		// Only defining an ID for JS objects if its cache already exists allows*/
/* 		// the code to shortcut on the same path as a DOM node with no cache*/
/* 		id = isNode ? elem[ internalKey ] : elem[ internalKey ] && internalKey;*/
/* */
/* 	// Avoid doing any more work than we need to when trying to get data on an*/
/* 	// object that has no data at all*/
/* 	if ( (!id || !cache[id] || (!pvt && !cache[id].data)) && getByName && data === undefined ) {*/
/* 		return;*/
/* 	}*/
/* */
/* 	if ( !id ) {*/
/* 		// Only DOM nodes need a new unique ID for each element since their data*/
/* 		// ends up in the global cache*/
/* 		if ( isNode ) {*/
/* 			elem[ internalKey ] = id = core_deletedIds.pop() || jQuery.guid++;*/
/* 		} else {*/
/* 			id = internalKey;*/
/* 		}*/
/* 	}*/
/* */
/* 	if ( !cache[ id ] ) {*/
/* 		cache[ id ] = {};*/
/* */
/* 		// Avoids exposing jQuery metadata on plain JS objects when the object*/
/* 		// is serialized using JSON.stringify*/
/* 		if ( !isNode ) {*/
/* 			cache[ id ].toJSON = jQuery.noop;*/
/* 		}*/
/* 	}*/
/* */
/* 	// An object can be passed to jQuery.data instead of a key/value pair; this gets*/
/* 	// shallow copied over onto the existing cache*/
/* 	if ( typeof name === "object" || typeof name === "function" ) {*/
/* 		if ( pvt ) {*/
/* 			cache[ id ] = jQuery.extend( cache[ id ], name );*/
/* 		} else {*/
/* 			cache[ id ].data = jQuery.extend( cache[ id ].data, name );*/
/* 		}*/
/* 	}*/
/* */
/* 	thisCache = cache[ id ];*/
/* */
/* 	// jQuery data() is stored in a separate object inside the object's internal data*/
/* 	// cache in order to avoid key collisions between internal data and user-defined*/
/* 	// data.*/
/* 	if ( !pvt ) {*/
/* 		if ( !thisCache.data ) {*/
/* 			thisCache.data = {};*/
/* 		}*/
/* */
/* 		thisCache = thisCache.data;*/
/* 	}*/
/* */
/* 	if ( data !== undefined ) {*/
/* 		thisCache[ jQuery.camelCase( name ) ] = data;*/
/* 	}*/
/* */
/* 	// Check for both converted-to-camel and non-converted data property names*/
/* 	// If a data property was specified*/
/* 	if ( getByName ) {*/
/* */
/* 		// First Try to find as-is property data*/
/* 		ret = thisCache[ name ];*/
/* */
/* 		// Test for null|undefined property data*/
/* 		if ( ret == null ) {*/
/* */
/* 			// Try to find the camelCased property*/
/* 			ret = thisCache[ jQuery.camelCase( name ) ];*/
/* 		}*/
/* 	} else {*/
/* 		ret = thisCache;*/
/* 	}*/
/* */
/* 	return ret;*/
/* }*/
/* */
/* function internalRemoveData( elem, name, pvt ) {*/
/* 	if ( !jQuery.acceptData( elem ) ) {*/
/* 		return;*/
/* 	}*/
/* */
/* 	var i, l, thisCache,*/
/* 		isNode = elem.nodeType,*/
/* */
/* 		// See jQuery.data for more information*/
/* 		cache = isNode ? jQuery.cache : elem,*/
/* 		id = isNode ? elem[ jQuery.expando ] : jQuery.expando;*/
/* */
/* 	// If there is already no cache entry for this object, there is no*/
/* 	// purpose in continuing*/
/* 	if ( !cache[ id ] ) {*/
/* 		return;*/
/* 	}*/
/* */
/* 	if ( name ) {*/
/* */
/* 		thisCache = pvt ? cache[ id ] : cache[ id ].data;*/
/* */
/* 		if ( thisCache ) {*/
/* */
/* 			// Support array or space separated string names for data keys*/
/* 			if ( !jQuery.isArray( name ) ) {*/
/* */
/* 				// try the string as a key before any manipulation*/
/* 				if ( name in thisCache ) {*/
/* 					name = [ name ];*/
/* 				} else {*/
/* */
/* 					// split the camel cased version by spaces unless a key with the spaces exists*/
/* 					name = jQuery.camelCase( name );*/
/* 					if ( name in thisCache ) {*/
/* 						name = [ name ];*/
/* 					} else {*/
/* 						name = name.split(" ");*/
/* 					}*/
/* 				}*/
/* 			} else {*/
/* 				// If "name" is an array of keys...*/
/* 				// When data is initially created, via ("key", "val") signature,*/
/* 				// keys will be converted to camelCase.*/
/* 				// Since there is no way to tell _how_ a key was added, remove*/
/* 				// both plain key and camelCase key. #12786*/
/* 				// This will only penalize the array argument path.*/
/* 				name = name.concat( jQuery.map( name, jQuery.camelCase ) );*/
/* 			}*/
/* */
/* 			for ( i = 0, l = name.length; i < l; i++ ) {*/
/* 				delete thisCache[ name[i] ];*/
/* 			}*/
/* */
/* 			// If there is no data left in the cache, we want to continue*/
/* 			// and let the cache object itself get destroyed*/
/* 			if ( !( pvt ? isEmptyDataObject : jQuery.isEmptyObject )( thisCache ) ) {*/
/* 				return;*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	// See jQuery.data for more information*/
/* 	if ( !pvt ) {*/
/* 		delete cache[ id ].data;*/
/* */
/* 		// Don't destroy the parent cache unless the internal data object*/
/* 		// had been the only thing left in it*/
/* 		if ( !isEmptyDataObject( cache[ id ] ) ) {*/
/* 			return;*/
/* 		}*/
/* 	}*/
/* */
/* 	// Destroy the cache*/
/* 	if ( isNode ) {*/
/* 		jQuery.cleanData( [ elem ], true );*/
/* */
/* 	// Use delete when supported for expandos or `cache` is not a window per isWindow (#10080)*/
/* 	} else if ( jQuery.support.deleteExpando || cache != cache.window ) {*/
/* 		delete cache[ id ];*/
/* */
/* 	// When all else fails, null*/
/* 	} else {*/
/* 		cache[ id ] = null;*/
/* 	}*/
/* }*/
/* */
/* jQuery.extend({*/
/* 	cache: {},*/
/* */
/* 	// Unique for each copy of jQuery on the page*/
/* 	// Non-digits removed to match rinlinejQuery*/
/* 	expando: "jQuery" + ( core_version + Math.random() ).replace( /\D/g, "" ),*/
/* */
/* 	// The following elements throw uncatchable exceptions if you*/
/* 	// attempt to add expando properties to them.*/
/* 	noData: {*/
/* 		"embed": true,*/
/* 		// Ban all objects except for Flash (which handle expandos)*/
/* 		"object": "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",*/
/* 		"applet": true*/
/* 	},*/
/* */
/* 	hasData: function( elem ) {*/
/* 		elem = elem.nodeType ? jQuery.cache[ elem[jQuery.expando] ] : elem[ jQuery.expando ];*/
/* 		return !!elem && !isEmptyDataObject( elem );*/
/* 	},*/
/* */
/* 	data: function( elem, name, data ) {*/
/* 		return internalData( elem, name, data );*/
/* 	},*/
/* */
/* 	removeData: function( elem, name ) {*/
/* 		return internalRemoveData( elem, name );*/
/* 	},*/
/* */
/* 	// For internal use only.*/
/* 	_data: function( elem, name, data ) {*/
/* 		return internalData( elem, name, data, true );*/
/* 	},*/
/* */
/* 	_removeData: function( elem, name ) {*/
/* 		return internalRemoveData( elem, name, true );*/
/* 	},*/
/* */
/* 	// A method for determining if a DOM node can handle the data expando*/
/* 	acceptData: function( elem ) {*/
/* 		// Do not set data on non-element because it will not be cleared (#8335).*/
/* 		if ( elem.nodeType && elem.nodeType !== 1 && elem.nodeType !== 9 ) {*/
/* 			return false;*/
/* 		}*/
/* */
/* 		var noData = elem.nodeName && jQuery.noData[ elem.nodeName.toLowerCase() ];*/
/* */
/* 		// nodes accept data unless otherwise specified; rejection can be conditional*/
/* 		return !noData || noData !== true && elem.getAttribute("classid") === noData;*/
/* 	}*/
/* });*/
/* */
/* jQuery.fn.extend({*/
/* 	data: function( key, value ) {*/
/* 		var attrs, name,*/
/* 			elem = this[0],*/
/* 			i = 0,*/
/* 			data = null;*/
/* */
/* 		// Gets all values*/
/* 		if ( key === undefined ) {*/
/* 			if ( this.length ) {*/
/* 				data = jQuery.data( elem );*/
/* */
/* 				if ( elem.nodeType === 1 && !jQuery._data( elem, "parsedAttrs" ) ) {*/
/* 					attrs = elem.attributes;*/
/* 					for ( ; i < attrs.length; i++ ) {*/
/* 						name = attrs[i].name;*/
/* */
/* 						if ( !name.indexOf( "data-" ) ) {*/
/* 							name = jQuery.camelCase( name.slice(5) );*/
/* */
/* 							dataAttr( elem, name, data[ name ] );*/
/* 						}*/
/* 					}*/
/* 					jQuery._data( elem, "parsedAttrs", true );*/
/* 				}*/
/* 			}*/
/* */
/* 			return data;*/
/* 		}*/
/* */
/* 		// Sets multiple values*/
/* 		if ( typeof key === "object" ) {*/
/* 			return this.each(function() {*/
/* 				jQuery.data( this, key );*/
/* 			});*/
/* 		}*/
/* */
/* 		return jQuery.access( this, function( value ) {*/
/* */
/* 			if ( value === undefined ) {*/
/* 				// Try to fetch any internally stored data first*/
/* 				return elem ? dataAttr( elem, key, jQuery.data( elem, key ) ) : null;*/
/* 			}*/
/* */
/* 			this.each(function() {*/
/* 				jQuery.data( this, key, value );*/
/* 			});*/
/* 		}, null, value, arguments.length > 1, null, true );*/
/* 	},*/
/* */
/* 	removeData: function( key ) {*/
/* 		return this.each(function() {*/
/* 			jQuery.removeData( this, key );*/
/* 		});*/
/* 	}*/
/* });*/
/* */
/* function dataAttr( elem, key, data ) {*/
/* 	// If nothing was found internally, try to fetch any*/
/* 	// data from the HTML5 data-* attribute*/
/* 	if ( data === undefined && elem.nodeType === 1 ) {*/
/* */
/* 		var name = "data-" + key.replace( rmultiDash, "-$1" ).toLowerCase();*/
/* */
/* 		data = elem.getAttribute( name );*/
/* */
/* 		if ( typeof data === "string" ) {*/
/* 			try {*/
/* 				data = data === "true" ? true :*/
/* 					data === "false" ? false :*/
/* 					data === "null" ? null :*/
/* 					// Only convert to a number if it doesn't change the string*/
/* 					+data + "" === data ? +data :*/
/* 					rbrace.test( data ) ? jQuery.parseJSON( data ) :*/
/* 						data;*/
/* 			} catch( e ) {}*/
/* */
/* 			// Make sure we set the data so it isn't changed later*/
/* 			jQuery.data( elem, key, data );*/
/* */
/* 		} else {*/
/* 			data = undefined;*/
/* 		}*/
/* 	}*/
/* */
/* 	return data;*/
/* }*/
/* */
/* // checks a cache object for emptiness*/
/* function isEmptyDataObject( obj ) {*/
/* 	var name;*/
/* 	for ( name in obj ) {*/
/* */
/* 		// if the public data object is empty, the private is still empty*/
/* 		if ( name === "data" && jQuery.isEmptyObject( obj[name] ) ) {*/
/* 			continue;*/
/* 		}*/
/* 		if ( name !== "toJSON" ) {*/
/* 			return false;*/
/* 		}*/
/* 	}*/
/* */
/* 	return true;*/
/* }*/
/* jQuery.extend({*/
/* 	queue: function( elem, type, data ) {*/
/* 		var queue;*/
/* */
/* 		if ( elem ) {*/
/* 			type = ( type || "fx" ) + "queue";*/
/* 			queue = jQuery._data( elem, type );*/
/* */
/* 			// Speed up dequeue by getting out quickly if this is just a lookup*/
/* 			if ( data ) {*/
/* 				if ( !queue || jQuery.isArray(data) ) {*/
/* 					queue = jQuery._data( elem, type, jQuery.makeArray(data) );*/
/* 				} else {*/
/* 					queue.push( data );*/
/* 				}*/
/* 			}*/
/* 			return queue || [];*/
/* 		}*/
/* 	},*/
/* */
/* 	dequeue: function( elem, type ) {*/
/* 		type = type || "fx";*/
/* */
/* 		var queue = jQuery.queue( elem, type ),*/
/* 			startLength = queue.length,*/
/* 			fn = queue.shift(),*/
/* 			hooks = jQuery._queueHooks( elem, type ),*/
/* 			next = function() {*/
/* 				jQuery.dequeue( elem, type );*/
/* 			};*/
/* */
/* 		// If the fx queue is dequeued, always remove the progress sentinel*/
/* 		if ( fn === "inprogress" ) {*/
/* 			fn = queue.shift();*/
/* 			startLength--;*/
/* 		}*/
/* */
/* 		hooks.cur = fn;*/
/* 		if ( fn ) {*/
/* */
/* 			// Add a progress sentinel to prevent the fx queue from being*/
/* 			// automatically dequeued*/
/* 			if ( type === "fx" ) {*/
/* 				queue.unshift( "inprogress" );*/
/* 			}*/
/* */
/* 			// clear up the last queue stop function*/
/* 			delete hooks.stop;*/
/* 			fn.call( elem, next, hooks );*/
/* 		}*/
/* */
/* 		if ( !startLength && hooks ) {*/
/* 			hooks.empty.fire();*/
/* 		}*/
/* 	},*/
/* */
/* 	// not intended for public consumption - generates a queueHooks object, or returns the current one*/
/* 	_queueHooks: function( elem, type ) {*/
/* 		var key = type + "queueHooks";*/
/* 		return jQuery._data( elem, key ) || jQuery._data( elem, key, {*/
/* 			empty: jQuery.Callbacks("once memory").add(function() {*/
/* 				jQuery._removeData( elem, type + "queue" );*/
/* 				jQuery._removeData( elem, key );*/
/* 			})*/
/* 		});*/
/* 	}*/
/* });*/
/* */
/* jQuery.fn.extend({*/
/* 	queue: function( type, data ) {*/
/* 		var setter = 2;*/
/* */
/* 		if ( typeof type !== "string" ) {*/
/* 			data = type;*/
/* 			type = "fx";*/
/* 			setter--;*/
/* 		}*/
/* */
/* 		if ( arguments.length < setter ) {*/
/* 			return jQuery.queue( this[0], type );*/
/* 		}*/
/* */
/* 		return data === undefined ?*/
/* 			this :*/
/* 			this.each(function() {*/
/* 				var queue = jQuery.queue( this, type, data );*/
/* */
/* 				// ensure a hooks for this queue*/
/* 				jQuery._queueHooks( this, type );*/
/* */
/* 				if ( type === "fx" && queue[0] !== "inprogress" ) {*/
/* 					jQuery.dequeue( this, type );*/
/* 				}*/
/* 			});*/
/* 	},*/
/* 	dequeue: function( type ) {*/
/* 		return this.each(function() {*/
/* 			jQuery.dequeue( this, type );*/
/* 		});*/
/* 	},*/
/* 	// Based off of the plugin by Clint Helfers, with permission.*/
/* 	// http://blindsignals.com/index.php/2009/07/jquery-delay/*/
/* 	delay: function( time, type ) {*/
/* 		time = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;*/
/* 		type = type || "fx";*/
/* */
/* 		return this.queue( type, function( next, hooks ) {*/
/* 			var timeout = setTimeout( next, time );*/
/* 			hooks.stop = function() {*/
/* 				clearTimeout( timeout );*/
/* 			};*/
/* 		});*/
/* 	},*/
/* 	clearQueue: function( type ) {*/
/* 		return this.queue( type || "fx", [] );*/
/* 	},*/
/* 	// Get a promise resolved when queues of a certain type*/
/* 	// are emptied (fx is the type by default)*/
/* 	promise: function( type, obj ) {*/
/* 		var tmp,*/
/* 			count = 1,*/
/* 			defer = jQuery.Deferred(),*/
/* 			elements = this,*/
/* 			i = this.length,*/
/* 			resolve = function() {*/
/* 				if ( !( --count ) ) {*/
/* 					defer.resolveWith( elements, [ elements ] );*/
/* 				}*/
/* 			};*/
/* */
/* 		if ( typeof type !== "string" ) {*/
/* 			obj = type;*/
/* 			type = undefined;*/
/* 		}*/
/* 		type = type || "fx";*/
/* */
/* 		while( i-- ) {*/
/* 			tmp = jQuery._data( elements[ i ], type + "queueHooks" );*/
/* 			if ( tmp && tmp.empty ) {*/
/* 				count++;*/
/* 				tmp.empty.add( resolve );*/
/* 			}*/
/* 		}*/
/* 		resolve();*/
/* 		return defer.promise( obj );*/
/* 	}*/
/* });*/
/* var nodeHook, boolHook,*/
/* 	rclass = /[\t\r\n]/g,*/
/* 	rreturn = /\r/g,*/
/* 	rfocusable = /^(?:input|select|textarea|button|object)$/i,*/
/* 	rclickable = /^(?:a|area)$/i,*/
/* 	rboolean = /^(?:checked|selected|autofocus|autoplay|async|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped)$/i,*/
/* 	ruseDefault = /^(?:checked|selected)$/i,*/
/* 	getSetAttribute = jQuery.support.getSetAttribute,*/
/* 	getSetInput = jQuery.support.input;*/
/* */
/* jQuery.fn.extend({*/
/* 	attr: function( name, value ) {*/
/* 		return jQuery.access( this, jQuery.attr, name, value, arguments.length > 1 );*/
/* 	},*/
/* */
/* 	removeAttr: function( name ) {*/
/* 		return this.each(function() {*/
/* 			jQuery.removeAttr( this, name );*/
/* 		});*/
/* 	},*/
/* */
/* 	prop: function( name, value ) {*/
/* 		return jQuery.access( this, jQuery.prop, name, value, arguments.length > 1 );*/
/* 	},*/
/* */
/* 	removeProp: function( name ) {*/
/* 		name = jQuery.propFix[ name ] || name;*/
/* 		return this.each(function() {*/
/* 			// try/catch handles cases where IE balks (such as removing a property on window)*/
/* 			try {*/
/* 				this[ name ] = undefined;*/
/* 				delete this[ name ];*/
/* 			} catch( e ) {}*/
/* 		});*/
/* 	},*/
/* */
/* 	addClass: function( value ) {*/
/* 		var classes, elem, cur, clazz, j,*/
/* 			i = 0,*/
/* 			len = this.length,*/
/* 			proceed = typeof value === "string" && value;*/
/* */
/* 		if ( jQuery.isFunction( value ) ) {*/
/* 			return this.each(function( j ) {*/
/* 				jQuery( this ).addClass( value.call( this, j, this.className ) );*/
/* 			});*/
/* 		}*/
/* */
/* 		if ( proceed ) {*/
/* 			// The disjunction here is for better compressibility (see removeClass)*/
/* 			classes = ( value || "" ).match( core_rnotwhite ) || [];*/
/* */
/* 			for ( ; i < len; i++ ) {*/
/* 				elem = this[ i ];*/
/* 				cur = elem.nodeType === 1 && ( elem.className ?*/
/* 					( " " + elem.className + " " ).replace( rclass, " " ) :*/
/* 					" "*/
/* 				);*/
/* */
/* 				if ( cur ) {*/
/* 					j = 0;*/
/* 					while ( (clazz = classes[j++]) ) {*/
/* 						if ( cur.indexOf( " " + clazz + " " ) < 0 ) {*/
/* 							cur += clazz + " ";*/
/* 						}*/
/* 					}*/
/* 					elem.className = jQuery.trim( cur );*/
/* */
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		return this;*/
/* 	},*/
/* */
/* 	removeClass: function( value ) {*/
/* 		var classes, elem, cur, clazz, j,*/
/* 			i = 0,*/
/* 			len = this.length,*/
/* 			proceed = arguments.length === 0 || typeof value === "string" && value;*/
/* */
/* 		if ( jQuery.isFunction( value ) ) {*/
/* 			return this.each(function( j ) {*/
/* 				jQuery( this ).removeClass( value.call( this, j, this.className ) );*/
/* 			});*/
/* 		}*/
/* 		if ( proceed ) {*/
/* 			classes = ( value || "" ).match( core_rnotwhite ) || [];*/
/* */
/* 			for ( ; i < len; i++ ) {*/
/* 				elem = this[ i ];*/
/* 				// This expression is here for better compressibility (see addClass)*/
/* 				cur = elem.nodeType === 1 && ( elem.className ?*/
/* 					( " " + elem.className + " " ).replace( rclass, " " ) :*/
/* 					""*/
/* 				);*/
/* */
/* 				if ( cur ) {*/
/* 					j = 0;*/
/* 					while ( (clazz = classes[j++]) ) {*/
/* 						// Remove *all* instances*/
/* 						while ( cur.indexOf( " " + clazz + " " ) >= 0 ) {*/
/* 							cur = cur.replace( " " + clazz + " ", " " );*/
/* 						}*/
/* 					}*/
/* 					elem.className = value ? jQuery.trim( cur ) : "";*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		return this;*/
/* 	},*/
/* */
/* 	toggleClass: function( value, stateVal ) {*/
/* 		var type = typeof value,*/
/* 			isBool = typeof stateVal === "boolean";*/
/* */
/* 		if ( jQuery.isFunction( value ) ) {*/
/* 			return this.each(function( i ) {*/
/* 				jQuery( this ).toggleClass( value.call(this, i, this.className, stateVal), stateVal );*/
/* 			});*/
/* 		}*/
/* */
/* 		return this.each(function() {*/
/* 			if ( type === "string" ) {*/
/* 				// toggle individual class names*/
/* 				var className,*/
/* 					i = 0,*/
/* 					self = jQuery( this ),*/
/* 					state = stateVal,*/
/* 					classNames = value.match( core_rnotwhite ) || [];*/
/* */
/* 				while ( (className = classNames[ i++ ]) ) {*/
/* 					// check each className given, space separated list*/
/* 					state = isBool ? state : !self.hasClass( className );*/
/* 					self[ state ? "addClass" : "removeClass" ]( className );*/
/* 				}*/
/* */
/* 			// Toggle whole class name*/
/* 			} else if ( type === core_strundefined || type === "boolean" ) {*/
/* 				if ( this.className ) {*/
/* 					// store className if set*/
/* 					jQuery._data( this, "__className__", this.className );*/
/* 				}*/
/* */
/* 				// If the element has a class name or if we're passed "false",*/
/* 				// then remove the whole classname (if there was one, the above saved it).*/
/* 				// Otherwise bring back whatever was previously saved (if anything),*/
/* 				// falling back to the empty string if nothing was stored.*/
/* 				this.className = this.className || value === false ? "" : jQuery._data( this, "__className__" ) || "";*/
/* 			}*/
/* 		});*/
/* 	},*/
/* */
/* 	hasClass: function( selector ) {*/
/* 		var className = " " + selector + " ",*/
/* 			i = 0,*/
/* 			l = this.length;*/
/* 		for ( ; i < l; i++ ) {*/
/* 			if ( this[i].nodeType === 1 && (" " + this[i].className + " ").replace(rclass, " ").indexOf( className ) >= 0 ) {*/
/* 				return true;*/
/* 			}*/
/* 		}*/
/* */
/* 		return false;*/
/* 	},*/
/* */
/* 	val: function( value ) {*/
/* 		var ret, hooks, isFunction,*/
/* 			elem = this[0];*/
/* */
/* 		if ( !arguments.length ) {*/
/* 			if ( elem ) {*/
/* 				hooks = jQuery.valHooks[ elem.type ] || jQuery.valHooks[ elem.nodeName.toLowerCase() ];*/
/* */
/* 				if ( hooks && "get" in hooks && (ret = hooks.get( elem, "value" )) !== undefined ) {*/
/* 					return ret;*/
/* 				}*/
/* */
/* 				ret = elem.value;*/
/* */
/* 				return typeof ret === "string" ?*/
/* 					// handle most common string cases*/
/* 					ret.replace(rreturn, "") :*/
/* 					// handle cases where value is null/undef or number*/
/* 					ret == null ? "" : ret;*/
/* 			}*/
/* */
/* 			return;*/
/* 		}*/
/* */
/* 		isFunction = jQuery.isFunction( value );*/
/* */
/* 		return this.each(function( i ) {*/
/* 			var val,*/
/* 				self = jQuery(this);*/
/* */
/* 			if ( this.nodeType !== 1 ) {*/
/* 				return;*/
/* 			}*/
/* */
/* 			if ( isFunction ) {*/
/* 				val = value.call( this, i, self.val() );*/
/* 			} else {*/
/* 				val = value;*/
/* 			}*/
/* */
/* 			// Treat null/undefined as ""; convert numbers to string*/
/* 			if ( val == null ) {*/
/* 				val = "";*/
/* 			} else if ( typeof val === "number" ) {*/
/* 				val += "";*/
/* 			} else if ( jQuery.isArray( val ) ) {*/
/* 				val = jQuery.map(val, function ( value ) {*/
/* 					return value == null ? "" : value + "";*/
/* 				});*/
/* 			}*/
/* */
/* 			hooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];*/
/* */
/* 			// If set returns undefined, fall back to normal setting*/
/* 			if ( !hooks || !("set" in hooks) || hooks.set( this, val, "value" ) === undefined ) {*/
/* 				this.value = val;*/
/* 			}*/
/* 		});*/
/* 	}*/
/* });*/
/* */
/* jQuery.extend({*/
/* 	valHooks: {*/
/* 		option: {*/
/* 			get: function( elem ) {*/
/* 				// attributes.value is undefined in Blackberry 4.7 but*/
/* 				// uses .value. See #6932*/
/* 				var val = elem.attributes.value;*/
/* 				return !val || val.specified ? elem.value : elem.text;*/
/* 			}*/
/* 		},*/
/* 		select: {*/
/* 			get: function( elem ) {*/
/* 				var value, option,*/
/* 					options = elem.options,*/
/* 					index = elem.selectedIndex,*/
/* 					one = elem.type === "select-one" || index < 0,*/
/* 					values = one ? null : [],*/
/* 					max = one ? index + 1 : options.length,*/
/* 					i = index < 0 ?*/
/* 						max :*/
/* 						one ? index : 0;*/
/* */
/* 				// Loop through all the selected options*/
/* 				for ( ; i < max; i++ ) {*/
/* 					option = options[ i ];*/
/* */
/* 					// oldIE doesn't update selected after form reset (#2551)*/
/* 					if ( ( option.selected || i === index ) &&*/
/* 							// Don't return options that are disabled or in a disabled optgroup*/
/* 							( jQuery.support.optDisabled ? !option.disabled : option.getAttribute("disabled") === null ) &&*/
/* 							( !option.parentNode.disabled || !jQuery.nodeName( option.parentNode, "optgroup" ) ) ) {*/
/* */
/* 						// Get the specific value for the option*/
/* 						value = jQuery( option ).val();*/
/* */
/* 						// We don't need an array for one selects*/
/* 						if ( one ) {*/
/* 							return value;*/
/* 						}*/
/* */
/* 						// Multi-Selects return an array*/
/* 						values.push( value );*/
/* 					}*/
/* 				}*/
/* */
/* 				return values;*/
/* 			},*/
/* */
/* 			set: function( elem, value ) {*/
/* 				var values = jQuery.makeArray( value );*/
/* */
/* 				jQuery(elem).find("option").each(function() {*/
/* 					this.selected = jQuery.inArray( jQuery(this).val(), values ) >= 0;*/
/* 				});*/
/* */
/* 				if ( !values.length ) {*/
/* 					elem.selectedIndex = -1;*/
/* 				}*/
/* 				return values;*/
/* 			}*/
/* 		}*/
/* 	},*/
/* */
/* 	attr: function( elem, name, value ) {*/
/* 		var hooks, notxml, ret,*/
/* 			nType = elem.nodeType;*/
/* */
/* 		// don't get/set attributes on text, comment and attribute nodes*/
/* 		if ( !elem || nType === 3 || nType === 8 || nType === 2 ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// Fallback to prop when attributes are not supported*/
/* 		if ( typeof elem.getAttribute === core_strundefined ) {*/
/* 			return jQuery.prop( elem, name, value );*/
/* 		}*/
/* */
/* 		notxml = nType !== 1 || !jQuery.isXMLDoc( elem );*/
/* */
/* 		// All attributes are lowercase*/
/* 		// Grab necessary hook if one is defined*/
/* 		if ( notxml ) {*/
/* 			name = name.toLowerCase();*/
/* 			hooks = jQuery.attrHooks[ name ] || ( rboolean.test( name ) ? boolHook : nodeHook );*/
/* 		}*/
/* */
/* 		if ( value !== undefined ) {*/
/* */
/* 			if ( value === null ) {*/
/* 				jQuery.removeAttr( elem, name );*/
/* */
/* 			} else if ( hooks && notxml && "set" in hooks && (ret = hooks.set( elem, value, name )) !== undefined ) {*/
/* 				return ret;*/
/* */
/* 			} else {*/
/* 				elem.setAttribute( name, value + "" );*/
/* 				return value;*/
/* 			}*/
/* */
/* 		} else if ( hooks && notxml && "get" in hooks && (ret = hooks.get( elem, name )) !== null ) {*/
/* 			return ret;*/
/* */
/* 		} else {*/
/* */
/* 			// In IE9+, Flash objects don't have .getAttribute (#12945)*/
/* 			// Support: IE9+*/
/* 			if ( typeof elem.getAttribute !== core_strundefined ) {*/
/* 				ret =  elem.getAttribute( name );*/
/* 			}*/
/* */
/* 			// Non-existent attributes return null, we normalize to undefined*/
/* 			return ret == null ?*/
/* 				undefined :*/
/* 				ret;*/
/* 		}*/
/* 	},*/
/* */
/* 	removeAttr: function( elem, value ) {*/
/* 		var name, propName,*/
/* 			i = 0,*/
/* 			attrNames = value && value.match( core_rnotwhite );*/
/* */
/* 		if ( attrNames && elem.nodeType === 1 ) {*/
/* 			while ( (name = attrNames[i++]) ) {*/
/* 				propName = jQuery.propFix[ name ] || name;*/
/* */
/* 				// Boolean attributes get special treatment (#10870)*/
/* 				if ( rboolean.test( name ) ) {*/
/* 					// Set corresponding property to false for boolean attributes*/
/* 					// Also clear defaultChecked/defaultSelected (if appropriate) for IE<8*/
/* 					if ( !getSetAttribute && ruseDefault.test( name ) ) {*/
/* 						elem[ jQuery.camelCase( "default-" + name ) ] =*/
/* 							elem[ propName ] = false;*/
/* 					} else {*/
/* 						elem[ propName ] = false;*/
/* 					}*/
/* */
/* 				// See #9699 for explanation of this approach (setting first, then removal)*/
/* 				} else {*/
/* 					jQuery.attr( elem, name, "" );*/
/* 				}*/
/* */
/* 				elem.removeAttribute( getSetAttribute ? name : propName );*/
/* 			}*/
/* 		}*/
/* 	},*/
/* */
/* 	attrHooks: {*/
/* 		type: {*/
/* 			set: function( elem, value ) {*/
/* 				if ( !jQuery.support.radioValue && value === "radio" && jQuery.nodeName(elem, "input") ) {*/
/* 					// Setting the type on a radio button after the value resets the value in IE6-9*/
/* 					// Reset value to default in case type is set after value during creation*/
/* 					var val = elem.value;*/
/* 					elem.setAttribute( "type", value );*/
/* 					if ( val ) {*/
/* 						elem.value = val;*/
/* 					}*/
/* 					return value;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	},*/
/* */
/* 	propFix: {*/
/* 		tabindex: "tabIndex",*/
/* 		readonly: "readOnly",*/
/* 		"for": "htmlFor",*/
/* 		"class": "className",*/
/* 		maxlength: "maxLength",*/
/* 		cellspacing: "cellSpacing",*/
/* 		cellpadding: "cellPadding",*/
/* 		rowspan: "rowSpan",*/
/* 		colspan: "colSpan",*/
/* 		usemap: "useMap",*/
/* 		frameborder: "frameBorder",*/
/* 		contenteditable: "contentEditable"*/
/* 	},*/
/* */
/* 	prop: function( elem, name, value ) {*/
/* 		var ret, hooks, notxml,*/
/* 			nType = elem.nodeType;*/
/* */
/* 		// don't get/set properties on text, comment and attribute nodes*/
/* 		if ( !elem || nType === 3 || nType === 8 || nType === 2 ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		notxml = nType !== 1 || !jQuery.isXMLDoc( elem );*/
/* */
/* 		if ( notxml ) {*/
/* 			// Fix name and attach hooks*/
/* 			name = jQuery.propFix[ name ] || name;*/
/* 			hooks = jQuery.propHooks[ name ];*/
/* 		}*/
/* */
/* 		if ( value !== undefined ) {*/
/* 			if ( hooks && "set" in hooks && (ret = hooks.set( elem, value, name )) !== undefined ) {*/
/* 				return ret;*/
/* */
/* 			} else {*/
/* 				return ( elem[ name ] = value );*/
/* 			}*/
/* */
/* 		} else {*/
/* 			if ( hooks && "get" in hooks && (ret = hooks.get( elem, name )) !== null ) {*/
/* 				return ret;*/
/* */
/* 			} else {*/
/* 				return elem[ name ];*/
/* 			}*/
/* 		}*/
/* 	},*/
/* */
/* 	propHooks: {*/
/* 		tabIndex: {*/
/* 			get: function( elem ) {*/
/* 				// elem.tabIndex doesn't always return the correct value when it hasn't been explicitly set*/
/* 				// http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/*/
/* 				var attributeNode = elem.getAttributeNode("tabindex");*/
/* */
/* 				return attributeNode && attributeNode.specified ?*/
/* 					parseInt( attributeNode.value, 10 ) :*/
/* 					rfocusable.test( elem.nodeName ) || rclickable.test( elem.nodeName ) && elem.href ?*/
/* 						0 :*/
/* 						undefined;*/
/* 			}*/
/* 		}*/
/* 	}*/
/* });*/
/* */
/* // Hook for boolean attributes*/
/* boolHook = {*/
/* 	get: function( elem, name ) {*/
/* 		var*/
/* 			// Use .prop to determine if this attribute is understood as boolean*/
/* 			prop = jQuery.prop( elem, name ),*/
/* */
/* 			// Fetch it accordingly*/
/* 			attr = typeof prop === "boolean" && elem.getAttribute( name ),*/
/* 			detail = typeof prop === "boolean" ?*/
/* */
/* 				getSetInput && getSetAttribute ?*/
/* 					attr != null :*/
/* 					// oldIE fabricates an empty string for missing boolean attributes*/
/* 					// and conflates checked/selected into attroperties*/
/* 					ruseDefault.test( name ) ?*/
/* 						elem[ jQuery.camelCase( "default-" + name ) ] :*/
/* 						!!attr :*/
/* */
/* 				// fetch an attribute node for properties not recognized as boolean*/
/* 				elem.getAttributeNode( name );*/
/* */
/* 		return detail && detail.value !== false ?*/
/* 			name.toLowerCase() :*/
/* 			undefined;*/
/* 	},*/
/* 	set: function( elem, value, name ) {*/
/* 		if ( value === false ) {*/
/* 			// Remove boolean attributes when set to false*/
/* 			jQuery.removeAttr( elem, name );*/
/* 		} else if ( getSetInput && getSetAttribute || !ruseDefault.test( name ) ) {*/
/* 			// IE<8 needs the *property* name*/
/* 			elem.setAttribute( !getSetAttribute && jQuery.propFix[ name ] || name, name );*/
/* */
/* 		// Use defaultChecked and defaultSelected for oldIE*/
/* 		} else {*/
/* 			elem[ jQuery.camelCase( "default-" + name ) ] = elem[ name ] = true;*/
/* 		}*/
/* */
/* 		return name;*/
/* 	}*/
/* };*/
/* */
/* // fix oldIE value attroperty*/
/* if ( !getSetInput || !getSetAttribute ) {*/
/* 	jQuery.attrHooks.value = {*/
/* 		get: function( elem, name ) {*/
/* 			var ret = elem.getAttributeNode( name );*/
/* 			return jQuery.nodeName( elem, "input" ) ?*/
/* */
/* 				// Ignore the value *property* by using defaultValue*/
/* 				elem.defaultValue :*/
/* */
/* 				ret && ret.specified ? ret.value : undefined;*/
/* 		},*/
/* 		set: function( elem, value, name ) {*/
/* 			if ( jQuery.nodeName( elem, "input" ) ) {*/
/* 				// Does not return so that setAttribute is also used*/
/* 				elem.defaultValue = value;*/
/* 			} else {*/
/* 				// Use nodeHook if defined (#1954); otherwise setAttribute is fine*/
/* 				return nodeHook && nodeHook.set( elem, value, name );*/
/* 			}*/
/* 		}*/
/* 	};*/
/* }*/
/* */
/* // IE6/7 do not support getting/setting some attributes with get/setAttribute*/
/* if ( !getSetAttribute ) {*/
/* */
/* 	// Use this for any attribute in IE6/7*/
/* 	// This fixes almost every IE6/7 issue*/
/* 	nodeHook = jQuery.valHooks.button = {*/
/* 		get: function( elem, name ) {*/
/* 			var ret = elem.getAttributeNode( name );*/
/* 			return ret && ( name === "id" || name === "name" || name === "coords" ? ret.value !== "" : ret.specified ) ?*/
/* 				ret.value :*/
/* 				undefined;*/
/* 		},*/
/* 		set: function( elem, value, name ) {*/
/* 			// Set the existing or create a new attribute node*/
/* 			var ret = elem.getAttributeNode( name );*/
/* 			if ( !ret ) {*/
/* 				elem.setAttributeNode(*/
/* 					(ret = elem.ownerDocument.createAttribute( name ))*/
/* 				);*/
/* 			}*/
/* */
/* 			ret.value = value += "";*/
/* */
/* 			// Break association with cloned elements by also using setAttribute (#9646)*/
/* 			return name === "value" || value === elem.getAttribute( name ) ?*/
/* 				value :*/
/* 				undefined;*/
/* 		}*/
/* 	};*/
/* */
/* 	// Set contenteditable to false on removals(#10429)*/
/* 	// Setting to empty string throws an error as an invalid value*/
/* 	jQuery.attrHooks.contenteditable = {*/
/* 		get: nodeHook.get,*/
/* 		set: function( elem, value, name ) {*/
/* 			nodeHook.set( elem, value === "" ? false : value, name );*/
/* 		}*/
/* 	};*/
/* */
/* 	// Set width and height to auto instead of 0 on empty string( Bug #8150 )*/
/* 	// This is for removals*/
/* 	jQuery.each([ "width", "height" ], function( i, name ) {*/
/* 		jQuery.attrHooks[ name ] = jQuery.extend( jQuery.attrHooks[ name ], {*/
/* 			set: function( elem, value ) {*/
/* 				if ( value === "" ) {*/
/* 					elem.setAttribute( name, "auto" );*/
/* 					return value;*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	});*/
/* }*/
/* */
/* */
/* // Some attributes require a special call on IE*/
/* // http://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx*/
/* if ( !jQuery.support.hrefNormalized ) {*/
/* 	jQuery.each([ "href", "src", "width", "height" ], function( i, name ) {*/
/* 		jQuery.attrHooks[ name ] = jQuery.extend( jQuery.attrHooks[ name ], {*/
/* 			get: function( elem ) {*/
/* 				var ret = elem.getAttribute( name, 2 );*/
/* 				return ret == null ? undefined : ret;*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	// href/src property should get the full normalized URL (#10299/#12915)*/
/* 	jQuery.each([ "href", "src" ], function( i, name ) {*/
/* 		jQuery.propHooks[ name ] = {*/
/* 			get: function( elem ) {*/
/* 				return elem.getAttribute( name, 4 );*/
/* 			}*/
/* 		};*/
/* 	});*/
/* }*/
/* */
/* if ( !jQuery.support.style ) {*/
/* 	jQuery.attrHooks.style = {*/
/* 		get: function( elem ) {*/
/* 			// Return undefined in the case of empty string*/
/* 			// Note: IE uppercases css property names, but if we were to .toLowerCase()*/
/* 			// .cssText, that would destroy case senstitivity in URL's, like in "background"*/
/* 			return elem.style.cssText || undefined;*/
/* 		},*/
/* 		set: function( elem, value ) {*/
/* 			return ( elem.style.cssText = value + "" );*/
/* 		}*/
/* 	};*/
/* }*/
/* */
/* // Safari mis-reports the default selected property of an option*/
/* // Accessing the parent's selectedIndex property fixes it*/
/* if ( !jQuery.support.optSelected ) {*/
/* 	jQuery.propHooks.selected = jQuery.extend( jQuery.propHooks.selected, {*/
/* 		get: function( elem ) {*/
/* 			var parent = elem.parentNode;*/
/* */
/* 			if ( parent ) {*/
/* 				parent.selectedIndex;*/
/* */
/* 				// Make sure that it also works with optgroups, see #5701*/
/* 				if ( parent.parentNode ) {*/
/* 					parent.parentNode.selectedIndex;*/
/* 				}*/
/* 			}*/
/* 			return null;*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* // IE6/7 call enctype encoding*/
/* if ( !jQuery.support.enctype ) {*/
/* 	jQuery.propFix.enctype = "encoding";*/
/* }*/
/* */
/* // Radios and checkboxes getter/setter*/
/* if ( !jQuery.support.checkOn ) {*/
/* 	jQuery.each([ "radio", "checkbox" ], function() {*/
/* 		jQuery.valHooks[ this ] = {*/
/* 			get: function( elem ) {*/
/* 				// Handle the case where in Webkit "" is returned instead of "on" if a value isn't specified*/
/* 				return elem.getAttribute("value") === null ? "on" : elem.value;*/
/* 			}*/
/* 		};*/
/* 	});*/
/* }*/
/* jQuery.each([ "radio", "checkbox" ], function() {*/
/* 	jQuery.valHooks[ this ] = jQuery.extend( jQuery.valHooks[ this ], {*/
/* 		set: function( elem, value ) {*/
/* 			if ( jQuery.isArray( value ) ) {*/
/* 				return ( elem.checked = jQuery.inArray( jQuery(elem).val(), value ) >= 0 );*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* var rformElems = /^(?:input|select|textarea)$/i,*/
/* 	rkeyEvent = /^key/,*/
/* 	rmouseEvent = /^(?:mouse|contextmenu)|click/,*/
/* 	rfocusMorph = /^(?:focusinfocus|focusoutblur)$/,*/
/* 	rtypenamespace = /^([^.]*)(?:\.(.+)|)$/;*/
/* */
/* function returnTrue() {*/
/* 	return true;*/
/* }*/
/* */
/* function returnFalse() {*/
/* 	return false;*/
/* }*/
/* */
/* /**/
/*  * Helper functions for managing events -- not part of the public interface.*/
/*  * Props to Dean Edwards' addEvent library for many of the ideas.*/
/*  *//* */
/* jQuery.event = {*/
/* */
/* 	global: {},*/
/* */
/* 	add: function( elem, types, handler, data, selector ) {*/
/* 		var tmp, events, t, handleObjIn,*/
/* 			special, eventHandle, handleObj,*/
/* 			handlers, type, namespaces, origType,*/
/* 			elemData = jQuery._data( elem );*/
/* */
/* 		// Don't attach events to noData or text/comment nodes (but allow plain objects)*/
/* 		if ( !elemData ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// Caller can pass in an object of custom data in lieu of the handler*/
/* 		if ( handler.handler ) {*/
/* 			handleObjIn = handler;*/
/* 			handler = handleObjIn.handler;*/
/* 			selector = handleObjIn.selector;*/
/* 		}*/
/* */
/* 		// Make sure that the handler has a unique ID, used to find/remove it later*/
/* 		if ( !handler.guid ) {*/
/* 			handler.guid = jQuery.guid++;*/
/* 		}*/
/* */
/* 		// Init the element's event structure and main handler, if this is the first*/
/* 		if ( !(events = elemData.events) ) {*/
/* 			events = elemData.events = {};*/
/* 		}*/
/* 		if ( !(eventHandle = elemData.handle) ) {*/
/* 			eventHandle = elemData.handle = function( e ) {*/
/* 				// Discard the second event of a jQuery.event.trigger() and*/
/* 				// when an event is called after a page has unloaded*/
/* 				return typeof jQuery !== core_strundefined && (!e || jQuery.event.triggered !== e.type) ?*/
/* 					jQuery.event.dispatch.apply( eventHandle.elem, arguments ) :*/
/* 					undefined;*/
/* 			};*/
/* 			// Add elem as a property of the handle fn to prevent a memory leak with IE non-native events*/
/* 			eventHandle.elem = elem;*/
/* 		}*/
/* */
/* 		// Handle multiple events separated by a space*/
/* 		// jQuery(...).bind("mouseover mouseout", fn);*/
/* 		types = ( types || "" ).match( core_rnotwhite ) || [""];*/
/* 		t = types.length;*/
/* 		while ( t-- ) {*/
/* 			tmp = rtypenamespace.exec( types[t] ) || [];*/
/* 			type = origType = tmp[1];*/
/* 			namespaces = ( tmp[2] || "" ).split( "." ).sort();*/
/* */
/* 			// If event changes its type, use the special event handlers for the changed type*/
/* 			special = jQuery.event.special[ type ] || {};*/
/* */
/* 			// If selector defined, determine special event api type, otherwise given type*/
/* 			type = ( selector ? special.delegateType : special.bindType ) || type;*/
/* */
/* 			// Update special based on newly reset type*/
/* 			special = jQuery.event.special[ type ] || {};*/
/* */
/* 			// handleObj is passed to all event handlers*/
/* 			handleObj = jQuery.extend({*/
/* 				type: type,*/
/* 				origType: origType,*/
/* 				data: data,*/
/* 				handler: handler,*/
/* 				guid: handler.guid,*/
/* 				selector: selector,*/
/* 				needsContext: selector && jQuery.expr.match.needsContext.test( selector ),*/
/* 				namespace: namespaces.join(".")*/
/* 			}, handleObjIn );*/
/* */
/* 			// Init the event handler queue if we're the first*/
/* 			if ( !(handlers = events[ type ]) ) {*/
/* 				handlers = events[ type ] = [];*/
/* 				handlers.delegateCount = 0;*/
/* */
/* 				// Only use addEventListener/attachEvent if the special events handler returns false*/
/* 				if ( !special.setup || special.setup.call( elem, data, namespaces, eventHandle ) === false ) {*/
/* 					// Bind the global event handler to the element*/
/* 					if ( elem.addEventListener ) {*/
/* 						elem.addEventListener( type, eventHandle, false );*/
/* */
/* 					} else if ( elem.attachEvent ) {*/
/* 						elem.attachEvent( "on" + type, eventHandle );*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			if ( special.add ) {*/
/* 				special.add.call( elem, handleObj );*/
/* */
/* 				if ( !handleObj.handler.guid ) {*/
/* 					handleObj.handler.guid = handler.guid;*/
/* 				}*/
/* 			}*/
/* */
/* 			// Add to the element's handler list, delegates in front*/
/* 			if ( selector ) {*/
/* 				handlers.splice( handlers.delegateCount++, 0, handleObj );*/
/* 			} else {*/
/* 				handlers.push( handleObj );*/
/* 			}*/
/* */
/* 			// Keep track of which events have ever been used, for event optimization*/
/* 			jQuery.event.global[ type ] = true;*/
/* 		}*/
/* */
/* 		// Nullify elem to prevent memory leaks in IE*/
/* 		elem = null;*/
/* 	},*/
/* */
/* 	// Detach an event or set of events from an element*/
/* 	remove: function( elem, types, handler, selector, mappedTypes ) {*/
/* 		var j, handleObj, tmp,*/
/* 			origCount, t, events,*/
/* 			special, handlers, type,*/
/* 			namespaces, origType,*/
/* 			elemData = jQuery.hasData( elem ) && jQuery._data( elem );*/
/* */
/* 		if ( !elemData || !(events = elemData.events) ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// Once for each type.namespace in types; type may be omitted*/
/* 		types = ( types || "" ).match( core_rnotwhite ) || [""];*/
/* 		t = types.length;*/
/* 		while ( t-- ) {*/
/* 			tmp = rtypenamespace.exec( types[t] ) || [];*/
/* 			type = origType = tmp[1];*/
/* 			namespaces = ( tmp[2] || "" ).split( "." ).sort();*/
/* */
/* 			// Unbind all events (on this namespace, if provided) for the element*/
/* 			if ( !type ) {*/
/* 				for ( type in events ) {*/
/* 					jQuery.event.remove( elem, type + types[ t ], handler, selector, true );*/
/* 				}*/
/* 				continue;*/
/* 			}*/
/* */
/* 			special = jQuery.event.special[ type ] || {};*/
/* 			type = ( selector ? special.delegateType : special.bindType ) || type;*/
/* 			handlers = events[ type ] || [];*/
/* 			tmp = tmp[2] && new RegExp( "(^|\\.)" + namespaces.join("\\.(?:.*\\.|)") + "(\\.|$)" );*/
/* */
/* 			// Remove matching events*/
/* 			origCount = j = handlers.length;*/
/* 			while ( j-- ) {*/
/* 				handleObj = handlers[ j ];*/
/* */
/* 				if ( ( mappedTypes || origType === handleObj.origType ) &&*/
/* 					( !handler || handler.guid === handleObj.guid ) &&*/
/* 					( !tmp || tmp.test( handleObj.namespace ) ) &&*/
/* 					( !selector || selector === handleObj.selector || selector === "**" && handleObj.selector ) ) {*/
/* 					handlers.splice( j, 1 );*/
/* */
/* 					if ( handleObj.selector ) {*/
/* 						handlers.delegateCount--;*/
/* 					}*/
/* 					if ( special.remove ) {*/
/* 						special.remove.call( elem, handleObj );*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			// Remove generic event handler if we removed something and no more handlers exist*/
/* 			// (avoids potential for endless recursion during removal of special event handlers)*/
/* 			if ( origCount && !handlers.length ) {*/
/* 				if ( !special.teardown || special.teardown.call( elem, namespaces, elemData.handle ) === false ) {*/
/* 					jQuery.removeEvent( elem, type, elemData.handle );*/
/* 				}*/
/* */
/* 				delete events[ type ];*/
/* 			}*/
/* 		}*/
/* */
/* 		// Remove the expando if it's no longer used*/
/* 		if ( jQuery.isEmptyObject( events ) ) {*/
/* 			delete elemData.handle;*/
/* */
/* 			// removeData also checks for emptiness and clears the expando if empty*/
/* 			// so use it instead of delete*/
/* 			jQuery._removeData( elem, "events" );*/
/* 		}*/
/* 	},*/
/* */
/* 	trigger: function( event, data, elem, onlyHandlers ) {*/
/* 		var handle, ontype, cur,*/
/* 			bubbleType, special, tmp, i,*/
/* 			eventPath = [ elem || document ],*/
/* 			type = core_hasOwn.call( event, "type" ) ? event.type : event,*/
/* 			namespaces = core_hasOwn.call( event, "namespace" ) ? event.namespace.split(".") : [];*/
/* */
/* 		cur = tmp = elem = elem || document;*/
/* */
/* 		// Don't do events on text and comment nodes*/
/* 		if ( elem.nodeType === 3 || elem.nodeType === 8 ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// focus/blur morphs to focusin/out; ensure we're not firing them right now*/
/* 		if ( rfocusMorph.test( type + jQuery.event.triggered ) ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		if ( type.indexOf(".") >= 0 ) {*/
/* 			// Namespaced trigger; create a regexp to match event type in handle()*/
/* 			namespaces = type.split(".");*/
/* 			type = namespaces.shift();*/
/* 			namespaces.sort();*/
/* 		}*/
/* 		ontype = type.indexOf(":") < 0 && "on" + type;*/
/* */
/* 		// Caller can pass in a jQuery.Event object, Object, or just an event type string*/
/* 		event = event[ jQuery.expando ] ?*/
/* 			event :*/
/* 			new jQuery.Event( type, typeof event === "object" && event );*/
/* */
/* 		event.isTrigger = true;*/
/* 		event.namespace = namespaces.join(".");*/
/* 		event.namespace_re = event.namespace ?*/
/* 			new RegExp( "(^|\\.)" + namespaces.join("\\.(?:.*\\.|)") + "(\\.|$)" ) :*/
/* 			null;*/
/* */
/* 		// Clean up the event in case it is being reused*/
/* 		event.result = undefined;*/
/* 		if ( !event.target ) {*/
/* 			event.target = elem;*/
/* 		}*/
/* */
/* 		// Clone any incoming data and prepend the event, creating the handler arg list*/
/* 		data = data == null ?*/
/* 			[ event ] :*/
/* 			jQuery.makeArray( data, [ event ] );*/
/* */
/* 		// Allow special events to draw outside the lines*/
/* 		special = jQuery.event.special[ type ] || {};*/
/* 		if ( !onlyHandlers && special.trigger && special.trigger.apply( elem, data ) === false ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// Determine event propagation path in advance, per W3C events spec (#9951)*/
/* 		// Bubble up to document, then to window; watch for a global ownerDocument var (#9724)*/
/* 		if ( !onlyHandlers && !special.noBubble && !jQuery.isWindow( elem ) ) {*/
/* */
/* 			bubbleType = special.delegateType || type;*/
/* 			if ( !rfocusMorph.test( bubbleType + type ) ) {*/
/* 				cur = cur.parentNode;*/
/* 			}*/
/* 			for ( ; cur; cur = cur.parentNode ) {*/
/* 				eventPath.push( cur );*/
/* 				tmp = cur;*/
/* 			}*/
/* */
/* 			// Only add window if we got to document (e.g., not plain obj or detached DOM)*/
/* 			if ( tmp === (elem.ownerDocument || document) ) {*/
/* 				eventPath.push( tmp.defaultView || tmp.parentWindow || window );*/
/* 			}*/
/* 		}*/
/* */
/* 		// Fire handlers on the event path*/
/* 		i = 0;*/
/* 		while ( (cur = eventPath[i++]) && !event.isPropagationStopped() ) {*/
/* */
/* 			event.type = i > 1 ?*/
/* 				bubbleType :*/
/* 				special.bindType || type;*/
/* */
/* 			// jQuery handler*/
/* 			handle = ( jQuery._data( cur, "events" ) || {} )[ event.type ] && jQuery._data( cur, "handle" );*/
/* 			if ( handle ) {*/
/* 				handle.apply( cur, data );*/
/* 			}*/
/* */
/* 			// Native handler*/
/* 			handle = ontype && cur[ ontype ];*/
/* 			if ( handle && jQuery.acceptData( cur ) && handle.apply && handle.apply( cur, data ) === false ) {*/
/* 				event.preventDefault();*/
/* 			}*/
/* 		}*/
/* 		event.type = type;*/
/* */
/* 		// If nobody prevented the default action, do it now*/
/* 		if ( !onlyHandlers && !event.isDefaultPrevented() ) {*/
/* */
/* 			if ( (!special._default || special._default.apply( elem.ownerDocument, data ) === false) &&*/
/* 				!(type === "click" && jQuery.nodeName( elem, "a" )) && jQuery.acceptData( elem ) ) {*/
/* */
/* 				// Call a native DOM method on the target with the same name name as the event.*/
/* 				// Can't use an .isFunction() check here because IE6/7 fails that test.*/
/* 				// Don't do default actions on window, that's where global variables be (#6170)*/
/* 				if ( ontype && elem[ type ] && !jQuery.isWindow( elem ) ) {*/
/* */
/* 					// Don't re-trigger an onFOO event when we call its FOO() method*/
/* 					tmp = elem[ ontype ];*/
/* */
/* 					if ( tmp ) {*/
/* 						elem[ ontype ] = null;*/
/* 					}*/
/* */
/* 					// Prevent re-triggering of the same event, since we already bubbled it above*/
/* 					jQuery.event.triggered = type;*/
/* 					try {*/
/* 						elem[ type ]();*/
/* 					} catch ( e ) {*/
/* 						// IE<9 dies on focus/blur to hidden element (#1486,#12518)*/
/* 						// only reproducible on winXP IE8 native, not IE9 in IE8 mode*/
/* 					}*/
/* 					jQuery.event.triggered = undefined;*/
/* */
/* 					if ( tmp ) {*/
/* 						elem[ ontype ] = tmp;*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		return event.result;*/
/* 	},*/
/* */
/* 	dispatch: function( event ) {*/
/* */
/* 		// Make a writable jQuery.Event from the native event object*/
/* 		event = jQuery.event.fix( event );*/
/* */
/* 		var i, ret, handleObj, matched, j,*/
/* 			handlerQueue = [],*/
/* 			args = core_slice.call( arguments ),*/
/* 			handlers = ( jQuery._data( this, "events" ) || {} )[ event.type ] || [],*/
/* 			special = jQuery.event.special[ event.type ] || {};*/
/* */
/* 		// Use the fix-ed jQuery.Event rather than the (read-only) native event*/
/* 		args[0] = event;*/
/* 		event.delegateTarget = this;*/
/* */
/* 		// Call the preDispatch hook for the mapped type, and let it bail if desired*/
/* 		if ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// Determine handlers*/
/* 		handlerQueue = jQuery.event.handlers.call( this, event, handlers );*/
/* */
/* 		// Run delegates first; they may want to stop propagation beneath us*/
/* 		i = 0;*/
/* 		while ( (matched = handlerQueue[ i++ ]) && !event.isPropagationStopped() ) {*/
/* 			event.currentTarget = matched.elem;*/
/* */
/* 			j = 0;*/
/* 			while ( (handleObj = matched.handlers[ j++ ]) && !event.isImmediatePropagationStopped() ) {*/
/* */
/* 				// Triggered event must either 1) have no namespace, or*/
/* 				// 2) have namespace(s) a subset or equal to those in the bound event (both can have no namespace).*/
/* 				if ( !event.namespace_re || event.namespace_re.test( handleObj.namespace ) ) {*/
/* */
/* 					event.handleObj = handleObj;*/
/* 					event.data = handleObj.data;*/
/* */
/* 					ret = ( (jQuery.event.special[ handleObj.origType ] || {}).handle || handleObj.handler )*/
/* 							.apply( matched.elem, args );*/
/* */
/* 					if ( ret !== undefined ) {*/
/* 						if ( (event.result = ret) === false ) {*/
/* 							event.preventDefault();*/
/* 							event.stopPropagation();*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		// Call the postDispatch hook for the mapped type*/
/* 		if ( special.postDispatch ) {*/
/* 			special.postDispatch.call( this, event );*/
/* 		}*/
/* */
/* 		return event.result;*/
/* 	},*/
/* */
/* 	handlers: function( event, handlers ) {*/
/* 		var sel, handleObj, matches, i,*/
/* 			handlerQueue = [],*/
/* 			delegateCount = handlers.delegateCount,*/
/* 			cur = event.target;*/
/* */
/* 		// Find delegate handlers*/
/* 		// Black-hole SVG <use> instance trees (#13180)*/
/* 		// Avoid non-left-click bubbling in Firefox (#3861)*/
/* 		if ( delegateCount && cur.nodeType && (!event.button || event.type !== "click") ) {*/
/* */
/* 			for ( ; cur != this; cur = cur.parentNode || this ) {*/
/* */
/* 				// Don't check non-elements (#13208)*/
/* 				// Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)*/
/* 				if ( cur.nodeType === 1 && (cur.disabled !== true || event.type !== "click") ) {*/
/* 					matches = [];*/
/* 					for ( i = 0; i < delegateCount; i++ ) {*/
/* 						handleObj = handlers[ i ];*/
/* */
/* 						// Don't conflict with Object.prototype properties (#13203)*/
/* 						sel = handleObj.selector + " ";*/
/* */
/* 						if ( matches[ sel ] === undefined ) {*/
/* 							matches[ sel ] = handleObj.needsContext ?*/
/* 								jQuery( sel, this ).index( cur ) >= 0 :*/
/* 								jQuery.find( sel, this, null, [ cur ] ).length;*/
/* 						}*/
/* 						if ( matches[ sel ] ) {*/
/* 							matches.push( handleObj );*/
/* 						}*/
/* 					}*/
/* 					if ( matches.length ) {*/
/* 						handlerQueue.push({ elem: cur, handlers: matches });*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		// Add the remaining (directly-bound) handlers*/
/* 		if ( delegateCount < handlers.length ) {*/
/* 			handlerQueue.push({ elem: this, handlers: handlers.slice( delegateCount ) });*/
/* 		}*/
/* */
/* 		return handlerQueue;*/
/* 	},*/
/* */
/* 	fix: function( event ) {*/
/* 		if ( event[ jQuery.expando ] ) {*/
/* 			return event;*/
/* 		}*/
/* */
/* 		// Create a writable copy of the event object and normalize some properties*/
/* 		var i, prop, copy,*/
/* 			type = event.type,*/
/* 			originalEvent = event,*/
/* 			fixHook = this.fixHooks[ type ];*/
/* */
/* 		if ( !fixHook ) {*/
/* 			this.fixHooks[ type ] = fixHook =*/
/* 				rmouseEvent.test( type ) ? this.mouseHooks :*/
/* 				rkeyEvent.test( type ) ? this.keyHooks :*/
/* 				{};*/
/* 		}*/
/* 		copy = fixHook.props ? this.props.concat( fixHook.props ) : this.props;*/
/* */
/* 		event = new jQuery.Event( originalEvent );*/
/* */
/* 		i = copy.length;*/
/* 		while ( i-- ) {*/
/* 			prop = copy[ i ];*/
/* 			event[ prop ] = originalEvent[ prop ];*/
/* 		}*/
/* */
/* 		// Support: IE<9*/
/* 		// Fix target property (#1925)*/
/* 		if ( !event.target ) {*/
/* 			event.target = originalEvent.srcElement || document;*/
/* 		}*/
/* */
/* 		// Support: Chrome 23+, Safari?*/
/* 		// Target should not be a text node (#504, #13143)*/
/* 		if ( event.target.nodeType === 3 ) {*/
/* 			event.target = event.target.parentNode;*/
/* 		}*/
/* */
/* 		// Support: IE<9*/
/* 		// For mouse/key events, metaKey==false if it's undefined (#3368, #11328)*/
/* 		event.metaKey = !!event.metaKey;*/
/* */
/* 		return fixHook.filter ? fixHook.filter( event, originalEvent ) : event;*/
/* 	},*/
/* */
/* 	// Includes some event props shared by KeyEvent and MouseEvent*/
/* 	props: "altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),*/
/* */
/* 	fixHooks: {},*/
/* */
/* 	keyHooks: {*/
/* 		props: "char charCode key keyCode".split(" "),*/
/* 		filter: function( event, original ) {*/
/* */
/* 			// Add which for key events*/
/* 			if ( event.which == null ) {*/
/* 				event.which = original.charCode != null ? original.charCode : original.keyCode;*/
/* 			}*/
/* */
/* 			return event;*/
/* 		}*/
/* 	},*/
/* */
/* 	mouseHooks: {*/
/* 		props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),*/
/* 		filter: function( event, original ) {*/
/* 			var body, eventDoc, doc,*/
/* 				button = original.button,*/
/* 				fromElement = original.fromElement;*/
/* */
/* 			// Calculate pageX/Y if missing and clientX/Y available*/
/* 			if ( event.pageX == null && original.clientX != null ) {*/
/* 				eventDoc = event.target.ownerDocument || document;*/
/* 				doc = eventDoc.documentElement;*/
/* 				body = eventDoc.body;*/
/* */
/* 				event.pageX = original.clientX + ( doc && doc.scrollLeft || body && body.scrollLeft || 0 ) - ( doc && doc.clientLeft || body && body.clientLeft || 0 );*/
/* 				event.pageY = original.clientY + ( doc && doc.scrollTop  || body && body.scrollTop  || 0 ) - ( doc && doc.clientTop  || body && body.clientTop  || 0 );*/
/* 			}*/
/* */
/* 			// Add relatedTarget, if necessary*/
/* 			if ( !event.relatedTarget && fromElement ) {*/
/* 				event.relatedTarget = fromElement === event.target ? original.toElement : fromElement;*/
/* 			}*/
/* */
/* 			// Add which for click: 1 === left; 2 === middle; 3 === right*/
/* 			// Note: button is not normalized, so don't use it*/
/* 			if ( !event.which && button !== undefined ) {*/
/* 				event.which = ( button & 1 ? 1 : ( button & 2 ? 3 : ( button & 4 ? 2 : 0 ) ) );*/
/* 			}*/
/* */
/* 			return event;*/
/* 		}*/
/* 	},*/
/* */
/* 	special: {*/
/* 		load: {*/
/* 			// Prevent triggered image.load events from bubbling to window.load*/
/* 			noBubble: true*/
/* 		},*/
/* 		click: {*/
/* 			// For checkbox, fire native event so checked state will be right*/
/* 			trigger: function() {*/
/* 				if ( jQuery.nodeName( this, "input" ) && this.type === "checkbox" && this.click ) {*/
/* 					this.click();*/
/* 					return false;*/
/* 				}*/
/* 			}*/
/* 		},*/
/* 		focus: {*/
/* 			// Fire native event if possible so blur/focus sequence is correct*/
/* 			trigger: function() {*/
/* 				if ( this !== document.activeElement && this.focus ) {*/
/* 					try {*/
/* 						this.focus();*/
/* 						return false;*/
/* 					} catch ( e ) {*/
/* 						// Support: IE<9*/
/* 						// If we error on focus to hidden element (#1486, #12518),*/
/* 						// let .trigger() run the handlers*/
/* 					}*/
/* 				}*/
/* 			},*/
/* 			delegateType: "focusin"*/
/* 		},*/
/* 		blur: {*/
/* 			trigger: function() {*/
/* 				if ( this === document.activeElement && this.blur ) {*/
/* 					this.blur();*/
/* 					return false;*/
/* 				}*/
/* 			},*/
/* 			delegateType: "focusout"*/
/* 		},*/
/* */
/* 		beforeunload: {*/
/* 			postDispatch: function( event ) {*/
/* */
/* 				// Even when returnValue equals to undefined Firefox will still show alert*/
/* 				if ( event.result !== undefined ) {*/
/* 					event.originalEvent.returnValue = event.result;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	},*/
/* */
/* 	simulate: function( type, elem, event, bubble ) {*/
/* 		// Piggyback on a donor event to simulate a different one.*/
/* 		// Fake originalEvent to avoid donor's stopPropagation, but if the*/
/* 		// simulated event prevents default then we do the same on the donor.*/
/* 		var e = jQuery.extend(*/
/* 			new jQuery.Event(),*/
/* 			event,*/
/* 			{ type: type,*/
/* 				isSimulated: true,*/
/* 				originalEvent: {}*/
/* 			}*/
/* 		);*/
/* 		if ( bubble ) {*/
/* 			jQuery.event.trigger( e, null, elem );*/
/* 		} else {*/
/* 			jQuery.event.dispatch.call( elem, e );*/
/* 		}*/
/* 		if ( e.isDefaultPrevented() ) {*/
/* 			event.preventDefault();*/
/* 		}*/
/* 	}*/
/* };*/
/* */
/* jQuery.removeEvent = document.removeEventListener ?*/
/* 	function( elem, type, handle ) {*/
/* 		if ( elem.removeEventListener ) {*/
/* 			elem.removeEventListener( type, handle, false );*/
/* 		}*/
/* 	} :*/
/* 	function( elem, type, handle ) {*/
/* 		var name = "on" + type;*/
/* */
/* 		if ( elem.detachEvent ) {*/
/* */
/* 			// #8545, #7054, preventing memory leaks for custom events in IE6-8*/
/* 			// detachEvent needed property on element, by name of that event, to properly expose it to GC*/
/* 			if ( typeof elem[ name ] === core_strundefined ) {*/
/* 				elem[ name ] = null;*/
/* 			}*/
/* */
/* 			elem.detachEvent( name, handle );*/
/* 		}*/
/* 	};*/
/* */
/* jQuery.Event = function( src, props ) {*/
/* 	// Allow instantiation without the 'new' keyword*/
/* 	if ( !(this instanceof jQuery.Event) ) {*/
/* 		return new jQuery.Event( src, props );*/
/* 	}*/
/* */
/* 	// Event object*/
/* 	if ( src && src.type ) {*/
/* 		this.originalEvent = src;*/
/* 		this.type = src.type;*/
/* */
/* 		// Events bubbling up the document may have been marked as prevented*/
/* 		// by a handler lower down the tree; reflect the correct value.*/
/* 		this.isDefaultPrevented = ( src.defaultPrevented || src.returnValue === false ||*/
/* 			src.getPreventDefault && src.getPreventDefault() ) ? returnTrue : returnFalse;*/
/* */
/* 	// Event type*/
/* 	} else {*/
/* 		this.type = src;*/
/* 	}*/
/* */
/* 	// Put explicitly provided properties onto the event object*/
/* 	if ( props ) {*/
/* 		jQuery.extend( this, props );*/
/* 	}*/
/* */
/* 	// Create a timestamp if incoming event doesn't have one*/
/* 	this.timeStamp = src && src.timeStamp || jQuery.now();*/
/* */
/* 	// Mark it as fixed*/
/* 	this[ jQuery.expando ] = true;*/
/* };*/
/* */
/* // jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding*/
/* // http://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html*/
/* jQuery.Event.prototype = {*/
/* 	isDefaultPrevented: returnFalse,*/
/* 	isPropagationStopped: returnFalse,*/
/* 	isImmediatePropagationStopped: returnFalse,*/
/* */
/* 	preventDefault: function() {*/
/* 		var e = this.originalEvent;*/
/* */
/* 		this.isDefaultPrevented = returnTrue;*/
/* 		if ( !e ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// If preventDefault exists, run it on the original event*/
/* 		if ( e.preventDefault ) {*/
/* 			e.preventDefault();*/
/* */
/* 		// Support: IE*/
/* 		// Otherwise set the returnValue property of the original event to false*/
/* 		} else {*/
/* 			e.returnValue = false;*/
/* 		}*/
/* 	},*/
/* 	stopPropagation: function() {*/
/* 		var e = this.originalEvent;*/
/* */
/* 		this.isPropagationStopped = returnTrue;*/
/* 		if ( !e ) {*/
/* 			return;*/
/* 		}*/
/* 		// If stopPropagation exists, run it on the original event*/
/* 		if ( e.stopPropagation ) {*/
/* 			e.stopPropagation();*/
/* 		}*/
/* */
/* 		// Support: IE*/
/* 		// Set the cancelBubble property of the original event to true*/
/* 		e.cancelBubble = true;*/
/* 	},*/
/* 	stopImmediatePropagation: function() {*/
/* 		this.isImmediatePropagationStopped = returnTrue;*/
/* 		this.stopPropagation();*/
/* 	}*/
/* };*/
/* */
/* // Create mouseenter/leave events using mouseover/out and event-time checks*/
/* jQuery.each({*/
/* 	mouseenter: "mouseover",*/
/* 	mouseleave: "mouseout"*/
/* }, function( orig, fix ) {*/
/* 	jQuery.event.special[ orig ] = {*/
/* 		delegateType: fix,*/
/* 		bindType: fix,*/
/* */
/* 		handle: function( event ) {*/
/* 			var ret,*/
/* 				target = this,*/
/* 				related = event.relatedTarget,*/
/* 				handleObj = event.handleObj;*/
/* */
/* 			// For mousenter/leave call the handler if related is outside the target.*/
/* 			// NB: No relatedTarget if the mouse left/entered the browser window*/
/* 			if ( !related || (related !== target && !jQuery.contains( target, related )) ) {*/
/* 				event.type = handleObj.origType;*/
/* 				ret = handleObj.handler.apply( this, arguments );*/
/* 				event.type = fix;*/
/* 			}*/
/* 			return ret;*/
/* 		}*/
/* 	};*/
/* });*/
/* */
/* // IE submit delegation*/
/* if ( !jQuery.support.submitBubbles ) {*/
/* */
/* 	jQuery.event.special.submit = {*/
/* 		setup: function() {*/
/* 			// Only need this for delegated form submit events*/
/* 			if ( jQuery.nodeName( this, "form" ) ) {*/
/* 				return false;*/
/* 			}*/
/* */
/* 			// Lazy-add a submit handler when a descendant form may potentially be submitted*/
/* 			jQuery.event.add( this, "click._submit keypress._submit", function( e ) {*/
/* 				// Node name check avoids a VML-related crash in IE (#9807)*/
/* 				var elem = e.target,*/
/* 					form = jQuery.nodeName( elem, "input" ) || jQuery.nodeName( elem, "button" ) ? elem.form : undefined;*/
/* 				if ( form && !jQuery._data( form, "submitBubbles" ) ) {*/
/* 					jQuery.event.add( form, "submit._submit", function( event ) {*/
/* 						event._submit_bubble = true;*/
/* 					});*/
/* 					jQuery._data( form, "submitBubbles", true );*/
/* 				}*/
/* 			});*/
/* 			// return undefined since we don't need an event listener*/
/* 		},*/
/* */
/* 		postDispatch: function( event ) {*/
/* 			// If form was submitted by the user, bubble the event up the tree*/
/* 			if ( event._submit_bubble ) {*/
/* 				delete event._submit_bubble;*/
/* 				if ( this.parentNode && !event.isTrigger ) {*/
/* 					jQuery.event.simulate( "submit", this.parentNode, event, true );*/
/* 				}*/
/* 			}*/
/* 		},*/
/* */
/* 		teardown: function() {*/
/* 			// Only need this for delegated form submit events*/
/* 			if ( jQuery.nodeName( this, "form" ) ) {*/
/* 				return false;*/
/* 			}*/
/* */
/* 			// Remove delegated handlers; cleanData eventually reaps submit handlers attached above*/
/* 			jQuery.event.remove( this, "._submit" );*/
/* 		}*/
/* 	};*/
/* }*/
/* */
/* // IE change delegation and checkbox/radio fix*/
/* if ( !jQuery.support.changeBubbles ) {*/
/* */
/* 	jQuery.event.special.change = {*/
/* */
/* 		setup: function() {*/
/* */
/* 			if ( rformElems.test( this.nodeName ) ) {*/
/* 				// IE doesn't fire change on a check/radio until blur; trigger it on click*/
/* 				// after a propertychange. Eat the blur-change in special.change.handle.*/
/* 				// This still fires onchange a second time for check/radio after blur.*/
/* 				if ( this.type === "checkbox" || this.type === "radio" ) {*/
/* 					jQuery.event.add( this, "propertychange._change", function( event ) {*/
/* 						if ( event.originalEvent.propertyName === "checked" ) {*/
/* 							this._just_changed = true;*/
/* 						}*/
/* 					});*/
/* 					jQuery.event.add( this, "click._change", function( event ) {*/
/* 						if ( this._just_changed && !event.isTrigger ) {*/
/* 							this._just_changed = false;*/
/* 						}*/
/* 						// Allow triggered, simulated change events (#11500)*/
/* 						jQuery.event.simulate( "change", this, event, true );*/
/* 					});*/
/* 				}*/
/* 				return false;*/
/* 			}*/
/* 			// Delegated event; lazy-add a change handler on descendant inputs*/
/* 			jQuery.event.add( this, "beforeactivate._change", function( e ) {*/
/* 				var elem = e.target;*/
/* */
/* 				if ( rformElems.test( elem.nodeName ) && !jQuery._data( elem, "changeBubbles" ) ) {*/
/* 					jQuery.event.add( elem, "change._change", function( event ) {*/
/* 						if ( this.parentNode && !event.isSimulated && !event.isTrigger ) {*/
/* 							jQuery.event.simulate( "change", this.parentNode, event, true );*/
/* 						}*/
/* 					});*/
/* 					jQuery._data( elem, "changeBubbles", true );*/
/* 				}*/
/* 			});*/
/* 		},*/
/* */
/* 		handle: function( event ) {*/
/* 			var elem = event.target;*/
/* */
/* 			// Swallow native change events from checkbox/radio, we already triggered them above*/
/* 			if ( this !== elem || event.isSimulated || event.isTrigger || (elem.type !== "radio" && elem.type !== "checkbox") ) {*/
/* 				return event.handleObj.handler.apply( this, arguments );*/
/* 			}*/
/* 		},*/
/* */
/* 		teardown: function() {*/
/* 			jQuery.event.remove( this, "._change" );*/
/* */
/* 			return !rformElems.test( this.nodeName );*/
/* 		}*/
/* 	};*/
/* }*/
/* */
/* // Create "bubbling" focus and blur events*/
/* if ( !jQuery.support.focusinBubbles ) {*/
/* 	jQuery.each({ focus: "focusin", blur: "focusout" }, function( orig, fix ) {*/
/* */
/* 		// Attach a single capturing handler while someone wants focusin/focusout*/
/* 		var attaches = 0,*/
/* 			handler = function( event ) {*/
/* 				jQuery.event.simulate( fix, event.target, jQuery.event.fix( event ), true );*/
/* 			};*/
/* */
/* 		jQuery.event.special[ fix ] = {*/
/* 			setup: function() {*/
/* 				if ( attaches++ === 0 ) {*/
/* 					document.addEventListener( orig, handler, true );*/
/* 				}*/
/* 			},*/
/* 			teardown: function() {*/
/* 				if ( --attaches === 0 ) {*/
/* 					document.removeEventListener( orig, handler, true );*/
/* 				}*/
/* 			}*/
/* 		};*/
/* 	});*/
/* }*/
/* */
/* jQuery.fn.extend({*/
/* */
/* 	on: function( types, selector, data, fn, /*INTERNAL*//*  one ) {*/
/* 		var type, origFn;*/
/* */
/* 		// Types can be a map of types/handlers*/
/* 		if ( typeof types === "object" ) {*/
/* 			// ( types-Object, selector, data )*/
/* 			if ( typeof selector !== "string" ) {*/
/* 				// ( types-Object, data )*/
/* 				data = data || selector;*/
/* 				selector = undefined;*/
/* 			}*/
/* 			for ( type in types ) {*/
/* 				this.on( type, selector, data, types[ type ], one );*/
/* 			}*/
/* 			return this;*/
/* 		}*/
/* */
/* 		if ( data == null && fn == null ) {*/
/* 			// ( types, fn )*/
/* 			fn = selector;*/
/* 			data = selector = undefined;*/
/* 		} else if ( fn == null ) {*/
/* 			if ( typeof selector === "string" ) {*/
/* 				// ( types, selector, fn )*/
/* 				fn = data;*/
/* 				data = undefined;*/
/* 			} else {*/
/* 				// ( types, data, fn )*/
/* 				fn = data;*/
/* 				data = selector;*/
/* 				selector = undefined;*/
/* 			}*/
/* 		}*/
/* 		if ( fn === false ) {*/
/* 			fn = returnFalse;*/
/* 		} else if ( !fn ) {*/
/* 			return this;*/
/* 		}*/
/* */
/* 		if ( one === 1 ) {*/
/* 			origFn = fn;*/
/* 			fn = function( event ) {*/
/* 				// Can use an empty set, since event contains the info*/
/* 				jQuery().off( event );*/
/* 				return origFn.apply( this, arguments );*/
/* 			};*/
/* 			// Use same guid so caller can remove using origFn*/
/* 			fn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );*/
/* 		}*/
/* 		return this.each( function() {*/
/* 			jQuery.event.add( this, types, fn, data, selector );*/
/* 		});*/
/* 	},*/
/* 	one: function( types, selector, data, fn ) {*/
/* 		return this.on( types, selector, data, fn, 1 );*/
/* 	},*/
/* 	off: function( types, selector, fn ) {*/
/* 		var handleObj, type;*/
/* 		if ( types && types.preventDefault && types.handleObj ) {*/
/* 			// ( event )  dispatched jQuery.Event*/
/* 			handleObj = types.handleObj;*/
/* 			jQuery( types.delegateTarget ).off(*/
/* 				handleObj.namespace ? handleObj.origType + "." + handleObj.namespace : handleObj.origType,*/
/* 				handleObj.selector,*/
/* 				handleObj.handler*/
/* 			);*/
/* 			return this;*/
/* 		}*/
/* 		if ( typeof types === "object" ) {*/
/* 			// ( types-object [, selector] )*/
/* 			for ( type in types ) {*/
/* 				this.off( type, selector, types[ type ] );*/
/* 			}*/
/* 			return this;*/
/* 		}*/
/* 		if ( selector === false || typeof selector === "function" ) {*/
/* 			// ( types [, fn] )*/
/* 			fn = selector;*/
/* 			selector = undefined;*/
/* 		}*/
/* 		if ( fn === false ) {*/
/* 			fn = returnFalse;*/
/* 		}*/
/* 		return this.each(function() {*/
/* 			jQuery.event.remove( this, types, fn, selector );*/
/* 		});*/
/* 	},*/
/* */
/* 	bind: function( types, data, fn ) {*/
/* 		return this.on( types, null, data, fn );*/
/* 	},*/
/* 	unbind: function( types, fn ) {*/
/* 		return this.off( types, null, fn );*/
/* 	},*/
/* */
/* 	delegate: function( selector, types, data, fn ) {*/
/* 		return this.on( types, selector, data, fn );*/
/* 	},*/
/* 	undelegate: function( selector, types, fn ) {*/
/* 		// ( namespace ) or ( selector, types [, fn] )*/
/* 		return arguments.length === 1 ? this.off( selector, "**" ) : this.off( types, selector || "**", fn );*/
/* 	},*/
/* */
/* 	trigger: function( type, data ) {*/
/* 		return this.each(function() {*/
/* 			jQuery.event.trigger( type, data, this );*/
/* 		});*/
/* 	},*/
/* 	triggerHandler: function( type, data ) {*/
/* 		var elem = this[0];*/
/* 		if ( elem ) {*/
/* 			return jQuery.event.trigger( type, data, elem, true );*/
/* 		}*/
/* 	}*/
/* });*/
/* /*!*/
/*  * Sizzle CSS Selector Engine*/
/*  * Copyright 2012 jQuery Foundation and other contributors*/
/*  * Released under the MIT license*/
/*  * http://sizzlejs.com/*/
/*  *//* */
/* (function( window, undefined ) {*/
/* */
/* var i,*/
/* 	cachedruns,*/
/* 	Expr,*/
/* 	getText,*/
/* 	isXML,*/
/* 	compile,*/
/* 	hasDuplicate,*/
/* 	outermostContext,*/
/* */
/* 	// Local document vars*/
/* 	setDocument,*/
/* 	document,*/
/* 	docElem,*/
/* 	documentIsXML,*/
/* 	rbuggyQSA,*/
/* 	rbuggyMatches,*/
/* 	matches,*/
/* 	contains,*/
/* 	sortOrder,*/
/* */
/* 	// Instance-specific data*/
/* 	expando = "sizzle" + -(new Date()),*/
/* 	preferredDoc = window.document,*/
/* 	support = {},*/
/* 	dirruns = 0,*/
/* 	done = 0,*/
/* 	classCache = createCache(),*/
/* 	tokenCache = createCache(),*/
/* 	compilerCache = createCache(),*/
/* */
/* 	// General-purpose constants*/
/* 	strundefined = typeof undefined,*/
/* 	MAX_NEGATIVE = 1 << 31,*/
/* */
/* 	// Array methods*/
/* 	arr = [],*/
/* 	pop = arr.pop,*/
/* 	push = arr.push,*/
/* 	slice = arr.slice,*/
/* 	// Use a stripped-down indexOf if we can't use a native one*/
/* 	indexOf = arr.indexOf || function( elem ) {*/
/* 		var i = 0,*/
/* 			len = this.length;*/
/* 		for ( ; i < len; i++ ) {*/
/* 			if ( this[i] === elem ) {*/
/* 				return i;*/
/* 			}*/
/* 		}*/
/* 		return -1;*/
/* 	},*/
/* */
/* */
/* 	// Regular expressions*/
/* */
/* 	// Whitespace characters http://www.w3.org/TR/css3-selectors/#whitespace*/
/* 	whitespace = "[\\x20\\t\\r\\n\\f]",*/
/* 	// http://www.w3.org/TR/css3-syntax/#characters*/
/* 	characterEncoding = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",*/
/* */
/* 	// Loosely modeled on CSS identifier characters*/
/* 	// An unquoted value should be a CSS identifier http://www.w3.org/TR/css3-selectors/#attribute-selectors*/
/* 	// Proper syntax: http://www.w3.org/TR/CSS21/syndata.html#value-def-identifier*/
/* 	identifier = characterEncoding.replace( "w", "w#" ),*/
/* */
/* 	// Acceptable operators http://www.w3.org/TR/selectors/#attribute-selectors*/
/* 	operators = "([*^$|!~]?=)",*/
/* 	attributes = "\\[" + whitespace + "*(" + characterEncoding + ")" + whitespace +*/
/* 		"*(?:" + operators + whitespace + "*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|(" + identifier + ")|)|)" + whitespace + "*\\]",*/
/* */
/* 	// Prefer arguments quoted,*/
/* 	//   then not containing pseudos/brackets,*/
/* 	//   then attribute selectors/non-parenthetical expressions,*/
/* 	//   then anything else*/
/* 	// These preferences are here to reduce the number of selectors*/
/* 	//   needing tokenize in the PSEUDO preFilter*/
/* 	pseudos = ":(" + characterEncoding + ")(?:\\(((['\"])((?:\\\\.|[^\\\\])*?)\\3|((?:\\\\.|[^\\\\()[\\]]|" + attributes.replace( 3, 8 ) + ")*)|.*)\\)|)",*/
/* */
/* 	// Leading and non-escaped trailing whitespace, capturing some non-whitespace characters preceding the latter*/
/* 	rtrim = new RegExp( "^" + whitespace + "+|((?:^|[^\\\\])(?:\\\\.)*)" + whitespace + "+$", "g" ),*/
/* */
/* 	rcomma = new RegExp( "^" + whitespace + "*," + whitespace + "*" ),*/
/* 	rcombinators = new RegExp( "^" + whitespace + "*([\\x20\\t\\r\\n\\f>+~])" + whitespace + "*" ),*/
/* 	rpseudo = new RegExp( pseudos ),*/
/* 	ridentifier = new RegExp( "^" + identifier + "$" ),*/
/* */
/* 	matchExpr = {*/
/* 		"ID": new RegExp( "^#(" + characterEncoding + ")" ),*/
/* 		"CLASS": new RegExp( "^\\.(" + characterEncoding + ")" ),*/
/* 		"NAME": new RegExp( "^\\[name=['\"]?(" + characterEncoding + ")['\"]?\\]" ),*/
/* 		"TAG": new RegExp( "^(" + characterEncoding.replace( "w", "w*" ) + ")" ),*/
/* 		"ATTR": new RegExp( "^" + attributes ),*/
/* 		"PSEUDO": new RegExp( "^" + pseudos ),*/
/* 		"CHILD": new RegExp( "^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + whitespace +*/
/* 			"*(even|odd|(([+-]|)(\\d*)n|)" + whitespace + "*(?:([+-]|)" + whitespace +*/
/* 			"*(\\d+)|))" + whitespace + "*\\)|)", "i" ),*/
/* 		// For use in libraries implementing .is()*/
/* 		// We use this for POS matching in `select`*/
/* 		"needsContext": new RegExp( "^" + whitespace + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" +*/
/* 			whitespace + "*((?:-\\d)?\\d*)" + whitespace + "*\\)|)(?=[^-]|$)", "i" )*/
/* 	},*/
/* */
/* 	rsibling = /[\x20\t\r\n\f]*[+~]/,*/
/* */
/* 	rnative = /^[^{]+\{\s*\[native code/,*/
/* */
/* 	// Easily-parseable/retrievable ID or TAG or CLASS selectors*/
/* 	rquickExpr = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,*/
/* */
/* 	rinputs = /^(?:input|select|textarea|button)$/i,*/
/* 	rheader = /^h\d$/i,*/
/* */
/* 	rescape = /'|\\/g,*/
/* 	rattributeQuotes = /\=[\x20\t\r\n\f]*([^'"\]]*)[\x20\t\r\n\f]*\]/g,*/
/* */
/* 	// CSS escapes http://www.w3.org/TR/CSS21/syndata.html#escaped-characters*/
/* 	runescape = /\\([\da-fA-F]{1,6}[\x20\t\r\n\f]?|.)/g,*/
/* 	funescape = function( _, escaped ) {*/
/* 		var high = "0x" + escaped - 0x10000;*/
/* 		// NaN means non-codepoint*/
/* 		return high !== high ?*/
/* 			escaped :*/
/* 			// BMP codepoint*/
/* 			high < 0 ?*/
/* 				String.fromCharCode( high + 0x10000 ) :*/
/* 				// Supplemental Plane codepoint (surrogate pair)*/
/* 				String.fromCharCode( high >> 10 | 0xD800, high & 0x3FF | 0xDC00 );*/
/* 	};*/
/* */
/* // Use a stripped-down slice if we can't use a native one*/
/* try {*/
/* 	slice.call( preferredDoc.documentElement.childNodes, 0 )[0].nodeType;*/
/* } catch ( e ) {*/
/* 	slice = function( i ) {*/
/* 		var elem,*/
/* 			results = [];*/
/* 		while ( (elem = this[i++]) ) {*/
/* 			results.push( elem );*/
/* 		}*/
/* 		return results;*/
/* 	};*/
/* }*/
/* */
/* /***/
/*  * For feature detection*/
/*  * @param {Function} fn The function to test for native support*/
/*  *//* */
/* function isNative( fn ) {*/
/* 	return rnative.test( fn + "" );*/
/* }*/
/* */
/* /***/
/*  * Create key-value caches of limited size*/
/*  * @returns {Function(string, Object)} Returns the Object data after storing it on itself with*/
/*  *	property name the (space-suffixed) string and (if the cache is larger than Expr.cacheLength)*/
/*  *	deleting the oldest entry*/
/*  *//* */
/* function createCache() {*/
/* 	var cache,*/
/* 		keys = [];*/
/* */
/* 	return (cache = function( key, value ) {*/
/* 		// Use (key + " ") to avoid collision with native prototype properties (see Issue #157)*/
/* 		if ( keys.push( key += " " ) > Expr.cacheLength ) {*/
/* 			// Only keep the most recent entries*/
/* 			delete cache[ keys.shift() ];*/
/* 		}*/
/* 		return (cache[ key ] = value);*/
/* 	});*/
/* }*/
/* */
/* /***/
/*  * Mark a function for special use by Sizzle*/
/*  * @param {Function} fn The function to mark*/
/*  *//* */
/* function markFunction( fn ) {*/
/* 	fn[ expando ] = true;*/
/* 	return fn;*/
/* }*/
/* */
/* /***/
/*  * Support testing using an element*/
/*  * @param {Function} fn Passed the created div and expects a boolean result*/
/*  *//* */
/* function assert( fn ) {*/
/* 	var div = document.createElement("div");*/
/* */
/* 	try {*/
/* 		return fn( div );*/
/* 	} catch (e) {*/
/* 		return false;*/
/* 	} finally {*/
/* 		// release memory in IE*/
/* 		div = null;*/
/* 	}*/
/* }*/
/* */
/* function Sizzle( selector, context, results, seed ) {*/
/* 	var match, elem, m, nodeType,*/
/* 		// QSA vars*/
/* 		i, groups, old, nid, newContext, newSelector;*/
/* */
/* 	if ( ( context ? context.ownerDocument || context : preferredDoc ) !== document ) {*/
/* 		setDocument( context );*/
/* 	}*/
/* */
/* 	context = context || document;*/
/* 	results = results || [];*/
/* */
/* 	if ( !selector || typeof selector !== "string" ) {*/
/* 		return results;*/
/* 	}*/
/* */
/* 	if ( (nodeType = context.nodeType) !== 1 && nodeType !== 9 ) {*/
/* 		return [];*/
/* 	}*/
/* */
/* 	if ( !documentIsXML && !seed ) {*/
/* */
/* 		// Shortcuts*/
/* 		if ( (match = rquickExpr.exec( selector )) ) {*/
/* 			// Speed-up: Sizzle("#ID")*/
/* 			if ( (m = match[1]) ) {*/
/* 				if ( nodeType === 9 ) {*/
/* 					elem = context.getElementById( m );*/
/* 					// Check parentNode to catch when Blackberry 4.6 returns*/
/* 					// nodes that are no longer in the document #6963*/
/* 					if ( elem && elem.parentNode ) {*/
/* 						// Handle the case where IE, Opera, and Webkit return items*/
/* 						// by name instead of ID*/
/* 						if ( elem.id === m ) {*/
/* 							results.push( elem );*/
/* 							return results;*/
/* 						}*/
/* 					} else {*/
/* 						return results;*/
/* 					}*/
/* 				} else {*/
/* 					// Context is not a document*/
/* 					if ( context.ownerDocument && (elem = context.ownerDocument.getElementById( m )) &&*/
/* 						contains( context, elem ) && elem.id === m ) {*/
/* 						results.push( elem );*/
/* 						return results;*/
/* 					}*/
/* 				}*/
/* */
/* 			// Speed-up: Sizzle("TAG")*/
/* 			} else if ( match[2] ) {*/
/* 				push.apply( results, slice.call(context.getElementsByTagName( selector ), 0) );*/
/* 				return results;*/
/* */
/* 			// Speed-up: Sizzle(".CLASS")*/
/* 			} else if ( (m = match[3]) && support.getByClassName && context.getElementsByClassName ) {*/
/* 				push.apply( results, slice.call(context.getElementsByClassName( m ), 0) );*/
/* 				return results;*/
/* 			}*/
/* 		}*/
/* */
/* 		// QSA path*/
/* 		if ( support.qsa && !rbuggyQSA.test(selector) ) {*/
/* 			old = true;*/
/* 			nid = expando;*/
/* 			newContext = context;*/
/* 			newSelector = nodeType === 9 && selector;*/
/* */
/* 			// qSA works strangely on Element-rooted queries*/
/* 			// We can work around this by specifying an extra ID on the root*/
/* 			// and working up from there (Thanks to Andrew Dupont for the technique)*/
/* 			// IE 8 doesn't work on object elements*/
/* 			if ( nodeType === 1 && context.nodeName.toLowerCase() !== "object" ) {*/
/* 				groups = tokenize( selector );*/
/* */
/* 				if ( (old = context.getAttribute("id")) ) {*/
/* 					nid = old.replace( rescape, "\\$&" );*/
/* 				} else {*/
/* 					context.setAttribute( "id", nid );*/
/* 				}*/
/* 				nid = "[id='" + nid + "'] ";*/
/* */
/* 				i = groups.length;*/
/* 				while ( i-- ) {*/
/* 					groups[i] = nid + toSelector( groups[i] );*/
/* 				}*/
/* 				newContext = rsibling.test( selector ) && context.parentNode || context;*/
/* 				newSelector = groups.join(",");*/
/* 			}*/
/* */
/* 			if ( newSelector ) {*/
/* 				try {*/
/* 					push.apply( results, slice.call( newContext.querySelectorAll(*/
/* 						newSelector*/
/* 					), 0 ) );*/
/* 					return results;*/
/* 				} catch(qsaError) {*/
/* 				} finally {*/
/* 					if ( !old ) {*/
/* 						context.removeAttribute("id");*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	// All others*/
/* 	return select( selector.replace( rtrim, "$1" ), context, results, seed );*/
/* }*/
/* */
/* /***/
/*  * Detect xml*/
/*  * @param {Element|Object} elem An element or a document*/
/*  *//* */
/* isXML = Sizzle.isXML = function( elem ) {*/
/* 	// documentElement is verified for cases where it doesn't yet exist*/
/* 	// (such as loading iframes in IE - #4833)*/
/* 	var documentElement = elem && (elem.ownerDocument || elem).documentElement;*/
/* 	return documentElement ? documentElement.nodeName !== "HTML" : false;*/
/* };*/
/* */
/* /***/
/*  * Sets document-related variables once based on the current document*/
/*  * @param {Element|Object} [doc] An element or document object to use to set the document*/
/*  * @returns {Object} Returns the current document*/
/*  *//* */
/* setDocument = Sizzle.setDocument = function( node ) {*/
/* 	var doc = node ? node.ownerDocument || node : preferredDoc;*/
/* */
/* 	// If no document and documentElement is available, return*/
/* 	if ( doc === document || doc.nodeType !== 9 || !doc.documentElement ) {*/
/* 		return document;*/
/* 	}*/
/* */
/* 	// Set our document*/
/* 	document = doc;*/
/* 	docElem = doc.documentElement;*/
/* */
/* 	// Support tests*/
/* 	documentIsXML = isXML( doc );*/
/* */
/* 	// Check if getElementsByTagName("*") returns only elements*/
/* 	support.tagNameNoComments = assert(function( div ) {*/
/* 		div.appendChild( doc.createComment("") );*/
/* 		return !div.getElementsByTagName("*").length;*/
/* 	});*/
/* */
/* 	// Check if attributes should be retrieved by attribute nodes*/
/* 	support.attributes = assert(function( div ) {*/
/* 		div.innerHTML = "<select></select>";*/
/* 		var type = typeof div.lastChild.getAttribute("multiple");*/
/* 		// IE8 returns a string for some attributes even when not present*/
/* 		return type !== "boolean" && type !== "string";*/
/* 	});*/
/* */
/* 	// Check if getElementsByClassName can be trusted*/
/* 	support.getByClassName = assert(function( div ) {*/
/* 		// Opera can't find a second classname (in 9.6)*/
/* 		div.innerHTML = "<div class='hidden e'></div><div class='hidden'></div>";*/
/* 		if ( !div.getElementsByClassName || !div.getElementsByClassName("e").length ) {*/
/* 			return false;*/
/* 		}*/
/* */
/* 		// Safari 3.2 caches class attributes and doesn't catch changes*/
/* 		div.lastChild.className = "e";*/
/* 		return div.getElementsByClassName("e").length === 2;*/
/* 	});*/
/* */
/* 	// Check if getElementById returns elements by name*/
/* 	// Check if getElementsByName privileges form controls or returns elements by ID*/
/* 	support.getByName = assert(function( div ) {*/
/* 		// Inject content*/
/* 		div.id = expando + 0;*/
/* 		div.innerHTML = "<a name='" + expando + "'></a><div name='" + expando + "'></div>";*/
/* 		docElem.insertBefore( div, docElem.firstChild );*/
/* */
/* 		// Test*/
/* 		var pass = doc.getElementsByName &&*/
/* 			// buggy browsers will return fewer than the correct 2*/
/* 			doc.getElementsByName( expando ).length === 2 +*/
/* 			// buggy browsers will return more than the correct 0*/
/* 			doc.getElementsByName( expando + 0 ).length;*/
/* 		support.getIdNotName = !doc.getElementById( expando );*/
/* */
/* 		// Cleanup*/
/* 		docElem.removeChild( div );*/
/* */
/* 		return pass;*/
/* 	});*/
/* */
/* 	// IE6/7 return modified attributes*/
/* 	Expr.attrHandle = assert(function( div ) {*/
/* 		div.innerHTML = "<a href='#'></a>";*/
/* 		return div.firstChild && typeof div.firstChild.getAttribute !== strundefined &&*/
/* 			div.firstChild.getAttribute("href") === "#";*/
/* 	}) ?*/
/* 		{} :*/
/* 		{*/
/* 			"href": function( elem ) {*/
/* 				return elem.getAttribute( "href", 2 );*/
/* 			},*/
/* 			"type": function( elem ) {*/
/* 				return elem.getAttribute("type");*/
/* 			}*/
/* 		};*/
/* */
/* 	// ID find and filter*/
/* 	if ( support.getIdNotName ) {*/
/* 		Expr.find["ID"] = function( id, context ) {*/
/* 			if ( typeof context.getElementById !== strundefined && !documentIsXML ) {*/
/* 				var m = context.getElementById( id );*/
/* 				// Check parentNode to catch when Blackberry 4.6 returns*/
/* 				// nodes that are no longer in the document #6963*/
/* 				return m && m.parentNode ? [m] : [];*/
/* 			}*/
/* 		};*/
/* 		Expr.filter["ID"] = function( id ) {*/
/* 			var attrId = id.replace( runescape, funescape );*/
/* 			return function( elem ) {*/
/* 				return elem.getAttribute("id") === attrId;*/
/* 			};*/
/* 		};*/
/* 	} else {*/
/* 		Expr.find["ID"] = function( id, context ) {*/
/* 			if ( typeof context.getElementById !== strundefined && !documentIsXML ) {*/
/* 				var m = context.getElementById( id );*/
/* */
/* 				return m ?*/
/* 					m.id === id || typeof m.getAttributeNode !== strundefined && m.getAttributeNode("id").value === id ?*/
/* 						[m] :*/
/* 						undefined :*/
/* 					[];*/
/* 			}*/
/* 		};*/
/* 		Expr.filter["ID"] =  function( id ) {*/
/* 			var attrId = id.replace( runescape, funescape );*/
/* 			return function( elem ) {*/
/* 				var node = typeof elem.getAttributeNode !== strundefined && elem.getAttributeNode("id");*/
/* 				return node && node.value === attrId;*/
/* 			};*/
/* 		};*/
/* 	}*/
/* */
/* 	// Tag*/
/* 	Expr.find["TAG"] = support.tagNameNoComments ?*/
/* 		function( tag, context ) {*/
/* 			if ( typeof context.getElementsByTagName !== strundefined ) {*/
/* 				return context.getElementsByTagName( tag );*/
/* 			}*/
/* 		} :*/
/* 		function( tag, context ) {*/
/* 			var elem,*/
/* 				tmp = [],*/
/* 				i = 0,*/
/* 				results = context.getElementsByTagName( tag );*/
/* */
/* 			// Filter out possible comments*/
/* 			if ( tag === "*" ) {*/
/* 				while ( (elem = results[i++]) ) {*/
/* 					if ( elem.nodeType === 1 ) {*/
/* 						tmp.push( elem );*/
/* 					}*/
/* 				}*/
/* */
/* 				return tmp;*/
/* 			}*/
/* 			return results;*/
/* 		};*/
/* */
/* 	// Name*/
/* 	Expr.find["NAME"] = support.getByName && function( tag, context ) {*/
/* 		if ( typeof context.getElementsByName !== strundefined ) {*/
/* 			return context.getElementsByName( name );*/
/* 		}*/
/* 	};*/
/* */
/* 	// Class*/
/* 	Expr.find["CLASS"] = support.getByClassName && function( className, context ) {*/
/* 		if ( typeof context.getElementsByClassName !== strundefined && !documentIsXML ) {*/
/* 			return context.getElementsByClassName( className );*/
/* 		}*/
/* 	};*/
/* */
/* 	// QSA and matchesSelector support*/
/* */
/* 	// matchesSelector(:active) reports false when true (IE9/Opera 11.5)*/
/* 	rbuggyMatches = [];*/
/* */
/* 	// qSa(:focus) reports false when true (Chrome 21),*/
/* 	// no need to also add to buggyMatches since matches checks buggyQSA*/
/* 	// A support test would require too much code (would include document ready)*/
/* 	rbuggyQSA = [ ":focus" ];*/
/* */
/* 	if ( (support.qsa = isNative(doc.querySelectorAll)) ) {*/
/* 		// Build QSA regex*/
/* 		// Regex strategy adopted from Diego Perini*/
/* 		assert(function( div ) {*/
/* 			// Select is set to empty string on purpose*/
/* 			// This is to test IE's treatment of not explictly*/
/* 			// setting a boolean content attribute,*/
/* 			// since its presence should be enough*/
/* 			// http://bugs.jquery.com/ticket/12359*/
/* 			div.innerHTML = "<select><option selected=''></option></select>";*/
/* */
/* 			// IE8 - Some boolean attributes are not treated correctly*/
/* 			if ( !div.querySelectorAll("[selected]").length ) {*/
/* 				rbuggyQSA.push( "\\[" + whitespace + "*(?:checked|disabled|ismap|multiple|readonly|selected|value)" );*/
/* 			}*/
/* */
/* 			// Webkit/Opera - :checked should return selected option elements*/
/* 			// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked*/
/* 			// IE8 throws error here and will not see later tests*/
/* 			if ( !div.querySelectorAll(":checked").length ) {*/
/* 				rbuggyQSA.push(":checked");*/
/* 			}*/
/* 		});*/
/* */
/* 		assert(function( div ) {*/
/* */
/* 			// Opera 10-12/IE8 - ^= $= *= and empty values*/
/* 			// Should not select anything*/
/* 			div.innerHTML = "<input type='hidden' i=''/>";*/
/* 			if ( div.querySelectorAll("[i^='']").length ) {*/
/* 				rbuggyQSA.push( "[*^$]=" + whitespace + "*(?:\"\"|'')" );*/
/* 			}*/
/* */
/* 			// FF 3.5 - :enabled/:disabled and hidden elements (hidden elements are still enabled)*/
/* 			// IE8 throws error here and will not see later tests*/
/* 			if ( !div.querySelectorAll(":enabled").length ) {*/
/* 				rbuggyQSA.push( ":enabled", ":disabled" );*/
/* 			}*/
/* */
/* 			// Opera 10-11 does not throw on post-comma invalid pseudos*/
/* 			div.querySelectorAll("*,:x");*/
/* 			rbuggyQSA.push(",.*:");*/
/* 		});*/
/* 	}*/
/* */
/* 	if ( (support.matchesSelector = isNative( (matches = docElem.matchesSelector ||*/
/* 		docElem.mozMatchesSelector ||*/
/* 		docElem.webkitMatchesSelector ||*/
/* 		docElem.oMatchesSelector ||*/
/* 		docElem.msMatchesSelector) )) ) {*/
/* */
/* 		assert(function( div ) {*/
/* 			// Check to see if it's possible to do matchesSelector*/
/* 			// on a disconnected node (IE 9)*/
/* 			support.disconnectedMatch = matches.call( div, "div" );*/
/* */
/* 			// This should fail with an exception*/
/* 			// Gecko does not error, returns false instead*/
/* 			matches.call( div, "[s!='']:x" );*/
/* 			rbuggyMatches.push( "!=", pseudos );*/
/* 		});*/
/* 	}*/
/* */
/* 	rbuggyQSA = new RegExp( rbuggyQSA.join("|") );*/
/* 	rbuggyMatches = new RegExp( rbuggyMatches.join("|") );*/
/* */
/* 	// Element contains another*/
/* 	// Purposefully does not implement inclusive descendent*/
/* 	// As in, an element does not contain itself*/
/* 	contains = isNative(docElem.contains) || docElem.compareDocumentPosition ?*/
/* 		function( a, b ) {*/
/* 			var adown = a.nodeType === 9 ? a.documentElement : a,*/
/* 				bup = b && b.parentNode;*/
/* 			return a === bup || !!( bup && bup.nodeType === 1 && (*/
/* 				adown.contains ?*/
/* 					adown.contains( bup ) :*/
/* 					a.compareDocumentPosition && a.compareDocumentPosition( bup ) & 16*/
/* 			));*/
/* 		} :*/
/* 		function( a, b ) {*/
/* 			if ( b ) {*/
/* 				while ( (b = b.parentNode) ) {*/
/* 					if ( b === a ) {*/
/* 						return true;*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 			return false;*/
/* 		};*/
/* */
/* 	// Document order sorting*/
/* 	sortOrder = docElem.compareDocumentPosition ?*/
/* 	function( a, b ) {*/
/* 		var compare;*/
/* */
/* 		if ( a === b ) {*/
/* 			hasDuplicate = true;*/
/* 			return 0;*/
/* 		}*/
/* */
/* 		if ( (compare = b.compareDocumentPosition && a.compareDocumentPosition && a.compareDocumentPosition( b )) ) {*/
/* 			if ( compare & 1 || a.parentNode && a.parentNode.nodeType === 11 ) {*/
/* 				if ( a === doc || contains( preferredDoc, a ) ) {*/
/* 					return -1;*/
/* 				}*/
/* 				if ( b === doc || contains( preferredDoc, b ) ) {*/
/* 					return 1;*/
/* 				}*/
/* 				return 0;*/
/* 			}*/
/* 			return compare & 4 ? -1 : 1;*/
/* 		}*/
/* */
/* 		return a.compareDocumentPosition ? -1 : 1;*/
/* 	} :*/
/* 	function( a, b ) {*/
/* 		var cur,*/
/* 			i = 0,*/
/* 			aup = a.parentNode,*/
/* 			bup = b.parentNode,*/
/* 			ap = [ a ],*/
/* 			bp = [ b ];*/
/* */
/* 		// Exit early if the nodes are identical*/
/* 		if ( a === b ) {*/
/* 			hasDuplicate = true;*/
/* 			return 0;*/
/* */
/* 		// Parentless nodes are either documents or disconnected*/
/* 		} else if ( !aup || !bup ) {*/
/* 			return a === doc ? -1 :*/
/* 				b === doc ? 1 :*/
/* 				aup ? -1 :*/
/* 				bup ? 1 :*/
/* 				0;*/
/* */
/* 		// If the nodes are siblings, we can do a quick check*/
/* 		} else if ( aup === bup ) {*/
/* 			return siblingCheck( a, b );*/
/* 		}*/
/* */
/* 		// Otherwise we need full lists of their ancestors for comparison*/
/* 		cur = a;*/
/* 		while ( (cur = cur.parentNode) ) {*/
/* 			ap.unshift( cur );*/
/* 		}*/
/* 		cur = b;*/
/* 		while ( (cur = cur.parentNode) ) {*/
/* 			bp.unshift( cur );*/
/* 		}*/
/* */
/* 		// Walk down the tree looking for a discrepancy*/
/* 		while ( ap[i] === bp[i] ) {*/
/* 			i++;*/
/* 		}*/
/* */
/* 		return i ?*/
/* 			// Do a sibling check if the nodes have a common ancestor*/
/* 			siblingCheck( ap[i], bp[i] ) :*/
/* */
/* 			// Otherwise nodes in our document sort first*/
/* 			ap[i] === preferredDoc ? -1 :*/
/* 			bp[i] === preferredDoc ? 1 :*/
/* 			0;*/
/* 	};*/
/* */
/* 	// Always assume the presence of duplicates if sort doesn't*/
/* 	// pass them to our comparison function (as in Google Chrome).*/
/* 	hasDuplicate = false;*/
/* 	[0, 0].sort( sortOrder );*/
/* 	support.detectDuplicates = hasDuplicate;*/
/* */
/* 	return document;*/
/* };*/
/* */
/* Sizzle.matches = function( expr, elements ) {*/
/* 	return Sizzle( expr, null, null, elements );*/
/* };*/
/* */
/* Sizzle.matchesSelector = function( elem, expr ) {*/
/* 	// Set document vars if needed*/
/* 	if ( ( elem.ownerDocument || elem ) !== document ) {*/
/* 		setDocument( elem );*/
/* 	}*/
/* */
/* 	// Make sure that attribute selectors are quoted*/
/* 	expr = expr.replace( rattributeQuotes, "='$1']" );*/
/* */
/* 	// rbuggyQSA always contains :focus, so no need for an existence check*/
/* 	if ( support.matchesSelector && !documentIsXML && (!rbuggyMatches || !rbuggyMatches.test(expr)) && !rbuggyQSA.test(expr) ) {*/
/* 		try {*/
/* 			var ret = matches.call( elem, expr );*/
/* */
/* 			// IE 9's matchesSelector returns false on disconnected nodes*/
/* 			if ( ret || support.disconnectedMatch ||*/
/* 					// As well, disconnected nodes are said to be in a document*/
/* 					// fragment in IE 9*/
/* 					elem.document && elem.document.nodeType !== 11 ) {*/
/* 				return ret;*/
/* 			}*/
/* 		} catch(e) {}*/
/* 	}*/
/* */
/* 	return Sizzle( expr, document, null, [elem] ).length > 0;*/
/* };*/
/* */
/* Sizzle.contains = function( context, elem ) {*/
/* 	// Set document vars if needed*/
/* 	if ( ( context.ownerDocument || context ) !== document ) {*/
/* 		setDocument( context );*/
/* 	}*/
/* 	return contains( context, elem );*/
/* };*/
/* */
/* Sizzle.attr = function( elem, name ) {*/
/* 	var val;*/
/* */
/* 	// Set document vars if needed*/
/* 	if ( ( elem.ownerDocument || elem ) !== document ) {*/
/* 		setDocument( elem );*/
/* 	}*/
/* */
/* 	if ( !documentIsXML ) {*/
/* 		name = name.toLowerCase();*/
/* 	}*/
/* 	if ( (val = Expr.attrHandle[ name ]) ) {*/
/* 		return val( elem );*/
/* 	}*/
/* 	if ( documentIsXML || support.attributes ) {*/
/* 		return elem.getAttribute( name );*/
/* 	}*/
/* 	return ( (val = elem.getAttributeNode( name )) || elem.getAttribute( name ) ) && elem[ name ] === true ?*/
/* 		name :*/
/* 		val && val.specified ? val.value : null;*/
/* };*/
/* */
/* Sizzle.error = function( msg ) {*/
/* 	throw new Error( "Syntax error, unrecognized expression: " + msg );*/
/* };*/
/* */
/* // Document sorting and removing duplicates*/
/* Sizzle.uniqueSort = function( results ) {*/
/* 	var elem,*/
/* 		duplicates = [],*/
/* 		i = 1,*/
/* 		j = 0;*/
/* */
/* 	// Unless we *know* we can detect duplicates, assume their presence*/
/* 	hasDuplicate = !support.detectDuplicates;*/
/* 	results.sort( sortOrder );*/
/* */
/* 	if ( hasDuplicate ) {*/
/* 		for ( ; (elem = results[i]); i++ ) {*/
/* 			if ( elem === results[ i - 1 ] ) {*/
/* 				j = duplicates.push( i );*/
/* 			}*/
/* 		}*/
/* 		while ( j-- ) {*/
/* 			results.splice( duplicates[ j ], 1 );*/
/* 		}*/
/* 	}*/
/* */
/* 	return results;*/
/* };*/
/* */
/* function siblingCheck( a, b ) {*/
/* 	var cur = b && a,*/
/* 		diff = cur && ( ~b.sourceIndex || MAX_NEGATIVE ) - ( ~a.sourceIndex || MAX_NEGATIVE );*/
/* */
/* 	// Use IE sourceIndex if available on both nodes*/
/* 	if ( diff ) {*/
/* 		return diff;*/
/* 	}*/
/* */
/* 	// Check if b follows a*/
/* 	if ( cur ) {*/
/* 		while ( (cur = cur.nextSibling) ) {*/
/* 			if ( cur === b ) {*/
/* 				return -1;*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	return a ? 1 : -1;*/
/* }*/
/* */
/* // Returns a function to use in pseudos for input types*/
/* function createInputPseudo( type ) {*/
/* 	return function( elem ) {*/
/* 		var name = elem.nodeName.toLowerCase();*/
/* 		return name === "input" && elem.type === type;*/
/* 	};*/
/* }*/
/* */
/* // Returns a function to use in pseudos for buttons*/
/* function createButtonPseudo( type ) {*/
/* 	return function( elem ) {*/
/* 		var name = elem.nodeName.toLowerCase();*/
/* 		return (name === "input" || name === "button") && elem.type === type;*/
/* 	};*/
/* }*/
/* */
/* // Returns a function to use in pseudos for positionals*/
/* function createPositionalPseudo( fn ) {*/
/* 	return markFunction(function( argument ) {*/
/* 		argument = +argument;*/
/* 		return markFunction(function( seed, matches ) {*/
/* 			var j,*/
/* 				matchIndexes = fn( [], seed.length, argument ),*/
/* 				i = matchIndexes.length;*/
/* */
/* 			// Match elements found at the specified indexes*/
/* 			while ( i-- ) {*/
/* 				if ( seed[ (j = matchIndexes[i]) ] ) {*/
/* 					seed[j] = !(matches[j] = seed[j]);*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	});*/
/* }*/
/* */
/* /***/
/*  * Utility function for retrieving the text value of an array of DOM nodes*/
/*  * @param {Array|Element} elem*/
/*  *//* */
/* getText = Sizzle.getText = function( elem ) {*/
/* 	var node,*/
/* 		ret = "",*/
/* 		i = 0,*/
/* 		nodeType = elem.nodeType;*/
/* */
/* 	if ( !nodeType ) {*/
/* 		// If no nodeType, this is expected to be an array*/
/* 		for ( ; (node = elem[i]); i++ ) {*/
/* 			// Do not traverse comment nodes*/
/* 			ret += getText( node );*/
/* 		}*/
/* 	} else if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {*/
/* 		// Use textContent for elements*/
/* 		// innerText usage removed for consistency of new lines (see #11153)*/
/* 		if ( typeof elem.textContent === "string" ) {*/
/* 			return elem.textContent;*/
/* 		} else {*/
/* 			// Traverse its children*/
/* 			for ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {*/
/* 				ret += getText( elem );*/
/* 			}*/
/* 		}*/
/* 	} else if ( nodeType === 3 || nodeType === 4 ) {*/
/* 		return elem.nodeValue;*/
/* 	}*/
/* 	// Do not include comment or processing instruction nodes*/
/* */
/* 	return ret;*/
/* };*/
/* */
/* Expr = Sizzle.selectors = {*/
/* */
/* 	// Can be adjusted by the user*/
/* 	cacheLength: 50,*/
/* */
/* 	createPseudo: markFunction,*/
/* */
/* 	match: matchExpr,*/
/* */
/* 	find: {},*/
/* */
/* 	relative: {*/
/* 		">": { dir: "parentNode", first: true },*/
/* 		" ": { dir: "parentNode" },*/
/* 		"+": { dir: "previousSibling", first: true },*/
/* 		"~": { dir: "previousSibling" }*/
/* 	},*/
/* */
/* 	preFilter: {*/
/* 		"ATTR": function( match ) {*/
/* 			match[1] = match[1].replace( runescape, funescape );*/
/* */
/* 			// Move the given value to match[3] whether quoted or unquoted*/
/* 			match[3] = ( match[4] || match[5] || "" ).replace( runescape, funescape );*/
/* */
/* 			if ( match[2] === "~=" ) {*/
/* 				match[3] = " " + match[3] + " ";*/
/* 			}*/
/* */
/* 			return match.slice( 0, 4 );*/
/* 		},*/
/* */
/* 		"CHILD": function( match ) {*/
/* 			/* matches from matchExpr["CHILD"]*/
/* 				1 type (only|nth|...)*/
/* 				2 what (child|of-type)*/
/* 				3 argument (even|odd|\d*|\d*n([+-]\d+)?|...)*/
/* 				4 xn-component of xn+y argument ([+-]?\d*n|)*/
/* 				5 sign of xn-component*/
/* 				6 x of xn-component*/
/* 				7 sign of y-component*/
/* 				8 y of y-component*/
/* 			*//* */
/* 			match[1] = match[1].toLowerCase();*/
/* */
/* 			if ( match[1].slice( 0, 3 ) === "nth" ) {*/
/* 				// nth-* requires argument*/
/* 				if ( !match[3] ) {*/
/* 					Sizzle.error( match[0] );*/
/* 				}*/
/* */
/* 				// numeric x and y parameters for Expr.filter.CHILD*/
/* 				// remember that false/true cast respectively to 0/1*/
/* 				match[4] = +( match[4] ? match[5] + (match[6] || 1) : 2 * ( match[3] === "even" || match[3] === "odd" ) );*/
/* 				match[5] = +( ( match[7] + match[8] ) || match[3] === "odd" );*/
/* */
/* 			// other types prohibit arguments*/
/* 			} else if ( match[3] ) {*/
/* 				Sizzle.error( match[0] );*/
/* 			}*/
/* */
/* 			return match;*/
/* 		},*/
/* */
/* 		"PSEUDO": function( match ) {*/
/* 			var excess,*/
/* 				unquoted = !match[5] && match[2];*/
/* */
/* 			if ( matchExpr["CHILD"].test( match[0] ) ) {*/
/* 				return null;*/
/* 			}*/
/* */
/* 			// Accept quoted arguments as-is*/
/* 			if ( match[4] ) {*/
/* 				match[2] = match[4];*/
/* */
/* 			// Strip excess characters from unquoted arguments*/
/* 			} else if ( unquoted && rpseudo.test( unquoted ) &&*/
/* 				// Get excess from tokenize (recursively)*/
/* 				(excess = tokenize( unquoted, true )) &&*/
/* 				// advance to the next closing parenthesis*/
/* 				(excess = unquoted.indexOf( ")", unquoted.length - excess ) - unquoted.length) ) {*/
/* */
/* 				// excess is a negative index*/
/* 				match[0] = match[0].slice( 0, excess );*/
/* 				match[2] = unquoted.slice( 0, excess );*/
/* 			}*/
/* */
/* 			// Return only captures needed by the pseudo filter method (type and argument)*/
/* 			return match.slice( 0, 3 );*/
/* 		}*/
/* 	},*/
/* */
/* 	filter: {*/
/* */
/* 		"TAG": function( nodeName ) {*/
/* 			if ( nodeName === "*" ) {*/
/* 				return function() { return true; };*/
/* 			}*/
/* */
/* 			nodeName = nodeName.replace( runescape, funescape ).toLowerCase();*/
/* 			return function( elem ) {*/
/* 				return elem.nodeName && elem.nodeName.toLowerCase() === nodeName;*/
/* 			};*/
/* 		},*/
/* */
/* 		"CLASS": function( className ) {*/
/* 			var pattern = classCache[ className + " " ];*/
/* */
/* 			return pattern ||*/
/* 				(pattern = new RegExp( "(^|" + whitespace + ")" + className + "(" + whitespace + "|$)" )) &&*/
/* 				classCache( className, function( elem ) {*/
/* 					return pattern.test( elem.className || (typeof elem.getAttribute !== strundefined && elem.getAttribute("class")) || "" );*/
/* 				});*/
/* 		},*/
/* */
/* 		"ATTR": function( name, operator, check ) {*/
/* 			return function( elem ) {*/
/* 				var result = Sizzle.attr( elem, name );*/
/* */
/* 				if ( result == null ) {*/
/* 					return operator === "!=";*/
/* 				}*/
/* 				if ( !operator ) {*/
/* 					return true;*/
/* 				}*/
/* */
/* 				result += "";*/
/* */
/* 				return operator === "=" ? result === check :*/
/* 					operator === "!=" ? result !== check :*/
/* 					operator === "^=" ? check && result.indexOf( check ) === 0 :*/
/* 					operator === "*=" ? check && result.indexOf( check ) > -1 :*/
/* 					operator === "$=" ? check && result.slice( -check.length ) === check :*/
/* 					operator === "~=" ? ( " " + result + " " ).indexOf( check ) > -1 :*/
/* 					operator === "|=" ? result === check || result.slice( 0, check.length + 1 ) === check + "-" :*/
/* 					false;*/
/* 			};*/
/* 		},*/
/* */
/* 		"CHILD": function( type, what, argument, first, last ) {*/
/* 			var simple = type.slice( 0, 3 ) !== "nth",*/
/* 				forward = type.slice( -4 ) !== "last",*/
/* 				ofType = what === "of-type";*/
/* */
/* 			return first === 1 && last === 0 ?*/
/* */
/* 				// Shortcut for :nth-*(n)*/
/* 				function( elem ) {*/
/* 					return !!elem.parentNode;*/
/* 				} :*/
/* */
/* 				function( elem, context, xml ) {*/
/* 					var cache, outerCache, node, diff, nodeIndex, start,*/
/* 						dir = simple !== forward ? "nextSibling" : "previousSibling",*/
/* 						parent = elem.parentNode,*/
/* 						name = ofType && elem.nodeName.toLowerCase(),*/
/* 						useCache = !xml && !ofType;*/
/* */
/* 					if ( parent ) {*/
/* */
/* 						// :(first|last|only)-(child|of-type)*/
/* 						if ( simple ) {*/
/* 							while ( dir ) {*/
/* 								node = elem;*/
/* 								while ( (node = node[ dir ]) ) {*/
/* 									if ( ofType ? node.nodeName.toLowerCase() === name : node.nodeType === 1 ) {*/
/* 										return false;*/
/* 									}*/
/* 								}*/
/* 								// Reverse direction for :only-* (if we haven't yet done so)*/
/* 								start = dir = type === "only" && !start && "nextSibling";*/
/* 							}*/
/* 							return true;*/
/* 						}*/
/* */
/* 						start = [ forward ? parent.firstChild : parent.lastChild ];*/
/* */
/* 						// non-xml :nth-child(...) stores cache data on `parent`*/
/* 						if ( forward && useCache ) {*/
/* 							// Seek `elem` from a previously-cached index*/
/* 							outerCache = parent[ expando ] || (parent[ expando ] = {});*/
/* 							cache = outerCache[ type ] || [];*/
/* 							nodeIndex = cache[0] === dirruns && cache[1];*/
/* 							diff = cache[0] === dirruns && cache[2];*/
/* 							node = nodeIndex && parent.childNodes[ nodeIndex ];*/
/* */
/* 							while ( (node = ++nodeIndex && node && node[ dir ] ||*/
/* */
/* 								// Fallback to seeking `elem` from the start*/
/* 								(diff = nodeIndex = 0) || start.pop()) ) {*/
/* */
/* 								// When found, cache indexes on `parent` and break*/
/* 								if ( node.nodeType === 1 && ++diff && node === elem ) {*/
/* 									outerCache[ type ] = [ dirruns, nodeIndex, diff ];*/
/* 									break;*/
/* 								}*/
/* 							}*/
/* */
/* 						// Use previously-cached element index if available*/
/* 						} else if ( useCache && (cache = (elem[ expando ] || (elem[ expando ] = {}))[ type ]) && cache[0] === dirruns ) {*/
/* 							diff = cache[1];*/
/* */
/* 						// xml :nth-child(...) or :nth-last-child(...) or :nth(-last)?-of-type(...)*/
/* 						} else {*/
/* 							// Use the same loop as above to seek `elem` from the start*/
/* 							while ( (node = ++nodeIndex && node && node[ dir ] ||*/
/* 								(diff = nodeIndex = 0) || start.pop()) ) {*/
/* */
/* 								if ( ( ofType ? node.nodeName.toLowerCase() === name : node.nodeType === 1 ) && ++diff ) {*/
/* 									// Cache the index of each encountered element*/
/* 									if ( useCache ) {*/
/* 										(node[ expando ] || (node[ expando ] = {}))[ type ] = [ dirruns, diff ];*/
/* 									}*/
/* */
/* 									if ( node === elem ) {*/
/* 										break;*/
/* 									}*/
/* 								}*/
/* 							}*/
/* 						}*/
/* */
/* 						// Incorporate the offset, then check against cycle size*/
/* 						diff -= last;*/
/* 						return diff === first || ( diff % first === 0 && diff / first >= 0 );*/
/* 					}*/
/* 				};*/
/* 		},*/
/* */
/* 		"PSEUDO": function( pseudo, argument ) {*/
/* 			// pseudo-class names are case-insensitive*/
/* 			// http://www.w3.org/TR/selectors/#pseudo-classes*/
/* 			// Prioritize by case sensitivity in case custom pseudos are added with uppercase letters*/
/* 			// Remember that setFilters inherits from pseudos*/
/* 			var args,*/
/* 				fn = Expr.pseudos[ pseudo ] || Expr.setFilters[ pseudo.toLowerCase() ] ||*/
/* 					Sizzle.error( "unsupported pseudo: " + pseudo );*/
/* */
/* 			// The user may use createPseudo to indicate that*/
/* 			// arguments are needed to create the filter function*/
/* 			// just as Sizzle does*/
/* 			if ( fn[ expando ] ) {*/
/* 				return fn( argument );*/
/* 			}*/
/* */
/* 			// But maintain support for old signatures*/
/* 			if ( fn.length > 1 ) {*/
/* 				args = [ pseudo, pseudo, "", argument ];*/
/* 				return Expr.setFilters.hasOwnProperty( pseudo.toLowerCase() ) ?*/
/* 					markFunction(function( seed, matches ) {*/
/* 						var idx,*/
/* 							matched = fn( seed, argument ),*/
/* 							i = matched.length;*/
/* 						while ( i-- ) {*/
/* 							idx = indexOf.call( seed, matched[i] );*/
/* 							seed[ idx ] = !( matches[ idx ] = matched[i] );*/
/* 						}*/
/* 					}) :*/
/* 					function( elem ) {*/
/* 						return fn( elem, 0, args );*/
/* 					};*/
/* 			}*/
/* */
/* 			return fn;*/
/* 		}*/
/* 	},*/
/* */
/* 	pseudos: {*/
/* 		// Potentially complex pseudos*/
/* 		"not": markFunction(function( selector ) {*/
/* 			// Trim the selector passed to compile*/
/* 			// to avoid treating leading and trailing*/
/* 			// spaces as combinators*/
/* 			var input = [],*/
/* 				results = [],*/
/* 				matcher = compile( selector.replace( rtrim, "$1" ) );*/
/* */
/* 			return matcher[ expando ] ?*/
/* 				markFunction(function( seed, matches, context, xml ) {*/
/* 					var elem,*/
/* 						unmatched = matcher( seed, null, xml, [] ),*/
/* 						i = seed.length;*/
/* */
/* 					// Match elements unmatched by `matcher`*/
/* 					while ( i-- ) {*/
/* 						if ( (elem = unmatched[i]) ) {*/
/* 							seed[i] = !(matches[i] = elem);*/
/* 						}*/
/* 					}*/
/* 				}) :*/
/* 				function( elem, context, xml ) {*/
/* 					input[0] = elem;*/
/* 					matcher( input, null, xml, results );*/
/* 					return !results.pop();*/
/* 				};*/
/* 		}),*/
/* */
/* 		"has": markFunction(function( selector ) {*/
/* 			return function( elem ) {*/
/* 				return Sizzle( selector, elem ).length > 0;*/
/* 			};*/
/* 		}),*/
/* */
/* 		"contains": markFunction(function( text ) {*/
/* 			return function( elem ) {*/
/* 				return ( elem.textContent || elem.innerText || getText( elem ) ).indexOf( text ) > -1;*/
/* 			};*/
/* 		}),*/
/* */
/* 		// "Whether an element is represented by a :lang() selector*/
/* 		// is based solely on the element's language value*/
/* 		// being equal to the identifier C,*/
/* 		// or beginning with the identifier C immediately followed by "-".*/
/* 		// The matching of C against the element's language value is performed case-insensitively.*/
/* 		// The identifier C does not have to be a valid language name."*/
/* 		// http://www.w3.org/TR/selectors/#lang-pseudo*/
/* 		"lang": markFunction( function( lang ) {*/
/* 			// lang value must be a valid identifider*/
/* 			if ( !ridentifier.test(lang || "") ) {*/
/* 				Sizzle.error( "unsupported lang: " + lang );*/
/* 			}*/
/* 			lang = lang.replace( runescape, funescape ).toLowerCase();*/
/* 			return function( elem ) {*/
/* 				var elemLang;*/
/* 				do {*/
/* 					if ( (elemLang = documentIsXML ?*/
/* 						elem.getAttribute("xml:lang") || elem.getAttribute("lang") :*/
/* 						elem.lang) ) {*/
/* */
/* 						elemLang = elemLang.toLowerCase();*/
/* 						return elemLang === lang || elemLang.indexOf( lang + "-" ) === 0;*/
/* 					}*/
/* 				} while ( (elem = elem.parentNode) && elem.nodeType === 1 );*/
/* 				return false;*/
/* 			};*/
/* 		}),*/
/* */
/* 		// Miscellaneous*/
/* 		"target": function( elem ) {*/
/* 			var hash = window.location && window.location.hash;*/
/* 			return hash && hash.slice( 1 ) === elem.id;*/
/* 		},*/
/* */
/* 		"root": function( elem ) {*/
/* 			return elem === docElem;*/
/* 		},*/
/* */
/* 		"focus": function( elem ) {*/
/* 			return elem === document.activeElement && (!document.hasFocus || document.hasFocus()) && !!(elem.type || elem.href || ~elem.tabIndex);*/
/* 		},*/
/* */
/* 		// Boolean properties*/
/* 		"enabled": function( elem ) {*/
/* 			return elem.disabled === false;*/
/* 		},*/
/* */
/* 		"disabled": function( elem ) {*/
/* 			return elem.disabled === true;*/
/* 		},*/
/* */
/* 		"checked": function( elem ) {*/
/* 			// In CSS3, :checked should return both checked and selected elements*/
/* 			// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked*/
/* 			var nodeName = elem.nodeName.toLowerCase();*/
/* 			return (nodeName === "input" && !!elem.checked) || (nodeName === "option" && !!elem.selected);*/
/* 		},*/
/* */
/* 		"selected": function( elem ) {*/
/* 			// Accessing this property makes selected-by-default*/
/* 			// options in Safari work properly*/
/* 			if ( elem.parentNode ) {*/
/* 				elem.parentNode.selectedIndex;*/
/* 			}*/
/* */
/* 			return elem.selected === true;*/
/* 		},*/
/* */
/* 		// Contents*/
/* 		"empty": function( elem ) {*/
/* 			// http://www.w3.org/TR/selectors/#empty-pseudo*/
/* 			// :empty is only affected by element nodes and content nodes(including text(3), cdata(4)),*/
/* 			//   not comment, processing instructions, or others*/
/* 			// Thanks to Diego Perini for the nodeName shortcut*/
/* 			//   Greater than "@" means alpha characters (specifically not starting with "#" or "?")*/
/* 			for ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {*/
/* 				if ( elem.nodeName > "@" || elem.nodeType === 3 || elem.nodeType === 4 ) {*/
/* 					return false;*/
/* 				}*/
/* 			}*/
/* 			return true;*/
/* 		},*/
/* */
/* 		"parent": function( elem ) {*/
/* 			return !Expr.pseudos["empty"]( elem );*/
/* 		},*/
/* */
/* 		// Element/input types*/
/* 		"header": function( elem ) {*/
/* 			return rheader.test( elem.nodeName );*/
/* 		},*/
/* */
/* 		"input": function( elem ) {*/
/* 			return rinputs.test( elem.nodeName );*/
/* 		},*/
/* */
/* 		"button": function( elem ) {*/
/* 			var name = elem.nodeName.toLowerCase();*/
/* 			return name === "input" && elem.type === "button" || name === "button";*/
/* 		},*/
/* */
/* 		"text": function( elem ) {*/
/* 			var attr;*/
/* 			// IE6 and 7 will map elem.type to 'text' for new HTML5 types (search, etc)*/
/* 			// use getAttribute instead to test this case*/
/* 			return elem.nodeName.toLowerCase() === "input" &&*/
/* 				elem.type === "text" &&*/
/* 				( (attr = elem.getAttribute("type")) == null || attr.toLowerCase() === elem.type );*/
/* 		},*/
/* */
/* 		// Position-in-collection*/
/* 		"first": createPositionalPseudo(function() {*/
/* 			return [ 0 ];*/
/* 		}),*/
/* */
/* 		"last": createPositionalPseudo(function( matchIndexes, length ) {*/
/* 			return [ length - 1 ];*/
/* 		}),*/
/* */
/* 		"eq": createPositionalPseudo(function( matchIndexes, length, argument ) {*/
/* 			return [ argument < 0 ? argument + length : argument ];*/
/* 		}),*/
/* */
/* 		"even": createPositionalPseudo(function( matchIndexes, length ) {*/
/* 			var i = 0;*/
/* 			for ( ; i < length; i += 2 ) {*/
/* 				matchIndexes.push( i );*/
/* 			}*/
/* 			return matchIndexes;*/
/* 		}),*/
/* */
/* 		"odd": createPositionalPseudo(function( matchIndexes, length ) {*/
/* 			var i = 1;*/
/* 			for ( ; i < length; i += 2 ) {*/
/* 				matchIndexes.push( i );*/
/* 			}*/
/* 			return matchIndexes;*/
/* 		}),*/
/* */
/* 		"lt": createPositionalPseudo(function( matchIndexes, length, argument ) {*/
/* 			var i = argument < 0 ? argument + length : argument;*/
/* 			for ( ; --i >= 0; ) {*/
/* 				matchIndexes.push( i );*/
/* 			}*/
/* 			return matchIndexes;*/
/* 		}),*/
/* */
/* 		"gt": createPositionalPseudo(function( matchIndexes, length, argument ) {*/
/* 			var i = argument < 0 ? argument + length : argument;*/
/* 			for ( ; ++i < length; ) {*/
/* 				matchIndexes.push( i );*/
/* 			}*/
/* 			return matchIndexes;*/
/* 		})*/
/* 	}*/
/* };*/
/* */
/* // Add button/input type pseudos*/
/* for ( i in { radio: true, checkbox: true, file: true, password: true, image: true } ) {*/
/* 	Expr.pseudos[ i ] = createInputPseudo( i );*/
/* }*/
/* for ( i in { submit: true, reset: true } ) {*/
/* 	Expr.pseudos[ i ] = createButtonPseudo( i );*/
/* }*/
/* */
/* function tokenize( selector, parseOnly ) {*/
/* 	var matched, match, tokens, type,*/
/* 		soFar, groups, preFilters,*/
/* 		cached = tokenCache[ selector + " " ];*/
/* */
/* 	if ( cached ) {*/
/* 		return parseOnly ? 0 : cached.slice( 0 );*/
/* 	}*/
/* */
/* 	soFar = selector;*/
/* 	groups = [];*/
/* 	preFilters = Expr.preFilter;*/
/* */
/* 	while ( soFar ) {*/
/* */
/* 		// Comma and first run*/
/* 		if ( !matched || (match = rcomma.exec( soFar )) ) {*/
/* 			if ( match ) {*/
/* 				// Don't consume trailing commas as valid*/
/* 				soFar = soFar.slice( match[0].length ) || soFar;*/
/* 			}*/
/* 			groups.push( tokens = [] );*/
/* 		}*/
/* */
/* 		matched = false;*/
/* */
/* 		// Combinators*/
/* 		if ( (match = rcombinators.exec( soFar )) ) {*/
/* 			matched = match.shift();*/
/* 			tokens.push( {*/
/* 				value: matched,*/
/* 				// Cast descendant combinators to space*/
/* 				type: match[0].replace( rtrim, " " )*/
/* 			} );*/
/* 			soFar = soFar.slice( matched.length );*/
/* 		}*/
/* */
/* 		// Filters*/
/* 		for ( type in Expr.filter ) {*/
/* 			if ( (match = matchExpr[ type ].exec( soFar )) && (!preFilters[ type ] ||*/
/* 				(match = preFilters[ type ]( match ))) ) {*/
/* 				matched = match.shift();*/
/* 				tokens.push( {*/
/* 					value: matched,*/
/* 					type: type,*/
/* 					matches: match*/
/* 				} );*/
/* 				soFar = soFar.slice( matched.length );*/
/* 			}*/
/* 		}*/
/* */
/* 		if ( !matched ) {*/
/* 			break;*/
/* 		}*/
/* 	}*/
/* */
/* 	// Return the length of the invalid excess*/
/* 	// if we're just parsing*/
/* 	// Otherwise, throw an error or return tokens*/
/* 	return parseOnly ?*/
/* 		soFar.length :*/
/* 		soFar ?*/
/* 			Sizzle.error( selector ) :*/
/* 			// Cache the tokens*/
/* 			tokenCache( selector, groups ).slice( 0 );*/
/* }*/
/* */
/* function toSelector( tokens ) {*/
/* 	var i = 0,*/
/* 		len = tokens.length,*/
/* 		selector = "";*/
/* 	for ( ; i < len; i++ ) {*/
/* 		selector += tokens[i].value;*/
/* 	}*/
/* 	return selector;*/
/* }*/
/* */
/* function addCombinator( matcher, combinator, base ) {*/
/* 	var dir = combinator.dir,*/
/* 		checkNonElements = base && dir === "parentNode",*/
/* 		doneName = done++;*/
/* */
/* 	return combinator.first ?*/
/* 		// Check against closest ancestor/preceding element*/
/* 		function( elem, context, xml ) {*/
/* 			while ( (elem = elem[ dir ]) ) {*/
/* 				if ( elem.nodeType === 1 || checkNonElements ) {*/
/* 					return matcher( elem, context, xml );*/
/* 				}*/
/* 			}*/
/* 		} :*/
/* */
/* 		// Check against all ancestor/preceding elements*/
/* 		function( elem, context, xml ) {*/
/* 			var data, cache, outerCache,*/
/* 				dirkey = dirruns + " " + doneName;*/
/* */
/* 			// We can't set arbitrary data on XML nodes, so they don't benefit from dir caching*/
/* 			if ( xml ) {*/
/* 				while ( (elem = elem[ dir ]) ) {*/
/* 					if ( elem.nodeType === 1 || checkNonElements ) {*/
/* 						if ( matcher( elem, context, xml ) ) {*/
/* 							return true;*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			} else {*/
/* 				while ( (elem = elem[ dir ]) ) {*/
/* 					if ( elem.nodeType === 1 || checkNonElements ) {*/
/* 						outerCache = elem[ expando ] || (elem[ expando ] = {});*/
/* 						if ( (cache = outerCache[ dir ]) && cache[0] === dirkey ) {*/
/* 							if ( (data = cache[1]) === true || data === cachedruns ) {*/
/* 								return data === true;*/
/* 							}*/
/* 						} else {*/
/* 							cache = outerCache[ dir ] = [ dirkey ];*/
/* 							cache[1] = matcher( elem, context, xml ) || cachedruns;*/
/* 							if ( cache[1] === true ) {*/
/* 								return true;*/
/* 							}*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		};*/
/* }*/
/* */
/* function elementMatcher( matchers ) {*/
/* 	return matchers.length > 1 ?*/
/* 		function( elem, context, xml ) {*/
/* 			var i = matchers.length;*/
/* 			while ( i-- ) {*/
/* 				if ( !matchers[i]( elem, context, xml ) ) {*/
/* 					return false;*/
/* 				}*/
/* 			}*/
/* 			return true;*/
/* 		} :*/
/* 		matchers[0];*/
/* }*/
/* */
/* function condense( unmatched, map, filter, context, xml ) {*/
/* 	var elem,*/
/* 		newUnmatched = [],*/
/* 		i = 0,*/
/* 		len = unmatched.length,*/
/* 		mapped = map != null;*/
/* */
/* 	for ( ; i < len; i++ ) {*/
/* 		if ( (elem = unmatched[i]) ) {*/
/* 			if ( !filter || filter( elem, context, xml ) ) {*/
/* 				newUnmatched.push( elem );*/
/* 				if ( mapped ) {*/
/* 					map.push( i );*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	return newUnmatched;*/
/* }*/
/* */
/* function setMatcher( preFilter, selector, matcher, postFilter, postFinder, postSelector ) {*/
/* 	if ( postFilter && !postFilter[ expando ] ) {*/
/* 		postFilter = setMatcher( postFilter );*/
/* 	}*/
/* 	if ( postFinder && !postFinder[ expando ] ) {*/
/* 		postFinder = setMatcher( postFinder, postSelector );*/
/* 	}*/
/* 	return markFunction(function( seed, results, context, xml ) {*/
/* 		var temp, i, elem,*/
/* 			preMap = [],*/
/* 			postMap = [],*/
/* 			preexisting = results.length,*/
/* */
/* 			// Get initial elements from seed or context*/
/* 			elems = seed || multipleContexts( selector || "*", context.nodeType ? [ context ] : context, [] ),*/
/* */
/* 			// Prefilter to get matcher input, preserving a map for seed-results synchronization*/
/* 			matcherIn = preFilter && ( seed || !selector ) ?*/
/* 				condense( elems, preMap, preFilter, context, xml ) :*/
/* 				elems,*/
/* */
/* 			matcherOut = matcher ?*/
/* 				// If we have a postFinder, or filtered seed, or non-seed postFilter or preexisting results,*/
/* 				postFinder || ( seed ? preFilter : preexisting || postFilter ) ?*/
/* */
/* 					// ...intermediate processing is necessary*/
/* 					[] :*/
/* */
/* 					// ...otherwise use results directly*/
/* 					results :*/
/* 				matcherIn;*/
/* */
/* 		// Find primary matches*/
/* 		if ( matcher ) {*/
/* 			matcher( matcherIn, matcherOut, context, xml );*/
/* 		}*/
/* */
/* 		// Apply postFilter*/
/* 		if ( postFilter ) {*/
/* 			temp = condense( matcherOut, postMap );*/
/* 			postFilter( temp, [], context, xml );*/
/* */
/* 			// Un-match failing elements by moving them back to matcherIn*/
/* 			i = temp.length;*/
/* 			while ( i-- ) {*/
/* 				if ( (elem = temp[i]) ) {*/
/* 					matcherOut[ postMap[i] ] = !(matcherIn[ postMap[i] ] = elem);*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		if ( seed ) {*/
/* 			if ( postFinder || preFilter ) {*/
/* 				if ( postFinder ) {*/
/* 					// Get the final matcherOut by condensing this intermediate into postFinder contexts*/
/* 					temp = [];*/
/* 					i = matcherOut.length;*/
/* 					while ( i-- ) {*/
/* 						if ( (elem = matcherOut[i]) ) {*/
/* 							// Restore matcherIn since elem is not yet a final match*/
/* 							temp.push( (matcherIn[i] = elem) );*/
/* 						}*/
/* 					}*/
/* 					postFinder( null, (matcherOut = []), temp, xml );*/
/* 				}*/
/* */
/* 				// Move matched elements from seed to results to keep them synchronized*/
/* 				i = matcherOut.length;*/
/* 				while ( i-- ) {*/
/* 					if ( (elem = matcherOut[i]) &&*/
/* 						(temp = postFinder ? indexOf.call( seed, elem ) : preMap[i]) > -1 ) {*/
/* */
/* 						seed[temp] = !(results[temp] = elem);*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 		// Add elements to results, through postFinder if defined*/
/* 		} else {*/
/* 			matcherOut = condense(*/
/* 				matcherOut === results ?*/
/* 					matcherOut.splice( preexisting, matcherOut.length ) :*/
/* 					matcherOut*/
/* 			);*/
/* 			if ( postFinder ) {*/
/* 				postFinder( null, results, matcherOut, xml );*/
/* 			} else {*/
/* 				push.apply( results, matcherOut );*/
/* 			}*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* function matcherFromTokens( tokens ) {*/
/* 	var checkContext, matcher, j,*/
/* 		len = tokens.length,*/
/* 		leadingRelative = Expr.relative[ tokens[0].type ],*/
/* 		implicitRelative = leadingRelative || Expr.relative[" "],*/
/* 		i = leadingRelative ? 1 : 0,*/
/* */
/* 		// The foundational matcher ensures that elements are reachable from top-level context(s)*/
/* 		matchContext = addCombinator( function( elem ) {*/
/* 			return elem === checkContext;*/
/* 		}, implicitRelative, true ),*/
/* 		matchAnyContext = addCombinator( function( elem ) {*/
/* 			return indexOf.call( checkContext, elem ) > -1;*/
/* 		}, implicitRelative, true ),*/
/* 		matchers = [ function( elem, context, xml ) {*/
/* 			return ( !leadingRelative && ( xml || context !== outermostContext ) ) || (*/
/* 				(checkContext = context).nodeType ?*/
/* 					matchContext( elem, context, xml ) :*/
/* 					matchAnyContext( elem, context, xml ) );*/
/* 		} ];*/
/* */
/* 	for ( ; i < len; i++ ) {*/
/* 		if ( (matcher = Expr.relative[ tokens[i].type ]) ) {*/
/* 			matchers = [ addCombinator(elementMatcher( matchers ), matcher) ];*/
/* 		} else {*/
/* 			matcher = Expr.filter[ tokens[i].type ].apply( null, tokens[i].matches );*/
/* */
/* 			// Return special upon seeing a positional matcher*/
/* 			if ( matcher[ expando ] ) {*/
/* 				// Find the next relative operator (if any) for proper handling*/
/* 				j = ++i;*/
/* 				for ( ; j < len; j++ ) {*/
/* 					if ( Expr.relative[ tokens[j].type ] ) {*/
/* 						break;*/
/* 					}*/
/* 				}*/
/* 				return setMatcher(*/
/* 					i > 1 && elementMatcher( matchers ),*/
/* 					i > 1 && toSelector( tokens.slice( 0, i - 1 ) ).replace( rtrim, "$1" ),*/
/* 					matcher,*/
/* 					i < j && matcherFromTokens( tokens.slice( i, j ) ),*/
/* 					j < len && matcherFromTokens( (tokens = tokens.slice( j )) ),*/
/* 					j < len && toSelector( tokens )*/
/* 				);*/
/* 			}*/
/* 			matchers.push( matcher );*/
/* 		}*/
/* 	}*/
/* */
/* 	return elementMatcher( matchers );*/
/* }*/
/* */
/* function matcherFromGroupMatchers( elementMatchers, setMatchers ) {*/
/* 	// A counter to specify which element is currently being matched*/
/* 	var matcherCachedRuns = 0,*/
/* 		bySet = setMatchers.length > 0,*/
/* 		byElement = elementMatchers.length > 0,*/
/* 		superMatcher = function( seed, context, xml, results, expandContext ) {*/
/* 			var elem, j, matcher,*/
/* 				setMatched = [],*/
/* 				matchedCount = 0,*/
/* 				i = "0",*/
/* 				unmatched = seed && [],*/
/* 				outermost = expandContext != null,*/
/* 				contextBackup = outermostContext,*/
/* 				// We must always have either seed elements or context*/
/* 				elems = seed || byElement && Expr.find["TAG"]( "*", expandContext && context.parentNode || context ),*/
/* 				// Use integer dirruns iff this is the outermost matcher*/
/* 				dirrunsUnique = (dirruns += contextBackup == null ? 1 : Math.random() || 0.1);*/
/* */
/* 			if ( outermost ) {*/
/* 				outermostContext = context !== document && context;*/
/* 				cachedruns = matcherCachedRuns;*/
/* 			}*/
/* */
/* 			// Add elements passing elementMatchers directly to results*/
/* 			// Keep `i` a string if there are no elements so `matchedCount` will be "00" below*/
/* 			for ( ; (elem = elems[i]) != null; i++ ) {*/
/* 				if ( byElement && elem ) {*/
/* 					j = 0;*/
/* 					while ( (matcher = elementMatchers[j++]) ) {*/
/* 						if ( matcher( elem, context, xml ) ) {*/
/* 							results.push( elem );*/
/* 							break;*/
/* 						}*/
/* 					}*/
/* 					if ( outermost ) {*/
/* 						dirruns = dirrunsUnique;*/
/* 						cachedruns = ++matcherCachedRuns;*/
/* 					}*/
/* 				}*/
/* */
/* 				// Track unmatched elements for set filters*/
/* 				if ( bySet ) {*/
/* 					// They will have gone through all possible matchers*/
/* 					if ( (elem = !matcher && elem) ) {*/
/* 						matchedCount--;*/
/* 					}*/
/* */
/* 					// Lengthen the array for every element, matched or not*/
/* 					if ( seed ) {*/
/* 						unmatched.push( elem );*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			// Apply set filters to unmatched elements*/
/* 			matchedCount += i;*/
/* 			if ( bySet && i !== matchedCount ) {*/
/* 				j = 0;*/
/* 				while ( (matcher = setMatchers[j++]) ) {*/
/* 					matcher( unmatched, setMatched, context, xml );*/
/* 				}*/
/* */
/* 				if ( seed ) {*/
/* 					// Reintegrate element matches to eliminate the need for sorting*/
/* 					if ( matchedCount > 0 ) {*/
/* 						while ( i-- ) {*/
/* 							if ( !(unmatched[i] || setMatched[i]) ) {*/
/* 								setMatched[i] = pop.call( results );*/
/* 							}*/
/* 						}*/
/* 					}*/
/* */
/* 					// Discard index placeholder values to get only actual matches*/
/* 					setMatched = condense( setMatched );*/
/* 				}*/
/* */
/* 				// Add matches to results*/
/* 				push.apply( results, setMatched );*/
/* */
/* 				// Seedless set matches succeeding multiple successful matchers stipulate sorting*/
/* 				if ( outermost && !seed && setMatched.length > 0 &&*/
/* 					( matchedCount + setMatchers.length ) > 1 ) {*/
/* */
/* 					Sizzle.uniqueSort( results );*/
/* 				}*/
/* 			}*/
/* */
/* 			// Override manipulation of globals by nested matchers*/
/* 			if ( outermost ) {*/
/* 				dirruns = dirrunsUnique;*/
/* 				outermostContext = contextBackup;*/
/* 			}*/
/* */
/* 			return unmatched;*/
/* 		};*/
/* */
/* 	return bySet ?*/
/* 		markFunction( superMatcher ) :*/
/* 		superMatcher;*/
/* }*/
/* */
/* compile = Sizzle.compile = function( selector, group /* Internal Use Only *//*  ) {*/
/* 	var i,*/
/* 		setMatchers = [],*/
/* 		elementMatchers = [],*/
/* 		cached = compilerCache[ selector + " " ];*/
/* */
/* 	if ( !cached ) {*/
/* 		// Generate a function of recursive functions that can be used to check each element*/
/* 		if ( !group ) {*/
/* 			group = tokenize( selector );*/
/* 		}*/
/* 		i = group.length;*/
/* 		while ( i-- ) {*/
/* 			cached = matcherFromTokens( group[i] );*/
/* 			if ( cached[ expando ] ) {*/
/* 				setMatchers.push( cached );*/
/* 			} else {*/
/* 				elementMatchers.push( cached );*/
/* 			}*/
/* 		}*/
/* */
/* 		// Cache the compiled function*/
/* 		cached = compilerCache( selector, matcherFromGroupMatchers( elementMatchers, setMatchers ) );*/
/* 	}*/
/* 	return cached;*/
/* };*/
/* */
/* function multipleContexts( selector, contexts, results ) {*/
/* 	var i = 0,*/
/* 		len = contexts.length;*/
/* 	for ( ; i < len; i++ ) {*/
/* 		Sizzle( selector, contexts[i], results );*/
/* 	}*/
/* 	return results;*/
/* }*/
/* */
/* function select( selector, context, results, seed ) {*/
/* 	var i, tokens, token, type, find,*/
/* 		match = tokenize( selector );*/
/* */
/* 	if ( !seed ) {*/
/* 		// Try to minimize operations if there is only one group*/
/* 		if ( match.length === 1 ) {*/
/* */
/* 			// Take a shortcut and set the context if the root selector is an ID*/
/* 			tokens = match[0] = match[0].slice( 0 );*/
/* 			if ( tokens.length > 2 && (token = tokens[0]).type === "ID" &&*/
/* 					context.nodeType === 9 && !documentIsXML &&*/
/* 					Expr.relative[ tokens[1].type ] ) {*/
/* */
/* 				context = Expr.find["ID"]( token.matches[0].replace( runescape, funescape ), context )[0];*/
/* 				if ( !context ) {*/
/* 					return results;*/
/* 				}*/
/* */
/* 				selector = selector.slice( tokens.shift().value.length );*/
/* 			}*/
/* */
/* 			// Fetch a seed set for right-to-left matching*/
/* 			i = matchExpr["needsContext"].test( selector ) ? 0 : tokens.length;*/
/* 			while ( i-- ) {*/
/* 				token = tokens[i];*/
/* */
/* 				// Abort if we hit a combinator*/
/* 				if ( Expr.relative[ (type = token.type) ] ) {*/
/* 					break;*/
/* 				}*/
/* 				if ( (find = Expr.find[ type ]) ) {*/
/* 					// Search, expanding context for leading sibling combinators*/
/* 					if ( (seed = find(*/
/* 						token.matches[0].replace( runescape, funescape ),*/
/* 						rsibling.test( tokens[0].type ) && context.parentNode || context*/
/* 					)) ) {*/
/* */
/* 						// If seed is empty or no tokens remain, we can return early*/
/* 						tokens.splice( i, 1 );*/
/* 						selector = seed.length && toSelector( tokens );*/
/* 						if ( !selector ) {*/
/* 							push.apply( results, slice.call( seed, 0 ) );*/
/* 							return results;*/
/* 						}*/
/* */
/* 						break;*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	// Compile and execute a filtering function*/
/* 	// Provide `match` to avoid retokenization if we modified the selector above*/
/* 	compile( selector, match )(*/
/* 		seed,*/
/* 		context,*/
/* 		documentIsXML,*/
/* 		results,*/
/* 		rsibling.test( selector )*/
/* 	);*/
/* 	return results;*/
/* }*/
/* */
/* // Deprecated*/
/* Expr.pseudos["nth"] = Expr.pseudos["eq"];*/
/* */
/* // Easy API for creating new setFilters*/
/* function setFilters() {}*/
/* Expr.filters = setFilters.prototype = Expr.pseudos;*/
/* Expr.setFilters = new setFilters();*/
/* */
/* // Initialize with the default document*/
/* setDocument();*/
/* */
/* // Override sizzle attribute retrieval*/
/* Sizzle.attr = jQuery.attr;*/
/* jQuery.find = Sizzle;*/
/* jQuery.expr = Sizzle.selectors;*/
/* jQuery.expr[":"] = jQuery.expr.pseudos;*/
/* jQuery.unique = Sizzle.uniqueSort;*/
/* jQuery.text = Sizzle.getText;*/
/* jQuery.isXMLDoc = Sizzle.isXML;*/
/* jQuery.contains = Sizzle.contains;*/
/* */
/* */
/* })( window );*/
/* var runtil = /Until$/,*/
/* 	rparentsprev = /^(?:parents|prev(?:Until|All))/,*/
/* 	isSimple = /^.[^:#\[\.,]*$/,*/
/* 	rneedsContext = jQuery.expr.match.needsContext,*/
/* 	// methods guaranteed to produce a unique set when starting from a unique set*/
/* 	guaranteedUnique = {*/
/* 		children: true,*/
/* 		contents: true,*/
/* 		next: true,*/
/* 		prev: true*/
/* 	};*/
/* */
/* jQuery.fn.extend({*/
/* 	find: function( selector ) {*/
/* 		var i, ret, self,*/
/* 			len = this.length;*/
/* */
/* 		if ( typeof selector !== "string" ) {*/
/* 			self = this;*/
/* 			return this.pushStack( jQuery( selector ).filter(function() {*/
/* 				for ( i = 0; i < len; i++ ) {*/
/* 					if ( jQuery.contains( self[ i ], this ) ) {*/
/* 						return true;*/
/* 					}*/
/* 				}*/
/* 			}) );*/
/* 		}*/
/* */
/* 		ret = [];*/
/* 		for ( i = 0; i < len; i++ ) {*/
/* 			jQuery.find( selector, this[ i ], ret );*/
/* 		}*/
/* */
/* 		// Needed because $( selector, context ) becomes $( context ).find( selector )*/
/* 		ret = this.pushStack( len > 1 ? jQuery.unique( ret ) : ret );*/
/* 		ret.selector = ( this.selector ? this.selector + " " : "" ) + selector;*/
/* 		return ret;*/
/* 	},*/
/* */
/* 	has: function( target ) {*/
/* 		var i,*/
/* 			targets = jQuery( target, this ),*/
/* 			len = targets.length;*/
/* */
/* 		return this.filter(function() {*/
/* 			for ( i = 0; i < len; i++ ) {*/
/* 				if ( jQuery.contains( this, targets[i] ) ) {*/
/* 					return true;*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	},*/
/* */
/* 	not: function( selector ) {*/
/* 		return this.pushStack( winnow(this, selector, false) );*/
/* 	},*/
/* */
/* 	filter: function( selector ) {*/
/* 		return this.pushStack( winnow(this, selector, true) );*/
/* 	},*/
/* */
/* 	is: function( selector ) {*/
/* 		return !!selector && (*/
/* 			typeof selector === "string" ?*/
/* 				// If this is a positional/relative selector, check membership in the returned set*/
/* 				// so $("p:first").is("p:last") won't return true for a doc with two "p".*/
/* 				rneedsContext.test( selector ) ?*/
/* 					jQuery( selector, this.context ).index( this[0] ) >= 0 :*/
/* 					jQuery.filter( selector, this ).length > 0 :*/
/* 				this.filter( selector ).length > 0 );*/
/* 	},*/
/* */
/* 	closest: function( selectors, context ) {*/
/* 		var cur,*/
/* 			i = 0,*/
/* 			l = this.length,*/
/* 			ret = [],*/
/* 			pos = rneedsContext.test( selectors ) || typeof selectors !== "string" ?*/
/* 				jQuery( selectors, context || this.context ) :*/
/* 				0;*/
/* */
/* 		for ( ; i < l; i++ ) {*/
/* 			cur = this[i];*/
/* */
/* 			while ( cur && cur.ownerDocument && cur !== context && cur.nodeType !== 11 ) {*/
/* 				if ( pos ? pos.index(cur) > -1 : jQuery.find.matchesSelector(cur, selectors) ) {*/
/* 					ret.push( cur );*/
/* 					break;*/
/* 				}*/
/* 				cur = cur.parentNode;*/
/* 			}*/
/* 		}*/
/* */
/* 		return this.pushStack( ret.length > 1 ? jQuery.unique( ret ) : ret );*/
/* 	},*/
/* */
/* 	// Determine the position of an element within*/
/* 	// the matched set of elements*/
/* 	index: function( elem ) {*/
/* */
/* 		// No argument, return index in parent*/
/* 		if ( !elem ) {*/
/* 			return ( this[0] && this[0].parentNode ) ? this.first().prevAll().length : -1;*/
/* 		}*/
/* */
/* 		// index in selector*/
/* 		if ( typeof elem === "string" ) {*/
/* 			return jQuery.inArray( this[0], jQuery( elem ) );*/
/* 		}*/
/* */
/* 		// Locate the position of the desired element*/
/* 		return jQuery.inArray(*/
/* 			// If it receives a jQuery object, the first element is used*/
/* 			elem.jquery ? elem[0] : elem, this );*/
/* 	},*/
/* */
/* 	add: function( selector, context ) {*/
/* 		var set = typeof selector === "string" ?*/
/* 				jQuery( selector, context ) :*/
/* 				jQuery.makeArray( selector && selector.nodeType ? [ selector ] : selector ),*/
/* 			all = jQuery.merge( this.get(), set );*/
/* */
/* 		return this.pushStack( jQuery.unique(all) );*/
/* 	},*/
/* */
/* 	addBack: function( selector ) {*/
/* 		return this.add( selector == null ?*/
/* 			this.prevObject : this.prevObject.filter(selector)*/
/* 		);*/
/* 	}*/
/* });*/
/* */
/* jQuery.fn.andSelf = jQuery.fn.addBack;*/
/* */
/* function sibling( cur, dir ) {*/
/* 	do {*/
/* 		cur = cur[ dir ];*/
/* 	} while ( cur && cur.nodeType !== 1 );*/
/* */
/* 	return cur;*/
/* }*/
/* */
/* jQuery.each({*/
/* 	parent: function( elem ) {*/
/* 		var parent = elem.parentNode;*/
/* 		return parent && parent.nodeType !== 11 ? parent : null;*/
/* 	},*/
/* 	parents: function( elem ) {*/
/* 		return jQuery.dir( elem, "parentNode" );*/
/* 	},*/
/* 	parentsUntil: function( elem, i, until ) {*/
/* 		return jQuery.dir( elem, "parentNode", until );*/
/* 	},*/
/* 	next: function( elem ) {*/
/* 		return sibling( elem, "nextSibling" );*/
/* 	},*/
/* 	prev: function( elem ) {*/
/* 		return sibling( elem, "previousSibling" );*/
/* 	},*/
/* 	nextAll: function( elem ) {*/
/* 		return jQuery.dir( elem, "nextSibling" );*/
/* 	},*/
/* 	prevAll: function( elem ) {*/
/* 		return jQuery.dir( elem, "previousSibling" );*/
/* 	},*/
/* 	nextUntil: function( elem, i, until ) {*/
/* 		return jQuery.dir( elem, "nextSibling", until );*/
/* 	},*/
/* 	prevUntil: function( elem, i, until ) {*/
/* 		return jQuery.dir( elem, "previousSibling", until );*/
/* 	},*/
/* 	siblings: function( elem ) {*/
/* 		return jQuery.sibling( ( elem.parentNode || {} ).firstChild, elem );*/
/* 	},*/
/* 	children: function( elem ) {*/
/* 		return jQuery.sibling( elem.firstChild );*/
/* 	},*/
/* 	contents: function( elem ) {*/
/* 		return jQuery.nodeName( elem, "iframe" ) ?*/
/* 			elem.contentDocument || elem.contentWindow.document :*/
/* 			jQuery.merge( [], elem.childNodes );*/
/* 	}*/
/* }, function( name, fn ) {*/
/* 	jQuery.fn[ name ] = function( until, selector ) {*/
/* 		var ret = jQuery.map( this, fn, until );*/
/* */
/* 		if ( !runtil.test( name ) ) {*/
/* 			selector = until;*/
/* 		}*/
/* */
/* 		if ( selector && typeof selector === "string" ) {*/
/* 			ret = jQuery.filter( selector, ret );*/
/* 		}*/
/* */
/* 		ret = this.length > 1 && !guaranteedUnique[ name ] ? jQuery.unique( ret ) : ret;*/
/* */
/* 		if ( this.length > 1 && rparentsprev.test( name ) ) {*/
/* 			ret = ret.reverse();*/
/* 		}*/
/* */
/* 		return this.pushStack( ret );*/
/* 	};*/
/* });*/
/* */
/* jQuery.extend({*/
/* 	filter: function( expr, elems, not ) {*/
/* 		if ( not ) {*/
/* 			expr = ":not(" + expr + ")";*/
/* 		}*/
/* */
/* 		return elems.length === 1 ?*/
/* 			jQuery.find.matchesSelector(elems[0], expr) ? [ elems[0] ] : [] :*/
/* 			jQuery.find.matches(expr, elems);*/
/* 	},*/
/* */
/* 	dir: function( elem, dir, until ) {*/
/* 		var matched = [],*/
/* 			cur = elem[ dir ];*/
/* */
/* 		while ( cur && cur.nodeType !== 9 && (until === undefined || cur.nodeType !== 1 || !jQuery( cur ).is( until )) ) {*/
/* 			if ( cur.nodeType === 1 ) {*/
/* 				matched.push( cur );*/
/* 			}*/
/* 			cur = cur[dir];*/
/* 		}*/
/* 		return matched;*/
/* 	},*/
/* */
/* 	sibling: function( n, elem ) {*/
/* 		var r = [];*/
/* */
/* 		for ( ; n; n = n.nextSibling ) {*/
/* 			if ( n.nodeType === 1 && n !== elem ) {*/
/* 				r.push( n );*/
/* 			}*/
/* 		}*/
/* */
/* 		return r;*/
/* 	}*/
/* });*/
/* */
/* // Implement the identical functionality for filter and not*/
/* function winnow( elements, qualifier, keep ) {*/
/* */
/* 	// Can't pass null or undefined to indexOf in Firefox 4*/
/* 	// Set to 0 to skip string check*/
/* 	qualifier = qualifier || 0;*/
/* */
/* 	if ( jQuery.isFunction( qualifier ) ) {*/
/* 		return jQuery.grep(elements, function( elem, i ) {*/
/* 			var retVal = !!qualifier.call( elem, i, elem );*/
/* 			return retVal === keep;*/
/* 		});*/
/* */
/* 	} else if ( qualifier.nodeType ) {*/
/* 		return jQuery.grep(elements, function( elem ) {*/
/* 			return ( elem === qualifier ) === keep;*/
/* 		});*/
/* */
/* 	} else if ( typeof qualifier === "string" ) {*/
/* 		var filtered = jQuery.grep(elements, function( elem ) {*/
/* 			return elem.nodeType === 1;*/
/* 		});*/
/* */
/* 		if ( isSimple.test( qualifier ) ) {*/
/* 			return jQuery.filter(qualifier, filtered, !keep);*/
/* 		} else {*/
/* 			qualifier = jQuery.filter( qualifier, filtered );*/
/* 		}*/
/* 	}*/
/* */
/* 	return jQuery.grep(elements, function( elem ) {*/
/* 		return ( jQuery.inArray( elem, qualifier ) >= 0 ) === keep;*/
/* 	});*/
/* }*/
/* function createSafeFragment( document ) {*/
/* 	var list = nodeNames.split( "|" ),*/
/* 		safeFrag = document.createDocumentFragment();*/
/* */
/* 	if ( safeFrag.createElement ) {*/
/* 		while ( list.length ) {*/
/* 			safeFrag.createElement(*/
/* 				list.pop()*/
/* 			);*/
/* 		}*/
/* 	}*/
/* 	return safeFrag;*/
/* }*/
/* */
/* var nodeNames = "abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|" +*/
/* 		"header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",*/
/* 	rinlinejQuery = / jQuery\d+="(?:null|\d+)"/g,*/
/* 	rnoshimcache = new RegExp("<(?:" + nodeNames + ")[\\s/>]", "i"),*/
/* 	rleadingWhitespace = /^\s+/,*/
/* 	rxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,*/
/* 	rtagName = /<([\w:]+)/,*/
/* 	rtbody = /<tbody/i,*/
/* 	rhtml = /<|&#?\w+;/,*/
/* 	rnoInnerhtml = /<(?:script|style|link)/i,*/
/* 	manipulation_rcheckableType = /^(?:checkbox|radio)$/i,*/
/* 	// checked="checked" or checked*/
/* 	rchecked = /checked\s*(?:[^=]|=\s*.checked.)/i,*/
/* 	rscriptType = /^$|\/(?:java|ecma)script/i,*/
/* 	rscriptTypeMasked = /^true\/(.*)/,*/
/* 	rcleanScript = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,*/
/* */
/* 	// We have to close these tags to support XHTML (#13200)*/
/* 	wrapMap = {*/
/* 		option: [ 1, "<select multiple='multiple'>", "</select>" ],*/
/* 		legend: [ 1, "<fieldset>", "</fieldset>" ],*/
/* 		area: [ 1, "<map>", "</map>" ],*/
/* 		param: [ 1, "<object>", "</object>" ],*/
/* 		thead: [ 1, "<table>", "</table>" ],*/
/* 		tr: [ 2, "<table><tbody>", "</tbody></table>" ],*/
/* 		col: [ 2, "<table><tbody></tbody><colgroup>", "</colgroup></table>" ],*/
/* 		td: [ 3, "<table><tbody><tr>", "</tr></tbody></table>" ],*/
/* */
/* 		// IE6-8 can't serialize link, script, style, or any html5 (NoScope) tags,*/
/* 		// unless wrapped in a div with non-breaking characters in front of it.*/
/* 		_default: jQuery.support.htmlSerialize ? [ 0, "", "" ] : [ 1, "X<div>", "</div>"  ]*/
/* 	},*/
/* 	safeFragment = createSafeFragment( document ),*/
/* 	fragmentDiv = safeFragment.appendChild( document.createElement("div") );*/
/* */
/* wrapMap.optgroup = wrapMap.option;*/
/* wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;*/
/* wrapMap.th = wrapMap.td;*/
/* */
/* jQuery.fn.extend({*/
/* 	text: function( value ) {*/
/* 		return jQuery.access( this, function( value ) {*/
/* 			return value === undefined ?*/
/* 				jQuery.text( this ) :*/
/* 				this.empty().append( ( this[0] && this[0].ownerDocument || document ).createTextNode( value ) );*/
/* 		}, null, value, arguments.length );*/
/* 	},*/
/* */
/* 	wrapAll: function( html ) {*/
/* 		if ( jQuery.isFunction( html ) ) {*/
/* 			return this.each(function(i) {*/
/* 				jQuery(this).wrapAll( html.call(this, i) );*/
/* 			});*/
/* 		}*/
/* */
/* 		if ( this[0] ) {*/
/* 			// The elements to wrap the target around*/
/* 			var wrap = jQuery( html, this[0].ownerDocument ).eq(0).clone(true);*/
/* */
/* 			if ( this[0].parentNode ) {*/
/* 				wrap.insertBefore( this[0] );*/
/* 			}*/
/* */
/* 			wrap.map(function() {*/
/* 				var elem = this;*/
/* */
/* 				while ( elem.firstChild && elem.firstChild.nodeType === 1 ) {*/
/* 					elem = elem.firstChild;*/
/* 				}*/
/* */
/* 				return elem;*/
/* 			}).append( this );*/
/* 		}*/
/* */
/* 		return this;*/
/* 	},*/
/* */
/* 	wrapInner: function( html ) {*/
/* 		if ( jQuery.isFunction( html ) ) {*/
/* 			return this.each(function(i) {*/
/* 				jQuery(this).wrapInner( html.call(this, i) );*/
/* 			});*/
/* 		}*/
/* */
/* 		return this.each(function() {*/
/* 			var self = jQuery( this ),*/
/* 				contents = self.contents();*/
/* */
/* 			if ( contents.length ) {*/
/* 				contents.wrapAll( html );*/
/* */
/* 			} else {*/
/* 				self.append( html );*/
/* 			}*/
/* 		});*/
/* 	},*/
/* */
/* 	wrap: function( html ) {*/
/* 		var isFunction = jQuery.isFunction( html );*/
/* */
/* 		return this.each(function(i) {*/
/* 			jQuery( this ).wrapAll( isFunction ? html.call(this, i) : html );*/
/* 		});*/
/* 	},*/
/* */
/* 	unwrap: function() {*/
/* 		return this.parent().each(function() {*/
/* 			if ( !jQuery.nodeName( this, "body" ) ) {*/
/* 				jQuery( this ).replaceWith( this.childNodes );*/
/* 			}*/
/* 		}).end();*/
/* 	},*/
/* */
/* 	append: function() {*/
/* 		return this.domManip(arguments, true, function( elem ) {*/
/* 			if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {*/
/* 				this.appendChild( elem );*/
/* 			}*/
/* 		});*/
/* 	},*/
/* */
/* 	prepend: function() {*/
/* 		return this.domManip(arguments, true, function( elem ) {*/
/* 			if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {*/
/* 				this.insertBefore( elem, this.firstChild );*/
/* 			}*/
/* 		});*/
/* 	},*/
/* */
/* 	before: function() {*/
/* 		return this.domManip( arguments, false, function( elem ) {*/
/* 			if ( this.parentNode ) {*/
/* 				this.parentNode.insertBefore( elem, this );*/
/* 			}*/
/* 		});*/
/* 	},*/
/* */
/* 	after: function() {*/
/* 		return this.domManip( arguments, false, function( elem ) {*/
/* 			if ( this.parentNode ) {*/
/* 				this.parentNode.insertBefore( elem, this.nextSibling );*/
/* 			}*/
/* 		});*/
/* 	},*/
/* */
/* 	// keepData is for internal use only--do not document*/
/* 	remove: function( selector, keepData ) {*/
/* 		var elem,*/
/* 			i = 0;*/
/* */
/* 		for ( ; (elem = this[i]) != null; i++ ) {*/
/* 			if ( !selector || jQuery.filter( selector, [ elem ] ).length > 0 ) {*/
/* 				if ( !keepData && elem.nodeType === 1 ) {*/
/* 					jQuery.cleanData( getAll( elem ) );*/
/* 				}*/
/* */
/* 				if ( elem.parentNode ) {*/
/* 					if ( keepData && jQuery.contains( elem.ownerDocument, elem ) ) {*/
/* 						setGlobalEval( getAll( elem, "script" ) );*/
/* 					}*/
/* 					elem.parentNode.removeChild( elem );*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		return this;*/
/* 	},*/
/* */
/* 	empty: function() {*/
/* 		var elem,*/
/* 			i = 0;*/
/* */
/* 		for ( ; (elem = this[i]) != null; i++ ) {*/
/* 			// Remove element nodes and prevent memory leaks*/
/* 			if ( elem.nodeType === 1 ) {*/
/* 				jQuery.cleanData( getAll( elem, false ) );*/
/* 			}*/
/* */
/* 			// Remove any remaining nodes*/
/* 			while ( elem.firstChild ) {*/
/* 				elem.removeChild( elem.firstChild );*/
/* 			}*/
/* */
/* 			// If this is a select, ensure that it displays empty (#12336)*/
/* 			// Support: IE<9*/
/* 			if ( elem.options && jQuery.nodeName( elem, "select" ) ) {*/
/* 				elem.options.length = 0;*/
/* 			}*/
/* 		}*/
/* */
/* 		return this;*/
/* 	},*/
/* */
/* 	clone: function( dataAndEvents, deepDataAndEvents ) {*/
/* 		dataAndEvents = dataAndEvents == null ? false : dataAndEvents;*/
/* 		deepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;*/
/* */
/* 		return this.map( function () {*/
/* 			return jQuery.clone( this, dataAndEvents, deepDataAndEvents );*/
/* 		});*/
/* 	},*/
/* */
/* 	html: function( value ) {*/
/* 		return jQuery.access( this, function( value ) {*/
/* 			var elem = this[0] || {},*/
/* 				i = 0,*/
/* 				l = this.length;*/
/* */
/* 			if ( value === undefined ) {*/
/* 				return elem.nodeType === 1 ?*/
/* 					elem.innerHTML.replace( rinlinejQuery, "" ) :*/
/* 					undefined;*/
/* 			}*/
/* */
/* 			// See if we can take a shortcut and just use innerHTML*/
/* 			if ( typeof value === "string" && !rnoInnerhtml.test( value ) &&*/
/* 				( jQuery.support.htmlSerialize || !rnoshimcache.test( value )  ) &&*/
/* 				( jQuery.support.leadingWhitespace || !rleadingWhitespace.test( value ) ) &&*/
/* 				!wrapMap[ ( rtagName.exec( value ) || ["", ""] )[1].toLowerCase() ] ) {*/
/* */
/* 				value = value.replace( rxhtmlTag, "<$1></$2>" );*/
/* */
/* 				try {*/
/* 					for (; i < l; i++ ) {*/
/* 						// Remove element nodes and prevent memory leaks*/
/* 						elem = this[i] || {};*/
/* 						if ( elem.nodeType === 1 ) {*/
/* 							jQuery.cleanData( getAll( elem, false ) );*/
/* 							elem.innerHTML = value;*/
/* 						}*/
/* 					}*/
/* */
/* 					elem = 0;*/
/* */
/* 				// If using innerHTML throws an exception, use the fallback method*/
/* 				} catch(e) {}*/
/* 			}*/
/* */
/* 			if ( elem ) {*/
/* 				this.empty().append( value );*/
/* 			}*/
/* 		}, null, value, arguments.length );*/
/* 	},*/
/* */
/* 	replaceWith: function( value ) {*/
/* 		var isFunc = jQuery.isFunction( value );*/
/* */
/* 		// Make sure that the elements are removed from the DOM before they are inserted*/
/* 		// this can help fix replacing a parent with child elements*/
/* 		if ( !isFunc && typeof value !== "string" ) {*/
/* 			value = jQuery( value ).not( this ).detach();*/
/* 		}*/
/* */
/* 		return this.domManip( [ value ], true, function( elem ) {*/
/* 			var next = this.nextSibling,*/
/* 				parent = this.parentNode;*/
/* */
/* 			if ( parent ) {*/
/* 				jQuery( this ).remove();*/
/* 				parent.insertBefore( elem, next );*/
/* 			}*/
/* 		});*/
/* 	},*/
/* */
/* 	detach: function( selector ) {*/
/* 		return this.remove( selector, true );*/
/* 	},*/
/* */
/* 	domManip: function( args, table, callback ) {*/
/* */
/* 		// Flatten any nested arrays*/
/* 		args = core_concat.apply( [], args );*/
/* */
/* 		var first, node, hasScripts,*/
/* 			scripts, doc, fragment,*/
/* 			i = 0,*/
/* 			l = this.length,*/
/* 			set = this,*/
/* 			iNoClone = l - 1,*/
/* 			value = args[0],*/
/* 			isFunction = jQuery.isFunction( value );*/
/* */
/* 		// We can't cloneNode fragments that contain checked, in WebKit*/
/* 		if ( isFunction || !( l <= 1 || typeof value !== "string" || jQuery.support.checkClone || !rchecked.test( value ) ) ) {*/
/* 			return this.each(function( index ) {*/
/* 				var self = set.eq( index );*/
/* 				if ( isFunction ) {*/
/* 					args[0] = value.call( this, index, table ? self.html() : undefined );*/
/* 				}*/
/* 				self.domManip( args, table, callback );*/
/* 			});*/
/* 		}*/
/* */
/* 		if ( l ) {*/
/* 			fragment = jQuery.buildFragment( args, this[ 0 ].ownerDocument, false, this );*/
/* 			first = fragment.firstChild;*/
/* */
/* 			if ( fragment.childNodes.length === 1 ) {*/
/* 				fragment = first;*/
/* 			}*/
/* */
/* 			if ( first ) {*/
/* 				table = table && jQuery.nodeName( first, "tr" );*/
/* 				scripts = jQuery.map( getAll( fragment, "script" ), disableScript );*/
/* 				hasScripts = scripts.length;*/
/* */
/* 				// Use the original fragment for the last item instead of the first because it can end up*/
/* 				// being emptied incorrectly in certain situations (#8070).*/
/* 				for ( ; i < l; i++ ) {*/
/* 					node = fragment;*/
/* */
/* 					if ( i !== iNoClone ) {*/
/* 						node = jQuery.clone( node, true, true );*/
/* */
/* 						// Keep references to cloned scripts for later restoration*/
/* 						if ( hasScripts ) {*/
/* 							jQuery.merge( scripts, getAll( node, "script" ) );*/
/* 						}*/
/* 					}*/
/* */
/* 					callback.call(*/
/* 						table && jQuery.nodeName( this[i], "table" ) ?*/
/* 							findOrAppend( this[i], "tbody" ) :*/
/* 							this[i],*/
/* 						node,*/
/* 						i*/
/* 					);*/
/* 				}*/
/* */
/* 				if ( hasScripts ) {*/
/* 					doc = scripts[ scripts.length - 1 ].ownerDocument;*/
/* */
/* 					// Reenable scripts*/
/* 					jQuery.map( scripts, restoreScript );*/
/* */
/* 					// Evaluate executable scripts on first document insertion*/
/* 					for ( i = 0; i < hasScripts; i++ ) {*/
/* 						node = scripts[ i ];*/
/* 						if ( rscriptType.test( node.type || "" ) &&*/
/* 							!jQuery._data( node, "globalEval" ) && jQuery.contains( doc, node ) ) {*/
/* */
/* 							if ( node.src ) {*/
/* 								// Hope ajax is available...*/
/* 								jQuery.ajax({*/
/* 									url: node.src,*/
/* 									type: "GET",*/
/* 									dataType: "script",*/
/* 									async: false,*/
/* 									global: false,*/
/* 									"throws": true*/
/* 								});*/
/* 							} else {*/
/* 								jQuery.globalEval( ( node.text || node.textContent || node.innerHTML || "" ).replace( rcleanScript, "" ) );*/
/* 							}*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				// Fix #11809: Avoid leaking memory*/
/* 				fragment = first = null;*/
/* 			}*/
/* 		}*/
/* */
/* 		return this;*/
/* 	}*/
/* });*/
/* */
/* function findOrAppend( elem, tag ) {*/
/* 	return elem.getElementsByTagName( tag )[0] || elem.appendChild( elem.ownerDocument.createElement( tag ) );*/
/* }*/
/* */
/* // Replace/restore the type attribute of script elements for safe DOM manipulation*/
/* function disableScript( elem ) {*/
/* 	var attr = elem.getAttributeNode("type");*/
/* 	elem.type = ( attr && attr.specified ) + "/" + elem.type;*/
/* 	return elem;*/
/* }*/
/* function restoreScript( elem ) {*/
/* 	var match = rscriptTypeMasked.exec( elem.type );*/
/* 	if ( match ) {*/
/* 		elem.type = match[1];*/
/* 	} else {*/
/* 		elem.removeAttribute("type");*/
/* 	}*/
/* 	return elem;*/
/* }*/
/* */
/* // Mark scripts as having already been evaluated*/
/* function setGlobalEval( elems, refElements ) {*/
/* 	var elem,*/
/* 		i = 0;*/
/* 	for ( ; (elem = elems[i]) != null; i++ ) {*/
/* 		jQuery._data( elem, "globalEval", !refElements || jQuery._data( refElements[i], "globalEval" ) );*/
/* 	}*/
/* }*/
/* */
/* function cloneCopyEvent( src, dest ) {*/
/* */
/* 	if ( dest.nodeType !== 1 || !jQuery.hasData( src ) ) {*/
/* 		return;*/
/* 	}*/
/* */
/* 	var type, i, l,*/
/* 		oldData = jQuery._data( src ),*/
/* 		curData = jQuery._data( dest, oldData ),*/
/* 		events = oldData.events;*/
/* */
/* 	if ( events ) {*/
/* 		delete curData.handle;*/
/* 		curData.events = {};*/
/* */
/* 		for ( type in events ) {*/
/* 			for ( i = 0, l = events[ type ].length; i < l; i++ ) {*/
/* 				jQuery.event.add( dest, type, events[ type ][ i ] );*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	// make the cloned public data object a copy from the original*/
/* 	if ( curData.data ) {*/
/* 		curData.data = jQuery.extend( {}, curData.data );*/
/* 	}*/
/* }*/
/* */
/* function fixCloneNodeIssues( src, dest ) {*/
/* 	var nodeName, e, data;*/
/* */
/* 	// We do not need to do anything for non-Elements*/
/* 	if ( dest.nodeType !== 1 ) {*/
/* 		return;*/
/* 	}*/
/* */
/* 	nodeName = dest.nodeName.toLowerCase();*/
/* */
/* 	// IE6-8 copies events bound via attachEvent when using cloneNode.*/
/* 	if ( !jQuery.support.noCloneEvent && dest[ jQuery.expando ] ) {*/
/* 		data = jQuery._data( dest );*/
/* */
/* 		for ( e in data.events ) {*/
/* 			jQuery.removeEvent( dest, e, data.handle );*/
/* 		}*/
/* */
/* 		// Event data gets referenced instead of copied if the expando gets copied too*/
/* 		dest.removeAttribute( jQuery.expando );*/
/* 	}*/
/* */
/* 	// IE blanks contents when cloning scripts, and tries to evaluate newly-set text*/
/* 	if ( nodeName === "script" && dest.text !== src.text ) {*/
/* 		disableScript( dest ).text = src.text;*/
/* 		restoreScript( dest );*/
/* */
/* 	// IE6-10 improperly clones children of object elements using classid.*/
/* 	// IE10 throws NoModificationAllowedError if parent is null, #12132.*/
/* 	} else if ( nodeName === "object" ) {*/
/* 		if ( dest.parentNode ) {*/
/* 			dest.outerHTML = src.outerHTML;*/
/* 		}*/
/* */
/* 		// This path appears unavoidable for IE9. When cloning an object*/
/* 		// element in IE9, the outerHTML strategy above is not sufficient.*/
/* 		// If the src has innerHTML and the destination does not,*/
/* 		// copy the src.innerHTML into the dest.innerHTML. #10324*/
/* 		if ( jQuery.support.html5Clone && ( src.innerHTML && !jQuery.trim(dest.innerHTML) ) ) {*/
/* 			dest.innerHTML = src.innerHTML;*/
/* 		}*/
/* */
/* 	} else if ( nodeName === "input" && manipulation_rcheckableType.test( src.type ) ) {*/
/* 		// IE6-8 fails to persist the checked state of a cloned checkbox*/
/* 		// or radio button. Worse, IE6-7 fail to give the cloned element*/
/* 		// a checked appearance if the defaultChecked value isn't also set*/
/* */
/* 		dest.defaultChecked = dest.checked = src.checked;*/
/* */
/* 		// IE6-7 get confused and end up setting the value of a cloned*/
/* 		// checkbox/radio button to an empty string instead of "on"*/
/* 		if ( dest.value !== src.value ) {*/
/* 			dest.value = src.value;*/
/* 		}*/
/* */
/* 	// IE6-8 fails to return the selected option to the default selected*/
/* 	// state when cloning options*/
/* 	} else if ( nodeName === "option" ) {*/
/* 		dest.defaultSelected = dest.selected = src.defaultSelected;*/
/* */
/* 	// IE6-8 fails to set the defaultValue to the correct value when*/
/* 	// cloning other types of input fields*/
/* 	} else if ( nodeName === "input" || nodeName === "textarea" ) {*/
/* 		dest.defaultValue = src.defaultValue;*/
/* 	}*/
/* }*/
/* */
/* jQuery.each({*/
/* 	appendTo: "append",*/
/* 	prependTo: "prepend",*/
/* 	insertBefore: "before",*/
/* 	insertAfter: "after",*/
/* 	replaceAll: "replaceWith"*/
/* }, function( name, original ) {*/
/* 	jQuery.fn[ name ] = function( selector ) {*/
/* 		var elems,*/
/* 			i = 0,*/
/* 			ret = [],*/
/* 			insert = jQuery( selector ),*/
/* 			last = insert.length - 1;*/
/* */
/* 		for ( ; i <= last; i++ ) {*/
/* 			elems = i === last ? this : this.clone(true);*/
/* 			jQuery( insert[i] )[ original ]( elems );*/
/* */
/* 			// Modern browsers can apply jQuery collections as arrays, but oldIE needs a .get()*/
/* 			core_push.apply( ret, elems.get() );*/
/* 		}*/
/* */
/* 		return this.pushStack( ret );*/
/* 	};*/
/* });*/
/* */
/* function getAll( context, tag ) {*/
/* 	var elems, elem,*/
/* 		i = 0,*/
/* 		found = typeof context.getElementsByTagName !== core_strundefined ? context.getElementsByTagName( tag || "*" ) :*/
/* 			typeof context.querySelectorAll !== core_strundefined ? context.querySelectorAll( tag || "*" ) :*/
/* 			undefined;*/
/* */
/* 	if ( !found ) {*/
/* 		for ( found = [], elems = context.childNodes || context; (elem = elems[i]) != null; i++ ) {*/
/* 			if ( !tag || jQuery.nodeName( elem, tag ) ) {*/
/* 				found.push( elem );*/
/* 			} else {*/
/* 				jQuery.merge( found, getAll( elem, tag ) );*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	return tag === undefined || tag && jQuery.nodeName( context, tag ) ?*/
/* 		jQuery.merge( [ context ], found ) :*/
/* 		found;*/
/* }*/
/* */
/* // Used in buildFragment, fixes the defaultChecked property*/
/* function fixDefaultChecked( elem ) {*/
/* 	if ( manipulation_rcheckableType.test( elem.type ) ) {*/
/* 		elem.defaultChecked = elem.checked;*/
/* 	}*/
/* }*/
/* */
/* jQuery.extend({*/
/* 	clone: function( elem, dataAndEvents, deepDataAndEvents ) {*/
/* 		var destElements, node, clone, i, srcElements,*/
/* 			inPage = jQuery.contains( elem.ownerDocument, elem );*/
/* */
/* 		if ( jQuery.support.html5Clone || jQuery.isXMLDoc(elem) || !rnoshimcache.test( "<" + elem.nodeName + ">" ) ) {*/
/* 			clone = elem.cloneNode( true );*/
/* */
/* 		// IE<=8 does not properly clone detached, unknown element nodes*/
/* 		} else {*/
/* 			fragmentDiv.innerHTML = elem.outerHTML;*/
/* 			fragmentDiv.removeChild( clone = fragmentDiv.firstChild );*/
/* 		}*/
/* */
/* 		if ( (!jQuery.support.noCloneEvent || !jQuery.support.noCloneChecked) &&*/
/* 				(elem.nodeType === 1 || elem.nodeType === 11) && !jQuery.isXMLDoc(elem) ) {*/
/* */
/* 			// We eschew Sizzle here for performance reasons: http://jsperf.com/getall-vs-sizzle/2*/
/* 			destElements = getAll( clone );*/
/* 			srcElements = getAll( elem );*/
/* */
/* 			// Fix all IE cloning issues*/
/* 			for ( i = 0; (node = srcElements[i]) != null; ++i ) {*/
/* 				// Ensure that the destination node is not null; Fixes #9587*/
/* 				if ( destElements[i] ) {*/
/* 					fixCloneNodeIssues( node, destElements[i] );*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		// Copy the events from the original to the clone*/
/* 		if ( dataAndEvents ) {*/
/* 			if ( deepDataAndEvents ) {*/
/* 				srcElements = srcElements || getAll( elem );*/
/* 				destElements = destElements || getAll( clone );*/
/* */
/* 				for ( i = 0; (node = srcElements[i]) != null; i++ ) {*/
/* 					cloneCopyEvent( node, destElements[i] );*/
/* 				}*/
/* 			} else {*/
/* 				cloneCopyEvent( elem, clone );*/
/* 			}*/
/* 		}*/
/* */
/* 		// Preserve script evaluation history*/
/* 		destElements = getAll( clone, "script" );*/
/* 		if ( destElements.length > 0 ) {*/
/* 			setGlobalEval( destElements, !inPage && getAll( elem, "script" ) );*/
/* 		}*/
/* */
/* 		destElements = srcElements = node = null;*/
/* */
/* 		// Return the cloned set*/
/* 		return clone;*/
/* 	},*/
/* */
/* 	buildFragment: function( elems, context, scripts, selection ) {*/
/* 		var j, elem, contains,*/
/* 			tmp, tag, tbody, wrap,*/
/* 			l = elems.length,*/
/* */
/* 			// Ensure a safe fragment*/
/* 			safe = createSafeFragment( context ),*/
/* */
/* 			nodes = [],*/
/* 			i = 0;*/
/* */
/* 		for ( ; i < l; i++ ) {*/
/* 			elem = elems[ i ];*/
/* */
/* 			if ( elem || elem === 0 ) {*/
/* */
/* 				// Add nodes directly*/
/* 				if ( jQuery.type( elem ) === "object" ) {*/
/* 					jQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );*/
/* */
/* 				// Convert non-html into a text node*/
/* 				} else if ( !rhtml.test( elem ) ) {*/
/* 					nodes.push( context.createTextNode( elem ) );*/
/* */
/* 				// Convert html into DOM nodes*/
/* 				} else {*/
/* 					tmp = tmp || safe.appendChild( context.createElement("div") );*/
/* */
/* 					// Deserialize a standard representation*/
/* 					tag = ( rtagName.exec( elem ) || ["", ""] )[1].toLowerCase();*/
/* 					wrap = wrapMap[ tag ] || wrapMap._default;*/
/* */
/* 					tmp.innerHTML = wrap[1] + elem.replace( rxhtmlTag, "<$1></$2>" ) + wrap[2];*/
/* */
/* 					// Descend through wrappers to the right content*/
/* 					j = wrap[0];*/
/* 					while ( j-- ) {*/
/* 						tmp = tmp.lastChild;*/
/* 					}*/
/* */
/* 					// Manually add leading whitespace removed by IE*/
/* 					if ( !jQuery.support.leadingWhitespace && rleadingWhitespace.test( elem ) ) {*/
/* 						nodes.push( context.createTextNode( rleadingWhitespace.exec( elem )[0] ) );*/
/* 					}*/
/* */
/* 					// Remove IE's autoinserted <tbody> from table fragments*/
/* 					if ( !jQuery.support.tbody ) {*/
/* */
/* 						// String was a <table>, *may* have spurious <tbody>*/
/* 						elem = tag === "table" && !rtbody.test( elem ) ?*/
/* 							tmp.firstChild :*/
/* */
/* 							// String was a bare <thead> or <tfoot>*/
/* 							wrap[1] === "<table>" && !rtbody.test( elem ) ?*/
/* 								tmp :*/
/* 								0;*/
/* */
/* 						j = elem && elem.childNodes.length;*/
/* 						while ( j-- ) {*/
/* 							if ( jQuery.nodeName( (tbody = elem.childNodes[j]), "tbody" ) && !tbody.childNodes.length ) {*/
/* 								elem.removeChild( tbody );*/
/* 							}*/
/* 						}*/
/* 					}*/
/* */
/* 					jQuery.merge( nodes, tmp.childNodes );*/
/* */
/* 					// Fix #12392 for WebKit and IE > 9*/
/* 					tmp.textContent = "";*/
/* */
/* 					// Fix #12392 for oldIE*/
/* 					while ( tmp.firstChild ) {*/
/* 						tmp.removeChild( tmp.firstChild );*/
/* 					}*/
/* */
/* 					// Remember the top-level container for proper cleanup*/
/* 					tmp = safe.lastChild;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		// Fix #11356: Clear elements from fragment*/
/* 		if ( tmp ) {*/
/* 			safe.removeChild( tmp );*/
/* 		}*/
/* */
/* 		// Reset defaultChecked for any radios and checkboxes*/
/* 		// about to be appended to the DOM in IE 6/7 (#8060)*/
/* 		if ( !jQuery.support.appendChecked ) {*/
/* 			jQuery.grep( getAll( nodes, "input" ), fixDefaultChecked );*/
/* 		}*/
/* */
/* 		i = 0;*/
/* 		while ( (elem = nodes[ i++ ]) ) {*/
/* */
/* 			// #4087 - If origin and destination elements are the same, and this is*/
/* 			// that element, do not do anything*/
/* 			if ( selection && jQuery.inArray( elem, selection ) !== -1 ) {*/
/* 				continue;*/
/* 			}*/
/* */
/* 			contains = jQuery.contains( elem.ownerDocument, elem );*/
/* */
/* 			// Append to fragment*/
/* 			tmp = getAll( safe.appendChild( elem ), "script" );*/
/* */
/* 			// Preserve script evaluation history*/
/* 			if ( contains ) {*/
/* 				setGlobalEval( tmp );*/
/* 			}*/
/* */
/* 			// Capture executables*/
/* 			if ( scripts ) {*/
/* 				j = 0;*/
/* 				while ( (elem = tmp[ j++ ]) ) {*/
/* 					if ( rscriptType.test( elem.type || "" ) ) {*/
/* 						scripts.push( elem );*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		tmp = null;*/
/* */
/* 		return safe;*/
/* 	},*/
/* */
/* 	cleanData: function( elems, /* internal *//*  acceptData ) {*/
/* 		var elem, type, id, data,*/
/* 			i = 0,*/
/* 			internalKey = jQuery.expando,*/
/* 			cache = jQuery.cache,*/
/* 			deleteExpando = jQuery.support.deleteExpando,*/
/* 			special = jQuery.event.special;*/
/* */
/* 		for ( ; (elem = elems[i]) != null; i++ ) {*/
/* */
/* 			if ( acceptData || jQuery.acceptData( elem ) ) {*/
/* */
/* 				id = elem[ internalKey ];*/
/* 				data = id && cache[ id ];*/
/* */
/* 				if ( data ) {*/
/* 					if ( data.events ) {*/
/* 						for ( type in data.events ) {*/
/* 							if ( special[ type ] ) {*/
/* 								jQuery.event.remove( elem, type );*/
/* */
/* 							// This is a shortcut to avoid jQuery.event.remove's overhead*/
/* 							} else {*/
/* 								jQuery.removeEvent( elem, type, data.handle );*/
/* 							}*/
/* 						}*/
/* 					}*/
/* */
/* 					// Remove cache only if it was not already removed by jQuery.event.remove*/
/* 					if ( cache[ id ] ) {*/
/* */
/* 						delete cache[ id ];*/
/* */
/* 						// IE does not allow us to delete expando properties from nodes,*/
/* 						// nor does it have a removeAttribute function on Document nodes;*/
/* 						// we must handle all of these cases*/
/* 						if ( deleteExpando ) {*/
/* 							delete elem[ internalKey ];*/
/* */
/* 						} else if ( typeof elem.removeAttribute !== core_strundefined ) {*/
/* 							elem.removeAttribute( internalKey );*/
/* */
/* 						} else {*/
/* 							elem[ internalKey ] = null;*/
/* 						}*/
/* */
/* 						core_deletedIds.push( id );*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	}*/
/* });*/
/* var iframe, getStyles, curCSS,*/
/* 	ralpha = /alpha\([^)]*\)/i,*/
/* 	ropacity = /opacity\s*=\s*([^)]*)/,*/
/* 	rposition = /^(top|right|bottom|left)$/,*/
/* 	// swappable if display is none or starts with table except "table", "table-cell", or "table-caption"*/
/* 	// see here for display values: https://developer.mozilla.org/en-US/docs/CSS/display*/
/* 	rdisplayswap = /^(none|table(?!-c[ea]).+)/,*/
/* 	rmargin = /^margin/,*/
/* 	rnumsplit = new RegExp( "^(" + core_pnum + ")(.*)$", "i" ),*/
/* 	rnumnonpx = new RegExp( "^(" + core_pnum + ")(?!px)[a-z%]+$", "i" ),*/
/* 	rrelNum = new RegExp( "^([+-])=(" + core_pnum + ")", "i" ),*/
/* 	elemdisplay = { BODY: "block" },*/
/* */
/* 	cssShow = { position: "absolute", visibility: "hidden", display: "block" },*/
/* 	cssNormalTransform = {*/
/* 		letterSpacing: 0,*/
/* 		fontWeight: 400*/
/* 	},*/
/* */
/* 	cssExpand = [ "Top", "Right", "Bottom", "Left" ],*/
/* 	cssPrefixes = [ "Webkit", "O", "Moz", "ms" ];*/
/* */
/* // return a css property mapped to a potentially vendor prefixed property*/
/* function vendorPropName( style, name ) {*/
/* */
/* 	// shortcut for names that are not vendor prefixed*/
/* 	if ( name in style ) {*/
/* 		return name;*/
/* 	}*/
/* */
/* 	// check for vendor prefixed names*/
/* 	var capName = name.charAt(0).toUpperCase() + name.slice(1),*/
/* 		origName = name,*/
/* 		i = cssPrefixes.length;*/
/* */
/* 	while ( i-- ) {*/
/* 		name = cssPrefixes[ i ] + capName;*/
/* 		if ( name in style ) {*/
/* 			return name;*/
/* 		}*/
/* 	}*/
/* */
/* 	return origName;*/
/* }*/
/* */
/* function isHidden( elem, el ) {*/
/* 	// isHidden might be called from jQuery#filter function;*/
/* 	// in that case, element will be second argument*/
/* 	elem = el || elem;*/
/* 	return jQuery.css( elem, "display" ) === "none" || !jQuery.contains( elem.ownerDocument, elem );*/
/* }*/
/* */
/* function showHide( elements, show ) {*/
/* 	var display, elem, hidden,*/
/* 		values = [],*/
/* 		index = 0,*/
/* 		length = elements.length;*/
/* */
/* 	for ( ; index < length; index++ ) {*/
/* 		elem = elements[ index ];*/
/* 		if ( !elem.style ) {*/
/* 			continue;*/
/* 		}*/
/* */
/* 		values[ index ] = jQuery._data( elem, "olddisplay" );*/
/* 		display = elem.style.display;*/
/* 		if ( show ) {*/
/* 			// Reset the inline display of this element to learn if it is*/
/* 			// being hidden by cascaded rules or not*/
/* 			if ( !values[ index ] && display === "none" ) {*/
/* 				elem.style.display = "";*/
/* 			}*/
/* */
/* 			// Set elements which have been overridden with display: none*/
/* 			// in a stylesheet to whatever the default browser style is*/
/* 			// for such an element*/
/* 			if ( elem.style.display === "" && isHidden( elem ) ) {*/
/* 				values[ index ] = jQuery._data( elem, "olddisplay", css_defaultDisplay(elem.nodeName) );*/
/* 			}*/
/* 		} else {*/
/* */
/* 			if ( !values[ index ] ) {*/
/* 				hidden = isHidden( elem );*/
/* */
/* 				if ( display && display !== "none" || !hidden ) {*/
/* 					jQuery._data( elem, "olddisplay", hidden ? display : jQuery.css( elem, "display" ) );*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	// Set the display of most of the elements in a second loop*/
/* 	// to avoid the constant reflow*/
/* 	for ( index = 0; index < length; index++ ) {*/
/* 		elem = elements[ index ];*/
/* 		if ( !elem.style ) {*/
/* 			continue;*/
/* 		}*/
/* 		if ( !show || elem.style.display === "none" || elem.style.display === "" ) {*/
/* 			elem.style.display = show ? values[ index ] || "" : "none";*/
/* 		}*/
/* 	}*/
/* */
/* 	return elements;*/
/* }*/
/* */
/* jQuery.fn.extend({*/
/* 	css: function( name, value ) {*/
/* 		return jQuery.access( this, function( elem, name, value ) {*/
/* 			var len, styles,*/
/* 				map = {},*/
/* 				i = 0;*/
/* */
/* 			if ( jQuery.isArray( name ) ) {*/
/* 				styles = getStyles( elem );*/
/* 				len = name.length;*/
/* */
/* 				for ( ; i < len; i++ ) {*/
/* 					map[ name[ i ] ] = jQuery.css( elem, name[ i ], false, styles );*/
/* 				}*/
/* */
/* 				return map;*/
/* 			}*/
/* */
/* 			return value !== undefined ?*/
/* 				jQuery.style( elem, name, value ) :*/
/* 				jQuery.css( elem, name );*/
/* 		}, name, value, arguments.length > 1 );*/
/* 	},*/
/* 	show: function() {*/
/* 		return showHide( this, true );*/
/* 	},*/
/* 	hide: function() {*/
/* 		return showHide( this );*/
/* 	},*/
/* 	toggle: function( state ) {*/
/* 		var bool = typeof state === "boolean";*/
/* */
/* 		return this.each(function() {*/
/* 			if ( bool ? state : isHidden( this ) ) {*/
/* 				jQuery( this ).show();*/
/* 			} else {*/
/* 				jQuery( this ).hide();*/
/* 			}*/
/* 		});*/
/* 	}*/
/* });*/
/* */
/* jQuery.extend({*/
/* 	// Add in style property hooks for overriding the default*/
/* 	// behavior of getting and setting a style property*/
/* 	cssHooks: {*/
/* 		opacity: {*/
/* 			get: function( elem, computed ) {*/
/* 				if ( computed ) {*/
/* 					// We should always get a number back from opacity*/
/* 					var ret = curCSS( elem, "opacity" );*/
/* 					return ret === "" ? "1" : ret;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	},*/
/* */
/* 	// Exclude the following css properties to add px*/
/* 	cssNumber: {*/
/* 		"columnCount": true,*/
/* 		"fillOpacity": true,*/
/* 		"fontWeight": true,*/
/* 		"lineHeight": true,*/
/* 		"opacity": true,*/
/* 		"orphans": true,*/
/* 		"widows": true,*/
/* 		"zIndex": true,*/
/* 		"zoom": true*/
/* 	},*/
/* */
/* 	// Add in properties whose names you wish to fix before*/
/* 	// setting or getting the value*/
/* 	cssProps: {*/
/* 		// normalize float css property*/
/* 		"float": jQuery.support.cssFloat ? "cssFloat" : "styleFloat"*/
/* 	},*/
/* */
/* 	// Get and set the style property on a DOM Node*/
/* 	style: function( elem, name, value, extra ) {*/
/* 		// Don't set styles on text and comment nodes*/
/* 		if ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		// Make sure that we're working with the right name*/
/* 		var ret, type, hooks,*/
/* 			origName = jQuery.camelCase( name ),*/
/* 			style = elem.style;*/
/* */
/* 		name = jQuery.cssProps[ origName ] || ( jQuery.cssProps[ origName ] = vendorPropName( style, origName ) );*/
/* */
/* 		// gets hook for the prefixed version*/
/* 		// followed by the unprefixed version*/
/* 		hooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];*/
/* */
/* 		// Check if we're setting a value*/
/* 		if ( value !== undefined ) {*/
/* 			type = typeof value;*/
/* */
/* 			// convert relative number strings (+= or -=) to relative numbers. #7345*/
/* 			if ( type === "string" && (ret = rrelNum.exec( value )) ) {*/
/* 				value = ( ret[1] + 1 ) * ret[2] + parseFloat( jQuery.css( elem, name ) );*/
/* 				// Fixes bug #9237*/
/* 				type = "number";*/
/* 			}*/
/* */
/* 			// Make sure that NaN and null values aren't set. See: #7116*/
/* 			if ( value == null || type === "number" && isNaN( value ) ) {*/
/* 				return;*/
/* 			}*/
/* */
/* 			// If a number was passed in, add 'px' to the (except for certain CSS properties)*/
/* 			if ( type === "number" && !jQuery.cssNumber[ origName ] ) {*/
/* 				value += "px";*/
/* 			}*/
/* */
/* 			// Fixes #8908, it can be done more correctly by specifing setters in cssHooks,*/
/* 			// but it would mean to define eight (for every problematic property) identical functions*/
/* 			if ( !jQuery.support.clearCloneStyle && value === "" && name.indexOf("background") === 0 ) {*/
/* 				style[ name ] = "inherit";*/
/* 			}*/
/* */
/* 			// If a hook was provided, use that value, otherwise just set the specified value*/
/* 			if ( !hooks || !("set" in hooks) || (value = hooks.set( elem, value, extra )) !== undefined ) {*/
/* */
/* 				// Wrapped to prevent IE from throwing errors when 'invalid' values are provided*/
/* 				// Fixes bug #5509*/
/* 				try {*/
/* 					style[ name ] = value;*/
/* 				} catch(e) {}*/
/* 			}*/
/* */
/* 		} else {*/
/* 			// If a hook was provided get the non-computed value from there*/
/* 			if ( hooks && "get" in hooks && (ret = hooks.get( elem, false, extra )) !== undefined ) {*/
/* 				return ret;*/
/* 			}*/
/* */
/* 			// Otherwise just get the value from the style object*/
/* 			return style[ name ];*/
/* 		}*/
/* 	},*/
/* */
/* 	css: function( elem, name, extra, styles ) {*/
/* 		var num, val, hooks,*/
/* 			origName = jQuery.camelCase( name );*/
/* */
/* 		// Make sure that we're working with the right name*/
/* 		name = jQuery.cssProps[ origName ] || ( jQuery.cssProps[ origName ] = vendorPropName( elem.style, origName ) );*/
/* */
/* 		// gets hook for the prefixed version*/
/* 		// followed by the unprefixed version*/
/* 		hooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];*/
/* */
/* 		// If a hook was provided get the computed value from there*/
/* 		if ( hooks && "get" in hooks ) {*/
/* 			val = hooks.get( elem, true, extra );*/
/* 		}*/
/* */
/* 		// Otherwise, if a way to get the computed value exists, use that*/
/* 		if ( val === undefined ) {*/
/* 			val = curCSS( elem, name, styles );*/
/* 		}*/
/* */
/* 		//convert "normal" to computed value*/
/* 		if ( val === "normal" && name in cssNormalTransform ) {*/
/* 			val = cssNormalTransform[ name ];*/
/* 		}*/
/* */
/* 		// Return, converting to number if forced or a qualifier was provided and val looks numeric*/
/* 		if ( extra === "" || extra ) {*/
/* 			num = parseFloat( val );*/
/* 			return extra === true || jQuery.isNumeric( num ) ? num || 0 : val;*/
/* 		}*/
/* 		return val;*/
/* 	},*/
/* */
/* 	// A method for quickly swapping in/out CSS properties to get correct calculations*/
/* 	swap: function( elem, options, callback, args ) {*/
/* 		var ret, name,*/
/* 			old = {};*/
/* */
/* 		// Remember the old values, and insert the new ones*/
/* 		for ( name in options ) {*/
/* 			old[ name ] = elem.style[ name ];*/
/* 			elem.style[ name ] = options[ name ];*/
/* 		}*/
/* */
/* 		ret = callback.apply( elem, args || [] );*/
/* */
/* 		// Revert the old values*/
/* 		for ( name in options ) {*/
/* 			elem.style[ name ] = old[ name ];*/
/* 		}*/
/* */
/* 		return ret;*/
/* 	}*/
/* });*/
/* */
/* // NOTE: we've included the "window" in window.getComputedStyle*/
/* // because jsdom on node.js will break without it.*/
/* if ( window.getComputedStyle ) {*/
/* 	getStyles = function( elem ) {*/
/* 		return window.getComputedStyle( elem, null );*/
/* 	};*/
/* */
/* 	curCSS = function( elem, name, _computed ) {*/
/* 		var width, minWidth, maxWidth,*/
/* 			computed = _computed || getStyles( elem ),*/
/* */
/* 			// getPropertyValue is only needed for .css('filter') in IE9, see #12537*/
/* 			ret = computed ? computed.getPropertyValue( name ) || computed[ name ] : undefined,*/
/* 			style = elem.style;*/
/* */
/* 		if ( computed ) {*/
/* */
/* 			if ( ret === "" && !jQuery.contains( elem.ownerDocument, elem ) ) {*/
/* 				ret = jQuery.style( elem, name );*/
/* 			}*/
/* */
/* 			// A tribute to the "awesome hack by Dean Edwards"*/
/* 			// Chrome < 17 and Safari 5.0 uses "computed value" instead of "used value" for margin-right*/
/* 			// Safari 5.1.7 (at least) returns percentage for a larger set of values, but width seems to be reliably pixels*/
/* 			// this is against the CSSOM draft spec: http://dev.w3.org/csswg/cssom/#resolved-values*/
/* 			if ( rnumnonpx.test( ret ) && rmargin.test( name ) ) {*/
/* */
/* 				// Remember the original values*/
/* 				width = style.width;*/
/* 				minWidth = style.minWidth;*/
/* 				maxWidth = style.maxWidth;*/
/* */
/* 				// Put in the new values to get a computed value out*/
/* 				style.minWidth = style.maxWidth = style.width = ret;*/
/* 				ret = computed.width;*/
/* */
/* 				// Revert the changed values*/
/* 				style.width = width;*/
/* 				style.minWidth = minWidth;*/
/* 				style.maxWidth = maxWidth;*/
/* 			}*/
/* 		}*/
/* */
/* 		return ret;*/
/* 	};*/
/* } else if ( document.documentElement.currentStyle ) {*/
/* 	getStyles = function( elem ) {*/
/* 		return elem.currentStyle;*/
/* 	};*/
/* */
/* 	curCSS = function( elem, name, _computed ) {*/
/* 		var left, rs, rsLeft,*/
/* 			computed = _computed || getStyles( elem ),*/
/* 			ret = computed ? computed[ name ] : undefined,*/
/* 			style = elem.style;*/
/* */
/* 		// Avoid setting ret to empty string here*/
/* 		// so we don't default to auto*/
/* 		if ( ret == null && style && style[ name ] ) {*/
/* 			ret = style[ name ];*/
/* 		}*/
/* */
/* 		// From the awesome hack by Dean Edwards*/
/* 		// http://erik.eae.net/archives/2007/07/27/18.54.15/#comment-102291*/
/* */
/* 		// If we're not dealing with a regular pixel number*/
/* 		// but a number that has a weird ending, we need to convert it to pixels*/
/* 		// but not position css attributes, as those are proportional to the parent element instead*/
/* 		// and we can't measure the parent instead because it might trigger a "stacking dolls" problem*/
/* 		if ( rnumnonpx.test( ret ) && !rposition.test( name ) ) {*/
/* */
/* 			// Remember the original values*/
/* 			left = style.left;*/
/* 			rs = elem.runtimeStyle;*/
/* 			rsLeft = rs && rs.left;*/
/* */
/* 			// Put in the new values to get a computed value out*/
/* 			if ( rsLeft ) {*/
/* 				rs.left = elem.currentStyle.left;*/
/* 			}*/
/* 			style.left = name === "fontSize" ? "1em" : ret;*/
/* 			ret = style.pixelLeft + "px";*/
/* */
/* 			// Revert the changed values*/
/* 			style.left = left;*/
/* 			if ( rsLeft ) {*/
/* 				rs.left = rsLeft;*/
/* 			}*/
/* 		}*/
/* */
/* 		return ret === "" ? "auto" : ret;*/
/* 	};*/
/* }*/
/* */
/* function setPositiveNumber( elem, value, subtract ) {*/
/* 	var matches = rnumsplit.exec( value );*/
/* 	return matches ?*/
/* 		// Guard against undefined "subtract", e.g., when used as in cssHooks*/
/* 		Math.max( 0, matches[ 1 ] - ( subtract || 0 ) ) + ( matches[ 2 ] || "px" ) :*/
/* 		value;*/
/* }*/
/* */
/* function augmentWidthOrHeight( elem, name, extra, isBorderBox, styles ) {*/
/* 	var i = extra === ( isBorderBox ? "border" : "content" ) ?*/
/* 		// If we already have the right measurement, avoid augmentation*/
/* 		4 :*/
/* 		// Otherwise initialize for horizontal or vertical properties*/
/* 		name === "width" ? 1 : 0,*/
/* */
/* 		val = 0;*/
/* */
/* 	for ( ; i < 4; i += 2 ) {*/
/* 		// both box models exclude margin, so add it if we want it*/
/* 		if ( extra === "margin" ) {*/
/* 			val += jQuery.css( elem, extra + cssExpand[ i ], true, styles );*/
/* 		}*/
/* */
/* 		if ( isBorderBox ) {*/
/* 			// border-box includes padding, so remove it if we want content*/
/* 			if ( extra === "content" ) {*/
/* 				val -= jQuery.css( elem, "padding" + cssExpand[ i ], true, styles );*/
/* 			}*/
/* */
/* 			// at this point, extra isn't border nor margin, so remove border*/
/* 			if ( extra !== "margin" ) {*/
/* 				val -= jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );*/
/* 			}*/
/* 		} else {*/
/* 			// at this point, extra isn't content, so add padding*/
/* 			val += jQuery.css( elem, "padding" + cssExpand[ i ], true, styles );*/
/* */
/* 			// at this point, extra isn't content nor padding, so add border*/
/* 			if ( extra !== "padding" ) {*/
/* 				val += jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	return val;*/
/* }*/
/* */
/* function getWidthOrHeight( elem, name, extra ) {*/
/* */
/* 	// Start with offset property, which is equivalent to the border-box value*/
/* 	var valueIsBorderBox = true,*/
/* 		val = name === "width" ? elem.offsetWidth : elem.offsetHeight,*/
/* 		styles = getStyles( elem ),*/
/* 		isBorderBox = jQuery.support.boxSizing && jQuery.css( elem, "boxSizing", false, styles ) === "border-box";*/
/* */
/* 	// some non-html elements return undefined for offsetWidth, so check for null/undefined*/
/* 	// svg - https://bugzilla.mozilla.org/show_bug.cgi?id=649285*/
/* 	// MathML - https://bugzilla.mozilla.org/show_bug.cgi?id=491668*/
/* 	if ( val <= 0 || val == null ) {*/
/* 		// Fall back to computed then uncomputed css if necessary*/
/* 		val = curCSS( elem, name, styles );*/
/* 		if ( val < 0 || val == null ) {*/
/* 			val = elem.style[ name ];*/
/* 		}*/
/* */
/* 		// Computed unit is not pixels. Stop here and return.*/
/* 		if ( rnumnonpx.test(val) ) {*/
/* 			return val;*/
/* 		}*/
/* */
/* 		// we need the check for style in case a browser which returns unreliable values*/
/* 		// for getComputedStyle silently falls back to the reliable elem.style*/
/* 		valueIsBorderBox = isBorderBox && ( jQuery.support.boxSizingReliable || val === elem.style[ name ] );*/
/* */
/* 		// Normalize "", auto, and prepare for extra*/
/* 		val = parseFloat( val ) || 0;*/
/* 	}*/
/* */
/* 	// use the active box-sizing model to add/subtract irrelevant styles*/
/* 	return ( val +*/
/* 		augmentWidthOrHeight(*/
/* 			elem,*/
/* 			name,*/
/* 			extra || ( isBorderBox ? "border" : "content" ),*/
/* 			valueIsBorderBox,*/
/* 			styles*/
/* 		)*/
/* 	) + "px";*/
/* }*/
/* */
/* // Try to determine the default display value of an element*/
/* function css_defaultDisplay( nodeName ) {*/
/* 	var doc = document,*/
/* 		display = elemdisplay[ nodeName ];*/
/* */
/* 	if ( !display ) {*/
/* 		display = actualDisplay( nodeName, doc );*/
/* */
/* 		// If the simple way fails, read from inside an iframe*/
/* 		if ( display === "none" || !display ) {*/
/* 			// Use the already-created iframe if possible*/
/* 			iframe = ( iframe ||*/
/* 				jQuery("<iframe frameborder='0' width='0' height='0'/>")*/
/* 				.css( "cssText", "display:block !important" )*/
/* 			).appendTo( doc.documentElement );*/
/* */
/* 			// Always write a new HTML skeleton so Webkit and Firefox don't choke on reuse*/
/* 			doc = ( iframe[0].contentWindow || iframe[0].contentDocument ).document;*/
/* 			doc.write("<!doctype html><html><body>");*/
/* 			doc.close();*/
/* */
/* 			display = actualDisplay( nodeName, doc );*/
/* 			iframe.detach();*/
/* 		}*/
/* */
/* 		// Store the correct default display*/
/* 		elemdisplay[ nodeName ] = display;*/
/* 	}*/
/* */
/* 	return display;*/
/* }*/
/* */
/* // Called ONLY from within css_defaultDisplay*/
/* function actualDisplay( name, doc ) {*/
/* 	var elem = jQuery( doc.createElement( name ) ).appendTo( doc.body ),*/
/* 		display = jQuery.css( elem[0], "display" );*/
/* 	elem.remove();*/
/* 	return display;*/
/* }*/
/* */
/* jQuery.each([ "height", "width" ], function( i, name ) {*/
/* 	jQuery.cssHooks[ name ] = {*/
/* 		get: function( elem, computed, extra ) {*/
/* 			if ( computed ) {*/
/* 				// certain elements can have dimension info if we invisibly show them*/
/* 				// however, it must have a current display style that would benefit from this*/
/* 				return elem.offsetWidth === 0 && rdisplayswap.test( jQuery.css( elem, "display" ) ) ?*/
/* 					jQuery.swap( elem, cssShow, function() {*/
/* 						return getWidthOrHeight( elem, name, extra );*/
/* 					}) :*/
/* 					getWidthOrHeight( elem, name, extra );*/
/* 			}*/
/* 		},*/
/* */
/* 		set: function( elem, value, extra ) {*/
/* 			var styles = extra && getStyles( elem );*/
/* 			return setPositiveNumber( elem, value, extra ?*/
/* 				augmentWidthOrHeight(*/
/* 					elem,*/
/* 					name,*/
/* 					extra,*/
/* 					jQuery.support.boxSizing && jQuery.css( elem, "boxSizing", false, styles ) === "border-box",*/
/* 					styles*/
/* 				) : 0*/
/* 			);*/
/* 		}*/
/* 	};*/
/* });*/
/* */
/* if ( !jQuery.support.opacity ) {*/
/* 	jQuery.cssHooks.opacity = {*/
/* 		get: function( elem, computed ) {*/
/* 			// IE uses filters for opacity*/
/* 			return ropacity.test( (computed && elem.currentStyle ? elem.currentStyle.filter : elem.style.filter) || "" ) ?*/
/* 				( 0.01 * parseFloat( RegExp.$1 ) ) + "" :*/
/* 				computed ? "1" : "";*/
/* 		},*/
/* */
/* 		set: function( elem, value ) {*/
/* 			var style = elem.style,*/
/* 				currentStyle = elem.currentStyle,*/
/* 				opacity = jQuery.isNumeric( value ) ? "alpha(opacity=" + value * 100 + ")" : "",*/
/* 				filter = currentStyle && currentStyle.filter || style.filter || "";*/
/* */
/* 			// IE has trouble with opacity if it does not have layout*/
/* 			// Force it by setting the zoom level*/
/* 			style.zoom = 1;*/
/* */
/* 			// if setting opacity to 1, and no other filters exist - attempt to remove filter attribute #6652*/
/* 			// if value === "", then remove inline opacity #12685*/
/* 			if ( ( value >= 1 || value === "" ) &&*/
/* 					jQuery.trim( filter.replace( ralpha, "" ) ) === "" &&*/
/* 					style.removeAttribute ) {*/
/* */
/* 				// Setting style.filter to null, "" & " " still leave "filter:" in the cssText*/
/* 				// if "filter:" is present at all, clearType is disabled, we want to avoid this*/
/* 				// style.removeAttribute is IE Only, but so apparently is this code path...*/
/* 				style.removeAttribute( "filter" );*/
/* */
/* 				// if there is no filter style applied in a css rule or unset inline opacity, we are done*/
/* 				if ( value === "" || currentStyle && !currentStyle.filter ) {*/
/* 					return;*/
/* 				}*/
/* 			}*/
/* */
/* 			// otherwise, set new filter values*/
/* 			style.filter = ralpha.test( filter ) ?*/
/* 				filter.replace( ralpha, opacity ) :*/
/* 				filter + " " + opacity;*/
/* 		}*/
/* 	};*/
/* }*/
/* */
/* // These hooks cannot be added until DOM ready because the support test*/
/* // for it is not run until after DOM ready*/
/* jQuery(function() {*/
/* 	if ( !jQuery.support.reliableMarginRight ) {*/
/* 		jQuery.cssHooks.marginRight = {*/
/* 			get: function( elem, computed ) {*/
/* 				if ( computed ) {*/
/* 					// WebKit Bug 13343 - getComputedStyle returns wrong value for margin-right*/
/* 					// Work around by temporarily setting element display to inline-block*/
/* 					return jQuery.swap( elem, { "display": "inline-block" },*/
/* 						curCSS, [ elem, "marginRight" ] );*/
/* 				}*/
/* 			}*/
/* 		};*/
/* 	}*/
/* */
/* 	// Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084*/
/* 	// getComputedStyle returns percent when specified for top/left/bottom/right*/
/* 	// rather than make the css module depend on the offset module, we just check for it here*/
/* 	if ( !jQuery.support.pixelPosition && jQuery.fn.position ) {*/
/* 		jQuery.each( [ "top", "left" ], function( i, prop ) {*/
/* 			jQuery.cssHooks[ prop ] = {*/
/* 				get: function( elem, computed ) {*/
/* 					if ( computed ) {*/
/* 						computed = curCSS( elem, prop );*/
/* 						// if curCSS returns percentage, fallback to offset*/
/* 						return rnumnonpx.test( computed ) ?*/
/* 							jQuery( elem ).position()[ prop ] + "px" :*/
/* 							computed;*/
/* 					}*/
/* 				}*/
/* 			};*/
/* 		});*/
/* 	}*/
/* */
/* });*/
/* */
/* if ( jQuery.expr && jQuery.expr.filters ) {*/
/* 	jQuery.expr.filters.hidden = function( elem ) {*/
/* 		// Support: Opera <= 12.12*/
/* 		// Opera reports offsetWidths and offsetHeights less than zero on some elements*/
/* 		return elem.offsetWidth <= 0 && elem.offsetHeight <= 0 ||*/
/* 			(!jQuery.support.reliableHiddenOffsets && ((elem.style && elem.style.display) || jQuery.css( elem, "display" )) === "none");*/
/* 	};*/
/* */
/* 	jQuery.expr.filters.visible = function( elem ) {*/
/* 		return !jQuery.expr.filters.hidden( elem );*/
/* 	};*/
/* }*/
/* */
/* // These hooks are used by animate to expand properties*/
/* jQuery.each({*/
/* 	margin: "",*/
/* 	padding: "",*/
/* 	border: "Width"*/
/* }, function( prefix, suffix ) {*/
/* 	jQuery.cssHooks[ prefix + suffix ] = {*/
/* 		expand: function( value ) {*/
/* 			var i = 0,*/
/* 				expanded = {},*/
/* */
/* 				// assumes a single number if not a string*/
/* 				parts = typeof value === "string" ? value.split(" ") : [ value ];*/
/* */
/* 			for ( ; i < 4; i++ ) {*/
/* 				expanded[ prefix + cssExpand[ i ] + suffix ] =*/
/* 					parts[ i ] || parts[ i - 2 ] || parts[ 0 ];*/
/* 			}*/
/* */
/* 			return expanded;*/
/* 		}*/
/* 	};*/
/* */
/* 	if ( !rmargin.test( prefix ) ) {*/
/* 		jQuery.cssHooks[ prefix + suffix ].set = setPositiveNumber;*/
/* 	}*/
/* });*/
/* var r20 = /%20/g,*/
/* 	rbracket = /\[\]$/,*/
/* 	rCRLF = /\r?\n/g,*/
/* 	rsubmitterTypes = /^(?:submit|button|image|reset|file)$/i,*/
/* 	rsubmittable = /^(?:input|select|textarea|keygen)/i;*/
/* */
/* jQuery.fn.extend({*/
/* 	serialize: function() {*/
/* 		return jQuery.param( this.serializeArray() );*/
/* 	},*/
/* 	serializeArray: function() {*/
/* 		return this.map(function(){*/
/* 			// Can add propHook for "elements" to filter or add form elements*/
/* 			var elements = jQuery.prop( this, "elements" );*/
/* 			return elements ? jQuery.makeArray( elements ) : this;*/
/* 		})*/
/* 		.filter(function(){*/
/* 			var type = this.type;*/
/* 			// Use .is(":disabled") so that fieldset[disabled] works*/
/* 			return this.name && !jQuery( this ).is( ":disabled" ) &&*/
/* 				rsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&*/
/* 				( this.checked || !manipulation_rcheckableType.test( type ) );*/
/* 		})*/
/* 		.map(function( i, elem ){*/
/* 			var val = jQuery( this ).val();*/
/* */
/* 			return val == null ?*/
/* 				null :*/
/* 				jQuery.isArray( val ) ?*/
/* 					jQuery.map( val, function( val ){*/
/* 						return { name: elem.name, value: val.replace( rCRLF, "\r\n" ) };*/
/* 					}) :*/
/* 					{ name: elem.name, value: val.replace( rCRLF, "\r\n" ) };*/
/* 		}).get();*/
/* 	}*/
/* });*/
/* */
/* //Serialize an array of form elements or a set of*/
/* //key/values into a query string*/
/* jQuery.param = function( a, traditional ) {*/
/* 	var prefix,*/
/* 		s = [],*/
/* 		add = function( key, value ) {*/
/* 			// If value is a function, invoke it and return its value*/
/* 			value = jQuery.isFunction( value ) ? value() : ( value == null ? "" : value );*/
/* 			s[ s.length ] = encodeURIComponent( key ) + "=" + encodeURIComponent( value );*/
/* 		};*/
/* */
/* 	// Set traditional to true for jQuery <= 1.3.2 behavior.*/
/* 	if ( traditional === undefined ) {*/
/* 		traditional = jQuery.ajaxSettings && jQuery.ajaxSettings.traditional;*/
/* 	}*/
/* */
/* 	// If an array was passed in, assume that it is an array of form elements.*/
/* 	if ( jQuery.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {*/
/* 		// Serialize the form elements*/
/* 		jQuery.each( a, function() {*/
/* 			add( this.name, this.value );*/
/* 		});*/
/* */
/* 	} else {*/
/* 		// If traditional, encode the "old" way (the way 1.3.2 or older*/
/* 		// did it), otherwise encode params recursively.*/
/* 		for ( prefix in a ) {*/
/* 			buildParams( prefix, a[ prefix ], traditional, add );*/
/* 		}*/
/* 	}*/
/* */
/* 	// Return the resulting serialization*/
/* 	return s.join( "&" ).replace( r20, "+" );*/
/* };*/
/* */
/* function buildParams( prefix, obj, traditional, add ) {*/
/* 	var name;*/
/* */
/* 	if ( jQuery.isArray( obj ) ) {*/
/* 		// Serialize array item.*/
/* 		jQuery.each( obj, function( i, v ) {*/
/* 			if ( traditional || rbracket.test( prefix ) ) {*/
/* 				// Treat each array item as a scalar.*/
/* 				add( prefix, v );*/
/* */
/* 			} else {*/
/* 				// Item is non-scalar (array or object), encode its numeric index.*/
/* 				buildParams( prefix + "[" + ( typeof v === "object" ? i : "" ) + "]", v, traditional, add );*/
/* 			}*/
/* 		});*/
/* */
/* 	} else if ( !traditional && jQuery.type( obj ) === "object" ) {*/
/* 		// Serialize object item.*/
/* 		for ( name in obj ) {*/
/* 			buildParams( prefix + "[" + name + "]", obj[ name ], traditional, add );*/
/* 		}*/
/* */
/* 	} else {*/
/* 		// Serialize scalar item.*/
/* 		add( prefix, obj );*/
/* 	}*/
/* }*/
/* jQuery.each( ("blur focus focusin focusout load resize scroll unload click dblclick " +*/
/* 	"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave " +*/
/* 	"change select submit keydown keypress keyup error contextmenu").split(" "), function( i, name ) {*/
/* */
/* 	// Handle event binding*/
/* 	jQuery.fn[ name ] = function( data, fn ) {*/
/* 		return arguments.length > 0 ?*/
/* 			this.on( name, null, data, fn ) :*/
/* 			this.trigger( name );*/
/* 	};*/
/* });*/
/* */
/* jQuery.fn.hover = function( fnOver, fnOut ) {*/
/* 	return this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );*/
/* };*/
/* var*/
/* 	// Document location*/
/* 	ajaxLocParts,*/
/* 	ajaxLocation,*/
/* 	ajax_nonce = jQuery.now(),*/
/* */
/* 	ajax_rquery = /\?/,*/
/* 	rhash = /#.*$/,*/
/* 	rts = /([?&])_=[^&]*//* ,*/
/* 	rheaders = /^(.*?):[ \t]*([^\r\n]*)\r?$/mg, // IE leaves an \r character at EOL*/
/* 	// #7653, #8125, #8152: local protocol detection*/
/* 	rlocalProtocol = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,*/
/* 	rnoContent = /^(?:GET|HEAD)$/,*/
/* 	rprotocol = /^\/\//,*/
/* 	rurl = /^([\w.+-]+:)(?:\/\/([^\/?#:]*)(?::(\d+)|)|)/,*/
/* */
/* 	// Keep a copy of the old load method*/
/* 	_load = jQuery.fn.load,*/
/* */
/* 	/* Prefilters*/
/* 	 * 1) They are useful to introduce custom dataTypes (see ajax/jsonp.js for an example)*/
/* 	 * 2) These are called:*/
/* 	 *    - BEFORE asking for a transport*/
/* 	 *    - AFTER param serialization (s.data is a string if s.processData is true)*/
/* 	 * 3) key is the dataType*/
/* 	 * 4) the catchall symbol "*" can be used*/
/* 	 * 5) execution will start with transport dataType and THEN continue down to "*" if needed*/
/* 	 *//* */
/* 	prefilters = {},*/
/* */
/* 	/* Transports bindings*/
/* 	 * 1) key is the dataType*/
/* 	 * 2) the catchall symbol "*" can be used*/
/* 	 * 3) selection will start with transport dataType and THEN go to "*" if needed*/
/* 	 *//* */
/* 	transports = {},*/
/* */
/* 	// Avoid comment-prolog char sequence (#10098); must appease lint and evade compression*/
/* 	allTypes = "*//* ".concat("*");*/
/* */
/* // #8138, IE may throw an exception when accessing*/
/* // a field from window.location if document.domain has been set*/
/* try {*/
/* 	ajaxLocation = location.href;*/
/* } catch( e ) {*/
/* 	// Use the href attribute of an A element*/
/* 	// since IE will modify it given document.location*/
/* 	ajaxLocation = document.createElement( "a" );*/
/* 	ajaxLocation.href = "";*/
/* 	ajaxLocation = ajaxLocation.href;*/
/* }*/
/* */
/* // Segment location into parts*/
/* ajaxLocParts = rurl.exec( ajaxLocation.toLowerCase() ) || [];*/
/* */
/* // Base "constructor" for jQuery.ajaxPrefilter and jQuery.ajaxTransport*/
/* function addToPrefiltersOrTransports( structure ) {*/
/* */
/* 	// dataTypeExpression is optional and defaults to "*"*/
/* 	return function( dataTypeExpression, func ) {*/
/* */
/* 		if ( typeof dataTypeExpression !== "string" ) {*/
/* 			func = dataTypeExpression;*/
/* 			dataTypeExpression = "*";*/
/* 		}*/
/* */
/* 		var dataType,*/
/* 			i = 0,*/
/* 			dataTypes = dataTypeExpression.toLowerCase().match( core_rnotwhite ) || [];*/
/* */
/* 		if ( jQuery.isFunction( func ) ) {*/
/* 			// For each dataType in the dataTypeExpression*/
/* 			while ( (dataType = dataTypes[i++]) ) {*/
/* 				// Prepend if requested*/
/* 				if ( dataType[0] === "+" ) {*/
/* 					dataType = dataType.slice( 1 ) || "*";*/
/* 					(structure[ dataType ] = structure[ dataType ] || []).unshift( func );*/
/* */
/* 				// Otherwise append*/
/* 				} else {*/
/* 					(structure[ dataType ] = structure[ dataType ] || []).push( func );*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	};*/
/* }*/
/* */
/* // Base inspection function for prefilters and transports*/
/* function inspectPrefiltersOrTransports( structure, options, originalOptions, jqXHR ) {*/
/* */
/* 	var inspected = {},*/
/* 		seekingTransport = ( structure === transports );*/
/* */
/* 	function inspect( dataType ) {*/
/* 		var selected;*/
/* 		inspected[ dataType ] = true;*/
/* 		jQuery.each( structure[ dataType ] || [], function( _, prefilterOrFactory ) {*/
/* 			var dataTypeOrTransport = prefilterOrFactory( options, originalOptions, jqXHR );*/
/* 			if( typeof dataTypeOrTransport === "string" && !seekingTransport && !inspected[ dataTypeOrTransport ] ) {*/
/* 				options.dataTypes.unshift( dataTypeOrTransport );*/
/* 				inspect( dataTypeOrTransport );*/
/* 				return false;*/
/* 			} else if ( seekingTransport ) {*/
/* 				return !( selected = dataTypeOrTransport );*/
/* 			}*/
/* 		});*/
/* 		return selected;*/
/* 	}*/
/* */
/* 	return inspect( options.dataTypes[ 0 ] ) || !inspected[ "*" ] && inspect( "*" );*/
/* }*/
/* */
/* // A special extend for ajax options*/
/* // that takes "flat" options (not to be deep extended)*/
/* // Fixes #9887*/
/* function ajaxExtend( target, src ) {*/
/* 	var deep, key,*/
/* 		flatOptions = jQuery.ajaxSettings.flatOptions || {};*/
/* */
/* 	for ( key in src ) {*/
/* 		if ( src[ key ] !== undefined ) {*/
/* 			( flatOptions[ key ] ? target : ( deep || (deep = {}) ) )[ key ] = src[ key ];*/
/* 		}*/
/* 	}*/
/* 	if ( deep ) {*/
/* 		jQuery.extend( true, target, deep );*/
/* 	}*/
/* */
/* 	return target;*/
/* }*/
/* */
/* jQuery.fn.load = function( url, params, callback ) {*/
/* 	if ( typeof url !== "string" && _load ) {*/
/* 		return _load.apply( this, arguments );*/
/* 	}*/
/* */
/* 	var selector, response, type,*/
/* 		self = this,*/
/* 		off = url.indexOf(" ");*/
/* */
/* 	if ( off >= 0 ) {*/
/* 		selector = url.slice( off, url.length );*/
/* 		url = url.slice( 0, off );*/
/* 	}*/
/* */
/* 	// If it's a function*/
/* 	if ( jQuery.isFunction( params ) ) {*/
/* */
/* 		// We assume that it's the callback*/
/* 		callback = params;*/
/* 		params = undefined;*/
/* */
/* 	// Otherwise, build a param string*/
/* 	} else if ( params && typeof params === "object" ) {*/
/* 		type = "POST";*/
/* 	}*/
/* */
/* 	// If we have elements to modify, make the request*/
/* 	if ( self.length > 0 ) {*/
/* 		jQuery.ajax({*/
/* 			url: url,*/
/* */
/* 			// if "type" variable is undefined, then "GET" method will be used*/
/* 			type: type,*/
/* 			dataType: "html",*/
/* 			data: params*/
/* 		}).done(function( responseText ) {*/
/* */
/* 			// Save response for use in complete callback*/
/* 			response = arguments;*/
/* */
/* 			self.html( selector ?*/
/* */
/* 				// If a selector was specified, locate the right elements in a dummy div*/
/* 				// Exclude scripts to avoid IE 'Permission Denied' errors*/
/* 				jQuery("<div>").append( jQuery.parseHTML( responseText ) ).find( selector ) :*/
/* */
/* 				// Otherwise use the full result*/
/* 				responseText );*/
/* */
/* 		}).complete( callback && function( jqXHR, status ) {*/
/* 			self.each( callback, response || [ jqXHR.responseText, status, jqXHR ] );*/
/* 		});*/
/* 	}*/
/* */
/* 	return this;*/
/* };*/
/* */
/* // Attach a bunch of functions for handling common AJAX events*/
/* jQuery.each( [ "ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend" ], function( i, type ){*/
/* 	jQuery.fn[ type ] = function( fn ){*/
/* 		return this.on( type, fn );*/
/* 	};*/
/* });*/
/* */
/* jQuery.each( [ "get", "post" ], function( i, method ) {*/
/* 	jQuery[ method ] = function( url, data, callback, type ) {*/
/* 		// shift arguments if data argument was omitted*/
/* 		if ( jQuery.isFunction( data ) ) {*/
/* 			type = type || callback;*/
/* 			callback = data;*/
/* 			data = undefined;*/
/* 		}*/
/* */
/* 		return jQuery.ajax({*/
/* 			url: url,*/
/* 			type: method,*/
/* 			dataType: type,*/
/* 			data: data,*/
/* 			success: callback*/
/* 		});*/
/* 	};*/
/* });*/
/* */
/* jQuery.extend({*/
/* */
/* 	// Counter for holding the number of active queries*/
/* 	active: 0,*/
/* */
/* 	// Last-Modified header cache for next request*/
/* 	lastModified: {},*/
/* 	etag: {},*/
/* */
/* 	ajaxSettings: {*/
/* 		url: ajaxLocation,*/
/* 		type: "GET",*/
/* 		isLocal: rlocalProtocol.test( ajaxLocParts[ 1 ] ),*/
/* 		global: true,*/
/* 		processData: true,*/
/* 		async: true,*/
/* 		contentType: "application/x-www-form-urlencoded; charset=UTF-8",*/
/* 		/**/
/* 		timeout: 0,*/
/* 		data: null,*/
/* 		dataType: null,*/
/* 		username: null,*/
/* 		password: null,*/
/* 		cache: null,*/
/* 		throws: false,*/
/* 		traditional: false,*/
/* 		headers: {},*/
/* 		*//* */
/* */
/* 		accepts: {*/
/* 			"*": allTypes,*/
/* 			text: "text/plain",*/
/* 			html: "text/html",*/
/* 			xml: "application/xml, text/xml",*/
/* 			json: "application/json, text/javascript"*/
/* 		},*/
/* */
/* 		contents: {*/
/* 			xml: /xml/,*/
/* 			html: /html/,*/
/* 			json: /json/*/
/* 		},*/
/* */
/* 		responseFields: {*/
/* 			xml: "responseXML",*/
/* 			text: "responseText"*/
/* 		},*/
/* */
/* 		// Data converters*/
/* 		// Keys separate source (or catchall "*") and destination types with a single space*/
/* 		converters: {*/
/* */
/* 			// Convert anything to text*/
/* 			"* text": window.String,*/
/* */
/* 			// Text to html (true = no transformation)*/
/* 			"text html": true,*/
/* */
/* 			// Evaluate text as a json expression*/
/* 			"text json": jQuery.parseJSON,*/
/* */
/* 			// Parse text as xml*/
/* 			"text xml": jQuery.parseXML*/
/* 		},*/
/* */
/* 		// For options that shouldn't be deep extended:*/
/* 		// you can add your own custom options here if*/
/* 		// and when you create one that shouldn't be*/
/* 		// deep extended (see ajaxExtend)*/
/* 		flatOptions: {*/
/* 			url: true,*/
/* 			context: true*/
/* 		}*/
/* 	},*/
/* */
/* 	// Creates a full fledged settings object into target*/
/* 	// with both ajaxSettings and settings fields.*/
/* 	// If target is omitted, writes into ajaxSettings.*/
/* 	ajaxSetup: function( target, settings ) {*/
/* 		return settings ?*/
/* */
/* 			// Building a settings object*/
/* 			ajaxExtend( ajaxExtend( target, jQuery.ajaxSettings ), settings ) :*/
/* */
/* 			// Extending ajaxSettings*/
/* 			ajaxExtend( jQuery.ajaxSettings, target );*/
/* 	},*/
/* */
/* 	ajaxPrefilter: addToPrefiltersOrTransports( prefilters ),*/
/* 	ajaxTransport: addToPrefiltersOrTransports( transports ),*/
/* */
/* 	// Main method*/
/* 	ajax: function( url, options ) {*/
/* */
/* 		// If url is an object, simulate pre-1.5 signature*/
/* 		if ( typeof url === "object" ) {*/
/* 			options = url;*/
/* 			url = undefined;*/
/* 		}*/
/* */
/* 		// Force options to be an object*/
/* 		options = options || {};*/
/* */
/* 		var // Cross-domain detection vars*/
/* 			parts,*/
/* 			// Loop variable*/
/* 			i,*/
/* 			// URL without anti-cache param*/
/* 			cacheURL,*/
/* 			// Response headers as string*/
/* 			responseHeadersString,*/
/* 			// timeout handle*/
/* 			timeoutTimer,*/
/* */
/* 			// To know if global events are to be dispatched*/
/* 			fireGlobals,*/
/* */
/* 			transport,*/
/* 			// Response headers*/
/* 			responseHeaders,*/
/* 			// Create the final options object*/
/* 			s = jQuery.ajaxSetup( {}, options ),*/
/* 			// Callbacks context*/
/* 			callbackContext = s.context || s,*/
/* 			// Context for global events is callbackContext if it is a DOM node or jQuery collection*/
/* 			globalEventContext = s.context && ( callbackContext.nodeType || callbackContext.jquery ) ?*/
/* 				jQuery( callbackContext ) :*/
/* 				jQuery.event,*/
/* 			// Deferreds*/
/* 			deferred = jQuery.Deferred(),*/
/* 			completeDeferred = jQuery.Callbacks("once memory"),*/
/* 			// Status-dependent callbacks*/
/* 			statusCode = s.statusCode || {},*/
/* 			// Headers (they are sent all at once)*/
/* 			requestHeaders = {},*/
/* 			requestHeadersNames = {},*/
/* 			// The jqXHR state*/
/* 			state = 0,*/
/* 			// Default abort message*/
/* 			strAbort = "canceled",*/
/* 			// Fake xhr*/
/* 			jqXHR = {*/
/* 				readyState: 0,*/
/* */
/* 				// Builds headers hashtable if needed*/
/* 				getResponseHeader: function( key ) {*/
/* 					var match;*/
/* 					if ( state === 2 ) {*/
/* 						if ( !responseHeaders ) {*/
/* 							responseHeaders = {};*/
/* 							while ( (match = rheaders.exec( responseHeadersString )) ) {*/
/* 								responseHeaders[ match[1].toLowerCase() ] = match[ 2 ];*/
/* 							}*/
/* 						}*/
/* 						match = responseHeaders[ key.toLowerCase() ];*/
/* 					}*/
/* 					return match == null ? null : match;*/
/* 				},*/
/* */
/* 				// Raw string*/
/* 				getAllResponseHeaders: function() {*/
/* 					return state === 2 ? responseHeadersString : null;*/
/* 				},*/
/* */
/* 				// Caches the header*/
/* 				setRequestHeader: function( name, value ) {*/
/* 					var lname = name.toLowerCase();*/
/* 					if ( !state ) {*/
/* 						name = requestHeadersNames[ lname ] = requestHeadersNames[ lname ] || name;*/
/* 						requestHeaders[ name ] = value;*/
/* 					}*/
/* 					return this;*/
/* 				},*/
/* */
/* 				// Overrides response content-type header*/
/* 				overrideMimeType: function( type ) {*/
/* 					if ( !state ) {*/
/* 						s.mimeType = type;*/
/* 					}*/
/* 					return this;*/
/* 				},*/
/* */
/* 				// Status-dependent callbacks*/
/* 				statusCode: function( map ) {*/
/* 					var code;*/
/* 					if ( map ) {*/
/* 						if ( state < 2 ) {*/
/* 							for ( code in map ) {*/
/* 								// Lazy-add the new callback in a way that preserves old ones*/
/* 								statusCode[ code ] = [ statusCode[ code ], map[ code ] ];*/
/* 							}*/
/* 						} else {*/
/* 							// Execute the appropriate callbacks*/
/* 							jqXHR.always( map[ jqXHR.status ] );*/
/* 						}*/
/* 					}*/
/* 					return this;*/
/* 				},*/
/* */
/* 				// Cancel the request*/
/* 				abort: function( statusText ) {*/
/* 					var finalText = statusText || strAbort;*/
/* 					if ( transport ) {*/
/* 						transport.abort( finalText );*/
/* 					}*/
/* 					done( 0, finalText );*/
/* 					return this;*/
/* 				}*/
/* 			};*/
/* */
/* 		// Attach deferreds*/
/* 		deferred.promise( jqXHR ).complete = completeDeferred.add;*/
/* 		jqXHR.success = jqXHR.done;*/
/* 		jqXHR.error = jqXHR.fail;*/
/* */
/* 		// Remove hash character (#7531: and string promotion)*/
/* 		// Add protocol if not provided (#5866: IE7 issue with protocol-less urls)*/
/* 		// Handle falsy url in the settings object (#10093: consistency with old signature)*/
/* 		// We also use the url parameter if available*/
/* 		s.url = ( ( url || s.url || ajaxLocation ) + "" ).replace( rhash, "" ).replace( rprotocol, ajaxLocParts[ 1 ] + "//" );*/
/* */
/* 		// Alias method option to type as per ticket #12004*/
/* 		s.type = options.method || options.type || s.method || s.type;*/
/* */
/* 		// Extract dataTypes list*/
/* 		s.dataTypes = jQuery.trim( s.dataType || "*" ).toLowerCase().match( core_rnotwhite ) || [""];*/
/* */
/* 		// A cross-domain request is in order when we have a protocol:host:port mismatch*/
/* 		if ( s.crossDomain == null ) {*/
/* 			parts = rurl.exec( s.url.toLowerCase() );*/
/* 			s.crossDomain = !!( parts &&*/
/* 				( parts[ 1 ] !== ajaxLocParts[ 1 ] || parts[ 2 ] !== ajaxLocParts[ 2 ] ||*/
/* 					( parts[ 3 ] || ( parts[ 1 ] === "http:" ? 80 : 443 ) ) !=*/
/* 						( ajaxLocParts[ 3 ] || ( ajaxLocParts[ 1 ] === "http:" ? 80 : 443 ) ) )*/
/* 			);*/
/* 		}*/
/* */
/* 		// Convert data if not already a string*/
/* 		if ( s.data && s.processData && typeof s.data !== "string" ) {*/
/* 			s.data = jQuery.param( s.data, s.traditional );*/
/* 		}*/
/* */
/* 		// Apply prefilters*/
/* 		inspectPrefiltersOrTransports( prefilters, s, options, jqXHR );*/
/* */
/* 		// If request was aborted inside a prefilter, stop there*/
/* 		if ( state === 2 ) {*/
/* 			return jqXHR;*/
/* 		}*/
/* */
/* 		// We can fire global events as of now if asked to*/
/* 		fireGlobals = s.global;*/
/* */
/* 		// Watch for a new set of requests*/
/* 		if ( fireGlobals && jQuery.active++ === 0 ) {*/
/* 			jQuery.event.trigger("ajaxStart");*/
/* 		}*/
/* */
/* 		// Uppercase the type*/
/* 		s.type = s.type.toUpperCase();*/
/* */
/* 		// Determine if request has content*/
/* 		s.hasContent = !rnoContent.test( s.type );*/
/* */
/* 		// Save the URL in case we're toying with the If-Modified-Since*/
/* 		// and/or If-None-Match header later on*/
/* 		cacheURL = s.url;*/
/* */
/* 		// More options handling for requests with no content*/
/* 		if ( !s.hasContent ) {*/
/* */
/* 			// If data is available, append data to url*/
/* 			if ( s.data ) {*/
/* 				cacheURL = ( s.url += ( ajax_rquery.test( cacheURL ) ? "&" : "?" ) + s.data );*/
/* 				// #9682: remove data so that it's not used in an eventual retry*/
/* 				delete s.data;*/
/* 			}*/
/* */
/* 			// Add anti-cache in url if needed*/
/* 			if ( s.cache === false ) {*/
/* 				s.url = rts.test( cacheURL ) ?*/
/* */
/* 					// If there is already a '_' parameter, set its value*/
/* 					cacheURL.replace( rts, "$1_=" + ajax_nonce++ ) :*/
/* */
/* 					// Otherwise add one to the end*/
/* 					cacheURL + ( ajax_rquery.test( cacheURL ) ? "&" : "?" ) + "_=" + ajax_nonce++;*/
/* 			}*/
/* 		}*/
/* */
/* 		// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.*/
/* 		if ( s.ifModified ) {*/
/* 			if ( jQuery.lastModified[ cacheURL ] ) {*/
/* 				jqXHR.setRequestHeader( "If-Modified-Since", jQuery.lastModified[ cacheURL ] );*/
/* 			}*/
/* 			if ( jQuery.etag[ cacheURL ] ) {*/
/* 				jqXHR.setRequestHeader( "If-None-Match", jQuery.etag[ cacheURL ] );*/
/* 			}*/
/* 		}*/
/* */
/* 		// Set the correct header, if data is being sent*/
/* 		if ( s.data && s.hasContent && s.contentType !== false || options.contentType ) {*/
/* 			jqXHR.setRequestHeader( "Content-Type", s.contentType );*/
/* 		}*/
/* */
/* 		// Set the Accepts header for the server, depending on the dataType*/
/* 		jqXHR.setRequestHeader(*/
/* 			"Accept",*/
/* 			s.dataTypes[ 0 ] && s.accepts[ s.dataTypes[0] ] ?*/
/* 				s.accepts[ s.dataTypes[0] ] + ( s.dataTypes[ 0 ] !== "*" ? ", " + allTypes + "; q=0.01" : "" ) :*/
/* 				s.accepts[ "*" ]*/
/* 		);*/
/* */
/* 		// Check for headers option*/
/* 		for ( i in s.headers ) {*/
/* 			jqXHR.setRequestHeader( i, s.headers[ i ] );*/
/* 		}*/
/* */
/* 		// Allow custom headers/mimetypes and early abort*/
/* 		if ( s.beforeSend && ( s.beforeSend.call( callbackContext, jqXHR, s ) === false || state === 2 ) ) {*/
/* 			// Abort if not done already and return*/
/* 			return jqXHR.abort();*/
/* 		}*/
/* */
/* 		// aborting is no longer a cancellation*/
/* 		strAbort = "abort";*/
/* */
/* 		// Install callbacks on deferreds*/
/* 		for ( i in { success: 1, error: 1, complete: 1 } ) {*/
/* 			jqXHR[ i ]( s[ i ] );*/
/* 		}*/
/* */
/* 		// Get transport*/
/* 		transport = inspectPrefiltersOrTransports( transports, s, options, jqXHR );*/
/* */
/* 		// If no transport, we auto-abort*/
/* 		if ( !transport ) {*/
/* 			done( -1, "No Transport" );*/
/* 		} else {*/
/* 			jqXHR.readyState = 1;*/
/* */
/* 			// Send global event*/
/* 			if ( fireGlobals ) {*/
/* 				globalEventContext.trigger( "ajaxSend", [ jqXHR, s ] );*/
/* 			}*/
/* 			// Timeout*/
/* 			if ( s.async && s.timeout > 0 ) {*/
/* 				timeoutTimer = setTimeout(function() {*/
/* 					jqXHR.abort("timeout");*/
/* 				}, s.timeout );*/
/* 			}*/
/* */
/* 			try {*/
/* 				state = 1;*/
/* 				transport.send( requestHeaders, done );*/
/* 			} catch ( e ) {*/
/* 				// Propagate exception as error if not done*/
/* 				if ( state < 2 ) {*/
/* 					done( -1, e );*/
/* 				// Simply rethrow otherwise*/
/* 				} else {*/
/* 					throw e;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		// Callback for when everything is done*/
/* 		function done( status, nativeStatusText, responses, headers ) {*/
/* 			var isSuccess, success, error, response, modified,*/
/* 				statusText = nativeStatusText;*/
/* */
/* 			// Called once*/
/* 			if ( state === 2 ) {*/
/* 				return;*/
/* 			}*/
/* */
/* 			// State is "done" now*/
/* 			state = 2;*/
/* */
/* 			// Clear timeout if it exists*/
/* 			if ( timeoutTimer ) {*/
/* 				clearTimeout( timeoutTimer );*/
/* 			}*/
/* */
/* 			// Dereference transport for early garbage collection*/
/* 			// (no matter how long the jqXHR object will be used)*/
/* 			transport = undefined;*/
/* */
/* 			// Cache response headers*/
/* 			responseHeadersString = headers || "";*/
/* */
/* 			// Set readyState*/
/* 			jqXHR.readyState = status > 0 ? 4 : 0;*/
/* */
/* 			// Get response data*/
/* 			if ( responses ) {*/
/* 				response = ajaxHandleResponses( s, jqXHR, responses );*/
/* 			}*/
/* */
/* 			// If successful, handle type chaining*/
/* 			if ( status >= 200 && status < 300 || status === 304 ) {*/
/* */
/* 				// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.*/
/* 				if ( s.ifModified ) {*/
/* 					modified = jqXHR.getResponseHeader("Last-Modified");*/
/* 					if ( modified ) {*/
/* 						jQuery.lastModified[ cacheURL ] = modified;*/
/* 					}*/
/* 					modified = jqXHR.getResponseHeader("etag");*/
/* 					if ( modified ) {*/
/* 						jQuery.etag[ cacheURL ] = modified;*/
/* 					}*/
/* 				}*/
/* */
/* 				// if no content*/
/* 				if ( status === 204 ) {*/
/* 					isSuccess = true;*/
/* 					statusText = "nocontent";*/
/* */
/* 				// if not modified*/
/* 				} else if ( status === 304 ) {*/
/* 					isSuccess = true;*/
/* 					statusText = "notmodified";*/
/* */
/* 				// If we have data, let's convert it*/
/* 				} else {*/
/* 					isSuccess = ajaxConvert( s, response );*/
/* 					statusText = isSuccess.state;*/
/* 					success = isSuccess.data;*/
/* 					error = isSuccess.error;*/
/* 					isSuccess = !error;*/
/* 				}*/
/* 			} else {*/
/* 				// We extract error from statusText*/
/* 				// then normalize statusText and status for non-aborts*/
/* 				error = statusText;*/
/* 				if ( status || !statusText ) {*/
/* 					statusText = "error";*/
/* 					if ( status < 0 ) {*/
/* 						status = 0;*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			// Set data for the fake xhr object*/
/* 			jqXHR.status = status;*/
/* 			jqXHR.statusText = ( nativeStatusText || statusText ) + "";*/
/* */
/* 			// Success/Error*/
/* 			if ( isSuccess ) {*/
/* 				deferred.resolveWith( callbackContext, [ success, statusText, jqXHR ] );*/
/* 			} else {*/
/* 				deferred.rejectWith( callbackContext, [ jqXHR, statusText, error ] );*/
/* 			}*/
/* */
/* 			// Status-dependent callbacks*/
/* 			jqXHR.statusCode( statusCode );*/
/* 			statusCode = undefined;*/
/* */
/* 			if ( fireGlobals ) {*/
/* 				globalEventContext.trigger( isSuccess ? "ajaxSuccess" : "ajaxError",*/
/* 					[ jqXHR, s, isSuccess ? success : error ] );*/
/* 			}*/
/* */
/* 			// Complete*/
/* 			completeDeferred.fireWith( callbackContext, [ jqXHR, statusText ] );*/
/* */
/* 			if ( fireGlobals ) {*/
/* 				globalEventContext.trigger( "ajaxComplete", [ jqXHR, s ] );*/
/* 				// Handle the global AJAX counter*/
/* 				if ( !( --jQuery.active ) ) {*/
/* 					jQuery.event.trigger("ajaxStop");*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		return jqXHR;*/
/* 	},*/
/* */
/* 	getScript: function( url, callback ) {*/
/* 		return jQuery.get( url, undefined, callback, "script" );*/
/* 	},*/
/* */
/* 	getJSON: function( url, data, callback ) {*/
/* 		return jQuery.get( url, data, callback, "json" );*/
/* 	}*/
/* });*/
/* */
/* /* Handles responses to an ajax request:*/
/*  * - sets all responseXXX fields accordingly*/
/*  * - finds the right dataType (mediates between content-type and expected dataType)*/
/*  * - returns the corresponding response*/
/*  *//* */
/* function ajaxHandleResponses( s, jqXHR, responses ) {*/
/* 	var firstDataType, ct, finalDataType, type,*/
/* 		contents = s.contents,*/
/* 		dataTypes = s.dataTypes,*/
/* 		responseFields = s.responseFields;*/
/* */
/* 	// Fill responseXXX fields*/
/* 	for ( type in responseFields ) {*/
/* 		if ( type in responses ) {*/
/* 			jqXHR[ responseFields[type] ] = responses[ type ];*/
/* 		}*/
/* 	}*/
/* */
/* 	// Remove auto dataType and get content-type in the process*/
/* 	while( dataTypes[ 0 ] === "*" ) {*/
/* 		dataTypes.shift();*/
/* 		if ( ct === undefined ) {*/
/* 			ct = s.mimeType || jqXHR.getResponseHeader("Content-Type");*/
/* 		}*/
/* 	}*/
/* */
/* 	// Check if we're dealing with a known content-type*/
/* 	if ( ct ) {*/
/* 		for ( type in contents ) {*/
/* 			if ( contents[ type ] && contents[ type ].test( ct ) ) {*/
/* 				dataTypes.unshift( type );*/
/* 				break;*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	// Check to see if we have a response for the expected dataType*/
/* 	if ( dataTypes[ 0 ] in responses ) {*/
/* 		finalDataType = dataTypes[ 0 ];*/
/* 	} else {*/
/* 		// Try convertible dataTypes*/
/* 		for ( type in responses ) {*/
/* 			if ( !dataTypes[ 0 ] || s.converters[ type + " " + dataTypes[0] ] ) {*/
/* 				finalDataType = type;*/
/* 				break;*/
/* 			}*/
/* 			if ( !firstDataType ) {*/
/* 				firstDataType = type;*/
/* 			}*/
/* 		}*/
/* 		// Or just use first one*/
/* 		finalDataType = finalDataType || firstDataType;*/
/* 	}*/
/* */
/* 	// If we found a dataType*/
/* 	// We add the dataType to the list if needed*/
/* 	// and return the corresponding response*/
/* 	if ( finalDataType ) {*/
/* 		if ( finalDataType !== dataTypes[ 0 ] ) {*/
/* 			dataTypes.unshift( finalDataType );*/
/* 		}*/
/* 		return responses[ finalDataType ];*/
/* 	}*/
/* }*/
/* */
/* // Chain conversions given the request and the original response*/
/* function ajaxConvert( s, response ) {*/
/* 	var conv2, current, conv, tmp,*/
/* 		converters = {},*/
/* 		i = 0,*/
/* 		// Work with a copy of dataTypes in case we need to modify it for conversion*/
/* 		dataTypes = s.dataTypes.slice(),*/
/* 		prev = dataTypes[ 0 ];*/
/* */
/* 	// Apply the dataFilter if provided*/
/* 	if ( s.dataFilter ) {*/
/* 		response = s.dataFilter( response, s.dataType );*/
/* 	}*/
/* */
/* 	// Create converters map with lowercased keys*/
/* 	if ( dataTypes[ 1 ] ) {*/
/* 		for ( conv in s.converters ) {*/
/* 			converters[ conv.toLowerCase() ] = s.converters[ conv ];*/
/* 		}*/
/* 	}*/
/* */
/* 	// Convert to each sequential dataType, tolerating list modification*/
/* 	for ( ; (current = dataTypes[++i]); ) {*/
/* */
/* 		// There's only work to do if current dataType is non-auto*/
/* 		if ( current !== "*" ) {*/
/* */
/* 			// Convert response if prev dataType is non-auto and differs from current*/
/* 			if ( prev !== "*" && prev !== current ) {*/
/* */
/* 				// Seek a direct converter*/
/* 				conv = converters[ prev + " " + current ] || converters[ "* " + current ];*/
/* */
/* 				// If none found, seek a pair*/
/* 				if ( !conv ) {*/
/* 					for ( conv2 in converters ) {*/
/* */
/* 						// If conv2 outputs current*/
/* 						tmp = conv2.split(" ");*/
/* 						if ( tmp[ 1 ] === current ) {*/
/* */
/* 							// If prev can be converted to accepted input*/
/* 							conv = converters[ prev + " " + tmp[ 0 ] ] ||*/
/* 								converters[ "* " + tmp[ 0 ] ];*/
/* 							if ( conv ) {*/
/* 								// Condense equivalence converters*/
/* 								if ( conv === true ) {*/
/* 									conv = converters[ conv2 ];*/
/* */
/* 								// Otherwise, insert the intermediate dataType*/
/* 								} else if ( converters[ conv2 ] !== true ) {*/
/* 									current = tmp[ 0 ];*/
/* 									dataTypes.splice( i--, 0, current );*/
/* 								}*/
/* */
/* 								break;*/
/* 							}*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				// Apply converter (if not an equivalence)*/
/* 				if ( conv !== true ) {*/
/* */
/* 					// Unless errors are allowed to bubble, catch and return them*/
/* 					if ( conv && s["throws"] ) {*/
/* 						response = conv( response );*/
/* 					} else {*/
/* 						try {*/
/* 							response = conv( response );*/
/* 						} catch ( e ) {*/
/* 							return { state: "parsererror", error: conv ? e : "No conversion from " + prev + " to " + current };*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			// Update prev for next iteration*/
/* 			prev = current;*/
/* 		}*/
/* 	}*/
/* */
/* 	return { state: "success", data: response };*/
/* }*/
/* // Install script dataType*/
/* jQuery.ajaxSetup({*/
/* 	accepts: {*/
/* 		script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"*/
/* 	},*/
/* 	contents: {*/
/* 		script: /(?:java|ecma)script/*/
/* 	},*/
/* 	converters: {*/
/* 		"text script": function( text ) {*/
/* 			jQuery.globalEval( text );*/
/* 			return text;*/
/* 		}*/
/* 	}*/
/* });*/
/* */
/* // Handle cache's special case and global*/
/* jQuery.ajaxPrefilter( "script", function( s ) {*/
/* 	if ( s.cache === undefined ) {*/
/* 		s.cache = false;*/
/* 	}*/
/* 	if ( s.crossDomain ) {*/
/* 		s.type = "GET";*/
/* 		s.global = false;*/
/* 	}*/
/* });*/
/* */
/* // Bind script tag hack transport*/
/* jQuery.ajaxTransport( "script", function(s) {*/
/* */
/* 	// This transport only deals with cross domain requests*/
/* 	if ( s.crossDomain ) {*/
/* */
/* 		var script,*/
/* 			head = document.head || jQuery("head")[0] || document.documentElement;*/
/* */
/* 		return {*/
/* */
/* 			send: function( _, callback ) {*/
/* */
/* 				script = document.createElement("script");*/
/* */
/* 				script.async = true;*/
/* */
/* 				if ( s.scriptCharset ) {*/
/* 					script.charset = s.scriptCharset;*/
/* 				}*/
/* */
/* 				script.src = s.url;*/
/* */
/* 				// Attach handlers for all browsers*/
/* 				script.onload = script.onreadystatechange = function( _, isAbort ) {*/
/* */
/* 					if ( isAbort || !script.readyState || /loaded|complete/.test( script.readyState ) ) {*/
/* */
/* 						// Handle memory leak in IE*/
/* 						script.onload = script.onreadystatechange = null;*/
/* */
/* 						// Remove the script*/
/* 						if ( script.parentNode ) {*/
/* 							script.parentNode.removeChild( script );*/
/* 						}*/
/* */
/* 						// Dereference the script*/
/* 						script = null;*/
/* */
/* 						// Callback if not abort*/
/* 						if ( !isAbort ) {*/
/* 							callback( 200, "success" );*/
/* 						}*/
/* 					}*/
/* 				};*/
/* */
/* 				// Circumvent IE6 bugs with base elements (#2709 and #4378) by prepending*/
/* 				// Use native DOM manipulation to avoid our domManip AJAX trickery*/
/* 				head.insertBefore( script, head.firstChild );*/
/* 			},*/
/* */
/* 			abort: function() {*/
/* 				if ( script ) {*/
/* 					script.onload( undefined, true );*/
/* 				}*/
/* 			}*/
/* 		};*/
/* 	}*/
/* });*/
/* var oldCallbacks = [],*/
/* 	rjsonp = /(=)\?(?=&|$)|\?\?/;*/
/* */
/* // Default jsonp settings*/
/* jQuery.ajaxSetup({*/
/* 	jsonp: "callback",*/
/* 	jsonpCallback: function() {*/
/* 		var callback = oldCallbacks.pop() || ( jQuery.expando + "_" + ( ajax_nonce++ ) );*/
/* 		this[ callback ] = true;*/
/* 		return callback;*/
/* 	}*/
/* });*/
/* */
/* // Detect, normalize options and install callbacks for jsonp requests*/
/* jQuery.ajaxPrefilter( "json jsonp", function( s, originalSettings, jqXHR ) {*/
/* */
/* 	var callbackName, overwritten, responseContainer,*/
/* 		jsonProp = s.jsonp !== false && ( rjsonp.test( s.url ) ?*/
/* 			"url" :*/
/* 			typeof s.data === "string" && !( s.contentType || "" ).indexOf("application/x-www-form-urlencoded") && rjsonp.test( s.data ) && "data"*/
/* 		);*/
/* */
/* 	// Handle iff the expected data type is "jsonp" or we have a parameter to set*/
/* 	if ( jsonProp || s.dataTypes[ 0 ] === "jsonp" ) {*/
/* */
/* 		// Get callback name, remembering preexisting value associated with it*/
/* 		callbackName = s.jsonpCallback = jQuery.isFunction( s.jsonpCallback ) ?*/
/* 			s.jsonpCallback() :*/
/* 			s.jsonpCallback;*/
/* */
/* 		// Insert callback into url or form data*/
/* 		if ( jsonProp ) {*/
/* 			s[ jsonProp ] = s[ jsonProp ].replace( rjsonp, "$1" + callbackName );*/
/* 		} else if ( s.jsonp !== false ) {*/
/* 			s.url += ( ajax_rquery.test( s.url ) ? "&" : "?" ) + s.jsonp + "=" + callbackName;*/
/* 		}*/
/* */
/* 		// Use data converter to retrieve json after script execution*/
/* 		s.converters["script json"] = function() {*/
/* 			if ( !responseContainer ) {*/
/* 				jQuery.error( callbackName + " was not called" );*/
/* 			}*/
/* 			return responseContainer[ 0 ];*/
/* 		};*/
/* */
/* 		// force json dataType*/
/* 		s.dataTypes[ 0 ] = "json";*/
/* */
/* 		// Install callback*/
/* 		overwritten = window[ callbackName ];*/
/* 		window[ callbackName ] = function() {*/
/* 			responseContainer = arguments;*/
/* 		};*/
/* */
/* 		// Clean-up function (fires after converters)*/
/* 		jqXHR.always(function() {*/
/* 			// Restore preexisting value*/
/* 			window[ callbackName ] = overwritten;*/
/* */
/* 			// Save back as free*/
/* 			if ( s[ callbackName ] ) {*/
/* 				// make sure that re-using the options doesn't screw things around*/
/* 				s.jsonpCallback = originalSettings.jsonpCallback;*/
/* */
/* 				// save the callback name for future use*/
/* 				oldCallbacks.push( callbackName );*/
/* 			}*/
/* */
/* 			// Call if it was a function and we have a response*/
/* 			if ( responseContainer && jQuery.isFunction( overwritten ) ) {*/
/* 				overwritten( responseContainer[ 0 ] );*/
/* 			}*/
/* */
/* 			responseContainer = overwritten = undefined;*/
/* 		});*/
/* */
/* 		// Delegate to script*/
/* 		return "script";*/
/* 	}*/
/* });*/
/* var xhrCallbacks, xhrSupported,*/
/* 	xhrId = 0,*/
/* 	// #5280: Internet Explorer will keep connections alive if we don't abort on unload*/
/* 	xhrOnUnloadAbort = window.ActiveXObject && function() {*/
/* 		// Abort all pending requests*/
/* 		var key;*/
/* 		for ( key in xhrCallbacks ) {*/
/* 			xhrCallbacks[ key ]( undefined, true );*/
/* 		}*/
/* 	};*/
/* */
/* // Functions to create xhrs*/
/* function createStandardXHR() {*/
/* 	try {*/
/* 		return new window.XMLHttpRequest();*/
/* 	} catch( e ) {}*/
/* }*/
/* */
/* function createActiveXHR() {*/
/* 	try {*/
/* 		return new window.ActiveXObject("Microsoft.XMLHTTP");*/
/* 	} catch( e ) {}*/
/* }*/
/* */
/* // Create the request object*/
/* // (This is still attached to ajaxSettings for backward compatibility)*/
/* jQuery.ajaxSettings.xhr = window.ActiveXObject ?*/
/* 	/* Microsoft failed to properly*/
/* 	 * implement the XMLHttpRequest in IE7 (can't request local files),*/
/* 	 * so we use the ActiveXObject when it is available*/
/* 	 * Additionally XMLHttpRequest can be disabled in IE7/IE8 so*/
/* 	 * we need a fallback.*/
/* 	 *//* */
/* 	function() {*/
/* 		return !this.isLocal && createStandardXHR() || createActiveXHR();*/
/* 	} :*/
/* 	// For all other browsers, use the standard XMLHttpRequest object*/
/* 	createStandardXHR;*/
/* */
/* // Determine support properties*/
/* xhrSupported = jQuery.ajaxSettings.xhr();*/
/* jQuery.support.cors = !!xhrSupported && ( "withCredentials" in xhrSupported );*/
/* xhrSupported = jQuery.support.ajax = !!xhrSupported;*/
/* */
/* // Create transport if the browser can provide an xhr*/
/* if ( xhrSupported ) {*/
/* */
/* 	jQuery.ajaxTransport(function( s ) {*/
/* 		// Cross domain only allowed if supported through XMLHttpRequest*/
/* 		if ( !s.crossDomain || jQuery.support.cors ) {*/
/* */
/* 			var callback;*/
/* */
/* 			return {*/
/* 				send: function( headers, complete ) {*/
/* */
/* 					// Get a new xhr*/
/* 					var handle, i,*/
/* 						xhr = s.xhr();*/
/* */
/* 					// Open the socket*/
/* 					// Passing null username, generates a login popup on Opera (#2865)*/
/* 					if ( s.username ) {*/
/* 						xhr.open( s.type, s.url, s.async, s.username, s.password );*/
/* 					} else {*/
/* 						xhr.open( s.type, s.url, s.async );*/
/* 					}*/
/* */
/* 					// Apply custom fields if provided*/
/* 					if ( s.xhrFields ) {*/
/* 						for ( i in s.xhrFields ) {*/
/* 							xhr[ i ] = s.xhrFields[ i ];*/
/* 						}*/
/* 					}*/
/* */
/* 					// Override mime type if needed*/
/* 					if ( s.mimeType && xhr.overrideMimeType ) {*/
/* 						xhr.overrideMimeType( s.mimeType );*/
/* 					}*/
/* */
/* 					// X-Requested-With header*/
/* 					// For cross-domain requests, seeing as conditions for a preflight are*/
/* 					// akin to a jigsaw puzzle, we simply never set it to be sure.*/
/* 					// (it can always be set on a per-request basis or even using ajaxSetup)*/
/* 					// For same-domain requests, won't change header if already provided.*/
/* 					if ( !s.crossDomain && !headers["X-Requested-With"] ) {*/
/* 						headers["X-Requested-With"] = "XMLHttpRequest";*/
/* 					}*/
/* */
/* 					// Need an extra try/catch for cross domain requests in Firefox 3*/
/* 					try {*/
/* 						for ( i in headers ) {*/
/* 							xhr.setRequestHeader( i, headers[ i ] );*/
/* 						}*/
/* 					} catch( err ) {}*/
/* */
/* 					// Do send the request*/
/* 					// This may raise an exception which is actually*/
/* 					// handled in jQuery.ajax (so no try/catch here)*/
/* 					xhr.send( ( s.hasContent && s.data ) || null );*/
/* */
/* 					// Listener*/
/* 					callback = function( _, isAbort ) {*/
/* 						var status, responseHeaders, statusText, responses;*/
/* */
/* 						// Firefox throws exceptions when accessing properties*/
/* 						// of an xhr when a network error occurred*/
/* 						// http://helpful.knobs-dials.com/index.php/Component_returned_failure_code:_0x80040111_(NS_ERROR_NOT_AVAILABLE)*/
/* 						try {*/
/* */
/* 							// Was never called and is aborted or complete*/
/* 							if ( callback && ( isAbort || xhr.readyState === 4 ) ) {*/
/* */
/* 								// Only called once*/
/* 								callback = undefined;*/
/* */
/* 								// Do not keep as active anymore*/
/* 								if ( handle ) {*/
/* 									xhr.onreadystatechange = jQuery.noop;*/
/* 									if ( xhrOnUnloadAbort ) {*/
/* 										delete xhrCallbacks[ handle ];*/
/* 									}*/
/* 								}*/
/* */
/* 								// If it's an abort*/
/* 								if ( isAbort ) {*/
/* 									// Abort it manually if needed*/
/* 									if ( xhr.readyState !== 4 ) {*/
/* 										xhr.abort();*/
/* 									}*/
/* 								} else {*/
/* 									responses = {};*/
/* 									status = xhr.status;*/
/* 									responseHeaders = xhr.getAllResponseHeaders();*/
/* */
/* 									// When requesting binary data, IE6-9 will throw an exception*/
/* 									// on any attempt to access responseText (#11426)*/
/* 									if ( typeof xhr.responseText === "string" ) {*/
/* 										responses.text = xhr.responseText;*/
/* 									}*/
/* */
/* 									// Firefox throws an exception when accessing*/
/* 									// statusText for faulty cross-domain requests*/
/* 									try {*/
/* 										statusText = xhr.statusText;*/
/* 									} catch( e ) {*/
/* 										// We normalize with Webkit giving an empty statusText*/
/* 										statusText = "";*/
/* 									}*/
/* */
/* 									// Filter status for non standard behaviors*/
/* */
/* 									// If the request is local and we have data: assume a success*/
/* 									// (success with no data won't get notified, that's the best we*/
/* 									// can do given current implementations)*/
/* 									if ( !status && s.isLocal && !s.crossDomain ) {*/
/* 										status = responses.text ? 200 : 404;*/
/* 									// IE - #1450: sometimes returns 1223 when it should be 204*/
/* 									} else if ( status === 1223 ) {*/
/* 										status = 204;*/
/* 									}*/
/* 								}*/
/* 							}*/
/* 						} catch( firefoxAccessException ) {*/
/* 							if ( !isAbort ) {*/
/* 								complete( -1, firefoxAccessException );*/
/* 							}*/
/* 						}*/
/* */
/* 						// Call complete if needed*/
/* 						if ( responses ) {*/
/* 							complete( status, statusText, responses, responseHeaders );*/
/* 						}*/
/* 					};*/
/* */
/* 					if ( !s.async ) {*/
/* 						// if we're in sync mode we fire the callback*/
/* 						callback();*/
/* 					} else if ( xhr.readyState === 4 ) {*/
/* 						// (IE6 & IE7) if it's in cache and has been*/
/* 						// retrieved directly we need to fire the callback*/
/* 						setTimeout( callback );*/
/* 					} else {*/
/* 						handle = ++xhrId;*/
/* 						if ( xhrOnUnloadAbort ) {*/
/* 							// Create the active xhrs callbacks list if needed*/
/* 							// and attach the unload handler*/
/* 							if ( !xhrCallbacks ) {*/
/* 								xhrCallbacks = {};*/
/* 								jQuery( window ).unload( xhrOnUnloadAbort );*/
/* 							}*/
/* 							// Add to list of active xhrs callbacks*/
/* 							xhrCallbacks[ handle ] = callback;*/
/* 						}*/
/* 						xhr.onreadystatechange = callback;*/
/* 					}*/
/* 				},*/
/* */
/* 				abort: function() {*/
/* 					if ( callback ) {*/
/* 						callback( undefined, true );*/
/* 					}*/
/* 				}*/
/* 			};*/
/* 		}*/
/* 	});*/
/* }*/
/* var fxNow, timerId,*/
/* 	rfxtypes = /^(?:toggle|show|hide)$/,*/
/* 	rfxnum = new RegExp( "^(?:([+-])=|)(" + core_pnum + ")([a-z%]*)$", "i" ),*/
/* 	rrun = /queueHooks$/,*/
/* 	animationPrefilters = [ defaultPrefilter ],*/
/* 	tweeners = {*/
/* 		"*": [function( prop, value ) {*/
/* 			var end, unit,*/
/* 				tween = this.createTween( prop, value ),*/
/* 				parts = rfxnum.exec( value ),*/
/* 				target = tween.cur(),*/
/* 				start = +target || 0,*/
/* 				scale = 1,*/
/* 				maxIterations = 20;*/
/* */
/* 			if ( parts ) {*/
/* 				end = +parts[2];*/
/* 				unit = parts[3] || ( jQuery.cssNumber[ prop ] ? "" : "px" );*/
/* */
/* 				// We need to compute starting value*/
/* 				if ( unit !== "px" && start ) {*/
/* 					// Iteratively approximate from a nonzero starting point*/
/* 					// Prefer the current property, because this process will be trivial if it uses the same units*/
/* 					// Fallback to end or a simple constant*/
/* 					start = jQuery.css( tween.elem, prop, true ) || end || 1;*/
/* */
/* 					do {*/
/* 						// If previous iteration zeroed out, double until we get *something**/
/* 						// Use a string for doubling factor so we don't accidentally see scale as unchanged below*/
/* 						scale = scale || ".5";*/
/* */
/* 						// Adjust and apply*/
/* 						start = start / scale;*/
/* 						jQuery.style( tween.elem, prop, start + unit );*/
/* */
/* 					// Update scale, tolerating zero or NaN from tween.cur()*/
/* 					// And breaking the loop if scale is unchanged or perfect, or if we've just had enough*/
/* 					} while ( scale !== (scale = tween.cur() / target) && scale !== 1 && --maxIterations );*/
/* 				}*/
/* */
/* 				tween.unit = unit;*/
/* 				tween.start = start;*/
/* 				// If a +=/-= token was provided, we're doing a relative animation*/
/* 				tween.end = parts[1] ? start + ( parts[1] + 1 ) * end : end;*/
/* 			}*/
/* 			return tween;*/
/* 		}]*/
/* 	};*/
/* */
/* // Animations created synchronously will run synchronously*/
/* function createFxNow() {*/
/* 	setTimeout(function() {*/
/* 		fxNow = undefined;*/
/* 	});*/
/* 	return ( fxNow = jQuery.now() );*/
/* }*/
/* */
/* function createTweens( animation, props ) {*/
/* 	jQuery.each( props, function( prop, value ) {*/
/* 		var collection = ( tweeners[ prop ] || [] ).concat( tweeners[ "*" ] ),*/
/* 			index = 0,*/
/* 			length = collection.length;*/
/* 		for ( ; index < length; index++ ) {*/
/* 			if ( collection[ index ].call( animation, prop, value ) ) {*/
/* */
/* 				// we're done with this property*/
/* 				return;*/
/* 			}*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* function Animation( elem, properties, options ) {*/
/* 	var result,*/
/* 		stopped,*/
/* 		index = 0,*/
/* 		length = animationPrefilters.length,*/
/* 		deferred = jQuery.Deferred().always( function() {*/
/* 			// don't match elem in the :animated selector*/
/* 			delete tick.elem;*/
/* 		}),*/
/* 		tick = function() {*/
/* 			if ( stopped ) {*/
/* 				return false;*/
/* 			}*/
/* 			var currentTime = fxNow || createFxNow(),*/
/* 				remaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),*/
/* 				// archaic crash bug won't allow us to use 1 - ( 0.5 || 0 ) (#12497)*/
/* 				temp = remaining / animation.duration || 0,*/
/* 				percent = 1 - temp,*/
/* 				index = 0,*/
/* 				length = animation.tweens.length;*/
/* */
/* 			for ( ; index < length ; index++ ) {*/
/* 				animation.tweens[ index ].run( percent );*/
/* 			}*/
/* */
/* 			deferred.notifyWith( elem, [ animation, percent, remaining ]);*/
/* */
/* 			if ( percent < 1 && length ) {*/
/* 				return remaining;*/
/* 			} else {*/
/* 				deferred.resolveWith( elem, [ animation ] );*/
/* 				return false;*/
/* 			}*/
/* 		},*/
/* 		animation = deferred.promise({*/
/* 			elem: elem,*/
/* 			props: jQuery.extend( {}, properties ),*/
/* 			opts: jQuery.extend( true, { specialEasing: {} }, options ),*/
/* 			originalProperties: properties,*/
/* 			originalOptions: options,*/
/* 			startTime: fxNow || createFxNow(),*/
/* 			duration: options.duration,*/
/* 			tweens: [],*/
/* 			createTween: function( prop, end ) {*/
/* 				var tween = jQuery.Tween( elem, animation.opts, prop, end,*/
/* 						animation.opts.specialEasing[ prop ] || animation.opts.easing );*/
/* 				animation.tweens.push( tween );*/
/* 				return tween;*/
/* 			},*/
/* 			stop: function( gotoEnd ) {*/
/* 				var index = 0,*/
/* 					// if we are going to the end, we want to run all the tweens*/
/* 					// otherwise we skip this part*/
/* 					length = gotoEnd ? animation.tweens.length : 0;*/
/* 				if ( stopped ) {*/
/* 					return this;*/
/* 				}*/
/* 				stopped = true;*/
/* 				for ( ; index < length ; index++ ) {*/
/* 					animation.tweens[ index ].run( 1 );*/
/* 				}*/
/* */
/* 				// resolve when we played the last frame*/
/* 				// otherwise, reject*/
/* 				if ( gotoEnd ) {*/
/* 					deferred.resolveWith( elem, [ animation, gotoEnd ] );*/
/* 				} else {*/
/* 					deferred.rejectWith( elem, [ animation, gotoEnd ] );*/
/* 				}*/
/* 				return this;*/
/* 			}*/
/* 		}),*/
/* 		props = animation.props;*/
/* */
/* 	propFilter( props, animation.opts.specialEasing );*/
/* */
/* 	for ( ; index < length ; index++ ) {*/
/* 		result = animationPrefilters[ index ].call( animation, elem, props, animation.opts );*/
/* 		if ( result ) {*/
/* 			return result;*/
/* 		}*/
/* 	}*/
/* */
/* 	createTweens( animation, props );*/
/* */
/* 	if ( jQuery.isFunction( animation.opts.start ) ) {*/
/* 		animation.opts.start.call( elem, animation );*/
/* 	}*/
/* */
/* 	jQuery.fx.timer(*/
/* 		jQuery.extend( tick, {*/
/* 			elem: elem,*/
/* 			anim: animation,*/
/* 			queue: animation.opts.queue*/
/* 		})*/
/* 	);*/
/* */
/* 	// attach callbacks from options*/
/* 	return animation.progress( animation.opts.progress )*/
/* 		.done( animation.opts.done, animation.opts.complete )*/
/* 		.fail( animation.opts.fail )*/
/* 		.always( animation.opts.always );*/
/* }*/
/* */
/* function propFilter( props, specialEasing ) {*/
/* 	var value, name, index, easing, hooks;*/
/* */
/* 	// camelCase, specialEasing and expand cssHook pass*/
/* 	for ( index in props ) {*/
/* 		name = jQuery.camelCase( index );*/
/* 		easing = specialEasing[ name ];*/
/* 		value = props[ index ];*/
/* 		if ( jQuery.isArray( value ) ) {*/
/* 			easing = value[ 1 ];*/
/* 			value = props[ index ] = value[ 0 ];*/
/* 		}*/
/* */
/* 		if ( index !== name ) {*/
/* 			props[ name ] = value;*/
/* 			delete props[ index ];*/
/* 		}*/
/* */
/* 		hooks = jQuery.cssHooks[ name ];*/
/* 		if ( hooks && "expand" in hooks ) {*/
/* 			value = hooks.expand( value );*/
/* 			delete props[ name ];*/
/* */
/* 			// not quite $.extend, this wont overwrite keys already present.*/
/* 			// also - reusing 'index' from above because we have the correct "name"*/
/* 			for ( index in value ) {*/
/* 				if ( !( index in props ) ) {*/
/* 					props[ index ] = value[ index ];*/
/* 					specialEasing[ index ] = easing;*/
/* 				}*/
/* 			}*/
/* 		} else {*/
/* 			specialEasing[ name ] = easing;*/
/* 		}*/
/* 	}*/
/* }*/
/* */
/* jQuery.Animation = jQuery.extend( Animation, {*/
/* */
/* 	tweener: function( props, callback ) {*/
/* 		if ( jQuery.isFunction( props ) ) {*/
/* 			callback = props;*/
/* 			props = [ "*" ];*/
/* 		} else {*/
/* 			props = props.split(" ");*/
/* 		}*/
/* */
/* 		var prop,*/
/* 			index = 0,*/
/* 			length = props.length;*/
/* */
/* 		for ( ; index < length ; index++ ) {*/
/* 			prop = props[ index ];*/
/* 			tweeners[ prop ] = tweeners[ prop ] || [];*/
/* 			tweeners[ prop ].unshift( callback );*/
/* 		}*/
/* 	},*/
/* */
/* 	prefilter: function( callback, prepend ) {*/
/* 		if ( prepend ) {*/
/* 			animationPrefilters.unshift( callback );*/
/* 		} else {*/
/* 			animationPrefilters.push( callback );*/
/* 		}*/
/* 	}*/
/* });*/
/* */
/* function defaultPrefilter( elem, props, opts ) {*/
/* 	/*jshint validthis:true *//* */
/* 	var prop, index, length,*/
/* 		value, dataShow, toggle,*/
/* 		tween, hooks, oldfire,*/
/* 		anim = this,*/
/* 		style = elem.style,*/
/* 		orig = {},*/
/* 		handled = [],*/
/* 		hidden = elem.nodeType && isHidden( elem );*/
/* */
/* 	// handle queue: false promises*/
/* 	if ( !opts.queue ) {*/
/* 		hooks = jQuery._queueHooks( elem, "fx" );*/
/* 		if ( hooks.unqueued == null ) {*/
/* 			hooks.unqueued = 0;*/
/* 			oldfire = hooks.empty.fire;*/
/* 			hooks.empty.fire = function() {*/
/* 				if ( !hooks.unqueued ) {*/
/* 					oldfire();*/
/* 				}*/
/* 			};*/
/* 		}*/
/* 		hooks.unqueued++;*/
/* */
/* 		anim.always(function() {*/
/* 			// doing this makes sure that the complete handler will be called*/
/* 			// before this completes*/
/* 			anim.always(function() {*/
/* 				hooks.unqueued--;*/
/* 				if ( !jQuery.queue( elem, "fx" ).length ) {*/
/* 					hooks.empty.fire();*/
/* 				}*/
/* 			});*/
/* 		});*/
/* 	}*/
/* */
/* 	// height/width overflow pass*/
/* 	if ( elem.nodeType === 1 && ( "height" in props || "width" in props ) ) {*/
/* 		// Make sure that nothing sneaks out*/
/* 		// Record all 3 overflow attributes because IE does not*/
/* 		// change the overflow attribute when overflowX and*/
/* 		// overflowY are set to the same value*/
/* 		opts.overflow = [ style.overflow, style.overflowX, style.overflowY ];*/
/* */
/* 		// Set display property to inline-block for height/width*/
/* 		// animations on inline elements that are having width/height animated*/
/* 		if ( jQuery.css( elem, "display" ) === "inline" &&*/
/* 				jQuery.css( elem, "float" ) === "none" ) {*/
/* */
/* 			// inline-level elements accept inline-block;*/
/* 			// block-level elements need to be inline with layout*/
/* 			if ( !jQuery.support.inlineBlockNeedsLayout || css_defaultDisplay( elem.nodeName ) === "inline" ) {*/
/* 				style.display = "inline-block";*/
/* */
/* 			} else {*/
/* 				style.zoom = 1;*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	if ( opts.overflow ) {*/
/* 		style.overflow = "hidden";*/
/* 		if ( !jQuery.support.shrinkWrapBlocks ) {*/
/* 			anim.always(function() {*/
/* 				style.overflow = opts.overflow[ 0 ];*/
/* 				style.overflowX = opts.overflow[ 1 ];*/
/* 				style.overflowY = opts.overflow[ 2 ];*/
/* 			});*/
/* 		}*/
/* 	}*/
/* */
/* */
/* 	// show/hide pass*/
/* 	for ( index in props ) {*/
/* 		value = props[ index ];*/
/* 		if ( rfxtypes.exec( value ) ) {*/
/* 			delete props[ index ];*/
/* 			toggle = toggle || value === "toggle";*/
/* 			if ( value === ( hidden ? "hide" : "show" ) ) {*/
/* 				continue;*/
/* 			}*/
/* 			handled.push( index );*/
/* 		}*/
/* 	}*/
/* */
/* 	length = handled.length;*/
/* 	if ( length ) {*/
/* 		dataShow = jQuery._data( elem, "fxshow" ) || jQuery._data( elem, "fxshow", {} );*/
/* 		if ( "hidden" in dataShow ) {*/
/* 			hidden = dataShow.hidden;*/
/* 		}*/
/* */
/* 		// store state if its toggle - enables .stop().toggle() to "reverse"*/
/* 		if ( toggle ) {*/
/* 			dataShow.hidden = !hidden;*/
/* 		}*/
/* 		if ( hidden ) {*/
/* 			jQuery( elem ).show();*/
/* 		} else {*/
/* 			anim.done(function() {*/
/* 				jQuery( elem ).hide();*/
/* 			});*/
/* 		}*/
/* 		anim.done(function() {*/
/* 			var prop;*/
/* 			jQuery._removeData( elem, "fxshow" );*/
/* 			for ( prop in orig ) {*/
/* 				jQuery.style( elem, prop, orig[ prop ] );*/
/* 			}*/
/* 		});*/
/* 		for ( index = 0 ; index < length ; index++ ) {*/
/* 			prop = handled[ index ];*/
/* 			tween = anim.createTween( prop, hidden ? dataShow[ prop ] : 0 );*/
/* 			orig[ prop ] = dataShow[ prop ] || jQuery.style( elem, prop );*/
/* */
/* 			if ( !( prop in dataShow ) ) {*/
/* 				dataShow[ prop ] = tween.start;*/
/* 				if ( hidden ) {*/
/* 					tween.end = tween.start;*/
/* 					tween.start = prop === "width" || prop === "height" ? 1 : 0;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	}*/
/* }*/
/* */
/* function Tween( elem, options, prop, end, easing ) {*/
/* 	return new Tween.prototype.init( elem, options, prop, end, easing );*/
/* }*/
/* jQuery.Tween = Tween;*/
/* */
/* Tween.prototype = {*/
/* 	constructor: Tween,*/
/* 	init: function( elem, options, prop, end, easing, unit ) {*/
/* 		this.elem = elem;*/
/* 		this.prop = prop;*/
/* 		this.easing = easing || "swing";*/
/* 		this.options = options;*/
/* 		this.start = this.now = this.cur();*/
/* 		this.end = end;*/
/* 		this.unit = unit || ( jQuery.cssNumber[ prop ] ? "" : "px" );*/
/* 	},*/
/* 	cur: function() {*/
/* 		var hooks = Tween.propHooks[ this.prop ];*/
/* */
/* 		return hooks && hooks.get ?*/
/* 			hooks.get( this ) :*/
/* 			Tween.propHooks._default.get( this );*/
/* 	},*/
/* 	run: function( percent ) {*/
/* 		var eased,*/
/* 			hooks = Tween.propHooks[ this.prop ];*/
/* */
/* 		if ( this.options.duration ) {*/
/* 			this.pos = eased = jQuery.easing[ this.easing ](*/
/* 				percent, this.options.duration * percent, 0, 1, this.options.duration*/
/* 			);*/
/* 		} else {*/
/* 			this.pos = eased = percent;*/
/* 		}*/
/* 		this.now = ( this.end - this.start ) * eased + this.start;*/
/* */
/* 		if ( this.options.step ) {*/
/* 			this.options.step.call( this.elem, this.now, this );*/
/* 		}*/
/* */
/* 		if ( hooks && hooks.set ) {*/
/* 			hooks.set( this );*/
/* 		} else {*/
/* 			Tween.propHooks._default.set( this );*/
/* 		}*/
/* 		return this;*/
/* 	}*/
/* };*/
/* */
/* Tween.prototype.init.prototype = Tween.prototype;*/
/* */
/* Tween.propHooks = {*/
/* 	_default: {*/
/* 		get: function( tween ) {*/
/* 			var result;*/
/* */
/* 			if ( tween.elem[ tween.prop ] != null &&*/
/* 				(!tween.elem.style || tween.elem.style[ tween.prop ] == null) ) {*/
/* 				return tween.elem[ tween.prop ];*/
/* 			}*/
/* */
/* 			// passing an empty string as a 3rd parameter to .css will automatically*/
/* 			// attempt a parseFloat and fallback to a string if the parse fails*/
/* 			// so, simple values such as "10px" are parsed to Float.*/
/* 			// complex values such as "rotate(1rad)" are returned as is.*/
/* 			result = jQuery.css( tween.elem, tween.prop, "" );*/
/* 			// Empty strings, null, undefined and "auto" are converted to 0.*/
/* 			return !result || result === "auto" ? 0 : result;*/
/* 		},*/
/* 		set: function( tween ) {*/
/* 			// use step hook for back compat - use cssHook if its there - use .style if its*/
/* 			// available and use plain properties where available*/
/* 			if ( jQuery.fx.step[ tween.prop ] ) {*/
/* 				jQuery.fx.step[ tween.prop ]( tween );*/
/* 			} else if ( tween.elem.style && ( tween.elem.style[ jQuery.cssProps[ tween.prop ] ] != null || jQuery.cssHooks[ tween.prop ] ) ) {*/
/* 				jQuery.style( tween.elem, tween.prop, tween.now + tween.unit );*/
/* 			} else {*/
/* 				tween.elem[ tween.prop ] = tween.now;*/
/* 			}*/
/* 		}*/
/* 	}*/
/* };*/
/* */
/* // Remove in 2.0 - this supports IE8's panic based approach*/
/* // to setting things on disconnected nodes*/
/* */
/* Tween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {*/
/* 	set: function( tween ) {*/
/* 		if ( tween.elem.nodeType && tween.elem.parentNode ) {*/
/* 			tween.elem[ tween.prop ] = tween.now;*/
/* 		}*/
/* 	}*/
/* };*/
/* */
/* jQuery.each([ "toggle", "show", "hide" ], function( i, name ) {*/
/* 	var cssFn = jQuery.fn[ name ];*/
/* 	jQuery.fn[ name ] = function( speed, easing, callback ) {*/
/* 		return speed == null || typeof speed === "boolean" ?*/
/* 			cssFn.apply( this, arguments ) :*/
/* 			this.animate( genFx( name, true ), speed, easing, callback );*/
/* 	};*/
/* });*/
/* */
/* jQuery.fn.extend({*/
/* 	fadeTo: function( speed, to, easing, callback ) {*/
/* */
/* 		// show any hidden elements after setting opacity to 0*/
/* 		return this.filter( isHidden ).css( "opacity", 0 ).show()*/
/* */
/* 			// animate to the value specified*/
/* 			.end().animate({ opacity: to }, speed, easing, callback );*/
/* 	},*/
/* 	animate: function( prop, speed, easing, callback ) {*/
/* 		var empty = jQuery.isEmptyObject( prop ),*/
/* 			optall = jQuery.speed( speed, easing, callback ),*/
/* 			doAnimation = function() {*/
/* 				// Operate on a copy of prop so per-property easing won't be lost*/
/* 				var anim = Animation( this, jQuery.extend( {}, prop ), optall );*/
/* 				doAnimation.finish = function() {*/
/* 					anim.stop( true );*/
/* 				};*/
/* 				// Empty animations, or finishing resolves immediately*/
/* 				if ( empty || jQuery._data( this, "finish" ) ) {*/
/* 					anim.stop( true );*/
/* 				}*/
/* 			};*/
/* 			doAnimation.finish = doAnimation;*/
/* */
/* 		return empty || optall.queue === false ?*/
/* 			this.each( doAnimation ) :*/
/* 			this.queue( optall.queue, doAnimation );*/
/* 	},*/
/* 	stop: function( type, clearQueue, gotoEnd ) {*/
/* 		var stopQueue = function( hooks ) {*/
/* 			var stop = hooks.stop;*/
/* 			delete hooks.stop;*/
/* 			stop( gotoEnd );*/
/* 		};*/
/* */
/* 		if ( typeof type !== "string" ) {*/
/* 			gotoEnd = clearQueue;*/
/* 			clearQueue = type;*/
/* 			type = undefined;*/
/* 		}*/
/* 		if ( clearQueue && type !== false ) {*/
/* 			this.queue( type || "fx", [] );*/
/* 		}*/
/* */
/* 		return this.each(function() {*/
/* 			var dequeue = true,*/
/* 				index = type != null && type + "queueHooks",*/
/* 				timers = jQuery.timers,*/
/* 				data = jQuery._data( this );*/
/* */
/* 			if ( index ) {*/
/* 				if ( data[ index ] && data[ index ].stop ) {*/
/* 					stopQueue( data[ index ] );*/
/* 				}*/
/* 			} else {*/
/* 				for ( index in data ) {*/
/* 					if ( data[ index ] && data[ index ].stop && rrun.test( index ) ) {*/
/* 						stopQueue( data[ index ] );*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			for ( index = timers.length; index--; ) {*/
/* 				if ( timers[ index ].elem === this && (type == null || timers[ index ].queue === type) ) {*/
/* 					timers[ index ].anim.stop( gotoEnd );*/
/* 					dequeue = false;*/
/* 					timers.splice( index, 1 );*/
/* 				}*/
/* 			}*/
/* */
/* 			// start the next in the queue if the last step wasn't forced*/
/* 			// timers currently will call their complete callbacks, which will dequeue*/
/* 			// but only if they were gotoEnd*/
/* 			if ( dequeue || !gotoEnd ) {*/
/* 				jQuery.dequeue( this, type );*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	finish: function( type ) {*/
/* 		if ( type !== false ) {*/
/* 			type = type || "fx";*/
/* 		}*/
/* 		return this.each(function() {*/
/* 			var index,*/
/* 				data = jQuery._data( this ),*/
/* 				queue = data[ type + "queue" ],*/
/* 				hooks = data[ type + "queueHooks" ],*/
/* 				timers = jQuery.timers,*/
/* 				length = queue ? queue.length : 0;*/
/* */
/* 			// enable finishing flag on private data*/
/* 			data.finish = true;*/
/* */
/* 			// empty the queue first*/
/* 			jQuery.queue( this, type, [] );*/
/* */
/* 			if ( hooks && hooks.cur && hooks.cur.finish ) {*/
/* 				hooks.cur.finish.call( this );*/
/* 			}*/
/* */
/* 			// look for any active animations, and finish them*/
/* 			for ( index = timers.length; index--; ) {*/
/* 				if ( timers[ index ].elem === this && timers[ index ].queue === type ) {*/
/* 					timers[ index ].anim.stop( true );*/
/* 					timers.splice( index, 1 );*/
/* 				}*/
/* 			}*/
/* */
/* 			// look for any animations in the old queue and finish them*/
/* 			for ( index = 0; index < length; index++ ) {*/
/* 				if ( queue[ index ] && queue[ index ].finish ) {*/
/* 					queue[ index ].finish.call( this );*/
/* 				}*/
/* 			}*/
/* */
/* 			// turn off finishing flag*/
/* 			delete data.finish;*/
/* 		});*/
/* 	}*/
/* });*/
/* */
/* // Generate parameters to create a standard animation*/
/* function genFx( type, includeWidth ) {*/
/* 	var which,*/
/* 		attrs = { height: type },*/
/* 		i = 0;*/
/* */
/* 	// if we include width, step value is 1 to do all cssExpand values,*/
/* 	// if we don't include width, step value is 2 to skip over Left and Right*/
/* 	includeWidth = includeWidth? 1 : 0;*/
/* 	for( ; i < 4 ; i += 2 - includeWidth ) {*/
/* 		which = cssExpand[ i ];*/
/* 		attrs[ "margin" + which ] = attrs[ "padding" + which ] = type;*/
/* 	}*/
/* */
/* 	if ( includeWidth ) {*/
/* 		attrs.opacity = attrs.width = type;*/
/* 	}*/
/* */
/* 	return attrs;*/
/* }*/
/* */
/* // Generate shortcuts for custom animations*/
/* jQuery.each({*/
/* 	slideDown: genFx("show"),*/
/* 	slideUp: genFx("hide"),*/
/* 	slideToggle: genFx("toggle"),*/
/* 	fadeIn: { opacity: "show" },*/
/* 	fadeOut: { opacity: "hide" },*/
/* 	fadeToggle: { opacity: "toggle" }*/
/* }, function( name, props ) {*/
/* 	jQuery.fn[ name ] = function( speed, easing, callback ) {*/
/* 		return this.animate( props, speed, easing, callback );*/
/* 	};*/
/* });*/
/* */
/* jQuery.speed = function( speed, easing, fn ) {*/
/* 	var opt = speed && typeof speed === "object" ? jQuery.extend( {}, speed ) : {*/
/* 		complete: fn || !fn && easing ||*/
/* 			jQuery.isFunction( speed ) && speed,*/
/* 		duration: speed,*/
/* 		easing: fn && easing || easing && !jQuery.isFunction( easing ) && easing*/
/* 	};*/
/* */
/* 	opt.duration = jQuery.fx.off ? 0 : typeof opt.duration === "number" ? opt.duration :*/
/* 		opt.duration in jQuery.fx.speeds ? jQuery.fx.speeds[ opt.duration ] : jQuery.fx.speeds._default;*/
/* */
/* 	// normalize opt.queue - true/undefined/null -> "fx"*/
/* 	if ( opt.queue == null || opt.queue === true ) {*/
/* 		opt.queue = "fx";*/
/* 	}*/
/* */
/* 	// Queueing*/
/* 	opt.old = opt.complete;*/
/* */
/* 	opt.complete = function() {*/
/* 		if ( jQuery.isFunction( opt.old ) ) {*/
/* 			opt.old.call( this );*/
/* 		}*/
/* */
/* 		if ( opt.queue ) {*/
/* 			jQuery.dequeue( this, opt.queue );*/
/* 		}*/
/* 	};*/
/* */
/* 	return opt;*/
/* };*/
/* */
/* jQuery.easing = {*/
/* 	linear: function( p ) {*/
/* 		return p;*/
/* 	},*/
/* 	swing: function( p ) {*/
/* 		return 0.5 - Math.cos( p*Math.PI ) / 2;*/
/* 	}*/
/* };*/
/* */
/* jQuery.timers = [];*/
/* jQuery.fx = Tween.prototype.init;*/
/* jQuery.fx.tick = function() {*/
/* 	var timer,*/
/* 		timers = jQuery.timers,*/
/* 		i = 0;*/
/* */
/* 	fxNow = jQuery.now();*/
/* */
/* 	for ( ; i < timers.length; i++ ) {*/
/* 		timer = timers[ i ];*/
/* 		// Checks the timer has not already been removed*/
/* 		if ( !timer() && timers[ i ] === timer ) {*/
/* 			timers.splice( i--, 1 );*/
/* 		}*/
/* 	}*/
/* */
/* 	if ( !timers.length ) {*/
/* 		jQuery.fx.stop();*/
/* 	}*/
/* 	fxNow = undefined;*/
/* };*/
/* */
/* jQuery.fx.timer = function( timer ) {*/
/* 	if ( timer() && jQuery.timers.push( timer ) ) {*/
/* 		jQuery.fx.start();*/
/* 	}*/
/* };*/
/* */
/* jQuery.fx.interval = 13;*/
/* */
/* jQuery.fx.start = function() {*/
/* 	if ( !timerId ) {*/
/* 		timerId = setInterval( jQuery.fx.tick, jQuery.fx.interval );*/
/* 	}*/
/* };*/
/* */
/* jQuery.fx.stop = function() {*/
/* 	clearInterval( timerId );*/
/* 	timerId = null;*/
/* };*/
/* */
/* jQuery.fx.speeds = {*/
/* 	slow: 600,*/
/* 	fast: 200,*/
/* 	// Default speed*/
/* 	_default: 400*/
/* };*/
/* */
/* // Back Compat <1.8 extension point*/
/* jQuery.fx.step = {};*/
/* */
/* if ( jQuery.expr && jQuery.expr.filters ) {*/
/* 	jQuery.expr.filters.animated = function( elem ) {*/
/* 		return jQuery.grep(jQuery.timers, function( fn ) {*/
/* 			return elem === fn.elem;*/
/* 		}).length;*/
/* 	};*/
/* }*/
/* jQuery.fn.offset = function( options ) {*/
/* 	if ( arguments.length ) {*/
/* 		return options === undefined ?*/
/* 			this :*/
/* 			this.each(function( i ) {*/
/* 				jQuery.offset.setOffset( this, options, i );*/
/* 			});*/
/* 	}*/
/* */
/* 	var docElem, win,*/
/* 		box = { top: 0, left: 0 },*/
/* 		elem = this[ 0 ],*/
/* 		doc = elem && elem.ownerDocument;*/
/* */
/* 	if ( !doc ) {*/
/* 		return;*/
/* 	}*/
/* */
/* 	docElem = doc.documentElement;*/
/* */
/* 	// Make sure it's not a disconnected DOM node*/
/* 	if ( !jQuery.contains( docElem, elem ) ) {*/
/* 		return box;*/
/* 	}*/
/* */
/* 	// If we don't have gBCR, just use 0,0 rather than error*/
/* 	// BlackBerry 5, iOS 3 (original iPhone)*/
/* 	if ( typeof elem.getBoundingClientRect !== core_strundefined ) {*/
/* 		box = elem.getBoundingClientRect();*/
/* 	}*/
/* 	win = getWindow( doc );*/
/* 	return {*/
/* 		top: box.top  + ( win.pageYOffset || docElem.scrollTop )  - ( docElem.clientTop  || 0 ),*/
/* 		left: box.left + ( win.pageXOffset || docElem.scrollLeft ) - ( docElem.clientLeft || 0 )*/
/* 	};*/
/* };*/
/* */
/* jQuery.offset = {*/
/* */
/* 	setOffset: function( elem, options, i ) {*/
/* 		var position = jQuery.css( elem, "position" );*/
/* */
/* 		// set position first, in-case top/left are set even on static elem*/
/* 		if ( position === "static" ) {*/
/* 			elem.style.position = "relative";*/
/* 		}*/
/* */
/* 		var curElem = jQuery( elem ),*/
/* 			curOffset = curElem.offset(),*/
/* 			curCSSTop = jQuery.css( elem, "top" ),*/
/* 			curCSSLeft = jQuery.css( elem, "left" ),*/
/* 			calculatePosition = ( position === "absolute" || position === "fixed" ) && jQuery.inArray("auto", [curCSSTop, curCSSLeft]) > -1,*/
/* 			props = {}, curPosition = {}, curTop, curLeft;*/
/* */
/* 		// need to be able to calculate position if either top or left is auto and position is either absolute or fixed*/
/* 		if ( calculatePosition ) {*/
/* 			curPosition = curElem.position();*/
/* 			curTop = curPosition.top;*/
/* 			curLeft = curPosition.left;*/
/* 		} else {*/
/* 			curTop = parseFloat( curCSSTop ) || 0;*/
/* 			curLeft = parseFloat( curCSSLeft ) || 0;*/
/* 		}*/
/* */
/* 		if ( jQuery.isFunction( options ) ) {*/
/* 			options = options.call( elem, i, curOffset );*/
/* 		}*/
/* */
/* 		if ( options.top != null ) {*/
/* 			props.top = ( options.top - curOffset.top ) + curTop;*/
/* 		}*/
/* 		if ( options.left != null ) {*/
/* 			props.left = ( options.left - curOffset.left ) + curLeft;*/
/* 		}*/
/* */
/* 		if ( "using" in options ) {*/
/* 			options.using.call( elem, props );*/
/* 		} else {*/
/* 			curElem.css( props );*/
/* 		}*/
/* 	}*/
/* };*/
/* */
/* */
/* jQuery.fn.extend({*/
/* */
/* 	position: function() {*/
/* 		if ( !this[ 0 ] ) {*/
/* 			return;*/
/* 		}*/
/* */
/* 		var offsetParent, offset,*/
/* 			parentOffset = { top: 0, left: 0 },*/
/* 			elem = this[ 0 ];*/
/* */
/* 		// fixed elements are offset from window (parentOffset = {top:0, left: 0}, because it is it's only offset parent*/
/* 		if ( jQuery.css( elem, "position" ) === "fixed" ) {*/
/* 			// we assume that getBoundingClientRect is available when computed position is fixed*/
/* 			offset = elem.getBoundingClientRect();*/
/* 		} else {*/
/* 			// Get *real* offsetParent*/
/* 			offsetParent = this.offsetParent();*/
/* */
/* 			// Get correct offsets*/
/* 			offset = this.offset();*/
/* 			if ( !jQuery.nodeName( offsetParent[ 0 ], "html" ) ) {*/
/* 				parentOffset = offsetParent.offset();*/
/* 			}*/
/* */
/* 			// Add offsetParent borders*/
/* 			parentOffset.top  += jQuery.css( offsetParent[ 0 ], "borderTopWidth", true );*/
/* 			parentOffset.left += jQuery.css( offsetParent[ 0 ], "borderLeftWidth", true );*/
/* 		}*/
/* */
/* 		// Subtract parent offsets and element margins*/
/* 		// note: when an element has margin: auto the offsetLeft and marginLeft*/
/* 		// are the same in Safari causing offset.left to incorrectly be 0*/
/* 		return {*/
/* 			top:  offset.top  - parentOffset.top - jQuery.css( elem, "marginTop", true ),*/
/* 			left: offset.left - parentOffset.left - jQuery.css( elem, "marginLeft", true)*/
/* 		};*/
/* 	},*/
/* */
/* 	offsetParent: function() {*/
/* 		return this.map(function() {*/
/* 			var offsetParent = this.offsetParent || document.documentElement;*/
/* 			while ( offsetParent && ( !jQuery.nodeName( offsetParent, "html" ) && jQuery.css( offsetParent, "position") === "static" ) ) {*/
/* 				offsetParent = offsetParent.offsetParent;*/
/* 			}*/
/* 			return offsetParent || document.documentElement;*/
/* 		});*/
/* 	}*/
/* });*/
/* */
/* */
/* // Create scrollLeft and scrollTop methods*/
/* jQuery.each( {scrollLeft: "pageXOffset", scrollTop: "pageYOffset"}, function( method, prop ) {*/
/* 	var top = /Y/.test( prop );*/
/* */
/* 	jQuery.fn[ method ] = function( val ) {*/
/* 		return jQuery.access( this, function( elem, method, val ) {*/
/* 			var win = getWindow( elem );*/
/* */
/* 			if ( val === undefined ) {*/
/* 				return win ? (prop in win) ? win[ prop ] :*/
/* 					win.document.documentElement[ method ] :*/
/* 					elem[ method ];*/
/* 			}*/
/* */
/* 			if ( win ) {*/
/* 				win.scrollTo(*/
/* 					!top ? val : jQuery( win ).scrollLeft(),*/
/* 					top ? val : jQuery( win ).scrollTop()*/
/* 				);*/
/* */
/* 			} else {*/
/* 				elem[ method ] = val;*/
/* 			}*/
/* 		}, method, val, arguments.length, null );*/
/* 	};*/
/* });*/
/* */
/* function getWindow( elem ) {*/
/* 	return jQuery.isWindow( elem ) ?*/
/* 		elem :*/
/* 		elem.nodeType === 9 ?*/
/* 			elem.defaultView || elem.parentWindow :*/
/* 			false;*/
/* }*/
/* // Create innerHeight, innerWidth, height, width, outerHeight and outerWidth methods*/
/* jQuery.each( { Height: "height", Width: "width" }, function( name, type ) {*/
/* 	jQuery.each( { padding: "inner" + name, content: type, "": "outer" + name }, function( defaultExtra, funcName ) {*/
/* 		// margin is only for outerHeight, outerWidth*/
/* 		jQuery.fn[ funcName ] = function( margin, value ) {*/
/* 			var chainable = arguments.length && ( defaultExtra || typeof margin !== "boolean" ),*/
/* 				extra = defaultExtra || ( margin === true || value === true ? "margin" : "border" );*/
/* */
/* 			return jQuery.access( this, function( elem, type, value ) {*/
/* 				var doc;*/
/* */
/* 				if ( jQuery.isWindow( elem ) ) {*/
/* 					// As of 5/8/2012 this will yield incorrect results for Mobile Safari, but there*/
/* 					// isn't a whole lot we can do. See pull request at this URL for discussion:*/
/* 					// https://github.com/jquery/jquery/pull/764*/
/* 					return elem.document.documentElement[ "client" + name ];*/
/* 				}*/
/* */
/* 				// Get document width or height*/
/* 				if ( elem.nodeType === 9 ) {*/
/* 					doc = elem.documentElement;*/
/* */
/* 					// Either scroll[Width/Height] or offset[Width/Height] or client[Width/Height], whichever is greatest*/
/* 					// unfortunately, this causes bug #3838 in IE6/8 only, but there is currently no good, small way to fix it.*/
/* 					return Math.max(*/
/* 						elem.body[ "scroll" + name ], doc[ "scroll" + name ],*/
/* 						elem.body[ "offset" + name ], doc[ "offset" + name ],*/
/* 						doc[ "client" + name ]*/
/* 					);*/
/* 				}*/
/* */
/* 				return value === undefined ?*/
/* 					// Get width or height on the element, requesting but not forcing parseFloat*/
/* 					jQuery.css( elem, type, extra ) :*/
/* */
/* 					// Set width or height on the element*/
/* 					jQuery.style( elem, type, value, extra );*/
/* 			}, type, chainable ? margin : undefined, chainable, null );*/
/* 		};*/
/* 	});*/
/* });*/
/* // Limit scope pollution from any deprecated API*/
/* // (function() {*/
/* */
/* // })();*/
/* // Expose jQuery to the global object*/
/* window.jQuery = window.$ = jQuery;*/
/* */
/* // Expose jQuery as an AMD module, but only for AMD loaders that*/
/* // understand the issues with loading multiple versions of jQuery*/
/* // in a page that all might call define(). The loader will indicate*/
/* // they have special allowances for multiple jQuery versions by*/
/* // specifying define.amd.jQuery = true. Register as a named module,*/
/* // since jQuery can be concatenated with other files that may use define,*/
/* // but not use a proper concatenation script that understands anonymous*/
/* // AMD modules. A named AMD is safest and most robust way to register.*/
/* // Lowercase jquery is used because AMD module names are derived from*/
/* // file names, and jQuery is normally delivered in a lowercase file name.*/
/* // Do this after creating the global so that if an AMD module wants to call*/
/* // noConflict to hide this version of jQuery, it will work.*/
/* if ( typeof define === "function" && define.amd && define.amd.jQuery ) {*/
/* 	define( "jquery", [], function () { return jQuery; } );*/
/* }*/
/* */
/* })( window );*/
/* */
