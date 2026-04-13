# 夢・アーキテクティング工房 Webサイト

[https://dreamam0.net/](https://dreamam0.net/) のWordPressカスタムテーマリポジトリ。

## 概要

BtoB向け技術コンサルティング・組織開発支援事業「夢・アーキテクティング工房（代表：片山 立）」の公式Webサイト用カスタムテーマ。

- 技術コンサル軸（車載・ADAS・機能安全・SE・ソフトウェアプロセス改善）
- 人・組織変容軸（U理論・コーチング・組織開発・ライフデザイン）

の2軸を、**白 × ネイビー基調 × 紫・七色の虹アクセント**で表現し、潜在顧客からの相談フォーム送信を主導線としたサイト。

## リポジトリ構成

```
wp-content/themes/dreamam-architecting/   … カスタムテーマ本体
```

本リポジトリでは **カスタムテーマのみ** を管理します。WordPress本体・`wp-config.php`・`uploads/`・他プラグインはコミットしません。

## インストール手順

1. `wp-content/themes/dreamam-architecting/` フォルダを ZIP 圧縮
2. WordPress管理画面 →「外観」→「テーマ」→「新規追加」→「テーマのアップロード」
3. ZIPを選択してアップロード → 有効化
4. 推奨プラグイン導入:
   - **Contact Form 7**（問い合わせフォーム必須）
   - **All in One SEO** または **Yoast SEO**（SEO対策）
5. 管理画面から以下を設定:
   - 「外観」→「メニュー」で `primary`, `footer` メニューを割当
   - 「設定」→「表示設定」でトップページを固定ページに設定
   - Contact Form 7 で以下の問い合わせフォームを作成（詳細は下記）

## 初期設定: 固定ページとテンプレート割当

以下の固定ページを作成し、ページ属性の「テンプレート」で指定：

| ページスラッグ | タイトル | テンプレート |
|---|---|---|
| `home` (トップ) | トップ | (front-page.php が自動適用) |
| `about` | 代表・事業について | Default |
| `services` | 提供サービス | Services Template |
| `process` | 支援プロセス | Process Template |
| `achievements` | 支援実績 | Default |
| `contact` | お問い合わせ | Contact Template |
| `company` | 事業者情報 | Default |
| `privacy` | プライバシーポリシー | Default |
| `blog` | ブログ | (「設定→表示設定」で投稿ページに指定) |

## Contact Form 7 設定例

フォーム本体:
```
<label>お名前（必須）
  [text* your-name] </label>

<label>会社名・ご所属（任意）
  [text your-company] </label>

<label>メールアドレス（必須）
  [email* your-email] </label>

<label>ご相談内容（必須）
  [textarea* your-message x10] </label>

[acceptance acceptance-1] プライバシーポリシーに同意する [/acceptance]

[submit "無料相談を送信する"]
```

送信先メールアドレス: `ryuk@dreamam.net`

作成後、固定ページ `/contact/` にショートコード `[contact-form-7 id="XX"]` を貼り付け。

## デザイン仕様

| 項目 | 値 |
|---|---|
| プライマリ | `#0F2E5C`（ネイビー） |
| セカンダリ | `#5B1A7A`（紫） |
| アクセント | `#D4A017`（ゴールド） |
| ベース背景 | `#FFFFFF` / `#F7F9FC` |
| 本文色 | `#1F2937` |
| フォント（日本語） | Noto Sans JP |

## 連絡先（サイト掲載）

- 夢・アーキテクティング工房 代表: 片山 立（工学博士）
- 所在地: 〒530-0042 大阪市北区天満橋3-4-11
- Email: `ryuk@dreamam.net`
- 受付: 平日 10:00 〜 20:00
- ※ 電話番号はサイト非公開。問い合わせフォームまたはメールで受付。

## ライセンス

本テーマは `夢・アーキテクティング工房` の専用テーマです。無断転載・再配布を禁じます。
