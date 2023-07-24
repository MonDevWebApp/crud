<!-- Auto track the active page -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var currentPage = window.location.pathname.split("/").pop();
        var menuLinks = document.querySelectorAll(".nav a[href='" + currentPage + "']");

        menuLinks.forEach(function(link) {
            link.parentElement.classList.add("active");
        });
    });
</script>
<!-- End -->

<!-- Auto track the active page -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var currentPage = window.location.pathname.split("/").pop();
        var menuLinks = document.querySelectorAll(".nav a[href='" + currentPage + "']");

        menuLinks.forEach(function(link) {
            link.parentElement.classList.add("active");
        });
    });
</script>
<!-- End -->