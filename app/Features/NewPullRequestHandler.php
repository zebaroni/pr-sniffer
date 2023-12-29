<?php

namespace App\Features;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class NewPullRequestHandler
{
    public function handle(array $data): void
    {
        $prNumber = $data["pull_request"]["number"];
        $repoName = $data["repository"]["name"];
        $repoOwner = $data["repository"]["owner"]["login"];

        $this->getChangedFiles($prNumber, $repoName, $repoOwner);
    }

    private function getChangedFiles(string $prNumber, string $repoName, string $repoOwner)
    {
        $res = Http::get("https://api.github.com/repos/{$repoOwner}/{$repoName}/pulls/{$prNumber}/files");
        $json = $res->json();

        Log::info($json);
    }

    private function getChangedFiles2(string $prNumber, string $repoName, string $repoOwner)
    {
        $res = Http::get("https://api.github.com/repos/{$repoOwner}/{$repoName}/pulls/{$prNumber}/files");
        $json = $res->json();

        Log::info($json);
    }

    private function getChangedFiles3(string $prNumber, string $repoName, string $repoOwner)
    {
        $res = Http::get("https://api.github.com/repos/{$repoOwner}/{$repoName}/pulls/{$prNumber}/files");
        $json = $res->json();
    }

    private function getChangedFiles4(string $prNumber, string $repoName, string $repoOwner)
    {
        $res = Http::get("https://api.github.com/repos/{$repoOwner}/{$repoName}/pulls/{$prNumber}/files");
        $json = $res->json();

        Log::info($json);
    }

    private function getChangedFiles5(string $prNumber, string $repoName, string $repoOwner)
    {
        $res = Http::get("https://api.github.com/repos/{$repoOwner}/{$repoName}/pulls/{$prNumber}/files");
        $json = $res->json();

        Log::info($json);
    }
}