-- CREATE DATABASE  IF NOT EXISTS `miranda_db`;
-- USE `miranda_db`;
SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `amenity`;
CREATE TABLE `amenity` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



LOCK TABLES `amenity` WRITE;
INSERT INTO `amenity` VALUES (1,'Breakfast'),(2,'Locker'),(3,'Kitchen'),(4,'24/7 Online Support'),(5,'High Speed Wifi'),(6,'Air Conditioner'),(7,'Shop Near'),(8,'Single Bed'),(9,'Expert Team'),(10,'Towels'),(11,'Cleaning'),(12,'Shower'),(13,'Smart Security');
UNLOCK TABLES;



DROP TABLE IF EXISTS `booking`;

CREATE TABLE `booking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `check_in` timestamp NOT NULL,
  `check_out` timestamp NOT NULL,
  `hour_check_in` varchar(50) NOT NULL,
  `hour_check_out` varchar(50) NOT NULL,
  `discount` int NOT NULL,
  `special_request` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `room` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `room` (`room`),
  CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`room`) REFERENCES `room` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



LOCK TABLES `booking` WRITE;
INSERT INTO `booking` VALUES (1,'Mrs. Kristen Jones','2024-12-10 10:33:56','2025-03-24 11:56:08','2025-04-14 02:24:02','10:17:24','15:13:42',52,'Acidus illo argentum admoveo aut sumo universe adamo verumtamen. Demulceo demonstro molestiae suppono vestrum deinde decumbo teres. Vulgaris appono vigor tersus delibero accusamus benigne vel cunae facere.','Check In',9),(2,'Israel Stanton','2023-11-16 13:54:55','2024-08-14 15:31:57','2024-08-16 21:25:32','12:50:28','10:58:37',9,'Capitulus cogo animadverto. Thorax admoneo damno. Sufficio suffoco color esse calculus constans deprecator.','Check In',1),(3,'Tonya Langworth-Wyman','2024-11-24 14:17:48','2025-03-11 08:23:36','2025-03-29 18:21:25','12:28:53','22:19:03',81,'Audio somnus demergo ubi addo complectus stips spero tendo asper. Error terra canis iste. Delibero crudelis vorago decet cui advenio denego cognomen qui testimonium.','Check Out',6),(4,'Mr. Sam Lind PhD','2023-12-25 12:45:02','2024-06-18 23:59:16','2024-07-17 12:44:38','21:55:31','15:28:01',75,'Adstringo volubilis perspiciatis cito apostolus patruus cariosus arbor tot. Canonicus aer ab viridis. Audentia subito angelus theatrum administratio vestigium arcus.','Check Out',3),(5,'Blake Effertz','2024-02-19 21:58:58','2025-01-26 01:33:28','2025-02-20 18:46:05','1:37:35','9:22:02',20,'Volva appositus ultra. Absorbeo annus audentia crepusculum cetera illo deserunt placeat vinitor. Veritatis admiratio adaugeo viriliter calcar attonbitus varietas pax coerceo.','Check In',13),(6,'Judy Langosh','2023-11-05 20:29:34','2024-06-28 20:50:19','2024-07-28 06:14:39','6:21:07','1:14:22',28,'Adsidue atqui totus. Varius volva labore brevis thesaurus. Acceptus ullus harum.','Check Out',4),(7,'Mr. Terrell Romaguera','2024-04-12 17:45:46','2024-11-29 01:00:17','2024-12-18 01:52:09','13:48:27','15:09:47',80,'Capitulus uberrime saepe claro creo. Adimpleo vulgivagus alter sortitus communis tondeo non. Suadeo derelinquo terra tertius aiunt celo correptius vomica porro umerus.','Check In',12),(8,'Karen Wilkinson','2024-11-09 08:36:05','2024-12-16 12:20:07','2024-12-30 05:07:18','16:29:48','4:44:26',75,'Aspicio saepe cometes tendo. Textus vilis audeo doloremque calculus tabesco tabella complectus clamo. Candidus cunae triduana comprehendo tracto vobis adamo vindico.','Check In',8),(9,'Olive Metz','2024-06-27 12:56:52','2025-03-01 23:38:02','2025-03-22 07:34:11','12:44:03','9:21:37',25,'Apostolus vesper carpo amplexus thesaurus valens succurro thorax. Caries creator sustineo creo. Placeat tubineus conicio accedo volutabrum suscipit cilicium.','Check Out',5),(10,'Ernesto Cassin','2024-02-24 08:13:54','2024-06-10 06:42:40','2024-07-08 23:04:52','19:42:55','18:02:43',37,'Quia sapiente consequatur calcar temperantia vinculum pauper conor abundans beneficium. Aggero acidus suffoco tondeo aurum vulariter decor pax confido. Suffragium velit denego cernuus tres aranea conicio sollicito tenus.','Check Out',7),(11,'Franklin Daniel','2023-10-19 08:21:40','2024-10-07 22:32:08','2024-10-19 22:13:57','3:28:28','5:10:24',80,'Adicio spero velum. Tertius amissio defero id dolores adaugeo. Tubineus territo cibus casso carcer curtus deficio.','Check In',14),(12,'Gregory Jacobson','2024-07-11 22:25:51','2024-11-15 07:29:49','2024-11-23 22:07:06','15:48:43','22:25:29',92,'Fugit communis adsuesco capio. Abeo deorsum cura patria cras atrocitas sum aeger. Acsi currus appello admitto.','Check In',2),(13,'Sheldon Ledner','2024-07-10 12:43:33','2024-07-17 13:59:10','2024-07-29 14:37:52','13:50:33','1:49:56',84,'Aptus calamitas tego solio ubi cohibeo amissio depromo. Confero tactus commodo sono volva doloribus toties. Doloremque adhaero unus desidero utroque aufero.','Check Out',11),(14,'Dr. Elisa Haley','2024-02-11 20:26:17','2024-07-18 13:29:56','2024-08-06 04:38:12','1:47:09','9:13:33',35,'Vado volutabrum caste pax crux ventito ullam. Curiositas degenero vesco umerus valde ducimus accendo argentum thalassinus corrigo. Ultio carmen excepturi theatrum eum terror.','Check In',10),(15,'Bradford Hayes','2023-12-03 23:44:05','2024-11-25 07:28:54','2024-12-19 10:50:21','14:50:41','0:45:16',98,'Talis utique dicta dignissimos amitto sophismata. Tempora voluptas arcesso tabula alius. Aperio socius correptius copiose trans thermae volup umerus creo sublime.','Check In',15),(16,'Alejandro Fisman','2024-05-07 12:53:00','2026-01-10 23:00:00','2026-02-21 23:00:00','12:00','11:00',0,'Test php','Check In',1),(17,'Alejandro Fisman','2024-05-07 13:31:00','2024-12-08 23:00:00','2025-01-30 23:00:00','12:00','11:00',0,'Test php','Check In',1),(18,'Alejandro Fisman','2024-05-07 13:31:40','2024-07-21 22:00:00','2024-08-21 22:00:00','12:00','11:00',0,'Test php2','Check In',1),(19,'Alejandro Fisman','2024-05-08 08:06:05','2024-05-14 22:00:00','2024-05-28 22:00:00','12:00','11:00',0,'a','Check In',1),(20,'Alejandro Fisman','2024-05-08 09:08:27','2024-04-10 22:00:00','2024-04-30 22:00:00','12:00','11:00',0,'a','Check In',1);
UNLOCK TABLES;



DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL,
  `subject` varchar(255) NOT NULL,
  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `contact` WRITE;
INSERT INTO `contact` VALUES (1,'Harry Cormier','Elinore90@yahoo.com','236.810.3479 x58346','Amoveo ab turpis veritatis auctor carpo coniuratio. Tempora arceo adiuvo toties aveho alter vir tum. Beatae illo agnitio vigilo accusamus torqueo cura clementia.\nVotum demergo abbas. Desipio aer abduco ventus socius crudelis. Tamdiu soleo aliquid summopere thymbra sit blanditiis defendo comis altus.','vaco stabilis'),(2,'Herbert Carter','Magali_Tremblay@gmail.com','1-552-688-8204 x082','Tabgo tantum dignissimos cohaero eum. Cogito alveus veniam damnatio patior amissio velut crapula vulariter. Depulso amor substantia advenio varius iure tremo tricesimus.\nStipes autus aufero clam placeat callide. Labore pecco denique comitatus audacia nemo sto vere tristis thymbra. Delectatio voveo vesco comptus cogo claro terror voluptatum aetas tracto.','vestigium desino');
UNLOCK TABLES;

--
--

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(420) NOT NULL,
  `description` text NOT NULL,
  `start_date` timestamp NOT NULL,
  `status` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


LOCK TABLES `employee` WRITE;
INSERT INTO `employee` VALUES (1,'Israel Kunde','958.527.9263 x699','Henriette.Fay@gmail.com','https://avatars.githubusercontent.com/u/10717774','Cum dignissimos cavus voluptatibus adulescens. Adfectus damnatio vere ulciscor vallum quas theca curvo deludo.','2017-03-29 19:57:27','true','Reception','$2a$10$.Fu.2AOLdvVEp0HHblMmAOajszuaulB05iy/A6y2ecU.j85cidTF.'),(2,'Alexandra Schamberger DDS','475-638-0848 x1638','Orion_Sanford@yahoo.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/77.jpg','Adficio vulticulus temptatio asporto summopere clam toties. Certus ventito statim territo calcar quam aeger adfero speciosus.','2019-12-14 21:16:45','true','Manager','$2a$10$pOCjv2p4GTzL2w5UjIUpFezSxuetysAlG3tqWrNvspSQkt6NOQOAC'),(3,'Eloise Crona','465-839-4300 x44792','Henri40@yahoo.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/947.jpg','Conscendo colligo aspicio sublime alius. Cubitum tandem deserunt somniculosus.','2022-08-05 21:26:37','true','Reception','$2a$10$FHEQhql8LrkAd.sHBbz8DuaJ0XEaFA9LU.l6Qr6.iI2W7S6S1tgea'),(4,'Darrin Volkman','598-415-3032 x358','Madilyn36@hotmail.com','https://avatars.githubusercontent.com/u/57672957','Corona deripio comburo laboriosam assumenda desipio sordeo cohibeo crebro. Ubi caelestis verto.','2019-06-05 09:59:07','true','Manager','$2a$10$l1jYDpibQfkxmPIkk12cte3yGuCeQvqWjbxkzvvh.V/7h4l6XYGki'),(5,'Miss Naomi Stark','989.926.0693 x3377','Daphnee.Wyman-Volkman@yahoo.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/166.jpg','Apto vis veritas cerno. Canto dolor aurum auxilium cursim ipsum crur somniculosus arbor.','2021-08-06 00:34:59','true','Room Service','$2a$10$vxY0/AS7mJF0ZcjhIAgATuqDCtu2yXr9kE7g5.dZQOVi9TSY6ZKWW'),(6,'Randolph Zemlak','1-645-390-2858 x839','Justice32@hotmail.com','https://avatars.githubusercontent.com/u/78503303','Vel itaque spargo corona casso stabilis absens adstringo usus. Bellicus deinde consectetur depono eius sit.','2020-05-30 17:36:40','true','Room Service','$2a$10$hCUlDsaPAFWx8AaXHgCvs.wO6TLeYYnPEuNrqmOzBPrWH63c0p3y.'),(7,'Micheal Hessel','764-556-7156','Ignacio_Bauch4@yahoo.com','https://avatars.githubusercontent.com/u/96060646','Sonitus venia clarus capto cilicium dicta video vulpes cogo claro. Administratio utor utpote carbo eos soluta ipsum hic.','2022-10-26 15:55:02','true','Room Service','$2a$10$kfhUT3T0M7J/wClI4AkO7ej4QOBXGDixy6T19MO25ZIjmOdNeSiEq'),(8,'Miss Joanne MacGyver','926.670.1482','Beth32@hotmail.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1052.jpg','Calamitas spero thema aspicio voveo casus delego. Sapiente denuncio tutamen ducimus vicinus saepe contigo.','2016-04-16 09:53:50','true','Manager','$2a$10$Binwjs8.B47sXUMaIn.4VeO6v/4G3IHCTrqtO2MXSBiRsJQk5Y6Ea'),(9,'Harry Wisoky','(790) 518-5138 x265','Jamarcus12@hotmail.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/456.jpg','Repellendus clamo ago ater patior. Arcesso vinculum blandior.','2014-07-30 03:22:39','true','Reception','$2a$10$FKk4Ru8EYf6e.ppzRxn6RuIVk0ah3KtACjvnJsMeoAt7VnQiB2C4y'),(10,'Gretchen Greenholt-Heaney Jr.','469-391-2195 x78116','Emmy.Walsh26@hotmail.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/600.jpg','Speculum cubo cras tres audio. Victus blandior vulpes.','2016-06-24 11:14:43','true','Room Service','$2a$10$fx7L5ib2M8CnWSXtCluGUe9vWh.LZDnVDMNI/14mG6fJAj4vGOhfO'),(11,'Bridget Heller','1-212-371-9579 x6766','Madilyn_Harvey26@gmail.com','https://avatars.githubusercontent.com/u/17163398','Claudeo officiis cibo solitudo. Fugit consectetur amiculum aspernatur.','2016-10-26 23:31:25','true','Room Service','$2a$10$Ed4x3rlSNBUnplLSN7LXbuTmYn1DhiAtyQDUkfBLvON.AN/uO33Ma'),(12,'Winston Stracke','1-768-943-0430 x12098','Juana.Corkery47@hotmail.com','https://avatars.githubusercontent.com/u/19437956','Provident abscido nemo adsidue tumultus varius tamisium nostrum. Arbor mollitia subseco deprimo audeo eveniet tum vigor thymbra quo.','2016-02-26 17:10:47','true','Reception','$2a$10$mvWymj3JM.K.rlkbuVJC3ukS3CksmT.izfAeByjSqKu8vZoAYpHXG'),(13,'Carlton Zulauf','265-409-6535 x57039','Asa30@hotmail.com','https://avatars.githubusercontent.com/u/67425161','Defluo tepidus corrupti cetera. Aeternus deputo temeritas defessus volo dolor corrumpo stultus.','2021-03-19 14:43:01','true','Room Service','$2a$10$C4TurRlokCZVSaTVYJ8AnucCzujUvVr57.YJ/XY6RpCclgEw6J1Ti'),(14,'Micheal Reilly','853-742-4791 x8500','Catharine.Keebler99@hotmail.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1152.jpg','Vapulus delectus verbum adversus nam officia. Audacia annus alienus aequitas campana caveo totus.','2020-05-25 04:42:07','true','Manager','$2a$10$ckjxi.19FE5.4/rcJC/5oOBuGnbbmIb/2ZkRHUiqVn8cn9XPk8K4i'),(15,'Sherman Bauch','(865) 562-8688 x74102','Jadon15@hotmail.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/131.jpg','Stella maiores sono tutamen summisse. Rerum considero apto validus desidero commemoro.','2016-12-30 21:25:27','true','Room Service','$2a$10$Lqi.4iWvwJ9EgGMSVzmK.eCEke4td5zBfgg2qTL/5R/bS.RTK.AG6');
UNLOCK TABLES;



DROP TABLE IF EXISTS `photo`;

CREATE TABLE `photo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `url` varchar(500) DEFAULT NULL,
  `room_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



LOCK TABLES `photo` WRITE;
INSERT INTO `photo` VALUES (1,'https://loremflickr.com/640/480/hotel,bedroom?lock=3006103642177536',1),(2,'https://loremflickr.com/640/480/hotel,bedroom?lock=3006103642177536',1),(3,'https://loremflickr.com/640/480/hotel,bedroom?lock=6248295640858624',1),(4,'https://loremflickr.com/640/480/hotel,bedroom?lock=39472515252224',2),(5,'https://loremflickr.com/640/480/hotel,bedroom?lock=8120954471317504',2),(6,'https://loremflickr.com/640/480/hotel,bedroom?lock=4517121805516800',2),(7,'https://loremflickr.com/640/480/hotel,bedroom?lock=5654995420577792',3),(8,'https://loremflickr.com/640/480/hotel,bedroom?lock=2277544665546752',3),(9,'https://loremflickr.com/640/480/hotel,bedroom?lock=7875646533402624',3),(10,'https://loremflickr.com/640/480/hotel,bedroom?lock=2375943192576',4),(11,'https://loremflickr.com/640/480/hotel,bedroom?lock=697826031960064',4),(12,'https://loremflickr.com/640/480/hotel,bedroom?lock=2749962150477824',4),(13,'https://loremflickr.com/640/480/hotel,bedroom?lock=749731722559488',5),(14,'https://loremflickr.com/640/480/hotel,bedroom?lock=7102145237090304',5),(15,'https://loremflickr.com/640/480/hotel,bedroom?lock=8095693642137600',5),(16,'https://loremflickr.com/640/480/hotel,bedroom?lock=1082647526768640',6),(17,'https://loremflickr.com/640/480/hotel,bedroom?lock=6362904605491200',6),(18,'https://loremflickr.com/640/480/hotel,bedroom?lock=3703904059523072',6),(19,'https://loremflickr.com/640/480/hotel,bedroom?lock=8477851519025152',7),(20,'https://loremflickr.com/640/480/hotel,bedroom?lock=6404911545712640',7),(21,'https://loremflickr.com/640/480/hotel,bedroom?lock=8398276850089984',7),(22,'https://loremflickr.com/640/480/hotel,bedroom?lock=4751920935731200',8),(23,'https://loremflickr.com/640/480/hotel,bedroom?lock=2435970299330560',8),(24,'https://loremflickr.com/640/480/hotel,bedroom?lock=392272136896512',8),(25,'https://loremflickr.com/640/480/hotel,bedroom?lock=3668219449573376',9),(26,'https://loremflickr.com/640/480/hotel,bedroom?lock=8891462294962176',9),(27,'https://loremflickr.com/640/480/hotel,bedroom?lock=8629583152676864',9),(28,'https://loremflickr.com/640/480/hotel,bedroom?lock=2730156248530944',10),(29,'https://loremflickr.com/640/480/hotel,bedroom?lock=3299521731756032',10),(30,'https://loremflickr.com/640/480/hotel,bedroom?lock=5969560899420160',10),(31,'https://loremflickr.com/640/480/hotel,bedroom?lock=2604062906253312',11),(32,'https://loremflickr.com/640/480/hotel,bedroom?lock=4743129831833600',11),(33,'https://loremflickr.com/640/480/hotel,bedroom?lock=8165253816778752',11),(34,'https://loremflickr.com/640/480/hotel,bedroom?lock=8082816868810752',12),(35,'https://loremflickr.com/640/480/hotel,bedroom?lock=2065100724764672',12),(36,'https://loremflickr.com/640/480/hotel,bedroom?lock=388287497764864',12),(37,'https://loremflickr.com/640/480/hotel,bedroom?lock=4812700171370496',13),(38,'https://loremflickr.com/640/480/hotel,bedroom?lock=4467203193700352',13),(39,'https://loremflickr.com/640/480/hotel,bedroom?lock=4485869249495040',13),(40,'https://loremflickr.com/640/480/hotel,bedroom?lock=2656174637842432',14),(41,'https://loremflickr.com/640/480/hotel,bedroom?lock=7163381572173824',14),(42,'https://loremflickr.com/640/480/hotel,bedroom?lock=6677840623828992',14),(43,'https://loremflickr.com/640/480/hotel,bedroom?lock=7927703728553984',15),(44,'https://loremflickr.com/640/480/hotel,bedroom?lock=2056894610931712',15),(45,'https://loremflickr.com/640/480/hotel,bedroom?lock=1922240216039424',15);
UNLOCK TABLES;


DROP TABLE IF EXISTS `room`;

CREATE TABLE `room` (
  `id` int NOT NULL AUTO_INCREMENT,
  `room_type` varchar(255) NOT NULL,
  `room_number` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `offer` varchar(255) NOT NULL,
  `room_floor` varchar(255) NOT NULL,
  `rate` int NOT NULL,
  `discount` int NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


LOCK TABLES `room` WRITE;
INSERT INTO `room` VALUES (1,'Single Room','denuncio-16','Studio synagoga velum valetudo copiose. Aegrus viscus videlicet desolo.','YES','5',33756,93,'Booked'),(2,'Double Room','trepide-38','Nesciunt vallum una usus peccatus. Dapifer adimpleo amoveo aurum alii votum absens quis condico.','NO','19',8824,0,'Booked'),(3,'Suite','corroboro-125','Suffoco quis confero addo annus utrum impedit aduro aer. Tolero cultellus centum ipsam tamquam curriculum.','YES','21',6147,77,'Booked'),(4,'Suite','benevolentia-202','Unus video sollers cogo modi. Ancilla dapifer ancilla cattus cupressus.','YES','3',20972,89,'Available'),(5,'Single Room','adhuc-202','Victus cuius accendo perferendis virtus coerceo cresco vilitas cometes caries. Ara caput asperiores thesaurus tabgo aut utrimque.','NO','5',24273,0,'Booked'),(6,'Double Room','ultio-102','Creta bos venia verus admoveo dolore deficio trucido. Compono timor territo vivo apto cena spiculum summa sublime coepi.','YES','18',13174,81,'Available'),(7,'Double Room','defero-56','Degero catena auditor curiositas. Aeternus cicuta curvo taedium trans tabesco adaugeo sortitus.','YES','20',23816,79,'Available'),(8,'Deluxe Superior','acsi-81','Arceo cibus turpis depono admoveo. Desino aequitas tenus absorbeo thesis talis colo accusator earum degero.','NO','20',9279,0,'Booked'),(9,'Single Room','cresco-29','Concido urbs color pariatur. Eveniet suppono antea inflammatio terreo tergeo teneo celebrer.','NO','9',7575,0,'Booked'),(10,'Single Room','tredecim-202','Tempus altus coerceo quaerat sequi caelum brevis pecus auditor quod. Ustilo ager cum tergum vitiosus cuius.','NO','13',16825,0,'Booked'),(11,'Suite','dolores-144','Vallum umerus articulus timor tristis stella abeo. Nesciunt amaritudo appono aeternus attonbitus bardus.','YES','6',5363,12,'Booked'),(12,'Double Room','voluptate-96','Dicta a volubilis tracto certe illo defungo decens. Traho bibo usitas ars iusto curtus caries volutabrum.','NO','17',31201,0,'Booked'),(13,'Suite','advoco-168','Sint beatus cognatus. Tunc calamitas vetus adopto xiphias desidero curia tonsor.','NO','14',32415,0,'Booked'),(14,'Deluxe Superior','creptio-237','Surgo molestias turbo verto. Crux currus urbanus.','YES','16',25911,71,'Booked'),(15,'Double Room','caput-135','Cometes vigor laudantium eveniet demum. Comminor talus thesis tribuo tertius spiculum bestia degero.','YES','6',34514,15,'Available');
UNLOCK TABLES;



DROP TABLE IF EXISTS `room_amenity`;

CREATE TABLE `room_amenity` (
  `id` int NOT NULL AUTO_INCREMENT,
  `room_id` int NOT NULL,
  `amenity_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `room_id` (`room_id`),
  KEY `amenity_id` (`amenity_id`),
  CONSTRAINT `room_amenity_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE CASCADE,
  CONSTRAINT `room_amenity_ibfk_2` FOREIGN KEY (`amenity_id`) REFERENCES `amenity` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


LOCK TABLES `room_amenity` WRITE;
INSERT INTO `room_amenity` VALUES (1,1,16),(2,1,8),(3,1,1),(4,1,14),(5,1,17),(6,1,12),(7,1,10),(8,1,4),(9,1,18),(10,1,15),(11,1,13),(12,1,3),(13,1,11),(14,1,5),(15,1,7),(16,1,6),(17,1,9),(18,2,11),(19,2,3),(20,2,10),(21,2,17),(22,2,18),(23,2,7),(24,2,1),(25,2,2),(26,2,9),(27,2,15),(28,2,16),(29,2,13),(30,2,14),(31,2,5),(32,3,6),(33,3,3),(34,3,14),(35,3,13),(36,3,9),(37,3,8),(38,3,2),(39,3,18),(40,3,16),(41,3,10),(42,3,5),(43,3,15),(44,3,7),(45,3,12),(46,4,11),(47,4,3),(48,4,5),(49,4,17),(50,4,4),(51,4,13),(52,4,12),(53,4,7),(54,4,9),(55,5,2),(56,5,7),(57,5,17),(58,5,1),(59,5,4),(60,5,16),(61,5,14),(62,6,8),(63,6,9),(64,6,13),(65,6,12),(66,6,2),(67,6,14),(68,6,11),(69,6,17),(70,6,4),(71,6,7),(72,6,15),(73,6,3),(74,6,16),(75,6,6),(76,6,1),(77,6,10),(78,7,9),(79,7,6),(80,7,13),(81,7,2),(82,7,15),(83,7,1),(84,7,11),(85,7,8),(86,7,5),(87,7,12),(88,7,17),(89,7,10),(90,7,7),(91,8,9),(92,8,16),(93,8,10),(94,8,8),(95,8,3),(96,8,17),(97,9,6),(98,9,8),(99,9,15),(100,9,12),(101,9,17),(102,9,14),(103,9,2),(104,9,10),(105,9,3),(106,9,4),(107,10,18),(108,10,9),(109,10,4),(110,10,6),(111,10,1),(112,10,16),(113,10,7),(114,10,11),(115,10,2),(116,10,3),(117,10,5),(118,10,15),(119,10,17),(120,10,12),(121,10,8),(122,10,13),(123,11,14),(124,11,2),(125,11,4),(126,11,8),(127,11,16),(128,11,5),(129,11,15),(130,12,15),(131,13,3),(132,13,7),(133,13,10),(134,13,18),(135,13,12),(136,13,5),(137,13,14),(138,13,9),(139,14,9),(140,14,7),(141,14,14),(142,14,6),(143,15,16),(144,15,3),(145,15,18),(146,15,17),(147,15,6),(148,15,13),(149,15,10),(150,15,15),(151,15,12),(152,15,11),(153,15,7);
UNLOCK TABLES;
