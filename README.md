# wordpress-theme-guoyunhe

A custom WordPress theme with local Podman-based testing.

Theme files are stored at the project root (`style.css`, `functions.php`, `index.php`).
Translations are available in `/languages` for `en_US` and `zh_CN`.
Compile `.mo` files from `.po` sources with `make translations`.

## Local testing

1. Start services:
   ```bash
   podman compose up -d
   ```
2. Open http://localhost:8080 and complete WordPress setup.
3. In **Appearance → Themes**, activate **Guoyunhe**.
4. Stop services:
   ```bash
   podman compose down
   ```
