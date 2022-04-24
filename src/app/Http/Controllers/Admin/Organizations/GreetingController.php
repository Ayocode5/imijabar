<?php

namespace App\Http\Controllers\Admin\Organizations;

use App\Http\Controllers\Controller;
use App\Models\Admin\CommitteeGreeting;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class GreetingController extends Controller
{

    private static $STORED_IMAGE_LOCATION;

    public function __construct()
    {
        $this->middleware('auth:web');
        self::setStoredImageLocation(public_path("uploads/"));
    }
    /**
     * @param string $STORED_IMAGE_LOCATION
     */
    public static function setStoredImageLocation(string $STORED_IMAGE_LOCATION): void
    {
        self::$STORED_IMAGE_LOCATION = $STORED_IMAGE_LOCATION;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', CommitteeGreeting::class);

        $greetings = CommitteeGreeting::orderBy("order", "ASC")->get();
        return view("admin.organizations.greeting.index", compact("greetings"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', CommitteeGreeting::class);

        return view("admin.organizations.greeting.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->authorize('create', CommitteeGreeting::class);

        $request->validate([
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "order" => "required|numeric|min:0",
            "show" => "required|boolean"
        ]);

        /* Get the image file and rename it */
        $ext = $request->file('image')->getClientOriginalExtension();
        $fileName = 'greeting-' . Uuid::uuid4() . '.' . $ext;

        /* Store the image and its name */
        $request->file('image')->move(self::$STORED_IMAGE_LOCATION."greetings/", $fileName);

        /* Store Data */
        CommitteeGreeting::create([
            "image" => "greetings/".$fileName,
            "order" => $request->order,
            "show" => $request->show
        ]);

        return redirect()->route('admin.organizations.greeting.index')->with('success', 'Greeting is added successfully!');
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
        $this->authorize('update', CommitteeGreeting::class);

        $greeting = CommitteeGreeting::find($id);
        return view("admin.organizations.greeting.edit", compact("greeting"));
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
        $this->authorize('update', CommitteeGreeting::class);

        $greeting = CommitteeGreeting::find($id);
        $new_data = $request->only($greeting->getFillable());

        /* Validate Input */
        $request->validate([
            "image" => "image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "order" => "required|numeric|min:0",
            "show" => "required|boolean"
        ]);

        if ($request->hasFile('image')) {
            if(!empty($greeting->image) && file_exists(self::$STORED_IMAGE_LOCATION . $greeting->image)) {
                /* Unlink the old image if exists */
                unlink(self::$STORED_IMAGE_LOCATION . $greeting->image);
                /* Reformat the name of image */
                preg_match('/(greeting-)(.*).(jpg|png|jpeg|gif|svg)/', $greeting->image, $ads_image_format_split);
                $fileName = $ads_image_format_split[1] . $ads_image_format_split[2] . '.' . $request->file('image')->getClientOriginalExtension();
                /* Saving the image */
                $request->file('image')->move(self::$STORED_IMAGE_LOCATION."greetings/", $fileName);
                /* insert image name to the new_data */
                $new_data['image'] = "greetings/".$fileName;
            } else {
                /* Get the image file and rename it */
                $ext = $request->file('image')->getClientOriginalExtension();
                $fileName = 'greeting-' . Uuid::uuid4() . '.' . $ext;
                /* Store new Image */
                $request->file('image')->move(self::$STORED_IMAGE_LOCATION."greetings/", $fileName);
                /* insert image name to the new_data */
                $new_data['image'] = "greetings/".$fileName;
            }
        }

        $greeting->update($new_data);

        return redirect()->route('admin.organizations.greeting.index')->with('success', 'Greeting is updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->authorize('delete', CommitteeGreeting::class);

        $greeting = CommitteeGreeting::find($id);
        if(file_exists(self::$STORED_IMAGE_LOCATION.$greeting->image)) {
            unlink(self::$STORED_IMAGE_LOCATION.$greeting->image);
        }
        $greeting->delete();
        return redirect()->route('admin.organizations.greeting.index')->with('success', 'Greeting is deleted successfully!');
    }
}
