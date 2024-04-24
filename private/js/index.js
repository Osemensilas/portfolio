const skillNames = document.querySelector(".skill-major-name-content").children;
const skillsDescriptions = document.querySelector(".skills-content").children;

skillNames[0].classList.add("active");
skillsDescriptions[0].classList.add("active");

for (let i = 0; i < skillNames.length; i++) {
    let skillName = skillNames[i];

    skillName.addEventListener("click", function() {
        if (skillName == skillNames[0]) {
            skillNames[0].classList.add("active");
            skillNames[1].classList.remove("active");
            skillNames[2].classList.remove("active");

            skillsDescriptions[0].classList.add("active");
            skillsDescriptions[1].classList.remove("active");
            skillsDescriptions[2].classList.remove("active");
        } else if (skillName == skillNames[1]) {
            skillNames[0].classList.remove("active");
            skillNames[1].classList.add("active");
            skillNames[2].classList.remove("active");

            skillsDescriptions[0].classList.remove("active");
            skillsDescriptions[1].classList.add("active");
            skillsDescriptions[2].classList.remove("active");
        } else {
            skillNames[0].classList.remove("active");
            skillNames[1].classList.remove("active");
            skillNames[2].classList.add("active");

            skillsDescriptions[0].classList.remove("active");
            skillsDescriptions[1].classList.remove("active");
            skillsDescriptions[2].classList.add("active");
        }
    });
}

//Projects Begins

const projects = document.querySelector(".projects-container").children;

for (let i = 0; i < projects.length; i++) {
    let project = projects[i];

    project.addEventListener("mouseenter", function() {
        project.children[1].children[1].classList.add("active");

        let detailsViewBtn = project.children[1].children[1].children[0];
        let fullDetails = project.children[1].children[2];
        let cancel = project.children[1].children[2].children[0].children[0];

        detailsViewBtn.addEventListener("click", function() {
            fullDetails.classList.add("active");
            projects[i].classList.add("content");
        });
        cancel.addEventListener("click", function() {
            fullDetails.classList.remove("active");
            project.children[1].children[1].classList.remove("active");
            projects[i].classList.remove("content");
        });
    });

    project.children[1].children[1].addEventListener("mouseleave", function() {
        project.children[1].children[1].classList.remove("active");
    });
}

//observer Begins

const navigations = document.querySelector(".header-nav-container").children;

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            let id_value = entry.target.classList.value;

            if (id_value == "hero_id") {
                navigations[0].classList.add("active");
                navigations[1].classList.remove("active");
                navigations[2].classList.remove("active");
                navigations[3].classList.remove("active");
                navigations[4].classList.remove("active");
            } else if (id_value == "skills_id") {
                navigations[0].classList.remove("active");
                navigations[1].classList.add("active");
                navigations[2].classList.remove("active");
                navigations[3].classList.remove("active");
                navigations[4].classList.remove("active");
            } else if (id_value == "projects_id") {
                navigations[0].classList.remove("active");
                navigations[1].classList.remove("active");
                navigations[2].classList.add("active");
                navigations[3].classList.remove("active");
                navigations[4].classList.remove("active");
            } else if (id_value == "contact_me_id") {
                navigations[0].classList.remove("active");
                navigations[1].classList.remove("active");
                navigations[2].classList.remove("active");
                navigations[3].classList.add("active");
                navigations[4].classList.remove("active");
            } else {
                navigations[0].classList.remove("active");
                navigations[1].classList.remove("active");
                navigations[2].classList.remove("active");
                navigations[3].classList.remove("active");
                navigations[4].classList.add("active");
            }
        }
    });
});

const mySections = document.querySelectorAll("section");
mySections.forEach((element) => {
    observer.observe(element);
});

//Media JS

const hamContainer = document.querySelector(".hamburger-container");

hamContainer.addEventListener("click", function() {
    hamContainer.children[0].classList.toggle("active");
    hamContainer.parentElement.children[0].classList.toggle("active");

    let navs = hamContainer.parentElement.children[0].children;

    for (let i = 0; i < navs.length; i++) {
        let nav = navs[i];

        console.log(nav);

        nav.addEventListener("click", function() {
            hamContainer.children[0].classList.remove("active");
            hamContainer.parentElement.children[0].classList.remove("active");
        });
    }
});

//clients review

const clientReviews = document.querySelectorAll(".client-review");
const nxtClient = document.querySelector(".left-btn");
const prevClient = document.querySelector(".right-btn");

let clientNum = 0;

let activeClient = clientReviews[clientNum];
activeClient.classList.add("active");

activeClient.children[0].children[0].children[0].innerText =
    activeClient.children[1].children[0].children[0].innerText[0];

prevClient.classList.add("active");

nxtClient.addEventListener("click", function() {
    activeClient = clientReviews[++clientNum];
    activeClient.classList.add("active");

    activeClient.children[0].children[0].children[0].innerText =
        activeClient.children[1].children[0].children[0].innerText[0];

    prevClient.classList.remove("active");

    for (let i = 0; i < clientReviews.length; i++) {
        let clientReview = clientReviews[i];

        if (activeClient != clientReview) {
            clientReview.classList.remove("active");
        }
    }

    if (clientReviews.length == clientNum + 1) {
        nxtClient.classList.add("active");
    } else {
        nxtClient.classList.remove("active");
    }
});

prevClient.addEventListener("click", function() {
    activeClient = clientReviews[--clientNum];
    activeClient.classList.add("active");

    nxtClient.classList.remove("active");

    activeClient.children[0].children[0].children[0].innerText =
        activeClient.children[1].children[0].children[0].innerText[0];

    for (let i = 0; i < clientReviews.length; i++) {
        let clientReview = clientReviews[i];

        if (activeClient != clientReview) {
            clientReview.classList.remove("active");
        }
    }

    if (clientNum == 0) {
        prevClient.classList.add("active");
    }
});

setInterval(() => {
    activeClient = clientReviews[++clientNum];

    if (activeClient == clientReviews[0]) {
        activeClient.classList.add("active");
        prevClient.classList.add("active");

        activeClient.children[0].children[0].children[0].innerText =
            activeClient.children[1].children[0].children[0].innerText[0];
    } else {
        prevClient.classList.remove("active");
    }

    for (let i = 0; i < clientReviews.length; i++) {
        let clientReview = clientReviews[i];

        if (activeClient != clientReview) {
            clientReview.classList.remove("active");
        } else {
            activeClient.classList.add("active");

            activeClient.children[0].children[0].children[0].innerText =
                activeClient.children[1].children[0].children[0].innerText[0];
        }
    }

    if (clientNum + 1 > clientReviews.length) {
        clientNum = 0;

        activeClient = clientReviews[clientNum];

        activeClient.classList.add("active");

        prevClient.classList.add("active");

        activeClient.children[0].children[0].children[0].innerText =
            activeClient.children[1].children[0].children[0].innerText[0];
    }

    if (clientReviews.length == clientNum + 1) {
        nxtClient.classList.add("active");
    } else {
        nxtClient.classList.remove("active");
    }
}, 8000);

const fullProjs = document.querySelectorAll(".full-project-container");

for (let i = 0; i < fullProjs.length; i++) {
    let fullProj = fullProjs[i];

    fullProj.addEventListener("click", function() {
        console.log("clicked");
    });
}