
$(document).ready(function() {
   $("#login-form").submit(function(oEvent) {
       oEvent.preventDefault();
       var name = $("#name-field").val();
       var email = $("#password-field").val();
       
       if (typeof name === "undefined" || name === null || name === "") {
           $("#name-error-label").text("Полето трябва да бъде попълнено.");
       } else {
           $("#login-form").submit();
       }
   });
});