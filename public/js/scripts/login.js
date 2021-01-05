resendEmailButton = document.getElementById("resendEmailButton");
resendEmailButton.addEventListener('click', function () {
    var emailLabel = document.getElementById("usernameLabel");
    var emailInput = document.getElementById("usernameInput");
    var emailValue = "";
    if(emailLabel) {
        emailValue = emailLabel.innerHTML;
    } else if (emailInput) {
        emailValue = emailInput.value;
    }
    var emailField = {"email": emailValue};
    var dangerMessage = document.getElementById("dangerMessage");
    var success = document.getElementById("success");
    this.setAttribute("disabled", true)
    $.ajax({
        type: "POST",
        url: "/email/resend",
        data: JSON.stringify(emailField),
        success: function (data) {
            resendEmailButton.classList.replace("btn-primary", "btn-success")
            resendEmailButton.classList.replace("btn-danger", "btn-success")
            resendEmailButton.innerHTML = "Email enviado <i class='simple-icon-check'></i>"
            modalDanger.classList.remove("show")
            resendEmailButton.style.color = "white"
        },
        error: function (data) {
            var modalDanger = document.getElementById("modalDanger");
            var modalDangerMessage = document.getElementById("modalDangerMessage");
            modalDanger.classList.contains("show") ? "" : modalDanger.classList.add("show")
            modalDangerMessage.innerHTML = data.responseJSON.message;
            resendEmailButton.removeAttribute("disabled");
            resendEmailButton.classList.replace("btn-primary", "btn-danger")
            resendEmailButton.innerHTML = "Tentar novamente <i class='simple-icon-exclamation'></i>"
            resendEmailButton.style.color = "white"
        }
    });
});

var modal = document.getElementById("modal");
var usernameLabel = document.getElementById("usernameLabel");
modal.addEventListener("focus", function () {
    usernameLabel.innerHTML = document.getElementById("inputEmail").value;
})
usernameLabel.addEventListener("click", function () {
    var input = document.createElement('input');
    for (var i = 0, l = usernameLabel.attributes.length; i < l; ++i) {
        var nodeName = usernameLabel.attributes.item(i).nodeName;
        var nodeValue = usernameLabel.attributes.item(i).nodeValue;
        input.setAttribute(nodeName, nodeValue);
        input.value = usernameLabel.innerHTML;
        input.style.cursor = ""
        input.classList.add("form-control")
    }
    input.innerHTML = usernameLabel.innerHTML;
    input.id = "usernameInput"
    input.classList.remove("d-inline-block")
    input.classList.add("d-block")
    document.getElementsByClassName("tooltip").item(0).classList.remove("show")
    usernameLabel.parentNode.replaceChild(input, usernameLabel);
    input.addEventListener("pointerover", function () {
        document.addEventListener("click", function (event) {
            var isClickInside = input.contains(event.target);
            if (!isClickInside) {
                if(input.parentNode) {
                    input.parentNode.replaceChild(usernameLabel, input)
                }
                usernameLabel.id = "usernameLabel"
                usernameLabel.value = input.value
                usernameLabel.innerHTML = input.value
                usernameLabel.style.cursor = "pointer"
                if(input.value == "") {
                    usernameLabel.innerHTML = "Sem email"
                }
                document.removeEventListener("click", function () {
                })
            }
        })
    })
})