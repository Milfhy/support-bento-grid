<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CallController extends Controller
{
    public function save(Request $request)
    {
        // Validate request inputs if needed
        $request->validate([
            'csubject' => 'required|string',
            'cdate' => 'required|date',
        ]);

        // Get authenticated user ID
        $uid = Auth::id();

        // Retrieve inputs from the request
        $csubject = $request->input('csubject');
        $cdate = $request->input('cdate');

        // Insert data into the sorder table
        DB::table('scall')->insert([
            'subject' => $csubject,
            'date' => $cdate,
            'uid' => $uid,
            'time' => now(), // Timestamp example
        ]);

        // Optionally, redirect back with a success message
        return redirect()->back()->with('success', 'Call saved successfully!');
    }
}
