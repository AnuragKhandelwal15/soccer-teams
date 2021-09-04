"use strict";

$(document).ready(function() {
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	//add team
	$('#add_team').click(function(e) {
		e.preventDefault();
		$('.error').text('');
        $.ajax({
            url : '/api/add/team',
            type: "POST",
            dataType: "json",
            data: $('.add_team').serialize(),
            success:function(response){
              if(response.status){
                window.location.href = '/admin/teams';
              } else {
              	$('.error').text(response.message).show();
              }
            }
        });
	});

	//edit team
	$('#edit_team').click(function(e) {
		e.preventDefault();
		$('.error').text('');
        $.ajax({
            url : '/api/edit/team',
            type: "POST",
            dataType: "json",
            data: $('.edit_team').serialize(),
            success:function(response){
              if(response.status){
                window.location.href = '/admin/teams';
              } else {
              	$('.error').text(response.message).show();
              }
            }
        });
	});

  //add player
  $('#add_player').click(function(e) {
    e.preventDefault();
    $('.error').text('');
        $.ajax({
            url : '/api/add/player',
            type: "POST",
            dataType: "json",
            data: $('.add_player').serialize(),
            success:function(response){
              if(response.status){
                window.location.href = '/admin/players';
              } else {
                $('.error').text(response.message).show();
              }
            }
        });
  });

  //edit player
  $('#edit_player').click(function(e) {
    e.preventDefault();
    $('.error').text('');
        $.ajax({
            url : '/api/edit/player',
            type: "POST",
            dataType: "json",
            data: $('.edit_player').serialize(),
            success:function(response){
              if(response.status){
                window.location.href = '/admin/players';
              } else {
                $('.error').text(response.message).show();
              }
            }
        });
  });

});