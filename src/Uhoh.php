<?php

namespace TheCapybaRalph\LaravelUhoh;

use Illuminate\Support\Facades\File;
use TheCapybaRalph\LaravelUhoh\Events\IntegrityCheckFailed;
use TheCapybaRalph\LaravelUhoh\Events\IntegrityCheckPassed;

class Uhoh {

    public function __invoke() {
        return $this->run();
    }

    public function run() {

        $publicIndex = config('uhoh.index_file_path',  public_path('index.php'));

        if(! File::exists($publicIndex)) {
            event(new IntegrityCheckFailed("Index file not found at $publicIndex."));
            return false;
        }

        $checksum = hash("sha256", file_get_contents($publicIndex));

        if(!in_array($checksum, $this->getChecksums())) {
            event(new IntegrityCheckFailed("Index file checksum mismatch"));
            return false;
        }

        event(new IntegrityCheckPassed);

        return true;
    }

    protected function getChecksums(): array {
        if(!empty($checksums = config('uhoh.checksums'))) {
            return $checksums;
        }

        return [];
    }
}
