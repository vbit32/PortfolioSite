canvas = document.getElementById('c');
w = canvas.width = window.innerWidth;
h = canvas.height = window.innerHeight;
context = canvas.getContext('2d');
timer = Math.PI*1.8 ;
sunX = 0;
sunY = 0;

update();

function update() {

    w = canvas.width = window.innerWidth;
h = canvas.height = window.innerHeight;
  
    timer += .003;

    c1 = new Color(228, 163, 113, 1);
    c2 = new Color(50, 0, 80, 1);
    sky_color = ColorLerp(c1, c2, timer);
    sky(sky_color.toRGBA());

    c1 = new Color(255, 190, 100, 1);
    c2 = new Color(120, 20, 1, 1);
    sun_color = ColorLerp(c1, c2, timer);
    sun(sun_color.toRGBA(), w / 2, h / 2);

    c1 = new Color(90, 120, 180, 1);
    c2 = new Color(80, 0, 80, 1);
    ocean_color = ColorLerp(c1, c2, timer);
    ocean(ocean_color.toRGBA(), h / 2);
    shoreline(timer);

    
 
    window.requestAnimationFrame(update);
}


function ColorLerp(c1, c2, timer) {

    timer = timer + Math.PI / 2

    result = new Color();

    result = c1;
    result.r = ColorLerpHelper(c1.r, c2.r, timer);
    result.g = ColorLerpHelper(c1.g, c2.g, timer);
    result.b = ColorLerpHelper(c1.b, c2.b, timer);

    return result;

}

function ColorLerpHelper(e1, e2, timer) {
    return (Math.round(e1 * Math.abs(Math.cos(timer / 2)) + e2 * Math.abs(Math.cos((timer + Math.PI) / 2))));
}

function sky(c) {
    context.fillStyle = c;
    context.beginPath();
    context.rect(0, 0, w, h);
    context.fill();
}

function ocean(c, x) {
    context.fillStyle = c;
    context.beginPath();
    context.rect(0, x, w, h);
    context.fill();
}

function sun(c, x, y) {

    sunX = Math.cos(timer) * -1 * w / 3;
    sunY = Math.sin(timer) * w / 3;

    context.beginPath();
    context.shadowBlur = 200;
    context.shadowColor = new Color(250, 150, 0, 1).toRGBA();
    context.arc(x + sunX, y + sunY, 40, 0, 2 * Math.PI, false);

    context.fillStyle = c;
    context.fill();
    context.shadowBlur = 0;

}

function shoreline(timer) {

    context.beginPath();
    c1 = new Color(248, 183, 113, 1);
    c2 = new Color(148, 83, 13, .5)
    context.fillStyle = ColorLerp(c1, c2, timer).toRGBA();
    context.moveTo(w, h / 2 + 1);
    context.lineTo(w / 2 + 40, 3 * h / 4);
    context.lineTo(0, h);
    context.lineTo(w, h);
    context.lineTo(w, h / 2 + 1);
    context.closePath();
    context.fill();

    context.beginPath();
    c1 = new Color(253, 246, 175, 1);
    c2 = new Color(153, 146, 75, .5);
    context.fillStyle = ColorLerp(c1, c2, timer).toRGBA();
    context.moveTo(w, h / 2 + 1);
    context.lineTo(w / 2 + 120, 3 * h / 4);
    context.lineTo(0 + w / 4, h);
    context.lineTo(w, h);
    context.lineTo(w, h / 2 + 1);
    context.closePath();
    context.fill();

    context.beginPath();
    c1 = new Color(236, 219, 124, 1);
    c2 = new Color(136, 119, 24, .5);
    context.fillStyle = ColorLerp(c1, c2, timer).toRGBA();
    context.moveTo(w, h / 2 + 1);
    context.lineTo(w / 2 + 190, 3 * h / 4);
    context.lineTo(0 + w / 2, h);
    context.lineTo(w, h);
    context.lineTo(w, h / 2 + 1);
    context.closePath();
    context.fill();

}






//
window.requestAnimFrame = (function (callback) {
    return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function (callback) {
        window.setTimeout(callback, 1000 / 60);
    };
})();

//i rolled my own color object - cool?
function Color(r, g, b, o) {
    this.r = 0;
    this.g = 0;
    this.b = 0;
    this.o = 1;

    this.r = r;
    this.g = g;
    this.b = b;
    this.o = o;

    this.toRGBA = function () {
        return "rgba(" + this.r + "," + this.g + "," + this.b + "," + this.o + ")";
    }
    this.fromHEX = function (hex) {
        var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
        this.r = parseInt(result[1], 16);
        this.g = parseInt(result[2], 16);
        this.b = parseInt(result[3], 16);
        this.o = 1;
    }
}