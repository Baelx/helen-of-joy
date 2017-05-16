var img;  // Declare variable 'img'.
var sw = window.innerWidth;
var sh = window.innerHeight;
var cntrimg = -((sw - 375) / 1.55);

function setup() {
  var cnv = createCanvas(sw, sh);
  img = loadImage("helenofjoytall.jpg");  // Load the image
}

function draw() {
  // Displays the image at its actual size at point (0,0)
  image(img, 0, cntrimg, sw, sw * 1.5);
}

console.log(cntrimg);
