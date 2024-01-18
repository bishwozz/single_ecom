<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use App\Models\Page;
use App\Models\Event;
use App\Models\Course;
use App\Models\Header;
use App\Models\Saying;
use App\Models\Slider;
use App\Models\AboutUs;
use App\Models\NewsNotice;
use Illuminate\Http\Request;
use App\Models\FooterAddress;
use App\Models\HumanResource;
use App\Models\MstDepartmentType;
use Illuminate\Routing\Controller;
use App\Base\Traits\HeaderFooterData;
use Illuminate\Support\Facades\Redirect;

class RegisterLoginController extends Controller
{
    use HeaderFooterData;

    public function login()
    {
        $this->data = [
        ];
        return view('frontend.login', $this->data);
    }

    public function registration()
    {
        $this->data = [
        ];
        return view('frontend.registration', $this->data);
    }


}
