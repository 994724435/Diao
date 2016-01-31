-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2015 �?12 �?07 �?03:01
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `aiston`
--
CREATE DATABASE IF NOT EXISTS `aiston` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `aiston`;

-- --------------------------------------------------------

--
-- 表的结构 `ast_admin`
--

CREATE TABLE IF NOT EXISTS `ast_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `admin_username` varchar(16) NOT NULL COMMENT '管理员用户名',
  `admin_password` varchar(16) NOT NULL COMMENT '管理员密码',
  `admin_level` enum('1','2') NOT NULL COMMENT '管理员级别',
  `admin_relname` varchar(8) NOT NULL COMMENT '管理员名字',
  `admin_power` set('文章列表','添加文章','文章分类','产品列表','添加产品','产品分类','会员列表','添加会员','第三方账号','留言管理','评价管理','banner管理','广告位管理','图片连接','文字连接','基础设置','seo设置') NOT NULL COMMENT '管理员权限',
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='管理员表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `ast_admin`
--

INSERT INTO `ast_admin` (`admin_id`, `admin_username`, `admin_password`, `admin_level`, `admin_relname`, `admin_power`) VALUES
(1, 'admin', '123asd', '1', 'aaa', '文章列表,添加文章,文章分类,产品列表,添加产品,产品分类,会员列表,添加会员,第三方账号,留言管理,评价管理,banner管理,广告位管理,图片连接,文字连接,基础设置,seo设置');

-- --------------------------------------------------------

--
-- 表的结构 `ast_artcate`
--

CREATE TABLE IF NOT EXISTS `ast_artcate` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `cate_name` varchar(16) NOT NULL COMMENT '名称',
  `cate_pid` tinyint(4) NOT NULL COMMENT '父ID',
  `cate_order` tinyint(4) NOT NULL COMMENT '分类排序',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章分类表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ast_artcmt_reply`
--

CREATE TABLE IF NOT EXISTS `ast_artcmt_reply` (
  `reply_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '回复者ID',
  `reply_user` varchar(16) NOT NULL COMMENT '回复者名称',
  `reply_content` text NOT NULL COMMENT '回复内容',
  `reply_addtime` int(11) NOT NULL COMMENT '回复时间',
  `reply_cmtid` int(11) NOT NULL COMMENT '回复的内容的ID',
  PRIMARY KEY (`reply_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章评论回复表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ast_artcomment`
--

CREATE TABLE IF NOT EXISTS `ast_artcomment` (
  `cmt_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '评论者ID',
  `cmt_user` varchar(16) NOT NULL COMMENT '评论者',
  `cmt_content` text NOT NULL COMMENT '评论内容',
  `cmt_addtime` int(11) NOT NULL COMMENT '评论时间',
  `cmt_art_id` int(11) NOT NULL COMMENT '评论的文章的ID',
  PRIMARY KEY (`cmt_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章评论表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ast_article`
--

CREATE TABLE IF NOT EXISTS `ast_article` (
  `art_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章ID',
  `art_title` varchar(100) NOT NULL COMMENT '文章标题',
  `art_addtime` int(11) NOT NULL COMMENT '文章添加时间',
  `art_content` text NOT NULL COMMENT '文章内容',
  `art_thumb` varchar(100) NOT NULL COMMENT '缩略图',
  `art_author` varchar(20) NOT NULL COMMENT '文章作者',
  `art_summary` varchar(100) NOT NULL COMMENT '摘要',
  `art_order` int(11) NOT NULL COMMENT '文章排序',
  `art_from` varchar(100) NOT NULL COMMENT '文章来源',
  `art_cateid` tinyint(10) NOT NULL COMMENT '分类ID',
  `art_isshow` enum('1','0') NOT NULL COMMENT '是否显示',
  PRIMARY KEY (`art_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文章表' AUTO_INCREMENT=52 ;

-- --------------------------------------------------------

--
-- 表的结构 `ast_banner`
--

CREATE TABLE IF NOT EXISTS `ast_banner` (
  `ban_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'bannerID',
  `ban_name` varchar(16) NOT NULL COMMENT 'banner名称',
  `ban_order` tinyint(4) NOT NULL COMMENT 'banner排序',
  `ban_gourl` varchar(100) NOT NULL COMMENT 'banner跳转页面',
  `ban_url` varchar(100) NOT NULL COMMENT 'banner图地址',
  `ban_pageid` tinyint(4) NOT NULL COMMENT 'banner所属页面ID',
  PRIMARY KEY (`ban_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='banner表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ast_banner_page`
--

CREATE TABLE IF NOT EXISTS `ast_banner_page` (
  `bp_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'banner所属页面ID',
  `bp_name` varchar(16) NOT NULL COMMENT 'banner所属页面名称',
  PRIMARY KEY (`bp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ast_category`
--

CREATE TABLE IF NOT EXISTS `ast_category` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `cate_name` varchar(10) NOT NULL COMMENT '分类名称',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='产品分类表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ast_img_link`
--

CREATE TABLE IF NOT EXISTS `ast_img_link` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '图片链接ID',
  `img_name` varchar(100) NOT NULL COMMENT '名称',
  `img_order` tinyint(4) NOT NULL COMMENT '排序',
  `img_gourl` varchar(100) NOT NULL COMMENT '跳转页面',
  `img_url` varchar(100) NOT NULL COMMENT '图片地址',
  `img_pageid` tinyint(4) NOT NULL COMMENT '所属页面ID',
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='图片链接表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ast_link`
--

CREATE TABLE IF NOT EXISTS `ast_link` (
  `link_id` int(11) NOT NULL AUTO_INCREMENT,
  `link_name` varchar(30) NOT NULL COMMENT '名称',
  `link_url` varchar(100) NOT NULL COMMENT 'URL地址',
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='友情链接表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ast_member`
--

CREATE TABLE IF NOT EXISTS `ast_member` (
  `vip_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '会员ID',
  `vip_username` varchar(16) NOT NULL COMMENT '账户',
  `vip_password` varchar(16) NOT NULL COMMENT '密码',
  `vip_addtime` int(11) NOT NULL COMMENT '注册时间',
  `vip_relname` varchar(16) NOT NULL COMMENT '姓名',
  `vip_tel` varchar(11) NOT NULL COMMENT '电话',
  `vip_mail` varchar(30) NOT NULL COMMENT '邮箱',
  `vip_address` varchar(100) NOT NULL COMMENT '地址',
  `vip_birthday` varchar(14) NOT NULL COMMENT '生日',
  `vip_sex` enum('男','女') NOT NULL COMMENT '性别',
  `vip_zipCode` varchar(6) NOT NULL COMMENT '邮编',
  `vip_fixedTel` varchar(16) NOT NULL COMMENT '固定电话',
  `vip_state` enum('1','0') NOT NULL COMMENT '会员状态',
  PRIMARY KEY (`vip_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='会员表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ast_message`
--

CREATE TABLE IF NOT EXISTS `ast_message` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言ID',
  `msg_name` varchar(20) NOT NULL COMMENT '留言人',
  `msg_content` text NOT NULL COMMENT '留言内容',
  `msg_tel` varchar(11) NOT NULL COMMENT '留言人电话',
  `msg_addtime` int(11) NOT NULL COMMENT '留言时间',
  PRIMARY KEY (`msg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='留言表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ast_nav`
--

CREATE TABLE IF NOT EXISTS `ast_nav` (
  `nav_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `nav_name` varchar(20) NOT NULL COMMENT '名称',
  `nav_pid` tinyint(4) NOT NULL COMMENT '父ID',
  `nav_url` varchar(100) NOT NULL COMMENT '导航链接',
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='导航表' AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `ast_nav`
--

INSERT INTO `ast_nav` (`nav_id`, `nav_name`, `nav_pid`, `nav_url`) VALUES
(1, '文章管理', 0, ''),
(2, '产品管理', 0, ''),
(3, '会员管理', 0, ''),
(4, '营销活动', 0, ''),
(5, '图片管理', 0, ''),
(6, '友情链接', 0, ''),
(7, '网站设置', 0, ''),
(8, '文章列表', 1, '/Admin/Article/index'),
(9, '添加文章', 1, '/Admin/Article/add'),
(10, '文章分类', 1, '/Admin/Article/sort'),
(11, '产品列表', 2, '/Admin/Product/index'),
(12, '添加产品', 2, '/Admin/Product/add'),
(13, '产品分类', 2, '/Admin/Product/sort'),
(14, '会员列表', 3, '/Admin/Member/index'),
(15, '添加会员', 3, '/Admin/Member/add'),
(16, '第三方账号', 3, ''),
(17, '留言管理', 4, '/Admin/Message/index'),
(18, '评价管理', 4, ''),
(19, 'banner管理', 5, '/Admin/Photo/index'),
(20, '广告位管理', 5, ''),
(21, '图片链接', 6, '/Admin/Link/img_link'),
(22, '文字链接', 6, '/Admin/Link/words_link'),
(23, '基础设置', 7, ' '),
(24, 'seo设置', 7, '/Admin/Setup/index');

-- --------------------------------------------------------

--
-- 表的结构 `ast_procate`
--

CREATE TABLE IF NOT EXISTS `ast_procate` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '分类ID',
  `cate_name` varchar(16) NOT NULL COMMENT '分类名称',
  `cate_pid` tinyint(4) NOT NULL COMMENT '分类父ID',
  `cate_order` tinyint(4) NOT NULL COMMENT '分类排序',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='产品分类表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ast_procmt_reply`
--

CREATE TABLE IF NOT EXISTS `ast_procmt_reply` (
  `reply_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '回复者ID',
  `reply_user` varchar(16) NOT NULL COMMENT '回复者名称',
  `reply_content` text NOT NULL COMMENT '回复内容',
  `reply_addtime` int(11) NOT NULL COMMENT '回复时间',
  `reply_cmtid` int(11) NOT NULL COMMENT '回复的内容的ID',
  PRIMARY KEY (`reply_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='产品评论回复表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ast_procomment`
--

CREATE TABLE IF NOT EXISTS `ast_procomment` (
  `cmt_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '评论者ID',
  `cmt_user` varchar(16) NOT NULL COMMENT '评论者名称',
  `cmt_content` text NOT NULL COMMENT '评论内容',
  `cmt_addtime` int(11) NOT NULL COMMENT '评论时间',
  `cmt_pro_id` int(11) NOT NULL COMMENT '评论的产品的ID',
  PRIMARY KEY (`cmt_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='产品评论表' AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- 表的结构 `ast_product`
--

CREATE TABLE IF NOT EXISTS `ast_product` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '产品ID',
  `pro_name` varchar(100) NOT NULL COMMENT '产品名称',
  `pro_addtime` int(11) NOT NULL COMMENT '上架时间',
  `pro_thumb` varchar(100) NOT NULL COMMENT '产品图片',
  `pro_general_price` float NOT NULL COMMENT '普通价格',
  `pro_member_price` float NOT NULL COMMENT '会员价格',
  `pro_order` tinyint(4) NOT NULL COMMENT '产品排序',
  `pro_cate_id` tinyint(4) NOT NULL COMMENT '分类ID',
  `pro_from` varchar(100) NOT NULL COMMENT '产品来源',
  `pro_summary` varchar(100) NOT NULL COMMENT '产品摘要',
  `pro_introduction` text NOT NULL COMMENT '产品介绍',
  `pro_isshow` enum('1','0') NOT NULL COMMENT '是否显示',
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='产品表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ast_seo`
--

CREATE TABLE IF NOT EXISTS `ast_seo` (
  `seo_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'SEO ID',
  `seo_keyword` varchar(100) NOT NULL COMMENT '关键字',
  `seo_describe` text NOT NULL COMMENT '描述',
  PRIMARY KEY (`seo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='SEO设置表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ast_words_link`
--

CREATE TABLE IF NOT EXISTS `ast_words_link` (
  `wl_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文字链接ID',
  `wl_name` varchar(100) NOT NULL COMMENT '名称',
  `wl_gourl` varchar(100) NOT NULL COMMENT '跳转地址',
  `wl_order` int(11) NOT NULL COMMENT '排序',
  `wl_pageid` tinyint(4) NOT NULL COMMENT '所属文章ID',
  PRIMARY KEY (`wl_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文字链接表' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
