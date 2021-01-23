<?php 

    namespace App\Repository;

    use Illuminate\Http\Request;

    interface IRepository
    {
        public function all();

        public function store(Request $request, array $rules);

        public function update(Request $request, int $id);

        public function read(int $id);

        public function destroy(int $id);
    }