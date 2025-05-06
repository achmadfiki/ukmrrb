/*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) => {
    const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId);

    if (toggle && nav) {
        toggle.addEventListener("click", () => {
            // Toggle class untuk menampilkan menu
            nav.classList.toggle("show-menu");

            // Toggle ikon menu
            toggle.classList.toggle("show-icon");
        });
    }
};

const teamContent = document.querySelector(".team-content");
const nextBtn = document.getElementById("nextBtn");
const prevBtn = document.getElementById("prevBtn");
const teamSlides = document.querySelectorAll(".boxteam");
const totalSlides = teamSlides.length;

let index = 0;
const visibleSlides = 4; // Jumlah anggota yang terlihat di desktop

// Cek apakah slider diperlukan
function checkTeamSize() {
    if (teamContent && nextBtn && prevBtn) {
        if (totalSlides > visibleSlides) {
            teamContent.classList.add("slide-mode");
            nextBtn.style.display = "block";
            prevBtn.style.display = "block";
        } else {
            teamContent.classList.remove("slide-mode");
            nextBtn.style.display = "none";
            prevBtn.style.display = "none";
        }
    }
}

// Update posisi slider
function updateSlider() {
    if (teamContent) {
        const slideWidth = teamSlides[0].offsetWidth + 32; // Lebar elemen + margin
        teamContent.style.transform = `translateX(-${index * slideWidth}px)`;
    }
}

// Event listener tombol next
if (nextBtn) {
    nextBtn.addEventListener("click", () => {
        if (index < totalSlides - visibleSlides) {
            index++;
        } else {
            index = 0; // Kembali ke awal jika sudah di akhir
        }
        updateSlider();
    });
}

// Event listener tombol prev
if (prevBtn) {
    prevBtn.addEventListener("click", () => {
        if (index > 0) {
            index--;
        } else {
            index = totalSlides - visibleSlides; // Kembali ke akhir jika di awal
        }
        updateSlider();
    });
}

// Panggil fungsi setelah halaman dimuat
document.addEventListener("DOMContentLoaded", () => {
    checkTeamSize();
});

// Fungsi untuk menggulir galeri gambar
function scrollGallery(direction) {
    const gallery = document.getElementById("gallery");
    if (gallery) {
        const scrollAmount = gallery.clientWidth / 4; // Geser 1 gambar per klik
        gallery.scrollBy({ left: direction * scrollAmount, behavior: "smooth" });
    }
}

// Menampilkan menu navigasi
showMenu("nav-toggle", "nav-menu");
document.addEventListener("DOMContentLoaded", () => {
    checkTeamSize();
    var swiper = new Swiper(".slide-content", {
        slidesPerView: 3,
        spaceBetween: 25,
        loop: true,
        centerSlide: true,
        fade: true,
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
        },
    });
});