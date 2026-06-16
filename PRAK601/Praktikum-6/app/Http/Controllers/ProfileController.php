<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\Experience;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = new Profile();
        $name = $profile->name();
        $NIM = $profile->NIM();
        $prodi = $profile->prodi();
        $hobi = $profile->hobi();
        $skill = $profile->skill();

        $experience = new Experience();
        $experiencescards = $experience->getExperiences();
        return view('profile', compact('name', 'NIM', 'prodi', 'hobi', 'skill', 'experiencescards'));
    }
}