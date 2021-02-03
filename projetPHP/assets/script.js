/*
_________________________________________________________________________________________________________________________

-------------------------------------------------------------------------------------------------------------------------
Il faut créer au préalable un élément de type <img id="imgPreview"> dans votre code html.
Celui-ci vous permettra d'afficher l'aperçu de l'image.
Vous allez pouvoir modifier les dimensions de l'aperçu via un css respectif : "uploadPreview.css" fourni dans le dossier.

Il faut également que votre input soit de cette forme :
<input type="file" name="fileToUpload" id="fileToUpload">
-------------------------------------------------------------------------------------------------------------------------
_________________________________________________________________________________________________________________________
*/

fileToUpload.addEventListener("change", function () {
  let input = this;
  let oFReader = new FileReader(); // on créé un nouvel objet FileReader
  oFReader.readAsDataURL(this.files[0]);
  oFReader.onload = function (oFREvent) {
    imgPreview.setAttribute('src', oFREvent.target.result);
  };
})

// text automatique

var app = document.getElementById('Choix');

var typewriter = new Typewriter(app, {
  loop: true,
  delay: 75,
  deleteSpeed: 50,
});

typewriter
  .pauseFor(1500)
  .typeString('<span class=" h4" style="color: #fff;"> Bienvenue dans la  <span class="h2" style="color: #f80000;"> Matrice </span> <br> Choisissez l\'image de votre avatar. <br> Seul les formats suivant seront acceptés:  <span>')
  .pauseFor(300)
  .typeString('<span class=" h4" style="color: #f80000;;"><strong> JPG </strong> <span>')
  .deleteChars(3)
  .pauseFor(300)
  .deleteChars(3)
  .typeString('<span class=" h4" style="color: #f80000;;"><strong>JPEG</strong> </span>')
  .pauseFor(300)
  .deleteChars(5)
  .typeString('<span class=" h4" style="color: #f80000;"><strong> GIF</span></strong>')
  .pauseFor(300)
  .deleteChars(3)
  .typeString('<span class=" h4" style="color: #f80000;;"> <strong> PNG</span></strong>')
  .pauseFor(1000)
  .start();


//fond matrix 

var c = document.getElementById("c");
var ctx = c.getContext("2d");

c.height = window.innerHeight;
c.width = window.innerWidth;

var english = "1001010101110101010101010010101000101011101111010101010110101010101010101110000101";
english = english.split("");

var font_size = 15;
var columns = c.width / font_size;

var drops = [];

for (var x = 0; x < columns; x++)
  drops[x] = 1;


function draw() {

  ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
  ctx.fillRect(0, 0, c.width, c.height);

  ctx.fillStyle = "#0F0";
  ctx.font = font_size + "px arial";

  for (var i = 0; i < drops.length; i++) {

    var text = english[Math.floor(Math.random() * english.length)];

    ctx.fillText(text, i * font_size, drops[i] * font_size);

    if (drops[i] * font_size > c.height && Math.random() > 0.975)
      drops[i] = 0;

    drops[i]++;
  }
}

setInterval(draw, 33);