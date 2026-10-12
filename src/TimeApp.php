<?php
namespace LabComposer;

use Carbon\Carbon;

class TimeApp {
    public function now() {
        return Carbon::now()->toDayDateTimeString();
    }
}
