var img;  // Declare variable 'img'.
var sw = window.innerWidth;
var sh = window.innerHeight;
var imgh = sh * 1.5389558232931726;
var drawheight = imgh * -0.25;

function setup() {
  var cnv = createCanvas(sw, sh);
  cnv.parent('hero'); 
  img = loadImage("assets/img/helenofjoytall.jpg");
}

function draw() {
  // Displays the image exactly as wide as the viewport and keeps the aspect ratio of
  // the image(1 over 1.5389558232931726)
  image(img, 0, drawheight, sw, imgh);
}

console.log("Making sketch.js changes");
console.log("imgh = " + imgh);
console.log("Image is being drawn within canvas starting at = " + drawheight);
console.log("Image dimensions are " + img.height + img.width);
