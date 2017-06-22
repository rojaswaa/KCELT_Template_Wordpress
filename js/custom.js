// JavaScript Document
// Custom JS for KCEL Template
$(function() {
	$('.item')
    .eq(0).addClass('active').end();
});

jQuery( document ).ready(function() {
    jQuery('.widget-area > section').addClass('col-xs-12 col-md-6');
});

$(function() {
	$('.entry-content').matchHeight({
    byRow: true,
    property: 'height'});
})		

$(function() {
	$('.competency-title').matchHeight({
    byRow: true,
    property: 'height'});
})	

