$(function(){
	var	btn = $(".slider__btn");
	
	btn.on("click",function(){
		$(".slider__item").first().clone().appendTo(".slider");
		$(".slider__image").first().css({transform: "rotateX(-180deg)", opacity: 0});
		setTimeout(function(){
			$(".slider__item").first().remove();
		},200);
	});
});
     /*************************************************************************************************** */

        function check(){ 
          var  myName = document.forms["myform"]["Name"].value;
        myNumber = document.forms["myform"]["number"].value;
        myDate = document.forms["myform"]["date"].value;
        myTime = document.forms["myform"]["time"].value;
      console.log("MyName");
      if (myName!=""&&myNumber!=""&&myDate!=""&&myTime!=""){
        window.alert("Hello "+myName +" your are booking  successfully");
      }
      else if (myName==NaN){
        window.alert("you should enter a letters only");
        return false;

      }
      else if (myName=="" && myNumber==""&& myDate==""&& myTime==""){
        window. alert("you should enter your name ,number of Individuals,date,and time ");
          return false;
      }
      
      else if (myNumber==""){
         window. alert("you should enter  the Number Of Individuals ");
          return false;
      }  
      else if (myDate==""){
         window. alert("you should enter  date ");
          return false;
      }  
      else if (myTime==""){
         window. alert("you should enter  time ");
          return false;
      }
      else {
       alert("you should enter your name");
          return false;
      }
      }
      /********************************************************************* */
 