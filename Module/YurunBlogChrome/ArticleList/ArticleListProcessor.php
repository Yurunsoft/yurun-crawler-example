<?php
namespace Yurun\CrawlerApp\Module\YurunBlogChrome\ArticleList;

use Imi\App;
use Imi\Log\Log;
use Imi\Bean\Annotation\Bean;
use Yurun\Crawler\Module\Crawler\Contract\ICrawlerItem;
use Yurun\Crawler\Module\DataModel\Contract\IDataModel;
use Yurun\Crawler\Module\Processor\Contract\IProcessor;

/**
 * 文章列表处理器
 * @Bean("YurunBlogChromeArticleListProcessor")
 */
class ArticleListProcessor implements IProcessor
{
    /**
     * 处理数据模型
     *
     * @param \Yurun\Crawler\Module\Crawler\Contract\ICrawlerItem $crawlerItem
     * @param \Yurun\CrawlerApp\Module\YurunBlogChrome\ArticleList\Model\ArticleListModel $data
     * @return void
     */
    public function process(ICrawlerItem $crawlerItem, IDataModel $data)
    {
        Log::info('Article count:' . count($data->list));
        Log::info('next:' . $data->nextUrl);
        /** @var \Yurun\CrawlerApp\Module\YurunBlogChrome\YurunBlogChromeCrawler $yurunBlogCrawler */
        $yurunBlogCrawler = App::getBean('YurunBlogChromeCrawler');
        // 文章内容
        foreach($data->list as $item)
        {
            $url = $item->url;
            if('//' === substr($url, 0, 2))
            {
                $url = 'https:' . $url;
            }
            $yurunBlogCrawler->pushDownloadMessage('YurunBlogChromeArticleCrawlerItem', $url);
        }
        // 下一页
        if($data->nextUrl)
        {
            $url = $data->nextUrl;
            if('//' === substr($url, 0, 2))
            {
                $url = 'https:' . $url;
            }
            $yurunBlogCrawler->pushDownloadMessage('YurunBlogChromeArticleListCrawlerItem', $url);
        }
    }

}
