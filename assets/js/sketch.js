var img;
var links = ["AUDIO","VIDEO","UPCOMING SHOWS","BLOG","CONTACT"];
var sw = window.innerWidth;
var sh = window.innerHeight;
var imgh = sw * 1.538;
var drawheight = imgh/2 - sh/2;
var moonflower;

function preload() {
  moonflower = loadFont('assets/fonts/moon-flower-bold.ttf');
}

function setup() {
  var cnv = createCanvas(sw, sh);
  cnv.parent('hero');
  img = loadImage("assets/img/helenofjoytall.jpg");
}

function draw() {
  // Displays the image exactly as wide as the viewport and keeps the aspect ratio of
  // the image(1 over 1.5389558232931726)
  image(img, 0, -drawheight, sw, imgh);
  fill('white');
  textFont(moonflower, 50);
  text(links[0], 410, 170, 70, 80);
  text(links[1], 1125, 180, 70, 80);
  text(links[2], 280, 640, 180, 180);
  text(links[3], 685, 575, 70, 80);
  text(links[4], 1065, 660, 70, 80);
}

//debugging section
console.log("Making sketch.js changes");
