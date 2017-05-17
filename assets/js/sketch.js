var img;  // Declare variable 'img'.
var sw = window.innerWidth;
var sh = window.innerHeight;
var cntrimg = -((sh - 400) / 1.55);

function setup() {
  var cnv = createCanvas(sw, sh);
  cnv.parent('hero');
  img = loadImage("/assets/img/helenofjoytall.jpg");  // Load the image
}

function draw() {
  // Displays the image exactly as wide as the viewport and keeps the aspect ratio of the image(1 over 1.5)
  image(img, 0, cntrimg, sw, sw * 1.5);
}

console.log("hello");
