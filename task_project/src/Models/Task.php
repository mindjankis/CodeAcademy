<?php

declare(strict_types=1);

namespace Mindaugas\TaskProject\Models;

class Task
{
    public function __construct(
        private int $id,
        private string $created_at,
        private string $updated_at,
        private string $name,
        private string $description,
        private string $status,
        private bool $active=true
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): void
    {
        $this->active = $active;
    }
}
