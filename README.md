# WordPress サイト作成 簡易マニュアル

## ワイヤーフレーム・サイトデザインの作成 
* ラフの作成
  * ウィジェットをどこで使うとか考える必要あり
* パーツの作成

## テーマの作成
### ファイル構成
| 種別 | ファイル名 |
| --- | --- |
| TOP | front-page.php |
| 固定ページ | page.php |
| アーカイブ | archive.php |
| 検索結果 | search.php |
| 詳細 | single.php |
| その他(関連コンテンツ) | index.php |
| 404 | 404.php |
| ヘッダー(パーツ) | header.php |
| フッター(パーツ) | footer.php |
| サイドバー(パーツ) | sidebar.php |
| 検索フォーム(パーツ) | searchform.php |
| 詳細コンテンツ(パーツ) | content.php |

## WordPressの設定
* パーマリンクの設定
  * URLの構成の設定
* サイトアイコンの設定
  * Faviconの設定

## 導入検討プラグイン
* Akisnet
  * スパム対策
* WP Total Hacks
  * サイト設定の様々なカスタマイズ
* BackWPup
  * バックアップ
* AddQuickTag
  * 登録したHTMLタグの挿入サポート
* Google XML Sitemaps
  * XMLサイトマップの作成
* SiteGuard WP Plugin
  * セキュリティ

## 他に必要なこと
* Google Search Consoleの設定
* Google Analyticsの設定
* WP REST APIの停止(使用しない場合)
* ウィジェットでTOPのコンテンツの並び替えができるようにする