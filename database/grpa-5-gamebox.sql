-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 01 Février 2023 à 12:00
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `grpa-5-gamebox`
--
CREATE DATABASE IF NOT EXISTS `grpa-5-gamebox` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `grpa-5-gamebox`;

-- --------------------------------------------------------

--
-- Structure de la table `admin_gestion`
--

DROP TABLE IF EXISTS `admin_gestion`;
CREATE TABLE `admin_gestion` (
  `theme_title` varchar(100) NOT NULL,
  `bg_image` text NOT NULL,
  `maintenance` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin_gestion`
--

INSERT INTO `admin_gestion` (`theme_title`, `bg_image`,`maintenance`) VALUES
('Box Halloween', 'img/scorn.png','0');

-- --------------------------------------------------------

--
-- Structure de la table `box`
--

DROP TABLE IF EXISTS `box`;
CREATE TABLE `box` (
  `id_product_1` int(11) NOT NULL,
  `id_product_2` int(11) NOT NULL,
  `id_product_3` int(11) NOT NULL,
  `id_product_4` int(11) NOT NULL,
  `id_product_5` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `box`
--

INSERT INTO `box` (`id_product_1`, `id_product_2`, `id_product_3`, `id_product_4`, `id_product_5`, `stock`) VALUES
(1, 2, 3, 4, 5, 247);

-- --------------------------------------------------------

--
-- Structure de la table `cgv`
--

DROP TABLE IF EXISTS `cgv`;
CREATE TABLE `cgv` (
  `id` int(11) NOT NULL,
  `paragraph` text NOT NULL,
  `page_title` text NOT NULL,
  `title` text NOT NULL,
  `article1` text NOT NULL,
  `article2` text NOT NULL,
  `article3` text NOT NULL,
  `article3_bis` text NOT NULL,
  `article4` text NOT NULL,
  `article5` text NOT NULL,
  `article6` text NOT NULL,
  `article7` text NOT NULL,
  `article8` text NOT NULL,
  `article9` text NOT NULL,
  `article10` text NOT NULL,
  `article11` text NOT NULL,
  `article12` text NOT NULL,
  `date` date NOT NULL,
  `text_article1` text NOT NULL,
  `text_article2` text NOT NULL,
  `text_article3` text NOT NULL,
  `text_article3_bis` text NOT NULL,
  `text_article4` text NOT NULL,
  `text_article5` text NOT NULL,
  `text_article6` text NOT NULL,
  `text_article7` text NOT NULL,
  `text_article8` text NOT NULL,
  `text_article9` text NOT NULL,
  `text_article10` text NOT NULL,
  `text_article11` text NOT NULL,
  `text_article12` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `cgv`
--

INSERT INTO `cgv` (`id`, `paragraph`, `page_title`, `title`, `article1`, `article2`, `article3`, `article3_bis`, `article4`, `article5`, `article6`, `article7`, `article8`, `article9`, `article10`, `article11`, `article12`, `date`, `text_article1`, `text_article2`, `text_article3`, `text_article3_bis`, `text_article4`, `text_article5`, `text_article6`, `text_article7`, `text_article8`, `text_article9`, `text_article10`, `text_article11`, `text_article12`) VALUES
(5, 'Conformément aux dispositions des Articles 6-||| et 19 de la Loi n°2004-575 du 21 juin 2004 pour la confiance dans l\'économie numérique, dite L.C.E.N., il est porté à la connaissance des utilisateurs et visiteurs, ci-après l\'"Utilisateur", du site Gamebox, ci-après le "Site", les présentes mentions légales.\r\nLa connexion et la navigation sur le Site par l\'Utilisateur implique acceptation intégrale et sans réserve des présentes mentions légales.\r\nCes dernières sont accessibles sur le Site à la rubrique << Mention légales >>.', 'Mention légale et Conditions Générales de Vente', 'Mention Légale', 'Article 1 - l\'éditeur', 'Article 2 - l\'hébergeur', 'Article 3 - accès au site', '', 'Article 4 - Collecte des données', '', '', '', '', '', '', '', '', '2012-03-14', 'Fabien BARTHELEMY ci-après l\'"Editeur".', 'L\'hébergeur du Site est la société Gamebox.', 'Le Site est accessible en tout endroit 7j/7, 24h/24 sauf cas de force majeure, interruption programmée ou no et pouvant découlant d\'une nécessité de maintenance.\r\nEn cas de modification, interruption ou suspension du Site, l\'Editeur ne saurait être tenu responsable.', '', 'Le site assure à l\'Utilisateur une collecte et un traitement d\'informations personnelles dans le respect de la vie privée conformément à la loi n°78-17 du 6 janvier 1978 relative à l\'informatique, aux fichiers et aux libertés.\r\nEn vertu de la loi informatique et Libertés, en date du 6 janvier 1978, l\'Utilisateur dispose d\'un droit d\'accès, de rectification, de suppression et d\'opposition de ses données personnelles. L\'Utilisateur exerce ce droit :\r\nToute utilisation, reproduction, diffusion, commercialisation, modification de toute ou parie du Site, sans autorisation de l\'Editeur est prohibée et pourra entraînée des actions et poursuites judiciaires telles que notamment prévues par le Code de la propriété intellectuelle et le Code civil.\r\n\r\n', '', '', '', '', '', '', '', ''),
(6, '', 'Mention légale et Conditions Générales de Vente', 'Conditions Générales de Vente', 'Article 1- CHAMP D\'APPLICATION', 'Article 2 - PRIX', 'Article 3 - COMMANDES', 'Article 3 Bis - ESPACE CLIENT-COMPTE', 'Article 4 - CONDITIONS DE PAIEMENT', 'Article 5 - LIVRAISONS', 'Article 6 - TRANSFERT DE PROPRIÉTÉ', 'Article 7 - DROIT DE RÉTRACTATION', 'Article 8 - RESPONSABILITÉ DU VENDEUR- GARANTIES', 'Article 9 - DONNÉES PERSONNELLES', 'Article 10 - PROPRIÉTÉ INTELLECTUELLE', 'Article 11 - DROIT APPLICABLE - LANGUE', 'Article 12 - LITIGES', '2012-03-14', 'Les présentes Conditions Générales de Vente (dites « CGV ») s\'appliquent, sans restriction ni réserve à l\'ensemble des ventes conclues par le Vendeur auprès d\'acheteurs non professionnels (« Les Clients ou le Client »), désirant acquérir les produits proposés à la vente (« Les Produits ») par le Vendeur sur le site localhost/Gamebox/index.php. Les Produits proposés à la vente sur le site sont les suivants : Jeux vidéo, produit dériver .\r\nLes caractéristiques principales des Produits et notamment les spécifications, illustrations et indications de dimensions ou de capacité des Produits sont présentées sur le site localhost/Gamebox/index.php ce dont le client est tenu de prendre connaissance avant de commander.\r\nLe choix et l\'achat d\'un Produit sont de la seule responsabilité du Client.\r\nLes offres de Produits s\'entendent dans la limite des stocks disponibles, tels que précisés lors de la passation de la commande.\r\nCes CGV sont accessibles à tout moment sur le site localhost Gamebox/index.php et prévaudront sur toute autre document.\r\nLe Client déclare avoir pris connaissance des présentes CGV et les avoir acceptées en cochant la case prévue à cet effet avant la mise en euvre de la procédure de commande en ligne du site localhost/Gamebox/index php\r\nSauf preuve contraire les données enregistrées dans le systeme informatique du Vendeur constituent la preuve de l\'ensemble des transactions conclues avec le Client\r\nLes coordonnées du Vendeur sont les suivantes ', 'Les Produits sont fournis aux tarifs en vigueur figurant sur le site localhost/Gamebox/index.php, lors de l\'enregistrement de la commande par le Vendeur.\r\nLes prix sont exprimés en Euros, HT et TTC.\r\nLes tarifs tiennent compte d\'éventuelles réductions qui seraient consenties par le Vendeur sur le site localhost/Gamebox/index.php.\r\nCes tarifs sont fermes et non révisables pendant leur période de validité mais le Vendeur se réserve le droit, hors période de validité, d\'en modifier les prix à tout moment.\r\nLes prix ne comprennent pas les frais de traitement, d\'expédition, de transport et de livraison, qui sont facturés en supplément, dans les conditions indiquées sur le site et calculés préalablement à la passation de la commande.\r\nLe paiement demandé au Client correspond au montant total de l\'achat, y compris ces frais.\r\nUne facture est établie par le Vendeur et remise au Client lors de la livraison des Produits commandés.', 'Il appartient au Client de sélectionner sur le site localhost/Gamebox/index.php les Produits qu\'il désire commander, selon les modalités suivantes :\r\nLe Client choisi un Produit après validation du choix du Produit la commande sera considérée comme définie et exigera paiement de la part du Client selon les modalités prévues.\r\nLes offres de Produits sont valables tant qu\'elles sont visibles sur le site, dans la limite des stocks disponibles\r\nLa vente ne sera considérée comme valide qu\'après paiement intégral du prix. Il appartient au Client de vérifier l\'exactitude de la commande et de signaler immédiatement toute erreur.\r\nToute commande passée sur le site localhost/Gamebox/index.php constitue la formation d\'un contrat conclu à distance entre le Client et le Vendeur.\r\nLe Vendeur se réserve le droit d\'annuler ou de refuser toute commande d\'un Client avec lequel il existerait un litige relatif au paiement d\'une commande antérieure.\r\nLe Client pourra suivre l\'évolution de sa commande sur le site.', 'Afin de passer commande, le Client est invité à créer un compte (espace personnel).\r\nPour ce faire, il doit s\'inscrire en remplissant le formulaire qui lui sera proposé au moment de sa commande et s\'engage à fournir des informations sincères et exactes concernant son état civil et ses coordonnées. notamment son adresse email.\r\nLe Client est responsable de la mise à jour des informations fournies. Il lui est précisé qu\'il peut les modifier en se connectant à son compte.\r\nPour accéder à son espace personnel et aux historiques de commande, le Client devra s\'identifier à l\'aide de son nom d\'utilisateur et de son mot de passe qui lui seront communiqués après son inscription et qui sont strictement personnels. A ce titre, le Client s en interdit toute divulgation. Dans le cas contraire, il restera seul responsable de l\'usage qui en sera fait.\r\nLe Client pourra également solliciter sa désinscription en se rendant à la page dédiée sur son espace personnel. Celle-ci sera effective dans un délai raisonnable. \r\nEn cas de non respect des conditions générales de vente et/ou d\'utilisation, le site localhost/Gamebox/index php aura la possibilité de suspendre voire de fermer le compte d\'un client après mise en demeure adressée par voie électronique et restée sans effet.\r\nToute suppression de compte quel qu\'en soit le motif, engendre la suppression pure et simple de toutes informations personnelles du Client\r\nTout événement dû à un cas de force majeure ayant pour conséquence un dysfonctionnement du site ou serveur et sous réserve de toute interruption ou modification en cas de maintenance n\'engage pas la responsabilité du Vendeur.\r\nLa création du compte entraine l\'acceptation des présentes conditions générales de vente', 'Le prix est payé par voie de paiement sécurisé, selon les modalités suivantes: paiement par carte bancaire\r\nLe prix est payable comptant par le Client, en totalité au jour de la pasation de la commande.\r\nLes données de paiement sont échangées en mode crypté grâce au protocole défini par le prestataire de pour les transactions bancaires réalisée sur le site localhost/Gamebox/index.php.\r\nLes paiements effectués par le Client ne seront considérés comme définitifs qu\'après encaissement effectif par le Vendeur des sommes dues.\r\nLe Vendeur ne sera pas tenu de procéder à la délivrance des Produits commandés par le Client si celui-ci ne lui en paye pas le prix en totalité dans les conditions ci-dessus indiquées.', 'Les Produits commandés par le Client seront livrés en France métropolitaine.\r\nLa livraison est constituée par le transfert au Client de la possession physique ou du contrôle du Produit. Sauf cas particulier ou indisponibilité d\'un ou plusieurs Produits, les Produits commandés seront livrés en une seule fois.\r\nLe Vendeur s\'engage à faire ses meilleurs efforts pour livrer les produits commandés par le Client dans les délais ci-dessus précisés.\r\nSi les Produits commandés n\'ont pas été livrés pour toute autre cause que la force majeure ou le fait du Client, la vente pourra être résolue à la demande écrite du Client dans les conditions prévues aux articles L 216-2, L 216-3 et L241-4 du Code de la consommation. Les sommes versées par le Client lui seront alors restituées au plus tard dans les quatorze jours qui suivent la date de dénonciation du contrat, à l\'exclusion de toute indemnisation ou retenue.\r\nLes livraisons sont assurées par un transporteur indépendant, à l\'adresse mentionnée par le Client lors de la commande et à laquelle le transporteur pourra facilement accéder.\r\nLorsque le Client s\'est lui-même chargé de faire appel à un transporteur qu\'il choisit lui-même, la livraison est réputée effectuée dès la remise des Produits commandés par le Vendeur au transporteur qui les a acceptés sans réserves. Le Client reconnaît donc que c\'est au transporteur qu\'il appartient d\'effectuer la livraison et ne dispose d\'aucun recours en garantie contre le Vendeur en cas de défaut de livraison des marchandises transportées\r\nEn cas de demande particulière du Client concernant les conditions d\'emballage ou de transport des produits commandés dûment acceptées par écrit par le Vendeur, les coûts y liés feront l\'objet d\'une facturation spécifique complémentaire, sur devis préalablement accepté par écrit par le Client\r\nLe Vendeur remboursera ou remplacera dans les plus brefs délais et à ses frais, les Produits livrés dont les défauts de conformité ou les vices apparents ou cachés auront été dûment prouvés par le Client, dans les conditions prévues aux articles L 217-4 et suivants du Code de la consommation et celles prévues aux présentes CGV.\r\nLe transfert des risques de perte et de détérioration s\'y rapportant, ne sera réalisé qu\'au moment où le Client prendra physiquement possession des Produits. Les Produits voyagent donc aux risques et périls du Vendeur sauf lorsque le Client aura lui-même choisi le transporteur. A ce titre, les risques sont transférés au moment de la remise du bien au transporteur.', ' Le transfert de propriété des Produits du Vendeur au Client ne sera réalisé qu\'après complet paiement du prix par ce dernier, et ce quelle que soit la date de livraison desdits Produits.', 'Compte tenu de la nature des Produits vendus, les commandes passées par le Client ne bénéficient pas du droit de rétractation.\r\nLe contrat est donc conclu de façon définitive dès la passation de la commande par le Client selon les modalités précisées aux présentes CGV.', 'Les Produits fournis par le Vendeur bénéficient; de la garantie légale de conformité, pour les Produits défectueux, abimés ou endommagés ou ne correspondant pas à la commande, de la garantie légale contre les vices cachés provenant d\'un défaut de matière, de conception ou de fabrication affectant les produits livrés et les rendant impropres à l\'utilisation,\r\nDispositions relatives aux garanties légales\r\nArticle L217-4 du Code de la consommation\r\n<< Le vendeur est tenu de livrer un bien conforme au contrat et répond des défauts de conformité existant lors de la délivrance. Il répond également des défauts de conformité résultant de l\'emballage, des instructions de montage ou de l\'installation lorsque celle-ci a été mise à sa charge par le contrat ou a été réalisée sous sa responsabilité.>>\r\nArticle L217-5 du Code de la consommation\r\n« Le bien est conforme au contrat:\r\n1° Sil est propre à l\'usage habituellement attendu d\'un bien semblable et, le cas échéant:\r\n- s\'il correspond à la description donnée par le vendeur et possède les qualités que celui-ci a présentées à l\'acheteur sous forme d\'échantillon ou de modèle:\r\n- sil présente les qualités qu\'un acheteur peut légitimement attendre eu égard aux déclarations publiques faites par le vendeur, par le producteur ou par son représentant, notamment dans la publicité ou l\'étiquetage\r\n2 Ou s\'il présente les caractéristiques définies d\'un commun accord par les parties ou est propre à tout usage spécial recherché par l\'acheteur porté à la connaissance du vendeur et que ce dernier a accepté. >>\r\nArticle L217-12 du Code de la consommation\r\n"L\'action résultant du défaut de conformité se prescrit par deux ans à compter de la délivrance du bien." \r\n Article 1641 du Code civil\r\n« Le vendeur est tenu de la garantie à raison des défauts cachés de la chose vendue qui la rendent impropre á l\'usage auquel on la destine, ou qui diminuent tellement cet usage, que l\'acheteur ne l\'aurait pas acquise. ou n\'en aurait donné qu\'un moindre prix, s\'il les avait connus. »\r\nArticle 1648 alinéa 1er du Code civil\r\n"L\'action résultent des vices rédhibitoires doit être intentée par l\'acquéreur dans un délai de deux ans à compter de la découverte du vice "\r\nArticle L217-16 du Code de la consommation\r\n"Lorsque l\'acheteur demande au vendeur pendent le cours de la garantie commerciale qui lui a été consente lors de l\'acquisition ou de la réparation d\'un bien meuble, une remise en état couverte par la garante, toute période d\'immobilisation d\'au moins sept jours vient s\'ajouter à la durée de la garantie qui restat à courir Cette période court à compter de la demande d\'intervention de l\'acheteur ou de la mise à disposition pour réparation du bien en cause si cette mise à disposition est posténeure à la demande d\'intervention "\r\nAfin de faire valoir ses droits, le Client devra informer le Vendeur, par écrit (mail ou courrier), de la non- conformité des Produits ou de l\'existence des vices cachés à compter de leur découverte.\r\nLe Vendeur remboursera, remplacera ou fera réparer les Produits ou pièces sous garantie jugés non conformes ou défectueux\r\nLes frais d\'envoi seront remboursés sur la base du tarif facturé et les frais de retour seront remboursés sur présentation des justificatifs.\r\nLes remboursements, remplacements ou réparations des Produits jugés non conformes ou défectueux seront effectués dans les meilleurs délais et au plus tard dans les 1 jour jours suivant la constatation par le Vendeur du défaut de conformité ou du vice caché. Ce remboursement pourra être fait par virement ou chèque bancaire.\r\nLa responsabilité du Vendeur ne saurait être engagée dans les cas suivants :\r\n-non respect de la législation du pays dans lequel les produits sont livrés, qu\'il appartient au Client de vérifier.\r\nen cas de mauvaise utilisation, d\'utilisation à des fins professionnelles, négligence ou défaut d\'entretien de la part du Client, comme en cas d\'usure normale du Produit, d\'accident ou de force majeure.\r\n-Les photographies et graphismes présentés sur le site ne sont pas contractuels et ne sauraient engager la responsabilité du Vendeur.\r\nLa garantie du Vendeur est, en tout état de cause, limitée au remplacement ou au remboursement des Produits non conformes ou affectés d\'un vice.', ' Le Client est informé que la collecte de ses données à caractère personnel est nécessaire à la vente des Produits par le Vendeur ainsi qu\'à leur transmission à des tiers à des fins de livraison des Produits. Ces données à caractère personnel sont récoltées uniquement pour l\'exécution du contrat de vente\r\n9.1 Collecte des données à caractère personnel\r\nLes données à caractère personnel qui sont collectées sur le site localhost/Gamebox/index.php sont les suivantes\r\nOuverture de compte\r\nLors de la création du compte Client/ utilisateur\r\nNoms, prénoms adresse postale numéro de téléphone et adresse e-mail.\r\nPaiement\r\nDans le cadre du paiement des Produits proposés sur le site localhost/Gamebox/index.php, celui-ci enregistre des données financières relatives au compte bancaire ou à la carte de crédit du Client/utilisateur\r\n9.2 Destinataires des données à caractère personnel\r\nLes données à caractère personnel sont utilisées par le Vendeur et ses co-contractants pour l\'exécution du contrat et pour assurer l\'efficacité de la prestation de vente et de délivrance des Produits.\r\nLa ou les catégorie(s) de co-contractant(s) est (sont): Les prestataires de transport\r\n9.3 Responsable de traitement\r\nLe responsable de traitement des données est le Vendeur, au sens de la loi Informatique et libertés et à compter du 25 mai 2018 du Règlement 2016/679 sur la protection des données à caractère personnel.\r\n9.4 limitation du traitement\r\nSauf si le Client exprime son accord exprès, ses données à caractère personnelles ne sont pas utilisées à des fins publicitaires ou marketing.\r\n9.5 Durée de conservation des données\r\nLe Vendeur conservera les données ainsi recueillies pendant un délai de 5 ans, couvrant le temps de la prescription de la responsabilité civile contractuelle applicable.\r\n9.6 Sécurité et confidentialité\r\nLe Vendeur met en œuvre des mesures organisationnelles, techniques, logicielles et physiques en matière de sécurité du numérique pour protéger les données personnelles contre les altérations, destructions et accès non autorisés. Toutefois il est à signaler qu\'Internet n\'est pas un environnement complètement sécurisé et le Vendeur ne peut garantir la sécurité de la transmission ou du stockage des informations sur Internet.\r\n9.7 Mise en œuvre des droits des Clients et utilisateurs\r\nEn application de la règlementation applicable aux données à caractère personnel, les Clients et utilisateurs du site localhost/Gamebox/index php disposent des droits suivants :\r\nIls peuvent mettre à jour ou supprimer les données qui les concernent de la manière suivante: suppressions du compte.\r\nIls peuvent supprimer leur compte en écrivant à l\'adresse électronique indiqué à l\'article 9.3 < Responsable de traitement >\r\nIls peuvent exercer leur droit d\'accès pour connaître les données personnelles les concernant en écrivant à l\'adresse indiqué à l\'article 9.3 « Responsable de traitement »\r\nSi les données à caractère personnel détenues par le Vendeur sont inexactes, ils peuvent demander la mise à jour des informations des informations en écrivant à l\'adresse indiqué à l\'article 9.3 << Responsable de traitement >>\r\nIls peuvent demander la suppression de leurs données à caractère personnel, conformément aux lois applicables en matière de protection des données en écrivant à l\'adresse indiqué à l\'article 9.3 < Responsable de traitement >>\r\nIls peuvent également solliciter la portabilité des données détenues par le Vendeur vers un autre prestataire\r\nEnfin, ils peuvent s\'opposer au traitement de leurs données par le Vendeur\r\nCes droits, dès lors qu\'ils ne s opposent pas à la finalité du traitement peuvent être exercé en adressant une demande par courrier ou par E-mail au Responsable de traitement dont les coordonnées sont indiquées ci- dessus.\r\nLe responsable de traitement doit apporter une réponse dans un délai maximum d\'un mois.\r\nEn cas de refus de faire droit à la demande du Client, celui-ci doit être motivé.\r\nLe Client est informé qu\'en cas de refus, il peut introduire une réclamation auprès de la CNIL (3 place de Fontenoy, 75007 PARIS) ou saisir une autorité judiciaire.\r\nLe Client peut être invité à cocher une case au titre de laquelle il accepte de recevoir des mails à caractère informatifs et publicitaires de la part du Vendeur. Il aura toujours la possibilité de retirer son accord à tout moment en contactant le Vendeur (coordonnées ci-dessus) ou en suivant le lien de désabonnement', 'Le contenu du site localhost/Gamebox/index.php est la propriété du Vendeur et de ses partenaires et est protégé par les lois françaises et internationales relatives à la propriété intellectuelle.\r\nToute reproduction totale ou partielle de ce contenu est strictement interdite et est susceptible de constituer un délit de contrefaçon.', 'Les présentes CGV et les opérations qui en découlent sont régies et soumises au droit français. Les présentes CGV sont rédigées en langue française. Dans le cas où elles seraient traduites en une ou plusieurs langues étrangères, seul le texte français ferait foi en cas de litige.', 'Pour toute réclamation merci de contacter le service clientèle à l\'adresse postale ou mail du Vendeur indiquée à ARTICLE 1 des présentes CGV\r\nLe Client est informé qu\'il peut en tout état de cause recourir à une médiation conventionnelle, auprès des instances de médiation sectorielles existantes ou à tout mode alternatif de règlement des différends (conciliation, par exemple, en cas de contestation.\r\nLe Client est également informé qu\'il peut, également recourir à la plateforme de Règlement en Ligne des Litige (RLL) https://webgate.ec.europa.eu/odr/main/index.cfm?event=main.home show\r\nTous les litiges auxquels les opérations d\'achat et de vente conclues en application des présentes CGV et qui n\'auraient pas fait l\'objet d\'un règlement amiable entre le vendeur ou par médiation, seront soumis aux tribunaux compétents dans les conditions de droit commun.');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `object` text NOT NULL,
  `text` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`object`, `text`, `email`) VALUES
('gamebox', 'je suis une pomme.', 'anaelle.romanzin@gmail.com'),
('gamebox', 'je suis une poire.', 'aromanzin@gaming.tech'),
('gamebox', 'je suis une poire.', 'aromanzin@gaming.tech'),
('gamebox', 'je suis une pomme.', 'anaelle.romanzin@gmail.com'),
('pomme', 'pomme poiure', 'anaelle.romanzin@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `product_name` text NOT NULL,
  `qte` int(11) NOT NULL,
  `price` float NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL,
  `user_email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `payed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `payment`
--

INSERT INTO `payment` (`product_name`, `qte`, `price`, `date`, `id`, `user_email`, `payed`) VALUES
('Box', 1, 79.99, '2023-02-01 11:30:33', 2, 't', 0);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `img` text CHARACTER SET utf8 NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_desc` text NOT NULL,
  `img_2` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `img`, `product_name`, `product_desc`, `img_2`) VALUES
(1, 'img/dbd.jpg', 'Dead By Daylight', 'Jeu de survival d’horreur, multijoueur sorti en 2016. Sur le principe du cache-cache, tueurs et survivants s’affrontent. Vous pourrez choisir votre personnage ainsi que votre camps pour prendre part à la bataille.', 'img/deadbydaylight.jpg'),
(2, 'img/pj.jpg', 'Pumpkin Jack', 'Platformer 3D indépendant sorti en 2020. A travers des paysages fantastiques et au travers d’un univers effrayant et amusant. Incarnez Jack, le seigneur à la tête de citrouille pour l’aider à triompher du bien.', 'img/pumpkinjack.jpg'),
(3, 'img/nendoroid.jpg', 'Figurine Nendoroid', '', 'img/nendoroid.jpg'),
(4, 'img/sh.jpg', 'T-Shirt Silent Hill', '', 'img/sh.jpg'),
(5, 'img/mystery.png', 'Goodies Mystère', '', 'img/mystery.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `newsletter` tinyint(1),
  `admin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`email`, `password`, `newsletter`,`admin`) VALUES
('anaelle', '11c1d6d37c1b85a93fa20f0255ea8bbd', 0, 0),
('root', '5db44b679bb4e67c3b1f1b900b9b9adc', 0, 0),
('steve@mc.donald', '809105a5a6b5591f43f143ed57fddec2', 0, 0),
('t', '5f8bdda8d653b377ab6523ca14225b50', 0, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `box`
--
ALTER TABLE `box`
  ADD KEY `id_product_1` (`id_product_1`),
  ADD KEY `id_product_2` (`id_product_2`),
  ADD KEY `id_product_3` (`id_product_3`),
  ADD KEY `id_product_4` (`id_product_4`),
  ADD KEY `id_product_5` (`id_product_5`);

--
-- Index pour la table `cgv`
--
ALTER TABLE `cgv`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD KEY `email` (`email`);

--
-- Index pour la table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cgv`
--
ALTER TABLE `cgv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
