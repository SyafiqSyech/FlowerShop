function handleGenderSelection() {
    var maleRadio = document.getElementById("male");
    var femaleRadio = document.getElementById("female");
    var maleLabel = document.getElementById("maleLabel");
    var femaleLabel = document.getElementById("femaleLabel");

    if (maleRadio.checked) {
        maleRadio.parentElement.classList.add("radio_button-selected");
        maleLabel.classList.add("gender_selection_title-selected");

        femaleRadio.parentElement.classList.remove("radio_button-selected");
        femaleLabel.classList.remove("gender_selection_title-selected");
    } else if (femaleRadio.checked) {
        femaleRadio.parentElement.classList.add("radio_button-selected");
        femaleLabel.classList.add("gender_selection_title-selected");

        maleRadio.parentElement.classList.remove("radio_button-selected");
        maleLabel.classList.remove("gender_selection_title-selected");
    }
}

document
    .getElementById("male")
    .addEventListener("change", handleGenderSelection);
document
    .getElementById("female")
    .addEventListener("change", handleGenderSelection);
