
$(document).ready(function () {
    $("#login-form").submit(function (oEvent) {
        oEvent.preventDefault();
        var name = $("#name-field").val();
        var password = $("#password-field").val();

        if (typeof name === "undefined" || name === null || name === "") {
            $("#name-error-label").text("Полето трябва да бъде попълнено.");
        } else {
            $(this).unbind('submit').submit();
        }
        if (typeof password === "undefined" || password === null || password === "") {
            $("#pass-error-label").text("Полето трябва да бъде попълнено.");
        } else {
            $(this).unbind('submit').submit();
        }
    });
});