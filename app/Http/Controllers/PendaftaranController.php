<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Storage;

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
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048' // Validasi foto
        ]);
// Simpan foto ke direktori 'public/uploads' dan dapatkan path-nya
// Simpan foto ke direktori 'public/uploads' dan dapatkan path-nya
if ($request->hasFile('foto')) {
    $path = $request->file('foto')->store('uploads', 'public');
    $validated['foto'] = $path;
}

        // Simpan data pendaftaran ke database
        Pendaftaran::create($validated);

        // Redirect ke halaman sukses
        return redirect()->route('pendaftaran.sukses');
    }

    public function index()
    {
        $pendaftaran = Pendaftaran::all(); // Mengambil semua data pendaftaran
        return view('pendaftaran_data', compact('pendaftaran'));
    }
}
