-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2024 at 10:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my-portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `specialty` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `short_description` tinytext NOT NULL,
  `description` text NOT NULL,
  `img_hero` varchar(255) DEFAULT NULL,
  `img_about` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `specialty`, `phone`, `address`, `instagram`, `facebook`, `linkedin`, `github`, `short_description`, `description`, `img_hero`, `img_about`, `cv`, `created_at`, `updated_at`) VALUES
(1, 'Saytlar Üçün Professional Problem Həlləri', 'PHP Laravel Developer', '+994 (55) 878 37 00', 'Mustafa Topçubaşov 21A, Azərbaycan Bakı', 'https://www.instagram.com/_orkhan_rg_/', 'https://www.facebook.com/profile.php?id=100010973659122', 'https://www.linkedin.com/in/orxan-ismay%C4%B1lov/', 'https://github.com/OrkhanRG', '<p>PHP və Laravel frameworkü vasitəsilə web saytlar yazmağı sevən biri ;)</p>', '<p>Mən təcrübəli PHP/Laravel Developer kimi, e-ticarət, blog, CMS və CRM platformaları üçün yüksək keyfiyyətli və davamlı proqram təminatlarının işlənib hazırlanmasında geniş təcrübəyə malikəm. PHP, Laravel, JavaScript və jQuery texnologiyalarında dərin biliklərimlə, mürəkkəb problemləri yaradıcı şəkildə həll etmək bacarığım var. Komanda ilə səmərəli əməkdaşlıq edərək, layihələrin səmərəliliyini və istifadəçi məmnuniyyətini əhəmiyyətli dərəcədə artırmağa nail olmuşam.</p><p>İşlərimdə SOLID prinsiplərinə sadiq qalaraq, strukturlaşdırılmış, genişlənə bilən və davamlı sistemlər qurmağa üstünlük verirəm. Servislərin qurulması və modulyasiya işlərində də ixtisaslaşmışam ki, bu da layihələrin çevikliyini və uzunmüddətli uğurunu təmin edir. Yenilikçi həllər və səmərəli kod yazmağı bacararaq, müasir texnologiyalara uyğun layihələr hazırlamaq sahəsində yüksək performans göstərirəm.</p>', 'assets/img/io4-20240601222919.jpg', 'assets/img/5c6adabe-3dce-464f-8060-8f075c591531-20240601222919.jpg', 'assets/resume/cv-20240727203441.pdf', NULL, '2024-08-04 11:39:47');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `creator_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `short_description` tinytext DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `expire_date` varchar(255) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `creator_id`, `category_id`, `main_image`, `short_description`, `description`, `status`, `expire_date`, `publish_date`, `created_at`, `updated_at`) VALUES
(3, 'Laravel 11', 'laravel-11', 1, 5, 'assets/img/blogs/main_images/laravel-11-20240805205729.png', '<p>larvel 11 mukemmelContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard&nbsp;</p>', '<p>Laravel gozeldi babaaaaaContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</p><p>&nbsp;Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections&nbsp;</p><blockquote><p>1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p></blockquote>', 1, '2025-08-29', '2024-08-04', '2024-08-03 16:32:28', '2024-08-05 16:57:29'),
(5, 'Javascript', 'javascript', 1, 2, 'assets/img/blogs/main_images/javascript-20240805214023.png', '<p>asdasd</p>', '<p>asdad</p>', 1, '2024-08-20', '2024-08-05', '2024-08-04 13:48:50', '2024-08-05 17:40:23'),
(6, 'PHP Core', 'php-core', 1, 5, 'assets/img/blogs/main_images/php-core-20240805213855.png', '<p>ppppppphppppppphppppppphppppppphppppppph</p>', '<p>ppppppphppppppphppppppphppppppphppppppphppppppphppppppphppppppphppppppphppppppph</p>', 1, '2025-08-21', '2024-08-02', '2024-08-04 14:30:50', '2024-08-05 17:38:55'),
(7, 'ReactJS', 'reactjs', 1, 2, 'assets/img/blogs/main_images/reactjs-20240805213735.png', '<p>asdasdasdasd</p>', '<p>adasdasd</p>', 1, '2024-08-27', '2024-07-31', '2024-08-05 17:37:35', '2024-08-05 17:37:35'),
(8, 'C# .NET', 'c-net', 1, 3, 'assets/img/blogs/main_images/c-net-20240808005740.jpg', '<p>C# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NET</p>', '<p>C# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NETC# .NET</p>', 1, '2024-11-07', '2024-08-07', '2024-08-07 20:57:40', '2024-08-07 20:57:40'),
(10, 'Angular JS', 'angular-js', 1, 2, 'assets/img/blogs/main_images/angular-js-20240808010716.png', '<p>Angular JSAngular JSAngular JSAngular JS</p>', '<p>Angular JSAngular JSAngular JSAngular JSAngular JSAngular JSAngular JSAngular JSAngular JSAngular JSAngular JS</p>', 1, '2024-08-26', '2024-07-30', '2024-08-07 21:07:16', '2024-08-07 21:07:16'),
(11, 'Laravel 11.20-də Yeni Simli Köməkçi, AssertableJson-da Enumları təsdiqləyin və s.', 'laravel-1120-de-yeni-simli-komekci-assertablejson-da-enumlari-tesdiqleyin-ve-s', 1, 5, 'assets/img/blogs/main_images/laravel-1120-de-yeni-simli-komekci-assertablejson-da-enumlari-tesdiqleyin-ve-s-20240808011712.jpg', '<p>short description</p>', '<p>The Laravel team released v11.20 this week, including a new collection method, a deduplicate string method, the ability to use Enums with <strong>AssertableJson</strong>, and more.</p><p><a href=\"https://github.com/jasonmccreary\">Jason McCreary</a> contributed a <strong>collapseWithKeys()</strong> method to the <strong>Illuminate\\Support\\Collection</strong> class that collapses nested arrays while preserving their keys:</p><p>&nbsp;</p><h2><a href=\"https://laravel-news.com/laravel-11-20-0#content-add-collapsewithkeys-to-collection\"><strong>#</strong></a><strong>Add collapseWithKeys to Collection</strong></h2><blockquote><p>$c = collect([[1 =&gt; \'a\'], [3 =&gt; \'c\'], [2 =&gt; \'b\']]);</p><p>$c-&gt;collapseWithKeys();</p><p>/*</p><p>[</p><p>&nbsp; &nbsp; 1 =&gt; \"a\",</p><p>&nbsp; &nbsp; 3 =&gt; \"c\",</p><p>&nbsp; &nbsp; 2 =&gt; \"b\",</p><p>]</p><p>*/</p></blockquote><h2><a href=\"https://laravel-news.com/laravel-11-20-0#content-add-deduplicate-to-strings\"><strong>#</strong></a><strong>Add deduplicate to strings</strong></h2><p><a href=\"https://github.com/jasonmccreary\">Jason McCreary</a> contributed a <strong>deduplicate</strong> string helper that replaces consecutive occurrences of a character with a character:</p><blockquote><p>Str::deduplicate(\'random &nbsp;double &nbsp;spaces\'); // \'random double spaces\'</p><p>Str::deduplicate(\'/some//odd/path//\', \'/\'); // \'/some/odd/path/\'</p><p>(string) str(\'zondaaaa\')-&gt;deduplicate(\'a\'); // \'zonda\'</p></blockquote><h2><a href=\"https://laravel-news.com/laravel-11-20-0#content-allow-custom-view-path-when-making-components\"><strong>#</strong></a><strong>Allow Custom View Path When Making Components</strong></h2><p><a href=\"https://github.com/browner12\">Andrew Brown</a> contributed the ability to define a <strong>--path</strong> flag when you need to create the view path in a custom file location:</p><p>&nbsp;</p><blockquote><p>php artisan make:component Foo --path custom/path</p></blockquote><p>By default, the <strong>make:component</strong> command will continue to use the <strong>resources/views/components</strong> folder.</p>', 1, '2024-11-19', '2024-08-07', '2024-08-07 21:17:12', '2024-08-07 21:17:12'),
(12, 'PHP Nədir?', 'php-nedir', 1, 5, 'assets/img/blogs/main_images/php-nedir-20240809021409.png', '<p><strong>PHPPHPPHPPHPPHP</strong></p>', '<h2><strong>PHP</strong></h2><p><strong>PHP</strong>, yazılım geliştiriciler için oldukça popüler olan, web tabanlı, HTML içine gömülebilen, nesne yönelimli bir programlama dilidir. E-ticaret sitelerinden CRM sistemlerine kadar kullanılabilen genel amaçlı bir dildir.</p><p>PHP&nbsp;<strong>sunucu taraflı</strong> iletişimler için yaratılmıştır. JavaScript gibi kullanıcı tarafında çalışan dillerden bu özelliği ile ayırılır. JavaScript hem frontend ve hem de backend için kullanılır.&nbsp;</p><p>Web geliştiriciler için önemli bir konuma sahip olan PHP, form verisi toplamak, görüntüleri değiştirmek, veri tabanlarını düzenlemek vb. gibi çeşitli sunucu taraflı fonksiyonları yapar. Web sitelerinin içeriklerinin yönetildiği paneli kullanabilmemizi sağlar. Yani web sitelerinin çalışmasının arkasında gizli görev alan araçlardan biridir.&nbsp;</p><p>PHP yazılım dili&nbsp;<strong>Backend Developer</strong> ve<strong>&nbsp;Full Stack Developer</strong>’lar tarafından oldukça sık tercih edilen bir programa dilidir. Günümüzdeki internet sitelerinin büyük çoğunluğunda kullanılır. Facebook, Wikipedia, Yahoo, Slack, Etsy PHP kullanarak geliştirilmiş web sitelerinden bazılarıdır.</p><p><br><br><strong>PHP Neden Bu Kadar Popüler?</strong></p><p>Her programla dilinde olduğu gibi PHP’nin de kendine özel avantajları bulunuyor. Bu özellikler onun sık tercih edilen bir programla dili olmasında rol oynuyor. Peki,&nbsp;<strong>PHP neden bu kadar popüler?</strong> İşte PHP’nin bu kadar popüler olmasının sebepleri:</p><p>&nbsp;</p><ol><li><strong>Açık kaynak kodludur</strong>. Açık kaynak kodlu bir programlama dili olduğundan gelişmeye, eğitime ve yaratıcılığa yardımcı olur. Aynı zamanda herhangi bir sorun olduğunda, sorun çok daha çabuk kapatılır. Çünkü&nbsp;<strong>geniş bir topluluğa</strong> ve&nbsp;<strong>PHP kütüphanelerine</strong> sahiptir. Bu sayede çok hızlı çözümler sunar. Eğer açık kaynak kodu ile ilgili daha fazla bilgi almak istiyorsanız&nbsp;<a href=\"https://coderspace.io/blog/open-source-nedir/\"><strong>buradaki</strong></a><strong>&nbsp;</strong>yazımızı da okuyabilirsiniz.</li><li><strong>Ücretsizdir</strong>. PHP’yi kullanmak, geliştirmek ve indirmek &nbsp;için herhangi bir lisans ücreti ödemenize gerek yoktur. Kullanımı ve dağıtımı ücretsizdir. Hatta Laravel gibi<strong>&nbsp;</strong>PHP çerçevelerinden bazıları da ücretsizdir.</li><li><strong>Öğrenmesi kolaydır</strong>. PHP öğrenmesi en kolay programlama dillerinden birisidir. Karmaşık bir sistemi yoktur. Özellikle bu programla dilini yeni öğrenenler için son derece kolaydır. Ayrıca çok sayıda ücretsiz kaynağı da bulunmaktadır. PHP eğitimi ile ilgili önerileri aşağıdaki yazımızda daha detaylı ele alacağız.&nbsp;</li><li><strong>Çok yönlüdür</strong>. PHP’nin popüler olmasının bir diğer nedeni çok yönlü olmasıdır. Genel amaçlı bir yazılım dilidir. Linux, OSX ve Windows gibi tüm işletim sistemlerinin içerisinde çalışabilir.</li><li><strong>Geniş kütüphane desteği</strong> vardır.&nbsp;<strong>PChart</strong>,&nbsp;<strong>Dispatch</strong>,&nbsp;<strong>Services_JSON</strong>,&nbsp;<strong>PHP Thumbnailer</strong> gibi kütüphaneler ile işlemler hızlıca ve maliyetsiz bir şekilde yapılabilir.&nbsp;</li></ol><p><br><br><strong>PHP ile Neler Yapılabilir?</strong></p><p><strong>PHP yazılım dilini</strong> web tasarımından programlamaya kadar birçok alanda kullanabiliriz. PHP ile neler yapılabilir sorusunu sınırlandırmak doğru olmaz çünkü PHP esnek bir programlama dilidir. Ancak kısa bir şekilde listelememiz gerekirse;</p><ul><li>Google Chrome, Mozilla, Firefox gibi&nbsp;<strong>arama motorlarının</strong> geliştirilmesinde,</li><li><strong>WordPress</strong> tabanlı web sayfalarının kodlanmasında,&nbsp;</li><li>Kişisel bloglar ve&nbsp;<strong>e-ticaret sitelerinin&nbsp;</strong>oluşturulmasında,</li><li>Kullanıcı etkileşimine izin veren&nbsp;<strong>web sitesi&nbsp;</strong>geliştirilmesinde kullanılır.</li></ul><p><br><br><strong>PHP Eğitimi ve Online PHP Dersleri</strong></p><p>Son zamanlarda yaygınlaşan<strong>&nbsp;“uzaktan”</strong> eğitim modeli ile programlama dili öğrenebilirsiniz.&nbsp;<strong>Online PHP dersleri</strong> alarak bu alanda kendinizi geliştirebilirsiniz. PHP öğrenmek için birçok güzel kaynak bulunuyor. Aşağıda sizler için PHP dilini öğrenebileceğiniz üç adet platform listeledik:</p><ol><li><a href=\"https://www.udemy.com/courses/search/?src=ukw&amp;q=php\">Udemy</a>: Hem ücretli hem de ücretsiz çok sayıda PHP eğitimleri bulunuyor. Fiyatları ise diğer platformlara göre oldukça makul. Sertifikaları özgeçmişinize ekleyebilir ve iş başvurularında bir adım öne geçebilirsiniz.</li><li><a href=\"https://www.coursera.org/search?query=php\">Coursera</a>: Dünyanın hatırı sayılır üniversite ve kurumlarından alacağınız sertifikaların kariyerinize katkısı yapacağınız en karlı yatırıma dönüşebilir. PHP ile ilgili başlangıç veya orta seviyede çok çeşitli kursları bulunuyor.&nbsp;</li><li>Php.net: PHP’nin açık kaynak kodlu bir dil olduğunu söylemiştik. Tüm dökümantasyonlara ücretsiz olarak <a href=\"https://www.php.net/\">buraya tıklayarak</a> kendi resmi sitesinden ulaşabilirsiniz.&nbsp;</li></ol><p><br>&nbsp;</p><p><strong>PHP Öğrenmek Ne Kadar Sürer?</strong></p><p>PHP öğrenmek, ortalama olarak &nbsp;4 ay ile 8 ay sürebilir. Ancak bu kişinin&nbsp;<strong>öğrenme hızına&nbsp;</strong>ve&nbsp;<strong>isteğine bağlı</strong> olarak değişmektedir. Programlama ile ilgili daha önceden hiç deneyiminiz yoksa, bu alanda ilerleyebilmek için bitmek bilmeyen bir meraka sahip olmanız gerekir. Eğer gerçekten bu alanda iyi olmak ve kendinizi geliştirmek istiyorsanız tek yapmanız gereken şey&nbsp;<strong>düzenli çalışmak&nbsp;</strong>ve öğrendiklerinizi&nbsp;<strong>pratiğe dökmek&nbsp;</strong>olacaktır.&nbsp;</p>', 1, '2024-09-04', '2024-08-08', '2024-08-08 22:14:09', '2024-08-08 22:14:09'),
(13, 'Proqram Təminatı', 'proqram-teminati', 1, 2, 'assets/img/blogs/main_images/proqram-teminati-20240809021800.jpg', '<p>Proqram TəminatıProqram TəminatıProqram TəminatıProqram TəminatıProqram TəminatıProqram TəminatıProqram TəminatıProqram Təminatı</p>', '<p>Proqram TəminatıProqram TəminatıProqram TəminatıProqram TəminatıProqram TəminatıProqram TəminatıProqram TəminatıProqram TəminatıProqram TəminatıProqram TəminatıProqram TəminatıProqram TəminatıProqram TəminatıProqram TəminatıProqram TəminatıProqram TəminatıProqram Təminatı</p>', 1, '2024-08-14', '2024-08-08', '2024-08-08 22:18:00', '2024-08-08 22:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `description` tinytext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `status`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Test Category1', 'test-category1', '1', '<p>asdasdasdasdadasd1</p>', '2024-07-30 18:06:49', '2024-07-30 18:15:11'),
(3, 'Forrest Peck', 'doloribus-adipisci-c', '1', '<p>adsadasd</p>', '2024-07-30 18:31:28', '2024-07-30 18:31:54'),
(5, 'Laravel', 'laravel', '1', '<p>laravel haqqında</p>', '2024-08-03 16:30:39', '2024-08-03 16:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `blog_images`
--

CREATE TABLE `blog_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_images`
--

INSERT INTO `blog_images` (`id`, `blog_id`, `path`, `created_at`, `updated_at`) VALUES
(80, 3, 'assets/img/blogs/images/laravel-11-0-20240805205729.jpg', '2024-08-05 16:57:29', '2024-08-05 16:57:29'),
(81, 3, 'assets/img/blogs/images/laravel-11-1-20240805205729.jpg', '2024-08-05 16:57:29', '2024-08-05 16:57:29'),
(82, 3, 'assets/img/blogs/images/laravel-11-2-20240805205729.jpg', '2024-08-05 16:57:29', '2024-08-05 16:57:29'),
(83, 3, 'assets/img/blogs/images/laravel-11-3-20240805205729.jpg', '2024-08-05 16:57:29', '2024-08-05 16:57:29'),
(84, 7, 'assets/img/blogs/images/reactjs-0-20240805213735.jpg', '2024-08-05 17:37:35', '2024-08-05 17:37:35'),
(85, 7, 'assets/img/blogs/images/reactjs-1-20240805213735.jpg', '2024-08-05 17:37:35', '2024-08-05 17:37:35'),
(86, 6, 'assets/img/blogs/images/php-core-0-20240805213855.jpg', '2024-08-05 17:38:55', '2024-08-05 17:38:55'),
(87, 5, 'assets/img/blogs/images/javascript-0-20240805214023.jpg', '2024-08-05 17:40:23', '2024-08-05 17:40:23'),
(88, 8, 'assets/img/blogs/images/c-net-0-20240808005740.jpg', '2024-08-07 20:57:40', '2024-08-07 20:57:40'),
(89, 8, 'assets/img/blogs/images/c-net-1-20240808005740.jpg', '2024-08-07 20:57:40', '2024-08-07 20:57:40'),
(90, 8, 'assets/img/blogs/images/c-net-2-20240808005740.jpg', '2024-08-07 20:57:40', '2024-08-07 20:57:40'),
(92, 10, 'assets/img/blogs/images/angular-js-0-20240808010716.png', '2024-08-07 21:07:16', '2024-08-07 21:07:16'),
(93, 11, 'assets/img/blogs/images/laravel-1120-de-yeni-simli-komekci-assertablejson-da-enumlari-tesdiqleyin-ve-s-0-20240808011712.jpg', '2024-08-07 21:17:12', '2024-08-07 21:17:12'),
(94, 11, 'assets/img/blogs/images/laravel-1120-de-yeni-simli-komekci-assertablejson-da-enumlari-tesdiqleyin-ve-s-1-20240808011712.jpg', '2024-08-07 21:17:12', '2024-08-07 21:17:12'),
(95, 12, 'assets/img/blogs/images/php-nedir-0-20240809021409.jpg', '2024-08-08 22:14:09', '2024-08-08 22:14:09'),
(96, 12, 'assets/img/blogs/images/php-nedir-1-20240809021409.jpg', '2024-08-08 22:14:09', '2024-08-08 22:14:09'),
(97, 13, 'assets/img/blogs/images/proqram-teminati-0-20240809021800.jpg', '2024-08-08 22:18:00', '2024-08-08 22:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`id`, `name`, `blog_id`, `created_at`, `updated_at`) VALUES
(108, 'laravel', 3, '2024-08-05 16:57:29', NULL),
(109, 'php', 3, '2024-08-05 16:57:29', NULL),
(110, 'laravel 11', 3, '2024-08-05 16:57:29', NULL),
(111, 'HTML', 7, '2024-08-05 17:37:35', NULL),
(112, 'HTML5', 7, '2024-08-05 17:37:35', NULL),
(113, 'CSS', 7, '2024-08-05 17:37:35', NULL),
(114, 'LaraveL', 6, '2024-08-05 17:38:55', NULL),
(115, 'React', 6, '2024-08-05 17:38:55', NULL),
(116, 'PHP Core', 6, '2024-08-05 17:38:55', NULL),
(117, 'PHp', 6, '2024-08-05 17:38:55', NULL),
(118, 'js', 5, '2024-08-05 17:40:23', NULL),
(119, 'react', 5, '2024-08-05 17:40:23', NULL),
(120, 'angular', 5, '2024-08-05 17:40:23', NULL),
(121, 'vue', 5, '2024-08-05 17:40:23', NULL),
(122, 'c', 8, '2024-08-07 20:57:40', NULL),
(123, 'c#', 8, '2024-08-07 20:57:40', NULL),
(124, '.net', 8, '2024-08-07 20:57:40', NULL),
(125, 'asp', 8, '2024-08-07 20:57:40', NULL),
(127, 'angular', 10, '2024-08-07 21:07:16', NULL),
(128, 'js', 10, '2024-08-07 21:07:16', NULL),
(129, 'laravel', 11, '2024-08-07 21:17:12', NULL),
(130, 'php', 11, '2024-08-07 21:17:12', NULL),
(131, 'news', 11, '2024-08-07 21:17:12', NULL),
(132, 'php', 12, '2024-08-08 22:14:09', NULL),
(133, 'php nədir', 12, '2024-08-08 22:14:09', NULL),
(134, 'proqram', 13, '2024-08-08 22:18:00', NULL),
(135, 'teminatı', 13, '2024-08-08 22:18:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `description` tinytext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Mobile App', 'mobile-app', '1', '<p>Mobile App</p>', '2024-06-22 14:55:05', '2024-07-30 18:14:14'),
(4, 'UI/UX Dizayn', 'uiux-dizayn', '1', '<p>UI/UX Dizayn</p>', '2024-06-22 15:17:11', '2024-06-22 15:17:11'),
(8, 'Lee Nieves', 'quia-vero-impedit-q', '1', '<p>zxczxc</p>', '2024-07-30 17:55:45', '2024-07-30 17:55:45'),
(9, 'Alden Collins', 'et-ipsa-impedit-pe', '1', '<p>asd</p>', '2024-07-30 17:56:40', '2024-07-30 17:56:40'),
(10, 'Test Blog Category', 'test-blog-category', '1', '<p>Test Blog Category Test Blog Category Test Blog Category</p>', '2024-07-30 18:03:03', '2024-07-30 18:03:03'),
(11, 'Web Sayt', 'web-sayt', '1', '<p>Web SaytWeb SaytWeb Sayt</p>', '2024-07-30 18:22:24', '2024-07-30 18:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `blog_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `like_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `parent_id`, `blog_id`, `name`, `email`, `comment`, `ip`, `is_active`, `is_approved`, `like_count`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, 12, 'Murad Aliyev', 'orxanismayilov851@gmail.com', 'Hello how are you  :D', '127.0.0.1', 1, 1, 0, '2024-08-13 20:08:47', '2024-08-15 22:32:04', NULL),
(2, 1, NULL, 12, 'Orxan İsmayılov', 'orxanismayilov851@gmail.com', 'you are perfect bro', '127.0.0.1', 1, 1, 0, '2024-08-13 20:09:37', '2024-08-15 22:35:11', NULL),
(3, 1, NULL, 12, 'Simral Ismayilov', 'simral@gmail.com', 'Help me', '127.0.0.1', 1, 1, 0, '2024-08-13 20:10:13', '2024-08-15 22:24:46', NULL),
(4, 1, NULL, 12, 'Test', 'test@gmail.com', 'test', '127.0.0.1', 1, 1, 0, '2024-08-13 20:25:07', '2024-08-15 20:21:23', NULL),
(5, 1, 2, 12, 'Test1', 'test1@gmail.com', 'test1', '127.0.0.1', 1, 1, 0, '2024-08-13 20:25:26', '2024-08-16 19:51:53', NULL),
(6, 1, 2, 12, 'Test2', 'test2@gmail.com', 'test2', '127.0.0.1', 1, 1, 0, '2024-08-13 20:25:50', '2024-08-16 19:52:18', NULL),
(7, 1, 2, 12, 'Dai Lindsay', 'qewa@mailinator.com', 'Recusandae Autem mo', '127.0.0.1', 1, 1, 0, '2024-08-13 20:27:21', '2024-08-15 22:24:43', NULL),
(8, 1, 2, 12, 'Marny Alvarez', 'tuwefos@mailinator.com', 'Omnis debitis eiusmo', '127.0.0.1', 1, 1, 0, '2024-08-13 20:27:37', '2024-08-15 23:11:18', NULL),
(9, 1, NULL, 12, 'Test', 'test@gmail.com', 'asdsad', '127.0.0.1', 1, 1, 0, '2024-08-15 17:08:14', '2024-08-15 20:22:39', NULL),
(10, 1, NULL, 8, 'Araz Kargo', 'araz@gmail.com', 'teateasdasdasdasdaddfdsf teateasdasdasdasdaddfdsf teateasdasdasdasdaddfdsf teateasdasdasdasdaddfdsf', '127.0.0.1', 1, 1, 0, '2024-08-16 19:12:40', '2024-08-16 20:24:22', NULL),
(11, 1, NULL, 8, 'Test User', 'testuser@gmail.com', 'asdasdajsdasj ajsdaksnj nnxc asjdasnd asdasdajsdasj ajsdaksnj nnxc asjdasnd asdasdajsdasj ajsdaksnj nnxc asjdasnd asdasdajsdasj ajsdaksnj nnxc asjdasnd asdasdajsdasj ajsdaksnj nnxc asjdasnd', '127.0.0.1', 1, 1, 0, '2024-08-16 19:13:21', '2024-08-16 19:13:27', NULL),
(12, 1, 2, 12, 'User Answer', 'answer@gmail.com', 'response response response response asd asd response response response response asd asd response response response response asd asd', '127.0.0.1', 1, 1, 0, '2024-08-16 19:14:02', '2024-08-16 19:56:22', NULL),
(13, 1, 11, 8, 'My Hearta', 'heart@gmail.com', 'asd dasdassdasdasdas asdsasdasd asdasd dasdassdasdasdas asdsasdasd asdasd dasdassdasdasdas asdsasdasd asdasd dasdassdasdasdas asdsasdasd asdasd dasdassdasdasdas asdsasdasd asd', '127.0.0.1', 1, 1, 0, '2024-08-16 19:16:02', '2024-08-16 19:16:10', NULL),
(14, 1, 11, 8, 'Dark Cobra', 'dark@cobra.az', 'asdass dasdasd ad asd', '127.0.0.1', 1, 1, 0, '2024-08-16 19:17:22', '2024-08-16 19:17:27', NULL),
(15, 1, 10, 8, 'Alone Man', 'alone@man.az', 'asd alone amnasd alone amnasd alone amnasd alone amn', '127.0.0.1', 1, 1, 0, '2024-08-16 19:18:04', '2024-08-16 20:24:25', NULL),
(16, 1, 10, 8, 'user test', 'uesr@test.az', 'asdadas', '127.0.0.1', 1, 1, 0, '2024-08-16 19:20:26', '2024-08-16 19:54:28', NULL),
(17, 1, 10, 8, 'Bakili Balasi', 'baku@gmail.com', 'asdasdasdasdadasdadadadads', '127.0.0.1', 1, 1, 0, '2024-08-16 19:55:58', '2024-08-16 20:08:26', NULL),
(18, 1, NULL, 8, 'Last Comment', 'last@comment.com', '$blog->comments->childComments', '127.0.0.1', 1, 1, 0, '2024-08-16 20:24:55', '2024-08-16 20:25:26', NULL),
(19, 1, 18, 8, 'last comment reply', 'reply@gmail.com', 'asasdlmkasdmals dnalskdnasldn askldna sk', '127.0.0.1', 1, 1, 0, '2024-08-16 20:25:52', '2024-08-16 20:26:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `logo`, `status`, `url`, `created_at`, `updated_at`) VALUES
(3, 'AvtoHesab', 'assets/img/company/avtohesab-20240610202542.jpg', 1, 'https://avtohesab.com/', '2024-06-10 16:25:42', '2024-06-22 11:03:54'),
(4, 'ISHESABI', 'assets/img/company/ishesabi-20240610202716.jpg', 1, 'https://www.instagram.com/ishesabicom/', '2024-06-10 16:27:16', '2024-06-22 11:04:27'),
(5, 'Flup Agency', 'assets/img/company/flup-agency-20240610202806.jpg', 1, 'https://flup.agency/', '2024-06-10 16:28:06', '2024-06-22 11:03:24'),
(6, 'R.I.S.K Company', 'assets/img/company/risk-company-20240612193221.jpg', 1, 'https://risk.az/', '2024-06-10 16:28:54', '2024-06-22 11:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `title`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(6, 'Simral Ismayilov', 'İş Təklifi', 'simralismayilov851@gmail.com', '055 878 37 00', 'dsasdajsdajlsdaksdalkdsjlaksjdalksdjalskdjaskldjalksdjalskd', '2024-06-01 17:37:45', '2024-06-01 17:37:45'),
(7, 'Test', NULL, 'orxanismayilov851@gmail.com', NULL, 'TestTESt', '2024-06-01 17:40:32', '2024-06-01 17:40:32'),
(8, 'Orxan İsmayılov', NULL, 'orxanismayilov851@gmail.com', NULL, 'asdasdas', '2024-06-01 17:43:19', '2024-06-01 17:43:19'),
(9, 'Orxan İsmayılov', NULL, 'orxanismayilov851@gmail.com', NULL, NULL, '2024-06-01 17:44:02', '2024-06-01 17:44:02'),
(10, 'Contact Page', 'page', 'orxanismayilov851@gmail.com', '0558783700', 'adasdasds', '2024-06-01 17:57:28', '2024-06-01 17:57:28');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institution` varchar(255) NOT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `field_of_study` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `institution`, `degree`, `field_of_study`, `description`, `status`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'Azərbaycan Dövlət Neft və Sənaye Universiteti', 'Ali', 'Kompüter Elimləri', '<p>asdasd</p>', 1, '2020-09-15', '2024-05-31', '2024-05-30 16:35:44', '2024-05-30 17:00:51'),
(3, 'Code For Future', NULL, 'Web Developer', '<p>adsasd</p>', 1, '2022-09-15', '2023-01-31', '2024-05-30 17:03:57', '2024-05-30 17:03:57'),
(6, 'Azərbaycan Dövlət Kooperasiya Universiteti', 'Magistr', 'Kompüter Mühəndisliyi', NULL, 1, '2024-09-15', '2026-05-31', '2024-07-23 16:10:54', '2024-08-03 18:33:02'),
(7, 'Google Developer Group Samsun', NULL, 'Full Stack Developer', '<p>asdasdadadasd</p>', 1, '2024-02-01', '2024-08-03', '2024-08-03 18:29:22', '2024-08-03 18:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `company`, `position`, `description`, `status`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'Flup Agency', 'PHP Developer', '<ul><li><p>PHP developer kimi müxtəlif layihələrin hazırlanmasında və hazır layihələr üzərində baş vermiş xətaların aradan qaldırılmasında iştirak etmişəm.</p><p><strong>İstifadə etdiyim proqramlaşdırma dilləri və texnologiyalar:&nbsp;</strong></p><p>PHP, Codeigniter, Javascript, Jquery, HTML, CSS, Bootstrap</p></li></ul>', 1, '2024-06-07', NULL, '2024-05-30 13:23:24', '2024-07-23 16:12:55'),
(2, 'R.İ.S.K Company', 'Backend Developer', '<ul><li>Frontend və Backend sistemləri arasında qüsursuz əlaqə üçün sadələşdirilmiş API inteqrasiyası</li><li><p>Web Saytların sıfırdan hazırlanması və mövcud layihələrdə müdaxilə</p><p><strong>İstifadə etdiyim proqramlaşdırma dilləri və texnologiyalar:&nbsp;</strong></p><p>HTML, CSS, Bootstrap, Angular, ASP .Net Core, Web API, PHP, Laravel, jQuery</p></li></ul>', 1, '2024-02-15', '2024-06-01', '2024-05-30 13:23:58', '2024-05-30 14:57:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `project_id`, `path`, `created_at`, `updated_at`) VALUES
(171, 29, 'assets/img/projects/images/azmart-layihesi-0-20240727184419.jpg', '2024-07-27 14:44:19', '2024-07-27 14:44:19'),
(172, 29, 'assets/img/projects/images/azmart-layihesi-1-20240727184419.jpg', '2024-07-27 14:44:19', '2024-07-27 14:44:19'),
(173, 29, 'assets/img/projects/images/azmart-layihesi-2-20240727184419.jpg', '2024-07-27 14:44:19', '2024-07-27 14:44:19'),
(174, 29, 'assets/img/projects/images/azmart-layihesi-3-20240727184419.jpg', '2024-07-27 14:44:19', '2024-07-27 14:44:19'),
(181, 31, 'assets/img/projects/images/aliqua-cumque-dolor-0-20240803205013.jpg', '2024-08-03 16:50:13', '2024-08-03 16:50:13'),
(182, 31, 'assets/img/projects/images/aliqua-cumque-dolor-1-20240803205013.jpg', '2024-08-03 16:50:13', '2024-08-03 16:50:13'),
(183, 31, 'assets/img/projects/images/aliqua-cumque-dolor-2-20240803205013.jpg', '2024-08-03 16:50:13', '2024-08-03 16:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_05_22_194246_create_services_table', 1),
(7, '2024_05_25_193751_add_column_status_to_services_table', 1),
(10, '2024_05_29_152453_create_experiences_table', 1),
(11, '2024_05_30_193456_create_education_table', 2),
(12, '2024_05_31_155505_create_skills_table', 3),
(13, '2024_06_01_194643_create_contacts_table', 4),
(15, '2024_05_22_174559_create_abouts_table', 5),
(16, '2024_05_27_165836_add_image_column_to_abouts_table', 6),
(17, '2024_05_29_151724_add_column_cv_to_abouts_table', 7),
(18, '2024_06_04_120826_add_column_order_to_skills_table', 8),
(19, '2024_06_10_193354_create_companies_table', 9),
(20, '2024_06_22_144701_add_column_url_to_companies_table', 10),
(21, '2024_06_22_162423_create_projects_table', 11),
(22, '2024_06_22_164841_create_images_table', 12),
(23, '2024_06_22_165244_create_categories_table', 13),
(24, '2024_07_23_185525_add_column_path_to_images_table', 14),
(25, '2024_07_27_181312_create_project_tags_table', 15),
(26, '2024_07_30_181122_create_blog_categories_table', 16),
(27, '2024_08_03_190430_create_blogs_table', 17),
(28, '2024_08_03_192638_create_blog_tags_table', 17),
(29, '2024_08_03_193901_create_blog_images_table', 18),
(30, '2024_08_03_201438_add_column_path_to_blog_images_table', 19),
(32, '2024_08_06_195558_create_subscriptions_table', 20),
(33, '2024_08_12_235500_create_comments_table', 21),
(34, '2024_08_15_232348_add_column_deleted_at_to_comments_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `client` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `short_description` tinytext DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `location` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `slug`, `client`, `category_id`, `main_image`, `short_description`, `description`, `status`, `location`, `url`, `publish_date`, `created_at`, `updated_at`) VALUES
(29, 'Azmart Layihesi', 'azmart-layihesi', 'Orxan İsmayilov', 11, 'assets/img/projects/main_images/azmart-layihesi-20240727184419.jpg', '<p>Azmart Azmart Azmart Azmart Azmart Azmart Azmart Azmart Azmart Azmart&nbsp;</p>', '<p>Azmart Azmart Azmart Azmart Azmart Azmart Azmart Azmart Azmart Azmart Azmart Azmart Azmart Azmart Azmart Azmart Azmart Azmart Azmart&nbsp;</p>', 1, 'Azerbaijan Baku', NULL, '2024-07-22', '2024-07-27 14:32:47', '2024-07-27 14:44:19'),
(30, 'Aut et deserunt dolo', 'nobis-officiis-et-qu', 'Quos voluptatem mini', 4, 'assets/img/projects/main_images/aut-et-deserunt-dolo-20240727201055.png', '<p>Quba</p>', '<p>Baku</p>', 1, 'In sed fugit blandi', NULL, '2024-07-24', '2024-07-27 14:50:37', '2024-07-27 16:10:55'),
(31, 'Aliqua Cumque dolor', 'facilis-necessitatib', 'Cupiditate delectus', 2, 'assets/img/projects/main_images/aliqua-cumque-dolor-20240803205013.jpg', NULL, '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC.&nbsp;</p><blockquote><p>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p></blockquote><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 1, 'Ipsam dicta eligendi', NULL, '2024-08-02', '2024-08-03 15:23:30', '2024-08-03 16:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `project_tags`
--

CREATE TABLE `project_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_tags`
--

INSERT INTO `project_tags` (`id`, `name`, `project_id`, `created_at`, `updated_at`) VALUES
(15, 'laravel', 29, '2024-07-27 14:44:19', NULL),
(16, 'php', 29, '2024-07-27 14:44:19', NULL),
(17, 'redis', 29, '2024-07-27 14:44:19', NULL),
(18, 'e-commerce', 29, '2024-07-27 14:44:19', NULL),
(19, 'mysql', 29, '2024-07-27 14:44:19', NULL),
(24, 'test123', 30, '2024-07-27 16:10:55', NULL),
(25, 'test234', 30, '2024-07-27 16:10:55', NULL),
(34, 'Aut architecto velit', 31, '2024-08-03 16:50:13', NULL),
(35, 'Est illo maiores dol.', 31, '2024-08-03 16:50:13', NULL),
(36, 'teq', 31, '2024-08-03 16:50:13', NULL),
(37, 'test', 31, '2024-08-03 16:50:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` tinytext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `status`, `is_featured`, `created_at`, `updated_at`) VALUES
(1, 'Web Saytların Hazırlanması', '<p>Web saytların müştəri tələbinə uyğun olaraq sıfırdan hazırlanması | hazır saytların review edilməsi</p>', 1, 1, '2024-05-30 13:22:49', '2024-05-30 17:31:08'),
(2, 'Saytların Deploy Edilməsi', '<p>Saytların deploy edilməsi | Hostinq, Domen-in quraşdırılması</p>', 1, 1, '2024-05-30 13:22:49', '2024-05-30 17:26:37'),
(3, 'Hazır Saytlara Müdaxilə', '<p>Hazır saytlara müdaxilə edilməsi və yenidən nəzərdən keçirmə</p>', 1, 1, '2024-05-30 13:22:49', '2024-05-30 17:24:29'),
(4, 'Xətaların Aradan Qaldırılması', '<p>Xətaların aradan qaldırılması | bug-ların fixlənməsi | kodun servisləşdirilməsi</p>', 1, 1, '2024-05-30 13:22:49', '2024-07-24 17:23:06');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `proficiency` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `proficiency`, `image`, `status`, `order`, `created_at`, `updated_at`) VALUES
(10, 'Laravel', 99, 'assets/img/skills/laravel-20240601174612.png', 1, 1, '2024-06-01 13:13:36', '2024-07-23 13:30:01'),
(11, 'PHP', 99, 'assets/img/skills/php-20240601174629.png', 1, 2, '2024-06-01 13:30:38', '2024-07-23 13:30:17'),
(12, 'Codeigniter', 90, 'assets/img/skills/codeigniter-20240601174641.webp', 1, 3, '2024-06-01 13:32:40', '2024-07-23 13:30:33'),
(13, 'HTML', 90, 'assets/img/skills/html-20240601174659.png', 1, 4, '2024-06-01 13:33:52', '2024-06-01 13:46:59'),
(14, 'CSS', 75, 'assets/img/skills/css-20240601174713.png', 1, 5, '2024-06-01 13:34:10', '2024-06-01 13:47:13'),
(15, 'Bootstrap', 90, 'assets/img/skills/bootstrap-20240601180618.png', 1, 6, '2024-06-01 13:35:54', '2024-08-04 11:42:43'),
(16, 'JavaScript', 90, 'assets/img/skills/javascript-20240601174738.png', 1, 7, '2024-06-01 13:36:19', '2024-06-01 13:47:38'),
(17, 'ReactJS', 40, 'assets/img/skills/reactjs-20240601174750.webp', 1, 8, '2024-06-01 13:37:40', '2024-06-01 13:47:50'),
(19, 'jQuery', 93, 'assets/img/skills/jquery-20240601174555.webp', 1, 9, '2024-06-01 13:42:46', '2024-06-01 13:45:55'),
(20, 'Rest Api', 80, 'assets/img/skills/rest-api-20240601174813.png', 1, 11, '2024-06-01 13:48:13', '2024-06-01 16:25:56'),
(21, 'Redis', 70, 'assets/img/skills/redis-20240601174900.png', 1, 13, '2024-06-01 13:49:00', '2024-07-23 13:31:20'),
(22, 'Docker', 40, 'assets/img/skills/docker-20240601174933.webp', 1, 12, '2024-06-01 13:49:33', '2024-06-01 13:49:33'),
(23, 'MySQL', 95, 'assets/img/skills/mysql-20240601175008.png', 1, 10, '2024-06-01 13:50:08', '2024-06-01 13:50:08'),
(24, 'GitHub', 100, 'assets/img/skills/github-20240601175100.png', 1, 14, '2024-06-01 13:51:00', '2024-07-23 13:31:10'),
(25, 'Git', 96, 'assets/img/skills/git-20240601175140.png', 1, 15, '2024-06-01 13:51:40', '2024-07-23 13:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `email`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(1, 'superadmin@gmail.com', NULL, '2024-08-06 17:13:08', '2024-08-06 17:13:08'),
(5, 'orxanismayilov896@gmail.com', '2024-08-07 08:47:00', '2024-08-07 04:46:30', '2024-08-07 04:47:00'),
(6, 'simralismayilov851@gmail.com', NULL, '2024-08-07 19:57:16', '2024-08-07 19:57:16'),
(12, 'orxanismayilov851@gmail.com', '2024-08-08 00:26:26', '2024-08-07 20:23:17', '2024-08-07 20:26:26');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_verifies`
--

CREATE TABLE `subscription_verifies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscription_verifies`
--

INSERT INTO `subscription_verifies` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(5, 'superadmin@gmail.com', 'RfX4gzJlFbaTAG9KFVWdtaaxjzLEt1bHVysmEn5v', '2024-08-07 04:32:32', '2024-08-07 04:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Orxan', 'İsmayılov', 'orxanismayilov851@gmail.com', NULL, '$2y$10$7w0jk0DjNtqS.prhMrwL9uT8f3e2Ktxg6PVC/oN4YVF35UmLYo.X2', 'GDoVMCOl0MHaUHolCIWxGMy6qDJEzDOBqNo17CsdTvKgNg9X216guInVI1m7', '2024-05-30 13:22:49', '2024-05-30 13:34:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_categories_slug_unique` (`slug`);

--
-- Indexes for table `blog_images`
--
ALTER TABLE `blog_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_images_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_tags_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_parent_id_foreign` (`parent_id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_project_id_foreign` (`project_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `projects_slug_unique` (`slug`);

--
-- Indexes for table `project_tags`
--
ALTER TABLE `project_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_tags_project_id_foreign` (`project_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_verifies`
--
ALTER TABLE `subscription_verifies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_images`
--
ALTER TABLE `blog_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `project_tags`
--
ALTER TABLE `project_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subscription_verifies`
--
ALTER TABLE `subscription_verifies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_images`
--
ALTER TABLE `blog_images`
  ADD CONSTRAINT `blog_images_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD CONSTRAINT `blog_tags_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_tags`
--
ALTER TABLE `project_tags`
  ADD CONSTRAINT `project_tags_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
