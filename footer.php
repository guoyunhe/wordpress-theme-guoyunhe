    </div><!-- #page -->
    <?php wp_footer(); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const siteSidebar = document.querySelector('.site-sidebar');
            const siteSidebarBackdrop = document.querySelector('.site-sidebar-backdrop');
            const searchToggle = document.querySelector('.search-toggle');
            const searchPanel = document.getElementById('mobile-search');

            function setSidebarState(isOpen) {
                if (siteSidebar) {
                    siteSidebar.classList.toggle('active', isOpen);
                }
                if (siteSidebarBackdrop) {
                    siteSidebarBackdrop.classList.toggle('active', isOpen);
                }
                if (menuToggle) {
                    menuToggle.setAttribute('aria-expanded', isOpen);
                }
                document.body.classList.toggle('menu-open', isOpen);
            }

            if (menuToggle && siteSidebar) {
                menuToggle.addEventListener('click', function() {
                    setSidebarState(!siteSidebar.classList.contains('active'));
                });
            }

            if (siteSidebarBackdrop && siteSidebar) {
                siteSidebarBackdrop.addEventListener('click', function() {
                    setSidebarState(false);
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
