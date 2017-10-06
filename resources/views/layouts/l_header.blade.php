<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Форум</title>

    
    <!--FONT AWESOME-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fa/font-a/css/font-awesome.min.css') }}" />

    <link rel="stylesheet" href="/template/fa/font-a/css/font-awesome.min.css">
    
    <!-- Bootstrap -->
    
    <link rel="stylesheet" href="/template/style2.css">
    <link href="/template/css/bootstrap2" rel="stylesheet">
    
    <!--JAVASCRIPT-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/template/js/bootstrap.js"></script>
    <script src="/template/js/prettyPhoto.js" type="text/javascript" charset="utf-8"></script> 
    <!-- include Cycle2 -->
    <script src="/template/js/cycle1.js"></script>

    <!-- include one or more optional Cycle2 plugins -->
    <script src="/template/js/cycle2.js"></script>
    <script>
      
    </script>
    <script>
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
</script>
<script>
  $(document).ready(function() {
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
  });
</script>
<script>
  $(document).ready(function() {
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
      });
</script>
<script type="text/javascript">
 
$(function() {
 
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
 
});
 
</script>
<script>
  $(document).ready(function(){
  $('.cattehnika1').hover(function(){
    $('.cattehnika').slideDown();
  }, function(){
    $('.cattehnika').slideUp();
  });
  $('.cattehnika2').hover(function(){
    $('.catsport').slideDown();
  }, function(){
    $('.catsport').slideUp();
  });
  $('.cattehnika3').hover(function(){
    $('.catavto').slideDown();
  }, function(){
    $('.catavto').slideUp();
  });
});
</script>

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

  </head>
  <body>