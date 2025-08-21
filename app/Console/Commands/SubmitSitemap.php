<?php

namespace App\Console\Commands;

use Exception;
use Carbon\Carbon;
use Google\Client;

use App\Models\Test;
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
        // --- HARDCODED VALUES ---
        // ใส่ค่าของคุณลงไปตรงๆ ที่นี่
        $siteUrl = 'https://tidmor1.com/';
        $sitemapUrl = 'https://tidmor1.com/sitemap.xml';
        $keyPath = 'app/google/sitemap-key.json';
        // ------------------------

        $jsonKeyFile = storage_path($keyPath);

        // --- Validation: ตรวจสอบว่าไฟล์ JSON Key มีอยู่จริง ---
        if (!File::exists($jsonKeyFile)) {
            $this->error("❌ Service account key file not found at: {$jsonKeyFile}");
            return 1; // Exit with error
        }

        $this->info("Attempting to submit sitemap: {$sitemapUrl}");
        $this->info("For site: {$siteUrl}");

        try {
            $client = new Client();
            $client->setAuthConfig($jsonKeyFile);
            $client->addScope('https://www.googleapis.com/auth/webmasters');

            $service = new SearchConsole($client);

            // ส่ง Sitemap
            $service->sitemaps->submit($siteUrl, $sitemapUrl);

            $successMessage = "✅ Sitemap submitted successfully: {$sitemapUrl}";
            $this->info($successMessage);
            Log::info($successMessage);

            return 0; // Exit with success

        } catch (Exception $e) {
            $errorMessage = "❌ Error submitting sitemap: " . $e->getMessage();
            $this->error($errorMessage);
            Log::error($errorMessage, ['exception' => $e]);
            return 1; // Exit with error
        }
    }
}