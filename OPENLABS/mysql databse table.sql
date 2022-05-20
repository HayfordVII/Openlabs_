CREATE TABLE `user_form` (
  `userId` int(100) NOT NULL AUTO_INCREMENT,
  `userName` varchar(100) NOT NULL,
  `userUid` varchar(100) NOT NULL,
  `userCourse` varchar(100) NOT NULL,
  `userPhone` int(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userLocation` varchar(100) NOT NULL,
  `userWorkstation` varchar(100) NOT NULL,
  `userPwd` varchar(100) NOT NULL,
  `userType` varchar(100) NOT NULL,

  `userBanner` varchar(100) NOT NULL,
  `userPic` varchar(100) NOT NULL,
  `userBio` varchar(100) NOT NULL,

  `userGitlink` varchar(100) NOT NULL,
  `userLinkedin` varchar(100) NOT NULL,
  `userTelegram` varchar(100) NOT NULL,
  

  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4