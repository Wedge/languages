<?php
// Version: 2.0; PersonalMessage

$txt['pm_inbox'] = 'Kişisel İletilerim';
$txt['send_message'] = 'İleti Gönder';
$txt['pm_add'] = 'Ekle';
$txt['make_bcc'] = 'Alıcı Ekle';
$txt['pm_to'] = 'Kime';
$txt['pm_bcc'] = 'Bilgi';
$txt['pm_contact_list'] = 'İletişim Listesi';
$txt['inbox'] = 'Gelen Kutusu';
$txt['conversation'] = 'Sohbet ';
$txt['messages'] = 'İletiler';
$txt['sent_items'] = 'Giden Kutusu';
$txt['new_message'] = 'Yeni İleti';
$txt['delete_message'] = 'İletileri Sil';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = 'PMBOX\'ndaki tüm iletileri sil';
$txt['delete_all_confirm'] = 'Tüm iletilerinizi silmek istediğinize emin misiniz?';
$txt['recipient'] = 'Alıcı';
$txt['pm_multiple'] = '(Çoklu alıcı: \'üye1, üye2\')';

$txt['delete_selected_confirm'] = 'Seçilen tüm iletilerinizi silmek istediğinize emin misiniz?';

$txt['pm_view'] = 'Görünüm';
$txt['pm_display_mode'] = 'Kişisel ileti görüntüleme';
$txt['pm_display_mode_all'] = 'Hepsi bir arada';
$txt['pm_display_mode_one'] = 'Bir seferde bir tane';
$txt['pm_display_mode_linked'] = 'Sohbet tarzında';

$txt['sent_to'] = 'Alıcı';
$txt['reply_to_all'] = 'Hepsini Yanıtla';
$txt['delete_conversation'] = 'Sohbeti Sil';

$txt['pm_capacity'] = 'Kapasite';
$txt['pm_currently_using'] = '%1$s ileti, %2$s%% dolu.';
$txt['pm_sent'] = 'Mesajınız başarılı bir şekilde gönderilmiştir.';

$txt['pm_receive_from'] = 'Bu kişilerden özel mesaj al:';
$txt['pm_receive_from_everyone'] = 'Tüm Üyeler';
$txt['pm_receive_from_ignore'] = 'Engelli listesindeki hariç tüm üyeler';
$txt['pm_receive_from_admins'] = 'Sadece Adminler';
$txt['pm_receive_from_buddies'] = 'Sadece Arkadaşlar ve Adminler';
$txt['pm_remove_inbox_label'] = 'Başka bir etiket atandığında, gelen kutusu etiketi kaldırılsın.';

$txt['pm_error_user_not_found'] = '\'%1$s\' adlı üye bulunamadı.';
$txt['pm_error_ignored_by_user'] = 'Kullanıcı \'%1$s\' sizi engellemiştir.';
$txt['pm_error_data_limit_reached'] = '\'%1$s\' adlı üyeye gelen kutusu dolu olduğu için kişisel ileti gönderilemedi!';
$txt['pm_error_user_cannot_read'] = '\'%1$s\' adlı üye kişisel ileti alamaz.';
$txt['pm_successfully_sent'] = 'Kişisel iletiniz \'%1$s\' adlı üyeye başarıyla gönderildi!';
$txt['pm_send_report'] = 'Rapor gönder';
$txt['pm_undisclosed_recipients'] = 'Gizli alıcılar';
$txt['pm_too_many_recipients'] = array(1 => 'Aynı anda %1$d alıcıdan fazla kişiye kişisel ileti gönderemezsiniz.', 'n' => 'Aynı anda %1$d alıcıdan fazla kişiye kişisel ileti gönderemezsiniz.');

$txt['pm_read'] = 'Oku';
$txt['pm_replied'] = 'Cevap Verilmiş';

// Drafts.
$txt['pm_menu_drafts'] = 'Taslak mesajlar';
$txt['showDrafts'] = 'Taslakları görüntüle';
$txt['showDrafts_desc'] = 'Bu bölümde taslak olarak kaydettiğiniz veya sizin adınıza kayıtlı olan tüm taslak mesajlar görüntülenir.';
$txt['show_drafts_none'] = 'Şu anda kayıtlı hiçbir taslak yok.';
$txt['edit_draft'] = 'Taslağı düzenle';
$txt['draftAutoPurge'] = array(
	1 => 'Taslaklar bir süre sunucuda saklanır bu süre sonunda yayınlanmayan taslaklar otomatik olarak silinir.',
	'n' => 'Taslaklar %s gün boyunca sunucuda saklanır bu süre sonunda yayınlanmayan taslaklar otomatik olarak silinir.',
);
$txt['remove_all_drafts'] = 'Tüm taslakları sil';
$txt['remove_all_drafts_confirm'] = 'Taslakları gerçekten silmek istiyor musunuz? (bu işlem geri alınamaz.)';
$txt['no_recipients'] = '(alıcı yok)';

// Message Pruning.
$txt['pm_prune'] = 'İletileri Temizle';
$txt['pm_prune_desc1'] = 'Şu tarihten eski tüm kişisel iletilerimi sil:';
$txt['pm_prune_desc2'] = 'gün.';
$txt['pm_prune_warning'] = 'Kişisel iletilerinizi temizlemek istediğinize emin misiniz?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'İleri Seçenekler';
$txt['pm_actions_delete_selected'] = 'Seçilileri Sil';
$txt['pm_actions_filter_by_label'] = 'Etikete Göre Filtrele';
$txt['pm_actions_go'] = 'Başla';

// Manage Labels Screen.
$txt['pm_manage_labels'] = 'Etiketleri Yönet';
$txt['pm_labels_delete'] = 'Seçili etiketleri silmek istediğinizden emin misiniz?';
$txt['pm_labels_desc'] = 'Burada özel mesajlarınızda kullanılabilecek etiketleri düzenleyebilir, silebilir veya yenilerini ekleyebilirsiniz.';
$txt['pm_label_add_new'] = 'Yeni Etiket Ekle';
$txt['pm_label_name'] = 'Etiket Adı';
$txt['pm_labels_no_exist'] = 'Şu anda yapılandırılmış etiketiniz bulunmamakta!';

// Labeling Drop Down. ("Label Selected" means "Apply a label to the selection", in case it's unclear.)
$txt['pm_current_label'] = 'Etiket';
$txt['pm_sel_label_title'] = 'Seçilileri Etiketle';
$txt['pm_msg_label_title'] = 'Etiket Mesajı';
$txt['pm_msg_label_apply'] = 'Etiketi Ekle';
$txt['pm_msg_label_remove'] = 'Etiket Sil';
$txt['pm_msg_label_inbox'] = 'Gelen Kutusu';

// Sidebar Headings.
$txt['pm_labels'] = 'Etiketler';
$txt['pm_messages'] = 'İletiler';
$txt['pm_actions'] = 'Eylemler';
$txt['pm_preferences'] = 'Seçenekler';

$txt['pm_is_replied_to'] = 'Bu iletiyi yanıtladınız veya başka bir üyeye ilettiniz.';
$txt['pm_is_replied_to_sent'] = array(1 => 'Bu ileti yanıtlandı.', 'n' => '%s iletisi için yanıt gönderildi.');

// Reporting messages.
$txt['pm_report_to_admin'] = 'Yöneticiye Rapor Et';
$txt['pm_report_title'] = 'Kişisel İletiyi Rapor Et';
$txt['pm_report_desc'] = 'Bu sayfadan, aldığınız kişisel iletileri forum yönetimine rapor edebilirsiniz. Lütfen iletiyi neden rapor ettiğinizi de yazınız ve unutmayın bu iletinin tüm içeriği rapor edildikten sonra forum yöneticileri tarafından okunulabilecektir.';
$txt['pm_report_admins'] = 'İletilerin rapor edileceği yönetici';
$txt['pm_report_all_admins'] = 'Tüm forum yöneticilerine gönder';
$txt['pm_report_reason'] = 'İletiyi rapor etme nedeniniz';
$txt['pm_report_message'] = 'İletiyi Rapor Et';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[RAPOR ET] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER}, {SENDER} adlı kullanıcının kendisine göndermiş olduğu bu iletiyi aşağıdaki nedenle size rapor etti:';
$txt['pm_report_pm_other_recipients'] = 'Bu iletinin diğer alıcıları:';
$txt['pm_report_pm_hidden'] = '%1$d gizli alıcı';
$txt['pm_report_pm_unedited_below'] = 'Rapor edilen iletinin orjinal içeriği:';
$txt['pm_report_pm_sent'] = 'Gönderildi:';

$txt['pm_report_done'] = 'Bu raporu gönderdiğiniz için teşekkürler. En kısa sürede forum yönetiminden konu ile ilgili bilgi alacaksınız.';
$txt['pm_report_return'] = 'Gelen kutusuna geri dön';

$txt['pm_search_title'] = 'Kişisel İletileri Ara';
$txt['pm_search_bar_title'] = 'İletileri Ara';
$txt['pm_search_go'] = 'Ara';

$txt['pm_search_post_age'] = 'İleti Yaşı';
$txt['pm_search_show_complete'] = 'Sonuçlarda iletinin tümünü göster.';
$txt['pm_search_subject_only'] = 'Sadece yazar ve konuya göre ara.';
$txt['pm_search_between'] = '';
$txt['pm_search_between_and'] = 've';
$txt['pm_search_between_days'] = 'gün arasında';
$txt['pm_search_choose_label'] = 'Aranılacak etiketleri seçin yada tüm iletilerde arama yapın';

$txt['pm_search_results'] = 'Arama Sonuçları';
$txt['pm_search_none_found'] = 'Hiç İleti Bulunamadı';

$txt['pm_visual_verification_label'] = 'Doğrulama';
$txt['pm_visual_verification_desc'] = 'Lütfen yukarıdaki resimdeki kodu giriniz.';

$txt['pm_settings'] = 'Ayarları Değiştir';
$txt['pm_change_view'] = 'Görünümü Değiştir';

$txt['pm_manage_rules'] = 'Kuralları Yönet';
$txt['pm_manage_rules_desc'] = 'İleti kuralları, gelen iletileri sizin belirleyeceğiniz kriterlere göre kategorize etmenize olanak tanır. Aşağıda yapılandırmış olduğunuz tüm kurallar görüntülenebilmektedir. Bir kuralı düzenlemek için üstüne tıklamanız yeterli olacaktır.';
$txt['pm_rules_none'] = 'Yapılandırılmış herhangi bir kural bulunmamaktadır.';
$txt['pm_rule_title'] = 'Kural';
$txt['pm_add_rule'] = 'Yeni Kural Ekle';
$txt['pm_apply_rules'] = 'Kuralları Şimdi Uygula';
$txt['pm_js_apply_rules_confirm'] = 'Kuralları tüm kişisel iletilere uygulamak istediğinize emin misiniz?';
$txt['pm_edit_rule'] = 'Kuralı Düzenle';
$txt['pm_rule_save'] = 'Kuralı Kaydet';
$txt['pm_delete_selected_rule'] = 'Seçili Kuralları Sil';
$txt['pm_js_delete_rule_confirm'] = 'Seçili kuralları silmek istediğinize emin misiniz?';
$txt['pm_rule_name'] = 'Ad';
$txt['pm_rule_name_desc'] = 'Bu kuralı hatırlamanızı sağlayacak ad.';
$txt['pm_rule_name_default'] = '[NAME]';
$txt['pm_rule_description'] = 'Açıklama';
$txt['pm_rule_not_defined'] = 'Kural açıklamasını oluşturmaya başlamak için bir kriter ekleyiniz.';
$txt['pm_rule_js_disabled'] = '<span class="alert"><strong>Not:</strong> Javascripti kapattığınız tespit edildi. Bu özelliği kullanabilmeniz için Javascript\'i aktif hale getirmeniz önerilir.</span>';
$txt['pm_rule_criteria'] = 'Kriter';
$txt['pm_rule_criteria_add'] = 'Kriter Ekle';
$txt['pm_rule_criteria_pick'] = 'Kriter Seç';
$txt['pm_rule_mid'] = 'Gönderenin Adı';
$txt['pm_rule_gid'] = 'Gönderenin Grubu';
$txt['pm_rule_sub'] = 'İleti Başlığının İçeriği';
$txt['pm_rule_msg'] = 'İletinin Kendisinin İçeriği';
$txt['pm_rule_bud'] = 'Gönderen Arkadaştır';
$txt['pm_rule_sel_group'] = 'Grup Seç';
$txt['pm_rule_logic'] = 'Kriter kontrol edilirken';
$txt['pm_rule_logic_and'] = 'Tüm kriterler sağlanmalıdır';
$txt['pm_rule_logic_or'] = 'Bazı kriterler sağlanmalıdır';
$txt['pm_rule_actions'] = 'Eylemler';
$txt['pm_rule_sel_action'] = 'Eylem Seç';
$txt['pm_rule_add_action'] = 'Eylem Ekle';
$txt['pm_rule_label'] = 'Etiket Ekle';
$txt['pm_rule_sel_label'] = 'Etiket Seç';
$txt['pm_rule_delete'] = 'İletiyi Sil';
$txt['pm_rule_no_name'] = 'Kural için bir ad girmeyi unuttunuz.';
$txt['pm_rule_no_criteria'] = 'Bir kural en az bir kriter ve eyleme sahip olmalıdır.';
$txt['pm_rule_too_complex'] = 'Oluşturmuş olduğunuz kural SMF\'in saklayabileceğinden büyüktür. Lütfen daha küçük kurallar olarak tekrar yazmayı deneyiniz.';

$txt['pm_readable_and'] = '<strong>ve<//strong>';
$txt['pm_readable_or'] = '<strong>veya<//strong>';
$txt['pm_readable_start'] = 'Eğer ';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = 'ileti &quot;{MEMBER}&quot; adlı üyeden ise';
$txt['pm_readable_group'] = 'gönderen &quot;{GROUP}&quot; adlı gruptan ise';
$txt['pm_readable_subject'] = 'ileti başlığı &quot;{SUBJECT}&quot; kelimelerini içeriyorsa';
$txt['pm_readable_body'] = 'iletinin kendisi &quot;{BODY}&quot; kelimelerini içeriyorsa';
$txt['pm_readable_buddy'] = 'gönderen arkadaşsa';
$txt['pm_readable_label'] = '&quot;{LABEL}&quot; etiketini uygula';
$txt['pm_readable_delete'] = 'iletiyi kaldır';
$txt['pm_readable_then'] = '<strong>sonra</strong>';
$txt['pm_not_found'] = 'Üzgünüz, istenen mesaj bulunamadı.';
