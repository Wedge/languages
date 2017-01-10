<?php
// Version: 2.0; Index

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//		http://www.php.net/function.pspell-new
//		http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!! Please read this!
$txt['lang_name'] = 'Türkçe (TR)';
$txt['lang_locale'] = 'tr_TR';
$txt['lang_paypal'] = 'TR';
$txt['lang_dictionary'] = 'tr';
$txt['lang_spelling'] = 'turkish';

// Character set and right to left?
$txt['lang_rtl'] = false;

// Number formats?
$txt['number_format'] = '1,234.00';
$txt['time_format'] = '%d %B %Y, %H:%M:%S';
$txt['time_format_this_year'] = '%B %@, %I:%M %p';

// Some languages need punctuation before a colon.
$txt[':'] = ':';

// %@ is a special format that adds a suffix to a day (1-31), e.g. 1st, 2nd...
// If your language doesn't have any prefixes/suffixes it could use, just set it to $txt['day_suffix'] = '%s';
$txt['day_suffix'] = array(
	'n' => '%sth',
	1 => '1st',
	2 => '2nd',
	3 => '3rd',
	21 => '21st',
	22 => '22nd',
	23 => '23rd',
	31 => '31st',
);

$txt['just_now'] = 'az önce';
$txt['seconds_ago'] = '{time} saniye önce';
$txt['minutes_ago'] = '{time} dakika önce';
$txt['hours_ago'] = '{time} saat önce';
$txt['days_ago'] = '{time} gün önce';
$txt['months_ago'] = '{time} ay önce';
$txt['years_ago'] = '{time} yıl önce';

$txt['page_indicator'] = ' - sayfa %s'; // can be turned into an array as needed (1 => '', 'n' => ...)

$txt['days'] = array('Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi');
$txt['days_short'] = array('Paz', 'Pzt', 'Sal', 'Çar', 'Per', 'Cum', 'Cmt');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık');
$txt['months_short'] = array(1 => 'Oca', 'Şub', 'Mar', 'Nis', 'May', 'Haz', 'Tem', 'Ağu', 'Eyl', 'Ekm', 'Ksm', 'Ara');

$txt['admin'] = 'Yönetim';
$txt['moderate'] = 'Moderasyon';

$txt['save'] = 'Kaydet';
$txt['modify'] = 'Değiştir';

$txt['members'] = 'Üye';
$txt['board_name'] = 'Forum Adı';

$txt['member_postcount'] = 'İleti';
$txt['no_subject'] = '(Konu Yok)';
$txt['view_profile'] = 'Profili Görüntüle';
$txt['guest_title'] = 'Ziyaretçi';
$txt['author'] = 'Gönderen';
$txt['on_date'] = ' %1$s';
$txt['remove'] = 'Sil';
$txt['start_new_topic'] = 'Yeni Konu Başlat';

$txt['login'] = 'Giriş Yap';
// Use numeric entities in the below string.
$txt['username'] = 'Kullanıcı Adı';
$txt['password'] = 'Şifre';
$txt['username_or_email'] = 'Kullanıcı Adı veya E-posta';

$txt['board_moderator'] = 'Bölüm Moderatörü';
$txt['remove_topic'] = 'Konuyu Kaldır';
$txt['modify_msg'] = 'İletiyi düzenle';
$txt['name'] = 'Kullanıcı Adı';
$txt['email'] = 'E-Posta';
$txt['subject'] = 'Konu';
$txt['message'] = 'İleti';
$txt['quick_modify'] = 'Satır İçi Değişiklik Yap';

$txt['posts'] = 'İletiler';
$txt['topics'] = 'Konular';
$txt['redirects'] = 'Yönlendirmeler';
$txt['replies'] = 'Yanıtlar';
$txt['views'] = 'Görüntüleme';

$txt['num_posts'] = array(0 => 'İleti yok', 1 => '1 ileti', 'n' => '%s ileti');
$txt['num_topics'] = array(0 => 'Konu yok', 1 => '1 konu', 'n' => '%s konu');
$txt['num_redirects'] = array(0 => 'Yönlendirme yok', 1 => '1 yönlendirme', 'n' => '%s yönlendirme');
$txt['num_replies'] = array(0 => 'Yanıt yok', 1 => '1 yanıt', 'n' => '%s yanıt');
$txt['num_views'] = array(0 => 'Görüntüleme yok', 1 => '1 görüntüleme', 'n' => '%s görüntüleme');

// Likes. What you've done implied past tense, while when you haven't liked it thus far, implies a present tense for everyone else.
$txt['you_like_this'] = array(
	0 => 'You like this.',
	1 => 'Siz ve diğer 1 kişi bunu beğendi',
	'n' => 'Siz ve diğer %1$s kişi bunu beğendi.',
);
$txt['like_this'] = array(
	1 => '1 kişi bunu beğendi.',
	'n' => '%1$s kişi bunu beğendi.',
);
$txt['like'] = 'Beğen';
$txt['unlike'] = 'Unlike';

$txt['nobody_likes_this'] = 'Beğeni yok.';
$txt['likes_header'] = array(1 => '1 kişi beğendi', 'n' => '%s kişi beğendi');

$txt['choose_pass'] = 'Şifrenizi seçin';
$txt['verify_pass'] = 'Şifrenizi doğrulayın';
$txt['position'] = 'Konum';

$txt['total'] = 'Toplam';
$txt['posts_made'] = 'İleti';
$txt['website'] = 'Website';
$txt['register'] = 'Kayıt Ol';
$txt['warning_status'] = 'Uyarı Durumu';
$txt['user_warn_warned'] = 'Kullanıcı uyarıldı';
$txt['user_warn_moderate'] = 'Üyenin iletileri onaydan geçmektedir';
$txt['user_warn_mute'] = 'Üye ileti gönderememektedir';
$txt['user_warn_soft_ban'] = 'User is soft-banned';
$txt['user_warn_hard_ban'] = 'User is hard-banned';
$txt['warn_warned'] = 'Uyarıldı';
$txt['warn_moderate'] = 'Moderasyonda';
$txt['warn_mute'] = 'Susturulmuş';
$txt['warn_soft_ban'] = '(Soft) Banned';
$txt['warn_hard_ban'] = '(Hard) Banned';

// User menu strings
$txt['usermenu_profile'] = 'Profil';
$txt['usermenu_profile_desc'] = 'Kullanıcı profilini görüntüle';
$txt['usermenu_website'] = 'Web';
$txt['usermenu_website_desc'] = 'Üyenin Web sitesine git';
$txt['usermenu_sendpm'] = 'Mesaj';
$txt['usermenu_sendpm_desc'] = 'Kişisel İleti Gönder';
$txt['usermenu_showposts'] = 'İletileri göster';
$txt['usermenu_showposts_desc'] = 'View user\'s latest contributions';
$txt['usermenu_addbuddy'] = '+ Kişilerime ekle';
$txt['usermenu_addbuddy_desc'] = 'Kişilerime ekle';
$txt['usermenu_removebuddy'] = '- Kişilerimden çıkart';
$txt['usermenu_removebuddy_desc'] = 'Üyeyi kişilerimden sil';
$txt['usermenu_ignore'] = 'Engelle';
$txt['usermenu_ignore_desc'] = 'Bu üyeyi engelle';
$txt['usermenu_unignore'] = 'Engelle';
$txt['usermenu_unignore_desc'] = 'Bu üyeyi engelle';
$txt['usermenu_seeip'] = '<span style="color: #aaa">IP: %2%</span>';
$txt['usermenu_seeip_desc'] = 'Gönderim yaptığı IP adresi';
$txt['usermenu_trackip'] = '<span style="color: #aaa">IP: %2%</span>';
$txt['usermenu_trackip_desc'] = 'IP adresini izle';

// Action menu strings (per post)
$txt['acme_like'] = 'Beğen';
$txt['acme_like_desc'] = 'Bu iletiyi beğen';
$txt['acme_unlike'] = 'Unlike';
$txt['acme_unlike_desc'] = 'Unlike this post';
$txt['acme_quote'] = 'Alıntı';
$txt['acme_quote_desc'] = 'Reply to this post';
$txt['acme_modify'] = 'Düzenle';
$txt['acme_modify_desc'] = 'Edit this post';
$txt['acme_report'] = 'Rapor et';
$txt['acme_report_desc'] = 'Bu iletiyi moderatöre rapor et';
$txt['acme_restore'] = 'Restore';
$txt['acme_restore_desc'] = 'Restore this post\'s visibility';
$txt['acme_merge'] = 'Birleştir';
$txt['acme_merge_desc'] = 'Merge this post with the previous one';
$txt['acme_split'] = 'Böl';
$txt['acme_split_desc'] = 'Split this topic into a new one';
$txt['acme_remove'] = 'Sil';
$txt['acme_remove_desc'] = 'Delete this post definitively';
$txt['acme_approve'] = 'Onayla';
$txt['acme_approve_desc'] = 'Allow this post to be viewed by others';
$txt['acme_warn'] = 'Uyar';
$txt['acme_warn_desc'] = 'Bu ileti hakkında uyarı gönder';

$txt['actions_button'] = 'Eylemler&hellip;';
$txt['more_actions'] = 'Diğer&hellip;';

$txt['board_index'] = 'Bölümler';
$txt['message_index'] = 'Message Index';
$txt['news'] = 'Haberler';
$txt['home'] = 'Ana Sayfa';
$txt['community'] = 'Topluluk';

$txt['lock_unlock'] = 'Kilitle/Kilidi aç';
$txt['post'] = 'Gönder';
$txt['error_occurred'] = 'Bir Hata Meydana Geldi!';
$txt['logout'] = 'Çıkış';
$txt['started_by'] = 'Başlatan:';
$txt['last_post_author_link_time'] = '<strong>Son İleti:</strong> Gönderen: {author}  {link} {time}';
$txt['last_post_time_link'] = '{time} - {link}';
$txt['last_post_time_author'] = '{time} gönderen {author}';
$txt['board_off_limits'] = 'This board is off-limits to you.';

$txt['last_post'] = 'Son İleti';
// Use numeric entities in the below string.
$txt['topic'] = 'Konu';
$txt['help'] = 'Yardım';
$txt['notify'] = 'Haberdar et';
$txt['unnotify'] = 'Haberdar etme';
$txt['notify_request'] = 'Bu konuya gelen cevapların e-posta ile bildirilmesini istiyor musunuz?';

$txt['move_topic'] = 'Konuyu Taşı';
$txt['move_to'] = 'Şuraya taşı';
$txt['pages'] = 'Sayfa';
$txt['users_active'] = 'Son %1$d dakika içinde aktif olanlar:';
$txt['personal_messages'] = 'Kişisel İletiler';

$txt['quote_from'] = 'Alıntı yapılan:';
$txt['quote'] = 'Alıntı';
$txt['quote_noun'] = 'Alıntı';
$txt['reply'] = 'Yanıtla';
$txt['reply_number'] = 'Yanıt #<strong>%1$d</strong>';

$txt['approve'] = 'Onayla';
$txt['approve_all'] = 'hepsini onayla';
$txt['awaiting_approval'] = 'Onay Bekliyor';
$txt['post_awaiting_approval'] = 'Not: Bu ileti bir moderatörden onay beklemektedir.';
$txt['there_are_unapproved_topics'] = 'Bu bölüme ait onaylanmamış %1$s konu ve %2$s ileti bulunmaktadır. Tümünü görüntülemek için <a href="%3$s">buraya</a> tıklayınız.';

$txt['msg_alert_none'] = 'Mesaj yok...';
// SSI - The {new} construct is used to add the (x new) area in a language-dependent manner, using unread_pms, as below.
$txt['you_have_msg'] = array(
	0 => 'hiç mesajınız yok',
	1 => '<a href="<URL>?action=pm">1</a> mesaj {new}',
	'n' => '<a href="<URL>?action=pm">%s</a> mesaj {new}',
);
$txt['unread_pms'] = array(0 => '(none new)', 1 => '(1 new)', 'n' => '(%s new)');

$txt['remove_message'] = 'Bu iletiyi sil';
$txt['remove_message_confirm'] = 'Eminmisiniz?';

$txt['online_users'] = 'Çevrimiçi Üyeler';
$txt['personal_message'] = 'Kişisel İleti';
$txt['jump_to'] = 'Hızlı Erişim';
$txt['are_sure_remove_topic'] = 'Bu konuyu silmek istediğinden emin misin?';

$txt['go'] = 'Git';
$txt['ok'] = 'Evet';
$txt['yes'] = 'Evet';
$txt['no'] = 'Hayır';

$txt['search'] = 'Ara';
$txt['all_pages'] = 'Hepsi';

$txt['back'] = 'Geri';
$txt['topic_started'] = 'Konuyu başlatan';
$txt['title'] = 'Başlık';
$txt['post_by'] = 'Gönderen';
$txt['welcome_member'] = 'Please welcome %1$s, our newest member.';
$txt['notify_deactivate'] = 'Bu konu\'ya gönderilen yanıtlardan haberdar olmamak istediğinize emin misiniz?';

$txt['last_edit'] = 'Son Düzenleme {date} Düzenleyen: {name}';
$txt['last_edit_mine'] = 'Son düzenleme {date}';

$txt['location'] = 'Konum';
$txt['gender'] = 'Cinsiyet';
$txt['date_registered'] = 'Kayıt Tarihi';

$txt['recent_posts'] = 'Son İletiler';
$txt['recent_view'] = 'En son gönderilen iletileri göster.';

$txt['male'] = 'Erkek';
$txt['female'] = 'Bayan';

$txt['welcome_guest'] = 'Hoşgeldiniz, <strong>%1$s</strong>. Lütfen <a href="<URL>?action=login">giriş yapın</a> veya <a href="<URL>?action=register">kayıt olun</a>.';
$txt['welcome_guest_noregister'] = 'Hoşgeldiniz, <strong>%1$s</strong>. Lütfen <a href="<URL>?action=login">giriş yapın</a>.';
$txt['login_or_register'] = 'Lütfen <a href="<URL>?action=login">giriş yapın</a> veya <a href="<URL>?action=register">kayıt olun</a>.';
$txt['please_login'] = 'Lütfen <a href="<URL>?action=login">giriş yapın</a>.';
$txt['welcome_guest_activate'] = '<br>Did you miss your <a href="<URL>?action=activate">activation email</a>?';
$txt['hello_member'] = 'Hey,';
$txt['hello_guest'] = 'Hoşgeldiniz,';
$txt['select_destination'] = 'Seçin';

$txt['posted_by'] = 'Gönderen:';

$txt['moderator'] = 'Moderatör';
$txt['moderators'] = 'Moderatörler';

// For the Short form, use '!' in case your language's 'New' is too long.
$txt['new'] = 'Yeni';
$txt['new_short'] = 'Yeni';

$txt['edited'] = 'Düzenlendi';

$txt['forgot_your_password'] = 'Şifrenizi mi unuttunuz?';

$txt['date'] = 'Tarih';
$txt['from'] = 'Kimden';
$txt['to'] = 'Kime';

$txt['members_title'] = 'Üyeler';

$txt['redirect_board'] = 'Yönlendirmeler';

$txt['notification'] = 'Duyurular';

$txt['your_ban'] = 'Üzgünüz %1$s, bu forum\'dan yasaklandınız!.<br>%2$s';
$txt['your_ban_expires'] = 'Yasağınızın bitiş süresi %1$s.';
$txt['your_ban_expires_never'] = 'Yasağınızın bitiş süresi bulunmamaktadır.';
$txt['ban_continue_browse'] = 'Bu forumu ziyaretçi olarak görüntülemeye devam edebilirsiniz.';

$txt['mark_board_read'] = 'Bu Bölümdeki Konuları Okunmuş Say';
$txt['mark_as_read'] = 'TÜMÜNÜ Okunmuş Say';

$txt['legend'] = 'Göstergeler';
$txt['locked_topic'] = 'Kilitli Konu';
$txt['normal_topic'] = 'Normal Konu';
$txt['participation_caption'] = 'İletinizin bulunduğu konu';

$txt['print'] = 'Yazdır';
$txt['profile'] = 'Profil';
$txt['not_applicable'] = 'N/A';
$txt['preview'] = 'Önizleme';
$txt['remove_draft'] = 'Taslağı Sil';
$txt['ip'] = 'IP';
$txt['by'] = 'Gönderen';
$txt['days_word'] = 'gün';
$txt['search_for'] = 'Kelime(ler)';
$txt['maintain_mode_on'] = 'Remember, this forum is in \'Maintenance Mode\'.';

$txt['global_stats'] = 'İstatistikler';
$txt['forum_stats'] = 'Bölüm İstatistikleri';
$txt['blog_stats'] = 'Blog İstatistikleri';
$txt['topic_stats'] = 'Konu İstatistikleri';

$txt['latest_member'] = 'Son Üye';
$txt['latest_post'] = 'Son İleti';

$txt['youve_got_pms'] = array(0 => 'You have no messages...', 1 => 'You have 1 message...', 'n' => 'You have %s messages...');
$txt['click_to_view_them'] = 'Click <a href="%1$s">here</a> to view them.';

$txt['print_page'] = 'Sayfayı Yazdır';

$txt['info_center_title'] = 'Bilgi Merkezi';

$txt['send_topic'] = 'Konuyu Gönder';

$txt['check_all'] = 'Hepsini Seç';

$txt['file'] = 'File';

$txt['today'] = '<strong>Bugün</strong> ';
$txt['yesterday'] = '<strong>Dün</strong> ';
$txt['new_poll'] = 'Yeni Anket';
$txt['poll_vote'] = 'Oyla';
$txt['poll_total_voters'] = 'Toplam Oy Verenler';
$txt['poll_results'] = 'Sonuçları Görüntüle';
$txt['poll_lock'] = 'Oylamayı Kilitle';
$txt['poll_unlock'] = 'Oylamanın Kilidini Kaldır';
$txt['poll_edit'] = 'Anketi Düzenle';
$txt['poll'] = 'Anket';
$txt['poll_voters_guests_only'] = array(
	1 => '1 ziyaretci',
	'n' => '%1$s ziyaretci',
);
$txt['poll_voters'] = array(
	1 => 've 1 ziyaretci',
	'n' => 've %1$s ziyaretci',
);
$txt['poll_visibility_admin'] = 'Only forum administrators will be able to see what you voted for.';
$txt['poll_visibility_creator'] = 'The forum administrators, and the poll creator, will be able to see what you voted for.';
$txt['poll_visibility_members'] = 'Any signed-in member of the forum will be able to see what you voted for.';
$txt['poll_visibility_anyone'] = 'Anyone, even guests, will be able to see what you voted for.';
$txt['one_day'] = '1 Gün';
$txt['one_week'] = '1 Hafta';
$txt['one_month'] = '1 Ay';
$txt['forever'] = 'Her zaman';
$txt['quick_login_desc'] = 'Kullanıcı adınızı, parolanızı ve aktif kalma süresini giriniz';
$txt['one_hour'] = '1 Saat';
$txt['board'] = 'Forumun';
$txt['in'] = ' ';
$txt['pinned_topic'] = 'Sabit Konu';

$txt['delete'] = 'Sil';

$txt['kilobyte'] = 'kB';

$txt['more_stats'] = '[Tüm İstatistikler]';

$txt['code'] = 'Kod';
$txt['code_select'] = '[Seç]';

$txt['merge'] = 'Konuları Birleştir';
$txt['new_topic'] = 'Yeni Konu';

$txt['set_pin'] = 'Sabitle';
$txt['set_unpin'] = 'Sabitlemeyi Kaldır';
$txt['set_lock'] = 'Kilitle';
$txt['set_unlock'] = 'Kilidi aç';
$txt['order_pinned_topic'] = 'Sabit Konuları Sırala';

$txt['page_created'] = 'Bu sayfa';
$txt['seconds_with_query'] = '%1$.2f saniyede  1 sorgu ile oluşturulmuştur.';
$txt['seconds_with_queries'] = '%1$.2f saniyede %2$d sorgu ile oluşturulmuştur.';

$txt['online'] = 'Çevrimiçi';
$txt['offline'] = 'Çevrimdışı';
$txt['pm_online'] = 'Kişisel İleti (Çevrimiçi)';
$txt['pm_offline'] = 'Kişisel İleti (Çevrimdışı)';
$txt['online_status'] = 'Durumu';

$txt['go_up'] = 'Yukarı git';
$txt['go_down'] = 'Aşağı git';

$txt['site_credits'] = 'Website credits';
$txt['copyright'] = 'Powered by <a href="http://wedge.org/" target="_blank" class="new_win">Wedge</a>';
$txt['dynamic_replacements'] = '<abbr title="Dynamic Replacements">DR</abbr>';

$txt['template_block_error'] = '"%1$s" şablon bloğu bulunamıyor.';
$txt['theme_template_error'] = '"%1$s" şablonu yüklenemiyor.';
$txt['theme_language_error'] = '"%1$s" dil dosyası yüklenemiyor.';

$txt['sub_boards'] = 'Alt Bölümler';

$txt['smtp_no_connect'] = 'Could not connect to SMTP host';
$txt['smtp_port_ssl'] = 'SMTP port setting incorrect; it should be 465 for SSL servers.';
$txt['smtp_bad_response'] = 'Couldn\'t get mail server response codes';
$txt['smtp_error'] = 'Ran into problems sending Mail. Error: ';

$txt['mlist_search'] = 'Üyelerde ara';
$txt['mlist_search_again'] = 'Tekrar ara';
$txt['mlist_search_email'] = 'E-Posta adresine göre ara';
$txt['mlist_search_group'] = 'Pozisyona göre ara';
$txt['mlist_search_name'] = 'İsme Göre Ara';
$txt['mlist_search_website'] = 'Web sitesine göre ara';
$txt['mlist_search_results'] = 'Arama sonuçları:';
$txt['mlist_search_by'] = '%1$s göre ara';
$txt['mlist_menu_view'] = 'Üye listesini görüntüle';

$txt['attach_downloaded'] = array(1 => 'yükleme yok.', 'n' => 'Yükleme: %s kez.');
$txt['attach_viewed'] = array(1 => 'gösterim yok.', 'n' => 'Gösterim: %s kez.');

$txt['settings'] = 'Seçenekler';
$txt['never'] = 'Asla';
$txt['more'] = 'daha çok';

$txt['hostname'] = 'Sunucu adı';
$txt['you_are_post_banned'] = 'Üzgünüz %1$s, yasaklı olduğunuz için ileti gönderemezsiniz.';
$txt['you_are_pm_banned'] = 'Üzgünüz %1$s, yasaklı olduğunuz için kişisel ileti gönderemezsiniz.';
$txt['you_are_post_pm_banned'] = 'Üzgünüz %1$s, yasaklı olduğunuz için normal veya kişisel ileti gönderemezsiniz.';

$txt['add_poll'] = 'Anket Ekle';
$txt['poll_options6'] = 'You may only select up to %1$s options.';
$txt['poll_remove'] = 'Anketi Sil';
$txt['poll_remove_warn'] = 'Konudan anketi kaldırmak istediğinizden emin misiniz?';
$txt['poll_results_expire'] = 'Results will be shown when voting has closed';
$txt['poll_expires_on'] = 'Oylama Kapandı';
$txt['poll_expired_on'] = 'Oylama Kapandı';
$txt['poll_change_vote'] = 'Oyu Sil';
$txt['poll_return_vote'] = 'Voting options';
$txt['poll_cannot_see'] = 'You cannot see the results of this poll at the moment.';

$txt['quick_mod_approve'] = 'Seçileni Onayla';
$txt['quick_mod_remove'] = 'Seçileni Sil';
$txt['quick_mod_lock'] = 'Seçileni Kilitle/Aç';
$txt['quick_mod_pin'] = 'Seçileni Sabitle/Sabitlemeyi Kaldır';
$txt['quick_mod_move'] = 'Seçileni Taşı';
$txt['quick_mod_merge'] = 'Seçileni Birleştir';
$txt['quick_mod_markread'] = 'Seçileni Okundu say';
$txt['quick_mod_go'] = 'Git!';

$txt['generic_confirm_request'] = 'Are you sure you want to do this?';

$txt['reagree_reply'] = 'The site terms and conditions have changed. Before you can post on the site, you will need to re-accept the user agreement. You can do so by visiting <a href="%1$s">this page</a>.';
$txt['quick_reply'] = 'Hızlı Yanıt';
$txt['quick_reply_warning'] = 'UYARI: Bu konu Kilitlenmiştir! Sadece yöneticiler yanıt yazabilir.';
$txt['quick_reply_verification'] = 'After submitting your post you will be directed to the regular post page to verify your post %1$s.';
$txt['quick_reply_verification_guests'] = '(required for all guests)';
$txt['quick_reply_verification_posts'] = '(required for all users with less than %1$d posts)';
$txt['wait_for_approval'] = 'Note: this post will not display until it\'s been approved by a moderator.';

$txt['notification_enable_board'] = 'Bu bölümde açılan yeni konuların e-posta ile bildirilmesini istiyor musunuz?';
$txt['notification_disable_board'] = 'Bu bölümde açılan yeni konuların bildirimini kapatmak istediğinizden emin misiniz?';
$txt['notification_enable_topic'] = 'Bu konuya gönderilen yeni yorumların e-posta ile bildirilmesini istiyor musunuz?';
$txt['notification_disable_topic'] = 'Bu konuya gönderilen yeni yorumların bildirimini kapatmak istediğinizden emin misiniz?';

$txt['unread_topics'] = 'Okunmamış konular';
$txt['unread_replies'] = 'Değişiklik Olmuş Konular';

$txt['who_title'] = 'Kimler Çevrimiçi';
$txt['who_and'] = ' ve ';
$txt['who_viewing_topic'] = ' bu konuyu incelemekte.';
$txt['who_viewing_board'] = ' bu bölümü incelemekte.';
$txt['who_member'] = 'Member';

// Feed block
$txt['feed'] = 'Son İletiler RSS';
$txt['feed_current_topic'] = 'Bu konu için:';
$txt['feed_current_forum'] = 'Bu bölüm için:';
$txt['feed_current_blog'] = 'This blog:';
$txt['feed_everywhere'] = 'Hepsi:';
$txt['feed_posts'] = '<a href="%1$s">iletiler</a>';
$txt['feed_topics'] = '<a href="%1$s">konular</a>';

$txt['guest'] = 'Ziyaretci';
$txt['guests'] = 'Ziyaretci';
$txt['user'] = 'Üye';
$txt['users'] = 'Üye';
$txt['hidden'] = 'Gizli';

$txt['buddy'] = 'Kişiler';
$txt['buddies'] = 'Kişilerim';
$txt['contacts_friends'] = 'Arkadaşlar';
$txt['contacts_known'] = 'Eş, Dost';
$txt['contacts_work'] = 'Meslektaşlar';
$txt['contacts_family'] = 'Aile';
$txt['contacts_follow'] = 'Takip Ettiklerim';
$txt['contacts_restrict'] = 'Engellenenler';
$txt['contacts_custom'] = 'Diğer';
$txt['contacts_new'] = 'Yeni Liste';
$txt['is_buddy'] = 'Is in my contact list';
$txt['is_not_buddy'] = 'Isn\'t in my contact list';

$txt['most_online_ever'] = 'En Çok Çevrimiçi';
$txt['most_online_today'] = 'Bugün En Çok Çevrimiçi';

$txt['response_prefix'] = 'Ynt: ';

$txt['approve_members_waiting'] = array(
	1 => 'Şu anda <a href="<URL>?action=admin;area=viewmembers;sa=browse;type=approve">1 üye</a> onay beklemektedir.',
	'n' => 'Şu anda <a href="<URL>?action=admin;area=viewmembers;sa=browse;type=approve">%s üye</a> onay beklemektedir.',
);

$txt['notifyboard_turnon'] = 'Bu bölümde yeni konu açıldığında e-posta ile uyarı alacaksınız. Devam etmek istiyor musunuz?';
$txt['notifyboard_turnoff'] = 'Artık bu bölüme yeni konular eklendiğinde e-posta ile uyarı almayacaksınız. Devam etmek istiyor musunuz?';

$txt['show_unread'] = 'Okunmamış İletiler';
$txt['show_unread_replies'] = 'Okunmamış Yanıtlar';

$txt['quickmod_delete_selected'] = 'Seçileni Sil';

$txt['show_personal_messages'] = 'Bir veya daha fazla kişisel ileti aldınız.<br><br>Yeni pencerede Görüntülemek istiyor musunuz??';

$txt['previous_next_back'] = '&laquo; geri';
$txt['previous_next_forward'] = 'ileri &raquo;';

$txt['upshrink_description'] = 'Alanı gizle/göster';

$txt['mark_unread'] = '	Okunmadı Say';

$txt['error_while_submitting'] = 'İleti gönderilirken şu hatalar oluştu:';
$txt['error_old_topic'] = 'Uyarı: bu konuya en az %1$d gündür yanıt gönderilmemiş.<br />Yanıt vermek yerine yeni bir konu açmanız önerilir.';

$txt['mark_read_short'] = 'Okunmuş Say';

$txt['pm_short'] = 'Özel Mesajlar';

$txt['hello_member_ndt'] = 'Merhaba, <span>%1$s</span>!';

$txt['unapproved_posts'] = 'Onaylanmamış Mesajlar (Konular: %1$d, İletiler: %2$d)';

$txt['ajax_in_progress'] = 'Yükleniyor...';

$txt['verification'] = 'Doğrulama';
$txt['visual_verification_description'] = 'Resimde gösterilen harfleri giriniz';
$txt['visual_verification_sound'] = 'Harfleri dinle';
$txt['visual_verification_request_new'] = 'Başka bir resim isteyin';
$txt['visual_verification_hidden'] = 'Bu kutu boş bırakılmalı';

// Sub menu labels
$txt['summary'] = 'Özet';
$txt['account'] = 'Hesap Ayarları';
$txt['forumprofile'] = 'Forum Profili';
$txt['change_skin'] = 'Tema Seçimi';
$txt['draft_posts'] = 'Taslaklar';

$txt['skin_default'] = 'Varsayılan';
$txt['skin_default_mobile'] = 'Mobil varsayılan';

$txt['settings_title'] = 'Genel Ayarlar';
$txt['plugin_manager'] = 'Paketler';
$txt['errlog'] = 'Hata Kayıtları';
$txt['edit_permissions'] = 'İzinler';
$txt['mc_unapproved_poststopics'] = 'Onaylanmamış Konu ve İletiler';
$txt['mc_reported_posts'] = 'Rapor Edilmiş İletiler';
$txt['modlog_view'] = 'Moderasyon Kayıtları';
$txt['unapproved_members'] = 'Onaylanmamış Üyeler';
$txt['admin_uncache'] = 'Önbelleği Temizle';

$txt['ignoring_user'] = 'Bu kullanıcı göz ardı edilir. Mesajı görmek veya gizlemek için buraya tıklayın..';

$txt['spider'] = 'Örümcek';
$txt['spiders'] = 'Örümcek';

$txt['downloads'] = 'İndirilme';
$txt['filesize'] = 'Dosya Boyutu';

$txt['sideshow'] = 'Click here, or middle-click anywhere on the page, to toggle the sidebar.';

// Restore topic
$txt['restore_topic'] = 'Geri Yükle';
$txt['quick_mod_restore'] = 'Seçilenleri Geri Yükle';

$txt['autosuggest_delete_item'] = 'Öğeyi Sil';

// Ignoring topics
$txt['ignoring_topic'] = 'You\'re currently ignoring this topic.';
$txt['ignore_topic'] = 'Ignore';
$txt['unignore_topic'] = 'Unignore';

// Site type.
$txt['b_type'] = array('blog' => 'blog', 'forum' => 'forum', 'media' => 'gallery', 'site' => 'site');
$txt['b_item'] = array('blog' => 'post', 'forum' => 'topic', 'media' => 'item', 'site' => 'article');

// Indicates the date of the first post when merging two posts.
$txt['search_date_posted'] = 'Gönderen:';

// Spoiler tags. But you're smart, so you don't need me telling.
$txt['spoiler'] = 'Spoiler';
$txt['click_for_spoiler'] = '(göstermek/gizlemek için tıklayın)';

$txt['readmore'] = '(%1$d daha fazla karakter)';
$txt['thoughts'] = 'Düşünceler';
$txt['add_thought'] = '(Bir düşünce göndermek için tıklayın)';
$txt['no_thoughts'] = 'Şimdilik hiçbir düşünce yok.';
$txt['thome_edit'] = 'Düzenle';
$txt['thome_remove'] = 'Sil';
$txt['thome_reply'] = 'Yanıtla';
$txt['thome_context'] = 'içeriğe git';
$txt['thome_personal'] = 'Kişisel ileti yap?';
$txt['thome_personal_desc'] = 'Bu başlığı profilimde kişisel ileti yap';

// Do not use double quotes in the following strings.
$txt['privacy'] = 'Gizlilik';
$txt['privacy_default'] = 'Varsayılan';
$txt['privacy_public'] = 'Herkes';
$txt['privacy_members'] = 'Üyeler';
$txt['privacy_group'] = 'Üye Grupları';
$txt['privacy_list'] = 'Kişilerim';
$txt['privacy_author'] = 'Sadece ben';

$txt['privacy_bubble'] = 'İçin görünür: <strong>{PRIVACY}</strong>.';
$txt['privacy_can_edit'] = 'Gizliliği değiştirmek için tıklayın';

// Do not use double quotes in the form_* text strings. (Why would you?)
$txt['form_submit'] = 'Gönder';
$txt['form_cancel'] = 'İptal';

// Media Gallery
$txt['media_gallery'] = 'Medya Galerisi';
$txt['media_home'] = 'Anasayfa';
$txt['media_unseen'] = 'Unseen';
$txt['media_profile_sum'] = 'Summary';
$txt['media_view_items'] = 'View items';
$txt['media_view_coms'] = 'Yorumları görüntüle';
$txt['media_view_votes'] = 'Oyları görüntüle';
$txt['media_gotolink'] = 'Detaylar';
$txt['media_zoom'] = 'Yakınlaştır';
