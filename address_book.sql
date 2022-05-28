CREATE database address_book;
use address_book;

CREATE TABLE IF NOT EXISTS `tbl_contacts` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` text,
  `contact_no1` varchar(255) NOT NULL,
  `contact_no2` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) NOT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

INSERT INTO `tbl_contacts` (`contact_id`, `first_name`, `middle_name`, `last_name`, `address`, `contact_no1`, `contact_no2`, `email_address`, `profile_pic`) VALUES
(13, 'Rafael ', '', 'Nadal', '', '7777888855', '', 'nadal@live.in', '1398010176_Rafael_Nadal.jpg'),
(14, 'Shahrukh ', '', 'Khan', '', '4477853652', '', 'khan@khan.com', '1398010215_shahrukh-khan.jpg'),
(15, 'Shivaji', 'Rao', 'Gaikwad (Rajnikanth)', '', '00000000010', '', 'rajnikanth@live.in', '1398010360_1386158561294.gif'),
(11, 'Andrés', 'Iniesta', 'Luján', 'no idea', '7418529630', '', 'andres@gmail.com', '1398009865_inesta.jpg'),
(12, 'Mesut', '', 'Özil', '', '885566332200', '', 'ozil@arsenal.com', 'ozil.jpg'),
(16, 'Ana', '', 'Ivanovic', '', '8526547530', '', 'ana@yahoo.in', '1398010421_Ana-Ivanovic_-100x100.jpg'),
(17, 'Anushka', '', 'Sharma', '', '7744556699', '', 'anushaka@gmail.com', '1398010484_anushka-sharma.jpg'),
(18, 'Gareth', 'Frank', 'Bale', '', '7893691204', '', 'bale@madridfc.com', '1398010649_bale.jpg'),
(19, 'Cristiano', '', 'Ronaldo', '', '8855223366', '', 'ronaldo@madridfc.com', '1398010973_Cristiano_Ronaldo.jpg'),
(20, 'David', 'Robert Joseph', 'Beckham', '', '7755336699', '', 'beckham@america.com', '1398011013_david-beckham.jpg'),
(21, 'Roger', '', 'Federer', '', '4455669988', '', 'roger@federer.com', '1398011285_Federer-cincy-100x100.jpg'),
(22, 'Eldrick Tont', 'Tiger', 'Woods', 'tetdasd'' /dasdasd asdaskdj as', '7733115522', '', 'tiger@woods.com', '1398011427_fp__tiger-woods-shh.jpg'),
(23, 'Rahul', '', 'Dravid', '', '5588446699', '', 'rahul@india.com', '1398011525_image.jpg'),
(24, 'Jessica', 'Marie', 'Alba', '', '7418529603', '', 'jessica@alba.com', '1398011590_jessica_alba_photo.jpg'),
(25, 'William Henry', 'Bill', 'Gates', '', '4488997700', '', 'gates@microsoft.com', '1398011667_list-of-bill-gates-interviews.jpg'),
(26, 'Sachin', 'Ramesh', 'Tendulkar', '', '4658632102', '', 'sachin@india.com', '1398011707_main-thumb-t-9860-100-Gi5OwtApwPMJd1keZSAvlDhnUqGstrPm.jpeg'),
(27, 'Shahid', '', 'Afridi', '', '1388651400', '', 'boomboom@afridi.com', '1398011790_main-thumb-t-278364-100-Mfi8KGMof5QfphmrzSvGQLpmPKFEoDQ0.jpeg'),
(28, 'Vin', '', 'Diesel', '', '7418524560', '', 'vin@diesel.com', '1398011842_NEf8wL5JppkMik_1_zzb.jpg'),
(29, 'Jason', '', 'Statham', '', '4751236502', '', 'jason@hollywood.com', '1398011894_NExpXFk2QjRUBB_1_zzb.jpg'),
(30, 'Deepika', '', 'Padukone', '', '4848481250', '', 'deepika@bollywood.com', '1398011943_photo (1).jpg'),
(31, 'Dwayne', 'Douglas', 'Johnson', '', '0202020202', '', 'dwane@rock.com', '1398012010_photo (2).jpg'),
(32, 'Zinedine', 'Yazid', 'Zidane', '', '7777777707', '', 'zidane@zizou.com', '1398012060_photo.jpg'),
(33, 'Robert', 'John', 'Downey Jr', '', '7413215920', '', 'robert@hollywood.com', '1398012133_Robert-robert-downey-jr-33455685-100-100.png'),
(40, 'समर', '', 'सिंह', '', '1232137530', '', 'samar@live.in', ''),
(35, 'Salman', '', 'Khan', '', '8595754862', '', 'bhai@bollywood.com', '1398012218_Salman-Khan-100x100.jpg'),
(36, 'Yami', '', 'Gautam', '', '7465321245', '', 'yummy@yami.com', '1398012259_yami-gautam-practices-qidance-in-bangkok.jpg'),
(37, 'Sylvester', 'Gardenzio', 'Stallone', '', '4499775566', '', 'stallone@rocky.com', '1398012379_Sylvester_Stallone2010.jpg'),
(39, 'شیام', '', 'بنرجی', '', '12345678950', '', 'shyam@banerjee.com', '');