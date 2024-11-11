<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'kampus' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat_domisili' => 'required|string|max:255',
            'nomor_whatsapp' => 'required|string|max:15',
            'berketurunan_selayar' => 'required|in:ya,tidak',
        ]);

        // Simpan data pendaftaran ke database atau ke tempat penyimpanan lain sesuai kebutuhan
        // Contoh penyimpanan ke database (jika ada model Pendaftaran)
        Pendaftaran::create($validated);

        // Redirect ke halaman sukses
        return redirect()->route('pendaftaran.sukses');
    }

    public function index()///////////////////////////////////////////////////////////
{
    $pendaftaran = Pendaftaran::all(); // Mengambil semua data pendaftaran/////////////////////////////////////////////
    return view('pendaftaran_data', compact('pendaftaran'));///////////////////////////////
}

}
