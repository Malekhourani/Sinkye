<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface IRepository
{
    public function all();

    public function store(Request $request, array $rules) : ?Model;

    public function update(Request $request, int $id) : ?Model;

    public function show(int $id, array $columns = ['*']): ?Model;

    public function destroy(int $id): int;
}
