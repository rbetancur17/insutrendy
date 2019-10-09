alter table subcategories add ( status  int default '1' );

alter table subcategories_child add ( status  int default '1' );

alter table `products` change column `status` `status` int(11) null default '1' after `deleted_at`;

alter table `categories` change column `status` `status` int(11) null default '1' after `deleted_at`;