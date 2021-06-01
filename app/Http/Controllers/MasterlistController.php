<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masterlist;
class MasterlistController extends Controller
{
    public function simple_query()
    {
        //get all data
        $data=Masterlist::all();
        return dd($data);
    }
    public function select()
    {
        //select specefic column data
        $data=Masterlist::wheregender('name', 'age','id')->get();
        return dd($data);
    }
    public function find()
    {
        //get all data by its ID
        //pass the ID inside the find
        $data=Masterlist::find(4);

        return dd($data);
    }
    public function count()
    {
        //will show the number of results in the query
        $data=Masterlist::wheregender('female')->count();
        return dd($data);
    }
    public function avg()
    {
        //will get average of a column
        $data=Masterlist::avg('age');
        return dd($data);
    }
    public function exists()
    {
        //will show the number of results in the query
        $data=Masterlist::whereName('anna')->exists();

        return dd($data);
    }

}
