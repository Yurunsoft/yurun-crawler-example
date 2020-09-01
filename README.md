# yurun-crawler-example

## 介绍

宇润爬虫框架(Yurun Crawler) 是一个低代码、高性能、分布式爬虫采集框架，这可能是最一把梭的爬虫框架。

Yurun Crawler 基于 imi 框架开发，运行在 Swoole 常驻内存的协程环境。

为什么会开发这个框架？遇上有爬虫相关需求，调研了一些市面上现有的 PHP 爬虫框架，甚至是其它语言的爬虫框架，功能都十分简陋，需要编写的重复代码极多，不够一把梭。

开发手册：<https://doc.yurunsoft.com/yurun-crawler/>

## 使用

* 安装包：`composer update`

* 导入数据表：`bin/run generate/table`

* 运行：`bin/run crawler/run -name YurunBlogCrawler`

**Chrome 采集 Demo：**

运行：`bin/run crawler/run -name YurunBlogChromeCrawler`

配置：`config/beans.php` -> `ChromeDownloader`

> 文档参考：<https://doc.yurunsoft.com/yurun-crawler/features/chromeHeadless.html>

> Demo 为了不给别人造成麻烦，是爬我自己的博客，请轻点哦。。。

## 联系我们

QQ 群：17916227 [![点击加群](https://pub.idqqimg.com/wpa/images/group.png "点击加群")](https://jq.qq.com/?_wv=1027&k=5wXf4Zq)

商业合作 QQ：369124067
