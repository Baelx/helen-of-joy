var img;
var links = ["AUDIO","VIDEO","SHOWS","BLOG","CONTACT"];
var sw = window.innerWidth;
var sh = window.innerHeight;
var imgh = sw * 1.5389558232931726;
var drawheight = -(imgh/2 - sh/2);
var moonflower;

var fontDraw = function() {
if(sw >= 1200){
return imgh/49;
} else if (sw >= 700) {
return imgh/35;
} else {
return imgh/25;
  }
}

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
  image(img, 0, drawheight, sw, imgh);
  // clickable text links below
  fill('white');
  textFont(moonflower);
  textSize(fontDraw());
  text(links[0], sw / 3.9036, 170, 70, 80);
  text(links[1], sw / 1.4234, 180, 70, 80);
  text(links[2], sw / 5.5154, 640, 70, 80);
  text(links[3], sw / 2.3369, 575, 70, 80);
  text(links[4], sw / 1.5035, 660, 70, 80);
}

//debugging section
console.log("Making sketch.js changes");
console.log(imgh / 3.72727);
