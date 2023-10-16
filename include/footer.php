<!-------Footer Section-------->
<footer class="footer">
    <div class="footer-text">
        <p>Copyright &copy; 2023 by Alisha | All Rights Reserve.</p>
    </div>
    <div class="footer-icon">
        <a href="#home"><i class='bx bx-up-arrow-alt' ></i></a>
    </div>
  </footer>
  <!-------Custom js-------->
  <script src="js/script.js"></script>

  <!-------Swiper js-------->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 50,
    loop: true,
    grabCursor:true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  </script>

</body>
</html>