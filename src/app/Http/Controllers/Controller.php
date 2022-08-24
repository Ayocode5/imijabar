<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $advertisementsFilePath;
    protected $committeeFilePath;
    protected $communitiesFilePath;
    protected $eventFilePath;
    protected $eventSportsFilePath;
    protected $eventSponsorsFilePath;
    protected $galleriesFilePath;
    protected $generalSettingsFilePath;
    protected $greetingsFilePath;
    protected $newsFilePath;
    protected $registrationsEoFilePath;
    protected $registrationsClubFilePath;
    protected $registrationsKisFilePath;
    protected $usersFilePath;

    public function __construct()
    {
        $this->advertisementsFilePath = public_path("uploads/advertisements/");
        $this->committeeFilePath = public_path("uploads/committee/");
        $this->communitiesFilePath = public_path("uploads/communities/");
        $this->eventFilePath = public_path("uploads/events/");
        $this->eventSportsFilePath = public_path("uploads/events/sports/");
        $this->eventSponsorsFilePath = public_path("uploads/events/sponsors/");
        $this->galleriesFilePath = public_path("uploads/galleries/");
        $this->generalSettingsFilePath = public_path("uploads/general_settings/");
        $this->greetingsFilePath = public_path("uploads/greetings/");
        $this->newsFilePath = public_path("uploads/news/");
        $this->registrationsClubFilePath = public_path("uploads/registrations/club/");
        $this->registrationsEoFilePath = public_path("uploads/registrations/eo/");
        $this->registrationsKisFilePath = public_path("uploads/registrations/kis/");
        $this->usersFilePath = public_path("uploads/users/");
    }

}
