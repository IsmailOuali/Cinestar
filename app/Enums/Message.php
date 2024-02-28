<?php

namespace App\Enums;

enum Message: string
{
    case DELETE = "deleted";
    case UPDATE = "updated";

    public function header(): array
    {
        return match($this){
            Message::DELETE => [
                "the schedule you have pick has been deleted",
            ],
            Message::UPDATE => [
              "there is some updates in the schedule you pick"
            ],
        };
    }
    public function body(): array
    {
        return match($this){
            Message::DELETE => [
                "the schedule you have pick has been deleted the schedule you have pick has been deletedthe schedule you have pick has been deleted",
            ],
            Message::UPDATE => [
                " the schedule you have pick has been deletedthe schedule you have pick has been deletedthe schedule you have pick has been deletedthe schedule you have pick has been deleted"
            ],
        };
    }
}
