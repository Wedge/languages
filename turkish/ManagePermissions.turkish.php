<?php
// Version: 2.0; ManagePermissions

$txt['permissions_title'] = 'İzin Yönetimi';
$txt['permissions_modify'] = 'Düzenle';
$txt['permissions_view'] = 'Göster';
$txt['permissions_allowed'] = 'İzni Var';
$txt['permissions_denied'] = 'İzni Yok';
$txt['permission_cannot_edit'] = '<strong>Not:</strong> Bu izin profilini forum varsayılan profillerinden biri olduğu için düzenleyemezsiniz. Bu profilin izinlerini değiştirebilmek için <a href="%1$s">bir kopyasını oluşturmanız</a> önerilir.';

$txt['permissions_for_profile'] = 'Profil İzinleri';
$txt['permissions_boards_desc'] = 'Aşağıdaki liste bölümlere göre atanmış izinleri görüntülemenize olanak tanır. İlgili profili, bölümün üzerine tıklayarak veya &quot;tümünü düzenle&quot; butonuna tıklayabilirsiniz. Profili düzenlemek içinse direk profilin üzerine tıklamanız yeterli olacaktır.';
$txt['permissions_board_all'] = 'Tümünü Düzenle';
$txt['permission_profile'] = 'İzin Profili';
$txt['permission_profile_desc'] = 'Bölümün kullanacağı <a href="%1$s">izin seti</a>.';
$txt['permission_profile_inherit'] = 'Ana bölümden devral';

$txt['permissions_profile'] = 'Profil';
$txt['permissions_profiles_desc'] = 'İzin profilleri, yönetimi kolaylaştırmak için ayrı ayrı her bölüme atanabilirler. Bu bölümü kullanarak izin profilleri oluşturabilir, düzenleyebilir veya var olanları kaldırabilirsiniz.';
$txt['permissions_profiles_change_for_board'] = '&quot;%1$s&quot; İçin İzin Profilini Düzenle';
$txt['permissions_profile_default'] = 'Varsayılan';
$txt['permissions_profile_no_polls'] = 'Anket Yok';
$txt['permissions_profile_reply_only'] = 'Sadece Yanıtlayabilir';
$txt['permissions_profile_read_only'] = 'Sadece Okuyabilir';

$txt['permissions_profile_rename'] = 'Ad Değiştir';
$txt['permissions_profile_edit'] = 'Profilleri Düzenle';
$txt['permissions_profile_new'] = 'Yeni Profil';
$txt['permissions_profile_new_create'] = 'Oluştur';
$txt['permissions_profile_name'] = 'Profil Adı';
$txt['permissions_profile_used_by'] = 'Kullanan:';
$txt['permissions_profile_used_by_one'] = '1 Bölüm';
$txt['permissions_profile_used_by_many'] = '%1$d Bölüm';
$txt['permissions_profile_used_by_none'] = 'Yok';
$txt['permissions_profile_do_edit'] = 'Düzenle';
$txt['permissions_profile_do_delete'] = 'Kaldır';
$txt['permissions_profile_copy_from'] = 'İzinleri Kopyala:';

$txt['permissions_includes_inherited'] = 'Üst Gruplar';

$txt['permissions_all'] = 'hepsi';
$txt['permissions_none'] = 'hiçbiri';
$txt['permissions_set_permissions'] = 'İzinleri ayarla';

$txt['permissions_advanced_options'] = 'Gelişmiş Seçenekler';
$txt['permissions_with_selection'] = 'Seçilenle';
$txt['permissions_apply_pre_defined'] = 'Önceden ayarlanmış profilin izinlerini uygula';
$txt['permissions_select_pre_defined'] = 'Önceden ayarlanmış bir profil seçin';
$txt['permissions_copy_from_board'] = 'İzinleri bu bölümden kopyala';
$txt['permissions_select_board'] = 'Bir bölüm seç';
$txt['permissions_like_group'] = 'İzinleri bu gruba ayarla';
$txt['permissions_select_membergroup'] = 'Üye grubu seçin';
$txt['permissions_add'] = 'İzini Ekle';
$txt['permissions_remove'] = 'İzinleri Temizle';
$txt['permissions_deny'] = 'İzini Yasakla';
$txt['permissions_select_permission'] = 'Bir izin seçin';

$txt['permissions_only_one_option'] = 'İzinleri düzenlemek için sadece bir seçenek seçin';
$txt['permissions_no_action'] = 'Eylem seçilmedi';
$txt['permissions_deny_dangerous'] = 'Bir veya daha çok izini yasaklama hakkınız var.\\nBu tehlikeli ve beklenmedik sonuçlara neden olabilir. Grup içindeki herkesin izinlerini yasaklıyorsunuz.\\n\\nDevam etmek istiyor musunuz?';

$txt['permissions_modify_group'] = 'Grubu Düzele';
$txt['permissions_general'] = 'Genel İzinler';
$txt['permissions_board'] = 'Varsayılan Bölüm İzinleri';
$txt['permissions_board_desc'] = '<strong>Not</strong>: Bu bölümün izinlerini düzenlemek &quot;Varsayılan&quot; izin profilini kullanan tüm bölümleri etkileyecektir. &quot;Varsayılan&quot; profili kullanmayan bölümler bu sayfada yapılacak değişikliklerden etkilenmeyeceklerdir.';
$txt['permissions_commit'] = 'Değişiklikleri kaydet';
$txt['permissions_on'] = 'bölümde';
$txt['permissions_local_for'] = 'Grup için yerel izinler';
$txt['permissions_option_on'] = '<span title="İzin Var" style="color: #0a0">A</span>';
$txt['permissions_option_off'] = '<span title="İzin Yok">X</span>';
$txt['permissions_option_deny'] = '<span title="Reddedilir" style="color: red">D</span>';
$txt['permissions_option_on_title'] = 'İzin Var';
$txt['permissions_option_off_title'] = 'İzin Yok';
$txt['permissions_option_deny_title'] = 'Reddedilir';
$txt['permissions_option_desc'] = 'Kısaltmaların anlamı; <span style="color: #0a0">İzinli (<strong>A</strong>)</span>, İzni Yok (<strong>X</strong>), veya <span style="color: red">Reddedilir (<strong>D</strong>)</span>.<br><br>yaparsanız, herhangi bir üyenin veya moderatörün izinlerinide kısıtlamış olursunuz. Bu yüzden, <span style="color: red;">\'Reddedilir\' (D)</span> seçeneğini sadece <strong>gerektiğinde</strong> kullanın. Genelde bir izni kısıtlamak için \'İzini Yok\' (X) seçeneğiniz kullanmanız daha iyi olur.';

$txt['permissiongroup_general'] = 'Genel';
$txt['permissionname_view_stats'] = 'View forum statistics';
$txt['permissionhelp_view_stats'] = 'The forum statistics is a page summarizing all statistics of the forum, like member count, daily number of posts, and several top 10 statistics. Enabling this permission adds a link to the bottom of the board index (\'[More Stats]\').';
$txt['permissionname_view_mlist'] = 'View the memberlist and groups';
$txt['permissionhelp_view_mlist'] = 'The memberlist shows all members that have registered on your forum. The list can be sorted and searched. The memberlist is linked from both the homepage and the stats page, by clicking on the number of members. It also applies to the groups page which is a mini memberlist of people in that group.';
$txt['permissionname_who_view'] = 'View Who\'s Online';
$txt['permissionhelp_who_view'] = 'Who\'s online shows all members that are currently online and what they are doing at that moment. This permission will only work if you also have enabled it in \'Member Options - Who\'s Online\'. You can access the \'Who\'s Online\' screen by clicking the link in the \'Users Online\' section of the board index. Even if this is denied, members will still be able to see who\'s online, just not where they are.';
$txt['permissionname_search_posts'] = 'Search for posts and topics';
$txt['permissionhelp_search_posts'] = 'The Search permission allows the user to search all boards he or she is allowed to access. When the search permission is enabled, a \'Search\' button will be added to the forum button bar.';
$txt['permissionname_post_thought'] = 'Düşünce gönderebilir';
$txt['permissionhelp_post_thought'] = 'Allows members to post thoughts, define their privacy levels, and reply to thoughts sent by other members.';

$txt['permissiongroup_pm'] = 'Kişisel İletiler';
$txt['permissionname_pm_read'] = 'Kişisel iletilerini okuyabilir';
$txt['permissionhelp_pm_read'] = 'Bu izin kullanıcıların Kişisel İleti bölümüne girip kişisel iletilerini okuyabilmelerini sağlar. İzin verilmeden kullanıcılar kişisel ileti gönderemez.';
$txt['permissionname_pm_send'] = 'Kişisel ileti gönderebilir';
$txt['permissionhelp_pm_send'] = 'Diğer kayıtlı kullanıcılara kişisel ileti gönderilebilinmesini sağlar. \'Kişisel İleti oku\' iznini gerektirir.';
$txt['permissionname_save_pm_draft'] = 'Kişisel iletilerini taslak olarak kayır edebilir';
$txt['permissionhelp_save_pm_draft'] = 'This permission allows users to save drafts of new personal messages, before they are sent.';
$txt['permissionname_auto_save_pm_draft'] = 'Kişisel ileti taslakları otomatik olarak kayıt edilir';
$txt['permissionhelp_auto_save_pm_draft'] = 'This permission, when combined with the above permission, enables automatic saving of message drafts - by default approximately once every 30 seconds, though this is configurable from the Topic Settings area in the Administration Panel.';

$txt['permissiongroup_maintenance'] = 'Forum Yönetimi';
$txt['permissionname_admin_forum'] = 'Forum ve veritabanını yönetebilir';
$txt['permissionhelp_admin_forum'] = 'Bu özellik kullanıcıya :<ul class="list"><li>forum,tema ve veritabanı ayarlarını değiştirmesine</li><li>paketleri yönetebilmesine</li><li>veritabanı ve forum bakım aletlerini kullanmasına</li><li>hata ve mod geçmişini görmesine sağlar</li></ul> Bu özelliği ikaz ederek kullanın , gerçekten çok güçlü.';
$txt['permissionname_manage_boards'] = 'Bölüm ve kategorileri yönetebilir';
$txt['permissionhelp_manage_boards'] = 'Bu özellik odaların eklenmesini,düzenlenmesini ve kaldırılabilmesini içerir.';
$txt['permissionname_manage_attachments'] = 'Eklentiler ve avatarları yönetebilir';
$txt['permissionhelp_manage_attachments'] = 'Eklenti merkezine girişe izin verir. (Forumdaki tüm eklentilerin saklandığı ve silinebileceği yer).';
$txt['permissionname_manage_smileys'] = 'İleti ikonları ve gülümsemeleri yönet';
$txt['permissionhelp_manage_smileys'] = 'Bu izin ile gülümseme merkezine girişe izin verildi. Bölümde gülücük ( ve setleri ) ekleyebilir,değiştirebilir hatta çıkarabilirsiniz. Ayrıca özel ileti ikonları izni verilirse , özel ileti ikonları değiştirilebilir veya eklenebilir hale gelecektir.';
$txt['permissionname_edit_news'] = 'Haberleri düzenleyebilir';
$txt['permissionhelp_edit_news'] = 'Haber fonksiyonu her sayfada rastgele bir haber dizini çıkmasını sağlar. Bu özelliği kullanmak için forum ayarlarından etkin kılınız.';
$txt['permissionname_access_mod_center'] = 'Moderasyon merkezine ulaşabilir';
$txt['permissionhelp_access_mod_center'] = 'Bu grubun tüm üyeleri moderasyon yapabildikleri bölümler ile alakalı moderasyon merkezini görüntüleyebileceklerdir. Unutmayın, bu grup kendi başına moderasyon yetkileri vermez.';

$txt['permissiongroup_member_admin'] = 'Üye Yönetimi';
$txt['permissionname_moderate_forum'] = 'Forum üyelerini yönetebilir';
$txt['permissionhelp_moderate_forum'] = 'Tüm önemli üye yönetim ayarlarını içerir:<ul class="list"><li>üyelik yönetimine girmeyi</li><li>üye silmeyi</li><li>gizli olabilmeyi ve IP tespit etmeyi</li><li>üyeliği aktif etmeyi</li><li>üye kabulü yapmayı</li><li>kişisel iletileri yasaklamayı</li><li>ve bir sürü ufak şeyi</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Üye gruplarını yönetebilir';
$txt['permissionhelp_manage_membergroups'] = 'Üye grupları yeniden düzenlenebilir ve yeni gruplar oluşturulabilir';
$txt['permissionname_manage_permissions'] = 'İzinleri yönetebilir';
$txt['permissionhelp_manage_permissions'] = 'Bir üye grubunun tüm izinlerini ayarlayabilmeyi sağlar';
$txt['permissionname_manage_bans'] = 'Yasaklı listesini yönetebilir';
$txt['permissionhelp_manage_bans'] = 'IP, Host adı veya e-posta adresi ile yasaklı listesine girdi ekleyebilir veya çıkarabilirsiniz. Yasaklı üyelerin hata iletilerini görebilmenizi ve silebilmenizi sağlar.';
$txt['permissionname_send_mail'] = 'Üyelere e-posta gönderebilir';
$txt['permissionhelp_send_mail'] = 'Belli üye gruplarına, üyelere veya tüm foruma e-posta / kişisel ileti sağlar (sonuncusu \'Kişisel İleti Gönder\' iznini gerektirir).';
$txt['permissionname_issue_warning'] = 'Üyelere uyarı gönderebilir';
$txt['permissionhelp_issue_warning'] = 'Üyelere uyarı gönderebilir veya uyarı seviyelerini değiştirebilir. Uyarı sisteminin etkinleştirilmiş olmasını gerektirir.';

$txt['permissiongroup_profile'] = 'Profil';
$txt['permissionname_profile_view'] = 'Profil özetine ve istatistiğine bakabilir';
$txt['permissionhelp_profile_view'] = 'Profiline bakılan kullanıcı hakkındaki istatistiklerin ve ufak bir özetin gösterilmesini sağlar..';
$txt['permissionname_profile_view_own'] = 'Kendi profiline';
$txt['permissionname_profile_view_any'] = 'Herhangi bir profile';
$txt['permissionname_profile_identity'] = 'Hesap ayarlarını düzenleyebilir';
$txt['permissionhelp_profile_identity'] = 'Hesap yönetim ayarları şifre, profil, e-posta adresi, üye grubu ve tercih edilen dil gibi basit işlemleri içerir.';
$txt['permissionname_profile_identity_own'] = 'Kendi hesabını';
$txt['permissionname_profile_identity_any'] = 'Herhangi bir hesabı';
$txt['permissionname_profile_extra'] = 'Forum profil bilgilerini düzenleyebilir';
$txt['permissionhelp_profile_extra'] = 'Ek profil ayarları. Avatar, tema seçenekleri, hatırlatmalar ve kişisel iletiler dahil.';
$txt['permissionname_profile_extra_own'] = 'Kendi profilini';
$txt['permissionname_profile_extra_any'] = 'Herhangi bir profili';
$txt['permissionname_profile_signature'] = 'Edit signature';
$txt['permissionhelp_profile_signature'] = 'This allows the administrator to restrict which groups may have signatures attached to their posts; often granted to higher-ranking groups to dissuade users simply signing up and advertising.';
$txt['permissionname_profile_signature_own'] = 'Own signature';
$txt['permissionname_profile_signature_any'] = 'Any signature';
$txt['permissionname_profile_website'] = 'Edit website details';
$txt['permissionhelp_profile_website'] = 'This allows the administrator to restrict which groups may have website details shown by their posts; often granted to higher-ranking groups to dissuade users simply signing up and advertising.';
$txt['permissionname_profile_website_own'] = 'Own profile\'s website';
$txt['permissionname_profile_website_any'] = 'Any profile\'s website';
$txt['permissionname_profile_title'] = 'Kişisel başlığını değiştirebilir';
$txt['permissionhelp_profile_title'] = 'Kullanıcı adının altında yazan ismi belirtir.';
$txt['permissionname_profile_title_own'] = 'Kendi profilinin';
$txt['permissionname_profile_title_any'] = 'Herhangi bir profili';
$txt['permissionname_profile_remove'] = 'Hesap silebilir';
$txt['permissionhelp_profile_remove'] = 'Kendi üyeliğini silebilme hakkını verir. \'Kendi Üyeliği\' kısmı ayarlandığında.';
$txt['permissionname_profile_remove_own'] = 'Kendi hesabını';
$txt['permissionname_profile_remove_any'] = 'Herhangi bir hesabı';
$txt['permissionname_profile_server_avatar'] = 'Sunucudan bir avatar seçebilir';
$txt['permissionhelp_profile_server_avatar'] = 'Bu özellik kullanıcının sunucuda bulunan avatar\'ları kullanabilmesine olanak tanır.';
$txt['permissionname_profile_upload_avatar'] = 'Sunucuya avatar yükleyebilir';
$txt['permissionhelp_profile_upload_avatar'] = 'Bu özellik kullanıcının kişisel avatar\'ını sunucuya yükleyebilmesine olanak tanır.';
$txt['permissionname_profile_remote_avatar'] = 'Uzaktan avatar çağırabilir';
$txt['permissionhelp_profile_remote_avatar'] = 'Avatar\'lar sayfanın açılış hızını etkileyebileceği için belli üye gruplarının dışarıdan avatar çağırması engellenebilir.';

$txt['permissiongroup_general_board'] = 'Genel';
$txt['permissionname_moderate_board'] = 'Bölüm yönetimi';
$txt['permissionhelp_moderate_board'] = 'Bölüm Yönetim izni moderatörlere birkaç ufak özellik daha ekler. Kilitli konulara yanıt verebilme, anket sonuçlarını görebilme ve anket tarihini düzenleyebilme gibi.';

$txt['permissiongroup_topic'] = 'Konular';
$txt['permissionname_post_new'] = 'Yeni konular gönderebilir';
$txt['permissionhelp_post_new'] = 'Bu izin sadece yeni konu göndermesine izin veriri. İletilere yanıt verme yetkisini birlikte getirmez';
$txt['permissionname_merge_any'] = 'Herhangi bir konuyu birleştirebilir';
$txt['permissionhelp_merge_any'] = 'Konuyu başka bir konu ile birleştirebilir. İletilerin sıralanması tarihlerine göre olacaktır. Konu birleştirme izni olanlar istedikleri gibi konuları birleştirebilirler.';
$txt['permissionname_split_any'] = 'Herhangi bir konuyu bölebilir';
$txt['permissionhelp_split_any'] = 'Konuyu ikiye ayırarak farklı konular oluşturabilir.';
$txt['permissionname_send_topic'] = 'Konuları arkadaşlarına gönderebilir';
$txt['permissionhelp_send_topic'] = 'Bu izin kullanıcıların bazı konuları arkadaşlarının e-posta adresine göndermesine izin verir.';
$txt['permissionname_pin_topic'] = 'Konuları sabitleyebilir';
$txt['permissionhelp_pin_topic'] = 'Kalıcı konular odaların en üstüne yerleştirilmiş konulardır. Önemli iletiler veya duyurular için yararlı olabilir.';
$txt['permissionname_move'] = 'Konuları taşıyabilir';
$txt['permissionhelp_move'] = 'Konuyu başka bir bölüme taşıyabilir. Konuyu taşıdığı yere erişimi olmalıdır.';
$txt['permissionname_move_own'] = 'Kendi konularını';
$txt['permissionname_move_any'] = 'Herhangi bir konuyu';
$txt['permissionname_lock'] = 'Konuları kilitleyebilir';
$txt['permissionhelp_lock'] = 'Bu izin üyelerin konuları kilitleyebilmelerine olanak tanır. Bu sayede kimse konuya ileti göndermeye devam edemez. Sadece \'Bölüm Yönetimi\' izni bulunanlar ileti gönderebilirler.';
$txt['permissionname_lock_own'] = 'Kendi konularını';
$txt['permissionname_lock_any'] = 'Herhangi bir konuyu';
$txt['permissionname_remove'] = 'Konuları silebilir';
$txt['permissionhelp_remove'] = 'Konuları toptan sil. Unutmayın konudaki belli iletileri silmek için kullanılmaz!';
$txt['permissionname_remove_own'] = 'Kendi konularını';
$txt['permissionname_remove_any'] = 'Herhangi bir konuyu';
$txt['permissionname_post_reply'] = 'Konulara yanıt verebilir';
$txt['permissionhelp_post_reply'] = 'Bu izin konuların yanıtlanabilmelerine izin verir.';
$txt['permissionname_post_reply_own'] = 'Kendi konularına';
$txt['permissionname_post_reply_any'] = 'Herhangi bir konuya';
$txt['permissionname_modify_replies'] = 'Konusundaki yanıtları düzenleyebilir';
$txt['permissionhelp_modify_replies'] = 'Kullanıcıların kendi konularında bulunan iletileri düzenleyebilmelerini sağlar.';
$txt['permissionname_delete_replies'] = 'Konusundaki yanıtları silebilir';
$txt['permissionhelp_delete_replies'] = 'Kullanıcıların kendi konularında bulunan iletileri silebilmelerini sağlar.';
$txt['permissionname_announce_topic'] = 'Konuları duyuru olarak gönderebilir';
$txt['permissionhelp_announce_topic'] = 'Konuların e-posta yoluyla belirlenmiş üyelere gönderilebilmelerini sağlar.';

$txt['permissiongroup_post'] = 'İletiler';
$txt['permissionname_delete'] = 'İletileri kaldırabilir';
$txt['permissionhelp_delete'] = 'İletileri kaldırabilir. Konunun ilk iletisinin silinmesine izin vermez.';
$txt['permissionname_delete_own'] = 'Kendi iletilerini';
$txt['permissionname_delete_any'] = 'Herhangi bir iletiyi';
$txt['permissionname_modify'] = 'İletileri düzenleyebilir';
$txt['permissionhelp_modify'] = 'İletilerin düzenlenebilmesini sağlar.';
$txt['permissionname_modify_own'] = 'Kendi iletisini';
$txt['permissionname_modify_any'] = 'Herhangi bir iletiyi';
$txt['permissionname_report_any'] = 'İletileri moderatöre rapor edebilir';
$txt['permissionhelp_report_any'] = 'Tüm iletilere bir bağlantı yerleştirir. Bu bağlantı sayesinde bahsi geçen ileti moderatöre kolay bir şekilde rapor edilebilir.';
$txt['permissionname_bypass_edit_disable'] = 'Ignore edit disable time';
$txt['permissionhelp_bypass_edit_disable'] = 'This permission allows users to keep editing their own posts even after the edit disable time.';

$txt['permissionname_save_post_draft'] = 'Save drafts of new posts';
$txt['permissionhelp_save_post_draft'] = 'This permission allows users to save drafts of new posts, before they are posted. Attachments and polls are NOT saved.';
$txt['permissionname_auto_save_post_draft'] = 'Automatically save draft posts';
$txt['permissionhelp_auto_save_post_draft'] = 'This permission, when combined with the above permission, enables automatic saving of post drafts - by default approximately once every 30 seconds, though this is configurable from the Topic Settings area in the Administration Panel - both for new topics and replies.';

$txt['permissiongroup_poll'] = 'Anketler';
$txt['permissionname_poll_view'] = 'Anketleri görebilir';
$txt['permissionhelp_poll_view'] = 'Kullanıcıların anketi görmesine izin verir. Bu izin etkin değilse, kullanıcı sadece konuyu görür.';
$txt['permissionname_poll_vote'] = 'Anketleri oylayabilir';
$txt['permissionhelp_poll_vote'] = 'Kayıtlı kullanıcıların tek oy kullanmalarını sağlar.';
$txt['permissionname_poll_post'] = 'Yeni anket başlatabilir';
$txt['permissionhelp_poll_post'] = 'Bu özellik kullanıcının anket açabilmesine izin verir. Kullanıcının \'Konu Açma\' yetkisine sahip olması gerekmektedir';
$txt['permissionname_poll_add'] = 'Konulara anket ekleyebilir';
$txt['permissionhelp_poll_add'] = 'Konular açıldıktan sonra anket ekleyebilmeyi sağlar. Konunun ilk iletisini düzenleyebilme izinleri gerekir.';
$txt['permissionname_poll_add_own'] = 'Kendi konularına';
$txt['permissionname_poll_add_any'] = 'Herhangi bir konuya';
$txt['permissionname_poll_edit'] = 'Anketleri düzenleyebilir';
$txt['permissionhelp_poll_edit'] = 'Anketteki seçeneklerin düzenlenebilmesini veya sıfırlanabilmesini sağlar. Oyları ve bitiş tarihini değiştirmek için \'Bölüm yönetimi\' iznine sahip olmak gerekir.';
$txt['permissionname_poll_edit_own'] = 'Kendi anketlerini';
$txt['permissionname_poll_edit_any'] = 'Herhangi bir anketi';
$txt['permissionname_poll_lock'] = 'Anketleri kilitleyebilir';
$txt['permissionhelp_poll_lock'] = 'Ankete başka oy verilmesini önlemek için kilitleyebilir.';
$txt['permissionname_poll_lock_own'] = 'Kendi anketlerini';
$txt['permissionname_poll_lock_any'] = 'Herhangi bir anketi';
$txt['permissionname_poll_remove'] = 'Anketleri silebilir';
$txt['permissionhelp_poll_remove'] = 'Kullanıcıların anketi kaldırmasına izin verir.';
$txt['permissionname_poll_remove_own'] = 'Kendi anketlerini';
$txt['permissionname_poll_remove_any'] = 'Herhangi bir anketi';

$txt['permissiongroup_approval'] = 'İleti Moderasyonu';
$txt['permissionname_approve_posts'] = 'Onay bekleyen iletileri onaylayabilir';
$txt['permissionhelp_approve_posts'] = 'Bu izin sayesinde kullanıcı onay bekleyen tüm iletileri onaylayabilir.';

$txt['permissiongroup_notification'] = 'Haberdar Edilme';
$txt['permissionname_mark_any_notify'] = 'Yanıtlardan haberdar edilebilir';
$txt['permissionhelp_mark_any_notify'] = 'Kullanıcılara kayıt oldukları konuya gelen her iletide e-posta gönderilir.';
$txt['permissionname_mark_notify'] = 'Yeni konulardan haberdar edilebilir';
$txt['permissionhelp_mark_notify'] = 'Yeni konularda haber edilme sayesinde her yeni konu açıldığı zaman e-posta yoluyla haber edilirler.';

$txt['permissiongroup_attachment'] = 'Eklentiler';
$txt['permissionname_view_attachments'] = 'Eklentideki dosyaları görebilir';
$txt['permissionhelp_view_attachments'] = 'Eklentiler iletelere eklenen dosyalardır. Bu özellik \'Eklentiler ve avatarlar\' kısmında değişiklik yapılarak ayarlanabilir. Eklentilere direkt ulaşılmadığı için izinlerden istemediğiniz kullanıcılar tarafından indirilmesini engelleyebilirisiniz.';
$txt['permissionname_post_attachment'] = 'İletilerine dosya ekleyebilir';
$txt['permissionhelp_post_attachment'] = 'Eklentiler iletilere eklenen dosyalardır. Tek iletide birden fazla eklenti olabilir.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'İzin Ayarları';
$txt['groups_manage_permissions'] = 'Membergroups allowed to manage permissions';
$txt['permission_settings_submit'] = 'Kaydet';
$txt['permission_by_board_desc'] = 'Here you can set which permissions profile a board uses. You can create new permission profiles from the &quot;Edit Profiles&quot; menu.';
$txt['permission_settings_desc'] = 'Here you can set who has permission to change permissions, as well as how sophisticated the permission system should be.';
$txt['permission_settings_enable_postgroups'] = 'Enable permissions for post count based groups';

$txt['auto_approve_topics'] = 'Post new topics, without requiring approval';
$txt['auto_approve_replies'] = 'Post replies to topics, without requiring approval';

$txt['permissiongroup_media'] = 'Medya';
$txt['permissionname_media_access'] = 'Access Gallery';
$txt['permissionname_media_moderate'] = 'Moderate Gallery';
$txt['permissionname_media_manage'] = 'Administrate Gallery';
$txt['permissionname_media_access_unseen'] = 'Access unseen area';
$txt['permissionname_media_search'] = 'Search in Gallery';
$txt['permissionname_media_add_user_album'] = 'Add Albums';
$txt['permissionname_media_add_playlists'] = 'Add User Playlists';
$txt['permissionname_media_auto_approve_albums'] = 'Auto-approve Own Albums';
$txt['permissionname_media_moderate_own_albums'] = '<abbr title="Delete any comments/items on own albums, and delete own albums.">Moderate own Albums</abbr>';
$txt['permissionname_media_viewprofile'] = 'View anyone\'s Gallery profile';
