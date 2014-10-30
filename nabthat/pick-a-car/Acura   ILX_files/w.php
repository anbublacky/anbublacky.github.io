var __wtw_g_started=false;var __wtw_dom_ready_loaded=false;window['__wtw_lucky_site_id']=window['__wtw_lucky_site_id']?window['__wtw_lucky_site_id']:19433;window['__wtw_lucky_account_id']=window['__wtw_lucky_account_id']?window['__wtw_lucky_account_id']:50197;var WTW_Watcher={use_div_extras:false,startup_date:new Date(),form_tokens:{"\/test_drives":{"id":"1028397363","tok":"D8SU5P5sEPWTaACvktaLZSF2ASaLyQ83","orig_id":"\/test_drives"},"\/users\/sign_in":{"id":"1028397359","tok":"RNhTVMFb5YFeYkrn4dxs2ZMSsFChLTxu","orig_id":"\/users\/sign_in"},"\/carinfos\/step2":{"id":"1028397368","tok":"KyYzH6jLwB5Eb6WXrSLqEjQpEhFQzs3B","orig_id":"\/carinfos\/step2"},"\/buy\/info\/Acura\/ILX":{"id":"1028380351","tok":"pg294AqDrvVxhtz79HfhUTqgGN5PWv45","orig_id":"\/buy\/info\/Acura\/ILX"},"\/":{"id":"1028408223","tok":"rsphPzHT7SKvS6Q7tCXWevVbERWP6p6p","orig_id":"\/"},"\/sell_cars":{"id":"1028397364","tok":"RQj4KTHFQHjgEw9a5NbdDJkhW9WYzYUG","orig_id":"\/sell_cars"}},extra_msg:'<p class=\"line\" id=\"line-1\">The Smart Way to Buy a Car</p>',offset_bottom:0,disable_ctrl_shift:false,third_party_opt_out:'',pre_chat_question1:'',pre_chat_question2:'',pre_chat_question3:'',no_blank_ids:false,is_chat_ended:false,detect_div_scrolls:false,fallback_iframe_post:false,socket_server:'socket.luckyorange.com',extreme_privacy:false,lucky_keyword_variable:'lokwd',big_commerce_checkout:false,dont_save_html:false,chat_zindex:window.__wtw_lucky_chat_zindex||null,can_record_sess:true,spy_request_queue:[],pre_chat_question1_slashed:'',pre_chat_question2_slashed:'',pre_chat_question3_slashed:'',text:{'enter_placeholder':'Type Your Question Here','text_btn_yes':'Yes, please.','text_btn_no':'No thanks.','text_btn_stop':'Stop asking me.','text_btn_lbl':'chat'},just_tagged:'',use_full:0,white_labeled:false,never_show_chat_buttons:window.__wtw_lucky_no_chat_box||false,no_chat_box:window.__wtw_lucky_no_chat_box||0,remove_powered_by:false,has_form_analytics:true,ajax_addon:true,privacy_disable_keystrokes:false,privacy_disable_mouse_clicks:false,privacy_disable_mouse_movements:false,privacy_disable_scrolls:false,encoded_ref:'https%3A%2F%2Fwww.nabthat.com%2F',show_offline_form:true,scan_html_diffs:false,detect_hash_changes:false,my_country_code:'IN',my_country_name:'India',my_postal:'600003',my_city:'Chennai',my_region:'Tamil Nadu',my_lon:'80.2833',my_lat:'13.0833',my_ip:'122.164.47.20',track_all_errors:false,allow_one_element_fa:false,pre_chat_ask_question:false,ga_push_poll_events:1,ga_push_chat_events:1,ga_event_cat:'lo_analytics',click_to_chat_title_length:18,on_poll_exit_just_hide:false,offline_message_length:32,channel_site:'73f0d8265bac6b5670a6a39830bb3310',channel_me:'9a69f8309dd39c8cf8a00b95bf854845',flash_save_is_loaded:false,kick_idle_after:60,kick_idle_after_timeout_id:0,roomID:19433,click_to_chat_title:'Nabthat Concierge!',offline_msg_title:'Please call us at 1-844-622-8428',do_not_record:window.__wtw_lucky_do_not_record||false,do_not_track:false,is_saving_mouse_coords:true,main_record_event_id:183838044,my_uid:'d535b2bd-cc28-4443-b7cb-0a6b296ab775',my_uuid:'vis_d535b2bd-cc28-4443-b7cb-0a6b296ab775_534544',chat_btn_alignment:('undefined'===typeof window.__wtw_lucky_chat_align)?'right':window.__wtw_lucky_chat_align,colors:{'chat_subtitle':'#dedede','chat_bg':'#00ad80','chat_title':'#ffffff','chat_subtitle':'#dedede','chat_border':'#ffffff','chat_show_blinker':'0','is_chat_bg_light':'','chat_bg_lighter':'#26b993','chat_bg_lighter2':'#40c2a0','chat_bg_lighter3':'#80d6c0','chat_bg_text_bg':'#26b993','chat_bg_darker1':'#00936d','chat_bg_darker2':'#008260'}};var _lo_words={};_lo_words.connecting='Connecting to chat...';_lo_words.paging="One moment, we're paging an agent...";_lo_words.chatting_with="Chatting with ";_lo_words.no_response="Sorry, no one responded. ";_lo_words.page_again="Page them again?";_lo_words.agent_typing=' is typing...';_lo_words.agent_typed_text=' has typed some text';_lo_words.agent_idle=' is idle.';_lo_words.agent_gone=' is away from keyboard.';_lo_words.powered_by='Powered By';_lo_words.comments='Comments';_lo_words.joined_room='has joined the room.';_lo_words.left_room='has exited the room.';_lo_words.operator_chat_title='Operator Chat';_lo_words.visitor_chat_title='Visitor Chat';_lo_words.type_here='Type here and press <enter> to chat with other operators.';_lo_words.direct_link='Direct Link';_lo_words.visitor_view_line='Visitor could view up to this line';_lo_words.avg_viewable_screen_height='Most people viewed up to this line.';_lo_words.ended_session='The operator ended the session.';_lo_words.disconnected='Lost connection with the server...';_lo_words.confirm_end_chat='Are you sure you want to end the chat session?';_lo_words.submit_lbl='Submit';(function(){var loaded_search=false;var loaded_diff=false;var lo_loaded=false;var lo_loading=false;var lo_metric_loaded=false;var lo_json2_loaded=false;function hookLoad(handler){try
{if(document.readyState&&document.readyState==="complete"){if(typeof(handler)==='function')
{handler();}}
else
{if(window.addEventListener){window.addEventListener("load",handler,false);}
else if(window.attachEvent){window.attachEvent("onload",handler);}}}
catch(ex)
{}}
hookLoad(function(){load_json2();load_search();});function load_json2()
{try
{if(window.JSON)
{return true;}
else
{load_script(window.lucky_pre_path+'luckyorange.com/js/json2.js?nc=1',function(){lo_json2_loaded=true;});}}
catch(ex)
{}}
function load_lo()
{try
{if(lo_loading==false)
{lo_loading=true;if(window.__wtw_lucky_exclude_from_stats==null)
{load_script(window.lucky_pre_path+'luckyorange.com/a.js?nc=9',function(){lo_metric_loaded=true;window._lo_metric_loaded=true;});}
if(document.location.href.indexOf("__no_min_debug")>-1)
{load_script(window.lucky_pre_path+'luckyorange.com/lo.js?nc=89',function(){lo_loaded=true;window._lo_loaded=true;});}
else
{load_script(window.lucky_pre_path+'luckyorange.com/lo.min.js?nc=238',function(){lo_loaded=true;window._lo_loaded=true;});}}}
catch(ex)
{}}
function check_done()
{if(loaded_search&&loaded_diff)
{load_lo();}}
function load_search()
{try
{load_script(window.lucky_pre_path+'luckyorange.com/js/engines.min.js',function(){loaded_search=true;check_done();});if(WTW_Watcher.scan_html_diffs)
{load_script(window.lucky_pre_path+'luckyorange.com/js/diff_match_patch.min.js',function(){loaded_diff=true;check_done();});}
else
{loaded_diff=true;check_done();}}
catch(ex)
{}}
function load_script(url,callback)
{try
{var head=document.head||document.getElementsByTagName("head")[0]||document.documentElement;var script=document.createElement("script");script.async=true;script.charset='utf-8';script.type='text/javascript';script.src=url;script.onload=script.onreadystatechange=function(_,isAbort){if(isAbort||!script.readyState||/loaded|complete/.test(script.readyState)){script.onload=script.onreadystatechange=null;if(typeof(callback)==='function')
{callback();}}}
head.insertBefore(script,head.firstChild);}
catch(ex)
{}}})();