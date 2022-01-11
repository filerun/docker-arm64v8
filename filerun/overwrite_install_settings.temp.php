<?php
$overwriteDefaultSettings = [
	'thumbnails_vips' => '1',
	'thumbnails_vips_path' => 'vipsthumbnail',

	'thumbnails_imagemagick' => '1',
	'thumbnails_imagemagick_path' => 'magick',

	'thumbnails_ffmpeg' => '1',
	'thumbnails_ffmpeg_path' => 'ffmpeg',

	'thumbnails_pngquant_path' => 'pngquant',

	'download_accelerator' => 'xsendfile',

	'ui_logo_url' => '?page=logo&version=2021.12.07'
];
$queries[] = "UPDATE `df_users_permissions` SET `homefolder` = '/user-files' WHERE uid='1'";
