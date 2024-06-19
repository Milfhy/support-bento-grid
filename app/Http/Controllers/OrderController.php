<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function save(Request $request)
    {
        // Validate request inputs if needed
        $request->validate([
            'osubject' => 'required|string',
            'odate' => 'required|date',
        ]);

        // Get authenticated user ID
        $uid = Auth::id();

        // Retrieve inputs from the request
        $osubject = $request->input('osubject');
        $odate = $request->input('odate');

        // Insert data into the sorder table
        DB::table('sorder')->insert([
            'subject' => $osubject,
            'date' => $odate,
            'uid' => $uid,
            'time' => now(), // Timestamp example
        ]);

        // Optionally, redirect back with a success message
        return redirect()->back()->with('success', 'Order saved successfully!');
    }
}
