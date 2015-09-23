/*
MySQL Data Transfer
Source Host: localhost
Source Database: tiket
Target Host: localhost
Target Database: tiket
Date: 9/15/2015 2:39:10 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for attendee
-- ----------------------------
DROP TABLE IF EXISTS `attendee`;
CREATE TABLE `attendee` (
  `attendee_id` int(11) NOT NULL DEFAULT '0',
  `attendee_name` varchar(255) DEFAULT NULL,
  `event_id` int(11) NOT NULL DEFAULT '0',
  `ticket_id` int(11) NOT NULL DEFAULT '0',
  `payment_type` varchar(255) DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `num_of_person_going` int(11) DEFAULT NULL,
  PRIMARY KEY (`attendee_id`,`event_id`,`ticket_id`),
  KEY `idx_attendee` (`attendee_name`,`payment_status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for event
-- ----------------------------
DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) DEFAULT NULL,
  `event_type` varchar(255) DEFAULT NULL,
  `event_status` varchar(255) DEFAULT NULL,
  `artist_type` varchar(255) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_location` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`event_id`),
  KEY `idx_event` (`event_name`,`event_date`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for eventticket
-- ----------------------------
DROP TABLE IF EXISTS `eventticket`;
CREATE TABLE `eventticket` (
  `event_id` int(11) NOT NULL DEFAULT '0',
  `ticket_id` int(11) NOT NULL DEFAULT '0',
  `ticket_price` decimal(10,0) DEFAULT '0',
  `ticket_status` varchar(255) DEFAULT NULL,
  `ticket_available` varchar(255) DEFAULT NULL,
  `ticket_sell_start` datetime DEFAULT NULL,
  `ticket_sell_end` datetime DEFAULT NULL,
  PRIMARY KEY (`event_id`,`ticket_id`),
  KEY `idx_eventticket` (`ticket_price`,`ticket_available`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ticket
-- ----------------------------
DROP TABLE IF EXISTS `ticket`;
CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL DEFAULT '0',
  `ticket_class` varchar(255) DEFAULT NULL,
  `standard_min_price` double DEFAULT NULL,
  `standard_max_price` double DEFAULT NULL,
  PRIMARY KEY (`ticket_id`),
  KEY `idx_ticket` (`ticket_class`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `attendee` VALUES ('1', 'lukluk', '1', '3', 'CREDIT CARD', '2015-05-15 11:00:00', 'PAID', '0');
INSERT INTO `attendee` VALUES ('2', 'sida', '1', '5', 'CREDIT CARD', '2015-06-03 18:00:00', 'PAID', '0');
INSERT INTO `attendee` VALUES ('3', 'lawrence', '1', '4', 'CASH', '2015-05-16 17:30:00', 'PAID', '2');
INSERT INTO `attendee` VALUES ('4', 'wahyu', '1', '4', 'CREDIT CARD', '2015-05-16 17:30:01', 'CANCELED', '2');
INSERT INTO `attendee` VALUES ('5', 'lisdiana', '2', '3', 'CREDIT CARD', '2015-03-01 12:00:00', 'PAID', '0');
INSERT INTO `attendee` VALUES ('6', 'anita', '2', '3', 'CREDIT CARD', '2015-03-01 12:00:00', 'PAID', '1');
INSERT INTO `attendee` VALUES ('7', 'viony', '3', '3', 'CASH', '2015-06-01 15:00:00', 'PAID', '3');
INSERT INTO `attendee` VALUES ('8', 'gin', '3', '5', 'CREDIT CARD', '2015-06-01 15:00:00', 'CANCELED', '1');
INSERT INTO `attendee` VALUES ('9', 'sandhi', '4', '1', 'CASH', '2015-01-01 17:00:00', 'PAID', '5');
INSERT INTO `attendee` VALUES ('10', 'nova', '4', '2', 'CREDIT CARD', '2015-01-01 17:00:00', 'PAID', '3');
INSERT INTO `attendee` VALUES ('11', 'saskia', '4', '1', 'CREDIT CARD', '2015-01-01 17:00:00', 'CANCELED', '1');
INSERT INTO `event` VALUES ('1', 'One Direction', 'indoor', 'Active', 'international', '2015-07-01', 'DEPOK');
INSERT INTO `event` VALUES ('2', 'Slank', 'indoor', 'Active', 'local', '2015-07-08', 'ICE BSD');
INSERT INTO `event` VALUES ('3', 'Beyonce', 'outdoor', 'Active', 'international', '2015-08-15', 'Kuta Bali');
INSERT INTO `event` VALUES ('4', 'Iwan Fals', 'outdoor', 'Active', 'local', '2015-06-12', 'Bundaran HI');
INSERT INTO `event` VALUES ('11', 'Metallica', 'Indoor', 'Active', 'International', '2015-12-01', 'GBK');
INSERT INTO `event` VALUES ('14', 'Led Zeppelin', 'Indoor', 'Active', 'International', '2015-09-15', 'GBK');
INSERT INTO `eventticket` VALUES ('1', '2', '1500', 'Active', '50', '2015-05-01 10:00:00', '2015-05-31 10:00:00');
INSERT INTO `eventticket` VALUES ('1', '3', '2500', 'Active', '75', '2015-05-01 10:00:00', '2015-05-31 10:00:00');
INSERT INTO `eventticket` VALUES ('1', '4', '3700', 'Active', '100', '2015-05-15 11:00:00', '2015-06-01 11:00:00');
INSERT INTO `eventticket` VALUES ('1', '5', '4500', 'Active', '33', '2015-05-15 11:00:00', '2015-06-15 11:00:00');
INSERT INTO `eventticket` VALUES ('2', '1', '750', 'Active', '22', '2015-03-01 12:00:00', '2015-05-31 12:00:00');
INSERT INTO `eventticket` VALUES ('2', '3', '1000', 'Active', '88', '2015-03-01 12:00:00', '2015-03-31 12:00:00');
INSERT INTO `eventticket` VALUES ('2', '4', '3500', 'Active', '56', '2015-03-01 12:00:00', '2015-03-31 12:00:00');
INSERT INTO `eventticket` VALUES ('3', '3', '1700', 'Active', '43', '2015-06-01 15:00:00', '2015-06-01 23:00:00');
INSERT INTO `eventticket` VALUES ('3', '4', '2000', 'Active', '0', '2015-07-01 15:00:00', '2015-07-15 15:00:00');
INSERT INTO `eventticket` VALUES ('3', '5', '5500', 'Active', '18', '2015-06-01 15:00:00', '2015-06-30 15:00:00');
INSERT INTO `eventticket` VALUES ('4', '1', '800', 'Active', '26', '2015-01-01 17:00:00', '2015-06-09 17:00:00');
INSERT INTO `eventticket` VALUES ('4', '2', '1600', 'Active', '77', '2015-01-01 17:00:00', '2015-06-09 17:00:00');
INSERT INTO `ticket` VALUES ('1', 'Festival', '500', '1000');
INSERT INTO `ticket` VALUES ('2', 'Bronze', '1001', '2000');
INSERT INTO `ticket` VALUES ('3', 'Silver', '2001', '3000');
INSERT INTO `ticket` VALUES ('4', 'Gold', '3001', '4000');
INSERT INTO `ticket` VALUES ('5', 'Platinum', '4001', '5000');
