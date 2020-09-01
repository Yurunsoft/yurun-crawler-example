<?php
namespace Yurun\CrawlerApp\Module\YurunBlogChrome;

use Imi\Bean\Annotation\Bean;
use Imi\Cron\Consts\CronTaskType;
use Imi\Log\Log;
use Yurun\Crawler\Module\Crawler\Annotation\Crawler;
use Yurun\Crawler\Module\Crawler\Contract\BaseCrawler;
use Yurun\Crawler\Module\Crawler\Annotation\CrawlerCron;

/**
 * 宇润博客采集爬虫-Chrome
 * @Bean("YurunBlogChromeCrawler")
 * @Crawler(waitComplete=true)
 * @CrawlerCron(hour="12n", force=true)
 */
class YurunBlogChromeCrawler extends BaseCrawler
{
    /**
     * 开始操作，一般做一些初始化操作
     * 
     * 子类中覆盖实现
     *
     * @return void
     */
    protected function __start()
    {
        // 初始下载任务分配
        Log::info('YurunBlogChromeCrawler start');
    }

    /**
     * 运行爬取任务
     * 
     * 子类中覆盖实现
     *
     * @return void
     */
    protected function __run()
    {
        Log::info('YurunBlogChromeCrawler run');
        $this->pushDownloadMessage('YurunBlogChromeArticleListCrawlerItem', 'https://blog.yurunsoft.com/');
        Log::info('pushed');
    }

}
