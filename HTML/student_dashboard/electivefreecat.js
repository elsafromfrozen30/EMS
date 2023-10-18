// script.js
const courses = [
    {
      title: 'Free electives under Management',
      code: 'FME',
      description: 'Electives under Management are valuable for students to gain knowledge and skills in leadership, decision-making, organizational behavior, and strategic planning. These courses equip students with essential managerial competencies, fostering their ability to effectively manage teams, resources, and projects, and prepare them for successful careers in various industries, including business, entrepreneurship, and non-profit organizations.',
      url: 'FEMANAGE.html'
    },
    {
      title: 'Free electives under humanities',
      code: 'FHE',
      description: 'Electives under Humanities are important to provide students with a well-rounded education and a broader understanding of human culture, society, and history. These courses foster critical thinking, communication skills, and empathy, enhancing students ability to navigate complex social issues and contribute meaningfully to diverse fields such as literature, philosophy, sociology, and cultural studies.',
      url: 'FEHUM.html'
    },
      {
      title: 'Language based electives',
      code: 'FLE',
      description: 'Electives under Speaking Languages are essential to develop effective communication skills, cultural competence, and global understanding. These courses enable students to connect with diverse cultures, facilitate international business and diplomacy, enhance cognitive abilities, and broaden career opportunities by becoming proficient in multiple languages.',
      url: 'FELANG.html'
    },
  ];
  
  const courseList = document.getElementById('course-list');
  
  courses.forEach(course => {
    const courseCard = document.createElement('div');
    courseCard.className = 'course-card';
  
    const title = document.createElement('h3');
    title.textContent = course.title;
    courseCard.appendChild(title);
  
    const code = document.createElement('p');
    code.textContent = 'Course Code: ' + course.code;
    courseCard.appendChild(code);
  
    const description = document.createElement('p');
    description.textContent = course.description;
    courseCard.appendChild(description);
  
    courseCard.addEventListener('click', () => {
      window.location.href = course.url;
    });
  
    courseList.appendChild(courseCard);
  });
  