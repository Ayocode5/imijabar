<?php

namespace Tests\Feature\Repository\Registration;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\UploadedFile;
use App\Models\User;
use App\Models\Admin\Registration\KISRegistration;
use Tests\TestCase;

class KISRegistrationTest extends TestCase
{
    use WithFaker;
    use WithoutMiddleware;

    protected $kisRegistrationRepository;

    public function setUp(): void
    {
        parent::setUp();

        $this->kisRegistrationRepository = $this->app->make("App\Repository\Registration\KISRegistrationRepository");
    }

    /**
     * A basic feature test example.
     * 
     * @return void
     */
    public function test_register_new_kis_using_valid_data(): void
    {
        $this->withoutExceptionHandling();

        $response = $this->withSession(['banned' => false])->post(
            route('kis.registration.store'), [
            "q301_email" => $this->faker->safeEmail,
            "q30_nomorKartu" => strval(rand(10000,99999)),
            "q44_dikeluarkanDi" => $this->faker->city(),
            "q34_nomorPasport" => strval(rand(10000,99999)),
            "q19_namaLengkap" => $this->faker->name(),
            "q23_tempatTanggal" => "Jakarta, 10/19/2002",
            "q22_jenisKelamin" => "L",
            "q24_golonganDarah" => "A+",
            "q29_pendidikan" => "SD",
            "q37_alamat" => [
                "addr_line1" => $this->faker->streetAddress(),
                "addr_line2" => $this->faker->address(),
                "city" => $this->faker->city(),
                "state" => $this->faker->country(),
                "postal" =>  $this->faker->countryCode()
            ],
            "q39_nomorHandphone" =>  strval(rand(10000,99999)),
            "q42_jenisSim" => "C",
            "q43_nomorSim" => strval(rand(10000,99999)),
            "q45_polda" => "Jakarta Barat",
            "q48_iuranAnggota" => "1",
            "q60_nomorKartu60" => strval(rand(10000,99999)),
            "q81_tandaTangan" => "data:image/jpeg;base64,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",
            "q73_uploadPas" => UploadedFile::fake()->image("pasphoto.png"), 
            "q77_uploadKartu" => UploadedFile::fake()->create(
                'document.pdf', 50, 'application/pdf'
            ),
            "q78_uploadSurat" => UploadedFile::fake()->create(
                'document.pdf', 50, 'application/pdf'
            ),
        ]);

        $response->assertOk();
    }

    public function test_cannot_register_new_kis_using_invalid_data(): void
    {
        $this->withoutExceptionHandling();

        $response = $this->withSession(['banned' => false])->post(
            route('kis.registration.store'), [
            "q301_email" => $this->faker->safeEmail,
            "q30_nomorKartu" => strval(rand(10000,99999)),
            "q44_dikeluarkanDi" => $this->faker->city(),
            "q34_nomorPasport" => rand(10000,99999), #INVALID INPUT
            "q19_namaLengkap" => $this->faker->name(),
            "q23_tempatTanggal" => "Jakarta, 10/19/2002",
            "q22_jenisKelamin" => "L",
            "q24_golonganDarah" => "A+",
            "q29_pendidikan" => "SD",
            "q37_alamat" => [
                "addr_line1" => $this->faker->streetAddress(),
                "addr_line2" => $this->faker->address(),
                "city" => $this->faker->city(),
                "state" => $this->faker->country(),
                "postal" =>  $this->faker->countryCode()
            ],
            "q39_nomorHandphone" =>  strval(rand(10000,99999)),
            "q42_jenisSim" => "C",
            "q43_nomorSim" => strval(rand(10000,99999)),
            "q45_polda" => "Jakarta Barat",
            "q48_iuranAnggota" => "1",
            "q60_nomorKartu60" => strval(rand(10000,99999)),
            "q81_tandaTangan" => "data:image/jpeg;base64,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",
            "q73_uploadPas" => UploadedFile::fake()->image("pasphoto.png"), 
            "q77_uploadKartu" => UploadedFile::fake()->create(
                'document.pdf', 50, 'application/pdf'
            ),
            "q78_uploadSurat" => UploadedFile::fake()->create(
                'document.pdf', 50, 'application/pdf'
            ),
        ]);

        $response->assertRedirect("http://localhost");
    }

    /**
     * @return void
     */
    public function test_can_export_registered_kis(): void {

        $this->withoutExceptionHandling();

        $user = User::find(1);

        $data = KISRegistration::select('id')->orderBy('created_at', 'DESC')->first();

        $response = $this->actingAs($user, 'web')
        ->withSession(['banned' => false])
        ->get("admin/registration/kis/registrant/$data->id/export");
 
        $response->assertStatus(200);
    }


    /**
     * @return void
     */
    public function test_can_delete_registered_kis(): void {

        $data = KISRegistration::select('id')->orderBy('created_at', 'DESC')->first();

        $response = $this->kisRegistrationRepository->deleteData($data->id);

        $this->assertTrue($response);
    }
}
