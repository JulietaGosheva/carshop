$(document).ready(function() {
   $("#form-reg").submit(function(oEvent) {
       oEvent.preventDefault();
       var name = $("#name-reg").val();
       var email = $("#email-reg").val();
       var password = $("#pass-reg").val();
       var reppassword = $("#reppass-reg").val()
       
       if (typeof name === "undefined" || name === null || name === "") {
           $("#name-error-label").text("Полето трябва да бъде попълнено!");
       } else {
           $("#form-reg").unbind("submit").submit();
       }
       if (typeof email === "undefinded" || email === null || name == "") {
           $("#email-error-label").text("Полето трябва да бъде попълнено!");
       }else {
           $("#form-reg").unbind("submit").submit();
       }
        if (typeof password === "undefinded" || password === null || password == "") {
           $("#pass-error-label").text("Полето трябва да бъде попълнено!");
       }else {
           $("#form-reg").unbind("submit").submit();
       }
         if (typeof reppassword === "undefinded" || reppassword === null || reppassword == "") {
           $("#reppass-error-label").text("Полето трябва да бъде попълнено!");
       }else {
           $("#form-reg").unbind("submit").submit();
       }
       if ( password !== reppassword) {
              $("#pass-error-label").text("Паролите в полетата не съвпадат");
       }else {
           $("#form-reg").unbind("submit").submit();
       }
     
   });
});


