<?php
class Athlete
{
    public $athleteID;
    public $image;
    public $name;
    public $description;
    public $socialmedia;
    

    public function __construct($athleteID, $image, $name, $description, $socialmedia)
    {
        $this->athleteID = $athleteID;
        $this->image = $image;
        $this->name = $name;
        $this->description = $description;
        $this->socialmedia = $socialmedia;
    }

    public function generateAthleteCard()
    {
        return '
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 d-flex justify-content-center">
            <div class="card m-2">
                <img src="' . $this->image . '" alt="Placeholder Image" class="card-img-top">
                <div class="popover">' . $this->description . ' </div>
                <a href="' . $this->socialmedia . '">' . $this->name . '</a>
            </div>
        </div>
        ';
    }
}
