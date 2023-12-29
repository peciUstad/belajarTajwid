<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Pegawai;

    class PegawaiControllers extends Controller{
        public function Pegawai(){
            $data=Pegawai::all();
            return view('Pegawai', compact('data'));
        }

        public function store(Request $request){
            $this->validate($request, [ 
                'nama' => 'required|min:4',
                'posisi' => 'required|min:3',
                'gaji' => 'required|integer|min:1000000'
                ]);
                
            $pegawai = new Pegawai;
            $pegawai->name = $request->nama;
            $pegawai->posisi = $request->posisi;
            $pegawai->gaji = $request->gaji;
            $pegawai->save();
            return redirect('/')->with('msg', 'Tambah data pegawe berhasil');
        }

        public function destroy($id){
            Pegawai::destroy($id);
            return redirect('/')->with('msg', 'Hapus data pegawe berhasil');
        }

        public function cari(Request $request){
            $query=request()->input('query');
            $data=Pegawai::where('name', 'like', '%'.$query.'%')->get();        
            return view('Pegawai', compact('data'));
        }
    }
?>
