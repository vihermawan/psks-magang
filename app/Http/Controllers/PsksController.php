<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Psks;
use App\Diklat;
use App\KeluargaTerdamping;
use App\JenisPsks;
use App\Bdt;
use App\Bdt_art;
use App\User;
use Auth;
use Illuminate\Validation\Validator;
use DB;


class PsksController extends Controller {

        //SuperAdminController
        public function hakakses(){
            $users = DB::table('users')
                    ->select('users.*','user_role.*')
                    ->join('user_role','user_role.id_role','=','users.id_role')
                    ->get();
            return view('Admin.tabelhakakses',['users' => $users]);
        }

        public function edithakakses(Request $request){
            $c= User::find($_GET['id'])->get();
            $user_role = DB::table('user_role')->get();
            return view('Admin.edithakakses', ['c' => $c, 'user_role' => $user_role]);
        }

        public function updatehakakses(Request $request, $id){
            $c= User::find($id);
            $c->id_role = $request->id_role;
            $c->update();
            return redirect('tabelhakakses');
        }

        public function hapushakakses(Request $request, $id){
            $c= User::find($id);
            $c->delete();

            $c= Psks::find($c->NikPSKS);
            $c->delete();
            return redirect('tabelhakakses');
        }
    
        //admincontroller

        public function psks(){
            $psks = DB::table('psks')
                    ->select('psks.*','jenispsks.*')
                    ->join('jenispsks','jenispsks.KodeJenisPSKS','=','psks.KodeJenisPSKS')
                    ->get();
            $user = User::get();

            return view('Admin.tabeldatapsks',['psks' => $psks,'user' => $user]);
        }

        public function tambahpsks(Request $request){
            $c = new Psks();
            $c->NikPSKS = $request->NikPSKS;
            $c->NamaPSKS = $request->NamaPSKS;
            $c->NoHp = $request->NoHp;
            $c->email = $request->email;
            $c->Alamat = $request->Alamat;
            $c->AkunBank = $request->AkunBank;
            $c->NamaBank = $request->NamaBank;
            $c->NamaIbuKandung = $request->NamaIbuKandung;
            $c->PendidikanTertinggi = $request->PendidikanTertinggi;
            $c->NamaPendidikanTertinggi = $request->NamaPendidikanTertinggi;
            $c->Akreditasi = $request->Akreditasi;
            $c->KodeJenisPSKS = $request->KodeJenisPSKS;
            $c->NamaBupatiWalikota = $request->NamaBupatiWalikota;
            $c->NamaKadinsos = $request->NamaKadinsos;
            $c->Eselon4Kadinsos = $request->Eselon4Kadinsos;
            $c->NamaStaffSehariKadinsos = $request->NamaStaffSehariKadinsos;
            $c->StaffKadinsosNoHp = $request->StaffKadinsosNoHp;
            $c->StaffKadinsosEmail = $request->StaffKadinsosEmail;
            $c->NamaKepalaDesa = $request->NamaKepalaDesa;
            $c->KepalaDesaNoHp = $request->KepalaDesaNoHp;
            $c->KepalaDesaEmail = $request->KepalaDesaEmail;
            $c->NamaKetuaRW = $request->NamaKetuaRW;
            $c->KetuaRWNoHp = $request->KetuaRWNoHp;
            $c->KetuaRWEmail = $request->KetuaRWEmail;
            $c->NamaKetuaRT = $request->NamaKetuaRT;
            $c->KetuaRTNoHp = $request->KetuaRTNoHp;
            $c->KetuaRTEmail = $request->KetuaRTEmail;
            $c->NamaRekan = $request->NamaRekan;
            $c->RekanNoHp = $request->RekanNoHp;
            $c->RekanEmail = $request->RekanEmail;
            $c->RekanJenisPSKS = $request->RekanJenisPSKS;  
            $c->save();

            $d = new User();
            $d->NikPSKS = $request->NikPSKS;
            $d->NamaPSKS = $request->NamaPSKS;
            $d->email = $request->email;
            $d->password = Hash::make($request->password);
            $d->save();
            return redirect('tabeldatapsks')->with(['success' => 'Data PSKS berhasil ditambahkan']);
        }

        public function editpsks(Request $request){

            $p = Psks::get();
            $c= User::find($_GET['id'])->get();
            return view('Admin.editpsks', ['c' => $c, 'p' => $p]);
        }
        public function updatepsks(Request $request, $id){
            
            $d= User::find($id);
            $d->NamaPSKS = $request->NamaPSKS;
            $d->update();

            $c= Psks::find($d->NikPSKS);
            $c->NikPSKS = $request->NikPSKS;
            $c->NamaPSKS = $request->NamaPSKS;
            $c->NoHp = $request->NoHp;
            $c->email = $request->email;
            $c->Alamat = $request->Alamat;
            $c->AkunBank = $request->AkunBank;
            $c->NamaBank = $request->NamaBank;
            $c->NamaIbuKandung = $request->NamaIbuKandung;
            $c->PendidikanTertinggi = $request->PendidikanTertinggi;
            $c->NamaPendidikanTertinggi = $request->NamaPendidikanTertinggi;
            $c->Akreditasi = $request->Akreditasi;
            $c->KodeJenisPSKS = $request->KodeJenisPSKS;
            $c->NamaBupatiWalikota = $request->NamaBupatiWalikota;
            $c->NamaKadinsos = $request->NamaKadinsos;
            $c->Eselon4Kadinsos = $request->Eselon4Kadinsos;
            $c->NamaStaffSehariKadinsos = $request->NamaStaffSehariKadinsos;
            $c->StaffKadinsosNoHp = $request->StaffKadinsosNoHp;
            $c->StaffKadinsosEmail = $request->StaffKadinsosEmail;
            $c->NamaKepalaDesa = $request->NamaKepalaDesa;
            $c->KepalaDesaNoHp = $request->KepalaDesaNoHp;
            $c->KepalaDesaEmail = $request->KepalaDesaEmail;
            $c->NamaKetuaRW = $request->NamaKetuaRW;
            $c->KetuaRWNoHp = $request->KetuaRWNoHp;
            $c->KetuaRWEmail = $request->KetuaRWEmail;
            $c->NamaKetuaRT = $request->NamaKetuaRT;
            $c->KetuaRTNoHp = $request->KetuaRTNoHp;
            $c->KetuaRTEmail = $request->KetuaRTEmail;
            $c->NamaRekan = $request->NamaRekan;
            $c->RekanNoHp = $request->RekanNoHp;
            $c->RekanEmail = $request->RekanEmail;
            $c->RekanJenisPSKS = $request->RekanJenisPSKS;
            $c->update();

            return redirect('tabeldatapsks')->with(['edit' => 'Data PSKS berhasil diedit']);
            
        }

        public function hapusPsks(Request $request, $id){
            $c=User::find($id);
            $c->delete();

            $c=Psks::find($c->NikPSKS);
            $c->delete();
    
            return redirect('tabeldatapsks')->with(['delete' => 'Data PSKS berhasil dihapus']);
        }

        public function tambahjenispsks(Request $request){
            $c= new JenisPsks();
            $c->KodeJenisPSKS = $request->KodeJenisPSKS;
            $c->ProfesiPSKS = $request->ProfesiPSKS;
            $c->save();
            return redirect('tabeljenispsks');
        }

        public function editjenispsks(Request $request){
            $c= JenisPsks::find($_GET['KodeJenisPSKS'])->get();
            return view('Admin.editjenispsks', ['c' => $c]);
        }

        public function updatejenispsks(Request $request, $KodeJenisPSKS){
            $c= JenisPsks::find($KodeJenisPSKS);
            $c->ProfesiPSKS = $request->ProfesiPSKS;
            $c->update();
            return redirect('tabeljenispsks');
        }

        public function jenispsks(){
            $jenispsks = DB::table('jenispsks')
                    ->select('jenispsks.*')
                    ->get();
            return view('Admin.tabeljenispsks',['jenispsks' => $jenispsks]);
        }

        public function hapusJenisPsks(Request $request, $KodeJenisPSKS){
            $c = JenisPsks::find($KodeJenisPSKS);
            $c->delete();
    
            return redirect('tabeljenispsks');
        }

        public function admindiklat(){
            $diklat= DB::table('diklat')
                   ->select('diklat.*','psks.*')
                   ->join('psks','psks.NikPSKS','=','diklat.NikPsks')
                   ->get();
            return view('Admin.tabeladmindiklat',['diklat' => $diklat]);
        }

        public function adminkeluargaterdamping(){
            $keluargaterdamping= DB::table('keluarga_terdamping')
                   ->select('keluarga_terdamping.*','psks.*')
                   ->join('psks','psks.NikPSKS','=', 'keluarga_terdamping.NikPSKS')
                   ->get();
            return view('Admin.tabeladminkeluargaterdamping',['keluargaterdamping' => $keluargaterdamping]);
        }

        public function admindashboard(Request $request){
            $keluargaterdamping=KeluargaTerdamping::select(DB::raw('NikPSKS,count(NikPSKS) as total'))
                                ->groupby('NikPSKS')
                                ->orderby('NikPSKS','desc')
                                ->get();
            $diklat=Diklat::select(DB::raw('NikPSKS, count(NikPSKS) as total'))
                    ->groupby('NikPSKS')
                    ->orderby('NikPSKS','desc')
                    ->get();
            $psks = DB::table('psks')
                   ->select('psks.*','jenispsks.*')
                   ->join('jenispsks','jenispsks.KodeJenisPSKS','=','psks.KodeJenisPSKS')
                   ->get();
         


           

            //menampilkan data chart
            $categories = [];
            $datadiklat = [];
            $datakeluargaterdamping = [];
            foreach($psks as $p){
                $categories[] = $p->NamaPSKS;
            }
            foreach($diklat as $d){
                $datadiklat[] = $d->total;
            }
            foreach($keluargaterdamping as $k){
                $datakeluargaterdamping[] = $k->total;
            }

            // dd($datadiklat);

            return view('Admin.dashboard',['psks' => $psks,'diklat' => $diklat,'datakeluargaterdamping' => $datakeluargaterdamping,'categories'=> $categories, 'datadiklat'=>$datadiklat]);
        }

        //endadmincontroller

        //usercontroller

        public function identitaspsks(){
            $psks= DB::table('psks')
                   ->select('psks.*')
                   ->get();
            $jenispsks = DB::table('jenispsks')->get();

            return view('User.identitaspsks',['psks' => $psks,'jenispsks'=>$jenispsks]);
        }
        
        public function editidentitas(Request $request){
            
            $c= Psks::find(Auth::user()->NikPSKS);
            $c->NamaPSKS = $request->NamaPSKS;
            $c->NoHp = $request->NoHp;
            $c->email = $request->email;
            $c->Alamat = $request->Alamat;
            $c->AkunBank = $request->AkunBank;
            $c->NamaBank = $request->NamaBank;
            $c->NamaIbuKandung = $request->NamaIbuKandung;
            $c->PendidikanTertinggi = $request->PendidikanTertinggi;
            $c->NamaPendidikanTertinggi = $request->NamaPendidikanTertinggi;
            $c->Akreditasi = $request->Akreditasi;
            $c->KodeJenisPSKS = $request->KodeJenisPSKS;
            $c->NamaBupatiWalikota = $request->NamaBupatiWalikota;
            $c->NamaKadinsos = $request->NamaKadinsos;
            $c->Eselon4Kadinsos = $request->Eselon4Kadinsos;
            $c->NamaStaffSehariKadinsos = $request->NamaStaffSehariKadinsos;
            $c->StaffKadinsosNoHp = $request->StaffKadinsosNoHp;
            $c->StaffKadinsosEmail = $request->StaffKadinsosEmail;
            $c->NamaKepalaDesa = $request->NamaKepalaDesa;
            $c->KepalaDesaNoHp = $request->KepalaDesaNoHp;
            $c->KepalaDesaEmail = $request->KepalaDesaEmail;
            $c->NamaKetuaRW = $request->NamaKetuaRW;
            $c->KetuaRWNoHp = $request->KetuaRWNoHp;
            $c->KetuaRWEmail = $request->KetuaRWEmail;
            $c->NamaKetuaRT = $request->NamaKetuaRT;
            $c->KetuaRTNoHp = $request->KetuaRTNoHp;
            $c->KetuaRTEmail = $request->KetuaRTEmail;
            $c->NamaRekan = $request->NamaRekan;
            $c->RekanNoHp = $request->RekanNoHp;
            $c->RekanEmail = $request->RekanEmail;
            $c->RekanJenisPSKS = $request->RekanJenisPSKS;  
            $c->update();

            $d= User::find(Auth::user()->id);
            $d->NamaPSKS = $request->NamaPSKS;
            $d->update();
            return redirect('dashboard');
        }

        public function diklat(){
            $diklat= DB::table('diklat')
                   ->select('diklat.*')
                   ->get();
            return view('User.tabeldiklat',['diklat' => $diklat]);
        }

        public function editdiklat(Request $request){
            $c= Diklat::find($_GET['KodeDiklat'])->get();
            return view('User.editdiklat', ['c' => $c]);
        }

        public function updatediklat(Request $request, $KodeDiklat){
            $c= Diklat::find($KodeDiklat);
            $c->JenisDiklat = $request->JenisDiklat;
            $c->NamaDiklat = $request->NamaDiklat;
            $c->NomorSertifikat = $request->NomorSertifikat;
            if($request->file('gambar') == "")
            {
                $c->gambar = $c->gambar;
            } 
            else
            {
                $file       = $request->file('gambar');
                $fileName   = $file->getClientOriginalName();
                $request->file('gambar')->move("image/", $fileName);
                $c->gambar = $fileName;
            }
            $c->TanggalMulai = $request->TanggalMulai;
            $c->TanggalSelesai = $request->TanggalSelesai;
            $c->Penyelenggara = $request->Penyelenggara;
            $c->Tingkat = $request->Tingkat;

           

            $c->update();
            return redirect('tabeldiklat')->with(['edit' => 'Data diklat berhasil diedit']);
        }

        public function tambahdiklat(Request $request){

            $this -> validate($request, [
                'JenisDiklat'=> 'required',
                'NamaDiklat' => 'required',
                'gambar' => 'required|file|max:2000',
                'NomorSertifikat' => 'required',
                'TanggalMulai' => 'required|date',
                'TanggalSelesai' => 'required|date|after:TanggalMulai',
                'Penyelenggara' => 'required',
                'Tingkat' => 'required',
            ]);

            $diklat = DB::table('diklat')->get();

            $maxID = 0;
            
            foreach ($diklat as $data) {

                $id= substr($data->KodeDiklat,3);
                if($id > $maxID){
                    $maxID=$id;
                }
            }
            $maxID+=1;

            $kode = str_pad('K',3,"0");
           

            $c= new Diklat();
            $c->KodeDiklat = $kode.$maxID;
            $c->NikPSKS = Auth::user()->NikPSKS;
            $c->JenisDiklat = $request->JenisDiklat;
            $c->NamaDiklat = $request->NamaDiklat;
            $file = $request->file('gambar');
            $fileName = $file->getClientOriginalName();
            $request->file('gambar')->move("image/",$fileName);

            $c->gambar = $fileName;
            $c->NomorSertifikat = $request->NomorSertifikat;
            $c->TanggalMulai = $request->TanggalMulai;
            $c->TanggalSelesai = $request->TanggalSelesai;
            $c->Penyelenggara = $request->Penyelenggara;
            $c->Tingkat = $request->Tingkat;
            
            $c->save();
          
            return redirect('tabeldiklat')->with(['success' => 'Data diklat berhasil ditambahkan']);
        }

        public function hapusDiklat(Request $request, $KodeDiklat){
            $c = Diklat::find($KodeDiklat);
            $c->delete();
    
            return redirect('tabeldiklat')->with(['delete' => 'Data diklat berhasil dihapus']);
        }


        public function keluargaterdamping(){
            $keluargaterdamping= DB::table('keluarga_terdamping')
                   ->select('keluarga_terdamping.*')
                   ->get();
            return view('User.tabelkeluargaterdamping',['keluargaterdamping' => $keluargaterdamping]);
        }
        
        public function inputkeluargaterdamping(Request $request){
            $kodepro = DB::table('m_program')->get();
            if(!empty($request->NMPROP)){
                $o = DB::table('vektorwilayah')->where('NMPROP', $request->NMPROP)->where('NMKAB', $request->NMKAB)->where('NMKEC', $request->NMKEC)->where('NMDESA', $request->NMDESA)->first();

                $bdt = DB::table('bdt_art_51')->where('KDGabungan4', $o->KDGabungan4)->get();
            } else {
                $bdt = null;
            }
            $country_list = DB::table('vektorwilayah')
            ->groupBy('KDPROP')
            ->get();

            $bdt_rt = DB::table('bdt_rt_51')->get();

            return view('User.inputkeluargaterdamping')
            ->with('bdt' , $bdt)
            ->with('bdt_rt' , $bdt_rt)
            ->with('kodepro', $kodepro)
            ->with('country_list', $country_list);
        }
        
        public function fetch(Request $request){

        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');

        $data = DB::table('vektorwilayah')
        ->groupBy($dependent)
        ->where($select, $value)
        ->get();
        
        $output = '<option value="">--'.'Select '.ucfirst($dependent).'--'.'</option>';
        foreach($data as $row){
            $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
        }
         echo $output;
        }

        public function prosesAll(Request $request, $IDBDT){
            $c = DB::table('bdt_art_51')->where('IDBDT',$IDBDT)->get();;
         
            $keluargaterdamping = DB::table('keluarga_terdamping')->get();

            $b = DB::table('bdt_rt_51')->get();
           
            $maxID = 0;
           
            foreach ($keluargaterdamping as $data) {

                $id= substr($data->KodeKeluarga,3);
                if($id > $maxID){
                    $maxID=$id;
                }
               
            }
            
            foreach($c as $data){
                $maxID+=1;
                $kode = str_pad('KT',4,"0");
                $d= new KeluargaTerdamping();
                $d->KodeKeluarga = $kode.$maxID;
                $d->NikPSKS = Auth::user()->NikPSKS;
                $d->IDBDT  = $data->IDBDT;
                $d->NomorKK  = $data->NoKK;
                foreach($b as $key){
                    if($key->IDBDT == $data->IDBDT){
                        $d->NamaKepalaKeluarga = $key->Nama_KRT;
                        $d->Alamat = $key->Alamat;
                        $d->NikKeluarga  = $key->NIK;
                    }
                }
                
                $d->save();  
            }
            return redirect('tabelkeluargaterdamping')->with(['success' => 'Data Keluarga Terdamping berhasil ditambahkan']);
        }
        

        public function editkeluargaterdamping(Request $request){
            $c= KeluargaTerdamping::find($_GET['KodeKeluarga'])->get();
            return view('User.editkeluargaterdamping', ['c' => $c]);
        }

        public function updatekeluargaterdamping(Request $request, $KodeKeluarga){
            $c= KeluargaTerdamping::find($KodeKeluarga);
            $c->NamaKepalaKeluarga = $request->NamaKepalaKeluarga;
            $c->NikKeluarga  = $request->NikKeluarga ;
            $c->Alamat = $request->Alamat;
            $c->kode_program = $request->kode_program;
            $c->update();
            return redirect('tabelkeluargaterdamping')->with(['edit' => 'Data Keluarga Terdamping berhasil diedit']);;
        }

        public function hapusKeluargaTerdamping(Request $request, $KodeKeluarga){
            $c = KeluargaTerdamping::find($KodeKeluarga);
            $c->delete();
    
            return redirect('tabelkeluargaterdamping')->with(['delete' => 'Data Keluarga Terdamping berhasil dihapus']);;
        }

        public function detailKeluarga(Request $request){
            $data=Bdt_art::find($_GET['IDARTBDT'])->get();

            $bdt_rt = Bdt::get();

            return view('User.detailkeluarga',['data'=> $data])->with('bdt_rt', $bdt_rt);
        }

        public function dashboard(Request $request){
            $program = DB::table('keluarga_terdamping')
                       ->select('keluarga_terdamping.*','m_program.*')
                       ->join('m_program','m_program.kode_program','=','keluarga_terdamping.kode_program')
                       ->get();
           

            //menampilkan data chart
            $categories = [];
            foreach($program as $pro){
                $categories[] = $pro->nm_program;
            }
            dd($categories);

            return view('dashboard',['program' => $program]);
        }

            //endusercontroller
}


