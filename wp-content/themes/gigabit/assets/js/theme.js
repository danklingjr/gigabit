/**
 * THEME JAVASCRIPT
 */

/**
 * Imports
 * 
 * place all require statements here using relative links
 * or npm module names. jQuery is an example below. both
 * styles of naming conventions are used just in case
 */
global.jQuery = require( '../../../../../bower_components/jquery/dist/jquery.min.js' );
var $ = jQuery;

// other examples
//var foo = require( './foo.js' );
//var bar = require( 'bar' );

/**
 * Place Your Code Here
 */
$(window).scroll(function(e){
  parallax();
});

function parallax(){
  var scrolled = $(window).scrollTop();
  $('.site-header').css('top',-(scrolled*-0.0315)+'rem');
/*
  $('.tagline, .search--home').css('top',-(scrolled*-0.008)+'rem');
  $('.tagline, .search--home').css('opacity',1-(scrolled*.00175));
*/
};