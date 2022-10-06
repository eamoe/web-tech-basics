function getName() {
    var name  = prompt("Введите ваше имя: ");
    return name;
}

function printWelcomeMessage(userName) {
    var welcomeParagraph = document.getElementById("welcome-message");
    if (userName) {
        welcomeParagraph.textContent += userName;
    }
    else {
        welcomeParagraph.textContent += "неизвестный";
    }
}

var userName = getName();
printWelcomeMessage(userName);