    </div><!-- #page -->
    <svg class="crt-filter-defs" aria-hidden="true" focusable="false" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <filter id="crt-barrel-distortion" x="-3%" y="-3%" width="106%" height="106%">
                <feTurbulence type="fractalNoise" baseFrequency="0.65 0.003" numOctaves="1" seed="2" result="noise" />
                <feDisplacementMap in="SourceGraphic" in2="noise" scale="1.4" xChannelSelector="R" yChannelSelector="G" result="distorted" />
                <feComponentTransfer in="distorted" result="toneAdjusted">
                    <feFuncR type="linear" slope="1.06" intercept="-0.03" />
                    <feFuncG type="linear" slope="1.06" intercept="-0.03" />
                    <feFuncB type="linear" slope="1.06" intercept="-0.03" />
                </feComponentTransfer>
                <feMorphology in="SourceAlpha" operator="dilate" radius="22" result="expandedAlpha" />
                <feComposite in="expandedAlpha" in2="SourceAlpha" operator="out" result="edgeBand" />
                <feFlood flood-color="#000000" flood-opacity="0.16" result="vignetteColor" />
                <feComposite in="vignetteColor" in2="edgeBand" operator="in" result="vignette" />
                <feBlend in="toneAdjusted" in2="vignette" mode="multiply" result="finalOutput" />
                <feComposite in="finalOutput" in2="SourceGraphic" operator="over" />
            </filter>
        </defs>
    </svg>
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
