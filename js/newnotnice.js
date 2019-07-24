// canvas animation init
window.requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;

var width, height, prevTime;
var canvas = document.getElementById('c');
var ctx    = canvas.getContext('2d');

width = window.innerWidth;
height = window.innerHeight;

canvas.width  = width;
canvas.height = height;

var mouse = {
  x: 0,
  y: 0
};

var Boid = function(ctx) {
  this.ctx = ctx;
  
  this.x   = width * Math.random();
  this.y   = height * Math.random();
  
  this.vx  = 10;
  this.vy  = 10;
};

Boid.prototype = {
  radius: 10,
  col: '#0093ce',
  
  update: function() {},
  
  draw: function() {
    this.ctx.fillStyle = this.col;
    this.beginPath();
    this.ctx.arc( this.x, this.y, this.rad, 0, 2 * Math.PI, false );
    this.ctx.fill();
    this.ctx.closePath();
  }
};

//config
var boids = [];
var randomAclX = [];
var randomAclY = [];
var isRandom = false;


var NUM_BOIDS = 50;
var NUM_BOIDS_EXC = NUM_BOIDS - 1;
var BOID_SIDE = 40;
var MAX_SPEED = 1.3;
var MAX_DIST = 150;

init();
loop();

function init() {
  for (var i = 0; i < NUM_BOIDS; i++) {
    var boid = new Boid(ctx);

    boids.push(boid);
  }
  canvas.addEventListener('mousemove', mouseHandler, false);
  prevTime = +new Date;
};

function mouseHandler(e) {
  mouse.x = e.pageX;
  mouse.y = e.pageY;
};

function onRandomChange() {
    isRandom = !isRandom;

    if (isRandom){
        for(var i = 0; i < NUM_BOIDS; i++){
            var aclX = 10 * (Math.random() - .5);
            var aclY = 10 * (Math.random() - .5);

            randomAclX[i] = aclX; 
            randomAclY[i] = aclY; 
        }

        setTimeout(onRandomChange, 1000);
    } else {
        setTimeout(onRandomChange, 2000);
    }
};

function loop() {
  var curTime = +new Date;
  var duration = (curTime - prevTime)/1000;
  prevTime = curTime;
  
  ctx.fillStyle = '#222';
  ctx.fillRect(0, 0, width, height);
  
  for (var i = 0; i < boids.length; i++) {
        var b = boids[i];
        
        if (isRandom) {
          b.vx += randomAclX[i]
          b.vy += randomAclY[i];  
        }
             
        var speed = Math.sqrt(b.vx * b.vx + b.vy * b.vy);
        if (speed >= MAX_SPEED) {
            var r = MAX_SPEED / speed;
            b.vx *= r;
            b.vy *= r;
        }

        if (!isRandom){
            if (b.x < 0 && b.vx < 0 || b.x > width  && b.vx > 0) b.vx *= -1;
            if (b.y < 0 && b.vy < 0 || b.y > height && b.vy > 0) b.vy *= -1;
        }
        
        b.x += b.vx;
        b.y += b.vy;  

        if (isRandom) {
            if(b.x < 0) b.x += width;
            if(b.x > width) b.x -= width;

            if(b.y < 0)b.y += height;
            if(b.y > height)b.y -= height;
        }

    }

    for (var i = 0; i < boids.length; i++) {
        var boidA = boids[i];

        ctx.beginPath();
        ctx.fillStyle = 'rgba(255, 255, 255, .3)';
        
        ctx.arc(boidA.x - mouse.x/5, boidA.y - mouse.y/5, 2, 0, 2 * Math.PI);  
        
        ctx.fill();

        ctx.closePath();


        for (var j = i; j < boids.length; j++){
            var boidB = boids[j];
            var dx = boidA.x - boidB.x;
            var dy = boidA.y - boidB.y;

            var dis = Math.sqrt(dx * dx + dy * dy);

            if (dis < MAX_DIST) {
                var alpha = (MAX_DIST - dis) / MAX_DIST;

                ctx.beginPath();
                ctx.strokeStyle = 'rgba(255, 255, 255, ' + alpha + ')';
                ctx.moveTo(boidA.x - mouse.x/5, boidA.y - mouse.y/5);
                ctx.lineTo(boidB.x - mouse.x/5, boidB.y - mouse.y/5);
                ctx.stroke();

                ctx.closePath();
            }
        }
    }
  
  requestAnimationFrame(loop);
};

function getDistance(p1, p2) {
    var dx = p1.x - p2.x;
    var dy = p1.y -p2.y;
    return Math.sqrt(dx * dx + dy * dy);
};