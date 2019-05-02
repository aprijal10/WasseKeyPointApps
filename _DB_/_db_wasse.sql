# Host: 127.0.0.1  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2019-05-02 07:26:11
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "_tbl_groupchat"
#

CREATE TABLE `_tbl_groupchat` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `chat_title` varchar(255) NOT NULL DEFAULT '',
  `chat_picture` varchar(255) NOT NULL DEFAULT '',
  `link_chat` varchar(255) NOT NULL DEFAULT '',
  `describe` varchar(255) NOT NULL DEFAULT '',
  `modify_by` varchar(75) NOT NULL DEFAULT '',
  `modify_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "_tbl_groupchat"
#

INSERT INTO `_tbl_groupchat` VALUES (1,'English Group','http://127.0.0.1/Wasse/gc/gc1.jpg','https://chat.whatsapp.com/invite/2Y3liSkfUpwJIeIuZq9ULP',' Private Groups Chat, Need verified user to join.','Superuser','2019-03-20 08:03:02'),(2,'Speak English or fuck off','http://127.0.0.1/Wasse/gc/gc2.jpg','https://chat.whatsapp.com/invite/Cg5jFNjVAzuILzmcnvosl0','WhatsApp Group Invite.','Administrator','2019-03-19 13:45:00'),(3,'Voice Speaking','http://127.0.0.1/Wasse/gc/gc3.jpg','https://chat.whatsapp.com/invite/7ly4zngeDs9EiUvAq0Lwtt','WhatsApp Group Invite','Superuser','2019-03-20 08:03:16');

#
# Structure for table "_tbl_news"
#

CREATE TABLE `_tbl_news` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `picture` varchar(75) NOT NULL DEFAULT '',
  `author` varchar(100) NOT NULL DEFAULT '' COMMENT 'PDF File format Allowed',
  `date_news` datetime DEFAULT NULL,
  `modify_by` varchar(75) NOT NULL DEFAULT '',
  `modify_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Data for table "_tbl_news"
#

INSERT INTO `_tbl_news` VALUES (1,'WhatsApp is now rolling out one very important privacy feature','<div style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 16px;\">Groups are a vital part of WhatsApp, although as the Facebook-owned messaging platform has grown in popularity so has the number of unwanted group chats. But today, after testing them for a while on iOS,&nbsp;<a href=\"https://www.phonearena.com/news/WhatsApp-closer-to-adding-Dark-Mode-for-Android-users_id114851\" target=\"_self\" title=\"WhatsApp closer to protecting the retinas of Android users\" class=\"previewtooltip\" data-id=\"114851\" data-type=\"article\" style=\"color: rgb(60, 155, 205); font-size: inherit;\">WhatsApp</a>&nbsp;is rolling out new privacy settings which should help control this.</div><div style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 16px;\"><br></div><div style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 16px;\">Until now, group admins could add any WhatsApp user to a group without needing their consent â€“ the only requirement being that the user is a contact in the adminâ€™s phone. As part of this latest rollout, though, WhatsApp users will now be able to choose which people can add them to groups.&nbsp;</div><div style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 16px;\"><br></div><div style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 16px;\">In order to access the new feature, users need to simply head over to the Settings menu within WhatsApp and tap Accounts. Then a quick tap on Privacy and later Groups will present users with the choice of three options: â€˜Everyone,â€™ â€˜My Contacts,â€™ or â€˜Nobody.â€™ Each one is pretty self-explanatory with â€˜Nobodyâ€™ meaning users will have to approve every single group with â€˜Everyoneâ€™ allows users to leave their group invitations completely open, as they are today.</div><div style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 16px;\"><br></div><div style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 16px;\">WhatsAppâ€™s latest privacy feature will begin rollout out today to a select number of users before expanding globally across the coming weeks.</div>','http://localhost/Wasse/news/news1.jpg','Aminul','2019-04-03 08:04:07','Superuser','2019-04-03 08:04:07'),(2,'Felicity Huffman, Lori Loughlin to face college scandal charges in Boston court','<p><font color=\"#313132\" face=\"freight-book, serif\"><span style=\"font-size: 21px;\">BOSTON (Reuters) - Actors Felicity Huffman and Lori Loughlin are among 15 wealthy parents due in Boston federal court on Wednesday to face charges that they participated in what prosecutors call the largest college admissions scam uncovered in U.S. history.</span></font></p><p><font color=\"#313132\" face=\"freight-book, serif\"><span style=\"font-size: 21px;\">They are among 50 people federal prosecutors allege participated in schemes that involved cheating on college exams and paying $25 million in bribes to buy the children of affluent Americans seats in well-known universities including Yale, Georgetown and the University of Southern California.</span></font></p><p><font color=\"#313132\" face=\"freight-book, serif\"><span style=\"font-size: 21px;\">The scamâ€™s mastermind, California college admissions consultant Rick Singer, has pleaded guilty to overseeing a racketeering scheme in which parents paid to help their children cheat on admissions tests and bribe coaches to present them as elite prospects in sports including sailing, crew and water polo even if they had no athletic experience.</span></font></p><p><font color=\"#313132\" face=\"freight-book, serif\"><span style=\"font-size: 21px;\">â€œDesperate Housewivesâ€ star Huffman and â€œFull Houseâ€ actor Loughlin, along with a former chief executive and a major law firmâ€™s onetime chairman, are part of the group scheduled to make their first appearances in Boston court.</span></font></p><p><span style=\"font-size: 21px; color: rgb(49, 49, 50); font-family: freight-book, serif;\">Prosecutors allege that Loughlin and her husband, Los Angeles fashion designer Mossimo Giannulli, agreed to pay $500,000 to have their two daughters named as recruits to USCâ€™s crew team, even though they did not row competitively.</span></p><p><font color=\"#313132\" face=\"freight-book, serif\"><span style=\"font-size: 21px;\">Prosecutors said Huffman, who is married to the actor William H. Macy, made a $15,000 contribution to Singerâ€™s foundation in exchange for having an associate of Singerâ€™s in 2017 secretly correct her daughterâ€™s answers on an SAT college entrance exam at a test center Singer â€œcontrolled.â€</span></font></p><p><font color=\"#313132\" face=\"freight-book, serif\"><span style=\"font-size: 21px;\">Huffman later made arrangements to engage in the scheme again on her younger daughterâ€™s behalf before deciding not to, prosecutors said.</span></font></p><p><font color=\"#313132\" face=\"freight-book, serif\"><span style=\"font-size: 21px;\">Other accused parents expected to appear in court include Manuel Henriquez, the former chief executive of specialty finance company Hercules Capital Inc, and Gordon Caplan, the former co-chairman of the law firm Willkie Farr &amp; Gallagher.</span></font></p><p><font color=\"#313132\" face=\"freight-book, serif\"><span style=\"font-size: 21px;\">Henriquez resigned his position and Caplan was placed on leave after they were charged.</span></font></p><p><font color=\"#313132\" face=\"freight-book, serif\"><span style=\"font-size: 21px;\">The U.S. Education Department has opened an investigation into eight universities linked to the scandal. Several of the schools have said they would revoke admissions offers to students who had gotten in fraudulently but not yet enrolled and would consider expelling students whose parents participated.</span></font></p><p><font color=\"#313132\" face=\"freight-book, serif\"><span style=\"font-size: 21px;\">Prosecutors have not yet charged any applicants for illegal activity and said that in some cases the parents charged took steps to try to prevent their children from realizing they were benefiting from fraud.</span></font></p>','http://localhost/Wasse/news/News2.jpg','Nate Raymond','2019-04-03 03:04:39','Superuser','2019-04-03 08:04:19'),(3,'Apple might release three OLED iPhones in 2020; one could be an iPhone SE 2','<p>In 2018, Apple released the iPhone XS, iPhone XS Max, and iPhone XR. While the two XS models sported OLED screens, the iPhone XR came with an LCD. According to a supply chain source, the company is planning on continuing the same two OLED/one LCD format for its 2019 iPhone releases but will then move to OLED panels for all of its three 2020 iPhones.</p><p>Along with revealing Appleâ€™s intentions to move completely to OLED screens, the source also stated the expected sizes of the 2020 devices. It seems the three iPhones will offer 5.42-in, 6.06-in, and 6.67-in displays. The latter two sizes fit in with current iPhone dimensions: 5.8-in iPhone XS, 6.1-in iPhone XR, 6.5-in iPhone XS Max. But the 5.42-inch offering is noticeably smaller, which has led some to proclaim this could be a next-generation iPhone SE, or the iPhone SE 2.</p><p>This could be just wishful thinking though. Thereâ€™s no doubt there are many who would love to see Apple bring out a sequel to the diminutive and popular iPhone SE. But that phone had a 4.0-in display diagonal, which is obviously much smaller than the reported 5.42 inches for the 2020 device. One of the main selling points of the iPhone SE was its compact size; a 5.42-in iPhone SE 2 would have to bring different USPs to the table.</p>','http://localhost/Wasse/news/se.jpg','Daniel R Deakin','2019-04-03 03:04:13','Superuser','2019-04-03 08:04:22');

#
# Structure for table "_tbl_questionanswer"
#

CREATE TABLE `_tbl_questionanswer` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL DEFAULT '' COMMENT 'Math and English',
  `question_text` text NOT NULL,
  `answer_text` text NOT NULL,
  `modify_by` varchar(75) NOT NULL DEFAULT '',
  `modify_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

#
# Data for table "_tbl_questionanswer"
#

INSERT INTO `_tbl_questionanswer` VALUES (1,'Math','<p>Mrs. Rodger got a weekly raise of $145. If she gets paid every other week, write an integer describing how the raise will affect her paycheck ?</p>','<p>\n<b>Solution:</b><br />\nLet the 1st paycheck be x (integer).<br><br>\nMrs. Rodger got a weekly raise of $ 145.<br><br>\nSo after completing the 1st week she will get $ (x+145).<br><br>\nSimilarly after completing the 2nd week she will get $ (x + 145) + $ 145.<br><br \\/>\n= $ (x + 145 + 145)<br><br>\n= $ (x + 290)<br><br>\nSo in this way end of every week her salary will increase by $ 145.</p>','Administrator','2019-03-17 14:36:21'),(2,'Math','Mr. Jones sold two pipes at $1.20 each. Based on the cost, his \nprofit one was 20% and his loss on the other was 20%. On the sale of the\n pipes, he:<br>\n(a) broke even, (b) lost 4 cents, (c) gained 4 cents, (d) lost 10 cents, (e) gained 10 cents ?','<p>\n<b>Solution:</b>\n<br />\n20 % profit on $ 1.20<br />\n= $ 20/100 x 1.20<br><br>\n= $ 0.20 x 1.20<br><br>\n= $ 0.24 <br><br>\nSimilarly, 20 % loss on $ 1.20 <br><br>\n= $ 20/100 x 1.20<br><br>\n= $ 0.20 x 1.20<br><br>\n= $ 0.24<br><br>\nTherefore, in one pipe his profit is $ 0.24 and in the other pipe his loss is $ 0.24.\nSince both profit and loss amount is same so, it\'s broke even.<br /><br />\n<b>Answer: (a)</b>\n</p>','Administrator','2019-03-17 14:36:21'),(3,'Math','<p>A man has $ 10,000 to invest. He invests $ 4000 at 5 % and $ 3500 \nat 4 %. In order to have a yearly income of $ 500, he must invest the \nremainder at:<br/>(a) 6 %\t, (b) 6.1 %, (c) 6.2 %, (d) 6.3 %, (e) 6.4 % ?</p>','<p>\n<b>Solution:</b><br />\nIncome from $ 4000 at 5 % in one year = $ 4000 of 5 %.<br/><br/>\n= $ 4000 x 5/100.<br/><br/>\n= $ 4000  x 0.05.<br/><br/>\n= $ 200.<br/><br/>\nIncome from $ 3500 at 4 % in one year = $ 3500 of 4 %.<br/><br/>\n= $ 3500 x 4/100.<br/><br/>\n= $ 3500  x 0.04.<br/><br/>\n= $ 140.<br/><br/>\nTotal income from 4000 at 5 % and 3500 at 4 % = $ 200 + $140 = $ 340.<br/><br/>\nRemaining income amount in order to have a yearly income of $ 500\n= $ 500 - $ 340.<br/><br/> \n= $ 160.<br/><br/> \nTotal invested amount = $ 4000 + $3500 = $7500.<br/><br/>\nRemaining invest amount = $ 10000 - $ 7500 = $ 2500.<br/><br/>\nWe know that, <b>Interest = Principal x Rate  x  Time</b><br/><br/>\nInterest = $ 160,<br/><br/>\nPrincipal = $ 2500, <br/><br/>\nRate = r [we need to find the value of r],<br/><br/>\nTime = 1 year.<br/><br/>\n160 = 2500 x r x 1.<br/><br/>\n160 = 2500r<br/><br/>\n160/2500 = 2500r/2500 [divide both sides by 2500]<br/><br/>\n0.064 = r<br/><br/>\nr = 0.064<br/><br/>\nChange it to a percent by moving the decimal to the right two places\nr = 6.4 %<br/><br/>\nTherefore, he invested the remaining amount $ 2500 at 6.4 % in order to get $ 500 income every year.<br/><br/>\n<b>Answer: (e)','Administrator','2019-03-17 14:36:21'),(4,'English','<p>In each of the following questions, find the correctly spelt word.<br />\r\n1. Reannaisance <br />\r\n2. Renaissance <br />\r\n3. Rennaissance <br />\r\n4. Renaisance <br />\r\n\r\n<br />\r\na. 1<br />\r\nb. 2<br />\r\nc. 3<br />\r\nd. 4<br />\r\n</p>','<p><b>Answer:</b>  B</p>','Administrator','2019-03-19 13:05:00'),(5,'English','<p>In this question five words are given. Which of them will come in the middle if all of them are arranged alphabetically as in a dictionary\n?\n<br /><br />\n1. Apology<br />\n2. Branch<br />\n3. Antigen<br />\n4. Antique<br />\n5. Antipathy<br />\n</p>','<p><b>Answer </b>: 4. \'Antique\'</p>','Administrator','2019-03-19 13:05:00'),(6,'English','<p>Testing saja Question</p>','<p>Testing Saja Answers</p>','Superuser','2019-03-20 08:03:49');

#
# Structure for table "_tbl_recomendedbook"
#

CREATE TABLE `_tbl_recomendedbook` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `describe` text NOT NULL,
  `book_picture` varchar(75) NOT NULL DEFAULT '',
  `file` varchar(100) NOT NULL DEFAULT '' COMMENT 'PDF File format Allowed',
  `modify_by` varchar(75) NOT NULL DEFAULT '',
  `modify_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

#
# Data for table "_tbl_recomendedbook"
#

INSERT INTO `_tbl_recomendedbook` VALUES (1,'Book Design, Made Simple','<p>Description about Book Design, Made Simple</p>','http://localhost/Wasse/book/book4.jpg','','Administrator','2019-03-19 13:23:00'),(2,'Set For Life','<p>Description of Set For Life</p>','http://localhost/Wasse/book/book3.jpg','','Administrator','2019-03-19 13:23:00'),(3,'Broken Pie Chart','<p>Description of book Broken Pie Chart</p>','http://localhost/Wasse/book/book1.jpg','','Administrator','2019-03-19 13:23:00'),(6,'Book Of Toyota Leaders','<p>This is description of Toyota Leaders</p>','http://localhost/Wasse/book/toyota.jpg','DPR_SUMATERA_UTARA.pdf','Superuser','2019-03-20 08:03:58');

#
# Structure for table "_tbl_slide"
#

CREATE TABLE `_tbl_slide` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `slide_text` text NOT NULL,
  `author` varchar(255) DEFAULT '',
  `bg_color` varchar(255) NOT NULL DEFAULT '',
  `modify_by` varchar(70) NOT NULL DEFAULT '',
  `modify_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "_tbl_slide"
#

INSERT INTO `_tbl_slide` VALUES (1,'<p>An exiting place to study and grow</p>','','','Administrator','2019-03-19'),(2,'\"Start where you are. Use what you have. Do what you can.\"','- Arthur Ashe -','','Administrator','2019-03-19'),(3,'\"Success is the sum of small efforts, repeated day in and day out.\"','- Robert Collier -','','Administrator','2019-03-19');

#
# Structure for table "_tbl_syllabus"
#

CREATE TABLE `_tbl_syllabus` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `describe` text NOT NULL,
  `file` varchar(120) NOT NULL DEFAULT '',
  `modify_by` varchar(75) NOT NULL DEFAULT '',
  `modify_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

#
# Data for table "_tbl_syllabus"
#

INSERT INTO `_tbl_syllabus` VALUES (1,'Kinematics of Machinery','<p>List what you would like the student to know by the end of the course</p>','sample-syllabus.pdf','Superuser','2019-03-20 04:03:41'),(2,'Student Learning Outcomes (aka Objectives)','<p>List achievable, measurable skills, knowledge and attitudes that students should be able to do/know upon course completion. Written for learner using action verbs. </p>\n<p>Provide clear expectations of what needs to be mastered for successful course completion. May be broken down further in lesson or module units</p>','sample-syllabus.pdf','Administrator','2019-03-17 13:21:00'),(3,'Testing Syllabus','<p>Descibtion of Testing Syllabus</p>','sample-syllabus.pdf','Administrator','2019-03-17 13:26:10'),(13,'Syllabus have changed title','<p>Ini adalah keterangan</p>','DAPIL_TOBA_SAMOSIR.pdf','Superuser','2019-03-20 04:03:35'),(14,'Contoh Syllabus Lagi','<p>Ini adalah contoh deskripsi panjang dan diinsert via Backend Aplikasi Wasse KP Apps</p>','DAPIL_DAIRI.pdf','Superuser','2019-03-20 04:03:51');

#
# Structure for table "_tbl_tutorial"
#

CREATE TABLE `_tbl_tutorial` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `category` varchar(75) NOT NULL DEFAULT '' COMMENT 'Math and English',
  `movie_file` varchar(255) NOT NULL DEFAULT '',
  `modify_by` varchar(75) NOT NULL DEFAULT '',
  `modify_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "_tbl_tutorial"
#

INSERT INTO `_tbl_tutorial` VALUES (1,'Movie Tutorial 1','','trailer_iphone.m4v','Administrator','2019-03-20 22:01:00'),(2,'Movie Tutorial 2','','trailer_iphone.m4v','Administrator','2019-03-20 22:01:00'),(3,'Movie Tutorial 3','','trailer_iphone.m4v','Administrator','2019-03-20 22:01:00'),(4,'Movie Tutorial 4','','trailer_iphone.m4v','Administrator','2019-03-20 22:01:00'),(5,'Math Antics - Long Division with 2-Digit Divisors','','MathAntic_LongDivisionwith2_Digit_Divisors.mp4','Administrator','2019-03-20 22:01:00'),(6,'Math Antics - Basic Division','','MathAnticsBasicDivision.mp4','Administrator','2019-03-20 22:01:00');

#
# Structure for table "_tbl_univ"
#

CREATE TABLE `_tbl_univ` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `univ_name` varchar(255) NOT NULL DEFAULT '',
  `describe` varchar(255) NOT NULL DEFAULT '',
  `univ_picture` varchar(100) NOT NULL DEFAULT '',
  `link` varchar(255) NOT NULL DEFAULT '',
  `modify_by` varchar(75) NOT NULL DEFAULT '',
  `modify_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "_tbl_univ"
#

INSERT INTO `_tbl_univ` VALUES (1,'University of Indonesia','Jakarta, Since1988','univ/ui_campus.png','http://www.ui.ac.id/en/','Administrator','2019-03-20 20:37:00'),(2,'University of Gadjah Mada','Yogyakarta, Sice 1988','univ/logo_ugm.png','https://ugm.ac.id/en','Administrator','2019-03-20 20:37:00'),(3,'University of North Sumatera ','Medan, Since1988','univ/usu_logo.png','https://www.usu.ac.id/en/','Administrator','2019-03-20 20:37:00'),(4,'Padjajaran University','Padjajaran, Since1988','univ/logo_unpad.png','http://www.unpad.ac.id/en/','Administrator','2019-03-20 20:37:00'),(5,'University Of Riau','Riau 1992','univ/logo_unri.jpg','http://www.unri.ac.id','Superuser','2019-03-20 09:03:35');

#
# Structure for table "_tbl_users"
#

CREATE TABLE `_tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(25) NOT NULL DEFAULT '',
  `name` varchar(75) NOT NULL DEFAULT '',
  `passwd` varchar(75) NOT NULL DEFAULT '',
  `token` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(45) NOT NULL DEFAULT '',
  `is_active` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "_tbl_users"
#

INSERT INTO `_tbl_users` VALUES (1,'admin','Superuser','21232f297a57a5a743894a0e4a801fc3','12345','dev.aprijal@gmail.com','Y');
