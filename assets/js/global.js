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

// ABOUT---- (e)
INFO.addEventListener('click', event => {
  menu_item = event.target.closest('.menu-item');
  if (!menu_item) return;

  menuHighlight(menu_item);
  matchScroll(menu_item.id.split('_')[1]);
});

ABOUT_CONTENT.addEventListener('scroll',  scrolling);
let lastKnownScrollPosition = 0;

// ABOUT---- (fxns)
function menuHighlight(item) {
  menu_items.forEach(item => item.classList.remove('active'));
  item.classList.add('active');
}

function matchScroll(id) {
  // grab the element by the id that came from the menu-item clicked and passed on
  let match = document.getElementById(id);

  // find the scroll position of that element
  let scrollPosition = match.getBoundingClientRect().y - height_gap;

  ABOUT_CONTENT.scrollBy({
    top: scrollPosition,
    behavior: 'smooth'
  });
}

function scrolling() {
  var posObj = {};
  var count = 0;

  sections.forEach(section => {
    posObj[count] = section.getBoundingClientRect().y - height_gap;
    count++;
  })

  scrollMatch(posObj);
}

function scrollMatch(posObj) {
  let last_element;
  for (key in posObj) {
    let offset = posObj[key];
    if (offset <= 180) {
      last_element = sections[key];
    }
  }
  
  let reference_id = 'item_' + last_element.id;
  menu_item = document.getElementById(reference_id);

  menuHighlight(menu_item);
}