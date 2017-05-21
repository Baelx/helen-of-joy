var img;
var sections = ["AUDIO","VIDEO","SHOWS","BLOG","CONTACT"];
var sw = window.innerWidth;
var sh = window.innerHeight;
var imgh = sw * 1.5389558232931726;
var drawheight = -(imgh/2 - sh/2);
var moonflower; //font
var incircles = [];
var circlew;

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
  img = loadImage("assets/img/helenofjoytall.jpg");
}

function setup() {
  var cnv = createCanvas(sw, sh);
  cnv.parent('hero');

  // Displays the image exactly as wide as the viewport and keeps the aspect ratio of
  // the image(1 over 1.5389558232931726)
  image(img, 0, drawheight, sw, imgh);

  circlew = 27;
  // clickable circles over the stars
  ellipse(450,155,circlew);  // AUDIO
  ellipse(1157,166,circlew); // VIDEO
  ellipse(338,626,circlew);  // SHOWS
  ellipse(713,564,circlew);  // BLOG
  ellipse(1115,647,circlew); // CONTACT

  //  text that will fade in
  fill('white');
  textFont(moonflower);
  textSize(fontDraw());
  text(sections[0], sw / 3.9036, 170, 70, 80);
  text(sections[1], sw / 1.4234, 180, 70, 80);
  text(sections[2], sw / 5.5154, 640, 70, 80);
  text(sections[3], sw / 2.3369, 575, 70, 80);
  text(sections[4], sw / 1.5035, 660, 70, 80);
}

function draw() {

}

function mouseMoved() {
  // Check if mouse is inside the circles
  console.log("mouseMoved running");
  // Check if mouse is inside the circles
  incircles[0] = dist(mouseX, mouseY, 450, 155);
  incircles[1] = dist(mouseX, mouseY, 1157, 166);
  incircles[2] = dist(mouseX, mouseY, 338, 626);
  incircles[3] = dist(mouseX, mouseY, 713, 564);
  incircles[4] = dist(mouseX, mouseY, 1115, 647);



    if (incircles < circlew/2)
        {
      document.body.style.cursor = "pointer";
      } else {
      document.body.style.cursor = "default";
        }








}



function mousePressed() {
  console.log("mousePressed running")
  // Check if mouse is inside the circles
  incircles[0] = dist(mouseX, mouseY, 450, 155);
  incircles[1] = dist(mouseX, mouseY, 1157, 166);
  incircles[2] = dist(mouseX, mouseY, 338, 626);
  incircles[3] = dist(mouseX, mouseY, 713, 564);
  incircles[4] = dist(mouseX, mouseY, 1115, 647);

  incircles.forEach(function(x) {
  if (x < circlew/2){
    return incircles[x];
    }
  })
}

//debugging section
console.log("Making sketch.js changes");
