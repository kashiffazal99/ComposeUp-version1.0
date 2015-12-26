<br />
<b>Notice</b>:  Undefined variable: return in <b>D:\xampp\htdocs\ComposeUp\config\exportingBackup.php</b> on line <b>35</b><br />
DROP TABLE act_number;

CREATE TABLE `act_number` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `bankName` varchar(100) DEFAULT NULL,
  `bankAcTitle` varchar(100) DEFAULT NULL,
  `bankAcNumber` varchar(100) DEFAULT NULL,
  `addr` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO act_number VALUES("10","NIB Bank","GULF TRADING CORPORATION","0013293732","NIB/Gulf");
INSERT INTO act_number VALUES("13","Faysal Bank Ltd","ZEESHAN ENTERPRISES","7972128006","Zee/Fay");



DROP TABLE actitle;

CREATE TABLE `actitle` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `bankAcTitle` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO actitle VALUES("1","ZEESHAN ENTERPRISES");
INSERT INTO actitle VALUES("2","TAUFIQ INTERNATIONAL");
INSERT INTO actitle VALUES("3","GULF TRADING CORPORATION");



DROP TABLE bankaddrformat;

CREATE TABLE `bankaddrformat` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `bankName` varchar(50) DEFAULT NULL,
  `bankAddr` varchar(200) DEFAULT NULL,
  `bankAbr` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO bankaddrformat VALUES("7","Faysal Bank Ltd","A.H.R BRANCH<br/> KARACHI","faysal");
INSERT INTO bankaddrformat VALUES("8","NIB Bank","New Challi Branch<br/> Karachi","NIB");



DROP TABLE com_reg;

CREATE TABLE `com_reg` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `com_name` varchar(50) DEFAULT NULL,
  `com_address_1` varchar(90) DEFAULT NULL,
  `com_address_2` varchar(90) DEFAULT NULL,
  `com_gst_ger_no` varchar(50) DEFAULT NULL,
  `com_cnic` varchar(50) DEFAULT NULL,
  `com_ntn` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO com_reg VALUES("4","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","12-23-9999-694-37","42301-0853467-1","0648749-1");
INSERT INTO com_reg VALUES("5","Taufiq International","Shop 7-17, Rafiq Mansion, Near Al-Momin Plaza,","Buns  Road, Karachi.","12-23-9999-694-37","42301-0853467-1","0648749-1");
INSERT INTO com_reg VALUES("6","Gulf Trading Corporation","Plot # 159, Memon Plaza Good Luck,","Haji Jumbo Streen, Karachi.","11-21-9999-272-19","42301-1065073-9","0857501-7");



DROP TABLE cre_cheq;

CREATE TABLE `cre_cheq` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `amount_num` int(10) DEFAULT NULL,
  `amount_word` varchar(120) DEFAULT NULL,
  `back_name` varchar(100) DEFAULT NULL,
  `account_title` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE custaddress;

CREATE TABLE `custaddress` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `phone_num` varchar(100) DEFAULT NULL,
  `mob_num` varchar(100) DEFAULT NULL,
  `other` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

INSERT INTO custaddress VALUES("25","Jan Brothers (Sardar Ali)","Green Chowk, Kanjo Road","Mingora Sawat","0946-811046","0300-5743566","");
INSERT INTO custaddress VALUES("26","Ahmed Trading Company (Asim Bhai)","Nuswari Bazar","Rawalpindi","051-5555241 , 051-5555427","0321-8022211 , 0322-8141819","");
INSERT INTO custaddress VALUES("27","Ali & Sons (Haji Amit Shah)","Khawaja Ganj Bazar","Mardan","0937-863857, 0937-872105","0300-5727894","");
INSERT INTO custaddress VALUES("28","Mukhtiar Traders","Mursaleen Plaza","Peshawar","091-2216988","0344-9386588 <br/> 0300-5982656 <br/> 0333-9229708","");
INSERT INTO custaddress VALUES("29","Haji Shaukat & Bros","Shawaja Ganj, Hoti Bazar","Mardan","0937-862362","0301-8193391","");
INSERT INTO custaddress VALUES("32","Al-Karim Dall Mill (Sajid - Irfan)","Rawalpindi Road","Kohat","Irfan : 0922-517001, 517003 <br/> Sajid : 0922-511980","Irfan : 0333-9612929 <br/> Sajid : 0333-9618081","");
INSERT INTO custaddress VALUES("33","Nafees Traders","Nuswari Bazar","Rawalpindi","051-5773047 <br/> 051-5767040 <br/> 051-5767037","0333-5497590 <br/> A-Khaliq : 0321-5657400 <br/> A-Qudus: 0321-9550496","");
INSERT INTO custaddress VALUES("35","M Lal & Company (Umer)","Ashraf Road, Shop No. 17","Peshawar","091-2551076","0335-9191051 <br/> 0321-9155481 <br/> 0321-9155482","");
INSERT INTO custaddress VALUES("36","Muhammad Shahid / Amjad <br/> C/O Yousuf Traders","Nuswari Bazar","Rawalpindi","","0321-5572326","");
INSERT INTO custaddress VALUES("39","Hussain Traders (Haji Ghani)","Shop No. 216, New Ghalla Mandi","Faisalabad","041-2416114 <br/> 041-2416014","0300-9668700","");
INSERT INTO custaddress VALUES("40","Chaudry Muhammad Hussain & Co (Abdul Qayyam)","Dijkot Road, New Ghalla Mandi","Faisalabad","041-2636214 <br/> 041-2622014	","A Qayyam = 0300-7667611","");
INSERT INTO custaddress VALUES("41","Abdul Jalil & Co (Jalil Paracha)","Chowk Yadgar","Peshawar","091-2569284	","0300-5862018 <br/> Kamran A/C : 0345-9151601","");
INSERT INTO custaddress VALUES("42","Sheikh Allahrakkha & Co (Tariq)","New Ghalla Mandi","Faisalabad","041-2641469 <br/> 041-2602296	","0321-6676690","");
INSERT INTO custaddress VALUES("44","Sargoda commission Shop (Usman)","Gala Mandi","Faisalabad","","0300-8669181","");
INSERT INTO custaddress VALUES("45","Arif & Co","Shop # 101, Ghalla Mandi","Multan","061-6529305","0300-7184781","");
INSERT INTO custaddress VALUES("46","Rashid Zaman","Ghujar Khan","Ghujar Khan","","0321-2010692","");
INSERT INTO custaddress VALUES("47","Fazal Trading","Rice Processor, 5km Gujranwala Road,","Hafizabad","054-7520033","","");
INSERT INTO custaddress VALUES("48","S.S Traders (Arif Paracha)","P-91 Dijkot Road, New Ghalla Mandi","Faisalabad","041-2640739 <br/> 041-2005848","Arif Paracha = 0321-6683162 <br/> Siddiq Paracha = 0321-7814808","");
INSERT INTO custaddress VALUES("50","Madina Trader (Nisar)","Nuswari Bazar","Rawalpindi","051-5553698<br/> 051-5767292","Nisar : 0333-5553698<br/> Abid 0345-4545933<br/> 0321-2341973","");
INSERT INTO custaddress VALUES("51","Zulfiqar Chana Wala <br/> C/O Amin Sattar","Jasal Bazar, Near Madina Masjid","Larkana","","0346-3391581<br/> 0300-3434955","");
INSERT INTO custaddress VALUES("52","Minar & Co (Ahmed Sher)","Shop # 3, Al-falah Tower, New Gate Rumpura","Peshawar","091-2550620<br/> 091-2216987","0321-8591920","");
INSERT INTO custaddress VALUES("53","Sheikh Ghulam Rasool & Brother","Dijkot Road, Ghalla Mandi","Faisalabad","041-2625134","","");
INSERT INTO custaddress VALUES("54","Arco Seeds","Bazar Al-Maria","Gujranwala","055-4448857<br/> 055-44444453<br/> 055-4216953","0300-6422633","");
INSERT INTO custaddress VALUES("55","M Naeem & Co","Shop # 190, New Ghalla Mandi","Multan","061-4230685","0314-6124028<br/> 0301-7500602","");
INSERT INTO custaddress VALUES("56","Asif & Co","Ghalla Mandi, Vehari Road","Multan","061-4230389","0300-9632173","");
INSERT INTO custaddress VALUES("57","Haji M Sattar & Co","Shop # 196, New Ghalla Mandi","Multan","061-6529735<br/> 061-6529635","0300-6300112<br/> 0300-6328632","");
INSERT INTO custaddress VALUES("58","Three Star Broker","Shop # 134, New Grain Market, Dijkot Road","Faisalabad","041-2600966<br/> 041-12646285<br/> 041-2636285","Rana Mehboob 0300-7993940<br/> Rana Naveed 0300-8288485<br/> Rizwan zaman 0321-5987187","");
INSERT INTO custaddress VALUES("59","Ilyas Bhai","-","Raheem yar Khan","","0301-7623398","");
INSERT INTO custaddress VALUES("61","Jawaid Salman & Co (Sulaiman)","Gala Mandi","Chichawatni","","Sulaiman : 0301-8699720","");
INSERT INTO custaddress VALUES("62","Al Basit & Company (Azeem Khan)","Purani Fruit Mandi, Sarki Road","Quetta","081-2446580","0346-8307435","");
INSERT INTO custaddress VALUES("63","Haji Ali M & Co (Rana Zafar )","Shop # 57, Gala Mandi","Burewala","","0300-8729464","");
INSERT INTO custaddress VALUES("64","Al-Asif Brother (Aslam Bhai, Haji, Ali)","New Grain Market, Dajkot Road, Ghalla Mandi","Faisalabad","041-2644353 2632023 ","Aslam = 0300-8665970 Ali = 0336-7700500","");
INSERT INTO custaddress VALUES("66","Aziz Seed Store","Near Jamaa Masjid","Tando Adam","023-5575708","0321-3451900<br/> 0331-3451900","");
INSERT INTO custaddress VALUES("67","Rana Tayyab & Co <br/> C/O Anwer Multan","Gala madni","Faisalabad","041-2623670","","");
INSERT INTO custaddress VALUES("68","Sheikh Arif & Co","Shop # 21, Ghalla Mandi","Multan","","0300-6308396","");
INSERT INTO custaddress VALUES("69","Sheikh farrukh","Ghalla Mandi","Khanewal","","0300-6885615","");
INSERT INTO custaddress VALUES("70","Haji Ahsan Younus & Co","Ghalla Mandi","Sargoda","0483-711047<br/> 0483-718746","0300-9608194<br/> 0300-9604986<br/> M.Younus 0300-9602248","");
INSERT INTO custaddress VALUES("71","Sheikh A Rauf","Ghalla Mandi, Shop # G71","Buriwala","067-3770326","0321-6990775","");
INSERT INTO custaddress VALUES("72","Al-Faiz Commission","Shop # 16,  Ghalla Mandi","Multan","061-5629243","0300-6338538","");
INSERT INTO custaddress VALUES("73","New Irfan Dall Mill","Site Area","Hyderabad","022-3882360","0300-3070621","");
INSERT INTO custaddress VALUES("74","Shahab & Sons (Idress)","Market Road, Near Shah Masjid","Nawabshah ","","0300-3357303","");
INSERT INTO custaddress VALUES("75","Hameed Majeed Associates (Pvt) Ltd","H M House, 7 - Bank Square,","Lahore","7235081-82","","");
INSERT INTO custaddress VALUES("78","A Rauf & Brothers","G.T Road","Mian Chanou","065-2661640","0300-8390641","");
INSERT INTO custaddress VALUES("79","Haji Rahatullah & Sons (Hafizullah)","Bazar Khawaja Ganj","Mardan","0937-862369<br/> 0937-872369","0321-9303974","");
INSERT INTO custaddress VALUES("80","Tariq Rahim Paracha (Tariq Paracha)","Shop # 281, Nuswari Bazar","Rawalpindi","051-5541764 <br/> 051-5535665","0321-5003690 <br/> 0321-5541764","");
INSERT INTO custaddress VALUES("81","Zafar Iqbal & Company","Shop # 168, Dijkot Road, New Ghalla Mandi","Faisalabad","041-2619196<br/> 041-62728876<br/> 041-2635797","0300-6630736","");
INSERT INTO custaddress VALUES("82","Kalam Traders","Plot # 01, B-11 China Road, Gujjarpura Scheam, Opp: Seikho factory","Lahore","","0333-8678764","");
INSERT INTO custaddress VALUES("83","Abdul Ghaffar ","Ghalla Mandi, Shop # 63","Chishtian","","0300-6980513","");



DROP TABLE exporter_info;

CREATE TABLE `exporter_info` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `exp_name` varchar(50) DEFAULT NULL,
  `exp_origin` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

INSERT INTO exporter_info VALUES("2","Teshome Anteneh General Export","Ethiopia");
INSERT INTO exporter_info VALUES("3","Link Global Commodity (U) Ltd","Uganda");
INSERT INTO exporter_info VALUES("4","Husfam General Trading","Ethiopia");
INSERT INTO exporter_info VALUES("5","Sino Multi Biz PTE LTD","Singapore");
INSERT INTO exporter_info VALUES("6","MMM International Industrial","Ethiopia");
INSERT INTO exporter_info VALUES("7","Agrish Bussan Trading Co. Ltd","Ethiopia");
INSERT INTO exporter_info VALUES("8","Sailor Export Ltd","India");
INSERT INTO exporter_info VALUES("9","Glenocore Grain Pty Ltd","Australia");
INSERT INTO exporter_info VALUES("10","Indraprasth Foods Ltd","India");
INSERT INTO exporter_info VALUES("11","RIB Industrial Commercial and Commercial PLC","Ethiopia");
INSERT INTO exporter_info VALUES("12","Alex Trading ","Ethiopia");
INSERT INTO exporter_info VALUES("13","Akash Enterprises","India");
INSERT INTO exporter_info VALUES("14","Patel Retail Pvt Ltd","India");
INSERT INTO exporter_info VALUES("15","Pari Agro Industries ","India");
INSERT INTO exporter_info VALUES("16","Sur Basant Overseas ","India");
INSERT INTO exporter_info VALUES("17","Mekinnen Amdisa Oil Seeds and Pulses Exporter Alam","Ethiopia");
INSERT INTO exporter_info VALUES("18","Wondwossen Bayu Exporter ","Ethiopia");
INSERT INTO exporter_info VALUES("19","Agromin Australia Pty Ltd","Australia ");
INSERT INTO exporter_info VALUES("20","Chokpisansawankhal Ltd ","Sukhothai");
INSERT INTO exporter_info VALUES("21","Raja Enterprises","India");
INSERT INTO exporter_info VALUES("23","Jilin Yuanda Grains Co. Ltd","China");
INSERT INTO exporter_info VALUES("24","Arpit Agro Products","India");
INSERT INTO exporter_info VALUES("25","AGT Foods","Canada");
INSERT INTO exporter_info VALUES("26","Jay Yogeshwar Trading Company","India");
INSERT INTO exporter_info VALUES("27","Legumex Walker Canada inc","Canada");
INSERT INTO exporter_info VALUES("28","VG Agroholding UAB","Singapore");
INSERT INTO exporter_info VALUES("29","Indo Sino Trade Pte Ltd","Singapore");
INSERT INTO exporter_info VALUES("30","United Export","India");
INSERT INTO exporter_info VALUES("31","Sunrise Commodities Ltd","UAE");
INSERT INTO exporter_info VALUES("32","Growmore Enterprises","India");
INSERT INTO exporter_info VALUES("33","Junan Fuqan Foodstuffs Co. Ltd","China");
INSERT INTO exporter_info VALUES("34","Khemchand Mishrilal","India");



DROP TABLE gst;

CREATE TABLE `gst` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ComName` varchar(50) DEFAULT NULL,
  `ComAdd1` varchar(150) DEFAULT NULL,
  `ComAdd2` varchar(150) DEFAULT NULL,
  `Month` varchar(50) DEFAULT NULL,
  `GstRegNo` varchar(50) DEFAULT NULL,
  `CNIC` varchar(50) DEFAULT NULL,
  `NTN` varchar(50) DEFAULT NULL,
  `ShipBill` varchar(50) DEFAULT NULL,
  `ShipBillDate` varchar(50) DEFAULT NULL,
  `ExpName` varchar(50) DEFAULT NULL,
  `ExpOrg` varchar(50) DEFAULT NULL,
  `LcCont` varchar(50) DEFAULT NULL,
  `LcContDate` varchar(50) DEFAULT NULL,
  `CRN` varchar(50) DEFAULT NULL,
  `Date` varchar(50) DEFAULT NULL,
  `Port` varchar(50) DEFAULT NULL,
  `TWt` varchar(50) DEFAULT NULL,
  `TSPK` varchar(50) DEFAULT NULL,
  `ExcRate` varchar(50) DEFAULT NULL,
  `DollAmount` varchar(50) DEFAULT NULL,
  `InsCh` varchar(50) DEFAULT NULL,
  `ShippCh` varchar(50) DEFAULT NULL,
  `LandedCost` varchar(50) DEFAULT NULL,
  `CD` varchar(5) DEFAULT NULL,
  `CDAmo` varchar(50) DEFAULT NULL,
  `ST` varchar(5) DEFAULT NULL,
  `STAmo` varchar(50) DEFAULT NULL,
  `AST` varchar(5) DEFAULT NULL,
  `ASTAmo` varchar(50) DEFAULT NULL,
  `IT` varchar(50) DEFAULT NULL,
  `ITAmo` varchar(50) DEFAULT NULL,
  `OE` varchar(50) DEFAULT NULL,
  `AP` varchar(50) DEFAULT NULL,
  `LandedAll` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

INSERT INTO gst VALUES("1","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","May 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","0355A19161","04-05-2015","Chokpisansawankhal Ltd ","Sukhothai","Cont # Indo-347-15<br/>","02-05-2015","134916","02-05-2015","KAPE","69975","100","101.70","62277.75","561","1%","6454607","0","0","0","0","0","0","2","129092.14","263347.9656","136940.942112","6983988.047712");
INSERT INTO gst VALUES("2","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","May 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","HJSCBOM506987100","11-05-2015","Sur Basant Overseas ","India","Cont # Sur-116-15<br/>","19-05-2015","144176","19-05-2015","KAPE","48000","103","101.80","43920","350","1%","4551752","0","0","0","0","0","0","2","91035.04","185711.4816","96569.970432","4925068.492032");
INSERT INTO gst VALUES("3","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","May 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","ARS/NHV/KHI/3795","20-05-2015","Pari Agro Industries ","India","Cont # Pari-36-15<br/>","26-05-2015","148820","26-05-2015","KAPE","48000","90","101.80","38520","1%","1%","4000154","0","0","0","0","0","0","2","80003.08","163206.2832","84867.267264","4328230.630464");
INSERT INTO gst VALUES("4","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","May 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","ARS/NHV/KHI/3621","30-04-2015","Pari Agro Industries ","India","Cont # Pari-18-15<br/>","06-05-2015","172460","06-05-2015","KAPW","48000","83","101.60","35664","1%","1%","3696293","0","0","0","0","0","0","2","73925.86","150808.7544","78420.552288","3999448.166688");
INSERT INTO gst VALUES("5","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","May 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","ARS/NHV/KHI/3620","30-04-2015","Pari Agro Industries ","India","Cont # Pari-23-15<br/>","06-05-2015","172758","06-05-2015","KAPW","24000","104","101.60","22200","1%","1%","2300855","0","0","0","0","0","0","2","46017.1","93874.884","48814.93968","2489561.92368");
INSERT INTO gst VALUES("6","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","May 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","13902416423","08-05-2015","Raja Enterprises","India","Cont # Raja-23-15<br/>","12-05-2015","176338","12-05-2015","KAPW","72000","30","101.60","18504","0","1%","1898806","1","18988.06","0","0","0","0","6","115067.6436","81314.468144","42283.52343488","2156459.6951789");
INSERT INTO gst VALUES("7","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","May 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","ARS/NHV/KHI/3677","09-05-2015","Pari Agro Industries ","India","Cont # Pari-32-15<br/>","12-05-2015","177056","12-05-2015","KAPW","24000","114","101.60","24360","1%","1%","2524723","0","0","0","0","0","0","2","50494.46","103008.6984","53564.523168","2731790.681568");
INSERT INTO gst VALUES("8","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","May 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","EMKMUNKHI1889","16-05-2015","Raja Enterprises","India","Cont # Raja-27-15<br/>","20-05-2015","182509","20-05-2015","KAPW","72000","21","101.80","12240","1%","1%","1271077","5","63553.85","0","0","0","0","6","80077.851","56588.34804","29425.9409808","1500722.9900208");
INSERT INTO gst VALUES("9","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","May 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","BALNSAKHI030680","22-05-2015","Raja Enterprises","India","Cont # Raja-45-15<br/>","26-05-2015","186401","26-05-2015","KAPW","72000","31","101.80","19008","1%","1%","1973908","1","19739.08","0","0","0","0","6","119618.8248","84530.636192","43955.93081984","2241752.4718118");
INSERT INTO gst VALUES("10","Taufiq International","Shop 7-17, Rafiq Mansion, Near Al-Momin Plaza,","Buns  Road, Karachi.","May 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","ARS/NHV/KHI/3578","23-04-2015","Pari Agro Industries ","India","Cont # Pari-15-15<br/>","29-04-2015","133459","29-04-2015","KAPE","48000","83","101.40","35520","1%","1%","3674122","0","0","0","0","0","0","2","73482.44","149904.1776","77950.172352","3975458.789952");
INSERT INTO gst VALUES("11","Taufiq International","Shop 7-17, Rafiq Mansion, Near Al-Momin Plaza,","Buns  Road, Karachi.","May 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","ARS/NHV/KHI/3771","18-05-2015","Jay Yogeshwar","India","Cont # Jay-007-15<br/>","25-05-2015","147945","25-05-2015","KAPE","23000","92","101.80","18745","1%","1%","1946596","0","0","0","0","0","0","2","38931.92","79421.1168","41298.980736","2106248.017536");
INSERT INTO gst VALUES("12","Taufiq International","Shop 7-17, Rafiq Mansion, Near Al-Momin Plaza,","Buns  Road, Karachi.","May 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","ARS/NHV/KHI/3593","29-04-2015","Jay Yogeshwar","India","Cont # Jay-002-15<br/>","06-05-2015","172324","06-05-2015","KAPW","48000","85","101.60","36240","1%","1%","3755991","0","0","0","0","0","0","2","75119.82","153244.4328","79687.105056","4064042.357856");
INSERT INTO gst VALUES("13","Taufiq International","Shop 7-17, Rafiq Mansion, Near Al-Momin Plaza,","Buns  Road, Karachi.","May 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","ARS/NHV/KHI/3686","09-05-2015","Pari Agro Industries ","India","Cont # Pari-27-15<br/>","12-05-2015","177037","12-05-2015","KAPW","24000","103","101.60","22032","1%","1%","2283444","0","0","0","0","0","0","2","45668.88","93164.5152","48445.547904","2470722.943104");
INSERT INTO gst VALUES("14","Gulf Trading Corporation","Plot # 159, Memon Plaza Good Luck,","Haji Jumbo Streen, Karachi.","May 2015","11-21-9999-272-19","42301-1065073-9","0857501-7","COAU7010287120","18-04-2015","Jilin Yuanda Grains Co. Ltd","China","Cont # Jilin-406-15<br/>","15-05-2015","142442","15-05-2015","KAPE","93186","66","101.60","54606.996","1%","1%","5659587","0","0","0","0","0","0","2","113191.74","230911.1496","120073.797792","6123763.687392");
INSERT INTO gst VALUES("15","Gulf Trading Corporation","Plot # 159, Memon Plaza Good Luck,","Haji Jumbo Streen, Karachi.","May 2015","11-21-9999-272-19","42301-1065073-9","0857501-7","COAU7010287150","18-04-2015","Jilin Yuanda Grains Co. Ltd","China","Cont # Jilin-408-15<br/>","15-05-2015","142532","15-05-2015","KAPE","45090","60","101.60","24168.24","1%","1%","2504848","0","0","0","0","0","0","2","50096.96","102197.7984","53142.855168","2710285.613568");
INSERT INTO gst VALUES("16","Gulf Trading Corporation","Plot # 159, Memon Plaza Good Luck,","Haji Jumbo Streen, Karachi.","June 2015","11-21-9999-272-19","42301-1065073-9","0857501-7","BOM507156400A","14-05-2015","Arpit Agro Products","India","Cont # Arpit-409-15<br/>","28-05-2015","149724","28-05-2015","KAPE","48000","83.23","101.95","35856","0","1%","3692074","0","0","0","0","0","0","2","73841.48","150636.6192","78331.041984","3994883.141184");
INSERT INTO gst VALUES("17","Gulf Trading Corporation","Plot # 159, Memon Plaza Good Luck,","Haji Jumbo Streen, Karachi.","June 2015","11-21-9999-272-19","42301-1065073-9","0857501-7","MSCUM9323207","17-05-2015","AGT Foods","Canada","Cont # AGT-053-15<br/>","24-06-2015","163715","24-06-2015","KAPE","50000","81.94","101.70","36500","1%","1%","3786662","0","0","0","0","0","0","2","75733.24","154495.8096","80337.820992","4097228.870592");
INSERT INTO gst VALUES("18","Gulf Trading Corporation","Plot # 159, Memon Plaza Good Luck,","Haji Jumbo Streen, Karachi.","June 2015","11-21-9999-272-19","42301-1065073-9","0857501-7","ARS/NHV/KHI/3957","11-06-2015","Jay Yogeshwar Trading Company","India","Cont # Jay-009-15<br/>","16-06-2015","201448","16-06-2015","KAPW","48000","98.28","101.70","42024","1%","1%","4359745","0","0","0","0","0","0","2","87194.9","177877.596","92496.34992","4717313.84592");
INSERT INTO gst VALUES("19","Gulf Trading Corporation","Plot # 159, Memon Plaza Good Luck,","Haji Jumbo Streen, Karachi.","June 2015","11-21-9999-272-19","42301-1065073-9","0857501-7","26010129560","16-05-2015","Legumex Walker Canada inc","Canada","Cont # Legu-024-15<br/>","23-06-2015","205787","23-06-2015","KAPW","73770","67.35","101.70","44262","1%","1%","4591924","0","0","0","0","0","0","2","91838.48","187350.4992","97422.259584","4968535.238784");
INSERT INTO gst VALUES("20","Gulf Trading Corporation","Plot # 159, Memon Plaza Good Luck,","Haji Jumbo Streen, Karachi.","June 2015","11-21-9999-272-19","42301-1065073-9","0857501-7","MSCURY587462","12-05-2015","VG Agroholding UAB","Singapore","Cont # Sudima-344-15<br/>","16-06-2015","64669","16-06-2015","KPPI","116865","69.04","101.70","71871.975","1%","1%","7456298","0","0","0","0","0","0","2","149125.96","304216.9584","158192.818368","8067833.736768");
INSERT INTO gst VALUES("21","Taufiq International","Shop 7-17, Rafiq Mansion, Near Al-Momin Plaza,","Buns  Road, Karachi.","June 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","COAU7010500480","03-05-2015","Jilin Yuanda Grains Co. Ltd","China","Cont # Jilin-0408-15<br/>","05-06-2015","154503","05-06-2015","KAPE","67650","60.29","101.80","36300.99","1%","1%","3769719","0","0","0","0","0","0","2","75394.38","153804.5352","79978.358304","4078896.273504");
INSERT INTO gst VALUES("22","Taufiq International","Shop 7-17, Rafiq Mansion, Near Al-Momin Plaza,","Buns  Road, Karachi.","June 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","95379090C","02-06-2015","Mekinnen Amdisa Oil Seeds and Pulses Exporter Alam","Ethiopia","LC # 10-15<br/>","16-06-2015","159602","16-06-2015","KAPE","48000","83.91","101.70","35880","1%","1%","3722341","0","0","0","0","0","0","2","74446.82","151871.5128","78973.186656","4027632.519456");
INSERT INTO gst VALUES("23","Taufiq International","Shop 7-17, Rafiq Mansion, Near Al-Momin Plaza,","Buns  Road, Karachi.","June 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","953790902","03-06-2015","Mekinnen Amdisa Oil Seeds and Pulses Exporter Alam","Ethiopia","LC # 10-15<br/>","18-06-2015","161146","18-06-2015","KAPE","72000","83.91","101.70","53820","1%","1%","5583511","0","0","0","0","0","0","2","111670.22","227807.2488","118459.769376","6041448.238176");
INSERT INTO gst VALUES("24","Taufiq International","Shop 7-17, Rafiq Mansion, Near Al-Momin Plaza,","Buns  Road, Karachi.","June 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","13902453601","28-05-2015","Akash Enterprises","India","Cont # Akash-007-15<br/>","02-06-2015","191544","02-06-2015","KAPW","48000","89.89","101.95","38400","326","1%","3987597","0","0","0","0","0","0","2","79751.94","162693.9576","84600.857952","4314643.755552");
INSERT INTO gst VALUES("25","Taufiq International","Shop 7-17, Rafiq Mansion, Near Al-Momin Plaza,","Buns  Road, Karachi.","June 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","AMSYGNKHI300/2015","12-05-2015","Indo Sino Trade Pte Ltd","Singapore","Cont # Indo-380-15<br/>","09-06-2015","196410","09-06-2015","KAPW","71571","73.42","101.80","46764.4914","1%","1%","4856314","0","0","0","0","0","0","2","97126.28","198137.6112","103031.557824","5254609.449024");
INSERT INTO gst VALUES("26","Taufiq International","Shop 7-17, Rafiq Mansion, Near Al-Momin Plaza,","Buns  Road, Karachi.","June 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","13902476628","16-06-2015","Sailor Export Ltd","India","Cont # Sailor-104-15<br/>","23-06-2015","205791","23-06-2015","KAPW","72000","88.90","101.70","57024","1%","1%","5915908","0","0","0","0","0","0","2","118318.16","241369.0464","125511.904128","6401107.110528");
INSERT INTO gst VALUES("27","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","June 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","KCAMUKHI/020-15","13-05-2015","United Export","India","Cont # United-006-15<br/>","26-05-2015","148779","26-05-2015","KAPE","46000","20.84","101.80","7820","1%","1%","812077","5","40603.85","0","0","0","0","6","51160.851","36153.66804","18799.9073808","958795.2764208");
INSERT INTO gst VALUES("28","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","June 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","MSCURX190763","13-04-2015","Sunrise Commodities Ltd","UAE","Cont # Phonix-464-15<br/>","29-05-2015","150632","29-05-2015","KAPE","97080","20.87","101.95","16503.6","1%","1%","1716361","5","85818.05","0","0","0","0","6","108130.743","76412.39172","39734.4436944","2026456.6284144");
INSERT INTO gst VALUES("29","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","June 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","KCAMUNKHI/022-15","28-05-2015","Growmore Enterprises","India","Cont # Grow-014-15<br/>","01-06-2015","151821","01-06-2015","KAPE","115000","20.89","102.050","19550","1%","1%","2035179","5","101758.95","0","0","0","0","6","128216.277","90606.16908","47115.2079216","2402875.6040016");
INSERT INTO gst VALUES("30","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","June 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","COAU7010500780","06-05-2015","Agrish Bussan Trading Co. Ltd","Ethiopia","Cont # Agrich-15060-15<br/>","13-06-2015","158560","13-06-2015","KAPE","69000","65.56","101.70","40296","1%","1%","4180475","0","0","0","0","0","0","2","83609.5","170563.38","88692.9576","4523340.8376");
INSERT INTO gst VALUES("31","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","June 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","WADE1503315A","22-03-2015","Junan Fuqan Foodstuffs Co. Ltd","China","Cont # Junan-429-15<br/>","01-06-2015","190871","01-06-2015","KAPW","107500","61.33","102.050","58533.75","1%","1%","6093434","0","0","0","0","0","0","2","121868.68","248612.1072","129278.295744","6593193.082944");
INSERT INTO gst VALUES("32","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","June 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","ARS/NHV/KHI/3827","27-05-2015","Indraprasth Foods Ltd","India","Cont # Indra-73-15<br/>","02-06-2015","191548","02-06-2015","KAPW","48000","90.45","101.95","38640","328","1%","4012515","0","0","0","0","0","0","2","80250.3","163710.612","85129.51824","4341605.43024");
INSERT INTO gst VALUES("33","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","June 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","ARS/NHV/KHI/3826","27-05-2015","Indraprasth Foods Ltd","India","Cont # Indra-72-15<br/>","02-06-2015","191604","02-06-2015","KAPW","48000","90.45","101.95","38640","328","1%","4012515","0","0","0","0","0","0","2","80250.3","163710.612","85129.51824","4341605.43024");
INSERT INTO gst VALUES("34","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","June 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","13902448014","28-05-2015","Khemchand Mishrilal","India","Cont # Khem-005-15<br/>","03-06-2015","192069","03-06-2015","KAPW","120000","20.84","101.80","20400","1%","1%","2118462","5","105923.1","0","0","0","0","6","133463.106","94313.92824","49043.2426848","2501205.3769248");
INSERT INTO gst VALUES("35","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","June 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","ARS/NHV/KHI/3832","28-05-2015","Pari Agro Industries ","India","Cont # Pari-33-15<br/>","03-06-2015","192105","03-06-2015","KAPW","48000","91.58","101.80","39120","1%","1%","4062463","0","0","0","0","0","0","2","81249.26","165748.4904","86189.215008","4395649.965408");
INSERT INTO gst VALUES("36","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","June 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","13902451722","02-06-2015","Raja Enterprises","India","Cont # Raja-55-15<br/>","09-06-2015","196413","09-06-2015","KAPW","120000","20.84","101.80","20400","1%","1%","2118462","5","105923.1","0","0","0","0","6","133463.106","94313.92824","49043.2426848","2501205.3769248");
INSERT INTO gst VALUES("37","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","June 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","13902458630","02-06-2015","Khemchand Mishrilal","India","Cont # Khem-012-15<br/>","11-06-2015","198329","11-06-2015","KAPW","72000","20.99","101.80","12326.4","1%","1%","1280050","5","64002.5","0","0","0","0","6","80643.15","56987.826","29633.66952","1511317.14552");
INSERT INTO gst VALUES("38","Zeeshan Enterprises","216-A, Yasin Square dolly Khata","Solder Bazar, Karachi","June 2015","12-23-9999-694-37","42301-0853467-1","0648749-1","MS/NHV/KHI-0153","19-06-2015","Raja Enterprises","India","Cont # Raja-69-15<br/>","23-06-2015","205782","23-06-2015","KAPW","72000","20.69","101.70","12160.8","1%","1%","1261612","5","63080.6","0","0","0","0","6","79481.556","56166.96624","29206.8224448","1489547.9446848");



DROP TABLE pass;

CREATE TABLE `pass` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `roll` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO pass VALUES("1","kashiffazal99","123456","admin");



DROP TABLE payordercan;

CREATE TABLE `payordercan` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `curr_date` varchar(30) DEFAULT NULL,
  `bank` varchar(50) DEFAULT NULL,
  `bankAddr` varchar(50) DEFAULT NULL,
  `po_date` varchar(20) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `po_num` varchar(20) DEFAULT NULL,
  `ship_line` varchar(100) DEFAULT NULL,
  `acNo` varchar(30) DEFAULT NULL,
  `ac_title` varchar(50) DEFAULT NULL,
  `bankAcTitle` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO payordercan VALUES("1","02-01-2014","Habib Bank Ltd","Jodia bazar<br/> New Chali Branch<br/> Karachi ","25-11-2014","20,000","0268756","CIM SHIPPING INC","HT-78964-012-1","ZEESHAN ENTERPRISES","TAUFIQ INTERNATIONAL");
INSERT INTO payordercan VALUES("2","02-01-2014","Habib Bank Ltd","Jodia bazar<br/> New Chali Branch<br/> Karachi ","25-11-2014","50,000","04896753","GREEN PAK SHIPPING PVT LTD","HT-78964-012-1","GULF TRADING CORPORATION","TAUFIQ INTERNATIONAL");



DROP TABLE payorderletter;

CREATE TABLE `payorderletter` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `shipping_1` varchar(30) DEFAULT NULL,
  `acTitle_1` varchar(30) DEFAULT NULL,
  `payAmount_1` varchar(30) DEFAULT NULL,
  `shipping_2` varchar(30) DEFAULT NULL,
  `acTitle_2` varchar(30) DEFAULT NULL,
  `payAmount_2` varchar(30) DEFAULT NULL,
  `shipping_3` varchar(30) DEFAULT NULL,
  `acTitle_3` varchar(30) DEFAULT NULL,
  `payAmount_3` varchar(30) DEFAULT NULL,
  `shipping_4` varchar(30) DEFAULT NULL,
  `acTitle_4` varchar(30) DEFAULT NULL,
  `payAmount_4` varchar(30) DEFAULT NULL,
  `shipping_5` varchar(30) DEFAULT NULL,
  `acTitle_5` varchar(30) DEFAULT NULL,
  `payAmount_5` varchar(30) DEFAULT NULL,
  `shipping_6` varchar(30) DEFAULT NULL,
  `acTitle_6` varchar(30) DEFAULT NULL,
  `payAmount_6` varchar(30) DEFAULT NULL,
  `shipping_7` varchar(30) DEFAULT NULL,
  `acTitle_7` varchar(30) DEFAULT NULL,
  `payAmount_7` varchar(30) DEFAULT NULL,
  `shipping_8` varchar(30) DEFAULT NULL,
  `acTitle_8` varchar(30) DEFAULT NULL,
  `payAmount_8` varchar(30) DEFAULT NULL,
  `shipping_9` varchar(30) DEFAULT NULL,
  `acTitle_9` varchar(30) DEFAULT NULL,
  `payAmount_9` varchar(30) DEFAULT NULL,
  `shipping_10` varchar(30) DEFAULT NULL,
  `acTitle_10` varchar(30) DEFAULT NULL,
  `payAmount_10` varchar(30) DEFAULT NULL,
  `bankName` varchar(30) DEFAULT NULL,
  `bankAddress` varchar(100) DEFAULT NULL,
  `totalAmount` varchar(30) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  `bankAcTitle` varchar(30) DEFAULT NULL,
  `bankAcNum` varchar(30) DEFAULT NULL,
  `cheque_num` varchar(30) DEFAULT NULL,
  `count` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO payorderletter VALUES("10","COLLECTOR OF CUSTOM","GULF TRADING CORPORATION","87,195","EXCISE & TAXATION OFFICER SEA ","GULF TRADING CORPORATION","41,420","COLLECTOR OF CUSTOM PORT QASIM","GULF TRADING CORPORATION","149,130","EXCISE & TAXATION OFFICER PORT","GULF TRADING CORPORATION","70,840","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","NIB Bank","New Challi Branch<br/> Karachi","348,585","16-06-2015","GULF TRADING CORPORATION","0013293732","37275463","4");
INSERT INTO payorderletter VALUES("12","COLLECTOR OF CUSTOM","ZEESHAN ENTERPRISES","142,500","EXCISE & TAXATION OFFICER SEA ","ZEESHAN ENTERPRISES","11,985","COLLECTOR OF CUSTOM","TAUFIQ INTERNATIONAL","118,320","EXCISE & TAXATION OFFICER SEA ","TAUFIQ INTERNATIONAL","56,205","COLLECTOR OF CUSTOM","GULF TRADING CORPORATION","91,840","EXCISE & TAXATION OFFICER SEA ","GULF TRADING CORPORATION","43,630","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","Faysal Bank Ltd","A.H.R BRANCH<br/> KARACHI","464,480","22-06-2015","ZEESHAN ENTERPRISES","7972128006","65809646","6");
INSERT INTO payorderletter VALUES("13","KARACHI INTERNATIONAL CONTAINE","TAUFIQ INTERNATIONAL","29,000","MITSUI O.S.K. LINES PAKISTAN (","TAUFIQ INTERNATIONAL","53,620","MITSUI O.S.K. LINES PAKISTAN (","TAUFIQ INTERNATIONAL","60,000","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","Faysal Bank Ltd","A.H.R BRANCH<br/> KARACHI","142,620","24-06-2015","ZEESHAN ENTERPRISES","7972128006","65809647","3");
INSERT INTO payorderletter VALUES("14","KARACHI INTERNATIONAL CONTAINE","ZEESHAN ENTERPRISES","30,000","MSHARIB SHIPPING & LOGISTICS","ZEESHAN ENTERPRISES","64,315","MSHARIB SHIPPING & LOGISTICS","ZEESHAN ENTERPRISES","60,000","PAKISTAN INTERNATIONAL CONTAIN","GULF TRADING CORPORATION","19,000","MSC AGENCY PAKISTAN PVT LTD","GULF TRADING CORPORATION","31,682","MSC AGENCY PAKISTAN PVT LTD","GULF TRADING CORPORATION","30,000","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","Faysal Bank Ltd","A.H.R BRANCH<br/> KARACHI","234,997","24-06-2015","ZEESHAN ENTERPRISES","7972128006","65809648","6");
INSERT INTO payorderletter VALUES("15","COLLECTOR OF CUSTOM","ZEESHAN ENTERPRISES","133,825","EXCISE & TAXATION OFFICER SEA ","ZEESHAN ENTERPRISES","12,440","KARACHI INTERNATIONAL CONTAINE","ZEESHAN ENTERPRISES","28,000","EMKAY LINE (PVT) LTD","ZEESHAN ENTERPRISES","61,000","EMKAY LINE (PVT) LTD","ZEESHAN ENTERPRISES","120,000","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","Faysal Bank Ltd","A.H.R BRANCH<br/> KARACHI","355,265","03-07-2015","ZEESHAN ENTERPRISES","7972128006","65809649","5");
INSERT INTO payorderletter VALUES("16","COLLECTOR OF CUSTOM","ZEESHAN ENTERPRISES","254,725","EXCISE & TAXATION OFFICER SEA ","ZEESHAN ENTERPRISES","23,670","QASIM INTERNATIONAL CONTAINER ","ZEESHAN ENTERPRISES","50,000","MAERSK PAKISTAN PVT LTD","ZEESHAN ENTERPRISES","73,880","MAERSK PAKISTAN PVT LTD","ZEESHAN ENTERPRISES","150,000","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","Faysal Bank Ltd","A.H.R BRANCH<br/> KARACHI","552,275","08-07-2015","ZEESHAN ENTERPRISES","7972128006","65809651","5");
INSERT INTO payorderletter VALUES("17","PAKISTAN INTERNATIONAL CONTAIN","GULF TRADING CORPORATION","28,800","INSERVEY PAKISTAN (PVT) LTD","GULF TRADING CORPORATION","53,400","INSERVEY PAKISTAN (PVT) LTD","GULF TRADING CORPORATION","105,000","MEGA TECH (PVT) LTD","GULF TRADING CORPORATION","9,600","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","Faysal Bank Ltd","A.H.R BRANCH<br/> KARACHI","196,800","08-07-2015","ZEESHAN ENTERPRISES","7972128006","65809653","4");
INSERT INTO payorderletter VALUES("18","COLLECTOR OF CUSTOM","ZEESHAN ENTERPRISES","36,430","EXCISE & TAXATION OFFICER SEA ","ZEESHAN ENTERPRISES","19,125","PAKISTAN INTERNATIONAL CONTAIN","ZEESHAN ENTERPRISES","9,500","MERCHANT SHIPPING PVT LTD","ZEESHAN ENTERPRISES","21,000","MERCHANT SHIPPING PVT LTD","ZEESHAN ENTERPRISES","50,000","CARGO SUPPORT SERVICES (PVT) L","ZEESHAN ENTERPRISES","2,500","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","Faysal Bank Ltd","A.H.R BRANCH<br/> KARACHI","138,555","10-07-2015","ZEESHAN ENTERPRISES","7972128006","65809654","6");
INSERT INTO payorderletter VALUES("19","COLLECTOR OF CUSTOM","ZEESHAN ENTERPRISES","108,355","EXCISE & TAXATION OFFICER SEA ","ZEESHAN ENTERPRISES","56,890","QASIM INTERNATIONAL CONTAINER ","ZEESHAN ENTERPRISES","50,000","MAERSK PAKISTAN PVT LTD","ZEESHAN ENTERPRISES","73,880","MAERSK PAKISTAN PVT LTD","ZEESHAN ENTERPRISES","150,000","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","Faysal Bank Ltd","A.H.R BRANCH<br/> KARACHI","439,125","13-07-2015","ZEESHAN ENTERPRISES","7972128006","65809655","5");
INSERT INTO payorderletter VALUES("20","COLLECTOR OF CUSTOM","GULF TRADING CORPORATION","141,400","EXCISE & TAXATION OFFICER SEA ","GULF TRADING CORPORATION","12,645","PAKISTAN INTERNATIONAL CONTAIN","GULF TRADING CORPORATION","29,000","EMKAY LINE (PVT) LTD","GULF TRADING CORPORATION","61,000","EMKAY LINE (PVT) LTD","GULF TRADING CORPORATION","120,000","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","SELECT","SELECT","","Faysal Bank Ltd","A.H.R BRANCH<br/> KARACHI","364,045","15-07-2015","ZEESHAN ENTERPRISES","7972128006","65809656","5");



DROP TABLE shipping;

CREATE TABLE `shipping` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `shipping` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO shipping VALUES("2","PAKISTAN CONTAINER TERMINAL");
INSERT INTO shipping VALUES("3","GREEN PAK SHIPPING PVT LTD");
INSERT INTO shipping VALUES("4","CIM SHIPPING INC");
INSERT INTO shipping VALUES("5","EMKAY LINE (PVT) LTD");
INSERT INTO shipping VALUES("6","PACIFIC DELTA SHIPPING PVT LTD");
INSERT INTO shipping VALUES("8","COLLECTOR OF CUSTOM PORT QASIM");
INSERT INTO shipping VALUES("9","EXCISE & TAXATION OFFICER PORT QASIM");
INSERT INTO shipping VALUES("10","COLLECTOR OF CUSTOM");
INSERT INTO shipping VALUES("11","EXCISE & TAXATION OFFICER SEA DUES");
INSERT INTO shipping VALUES("12","MITSUI O.S.K. LINES PAKISTAN (PVT) LTD");
INSERT INTO shipping VALUES("13","KARACHI INTERNATIONAL CONTAINER TERMINAL LTD");
INSERT INTO shipping VALUES("14","MSHARIB SHIPPING & LOGISTICS");
INSERT INTO shipping VALUES("15","MSC AGENCY PAKISTAN PVT LTD");
INSERT INTO shipping VALUES("16","PAKISTAN INTERNATIONAL CONTAINER TERMINAL");
INSERT INTO shipping VALUES("17","QASIM INTERNATIONAL CONTAINER TERMINAL LTD");
INSERT INTO shipping VALUES("18","MAERSK PAKISTAN PVT LTD");
INSERT INTO shipping VALUES("19","INSERVEY PAKISTAN (PVT) LTD");
INSERT INTO shipping VALUES("20","MEGA TECH (PVT) LTD");
INSERT INTO shipping VALUES("21","MERCHANT SHIPPING PVT LTD");
INSERT INTO shipping VALUES("22","CARGO SUPPORT SERVICES (PVT) LTD");



