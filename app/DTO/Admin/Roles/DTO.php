<?php

namespace App\DTO\Admin\Roles;

class DTO
{
    public function __construct(
        private string $name,
        private array $permissions,
    ) {}

    public function getPermissions(): array
    {
        return $this->permissions;
    }

    public function setPermissions(array $permissions): void
    {
        $this->permissions = $permissions;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
