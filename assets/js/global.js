document.addEventListener("DOMContentLoaded", function() { 
  redblur();
});

function helloWorld(){
  document.onclick = function(e) {
    e.preventDefault;
    alert('Hello World');
  }
}

function redblur(){
  const circle = document.querySelector('.blur');

  document.addEventListener("mousemove", (e) => {
    const mouseX = e.clientX;
    const mouseY = e.clientY;
    let w = circle.offsetWidth; 

    console.log(w);

      // circle.style.width = `${size}px`;
      // circle.style.height = `${size}px`;
      circle.style.opacity = 1; 

      // Move the circle to the mouse position
      circle.style.left = `${mouseX - (w / 2)}px`;
      circle.style.top = `${mouseY - (w / 2)}px`;

  });
}