<?php

namespace App\Repository\Communities;

use App\Models\Admin\Community;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Ramsey\Uuid\Uuid;

class CommunityRepository {

    private static $UPLOADED_FILE_PATH;
    private static $UPLOADED_FILE_BASE_PATH;

    public function __construct()
    {
        self::setUploadedFilePath("uploads/communities/");
        self::setUploadedFileBasePath(public_path());
    }

    private static function setUploadedFilePath(string $path): void {
        self::$UPLOADED_FILE_PATH = $path;
    }

    private static function getUploadedFilePath(): string {
        return self::$UPLOADED_FILE_PATH;
    }

    private static function setUploadedFileBasePath(string $path): void {
        self::$UPLOADED_FILE_BASE_PATH = $path;
    }

    private static function getUploadedFileBasePath(): string {
        return self::$UPLOADED_FILE_BASE_PATH;
    }

    public function storeData(Request $request) {

        $new_data = [
            "club_name" => $request->club_name,
            "leader" => $request->club_leader,
            "establishment_date" => Carbon::createFromFormat('Y/m/d', str_replace("-", "/", $request->establishment_date)),
            "social_media" => json_encode($request->socmed),
            "category" => $request->category,
            "image" => $this->saveUploadedFile($request->file("image"), 'community-' . Uuid::uuid4()),
            "address" => $request->address
        ];

        if(Community::create($new_data)) return true; return false;
    }

    public function updateData(Request $request, int $id) {

        $community = Community::find($id);

        $new_data = [
            "club_name" => $request->club_name,
            "leader" => $request->club_leader,
            "establishment_date" => Carbon::createFromFormat('Y/m/d', str_replace("-", "/", $request->establishment_date)),
            "social_media" => json_encode($request->socmed),
            "category" => $request->category,
            "image" => $community->image,
            "address" => $request->address
        ];

        if($request->hasFile("image")) {
            $new_data["image"] = $this->replaceUploadedFile($request->file("image"), $community->image, '/(community-)(.*).(jpg|png|jpeg|gif|svg)/');
        }

        if($community->update($new_data)) return true; return false;

    }

    public function deleteData(int $id) {

        $community = Community::find($id);

        if(file_exists(self::getUploadedFileBasePath() . $community->image)) {
            unlink(self::getUploadedFileBasePath() . $community->image);
        }

        return $community->delete();

    }

    public function saveUploadedFile(UploadedFile $file, string $fileName) {

        $fileName =  $fileName . '.' . $file->getClientOriginalExtension();

        $file->move(self::getUploadedFilePath(), $fileName);

        return "/" . self::getUploadedFilePath() . $fileName;
    }

    public function replaceUploadedFile(UploadedFile $file, $oldfile, string $regex) {

        if(file_exists(self::getUploadedFileBasePath() . $oldfile)) {

            /* Unlink the old image if exists */
            if(!is_dir(self::getUploadedFileBasePath() . $oldfile)) {
                unlink(self::getUploadedFileBasePath() . $oldfile);
            }

            /* Reformat image name */
            // preg_match($regex, $oldfile, $community_image_format_split);
            // $fileName = $community_image_format_split[1] . $community_image_format_split[2] . '.' . $file->getClientOriginalExtension();

            // /* Saving the image */
            // $file->move(self::getUploadedFilePath(), $fileName);

            // /* insert image name to the new_data */
            // return "/" . self::getUploadedFilePath() . $fileName;
            return $this->saveUploadedFile($file, 'community-' . Uuid::uuid4());

        } else {
            return $this->saveUploadedFile($file, 'community-' . Uuid::uuid4());
        }
    }
}
