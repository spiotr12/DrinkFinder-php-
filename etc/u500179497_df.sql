
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 01 Maj 2015, 13:57
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
(2, 'Jagerbomb', 'cocktail', 'The Jägerbomb /ˈjeɪɡərbɒm/ is a bomb shot mixed drink that was originally mixed by dropping a shot of Jägermeister into a glass of beer but in recent years has become more popular with Red Bull or other energy drinks. In German-speaking countries, it is called a "Turbojäger" or a "Fliegender Hirsch"/"Flying Hirsch" (Flying Stag)—where "Fliegender" is derived from the slogan "Red Bull verleiht Flügel" (Red Bull gives you wings) and "Stag" originates in the Jägermeister logo. A long drink mixed with Jägermeister and Red Bull is called "JägerBull". In Finland, it is called an "Akkuhappo" (Battery Acid)[3] while in Greece it is called "Υποβρύχιο" (Submarine).', '35.0', 0),
(3, 'Miller Genuine Draft', 'beer', 'The Miller Brewing Company is an American beer brewing company owned by SABMiller. Its regional headquarters is located in Milwaukee, Wisconsin and the company has brewing facilities in Albany, Georgia; Chippewa Falls, Wisconsin; Eden, North Carolina; Fort Worth, Texas; Irwindale, California; Milwaukee, Wisconsin; and Trenton, Ohio. On 1 July 2008 the MillerCoors company was formed as a joint venture with rival Molson Coors to consolidate the production and distribution of its products in the United States, with each parent company''s corporate operations and international operations remaining separate and independent of the joint venture.', '5.0', 0),
(4, 'Smirnoff', 'spirit', 'Smirnoff is a brand of vodka owned and produced by the British company Diageo. The Smirnoff brand began with a vodka distillery founded in Moscow by Pyotr Arsenievich Smirnov (1831–1898). It is now distributed in 130 countries. It is produced in several countries including India,[2] Ireland, Italy, the United Kingdom and the United States.[3] Smirnoff products include vodka, flavoured vodka, and malt beverages. In March 2006, Diageo North America claimed that Smirnoff vodka was the best-selling distilled spirit brand in the world', '37.5', 0),
(5, 'Red Square Vodka', 'spirit', 'Vodka (Polish: wódka [ˈvutka], Russian: водка [ˈvotkə]) is a distilled beverage composed primarily of water and ethanol, sometimes with traces of impurities and flavorings. Traditionally, vodka is made by the distillation of fermented cereal grains or potatoes, though some modern brands use other substances, such as fruits or sugar.\n\nSince the 1890s, the standard Polish, Russian, Ukrainian, Estonian, Latvian, Lithuanian and Czech vodkas are 40% alcohol by volume ABV (80 proof), a percentage that is widely misattributed to Dmitri Mendeleev. The European Union has established a minimum of 37.5% ABV for any "European vodka" to be named as such. Products sold as "vodka" in the United States must have a minimum alcohol content of 40%. Even with these loose restrictions, most vodka sold contains 40% ABV. For homemade vodkas and distilled beverages referred to as "moonshine", see moonshine by country.\n\nVodka is traditionally drunk neat (not mixed with any water, ice, or other mixer), though it is often served chilled in the vodka belt countries of Eastern Europe and around the Baltic Sea. It is also commonly used in cocktails and mixed drinks, such as the vodka martini, Cosmopolitan, vodka tonic, Screwdriver, Greyhound, Black or White Russian, Bloody Mary, and Sex on the Beach.', '37.5', 0),
(6, 'Captain Morgans', 'spirit', 'Captain Morgan is a brand of rum produced by alcohol conglomerate Diageo. It is named after the 17th-century Welsh privateer of the Caribbean, Sir Henry Morgan who died on 26 August 1688. Since 2011, the label has used the slogan "To Life, Love and Loot."', '35.0', 0),
(7, 'Havana Club', 'spirit', 'Havana Club is a brand of rum created in Cuba in 1934, and now one of the best-selling rum brands in the world. Originally produced in Cardenas, Cuba by family-owned Jose Arechabala S.A., the brand was nationalized after the Cuban Revolution of 1959. Since 1994 it has been produced in Cuba and sold globally (except the United States) by Havana Club International, a 50:50 joint venture between Pernod Ricard and the Cuban government. Bacardi also produces a competing product with the same name in Puerto Rico, sold only in the United States. The two companies have engaged in ongoing litigation about ownership of the brand.', '37.5', 0),
(8, 'VK', 'cocktail', 'VK is an award winning range of ready to drink beverages and the only brand to revolutionise the RTD category with seven innovative, premium flavours: VK Blue, VK Ice Storm (infused with glitter), VK Strawberry and Lime, VK Orange and Passion Fruit, VK Black Cherry, VK Tropical Fruits and VK Apple and Mango, all of which are mixed to 4% ABV.\n\nVK is now the number one student and best performing RTD*, and 2014’s Ultimate VKend campaign is putting VK on the lips of all 18-24 year olds. VK tastes great on its own or mixed up into shared serves such as VK fishbowls. VK contains real fruit juice and no artificial sweeteners.\n\nAvailable in 275ml and 70cl bottles, plus 275ml Mixed Packs. VK Black Cherry, Strawberry and Lime and Blue are also available in 500ml bottles.', '4', 0),
(9, 'Tennents', 'lager', 'Tennent''s Lager is Scotland''s best-selling pale lager, with approximately 60% of the Scottish lager market.[7] The lager was first brewed in 1885 by Hugh Tennent, and in 1893 it won the highest award at the Chicago World''s Fair. It is described as a distinctive, well-balanced lager whose sweet, malty flavours combine with a tangy hoppiness to create its crisp, refreshing character.[8] Tennent''s Lager is certified by the Vegetarian Society as being suitable for vegetarians.[9]\r\n\r\nThe lager was once famous for the design of its cans, which featured photos of various female models printed onto the side - known affectionately as "The Lager Lovelies". This feature was used by Tennent''s up until the final campaign in 1989. Today, authentic original Lager Lovely cans are highly sought after among collectors. The can design is now a plain silver colour, with the company''s trademark large red "T" featuring prominently.\r\n\r\nThe brand''s super strength lager, Tennent''s Super (9% ABV), is no longer produced by Wellpark and is produced in Luton by Inbev, who kept the brand after the sale of Wellpark to C&C.', '4', 0),
(10, 'Stella Artois', 'beer', 'Stella Artois /ˈstɛlə ɑrˈtwɑː/, informally called Stella, is a pilsner beer of between 4.8 and 5.2% ABV. It has been brewed in Leuven, Belgium, since 1926, although it is brewed in other locations as well. A lower alcohol content (4% ABV) version is also sold in the UK, Republic of Ireland, Canada and New Zealand.[1] Stella Artois is one of the prominent brands of Anheuser-Busch InBev, the world''s largest brewer.', '5', 0),
(11, 'Peroni', 'lager', 'Peroni Brewery is a brewing company, founded in Vigevano in Lombardy, Italy in 1846. It has been based in Rome since 1864 and is now owned by the parent company SABMiller brewing group. The company''s main brand in Italy is Peroni (4.7% ABV) a pale lager sometimes known as Peroni Red in export markets. However, it is probably best known worldwide for its premium lager, Nastro Azzurro (5.1% ABV), which was the 13th best-selling beer in the United Kingdom in 2010.', '5.1', 0),
(12, 'San Miguel', 'lager', 'It is a pilsner style lager, golden in colour, sparkling with a generous white creamy head. The taste is full bodied with a refreshing balance of bitterness from the hops and sweetness from the malt. Its rich, intense and refreshing flavour makes it ideal to enjoy with friends.', '4.8', 0),
(13, 'Amstel', 'lager', 'The Amstel Brouwerij,\nproducing the beer of the same name, was founded in Amsterdam in 1870. It was one of a handful of breweries producing the increasingly popular Bavarian-style ‘lager’ beer. In 1968 HEINEKEN acquired Amstel.', '4.1', 0),
(14, 'Foster', 'lager', 'Foster''s Lager is an internationally distributed Australian brand of lager.', '4.0', 0),
(15, 'Carling', 'lager', 'Carling brewery was founded in Canada in 1818. In the 1950s Carling lager was first sold in the United Kingdom; in the early 1980s it became the UK''s most popular beer brand (by volume sold). The company changed hands numerous times; it was acquired by Canadian Breweries Limited, which was eventually renamed Carling O''Keefe, which merged with Molson, which then merged with Coors to form Molson Coors Brewing Company. In South Africa the Carling brands are distributed by SABMiller.', '4.0', 0),
(16, 'Kronenbourg 1664', 'lager', 'Kronenbourg Brewery (Brasseries Kronenbourg) is a brewery founded in 1664 by Geronimus Hatt in Strasbourg (at the time a Free Imperial City of the Holy Roman Empire; now France) as the Hatt Brewery. The name comes from the area (Cronenbourg) where the brewery relocated in 1850. The company is owned by the Heineken Group. The main brand is Kronenbourg 1664, a 5.0% abv pale lager.', '5.0', 0),
(17, 'Tuborg', 'lager', 'Tuborg (pronounced [tˢub̥ɒːˀ]) is a Danish brewing company founded in 1873 by Carl Frederik Tietgen. Since 1970 it has been part of the Carlsberg Group. The brewery was founded in Hellerup (Gentofte Municipality), a part of northern Copenhagen.', '4.6', 0),
(18, 'London Pride', 'ale', 'London Pride is the flagship beer of Fuller''s Brewery. It is the UK''s best-selling cask-conditioned ale, and is also sold worldwide in bottled form.\n\nLondon Pride has been brewed right beside the River Thames at Fuller''s Griffin Brewery since the 1950s, and is considered by many to be an intrinsic part of London life.', '4.1', 0),
(19, 'John Smith''s', 'ale', 'John Smith''s Brewery was an English brewing company based in Tadcaster, North Yorkshire. The brewery site is still used to manufacture beer, and John Smith''s has been the highest selling ale brand in the United Kingdom since the mid-1990s.', '3.6', 0),
(20, 'Guiness', 'ale', 'Guinness (/ˈɡɪnɨs/ GIN-is) (known as ''The best import from Ireland'' in America), is an Irish dry stout that originated in the brewery of Arthur Guinness (1725–1803) at St. James''s Gate, Dublin. Guinness is one of the most successful beer brands worldwide. It is brewed in almost 60 countries and is available in over 120. Annual sales total 850 million litres (1.5 billion Imperial or 1.8 billion US pints)', '4.1', 0),
(21, 'Abbot Ale', 'ale', 'Abbot Ale and Abbot Reserve contain malted barley. Neither of these beers contain wheat in the recipe however some beers brewed in the same brewery have a proportion of wheat between 5 and 12% of the recipe.', '5.0', 0),
(22, 'Bombay Sapphire', 'spirit', 'Bombay Sapphire is a brand of gin owned by Bacardi that was first launched in 1987 by IDV. In 1997 Diageo sold the brand to Bacardi. Its name originates from gin''s popularity in India during the British Raj and the sapphire in question is the Star of Bombay on display at the Smithsonian Institution. Bombay Sapphire is marketed in a flat-sided, sapphire-coloured bottle that bears a picture of Queen Victoria on the label.', '40.0', 0),
(23, 'Tanqueray', 'spirit', 'Tanqueray is a brand of gin produced by Diageo plc and marketed worldwide. Although it originated in England, it is now produced in Scotland. It does not command a sizable market share in its native market, its largest market being North America, where it is the highest selling gin import, followed by southern Europe.', '43.1', 0),
(24, 'Gordon''s Gin', 'spirit', 'Gordon''s is a brand of London dry gin first produced in 1769. The top markets for Gordon''s are (in descending order) the United Kingdom, the United States and Greece. It is owned by the British spirits company Diageo and is made in Scotland (although flavourings may be added elsewhere). It is the world''s best selling London Dry gin. Gordon''s has been the UK''s number one gin since the late 19th century.', '37.5', 0),
(25, 'Absolut', 'spirit', 'Absolut Vodka is a brand of vodka, produced near Åhus, in southern Sweden. Absolut is owned by French group Pernod Ricard; they bought Absolut for €5.63 billion in 2008 from the Swedish state.\n\nAbsolut is the third largest brand of alcoholic spirits in the world after Bacardi and Smirnoff, and is sold in 126 countries.', '40.0', 0),
(26, 'Skyy vodka', 'spirit', 'SKYY vodka is produced by the Campari America division of Campari Group of Milan, Italy, formerly SKYY Spirits LLC.[1] SKYY Vodka is 40% ABV or 80 proof; SKYY 90 Vodka is a 90 proof high-priced brand aimed at martini drinkers, as well as flavored SKYY being 70 proof. Its creator, Maurice Kanbar, claims the vodka is nearly congener-free due to its distillation process. The bottle is a cobalt blue with a plastic label. In 2008, SKYY expanded the SKYY Vodka line with five new flavors, referred to as SKYY Infusions.', '40.0', 0),
(27, 'Kraken Spiced', 'spirit', 'Kraken Rum was introduced in 2010.[3] The base rum used in the spirit is from Trinidad and Tobago, distilled from naturally sweet molasses made from locally-grown sugar cane. The rum is aged 1–2 years and then blended with a mix of 11 spices, including cinnamon, ginger and clove. The liquid is black, revealing hints of brown when held up to the light', '40', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `drink_rate`
--

CREATE TABLE IF NOT EXISTS `drink_rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `drink_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `drink_id` (`drink_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Zrzut danych tabeli `drink_rate`
--

INSERT INTO `drink_rate` (`id`, `drink_id`, `rate`, `date`) VALUES
(1, 2, 3, '2015-04-30 00:00:00'),
(2, 4, 5, '2015-05-01 00:00:00'),
(3, 4, 5, '2015-05-01 00:00:00'),
(4, 4, 5, '2015-05-01 00:00:00'),
(5, 12, 5, '2015-05-01 00:00:00'),
(6, 12, 5, '2015-05-01 00:00:00'),
(7, 12, 5, '2015-05-01 00:00:00'),
(8, 2, 0, '2015-05-01 00:00:00'),
(9, 2, 1, '2015-05-01 00:00:00'),
(10, 2, 1, '2015-05-01 00:00:00'),
(11, 2, 1, '2015-05-01 00:00:00'),
(12, 2, 1, '2015-05-01 00:00:00'),
(13, 2, 1, '2015-05-01 00:00:00'),
(14, 5, 3, '2015-05-01 00:00:00'),
(15, 5, 2, '2015-05-01 00:00:00');

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
(2, 'The Garage', 'At The Garage Aberdeen, we can cater to private parties, student & corporate events of many shapes and sizes across our main hall and G2.\n\nWe also provide meeting space facilities for clubs and society events, classes and fundraisers etc.\n\nHere''s a little taster of what we can provide for your function:\n<br><br>\nFinger Food Buffets <br>\nPrivate Bar <br>\nSecurity Staff <br>\nVenue Dressing <br>\nEquipment Hire <br>\nSound & Light Engineers', '17 Windmill Brae', 'AB11 6HU', 'club', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.5454429754195!2d-2.1027300000000024!3d57.14483300000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e24bb9d3ea3%3A0xe9d2e23bfa64fcff!2sThe+Garage+%2F+Campus+Aberdeen!5e0!3m2!1sen!2suk!4v1429528860632" width="400" height="300" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/GarageABZ?fref=ts', 0, ''),
(3, 'Prohibition', 'Located in Aberdeen''s busy city centre, Prohibition is the premier late night bar of the north east.\n\nWith an incredible range of drinks promotions Monday ''till Sunday, and an electric atmosphere every night, we''re the bar you need to make a stop at.', '31 Langstane Place', 'AB11 6EN', 'club', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.615989756896!2d-2.106413999999964!3d57.143627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e24314ef20f%3A0xe4e667dcdfcb220b!2sProhibition!5e0!3m2!1sen!2suk!4v1429529014535" width="400" height="300" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/ProhibitionAberdeen?fref=ts', 0, ''),
(4, 'Balaclava', 'Bar close to Bon Accord', '31 Loch Stree', 'AB25 1DD', 'bar', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.276525761104!2d-2.101001999999989!3d57.14942999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e3d63f6d5d3%3A0x5ae8fcb4f52d4411!2sBalaclava+Bar!5e0!3m2!1sen!2suk!4v1429528916135" width="600" height="450" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/pages/Balaclava-Bar/168505586512430?ref=ts&fref=ts', 0, ''),
(5, 'The Underground Klub', 'Popular club ', '18 Bridge Street', 'AB11 6JL', 'club', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d69255.96664306035!2d-2.1260368499999767!3d57.14990124999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x68c3a489dbe88bca!2sKorova!5e0!3m2!1sen!2suk!4v1429529552284" width="400" height="300" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/theundergroundklubabz?ref=ts&fref=ts', 0, ''),
(6, 'Cheerz Nightclub', 'Born on the 4th of August 1996, Cheerz is situated on Exchange/Hadden Street, close to the main rail and bus station. It''s now been 4 and a half years since Steven Motion and Garry Lindsay took over ownership of Cheerz Bar & Club, Aberdeen''s oldest and most established LGBT venue. Since then the venue has improved every day as more and more effort is put into ensuring the best possible night out. ', '11 Haden Street', 'AB11 6PH', 'club', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.4756557049327!2d-2.0975559999999764!3d57.14602599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e3c7e575d93%3A0xeeb1884acc9b5b7f!2sCheerz+Nightclub!5e0!3m2!1sen!2suk!4v1429529927409" width="400" height="300" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/cheerz.nightclub?fref=ts', 0, ''),
(7, 'Paramount Bar', 'Located in the heart of the city centre, Paramount Bar is one of Aberdeen’s most highly acclaimed venues and we strive to maintain our reputation through quality drinks, impeccable service and a fun, vibrant atmosphere second to none. \n\nWhether you want to unwind at the end of a busy week, entertain clients, motivate employees or celebrate the deal…\nBe bold and choose Paramount!', '25 Bon-Accord Street', 'AB11 6EA', 'bar', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.616984190576!2d-2.1056639999999756!3d57.14361000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e245aaafae3%3A0xd72ce0fd8f6a7020!2sParamount+Bar!5e0!3m2!1sen!2suk!4v1429530051586" width="400" height="300" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/pages/Paramount-Bar/166526396733590?fref=ts', 0, ''),
(8, 'The Bobbin', 'The Bobbin, Aberdeen, is situated on Kings street opposite Aberdeen University. As we are literally on the student-ville door-step, The Bobbin is just a hop skip and a jump for students to come visit us and our great promos through the year. We have Live sport, pub quizes and open mic nights to enjoy as well as two meals for £7.50, 2-4-1 desserts and a beer and a burger from £5.95 all year round :) Not a student? The Bobbin is a great place to book an event or reserve tables to suit you. We are happy to deal with all enquirys and bookings to suit your special event.', '500 King Street', 'AB24 5ST', 'bar', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2163.509593531493!2d-2.096266!3d57.162539!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e11e3e5ee59%3A0x300bff203c3e9c60!2sBobbin!5e0!3m2!1sen!2suk!4v1429530329745" width="400" height="300" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/Bobbin.Aberdeen?fref=ts', 0, ''),
(9, 'Slains Castle', 'Slains Castle is a little different to your average pub. Drawing inspiration from Bram Stoker''s Dracula and set in an old church, the pub is a Gothic wonder in the heart of Aberdeen. Try the delicious food of be tempted by one of the Seven Deadly Sin''s Cocktails.', '14-18 Belmont Street', 'AB10 1JH', 'bar', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2164.4383340469103!2d-2.100805!3d57.146663999999994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e3cc93745dd%3A0x6a46e0cb8b86d802!2sSlains+Castle!5e0!3m2!1sen!2suk!4v1429530447396" width="400" height="300" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/slainscastle?fref=ts', 0, ''),
(10, 'The Institute Nightclub', 'Aberdeen''s biggest nightclub. There are legendary nights throughout term time including Skite Wednesdays and Vanity Fridays that are a massive favourite with students, though there is something for everyone at The Institute with competitive drinks prices and amazing DJ sets. Institute should always be your number 1 choice for a night out in Aberdeen. You won''t be disappointed!  ', '5 Bridge Place', 'AB11 6HZ', 'club', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.5665018165673!2d-2.1017440000000223!3d57.14447300000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e24b7d29043%3A0x1d10fb09f043677d!2sThe+Institute!5e0!3m2!1sen!2suk!4v1429530582820" width="400" height="300" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/InstituteAberdeen?fref=ts', 0, ''),
(11, 'The Triplekirks', 'Aberdeen''s TKs is one of the best-loved venues in the city, featuring just about everything you could possibly want or need from a pub under one roof. It''s actually a struggle to know where to begin! It''s the perfect place to eat, drink, meet friends, be entertained and get the best quality at the best prices.\n-The best sporting action from Sky and BT Sport on our top quality HD screens.\n-A huge range of beers (including three real ales and five craft beer lines), spirits, ciders, wines, cocktails...put it this way, you want top quality drinks at reasonable prices, we got ''em!\n-A kitchen serving great food, check out our menu on this site for details.', 'Schoolhill', ' AB10 1JT', 'bar', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.3800111066403!2d-2.1024310000000415!3d57.147661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e3cc4d26763%3A0x1e68aae005ef69df!2sThe+Triplekirks!5e0!3m2!1sen!2suk!4v1429530679266" width="400" height="300" frameborder="0" style="border:0"></iframe>', 'https://www.facebook.com/triplekirks?fref=ts', 0, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `place_rate`
--

CREATE TABLE IF NOT EXISTS `place_rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `place_id` int(11) NOT NULL,
  `userName` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rate` int(11) NOT NULL,
  `review` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `place_id` (`place_id`),
  KEY `place_id_2` (`place_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Zrzut danych tabeli `place_rate`
--

INSERT INTO `place_rate` (`id`, `place_id`, `userName`, `rate`, `review`, `date`) VALUES
(3, 1, 'blah', 6, 'user', '2015-04-30 00:00:00'),
(4, 2, 'blah', 5, 'colt', '2015-04-30 00:00:00'),
(5, 2, 'hitler', 4, 'it was ok', '2015-04-30 00:00:00'),
(6, 2, 'lol', 6, 'good', '2015-04-30 00:00:00'),
(7, 2, 'lol', 6, 'good', '2015-04-30 00:00:00');

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
(2, 2, 4),
(1, 21, 4.2),
(1, 13, 3.6),
(1, 6, 2.8),
(1, 15, 3.6),
(1, 14, 3.6),
(1, 24, 3.2),
(1, 20, 3.8),
(1, 1, 4),
(1, 19, 3.9),
(1, 27, 2.9),
(1, 16, 3.9),
(1, 18, 4.1),
(1, 11, 4.6),
(1, 12, 4.1),
(1, 4, 2.3),
(1, 10, 3.7),
(1, 9, 2.2),
(2, 25, 1.8),
(2, 22, 3.6),
(2, 6, 1),
(2, 24, 3.6),
(2, 7, 3.6),
(2, 27, 3.4),
(2, 5, 1),
(2, 26, 1.3),
(2, 4, 1),
(2, 23, 3.6),
(2, 17, 1.8),
(2, 8, 1.3),
(3, 25, 1.9),
(3, 22, 3.2),
(3, 6, 1.6),
(3, 24, 3.6),
(3, 7, 3.6),
(3, 14, 3.2),
(3, 2, 1.8),
(3, 27, 2.8),
(3, 3, 2.5),
(3, 5, 1.6),
(3, 12, 3.1),
(3, 26, 2.2),
(3, 4, 1.5),
(3, 17, 1.9),
(3, 8, 1.6),
(4, 21, 3.2),
(4, 13, 3.4),
(4, 22, 3.3),
(4, 6, 2.5),
(4, 15, 1.9),
(4, 14, 2.3),
(4, 20, 3.4),
(4, 1, 2.9),
(4, 19, 3.1),
(4, 27, 2.9),
(4, 16, 2.6),
(4, 18, 3.1),
(4, 3, 1.6),
(4, 11, 3.6),
(4, 12, 2.9),
(4, 10, 2.4),
(4, 9, 2.1),
(4, 17, 2.3),
(5, 2, 0.69),
(5, 4, 1),
(5, 5, 1),
(5, 6, 1),
(5, 8, 1.4),
(5, 22, 2.8),
(5, 23, 2.8),
(5, 24, 2.8),
(5, 25, 1.4),
(5, 26, 1.5),
(6, 1, 2.2),
(6, 2, 1),
(6, 3, 1.6),
(6, 4, 1),
(6, 5, 1),
(6, 6, 1.2),
(6, 7, 2.8),
(6, 8, 1.9),
(6, 17, 1.9),
(6, 22, 2.3),
(6, 25, 1.2),
(6, 26, 1.4),
(7, 2, 1.6),
(7, 3, 1.6),
(7, 4, 0.79),
(7, 5, 0.69),
(7, 6, 1.2),
(7, 8, 1.5),
(7, 14, 2.2),
(7, 17, 2.2),
(7, 22, 2.4),
(7, 25, 1.2),
(7, 26, 1.4),
(8, 1, 3.6),
(8, 2, 1.9),
(8, 3, 2.2),
(8, 4, 1.9),
(8, 5, 1.9),
(8, 6, 2.1),
(8, 7, 2.8),
(8, 9, 2.4),
(8, 10, 2.8),
(8, 11, 3.4),
(8, 12, 3.2),
(8, 13, 2.9),
(8, 14, 2.6),
(8, 15, 2.4),
(8, 16, 2.6),
(8, 17, 2.3),
(8, 18, 2.9),
(8, 19, 3),
(8, 20, 3.6),
(8, 21, 3.1),
(8, 22, 2.6),
(8, 26, 1.8),
(8, 27, 1.8),
(9, 1, 4),
(9, 3, 2.1),
(9, 4, 2.2),
(9, 6, 2.2),
(9, 7, 2.6),
(9, 9, 2.2),
(9, 10, 3.1),
(9, 11, 4.1),
(9, 12, 3.4),
(9, 13, 3.1),
(9, 14, 2.6),
(9, 15, 3.1),
(9, 16, 2.8),
(9, 17, 2.1),
(9, 20, 4),
(9, 21, 3.9),
(9, 22, 3.1),
(9, 23, 2.9),
(9, 24, 2.8),
(9, 27, 2.8),
(10, 2, 2.4),
(10, 5, 1.2),
(10, 6, 2.3),
(10, 8, 1.3),
(10, 17, 1.6),
(10, 22, 2.3),
(10, 24, 1.9),
(10, 25, 1.5),
(10, 26, 1.6),
(11, 16, 2.6),
(11, 15, 2.4),
(11, 19, 3),
(11, 20, 3.6),
(11, 21, 3.1),
(11, 3, 2.2),
(11, 22, 2.6),
(11, 26, 1.8),
(11, 27, 1.8),
(11, 14, 2.6),
(11, 13, 2.9),
(11, 12, 3.2),
(11, 1, 3.6),
(11, 2, 1.9),
(11, 4, 1.9),
(11, 5, 1.9),
(11, 6, 2.1),
(11, 7, 2.8),
(11, 9, 2.4),
(11, 10, 2.8),
(11, 11, 3.4);

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
