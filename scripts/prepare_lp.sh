#!/usr/bin/env bash
set -euo pipefail

if [[ $# -lt 1 ]]; then
  echo "Usage: $0 <creative|kachitto> [output_root]"
  exit 1
fi

LP_NAME="$1"
OUTPUT_ROOT="${2:-dist}"

case "$LP_NAME" in
  creative)
    SRC_HTML="creative-lp.html"
    ;;
  kachitto)
    SRC_HTML="kachitto-lp.html"
    ;;
  *)
    echo "Error: unknown LP '$LP_NAME'. Use creative or kachitto."
    exit 1
    ;;
esac

if [[ ! -f "$SRC_HTML" ]]; then
  echo "Error: source file not found: $SRC_HTML"
  exit 1
fi

OUT_DIR="$OUTPUT_ROOT/$LP_NAME"
mkdir -p "$OUT_DIR"

cp "$SRC_HTML" "$OUT_DIR/index.html"
rm -rf "$OUT_DIR/assets"
cp -R assets "$OUT_DIR/assets"

echo "Built: $OUT_DIR"
echo "- $OUT_DIR/index.html"
echo "- $OUT_DIR/assets"
