function validateForm() {
    const name = document.forms["contactForm"]["name"].value;
    const email = document.forms["contactForm"]["email"].value;

    if (name === "" || email === "") {
        alert("ERROR! Make sure the name and email field are complete.");
        return false;
    }

    return true;
}
