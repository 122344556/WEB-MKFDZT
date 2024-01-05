let currentSlide = 0;
      const slides = document.querySelectorAll(".slide");

      function showSlide() {
        const slider = document.querySelector(".slider");
        slider.style.transform = `translateX(${-currentSlide * 100}%)`;
      }

      function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide();
      }

      function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide();
      }

      // Fungsi untuk slider otomatis
      function autoSlide() {
        nextSlide();
      }

      // Atur interval untuk slider otomatis (misalnya setiap 3 detik)
      setInterval(autoSlide, 3000);