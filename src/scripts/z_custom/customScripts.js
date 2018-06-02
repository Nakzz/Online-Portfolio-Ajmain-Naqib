"use strict";

jQuery( document ).ready(function( $ ) {
	$.noConflict();



	var typed = new Typed('#typed', {
		strings: ['Web Developer', 'Photographer', 'Graphics Designer'],
	typeSpeed: 30,
	backSpeed: 60,
	backDelay: 1200,
	smartBackspace: true, // this is a default
	loop: true
	  });
		  //change the integers below to match the height of your upper dive, which I called
		  //banner.  Just add a 1 to the last number.  console.log($(window).scrollTop())
		  //to figure out what the scroll position is when exactly you want to fix the nav
		  //bar or div or whatever.  I stuck in the console.log for you.  Just remove when
		  //you know the position.
		  $(window).scroll(function () {

if (DEBUG == 1) {
	  console.log($(window).scrollTop());
}


var height= $(window).height();

		    if ($(window).scrollTop() > height) {
		      $('#header').addClass('navbar-fixed');
		    }

		    if ($(window).scrollTop() < height) {
		      $('#header').removeClass('navbar-fixed');
		    }
		  });


});
