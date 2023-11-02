const cursor = document.getElementById('cursor'); // Assurez-vous que vous avez un élément avec l'ID 'circle' dans votre HTML.
const cursor2 = document.getElementById('cursor2'); // Assurez-vous que vous avez un élément avec l'ID 'circle' dans votre HTML.
const cursor3 = document.getElementById('cursor3'); // Assurez-vous que vous avez un élément avec l'ID 'circle' dans votre HTML.
document.addEventListener('mousemove', (e) => {
    const height = cursor.offsetHeight;
    const width = cursor.offsetWidth;


    setTimeout(() => {

        cursor.style.left = `${e.pageX - width/2}px`
        cursor2.style.left = `${e.pageX - width/2}px`
        cursor3.style.left = `${e.pageX - width/2}px`
        cursor.style.top = `${e.pageY - height/2}px`
        cursor2.style.top = `${e.pageY - height/2}px`
        cursor3.style.top = `${e.pageY - height/2}px`

    }, 20);
});

const containers = document.querySelectorAll('.card');
containers.forEach(container => {
    const follower = container.querySelector('.blob');

    container.addEventListener('mousemove', (e) => {
        const x = e.clientX - container.getBoundingClientRect().left - follower.clientWidth / 2;
        const y = e.clientY - container.getBoundingClientRect().top - follower.clientHeight / 2;

        follower.style.width = '500px'; // Réglez la largeur ici
        follower.style.height = '500px'; // Réglez la hauteur ici
        follower.style.left = x + 'px';
        follower.style.top = y + 'px';
    });
});