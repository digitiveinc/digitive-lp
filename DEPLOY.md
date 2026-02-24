# LP公開手順（指定ドメイン向け）

このリポジトリは静的サイトなので、**商用LP用途で公開可能**です（配信基盤の規約順守と素材の権利確認は別途必要）。

## 1. 公開物を作る

`creative` または `kachitto` を指定して生成します。

```bash
./scripts/prepare_lp.sh creative
./scripts/prepare_lp.sh kachitto
```

生成物:
- `dist/creative/index.html` + `dist/creative/assets`
- `dist/kachitto/index.html` + `dist/kachitto/assets`

## 2. ドメインの設計を決める

推奨は次のどちらかです。

- サブドメイン運用: `lp.example.com`
- サブディレクトリ運用: `example.com/lp/creative/`

※ HPから飛ばす用途なら、既存HP側にリンクを1本追加すればOKです。

## 3. サーバーへアップロード

### パターンA: レンタルサーバー（Xserver/さくら等）

1. Webルートに対象LPをアップ
   - 例: `public_html/lp/creative/index.html`
   - 例: `public_html/lp/creative/assets/...`
2. HP側のリンクを設定
   - 例: `https://example.com/lp/creative/`

### パターンB: 静的ホスティング（Cloudflare Pages / Netlify / Vercel）

1. `dist/creative`（または`dist/kachitto`）をデプロイ
2. カスタムドメインを設定
3. DNSに指示された `CNAME` / `A` を追加
4. HP側リンクを設定

## 4. DNS設定の要点

- サブドメインなら通常 `CNAME` を使う
- ルートドメインなら `A`/`ALIAS` を使う場合あり
- 反映は数分〜48時間（実運用は多くが数分〜数時間）

## 5. 公開前チェック

- `index.html` が直接表示される
- 画像/動画パスが404にならない
- フォーム導線・CTAリンクが正しい
- スマホ表示で崩れない
- GA4/GTMなど計測タグが必要なら埋め込む

## 6. 法務/商用観点（最低限）

- フォント利用規約（Google Fontsは通常Web利用可）
- ロゴ/写真/動画の利用許諾
- 実績ロゴ掲出の許可
- プライバシーポリシー導線（問い合わせがあるLPなら推奨）

