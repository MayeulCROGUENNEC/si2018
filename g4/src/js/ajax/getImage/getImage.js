const host = "localhost:8000/g4";
var btn = document.querySelector("#imagebox_generator");
var imagebox = {
    self: document.querySelector(".imagebox"),
    title: document.querySelector(".imagebox_title"),
    subtitle: document.querySelector(".imagebox_subtitle"),
    image: document.querySelector(".imagebox_image"),
};

function putImageInDOM(data) {
    imagebox.self.style.display = "block";
    imagebox.title.textContent = data.title;
    imagebox.subtitle.textContent = data.subtitle;
    imagebox.image.src = "src/img/imagebox/" + data.imgSrc;
    imagebox.image.title = data.title;
    imagebox.image.alt = data.imgAlt;
}

function getNewImage() {
    fetch("http://" + host + "/src/js/ajax/getImage/getImage.php")
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            if (data) {
                putImageInDOM(data);
            }
        });
}

btn.addEventListener("click", function() {
    getNewImage();
});