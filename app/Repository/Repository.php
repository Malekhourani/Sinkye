<?php 


namespace App\Repository;

use Illuminate\Http\Request;

class Repository implements IRepository
{
    private $type;

    public function __construct($type) {
        $this->type = $type;
    }

    public function all()
    {
        return $this->type::all();
    }

    public function store(Request $request, array $rules)
    {
        $request->validate($rules);

        $obj = $this->type::create((array) $request->input());

        return $obj;
    }

    public function update(Request $request, int $id)
    {
        $obj = $this->type::where('id', $id)
                    ->update((array)$request->input());
        return $obj;
    }

    public function destroy(int $id)
    {
        $this->type::destroy($id);
    }

    public function read(int $id)
    {
        return $this->type::find($id);
    }
}
