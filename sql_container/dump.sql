/*!40030 SET NAMES UTF8 */;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE things;

DROP TABLE IF EXISTS `dump`;
CREATE TABLE `dump` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL UNIQUE,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

INSERT INTO `dump` VALUES ('1','tabib123','kamahamaha123'),
('2','thomaspoopoo','minecraft12'),
('3','spiderman','c7b4'),
('4','carlos','C4rl0s87');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL UNIQUE,
  `password` varchar(60) NOT NULL,
  `mail` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

INSERT INTO `users` VALUES ('1','Miss Brionna Walter PhD','05e8c5cd75a1dfba01385cdf68157358','qprohaska@example.org'),
('2','Berta Volkman V','eff5795729d869dc2a7e7a33960c0449','nswift@example.net'),
('3','Sister McDermott','2b113a5144aa23bc15fe446ac40eb78b','will.fahey@example.org'),
('4','Mr. Mustafa Borer I','67cd110e19a5a85cc8b17cbfd21818a2','marielle.bogisich@example.net'),
('5','Kaylee Okuneva','b4477288c6fd2e5f68a18dd44d38f8b9','kirsten51@example.com'),
('6','Dr. Lora Stokes IV','51d5b49bdb0a738712a8476aade70892','meagan76@example.net'),
('7','Nadia Wilkinson I','607613cab0359b813f5e0939b63c31b7','rmertz@example.com'),
('8','Miss Meta Murphy','5f04d3aa745089a78792e80b0260be99','zelma.rosenbaum@example.net'),
('9','Prof. Caterina Douglas','5e535ba1e0732c3dd493812c43879219','dmaggio@example.org'),
('10','Augustine Nikolaus','b0f24ca3dec15431ba070596f85d204b','jenkins.nolan@example.net'),
('11','Jayme Funk','b9e529f53392a461ea36179b56bddaa1','areichel@example.net'),
('12','Ned Conroy','02f6af66b594d89eace311cea3f850fb','nathanael.runte@example.com'),
('13','Jessie Carroll','ad657527c0ddd422a281e0133a8c6545','uriah89@example.org'),
('14','Tiara Lebsack','9c62c77a486ea2b37398fcb2dbe7c8a3','rwalker@example.org'),
('15','Caesar Koepp','690e89d29442a6039874ad0322082dcc','mosciski.stanford@example.org'),
('16','Mr. Mason Franecki IV','c37787da3ed77aed4fff88e131f875ef','julie76@example.org'),
('17','Harvey Will','8d7a30bb0daae5d5445e0e730735417d','burdette.ziemann@example.net'),
('18','Baby Fisher','e7b4375359ee7dde674cba74b8980681','tyrel.kunde@example.org'),
('19','Mr. Manuela Krajcik I','1397f1d4a3cc0d25c8560577ea483d8e','jaylin.schaefer@example.net'),
('20','Martine Dickinson','09fb7a04013e1a0814351dfaad057799','maximillian.waelchi@example.net'),
('21','Michele Quigley','0736d6912f26d15bfeec4e0c236b68af','alex.sawayn@example.net'),
('22','Jeanne Daugherty','eb0e8d91a0f95700f84be9de8082d501','gerry28@example.org'),
('23','Prof. Murray Brakus PhD','9ad2f5f85d6c2e945c1a3c121242c4ae','thiel.coy@example.org'),
('24','Karine Gutmann','606a5a26d1a9ac0f28d18f78ada13fad','heather.reinger@example.com'),
('25','Cedrick Fahey','cd07c3e15b74cd2b8bf62439426116ca','kbashirian@example.net'),
('26','Damian Williamson','261e47268b16edc663e1974b81872ed7','leo77@example.org'),
('27','Oma Buckridge','171f571b6d5a9bbf89c0925bd45dce8b','hleuschke@example.org'),
('28','Mr. Carson Mante','7df83337ae0f6897d1a123dc67e3a669','ernser.green@example.com'),
('29','Arne Balistreri V','023ecf176d42aadf70baa55e828bbe09','uheaney@example.net'),
('30','Carolyne Nitzsche','ec03236c1e453133f62b3fc5094cd87f','drodriguez@example.net'),
('31','Karolann Wintheiser','99d613cdada958f1f6937472827f595b','cupton@example.com'),
('32','Maynard Hilll Jr.','dcfb10a44b85b10d96d7469f692cc3d9','aidan72@example.net'),
('33','Everette Keeling','81558ca08ea16be26c7dce9387bd58ea','ihowell@example.net'),
('34','Rolando Cormier','201402735e825dc8df31142e7d7b8db4','bernie.berge@example.org'),
('35','Nathanael Watsica DDS','2cee2938972b28ee2846dca1a6a8b463','jacobs.luigi@example.org'),
('36','Katelin Rath','53577508d275ba8e79f465b863dd77b0','myrna.friesen@example.com'),
('37','Shanny Little DDS','aa2dce1ca0491d6c4b1129c0149fe63e','rowe.jordy@example.net'),
('38','Christop Raynor','3dc32cd0f0b9980cbb3987bfee24de03','frankie.streich@example.com'),
('39','Mr. Jess Bode','e8abb123dd18d110b2964a70154151c1','howell.janiya@example.com'),
('40','Mr. Jamaal Johnson I','8d17a92b38de3c5f30782a7193c19691','monserrate79@example.org'),
('41','Eleanora Ratke Jr.','c4a40a07a4db0a966977ab1d89a1d131','ernser.giovanny@example.com'),
('42','Einar Beer','826987e3789480d0426fb6ce7dc43535','jaycee87@example.com'),
('43','Prof. Ryley Durgan','a1714e007b5c4d266f955c00ebab08e9','mgreenfelder@example.net'),
('44','Julianne Langosh','34d9d85c55144b746413aa9fb50339e3','angelita.feest@example.net'),
('45','Darren Koepp','1804acee7b0a7c04702d6460aebf106b','hfay@example.com'),
('46','Maggie Wyman','45c74df9ae9ba9eda2d69fabd7cb7f7d','reinger.kurtis@example.com'),
('47','Emmalee DuBuque','2da0a0ecb0347c05f0d81da96d26159b','roberts.jeramy@example.net'),
('48','Mr. Warren Hilpert','7103cb38ca6c283e31924115ee3ae90e','lula.d\'amore@example.org'),
('49','Clyde Keeling PhD','5ce648db36768852021b153ed4983e15','zbauch@example.com'),
('50','Lucinda Fahey','e8254427698b7274984322d001e38349','johns.gunner@example.org'),
('51','Ms. Reina Gaylord','84dabcfda9379c76acfc9c281dd23f17','hickle.johnathan@example.com'),
('52','Cecil Will','7a1a45ef30c2f903b879cae7697563f2','augustus.breitenberg@example.net'),
('53','Hayley Stanton','916c291fdd3427063eb967af2847f03e','kenya.green@example.net'),
('54','Elenor Rippin Sr.','22a3f84baf6240e08b5649d89800fee0','zoila00@example.net'),
('55','Dr. Corine Raynor DDS','9842949e5ca48c287b5707ef5b84b491','marks.marcella@example.com'),
('56','Seamus Crooks','ac090bf38694a1b87c2ac21e43be0e95','walker.zachary@example.net'),
('57','Keeley Hermiston','90afa1d7412908b1bf07ea9d752632f8','veda98@example.org'),
('58','Llewellyn Bins','28e36e754d61cd7474c01cfa4d781a3f','myriam94@example.net'),
('59','Turner Emmerich DDS','6a673b1ec557f184e11bdc64cd5fe8ac','nia37@example.org'),
('60','Mr. Jefferey Stracke','3553b6f10752362ebe57725e26f8e424','frankie56@example.com'),
('61','Lempi Harvey','42d308f088f021a67f0720ce3c337268','hanna12@example.org'),
('62','Delia Gutmann','4dc75813812c8d8d16ade965a47466cb','meta47@example.org'),
('63','Prof. Wiley Wilderman DDS','03e8c4c665bf9118628f5d06223654bf','lavern48@example.org'),
('64','Carmel McCullough','84ee8b33672c71d2f6ec4fe8a6cc811f','otis45@example.com'),
('65','Martina Rodriguez I','a3b47c46c14412821dee011fec6c45f6','gust85@example.com'),
('66','Elisha Wehner','ea6f396951beeeb0e10d34559c0dcdcd','sipes.erling@example.org'),
('67','Annamae Wyman','0b17af6085f0862cb9d58b94945e79ed','pwelch@example.net'),
('68','Theresa Senger','2652caaca009935b2861ec237f041d1a','dawson.kreiger@example.com'),
('69','Benjamin Nicolas','60ef7cbbdc01e62d6d67bc64176f84af','kerluke.leslie@example.org'),
('70','Mrs. Itzel Morar DDS','5ec8634da21908a0c8320d587ed35b09','sienna13@example.net'),
('71','Mr. Dario Funk','49690a513c7bdf0589d804cfb7af42d3','teagan.mckenzie@example.net'),
('72','Marian Lockman','e87706bcf371b4d708f47efaf7270f96','omiller@example.net'),
('73','Derrick Lemke','fe00866598b50e50499b4b60d37eaae9','kovacek.viva@example.net'),
('74','Keven Hodkiewicz IV','ce21a8a1167ec3f7774ba944a5b9dc0b','fwilkinson@example.com'),
('75','Kaylie Zulauf PhD','618445a7bdf815eb72ce7e1ade82c325','tsanford@example.com'),
('76','Kaitlin Toy','775874e45c69f26658d8089112fd58e1','okey.hartmann@example.net'),
('77','Chandler O\'Hara','f9cdbdecc7c58dd66fedb98144418406','xmckenzie@example.net'),
('78','Oswaldo Murazik','c3a67fb3d73ce09d95f0c384450de900','sherman.shanahan@example.com'),
('79','Mariela Terry','558ee4ebf3dd6d05b1a5b0f88e3a05eb','faustino67@example.com'),
('80','Gino Mante','b5790027076a623eb90fb8aee73f56c1','jadyn.roob@example.com'),
('81','Concepcion Smitham','7a189f183bf7e8f25cb04144d15a46b9','gail.murray@example.org'),
('82','Kenyatta Purdy Sr.','bcf9b6e4a10529475c9e46b571bf8a15','blair.conn@example.org'),
('83','Trevor Ondricka','731259fb23b18f98f6a29857600da4cb','abby.smith@example.org'),
('84','Henriette Gibson','04703e4443d107d655113bcbd2b31404','effertz.connie@example.com'),
('85','Shany McDermott PhD','4eb2352e30e5fd4317078fdacd586de6','bennett.zboncak@example.net'),
('86','Scottie Lind','7b87c0429f417ddbc5b151bcab09d8e4','o\'connell.kadin@example.com'),
('87','Dameon Deckow I','43aceeab897e207b4d7848cbd8535df5','madison.feest@example.net'),
('88','Jackie Heidenreich','8bd3b21a481af9946db0c16a0427608e','steuber.merle@example.com'),
('89','Prof. Hulda Armstrong MD','6f99749589e7315cbad817305ed866c1','qheaney@example.org'),
('90','Garland Rosenbaum','5ab1028c9ae3b9df1e2aec6b5decaeff','iboyle@example.com'),
('91','Ismael Crona','6bd6aade48dff259074a5203a0c68ed3','guy.olson@example.org'),
('92','Beulah Haley','14854268ebc75128a74c72480d145689','alanna.wisozk@example.net'),
('93','Prof. Colleen Hammes DDS','e051f9fc19449b15398e585415c01f04','hammes.destiney@example.org'),
('94','Alphonso Heathcote','53624b6326ad11a911d12cb08f6981f2','edicki@example.com'),
('95','Mrs. Nettie Wolff I','a13fa3a77ad4405132fab5aa0c176bc7','alvena.rempel@example.com'),
('96','Mrs. Camila Lakin','f93f4efc3d0661fe392b8c29e8523cf9','mathew.bernhard@example.com'),
('97','Gayle Botsford','672dc7f49a2b076421cd97d905b10b82','ferry.josh@example.net'),
('98','Prof. Nigel Jast II','7587e0829f4c369ae4346862ca388e66','sonny50@example.net'),
('99','Blaise Reynolds','a74f7c7ee32bcc4a39790ebced9ad212','alysha.ratke@example.net'),
('100','Miss Tiara Herzog','3eb0bb5082586f751704e0d08a5c9946','hjohnson@example.net'); 




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
