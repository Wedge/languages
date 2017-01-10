<?php
// Version: 2.0; ManageBoards

$txt['boards_and_cats'] = 'Kategori ve Bölüm Yönetimi';
$txt['order'] = 'Order';
$txt['full_name'] = 'Tam isim';
$txt['name_on_display'] = 'Görüntülenecek Bölümün İsmi.';
$txt['boards_and_cats_desc'] = 'Kategorileri ve bölümleri buradan düzenleyebilirsiniz. Birden çok moderatörleri listelemek için <em>&quot;kullanıcı-adı&quot;, &quot;kullanıcı-adı&quot;</em> şeklini kullanın. (bunlar rumuz değil, kullanıcı-adı olmalı!)<br> Yeni bir bölüm eklemek için Bölüm Ekle düğmesine tıklayın. Yeni bölümü alt bölüm yapmak için Düzen menüsünden "Alt Bölüm..." seçeneğini seçin. Sürükle bırak yöntemi ile sıralamayı değiştirebilirsiniz';
$txt['parent_members_only'] = 'Normal Üyeler';
$txt['parent_guests_only'] = 'Ziyaretçiler';
$txt['catConfirm'] = 'Do you really want to delete this category?';
$txt['boardConfirm'] = 'Do you really want to delete this board?';

$txt['catEdit'] = 'Edit Category';
$txt['collapse_enable'] = 'Açılıp - Kapatılabilir';
$txt['collapse_desc'] = 'Üyelerin bu kategoriyi açıp kapatabilmelerine izin ver';
$txt['catModify'] = '(modify)';

$txt['mboards_order_after'] = 'Sonra ';
$txt['mboards_order_inside'] = 'İçine ';
$txt['mboards_order_first'] = 'İlk Sırada';

$txt['mboards_new_board'] = 'Bölüm Ekle';
$txt['mboards_new_cat_name'] = 'Yeni Kategori';
$txt['mboards_add_cat_button'] = 'Kategori Ekle';
$txt['mboards_new_board_name'] = 'Yeni Bölüm';

$txt['mboards_name'] = 'İsim';
$txt['mboards_modify'] = 'değiştir';
$txt['mboards_permissions'] = 'izinler';
// Don't use entities in the below string.
$txt['mboards_permissions_confirm'] = 'Bölümü yerel izinler kullanacak şekilde düzenlemek istediğinize emin misiniz?';

$txt['mboards_delete_cat'] = 'Kategoriyi Sil';
$txt['mboards_delete_board'] = 'Bölümü Sil';

$txt['mboards_delete_cat_contains'] = 'Bu kategoriyi silerseniz, kategori içerisinde bulunan bölümler, konular, iletiler ve ekleriyle birlikte silinecektir.';
$txt['mboards_delete_option1'] = 'Kategoriyi ve içindeki tüm bölümleri sil.';
$txt['mboards_delete_option2'] = 'Kategoriyi sil ve bölümleri taşı';
$txt['mboards_delete_board_contains'] = 'Bu bölümü silerseniz, bölüm içerisinde bulunan tüm alt bölümler, konular, iletiler ve ekleriyle birlikte silinecektir.';
$txt['mboards_delete_board_option1'] = 'Bölümü sil ve tüm alt bölümleri kategorinin içine taşı.';
$txt['mboards_delete_board_option2'] = 'Bölümü sil ve tüm alt bölümleri şu bölüme taşı';
$txt['mboards_delete_what_do'] = 'Lütfen silmek istediğiniz bölümleri seçin';
$txt['mboards_delete_confirm'] = 'Onayla';
$txt['mboards_delete_cancel'] = 'İptal';

$txt['mboards_category'] = 'Kategori';
$txt['mboards_description'] = 'Tanım';
$txt['mboards_description_desc'] = 'Bölüm hakkında kısa bir açıklama yazın.';
$txt['mboards_groups'] = 'İzin verilen Gruplar';
$txt['mboards_groups_desc'] = 'Bu bölümü görebilen gruplar.<br /><em>Not: Üye\'nin bulunduğu bir grup bile bölümü görebiliyorsa o kullanıcının bu bölüme erişimi olacaktır</em>';
$txt['mboards_groups_regular_members'] = 'Bu grup hiç bir birincil grubu olmayan üyeleri içerir.';
$txt['mboards_groups_post_group'] = 'Bu grup ileti sayısına bağlı bir gruptur.';

$txt['mboards_never'] = 'Asla';
$txt['mboards_view_board'] = 'Who can see this board';
$txt['mboards_enter_board'] = 'Who can enter this board';
$txt['mboards_groups_view_enter_same'] = 'All groups who can see a board can enter it as well';
$txt['mboards_groups_need_deny_perm'] = 'I want to deny a group from this board';
$txt['mboards_groups_everyone'] = 'Herkes';
$txt['mboards_groups_everyone_desc'] = 'Use this option to quickly select all the groups below.';
$txt['mboards_offlimits_msg'] = 'Message to those who can see this board but not enter it:';

$txt['mboards_moderators'] = 'Moderatörler';
$txt['mboards_moderators_desc'] = 'Bölümde ayrıcalıklı izni olan üyeler. Not adminler bu listede yer alması gerekmez';
$txt['mboards_count_posts'] = 'Gönderilen İletileri Say';
$txt['mboards_count_posts_desc'] = 'Gönderilen iletilerin sayısını kaydeder.';
$txt['mboards_unchanged'] = 'Değiştirilmemiş';
$txt['mboards_skin'] = 'Bölüm Teması';
$txt['mboards_skin_desc'] = 'Bu bölüme giren üyenin forum görünümü otomatik olarak değişir.';
$txt['mboards_skin_mobile'] = 'Board Mobile Skin';
$txt['mboards_skin_mobile_desc'] = 'Same, but when accessed from a mobile device.';
$txt['mboards_skin_default'] = '(Varsayılanı kullan)';
$txt['mboards_override_skin'] = 'Üyelerin Temasını Yoksay';
$txt['mboards_override_skin_desc'] = 'Üye farklı bir tema seçmiş olsa bile bu tema kullanılır.';
$txt['mboards_language'] = 'Board Language';
$txt['mboards_language_desc'] = 'This allows you to set the default language of the forum (such as the text on buttons) inside only this board. Note that this is only a default, if a user picks a language preference, their preference will override this setting.';

$txt['mboards_type'] = 'Board Type';
$txt['mboards_type_desc'] = 'This changes the way the board\'s homepage is presented. Board shows a tabular list of topics, sorted by latest reply. Blog shows a list of posts sorted by date, regardless of comment dates.';

$txt['mboards_redirect'] = 'Bir web adresine yönlendir';
$txt['mboards_redirect_desc'] = 'Bu seçeneği etkinleştirirseniz bu bölüme tıklayan biri başka bir web adresine yönlendirilecektir.';
$txt['mboards_redirect_url'] = 'Kullanıcıların yönlendirileceği adres';
$txt['mboards_redirect_url_desc'] = 'Örneğin: &quot;http://wedge.org&quot;.';
$txt['mboards_redirect_newtab'] = 'Open the new address in a new tab';
$txt['mboards_redirect_reset'] = 'Yönlendirme sayımını sıfırla';
$txt['mboards_redirect_reset_desc'] = 'Bu seçenek yönlendirme sayımını sıfırlayacaktır.';
$txt['mboards_current_redirects'] = 'Şu anda: %1$s';
$txt['mboards_redirect_disabled'] = 'Not: Bu seçeneğin etkinleştirilebilmesi için bölüm boş olmalıdır.';
$txt['mboards_redirect_disabled_recycle'] = 'Not: Yönlendirilmiş bir bölümü çöp kutusu olarak tanımlayamazsınız. ';

$txt['mboards_order_before'] = 'Önce';
$txt['mboards_order_child_of'] = 'Alt Bölüm';
$txt['mboards_order_in_category'] = 'Kategoride';
$txt['mboards_current_position'] = 'Şimdiki Konum';
$txt['no_valid_parent'] = '%1$s bir üst bölüm içermiyor. Bu bölümü kullanabilmek için \'Hataları bul ve düzelt\' fonksiyonunu kullanın.';

$txt['mboards_recycle_disabled_delete'] = 'Not: Bu bölümü silebilmek için öncelikle başka bir bölümü silinen konuların taşınacağı bölüm olarak seçmelisiniz veya silinen konuların taşınmasını iptal etmelisiniz.';

$txt['mboards_settings_desc'] = 'Genel bölüm ve kategori ayarlarını düzenle.';
$txt['groups_manage_boards'] = 'Bölüm ve kategorileri yönetmeye yetkili kullanıcı grupları';
$txt['recycle_enable'] = 'Silinmiş konuların bir bölümde toplanmasını etkinleştir';
$txt['recycle_board'] = 'Silinmiş konuların gönderileceği bölüm';
$txt['recycle_board_unselected_notice'] = 'Konuların geri dönüşümünü, gönderilecekleri bir bölüm belirtmeden aktif ettiniz. Bölüm seçmezseniz geri dönüşüm çalışmayacaktır.';
$txt['countChildPosts'] = 'Alt bölümün iletilerinin sayısını ana bölümünkilere ekle';
$txt['ignorable_boards'] = 'Which boards can users ignore?';
$txt['display_flags'] = 'Display flags on the board index?';
$txt['flags_none'] = 'No flags';
$txt['flags_specified'] = 'Flags for boards that have a language set';
$txt['flags_all'] = 'Flags for all boards';
$txt['modcenter_category'] = 'Position of the Moderation category';
$txt['modcenter_category_first'] = 'As the first category';
$txt['modcenter_category_after'] = 'After the "%1$s" category';

$txt['mboards_select_destination'] = 'Select destination for board \'<strong>%1$s</strong>\'';
$txt['mboards_cancel_moving'] = 'Cancel moving';
$txt['mboards_move'] = 'move';

$txt['mboards_no_cats'] = 'There are currently no categories or boards configured.';
