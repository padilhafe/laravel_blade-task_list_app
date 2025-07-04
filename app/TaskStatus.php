<?php

namespace App;

enum TaskStatus: string
{
    case PENDING = "pending";
    case DOING = "doing";
    case DONE = "done";

    public function label(): string
    {
        return match ($this) {
            self::PENDING => "Pending",
            self::DOING => "Doing",
            self::DONE => "Done",
        };
    }
}
