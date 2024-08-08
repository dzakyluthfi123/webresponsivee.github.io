let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
let section = document.querySelector('section');
let navLinks = document.querySelector('header nav a');


window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height){
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a [href*=' + id +']').classList.add('active');
            })
        }
    })
}
menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Mencegah formulir dari pengiriman default

    var formData = new FormData(this);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'submit.php', true);
    xhr.onload = function() {
        var response = JSON.parse(xhr.responseText);
        var notification = document.getElementById('formMessage');

        // Hapus semua kelas yang ada sebelumnya
        notification.classList.remove('success', 'error', 'show', 'hide');

        if (response.status === 'success') {
            notification.textContent = response.message;
            notification.classList.add('success', 'show');
        } else {
            notification.textContent = response.message;
            notification.classList.add('error', 'show');
        }

        // Sembunyikan notifikasi setelah beberapa detik
        setTimeout(function() {
            notification.classList.add('hide');
        }, 3000); // Notifikasi ditampilkan selama 3 detik sebelum menghilang
    };
    xhr.onerror = function() {
        console.error('Request failed');
    };
    xhr.send(formData);
});
