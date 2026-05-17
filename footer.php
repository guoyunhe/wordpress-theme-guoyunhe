    </div><!-- #page -->
    <?php wp_footer(); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const searchToggle = document.querySelector('.search-toggle');
            const searchPanel = document.getElementById('mobile-search');

            if (menuToggle && mobileMenu) {
                menuToggle.addEventListener('click', function() {
                    mobileMenu.classList.toggle('active');
                    this.setAttribute('aria-expanded', mobileMenu.classList.contains('active'));
                });
            }

            if (searchToggle && searchPanel) {
                searchToggle.addEventListener('click', function() {
                    searchPanel.classList.toggle('active');
                    const searchInput = searchPanel.querySelector('input[type="search"]');
                    if (searchInput && searchPanel.classList.contains('active')) {
                        searchInput.focus();
                    }
                });
            }
        });
    </script>
</body>
</html>
