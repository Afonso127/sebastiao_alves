-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Maio-2023 às 22:20
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `backoffice`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `imagem_autor` varchar(5000) NOT NULL,
  `texto_autor` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id`, `imagem_autor`, `texto_autor`) VALUES
(1, 'http://localhost/sebastiao_alves/imagens/FOTO-editada.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque delectus, voluptates et iste voluptatum expedita porro deserunt quidem molestias adipisci illum consequuntur a velit quasi itaque modi aliquam accusantium harum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe quibusdam deserunt nemo non suscipit enim earum doloribus laboriosam dolor quas illo eos omnis quasi sed voluptatibus, animi eius tempore laborum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est, incidunt ab corporis quidem hic, magnam iusto aperiam ducimus fugiat maxime ad vero, optio magni eius ipsa amet beatae aliquid nulla. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, enim! Magni reprehenderit est amet exercitationem consequatur nam aliquam, at tempore esse corrupti sunt voluptatum inventore nihil quam, labore doloremque eum? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, consectetur consequatur temporibus pariatur inventore autem, voluptatum ex possimus cupiditate, adipisci commodi id facilis animi maiores ad ipsam ea sint praesentium! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem impedit eaque, ab, laborum aperiam at vitae cum necessitatibus pariatur officiis aspernatur nesciunt qui molestiae corrupti adipisci fugiat repudiandae modi provident. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ea dolorem amet voluptatibus nihil. Omnis dolore obcaecati ipsam sunt dolor et explicabo consectetur assumenda, impedit fugiat, ut ratione fuga mollitia! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores perspiciatis sit fugit quas, odit doloremque quo, dolorum temporibus, rem optio dicta repudiandae totam. Dolorem, id fugit dolorum natus consequatur velit! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa rem quod odit, provident tempora neque ad animi harum eum reiciendis magnam porro eveniet excepturi nostrum nemo vero ducimus dolores inventore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, qui a, similique debitis eligendi sunt omnis in pariatur nihil iure enim iusto ipsam soluta quae totam aliquid maxime impedit facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis possimus aliquid voluptatem impedit tempore soluta delectus tempora, laboriosam quo perferendis qui quas, ex sunt, ad et quod inventore saepe laborum? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores magnam quod dolor veniam tempore, ullam labore cumque quibusdam animi quia praesentium exercitationem laborum placeat in nesciunt dignissimos deleniti eum quaerat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio accusamus eos repellat, minus numquam earum voluptates dignissimos repellendus architecto illum temporibus libero consectetur alias incidunt quae, asperiores, officia eaque quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque delectus, voluptates et iste voluptatum expedita porro deserunt quidem molestias adipisci illum consequuntur a velit quasi itaque modi aliquam accusantium harum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe quibusdam deserunt nemo non suscipit enim earum doloribus laboriosam dolor quas illo eos omnis quasi sed voluptatibus, animi eius tempore laborum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est, incidunt ab corporis quidem hic, magnam iusto aperiam ducimus fugiat maxime ad vero, optio magni eius ipsa amet beatae aliquid nulla. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, enim! Magni reprehenderit est amet exercitationem consequatur nam aliquam, at tempore esse corrupti sunt voluptatum inventore nihil quam, labore doloremque eum? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, consectetur consequatur temporibus pariatur inventore autem, voluptatum ex possimus cupiditate, adipisci commodi id facilis animi maiores ad ipsam ea sint praesentium! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem impedit eaque, ab, laborum aperiam at vitae cum necessitatibus pariatur officiis aspernatur nesciunt qui molestiae corrupti adipisci fugiat repudiandae modi provident. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ea dolorem amet voluptatibus nihil. Omnis dolore obcaecati ipsam sunt dolor et explicabo consectetur assumenda, impedit fugiat, ut ratione fuga mollitia! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores perspiciatis sit fugit quas, odit doloremque quo, dolorum temporibus, rem optio dicta repudiandae totam. Dolorem, id fugit dolorum natus consequatur velit! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa rem quod odit, provident tempora neque ad animi harum eum reiciendis magnam porro eveniet excepturi nostrum nemo vero ducimus dolores inventore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, qui a, similique debitis eligendi sunt omnis in pariatur nihil iure enim iusto ipsam soluta quae totam aliquid maxime impedit facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis possimus aliquid voluptatem impedit tempore soluta delectus tempora, laboriosam quo perferendis qui quas, ex sunt, ad et quod inventore saepe laborum? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores magnam quod dolor veniam tempore, ullam labore cumque quibusdam animi quia praesentium exercitationem.</p><p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `imagem_mobile` varchar(5000) NOT NULL,
  `imagem_desktop` varchar(5000) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `subtitulo` longtext NOT NULL,
  `tag` varchar(100) NOT NULL,
  `data_atualizacao` varchar(100) NOT NULL,
  `link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carousel`
--

INSERT INTO `carousel` (`id`, `imagem_mobile`, `imagem_desktop`, `titulo`, `subtitulo`, `tag`, `data_atualizacao`, `link`) VALUES
(1, 'http://localhost/sebastiao_alves/imagens/cabecalhomob1.jpg', 'http://localhost/sebastiao_alves/imagens/cabecalho1.jpg', 'A SENHORA DO AMOR E DA GUERRA ', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia fuga ullam atque ipsa. Ducimus, dolores modi? Dolorum dolores officia impedit pariatur sed labore dolore. Quasi autem est nihil numquam. Reiciendis? dolor sit, amet consectetur. Reiciendis? dolor sit, amet consectetur.', 'NOVIDADE', '20:58:44 - 14/05/2023', 'http://localhost/sebastiao_alves/livro.php?id=1'),
(2, 'http://localhost/sebastiao_alves/imagens/cabecalhomob2.jpg', 'http://localhost/sebastiao_alves/imagens/cabecalho2.jpg', 'O CARACOL ESTRÁBICO', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia fuga ullam atque ipsa. Ducimus, dolores modi? Dolorum dolores officia impedit pariatur sed labore dolore. Quasi autem est nihil numquam. Reiciendis? dolor sit, amet consectetur. Reiciendis? dolor sit, amet consectetur.', '', '17:00:34 - 12/05/2023', 'http://localhost/sebastiao_alves/livro.php?id=2'),
(3, 'http://localhost/sebastiao_alves/imagens/cabecalhomob3.jpg', 'http://localhost/sebastiao_alves/imagens/cabecalho3.jpg', 'O COLECIONADOR DE AMNÉSIAS', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia fuga ullam atque ipsa. Ducimus, dolores modi? Dolorum dolores officia impedit pariatur sed labore dolore. Quasi autem est nihil munquam. Reiciendis? dolor sit, amet consectetur. Reiciendis? dolor sit, amet consectetur. ', '', '17:29:45 - 12/05/2023', 'http://localhost/sebastiao_alves/livro.php?id=4'),
(4, 'http://localhost/sebastiao_alves/imagens/cabecalhomob4.jpg', 'http://localhost/sebastiao_alves/imagens/cabecalho4.jpg', 'O VELHO QUE PENSAVA QUE FUGIA', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia fuga ullam atque ipsa. Ducimus, dolores modi? Dolorum dolores officia impedit pariatur sed labore dolore. Quasi autem est nihil numquam. Reiciendis? dolor sit, amet consectetur. Reiciendis? dolor sit, amet consectetur.', '', '17:29:35 - 12/05/2023', 'http://localhost/sebastiao_alves/livro.php?id=3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

CREATE TABLE `colaboradores` (
  `ID` int(10) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `acessos` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `colaboradores`
--

INSERT INTO `colaboradores` (`ID`, `login`, `senha`, `acessos`) VALUES
(2, 'Afonso', '$2y$10$FgGtc5U7k6/xHMTTyj9RUuqbT/hZo//t23U1WMILM9YQZHqA1rbTS', '21:12:54 - 16/05/2023'),
(3, 'Leonor', '$2y$10$FgGtc5U7k6/xHMTTyj9RUuqbT/hZo//t23U1WMILM9YQZHqA1rbTS', '21:13:40 - 16/05/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `morada` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `horario` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `telefone`, `morada`, `email`, `horario`, `facebook`, `instagram`, `linkedin`) VALUES
(1, '+351 123 456 789', 'Lorem ipsum dolor sit amet, 12<br>1234-543 Lorem', 'Lorem@lorem.pt', 'De Segunda a Sexta das 00:00 às 00:00', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.linkedin.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaques`
--

CREATE TABLE `destaques` (
  `id` int(11) NOT NULL,
  `img` varchar(5000) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `texto` varchar(500) NOT NULL,
  `link` varchar(200) NOT NULL,
  `observacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `destaques`
--

INSERT INTO `destaques` (`id`, `img`, `titulo`, `texto`, `link`, `observacao`) VALUES
(1, 'http://localhost/sebastiao_alves/imagens/livro1.jpg', 'A SENHORA DO AMOR E DA GUERRA', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis voluptatibus eligendi voluptatum ratione fuga, hic modi adipisci. ipsum dolor sit, amet consectetur', 'http://localhost/sebastiao_alves/livro.php?id=1', 'NOVIDADE'),
(2, 'http://localhost/sebastiao_alves/imagens/livro2.jpg', 'O VELHO QUE PENSAVA QUE FUGIA', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis voluptatibus eligendi voluptatum ratione fuga, hic modi adipisci. ipsum dolor sit, amet consectetur', 'http://localhost/sebastiao_alves/livro.php?id=3', 'MAIS VENDIDO'),
(3, 'http://localhost/sebastiao_alves/imagens/livro3.jpg', 'O COLECIONADOR DE AMNÉSIAS', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis voluptatibus eligendi voluptatum ratione fuga, hic modi adipisci. ipsum dolor sit, amet consectetur', 'http://localhost/sebastiao_alves/livro.php?id=4', 'PROMOÇÃO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `texto` longtext NOT NULL,
  `imagem_autor` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `home`
--

INSERT INTO `home` (`id`, `texto`, `imagem_autor`) VALUES
(1, '<p>Lorem, consectetur adipisicing elit. Fugiat provident molestiae corrupti, saepe in enim iusto quis, accusantium explicabo voluptas assumenda veniam quia porro atque! Exercitationem voluptas hic atque magnam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga illo rerum ab veniam sapiente saepe dolore qui. Deleniti doloremque necessitatibus exercitationem iure vitae sapiente magni optio quisquam amet, eius deserunt! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores commodi laudantium sint nam sunt. Incidunt perferendis reiciendis molestiae iusto, excepturi libero cumque sed sint numquam eveniet ullam veniam eos voluptatum! orem, ipsum dolor sit amet consectetur adipisicing elit. Dolores commodi laudantium sint nam sunt. Incidunt perferendis reiciendis molestiae iusto, excepturi libero cumque sed sint numquam eveniet ullam veniam eos voluptatum. psum dolor sit amet consectetur adipisicing elit. Dolores commodi laudantium sint nam sunt. Incidunt perferendis reiciendis molestiae iusto, excepturi libero cumque sed sint numquam eveniet ullam veniam eos voluptatum.</p>', 'http://localhost/sebastiao_alves/imagens/FOTO-editada.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imprensa`
--

CREATE TABLE `imprensa` (
  `id` int(11) NOT NULL,
  `img_imprensa` varchar(5000) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `texto` longtext NOT NULL,
  `data_pub` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imprensa`
--

INSERT INTO `imprensa` (`id`, `img_imprensa`, `titulo`, `texto`, `data_pub`) VALUES
(1, 'http://localhost/sebastiao_alves/imagens/conteudo-imprensa2.jpg', 'LANÇAMENTO | SENHORA DO AMOR E DA GUERRA', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quisquam sint quam alias, veniam dolor exercitationem voluptatibus! Voluptatum. numquam explicabo. Asperiores inventore neque veritatis ipsa in cupiditate accusantium commodi nesciunt! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium veritatis deserunt, magnam qui hic accusamus animi voluptatibus dignissimos veniam. Cumque rem praesentium laboriosam cum quae porro, magni assumenda minima. Dolor! Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore fugit nulla similique quisquam quis, dicta, dolorem sit, culpa debitis officiis placeat enim necessitatibus ex! Totam autem numquam porro minus ex. Lorem ipsum dolor, sit amet consectetur:</p>', '17 DE JUNHO DE 2020'),
(2, 'http://localhost/sebastiao_alves/imagens/conteudo-imprensa2.jpg', 'LANÇAMENTO | LIVRO', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quisquam sint quam alias, veniam dolor exercitationem voluptatibus! Voluptatum. numquam explicabo. Asperiores inventore neque veritatis ipsa in cupiditate accusantium commodi nesciunt! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium veritatis deserunt, magnam qui hic accusamus animi voluptatibus dignissimos veniam. Cumque rem praesentium laboriosam cum quae porro, magni assumenda minima. Dolor! Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore fugit nulla similique quisquam quis, dicta, dolorem sit, culpa debitis officiis placeat enim necessitatibus ex! Totam autem numquam porro minus ex. Lorem ipsum dolor, sit amet consectetur:</p><p>&nbsp;http://Lorem ipsum dolor sit amet, consectetur adipisicing eli</p>', ' 17 DE JUNHO DE 2016'),
(9, 'http://localhost/sebastiao_alves/imagens/conteudo-imprensa1.jpg', 'LANÇAMENTO | SENHORA DO AMOR E DA GUERRA', '', '9 DE MARÇO DE 2022'),
(13, 'http://localhost/sebastiao_alves/imagens/conteudo-imprensa2.jpg', 'LANÇAMENTO | O VELHO QUE PENSAVA QUE FUGIA', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quisquam sint quam alias, veniam dolor exercitationem voluptatibus! Voluptatum. numquam explicabo. Asperiores inventore neque veritatis ipsa in cupiditate accusantium commodi nesciunt! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium veritatis deserunt, magnam qui hic accusamus animi voluptatibus dignissimos veniam. Cumque rem praesentium laboriosam cum quae porro, magni assumenda minima. Dolor! Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore fugit nulla similique quisquam quis, dicta, dolorem sit, culpa debitis officiis placeat enim necessitatibus ex! Totam autem numquam porro minus ex. Lorem ipsum dolor, sit amet consectetur:</p><p>&nbsp;http://Lorem ipsum dolor sit amet, consectetur adipisicing eli</p>', '8 DE JUNHO DE 2017');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `imagem_livro` varchar(5000) NOT NULL,
  `titulo_livro` varchar(200) NOT NULL,
  `texto_livro` longtext NOT NULL,
  `data_atualizacao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `imagem_livro`, `titulo_livro`, `texto_livro`, `data_atualizacao`) VALUES
(1, 'http://localhost/sebastiao_alves/imagens/livro-conteudo.jpg', 'A SENHORA DO AMOR E DA GUERRA', '<p>Xana desistiu por fim de repelir as atenções de um celibatário de meia-idade que lhe apareceu na loja. Este não imagina a surpresa que o aguarda. Rodrigo chega a casa angustiado, sabendo que as filhas ficaram sozinhas com a mãe… Joaquim acorda e descobre que está cego. A sua reacção não é a que seria de esperar. Emigrado em Inglaterra, naturalizado inglês e pouco orgulhoso das suas origens, António tem que deslocar-se à terra onde, certo dia por engano, a cegonha o depositou. O velho professor tenta assegurar-se de que está vivo. Um pai extraviado telefona à filha dias depois de esta receber a herança. Atormentado pelo reumatismo, há dois anos que o velho caçador não pega numa espingarda. Mas no dia do seu nonagésimo aniversário… Vendo a bandeira a meia haste, o presidente do instituto pergunta quem morreu… Uma esforçada pintora tenta gerir a relação com a sua talentosa mãe. O que poderá impedir um sem-abrigo de atingir a glória? Num lar de terceira idade, a amizade entre um surdo e um mudo é perturbada pela chegada de uma enigmática mulher. Um jovem cientista tem uma inspiração que pode revolucionar a Física Teórica. Infelizmente, como a História não se cansa de demonstrar, os verdadeiros génios não são apenas incompreendidos. São uma raça a abater&nbsp;</p><p>Edição: Agosto de 2011 Dimensões:&nbsp;</p><p>143 x 220 x 14mm Encadernação:&nbsp;</p><p>Capa mole Páginas: 159</p>', '20:35:24 - 14/05/2023'),
(2, 'http://localhost/sebastiao_alves/imagens/livro-conteudo3.jpg', 'O CARACOL ESTRÁBICO ', '<p>Xana desistiu por fim de repelir as atenções de um celibatário de meia-idade que lhe apareceu na loja. Este não imagina a surpresa que o aguarda. Rodrigo chega a casa angustiado, sabendo que as filhas ficaram sozinhas com a mãe… Joaquim acorda e descobre que está cego. A sua reacção não é a que seria de esperar. Emigrado em Inglaterra, naturalizado inglês e pouco orgulhoso das suas origens, António tem que deslocar-se à terra onde, certo dia por engano, a cegonha o depositou. O velho professor tenta assegurar-se de que está vivo. Um pai extraviado telefona à filha dias depois de esta receber a herança. Atormentado pelo reumatismo, há dois anos que o velho caçador não pega numa espingarda. Mas no dia do seu nonagésimo aniversário… Vendo a bandeira a meia haste, o presidente do instituto pergunta quem morreu… Uma esforçada pintora tenta gerir a relação com a sua talentosa mãe. O que poderá impedir um sem-abrigo de atingir a glória? Num lar de terceira idade, a amizade entre um surdo e um mudo é perturbada pela chegada de uma enigmática mulher. Um jovem cientista tem uma inspiração que pode revolucionar a Física Teórica. Infelizmente, como a História não se cansa de demonstrar, os verdadeiros génios não são apenas incompreendidos. São uma raça a abater</p><p>&nbsp;Edição: Agosto de 2011&nbsp;</p><p>Dimensões: 143 x 220 x 14mm&nbsp;</p><p>Encadernação: Capa mole&nbsp;</p><p>Páginas: 159</p>', '20:35:42 - 14/05/2023'),
(3, 'http://localhost/sebastiao_alves/imagens/livro2.jpg', 'O VELHO QUE PENSAVA QUE FUGIA', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis. nesciunt iusto velit voluptatibus tempora rem sint. Adipisci pariatur deleniti cumque dolores voluptatibus ut! Culpa, dignissimos! Non, id. Sequi, quia reprehenderit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic esse, placeat nesciunt debitis, ipsam eaque amet reprehenderit voluptate deserunt repudiandae quos illo voluptatem labore optio possimus dolore earum laboriosam rem. Lorem ipsum Dolor, sit amet consectetur adipisicing elit. Accusamus, vero! Perferendis odit. quisquam ratione asperiores incidunt ducimus tempore nesciunt modi facilis veniam numquam quaerat pariatur nostrum ipsum atque voluptatem dolor. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla libero velit quam eius officiis voluptas at vel recusandae pariatur? Esse aperiam maxime recusandae commodi earum quas nulla autem asperiores ea!&nbsp;</p><p>Edição: Agosto de 2017&nbsp;</p><p>Dimensões: 139 x 218 x 13mm&nbsp;</p><p>Encadernação: Capa mole&nbsp;</p><p>Páginas: 168</p>', '20:44:16 - 14/05/2023'),
(4, 'http://localhost/sebastiao_alves/imagens/livro3.jpg', 'O COLECIONADOR DE AMNÉSIAS', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis. nesciunt iusto velit voluptatibus tempora rem sint. Adipisci pariatur deleniti cumque dolores voluptatibus ut! Culpa, dignissimos! Non, id. Sequi, quia reprehenderit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic esse, placeat nesciunt debitis, ipsam eaque amet reprehenderit voluptate deserunt repudiandae quos illo voluptatem labore optio possimus dolore earum laboriosam rem. Lorem ipsum Dolor, sit amet consectetur adipisicing elit. Accusamus, vero! Perferendis odit. quisquam ratione asperiores incidunt ducimus tempore nesciunt modi facilis veniam numquam quaerat pariatur nostrum ipsum atque voluptatem dolor. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla libero velit quam eius officiis voluptas at vel recusandae pariatur? Esse aperiam maxime recusandae commodi earum quas nulla autem asperiores ea!&nbsp;</p><p>Edição: Agosto de 2017&nbsp;</p><p>Dimensões: 139 x 218 x 13mm&nbsp;</p><p>Encadernação: Capa mole&nbsp;</p><p>Páginas: 168</p>', '20:36:18 - 14/05/2023');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imprensa`
--
ALTER TABLE `imprensa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imprensa`
--
ALTER TABLE `imprensa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
