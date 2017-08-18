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
});

$(function() {
	$('.competency-title').matchHeight({
    byRow: true,
    property: 'height'});
});

var url = $('.external-resource').attr('href');
$('.external-resource-final').attr('src',url);

$( document ).ready(function() {
$('[data-toggle=search-form]').click(function() {
    $('.search-form-wrapper').toggleClass('open');
    $('.search-form-wrapper .search').focus();
    $('html').toggleClass('search-form-open');
  });
  $('[data-toggle=search-form-close]').click(function() {
    $('.search-form-wrapper').removeClass('open');
    $('html').removeClass('search-form-open');
  });
$('.search-form-wrapper .search').keypress(function( event ) {
  if($(this).val() == "Search") $(this).val("");
});

$('.search-close').click(function(event) {
  $('.search-form-wrapper').removeClass('open');
  $('html').removeClass('search-form-open');
});
});