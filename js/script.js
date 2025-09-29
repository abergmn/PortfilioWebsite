document.getElementById("year").textContent = new Date().getFullYear();

// visitor count logic
fetch("/cfetch.php")
    .then((res) => res.text())
    .then(count => document.getElementById("visitor-number").textContent = count)
    .catch((err) => console.error("Failed to load visitor count."));
