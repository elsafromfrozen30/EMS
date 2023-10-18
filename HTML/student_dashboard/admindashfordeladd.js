// script.js
function toggleMenu() {
    var sideMenu = document.querySelector('.side-menu');
    var mainContent = document.querySelector('.main-content');
    var menuToggle = document.querySelector('.menu-toggle');
  
    sideMenu.classList.toggle('menu-open');
    mainContent.classList.toggle('menu-open');
    menuToggle.classList.toggle('menu-open');
  }
  
  document.getElementById('add-course-form').addEventListener('submit', function(event) {
    event.preventDefault();
  
    var courseName = document.getElementById('course-name').value;
    var courseDescription = document.getElementById('course-description').value;
  
    var courseCard = document.createElement('div');
    courseCard.classList.add('course-card');
  
    var courseHeading = document.createElement('h3');
    courseHeading.textContent = courseName;
  
    var courseDesc = document.createElement('p');
    courseDesc.textContent = courseDescription;
  
    courseCard.appendChild(courseHeading);
    courseCard.appendChild(courseDesc);
  
    document.getElementById('course-list').appendChild(courseCard);
  
    document.getElementById('course-name').value = '';
    document.getElementById('course-description').value = '';
  });
  