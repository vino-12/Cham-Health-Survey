function validateRange() {
    // wurde slider verändert?
    if (!sliderHasChanged()) {
        setWarning("bitte bewege slider");
        // stoppt sprung auf nächste Seite
        return false;
    }
    else return true;
}

function sliderChanged() {
    // get hiddenInputElement "range-slider-changed" and set its value to 1.
    let hiddenInputElement = document.getElementById("range-slider-changed");
    hiddenInputElement.value = "1";
}

function sliderHasChanged() {
    // Hole das hiddenInputElement "range-slider-changed" und gib true zurück.
    // falls die "1" eingetragen ist. sonst gib false zurück.
    let hiddenINputElement = document.getElementById("range-slider-changed");

    if (hiddenInputElement.value === "1") return true;
    else return false;
}