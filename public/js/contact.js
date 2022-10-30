$("#contactForm").on("submit", function(e){
    let message = "";
    if($("#name").val().trim() == "" || $("#last_names").val().trim() == "" || $("#phone").val().trim() == "" || $("#email").val().trim() == "" || $("#description").val().trim() == ""){
        e.preventDefault();
        message += "Por favor, rellene todos los campos.<br>";
    }
    if(!$("#ttcc").is(":checked")){
        e.preventDefault();
        message += "Acepte la política de privacidad y términos y condiciones de uso.";
    }
    if(message == ""){
        $("#contactBtn").html("Enviando...");
    } else {
        $(".response-box").addClass('alert-success');
        $(".response-box").html(message);
        $(".response-box").removeClass('hide');
        $(".response-box").addClass('alert-danger');
        message = "";
    }

    function successCallback(token){
        // TODO: Fix CORS problems
        // Look for solution to accesible vars
    
        $.ajax('/captcha', 
        {
            method: 'POST',
            data: {
                token: token,
                _token: $("input[name='_token']").val()
            },
            success: function (data, status, xhr) {
                console.log(data)
                console.log(xhr)
                console.log(status)
            }
        });
    
    }
})