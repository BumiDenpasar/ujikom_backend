<?php

namespace App\Http\Controllers;

use App\Http\Requests\MajorRequest;
use App\Models\Major;
use Illuminate\Http\Request;
use Storage;

class MajorController extends Controller
{
    public function update(MajorRequest $request, Major $major)
    {
        try {
            $validated = $request->validated();
            
            if ($request->hasFile('img')) {
                if ($major->img && Storage::exists($major->img)) {
                    Storage::delete($major->img);
                }
                
                $imagePath = $request->file('img')->store('images', 'public');
                $fullPath = storage_path('app/public/' . $imagePath);
                $validated['img'] = '/storage/' . $imagePath;
            }
            
            $major->update($validated);
            
            return redirect()
                ->back()
                ->with('success', 'Major updated successfully.');
                
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Failed to update major: ' . $e->getMessage());
        }
    }

}
