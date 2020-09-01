<?php
namespace Yurun\CrawlerApp\Module\YurunBlogChrome\ArticleList;

use Imi\Bean\Annotation\Bean;
use Yurun\Crawler\Module\Crawler\Annotation\Parser;
use Yurun\Crawler\Module\Crawler\Annotation\Processor;
use Yurun\Crawler\Module\Crawler\Annotation\Downloader;
use Yurun\Crawler\Module\Crawler\Annotation\CrawlerItem;
use Yurun\Crawler\Module\Crawler\Contract\BaseCrawlerItem;

/**
 * 文章列表采集
 * @Bean("YurunBlogChromeArticleListCrawlerItem")
 * @CrawlerItem("YurunBlogChromeCrawler")
 * @Downloader(limit=3, class="ChromeDownloader")
 * @Parser(\Yurun\CrawlerApp\Module\YurunBlogChrome\ArticleList\Model\ArticleListModel::class)
 * @Processor("YurunBlogChromeArticleListProcessor")
 */
class ArticleListCrawlerItem extends BaseCrawlerItem
{
    
}
