#
# Table structure for table 'tx_bookstoreapp_domain_model_author'
#
CREATE TABLE tx_bookstoreapp_domain_model_author (

	book int(11) unsigned DEFAULT '0' NOT NULL,

	name varchar(255) DEFAULT '' NOT NULL,
	description text

);

#
# Table structure for table 'tx_bookstoreapp_domain_model_topic'
#
CREATE TABLE tx_bookstoreapp_domain_model_topic (

	name varchar(255) DEFAULT '' NOT NULL,
	description text

);

#
# Table structure for table 'tx_bookstoreapp_domain_model_publisher'
#
CREATE TABLE tx_bookstoreapp_domain_model_publisher (

	name varchar(255) DEFAULT '' NOT NULL,
	description text,
	country int(11) unsigned DEFAULT '0'

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
	description text,
	pages int(11) DEFAULT '0' NOT NULL,
	author int(11) unsigned DEFAULT '0' NOT NULL,
	topic int(11) unsigned DEFAULT '0' NOT NULL,
	publisher int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_bookstoreapp_domain_model_country'
#
CREATE TABLE tx_bookstoreapp_domain_model_country (

	name varchar(255) DEFAULT '' NOT NULL

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

#
# Table structure for table 'tx_bookstoreapp_book_publisher_mm'
#
CREATE TABLE tx_bookstoreapp_book_publisher_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
