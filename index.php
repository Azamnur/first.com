<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome!</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
<?php
include('bootstrap.php');
?>
	<h1>Добро пожаловать в МОЙ магазин</h1>
    <a href="products.php">ТОВАРЫ</a><br>
    <button id="but1" href="">Один клик</button><br>
    <button id="but2" href="">Два клика</button><br>
    <p>Привет!</p><br>
    <button id="bu1" href="">Button</button>
     <button id="bu2" href="">Button</button>
      <button id="bu3" href="">Button</button>
       <button id="bu4" href="">Button</button>
        <button id="bu5" href="">Button</button>
        <div class="results">Ждем ответа</div>

        <div id="par1"><img src="photo/396c0b1d7832050ba7216c2a1b46df8d.jpg">Меняется шрифт</div>
        <h1>Добро пожаловать в МОЙ магазин</h1>
    
    <script>
//    var fruits = ["Banana", "Orang", "Cherry", "Apple"];
//        console.log(fruits.splice(3));
//        console.log(fruits);
//        console.log(fruits.splice(2));
//        console.log(fruits.splice(0));
//        console.log(fruits.splice(-2));
//        console.log(fruits.splice(2,-2));
//        console.log(fruits.splice(1));
        
//        function toCelsius(fahrenheit) {
//            return (5/9) * (fahrenheit-32);
//        };
////        document.body.innerHTML= toCelsius(77);
//        document.write (toCelsius(77));
//        document.write("Hi");
//        (
//            function() {
//                x = "Hello!!"; // I will invoke myself
//            }
//        )();
//        alert(x);
//    var person = {
//        firstName:"John",
//        lastName:"Doe",
//        age:50,
//        eyeColor:"blue"
//    };
//        console.log(person);
//        
//        var person = new Object();
//        person.firstName="John";
//        person.lastName="Doe";
//        person.age=50;
//        person.eyeColor="blue";
//        
//         console.log(person);
        
//        function person(first, last, age, eye) {
//            this.firstName= first;
//            this.lastName= last;
//            this.age= age;
//            this.eyeColor= eye;
//        };
//
//        var myFather=new person("John","Doe",50,"blue");
//        
//       console.log(person);
//        console.log(myFather);

//        function Person(first, last, age, eyecolor) {
//            this.firstName = first;
//            this.lastName= last;
//            this.age= age;
//            this.eyeColor= eyecolor;
//        }
// 
// 
////    console.log(Person);
//// 
//        var myFather=new Person("John","Doe",50,"blue");
////        console.log(myFather);
//        
//        myFather.nationality="English";
////        console.log(myFather);
// 
//        Person.prototype.nationality="English";
////        console.log(Person);
////        
//        Person.prototype.name=function() {
//            return this.firstName+" "+this.lastName;
//        };
//        
//         var p2=new Person("J","D",40,"red");
//        console.log(p2);
//        console.log(Person);
//        console.log(myFather);

        $(document).ready(function() { 
            $("#but1").click(function() {
            alert("Вы нажали один раз на первую кнопку!");
            }); 
            $("#but2").dblclick(function() {
            alert("Вы нажали два раза на вторую кнопку!");
            }); 
            $("p").mouseover(function() {
                $("p").css("color", "green")
                $("p").css("font-size", "70px")
                  
            }); 
                $("p").mouseout(function() {
                $("p").css("color", "black")
                }); 
            
//            $("#bu1").click(function() { $("#par1").fadeOut(3000); }); 
//            $("#bu2").click(function() { $("#par1").fadeIn(3000); }); 
//            $("#bu3").click(function() { $("#par1").fadeTo(3000, 0.3); }); 
//            $("#bu4").click(function() { $("#par1").fadeTo(3000, 0.8); }); 
//            $("#bu5").click(function() { $("#par1").fadeOut(3000, function() { 
//            alert("Абзац был полностью скрыт."); 
//     }); 
//                                       });
//                $("#bu1").click(function(){ $("#square").slideUp(3000); });
//                $("#bu2").click(function(){ $("#square").slideDown(3000); });
//                $("#bu3").click(function(){ $("#square").slideToggle(3000); });
//                $("#bu4").click(function(){ $("#square").slideUp(3000, function() {
//                alert("Текст был скрыт");
//     }); 
            
//            $("#bu1").click(function() {
//            $("#par1").animate({fontSize: "1.3em"}, 1000);
//            $("#par1").animate({marginLeft: "30px"}, 1000);
//            $("#par1").animate({marginTop: "50px"}, 1000);
//            $("#par1").animate({fontSize: "1em"}, 1000);
//            $("#par1").animate({marginLeft: "0px"}, 1000);
//            $("#par1").animate({marginTop: "0px"}, 1000);
//   });

            
            /*$("#bu1").click(function(){ 
            $("#par1").load("testfile.txt"); 
      }); 
            $("#bu2").click(function(){ 
                    $.ajax({
                    url: 'response.php?action=sample1',
                    success: function(data) {
                    $('.results').html(data);
                    }
        });
            });*/
            $("#bu3").click(function(){
                $.ajax({
                        dataType: 'json',
                        url: 'response.php?action=sample5',
                        success: function(jsondata){
                        $('.results').html('Name = ' + jsondata.name + ', Nickname = ' + jsondata.nickname);
                    }
                });
            });

    });//documen
           

        
        
    </script>
</body>
</html>