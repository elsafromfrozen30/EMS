// Add click event listener to elective courses
const courseItems = document.querySelectorAll('.course li');
courseItems.forEach(item => {
    item.addEventListener('click', function() {
        this.classList.toggle('selected');
    });
});