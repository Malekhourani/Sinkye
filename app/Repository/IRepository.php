<?php 

    namespace App\Repository;

    use Illuminate\Http\Request;

    interface IRepository
    {
        public function all();

        public function store(Request $request);

        public function update(Request $request);

        public function read(int $id);

        public function destroy(int $id);
    }