<footer class="mb-0 text-center py-2 bg-main">
    <p class="text-white"> Sản phẩm PHP 1 của Nguyễn Ngọc Uy <i class="fa-solid fa-heart"></i></p>
</footer>
</body>
<script src="../assets/js/preview-image.js">

</script>
<script>
$(document).ready(() => {
    const navLink = $('.nav-link');
    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());
    for (var i = 0; i < navLink.length; i++) {
        if (params.url.includes(navLink[i].getAttribute("name"))) {
            navLink[i].classList.add('active');
        }
    }

})
</script>

</html>