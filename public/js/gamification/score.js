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

function getProgressScore(gameResult) {

    let division = (Math.trunc(gameResult.score / 1000)) * 1000;
    return gameResult.score - division;
}