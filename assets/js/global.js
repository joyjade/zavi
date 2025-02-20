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
  let lastX = 0, lastY = 0, lastTime = 0;

  document.addEventListener("mousemove", (e) => {
    const mouseX = e.clientX;
    const mouseY = e.clientY;
    const currentTime = Date.now();

      // Calculate the distance moved and time elapsed
      const deltaX = mouseX - lastX;
      const deltaY = mouseY - lastY;
      const distance = Math.sqrt(deltaX * deltaX + deltaY * deltaY);
      const timeElapsed = currentTime - lastTime;

      // Calculate the speed (distance / time)
      const speed = distance / timeElapsed;

      // Calculate the new circle size based on speed
      const size = Math.min(500, 150 + speed * 6); // Max size is 200px, adjust factor as needed
      circle.style.width = `${size}px`;
      circle.style.height = `${size}px`;
      circle.style.opacity = 1; 

      // Move the circle to the mouse position
      circle.style.left = `${mouseX - size / 2}px`;
      circle.style.top = `${mouseY - size / 2}px`;

      // Update the last position and time
      lastX = mouseX;
      lastY = mouseY;
      lastTime = currentTime;
  });

}