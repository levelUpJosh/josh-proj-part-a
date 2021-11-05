$('#submitBtn').click(function () {
    var username = $('#username').val();
    var password = $('#password').val();

    if (username == "Alice" && password == "AlicePass") {
        $('#loginAlertBox').text('Successful login');
        $('#loginAlertBox').addClass("alert-primary");
        $('#loginAlertBox').removeClass("d-none alert-danger");
        window.location.href = "operator-dash.php";
        console.log("Success");
    } else if (username == "Specialist" && password == "SpecialistPass") {
        $('#loginAlertBox').text('Successful login');
        $('#loginAlertBox').addClass("alert-primary");
        $('#loginAlertBox').removeClass("d-none alert-danger");
        window.location.href = "specialist-dash.php";
        console.log("Success");
    } else {
        console.log("Error");
        $('#loginAlertBox').text('Incorrect username or password entered.');
        $('#loginAlertBox').addClass("alert-danger");
        $('#loginAlertBox').removeClass("d-none alert-primary");
    }
})
$("#password").keyup(function(event) {
    if (event.keyCode === 13) {
        $("#submitBtn").click();
    }
});