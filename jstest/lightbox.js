document.addEventListener("DOMContentLoaded", function () {
    var modal = document.getElementById("lightbox-modal");
    var modalImg = document.getElementById("lightbox-image");
    var captionText = document.getElementById("caption");
    var images = document.querySelectorAll(".gallery-image");

    images.forEach((img) => {
        img.addEventListener("click", function () {
            modal.style.display = "block";
            modalImg.src = this.getAttribute("data-src");
            captionText.innerHTML = this.alt;
        });
    });

    var closeBtn = document.getElementsByClassName("close")[0];

    closeBtn.onclick = function () {
        modal.style.display = "none";
    };
});
