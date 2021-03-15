function getTotalScore(userId) {
    let response = $.ajax({
        'async': false,
        'type': "GET",
        'url': "/score/total/" + userId,
        success: function (data) {
            return data
        },
        error: function (data) {
            console.error(data)
        }
    });
    return response.responseJSON
}

function teacherAddScore(button) {
    button.disabled = true;
    button.innerText = 'aguarde'

    let userId = $('#userIdToEditPoints').val()
    let score = document.getElementById('scoreInput').value;
    let description = document.getElementById('descriptionScoreInput').value

    result = {"student": userId, "score": score, "datetime": new Date().toISOString(), "description": description};

    result = JSON.stringify(result)

    $.ajax({
        type: "POST",
        url: "/score/add",
        data: result,
        success: function (data) {
            location.reload()
        },
        error: function (data) {
            console.error(data)
        }
    })
}

function getProgressScore(gameResult) {

    let division = (Math.trunc(gameResult.score / 1000)) * 1000;
    return gameResult.score - division;
}