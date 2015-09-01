$(document).ready(function() {
   $("#form-reg").submit(function(oEvent) {
       oEvent.preventDefault();
       var name = $("#name-reg").val();
       var email = $("#email-reg").val();
       var password = $("#pass-reg").val();
       var reppassword = $("#passrep-reg").val()
       
       if (typeof name === "undefined" || name === null || name === "") {
           $("#name-error-label").text("Полето трябва да бъде попълнено.");
       } else {
           $("#form-reg").unbind("submit").submit();
       }
   });
});


