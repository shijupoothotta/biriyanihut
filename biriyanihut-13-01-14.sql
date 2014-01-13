/*
SQLyog Ultimate v8.3 
MySQL - 5.6.11 : Database - biriyanihut
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`biriyanihut` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `biriyanihut`;

/*Table structure for table `\'biriyani hut for export$\'` */

DROP TABLE IF EXISTS `\'biriyani hut for export$\'`;

CREATE TABLE `\'biriyani hut for export$\'` (
  `22` double DEFAULT NULL,
  `4` double DEFAULT NULL,
  `Chicken 65` varchar(255) DEFAULT NULL,
  `F4` varchar(255) DEFAULT NULL,
  `Chicken 65 is a spicy, deep-fried chicken dish popular in South` varchar(255) DEFAULT NULL,
  `13#99` decimal(19,4) DEFAULT NULL,
  `F7` varchar(255) DEFAULT NULL,
  `1` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `\'biriyani hut for export$\'` */

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` char(1) DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `admin` */

insert  into `admin`(`id`,`username`,`password`,`status`) values (1,'biriyanihut','1da1b64cf7b4f5a07512d76fa0b3723a841e5e4b','Y');

/*Table structure for table `bc_about` */

DROP TABLE IF EXISTS `bc_about`;

CREATE TABLE `bc_about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `n_sequence` int(11) DEFAULT NULL,
  `c_title` varchar(128) DEFAULT NULL,
  `c_description` text,
  `b_status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `bc_about` */

insert  into `bc_about`(`id`,`n_sequence`,`c_title`,`c_description`,`b_status`) values (1,1,'History','Hwo to handle the industry',1),(2,1,'Great','We are delighted to inform you that Biriyani Hut is ready to surprise your taste buds like never before! We love serving you and bringing the best of South Indian gourmet dishes to your plate. With a promise of unmatched quality and taste, we proudly invite you to our hut at Toowoomba. Visit us to enjoy the authentic taste of traditional Indian cuisine',1);

/*Table structure for table `bc_banner` */

DROP TABLE IF EXISTS `bc_banner`;

CREATE TABLE `bc_banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `c_title` varchar(64) DEFAULT NULL,
  `c_description` text,
  `c_image` varchar(255) DEFAULT NULL,
  `b_status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `bc_banner` */

insert  into `bc_banner`(`id`,`c_title`,`c_description`,`c_image`,`b_status`) values (1,'Biriyani Hut','We are delighted to inform you that Biriyani Hut\r\nis ready to surprise your taste buds like never before...','a6260c4a5a191b4acd72a4b11774954b.png',1),(2,'THALI','We serving the best traditional Thali\r\nwhich is an Indian and Nepalese meal made \r\nup of a selection of various dishes.','1de1cccafafc9c07be25926596cdd76c.png',1);

/*Table structure for table `bc_categories` */

DROP TABLE IF EXISTS `bc_categories`;

CREATE TABLE `bc_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `n_parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `c_category` varchar(64) DEFAULT NULL,
  `c_slug` varchar(64) DEFAULT NULL,
  `c_description` text,
  `c_image` varchar(255) DEFAULT NULL,
  `b_status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `bc_categories` */

insert  into `bc_categories`(`id`,`n_parent_id`,`c_category`,`c_slug`,`c_description`,`c_image`,`b_status`) values (1,0,'Entree','entree','Kick off your dinner party with this chic selection of starter ideas such as smart soups and prepare-ahead salads.','aa4ed7a746fac5739dfbb71f268866b4.jpg',1),(2,0,'Biriyani','biriyani','An Indian-inspired basmati rice dish with cauliflower, French beans, peas, potatoes, homemade curry paste and carrot salad','bf23b6c5872e1398ce87407efdd4af02.jpg',1),(3,0,'Fried Rice','fried-rice','Introduce your kids to Chinese food with this tasty, quick, rice recipe. fast and easy fried rice makes for a delicious Chinese supper.','04904b69abf10994ab09f421fdcf46bf.jpg',1),(4,0,'Checken Specials','checken-specials','Jazz up chicken breasts with an Italian tomato sauce with rosemary and garlic, baked like a casserole - it\'s a healthy choice, too','37a0d0b528b206b9ac5d2d73b04d9e3d.jpg',1),(5,0,'Beef Specials','beef-specials','A cheap cut of beef transformed into a tender treat. The sumptuous, step-by-step recipe for slow-cooked beef makes a great winter supper','b7ec0e4ecbcc254f9f1f3206f372a537.jpg',1),(6,0,'Lamb Specials','lamb-specials','Seal a leg of lamb in a parcel then roast it long and slow with garlic, lemon and herbs, and potatoes to soak up the delicious juices','efe79e337cd1cda40c1732a4ae2eaca6.jpg',1),(7,0,'Fish Specials','fish-specials','Give white fish fillets a creamy makeover with this quick and flavour-packed recipe','19059ca6424763002729572001b2e0c7.jpg',1),(8,0,'Fresh Juice','fresh-juice','Named after the nursery rhyme, this drink of \'oranges and lemons\' is a freshly squeezed treat for the morning','534a5aa515470ef32d67129f436dcf43.jpg',1);

/*Table structure for table `bc_contact` */

DROP TABLE IF EXISTS `bc_contact`;

CREATE TABLE `bc_contact` (
  `id` int(11) NOT NULL,
  `c_mobile` varchar(128) DEFAULT NULL,
  `c_phone` varchar(128) DEFAULT NULL,
  `c_email` varchar(128) DEFAULT NULL,
  `c_address_line1` varchar(128) DEFAULT NULL,
  `c_address_line2` varchar(128) DEFAULT NULL,
  `c_working_hours` varchar(128) DEFAULT NULL,
  `c_facebook` varchar(256) DEFAULT NULL,
  `c_twitter` varchar(256) DEFAULT NULL,
  `c_google` varchar(256) DEFAULT NULL,
  `c_instagram` varchar(256) DEFAULT NULL,
  `c_linkedin` varchar(256) DEFAULT NULL,
  `c_pininterest` varchar(256) DEFAULT NULL,
  `c_rssfeed` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bc_contact` */

insert  into `bc_contact`(`id`,`c_mobile`,`c_phone`,`c_email`,`c_address_line1`,`c_address_line2`,`c_working_hours`,`c_facebook`,`c_twitter`,`c_google`,`c_instagram`,`c_linkedin`,`c_pininterest`,`c_rssfeed`) values (1,'0435 506 711, 0468 953 111','(07) 4638 8405','orders@biriyanihut.com.au','209 Margaret Street','Toowoomba QLD 4350, Australia','11:00 am to 2:30 pm; 5:00 pm till late.','https://www.facebook.com/pages/Biriyani-Hut/351982364929267','','https://plus.google.com/114480079820962119096/about','','','','');

/*Table structure for table `bc_customer` */

DROP TABLE IF EXISTS `bc_customer`;

CREATE TABLE `bc_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(128) DEFAULT NULL,
  `c_phone` char(20) DEFAULT NULL,
  `c_email` varchar(128) DEFAULT NULL,
  `c_comments` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bc_customer` */

/*Table structure for table `bc_products` */

DROP TABLE IF EXISTS `bc_products`;

CREATE TABLE `bc_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `n_category_id` int(10) NOT NULL,
  `c_name` varchar(128) DEFAULT NULL,
  `c_slug` varchar(128) DEFAULT NULL,
  `c_description` text,
  `n_price` float(10,2) DEFAULT '0.00',
  `b_special` tinyint(4) DEFAULT '0',
  `c_image` varchar(128) DEFAULT NULL,
  `b_status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

/*Data for the table `bc_products` */

insert  into `bc_products`(`id`,`n_category_id`,`c_name`,`c_slug`,`c_description`,`n_price`,`b_special`,`c_image`,`b_status`) values (1,1,'Cutlet (Fish','cutlet-fish','Mashed potato with fish & authentic spices & herbs(no pic 2)',4.99,1,'87dab390133b95eeaade115c141440de.jpg',1),(2,1,'Cutlet (Beef)','cutlet-beef','Beef cooked in onion, tomato and cocounut pic gravy (no pic 2)',4.99,2,'7bf12d20246ce6320528a4f5dbf98673.jpg',1),(3,1,'Gobi Manchurian','gobi-manchurian','A popular Indo Chinese appetizer made with deep fried cauliflower mixed with curried spices and sauce',13.99,3,'5b285efc7e6b670b1c2712fe949fc994.jpg',1),(4,1,'Samosa','samosa','Deep fried pastry triangles filled with vegetables (2 pcs)',4.99,0,'cd71075152652fa5cc858b247831ab01.jpg',1),(5,1,'Pakora','pakora','Mixed vegetables spiced, dipped in batter and deep fried(2 pcs)',4099.00,0,'3e9a83f58eca394fa7c49810863bbe8e.jpg',1),(6,1,'Onion Bhaji','onion-bhaji','Small balls of onion spiced with ginger and garlic, dipped in batter and deep fried',4.99,0,'c4734734e6a7031c684736dbd54e7adf.jpg',1),(7,1,'Dried Chicken Tikka','dried-chicken-tikka','Succulent chicken breast fillets marinated and grilled in tandoor(4pcs)',9.99,0,'ed35c6586241779795775d6b87e83d52.jpg',1),(8,1,'Kerala Prawn','kerala-prawn','Pan fried prawn with special Kerala spices& vegetables(5 pcs)',9.99,0,'7357eefa21a83a4f05493f3801ea1604.jpg',1),(9,2,'Biriyani (Chicken)','biriyani-chicken','Biriyani cooked with fried Chicken Maryland served with egg, pickles and salads.(shop sp.)',9.99,0,'be3f9b5842312c0ce0e47343a547f407.jpg',1),(10,2,'Biriyani (Beef)','biriyani-beef','Biriyani cooked with fried Chicken Maryland served with egg, pickles and salads.(shop sp.)',14.99,0,'1cf48998b4f119725e3b03735bc5f64f.jpg',1),(11,2,'Biriyani (Lamb)','biriyani-lamb','Biriyani cooked with mutton cubes served with egg, pickles and salads.',15.99,0,'a03791e915332db3141057d4d4e80dde.jpg',1),(12,2,'Biriyani (Egg)','biriyani-egg','Eggs slowly cooked with basmati rice, special herbs & spices',9.99,0,'c84e882ee612e46f7a91f60f7f861683.jpg',1),(13,2,'Biriyani (Fish)','biriyani-fish','Biriyani cooked with boneless mackerel served with egg, pickles and salads.',19.99,0,'c163dcc3a7aada28574796222d88642a.jpg',1),(14,3,'Fried Rice (Veg)','fried-rice-veg','Flavored basmati rice stir fried with veggies served with papped, pickles and salads.',8.99,0,'9e56fd29fecd88aadfa7aaebe6c95991.jpg',1),(15,3,'Fried Rice (Mixed)','fried-rice-mixed','Fried rice with shrimp, egg & chicken pieces served with papped, pickles and salads.',14.99,0,'9c811fa98026ecbe36e007099ce41ace.jpg',1),(16,3,'Fried Rice (Chicken)','fried-rice-chicken','Fried rice with egg & shredded pieces of chicken served with papped, pickles and salads',9.99,0,'f05e97d12c1ec41e8ecdc7169383f2ad.jpg',1),(17,3,'Fried Rice (Shrimp)','fried-rice-shrimp','Fried rice with shrimp served with papped, pickles and salads.',11.99,0,'fdad9b63b3a823c45c22f32ffc18d08e.jpg',1),(18,3,'Fried Rice (Kerala special)','fried-rice-kerala-special','Fried rice with egg, chicken,nuts,shrimp & special herbs served with papped, pickles and salads.',14.99,0,'3b1e74bcd89f5387a73ae621b3564b76.jpg',1);

/*Table structure for table `bc_products_copy` */

DROP TABLE IF EXISTS `bc_products_copy`;

CREATE TABLE `bc_products_copy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `n_category_id` int(10) NOT NULL,
  `c_name` varchar(128) DEFAULT NULL,
  `c_slug` varchar(128) DEFAULT NULL,
  `c_description` text,
  `n_price` float(10,2) DEFAULT '0.00',
  `c_image` varchar(128) DEFAULT NULL,
  `b_status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=125 DEFAULT CHARSET=utf8;

/*Data for the table `bc_products_copy` */

insert  into `bc_products_copy`(`id`,`n_category_id`,`c_name`,`c_slug`,`c_description`,`n_price`,`c_image`,`b_status`) values (22,4,'Chicken 65','','Chicken 65 is a spicy, deep-fried chicken dish popular in South India, as a bar snack, entree, or quick snack. The flavour of the dish comes from ginger, cayenne pepper, mustard powder and lemon juice.',13.99,'',1),(23,4,'Kerala Chilly Chicken','','Chicken breast marinated with chilli, garlic, ginger & kerala spices',13.99,'',1),(24,4,'Cashew Chicken','','Indo-Chinese dish with stir-fried chicken, cooked with cashew paste & spices',13.99,'',1),(25,4,'Pepper Chicken','','fried Shreded Boneless chicken  made with Black pepper & Authentic South Indian Masala',13.99,'',1),(26,4,'Chicken Tikka Curry','','Boneless pieces of chicken lightly marinated with ginger, coriander and garam masala and cooked in the tandoor. A mild to medium dish.',13.99,'',1),(27,4,'Tandoori Chicken (Half)','','Tandoori Chicken is a Classic, Popular chicken dish from India, is marinated in yogurt, lemon juice, and plenty of spices. It is traditionally cooked at high temperatures in a tandoor (clay oven).',7.99,'',1),(28,4,'Tandoori Chicken (Full)','','Tandoori Chicken is a Classic, Popular chicken dish from India, is marinated in yogurt, lemon juice, and plenty of spices. It is traditionally cooked at high temperatures in a tandoor (clay oven).',14.99,'',1),(29,4,'Chicken Vindaloo','','Boneless pieces of chicken fillets cooked with hot chilli, spices, vinegar and potato.',13.99,'',1),(30,5,'Beef Roast','','Beef fried with coconut pieces & curry leaves with Kerala spices.',13.99,'',1),(31,5,'Beef Vindaloo','','Beef cooked with hot chilli, spices, vinegar and potato in special sauce.',13.99,'',1),(32,5,'Beef Masala','','(Beef cooked in onion, tomato and cocounut pic gravy)',13.99,'',1),(33,5,'Beef Pepper Fry','','beef cooked with onion,herbs and our special south indian spices',13.99,'',1),(34,6,'Lamb Kuruma','','Boneless lamb curry made with Coconut & South Indian Masala.',13.99,'',1),(35,6,'Lamb Rogan Josh','','Lamb cooked in a traditional Kashmiri masala and saffron.',13.99,'',1),(36,6,'Lamb Vindaloo','','Lamb cooked with hot chilli, vinegar and potato in a special sauce.',13.99,'',1),(37,7,'Fish Fry with Vegetable salads','','Pan fried fish pieces coated with kerala special masala served with vegetable salad.',18.99,'',1),(38,7,'Prawn Fry with Vegetable salad','','prawn pieces coated with kerala special masala served with vegetable salad.',18.99,'',1),(39,7,'Prawn Masala','','(Prawn cooked with onion and capsicum in masala gravy)',16.99,'',1),(40,7,'Prawn Malabari','','(Prawn cooked in creamy onion and coconut gravy)',17.99,'',1),(41,7,'Prawn Kuruma','','prawn cooked with cocuonut and south indian masala',16.99,'',1),(42,7,'Mixed Seafood masala served with Vegetables','','sea food prepared with tomato onian and spices',16.99,'',1),(43,9,'Plain Naan','','leavened bread cooked in the tandoor',1.99,'',1),(44,9,'Garlic Naan','','naan with touch of garlic',2.99,'',1),(45,9,'Cheese & Garlic Naan','','cheese naan with touch of garlic',4.99,'',1),(46,9,'Chicken  Naan','','naan stuffed  with spiced chicken',4.99,'',1),(47,9,'Peshwari Naan','','naan stuffed  with dried fruits and spices',4.99,'',1),(48,9,'Porotta','','Mix of Plain Flour (maida), Oil & Water to make dough, beaten, round layered & pan fried.',2.50,'',1),(49,9,'Chappathi','','Wheat Flour flat bed.',1.99,'',1),(50,9,'Vegetable Raita','','Whipped yogurt with bits of onion, tomato herbs and cucumber. Delicately spiced ..',2.99,'',1),(51,10,'Kerala Salad','','whipped yogurt with sliced onion ,tomato and chilli',2.99,'',1),(52,10,'Vegetable Salad','','',3.99,'',1),(53,10,'Mango Pickle','','Mango and chilies pickled with Indian herbs and hot spices',1.99,'',1),(54,10,'Lemon Pickle','','lime and chilies pickled with Indian herbs and hot spices',2.00,'',1),(55,8,'Sharja Shake','','Sweet smoothie with cashew, milk & banana',4.99,'',1),(56,8,'Strawberry Smoothie','','yummy strawberry smoothie specialy recomented by our chefs',4.99,'',1),(57,8,'Mango Smoothie','','yummy mango smoothie specialy recomented by our chefs',4.99,'',1),(58,8,'Banana Smoothie','','yummy banana smoothie specialy recomented by our chefs',4.99,'',1),(59,8,'Fresh Orange Juice','','Refreshing cold orange juice...',4.99,'',1),(60,8,'Fresh Mango Juice','','Refreshing cold orange juice...',4.99,'',1),(61,8,'Fresh Apple Juice','','Refreshing cold orange juice...',4.99,'',1),(62,8,'Fresh Pineapple Juice','','Refreshing cold orange juice...',4.99,'',1),(63,8,'Fresh Carrot Juice','','Refreshing cold orange juice...',4.99,'',1),(64,8,'Fresh Grape Juice','','Refreshing cold orange juice...',4.99,'',1),(65,8,'Fresh Water Mellon Juice','','Refreshing cold orange juice...',4.99,'',1),(66,11,'Gulab Jamun','','A traditional dessert of pastry balls served warm in cardamom and sugar syrup ... (3)',4.99,'',1),(67,11,'Fruit Salad','','A traditional dessert of pastry balls served warm in cardamom and sugar syrup ... (3)',5.99,'',1),(68,11,'Fruit Salad with Ice Cream','','A traditional dessert of pastry balls served warm in cardamom and sugar syrup ... (3)',6.99,'',1),(69,11,'Mixed Ice Cream','','A traditional dessert of pastry balls served warm in cardamom and sugar syrup ... (3)',4.99,'',1),(70,12,'Masala Dosa','','A paper-thin crispy pancake made from rice and  lentil, filled with potato masala served with coconut chutney,and sambar(vegetable stew)',9.99,'',1),(71,12,'Plain Dosa','','Dosa is a fermented crepe or pancake made from rice batter and black lentils. It is indigenous to and is a staple dish in the southern Indian states of Andhra Pradesh, Karnataka, Kerala, and Tamil Nadu. There are many varieties of Dosas available.served with coconut chutney,and sambar(vegetable stew)',7.99,'',0),(72,12,'Pepper roast Dosa','','Crispy Dosa.served with coconut chutney,and sambar(vegetable stew)',9.99,'',0),(73,12,'Ghee Roast Dosa','','Clarified Butter spread Dosa served with coconut chutney,and sambar(vegetable stew).',9.99,'',0),(74,12,'Corn Dosa','','A paper-thin crispy corn shape pancake made from rice and  lentil, filled with potato masala served with coconut chutney,and sambar(vegetable stew)',9.99,'',0),(75,12,'Uthappam','','South India\'s speciality or you can call it Indian  “Pizza” made of rice & lentil batter topped  with tomato, curry leaves, chillies & onions served with coconut chutney,and sambar(vegetable stew)',9.99,'',0),(76,12,'Egg Dosa','','Dosa is a fermented crepe or pancake made from rice batter and egg served with coconut chutney,and sambar(vegetable stew)',9.99,'',0),(77,12,'Appam','','Traditional south indian crispy fermented rice pan cake with coconut (3pcs)',6.00,'',0),(78,12,'Idiyappam','','Idiyappam is a traditional dish  from cuisine of Kerala. ...',5.99,'',0),(79,12,'Puttu','','Puttu is a South Indian dish of steamed cylinders of ground rice layered with coconut. It is highly popular in the Indian states of Kerala ...',5.99,'',0),(80,12,'Idli','','Gently steamed rice and lentil pillows served with Sambar and coconut chutney (3pcs)',5.99,'',0),(81,12,'Poori Bhaji','','South Indian puffed bread made of  wheat flour served with lightly spiced potato masala (3pcs)',9.99,'',0),(82,4,'Special Kerala Chicken Curry','','Pre-Order Only, minimum 4 units price per unit',10.99,'',0),(83,4,'Special Kerala Chicken Fry','','Pre-Order Only, minimum 4 units  price per unit',10.99,'',0),(84,4,'Mughal Chicken','','Pre-Order Only, minimum 2 units.  Stuffed with Herbs & Nuts price per unit',19.99,'',0),(85,5,'Traditional Beef Fry','','Pre-Order Only, minimum 4 units. Cooked in traditional pan',10.99,'',0),(86,5,'Traditional Beef Roast','','Pre-Order Only, minimum 4 units. price per unit',10.99,'',0),(87,5,'Traditional Beef Curry','','Pre-Order Only, minimum 4 units.  price per unit',10.99,'',0),(88,5,'Beef 25','','Pre-Order Only, minimum 4 units.  price per unit',10.99,'',0),(89,6,'Mutton Stew','','Pre-Order Only, minimum 4 units.  price per unit',13.99,'',0),(90,4,'Chicken Stew','','Pre-Order Only, minimum 4 units.  price per unit',10.99,'',0),(91,7,'Spicy hot Fish Curry','','Pre-Order Only, minimum 4 units. Cooked in traditional clay pot with Pieces of fish cooked in freshly made masala, hot chilli, tamarind and tempered with mustard seeds and curry leaves. price per unit',14.99,'',0),(92,7,'Spicy hot Fish Curry with Coconut milk','','Pre-Order Only, minimum 4 units.Prepared with King Fish flavoured with ginger,curry leaves, fenugreek and cocum finished in cocnut milk price per unit',14.99,'',0),(93,7,'Fish Peera','','Pre-Order Only, minimum 4 units.  price per unit',14.99,'',0),(94,7,'Seafood Peera','','Pre-Order Only, minimum 4 units.  price per unit',14.99,'',0),(95,1,'Kerala Snacks','','Pre-Order Only, minimum 25 units. (Parippu Vada, Uzhunnu vada, Unniyappam, Savadhan Vada, Vada Paav) price per unit',2.50,'',0),(96,12,'Ghee roast masala dosa','','Crispy pancake roasted in clarified butter filled with potato masala served with coconut chutney,and sambar(vegetable stew',9.99,'',0),(97,10,'Chicken salad','','chicken with bits of, tomato,onion ,lettus and cucumber . Delicately spiced ..',8.99,'',0),(98,13,'Hot tea','','Indian tea served with milk',3.00,'',0),(99,13,'Masala tea','','A traditional Indian masala tea with cinnamon, cloves and cardamom. Served with milk...',3.00,'',0),(100,13,'Coffee','','Full flavored and robust coffee',3.00,'',0),(101,13,'Lassi','','Refreshing whipped yogurt drink',3.99,'',0),(102,13,'Mango lassi','','Tradional indian beverage made by blended mango pulp and yoghurt',4.99,'',0),(103,12,'Chicken masala Dosa','','Marinated chicken and mashed potato stuffed in the thin crispy pancake.served with coconut chutney,and sambar(vegetable stew',14.99,'',0),(104,14,'Paneer Masala','','panner cooked with butter,onion, tomato,ginger ,garlicand special spices',13.99,'',1),(105,14,'Mushroom Kuruma','','fresh mushroom in a creamy gravy)',12.99,'',1),(106,14,'South Indian Daal','','Lentil curry cooked with onions, garlic and Indian spice.',9.99,'',1),(107,14,'Mixed Vegetable Curry','','Fresh vegetable cooked in mild sauce with Indian spices.',12.99,'',1),(108,14,'Vegetable Stew','','Pre-Order Only, minimum 4 units.  price per unit',9.99,'',0),(109,14,'Mixed Vegetable Kurma','','Fresh vegetable cooked in coconut based mild sauce with Indian spices.',13.99,'',0),(110,14,'Kadala Curry','','Chickpeas cooked in a masala of onions,tomato and herbs  price per unit',9.99,'',0),(111,2,'Special Chicken Biriyani','','lunch special Biriyani cooked with fried Chicken Maryland served with egg, pickles and salads.',9.99,'',0),(112,1,'Egg Roast','','Pre-Order Only, minimum 4 units.  price per unit',6.99,'',0),(113,1,'egg omlette','','Eggs cooked with fres onion,green chilli and herbs.',4.99,'',1),(114,1,'Fish & Chips','','kids menu',4.99,'',1),(115,1,'Chicken Nuggets&chips','','kids menu',4.99,'',1),(116,15,'Kappa (with & w/o Beef, Fish)','','Pre-Order Only, minimum 4 units. Kasava price per unit',14.99,'',0),(117,15,'Kappa Biriyani (Kappa+Beef)','','Pre-Order Only, minimum 4 units.  price per unit',10.99,'',0),(118,15,'Kappa Biriyani (Kappa+Prawn)','','Pre-Order Only, minimum 4 units.  price per unit',15.99,'',0),(119,16,'Spiced Pappadum','','Crispy lentil and peppercorn wafers with spices',2.00,'',1),(120,16,'Plain Pappadum','','Crispy lentil and peppercorn wafers',1.00,'',1),(121,16,'Rice + Curry + Naan+can of drink','','Lunch Special takrway 8.99/ dine in 10.99 +papped',0.00,'',0),(122,16,'Rice +  Curry x 2 + Naan + can of drink','','Lunch Special takeway11.99/dine in 13.99+papped',0.00,'',0),(123,16,'Fried Rice + Butter Chicken+can of drink','','Lunch Special takeway 11.99/dine in13.99',0.00,'',0),(124,11,'South Indian Payasams','','Pre-Order Only, minimum 25 units. (Any of Pradhaman, Rice, Mung beans, Thrissur, Vermicelli or Milk) price per unit',4.99,'',0);

/*Table structure for table `bc_settings` */

DROP TABLE IF EXISTS `bc_settings`;

CREATE TABLE `bc_settings` (
  `c_type` char(20) DEFAULT NULL,
  `n_val` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `bc_settings` */

insert  into `bc_settings`(`c_type`,`n_val`) values ('ABOUT_FRONT',1);

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ci_sessions` */

insert  into `ci_sessions`(`session_id`,`ip_address`,`user_agent`,`last_activity`,`user_data`) values ('2b5f2676a46329e40a81407113e38128','0.0.0.0','Mozilla/5.0 (Windows NT 6.2; rv:26.0) Gecko/20100101 Firefox/26.0',1389535352,''),('26df9b0ec04c10130708db7216eb7b04','0.0.0.0','Mozilla/5.0 (Windows NT 6.2; rv:26.0) Gecko/20100101 Firefox/26.0',1388609829,''),('68cffa0f19930acd481e5f4c90e854df','0.0.0.0','Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36',1389534239,''),('bcc35169b36ed02cdbe1ccf8727eca30','0.0.0.0','Mozilla/5.0 (Windows NT 6.2; rv:26.0) Gecko/20100101 Firefox/26.0',1388597098,''),('69205361ca2d8217487bbbf91eca8fce','0.0.0.0','Mozilla/5.0 (Windows NT 6.2; rv:26.0) Gecko/20100101 Firefox/26.0',1388603812,'a:3:{s:15:\"admin_logged_in\";a:2:{s:8:\"username\";s:11:\"biriyanihut\";s:2:\"id\";s:1:\"1\";}s:8:\"username\";s:11:\"biriyanihut\";s:2:\"id\";s:1:\"1\";}');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
