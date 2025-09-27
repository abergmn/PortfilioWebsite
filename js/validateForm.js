function validateForm() {
    const form = document.forms["contactForm"];
    const name = form["name"].value.trim();
    const email = form["email"].value.trim();
    const message = form["message"].value.trim();
    
    if (!name || !email || !message) {
        alert("Empty field detected! (check either name, email, or message");
        return false;
    }

    return true;
}
