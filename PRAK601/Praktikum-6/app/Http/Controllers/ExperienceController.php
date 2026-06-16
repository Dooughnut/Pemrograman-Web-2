<?php

namespace App\Http\Controllers;
use App\Models\Experience;

use Illuminate\Support\Facades\Storage;

class ExperienceController extends Controller
{
    public function index()
    {
        return redirect()->route('experience.show', '01');
    }

    public function show($id)
    {
        $index = (int)$id - 1;
        $experienceModel = new Experience();
        $experiences = $experienceModel->getExperiences();

        if (!isset($experiences[$index])) {
            abort(404);
        }

        $experience = $experiences[$index];
        $formattedId = sprintf('%02d', (int)$id);

        $directory = 'Experience ' . (int)$id;
        $files = Storage::disk('public')->files($directory);

        $images = [];
        foreach ($files as $file) {
            $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                $images[] = asset('storage/' . $file);
            }
        }

        return view('experience', compact('experience', 'images', 'formattedId'));
    }
}