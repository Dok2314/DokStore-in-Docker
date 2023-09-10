<?php

namespace App\DTO\Admin\Cars;

class DTO
{
    public function __construct(
        private int $mark,
        private int $model,
        private string $condition,
        private string $type,
        private string $color,
        private int $year,
        private int $price,
    ) {}

    public function setMark($mark): void
    {
        $this->mark = $mark;
    }

    public function setModel($model): void
    {
        $this->model = $model;
    }

    public function setCondition($condition): void
    {
        $this->condition = $condition;
    }

    public function setType($type): void
    {
        $this->type = $type;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }
    public function setYear($year): void
    {
        $this->year = $year;
    }
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getMark(): int
    {
        return $this->mark;
    }

    public function getModel(): int
    {
        return $this->model;
    }

    public function getCondition(): string
    {
        return $this->condition;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getColor(): string
    {
        return $this->color;
    }
    public function getYear(): int
    {
        return $this->year;
    }
    public function getPrice(): int
    {
        return $this->price;
    }
}
