#!/usr/bin/env bash
set -euo pipefail

./scripts/build_wp_templates.sh >/dev/null

PKG_DIR="wp-package"
OUT_ZIP="deploy-packages/wp-lp-child-theme-files.zip"

rm -rf "$PKG_DIR"
mkdir -p "$PKG_DIR/lp-assets" "deploy-packages"

cp wordpress-child-theme/page-lp-creative.php "$PKG_DIR/"
cp wordpress-child-theme/page-lp-kachitto.php "$PKG_DIR/"
cp -R assets/* "$PKG_DIR/lp-assets/"

(
  cd "$PKG_DIR"
  zip -r "../$OUT_ZIP" . >/dev/null
)

echo "Created: $OUT_ZIP"
