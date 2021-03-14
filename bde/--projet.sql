-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 13, 2021 at 03:44 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `projetBackend`
--

-- --------------------------------------------------------

--
-- Table structure for table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass_md5` text,
  `last_name` varchar(20) DEFAULT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `phone_number` text,
  `departement` set('0','Paris','Lune') DEFAULT NULL,
  `civilite` set('homme','femme','autres') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membre`
--

INSERT INTO `membre` (`id`, `email`, `pass_md5`, `last_name`, `nom`, `phone_number`, `departement`, `civilite`) VALUES
(1, 'Ivazansery@0essefeil.com', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'Ivan', 'dupond', '0619424908', 'Paris', NULL),
(2, 'Ivazanszery@0essefeil.com', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'Ivan', 'dupond', '0619424908', 'Paris', NULL),
(3, 'Ivazxanszery@0essefeil.com', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'Ivan', 'dupond', '0619424908', 'Paris', NULL),
(4, 'Ivansery0@gmail.com', 'aaa', 'Sery', 'sery', '0619424908', 'Paris', NULL),
(5, 'Ivzansery0@gmail.com', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'Cagna ', 'Camille', '1113113111', 'Paris', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `img` text,
  `description` text NOT NULL,
  `condition_produit` text NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` decimal(5,0) NOT NULL,
  `categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_produit`, `nom_produit`, `img`, `description`, `condition_produit`, `quantite`, `prix`, `categorie`) VALUES
(1, 'Fleur CBD Gelato', 'https://lelabshop.fr/wp-content/uploads/2020/04/Purple-Haze-1-1-600x410.jpg', 'La fleur CBD Gelato est appropriée pour un usage relaxant. Elle diminue votre stress, améliore le sommeil si vous avez des insomnies et calme vos douleurs.\r\n\r\nPour utiliser correctement la fleur de CBD Gelato, il est recommandé d’utiliser un moulin à herbe (grinder).\r\n\r\nLa fleur de CBD Gelato peut être utilisée en infusion. Plonger l’infusion dans l’eau chaude puis rajouter un corps gras comme du lait pour une meilleure adhérence du Cannabidiol.', 'Avoir plus de 18 ans.', 20, '17', 1),
(3, 'Fleur CBD Baby Trump', 'https://lelabshop.fr/wp-content/uploads/2019/04/Jr-Power-Logo-1-600x400.jpg', 'Le Lab est fier de vous faire découvrir sa fleur démoniaque : la Baby Trump !\r\n\r\nAttention : Aussi bonne que la US Trump mais disponible uniquement en Baby Bud’ !\r\n\r\nTout droit venue de Californie, la Baby Trump va vous rendre américainement dingue grâce à une relaxation que peu de Cannabis CBD ont la prétention d’atteindre. Cette plante de CBD est spécifique par son origine, mais également grâce aux nombreuses recherches réalisées pour obtenir une forte teneur en cannabidiol. Vous serez à la fois relaxé, tout étant d’humeur joviale. La fleur de CBD Baby Trump est très polyvalente, elle est utilisée autant pour gérer des coups de stress que pour vous aider à vous endormir.\r\n\r\nVous pouvez acheter les fleurs de CBD Baby Trump jusqu’à 24g suivant vos besoins de consommation.', 'Avoir plus de 18 ans.', 20, '13', 1),
(4, 'Fleur CBD Super Lemon Haze', 'https://lelabshop.fr/wp-content/uploads/2018/07/Mango-Kush-Logo-600x400.jpg', 'Découvrez la Super Lemon Haze, une merveille multicolore rigoureusement sélectionnée par le Lab Shop. La fleur de CBD Super Lemon Haze ne vous laissera pas indifférent. Les effets sont particulièrement énergétiques et vifs, si vous ressentez de la fatigue et une baisse d’énergie. Son taux de CBD est dans la moyenne avec un THC inférieur à 0,2 %, respectant les lois en vigueur en France.\r\n\r\nLes fleurs de CBD Super Lemon Haze sont envoyées sous pli discret et inodore jusqu’à 12 g suivant vos besoins de consommation', 'Avoir plus de 18 ans.', 12, '27', 1),
(5, 'Fleur CBD Cannatonic', 'https://lelabshop.fr/wp-content/uploads/2020/04/fleur-cbd-Amnesia-Haze-Macro-600x400.jpg', 'Le meilleur de la CBD en toute légalité\r\nDans la boutique du Lab Shop, chaque fleur de cannabidiol distribuée est 100 % légale et contrôlée pour respecter le taux de THC strictement inférieur à 0,2 % comme l’exige la loi. En dessous de ce taux, la plante n’a pas de propriété stupéfiante et n’est donc pas condamnable.', 'Avoir plus de 18 ans.', 23, '27', 1),
(6, 'Fleur CBD New York Diesel', 'https://lelabshop.fr/wp-content/uploads/2018/09/Orange-Bud1-Logo-600x400.jpg', 'Découvrez la CBD de collection New York Diesel !\r\nLa New York Diesel est très appréciée pour son goût et son taux de CBD qui donne de la puissance en bouche. Cette fleur de CBD est une légende avec des origines qui remontent au début des années 80. Les effets de la New York Diesel permettent de combattre la dépression et les douleurs chroniques comme les maux de dos et l’anxiété.\r\n\r\nTravaillée et cultivée en Suisse, la fleur de CBD New York Diesel dispose d’un taux de THC inférieur à 0,2 % pour respecter les lois en vigueur en France.\r\n\r\nLes fleurs de CBD sont envoyées sous pli discret et inodore jusqu’à 12 g suivant vos besoins de consommation.\r\n', 'Avoir plus de 18ans. \r\nEtre membre.', 34, '81', 1),
(7, 'Fleur CBD OG Kush', 'https://lelabshop.fr/wp-content/uploads/2018/07/Fleur-cbd-OG-Kush.jpg', 'Il n’est plus nécessaire de vous présenter la fleur de CBD OG Kush ! Son patrimoine reste inconnu et discutable, mais elle est tout particulièrement appréciée en Californie du sud et dans les pays Européens ouverts au CBD. Son taux de CBD est assez élevé pour une OG Kush pour procurer un effet relaxant rapide. Que vous soyez débutant ou un consommateur régulier, les saveurs complexes de l’OG Kush vous transporteront pour diminuer votre stress et apaiser votre sommeil.\r\n\r\nTravaillée et cultivée en Suisse, la fleur d’OG Kush dispose d’un taux de THC inférieur à 0,2 % pour respecter les lois en vigueur en France.\r\n\r\nLes fleurs de CBD sont envoyées sous pli discret et inodore jusqu’à 12 g suivant vos besoins de consommation', 'Avoir plus de 18 ans. \r\nAvoir une carte membre.', 23, '60', 1),
(8, 'Fleur CBD Gorilla Glue\r\n', 'https://lelabshop.fr/wp-content/uploads/2018/07/Purple-Haze-1-Logo-1-600x400.jpg', '', 'Avoir plus de 18 ans.', 4, '58', 1),
(9, 'Fleur CBD Moon Rock 70%\r\n', 'https://lelabshop.fr/wp-content/uploads/2019/05/moonrock-600x588.jpg', 'Issue de notre CBD de collection, la fameuse Moon Rock doit son nom et sa popularité grâce à son savant mélange et sa haute teneur en CBD, l’une des plus fortes de notre boutique en CBD. Il suffit de la goûter pour l’adopter !\r\n\r\nLa recette de la Moon Rock en fait un produit d’exception : fabriqué à partir de 50 % de Wax elle est ensuite plongée dans du pollen de CBD. Le résultat est visuellement unique, comme son nom l’indique, la fleur a des têtes lisses aux teintes vertes comme des pierres de lune.\r\n\r\nVous pouvez acheter les fleurs de CBD Moon Rock jusqu’à 12 g suivant vos besoins de consommation.', 'Avoir plus de 18 ans.', 23, '25', 1),
(10, 'Huile 40% CBD Full Spectrum – 10ml', 'https://lelabshop.fr/wp-content/uploads/2019/08/huile-cbd-full-spectrum-40-e1565109475524.jpeg.webp', '', '', 20, '135', 2),
(11, 'Huile 40% CBD Full Spectrum – 30ml', 'https://lelabshop.fr/wp-content/uploads/2019/08/huile-cbd-full-spectrum-40-e1565109475524.jpeg.webp', '', '', 4, '135', 2),
(12, 'Huile 5% CBD Full Spectrum – 30ml', 'https://lelabshop.fr/wp-content/uploads/2019/08/huile-cbd-full-spectrum-5-e1565109506708.jpeg.webp', '', '', 12, '74', 2),
(13, 'Huile 15% CBD Full Spectrum – 10ml', 'https://lelabshop.fr/wp-content/uploads/2019/08/huile-cbd-full-spectrum-15-e1565109497896.jpeg.webp', '', '', 23, '64', 2),
(14, 'Huile 15% CBD Full Spectrum – 30ml', 'https://lelabshop.fr/wp-content/uploads/2019/08/huile-cbd-full-spectrum-15-e1565109497896.jpeg.webp', '', '', 23, '149', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
