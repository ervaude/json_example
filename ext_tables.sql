#
# Table structure for table 'tx_jsonexample_domain_model_tag'
#
CREATE TABLE tx_jsonexample_domain_model_tag (
	title varchar(255) DEFAULT '' NOT NULL,
);

#
# Table structure for table 'tx_jsonexample_domain_model_post'
#
CREATE TABLE tx_jsonexample_domain_model_post (
	title varchar(255) DEFAULT '' NOT NULL,
	post_text varchar(255) DEFAULT '' NOT NULL,
	tags int(11) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_jsonexample_post_tag_mm'
#
CREATE TABLE tx_jsonexample_post_tag_mm (
  uid_local tinyint(4) DEFAULT '0' NOT NULL,
  uid_foreign tinyint(4) DEFAULT '0' NOT NULL,
  tablenames varchar(30) NOT NULL DEFAULT '',
  sorting tinyint(4) DEFAULT '0' NOT NULL,
  KEY `uid_local` (`uid_local`),
  KEY `uid_foreign` (`uid_foreign`)
);
