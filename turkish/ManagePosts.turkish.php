<?php
// Version: 2.0; ManagePosts

// Post Settings
$txt['removeNestedQuotes'] = 'Alıntı yaparken içiçe olan alıntıları kaldır';
$txt['enableEmbeddedFlash'] = 'İletilerin içinde Flash\'e izin ver';
$txt['enableEmbeddedFlash_warning'] = 'Güvenlik riski oluşturabilir!';
$txt['additional_options_collapsable'] = 'Açılır kapanır ek yazı seçeneklerini etkinleştir';

$txt['max_messageLength'] = 'İletilerde izin verilen en fazla karakter';
$txt['max_messageLength_zero'] = '0 sınırsız';
$txt['topicSummaryPosts'] = 'Konu özetinde gösterilecek en fazla ileti';

$txt['max_image_width'] = 'Gönderilen resimlerin maks. genişliği (0 = sınırsız)';
$txt['max_image_height'] = 'Gönderilen resimlerin maks. yüksekliği (0 = sınırsız)';

$txt['spamWaitTime'] = 'Aynı IP adresinden gönderilecek iki ileti arasındaki zaman limiti';
$txt['edit_wait_time'] = 'Düzenleme yapılabilmesi için beklenecek süre';
$txt['edit_disable_time'] = 'İleti gönderildikten sonra düzenleme yapılabilecek maksimum süre';
$txt['edit_disable_time_zero'] = '0 kapalı';
$txt['allow_non_mod_edit'] = 'Allow non-moderators to edit moderator edits?';

// Topic Settings
$txt['enableParticipation'] = 'Katılım ikonlarına izin ver';

$txt['correctExclamations'] = 'Correct too many exclamations in the subject';
$txt['correctShouting'] = 'Maximum % of capital letters in the subject';

$txt['oldTopicDays'] = 'Bir konuya yanıt verilebilecek maksimum süre';
$txt['oldTopicDays_zero'] = '0 devredışı';
$txt['defaultMaxTopics'] = 'Bir sayfada gösterilecek en fazla konu';
$txt['defaultMaxMessages'] = 'Bir konuda gösterilecek en fazla ileti';

$txt['enableAllMessages'] = 'Gösterilecek en çok yanıt sayısı';
$txt['enableAllMessages_zero'] = '0 yaparsanız "Tümü" gözükmeyecektir';
$txt['disableCustomPerPage'] = 'Sayfa başına özel konu/ileti seçeneğini devre dışı bırak';
$txt['enablePreviousNext'] = 'Önceki/Sonraki konu bağlantıları aktif';

$txt['ignoreMoveVsNew'] = 'When moving topics, allow moving to any board by default';

// Bulletin Board Code
$txt['enableBBC'] = 'BBC kullanılmasına izin ver';
$txt['enablePostHTML'] = 'İletilerde <em>basit</em> HTML kodlarına izin ver';
$txt['autoLinkUrls'] = 'URL\'leri bağlantılara çevir';

$txt['disabledBBC'] = 'Devre Dışı BBC Etiketleri';
$txt['bbcTagsToUse'] = 'İzin Verilen BBC Etiketleri';
$txt['bbcTagsToUse_select'] = 'Kullanılmasına izin verilecek etiketleri seç';
$txt['bbcTagsToUse_select_all'] = 'Tüm etiketleri seç';

// Post Editor
$txt['disable_wysiwyg'] = 'WYSIWYG editörü devre dışı bırak';
$txt['editorSizes'] = 'Font sizes to list in the editor';
$txt['editorSizes_subtext'] = 'One per line';
$txt['editorFonts'] = 'Fonts to list in the editor';
$txt['editorFonts_subtext'] = 'While you can list any font here, and it will be shown in the main editor in the "Font Face" dropdown, it will only work if the font is installed on your users\' computers.';

// Censored Words
$txt['admin_censored_where'] = 'Sansürlenecek kelimeyi sol kutuya, yerine kullanılacak olanı ise sağ kutuya yazınız.';
$txt['censor_whole_words'] = 'Sadece tüm kelimeleri kontrol et';
$txt['censor_case'] = 'Büyük/küçük harf farkını yoksay';
$txt['allow_no_censored'] = 'Kullanıcıların kelime sansürünü kaldırmalarına izin ver';

$txt['censor_test'] = 'Sansürlenen Kelimeleri Deneyin';
$txt['censor_test_save'] = 'Dene';

// Draft Settings
$txt['masterSavePostDrafts'] = 'İletileri taslak olarak kaydetmeyi etkinleştir';
$txt['draftsave_subnote'] = 'Note that the user must still have permission in the Permissions area.';
$txt['masterAutoSavePostDrafts'] = 'İletileri otomatik taslak olarak kaydetmeyi etkinleştir';
$txt['draftautosave_subnote'] = 'This does not override the above option, merely extending it. Also, user must have permission.';
$txt['masterAutoSaveDraftsDelay'] = 'How often should posts be autosaved?';
$txt['pruneSaveDrafts'] = 'Prune drafts after how many days?';

// Merging
$txt['merge_post_header'] = 'Ard arda gönderilen iletileri birleştir';
$txt['merge_post_auto'] = 'Çift mesajları otomatik birleştir';
$txt['merge_post_auto_time'] = 'Delay after which posts are no longer merged automatically.';
$txt['merge_post_auto_time_subtext'] = '(Saniye içinde; her zaman birleştirmek için 0 olarak ayarlayın)';

$txt['merge_post_admin_double_post'] = 'Yöneticiler tarafından gönderilen çift mesajları birleştirme';

$txt['merge_post_no_time'] = 'Don\'t show the older post\'s date before the separator';
$txt['merge_post_no_sep'] = 'Show neither the separator, nor the older post\'s date.';
$txt['merge_post_separator'] = 'Separator between merged posts (enable the setting above.)';
$txt['merge_post_separator_subtext'] = 'You may use BBCode. You can get the older post\'s date by using the <strong>$date</strong> variable in the text field.<br>Default is [size=1]$date[/size][hr][br]';
$txt['merge_post_custom_separator'] = 'Use a custom separator between merged posts.';
$txt['merge_post_custom_separator_subtext'] = 'The settings above will be disabled.';

$txt['merge_post_ignore_length'] = 'Birleştirmede yazı boyutu sınırını yoksay';
