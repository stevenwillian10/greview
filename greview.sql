-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2021 pada 16.59
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greview`
--

-- --------------------------------------------------------

--
-- Structure of `game` table
--

CREATE TABLE `game` (
  `id_game` int(11) NOT NULL,
  `nama_game` varchar(80) NOT NULL,
  `genre` varchar(13) NOT NULL,
  `description` text NOT NULL,
  `release_date` varchar(60) NOT NULL,
  `developer` varchar(60) NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dumping for `game` table
--

INSERT INTO `game` (`id_game`, `nama_game`, `genre`, `description`, `release_date`, `developer`, `image`) VALUES
(1, 'Super Mario 3D World', 'RPG', 'Super Mario 3D World for the Nintendo Switch, released on February 12, 2021 as part of the 35th anniversary of Super Mario Bros. It features a standalone story known as Bowser\'s Fury, which takes place in an open-world-styled area called Lake Lapcat and involves Mario and Bowser Jr. cooperating to bring Fury Bowser back to his original state. The Super Mario 3D World game also supports local wireless and online play with up to four players, both of which were absent from the original version.', '12 February 2021', 'Nintendo', 'mario.jpg'),
(2, 'Mario Tennis Aces', 'Sport', 'A new Mario Tennis game is bringing a new level of skill and competition to Nintendo Switch. Mario steps onto the court in classy tennis garb for intense rallies against a variety of characters in full-blown tennis battles. New wrinkles in tennis gameplay will challenge your ability to read an opponent\'s position and stroke to determine which shot will give you the advantage. And this time the game adds the first story mode since the Mario Tennis game on Game Boy Advance, offering a new flavor of tennis gameplay, with a variety of missions, boss battles and more.', '22 June 2018', 'Camelot Software Planning', 'mario_tennis.jpg'),
(3, 'Persona 5 Strikers', 'RPG', 'The sequel to the international smash-hit Persona 5 (3.2 million copies world-wide) is now available as the series\' first action RPG! Featuring an all-new story set up half a year after the events of P5!\r\nTravel Japan!\r\nFollowing the events of P5, the Phantom Thieves of Hearts gather once more during their summer break to solve the mystery behind new change of heart cases that are occurring all over Japan!\r\nPersona 5 is now an action RPG!\r\nThe new action battle system makes hitting enemy weak points to activate a 1 More or All-Out Attack, which fans have come to love, even easier!', '19 February 2021', 'ATLUS', 'persona5.jpg'),
(4, 'Persona 5 Royal', 'RPG', 'Prepare for an all-new RPG experience in Persona 5 Royal based in the universe of the award-winning series, Persona! Don the mask of Joker and join the Phantom Thieves of Hearts. Break free from the chains of modern society and stage grand heists to infiltrate the minds of the corrupt and make them change their ways! Persona 5 Royal is packed with new characters, confidants, story depth, new locations to explore, and a new grappling hook mechanic for stealthy access to new areas. With a new semester at Shujin Academy, get ready to strengthen your abilities in the metaverse and in your daily life. Persona 5 Royal presents a unique visual style and award nominated composer Shoji Meguro returns with an all-new soundtrack. Explore Tokyo, unlock new Personas, customize your own personal Thieves Den, discover a never-before-seen story arc, cutscenes, alternate endings, and more! Even for the most seasoned Phantom Thieves among us, Persona 5 Royal is a new challenge to defy conventions, discover the power within, and fight for justice. Wear the mask. Reveal your truth.', '31 March 2020', 'ATLUS', 'persona5royal.jpg'),
(5, 'Little Nightmares II', 'RPG', 'Little Nightmares II is a suspense-adventure game in which you play as Mono, a young boy trapped in a world that has been distorted by a mysterious transmission from a distant signal tower. With Six, the girl in a yellow raincoat, Mono sets out to discover the dark secrets of The Signal Tower and save Six from her terrible fate; but their journey will not be easy as Mono and Six will face an array of new threats from the terrible residents of this world. Will you dare face this collection of new, little nightmares? PLAY A DARK, THRILLING, SUSPENSE ADVENTURE: A host of brand-new residents lie in wait to haunt your steps and disturb your sleep. Outsmart the sadistic teacher, survive the bloodthirsty hunter and flee from many more terrifying characters, as Mono and Six journey through this world together. DISCOVER A FANTASTICAL WORLD CORRUPTED BY THE SIGNAL TOWER: Escape a world that’s rotten from the inside. Your journey will take you from creepy woodlands to sinister schools on your way to the dreadful Signal Tower. Find the source of the evil that spreads through the TV screens of the world. AWAKEN YOUR INNER CHILD TO SAVE SIX FROM THE DARKNESS: Six is fading from this world, and her only hope is to journey with Mono to find what has afflicted her from the Signal Tower. In this world of unknown terrors, you are her only beacon of hope. Can you gather up the courage to fend off your tormenters, and work with Six to make sense of The Signal Tower?', '11 February 2021', 'Tarsier Studios', 'littlenightmares.jpg'),
(6, 'Monster Hunter Rise', 'RPG', 'Rise to the challenge and join the hunt. The action-RPG series returns to the Nintendo Switch! Set in the ninja-inspired land of Kamura Village, explore lush ecosystems and battle fearsome monsters to become the ultimate hunter. It\'s been half a century since the last calamity struck, but a terrifying new monster has reared its head and threatens to plunge the land into chaos once again.\r\n\r\nHunt solo or in a party with friends to earn rewards that you can use to craft a huge variety of weapons and armor. Brand new gameplay systems such as the high-flying \'Wire Action\' and your canine companion \'Palamute\' will add exciting new layers to the already robust combat that Monster Hunter is known for.', '26 March 2021', 'Capcom', 'monsterhunter.jpg'),
(7, 'The Elder Scrolls V: Skyrim', 'RPG', 'The open-world adventure from Bethesda Game Studios where you can virtually be anyone and do anything, now allows you to go anywhere—at home and on the go. New features include motion controls, gear based on the Legend of Zelda series, and amiibo compatibility. Dragons, long lost to the passages of the Elder Scrolls, have returned and the future of Skyrim hangs in the balance. As Dragonborn, the prophesized hero born with the power of The Voice, you are the only one who can stand against them. Live another life, in another world—from battling ancient dragons, exploring rugged mountains, building a home, or mastering hundreds of weapons, spells and abilities. For the first time ever, go into battle Legend of Zelda style: fight with the Master Sword, guard with the Hylian Shield, while wearing the Champion\'s Tunic. The game also includes official add-ons—Dawnguard, Hearthfire, and Dragonborn. ', '17 November 2017', 'Bethesda Game Studios', 'skyrim.jpg'),
(8, 'Final Fantasy XV', 'RPG', 'FINAL FANTASY XV is a fantasy based on reality. Escaping the flames of war, Noctis, the Crown Prince of the Kingdom of Lucis, embarks on an epic journey with his best friends through a world of larger-than-life beasts, amazing wonders to behold, and dungeons filled with danger in hopes of finding the strength to take back his homeland and end the battle.', '29 November 2016', 'Square Enix', 'ffxv.jpg'),
(9, 'Tekken 7', 'Fighting', 'Love, Revenge, Pride. Each one of us has a reason to fight. Values are what define us and make us human, regardless of our strengths or weaknesses. There are no wrong motives, just the paths we choose to take. Experience the epic conclusion of the Mishima clan and unravel the reasons behind each step of their ceaseless fight. Powered by Unreal Engine 4, Tekken 7 features story-driven cinematic battles and intense duels that can be enjoyed with friends and rivals alike through innovative fight mechanics', '2 June 2017', 'Bandai Namco Games', 'tekken7.jpg'),
(10, 'Granblue Fantasy Versus', 'Fighting', 'Granblue Fantasy has soared into the hearts of millions since its release as a browser game for smartphones in 2014, and will celebrate its sixth birthday in March 2020. Featuring Cygames\' high-quality art, captivating sound design, and an ever-expanding game system, Granblue Fantasy has continued to charm its fans throughout the years.\r\n\r\nNow Cygames has partnered with Arc System Works, known for such popular fighting franchises as GUILTY GEAR and BlazBlue, to bring Granblue Fantasy to the world of fighting games, complete with top-notch game design and one-of-a-kind 3D graphics.', '13 March 2020', 'Cygames, Inc.', 'granblue.jpg'),
(11, 'Street Fighter V', 'Fighting', 'Birdie and Charlie Nash make their return to the Street Fighter universe, where they join classic characters like Ryu, Chun-Li, Cammy, and M. Bison. Many more new and returning characters will be added to the diverse roster, offering a wide variety of fighting styles for players to choose from. New Strategies and Battle Mechanics: Highly accessible new battle mechanics, which revolve around the V-Gauge and EX Gauge, provide a new layer of strategy and depth to the franchise that all players can enjoy. V-Trigger: Unique abilities that use the entire V-Gauge, giving players the opportunity to inflict damage when activated. V-Skill: Utility skills (such as evasion) for each character that can be activated at any time. V-Reversal: Unique counterattacks that use one stock of the V-Gauge. Critical Arts: Ultimate attacks that use the entire EX Gauge. For the first time in franchise history, the online community is unified into a single player pool, allowing for even more rivalries to be born.', '16 February 2016', 'Capcom', 'streetfighter.jpg'),
(12, 'Blazblue Cross Tag Battle', 'Fighting', ' THE COLLISION IS INEVITABLE! THE IMPACT WILL BE UNAVOIDABLE!\r\nAn unrivaled clash of explosive proportions! The beloved BlazBlue franchise Crosses universes, Tags in fan favorites, and Battles it out in BlazBlue: Cross Tag Battle! Created through an all-star collaboration between BlazBlue, Atlus\' Persona, French Bread\'s Under Night In-Birth, and Rooster Teeth\'s hugely popular RWBY web series, Cross Tag Battle celebrates the fighting genre for pros and newcomers alike! Choose your team in fast paced 2v2 team battles filled with the craziness you\'ve come to love from BlazBlue, with all the tight mechanics, smooth gameplay, and gorgeous 2D graphics you expect from Arc System Works.\r\n\r\nBlazBlue, celebrating 10 years of fighting game excellence in 2018, is a series long beloved by the fighting game community for its deep and engrossing story, its vast cast of balanced characters, and its quick and kinetic gameplay style.', '5 June 2018', 'Arc System Works', 'blazblue.jpg'),
(13, 'God Of War', 'RPG', ' His vengeance against the gods of Olympus far behind him, Kratos now lives as a man in the lands of Norse Gods and monsters. It is in this harsh, unforgiving world that he must fight to survive… and teach his son to do the same. As mentor and protector to a son determined to earn his respect, Kratos is faced with an unexpected opportunity to master the rage that has long defined him. Questioning the dark lineage he’s passed on to his son, he hopes to make amends for the shortcomings of his past. Set within the untamed forests, mountains, and realms of Norse lore, God of War features a distinctly new setting with its own pantheon of creatures, monsters, and gods.', '20 April 2018', 'SCE Santa Monica', 'godofwar.jpg'),
(14, 'Overwatch', 'Battle Royale', 'Overwatch is a highly stylized team-based shooter set on earth in the near future. Every match is an intense multiplayer showdown pitting a diverse cast of soldiers, mercenaries, scientists, adventurers, and oddities against each other in an epic, globe-spanning conflict.', '23 May 2016', 'Blizzard Entertainment', 'overwatch.jpg'),
(15, 'Forza Motorsport 7', 'Sport', 'Experience the thrill of motorsport at the limit. Enjoy graphics at 60fps and native 4K resolution in HDR. Collect and race more than 700 cars, including the largest collection of Ferraris, Porsches, and Lamborghinis ever. Challenge yourself across 30 famous destinations and 200 ribbons, where race conditions change every time you return to the track.', '3 October 2017', 'Turn 10', 'forza7.jpg'),
(16, 'The Legend of Zelda: BOTW', 'RPG', 'Forget everything you know about The Legend of Zelda games. Step into a world of discovery, exploration and adventure in The Legend of Zelda: Breath of the Wild, a boundary-breaking new game in the acclaimed series. Travel across fields, through forests and to mountain peaks as you discover what has become of the ruined kingdom of Hyrule in this open-air adventure. Explore the wilds of Hyrule any way you like - Climb up towers and mountain peaks in search of new destinations, then set your own path to get there and plunge into the wilderness. Along the way, you\'ll battle towering enemies, hunt wild beasts and gather ingredients for the food and elixirs you\'ll need to sustain you on your journey. More than 100 Shrines of Trials to discover and explore - Shrines dot the landscape, waiting to be discovered in any order you want. Search for them in various ways, and solve a variety of puzzles inside. Work your way through the traps and devices inside to earn special items and other rewards that will help you on your adventure.', '3 March 2017', 'Nintendo', 'zelda.jpg'),
(17, 'Ring Fit Adventure', 'Sport', 'Traverse grass-swept plains by jogging in place, attack enemies with overhead shoulder presses, and refill your health meter by striking some yoga poses. Two new accessories, the Ring-Con™ and Leg Strap, measure your real-world actions and help turn them into in-game movements. With additional minigames and customizable workout routines, Ring Fit Adventure is great escape for players of all skill levels and schedules. In Adventure mode, defeat enemies with attacks based on real-world exercises as you traverse more than 100 levels in over 20 worlds. As you work through each level (and possibly work up a sweat), you’ll earn experience points. Between fights, you may encounter some unusual methods of transportation such as squat-powered launch pads. Then, pass around the Ring-Con and leg strap accessories and select from a few minigames: break boxes with gusts of air, craft pottery using squats, and more.', '18 October 2019', 'Nintendo', 'ringfit.jpg'),
(18, 'FIFA 21', 'Sport', ' On the street and in the stadium, FIFA 21 has more ways to play than ever before. FIFA 21 rewards you for your creativity and control all over the pitch. Create more scoring opportunities with all-new dynamic attacking systems in the most intelligent FIFA gameplay to date. A new Agile Dribbling system gives you the means to unleash your creativity in 1-on-1 situations. Use fast footwork, more responsive close control, and new skill moves like the ball roll fake to explode past defenders. In FIFA 21, increased positional awareness elevates footballers’ in-game intelligence to put them in the right place at the right time. See world-class forwards hold their runs in line with the last defender, creative playmakers find space to play through balls, and midfielders shut off passing lanes as players better live up to their real-world understanding of space and time on the pitch', '9 October 2020', 'Electronic Arts', 'fifa21.jpg'),
(19, 'PlayerUnknown\'s Battlegrounds', 'Battle Royale', 'PLAYERUNKNOWN\'S BATTLEGROUNDS is a last-man-standing shooter being developed with community feedback. Players must fight to locate weapons and supplies in a massive 8x8 km island to be the lone survivor. This is BATTLE ROYALE', '20 December 2017', 'PUBG Corporation', 'pubg.png'),
(20, 'Apex Legends', 'Battle Royale', 'Conquer with character in Apex Legends, a free-to-play Battle Royale shooter where legendary characters with powerful abilities team up to battle for fame and fortune on the fringes of the Frontier. Master an ever-growing roster of diverse legends, deep tactical squad play, and bold new innovations that level-up the Battle Royale experience—all within a rugged world where anything goes. Welcome to the next evolution of Battle Royale.', '4 February 2019', 'Respawn Entertainment', 'apex.jpg'),
(21, 'Fortnite', 'Battle Royale', 'The Storm came without warning and wiped out 98 percent of the world\'s population in a flash. Poof. Adios. Sayonara. Then came the monsters, wave after wave, night after night. Destroying everything in their path. But it\'s not all doom and gloom. In an abandoned missile silo, we\'ve found one of our first weapons against the Storm you. We\'re looking for a few good commanders like you to help make a difference, push back the storm and protect those among us who are unable to protect themselves. Explore the world. Rescue survivors. Make hundreds of guns, swords, and things that go boom. Make impregnable forts. Tastefully decorate with sniper perches, poison gas traps, and jump pads. Take back the world. You know, the usual. And be sure to invite your friends. Welcome to Fortnite.', '21 July 2017', 'Epic Games', 'fortnite.jpg');

-- --------------------------------------------------------

--
-- Structure of `game_platform`table
--

CREATE TABLE `game_platform` (
  `id_game_platform` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `id_platform` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dumping for `game_platform` table
--

INSERT INTO `game_platform` (`id_game_platform`, `id_game`, `id_platform`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 4),
(4, 3, 2),
(5, 4, 1),
(6, 5, 1),
(7, 5, 2),
(8, 5, 3),
(9, 5, 4),
(10, 6, 2),
(11, 7, 1),
(12, 7, 2),
(13, 7, 3),
(14, 7, 4),
(15, 8, 1),
(16, 8, 4),
(17, 8, 3),
(18, 9, 1),
(19, 9, 4),
(20, 9, 3),
(21, 10, 1),
(22, 10, 4),
(23, 11, 1),
(24, 11, 4),
(25, 12, 1),
(26, 12, 2),
(27, 12, 3),
(28, 12, 4),
(29, 13, 1),
(30, 14, 1),
(31, 14, 2),
(32, 14, 3),
(33, 14, 4),
(34, 15, 1),
(35, 15, 3),
(36, 15, 4),
(37, 16, 2),
(38, 17, 2),
(39, 18, 1),
(40, 18, 2),
(41, 18, 3),
(42, 18, 4),
(43, 19, 1),
(44, 19, 4),
(45, 19, 3),
(46, 20, 1),
(47, 20, 2),
(48, 20, 3),
(49, 20, 4),
(50, 21, 1),
(51, 21, 2),
(52, 21, 3),
(53, 21, 4);

-- --------------------------------------------------------

--
-- Structure of `platform` table
--

CREATE TABLE `platform` (
  `id_platform` int(11) NOT NULL,
  `nama_platform` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dumping for `platform` table
--

INSERT INTO `platform` (`id_platform`, `nama_platform`) VALUES
(1, 'PS4'),
(2, 'Nintendo Switch'),
(3, 'Xbox One'),
(4, 'PC');

-- --------------------------------------------------------

--
-- Structure of `review` table
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `comment` text NOT NULL,
  `rating` tinyint(3) UNSIGNED NOT NULL,
  `comment_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dumping for `review` table
--

INSERT INTO `review` (`id_review`, `id_user`, `id_game`, `comment`, `rating`, `comment_time`) VALUES
(33, 21, 9, 'okelah', 7, '2021-05-17 19:52:43'),
(34, 21, 3, 'Bagus kok, main aja cobain', 7, '2021-05-17 20:11:58'),
(37, 14, 9, 'Kurang suka saya', 2, '2021-05-23 21:03:27'),
(38, 14, 11, 'Okelah...', 5, '2021-05-23 21:03:52'),
(39, 27, 11, 'Bagus saya suka mainnya sampe begadang saya, jangan sering begadang ya temen temen', 10, '2021-05-23 21:05:24'),
(40, 27, 10, 'bad', 1, '2021-05-23 21:05:56');

-- --------------------------------------------------------

--
-- Structure of `user` table
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dumping for `user` table
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(12, 'kevin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(13, 'cuma', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(14, 'aaa', '7e240de74fb1ed08fa08d38063f6a6a91462a815'),
(18, 'Billy', '051522d0c46404d8ba5b692a10a37b99b8186360'),
(21, 'UVVUEVEVE', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37'),
(27, 'dawam', 'fd888d71809873a504e1faadd4322a87d3b59e8a');

--
-- Indexes for dumped tables
--

--
-- Index for `game` table
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id_game`);

--
-- Index for `game_platform` table
--
ALTER TABLE `game_platform`
  ADD PRIMARY KEY (`id_game_platform`),
  ADD KEY `id_game` (`id_game`),
  ADD KEY `id_platform` (`id_platform`);

--
-- Index for `platform` table
--
ALTER TABLE `platform`
  ADD PRIMARY KEY (`id_platform`);

--
-- Index for `review` table
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_review` (`id_review`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_game` (`id_game`);

--
-- Index for `user` table
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk deleted table
--

--
-- AUTO_INCREMENT for `game` table
--
ALTER TABLE `game`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for `game_platform` table
--
ALTER TABLE `game_platform`
  MODIFY `id_game_platform` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for `platform` table
--
ALTER TABLE `platform`
  MODIFY `id_platform` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for `review` table
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for `user` table
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraint for dumped tables
--

--
-- Constrants for `game_platform` table
--
ALTER TABLE `game_platform`
  ADD CONSTRAINT `fk_game_platform_id` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_platform_id` FOREIGN KEY (`id_platform`) REFERENCES `platform` (`id_platform`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for `review` table
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_game_id` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
