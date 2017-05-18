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
  // the image(1 over 1.538)
  image(img, 0, -drawheight, sw, imgh);
  // clickable text links below
  fill('white');
  textFont(moonflower, 50);
  text(links[0], sw / 3.902, imgh / 14.470, 70, 80); // 2460 / 170 = 14.470
  text(links[1], sw / 1.422, imgh / 13.666, 70, 80);
  text(links[2], sw / 5.714, imgh / 3.843, 180, 180);
  text(links[3], sw / 2.335, imgh / 4.278, 70, 80);
  text(links[4], sw / 1.502, imgh / 3.72727, 70, 80);
}

//debugging section
console.log("Making sketch.js changes");
console.log(imgh / 3.72727);
