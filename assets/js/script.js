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