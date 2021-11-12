<?php

namespace App\ExportResources\Contact;

use App\Services\Account\Settings\ExportResource;

class Message extends ExportResource
{
    protected $columns = [
        'created_at',
        'updated_at',
    ];

    protected $properties = [
        'content',
        'written_at',
        'written_by_me',
    ];
}