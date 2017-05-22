var img;
var sections = ["AUDIO", "VIDEO", "SHOWS", "BLOG", "CONTACT"];
var sw = window.innerWidth;
var sh = window.innerHeight;
var imgh = sw * 1.5389558232931726;
var drawheight = -(imgh / 2 - sh / 2);
var moonflower; //font
var incircles = [];
var circlew;

var fontDraw = function() {
  if (sw >= 1200) {
    return imgh / 49;
  } else if (sw >= 700) {
    return imgh / 35;
  } else {
    return imgh / 25;
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
  image(img, 0, drawheight, sw, sw * 1.5389558232931726);


  circlew = 27;
  // clickable circles over the stars
  ellipse(sw/3.55555555555556, 155, circlew); // AUDIO
  ellipse(sw/1.1063094209161626, 166, circlew); // VIDEO
  ellipse(sw/3.78698224852071, 626, circlew); // SHOWS
  ellipse(sw/1.7952314165497896, 564, circlew); // BLOG
  ellipse(sw/1.147982062780269, 647, circlew); // CONTACT

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
  incircles[0] = dist(mouseX, mouseY, sw / 3.5555, 155);
  incircles[1] = dist(mouseX, mouseY, sw /1.38288, 166);
  incircles[2] = dist(mouseX, mouseY, sw/4.73372, 626);
  incircles[3] = dist(mouseX, mouseY, sw/2.24403, 564);
  incircles[4] = dist(mouseX, mouseY, sw/1.43497, 647);

  if (incircles[0] < circlew / 2 || incircles[1] < circlew / 2 || incircles[2] < circlew / 2 || incircles[3] < circlew / 2 || incircles[4] < circlew / 2) {
    document.body.style.cursor = "pointer";
  } else {
    document.body.style.cursor = "default";
  }
}



function mousePressed() {
  console.log("mousePressed running")
  // Check if mouse is inside the circles
  incircles[0] = dist(mouseX, mouseY, sw / 3.5555, 155);
  incircles[1] = dist(mouseX, mouseY, sw /1.38288, 166);
  incircles[2] = dist(mouseX, mouseY, sw/4.73372, 626);
  incircles[3] = dist(mouseX, mouseY, sw/2.24403, 564);
  incircles[4] = dist(mouseX, mouseY, sw/1.43497, 647);


  if (incircles[0] < circlew / 2) {
    window.location.href="audio.html";
  }
  if (incircles[1] < circlew / 2) {
    window.location.href="video.html";
  }
  if (incircles[2] < circlew / 2) {
    window.location.href="#shows";
  }
  if (incircles[3] < circlew / 2) {
    window.location.href="blog.html";
  }
  if (incircles[4] < circlew / 2) {
    window.location.href="contact.html";
  }

}

//debugging section
console.log("Making sketch.js changes");
