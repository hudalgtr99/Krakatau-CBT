<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Bukuinduk extends CI_Controller { public function __construct() { goto EmowX; QJfcQ: goto gXM_Y; goto PapcO; xvcG5: $this->load->library(["\x64\141\164\141\164\x61\x62\x6c\x65\163", "\146\x6f\x72\x6d\137\x76\141\x6c\151\x64\141\164\151\157\x6e"]); goto ZXhHX; RVjBq: $this->load->model("\113\x65\x6c\x61\163\137\155\x6f\144\x65\154", "\153\145\x6c\141\x73"); goto X3piZ; DZgzb: if (!$this->ion_auth->logged_in()) { goto I8yOk; } goto pI7vt; HGiHl: redirect("\141\165\x74\x68"); goto YA4Nk; YA4Nk: gXM_Y: goto xvcG5; mpvz_: show_error("\110\141\156\171\x61\x20\x41\x64\x6d\x69\156\x69\x73\164\x72\141\x74\157\162\40\x79\x61\x6e\x67\x20\x64\x69\142\x65\x72\x69\40\x68\x61\153\x20\x75\x6e\164\165\153\x20\155\145\156\147\x61\153\x73\x65\x73\x20\x68\141\154\x61\x6d\x61\156\x20\151\x6e\151\54\x20\74\141\40\x68\x72\145\x66\75\x22" . base_url("\144\141\x73\150\x62\157\141\162\x64") . "\x22\76\x4b\x65\155\x62\141\x6c\151\40\x6b\145\x20\x6d\x65\x6e\x75\40\141\x77\141\x6c\x3c\x2f\141\76", 403, "\101\153\163\x65\163\40\x54\x65\162\154\141\162\141\x6e\x67"); goto wYmMG; ZXhHX: $this->load->model("\104\141\163\150\142\x6f\x61\x72\x64\137\155\157\144\145\x6c", "\x64\x61\x73\150\x62\x6f\141\162\x64"); goto LNO6o; rWWPI: $this->form_validation->set_error_delimiters('', ''); goto Gd2Yn; EmowX: parent::__construct(); goto DZgzb; pI7vt: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\x72\x75"))) { goto McE6u; } goto mpvz_; LNO6o: $this->load->model("\x52\141\160\x6f\162\137\x6d\x6f\x64\145\154", "\x72\141\x70\157\162"); goto RVjBq; wYmMG: McE6u: goto QJfcQ; JtaPs: $this->load->model("\115\141\x73\164\145\162\137\x6d\157\144\145\154", "\155\x61\163\x74\x65\x72"); goto rWWPI; X3piZ: $this->load->model("\x44\162\x6f\x70\x64\x6f\x77\156\x5f\x6d\x6f\x64\145\x6c", "\144\162\157\160\x64\157\x77\x6e"); goto JtaPs; PapcO: I8yOk: goto HGiHl; Gd2Yn: } public function output_json($data, $encode = true) { goto hofFe; KqIAn: $this->output->set_content_type("\141\x70\160\x6c\151\x63\x61\x74\x69\x6f\x6e\x2f\x6a\163\157\156")->set_output($data); goto cJdm0; hofFe: if (!$encode) { goto JfFmm; } goto RhC6v; zZjgh: JfFmm: goto KqIAn; RhC6v: $data = json_encode($data); goto zZjgh; cJdm0: } function generateTahunMasuk($tp, $level) { goto GyEjr; NTr2T: if ($level == 7) { goto zrj1g; } goto qTbzq; nwZly: SnzxQ: goto Sr_OF; A3jgH: if ($level == 8) { goto XdZos; } goto NTr2T; oTYaI: $thn = $tahun - 1; goto d32Jw; GyEjr: $tahun = explode("\x2f", $tp)[0]; goto Tt8WY; reMyg: zrj1g: goto qfFQ8; uJjkp: goto eG4QU; goto ok4Al; ok4Al: XdZos: goto oTYaI; F1rQO: return $thn; goto bojrt; Tt8WY: $thn = $tahun; goto OXVkT; l_ygV: eG4QU: goto F1rQO; qTbzq: goto eG4QU; goto nwZly; Sr_OF: $thn = $tahun - 2; goto uJjkp; qfFQ8: $thn = $tahun; goto l_ygV; OXVkT: if ($level == 9) { goto SnzxQ; } goto A3jgH; d32Jw: goto eG4QU; goto reMyg; bojrt: } public function index() { goto P6r_B; CK7y1: $arrSmt = $this->dashboard->getSemester(); goto h6GyK; ool07: $data["\141\x72\162\x5f\x74\145\163\164"] = $thn_siswa; goto VwJzt; b_eEq: $siswas = $this->master->getDataInduk(); goto uwgn7; ZZEe6: $data["\160\162\157\x66\151\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto gBZBq; AGEZp: $data["\163\x69\163\167\141\x73"] = $siswas; goto OutLn; pyLM9: $data["\156\157\151\x6e\x64\x75\153"] = $noinduk; goto AGEZp; lf9mt: $uids = $this->db->select("\x69\x64\137\x73\151\x73\x77\x61\x2c\x20\165\151\144")->from("\155\x61\x73\x74\x65\x72\x5f\x73\151\163\167\x61")->get()->result(); goto dzkAC; uwgn7: $deskFisik = $this->rapor->getAllDeskripsiFisikKelas(); goto udtZL; mbR2T: $count_induk = $this->db->count_all("\x62\165\153\x75\137\x69\156\144\165\153"); goto ONxww; i1lhd: foreach ($siswas as $id_siswa => $siswa) { goto Kd6BV; z77F2: if ($siswa->tahun_masuk != null) { goto PMufB; } goto BXfcM; wcZ4x: foreach ($rapor_fisik as $rf) { goto XIGNy; CA7OL: foreach ($rf->fisik as $value) { $value->kondisi = unserialize($value->kondisi); R2jQ_: } goto vaWga; vaWga: S9viL: goto npE2s; npE2s: mqHmE: goto peNfT; XIGNy: $rf->fisik = unserialize($rf->fisik); goto CA7OL; peNfT: } goto VDPX4; VXth_: PzIz4: goto vhWy9; kUMRl: $berat = []; goto f39CM; Kd6BV: $rapor_fisik = isset($fisik_siswa[$id_siswa]) ? $fisik_siswa[$id_siswa] : []; goto wcZ4x; BXfcM: $tahunMasuk = ''; goto mcmxl; dZRoY: $data_tahun = [intval($tahunMasuk) . "\57" . (intval($tahunMasuk) + 1), intval($tahunMasuk) + 1 . "\57" . (intval($tahunMasuk) + 2), intval($tahunMasuk) + 2 . "\x2f" . (intval($tahunMasuk) + 3)]; goto Q87PL; f39CM: $tinggi = []; goto d9Ykw; ww9gx: $kelainan = []; goto OKi81; VDPX4: Rv8HT: goto z77F2; skdjl: $tahunMasuk = explode("\55", $siswa->tahun_masuk)[0]; goto VXth_; yjNx1: $noinduk[$siswa->id_siswa] = ["\x6e\x69\163" => $siswa->nis, "\x6e\x69\x73\x6e" => $siswa->nisn]; goto Gom3H; QKMeW: PMufB: goto skdjl; d9Ykw: $penyakit = []; goto ww9gx; vhWy9: if ($setting->jenjang == "\61") { goto imWV8; } goto dZRoY; Q87PL: goto XXltW; goto Y8nZO; f8vbw: Hret3: goto yjNx1; mcmxl: goto PzIz4; goto QKMeW; OKi81: foreach ($data_tahun as $dtp) { goto I8iu7; YAbzT: $kelainan[$dtp][1] = ''; goto YA8HJ; Tf1jV: $penyakit[$dtp][1] = ''; goto Z5Dzy; NNYz3: foreach ($rapor_fisik[$dtp]->fisik as $rf) { goto JWFvQ; Jv4h1: $tinggi[$dtp][$rf->id_smt] = $rf->tinggi; goto HvGza; JWFvQ: $berat[$dtp][$rf->id_smt] = $rf->berat; goto Jv4h1; HvGza: GfJw0: goto A7sGJ; A7sGJ: } goto f8QEE; f8QEE: iGnwB: goto LFoBM; KBVg_: $tinggi[$dtp][1] = ''; goto Lbt6n; OeWFB: if (!isset($rapor_fisik[$dtp])) { goto fb8zo; } goto NNYz3; seZPT: lIi7U: goto DlLii; LFoBM: fb8zo: goto seZPT; YA8HJ: $kelainan[$dtp][2] = ''; goto OeWFB; Z5Dzy: $penyakit[$dtp][2] = ''; goto YAbzT; Lbt6n: $tinggi[$dtp][2] = ''; goto Tf1jV; N1gUL: $berat[$dtp][2] = ''; goto KBVg_; I8iu7: $berat[$dtp][1] = ''; goto N1gUL; DlLii: } goto f8vbw; Y8nZO: imWV8: goto emsji; Zktq9: XXltW: goto kUMRl; emsji: $data_tahun = [intval($tahunMasuk) . "\57" . (intval($tahunMasuk) + 1), intval($tahunMasuk) + 1 . "\x2f" . (intval($tahunMasuk) + 2), intval($tahunMasuk) + 2 . "\x2f" . (intval($tahunMasuk) + 3), intval($tahunMasuk) + 3 . "\x2f" . (intval($tahunMasuk) + 4), intval($tahunMasuk) + 4 . "\x2f" . (intval($tahunMasuk) + 5), intval($tahunMasuk) + 5 . "\57" . (intval($tahunMasuk) + 6)]; goto Zktq9; NlOp9: HRxxf: goto dV3Wi; Gom3H: $data_siswa[$siswa->id_siswa] = ["\x6e\151\163" => $siswa->nis, "\x6e\151\163\x6e" => $siswa->nisn, "\x70\141\x67\145\61" => ["\101" => ["\x74\151\164\154\x65" => "\113\x45\124\105\x52\x41\x4e\107\x41\116\40\x54\x45\116\x54\101\x4e\107\x20\x44\x49\122\x49\x20\x53\x49\123\127\101", "\166\141\154\165\145" => ["\116\141\x6d\141\40\123\x69\163\x77\141" => ["\116\x61\x6d\x61\x20\114\x65\x6e\147\x6b\x61\160" => $siswa->nama, "\116\x61\x6d\x61\x20\x50\x61\156\x67\x67\x69\154\x61\156" => ''], "\x4a\x65\x6e\x69\163\x20\x4b\145\154\x61\x6d\151\156" => $siswa->jenis_kelamin, "\124\145\155\x70\x61\164\x20\144\x61\x6e\x20\124\147\154\x20\x4c\x61\150\151\162" => $siswa->tempat_lahir, "\101\147\141\155\x61" => $siswa->agama, "\x4b\145\167\x61\162\x67\141\x6e\145\147\141\x72\x61\x61\x6e" => $siswa->warga_negara, "\x41\x6e\141\x6b\x20\153\x65" => $siswa->anak_ke, "\x4a\x75\x6d\x6c\x61\x68\x20\123\x64\x72\56\40\x4b\x61\x6e\x64\x75\x6e\147" => '', "\112\165\x6d\154\x61\150\x20\123\x64\x72\x2e\40\x54\151\162\x69" => '', "\112\x75\155\154\x61\150\x20\123\144\x72\56\40\101\156\147\x6b\x61\164" => '', "\x41\156\x61\153\40\x59\x61\x74\x69\155\57\x59\x61\164\151\x6d\x20\120\x69\x61\164\165" => '', "\102\141\x68\x61\163\141\x20\x53\145\150\141\162\x69\x2d\x68\x61\162\x69" => '']], "\x42" => ["\x74\x69\x74\x6c\x65" => "\x4b\x45\124\x45\x52\101\x4e\x47\x41\x4e\40\x54\x45\115\x50\101\x54\40\124\x49\x4e\107\107\x41\x4c", "\x76\x61\x6c\165\x65" => ["\x41\x6c\x61\x6d\x61\164" => $siswa->alamat, "\x4e\157\x6d\157\162\x20\x54\x65\154\145\160\x6f\x6e" => $siswa->hp, "\x54\151\156\147\147\141\x6c\x20\102\x65\162\163\x61\x6d\141" => '', "\112\141\x72\x61\x6b\x20\x6b\145\x20\x53\145\153\x6f\154\141\150" => '']], "\103" => ["\164\x69\x74\154\145" => "\x4b\105\124\105\122\x41\x4e\107\101\x4e\x20\x4b\105\123\105\110\101\124\x41\x4e", "\x76\x61\x6c\165\145" => ["\107\157\x6c\x6f\x6e\x67\141\156\40\x44\x61\162\x61\150" => '', "\x4b\x65\x61\x64\141\141\156\x20\112\x61\x73\x6d\x61\156\151" => "\133\164\141\142\x6c\145\135"], "\164\x61\x62\154\145" => ["\164\141\x68\165\156" => $data_tahun, "\142\145\x72\x61\164" => $berat, "\164\x69\x6e\x67\x67\151" => $tinggi, "\x70\x65\x6e\x79\141\153\151\164" => $penyakit, "\153\x65\x6c\141\x69\x6e\x61\156" => $kelainan]], "\104" => ["\x74\x69\164\x6c\145" => "\x4b\105\124\105\x52\101\x4e\x47\x41\116\40\x50\x45\116\104\111\104\111\113\x41\x4e", "\166\141\154\x75\x65" => ["\120\145\x6e\144\x69\x64\x69\153\x61\x6e\x20\x53\145\142\x65\x6c\x75\155\x6e\x79\x61" => ["\x4c\x75\x6c\x75\163\x61\156\x20\x44\141\x72\x69" => $siswa->sekolah_asal, "\x4e\157\155\157\x72\x20\111\152\141\172\x61\x68" => ''], "\x50\x69\156\x64\x61\x68\141\156" => ["\x44\x61\162\151\x20\x53\145\x6b\157\x6c\141\x68" => '', "\101\154\141\x73\x61\156" => ''], "\104\151\x74\145\162\x69\155\x61\40\x44\151\163\x65\x6b\157\154\x61\150\x20\111\x6e\x69" => ["\x44\x69\x20\124\x69\156\147\x6b\141\164" => $siswa->kelas_awal, "\x4b\145\x6c\157\x6d\160\x6f\153" => '', "\x4a\165\162\x75\163\141\x6e" => '', "\x54\141\156\x67\x67\141\154" => $siswa->tahun_masuk]]]], "\x70\x61\147\x65\62" => ["\105" => ["\x74\151\164\x6c\145" => "\x4b\x45\124\x45\122\x41\116\x47\101\x4e\x20\x54\105\x4e\x54\101\116\107\x20\x41\131\x41\110\40\x4b\101\x4e\x44\125\x4e\107", "\166\x61\x6c\x75\x65" => ["\x4e\x61\155\141" => $siswa->nama_ayah, "\x54\x65\x6d\x70\141\x74\x20\144\141\x6e\40\124\141\x6e\147\x67\x61\x6c\x20\114\x61\150\x69\162" => $siswa->tgl_lahir_ayah, "\x41\147\141\155\141" => '', "\113\x65\x77\141\x72\147\141\156\145\x67\141\162\x61\x61\156" => '', "\x50\x65\156\144\x69\144\x69\153\x61\156" => $siswa->pendidikan_ayah, "\x50\x65\x6b\x65\162\x6a\x61\x61\x6e" => $siswa->pekerjaan_ayah, "\x50\x65\x6e\x67\150\x61\x73\x69\154\141\156\40\x70\x65\162\40\102\165\154\141\x6e" => '', "\101\x6c\x61\x6d\x61\164\40\57\40\116\x6f\x6d\157\162\x20\124\x65\154\145\160\157\156" => $siswa->nohp_ayah, "\x4b\145\142\x65\162\141\x64\x61\141\156\x20\101\171\x61\150" => "\x4d\x61\x73\x69\x68\40\x48\x69\144\x75\x70\40\57\x20\115\x65\156\x69\x6e\147\147\x61\154\40\104\165\x6e\151\x61\x20\x54\141\x68\165\x6e\x3a\40\56\56\56\x2e\56\56\56\56"]], "\x46" => ["\x74\151\164\x6c\145" => "\x4b\105\124\x45\122\101\116\x47\x41\x4e\40\124\x45\116\x54\x41\x4e\107\40\x49\x42\125\x20\113\x41\x4e\x44\125\x4e\107", "\166\x61\x6c\x75\x65" => ["\116\x61\x6d\141" => $siswa->nama_ayah, "\x54\x65\x6d\160\x61\x74\40\x64\x61\156\x20\124\x61\x6e\147\147\x61\154\x20\x4c\x61\150\x69\x72" => $siswa->tgl_lahir_ayah, "\x41\x67\141\155\x61" => '', "\x4b\145\167\x61\x72\147\141\x6e\x65\x67\x61\x72\x61\x61\156" => '', "\x50\x65\x6e\144\x69\x64\151\153\x61\x6e" => $siswa->pendidikan_ayah, "\120\145\x6b\x65\x72\152\141\x61\156" => $siswa->pekerjaan_ayah, "\120\x65\x6e\147\x68\x61\x73\x69\x6c\x61\156\40\160\x65\x72\40\x42\x75\x6c\x61\156" => '', "\x41\x6c\x61\x6d\141\164\x20\57\x20\116\157\x6d\x6f\x72\40\124\x65\154\145\160\x6f\156" => $siswa->nohp_ayah, "\113\x65\x62\x65\162\141\144\x61\141\156\x20\x49\x62\165" => "\x4d\x61\163\151\x68\40\x48\151\x64\165\160\40\57\40\x4d\145\156\x69\x6e\x67\147\x61\154\x20\104\165\x6e\151\x61\x20\124\141\x68\165\156"]], "\107" => ["\164\151\164\154\x65" => "\x4b\105\x54\105\122\x41\116\107\x41\x4e\40\124\x45\116\124\101\116\x47\x20\x57\101\114\111", "\166\141\154\x75\x65" => ["\x4e\x61\155\141" => $siswa->nama_ayah, "\x54\x65\x6d\160\141\164\40\x64\x61\x6e\40\124\141\156\x67\147\141\154\x20\114\141\150\x69\x72" => $siswa->tgl_lahir_ayah, "\x41\x67\141\155\141" => '', "\113\x65\167\141\x72\147\x61\156\x65\147\x61\x72\x61\x61\x6e" => '', "\120\x65\x6e\x64\x69\144\x69\x6b\141\x6e" => $siswa->pendidikan_ayah, "\x50\x65\153\x65\x72\152\x61\141\156" => $siswa->pekerjaan_ayah, "\120\145\x6e\147\150\x61\x73\151\154\x61\x6e\40\160\145\x72\x20\102\x75\154\141\156" => '', "\101\x6c\x61\x6d\141\164\x20\x2f\x20\116\x6f\x6d\157\x72\40\x54\145\154\x65\160\157\156" => $siswa->nohp_ayah]], "\x48" => ["\x74\151\x74\154\x65" => "\113\105\x47\105\x4d\101\122\101\x4e\40\x53\x49\123\127\101", "\166\141\x6c\165\x65" => ["\113\145\163\145\x6e\x69\141\x6e" => '', "\x4f\154\141\x68\x20\x52\x61\147\141" => '', "\x4f\162\x67\141\156\151\x73\x61\163\x69" => '', "\x4c\141\151\156\xe2\x80\223\154\x61\151\156" => '']]], "\160\141\147\145\x33" => ["\111" => ["\164\x69\x74\154\x65" => "\113\105\x54\105\x52\x41\116\107\101\116\x20\x50\x45\122\x4b\x45\115\102\x41\x4e\x47\x41\116\40\123\x49\x53\127\x41", "\166\141\154\x75\x65" => ["\x4d\x65\156\x65\162\x69\155\x61\x20\102\x65\x61\40\x53\x69\163\x77\x61" => "\133\x74\141\x68\165\x6e\135", "\115\x65\156\151\x6e\147\147\x61\154\x6b\141\x6e\x20\123\145\x6b\157\154\141\x68" => ["\x54\141\156\147\x67\141\x6c" => '', "\x41\x6c\141\163\x61\156" => ''], "\101\153\x68\151\x72\x20\x50\x65\x6e\x64\x69\x64\151\x6b\141\x6e" => ["\124\141\155\x61\x74\x20\102\145\x6c\x61\152\x61\162" => $siswa->tahun_lulus, "\116\157\x6d\x6f\162\40\111\152\141\x7a\141\x68" => $siswa->no_ijazah]], "\x74\x61\150\165\156" => ["\x54\x61\150\165\156\x20\x2e\x2e\56\56\x2e\56\x2e\56\x2e\56\56\x2e\57\40\x54\x4b\40\xe2\x80\246\xe2\x80\246\342\200\xa6\342\x80\246\xe2\200\xa6\342\200\xa6\xe2\200\xa6\xe2\200\246\56\56\144\x61\162\x69\xe2\x80\246\342\200\246\xe2\200\xa6\xe2\x80\246\342\200\246\342\200\xa6\xe2\x80\246\342\x80\xa6\x2e\x2e", "\124\141\150\x75\x6e\40\x2e\56\56\x2e\56\x2e\56\56\x2e\x2e\x2e\x2e\x2f\x20\124\113\x20\xe2\200\246\342\200\246\342\x80\246\342\200\246\342\x80\xa6\342\x80\246\xe2\200\xa6\xe2\200\xa6\56\56\144\x61\162\x69\342\x80\246\xe2\x80\246\342\x80\246\342\200\246\342\x80\xa6\xe2\x80\xa6\xe2\x80\xa6\xe2\200\246\x2e\x2e", "\x54\141\150\165\x6e\40\x2e\56\56\x2e\56\56\56\56\56\x2e\56\56\x2f\x20\124\113\40\xe2\200\xa6\xe2\x80\xa6\342\x80\xa6\342\x80\246\xe2\200\xa6\xe2\x80\246\xe2\x80\xa6\xe2\x80\246\56\x2e\144\x61\162\x69\342\x80\xa6\xe2\200\xa6\xe2\200\246\xe2\200\xa6\342\200\246\xe2\200\246\342\x80\246\342\x80\xa6\x2e\56"]], "\112" => ["\x74\x69\x74\154\x65" => "\x4b\x45\124\x45\x52\x41\116\107\101\116\40\123\x45\124\x45\x4c\101\110\40\x53\x45\x4c\105\x53\x41\111\40\x50\x45\x4e\x44\111\x44\x49\113\x41\x4e", "\x76\141\154\165\145" => ["\x4d\x65\154\x61\x6e\152\x75\164\153\141\156\40\x64\151" => '', "\102\x65\x6b\145\162\x6a\141" => ["\124\141\156\x67\147\x61\x6c\40\x4d\x75\x6c\141\x69\x20\x42\145\x6b\x65\x72\152\x61" => '', "\x4e\141\x6d\141\40\124\145\155\160\141\164\40\x42\145\153\x65\162\x6a\141" => '', "\x50\x65\156\147\x68\141\x73\x69\154\141\156" => '']]], "\113" => ["\164\151\164\154\145" => "\114\x41\111\116\40\xe2\200\x93\40\114\101\111\116", "\x76\x61\154\x75\145" => ["\103\x61\x74\141\x74\x61\156\x20\131\x61\x6e\147\40\120\145\x6e\x74\151\x6e\x67" => '']]]]; goto NlOp9; dV3Wi: } goto A0qmi; p03CX: $this->load->view("\163\145\x74\x74\151\156\147\57\151\x6e\144\x75\153"); goto yYCCc; IDdKR: vX5pb: goto b_eEq; xD0sX: $data = ["\165\x73\x65\162" => $user, "\152\x75\144\165\x6c" => "\102\165\x6b\x75\x20\111\156\144\165\x6b", "\163\x75\x62\152\165\144\x75\154" => "\x42\x75\x6b\x75\40\x49\156\144\165\x6b", "\163\x65\x74\x74\x69\156\x67" => $setting]; goto IWnnm; uIuTV: $thn_siswa = []; goto i1lhd; OkPHP: $data["\163\x6d\164\137\141\143\164\x69\x76\x65"] = $smt; goto ZZEe6; OJvh5: $data["\163\155\x74"] = $arrSmt; goto OkPHP; IWnnm: $arrTp = $this->dashboard->getTahun(); goto CK7y1; qpAnZ: $this->load->view("\x5f\164\145\x6d\160\x6c\x61\164\145\163\x2f\144\x61\x73\150\x62\x6f\141\162\144\57\137\x68\145\x61\x64\145\x72", $data); goto p03CX; UhFhf: zxqKI: goto IDdKR; h6GyK: $tp = $this->dashboard->getTahunActive(); goto JujGh; tcJny: $setting = $this->dashboard->getSetting(); goto xD0sX; A0qmi: R1Y6O: goto feekU; gBZBq: $count_siswa = $this->db->count_all("\155\x61\163\x74\145\162\137\x73\151\163\x77\x61"); goto mbR2T; P6r_B: $user = $this->ion_auth->user()->row(); goto tcJny; obcPL: $data["\164\x70\137\x61\143\x74\151\166\145"] = $tp; goto OJvh5; dzkAC: foreach ($uids as $uid) { goto Eu1sp; cdYiU: zmvA_: goto Fftwq; JdTci: $this->db->insert("\x62\165\x6b\x75\137\151\156\144\165\153", $uid); goto cdYiU; QA1dT: if (!($check->get()->num_rows() == 0)) { goto zmvA_; } goto JdTci; Eu1sp: $check = $this->db->select("\151\x64\x5f\163\151\x73\167\x61")->from("\142\165\153\165\x5f\x69\x6e\144\165\153")->where("\x69\144\137\x73\x69\163\167\x61", $uid->id_siswa); goto QA1dT; Fftwq: V6PB9: goto PEgOU; PEgOU: } goto UhFhf; zgglY: $data["\x74\160"] = $arrTp; goto obcPL; feekU: $data["\x72\x61\x70\x6f\x72\137\146\151\x73\151\x6b"] = $rapor_fisik; goto pyLM9; yYCCc: $this->load->view("\x5f\164\x65\x6d\x70\154\141\164\145\x73\x2f\144\x61\x73\150\142\157\141\x72\x64\57\x5f\x66\x6f\157\x74\x65\x72"); goto ljF32; HvAA7: $data["\x6a\165\x6d\x6c\141\150\137\x6c\165\154\x75\x73"] = $this->rapor->getJumlahLulus($tp->id_tp - 1, "\x32", $level); goto qpAnZ; VwJzt: $level = $setting->jenjang == "\x31" ? "\66" : ($setting->jenjang == "\x32" ? "\71" : ($setting->jenjang == "\x31" ? "\x33" : "\x31\x32")); goto HvAA7; OutLn: $data["\x64\145\x74\x61\x69\154"] = $data_siswa; goto ool07; IqG2F: $data_siswa = []; goto uIuTV; JujGh: $smt = $this->dashboard->getSemesterActive(); goto zgglY; udtZL: $fisik_siswa = $this->rapor->getAllRaporFisik(); goto IqG2F; ONxww: if (!($count_siswa > $count_induk)) { goto vX5pb; } goto lf9mt; ljF32: } }
