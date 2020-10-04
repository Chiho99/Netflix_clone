$(document).scroll(function() {
    let isScrolled = $(this).scrollTop() > $(".topBar").height(); //.topBarの下までスクロールしたら
    $(".topBar").toggleClass("scrolled", isScrolled );
})

function volumeToggle(button) {
    let muted = $(".previewVideo").prop("muted");
    $(".previewVideo").prop("muted", !muted);

    $(button).find("i").toggleClass("fas fa-volume-mute"); //find class
    $(button).find("i").toggleClass("fas fa-volume-up"); //add class
}

function previewEnded() {
    // show and hide elements
    $(".previewVideo").toggle();
    $(".previewImage").toggle();
}

function goBack() {
    window.history.back();
}

function startHideTimer() {
    let timeout = null;

    $(document).on("mouseover", function() {
        clearTimeout(timeout);
        $(".watchNav").fadeIn();

        timeout = setTimeout(function() {
            $(".watchNav").fadeOut();
        }, 2000);
    })
}

function initVideo(videoId, username) {
    startHideTimer();
    setStartTime(videoId, username);
    updateProgressTimer(videoId, username);
    // console.log(videoId);
    // console.log(userLoggedIn);
}

function updateProgressTimer(videoId, username) {
    addDuration(videoId, username);

    let timer;
    $("video").on("playing", function(event) {
        // console.log("hello");
        window.clearInterval(timer);
        timer = window.setInterval(function() {
            updateProgress(videoId, username, event.target.currentTime); //taget based on event
            // console.log("hi");
        }, 3000) //every 3 seconds output "hi"
    })
    .on("ended", function() {
        setFinieshed(videoId, username);
        window.clearInterval(timer);
    })
}

function addDuration(videoId, username) {  //post send (addDuration.php)
    $.post("ajax/addDuration.php", { videoId: videoId, username: username }, function(data) {
        if(data !== null && data !== "") {
            alert(data);
        } 
    })
}

function updateProgress(videoId, username, progress) {
    // console.log(progress);
    $.post("ajax/addDuration.php", { videoId: videoId, username: username, progress: progress }, function(data) {
        if(data !== null && data !== "") {
            alert(data);
        } 
    })
}

function setFinieshed(videoId, username) {
    // console.log(progress);
    $.post("ajax/setFinished.php", { videoId: videoId, username: username }, function(data) {
        if(data !== null && data !== "") {
            alert(data);
        } 
    })
}

function setStartTime(videoId, username) {
    $.post("ajax/getProgress.php", { videoId: videoId, username: username }, function(data) {
      if(isNaN(data)) { //is Not a Number
        alert(data);
        return;
      }
      $("video").on("canplay", function() {
          this.currentTime = data;
          $("video").off("canplay");
      })
    })
}

function restartVideo() {
    $("video")[0].currentTime = 0;
    $("video")[0].play();
    $(".upNext").fadeOut();
}

function watchVideo(videoId) {
    window.location.href = "watch.php?id=" + videoId;
}

function showUpNext() {
    $(".upNext").fadeIn();
}