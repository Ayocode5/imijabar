<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Advertisement;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class AdvertisementController extends Controller
{
    private static $ADS_IMAGE_LOCATION;

    public function __construct()
    {
        $this->middleware("auth:web");
        self::setAdsImageLocation(public_path('uploads/advertisements/'));
    }

    /**
     * @param string $ADS_IMAGE_LOCATION
     */
    public static function setAdsImageLocation(string $ADS_IMAGE_LOCATION): void
    {
        self::$ADS_IMAGE_LOCATION = $ADS_IMAGE_LOCATION;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize("viewAny", Advertisement::class);
        $advertisements = Advertisement::orderBy("order", "ASC")->get();
        return view("admin.advertisement.index", compact("advertisements"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("create", Advertisement::class);

        return view("admin.advertisement.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->authorize("create", Advertisement::class);

        $request->validate([
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "redirect_url" => "string|max:2000",
            "order" => "required|numeric|min:0",
            "show" => "required|boolean"
        ]);

        /*
         * Get the image file and rename it
         * */
        $ext = $request->file('image')->getClientOriginalExtension();
        $fileName = 'ads-' . Uuid::uuid4() . '.' . $ext;

        /*
         * Store the image and its name
         * */
        $request->file('image')->move(self::$ADS_IMAGE_LOCATION, $fileName);

        Advertisement::create([
            "image" => $fileName,
            "redirect_url" => $request->redirect_url,
            "order" => $request->order,
            "show" => $request->show
        ]);

        return redirect()->route('admin.advertisement.index')->with('success', 'Ads is added successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize("update", Advertisement::class);

        $ads = Advertisement::findOrFail($id);
        return view('admin.advertisement.edit', compact('ads'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->authorize("update", Advertisement::class);

        $ads = Advertisement::find($id);
        $new_data = $request->only($ads->getFillable());

        /* Validate Input */
        $request->validate([
            "image" => "image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "redirect_url" => "string|max:2000",
            "order" => "required|numeric|min:0",
            "show" => "required|boolean"
        ]);

        if ($request->hasFile('image')) {
            if(!empty($ads->image) && file_exists(self::$ADS_IMAGE_LOCATION . $ads->image)) {
                /* Unlink the old image if exists */
                unlink(self::$ADS_IMAGE_LOCATION . $ads->image);
                /* Reformat the name of image */
                preg_match('/(ads-)(.*).(jpg|png|jpeg|gif|svg)/', $ads->image, $ads_image_format_split);
                $fileName = $ads_image_format_split[1] . $ads_image_format_split[2] . '.' . $request->file('image')->getClientOriginalExtension();
                /* Saving the image */
                $request->file('image')->move(self::$ADS_IMAGE_LOCATION, $fileName);
                /* insert image name to the new_data */
                $new_data['image'] = $fileName;
            } else {
                /* Get the image file and rename it */
                $ext = $request->file('image')->getClientOriginalExtension();
                $fileName = 'ads-' . Uuid::uuid4() . '.' . $ext;
                /* Store new Image */
                $request->file('image')->move(self::$ADS_IMAGE_LOCATION, $fileName);
                /* insert image name to the new_data */
                $new_data['image'] = $fileName;
            }
        }

        $ads->update($new_data);

        return redirect()->route('admin.advertisement.index')->with('success', 'Ads is updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->authorize("delete", Advertisement::class);

        $ads = Advertisement::find($id);
        if(file_exists(self::$ADS_IMAGE_LOCATION.$ads->image)) unlink(self::$ADS_IMAGE_LOCATION.$ads->image);
        $ads->delete();

        return redirect()->route('admin.advertisement.index')->with('success', 'Ads is deleted successfully!');

    }
}
