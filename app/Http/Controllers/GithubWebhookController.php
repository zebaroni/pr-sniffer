<?php

namespace App\Http\Controllers;

use App\Features\NewPullRequestHandler;
use Illuminate\Http\Request;

class GithubWebhookController extends Controller
{
    public function __construct(
        protected readonly NewPullRequestHandler $newPullRequestHandler
    ) {
    }

    public function processWebhook(Request $request)
    {
        $eventType = $request->get("action");

        if ($eventType === "opened") {
            $this->newPullRequestHandler->handle($request->all());
        }

        return response()->json(true);
    }
}
