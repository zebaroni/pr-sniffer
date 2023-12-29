<?php

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

        // test
        Log::info($json);
    }
}