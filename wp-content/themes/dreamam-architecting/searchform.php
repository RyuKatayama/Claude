<?php
/**
 * Search form.
 *
 * @package Dreamam_Architecting
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="visually-hidden" for="search-field">検索:</label>
	<input type="search" id="search-field" class="search-field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="キーワードで検索" style="width:100%; padding:10px 12px; border:1px solid var(--color-border-strong); border-radius:var(--radius-sm); margin-bottom:8px;">
	<button type="submit" class="btn btn--primary btn--block">検索する</button>
</form>
