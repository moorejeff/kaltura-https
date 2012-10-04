<?php
class kConf
{
			
	private static $map = null;
	
	private static function init()
	{
		if ( self::$map ) return;
		/** KALTURA-INSTALL **/
		// will be used for the instalation script to modify 
		$bin_path = "/opt/kaltura/bin";
		
		self::$map = 
			array (
                 // take over the symfony config (sfConfig)
 			    "sf_debug" => false,
				"sf_logging_enabled" => true,
				"sf_root_dir" => '/opt/kaltura/app'.'/alpha/',

				"cdn_host" => "kaltura-test.swarthmore.edu",
				"iis_host" => "kaltura-test.swarthmore.edu",
				"www_host" => "kaltura-test.swarthmore.edu",
				"rtmp_url" => "kaltura-test.swarthmore.edu/oflaDemo",

				"delivery_block_countries" => "", // comma separated
				
				"kaltura_installation_type" => "",
				"enable_cache" => true,
				
				"corp_action_redirect" => "",
			
				"terms_of_use_uri" => "index.php/terms",

				"memcache_host" => "kaltura-test.swarthmore.edu",
				"memcache_port" => "11211",
			
				"server_api_v2_path" => "/api/" ,
						
				"apphome_url" => "https://kaltura-test.swarthmore.edu",
				"apphome_url_no_protocol" => "kaltura-test.swarthmore.edu",
				"default_email" => "kaltura@swarthmore.edu",
				"default_email_name" => "kaltura-test.swarthmore.edu Automated Response",
				"partner_registration_confirmation_email" => "kaltura_registration_confirmation@swarthmore.edu",
				"partner_registration_confirmation_name" => "kaltura-test.swarthmore.edu",
				"partner_notification_email" => "kaltura_customer_service@swarthmore.edu",
				"partner_notification_name" => "kaltura-test.swarthmore.edu Automated Response",
				"partner_change_email_email" => "kaltura_customer_service@swarthmore.edu",
				"partner_change_email_name" => "kaltura-test.swarthmore.edu Automated Response",
				"purchase_package_email" => "kaltura_customer_service@swarthmore.edu",
				"purchase_package_name" => "kaltura-test.swarthmore.edu Automated Response",
				"batch_download_video_sender_email" => "download_video@swarthmore.edu",
				"batch_download_video_sender_name" => "kaltura-test.swarthmore.edu",
				"batch_flatten_video_sender_email" => "download_video@swarthmore.edu",
				"batch_flatten_video_sender_name" => "kaltura-test.swarthmore.edu",
				"batch_notification_sender_email" => "notifications@kaltura-test.swarthmore.edu" , 
				"batch_notification_sender_name" => "kaltura-test.swarthmore.edu" ,	
				"batch_alert_email" => "kaltura_alert@swarthmore.edu" , 
				"batch_alert_name" => "kaltura-test.swarthmore.edu" ,

				"default_duplication_time_frame" => 3600 ,								
				"job_duplication_time_frame" => array(
					1 => 7200, //BatchJob::BATCHJOB_TYPE_IMPORT
				) ,
			
				"default_job_execution_attempt" => 3 ,
				"job_execution_attempt" => array(
					16 => 5, //BatchJob::BATCHJOB_TYPE_NOTIFICATION
					4 => 1, //BatchJob::BATCHJOB_TYPE_BULK_UPLOAD
					23 => 2, //BatchJob::BATCHJOB_TYPE_STORAGE_EXPORT
					28 => 10, //BatchJob::BATCHJOB_TYPE_METADATA_TRANSFORM
				) ,
			
				"default_job_retry_interval" => 20 ,
				"job_retry_intervals" => array(
					16 => 600, // BatchJob::BATCHJOB_TYPE_NOTIFICATION
					15 => 150, // BatchJob::BATCHJOB_TYPE_MAIL
					1 => 300, // BatchJob::BATCHJOB_TYPE_IMPORT
					23 => 300, // BatchJob::BATCHJOB_TYPE_STORAGE_EXPORT
					4 => 180, // BatchJob::BATCHJOB_TYPE_BULKUPLOAD
					10 => 1800, // BatchJob::BATCHJOB_TYPE_CONVERT_PROFILE
				) ,
				
				"ignore_cdl_failure" => false,
							
				"batch_ignore_duplication" => true ,
				"priority_percent" => array(1 => 33, 2 => 27, 3 => 20, 4 => 13, 5 => 7),
				"priority_time_range" => 60,
		
				"kmc_admin_login_generic_regexp" => "/__([0-9]+)__@kaltura.com/" ,			// used as generic backdoor to kmc
				"kmc_admin_login_sha1_password" => "" ,
				
				"system_pages_login_username" => " ",
				"system_pages_login_password" => "",				
				"system_allow_edit_kConf" => false,
				"testmeconsole_state" => true,
				
				"flash_root_url" => "",
				"uiconf_root_url" => "",
				"content_root_url" => "",
			
				"bin_path_ffmpeg" => $bin_path . "/ffmpeg" ,
				"bin_path_mencoder" => $bin_path . "/mencoder",
				"bin_path_flix" => $bin_path . "/cli_encode",
				"bin_path_encoding_com" => $bin_path . "/encoding_com.php",
				"bin_path_imagemagick" => $bin_path . "/convert",
				"bin_path_curl" => $bin_path . "/curl",
				"bin_path_mediainfo" => $bin_path . "/mediainfo",
											
				"image_proxy_url" => "",
				"image_proxy_port" => "",	
				"image_proxy_secret" => "",
			
				/* kmc tabs rules */
				"kmc_display_customize_tab" => true,
				"kmc_display_account_tab" => true, 
				"kmc_content_enable_commercial_transcoding" => true, 
				"kmc_content_enable_live_streaming" => true,
				"kmc_login_show_signup_link" => false,
				"kmc_display_developer_tab" => false,
				"kmc_display_server_tab" => false,
				"kmc_account_show_usage" => true,			

			/* kmc applications versions */
				"kmc_content_version" => 'v3.2.11.1',
				"kmc_account_version" => 'v3.1.1',
				"kmc_appstudio_version" => 'v2.2.3',
				"kmc_rna_version" => 'v1.1.5',
				"kmc_dashboard_version" => 'v1.0.14',
				"kmc_login_version" => 'v1.1.11',
				"kcw_flex_wrapper_version" => 'v1.2',
				"editors_flex_wrapper_version" => 'v1.01',
				"kdp_wrapper_version" => 'v11.0',
				"kmc_secured_login" => true,
				
				"paypal_data" => array (),
				
				"ga_account" => 'UA-7714780-1', //google analytics
				"limelight_madiavault_password" => "",
				"level3_authentication_key" => "",
				"akamai_auth_smooth_param" => "",
				"akamai_auth_smooth_salt" => "",
				"akamai_auth_smooth_seconds" => 300,
				
				"marketo_access_key" => "", 
				"marketo_secret_key" => "",
							
				'kdpwrapper_track_url' => "http://kalstats.kaltura.com/index.php/events/player_event",
				"kaltura_partner_id" => "",
				'track_kdpwrapper' =>false,
				
				"reports_db_config" => array (
					"host" => "127.0.0.1",
					"user" => "etl",
					"port" => "3306",
					"password" => "etl" ,
					"db_name" => "kalturadw" , 
				),
				
				"template_partner_id" => 99,
				"event_log_file_path" => "/opt/kaltura/log/events.log",
				"dc_config" => array (
					"current" => "0",
					"list" => array (
								"0" => array ( "name" => "DC_0" ,
											   "url" => "https://kaltura-test.swarthmore.edu" ,
											   "external_url" => "https://kaltura-test.swarthmore.edu" ,
											   "secret" => "" ,
											   "root" => "/opt/kaltura/web/" )
					)
				),
				
				"url_managers" => array(), /* should be filled up if installations supports adding CDNs */
                                
				"date_default_timezone" => "America/New_York",			
				
				"kaltura_email_hash" => "admin",
                                
				"default_plugins" => array(
					"FileSyncPlugin", // Should be enabled only on servers that run admin console
					"SystemUserPlugin", // Should be enabled only on servers that run admin console
					"SystemPartnerPlugin", // Should be enabled only on servers that run admin console
					"AdminConsolePlugin", // Should be enabled only on servers that run admin console
					"StorageProfilePlugin", // Should always be enabled
					"MetadataPlugin", // Should always be enabled
					// "MultiCentersPlugin", (uncomment to enable moultiple data centers)
					"DocumentPlugin", // Should be enabled for document entries
					"SphinxSearchPlugin", // Should always be enabled
                    "AuditPlugin", // Should be enabled only if audit trail support required
				),

                "search_plugin"	=> "SphinxSearchPlugin",
											
				"event_consumers" => array(
                	"kFlowManager",
                	"kStorageExporter",
                    "kObjectCopyHandler",
                    "kObjectDeleteHandler",
                ),
                
				"cache_root_path" => "/opt/kaltura/cache/content/",
                
				"exec_sphinx" => true, // Should be set to false in multiple data centers environments
                
                'admin_kuser_set_password_hash_key_validity' => 60*60*24, /* 24 hours */
                'admin_kuser_max_login_attempts' => 5000,
                'admin_kuser_login_block_period' => 0,
                'admin_kuser_num_prev_passwords_to_keep' => 0,
                'admin_kuser_password_replace_freq' => 60*60*24*5000, /* 5000 days */
                'admin_kuser_password_structure' => array(
					'/^.{8,14}$/',
					'/[0-9]+/',
					'/[a-z]+/',
					'/[~!@#$%^*=+?\(\)\-\[\]\{\}]+/',
					'/^[^<>]*$/',
				),
				
				'disable_url_hashing' => 'true',
				'report_partner_registration' => false, // whether to report partner registration
				'response_cache_dir' => '/opt/kaltura/cache/response/',
				
				// ce only settings
				"kaltura_activation_key" => "YTc2ZDgyOGQ2YWI0YWExMTVhNmY0YjliNjJiODNmM2V8MXxuZXZlcnww",
				"replace_passwords" => false,
				"kaltura_version" => "Kaltura CE v3.0.0",
				"report_admin_email" => "aruethe2@swarthmore.edu",
				"usage_tracking_url" => "http://corp.kaltura.com/index.php/events/usage_tracking",
				"usage_tracking_optin" => false,
				"installation_id" => "IID4e1c957aeab60",
                // end of ce only settings
			);
	}
	
	public static function get ( $param_name )
	{
		self::init();
		$res = self::$map [ $param_name ];
		// for now - throw an exception if now param in config - it will help prevent typos 
		if ( $res === null ) throw new Exception ( "Cannot find [$param_name] in config" ) ;
		// KalturaLog::log( "kConf [$param_name]=[$res]" );
		return $res; 
	}
	
	public static function hasParam($param_name)
	{
		self::init();
		return array_key_exists($param_name, self::$map);
	}

	public static function getDB()
	{
		return array (
		  'datasources' => 
		  array (
		    'default' => 'propel',
		  
		    'propel' => 
		    array (
		      'adapter' => 'mysql',
		      'connection' => 
		      array (
		      	'classname' => 'KalturaPDO',
		        'phptype' => 'mysql',
		        'database' => 'kaltura',
		        'hostspec' => '127.0.0.1',
		        'user' => 'root',
		        'password' => '7E#aSu+u',
				'dsn' => 'mysql:host=127.0.0.1;port=3306;dbname=kaltura;user=root;password=7E#aSu+u;',
		      ),
		    ),
		    
		  
		    'propel2' => 
		    array (
		      'adapter' => 'mysql',
		      'connection' => 
		      array (
		      	'classname' => 'KalturaPDO',
		        'phptype' => 'mysql',
		        'database' => 'kaltura',
		        'hostspec' => '127.0.0.1',
		        'user' => 'root',
		        'password' => '7E#aSu+u',
				'dsn' => 'mysql:host=127.0.0.1;port=3306;dbname=kaltura;user=root;password=7E#aSu+u;',
		      ),
		    ),
		    
		  
		    'propel3' => 
		    array (
		      'adapter' => 'mysql',
		      'connection' => 
		      array (
		      	'classname' => 'KalturaPDO',
		        'phptype' => 'mysql',
		        'database' => 'kaltura',
		        'hostspec' => '127.0.0.1',
		        'user' => 'root',
		        'password' => '7E#aSu+u',
				'dsn' => 'mysql:host=127.0.0.1;port=3306;dbname=kaltura;user=root;password=7E#aSu+u;',
		      ),
		    ),
		    
		  
		    'thumbs_sql' => 
		    array (
		      'adapter' => 'mysql',
		      'connection' => 
		      array (
		      	'classname' => 'KalturaPDO',
		        'phptype' => 'mysql',
		        'database' => 'kaltura',
		        'hostspec' => '127.0.0.1',
		        'user' => 'root',
		        'password' => '7E#aSu+u',
				'dsn' => 'mysql:host=127.0.0.1;port=3306;dbname=kaltura;user=root;password=7E#aSu+u;',
		      ),
		    ),
		    
		  
		    'sphinx_log' => 
		    array (
		      'adapter' => 'mysql',
		      'connection' => 
		      array (
		      	'classname' => 'KalturaPDO',
		        'phptype' => 'mysql',
		        'database' => 'kaltura',
		        'hostspec' => '127.0.0.1',
		        'user' => 'root',
		        'password' => '7E#aSu+u',
				'dsn' => 'mysql:host=127.0.0.1;port=3306;dbname=kaltura;user=root;password=7E#aSu+u;',
		      ),
		    ),
		    
		  
		    'sphinx_log_read' => 
		    array (
		      'adapter' => 'mysql',
		      'connection' => 
		      array (
		      	'classname' => 'KalturaPDO',
		        'phptype' => 'mysql',
		        'database' => 'kaltura',
		        'hostspec' => '127.0.0.1',
		        'user' => 'root',
		        'password' => '7E#aSu+u',
				'dsn' => 'mysql:host=127.0.0.1;port=3306;dbname=kaltura;user=root;password=7E#aSu+u;',
		      ),
		    ),
		    
		  
		    'sphinx' => 
		    array (
		      'adapter' => 'mysql',
		      'connection' => 
		      array (
				'dsn' => 'mysql:host=127.0.0.1;port=9312;',
		      ),
		    ),
			
		    'dwh' => 
		    array (
		      'adapter' => 'mysql',
		      'connection' => 
		      array (
				'dsn' => 'mysql:host=127.0.0.1;port=3306;dbname=kalturadw;user=etl;password=etl;',
		      ),
		    ),			
		    
		  ),
		  'log' => 
		  array (
		    'ident' => 'kaltura',
		    'level' => '7',
		  ),
		);
	}
}
?>
