$(function(){
	$(".main-topix .list li:nth-child(1)").hover(function(){
	  $(".main-topix .image li:nth-child(1) .thumbnail").css("display","block");
	  $(".main-topix .image li:nth-child(2) .thumbnail").css("display","none");
	  $(".main-topix .image li:nth-child(3) .thumbnail").css("display","none");
	  $(".main-topix .image li:nth-child(4) .thumbnail").css("display","none");
	  $(".main-topix .image li:nth-child(5) .thumbnail").css("display","none");
	})
	$(".main-topix .list li:nth-child(2)").hover(function(){
	  $(".main-topix .image li:nth-child(1) .thumbnail").css("display","none");
	  $(".main-topix .image li:nth-child(2) .thumbnail").css("display","block");
	  $(".main-topix .image li:nth-child(3) .thumbnail").css("display","none");
	  $(".main-topix .image li:nth-child(4) .thumbnail").css("display","none");
	  $(".main-topix .image li:nth-child(5) .thumbnail").css("display","none");
	})
	$(".main-topix .list li:nth-child(3)").hover(function(){
	  $(".main-topix .image li:nth-child(1) .thumbnail").css("display","none");
	  $(".main-topix .image li:nth-child(2) .thumbnail").css("display","none");
	  $(".main-topix .image li:nth-child(3) .thumbnail").css("display","block");
	  $(".main-topix .image li:nth-child(4) .thumbnail").css("display","none");
	  $(".main-topix .image li:nth-child(5) .thumbnail").css("display","none");
	})
	$(".main-topix .list li:nth-child(4)").hover(function(){
	  $(".main-topix .image li:nth-child(1) .thumbnail").css("display","none");
	  $(".main-topix .image li:nth-child(2) .thumbnail").css("display","none");
	  $(".main-topix .image li:nth-child(3) .thumbnail").css("display","none");
	  $(".main-topix .image li:nth-child(4) .thumbnail").css("display","block");
	  $(".main-topix .image li:nth-child(5) .thumbnail").css("display","none");
	})
	$(".main-topix .list li:nth-child(5)").hover(function(){
	  $(".main-topix .image li:nth-child(1) .thumbnail").css("display","none");
	  $(".main-topix .image li:nth-child(2) .thumbnail").css("display","none");
	  $(".main-topix .image li:nth-child(3) .thumbnail").css("display","none");
	  $(".main-topix .image li:nth-child(4) .thumbnail").css("display","none");
	  $(".main-topix .image li:nth-child(5) .thumbnail").css("display","block");
	})
});