const openFeedback =
    document.getElementById("openFeedback");

const closeFeedback =
    document.getElementById("closeFeedback");

const feedbackContainer =
    document.getElementById("feedbackFormContainer");


/* OPEN FEEDBACK */

openFeedback.addEventListener("click", function () {

    feedbackContainer.classList.add("show");

});


/* CLOSE FEEDBACK */

closeFeedback.addEventListener("click", function () {

    feedbackContainer.classList.remove("show");

});


/* CLICK OUTSIDE */

feedbackContainer.addEventListener("click", function (event) {

    if (event.target === feedbackContainer) {

        feedbackContainer.classList.remove("show");

    }

});


/* ESC KEY */

document.addEventListener("keydown", function (event) {

    if (event.key === "Escape") {

        feedbackContainer.classList.remove("show");

    }

});


/* BACK TO TOP */

const backToTop =
    document.getElementById("backToTop");


window.addEventListener("scroll", function () {

    if (window.scrollY > 300) {

        backToTop.classList.add("show");

    } else {

        backToTop.classList.remove("show");

    }

});


backToTop.addEventListener("click", function () {

    window.scrollTo({

        top: 0,

        behavior: "smooth"

    });

});
