<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stacks;

class StackController extends Controller
{
    // This feature will apply middleware to every single one!
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index(){
    // Get data from the database
    // Other conditions you can use with eloquent models
    // $stacks = Stacks::all();
    // $stacks = Stacks::orderBy('name', 'desc')->get(); //orders by desc
    // $stacks = Stacks::where('framework', 'React')->get(); // orders by specifics!
    $stacks = Stacks::latest()->get(); // gets by latest (will use later)
    

    // Pass that data into the view to then be used in dynamic data
    // Added name as a query parameter
    return view('stacks.index', [
        'stacks' => $stacks,
        'name' => request('name'),
        'age' => request('age'),
        ]);
    }

    // New Route for wildcard parameters
    // New route for stacks/{id} wildcard name to fetch the id
    // Take the id as a parameter into the function
    public function show($id){

    // Passing the data through for a single id
    // Will redirect to 404 if gets wrong id
    $stack = Stacks::findorFail($id);

    // Later on will use the $id variable to query the database   
    return view('stacks.show', ['stack' => $stack]);
    }


    // New page to add and create framework
    public function create(){
        return view('stacks.create');
    }


    // New action to store and save for the form to POST
    public function store(){

        // New instance and storing it in the variable to be used below
        $stack = new Stacks();

        $stack->name = request('name');
        $stack->framework = request('framework');
        $stack->language = request('language');
        $stack->features = request('features');

        $stack->save();
        
        return redirect('/')->with('mssg', 'Thanks for your information!.'); 
    }


    public function destroy($id){
        // Find or fail and pass in as a argument
        $stack = Stacks::findOrFail($id);
        $stack-> delete();

        return \redirect('/stacks');
    }
}
