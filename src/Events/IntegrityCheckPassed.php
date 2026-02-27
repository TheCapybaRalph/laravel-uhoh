<?php

namespace TheCapybaRalph\LaravelUhoh\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class IntegrityCheckPassed
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct() { }
}
