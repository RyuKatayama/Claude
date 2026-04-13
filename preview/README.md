# プレビューHTML

`dreamam0.net` 新デザインの **静的HTMLプレビュー** です。WordPressやサーバー環境なしで、ブラウザで開くだけでデザインを確認できます。

## 使い方

1. このフォルダ（`preview/`）をリポジトリごとPCにダウンロード
   - リポジトリトップ右上の「Code」→「Download ZIP」
2. 展開して `preview/index.html` をダブルクリック
3. ブラウザで開けば、デザイン確認できます

## プレビュー対象ページ

| ページ | ファイル |
|---|---|
| トップ | `index.html` |
| 代表・事業について | `about.html` |
| 提供サービス | `services.html` |
| 支援プロセス | `process.html` |
| 支援実績 | `achievements.html` |
| お問い合わせ | `contact.html` |
| 事業者情報 | `company.html` |
| ブログ一覧（サンプル） | `blog.html` |

各ページ上部のナビゲーションから相互に行き来できます。

## 注意事項

- **問い合わせフォームは未動作**: WordPress + Contact Form 7 プラグインで初めて動きます
- **画像・ロゴは仮**: 本実装ではロゴ画像を差し替え可能
- **実CSSと同じものを使用**: `../wp-content/themes/dreamam-architecting/assets/css/main.css` を参照しているため、テーマと完全に同じ見た目になります
- **レスポンシブ確認可能**: ブラウザのウィンドウサイズを変えて、スマホ／タブレット表示も確認できます
