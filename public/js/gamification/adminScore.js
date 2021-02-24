function addScore(userId) {
    let score = document.getElementById('scoreInput').value;
    let description = document.getElementById('descriptionScoreInput').value

    result = {"student": userId, "score": score, "datetime": new Date().toISOString(), "description": description};

    console.log(result)

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
