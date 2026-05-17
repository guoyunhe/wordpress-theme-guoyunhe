    </div><!-- #page -->
    <?php wp_footer(); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuBackdrop = document.querySelector('.mobile-menu-backdrop');
            const searchToggle = document.querySelector('.search-toggle');
            const searchPanel = document.getElementById('mobile-search');

            function setMobileMenuState(isOpen) {
                mobileMenu.classList.toggle('active', isOpen);
                if (mobileMenuBackdrop) {
                    mobileMenuBackdrop.classList.toggle('active', isOpen);
                }
                menuToggle.setAttribute('aria-expanded', isOpen);
                document.body.classList.toggle('menu-open', isOpen);
            }

            if (menuToggle && mobileMenu) {
                menuToggle.addEventListener('click', function() {
                    setMobileMenuState(!mobileMenu.classList.contains('active'));
                });
            }

            if (mobileMenuBackdrop && mobileMenu) {
                mobileMenuBackdrop.addEventListener('click', function() {
                    setMobileMenuState(false);
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
