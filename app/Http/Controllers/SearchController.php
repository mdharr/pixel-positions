<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
//        $jobs = Job::where('title', 'like', '%'.request('q').'%')->get();

        $searchQuery = '%' . request('q') . '%';

        $jobs = Job::query()
            ->with('employer', 'tags')
            ->where('title', 'like', $searchQuery)
            ->orWhereHas('tags', function ($query) use ($searchQuery) {
                $query->where('name', 'like', $searchQuery);
            })
            ->orWhereHas('employer', function ($query) use ($searchQuery) {
                $query->where('name', 'like', $searchQuery);
            })
            ->distinct()
            ->get();

        return view('results', ['jobs' => $jobs]);
    }
}
