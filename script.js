$("form").submit(function(e) {

    var error = "";
    var succes = "";

    if (!$("#email").val()) {
        error += "Please add an email" + "<br>";
    }

    if (!$("#subject").val()) {
        error += "Please add a subject" + "<br>";
    }

    if (!$("#textarea").val()) {
        error += "Please add a message" + "<br>";
    }

    if (error != "") {
        $(".error").html("<div class=\"alert alert-danger\" role=\"alert\">" + error + "</div>");
        return false;
    } else if (error == "") {
        succes += "Message sent succesfully!";
        $(".error").html("<div class=\"alert alert-success\" role=\"alert\">" + succes + "</div>");
        return true;
    }


});