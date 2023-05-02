 function toggleNav() {
                var nav = document.getElementById("navbar");
                if (!nav.style.display || nav.style.display === "none") {
                    nav.style.display = "block";
                } else {
                    nav.style.display = "none";
                }
                
            };

function headerVidImg() {
    var x = document.getElementById('header-vid-img');
            if (screen.width < 800) {
                
                x.innerHTML = '<img src="img/ali_henrik.jpg" id="header-img">';
            }
            else {
                x.innerHTML = '<video playsinline autoplay muted loop id="headerVideo"><source src="../vid/main_background.mp4" type="video/mp4"></video>';
            };
                          }