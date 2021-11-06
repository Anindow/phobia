version 1.4.13 ( updated 09-24-2020 )
- [Fixed the Button background color Sticky state not being properly applied.](https://github.com/elegantthemes/submodule-core/pull/707)
- [Fixed the issue with downloading a backup of Divi Theme Options.](https://github.com/elegantthemes/submodule-core/pull/703)
- [Fixed a case where Divi page would cause an error when loaded inside an iframe hosted on a different domain.](https://github.com/elegantthemes/Divi/issues/21169)
- [Updated unit test for Sticky Style bugfix.](https://github.com/elegantthemes/submodule-core/pull/693)
- [Fixed premade Layouts loading from the Divi Library in Safari and Edge.](https://github.com/elegantthemes/submodule-core/pull/681)
- [Updated the Support Center to verify the WP Debug Log setting points to a file (not a directory) before attempting to load its recent entries.](https://github.com/elegantthemes/Divi/issues/20527)
- [Fixed the issue where module attributes were empty while importing a layout either through Divi Library or Divi Builder.](https://github.com/elegantthemes/Divi/issues/20653)
- [Fixed the issue caused by incompatibility with PHP 5.4.](https://github.com/elegantthemes/Divi/issues/20643)
- [Changed blacklist and whitelist terms to blocklist and allowlist throughout codebase.](https://github.com/elegantthemes/Divi/issues/20480)
- [Fixed query to the image by URL failed when served URL different with guid URL.](https://github.com/elegantthemes/Divi/issues/20501)
- [Fixed failing intentional-error test because Divi loads another product's core.](https://github.com/elegantthemes/submodule-core/pull/662)
- [Fixed bug with reset field options in Contact Form module.](https://github.com/elegantthemes/submodule-core/pull/644)
- [Added dismissible "Get Recommended Divi Hosting" Card in Divi Support Center to show if any system status item is in a warning state.](https://github.com/elegantthemes/Divi/issues/19938)
- [Added slashes for post content at layout's import.](https://github.com/elegantthemes/Divi/issues/17540)
- [Fixed issue so that our plugins wont clear cache if Divi, Extra, or the Divi Builder are not active.](https://github.com/elegantthemes/Divi/issues/19861)
- [Fixed layout export progress bar going above 100% in certain cases.](https://github.com/elegantthemes/Divi/issues/19490)
- [Fixed srset attributes not being generated properly for images that were scaled down by WordPress core.](https://github.com/elegantthemes/Divi/issues/19361)
- [Fixed rollback to use fallback version format for trailing dot zero case.](https://github.com/elegantthemes/Divi/issues/19329)
- [Fixed ES6 Promise enqueuing from jsDelivr CDN instead of local.](https://github.com/elegantthemes/Divi/issues/19174)
- [Fixed a Javascript error when loading a page inside an iframe on a different domain.](https://github.com/elegantthemes/Divi/issues/19304)
- [Fixed an issue with HTML special characters not being decoded in Mailster error messages.](https://github.com/elegantthemes/Divi/issues/18381)
- [Decreased recommended max execution time and max input time from 180 to 120 seconds.](https://github.com/elegantthemes/Divi/issues/19220)
- [Fixed mailster custom field data not showing.](https://github.com/elegantthemes/Divi/issues/18582)
- [Fixed reCAPTCHA v3 invalid action name JavaScript error.](https://github.com/elegantthemes/Divi/issues/18301)
- [Revived progress bar in tooltip export at visual builder.](https://github.com/elegantthemes/Divi/issues/9136)
- [Fixed issue with Mailchimp Email Optin's group data with type dropdown / radio not being sent properly.](https://github.com/elegantthemes/Divi/issues/18735)
- [Fixed error email already exists in Mailster Optin Email Module when the user already subscribed to another list.](https://github.com/elegantthemes/Divi/issues/18380)
- [Fixed fatal error when previewing Divi theme.](https://github.com/elegantthemes/Divi/issues/18437)
- [Fixed a bug that cause the builder's global JS object to be defined on frontend pages.](https://github.com/elegantthemes/Divi/issues/18900)
- [Fixed locale system.](https://github.com/elegantthemes/Divi/issues/18573)
- [Fixed responsive images compatibility issue with WP Offload Media Lite for Amazon S3 plugin.](https://github.com/elegantthemes/Divi/issues/18576)
- [Fixed the responsive images srcset & sizes attributes after upload directory changed.](https://github.com/elegantthemes/Divi/issues/18308)
- [Fixed errors caused by using Gutenberg functions when Gutenberg wasn't installed.](https://github.com/elegantthemes/Divi/issues/18593)
- [Fixed Facebook authorization issue.](https://github.com/elegantthemes/monarch/pull/553)
- [Fixed language files not loading from plugin's languages directory.](https://github.com/elegantthemes/monarch/issues/525)
- [Fixed jQuery Migrate warning on post meta.](https://github.com/elegantthemes/Divi/issues/20970)
- [Fixed inline buttons appearing in the incorrect position when Divi Theme Builder layouts are used.](https://github.com/elegantthemes/Divi/issues/17594)
- [Added Support Center to Bloom, Monarch, and Divi Builder plugins.](https://github.com/elegantthemes/monarch/pull/523)
	* core/admin/css/core.css
	* core/admin/css/support-center.css
	* core/admin/css/wp-admin.css
	* core/admin/fonts/builder.eot
	* core/admin/fonts/builder.svg
	* core/admin/fonts/builder.ttf
	* core/admin/fonts/builder.woff
	* core/admin/images/epanel/colorpicker_overlay.png
	* core/admin/images/epanel/colorpicker_select.gif
	* core/admin/images/epanel/custom_background.png
	* core/admin/images/epanel/custom_hex.png
	* core/admin/images/epanel/custom_hsb_b.png
	* core/admin/images/epanel/custom_hsb_h.png
	* core/admin/images/epanel/custom_hsb_s.png
	* core/admin/images/epanel/custom_indic.gif
	* core/admin/images/epanel/custom_rgb_b.png
	* core/admin/images/epanel/custom_rgb_g.png
	* core/admin/images/epanel/custom_rgb_r.png
	* core/admin/images/epanel/custom_submit.png
	* core/admin/images/epanel/postinfo-author.gif
	* core/admin/images/epanel/postinfo-categories.gif
	* core/admin/images/epanel/postinfo-date.gif
	* core/admin/images/epanel/select.png
	* core/admin/images/epanel/select2.png
	* core/admin/images/svg/backups.svg
	* core/admin/images/svg/migrate.svg
	* core/admin/images/svg/security.svg
	* core/admin/images/svg/server.svg
	* core/admin/images/svg/speed.svg
	* core/admin/images/svg/staging.svg
	* core/admin/js/checkbox.js
	* core/admin/js/colorpicker.js
	* core/admin/js/core.js
	* core/admin/js/es6-promise.auto.min.js
	* core/admin/js/eye.js
	* core/admin/js/frame-helpers.js
	* core/admin/js/functions-init.js
	* core/admin/js/popper.min.js
	* core/admin/js/portability.js
	* core/admin/js/recaptcha.js
	* core/admin/js/support-center.js
	* core/admin/js/tippy.min.js
	* core/admin/js/wp-color-picker-alpha.min.js
	* core/components/Cache.php
	* core/components/PageResource.php
	* core/components/Portability.php
	* core/components/SupportCenter.php
	* core/components/SupportCenterMUAutoloader.php
	* core/components/Updates.php
	* core/components/VersionRollback.php
	* core/components/api/ElegantThemes.php
	* core/components/api/Service.php
	* core/components/api/email/ActiveCampaign.php
	* core/components/api/email/Fields.php
	* core/components/api/email/GetResponse.php
	* core/components/api/email/MailChimp.php
	* core/components/api/email/Mailster.php
	* core/components/api/email/Providers.php
	* core/components/api/spam/Provider.php
	* core/components/api/spam/Providers.php
	* core/components/api/spam/ReCaptcha.php
	* core/components/api/spam/init.php
	* core/components/cache/Directory.php
	* core/components/cache/File.php
	* core/components/cache/init.php
	* core/components/data/Utils.php
	* core/components/data/init.php
	* core/components/init.php
	* core/components/mu-plugins/SupportCenterSafeModeDisableChildThemes.php
	* core/components/mu-plugins/SupportCenterSafeModeDisablePlugins.php
	* core/functions.php
	* core/init.php
	* core/json-data/google-fonts.json
	* core/languages/ar.mo
	* core/languages/ar.po
	* core/languages/bg_BG.mo
	* core/languages/bg_BG.po
	* core/languages/cs_CZ.mo
	* core/languages/cs_CZ.po
	* core/languages/da_DK.mo
	* core/languages/da_DK.po
	* core/languages/de_DE.mo
	* core/languages/de_DE.po
	* core/languages/el.mo
	* core/languages/el.po
	* core/languages/en_US.mo
	* core/languages/en_US.po
	* core/languages/es_ES.mo
	* core/languages/es_ES.po
	* core/languages/fi.mo
	* core/languages/fi.po
	* core/languages/fr_FR.mo
	* core/languages/fr_FR.po
	* core/languages/he_IL.mo
	* core/languages/he_IL.po
	* core/languages/hu_HU.mo
	* core/languages/hu_HU.po
	* core/languages/id_ID.mo
	* core/languages/id_ID.po
	* core/languages/it_IT.mo
	* core/languages/it_IT.po
	* core/languages/ja.mo
	* core/languages/ja.po
	* core/languages/ko_KR.mo
	* core/languages/ko_KR.po
	* core/languages/ms_MY.mo
	* core/languages/ms_MY.po
	* core/languages/nb_NO.mo
	* core/languages/nb_NO.po
	* core/languages/nl_NL.mo
	* core/languages/nl_NL.po
	* core/languages/pl_PL.mo
	* core/languages/pl_PL.po
	* core/languages/pt_BR.mo
	* core/languages/pt_BR.po
	* core/languages/ro_RO.mo
	* core/languages/ro_RO.po
	* core/languages/ru_RU.mo
	* core/languages/ru_RU.po
	* core/languages/sk_SK.mo
	* core/languages/sk_SK.po
	* core/languages/sr_RS.mo
	* core/languages/sr_RS.po
	* core/languages/sv_SE.mo
	* core/languages/sv_SE.po
	* core/languages/th.mo
	* core/languages/th.po
	* core/languages/tl.mo
	* core/languages/tl.po
	* core/languages/tr_TR.mo
	* core/languages/tr_TR.po
	* core/languages/uk.mo
	* core/languages/uk.po
	* core/languages/vi.mo
	* core/languages/vi.po
	* core/languages/zh_CN.mo
	* core/languages/zh_CN.po
	* core/php_functions.php
	* core/ui/components/controls/dropdown/index.js
	* core/ui/components/hoc/drag-drop-context.js
	* core/ui/utils/frame-helpers.js
	* core/ui/utils/frames.js
	* core/ui/utils/property-resolver.js
	* core/ui/utils/utils.js
	* core/wp_functions.php
	* includes/monarch_options.php
	* js/admin.js
	* js/custom.js
	* js/monarch-post-meta.js
	* monarch.php

version 1.4.12 ( updated 03-11-2019 )
- Security Update: Fixed a vulnerability that could allow some cross-site request forgery checks within our core product framework to be bypassed. In all cases, these checks were also hardened by user permission checks, however, user permissions checks alone are not sufficient to protect against all CSRF vectors. View the full disclosure here: https://us7.campaign-archive.com/?u=9ae7aa91c578052b052b864d6&id=917542a075.
- Updated core to the latest version.
	* core/admin/css/core.css
	* core/admin/css/support-center.css
	* core/admin/js/support-center.js
	* core/components/Logger.php
	* core/components/PageResource.php
	* core/components/SupportCenter.php
	* core/components/SupportCenterMUAutoloader.php
	* core/components/Updates.php
	* core/components/init.php
	* core/components/mu-plugins/SupportCenterSafeModeDisablePlugins.php
	* core/functions.php
	* core/ui/utils/frames.js
