-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 10, 2020 la 02:56 PM
-- Versiune server: 10.4.6-MariaDB
-- Versiune PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `liceu`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `absente`
--

CREATE TABLE `absente` (
  `ID_Absenta` int(11) NOT NULL,
  `ID_Elev` int(11) NOT NULL,
  `Data` date NOT NULL,
  `ID_Disciplina` int(11) NOT NULL,
  `Motivat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `absente`
--

INSERT INTO `absente` (`ID_Absenta`, `ID_Elev`, `Data`, `ID_Disciplina`, `Motivat`) VALUES
(1, 1, '2020-05-19', 1, 'DA'),
(2, 1, '2020-03-20', 1, 'NU'),
(3, 15, '2020-05-04', 1, 'NU'),
(4, 30, '2020-04-20', 1, 'DA'),
(5, 30, '2020-03-10', 1, 'NU'),
(6, 30, '2020-01-10', 1, 'DA'),
(7, 49, '2020-03-20', 1, 'NU'),
(8, 49, '2020-04-13', 1, 'NU'),
(9, 49, '2020-04-14', 1, 'DA'),
(10, 7, '2020-02-12', 1, 'DA'),
(11, 7, '2020-02-13', 1, 'NU'),
(12, 7, '2020-02-14', 1, 'DA'),
(13, 7, '2020-02-17', 1, 'DA'),
(14, 7, '2020-02-18', 1, 'NU'),
(15, 7, '2020-02-19', 1, 'NU'),
(16, 7, '2020-02-12', 15, 'DA'),
(17, 7, '2020-02-17', 15, 'DA'),
(18, 7, '2020-03-29', 15, 'NU'),
(19, 7, '2020-05-15', 15, 'NU'),
(20, 7, '2020-02-18', 18, 'DA'),
(21, 7, '2020-05-15', 18, 'NU'),
(22, 7, '2020-05-16', 18, 'NU'),
(23, 7, '2020-02-17', 30, 'DA'),
(24, 7, '2020-03-05', 49, 'NU'),
(26, 1, '2020-04-12', 15, 'NU'),
(27, 6, '2020-02-12', 15, 'DA'),
(28, 8, '2020-05-12', 15, 'NU'),
(30, 1, '2020-03-02', 15, 'NU'),
(31, 1, '2020-02-23', 15, 'DA');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `clase`
--

CREATE TABLE `clase` (
  `ID_Clasa` int(11) NOT NULL,
  `Nume_clasa` text NOT NULL,
  `Profil` text NOT NULL,
  `Specializare` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `clase`
--

INSERT INTO `clase` (`ID_Clasa`, `Nume_clasa`, `Profil`, `Specializare`) VALUES
(1, '09A', 'Real', 'Matematica - Informatica'),
(2, '09B', 'Real', 'Stiinte ale Naturii'),
(3, '09C', 'Umanist', 'Stiinte Sociale'),
(4, '09D', 'Umanist', 'Filologie'),
(5, '09E', 'Artistic', 'Arhitectura'),
(6, '09F', 'Artistic', 'Arte ambientale si design'),
(7, '10A', 'Real', 'Matematica - Informatica'),
(8, '10B', 'Real', 'Stiinte ale Naturii'),
(9, '10C', 'Umanist', 'Stiinte sociale'),
(10, '10D', 'Umanist', 'Filologie'),
(11, '10E', 'Artistic', 'Arhitectura'),
(12, '10F', 'Artistic', 'Arte ambientale si design'),
(13, '11A', 'Real', 'Matematica - Informatica'),
(14, '11B', 'Real', 'Stiinte ale Naturii'),
(15, '11C', 'Umanist', 'Stiinte Sociale'),
(16, '11D', 'Umanist', 'Filologie'),
(17, '11E', 'Artistic', 'Arhitectura'),
(18, '11F', 'Artistic', 'Muzica'),
(19, '12A', 'Real', 'Matematica - Informatica'),
(20, '12B', 'Real', 'Stiinte ale Naturii'),
(21, '12C', 'Umanist', 'Stiinte Sociale'),
(22, '12D', 'Umanist', 'Filologie'),
(23, '12E', 'Artistic', 'Arhitectura'),
(24, '12F', 'Artistic', 'Muzica');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `concursuri`
--

CREATE TABLE `concursuri` (
  `ID_Concurs` int(11) NOT NULL,
  `Nume_concurs` text NOT NULL,
  `ID_Disciplina` int(11) NOT NULL,
  `Premiu` text NOT NULL,
  `ID_Elev` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `concursuri`
--

INSERT INTO `concursuri` (`ID_Concurs`, `Nume_concurs`, `ID_Disciplina`, `Premiu`, `ID_Elev`) VALUES
(1, 'RomanaPlus', 1, 'Premiul II', 1),
(2, 'Concursul \"Magda Petrovanu\"', 62, 'Premiul I', 7),
(3, 'Concursul National de Chimie pentru elevi \"Costin D. Nenitescu\"', 62, 'Premiul III', 7),
(4, 'Concursul  National „CHIMIA - Arta între stiinte”', 62, 'Premiul I', 7),
(5, 'Olimpiada Stiintele Pamantului', 62, 'Mentiune', 7),
(6, 'Concursul PHI', 58, 'Premiul III', 7);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `conturi_elevi`
--

CREATE TABLE `conturi_elevi` (
  `ID_Elev` int(11) NOT NULL,
  `Nume` text NOT NULL,
  `Prenume` text NOT NULL,
  `Data_nasterii` date NOT NULL,
  `Nume_cont` text NOT NULL,
  `Parola` text NOT NULL,
  `ID_Clasa` int(11) NOT NULL,
  `Cod_elev` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `conturi_elevi`
--

INSERT INTO `conturi_elevi` (`ID_Elev`, `Nume`, `Prenume`, `Data_nasterii`, `Nume_cont`, `Parola`, `ID_Clasa`, `Cod_elev`) VALUES
(1, 'Tudor', 'Ovidiu', '2005-12-06', 'OvidiuTudor', '$2y$10$V79Evh7RfEfNptT5MnCVje1WjX5tWXv3MU.z8RByRKHoTHMqz/yv2', 1, 'afje0'),
(2, 'MihÄƒiÈ›Äƒ', 'Cezara', '2004-07-14', 'CezaraMihÄƒiÈ›Äƒ', '$2y$10$brvPYzYmhLvjuis40jL.Q.vId.DB/7JyWPi8Wx/322BrpC9eM/vLS', 1, 'bno6h'),
(3, 'Atanase', 'Eugen', '2005-09-16', ' EugenAtanase', '$2y$10$1lrP3rO3YlzlFI5co1XSEeGymWkwm2EV7qUSwdB0XUUoqkM45k66.', 1, '3ojn2'),
(4, 'HoraÈ›iu', 'Valeriu ', '2005-12-09', 'ValeriuHoraÈ›iu', '$2y$10$kx9hV10j.SSs8/Jx9oW.uOkNX3QZsGjMkSxP6n6O4QynB1o/mRwQ6', 1, 'm7y9o'),
(5, 'Cecilia', 'Georgiana', '2005-10-01', 'GeorgianaCecilia', '$2y$10$LRoLVDysT10qsJLbnomQvOogo3OrtBNSI32ooI7rhEOhiw3a/I2sm', 1, 'no1nh'),
(6, 'Adam', 'Ovidiu', '2004-08-10', 'OvidiuAdam', '$2y$10$nEwayUCgBM8cDWtNIb0A7Okrc77Aktl4mUxnPIPJ.QF3ZcTQ/sRea', 1, 'ow7bu'),
(7, 'Victoria', 'Petronela', '2005-03-11', 'PetronelaVictoria', '$2y$10$k89koU4EPyOId5kU0Oq1DOUV3h6yjCFGKgieqhSaUFMCaZCkt6R.i', 1, 'gmonw'),
(8, 'RareÈ™', 'Gabi', '2005-03-30', 'GabiRareÈ™', '$2y$10$eiFsAUcNJ1/YGp/bIK9ELOWCwF6RaFRqVzXUH4Sm8UyhTX/nLtODm', 1, 'y4wjf'),
(9, 'Rozalia', 'Georgiana', '2005-12-16', 'GeorgianaRozalia', '$2y$10$G0lYloNsBf1jAZb.R0hbwe3AJNA8FzV8M5FXUz0awVC.HxwRbJK4W', 1, 'ht4sl'),
(10, 'Ivan', 'Ion', '2005-01-09', 'IonIvan', '$2y$10$ZNuKh8OcsJsXcEHCUznsM.cyPgNQYpRDYx3e1cHcM5bvOT0ZEpky2', 1, 'zq6fd'),
(11, 'Olimpia', 'Maria', '2005-06-22', 'MariaOlimpia', '$2y$10$GZlLNp2jj2GHt4yjpgO6c.9vjMnGL1biq6v85J6Pqjwb/i0kxAfjq', 1, 'ms8hu'),
(12, 'Dacian', 'Virgil', '2005-12-26', 'VirgilDacian', '$2y$10$g4KMI0vYe9DmQH0J5yhB7un/w7H2Ibv3VcnXkSPpK5zUEJlsrWl8C', 1, 'ftf3a'),
(13, 'Anisoara', 'Iulia', '2005-11-19', 'IuliaAnisoara', '$2y$10$a2trbR0siaRW4RmtFGVuTOMNFDoTDQjpD9xa5EcNsyS0PNO4yXrgq', 1, 'eiuto'),
(14, 'Eusebiu', 'Cornel', '2005-03-28', 'CornelEusebiu', '$2y$10$f.69IwGIyO3W6KY0M0JEvuCfpXfSqtXWVr/KTEysjtZrxfytsU5Tm', 1, 'apfez'),
(15, 'Lucia', 'Marta', '2005-12-20', 'MartaLucia', '$2y$10$qXhaFAXzkIHawSREAUCaa.EvmmvTEsyatj/9VtbIi54H1n0D30XXW', 1, '4s1io'),
(16, 'Nelu', 'Claudiu', '2005-11-04', 'ClaudiuNelu', '$2y$10$siFt1G2B1JiS87F299nDzerXimeCvegW6b1cL39D34KWz.ilFkHI2', 1, 'zmh0v'),
(17, 'Amalia', 'Ioana', '2005-10-05', 'IoanaAmalia', '$2y$10$9caQ69aBo7enbL.1J7w4C./IhF3jw1gHOUVKdFhtYofzy3cZMppC.', 1, 'oo9pm'),
(18, 'Ghita', 'Octavian', '2005-01-17', 'OctavianGhita', '$2y$10$EmBwReK5j0K6EEENU1IFzuYktcV2tXld4xs4JZSBq/Rh4pTUwQmki', 1, 'o19p8'),
(19, 'Tatiana', 'Sorina', '2005-01-06', 'SorinaTatiana', '$2y$10$KfF93/CCrXdLWHrl0qlkW.MvOhw.oAa9k0mKPPJ3tJM6KzTZ.//CG', 1, 'pxrbr'),
(20, 'Veaceslav', 'Cristian', '2005-12-23', 'CristianVeaceslav', '$2y$10$6r4YZLXX6.q0fTqkcAitoebXuN/.1cNWpXyXa2AdSTWGp8ONquZEC', 1, 'xhz5s'),
(21, 'Tudor', 'Necolae', '2005-09-20', 'NeculaiTudor', '$2y$10$W9PN6Iz9MQiz3L0rvGWkOOKldu8AvBYVLJ6f.6TXb8cBM/m3sv9CG', 1, '3r86y'),
(22, 'Nicoleta', 'Denisa', '2005-06-17', 'DenisaNicoleta', '$2y$10$C8vMmE2cQZP50U1oOJwa6ejAORgdKNWbesqKUOZIowXW6ZjTvCAti', 2, '2xyih'),
(23, 'Emilian', 'Denis', '2005-07-17', 'DenisEmilian', '$2y$10$fpaISSwxJGPMuvHIJulLZOGlUtKXs8Va8wHzU9Tkqg6XtVvUyGlNS', 2, 'xp2lc'),
(24, 'Angelica', 'Daria', '2005-06-16', 'DariaAngelica', '$2y$10$hXK4Zzgval9tczo7wLbUBuuRLgBz/dsdA0ozPxMYo8NQXR0bHEqHK', 2, 'ek1qc'),
(25, 'Codrut', 'Pompiliu', '2005-02-19', 'PompiliuCodrut', '$2y$10$1qg/6LxVl8WGiQbU8w2tOumnbtgCtYJDZ7U4UxL7lsvcHyBel/eSO', 2, 's1qvf'),
(26, 'Tereza', 'Ilinca', '2005-05-16', 'IlincaTereza', '$2y$10$9.mwgIqU4aEaVfQd9p.FYeZXD0f0LcD.cTqg4ntdIpButKb0Osz7i', 2, '2mkb2'),
(27, 'Dionisie', 'Cornel', '2005-01-29', 'CornelDionisie', '$2y$10$8TsJ1eieS/sl2ZF9Zk0boejpG6m.h2gY8vrD7.0HVjtYCm0kO2yB.', 2, '0zbpn'),
(28, 'Sorina', 'Anca', '2005-08-25', 'AncaSorina', '$2y$10$OnvlUwKQWZB8.FswCABS5urTb3DeLKJgGiEdhA4JlJBVMWEANeCIO', 2, 'w8k6s'),
(29, 'Doru', 'Codrin', '2005-10-22', 'CodrinDoru', '$2y$10$rlXEr1dvuSxvPHxt8.6KEucZDnFYf3/NPxrWslWIDiMuLuiow9VZq', 2, '3ldrv'),
(30, 'Eugenium', 'Raluca', '2005-11-04', 'RalucaEugenia', '$2y$10$RVCZ/cEG6Q2zF9sedFbyJOma5fA76wwn8Afwa3yhaSAxNnimUY836', 1, 'g9vqv'),
(31, 'Pompiliu', 'Mihai', '2005-11-08', 'MihaiPompiliu', '$2y$10$lQiBe4Qpf3mT7thKa0SV9.JDRuZHPaJLriGiJYHlsLp1oiCIwCpJK', 1, 'gipkq');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `conturi_parinti`
--

CREATE TABLE `conturi_parinti` (
  `ID_Parinte` int(11) NOT NULL,
  `Nume` text NOT NULL,
  `Prenume` text NOT NULL,
  `Data_nas` date NOT NULL,
  `Telefon` text NOT NULL,
  `Adresa_mail` text NOT NULL,
  `Adresa` text NOT NULL,
  `Nume_cont` text NOT NULL,
  `Parola` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `conturi_parinti`
--

INSERT INTO `conturi_parinti` (`ID_Parinte`, `Nume`, `Prenume`, `Data_nas`, `Telefon`, `Adresa_mail`, `Adresa`, `Nume_cont`, `Parola`) VALUES
(1, 'Alexandrescu', 'Dana', '1977-05-07', '074-437-8406', 'Dana.Alexandrescu@gmail.com', 'CAL. DUDEÅžTI nr. 104-122, BUCHAREST - DISTRICT 3, 31087', 'DanaAlexandrescu', '$2y$10$J2jHVonpjN/EQLrSxUj7..EhuCL1JIcp8ghz98e1CUInvDm6Syy4a'),
(2, 'Vianu', 'Ecaterina', '1980-10-10', '023-226-1333', 'Ecaterina.Vianu@gmail.com', 'Piata Voievozilor 16, Bl.A10-11, parter', 'EcaterinaVianu', '$2y$10$cLzp8OKi/u5ToxRw25iyC.KbJsp6z/1XyDxQzNWaJXZPHoM.JVzFG'),
(3, 'Raducan', 'Sorina', '1966-06-15', '033-680-2210', 'Sorina.Raducan@gmail.com', 'STR. BRÄ‚ILEI, GALAÅ¢I, 800685', 'SorinaRaducan', '$2y$10$tKQOcvfjdomSkIFZ2p8/LusbjZR2BaFwkqBxFcRw3So.ulW7tkX4.'),
(4, 'Ungureanu', 'Anica', '1982-03-06', '072-277-2532', 'Anica.Ungureanu@gmail.com', 'STR. NR. 199, COM. BORÅž, BIHOR', 'AnicaUngureanu', '$2y$10$nRja18X/E4XWJU./B3CqG.xaDxITqnX8.oMneizz09VWYOGbndhqm'),
(5, 'Nastase', 'Adelin', '1969-05-10', '074-577-3212', 'Adelin.Nastase@gmail.com', 'Strada Victor Babes 35, Cluj', 'AdelinNastase', '$2y$10$0Pk/qI5/Gr/woYNc1PRm8eWGioptTYVq/dz9lNXAGUWm0OJ6/5f5O'),
(6, 'Vasile', 'Sebastian', '1984-11-01', '072-220-6812', 'Sebastian.Vasile@gmail.com', 'Strada Slatinei 21, PB47, Ap.1', 'SebastianVasile', '$2y$10$PrHVLIwp8CX.18t6tOKVoeH50G3KS/OxqVk7yxwVtHdpO4SNHB6Mq'),
(7, 'Gabor', 'David', '1983-04-15', '025-941-1511', 'David.Gabor@gmail.com', 'STR. HOREA nr. 40, CLUJ, 400202', 'DavidGabor', '$2y$10$jc.ComGj47bOgLYATL/Ryulz14oBi1hHw7Fdq9CHW4gecHNLfGtsi'),
(8, 'Gheorghe', 'Codrin', '1988-03-30', '023-224-0822', 'Codrin.Gheorghe@gmail.com', 'BD. INDEPENDENÅ¢EI nr. 1, IAÅžI', 'CodrinGheorghe', '$2y$10$/wzEnTFY3/DpDMB8k7urx.f0texynuAObm3P6aaRz8bzi8e3PSFQK'),
(9, 'Caramitru', 'Valeria', '1978-02-25', '074-546-1113', 'Valeria.Caramitru@gmail.com', 'STR. LIBERTÄ‚Å¢II nr. 227 bl. 227 sc. E ap. 3, BUHUÅžI, BACAU', 'ValeriaCaramitru', '$2y$10$ip9XZMIHpG2DDaG0lMVZxuOCzzG352/WPMCKptWoOMWDyd06Xg.6a');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `conturi_profesori`
--

CREATE TABLE `conturi_profesori` (
  `ID_Profesor` int(11) NOT NULL,
  `Nume` text NOT NULL,
  `Prenume` text NOT NULL,
  `Grad` int(11) NOT NULL,
  `Nume_cont` text NOT NULL,
  `Parola` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `conturi_profesori`
--

INSERT INTO `conturi_profesori` (`ID_Profesor`, `Nume`, `Prenume`, `Grad`, `Nume_cont`, `Parola`) VALUES
(1, 'Ignat', 'Dana', 1, 'DanaDana', '$2y$10$XlO8kX7Xsal.zyTtTRHGW.3e0kaJhZ12hmbKIZjJEhMlEttWHasve'),
(2, 'Dan', 'Vasile', 2, 'VasileDan', '$2y$10$cLxbNxv9jtGa5ZK9LxXMKO1ytxvX8jZiDTevdWYHXcqOJavseNb9m'),
(3, 'Paula', 'Iuliana', 1, 'IulianaPaula', '$2y$10$dhEPPnERu/asNr6f67OlpeN0q.hg9/emRkpCXZuWdVAm5c3EQryWW'),
(4, 'Bogdan', 'Catalin', 1, 'CatalinBogdan', '$2y$10$oJU9Q2aLjY.m7mpesyXEp.4/D59mHPkzP03z/YLxBBvkTv3TsXG6q'),
(5, 'Costache', 'Tiberiu', 1, 'TiberiuCostache', '$2y$10$t63cAeeaLjFsHpYFov8fAu1ye3mZGZLi12YkWJf3.nypEudHqPJli'),
(6, 'Angela', 'Andrada', 3, ' AndradaAngela', '$2y$10$os9z7fVGdGXpR.srQgQgzuY7Rzy8DOgupKfwVHrovPxmvIcmmIggK'),
(7, 'Dragos', 'Eugen', 2, 'EugenDragos', '$2y$10$wGjnlntyDwEjfMdnXZIvLeh66cv/TOESzurctzeYVPsBJ1GcubQwy'),
(8, 'Cristina', 'Adelina', 3, 'AdelinaCristina', '$2y$10$aDXdktaQDSdns7ijwT1QSOhw7.lVGW8zVcFf0z45e10k4YkFM4Cuy'),
(9, 'Emil', 'Liviu', 1, 'LiviuLiviu', '$2y$10$z0D1Ec926OJ/Nk01qxjsHuOWQpOI1HgxM7gmr7fZCVsDnRBti1ap2'),
(10, 'Oana', 'Adina', 1, 'AdinaOana', '$2y$10$VFIqolUpVZ8j8wNmMiIumus/64K13yc4qB37.Nqko5AzXlgTU/g8C'),
(11, 'Silviu', 'Mihail', 3, 'MihailSilviu', '$2y$10$b0plOJaI30jNSVbJs8408O2fa.rhMTfoG2Aw0WhJmtq3l5cV0O6CG'),
(12, 'Catina', 'Nicoleta', 1, 'NicoletaCatina', '$2y$10$6zX9SRiysVMaulJ9Z6budOWVt./BIvT5QVIiXD2qHr3HcECdDmnYq'),
(13, 'Luca', 'Silviu', 1, 'SilviuLuca', '$2y$10$UImwKoCpSlFrRbAYzheEP.31RGVXfzrwYZ3hF4K9qYV3cVdGvH/FK'),
(14, 'Dan', 'Victor', 2, 'VictorDan', '$2y$10$hFTTD73lpjjGtEnPTYmtVucYiqGFc1rixx1txzp8m3hZ/VRTDioRa'),
(15, 'Flavia', 'Larisa', 3, 'LarisaFlavia', '$2y$10$Ux/DD5TixHs4izOzhPil6Ow3il.a1ntsTeHb7zPGSuLgfP76RHD3.'),
(16, 'Gavril', 'Marin', 2, 'GavrilMarin', '$2y$10$lyZMsPITtg7Zv9rt.RvhrenQEHbY9Y1MB.FblkJKmTphVieZWS24u'),
(17, 'Vasilica', 'Ovidia', 1, 'OvidiaVasilica', '$2y$10$/KrKBGa9zi0xCotoUGcmm.co86WjU6V92Y/H0fI7QVR2Mmk3LaQC.'),
(18, 'Ilinca', 'Miruna', 1, 'MirunaIlinca', '$2y$10$DRzfTzZRMMV6VmunbH4deeqgql7wqtIz2eyFq.eHCmscQKhuB6Ska'),
(19, 'Flaviu', 'Corneliu', 3, 'CorneliuFlaviu', '$2y$10$HAoVEBx7n1MGPqwl1b61kevIfeO17vimylMHQ8Aqy6Oh03Z9KmMOu'),
(20, 'Adela', 'Andra', 1, 'AndraAdela', '$2y$10$yinZPNZVGRliAo0iM.JKLubEYHMygXD43jCUXo4l7gFoaW4yysw2m'),
(21, 'Sorin', 'Alin', 2, 'AlinSorin', '$2y$10$0zIMuqYqrZSJfrFBkest1O/iG/LGCCoMoC/mtUqZKX9XPLKUPwyJ2'),
(22, 'Casandra', 'Simona', 1, 'SimonaCasandra', '$2y$10$KzgBoiKlBnAkBozt3XDuIuQ/3yrLWb6kV4R08XH/5LKRsIavfAHtu'),
(23, 'LaurenÈ›iu', 'Octavian', 1, 'OctavianLaurenÈ›iu', '$2y$10$gTPfNO7/mCah84ZqqW7li.7oRv8hD836nmpkYFBgIadI7x.0gX8z6'),
(24, 'Larisa', 'Elisabeta', 2, 'ElisabetaLarisa', '$2y$10$tly.NLpu.KMkmQVRoN6zMO5s5ckivU82mKrDDajxmCL2sj92iW4SW'),
(25, 'Haralamb', 'Remus ', 1, 'RemusHaralamb', '$2y$10$RTKKhgo2Y6AjIjPQ3l3N/epUBvyCarDe.0fH1E93071tWZjSXWVM2'),
(26, 'Cecilia', 'Madalina', 2, 'MadalinaCecilia', '$2y$10$J4Cnbkatjulck6epUlQjfO8IBYvOs3H3frY9OY2bb9u/J1HpjZvvm'),
(27, 'Danut', 'Nelu', 3, 'NeluDan', '$2y$10$qN5gnwdgMwwWtgWEc9hmNepsnST0RWAzQDrdf9tar2Ik1Wb43Abr.');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `copii_parinti`
--

CREATE TABLE `copii_parinti` (
  `ID` int(11) NOT NULL,
  `ID_Parinte` int(11) NOT NULL,
  `ID_Copil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `copii_parinti`
--

INSERT INTO `copii_parinti` (`ID`, `ID_Parinte`, `ID_Copil`) VALUES
(1, 2, 4),
(2, 2, 1),
(3, 2, 1),
(4, 6, 26),
(5, 6, 7),
(6, 3, 7),
(7, 2, 1);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `discipline_clase`
--

CREATE TABLE `discipline_clase` (
  `ID_Disciplina` int(11) NOT NULL,
  `Nume_disciplina` text NOT NULL,
  `ID_Clasa` int(11) NOT NULL,
  `ID_Profesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `discipline_clase`
--

INSERT INTO `discipline_clase` (`ID_Disciplina`, `Nume_disciplina`, `ID_Clasa`, `ID_Profesor`) VALUES
(1, 'Limba si literatura romana', 1, 1),
(2, 'Limba si literatura romana', 2, 1),
(5, 'Limba si literatura romana', 14, 1),
(6, 'Limba si literatura romana', 9, 1),
(7, 'Limba si literatura romana', 10, 1),
(8, 'Limba si literatura romana', 21, 1),
(9, 'Limba si literatura romana', 22, 1),
(10, 'Limba latina', 9, 1),
(11, 'Limba latina', 10, 1),
(12, 'Limba latina', 21, 1),
(13, 'Limba latina', 22, 1),
(14, 'Limba Latina', 3, 1),
(15, 'Matematica', 1, 5),
(16, 'C++', 1, 1),
(17, 'C++', 21, 1),
(18, 'Limba Engleza', 1, 2),
(19, 'Limba Engleza', 2, 2),
(20, 'Limba Engleza', 5, 2),
(21, 'Limba Engleza', 6, 2),
(22, 'Limba Engleza', 9, 2),
(23, 'Limba Engleza', 10, 2),
(24, 'Limba Engleza', 13, 2),
(25, 'Limba Engleza', 14, 2),
(26, 'Limba Engleza', 17, 2),
(27, 'Limba Engleza', 18, 2),
(28, 'Limba Engleza', 21, 2),
(29, 'Limba Engleza', 22, 2),
(30, 'Sport', 1, 7),
(31, 'Sport', 2, 7),
(32, 'Sport', 3, 7),
(33, 'Sport', 4, 7),
(34, 'Sport', 5, 7),
(35, 'Sport', 6, 7),
(36, 'Sport', 10, 7),
(37, 'Sport', 11, 7),
(38, 'Sport', 17, 7),
(39, 'Sport', 18, 7),
(40, 'Sport', 19, 7),
(41, 'Biologie', 2, 10),
(42, 'Biologie', 3, 10),
(43, 'Biologie', 4, 10),
(44, 'Biologie', 7, 10),
(45, 'Biologie', 9, 10),
(46, 'Biologie', 10, 10),
(47, 'Biologie', 14, 10),
(48, 'Biologie', 20, 10),
(49, 'Biologie', 1, 10),
(50, 'Limba FrancezÄƒ', 1, 13),
(51, 'Limba FrancezÄƒ', 2, 13),
(52, 'Limba FrancezÄƒ', 9, 13),
(53, 'Limba FrancezÄƒ', 10, 13),
(54, 'Limba FrancezÄƒ', 11, 13),
(55, 'Limba FrancezÄƒ', 14, 13),
(56, 'Limba FrancezÄƒ', 17, 13),
(57, 'Limba FrancezÄƒ', 20, 13),
(58, 'FizicÄƒ', 1, 19),
(59, 'FizicÄƒ', 2, 19),
(60, 'FizicÄƒ', 19, 19),
(61, 'FizicÄƒ', 20, 19),
(62, 'Chimie', 1, 20),
(63, 'Chimie', 2, 20),
(64, 'Chimie', 3, 20),
(65, 'Chimie', 4, 20),
(66, 'Chimie', 7, 20),
(67, 'Chimie', 8, 20),
(68, 'Chimie', 9, 20),
(69, 'Chimie', 10, 20),
(70, 'Chimie', 13, 20),
(71, 'Chimie', 14, 20),
(72, 'Chimie', 19, 20),
(73, 'Chimie', 20, 20),
(74, 'Istorie', 1, 15),
(75, 'Istorie', 2, 15),
(76, 'Istorie', 7, 15),
(77, 'Istorie', 8, 15),
(78, 'Istorie', 15, 15),
(79, 'Istorie', 16, 15),
(80, 'Istorie', 19, 15),
(81, 'Istorie', 20, 15),
(82, 'Dirigentie', 1, 5),
(83, 'OpÅ£ional - Grafice de FuncÅ£ii', 1, 5),
(84, 'OpÅ£ional - Grafice de FuncÅ£ii', 7, 5),
(85, 'OpÅ£ional - Grafice de FuncÅ£ii', 19, 5),
(86, 'Matematica', 3, 5),
(87, 'Matematica', 7, 5),
(88, 'Matematica', 8, 5),
(89, 'Matematica', 10, 5),
(90, 'Matematicaa', 13, 5),
(91, 'Matematica', 19, 5),
(92, 'Matematica', 20, 5),
(93, 'Matematica Avansata', 1, 5),
(94, 'Matematica Avansata', 7, 5),
(95, 'Matematica Avansata', 8, 5),
(98, 'Integrale', 20, 5),
(100, 'Graficeeeee', 21, 5);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `examene`
--

CREATE TABLE `examene` (
  `ID_Examen` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Titlu` text NOT NULL,
  `Descriere` text NOT NULL,
  `ID_Disciplina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `examene`
--

INSERT INTO `examene` (`ID_Examen`, `Data`, `Titlu`, `Descriere`, `ID_Disciplina`) VALUES
(1, '2020-05-23', 'Test &quot;Moara cu noroc&quot;', 'Testul va contine intrebari despre tema si viziunea despre lume in nuvela realista psihologica &quot;Moara cu noroc&quot;. Recapitulati aspecte precum\r\n     - tema operei\r\n     - conflictul (interior si exterior)  -&gt; caracterul de nuvela psihologica\r\n     - incadrarea in epoca literara (trasaturi clasice) / curentul literar (trasaturi realiste) =&gt; LA ALEGERE!!\r\n     - momentele subiectului\r\n\r\nSUCCES!!!', 1),
(2, '2020-06-02', 'Test Numere Reale', 'Un test din capitolul Numere Reale', 15),
(3, '2020-05-20', 'Test Numere Intregi', 'Un test din operatiile pe numere intregi si proprietatile acestora.', 15),
(4, '2020-04-14', 'Test &quot;Povestea lui Harap-Alb&quot;', 'Recapitulati subiectul operei, personajele (incadrarea in tipologii, rolul in maturizarea eroului), incadrarea in specia literara (basmul cult - trasaturi) si elementele de originalitate.', 1),
(5, '2020-04-12', 'Test Algoritmi', 'bla bla', 1),
(6, '2020-05-02', 'Test Integrare', 'ftguhijyftdrtcgvhbjjihuvghv', 98),
(7, '2020-05-12', 'Test Functia de Gradul II', 'Un test ce va cuprinde exercitii precum: \r\n      - rezolvarea de ecuatii de gradul 2;\r\n      - gasirea punctului de minim/maxim sau a valorii minime/maxime a unei functii;\r\n      - rezolvarea de inecuatii de gradul 2;\r\n      - relatiile lui Viete aplicate pe ecuatii de gradul. ', 15),
(8, '2020-03-20', 'Test &quot;Moara cu noroc&quot;', 'sadfsd', 15);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `materiale`
--

CREATE TABLE `materiale` (
  `ID_Material` int(11) NOT NULL,
  `Continut` text NOT NULL,
  `ID_Disciplina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `materiale`
--

INSERT INTO `materiale` (`ID_Material`, `Continut`, `ID_Disciplina`) VALUES
(1, 'Mesaj important!!!', 60);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `note`
--

CREATE TABLE `note` (
  `ID_Nota` int(11) NOT NULL,
  `Data_nota` date NOT NULL,
  `Nota` int(11) NOT NULL,
  `ID_Disciplina` int(11) NOT NULL,
  `ID_Elev` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `note`
--

INSERT INTO `note` (`ID_Nota`, `Data_nota`, `Nota`, `ID_Disciplina`, `ID_Elev`) VALUES
(1, '2020-05-21', 10, 1, 1),
(2, '2020-03-12', 8, 1, 1),
(3, '2020-02-10', 9, 1, 1),
(4, '2020-03-02', 3, 1, 15),
(5, '2020-03-03', 7, 1, 15),
(6, '2020-04-20', 10, 15, 1),
(7, '2020-04-02', 3, 1, 1),
(8, '2020-05-21', 10, 18, 1),
(9, '2020-03-20', 7, 18, 1),
(10, '2020-10-10', 9, 18, 1),
(11, '2020-03-12', 9, 18, 7),
(12, '2020-02-20', 6, 18, 7),
(13, '2020-04-12', 8, 18, 7),
(14, '2020-05-10', 10, 18, 7),
(15, '2020-03-12', 10, 50, 7),
(16, '2020-04-03', 6, 50, 7),
(17, '2020-05-05', 9, 50, 7),
(18, '2020-02-10', 9, 58, 7),
(19, '2020-02-20', 3, 58, 7),
(20, '2020-04-21', 8, 58, 7),
(21, '2020-05-12', 7, 58, 7),
(22, '2020-02-10', 10, 62, 7),
(23, '2020-02-11', 9, 62, 7),
(24, '2020-03-12', 10, 62, 7),
(25, '2020-05-15', 10, 62, 7),
(26, '2020-04-18', 9, 62, 7),
(27, '2020-09-10', 8, 74, 7),
(28, '2020-05-10', 7, 74, 7),
(29, '2020-03-10', 10, 74, 7),
(30, '2020-03-12', 7, 15, 1),
(31, '2020-03-12', 10, 16, 1),
(35, '2020-04-12', 6, 15, 2),
(36, '2002-02-09', 7, 82, 1),
(37, '2020-04-02', 9, 15, 1),
(38, '2002-03-12', 7, 15, 1);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `orare`
--

CREATE TABLE `orare` (
  `ID_Ora` int(11) NOT NULL,
  `Ziua` text NOT NULL,
  `Interval_orar` text NOT NULL,
  `ID_Disciplina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `orare`
--

INSERT INTO `orare` (`ID_Ora`, `Ziua`, `Interval_orar`, `ID_Disciplina`) VALUES
(1, 'Luni', '08:00 - 08:50', 1),
(2, 'Marti', '11:10 - 12:00', 1),
(3, 'Luni', '09:00 - 09:50', 15),
(4, 'Luni', '10:00 - 10:50', 1),
(5, 'Luni', '11:10 - 12:00', 58),
(6, 'Luni', '12:10 - 13:00', 62),
(7, 'Luni', '13:10 - 14:00', 58),
(8, 'Marti', '08:00 - 08:50', 74),
(9, 'Marti', '09:00 - 09:50', 74),
(10, 'Marti', '10:00 - 10:50', 15),
(11, 'Marti', '12:10 - 13:00', 50),
(12, 'Marti', '13:10 - 14:00', 16),
(13, 'Miercuri', '08:00 - 08:50', 18),
(14, 'Miercuri', '09:00 - 09:50', 1),
(15, 'Miercuri', '10:00 - 10:50', 58),
(16, 'Miercuri', '11:10 - 12:00', 62),
(17, 'Miercuri', '12:10 - 13:00', 16),
(18, 'Miercuri', '13:10 - 14:00', 15),
(19, 'Joi', '08:00 - 08:50', 58),
(20, 'Joi', '09:00 - 09:50', 16),
(21, 'Joi', '10:00 - 10:50', 49),
(22, 'Joi', '11:10 - 12:00', 15),
(23, 'Joi', '12:10 - 13:00', 18),
(24, 'Joi', '13:10 - 14:00', 30),
(25, 'Vineri', '08:00 - 08:50', 82),
(26, 'Vineri', '09:00 - 09:50', 16),
(27, 'Vineri', '10:00 - 10:50', 15),
(28, 'Vineri', '11:10 - 12:00', 50),
(29, 'Vineri', '12:10 - 13:00', 18),
(31, 'Luni', '08:00 - 08:50', 86),
(32, 'Luni', '10:00 - 10:50', 94),
(33, 'Luni', '11:10 - 12:00', 98),
(34, 'Luni', '12:10 - 13:00', 83);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `absente`
--
ALTER TABLE `absente`
  ADD PRIMARY KEY (`ID_Absenta`);

--
-- Indexuri pentru tabele `clase`
--
ALTER TABLE `clase`
  ADD PRIMARY KEY (`ID_Clasa`);

--
-- Indexuri pentru tabele `concursuri`
--
ALTER TABLE `concursuri`
  ADD PRIMARY KEY (`ID_Concurs`);

--
-- Indexuri pentru tabele `conturi_elevi`
--
ALTER TABLE `conturi_elevi`
  ADD PRIMARY KEY (`ID_Elev`);

--
-- Indexuri pentru tabele `conturi_parinti`
--
ALTER TABLE `conturi_parinti`
  ADD PRIMARY KEY (`ID_Parinte`);

--
-- Indexuri pentru tabele `conturi_profesori`
--
ALTER TABLE `conturi_profesori`
  ADD PRIMARY KEY (`ID_Profesor`);

--
-- Indexuri pentru tabele `copii_parinti`
--
ALTER TABLE `copii_parinti`
  ADD PRIMARY KEY (`ID`);

--
-- Indexuri pentru tabele `discipline_clase`
--
ALTER TABLE `discipline_clase`
  ADD PRIMARY KEY (`ID_Disciplina`);

--
-- Indexuri pentru tabele `examene`
--
ALTER TABLE `examene`
  ADD PRIMARY KEY (`ID_Examen`);

--
-- Indexuri pentru tabele `materiale`
--
ALTER TABLE `materiale`
  ADD PRIMARY KEY (`ID_Material`);

--
-- Indexuri pentru tabele `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`ID_Nota`);

--
-- Indexuri pentru tabele `orare`
--
ALTER TABLE `orare`
  ADD PRIMARY KEY (`ID_Ora`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `absente`
--
ALTER TABLE `absente`
  MODIFY `ID_Absenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pentru tabele `clase`
--
ALTER TABLE `clase`
  MODIFY `ID_Clasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pentru tabele `concursuri`
--
ALTER TABLE `concursuri`
  MODIFY `ID_Concurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pentru tabele `conturi_elevi`
--
ALTER TABLE `conturi_elevi`
  MODIFY `ID_Elev` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pentru tabele `conturi_parinti`
--
ALTER TABLE `conturi_parinti`
  MODIFY `ID_Parinte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pentru tabele `conturi_profesori`
--
ALTER TABLE `conturi_profesori`
  MODIFY `ID_Profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pentru tabele `copii_parinti`
--
ALTER TABLE `copii_parinti`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pentru tabele `discipline_clase`
--
ALTER TABLE `discipline_clase`
  MODIFY `ID_Disciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT pentru tabele `examene`
--
ALTER TABLE `examene`
  MODIFY `ID_Examen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pentru tabele `materiale`
--
ALTER TABLE `materiale`
  MODIFY `ID_Material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pentru tabele `note`
--
ALTER TABLE `note`
  MODIFY `ID_Nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pentru tabele `orare`
--
ALTER TABLE `orare`
  MODIFY `ID_Ora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
