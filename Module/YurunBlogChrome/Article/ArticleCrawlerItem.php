<?php
namespace Yurun\CrawlerApp\Module\YurunBlogChrome\Article;

use Imi\Bean\Annotation\Bean;
use Yurun\Crawler\Module\Crawler\Annotation\Parser;
use Yurun\Crawler\Module\Crawler\Annotation\Processor;
use Yurun\Crawler\Module\Crawler\Annotation\Downloader;
use Yurun\Crawler\Module\Crawler\Annotation\CrawlerItem;
use Yurun\Crawler\Module\Crawler\Contract\BaseCrawlerItem;
use Yurun\Crawler\Module\Processor\Annotation\ModelStorage;

/**
 * 文章内容采集
 * @Bean("YurunBlogChromeArticleCrawlerItem")
 * @CrawlerItem("YurunBlogChromeCrawler")
 * @Downloader(limit=3, class="ChromeDownloader")
 * @Parser(\Yurun\CrawlerApp\Module\YurunBlogChrome\Article\Model\ArticleModel::class)
 * @Processor({"YurunBlogChromeArticleProcessor", "ModelStorageProcessor"})
 * @ModelStorage(model=\Yurun\CrawlerApp\Module\YurunBlog\Model\Article::class, uniqueFields={"title"})
 */
class ArticleCrawlerItem extends BaseCrawlerItem
{
    
}
