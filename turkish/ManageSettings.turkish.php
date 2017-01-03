<?php
// Version: 2.0; ManageSettings

$txt['settings_desc'] = 'This page allows you to change the settings of features and basic options in your forum. Click the help icons for more information about a setting.';

$txt['allow_guestAccess'] = 'Ziyaretçilerin forumda gezinebilmelerine izin ver';
$txt['userLanguage'] = 'Kullanıcıların kullandıkları dili seçebilmelerine izin ver';
$txt['time_offset'] = 'Saat farkı';
$txt['time_offset_subtext'] = '(üyeler için seçenek eklendi.)';
$txt['default_timezone'] = 'Sunucu zaman dilimi';
$txt['failed_login_threshold'] = 'Başarısız oturum eşiği';
$txt['enable_quick_login'] = 'Her sayfada hızlı girişi göster';
$txt['age_restrictions'] = 'Minimum Age Restrictions';
$txt['trackStats'] = 'Günlük istatistik tut';
$txt['hitStats'] = 'Günlük Sayfa gösterim istatistiği tut (istatistikler etkin olmalı)';
$txt['enableCompressedOutput'] = 'Sıkıştırılmış çıktıyı etkinleştir';
$txt['enableCompressedData'] = 'JS/CSS sıkıştırmayı etkinleştir';
$txt['obfuscate_filenames'] = 'Sıkıştırılan JS/CSS dosya isimlerini değiştir';
$txt['minify'] = 'Javascript dosyalarını küçült';
$txt['minify_none'] = 'Don\'t minify|Useful for debugging.';
$txt['minify_jsmin'] = 'JSMin|The safest choice.';
$txt['minify_packer'] = 'Packer|Best compromise. Still, please view&lt;br&gt;the help popup before choosing this.';
$txt['minify_closure'] = 'Google Closure|Please view the help popup&lt;br&gt;before choosing this!';
$txt['jquery_origin'] = 'jQuery lokasyonu';
$txt['jquery_local'] = 'Sunucuda (script.js ile birleştirilir)';
$txt['jquery_jquery'] = 'jQuery CDN';
$txt['jquery_google'] = 'Google CDN';
$txt['jquery_microsoft'] = 'Microsoft CDN';
$txt['disableTemplateEval'] = 'Templatelerin değerlendirilmesini kapat';
$txt['db_show_debug'] = 'Hata ayıklama bilgilerini göster';
$txt['db_show_debug_who'] = 'Hata ayıklama bilgilerini kullanıcılara göster:';
$txt['db_show_debug_who_log'] = 'Show debug query log to which users:';
$txt['db_show_debug_admin'] = 'Sadece Yöneticiler';
$txt['db_show_debug_admin_mod'] = 'Yöneticiler ve Moderatörler';
$txt['db_show_debug_regular'] = 'Giriş yapmış tüm üyeler';
$txt['db_show_debug_any'] = 'Tüm üyeler ve ziyaretciler';
$txt['db_show_debug_none'] = 'Hiç kimse';

$txt['databaseSession_enable'] = 'Oturumlar için veritabanını kullan';
$txt['databaseSession_loose'] = 'Tarayıcının geri tuşunu aktif kıl';
$txt['databaseSession_lifetime'] = 'Pasif oturumların zaman aşımı süresi';
$txt['enableErrorLogging'] = 'Hata günlüğüne izin ver';
$txt['enableErrorPasswordLogging'] = 'Üyelerin yanlış şifre giriş kayıtlarını tut';
$txt['enableError404Logging'] = '404 (bulunamadı) hata kayıtlarını tut';
$txt['enableErrorQueryLogging'] = 'Günlük kaydında veritabanı sorgusunuda bulundur';
$txt['logPruning'] = 'Kayıt Temizleme';
$txt['log_enabled_moderate'] = 'Moderasyon eylemlerini kayıt et';
$txt['log_enabled_moderate_subtext'] = 'Moderatörlerinizin uyguladığı işlemlerin kaydını tutar';
$txt['log_enabled_admin'] = 'Yönetici eylemlerini kayıt et';
$txt['log_enabled_admin_subtext'] = 'This includes things like creating new boards.';
$txt['log_enabled_profile'] = 'Üyelerin profil düzenlemelerini kayıt et';
$txt['log_enabled_profile_subtext'] = 'İsim ve diğer bölüm değişiklikleri';
$txt['pruningOptions'] = 'Kayıtlarının temizlenmesine izin ver';
$txt['pruneZeroDisable'] = '(0 kapatır)';
$txt['pruneErrorLog'] = 'Şu süreden eski hata kaydını temizle';
$txt['pruneModLog'] = 'Şu süreden eski moderasyon kaydını temizle';
$txt['pruneReportLog'] = 'Şu süreden eski moderatör rapor kayıtlarını temizle';
$txt['pruneScheduledTaskLog'] = 'Şu süreden eski zamanlanmış görevlere ait kayıtları temizle';
$txt['pruneSpiderHitLog'] = 'Şu süreden eski arama motoru kayıtlarını temizle';
$txt['cookieTime'] = 'Varsayılan oturum çerezi süresi (dakika)';
$txt['localCookies'] = 'Yerel çerezlerin depolanmasına izin ver';
$txt['localCookies_subtext'] = '(SSI çalışmayacaktır)';
$txt['globalCookies'] = 'Alt alan adından bağımsız çerez kullan';
$txt['globalCookies_subtext'] = '(Üstteki seçeneği devre dışı bırakınız!)';
$txt['secureCookies'] = 'Çerezlerin güvenliğini güçlendir';
$txt['secureCookies_subtext'] = '(HTTPS kullanılıyorsa uygulanabilir , aksi taktirde kullanmayınız!)';
$txt['send_validation_onChange'] = 'E-Posta değişikliğinde aktivasyonu zorunlu kıl';
$txt['approveAccountDeletion'] = 'Üyenin hesabını silebilmesi için yönetici onayı iste';
$txt['autoOptMaxOnline'] = 'Veritabanı iyileştirmesi için maks. çevrimiçi';
$txt['autoOptMaxOnline_subtext'] = '(0 - maks. yok)';
$txt['autoFixDatabase'] = 'Bozuk tabloları otomatik olarak düzelt';
$txt['allow_disableAnnounce'] = 'Üyelerin duyuruları devre dışı bırakmasına izin ver';
$txt['disallow_sendBody'] = 'Duyurularda ileti metni gösterilmesin';
$txt['max_pm_recipients'] = 'Kişisel iletide izin verilen en fazla alıcı sayısı';
$txt['max_pm_recipients_subtext'] = '(0 - limitsiz, adminler dahil değil)';
$txt['pm_posts_verification'] = 'Kişisel iletilerde, görsel doğrulama uygulanmaması için sahip olunması gereken en az ileti sayısı';
$txt['pm_posts_verification_subtext'] = '(0 - limitsiz, adminler dahil değil)';
$txt['pm_posts_per_hour'] = 'Bir saat içerisinde gönderilebilecek en fazla kişisel ileti sayısı';
$txt['pm_posts_per_hour_subtext'] = '(0 - limitsiz, moderatörler dahil değil)';
$txt['home_url'] = 'Site adresi';
$txt['home_url_subtext'] = 'If your forum is part of a larger site, put the address of that here, and the Home tab on the menu will point to it, as opposed to the forum front page.';
$txt['home_link'] = 'Link the title to the home page';
$txt['home_link_subtext'] = 'The forum title at the top of the page is also a link back to the forum front page. Ticking this box will make it link back to the overall site address you provided above.';
$txt['site_slogan'] = 'Site sloganı';
$txt['site_slogan_desc'] = 'Kendi forum sloganınızı ekleyin. Logonun yerine geçecek. CSS aracılığıyla özelleştirebilirsiniz. ';
$txt['header_logo_url'] = 'Logo resim adresi';
$txt['header_logo_url_desc'] = 'Boş bırakırsanız varsayılan logo veya forum ismi görüntülenecektir.';
$txt['todayMod'] = 'Bugün özelliğini etkinleştir';
$txt['today_disabled'] = 'Kapalı';
$txt['today_only'] = 'Sadece Bugün';
$txt['yesterday_today'] = 'Bugün &amp; Dün';
$txt['timeLoadPageEnable'] = 'Sayfaların oluşturulması için geçen süreyi göster';
$txt['disableHostnameLookup'] = 'Alanadı kontrollerini devre dışı bırak';
$txt['who_enabled'] = 'Kimler çevrimiçi listesini etkinleştir';
$txt['display_who_viewing'] = 'Bölüm indeksi ve konulara bakanları göster';
$txt['who_display_viewing_off'] = 'Gösterme';
$txt['who_display_viewing_numbers'] = 'Üye sayısını göster';
$txt['who_display_viewing_names'] = 'Üye isimlerini göster';
$txt['show_stats_index'] = 'Forum anasayfasında istatistikleri göster';
$txt['show_latest_member'] = 'Forum anasayfasında son üyeyi göster';
$txt['show_avatars'] = 'İletilerde kullanıcı avatarını göster';
$txt['show_signatures'] = 'İletilerde kullanıcı imzalarını göster';
$txt['show_blurb'] = 'Kişisel başlıklara izin ver';
$txt['show_gender'] = 'İletilerde cinsiyet göstergesi göster';
$txt['show_board_desc'] = 'Bölüm içinde açıklamasını göster';
$txt['show_children'] = 'Alt kategorileri bölüm içinde sadece ilk sayfada göster.';

$txt['pm_enabled'] = 'Üyeler arası kişisel ileti gönderimini etkinleştir';
$txt['pm_read'] = 'Groups allowed to read their messages';
$txt['pm_send'] = 'Groups allowed to send messages';
$txt['save_pm_draft'] = 'Groups allowed to save drafts';
$txt['auto_save_pm_draft'] = 'Groups whose drafts will automatically save';
$txt['pm_draft_other_settings'] = 'You can also set how often drafts are saved and whether old drafts are removed from the <a href="<URL>?action=admin;area=postsettings;sa=drafts">Draft Settings</a> page.';

$txt['likes_enabled'] = 'Beğeni Sistemi Aç';
$txt['likes_own_posts'] = 'Kullanıcılar kendi iletilerini beğenebilir';

$txt['boardurl'] = 'Forum Adresi';

$txt['caching_information'] = '<div class="center" style="font-weight: bold; text-decoration: underline">Önemli! Bu özellikleri kullanmadan önce mutlaka burayı okuyunuz.</div><br>
	Wedge hızlandırıcılar yolu ile önbelleklemeyi desteklemektedir. Kullanabileceğiniz hızlandırıcılar şunlardır:<br>
	<ul class="list">
		<li>APC</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Zend Optimizer Değil!)</li>
		<li>XCache</li>
	</ul>
	Önbellekleme sadece sisteminizde yukarıdaki PHP hızlandırıcılar yüklü ise çalışacaktır.<br />
	Wedge birçok önbellekleme aşaması desteklemektedir, aşama arttıkça, işlemcinize binen yükte aynı oranda artacaktır.
	Eğer sisteminizde önbellekleme kullanılabilir ise size şiddetle seviye 1 önbelleklemeyi kullanmanızı öneririz.
	<br><br>
	Unutmayın eğer memcahce kullanacaksanız sunucunuz ile ilgili detayları aşağıda belirtmeniz gerekecektir.
	Bu detaylar şu şekilde girilmelidir: &quot;server1,server2,server3:port,127.0.0.1&quot;<br><br>
	Eğer bir port belirtilmezse, SMF varsayılan olarak port 11211 i kullancaktır.
	<br /><br />
	%1$s';

$txt['detected_no_caching'] = '<strong class="alert">Wedge sunucunuzda her hangi bir hızlandırıcı tespit edemedi.</strong>';
$txt['detected_APC'] = '<strong style="color: green">Wedge sisteminizde APC\'nin yüklü olduğunu tespit etti.</strong>';
$txt['detected_Zend'] = '<strong style="color: green">Wedge sisteminizde Zend\'in yüklü olduğunu tespit etti.</strong>';
$txt['detected_Memcached'] = '<strong style="color: green">Wedge sisteminizde Memcached\'nin yüklü olduğunu tespit etti.</strong>';
$txt['detected_XCache'] = '<strong style="color: green">Wedge sunucunuzda XCache\'in yüklü olduğunu tespit etti.</strong>';

$txt['cache_enable'] = 'Önbellekleme Seviyesi';
$txt['cache_off'] = 'Kapalı';
$txt['cache_level1'] = 'Seviye 1';
$txt['cache_level2'] = 'Seviye 2 (Önerilmez)';
$txt['cache_level3'] = 'Seviye 3 (Önerilmez)';

$txt['cache_type'] = 'Caching Type';
$txt['cache_type_file'] = 'File-based caching';
$txt['cache_memcached'] = 'Memcached server details<dfn>Leave empty to disable Memcached</dfn>';

$txt['loadavg_warning'] = '<span class="error">Lütfen unutmayın: aşağıdaki ayarları düzenlerken dikkatli olun. Bazılarını çok düşük kullanmanız halinde forumunuz <strong>kullanılmaz</strong> hale gelebilir. Şu anki yükleme ortalaması <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Yoğunluğa göre yük dengeleme';
$txt['loadavg_auto_opt'] = 'Otomatik veritabanı optimizasyonunu kapatma eşiği';
$txt['loadavg_search'] = 'Aramayı kullanıma kapatma eşiği';
$txt['loadavg_allunread'] = 'Okunmamış konuları göster özelliğini kapatma eşiği';
$txt['loadavg_unreadreplies'] = 'İletilerime yazılan yeni yanıtlar özelliğini kapatma eşiği';
$txt['loadavg_show_posts'] = 'Üyelerin ileti sayılarını gösterime kapatma eşiği';
$txt['loadavg_forum'] = 'Tüm forumu <strong>tamamen</strong> kullanıma kapatma eşiği';
$txt['loadavg_disabled_conf'] = '<span class="error">Yükleme dengeleme desteği sunucunuzun ayarları tarafından iptal edilmiştir.</span>';

$txt['news_settings_submit'] = 'Kaydet';
$txt['xmlnews_enable'] = 'Atom beslemesini etkinleştir';
$txt['xmlnews_maxlen'] = 'Max. mesaj uzunluğu:';
$txt['xmlnews_maxlen_subtext'] = '(0 kapalı, kötü seçim olur.)';
$txt['xmlnews_sidebar'] = 'Show the "Latest Posts Feed" block in the sidebar';
$txt['enable_news'] = 'Show a random news line on all pages';
$txt['show_newsfader'] = 'Show news fader on board index';
$txt['newsfader_time'] = 'Fading delay between items for the news fader';

$txt['reverse_proxy'] = 'Enable reverse proxy support';
$txt['reverse_proxy_header'] = 'Proxy HTTP header with IP address';
$txt['reverse_proxy_ips'] = 'IP or CIDR block addresses of proxy servers';
$txt['reverse_proxy_one_per_line'] = 'Specify one address per line';

$txt['login_type'] = 'Oturum açmak için hangi yöntem kullanılsın?';
$txt['login_username_or_email'] = 'Kullanıcı adı veya eposta adresi';
$txt['login_username_only'] = 'Sadece kullanıcı adı';
$txt['login_email_only'] = 'Sadece eposta adresi';

$txt['setting_password_strength'] = 'Kullanıcı şifrelerinin güvenilirliği';
$txt['setting_password_strength_low'] = 'Düşük - en az 4 karakter';
$txt['setting_password_strength_medium'] = 'Orta - kullanıcı adını içeremez';
$txt['setting_password_strength_high'] = 'Yüksek - değişik karakterlerin karışımı olmalıdır';

$txt['antispam_Settings'] = 'Spam Koruması Doğrulaması';
$txt['antispam_Settings_desc'] = 'Bu bölümü kullanarak kullanıcının bir bot değil insan olduğunu doğrulamanıza olanak tanıyan doğrulama özelliği ile ilgili değişiklikler yapabilirsiniz.';
$txt['setting_reg_verification'] = 'Kayıt esnasında doğrulamayı zorunlu kıl';
$txt['posts_require_captcha'] = 'İleti gönderiminde doğrulamayı zorunlu kıl';
$txt['posts_require_captcha_desc'] = '(0 - limit yok, moderatörler hariç)';
$txt['search_enable_captcha'] = 'Ziyaretçiler tarafından yapılan aramalarda doğrulamayı zorunlu kıl';
$txt['setting_guests_require_captcha'] = 'Ziyaretçilerin ileti gönderiminde doğrulamayı zorunlu kıl';
$txt['setting_guests_require_captcha_desc'] = '(Aşağıda minimum bir ileti sayısı belirlediyseniz, otomatik devreye girer)';
$txt['guests_report_require_captcha'] = 'Ziyaretçiler bir ileti rapor ederken doğrulamayı geçmek zorundadır';

$txt['configure_captcha'] = 'Doğrulama CAPTCHA resimini Yapılandır';
$txt['configure_captcha_desc'] = '<span class="smalltext">A CAPTCHA is a form of anti-bot protection to help guard against automated robots posting nonsense on your forum.</span>';
$txt['use_captcha_images'] = 'Doğrulama için CAPTCHA resimini etkinleştir';
$txt['use_animated_captcha'] = 'Hareketli resimler kullan';
$txt['use_animated_captcha_desc'] = 'Hareketli görnütüleri botlar\'ın çözmesi çok zor ama normal kullanıcılar için de çözmek zor olabilir.';

$txt['setting_qa_verification_number'] = 'Kullanıcının yanıtlaması gerekli doğrulama soruları';
$txt['setting_qa_verification_number_desc'] = '(0 -  kapatır, sorular aşağıdadır)';
$txt['setup_verification_questions'] = 'Doğrulama Soruları';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Eğer kullanıcıların doğrulama amaçlı belli soruları yanıtlamalarını istiyorsanız, aşağıda bu soruları ve yanıtlarını yapılandırmanız gerekmektedir. Basit sorulara seçmeye dikkat edin. Sorularda BBC kullanabilir, soruları kaldırmak için içeriğini silip kaydete basabilirsiniz.</span>';
$txt['setup_verification_question'] = 'Soru';
$txt['setup_verification_answer'] = 'Yanıt';
$txt['setup_verification_add'] = 'Soru Ekle';
$txt['setup_verification_add_answer'] = 'Cevap Ekle';

$txt['modfilter_norules'] = 'There are no filter rules set up.';
$txt['modfilter_addrule'] = 'Add a filter rule';
$txt['modfilter_editrule'] = 'Edit filter rule';
$txt['modfilter_rule_posts'] = 'When saving any post:';
$txt['modfilter_rule_topics'] = 'When starting a new topic:';
$txt['modfilter_action_prevent'] = 'Prevent the post being saved';
$txt['modfilter_action_moderate'] = 'Moderator must approve post (before being public)';
$txt['modfilter_action_pin'] = 'Pin the current topic';
$txt['modfilter_action_unpin'] = 'Unpin the current topic';
$txt['modfilter_action_lock'] = 'Lock the topic';
$txt['modfilter_action_unlock'] = 'Unlock the topic';
$txt['modfilter_conditions'] = 'If these rules are met:';
$txt['modfilter_cond_boards_in'] = 'Posting in these boards:';
$txt['modfilter_cond_boards_ex'] = 'Posting anywhere except in:';
$txt['modfilter_cond_groups_in'] = 'Member of any of these groups:';
$txt['modfilter_cond_groups_ex'] = 'Not a member of any of these groups:';
$txt['modfilter_cond_permissions_in'] = 'Has any of these permissions:';
$txt['modfilter_cond_permissions_ex'] = 'Has none of these permissions:';
$txt['modfilter_cond_userid_in'] = 'User is one of the following:';
$txt['modfilter_cond_userid_ex'] = 'User is not one of the following:';
$txt['modfilter_cond_subject_begins'] = 'Post subject begins with:';
$txt['modfilter_cond_subject_ends'] = 'Post subject ends with:';
$txt['modfilter_cond_subject_contains'] = 'Post subject contains:';
$txt['modfilter_cond_subject_matches'] = 'Post subject matches:';
$txt['modfilter_cond_subject_regex'] = 'Post subject matches regular expression:';
$txt['modfilter_cond_body_begins'] = 'Post body begins with:';
$txt['modfilter_cond_body_ends'] = 'Post body ends with:';
$txt['modfilter_cond_body_contains'] = 'Post body contains:';
$txt['modfilter_cond_body_matches'] = 'Post body matches:';
$txt['modfilter_cond_body_regex'] = 'Post body matches regular expression:';
$txt['modfilter_case_sensitive'] = '(exact match)';
$txt['modfilter_case_insensitive'] = '(upper/lower case doesn\'t matter)';
$txt['modfilter_cond_postcount'] = 'Post count:';
$txt['modfilter_cond_warning'] = 'Infraction points:';
$txt['modfilter_cond_links'] = 'Number of links in post:';
$txt['modfilter_range_lt'] = 'less than';
$txt['modfilter_range_lte'] = 'less than or equal to';
$txt['modfilter_range_eq'] = 'equal to';
$txt['modfilter_range_gt'] = 'greater than';
$txt['modfilter_range_gte'] = 'greater than or equal to';
$txt['modfilter_cond_unknownrule'] = 'Unknown rule type:';
$txt['modfilter_approve_title'] = 'Approve Outstanding Items';
$txt['modfilter_approve_desc'] = 'If there are outstanding items to be approved, or you are thinking of disabling moderation filters, you may wish to make sure all pending items get approved so that items are not just simply lost. You may wish to review moderated items before using this option, however, to make sure that nothing gets approved that should not be.';
$txt['modfilter_all_approved'] = 'All outstanding moderation items have been approved.';
$txt['modfilter_applies_legend'] = 'When this rule should be applied';
$txt['modfilter_applies_desc'] = 'Sometimes a filter rule might need to be applied to all posts, sometimes just to new topics.';
$txt['modfilter_applies_rule'] = 'When should this particular rule be applied?';
$txt['modfilter_applies_posts'] = 'when any new post is made';
$txt['modfilter_applies_topics'] = 'when a new topic is started';
$txt['modfilter_action_legend'] = 'What the rule will do';
$txt['modfilter_action_desc'] = 'Each rule has a single action that it performs when all of its conditions are met, with "preventing the post" and "moderating the post" excluding all other possible actions.';
$txt['modfilter_action_selectone'] = '--- select one ---';
$txt['modfilter_action_rule'] = 'What should happen if the conditions are met?';
$txt['modfilter_actionlist_prevent'] = 'Prevent the post from being made';
$txt['modfilter_actionlist_moderate'] = 'Moderate the post';
$txt['modfilter_actionlist_pin'] = 'Pin the topic to the top of its board';
$txt['modfilter_actionlist_unpin'] = 'Unpin the topic from the top of its board';
$txt['modfilter_actionlist_lock'] = 'Lock the topic from further posts';
$txt['modfilter_actionlist_unlock'] = 'Unlock the topic to allow further posts';
$txt['modfilter_conds_legend'] = 'Conditions for this rule';
$txt['modfilter_conds_desc'] = 'Any filter rule requires conditions, to know whether the rule should be applied. Here you add the conditions for this rule - all conditions must be met in order for the rule to be activated.';
$txt['modfilter_conds_item'] = 'Item';
$txt['modfilter_conds_criteria'] = 'Criteria';
$txt['modfilter_conds_no_conditions'] = 'There are no conditions set. Add one!';
$txt['modfilter_conds_new'] = 'Type of condition:';
$txt['modfilter_conds_add'] = 'Add new condition';
$txt['modfilter_conds_select'] = '--- select a condition type ---';
$txt['modfilter_condtype_boards'] = 'Applies to one or more boards';
$txt['modfilter_condtype_groups'] = 'Applies to one or more membergroups';
$txt['modfilter_condtype_userid'] = 'Applies to one or more users';
$txt['modfilter_condtype_postcount'] = 'Applies based on user postcount';
$txt['modfilter_condtype_warning'] = 'Applies based on user infractions';
$txt['modfilter_condtype_permission'] = 'Applies based on user permissions';
$txt['modfilter_condtype_subject'] = 'Depends on the post subject';
$txt['modfilter_condtype_body'] = 'Depends on the post contents';
$txt['modfilter_condtype_links'] = 'Depends on how many links are in the post';
$txt['modfilter_applies_all'] = 'Applies to the selected items:';
$txt['modfilter_applies_allexcept'] = 'Applies to <strong>all except</strong> the selected items:';
$txt['modfilter_condition_done'] = 'Add this condition';
$txt['modfilter_postcount_is'] = 'The user\'s post-count is:';
$txt['modfilter_warning_is'] = 'The user has:';
$txt['modfilter_warning_is_post'] = 'infraction points';
$txt['modfilter_links_is'] = 'The number of links in the post is:';
$txt['modfilter_the_post_subject'] = 'The post\'s subject';
$txt['modfilter_the_post_body'] = 'The post\'s body';
$txt['modfilter_regex_begins'] = 'begins with';
$txt['modfilter_regex_contains'] = 'contains';
$txt['modfilter_regex_ends'] = 'ends with';
$txt['modfilter_regex_matches'] = 'matches';
$txt['modfilter_regex_regex'] = 'matches regular expression';
$txt['modfilter_be_case_sensitive'] = 'Be case sensitive (treat UPPER and lower case differently)';
$txt['modfilter_save_this_rule'] = 'Save this rule';
$txt['modfilter_remove_this_rule'] = 'Remove this rule';
$txt['modfilter_error_saving'] = 'This rule could not be saved, there was something wrong in sending the data. Please go back and try again.';
$txt['modfilter_rule_not_found'] = 'The rule you are trying to edit does not exist.';
$txt['modfilter_msg'] = 'and shows a custom message';
$txt['modfilter_msg_popup_title'] = 'Informing the user...';
$txt['modfilter_msg_no_lang'] = 'No custom messages were set up for this rule.';
$txt['modfilter_msg_popup'] = 'When this rule is activated, the user will be shown the following message. (Where possible, the forum will try to use the language selected by the user.)';
$txt['modfilter_lang_msg'] = 'While it will be clear to the user that their post has had work done to it, it will not always be clear why that is the case. Here you can add a message for your users to explain why action has been taken. You do not have to fill one in, or indeed fill in any specific language - it will just try to use the most appropriate for the user out of the ones you have provided. You can also use HTML, for example to link to a rules post that you have.';

$txt['allow_editDisplayName'] = 'Üyelerin görünen isimlerini değiştirmelerine izin ver';
$txt['allow_hideOnline'] = 'Yönetici olmayanların çevrimiçi durumlarını gizlemelerine izin ver';
$txt['titlesEnable'] = 'Kişisel başlıklara izin ver';
$txt['enable_buddylist'] = 'İletişim/Engelleme listelerine izin ver';

$txt['signature_settings'] = 'İmza Ayarları';
$txt['signature_settings_desc'] = 'Bu sayfayı, üyelerin imzalarının nasıl görüntüleneceğini değiştirmek için kullanabilirsiniz.';
$txt['signature_settings_warning'] = 'Bu seçenekler eski imzalara uygulanmazlar. Bu kuralları eski imzalara uygulamak için lütfen <a href="%1$s?action=admin;area=memberoptions;sa=sig;apply;%2$s">buraya</a> tıklayın.';
$txt['signature_enable'] = 'İmzalara izin ver';
$txt['signature_minposts'] = 'Minimum number of posts for signatures to be visible';
$txt['signature_zero_no_max'] = '(0 for no max.)';
$txt['signature_max_length'] = 'İzin verilen en fazla karakter';
$txt['signature_max_lines'] = 'İzin verilen en fazla satır';
$txt['signature_max_images'] = 'İzin verilen resim sayısı';
$txt['signature_max_images_subtext'] = '(0 for no max - excludes smileys)';
$txt['signature_allow_smileys'] = 'İmzalarda gülücüklere izin ver';
$txt['signature_max_smileys'] = 'İzin verilen gülümseme sayısı';
$txt['signature_max_image_width'] = 'Mİmzalardaki resimlerin maks. genişliği (pixel)';
$txt['signature_max_image_height'] = 'Maximum height of signature images (pixels)';
$txt['signature_max_font_size'] = 'İmzalardaki metinlerin maks. font büyüklüğü';
$txt['signature_max_font_size_subtext'] = '(0 for no max, in pixels)';
$txt['signature_bbc'] = 'İzin Verilen BBC Etkiketleri';

$txt['custom_profile_title'] = 'Özel Profil Alanları';
$txt['custom_profile_desc'] = 'Bu sayfadan forumunuzun gereksinimlerine göre özel profil alanları belirleyebilirsiniz.';
$txt['custom_profile_active'] = 'Aktif';
$txt['custom_profile_inactive'] = 'Inactive';
$txt['custom_profile_make_new'] = 'Yeni Alan';
$txt['custom_profile_none'] = 'Henüz herhangi bir profil alanı oluşturmadınız!';
$txt['custom_profile_icon'] = 'İkon';

$txt['custom_profile_type_text'] = 'Metin';
$txt['custom_profile_type_textarea'] = 'Uzun Metin';
$txt['custom_profile_type_select'] = 'Seçenek Kutusu';
$txt['custom_profile_type_radio'] = 'Radio';
$txt['custom_profile_type_check'] = 'İşaret Kutusu';

$txt['custom_add_title'] = 'Profil Alanını Ekle';
$txt['custom_edit_title'] = 'Profil Alanını Düzenle';
$txt['custom_edit_general'] = 'Görünüm Ayarları';
$txt['custom_edit_input'] = 'Giriş Ayarları';
$txt['custom_edit_advanced'] = 'Gelişmiş Ayarlar';
$txt['custom_edit_name'] = 'İsim';
$txt['custom_edit_desc'] = 'Tanım';
$txt['custom_edit_profile'] = 'Profil Bölümü';
$txt['custom_edit_profile_desc'] = 'Düzenlemesinin yapılacağı Profil bölümü.';
$txt['custom_edit_profile_none'] = 'Hiçbiri';
$txt['custom_edit_registration'] = 'Kayıt Esnasında Göster';
$txt['custom_edit_registration_disable'] = 'Hayır';
$txt['custom_edit_registration_allow'] = 'Evet';
$txt['custom_edit_registration_require'] = 'Evet, ve girdi gerektir';
$txt['custom_edit_mlist'] = 'Show on Memberlist';
$txt['custom_edit_display'] = 'Konu Görünümünde Göster';
$txt['custom_edit_picktype'] = 'Alan Türü';

$txt['whos_online_desc'] = 'From this page, you can manage how users can see who is online and who is not.';
$txt['lastActive'] = 'User online time threshold';
$txt['who_view'] = 'Membergroups who can see "Who\'s Online"';
$txt['member_options_desc'] = 'From this page, you can set certain options that are also configurable by your users; you can set what the normal option is and reset everyone\'s options if needed.';
$txt['member_options_default'] = 'Default value:';
$txt['member_options_change'] = 'Change';
$txt['no_change'] = '%s (current)';
$txt['leave_alone'] = 'Keep members\' own choices';
$txt['member_options_guest'] = 'For guests/new members:';
$txt['member_options_members'] = 'For existing members:';
$txt['member_options_override'] = 'Set to "%s" for everyone';

// Strings for the templates
$txt['your_icq'] = 'This is your ICQ number.';
$txt['your_aim'] = 'This is your AOL Instant Messenger nickname.';
$txt['your_yim'] = 'This is your Yahoo! Instant Messenger nickname.';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hello!+Are+you+there?';
$txt['your_twitter'] = 'This is your Twitter username, without the @ at the front';
$txt['your_facebook'] = 'This is your Facebook account number, or vanity name (e.g. "wedgebook" in "facebook.com/wedgebook")';
$txt['your_skype'] = 'This is your Skype username';
$txt['your_steam'] = 'This is your id from the Steam Community';
$txt['custom_edit_tplgrp_social'] = 'Social Networking';
$txt['custom_edit_tplgrp_im'] = 'Instant Messaging';
$txt['custom_edit_tplgrp_gaming'] = 'Gaming';
$txt['custom_edit_templates'] = 'Template Fields';
$txt['custom_edit_templates_desc'] = 'You may also use as templates the following information fields for some common social networking services.';
$txt['custom_edit_a_template'] = 'Template to use';
$txt['custom_edit_templates_select'] = '-- Select a template --';

$txt['custom_edit_max_length'] = 'Maksimum Genişlik';
$txt['custom_edit_max_length_desc'] = '(0 - sınırsız)';
$txt['custom_edit_dimension'] = 'Boyut';
$txt['custom_edit_dimension_row'] = 'Satır';
$txt['custom_edit_dimension_col'] = 'Kolon';
$txt['custom_edit_bbc'] = 'BBC\'ye izin ver';
$txt['custom_edit_options'] = 'Seçenekler';
$txt['custom_edit_options_desc'] = 'Kaldırmak için seçenek kutusunu boş bırakın. Radio tuşu varsayılan seçeneği kendi seçer.';
$txt['custom_edit_options_more'] = 'Daha Fazla';
$txt['custom_edit_default'] = 'Varsayılan Durum';
$txt['custom_edit_active'] = 'Aktif';
$txt['custom_edit_active_desc'] = 'Eğer seçili değilse bu alan kimseye gösterilmeyecek.';
$txt['custom_edit_privacy'] = 'Gizlilik';
$txt['custom_edit_privacy_desc'] = 'Bu alanı düzenleyebilecek ve görebilecek kişiler.';
$txt['custom_edit_see_owner'] = 'The owner (subject to the following groups)';
$txt['custom_edit_can_search'] = 'Searchable';
$txt['custom_edit_can_search_desc'] = 'Can this field be searched from the members list.';
$txt['custom_edit_mask'] = 'Değer Kontrolü';
$txt['custom_edit_mask_desc'] = 'Girilecek değeri doğrulamak için kullanılır.';
$txt['custom_edit_mask_email'] = 'Geçerli E-Posta';
$txt['custom_edit_mask_number'] = 'Rakamsal';
$txt['custom_edit_mask_nohtml'] = 'HTML Yok';
$txt['custom_edit_mask_regex'] = 'Regex (Advanced)';
$txt['custom_edit_enclose'] = 'Show Enclosed Within Text (Optional)';
$txt['custom_edit_enclose_desc'] = 'We <strong>strongly</strong> recommend to use an input mask to validate the input supplied by the user.';
$txt['custom_edit_can_see'] = 'Can see';
$txt['custom_edit_can_edit'] = 'Can edit';

$txt['custom_edit_placement'] = 'Yer seçin';
$txt['custom_edit_placement_standard'] = 'Standart (başlık ile)';
$txt['custom_edit_placement_withicons'] = 'Simgeler ile Birlikte';
$txt['custom_edit_placement_abovesignature'] = 'İmzanın Üzerinde';
$txt['custom_profile_placement'] = 'Yer: %1$s';

$txt['custom_edit_delete_sure'] = 'Bu alanı kaldırmak istediğinize emin misiniz - kullanıcıların sahip olduğu tüm veri kaybolacaktır!';

$txt['standard_profile_title'] = 'Varsayılan Profil Alanları';
$txt['standard_profile_field'] = 'Alan';

$txt['languages_area_edit_desc'] = 'This area allows you to browse and edit the language data used by Wedge. It is not designed for translations, and if you wish to translate Wedge into a new language, please contact the Wedge Team instead.';
$txt['languages_lang_name'] = 'Language Name (click to edit the language)';
$txt['languages_locale'] = 'Locale';
$txt['languages_available'] = 'Available';
$txt['languages_default'] = 'Default';
$txt['languages_users'] = 'Users';
$txt['edit_languages'] = 'Edit Languages';
$txt['edit_languages_specific'] = 'Edit Languages - %1$s';
$txt['language_edit_master_value'] = '<em>Master value:</em> %1$s';
$txt['language_edit_master_value_array'] = '<em>Master values:</em>';
$txt['language_edit_current_value'] = '<em>Current value:</em> %1$s';
$txt['language_edit_current_value_array'] = '<em>Current values:</em>';
$txt['language_edit_new_value'] = '<em>New value:</em>';
$txt['language_edit_new_value_array'] = '<em>New values:</em>';
$txt['language_edit_add_entry'] = 'Add an entry';
$txt['language_delete_value'] = 'Delete this item';
$txt['language_revert_value'] = 'Reset to master value';
$txt['language_clear_cache'] = 'Empty Language Cache';
$txt['language_clear_cache_desc'] = 'The data used to make language items appear in the forum are managed between special files and the database, so that you can modify them without having to modify files. Generally you should use the language editor facilities from the administration area to change language items, but sometimes you may need to force the system to rebuild its cache. This allows you to do so.';
$txt['language_clear_cache_btn'] = 'Clear the cache';
$txt['language_cache_cleared'] = 'The language cache has been cleared.';
$txt['language_no_entries'] = 'This particular language file has no entries, it is likely a placeholder and you really want the <a href="%1$s">parent language file</a>.';
$txt['language_search_results'] = 'Search Results - %1$s';
$txt['language_no_result_results'] = 'Unfortunately, no results were found.';
$txt['language_search_default'] = 'Matches within the standard files';
$txt['language_search_plugins'] = 'Matches within plugins';

$txt['language_edit_main'] = 'Main Files';
$txt['language_edit_admin'] = 'Admin Panel';
$txt['language_edit_default'] = 'Varsayılan dil dosyaları';
$txt['language_edit_other'] = 'Diğer dil dosyaları';
$txt['language_edit_search'] = 'Search Language Files';
$txt['language_edit_search_plugins'] = 'Include plugins?';
$txt['language_edit_search_keys'] = 'Search keys';
$txt['language_edit_search_values'] = 'Search values';
$txt['language_edit_search_both'] = 'Search both';
$txt['language_edit_no_plugins'] = 'Eklentiler';
$txt['language_edit_no_plugins_desc'] = 'There are no editable language files for any plugins.';
$txt['language_edit_plugins_title'] = 'Plugin: %1$s';
$txt['language_edit_elsewhere'] = 'Configured elsewhere';
$txt['language_edit_email_templates'] = 'Eposta Şablonları';
$txt['language_edit_reg_agreement'] = 'Kayıt Sözleşmesi';

$txt['edit_language_entries'] = 'Edit Language Entries';
$txt['languages_dictionary'] = 'Dictionary';
$txt['languages_orientation'] = 'Orientation';
$txt['languages_orients_ltr'] = 'Left-to-Right';
$txt['languages_orients_rtl'] = 'Right-to-Left';

$txt['lang_file_desc_index'] = 'Main language file, all generic strings';
$txt['lang_file_desc_Modlog'] = 'Moderation log entries';

// Homepage
$txt['homepage_desc'] = 'This page allows you to determine what to show your users when they visit your forum\'s root.';

$txt['homepage_type'] = 'What should the home page show?';
$txt['homepage_boardlist'] = 'Board list';
$txt['homepage_board'] = 'Specific board';
$txt['homepage_action'] = 'Specific action';
$txt['homepage_custom'] = 'Custom contents';
$txt['homepage_blurb_title'] = 'Blurb title (%s)';
$txt['homepage_blurb'] = 'Blurb text (%s)';
// !! Don't translate the bits between <strong> tags!
$txt['homepage_message'] = 'Choose "Board list" to show the full list of available boards; "Specific board" to direct users to a specific board in the list (make sure to
	choose which board, of course!); "Specific action" to direct them to a custom page on your forum (for instance, create files /app/Mine.php and /html/Mine.template.php,
	then enter "Mine" in the specific action box); and finally, "Custom contents" will allow you to show multiple elements at the same time. Enter one element per line
	(they\'ll be shown in order of appearance), from the following list:<br>

		<br><strong>blurb</strong>: a custom text; an introduction, maybe.
		<br><strong>topics</strong>: a list of the latest updated topics. Add \':x\' to start with x topics instead of 5, e.g. \'topics:10\'.
		<br><strong>thoughts</strong>: a list of the latest thoughts. Add \':x\' to show x thoughts instead of 10, e.g. \'thoughts:5\'.
		<br><strong>boards</strong>: the full list of boards.
		<br><strong>info</strong>: the information center (statistics). Desktop browsers show it in the sidebar.
	';
