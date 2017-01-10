<?php
// Version: 2.0; ManagePaid

// Symbols.
$txt['usd_symbol'] = '$%1.2f';
$txt['eur_symbol'] = '%1.2f €';
$txt['gbp_symbol'] = '£ %1.2f';

$txt['usd'] = 'USD ($)';
$txt['eur'] = 'EURO (€)';
$txt['gbp'] = 'GBP (£)';
$txt['other'] = 'Diğer';

$txt['paid_username'] = 'Kullanıcı Adı';

$txt['paid_subscriptions_desc'] = 'Bu bölümü kullanarak forumunuza ücretli abonelikler ekleyebilir, var olanları düzenleyebilirsiniz.';
$txt['paid_subs_settings'] = 'Seçenekler';
$txt['paid_subs_settings_desc'] = 'Bu bölümü kullanarak ödeme seçeneklerini belirleyebilirsiniz.';
$txt['paid_subs_view_desc'] = 'Bu bölümü kullanarak tüm aboneliklerinizi görüntüleyebilirsiniz.';

// Setting type strings.
$txt['paid_enabled'] = 'Ücretli Abonelikleri Etkinleştir';
$txt['paid_enabled_desc'] = 'Ücretli aboneliklerin kullanılabilmesi için bu seçeneğin aktif olması gerekir.';
$txt['paid_email'] = 'Bilgilendirilme E-Posta\'ları Gönder';
$txt['paid_email_desc'] = 'Yeni bir abonelik olduğunda yöneticiyi e-posta ile bilgilendir.';
$txt['paid_email_to'] = 'Diğer E-Posta Adresleri';
$txt['paid_email_to_desc'] = 'Abonelikler hakkında bilgilendirilecek yönetici dışındaki e-posta adresleri.';
$txt['paidsubs_test'] = 'Deneme Mod\'unu Etkinleştir';
$txt['paidsubs_test_desc'] = 'Bu seçenek ücretli abonelikler için &quot;deneme&quot; modunu etkinleştirir. Bu sayede gerçekte etkili olmayan deneme amaçlı ödemeler yapılabilir, bu seçeneğin ne olduğunu kavrayamadıysanız lütfen etkinleştirmeyiniz!';
$txt['paidsubs_test_confirm'] = 'Deneme modunu aktifleştirmek istediğinizden emin misiniz?';
$txt['paid_email_no'] = 'Bilgilendirme gönderme';
$txt['paid_email_error'] = 'Abonelik başarısız olursa bilgilendir';
$txt['paid_email_all'] = 'Tüm abonelik değişikliklerinde bilgilendirme gönder';
$txt['paid_currency'] = 'Döviz Kuru Seç';
$txt['paid_currency_code'] = 'Kur kısaltması';
$txt['paid_currency_code_desc'] = 'Ödeme arabirimleri tarafından kullanılan kısaltma';
$txt['paid_currency_symbol'] = 'Ödeme metotu tarafından kullanılan sembol';
$txt['paid_currency_symbol_desc'] = 'Rakamın bulunduğu yeri belirtmek için \'%1.2f\' kullanınız.<br /> Örn: $%1.2f, %1.2fDM vs.';
$txt['paid_allowed_groups'] = 'Groups allowed to purchase this subscription.';
$txt['paid_allowed_groups_desc'] = 'This allows you to pick groups allowed to purchase this subscription, such as special subscriptions for resubscribers.';

// Payment-processor specific strings
$txt['paypal_email'] = 'Paypal e-posta adresi';
$txt['paypal_email_desc'] = 'Paypal kullanmak istemiyorsanız boş bırakınız.';
$txt['worldpay_id'] = 'WorldPay Yükleme ID\'si';
$txt['worldpay_id_desc'] = 'Bu Install ID\'si WorldPay tarafından oluşturulur. WorldPay kullanmıyorsanız boş bırakınız.';
$txt['worldpay_password'] = 'WorldPay CallBack Şifresi';
$txt['worldpay_password_desc'] = 'Bu şifrenin özgün ve WorldPay yönetici şifrenizle aynı olmadığından emin olunuz.!';
$txt['authorize_id'] = 'Authorize.net Yükleme ID\'si';
$txt['authorize_id_desc'] = 'Authorize.net tarafından oluşturulan Install ID\'dir. Authorize.net kullanmıyorsanız boş bırakınız.';
$txt['authorize_transid'] = 'Authorize.net İşlem ID\'si';
$txt['2co_id'] = '2co.com Yükleme ID\'si';
$txt['2co_id_desc'] = '2co.com tarafından oluşturulan Install ID\'dir. 2co.com kullanmıyorsanız boş bırakınız.';
$txt['2co_password'] = '2co.com Gizli Kelimesi';
$txt['2co_password_desc'] = '2checkout gizli kelimeniz.';
$txt['nochex_email'] = 'Nochex e-posta adresi';
$txt['nochex_email_desc'] = 'Nochex\'te bulunan hesaba ait e-posta adresi. Nochex kullanmıyorsanız boş bırakınız';
$txt['paid_settings_save'] = 'Kaydet';

$txt['paid_note'] = '<strong class="alert">Not:</strong><br>Ücretli üyeliklerin üyeler için otomatik ayarlanması için, 
    Ödemeler için kesinlikle bir geri dönüş noktası ( URL ) oluşturmalısınız. Tüm ödeme çeşitleri için, bu dönüş URLsi şu şekilde ayarlanmalıdır:<br><br>
	&nbsp;&nbsp;&bull;&nbsp;&nbsp;<strong>{board_url}/subscriptions.php</strong><br><br>
	Paypal için direkt ayarları <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-ipn-notify" target="_blank">buraya</a> tıklayarak yapabilirsiniz.<br>
	Diğer methodlar için (Eğer yüklenmişse) genelde müşteri panelinizde, Genellikle &quot;Return URL&quot; veya &quot;Callback URL&quot; altında yer alır.';

// View subscription strings.
$txt['paid_name'] = 'Adı';
$txt['paid_status'] = 'Durumu';
$txt['paid_cost'] = 'Ücreti';
$txt['paid_duration'] = 'Süresi';
$txt['paid_active'] = 'Etkin';
$txt['paid_pending'] = 'Ödeme Bekliyor';
$txt['paid_finished'] = 'Tamamlanmış';
$txt['paid_total'] = 'Toplam';
$txt['paid_is_active'] = 'Aktifleştirilmiş';
$txt['paid_none_yet'] = 'Henüz herhangi bir ödeme belirlemediniz.';
$txt['paid_payments_pending'] = 'Ödeme Bekliyor';
$txt['paid_order'] = 'Sıra';

// Add/Edit/Delete subscription.
$txt['paid_add_subscription'] = 'Abonelik Ekle';
$txt['paid_edit_subscription'] = 'Abonelik Düzenle';
$txt['paid_delete_subscription'] = 'Abonelik Kaldır';

$txt['paid_mod_name'] = 'Abonelik Adı';
$txt['paid_mod_desc'] = 'Tanım';
$txt['paid_mod_reminder'] = 'Hatırlatma E-Posta\'sı Gönder';
$txt['paid_mod_reminder_desc'] = 'Abonelik sona ermeden kaç gün önce üyeye e-posta gönderileceğini belirtir.';
$txt['paid_mod_email'] = 'Tamamlandıktan Sonra Gönderilecek E-Posta';
$txt['paid_mod_email_desc'] = 'Ad için {NAME}, forum adı için {FORUM} kullanılabilir. E-posta başlığı ilk satırda olmalıdır. E-posta gönderilmesini istemiyorsanız boş bırakınız.';
$txt['paid_mod_cost_usd'] = 'Ücret (USD)';
$txt['paid_mod_cost_eur'] = 'Ücret (EUR)';
$txt['paid_mod_cost_gbp'] = 'Ücret (GBP)';
$txt['paid_mod_cost_blank'] = 'Kur seçeneği sağlamamak için boş bırakınız.';
$txt['paid_mod_span'] = 'Aboneliğin Süresi';
$txt['paid_mod_span_lifetime'] = 'Lifetime';
$txt['paid_mod_span_lifetime_expires'] = 'Never (lifetime)';
$txt['paid_mod_span_days'] = 'Gün';
$txt['paid_mod_span_weeks'] = 'Hafta';
$txt['paid_mod_span_months'] = 'Ay';
$txt['paid_mod_span_years'] = 'Yıl';
$txt['paid_mod_active'] = 'Aktif';
$txt['paid_mod_active_desc'] = 'Üyelerin katılabilmesi için bir aboneliğin aktif olması gerekir.';
$txt['paid_mod_prim_group'] = 'Abonelikten Sonraki Birincil Grup';
$txt['paid_mod_prim_group_desc'] = 'Üye abone olduğunda dahil olacağı birinci üye grubu.';
$txt['paid_mod_add_groups'] = 'Abonelikten Sonraki Ek Gruplar';
$txt['paid_mod_add_groups_desc'] = 'Üye abone olduğunda dahil olacağı ek üye grupları.';
$txt['paid_mod_no_group'] = 'Değiştirme';
$txt['paid_mod_edit_note'] = 'Bu gruba ait aboneler olduğu için düzenlenemeyecektir!';
$txt['paid_mod_delete_warning'] = '<strong>UYARI</strong><br /><br />Eğer bu aboneliği kaldırırsanız, bu abonelik sayesinde edinilmiş tüm yetkilerde kaybedilecektir. Eğer bunu yapmak istediğinizden gerçekten emin değilseniz, abonelikleri silmeniz yerine devre dışı bırakmanız önerilir.<br />';
$txt['paid_mod_repeatable'] = 'Üyelerin abonelikleri yenilemelerine izin ver';
$txt['paid_mod_allow_partial'] = 'Parça aboneliklere izin ver';
$txt['paid_mod_allow_partial_desc'] = 'Bu seçenek etkinleştirildiğinde üyeler ödedikleri miktar süresi boyunca aboneliğin sağladığı ayrıcalıklardan faydalanabilirler.';
$txt['paid_mod_fixed_price'] = 'Belirli bir miktar ve süre için abonelik';
$txt['paid_mod_flexible_price'] = 'Sipariş verilen süreye göre fiyat değişir';
$txt['paid_mod_price_breakdown'] = 'Toplu Fiyat İndirimi';
$txt['paid_mod_price_breakdown_desc'] = 'Burada üye olunacak süreye göre uygulanacak fiyat indirimini tanımlayın. Örneğin aylık üyelik 12USD olabilirken senelik üyelik 100USD olarak tanımlanabilir.';
$txt['flexible'] = 'Toplu İndirim';
$txt['paid_mod_lifetime_price'] = 'Subscription is a one-off payment';

$txt['paid_per_day'] = 'Günlük Ücret';
$txt['paid_per_week'] = 'Haftalık Ücret';
$txt['paid_per_month'] = 'Aylık Ücret';
$txt['paid_per_year'] = 'Yıllık Ücret';
$txt['day'] = 'Gün';
$txt['week'] = 'Hafta';
$txt['month'] = 'Ay';
$txt['year'] = 'Yıl';
$txt['hour'] = 'Saat';
$txt['minute'] = 'Dakika';

// View subscribed users.
$txt['viewing_users_subscribed'] = 'Üyeler Görüntüleniyor';
$txt['view_users_subscribed'] = '&quot;%1$s&quot; abonesi üyeler görüntüleniyor';
$txt['no_subscribers'] = 'Bu aboneliğe abone hiçbir üye bulunamamıştır!';
$txt['add_subscriber'] = 'Yeni Abone Ekle';
$txt['edit_subscriber'] = 'Aboneyi Düzenle';
$txt['delete_selected'] = 'Seçilileri Kaldır';
$txt['complete_selected'] = 'Seçilileri Tamamla';

$txt['delete_are_sure'] = 'Tüm seçili abonelik kayıtlarını kaldırmak istediğinizden emin misiniz?';
$txt['complete_are_sure'] = 'Seçili abonelikleri tamamlamak istediğinizden emin misiniz?';

$txt['start_date'] = 'Başlangıç Tarihi';
$txt['end_date'] = 'Bitiş Tarihi';
$txt['start_date_and_time'] = 'Başlangıç Tarihi ve Saati';
$txt['end_date_and_time'] = 'Bitiş Tarihi ve Saati';
$txt['edit'] = 'DÜZENLE';
$txt['one_username'] = 'Lütfen bir kullanıcı adı tanımlayınız.';
$txt['error_member_not_found'] = 'Girmiş olduğunuz kullanıcı bulunamadı';
$txt['member_already_subscribed'] = 'Bu kullanıcı zaten bu aboneliğe sahiptir, lütfen tekrar deneyiniz.';
$txt['search_sub'] = 'Kullanıcı bul';

// Make payment.
$txt['paid_confirm_payment'] = 'Ödemeyi Onayla';
$txt['paid_confirm_desc'] = 'Ödemeye devam etmek için lütfen aşağıdaki detayları kontrol ediniz ve &quot;Sipariş Ver&quot; butonuna tıklayınız.';
$txt['paypal'] = 'PayPal';
$txt['paid_confirm_paypal'] = '<a href="http://www.paypal.com">PayPal</a> kullanarak ödeme yapmak için aşağıdaki butona tıklayınız. Ödeme için PayPal sitesine yönlendirileceksiniz.';
$txt['paid_paypal_order'] = 'PayPal İle Sipariş Ver';
$txt['worldpay'] = 'WorldPay';
$txt['paid_confirm_worldpay'] = '<a href="http://www.worldpay.com">WorldPay</a> kullanarak ödeme yapmak için aşağıdaki butona tıklayınız. Ödeme için WorldPay sitesine yönlendirileceksiniz.';
$txt['paid_worldpay_order'] = 'WorldPay İle Sipariş Ver';
$txt['nochex'] = 'Nochex';
$txt['paid_confirm_nochex'] = '<a href="http://www.nochex.com">Nochex</a> kullanarak ödeme yapmak için aşağıdaki butona tıklayınız. Ödeme için Nochex sitesine yönlendirileceksiniz.';
$txt['paid_nochex_order'] = 'Nochex İle Sipariş Ver';
$txt['authorize'] = 'Authorize.Net ';
$txt['paid_confirm_authorize'] = '<a href="http://www.authorize.net">Authorize.Net</a> kullanarak ödeme yapmak için aşağıdaki butona tıklayınız. Ödeme için Authorize.Net sitesine yönlendirileceksiniz.';
$txt['paid_authorize_order'] = 'Authorize.Net İle Sipariş Ver';
$txt['2co'] = '2checkout';
$txt['paid_confirm_2co'] = '<a href="http://www.2com.com">2co.com</a> kullanarak ödeme yapmak için aşağıdaki butona tıklayınız. Ödeme için 2co.com sitesine yönlendirileceksiniz.';
$txt['paid_2co_order'] = '2co.com İle Sipariş Ver';
$txt['paid_done'] = 'Ödeme Tamamlandı';
$txt['paid_done_desc'] = 'Ödeme yaptığınız için teşekkür ederiz. Para transferi onaylandıktan sonra aboneliğiniz geçerli olacaktır.';
$txt['paid_sub_return'] = 'Ödemelere Geri Dön';
$txt['paid_current_desc'] = 'Aşağıda var olan tüm aboneliklerinizi görüntüleyebilirsiniz. Bir aboneliği genişletmek için aşağıdan bu aboneliği seçebilirsiniz.';
$txt['paid_admin_add'] = 'Bu Aboneliği Ekle';

$txt['paid_not_set_currency'] = 'You have not setup your currency yet. Please do so from the <a href="%1$s">Settings</a> section before continuing.';
$txt['paid_no_cost_value'] = 'You must enter a cost and subscription length.';
$txt['paid_all_freq_blank'] = 'You must enter a cost for at least one of the four durations.';

// Some error strings.
$txt['paid_no_data'] = 'Script\'e geçerli bir veri gönderilemedi.';

$txt['paypal_could_not_connect'] = 'PayPal sunucusuna bağlanılamadı';
$txt['paypal_unverified'] = 'PayPal: unverified transaction.';
$txt['paypal_incorrect_email'] = 'PayPal: incorrect paypal_email value.';
$txt['paypal_invalid_currency'] = 'PayPal: invalid currency.';
$txt['paypal_no_item'] = 'PayPal: no item was returned.';

$txt['paid_sub_not_active'] = 'Bu abonelik yeni üyelere kapalıdır!';
$txt['paid_disabled'] = 'Ücretli abonelikler şu anda devre dışıdır!';
$txt['paid_unknown_transaction_type'] = 'Bilinmeyen Ücretli Abonelik transfer tipi.';
$txt['paid_empty_member'] = 'Ücretli abonelikler üye ID\'sini tanımlayamadı';
$txt['paid_could_not_find_member'] = 'Ücretli abonelikler %1$d ID\\sine sahip üyeyi bulamadı';
$txt['paid_count_not_find_subscription'] = 'Ücretli abonelikler %1$s ID\'sine sahip, %2$s ID\'sine sahip aboneliği bulamadı';
$txt['paid_count_not_find_subscription_log'] = 'Ücretli abonelikler %1$s ID\'sine sahip, %2$s ID\'sine sahip abonelik kayıt girdisini bulamadı';
$txt['paid_count_not_find_outstanding_payment'] = 'Üye için %1$s ID\'sine sahip, %2$s ID\'sine sahip bekleyen ödeme girdisi bulunamadı';
$txt['paid_admin_not_setup_gateway'] = 'Üzgünüz, fakat Admin ücretli aboneliklerle ilgili ayarları bitirmemiştir. Lütfen daha sonra tekrar kontrol edin.';
$txt['paid_make_recurring'] = 'Bunu tekrarlayan bir ödeme yap';

$txt['subscriptions'] = 'Abonelikler';
$txt['subscription'] = 'Abonelik';
$txt['paid_subs_desc'] = 'Bu forum\'da var olan tüm aboneliklerin listesi aşağıdadır.';
$txt['paid_subs_none'] = 'Herhangi bir ücretli abonelik bulunmamaktadır!';
$txt['paid_subs_admin_override'] = 'This user is not in any of the groups permitted to order this subscription.';

$txt['paid_current'] = 'Varolan Abonelikler';
$txt['pending_payments'] = 'Bekleyen Ödemeler';
$txt['pending_payments_desc'] = 'Bu üye aşağıdaki ödemeleri yapmayı denemiş fakat forum herhangi bir onay iletisi almamıştır. Eğer ödemenin gerçekleştiğine eminseniz &quot;kabul et&quot; bağlantısına tıklayabilirsiniz. Ayrıca &quot;Kaldır&quot; bağlantısına tıklayarak bu ödeme ile ilgili tüm kayıtları kaldırabilirsiniz.';
$txt['pending_payments_value'] = 'Değer';
$txt['pending_payments_accept'] = 'Kabul Et';
