<?php

$lang_settings = array
(
	'select_forever' => "永久",
	'text_yes' => "是",
	'text_no' => "否",
	'text_website_settings' => "網站設定",
	'text_configuration_file_saving_note' => "在儲存設定前，請確保配置檔案和其目錄的存取許可權已正確配置。",
	'head_save_main_settings' => "儲存主要設定",
	'std_message' => "資訊",
	'std_click' => "點擊",
	'std_here' => "這裡",
	'std_to_go_back' => "傳回。",
	'head_save_basic_settings' => "儲存基礎設定",
	'head_save_code_settings' => "儲存程式碼設定",
	'head_save_bonus_settings' => "儲存魔力值設定",
	'head_save_account_settings' => "儲存賬號設定",
	'head_save_torrent_settings' => "儲存種子設定",
	'head_save_smtp_settings' => "儲存SMTP設定",
	'head_save_security_settings' => "儲存安全設定",
	'head_save_authority_settings' => "儲存許可權設定",
	'head_save_tweak_settings' => "儲存次要設定",
	'head_save_bot_settings' => "儲存機器人設定",
	'head_bot_settings' => "機器人設定",
	'head_tweak_settings' => "次要設定",
	'row_save_user_location' => "儲存用戶位置",
	'text_save_user_location_note' => "預設'否'。儲存用戶最近存取位置。",
	'row_log_user_ips' => "記錄用戶IP位址",
	'text_store_user_ips_note' => "預設'是'。當用戶改變IP位址時做記錄。",
	'row_kps_enabled' => "開啟魔力值系統",
	'text_enabled' => "開啟",
	'text_disabled_but_save' => "關閉但仍記錄數值",
	'text_disabled_no_save' => "完全關閉",
	'text_kps_note' => "預設‘開啟’。開啟或關閉魔力值系統，是否記錄數值。",
	'row_tracker_founded_date' => "網站創立時間",
	'text_tracker_founded_date_note' => "時間格式為'年年年年-月月-日日'，將它設成網站創立的時間。",
	'row_save_settings' => "儲存設定",
	'submit_save_settings' => "儲存設定! (只需點擊一次)",
	'head_smtp_settings' => "SMTP設定",
	'row_mail_function_type' => "郵件函數類別",
	'head_security_settings' => "安全設定",
	'row_enable_ssl' => "使用SSL（網頁）",
	'row_enable_ssl_tracker' => "使用SSL（Tracker）",
	'text_optional' => "可選（允許用戶選取）",
	'text_ssl_note' => "預設'否'。你的HTTP伺服器需要做其餘的配置才能支援SSL。另外，你需要一個證書（從證書籤發機搆申請或自簽名）。",
	'row_enable_image_verification' => "開啟圖片驗證碼",
	'text_image_verification_note' => "預設'否'。用戶在註冊/登入/找回密碼過程中需要填寫驗證碼",
	'row_allow_email_change' => "允許用戶改變郵箱",
	'text_email_change_note' => "預設'否'。設為'否'將禁止用戶改變其郵箱位址。",
	'row_cheater_detection_level' => "作弊者偵測級別",
	'select_none' => "無",
	'select_conservative' => "保守",
	'select_normal' => "正常",
	'select_strict' => "嚴格",
	'select_paranoid' => "多疑",
	'text_cheater_detection_level_note' => "預設'正常'。請將它設為最適合你的網站的級別。級別越嚴格，越降低同伴彙報速度。",
	'text_never_suspect' => "永遠不懷疑",
	'text_or_above' => "及以上等級的用戶，即對他們不做偵測。預設",
	'row_max_ips' => "最多允許IP數",
	'text_max_ips_note' => "相同IP位址最大允許的註冊數。",
	'row_max_login_attemps' => "最大登入嘗試",
	'text_max_login_attemps_note' => "超過這個限制的IP位址將被禁用。",
	'head_authority_settings' => "許可權設定",
	'row_default_class' => "預設等級",
	'text_default_user_class' => "預設用戶等級：",
	'text_default' => " 預設為",
	'text_default_class_note' => "。註冊時獲得的等級。",
	'row_staff_member' => "管理組成員",
	'text_minimum_class' => "最低允許等級：",
	'text_staff_member_note' => "。被認為是管理組成員的等級，如可以檢視管理組郵箱。",
	'row_news_management' => "管理最近訊息",
	'text_news_management_note' => "。添加、編輯、移除最近訊息。",
	'row_post_funbox_item' => "發布趣味盒內容",
	'text_post_funbox_item_note' => "。允許發布新的趣味盒內容及編輯自己發布的趣味盒內容。",
	'row_funbox_management' => "管理趣味盒",
	'text_funbox_management_note' => "。編輯、移除、禁止任何人發布的趣味盒內容。",
	'row_shoutbox_management' => "管理群聊區",
	'text_shoutbox_management_note' => "。移除群聊區和救助區的資訊。",
	'row_poll_management' => "管理投票",
	'text_poll_management_note' => "。添加、編輯、移除投票。",
	'row_apply_for_links' => "申請鏈結",
	'text_apply_for_links_note' => "。申請在首頁的友情鏈結。",
	'row_link_management' => "管理友情鏈結",
	'text_link_management_note' => "。添加、編輯、移除友情鏈結。 ",
	'row_forum_post_management' => "管理論壇帖子",
	'text_forum_post_management_note' => "。編輯、移除、移動、置頂、鎖定論壇帖子。",
	'row_comment_management' => "管理評論",
	'text_comment_management_note' => "。編輯、移除種子和候選的評論。",
	'row_forum_management' => "管理論壇版塊",
	'text_forum_management_note' => "。添加、編輯、移除、移動論壇版塊。",
	'row_view_userlist' => "檢視用戶清單",
	'text_view_userlist_note' => "。檢視、搜索用戶清單。",
	'row_torrent_management' => "管理種子",
	'text_torrent_management_note' => "。編輯、移除種子，但無法將種子設為置頂或促銷。",
	'row_torrent_sticky' => "設定種子置頂",
	'text_torrent_sticky_note' => "。將種子設為置頂",
	'row_torrent_on_promotion' => "設定種子為促銷",
	'text_torrent_promotion_note' => "。將種子設為促銷。",
	'row_ask_for_reseed' => "要求續種",
	'text_ask_for_reseed_note' => "。當種子斷種時要求續種。",
	'row_view_nfo' => "檢視NFO",
	'text_view_nfo_note' => "。檢視NFO檔案。",
	'row_view_torrent_structure' => "檢視種子架構",
	'text_view_torrent_structure_note' => "。檢視種子檔案的架構。",
	'row_send_invite' => "傳送邀請",
	'text_send_invite_note' => "。傳送加入網站的邀請函給其他人。",
	'row_view_history' => "檢視曆史記錄",
	'text_view_history_note' => "。檢視其他用戶的評論和帖子曆史記錄。",
	'row_view_topten' => "檢視排行榜",
	'text_view_topten_note' => "。檢視排行榜。",
	'row_view_general_log' => "檢視一般日誌",
	'text_view_general_log_note' => "。檢視一般日誌，無法檢視機密日誌。",
	'row_view_confidential_log' => "檢視機密日誌",
	'text_view_confidential_log_note' => "。檢視機密日誌，如網站設定變更。",
	'row_view_user_confidential' => "檢視用戶機密檔案",
	'text_view_user_confidential_note' => "。檢視用戶的機密檔案，如IP位址，郵箱位址。",
	'row_view_user_torrent' => "檢視用戶種子曆史記錄",
	'text_view_user_torrent_note' => "。檢視用戶的種子曆史記錄，如下載種子的曆史記錄。<br />只有用戶的隱私等級沒有設為’強‘時才生效。",
	'row_general_profile_management' => "管理用戶基本檔案",
	'text_general_profile_management_note' => "。改變用戶的基本檔案，但無法改變其中重要的項目，如郵箱位址、用戶名、上傳量、下載量、魔力值數。",
	'row_crucial_profile_management' => "管理用戶重要檔案資訊",
	'text_crucial_profile_management_note' => "。改變用戶所有檔案資訊，除了捐贈資訊外（只有",
	'text_can_manage_donation' => "能管理捐贈資訊）。",
	'row_upload_subtitle' => "上傳字幕",
	'text_upload_subtitle_note' => "。上傳種子對應的字幕。",
	'row_delete_own_subtitle' => "移除自己的字幕",
	'text_delete_own_subtitle_note' => "。移除自己上傳的字幕。",
	'row_subtitle_management' => "管理字幕",
	'text_subtitle_management' => "。移除任何字幕。",
	'row_update_external_info' => "更新外部資訊",
	'text_update_external_info_note' => "。更新外部資訊，如IMDb資訊。",
	'row_view_anonymous' => "檢視匿名者",
	'text_view_anonymous_note' => "。檢視匿名者的真實身份。",
	'row_be_anonymous' => "作為匿名",
	'text_be_anonymous_note' => "。在發布種子、上傳字幕時選取匿名。",
	'row_add_offer' => "添加候選",
	'text_add_offer_note' => "。允許發起候選。",
	'row_offer_management' => "管理候選",
	'text_offer_management_note' => "。通過、編輯、移除候選。",
	'row_upload_torrent' => "發布種子",
	'text_upload_torrent_note' => "。發布種子到種子區。",
	'row_upload_special_torrent' => "發布種子至特別區",
	'text_upload_special_torrent_note' => "。發布種子到特別區。",
	'row_move_torrent' => "移動種子",
	'text_move_torrent_note' => "。將種子在各區間移動。",
	'row_chronicle_management' => "管理史冊",
	'text_chronicle_management_note' => "。添加、編輯、移除史冊內容。",
	'row_view_invite' => "檢視邀請",
	'text_view_invite_note' => "。檢視用戶的邀請曆史記錄。",
	'row_buy_invites' => "購買邀請",
	'text_buy_invites_note' => "。允許在魔力值中心購買邀請。",
	'row_see_banned_torrents' => "檢視被禁止的種子",
	'text_see_banned_torrents_note' => "。檢視、下載被禁止的種子。",
	'row_vote_against_offers' => "對候選投反對票",
	'text_vote_against_offers_note' => "。對候選投反對票。",
	'row_allow_userbar' => "允許個性條",
	'text_allow_userbar_note' => "。允許用戶使用個性條。",
	'head_basic_settings' => "基礎設定",
	'row_site_name' => "網站名",
	'text_site_name_note' => "你的網站的名字。",
	'row_base_url' => "基礎URL",
	'text_it_should_be' => "應該設為",
	'text_base_url_note' => "。<b>在末尾<u>不要</u>添加斜杠(/)！</b>",
	'row_announce_url' => "Tracker位址",
	'row_mysql_host' => "MySQL主機",
	'text_mysql_host_note' => "請填寫你的MySQL主機位址。如果MySQL和HTTP伺服器執行在同一台伺服器上，請填寫'localhost'。否則請填寫執行MySQL的主機的IP位址。",
	'row_mysql_user' => "MySQL用戶名",
	'text_mysql_user_note' => "請填寫你的MySQL用戶名。MySQL預設用戶名是'root'。然而，基于安全考慮，建議你為此網站的資料程式庫另外建立一個用戶。",
	'row_mysql_password' => "MySQL密碼",
	'text_mysql_password_note' => "<b>基于安全考慮，目前MySQL用戶密碼未察看在此。</b>如果你要對基礎設定做修改，<font color=\"red\"><b>每次都必須填寫</b></font>MySQL密碼。",
	'row_mysql_database_name' => "MySQL資料程式庫名",
	'text_mysql_database_name_note' => "請填寫你的網站的MySQL資料程式庫名字。",
	'head_code_settings' => "程式碼設定",
	'row_main_version' => "主版本",
	'text_main_version_note' => "程式碼的主版本。",
	'row_sub_version' => "次版本",
	'text_sub_version_note' => "程式碼的次版本",
	'row_release_date' => "發布時間",
	'text_release_date_note' => "時間格式為'年年年年-月月-日日'。程式碼發布的時間。",
	'row_authorize_to' => "被授權者",
	'text_authorize_to_note' => "被授權的網站或個人的名字。",
	'row_authorization_type' => "授權類別",
	'text_free' => "免費授權",
	'text_commercial' => "商業授權",
	'row_web_site' => "網站",
	'text_web_site_note' => "",
	'text_web_site_note_two' => "的網站URL。",
	'row_email' => "郵箱",
	'text_email_note_one' => "",
	'text_email_note_two' => "的聯繫郵箱。",
	'row_msn' => "MSN",
	'text_msn_note_one' => "",
	'text_msn_note_two' => "的聯繫MSN。",
	'row_qq' => "QQ",
	'text_qq_note_one' => "",
	'text_qq_note_two' => "的聯繫QQ。",
	'row_telephone' => "電話",
	'text_telephone_note_one' => "",
	'text_telephone_note_two' => "的聯繫電話。",
	'head_bonus_settings' => "魔力值設定",
	'text_bonus_by_seeding' => "做種獲得魔力值",
	'row_donor_gets_double' => "捐贈者加倍",
	'text_donor_gets' => "捐贈者通過做種能獲得正常情況",
	'text_times_as_many' => "倍的魔力值。預設'2'。設為'0'則將捐贈者和其他用戶同等對待。",
	'row_basic_seeding_bonus' => "基礎做種魔力值",
	'text_user_would_get' => "對于每個做種中的種子，用戶將獲得",
	'text_bonus_points' => "個魔力值，最多計算",
	'text_torrents_default' => "個種子。預設'1'，'7'。將魔力值數設為'0'來禁止此規則。",
	'row_seeding_formula' => "做種公式",
	'text_bonus_formula_one' => "每小時獲得的魔力值點數由下面的公式給出",
	'text_where' => "式中",
	'text_bonus_formula_two' => "<b>A</b>為中間變數</li><li><b>Ti</b>為第<b>i</b>個種子的生存時間，即自種子發布起到現在所經過的時間, 單位是周",
	'text_bonus_formula_three' => "<b>T0</b>為參數。<b>T0</b> = ",
	'text_bonus_formula_four' => "。預設為'4'",
	'text_bonus_formula_five' => "<b>Si</b>為第<b>i</b>個種子的大小，單位是GB",
	'text_bonus_formula_six' => "<b>Ni</b>為第<b>i</b>個種子目前的做種者數</li><li><b>N0</b>為參數。<b>N0</b> = ",
	'text_bonus_formula_seven' => "。預設為'7'",
	'text_bonus_formula_eight' => "<b>B</b>為1小時中用戶獲得的做種魔力值點數",
	'text_bonus_formula_nine' => "<b>B0</b>為參數，代表用戶1小時獲得魔力值的上限。<b>B0</b> = ",
	'text_bonus_formula_ten' => "。預設為'100'",
	'text_bonus_formula_eleven' => "<b>L</b>為參數。<b>L</b> = ",
	'text_bonus_formula_twelve' => "。預設為'300'",
	'text_misc_ways_get_bonus' => "其他抓取方式",
	'row_uploading_torrent' => "發布新種子",
	'text_user_would_get' => "用戶將獲得",
	'text_uploading_torrent_note' => "個魔力值，如果他發布一個新種子。預設'15'。",
	'row_uploading_subtitle' => "上傳一個字幕",
	'text_uploading_subtitle_note' => "個魔力值，如果他上傳一個字幕。預設'5'。",
	'row_starting_topic' => "發布新主題",
	'text_starting_topic_note' => "個魔力值，如果他在論壇發布一個新的主題。預設'2'。",
	'row_making_post' => "回覆帖子",
	'text_making_post_note' => "個魔力值，如果他在論壇發布一個帖子。預設'1'。",
	'row_adding_comment' => "發布評論",
	'text_adding_comment_note' => "個魔力值，如果他對種子、候選發表了一次評論。預設'1'。",
	'row_voting_on_poll' => "參與調查投票",
	'text_voting_on_poll_note' => "個魔力值，如果他參與一次調查投票。預設'1'。",
	'row_voting_on_offer' => "參與候選投票",
	'text_voting_on_offer_note' => "個魔力值，如果他參與一次候選投票。預設'1'。",
	'row_voting_on_funbox' => "趣味盒投票",
	'text_voting_on_funbox_note' => "個魔力值，如果他參與一次趣味盒投票。預設'1'。",
	'row_saying_thanks' => "說謝謝",
	'text_giver_and_receiver_get' => "感謝表達者和接受者將分別得到",
	'text_saying_thanks_and' => "和",
	'text_saying_thanks_default' => "個魔力值。預設'0.5'，'0'。",
	'row_funbox_stuff_reward' => "趣味盒獎勵",
	'text_funbox_stuff_reward_note' => "個魔力值，如果他發布的趣味盒內容被評為“有趣”。預設'5'。",
	'text_things_cost_bonus' => "消耗魔力值的項目",
	'row_one_gb_credit' => "1.0 GB上傳量",
	'text_it_costs_user' => "用戶將失去",
	'text_one_gb_credit_note' => "個魔力值，如果他選取交換1.0 GB上傳量。預設'300'。",
	'row_five_gb_credit' => "5.0 GB上傳量",
	'text_five_gb_credit_note' => "個魔力值，如果他選取交換5.0 GB上傳量。預設'800'。",
	'row_ten_gb_credit' => "10.0 GB上傳量",
	'text_ten_gb_credit_note' => "個魔力值，如果他選取交換5.0 GB上傳量。預設'1200'。",
	'row_ratio_limit' => "分享率限制",
	'text_user_with_ratio' => "當用戶的分享率高于",
	'text_uploaded_amount_above' => "且其上傳量大于",
	'text_ratio_limit_default' => " GB時，他無法交換更多的上傳量。預設'6'，'50'。將分享率設為'0'來禁止此規則。",
	'row_buy_an_invite' => "購買邀請名額",
	'text_buy_an_invite_note' => "個魔力值，如果他選取交換一個邀請名額。預設'1000'。",

	'row_custom_title' => "自訂頭銜",
	'text_custom_title_note' => "個魔力值，如果他選取自訂一次頭銜。預設'5000'。",
	'row_vip_status' => "貴賓待遇",
	'text_vip_status_note' => "個魔力值，如果他選取給自己換取一個月的貴賓待遇。預設'8000'。",
	'row_allow_giving_bonus_gift' => "允許魔力值贈送",
	'text_giving_bonus_gift_note' => "允許用戶間相互贈送魔力值。預設'是'。",
	'head_account_settings' => "賬號設定",
	'row_never_delete' => "永遠保留",
	'text_delete_inactive_accounts' => "移除不活躍賬號",
	'text_never_delete' => "及以上等級的賬號將永遠保留。預設",
	'row_never_delete_if_packed' => "封存后永遠保留",
	'text_never_delete_if_packed' => "及以上等級的賬號如果在封存后將永遠保留。預設",
	'row_delete_packed' => "移除封存賬號",
	'text_delete_packed_note_one' => "封存的賬號如果連續",
	'text_delete_packed_note_two' => "天不登入，將被移除。預設'400'，設為'0'來禁止此規則。",
	'row_delete_unpacked' => "移除未封存賬號",
	'text_delete_unpacked_note_one' => "未封存的賬號如果連續",
	'text_delete_unpacked_note_two' => "天不登入，將被移除。預設'150'，設為'0'來禁止此規則。",
	'row_delete_no_transfer' => "移除沒有流量的用戶",
	'text_delete_transfer_note_one' => "沒有流量的用戶（即上傳/下載資料都為0）如果連續",
	'text_delete_transfer_note_two' => "天不登入，或者註冊時間滿",
	'text_delete_transfer_note_three' => "天，將被移除賬號。預設'60'，'0'。<br />注意：兩條規則是分開執行的。將其中任一規則設為‘0’<b>只</b>禁止一條規則。",
	'text_user_promotion_demotion' => "用戶升級和降級",
	'row_ban_peasant_one' => "禁用",
	'row_ban_peasant_two' => "",
	'text_ban_peasant_note_one' => "如果在",
	'text_ban_peasant_note_two' => "天內仍未改善分享率，將被禁用。預設'30'，設為'0'將馬上禁止。",
	'row_demoted_to_peasant_one' => "降級至",
	'row_demoted_to_peasant_two' => "",
	'text_demoted_peasant_note_one' => "用戶在以下任一情況下將被降為",
	'text_demoted_peasant_note_two' => "：",
	'text_downloaded_amount_larger_than' => "上传量超過",
	'text_and_ratio_below' => " GB且分享率低于",
	'text_demote_peasant_default_one' => "。預設'50'，'0.4'。",
	'text_demote_peasant_default_two' => "。預設'100'，'0.5'。",
	'text_demote_peasant_default_three' => "。預設'200'，'0.6'。",
	'text_demote_peasant_default_four' => "。預設'400'，'0.7'。",
	'text_demote_peasant_default_five' => "。預設'800'，'0.8'。",
	'text_demote_peasant_note' => "注意：<font class=striking><b>不要</b></font>改變下載量遞增的排序。將下載量設為'0'將禁止相應的規則。",
	'row_promote_to_one' => "升級至",
	'row_promote_to_two' => "",
	'text_member_longer_than' => "註冊時間大于",
	'text_downloaded_more_than' => "周，下載量大于",
	'text_with_ratio_above' => " GB且分享率大于",
	'text_be_promoted_to' => "的用戶，將升級為",
	'text_promote_to_default_one' => "。預設",
	'text_promote_to_default_two' => "，他將被降級。預設",
	'text_demote_with_ratio_below' => "然而，一旦用戶的分享率低于",
	'head_torrent_settings' => "種子設定",
	'row_promotion_rules' => "促銷規則",
	'text_promotion_rules_note' => "開啟一些自動促銷規則。<font color=red><b>程式碼待完善，如果不清楚用處請不要啟用。</b></font>",
	'row_random_promotion' => "隨機促銷",
	'text_random_promotion_note_one' => "種子在發布時由系統自動隨機促銷。",
	'text_halfleech_chance_becoming' => "%的可能成為<b><font class='halfdown'>50%</font></b>。預設'5'。",
	'text_free_chance_becoming' => "%的可能成為<b><font class='free'>免費</font></b>。預設'2'。",
	'text_twoup_chance_becoming' => "%的可能成為<b><font class='twoup'>2X</font></b>。預設'2'。",
	'text_freetwoup_chance_becoming' => "%的可能成為<b><font class='twoupfree'>2X免費</font></b>。預設'1'。",
	'text_twouphalfleech_chance_becoming' => "%的可能成為<b><font class='twouphalfdown'>2x 50%</font></b>。預設'0'。",
	'text_random_promotion_note_two' => "將值設為'0'來禁止相應規則。",
	'row_large_torrent_promotion' => "大體積種子促銷",
	'text_torrent_larger_than' => "體積大于",
	'text_gb_promoted_to' => " GB的種子將在發布時由系統自動設為",
	'text_by_system_upon_uploading' => "。",
	'text_large_torrent_promotion_note' => "預設'20'，'免費'。將種子體積設為'0'來禁止此規則。",
	'row_promotion_timeout' => "促銷時限",
	'text_promotion_timeout_note_one' => "種子的促銷將在一段時間后過期。",
	'text_halfleech_will_become' => "<b><font class='halfdown'>50%</font></b>將變為",
	'text_after' => "，如果離發布時間已過去",
	'text_halfleech_timeout_default' => "天。預設'普通'，'150'。",
	'text_free_will_become' => "<b><font class='free'>免費</font></b>將變為",
	'text_free_timeout_default' => "天。預設'普通'，'60'。",
	'text_twoup_will_become' => "<b><font class='twoup'>2X</font></b>將變為",
	'text_twoup_timeout_default' => "天。預設'普通'，'60'。",
	'text_freetwoup_will_become' => "<b><font class='twoupfree'>2X免費</font></b>將變為",
	'text_freetwoup_timeout_default' => "天。預設'普通'，'30'。",
	'text_halfleechtwoup_will_become' => "<b><font class='twouphalfdown'>2X 50%</font></b>將變為",
	'text_halfleechtwoup_timeout_default' => "天。預設'普通'，'30'。",
	'text_normal_will_become' => "<b>普通</b>將變為",
	'text_normal_timeout_default' => "天。預設'普通'，'0'。",
	'text_promotion_timeout_note_two' => "將天數設為'0'來使促銷永遠不過期。",
	'row_auto_pick_hot' => "自動挑揀熱門種子",
	'text_torrents_uploaded_within' => "在發布后",
	'text_days_with_more_than' => "天內，如果種子的做種數曾超過",
	'text_be_picked_as_hot' => "，它將被記號為<b><font class=hot>熱門</font></b>。",
	'text_auto_pick_hot_default' => "預設'7'，'10'。將天數設為'0'來禁止此規則。",
	'row_uploader_get_double' => "發布者加倍上傳量",
	'text_torrent_uploader_gets' => "對于一個種子，它的發布者將得到正常情況",
	'text_times_uploading_credit' => "倍的上傳量。",
	'text_uploader_get_double_default' => "預設'1'。設為'1'則將發布者和其他用戶同等對待。",
	'row_delete_dead_torrents' => "移除斷種",
	'text_torrents_being_dead_for' => "連續斷種",
	'text_days_be_deleted' => "天的種子將被自動移除。預設'0'。設為'0'來禁止此規則。",
	'row_delete_dead_torrents_note' => "<font class=striking><b>警告</b></font>：種子一旦被移除將不可回復。如果你的網站可能長期關閉，一定要禁止這條規則。",
	'head_main_settings' => "主要設定",
	'row_site_online' => "網站在線",
	'text_site_online_note' => "預設'是'。在做站更新和其他維護時，你可能需要臨時關閉網站。<b>注意</b>：此時網站管理員仍能存取網站。",
	'row_enable_invite_system' => "開啟邀請系統",
	'text_invite_system_note' => "預設'是'。允許新用戶通過邀請系統註冊。",
	'row_initial_uploading_amount' => "初始上傳量",
	'text_initial_uploading_amount_note' => "單位為Byte，即1073741824為1 GB。新註冊用戶的初始上傳量。預設'0'。",
	'row_initial_invites' => "初始邀請名額",
	'text_initial_invites_note' => "新註冊用戶的初始邀請名額。預設'0'。",
	'row_invite_timeout' => "邀請過期",
	'text_invite_timeout_note' => "單位為天。邀請碼如在發出X天后仍未使用，將被移除。預設'7'。",
	'row_enable_registration_system' => "開啟註冊系統",
	'row_allow_registrations' => "若開啟，則允許自由註冊。預設'是'。",
	'row_verification_type' => "用戶驗證方式",
	'text_email' => "郵件",
	'text_admin' => "管理員",
	'text_automatically' => "自動",
	'text_verification_type_note' => "郵件：傳送驗證郵件；管理員：管理員手動；自動：註冊完成后自動啟動。",
	'row_enable_wait_system' => "開啟等待系統",
	'text_wait_system_note' => "預設'否'。開啟或關閉等待系統。參看<a href='faq.php#id46'><b>常見問題</b></a>。",
	'row_enable_max_slots_system' => "開啟連線數系統",
	'text_max_slots_system_note' => "預設'否'。開啟或關閉最大同時下載數限制。參看<a href='faq.php#id66'><b>常見問題</b></a>。",
	'row_show_polls' => "察看投票",
	'text_show_polls_note' => "預設'是'。在首頁察看投票。",
	'row_show_stats' => "察看網站資料",
	'text_show_stats_note' => "預設'是'。在首頁察看網站資料。",
	'row_show_last_posts' => "察看最近論壇帖子",
	'text_show_last_posts_note' => "預設'否'。在首頁察看最近的論壇帖子。",
	'row_show_last_torrents' => "察看最近種子",
	'text_show_last_torrents_note' => "預設'否'。在首頁察看最近發布的種子。",
	'row_show_server_load' => "察看伺服器負載",
	'text_show_server_load_note' => "預設'是'。在首頁察看伺服器負載。",
	'row_show_forum_stats' => "察看論壇資料",
	'text_show_forum_stats_note' => "預設'是'。在論壇頁面察看論壇資料。",
	'row_show_hot' => "察看熱門資源",
	'text_show_hot_note' => "預設'是'。在首頁察看熱門資源。熱門資源由系統自動挑揀或由管理組成員挑揀。",
	'row_show_classic' => "察看經典資源",
	'text_show_classic_note' => "預設'否'。在首頁察看經典資源。只有指定的總版主或以上等級能夠挑揀熱門資源。",
	'row_enable_imdb_system' => "開啟IMDb系統",
	'text_imdb_system_note' => "預設'是'。全域IMDb系統設定。",
	'row_enable_school_system' => "開啟學校系統",
	'text_school_system_note' => "預設'否'。如果對這項功能不清楚，<font class=striking><b>不要</b></font>開啟它。",
	'row_restrict_email_domain' => "限制郵箱域",
	'text_restrict_email_domain_note' => "預設'否'。設為'是'則只允許指定的郵箱域來註冊賬號。參看<a href='allowedemails.php'><b>這裡</b></a>。",
	'row_show_shoutbox' => "察看群聊區",
	'text_show_shoutbox_note' => "預設'是'。在首頁察看群聊區。",
	'row_show_funbox' => "察看趣味盒",
	'text_show_funbox_note' => "預設'否'。在首頁察看趣味盒。",
	'row_enable_offer_section' => "開啟候選區",
	'text_offer_section_note' => "預設'是'。開啟或關閉候選區。",
	'row_show_donation' => "開啟捐贈",
	'text_show_donation_note' => "察看捐贈資訊和捐贈排行榜。",
	'row_show_special_section' => "開啟特別區",
	'text_show_special_section_note' => "預設'否'。如果對這項功能不清楚，<font class=striking><b>不要</b></font>開啟它。",
	'row_weekend_free_uploading' => "周末自由發布",
	'text_weekend_free_uploading_note' => "預設'否'。設為'是'則允許所有用戶在周末自由發布種子（從周六12:00到周日23:59）。",
	'row_enable_helpbox' => "開啟求助區",
	'text_helpbox_note' => "預設'否'。設為'否'則禁止游客傳送訊息。",
	'row_enable_bitbucket' => "開啟上傳器",
	'text_bitbucket_note' => "預設'是'。設為'否'則禁止用戶上傳頭像到網站。",
	'row_enable_small_description' => "開啟副標題",
	'text_small_description_note' => "預設'是'。副標題察看在種子頁面種子標題下面。",
	'row_ptshow_naming_style' => "PTShow命名風格",
	'text_ptshow_naming_style_note' => "預設'否'。格式為[月月.日日.年年][初始名][中文名]。如果對這項功能不清楚，<font class=striking><b>不要</b></font>開啟它。",
	'row_use_external_forum' => "使用外部論壇",
	'text_use_external_forum_note' => "預設'否'。設為'是'使用外部論壇來代替內建論壇。",
	'row_external_forum_url' => "外部論壇URL",
	'text_external_forum_url_note' => "填寫類似這樣的位址：http://www.cc98.org",
	'row_torrents_category_mode' => "種子區分類型態",
	'text_torrents_category_mode_note' => "改變種子區的分類型態。",
	'row_special_category_mode' => "特殊區分類型態",
	'text_special_category_mode_note' => "改變特殊區的分類型態。",
	'row_default_site_language' => "預設網站語言",
	'text_default_site_language_note' => "改變登入頁面的預設語言。",
	'row_default_stylesheet' => "預設介面風格",
	'text_default_stylesheet_note' => "新註冊的用戶將預設使用這個介面風格。",
	'row_max_torrent_size' => "種子檔案體積限制",
	'text_max_torrent_size_note' => "單位為byte。預設1048576，即1 MB。",
	'row_announce_interval' => "彙報間隔",
	'text_announce_interval_note_one' => "單位為秒。Tracker將通知BitTorrent用戶端以這個間隔時間彙報資訊。<b>需要注意的是</b>，在實際情況中彙報間隔可能不同，因為BitTorrent客戶端可能無視這個通知，而且用戶可以選取手動連線Tracker。",
	'text_announce_default' => "預設：",
	'text_announce_default_default' => "預設'1800'，即30分鐘",
	'text_for_torrents_older_than' => "發布時間超過",
	'text_days' => "天的種子：",
	'text_announce_two_default' => "預設'7'，'2700'（即45分鐘)。將天數設為'0'來禁止此規則",
	'text_announce_three_default' => "預設'30'，'3600'（即60分鐘）。將天數設為'0'來禁止此規則",
	'text_announce_interval_note_two' => "<b>注意</b>：<font class=striking><b>不要</b></font>改變天數遞增的排序。<br />越短的間隔將獲得越准確的同伴資訊更新，同時帶來<b>更大的伺服器負載</b>。",
	'row_cleanup_interval' => "自動清理間隔",
	'text_cleanup_interval_note_one' => "每XXX秒時間做自動清理工作（用戶升級、降級、添加做種魔力值等）。",
	'text_priority_one' => "優先級1：",
	'text_priority_one_note' => "更新同伴狀態；添加做種魔力值。預設'900'，即15分鐘。",
	'text_priority_two' => "優先級2：",
	'text_priority_two_note' => "更新種子可見性。預設'1800'，即30分鐘。",
	'text_priority_three' => "優先級3：",
	'text_priority_three_note' => "更新種子做種數、下載數、評論數；更新論壇帖子/主題數；移除過期的候選；種子促銷到期；自動挑揀熱門種子。預設'3600'，即60分鐘。",
	'text_priority_four' => "優先級4：",
	'text_priority_four_note' => "移除未通過驗證的賬號，過期的登入嘗試記錄，過期的邀請碼和圖片驗證碼；清理用戶賬號（移除不活躍賬號，賬號升級、降級、禁用）；傳送上傳的圖片；更新用戶總做種和下載時間。預設'43200'，即24小時。",
	'text_priority_five' => "優先級5：",
	'text_priority_five_note' => "移除種子檔案不存在的種子；鎖定論壇的古老主題；移除古老的舉報資訊。預設'648000'，即15天。",
	'text_cleanup_interval_note_two' => "<b>注意</b>：<font class=striking><b>不要</b></font>改變時間遞增的排序。",
	'row_signup_timeout' => "註冊逾時",
	'text_signup_timeout_note' => "單位為秒。如用戶在提交註冊資訊XXX秒后未通過驗證，其賬號將被移除。預設'259200'，即3天。",
	'row_min_offer_votes' => "最低候選投票",
	'text_min_offer_votes_note' => "當候選的支援票比反對票多XXX票時，候選被通過。預設'15'。",
	'row_offer_vote_timeout' => "候選投票逾時",
	'text_offer_vote_timeout_note' => "單位為秒。如候選在發布XXX秒后未被通過，它將被移除。預設為'259200'，即72小時。設為'0'則不設定逾時限制。",
	'row_offer_upload_timeout' => "候選發布逾時",
	'text_offer_upload_timeout_note' => "單位為秒。如候選在通過后XXX秒內未發布種子，它將被移除。預設'86400'，即24小時。設為'0'則不設定逾時限制。",
	'row_max_subtitle_size' => "最大字幕體積",
	'text_max_subtitle_size_note' => "單位為byte。允許上傳的最大字幕體積。預設3145728，即3 MB。設為'0'則不設定體積限制。",
	'row_posts_per_page' => "預設每頁帖子數",
	'text_posts_per_page_note' => "論壇主題每頁察看的帖子數。預設'10'。<br />注意：用戶的個人設定將覆寫系統預設設定。",
	'row_topics_per_page' => "預設每頁主題數",
	'text_topics_per_page_note' => "論壇每頁察看的主題數。預設'20'。<br />注意：用戶的個人設定將覆寫系統預設設定。",
	'row_number_of_news' => "最近訊息條數",
	'text_number_of_news_note' => "在首先察看的最近訊息條數。預設'3'。",
	'row_torrent_dead_time' => "最大種子斷種時間",
	'text_torrent_dead_time_note' => "單位為秒。當種子連續XXX秒沒有任何做種者時，它將被記號為斷種。預設'21600'，即6小時。",
	'row_max_users' => "最大用戶數",
	'text_max_users' => "當這個限制達到時，自由註冊和邀請註冊都將關閉。",
	'row_https_announce_url' => "HTTPS Tracker位址",
	'text_https_announce_url_note' => "如果你的網站為HTTP和HTTPS使用同樣的位址，請留空。應該設為",
	'row_site_accountant_userid' => "網站會計用戶ID",
	'text_site_accountant_userid_note' => "填寫數字，如'1'。捐贈者將傳送捐贈資訊短訊至此ID的用戶。",
	'row_alipay_account' => "支付寶賬號",
	'text_alipal_account_note' => "你用于接收捐贈的支付寶賬號，如'yourname@gmail.com'。如果沒有，請留空。",
	'row_paypal_account' => "PayPal賬號",
	'text_paypal_account_note' => "你用于接收捐贈的PayPal賬號，如'yourname@gmail.com'。如果沒有，請留空。",
	'row_site_email' => "網站郵箱位址",
	'text_site_email_note' => "網站的郵箱位址",
	'row_report_email' => "報告郵箱位址",
	'text_report_email_note' => "用戶報告的郵箱位址",
	'row_site_slogan' => "網站標語",
	'text_site_slogan_note' => "網站的標語",
	'row_icp_license' => "ICP備案信息",
	'text_icp_license_note' => "這是適用于在中國運營的網站的許可證制度。如果沒有，請留空。",
	'row_torrent_directory' => "種子目錄",
	'text_torrent_directory' => "預設'torrents'。<b><u>不要</u>在末尾添加斜杠(/)！</b>",
	'row_bitbucket_directory' => "上傳器目錄",
	'text_bitbucket_directory_note' => "預設'bitbucket'。<b><u>不要</u>在末尾添加斜杠(/)！</b>",
	'row_cache_directory' => "緩衝區目錄",
	'text_cache_directory_note' => "預設'cache'。<b><u>不要</u>在末尾添加斜杠(/)！</b>",
	'row_torrent_name_prefix' => "種子檔名前置",
	'text_torrent_name_prefix_note' => "在從網站下載的種子檔案的檔名前添加前置。預設'[Nexus]'。<b><u>不要</u>使用非法的檔名字元！</b>",
	'row_peering_time_calculation' => "同伴時間開始計算時間",
	'text_peering_time_calculation_note' => "請留空。該設定因曆史原因保留。",
	'row_new_subtitle_id' => "新的字幕ID",
	'text_new_subtitle_id_note' => "請保持'0'。該設定因曆史原因保留。",
	'head_website_settings' => "網站設定",
	'row_basic_settings' => "基礎設定",
	'submit_basic_settings' => "基礎設定",
	'text_basic_settings_note' => "設定最基礎的項目，如資料程式庫，網站名等。如果對設定項目的功能不清楚，請<font class=striking><b>不要</b></font>做任何修改。<br />基礎設定出錯可能導致<b>網站無法執行</b>。",
	'row_main_settings' => "主要設定",
	'submit_main_settings' => "主要設定",
	'text_main_settings_note' => "配置你的網站各種主要項目。",
	'row_smtp_settings' => "SMTP設定",
	'submit_smtp_settings' => "SMTP設定",
	'text_smtp_settings_note' => "配置網站SMTP郵件伺服器。",
	'row_security_settings' => "安全設定",
	'submit_security_settings' => "安全設定",
	'text_security_settings_note' => "管理網站的安全。",
	'row_authority_settings' => "許可權設定",
	'submit_authority_settings' => "許可權設定",
	'text_authority_settings_note' => "配置各等級的用戶所具有的許可權。",
	'row_tweak_settings' => "次要設定",
	'submit_tweak_settings' => "次要設定",
	'text_tweak_settings_note' => "配置你的網站的次要項目。",
	'row_bonus_settings' => "魔力值設定",
	'submit_bonus_settings' => "魔力值設定",
	'text_bonus_settings_note' => "配置魔力值的抓取和使用。",
	'row_account_settings' => "賬號設定",
	'submit_account_settings' => "賬號設定",
	'text_account_settings_settings' => "配置賬號的升級，降級，移除等。",
	'row_torrents_settings' => "種子設定",
	'submit_torrents_settings' => "種子設定",
	'text_torrents_settings_note' => "配置種子的促銷，篩選等。",
	'row_bots_settings' => "機器人設定",
	'submit_bots_settings' => "機器人設定",
	'text_bots_settings_note' => "管理網站的機器人。如果對設定項目的功能不清楚，請<font class=striking><b>不要</b></font>做任何修改。",
	'row_code_settings' => "程式碼設定",
	'submit_code_settings' => "程式碼設定",
	'text_code_settings_note' => "配置程式碼的版本。如果對設定項目的功能不清楚，請<font class=striking><b>不要</b></font>做任何修改。",
	'text_smtp_default' => "預設（使用PHP預設郵件函數）",
	'text_smtp_advanced' => "進階（使用PHP預設郵件函數，添加其餘的頭資訊。有助于防止被視為垃圾郵件過濾）",
	'text_smtp_external' => "外部（使用外部SMTP伺服器）",
	'text_setting_for_advanced_type' => "進階類別設定",
	'row_smtp_host' => "SMTP主機",
	'text_smtp_host_note' => "預設：'localhost'",
	'row_smtp_port' => "SMTP通訊埠",
	'text_smtp_port_note' => "預設：25",
	'row_smtp_sendmail_from' => "SMTP郵件傳送來源",
	'text_smtp_sendmail_from_note' => "預設：",
	'row_smtp_sendmail_path' => "Sendmail路徑",
	'text_smtp_sendmail_path_note' => "請在php.ini中設定好sendmail_path",
	'text_setting_for_external_type' => "外部類別設定",
	'row_outgoing_mail_address' => "SMTP位址",
	'row_outgoing_mail_port' => "SMTP通訊埠",
	'text_outgoing_mail_address_note' => "<b>輔助說明：</b> smtp.yourisp.com",
	'text_outgoing_mail_port_note' => "<b>輔助說明：</b> 25",
	'row_smtp_account_name' => "用戶名",
	'text_smtp_account_name_note' => "<b>輔助說明：</b> yourname@yourisp.com",
	'row_smtp_account_password' => "用戶密碼",
	'text_smtp_account_password_note' => "<b>輔助說明：</b>匯入你的密碼",
	'text_mail_test_note' => "如何測試傳送郵件功能？很簡單，點擊",
	'text_here' => "這裡",
	'std_error' => "錯誤",
	'std_mysql_connect_error' => "無法連線MySQL，請檢查設定。",
	'row_enable_location' => "顯示地址",
	'text_enable_location_note' => "默認'否'。根據用戶的IP地址顯示其地理位置。如果你沒有導入IP地址庫，<b>不要</b>啟用本項。",
	'row_torrents_per_page' => "默認每頁種子數",
	'row_title_keywords' => "頁面標題關鍵字",
	'text_title_keywords_note' => "察看在頁面標題末尾。填寫這些關鍵字能輔助說明搜索引擎找到你的網站。多個關鍵字間用'|'分隔，如'BT|下載|電影'。如果想保持清爽的頁面標題，請留空。",
	'row_meta_keywords' => "Meta關鍵字",
	'text_meta_keywords_note' => "出現在頁面頭部Meta標簽中。填寫與你網站相關的關鍵字。多個關鍵字間用半角逗點','分隔，如'BT, 下載, 電影'.",
	'row_meta_description' => "Meta說明",
	'text_meta_description_note' => "出現在頁面頭部Meta標簽中。填寫你網站的概要和說明。",
	'row_bonus_gift_tax' => "魔力值贈送稅收",
	'text_system_charges' => "系統向禮物接收者索取",
	'text_bonus_points_plus' => "個魔力值 + 贈送額的",
	'text_bonus_gift_tax_note' => "%的魔力值作為稅收。如設為'5'，'10'時，禮物贈送者傳送100個魔力值，接收者只獲得85個。預設'5'，'10'。<br /><b>注意</b>：兩條規則是分開執行的，將兩個值都設為'0'才能完全免除稅收。",
	'row_see_sql_debug' => "檢視除錯資訊",
	'text_allow' => "允許",
	'text_see_sql_list' => "及以上等級的用戶檢視除錯資訊（在頁面底部檢視SQL敘述清單，PHP報告資訊）。預設",
	'text_smtp_none' => "無（將徹底禁止郵件發送功能）",
	'row_attachment_settings' => "屬裝置設定",
	'submit_attachment_settings' => "屬裝置設定",
	'text_attachment_settings_note' => "配置屬裝置。",
	'head_attachment_settings' => "屬裝置設定",
	'row_enable_attachment' => "開啟屬裝置",
	'text_enable_attachment_note' => "全域屬裝置設定。如設為'否'，所有人都無法上傳屬裝置。",
	'row_save_directory' => "屬裝置儲存位置",
	'row_http_directory' => "屬裝置URL位址",
	'text_http_directory_note' => "可為目前URL下的相對位址或http://開頭的絕對位址。<b><u>不要</u>在末尾添加斜杠(/)！</b>預設'attachments'。",
	'row_attachment_authority' => "屬裝置許可權",
	'text_can_upload_at_most' => "及以上等級用戶在24小時內最多允許上傳",
	'text_file_size_below' => "個屬裝置，每個屬裝置檔案大小不超過",
	'text_with_extension_name' => "KB，允許的檔案副檔名為",
	'text_authority_default_one_one' => "。預設",
	'text_authority_default_one_two' => "，'5'，'256'，'jpeg, jpg, png, gif'。",
	'text_authority_default_two_one' => "。預設",
	'text_authority_default_two_two' => "，'10'，'512'，'torrent, zip, rar, 7z, gzip, gz'。",
	'text_authority_default_three_one' => "。預設",
	'text_authority_default_three_two' => "，'20'，'1024'，'mp3, oga, ogg, flv'。",
	'text_authority_default_four_one' => "。預設",
	'text_authority_default_four_two' => "，'500'，'2048'，''。",
	'text_attachment_authority_note_two' => "<b>注意：</b><ul><li><b>不要</b>改變用戶等級、檔案數限制、檔案大小限制遞增的排序。</li><li>將檔案大小限制設為'0'，檔案數限制設為'0'，允許的檔案副檔名設為''（即留空）才能<b>禁止</b>相應規則。</li><li>高等級的用戶自動繼承低等級用戶的許可權，所以<b>沒</b>必要在多條規則中填寫相同的允許檔案副檔名。</li><li>多個允許的檔案副檔名用半角逗點','分隔。</li><li>無論如何設定，<b>沒有</b>任何人能上傳檔案大小超過5 MB或副檔名為'exe, com, bat, msi'之一的屬裝置。</li></ul>",
	'text_attachment_authority_note_one' => "根據用戶等級定義其擁有的上傳屬裝置的許可權。",
	'text_save_directory_note' => "你儲存屬裝置的伺服器路徑。請確保目錄存取許可權已設定正確（777）。<b><u>不要</u>在末尾添加斜杠(/)！</b>預設'./attachments'。",
	'row_save_directory_type' => "儲存屬裝置方式",
	'text_one_directory' => "全部檔案存入同一目錄",
	'text_directories_by_monthes' => "按月份存入不同目錄",
	'text_directories_by_days' => "按天存入不同目錄",
	'text_save_directory_type_note' => "此設定只影響新上傳的屬裝置。預設'按月份存入不同目錄'。",
	'row_image_thumbnails' => "圖片縮略圖",
	'text_no_thumbnail' => "1. 不啟用縮略圖功能。只儲存初始圖片。",
	'text_create_thumbnail' => "2. 為大小大的圖片生成縮略圖，同時儲存縮略圖和初始圖片。",
	'text_resize_big_image' => "3. 縮小大小大的圖片，只儲存縮略圖。",
	'text_image_thumbnail_note' => "預設'2'。",
	'row_thumbnail_quality' => "縮略圖品質",
	'text_thumbnail_quality_note' => "設定縮略圖的品質。該參數範圍為1至100內的整數。數值越大，縮略圖品質越高，同時檔案大小越大。預設'80'。",
	'row_thumbnail_size' => "縮略圖大小",
	'text_thumbnail_size_note' => "寬度 * 高度，單位為像素。<b>只</b>為寬度<b>或</b>高度超過此限制的圖片生成縮略圖。預設'500'，'500'。",
	'row_watermark' => "水印位置",
	'text_no_watermark' => "不啟用水印功能",
	'text_left_top' => "#1",
	'text_top' => "#2",
	'text_right_top' => "#3",
	'text_left' => "#4",
	'text_center' => "#5",
	'text_right' => "#6",
	'text_left_bottom' => "#7",
	'text_bottom' => "#8",
	'text_right_bottom' => "#9",
	'text_random_position' => "隨機位置",
	'text_watermark_note' => "為上傳的圖片檔案（JPEG/PNG/GIF）添加水印。你可以替代水印PNG圖片檔案'pic/watermark.png'以實現不同的水印效果。選取水印添加的位置。不支援給動畫GIF檔案添加水印。預設'不啟用水印功能'。",
	'row_image_size_for_watermark' => "水印添加條件",
	'text_watermark_size_note' => "寬度 * 高度，單位為像素。<b>只</b>為寬度<b>和</b>高度都超過此限制的圖片添加水印。預設'300'，'300'。",
	'row_jpeg_quality_with_watermark' => "JPEG圖片水印品質",
	'text_jpeg_watermark_quality_note' => "添加水印后的JPEG檔案的圖片品質。該參數範圍為1至100內的整數。數值越大，縮略圖品質越高，同時檔案大小越大。預設'85'。",
	'head_save_attachment_settings' => "儲存屬裝置設定",
	'row_css_date' => "CSS日期",
	'text_css_date' => "時間格式為'年年年年月月日日時時分分'，如'200911030110'。修改此項目能輔助說明強制用戶的瀏覽器更新CSS緩衝區。當你對CSS檔案做一些修改后可能需要用到此項。如果不明白此項用處，請留空。預設為空。",
	'row_alternative_thumbnail_size' => "縮略圖另一尺寸",
	'text_alternative_thumbnail_size_note' => "用戶能選取縮略圖另外一種尺寸。預設'180'，'135'。",
	'row_add_watermark_to_thumbnail' => "給縮略圖添加水印",
	'text_watermark_to_thumbnail_note' => "選取是否給縮略圖也添加水印。預設'否'。當全域縮略圖設定啟用時被項才能生效。",
	'row_advertisement_settings' => "廣告設定",
	'submit_advertisement_settings' => "廣告設定",
	'text_advertisement_settings_note' => "配置你網站中的廣告。",
	'head_advertisement_settings' => "廣告設定",
	'row_enable_advertisement' => "啟用廣告",
	'text_enable_advertisement_note' => "全域廣告設定。",
	'row_no_advertisement' => "可關閉廣告",
	'text_can_choose_no_advertisement' => "及以上等級用戶可在控制面板中選取不察看廣告。預設",
	'row_bonus_no_advertisement' => "魔力值交換可關閉廣告",
	'text_no_advertisement_with_bonus' => "及以上等級用戶可用魔力值換取一定期限內不察看廣告的許可權。預設",
	'row_no_advertisement_bonus_price' => "無廣告魔力值",
	'text_bonus_points_to_buy' => "個魔力值，如果他選取交換",
	'text_days_without_advertisements' => "天不察看廣告的許可權。預設'10000'，'15'。",
	'row_click_advertisement_bonus' => "點擊廣告抓取魔力值",
	'text_points_clicking_on_advertisements' => "個魔力值，如果他第一次點擊某個廣告。設為'0'來禁用此規則。<br /><b>注意</b>：一些廣告服務（如Google Adsense）禁止網站激勵用戶點擊廣告的行為。",
	'head_save_advertisement_settings' => "儲存廣告設定",
	'row_enable_tooltip' => "允許懸浮輔助說明",
	'text_enable_tooltip_note' => "是否允許用戶使用懸浮輔助說明功能。預設'是'。",
	'text_thirtypercentleech_chance_becoming' => "%的可能成為<b><font class='thirtypercent'>30%</font></b>。預設'0'。",
	'text_thirtypercentleech_will_become' => "<b><font class='thirtypercent'>30%</font></b>將變為",
	'text_thirtypercentleech_timeout_default' => "天。預設'普通'，'30'。",
	'row_site_logo' => "網站logo",
	'text_site_logo_note' => "網站logo圖片檔案。建議圖片大小為220x70。如不填寫，將使用文字。預設''。",
	'row_promotion_link_click' => "宣傳鏈結點擊",
	'text_promotion_link_note_one' => "個魔力值，如果他的宣傳鏈結獲得一次來自一個未記錄的IP的點擊。",
	'text_promotion_link_note_two' => "秒內最多獎勵一次點擊。將魔力值設為'0'來禁用宣傳鏈結功能。預設'0'，'600'。",
	'row_promotion_link_example_image' => "宣傳鏈結示例圖片",
	'text_promotion_link_example_note' => "在<a href=\"promotionlink.php\"><b>宣傳鏈結</b></a>介紹示例中的圖片。<b>必須</b>使用相對地址，如'pic/prolink.png'.",
	'row_enable_nfo' => "啟用NFO",
	'text_enable_nfo_note' => "預設'是'。全域NFO設定。",
	'row_web_analytics_code' => "網站統計程式碼",
	'text_web_analytics_code_note' => "填寫由第三方（如Google Analytics）提供的網站統計程式碼。如無請留空。<br /><b>注意</b>：請確保程式碼安全可信。",
	'row_enable_email_notification' => "允許用戶收取郵件輔助說明",
	'text_email_notification_note' => "是否允許用戶在收取新短訊、評論等時候收到郵件輔助說明。",
	'text_users_get' => "首次升級至此等級的用戶將獲得",
	'text_invitations_default' => "個邀請名額。預設",
);

?>
