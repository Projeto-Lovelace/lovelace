function fancyTimeFormat(duration) {
    // Hours, minutes and seconds
    var hrs = ~~(duration / 3600);
    var mins = ~~((duration % 3600) / 60);
    var secs = ~~duration % 60;

    // Output like "1:01" or "4:03:59" or "123:03:59"
    var ret = "";

    if (hrs > 0) {
        ret += "" + hrs + ":" + (mins < 10 ? "0" : "");
    }

    ret += "" + mins + ":" + (secs < 10 ? "0" : "");
    ret += "" + secs;
    return ret;
}

var pointAdded = false;

function onPlayerReady(event) {
    event.target.stopVideo();
    pointAdded = false
}

var player;

let time = document.getElementById("time")
let timeMobile = document.getElementById("timeMobile")

let percentageWatchedTag = document.getElementById("percentageWatched")
let percentageWatchedTagMobile = document.getElementById("percentageWatchedMobile")

// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.

function onPlayerStateChange(event) {
    setInterval(function () {
        let state = player.getPlayerState();
        if (state === 1) {
            let durationInSeconds = player.getDuration()
            let durationInMinutes = fancyTimeFormat(durationInSeconds);

            let currentTime = player.getCurrentTime();

            time.innerText = fancyTimeFormat(currentTime) + ' - ' + durationInMinutes
            timeMobile.innerText = fancyTimeFormat(currentTime) + ' - ' + durationInMinutes

            let percentageWatched = Math.floor((currentTime * 100) / durationInSeconds)

            percentageWatchedTag.innerText = percentageWatched + "% assistido"
            percentageWatchedTagMobile.innerText = percentageWatched + "% assistido"

            if(percentageWatched >= 97 && pointAdded === false){
                addPoints()
            }
        }
    }, 500)
}

function ajaxCall() {
    let state = player.getPlayerState();
    if (state === 1) {
        let currentTime = player.getCurrentTime();
        let durationInSeconds = player.getDuration()
        let percentageWatched = Math.floor((currentTime * 100) / durationInSeconds)
        result = {
            "student": userId,
            "percentage": percentageWatched,
            "timeWatched": fancyTimeFormat(currentTime),
            "class": classId
        };

        result = JSON.stringify(result)

        $.ajax({
            type: "POST",
            url: "/student/video/watched",
            data: result,
            error: function (data) {
                console.log(data)
            },
        })
    }
}

function addPoints() {
    pointAdded = true;

    result = {"student": userId, "score": 50, "datetime": new Date().toISOString(), "description": "Assistir video aula de " + classTitle + " na plataforma"};

    result = JSON.stringify(result)

    $.ajax({
        type: "POST",
        url: "/score/add",
        data: result,
        success: function (data) {
            console.log(data)
        },
        error: function (data) {
            console.error(data)
        }
    })
}

function updateIframe(code) {
    $('#timerBar').css('background-color', "#0c0c0c")
    time.innerText = "00:00 - 00:00"
    timeMobile.innerText = "00:00 - 00:00"

    percentageWatchedTag.innerText = "0% assistido"
    percentageWatchedTagMobile.innerText = "0% assistido"

    player = new YT.Player('player', {
        videoId: code,
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });
}

function destroyPlayer() {
    time.innerText = ""
    timeMobile.innerText = ""

    percentageWatchedTag.innerText = ""
    percentageWatchedTagMobile.innerText = ""
    if (player) {
        player.pauseVideo()
        player.stopVideo()
        player.destroy()
    }
}