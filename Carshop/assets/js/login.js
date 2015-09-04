
$(document).ready(function () {
    $("#login-form").submit(function (oEvent) {
        oEvent.preventDefault();
        var name = $("#name-field").val();
        var password = $("#password-field").val();
        var hasError = false;
        if (typeof name === "undefined" || name === null || name === "") {
            $("#name-error-label").text("Полето трябва да бъде попълнено.");
            hasError = true;
        }
        if (typeof password === "undefined" || password === null || password === "") {
            $("#pass-error-label").text("Полето трябва да бъде попълнено.");
            hasError = true;
        }
        if (hasError === false) {
            $("#login-form").unbind("submit").submit();
        }
    });
});