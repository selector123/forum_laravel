$(document).ready(function(){
	$('.ssilka').hover(function(){
		$(this).css({"color": "#3499DA"});
	}, function(){
		$(this).css({"color": "grey"});
	});

	 var h_hght = 600; // высота шапки
var h_mrg = 0;    // отступ когда шапка уже не видна
                 
$(function(){
 
    var elem = $('#top_nav');
    var top = $(this).scrollTop();
     
    if(top > h_hght){
        elem.css('top', h_mrg);
    }           
     
    $(window).scroll(function(){
        top = $(this).scrollTop();
         
        if (top+h_mrg < h_hght) {
            elem.css('top', (h_hght-top));
        } else {
            elem.css('top', h_mrg);
        }
    });
 
});


 $("#firstform").bind("keypress", function() {
          var znach = $("#firstform").val();
        $.post("/error/", {name:znach}, function (data) {
          $(".nameerror").attr({
              style: "color:red"
            });
          $(".nameerror").html(data);
          if (znach.length>2 && data == '<i class="fa fa-check" aria-hidden="true"></i>') {
            $(".nameerror").attr({
              style: "color:green"
            });
          }
        });
        });
        $("#secondform").bind("keypress", function() {
          var znach = $("#secondform").val();
        $.post("/error/", {name:znach}, function (data) {
          $(".nameerror1").attr({
              style: "color:red"
            });
          $(".nameerror1").html(data);
          var el = data;
          if (znach.length>2 && data == '<i class="fa fa-check" aria-hidden="true"></i>') {
            $(".nameerror1").attr({
              style: "color:green"
            });
          }
        });
        });
        $("#thridform").bind("keypress", function() {
          var znach = $("#thridform").val();
        $.post("/error/", {name:znach}, function (data) {
          $(".nameerror2").attr({
              style: "color:red"
            });
          $(".nameerror2").html(data);
          if (znach.length>2 && data == '<i class="fa fa-check" aria-hidden="true"></i>') {
            $(".nameerror2").attr({
              style: "color:green"
            });
          }
        });
        });


        $("#tab-1").bind("click", function() {
          var znach = $("#tab-1").attr("id");
        $.post("/showcat/", {name:znach}, function (data) {
          if (data == 'tab-1') {
            $(".obovsem").attr({
              style:"display:table"
            });
            $(".dosug").attr({
              style:"display:none"
            });
            $(".it").attr({
              style:"display:none"
            });
            $(".tehnika").attr({
              style:"display:none"
            });
          }
        });
        });
        $("#tab-2").bind("click", function() {
          var znach = $("#tab-2").attr("id");
        $.post("/showcat/", {name:znach}, function (data) {
          if (data == 'tab-2') {
            $(".obovsem").attr({
              style:"display:none"
            });
            $(".dosug").attr({
              style:"display:table"
            });
            $(".it").attr({
              style:"display:none"
            });
            $(".tehnika").attr({
              style:"display:none"
            });
          }
        });
        });
        $("#tab-3").bind("click", function() {
          var znach = $("#tab-3").attr("id");
        $.post("/showcat/", {name:znach}, function (data) {
          if (data == 'tab-3') {
            $(".obovsem").attr({
              style:"display:none"
            });
            $(".dosug").attr({
              style:"display:none"
            });
            $(".it").attr({
              style:"display:table"
            });
            $(".tehnika").attr({
              style:"display:none"
            });
          }
        });
        });
        $("#tab-4").bind("click", function() {
          var znach = $("#tab-4").attr("id");
        $.post("/showcat/", {name:znach}, function (data) {
          if (data == 'tab-4') {
            $(".obovsem").attr({
              style:"display:none"
            });
            $(".dosug").attr({
              style:"display:none"
            });
            $(".it").attr({
              style:"display:none"
            });
            $(".tehnika").attr({
              style:"display:table"
            });
          }
        });
        });



        $(window).scroll(function() {
 
if($(this).scrollTop() != 0) {
 
$('#toTop').fadeIn();
 
} else {
 
$('#toTop').fadeOut();
 
}
 
});
 
$('#toTop').click(function() {
 
$('body,html').animate({scrollTop:0},800);
 
});




$('.cattehnika1').hover(function(){
    $( ".fadeel" ).fadeIn( "slow", function() {
    // Animation complete
  });
    $('.cattehnika').slideDown();
  }, function(){
    $( ".fadeel" ).fadeOut( "slow", function() {
    // Animation complete
  });
    $('.cattehnika').slideUp();
  });
  $('.cattehnika2').hover(function(){
    $( ".fadeel1" ).fadeIn( "slow", function() {
    // Animation complete
  });
    $('.catsport').slideDown();
  }, function(){
    $( ".fadeel1" ).fadeOut( "slow", function() {
    // Animation complete
  });
    $('.catsport').slideUp();
  });
  $('.cattehnika3').hover(function(){
    $( ".fadeel2" ).fadeIn( "slow", function() {
    // Animation complete
  });
    $('.catavto').slideDown();
  }, function(){
    $( ".fadeel2" ).fadeOut( "slow", function() {
    // Animation complete
  });
    $('.catavto').slideUp();
  });
});