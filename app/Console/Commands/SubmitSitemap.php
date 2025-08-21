<?php

namespace App\Console\Commands;

use Exception;
use Google\Client;
use Illuminate\Console\Command;

use Google\Service\SearchConsole;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class SubmitSitemap extends Command
{
    protected $signature = 'sitemap:submit'; // <-- เปลี่ยนกลับเป็นอันนี้จะสั้นกว่า
    protected $description = 'Submit sitemap to Google Search Console using .env configuration.';

    public function handle()
    {
            // เพิ่ม 4 บรรทัดนี้เข้าไป
        $this->info('--- DEBUGGING ENV VALUES ---');
        $this->line('GSC_SITE_URL: ' . env('GSC_SITE_URL'));
        $this->line('GSC_SITEMAP_URL: ' . env('GSC_SITEMAP_URL'));
        $this->line('GSC_SERVICE_ACCOUNT_KEY_PATH: ' . env('GSC_SERVICE_ACCOUNT_KEY_PATH'));

        $siteUrl = env('GSC_SITE_URL');
        $sitemapUrl = env('GSC_SITEMAP_URL');
        $keyPath = env('GSC_SERVICE_ACCOUNT_KEY_PATH');

        if (!$siteUrl || !$sitemapUrl || !$keyPath) {
            $this->error('❌ Please set GSC_SITE_URL, GSC_SITEMAP_URL, and GSC_SERVICE_ACCOUNT_KEY_PATH in .env file.');
            return 1;
        }

        $jsonKeyFile = storage_path($keyPath);

        if (!File::exists($jsonKeyFile)) {
            $this->error("❌ Service account key file not found at: {$jsonKeyFile}");
            return 1;
        }

        try {
            $client = new Client(); // <-- สร้าง Client ของ Google
            $client->setAuthConfig($jsonKeyFile);
            $client->addScope('https://www.googleapis.com/auth/webmasters');

            // สร้าง Service ของ Search Console ให้ถูกต้อง
            $service = new SearchConsole($client);

            $service->sitemaps->submit($siteUrl, $sitemapUrl);

            $this->info("✅ Sitemap submitted successfully: {$sitemapUrl}");
            Log::info("Sitemap submitted successfully: {$sitemapUrl}");
            return 0;

        } catch (Exception $e) {
            $this->error("❌ Error submitting sitemap: " . $e->getMessage());
            Log::error("Error submitting sitemap: " . $e->getMessage());
            return 1;
        }
    }
}