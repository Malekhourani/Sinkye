<?php


namespace App\Repository;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Repository implements IRepository
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function store(Request $request, array $rules) : ?Model
    {
        return $this->queryBuilder()
            ->create((array) $request->input());
    }

    public function update(Request $request, int $id) : ?Model
    {
        $object = $this->show($id);

        if ($object == null) return null;

        $updatedColumn = $this->queryBuilder()
                              ->update((array) $request->input());

        if ($updatedColumn == 0) return null;

        return $this->show($id);
    }

    public function destroy(int $id) : int
    {
        return $this->queryBuilder()->delete();
    }

    public function show(int $id, array $columns = ['*']) : ?Model
    {
        return $this->queryBuilder()
                    ->find($id, $columns);
    }

    protected function queryBuilder(): Builder
    {
        return $this->model->newQuery();
    }
}
