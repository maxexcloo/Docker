<?php
class Custom_Keys extends Plugin {
	private $host;

	function about() {
		return array(1.0, "Custom Keys", "maxexcloo");
	}

	function api_version() {
		return 2;
	}

	function init($host) {
		$this->host = $host;
		$host->add_hook($host::HOOK_HOTKEY_MAP, $this);
	}

	function hook_hotkey_map($hotkeys) {
		$hotkeys["(38)|up"] = "prev_article";
		$hotkeys["(40)|down"] = "next_article";
		$hotkeys['(39)|right'] = 'next_article_noscroll';
		$hotkeys['(37)|left'] = 'prev_article_noscroll';
		$hotkeys["(32)|space"] = "open_in_new_window";
		return $hotkeys;
	}
}
?>
