// =====================================
// STUDENT REGISTRATION FORM
// =====================================

const form = document.getElementById("studentForm");

form.addEventListener("submit", function (event) {

    const fullname = document.getElementById("fullname").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const course = document.getElementById("course").value.trim();

    // Check that all fields have been filled
    if (fullname === "" || email === "" || phone === "" || course === "") {

        event.preventDefault();

        alert("Please fill in all four fields.");

        return;
    }

    // Confirmation before sending to PHP
    const confirmation = confirm(
        "Are you sure you want to submit this registration?"
    );

    if (!confirmation) {
        event.preventDefault();
    }

});