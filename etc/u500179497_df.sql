
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 27 Kwi 2015, 09:31
-- Wersja serwera: 5.1.67
-- Wersja PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `u500179497_df`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `drink`
--

CREATE TABLE IF NOT EXISTS `drink` (
  `drink_id` int(11) NOT NULL AUTO_INCREMENT,
  `drink_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `type` varchar(30) COLLATE utf8_bin NOT NULL,
  `details` text COLLATE utf8_bin NOT NULL,
  `percent` varchar(5) COLLATE utf8_bin NOT NULL,
  `average_rate` double NOT NULL,
  PRIMARY KEY (`drink_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=28 ;

--
-- Zrzut danych tabeli `drink`
--

INSERT INTO `drink` (`drink_id`, `drink_name`, `type`, `details`, `percent`, `average_rate`) VALUES
(1, 'Heineken', 'beer', 'Heineken Lager Beer (Dutch: Heineken Pilsener), or simply Heineken (Dutch pronunciation: [ˈɦɛinəkən]), is a pale lager beer with 5% alcohol by volume produced by the Dutch brewing company Heineken International. Heineken is well known for its signature green bottle and red star', '5.4', 0),
(2, 'Jagerbomb', 'cocktail', 'The Jägerbomb /ˈjeɪɡərbɒm/ is a bomb shot mixed drink that was originally mixed by dropping a shot of Jägermeister into a glass of beer but in recent years has become more popular with Red Bull or other energy drinks.[1] In German-speaking countries, it is called a "Turbojäger"[2] or a "Fliegender Hirsch"/"Flying Hirsch" (Flying Stag)—where "Fliegender" is derived from the slogan "Red Bull verleiht Flügel" (Red Bull gives you wings) and "Stag" originates in the Jägermeister logo. A long drink mixed with Jägermeister and Red Bull is called "JägerBull". In Finland, it is called an "Akkuhappo" (Battery Acid)[3] while in Greece it is called "Υποβρύχιο" (Submarine).[4]', '35.0', 0),
(3, 'Miller Genuine Draft', 'beer', 'The Miller Brewing Company is an American beer brewing company owned by SABMiller. Its regional headquarters is located in Milwaukee, Wisconsin and the company has brewing facilities in Albany, Georgia; Chippewa Falls, Wisconsin; Eden, North Carolina; Fort Worth, Texas; Irwindale, California; Milwaukee, Wisconsin; and Trenton, Ohio. On 1 July 2008 the MillerCoors company was formed as a joint venture with rival Molson Coors to consolidate the production and distribution of its products in the United States, with each parent company''s corporate operations and international operations remaining separate and independent of the joint venture.', '5.0', 0),
(4, 'Smirnoff', 'spirit', 'Smirnoff is a brand of vodka owned and produced by the British company Diageo. The Smirnoff brand began with a vodka distillery founded in Moscow by Pyotr Arsenievich Smirnov (1831–1898).[1] It is now distributed in 130 countries. It is produced in several countries including India,[2] Ireland, Italy, the United Kingdom and the United States.[3] Smirnoff products include vodka, flavoured vodka, and malt beverages. In March 2006, Diageo North America claimed that Smirnoff vodka was the best-selling distilled spirit brand in the world', '37.5', 0),
(5, 'Red Square Vodka', 'spirit', 'Vodka (Polish: wódka [ˈvutka], Russian: водка [ˈvotkə]) is a distilled beverage composed primarily of water and ethanol, sometimes with traces of impurities and flavorings. Traditionally, vodka is made by the distillation of fermented cereal grains or potatoes, though some modern brands use other substances, such as fruits or sugar.\n\nSince the 1890s, the standard Polish, Russian, Ukrainian, Estonian, Latvian, Lithuanian and Czech vodkas are 40% alcohol by volume ABV (80 proof), a percentage that is widely misattributed to Dmitri Mendeleev.[1][2] The European Union has established a minimum of 37.5% ABV for any "European vodka" to be named as such.[3][4] Products sold as "vodka" in the United States must have a minimum alcohol content of 40%.[5] Even with these loose restrictions, most vodka sold contains 40% ABV. For homemade vodkas and distilled beverages referred to as "moonshine", see moonshine by country.\n\nVodka is traditionally drunk neat (not mixed with any water, ice, or other mixer), though it is often served chilled in the vodka belt countries of Eastern Europe and around the Baltic Sea. It is also commonly used in cocktails and mixed drinks, such as the vodka martini, Cosmopolitan, vodka tonic, Screwdriver, Greyhound, Black or White Russian, Bloody Mary, and Sex on the Beach.', '37.5', 0),
(6, 'Captain Morgans', 'spirit', 'Captain Morgan is a brand of rum produced by alcohol conglomerate Diageo. It is named after the 17th-century Welsh privateer of the Caribbean, Sir Henry Morgan who died on 26 August 1688. Since 2011, the label has used the slogan "To Life, Love and Loot."', '35.0', 0),
(7, 'Havana Club', 'spirit', 'Havana Club is a brand of rum created in Cuba in 1934, and now one of the best-selling rum brands in the world. Originally produced in Cardenas, Cuba by family-owned Jose Arechabala S.A., the brand was nationalized after the Cuban Revolution of 1959. Since 1994 it has been produced in Cuba and sold globally (except the United States) by Havana Club International, a 50:50 joint venture between Pernod Ricard and the Cuban government. Bacardi also produces a competing product with the same name in Puerto Rico, sold only in the United States. The two companies have engaged in ongoing litigation about ownership of the brand.', '37.5', 0),
(8, 'VK', 'cocktail', 'VK is an award winning range of ready to drink beverages and the only brand to revolutionise the RTD category with seven innovative, premium flavours: VK Blue, VK Ice Storm (infused with glitter), VK Strawberry and Lime, VK Orange and Passion Fruit, VK Black Cherry, VK Tropical Fruits and VK Apple and Mango, all of which are mixed to 4% ABV.\r\n\r\nVK is now the number one student and best performing RTD*, and 2014’s Ultimate VKend campaign is putting VK on the lips of all 18-24 year olds. VK tastes great on its own or mixed up into shared serves such as VK fishbowls. VK contains real fruit juice and no artificial sweeteners.\r\n\r\nAvailable in 275ml and 70cl bottles, plus 275ml Mixed Packs. VK Black Cherry, Strawberry and Lime and Blue are also available in 500ml bottles.', '4', 0),
(9, 'Tennants', 'lager', 'Tennent''s Lager is Scotland''s best-selling pale lager, with approximately 60% of the Scottish lager market.[7] The lager was first brewed in 1885 by Hugh Tennent, and in 1893 it won the highest award at the Chicago World''s Fair. It is described as a distinctive, well-balanced lager whose sweet, malty flavours combine with a tangy hoppiness to create its crisp, refreshing character.[8] Tennent''s Lager is certified by the Vegetarian Society as being suitable for vegetarians.[9]\r\n\r\nThe lager was once famous for the design of its cans, which featured photos of various female models printed onto the side - known affectionately as "The Lager Lovelies". This feature was used by Tennent''s up until the final campaign in 1989. Today, authentic original Lager Lovely cans are highly sought after among collectors. The can design is now a plain silver colour, with the company''s trademark large red "T" featuring prominently.\r\n\r\nThe brand''s super strength lager, Tennent''s Super (9% ABV), is no longer produced by Wellpark and is produced in Luton by Inbev, who kept the brand after the sale of Wellpark to C&C.', '4', 0),
(10, 'Stella Artois', 'beer', 'Stella Artois /ˈstɛlə ɑrˈtwɑː/, informally called Stella, is a pilsner beer of between 4.8 and 5.2% ABV. It has been brewed in Leuven, Belgium, since 1926, although it is brewed in other locations as well. A lower alcohol content (4% ABV) version is also sold in the UK, Republic of Ireland, Canada and New Zealand.[1] Stella Artois is one of the prominent brands of Anheuser-Busch InBev, the world''s largest brewer.', '5', 0),
(11, 'Peroni', 'lager', 'Peroni Brewery is a brewing company, founded in Vigevano in Lombardy, Italy in 1846. It has been based in Rome since 1864 and is now owned by the parent company SABMiller brewing group. The company''s main brand in Italy is Peroni (4.7% ABV) a pale lager sometimes known as Peroni Red in export markets. However, it is probably best known worldwide for its premium lager, Nastro Azzurro (5.1% ABV), which was the 13th best-selling beer in the United Kingdom in 2010.[1]', '5.1', 0),
(12, 'San Miguel', 'lager', 'It is a pilsner style lager, golden in colour, sparkling with a generous white creamy head. The taste is full bodied with a refreshing balance of bitterness from the hops and sweetness from the malt. Its rich, intense and refreshing flavour makes it ideal to enjoy with friends.', '4.8', 0),
(13, 'Amstel', 'lager', '', '4.1', 0),
(14, 'Foster', 'lager', '', '4.0', 0),
(15, 'Carling', 'lager', '', '4.0', 0),
(16, 'Kronenbourg 1664', 'lager', '', '5.0', 0),
(17, 'Tuborg', 'lager', '', '4.6', 0),
(18, 'London Pride', 'ale', '', '4.1', 0),
(19, 'John Smith''s', 'ale', '', '3.6', 0),
(20, 'Guiness', 'ale', '', '4.1', 0),
(21, 'Abbot Ale', 'ale', '', '5.0', 0),
(22, 'Bombay Sapphire', 'spirit', '', '40.0', 0),
(23, 'Tranqueray', 'spirit', '', '43.1', 0),
(24, 'Gordon''s', 'spirit', '', '37.5', 0),
(25, 'Absolut', 'spirit', '', '40.0', 0),
(26, 'Skyy', 'spirit', '', '40.0', 0),
(27, 'Kraken Spiced', 'spirit', '', '40', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `drink_rate`
--

CREATE TABLE IF NOT EXISTS `drink_rate` (
  `drink_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`drink_id`,`user_id`),
  KEY `fk_Drink_rate_User` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `place_id` int(11) NOT NULL AUTO_INCREMENT,
  `place_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `address` varchar(50) COLLATE utf8_bin NOT NULL,
  `post_code` varchar(10) COLLATE utf8_bin NOT NULL,
  `type` varchar(10) COLLATE utf8_bin NOT NULL,
  `google_map` text COLLATE utf8_bin NOT NULL,
  `facebook_link` text COLLATE utf8_bin NOT NULL,
  `average_rate` double NOT NULL,
  `image_place1` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`place_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Places description' AUTO_INCREMENT=12 ;

--
-- Zrzut danych tabeli `place`
--

INSERT INTO `place` (`place_id`, `place_name`, `description`, `address`, `post_code`, `type`, `google_map`, `facebook_link`, `average_rate`, `image_place1`) VALUES
(1, 'The Tilted Wig', 'Bar at union st', '55-56 Castle Street', 'AB11 5BA', 'bar', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2164.387089452287!2d-2.093774!3d57.147540000000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e3e9ebece27%3A0x20d72ff59bdf0c6d!2sThe+Tilted+Wig!5e0!3m2!1sen!2suk!4v1429528834965" width="400" height="300" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/pages/The-Tilted-Wig/175298452487171?ref=ts&fref=ts', 0, ''),
(2, 'The Garage', 'Popular student club', '17 Windmill Brae', 'AB11 6HU', 'club', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.5454429754195!2d-2.1027300000000024!3d57.14483300000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e24bb9d3ea3%3A0xe9d2e23bfa64fcff!2sThe+Garage+%2F+Campus+Aberdeen!5e0!3m2!1sen!2suk!4v1429528860632" width="400" height="300" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/GarageABZ?fref=ts', 0, ''),
(3, 'Prohibition', 'Bar at union st', '31 Langstane Place', 'AB11 6EN', 'club', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.615989756896!2d-2.106413999999964!3d57.143627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e24314ef20f%3A0xe4e667dcdfcb220b!2sProhibition!5e0!3m2!1sen!2suk!4v1429529014535" width="400" height="300" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/ProhibitionAberdeen?fref=ts', 0, ''),
(4, 'Balaclava', 'Bar close to Bon Accord', '31 Loch Stree', 'AB25 1DD', 'bar', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.276525761104!2d-2.101001999999989!3d57.14942999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e3d63f6d5d3%3A0x5ae8fcb4f52d4411!2sBalaclava+Bar!5e0!3m2!1sen!2suk!4v1429528916135" width="600" height="450" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/pages/Balaclava-Bar/168505586512430?ref=ts&fref=ts', 0, ''),
(5, 'The Underground Klub', 'Popular club ', '18 Bridge Street', 'AB11 6JL', 'club', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d69255.96664306035!2d-2.1260368499999767!3d57.14990124999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x68c3a489dbe88bca!2sKorova!5e0!3m2!1sen!2suk!4v1429529552284" width="400" height="300" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/theundergroundklubabz?ref=ts&fref=ts', 0, ''),
(6, 'Cheerz Nightclub', 'Gay bar for the most unorthodox fun', '11 Haden Street', 'AB11 6PH', 'club', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.4756557049327!2d-2.0975559999999764!3d57.14602599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e3c7e575d93%3A0xeeb1884acc9b5b7f!2sCheerz+Nightclub!5e0!3m2!1sen!2suk!4v1429529927409" width="400" height="300" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/cheerz.nightclub?fref=ts', 0, ''),
(7, 'Paramount Bar', 'Pre night out bar', '25 Bon-Accord Street', 'AB11 6EA', 'bar', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.616984190576!2d-2.1056639999999756!3d57.14361000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e245aaafae3%3A0xd72ce0fd8f6a7020!2sParamount+Bar!5e0!3m2!1sen!2suk!4v1429530051586" width="400" height="300" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/pages/Paramount-Bar/166526396733590?fref=ts', 0, ''),
(8, 'The Bobbin', 'Typical pub for Aberdeen uni students', '500 King Street', 'AB24 5ST', 'bar', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2163.509593531493!2d-2.096266!3d57.162539!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e11e3e5ee59%3A0x300bff203c3e9c60!2sBobbin!5e0!3m2!1sen!2suk!4v1429530329745" width="400" height="300" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/Bobbin.Aberdeen?fref=ts', 0, ''),
(9, 'Slains Castle', 'A dark castle of rock and roll ', '14-18 Belmont Street', 'AB10 1JH', 'bar', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2164.4383340469103!2d-2.100805!3d57.146663999999994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e3cc93745dd%3A0x6a46e0cb8b86d802!2sSlains+Castle!5e0!3m2!1sen!2suk!4v1429530447396" width="400" height="300" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/slainscastle?fref=ts', 0, ''),
(10, 'The Institute Nightclub', 'Most famous club in aberdeen', '5 Bridge Place', 'AB11 6HZ', 'club', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.5665018165673!2d-2.1017440000000223!3d57.14447300000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e24b7d29043%3A0x1d10fb09f043677d!2sThe+Institute!5e0!3m2!1sen!2suk!4v1429530582820" width="400" height="300" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/InstituteAberdeen?fref=ts', 0, ''),
(11, 'The Triplekirks', 'Popular cheap pub', 'Schoolhill', ' AB10 1JT', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.3800111066403!2d-2.1024310000000415!3d57.147661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e3cc4d26763%3A0x1e68aae005ef69df!2sThe+Triplekirks!5e0!3m2!1sen!2suk!4v1429530679266" width="400" height="300" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/triplekirks?fref=ts', 0, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `place_rate`
--

CREATE TABLE IF NOT EXISTS `place_rate` (
  `place_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`place_id`,`user_id`),
  KEY `fk_Place_rate_User` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `serve`
--

CREATE TABLE IF NOT EXISTS `serve` (
  `place_id` int(11) NOT NULL,
  `drink_id` int(11) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`place_id`,`drink_id`),
  KEY `fk_Serve_Drink` (`drink_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `serve`
--

INSERT INTO `serve` (`place_id`, `drink_id`, `price`) VALUES
(1, 3, 4.5),
(2, 1, 4.5),
(2, 2, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `salt` varchar(3) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `register_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
