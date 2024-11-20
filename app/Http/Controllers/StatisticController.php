<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatisticRequest;
use App\Models\Statistic;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function update(StatisticRequest $request, Statistic $stats)
    {
        if ($stats) {
            $stats->update($request->validated());
            return redirect()->route('dashboard.homepage')
                             ->with('success', $stats->name . ' section updated successfully.');
        }

        return redirect()->route('dashboard.homepage')
                         ->with('error', 'Thsi stats section not found.');
    }
}
