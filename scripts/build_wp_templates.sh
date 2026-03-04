#!/usr/bin/env bash
set -euo pipefail

OUT_DIR="wordpress-child-theme"
mkdir -p "$OUT_DIR"

build_template() {
  local src_html="$1"
  local out_php="$2"
  local template_name="$3"

  {
    echo "<?php"
    echo "/*"
    echo "Template Name: ${template_name}"
    echo "*/"
    echo "if (!defined('ABSPATH')) { exit; }"
    echo "?>"
    sed 's#assets/#<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/#g' "$src_html" \
      | sed 's#</head>#<?php wp_head(); ?></head>#' \
      | sed 's#</body>#<?php wp_footer(); ?></body>#'
  } > "$out_php"
}

build_template "creative-lp.html" "$OUT_DIR/page-lp-creative.php" "LP Creative Standalone"
build_template "kachitto-lp.html" "$OUT_DIR/page-lp-kachitto.php" "LP Kachitto Standalone"
build_template "kensyu-lp.html" "$OUT_DIR/page-lp-kensyu.php" "LP Kensyu Standalone"

echo "Generated:"
echo "- $OUT_DIR/page-lp-creative.php"
echo "- $OUT_DIR/page-lp-kachitto.php"
echo "- $OUT_DIR/page-lp-kensyu.php"
