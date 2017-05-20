var img;
var sections = ["AUDIO","VIDEO","SHOWS","BLOG","CONTACT"];
var sw = window.innerWidth;
var sh = window.innerHeight;
var imgh = sw * 1.5389558232931726;
var drawheight = -(imgh/2 - sh/2);
var moonflower; //font

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
  //  text that will fade in
  fill('white');
  textFont(moonflower);
  textSize(fontDraw());
  text(sections[0], sw / 3.9036, 170, 70, 80);
  text(sections[1], sw / 1.4234, 180, 70, 80);
  text(sections[2], sw / 5.5154, 640, 70, 80);
  text(sections[3], sw / 2.3369, 575, 70, 80);
  text(sections[4], sw / 1.5035, 660, 70, 80);

  // clickable circles over the stars
  ellipse(450,155,27);  // AUDIO
  ellipse(1157,166,27); // VIDEO
  ellipse(338,626,27);  // SHOWS
  ellipse(713,564,27);  // BLOG
  ellipse(1115,647,27); // CONTACT

  mouseHover();

}

function mouseHover() {
  // Check if mouse is inside the circles
  var withina = dist(mouseX, mouseY, 450, 155);
  var withinv = dist(mouseX, mouseY, 1157, 166);
  var withins = dist(mouseX, mouseY, 338, 626);
  var withinb = dist(mouseX, mouseY, 713, 564);
  var withinc = dist(mouseX, mouseY, 1115, 647);
  if (withina < 13.5 || withinv < 13.5 || withins < 13.5 || withinb < 13.5 || withinc < 13.5) {
    document.body.style.cursor = "pointer";
  }
}



function mousePressed() {
  // Check if mouse is inside the circles
  var withina = dist(mouseX, mouseY, 450, 155);
  var withinv = dist(mouseX, mouseY, 1157, 166);
  var withins = dist(mouseX, mouseY, 338, 626);
  var withinb = dist(mouseX, mouseY, 713, 564);
  var withinc = dist(mouseX, mouseY, 1115, 647);
  if (withina < 13.5 || withinv < 13.5 || withins < 13.5 || withinb < 13.5 || withinc < 13.5) {
    console.log('clicked within a circle');
  }
}

//debugging section
console.log("Making sketch.js changes");
console.log(imgh / 3.72727);
