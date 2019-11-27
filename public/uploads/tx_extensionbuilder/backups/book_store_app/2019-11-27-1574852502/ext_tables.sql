#
# Table structure for table 'tx_bookstoreapp_domain_model_author'
#
CREATE TABLE tx_bookstoreapp_domain_model_author (

	book int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_bookstoreapp_domain_model_topic'
#
CREATE TABLE tx_bookstoreapp_domain_model_topic (

);

#
# Table structure for table 'tx_bookstoreapp_domain_model_chapter'
#
CREATE TABLE tx_bookstoreapp_domain_model_chapter (

	book int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_bookstoreapp_domain_model_book'
#
CREATE TABLE tx_bookstoreapp_domain_model_book (

	isbn varchar(255) DEFAULT '' NOT NULL,
	title varchar(255) DEFAULT '' NOT NULL,
	blurb text,
	price double(11,2) DEFAULT '0.00' NOT NULL,
	image int(11) unsigned NOT NULL default '0',
	author int(11) unsigned DEFAULT '0' NOT NULL,
	chapter int(11) unsigned DEFAULT '0' NOT NULL,
	topic int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_bookstoreapp_domain_model_author'
#
CREATE TABLE tx_bookstoreapp_domain_model_author (

	book int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_bookstoreapp_domain_model_chapter'
#
CREATE TABLE tx_bookstoreapp_domain_model_chapter (

	book int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_bookstoreapp_book_topic_mm'
#
CREATE TABLE tx_bookstoreapp_book_topic_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
